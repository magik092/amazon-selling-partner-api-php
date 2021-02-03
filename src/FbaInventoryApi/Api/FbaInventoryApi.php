<?php
/**
 * FbaInventoryApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FbaInventoryApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FbaInventoryApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Webcom\Amazon\Rest\FbaInventoryApi\ApiException;
use Webcom\Amazon\Rest\Configuration;
use Webcom\Amazon\Rest\HeaderSelector;
use Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FbaInventoryApi Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FbaInventoryApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FbaInventoryApi
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
     * Operation getInventorySummaries
     *
     * @param  string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param  string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \Webcom\Amazon\Rest\FbaInventoryApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse
     */
    public function getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details = false, $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        list($response) = $this->getInventorySummariesWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);
        return $response;
    }

    /**
     * Operation getInventorySummariesWithHttpInfo
     *
     * @param  string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param  string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \Webcom\Amazon\Rest\FbaInventoryApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse|\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventorySummariesWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details = false, $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        $request = $this->getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

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
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse';
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
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInventorySummariesAsync
     *
     * 
     *
     * @param  string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param  string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsync($granularity_type, $granularity_id, $marketplace_ids, $details = false, $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        return $this->getInventorySummariesAsyncWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventorySummariesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param  string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsyncWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details = false, $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        $returnType = '\Webcom\Amazon\Rest\FbaInventoryApi\Model\GetInventorySummariesResponse';
        $request = $this->getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

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
     * Create request for operation 'getInventorySummaries'
     *
     * @param  string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param  string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details = false, $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        // verify the required parameter 'granularity_type' is set
        if ($granularity_type === null || (is_array($granularity_type) && count($granularity_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularity_type when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'granularity_id' is set
        if ($granularity_id === null || (is_array($granularity_id) && count($granularity_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularity_id when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getInventorySummaries'
            );
        }
        if (count($marketplace_ids) > 1) {
            throw new \InvalidArgumentException('invalid value for "$marketplace_ids" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 1.');
        }

        if ($seller_skus !== null && count($seller_skus) > 50) {
            throw new \InvalidArgumentException('invalid value for "$seller_skus" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 50.');
        }


        $resourcePath = '/fba/inventory/v1/summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($details)) {
            $details = ObjectSerializer::serializeCollection($details, '', true);
        }
        if ($details !== null) {
            $queryParams['details'] = $details;
        }
        // query params
        if (is_array($granularity_type)) {
            $granularity_type = ObjectSerializer::serializeCollection($granularity_type, '', true);
        }
        if ($granularity_type !== null) {
            $queryParams['granularityType'] = $granularity_type;
        }
        // query params
        if (is_array($granularity_id)) {
            $granularity_id = ObjectSerializer::serializeCollection($granularity_id, '', true);
        }
        if ($granularity_id !== null) {
            $queryParams['granularityId'] = $granularity_id;
        }
        // query params
        if (is_array($start_date_time)) {
            $start_date_time = ObjectSerializer::serializeCollection($start_date_time, '', true);
        }
        if ($start_date_time !== null) {
            $queryParams['startDateTime'] = $start_date_time;
        }
        // query params
        if (is_array($seller_skus)) {
            $seller_skus = ObjectSerializer::serializeCollection($seller_skus, 'form', true);
        }
        if ($seller_skus !== null) {
            $queryParams['sellerSkus'] = $seller_skus;
        }
        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['nextToken'] = $next_token;
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
