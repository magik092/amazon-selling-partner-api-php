<?php
/**
 * All Rights Reserved
 * @copyright Copyright (C) 2021 Apilo.com
 */

namespace Webcom\Amazon\Rest;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class AmazonTransportClient
 *
 * Implements ClientInterface via composition rather than extending Guzzle's Client,
 * because Guzzle 7's Client is marked @final and its ClientInterface::request()/getConfig()
 * signatures are typed, while Guzzle 6's ClientInterface leaves $method/$option untyped.
 * The $method/$option parameters below are intentionally left untyped so this class
 * remains a valid implementation of ClientInterface under both Guzzle 6.5.x and 7.15.x.
 *
 * @author magik092
 */
class AmazonTransportClient implements ClientInterface
{
    private ?RequestSigner $requestSigner = null;
    private string $userAgent;
    private Client $client;

    /**
     * AmazonTransportClient constructor.
     * @param array $config
     * @param string $userAgent
     */
    public function __construct(array $config = [], string $userAgent = 'ErpBox.pl/1.0')
    {
        $handlerStack = HandlerStack::create();
        $handlerStack->push(
            function (callable $handler) use ($handlerStack) {
                return function (RequestInterface $request, array $options) use ($handlerStack, $handler) {
                    return $this->signRequest($request, $options, $handler);
                };
            }
        );
        $config = array_merge_recursive(
            $config,
            [
                'handler' => $handlerStack,
            ]
        );
        $this->userAgent = $userAgent;
        $this->client = new Client($config);
    }

    /**
     * @inheritDoc
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        return $this->client->send($request, $options);
    }

    /**
     * @inheritDoc
     */
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        return $this->client->sendAsync($request, $options);
    }

    /**
     * @inheritDoc
     * @param string $method
     * @param string|UriInterface $uri
     */
    public function request($method, $uri, array $options = []): ResponseInterface
    {
        return $this->client->request($method, $uri, $options);
    }

    /**
     * @inheritDoc
     * @param string $method
     * @param string|UriInterface $uri
     */
    public function requestAsync($method, $uri, array $options = []): PromiseInterface
    {
        return $this->client->requestAsync($method, $uri, $options);
    }

    /**
     * @inheritDoc
     * @param string|null $option
     */
    public function getConfig($option = null)
    {
        return $this->client->getConfig($option);
    }

    /**
     * @return RequestSigner|null
     */
    public function getRequestSigner(): ?RequestSigner
    {
        return $this->requestSigner;
    }

    /**
     * @param RequestSigner|null $requestSigner
     * @return self
     */
    public function setRequestSigner(?RequestSigner $requestSigner): self
    {
        $this->requestSigner = $requestSigner;
        return $this;
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @param callable $handler
     * @return mixed
     */
    private function signRequest(RequestInterface $request, array $options, callable $handler)
    {
        if ($this->requestSigner) {
            if($this->requestSigner->getCredentials()->getRestrictedDataToken()
                && !$this->requestSigner->getCredentials()->getRestrictedDataToken()->isTokenExpired()
                // prevent to get RDT token using RDT token
                && strpos($request->getUri()->getPath(), '/restrictedDataToken') === false
            ) {
                $token = $this->requestSigner->getCredentials()->getRestrictedDataToken()->getToken();
            } else {
                $token = $this->requestSigner->getCredentials()->getAccessToken();
            }
            $request = $request->withHeader('user-agent', $this->userAgent . ' (Language=PHP/' . PHP_VERSION . ')');
            // if isn't authorization request, attach access/rdt token
            if ($token && $request->getUri()->getHost() !== 'api.amazon.com' && strpos($request->getUri()->getPath(), '/authorization/') !== 0) {
                $request = $request->withHeader('x-amz-access-token', [$token]);
            }
            $request = $this->requestSigner->signRequest($request);
        }

        return $handler($request, $options);
    }
}
