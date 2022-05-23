<?php
/**
 * ListingsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Listings Restrictions
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings.  For more information, see the [Listings Restrictions API Use Case Guide](doc:listings-restrictions-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\ApiException;
use Webcom\Amazon\Rest\Configuration;
use Webcom\Amazon\Rest\HeaderSelector;
use Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ListingsApi Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListingsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getListingsRestrictions
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $sellerId A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $conditionType The condition used to filter restrictions. (optional)
     * @param  string $reasonLocale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]
     */
    public function getListingsRestrictions($asin, $sellerId, $marketplaceIds, $conditionType = null, $reasonLocale = null)
    {
        list($response) = $this->getListingsRestrictionsWithHttpInfo($asin, $sellerId, $marketplaceIds, $conditionType, $reasonLocale);
        return $response;
    }

    /**
     * Operation getListingsRestrictionsWithHttpInfo
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $sellerId A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $conditionType The condition used to filter restrictions. (optional)
     * @param  string $reasonLocale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]|\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getListingsRestrictionsWithHttpInfo($asin, $sellerId, $marketplaceIds, $conditionType = null, $reasonLocale = null)
    {
        $request = $this->getListingsRestrictionsRequest($asin, $sellerId, $marketplaceIds, $conditionType, $reasonLocale);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 413:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getListingsRestrictionsAsync
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $sellerId A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $conditionType The condition used to filter restrictions. (optional)
     * @param  string $reasonLocale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingsRestrictionsAsync($asin, $sellerId, $marketplaceIds, $conditionType = null, $reasonLocale = null)
    {
        return $this->getListingsRestrictionsAsyncWithHttpInfo($asin, $sellerId, $marketplaceIds, $conditionType, $reasonLocale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingsRestrictionsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $sellerId A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $conditionType The condition used to filter restrictions. (optional)
     * @param  string $reasonLocale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingsRestrictionsAsyncWithHttpInfo($asin, $sellerId, $marketplaceIds, $conditionType = null, $reasonLocale = null)
    {
        $returnType = '\Webcom\Amazon\Rest\ListingsRestrictionsApiV20210801\Model\RestrictionList';
        $request = $this->getListingsRestrictionsRequest($asin, $sellerId, $marketplaceIds, $conditionType, $reasonLocale);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getListingsRestrictions'
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  string $sellerId A selling partner identifier, such as a merchant account. (required)
     * @param  string[] $marketplaceIds A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param  string $conditionType The condition used to filter restrictions. (optional)
     * @param  string $reasonLocale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getListingsRestrictionsRequest($asin, $sellerId, $marketplaceIds, $conditionType = null, $reasonLocale = null)
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getListingsRestrictions'
            );
        }
        // verify the required parameter 'sellerId' is set
        if ($sellerId === null || (is_array($sellerId) && count($sellerId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sellerId when calling getListingsRestrictions'
            );
        }
        // verify the required parameter 'marketplaceIds' is set
        if ($marketplaceIds === null || (is_array($marketplaceIds) && count($marketplaceIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceIds when calling getListingsRestrictions'
            );
        }

        $resourcePath = '/listings/2021-08-01/restrictions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($asin)) {
            $asin = ObjectSerializer::serializeCollection($asin, '', true);
        }
        if ($asin !== null) {
            $queryParams['asin'] = $asin;
        }
        // query params
        if (is_array($conditionType)) {
            $conditionType = ObjectSerializer::serializeCollection($conditionType, '', true);
        }
        if ($conditionType !== null) {
            $queryParams['conditionType'] = $conditionType;
        }
        // query params
        if (is_array($sellerId)) {
            $sellerId = ObjectSerializer::serializeCollection($sellerId, '', true);
        }
        if ($sellerId !== null) {
            $queryParams['sellerId'] = $sellerId;
        }
        // query params
        if (is_array($marketplaceIds)) {
            $marketplaceIds = ObjectSerializer::serializeCollection($marketplaceIds, 'form', true);
        }
        if ($marketplaceIds !== null) {
            $queryParams['marketplaceIds'] = $marketplaceIds;
        }
        // query params
        if (is_array($reasonLocale)) {
            $reasonLocale = ObjectSerializer::serializeCollection($reasonLocale, '', true);
        }
        if ($reasonLocale !== null) {
            $queryParams['reasonLocale'] = $reasonLocale;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
