<?php
/**
 * CreateFeedSpecification20200904
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
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
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
 * CreateFeedSpecification20200904 Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateFeedSpecification20200904 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFeedSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feedType' => 'string',
        'marketplaceIds' => 'string[]',
        'inputFeedDocumentId' => 'string',
        'feedOptions' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feedType' => null,
        'marketplaceIds' => null,
        'inputFeedDocumentId' => null,
        'feedOptions' => null
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
        'feedType' => 'feedType',
        'marketplaceIds' => 'marketplaceIds',
        'inputFeedDocumentId' => 'inputFeedDocumentId',
        'feedOptions' => 'feedOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedType' => 'setFeedType',
        'marketplaceIds' => 'setMarketplaceIds',
        'inputFeedDocumentId' => 'setInputFeedDocumentId',
        'feedOptions' => 'setFeedOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedType' => 'getFeedType',
        'marketplaceIds' => 'getMarketplaceIds',
        'inputFeedDocumentId' => 'getInputFeedDocumentId',
        'feedOptions' => 'getFeedOptions'
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
        $this->container['feedType'] = $data['feedType'] ?? null;
        $this->container['marketplaceIds'] = $data['marketplaceIds'] ?? null;
        $this->container['inputFeedDocumentId'] = $data['inputFeedDocumentId'] ?? null;
        $this->container['feedOptions'] = $data['feedOptions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['feedType'] === null) {
            $invalidProperties[] = "'feedType' can't be null";
        }
        if ($this->container['marketplaceIds'] === null) {
            $invalidProperties[] = "'marketplaceIds' can't be null";
        }
        if ($this->container['inputFeedDocumentId'] === null) {
            $invalidProperties[] = "'inputFeedDocumentId' can't be null";
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
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[] $marketplaceIds A list of identifiers for marketplaces that you want the feed to be applied to.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplaceIds)
    {
        $this->container['marketplaceIds'] = $marketplaceIds;

        return $this;
    }

    /**
     * Gets inputFeedDocumentId
     *
     * @return string
     */
    public function getInputFeedDocumentId()
    {
        return $this->container['inputFeedDocumentId'];
    }

    /**
     * Sets inputFeedDocumentId
     *
     * @param string $inputFeedDocumentId The document identifier returned by the createFeedDocument operation. Encrypt and upload the feed document contents before calling the createFeed operation.
     *
     * @return self
     */
    public function setInputFeedDocumentId($inputFeedDocumentId)
    {
        $this->container['inputFeedDocumentId'] = $inputFeedDocumentId;

        return $this;
    }

    /**
     * Gets feedOptions
     *
     * @return map[string,string]|null
     */
    public function getFeedOptions()
    {
        return $this->container['feedOptions'];
    }

    /**
     * Sets feedOptions
     *
     * @param map[string,string]|null $feedOptions Additional options to control the feed. For feeds that use the feedOptions parameter, you can find the parameter values in the feed description in [feedType values](doc:feed-type-values).
     *
     * @return self
     */
    public function setFeedOptions($feedOptions)
    {
        $this->container['feedOptions'] = $feedOptions;

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

