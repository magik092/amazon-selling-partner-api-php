<?php
/**
 * Query20231115
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\DataKioskApi20231115
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Data Kiosk
 *
 * The Selling Partner API for Data Kiosk lets you submit GraphQL queries from a variety of schemas to help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2023-11-15
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\DataKioskApi20231115\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Query20231115 Class Doc Comment
 *
 * @category Class
 * @description Detailed information about the query.
 * @package  Webcom\Amazon\Rest\DataKioskApi20231115
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Query20231115 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Query';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'queryId'             => 'string',
        'query'               => 'string',
        'createdTime'         => '\DateTime',
        'processingStatus'    => 'string',
        'processingStartTime' => '\DateTime',
        'processingEndTime'   => '\DateTime',
        'dataDocumentId'      => 'string',
        'errorDocumentId'     => 'string',
        'pagination'          => '\Webcom\Amazon\Rest\DataKioskApi20231115\Model\QueryPagination20231115',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'queryId'             => null,
        'query'               => null,
        'createdTime'         => 'date-time',
        'processingStatus'    => null,
        'processingStartTime' => 'date-time',
        'processingEndTime'   => 'date-time',
        'dataDocumentId'      => null,
        'errorDocumentId'     => null,
        'pagination'          => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'queryId'             => 'queryId',
        'query'               => 'query',
        'createdTime'         => 'createdTime',
        'processingStatus'    => 'processingStatus',
        'processingStartTime' => 'processingStartTime',
        'processingEndTime'   => 'processingEndTime',
        'dataDocumentId'      => 'dataDocumentId',
        'errorDocumentId'     => 'errorDocumentId',
        'pagination'          => 'pagination',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'queryId'             => 'setQueryId',
        'query'               => 'setQuery',
        'createdTime'         => 'setCreatedTime',
        'processingStatus'    => 'setProcessingStatus',
        'processingStartTime' => 'setProcessingStartTime',
        'processingEndTime'   => 'setProcessingEndTime',
        'dataDocumentId'      => 'setDataDocumentId',
        'errorDocumentId'     => 'setErrorDocumentId',
        'pagination'          => 'setPagination',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'queryId'             => 'getQueryId',
        'query'               => 'getQuery',
        'createdTime'         => 'getCreatedTime',
        'processingStatus'    => 'getProcessingStatus',
        'processingStartTime' => 'getProcessingStartTime',
        'processingEndTime'   => 'getProcessingEndTime',
        'dataDocumentId'      => 'getDataDocumentId',
        'errorDocumentId'     => 'getErrorDocumentId',
        'pagination'          => 'getPagination',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PROCESSING_STATUS_CANCELLED = 'CANCELLED';
    const PROCESSING_STATUS_DONE = 'DONE';
    const PROCESSING_STATUS_FATAL = 'FATAL';
    const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['queryId'] = $data['queryId'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['createdTime'] = $data['createdTime'] ?? null;
        $this->container['processingStatus'] = $data['processingStatus'] ?? null;
        $this->container['processingStartTime'] = $data['processingStartTime'] ?? null;
        $this->container['processingEndTime'] = $data['processingEndTime'] ?? null;
        $this->container['dataDocumentId'] = $data['dataDocumentId'] ?? null;
        $this->container['errorDocumentId'] = $data['errorDocumentId'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['queryId'] === null) {
            $invalidProperties[] = "'queryId' can't be null";
        }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
        if ($this->container['processingStatus'] === null) {
            $invalidProperties[] = "'processingStatus' can't be null";
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processingStatus']) && !in_array($this->container['processingStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processingStatus', must be one of '%s'",
                $this->container['processingStatus'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets queryId
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
     * Sets queryId
     *
     * @param string $queryId The query identifier. This identifier is unique only in combination with a selling partner account ID.
     *
     * @return self
     */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query The submitted query.
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param \DateTime $createdTime The date and time when the query was created, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets processingStatus
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processingStatus'];
    }

    /**
     * Sets processingStatus
     *
     * @param string $processingStatus The processing status of the query.
     *
     * @return self
     */
    public function setProcessingStatus($processingStatus)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($processingStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processingStatus', must be one of '%s'",
                    $processingStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processingStatus'] = $processingStatus;

        return $this;
    }

    /**
     * Gets processingStartTime
     *
     * @return \DateTime|null
     */
    public function getProcessingStartTime()
    {
        return $this->container['processingStartTime'];
    }

    /**
     * Sets processingStartTime
     *
     * @param \DateTime|null $processingStartTime The date and time when the query processing started, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingStartTime($processingStartTime)
    {
        $this->container['processingStartTime'] = $processingStartTime;

        return $this;
    }

    /**
     * Gets processingEndTime
     *
     * @return \DateTime|null
     */
    public function getProcessingEndTime()
    {
        return $this->container['processingEndTime'];
    }

    /**
     * Sets processingEndTime
     *
     * @param \DateTime|null $processingEndTime The date and time when the query processing completed, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingEndTime($processingEndTime)
    {
        $this->container['processingEndTime'] = $processingEndTime;

        return $this;
    }

    /**
     * Gets dataDocumentId
     *
     * @return string|null
     */
    public function getDataDocumentId()
    {
        return $this->container['dataDocumentId'];
    }

    /**
     * Sets dataDocumentId
     *
     * @param string|null $dataDocumentId The data document identifier. This identifier is only present when there is data available as a result of the query. This identifier is unique only in combination with a selling partner account ID. Pass this identifier into the `getDocument` operation to get the information required to retrieve the data document's contents.
     *
     * @return self
     */
    public function setDataDocumentId($dataDocumentId)
    {
        $this->container['dataDocumentId'] = $dataDocumentId;

        return $this;
    }

    /**
     * Gets errorDocumentId
     *
     * @return string|null
     */
    public function getErrorDocumentId()
    {
        return $this->container['errorDocumentId'];
    }

    /**
     * Sets errorDocumentId
     *
     * @param string|null $errorDocumentId The error document identifier. This identifier is only present when an error occurs during query processing. This identifier is unique only in combination with a selling partner account ID. Pass this identifier into the `getDocument` operation to get the information required to retrieve the error document's contents.
     *
     * @return self
     */
    public function setErrorDocumentId($errorDocumentId)
    {
        $this->container['errorDocumentId'] = $errorDocumentId;

        return $this;
    }

    /**
     * Gets pagination
     *
     * @return \Webcom\Amazon\Rest\DataKioskApi20231115\Model\QueryPagination20231115|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \Webcom\Amazon\Rest\DataKioskApi20231115\Model\QueryPagination20231115|null $pagination pagination
     *
     * @return self
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

