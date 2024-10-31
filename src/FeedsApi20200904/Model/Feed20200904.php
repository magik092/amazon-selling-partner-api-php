<?php
/**
 * Feed20200904
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Feeds
 *
 * Effective **June 27, 2024**, the Selling Partner API for Feeds v2020-09-04 will no longer be available and all calls to it will fail. Integrations that rely on the Feeds API must migrate to [Feeds v2021-06-30](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference) to avoid service disruption.
 *
 * The version of the OpenAPI document: 2020-09-04
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FeedsApi20200904\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Feed20200904 Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Feed20200904 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Feed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feedId' => 'string',
        'feedType' => 'string',
        'marketplaceIds' => 'string[]',
        'createdTime' => '\DateTime',
        'processingStatus' => 'string',
        'processingStartTime' => '\DateTime',
        'processingEndTime' => '\DateTime',
        'resultFeedDocumentId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feedId' => null,
        'feedType' => null,
        'marketplaceIds' => null,
        'createdTime' => 'date-time',
        'processingStatus' => null,
        'processingStartTime' => 'date-time',
        'processingEndTime' => 'date-time',
        'resultFeedDocumentId' => null
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
        'feedId' => 'feedId',
        'feedType' => 'feedType',
        'marketplaceIds' => 'marketplaceIds',
        'createdTime' => 'createdTime',
        'processingStatus' => 'processingStatus',
        'processingStartTime' => 'processingStartTime',
        'processingEndTime' => 'processingEndTime',
        'resultFeedDocumentId' => 'resultFeedDocumentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedId' => 'setFeedId',
        'feedType' => 'setFeedType',
        'marketplaceIds' => 'setMarketplaceIds',
        'createdTime' => 'setCreatedTime',
        'processingStatus' => 'setProcessingStatus',
        'processingStartTime' => 'setProcessingStartTime',
        'processingEndTime' => 'setProcessingEndTime',
        'resultFeedDocumentId' => 'setResultFeedDocumentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedId' => 'getFeedId',
        'feedType' => 'getFeedType',
        'marketplaceIds' => 'getMarketplaceIds',
        'createdTime' => 'getCreatedTime',
        'processingStatus' => 'getProcessingStatus',
        'processingStartTime' => 'getProcessingStartTime',
        'processingEndTime' => 'getProcessingEndTime',
        'resultFeedDocumentId' => 'getResultFeedDocumentId'
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
        $this->container['feedId'] = $data['feedId'] ?? null;
        $this->container['feedType'] = $data['feedType'] ?? null;
        $this->container['marketplaceIds'] = $data['marketplaceIds'] ?? null;
        $this->container['createdTime'] = $data['createdTime'] ?? null;
        $this->container['processingStatus'] = $data['processingStatus'] ?? null;
        $this->container['processingStartTime'] = $data['processingStartTime'] ?? null;
        $this->container['processingEndTime'] = $data['processingEndTime'] ?? null;
        $this->container['resultFeedDocumentId'] = $data['resultFeedDocumentId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['feedId'] === null) {
            $invalidProperties[] = "'feedId' can't be null";
        }
        if ($this->container['feedType'] === null) {
            $invalidProperties[] = "'feedType' can't be null";
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
     * Gets feedId
     *
     * @return string
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param string $feedId The identifier for the feed. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

        return $this;
    }

    /**
     * Gets feedType
     *
     * @return string
     */
    public function getFeedType()
    {
        return $this->container['feedType'];
    }

    /**
     * Sets feedType
     *
     * @param string $feedType The feed type.
     *
     * @return self
     */
    public function setFeedType($feedType)
    {
        $this->container['feedType'] = $feedType;

        return $this;
    }

    /**
     * Gets marketplaceIds
     *
     * @return string[]|null
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[]|null $marketplaceIds A list of identifiers for the marketplaces that the feed is applied to.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplaceIds)
    {
        $this->container['marketplaceIds'] = $marketplaceIds;

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
     * @param \DateTime $createdTime The date and time when the feed was created, in ISO 8601 date time format.
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
     * @param string $processingStatus The processing status of the feed.
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
     * @param \DateTime|null $processingStartTime The date and time when feed processing started, in ISO 8601 date time format.
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
     * @param \DateTime|null $processingEndTime The date and time when feed processing completed, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingEndTime($processingEndTime)
    {
        $this->container['processingEndTime'] = $processingEndTime;

        return $this;
    }

    /**
     * Gets resultFeedDocumentId
     *
     * @return string|null
     */
    public function getResultFeedDocumentId()
    {
        return $this->container['resultFeedDocumentId'];
    }

    /**
     * Sets resultFeedDocumentId
     *
     * @param string|null $resultFeedDocumentId The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setResultFeedDocumentId($resultFeedDocumentId)
    {
        $this->container['resultFeedDocumentId'] = $resultFeedDocumentId;

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
     * @param mixed    $value  Value to be set
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


