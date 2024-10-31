<?php
/**
 * FixedSlotCapacity
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ServicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace Webcom\Amazon\Rest\ServicesApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FixedSlotCapacity Class Doc Comment
 *
 * @category Class
 * @description Response schema for the &#x60;getFixedSlotCapacity&#x60; operation.
 * @package  Webcom\Amazon\Rest\ServicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FixedSlotCapacity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FixedSlotCapacity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resourceId' => 'string',
        'slotDuration' => 'float',
        'capacities' => '\Webcom\Amazon\Rest\ServicesApi\Model\FixedSlot[]',
        'nextPageToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'slotDuration' => 'int32',
        'capacities' => null,
        'nextPageToken' => null
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
        'resourceId' => 'resourceId',
        'slotDuration' => 'slotDuration',
        'capacities' => 'capacities',
        'nextPageToken' => 'nextPageToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resourceId' => 'setResourceId',
        'slotDuration' => 'setSlotDuration',
        'capacities' => 'setCapacities',
        'nextPageToken' => 'setNextPageToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resourceId' => 'getResourceId',
        'slotDuration' => 'getSlotDuration',
        'capacities' => 'getCapacities',
        'nextPageToken' => 'getNextPageToken'
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
        $this->container['resourceId'] = $data['resourceId'] ?? null;
        $this->container['slotDuration'] = $data['slotDuration'] ?? null;
        $this->container['capacities'] = $data['capacities'] ?? null;
        $this->container['nextPageToken'] = $data['nextPageToken'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets resourceId
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
     * Sets resourceId
     *
     * @param string|null $resourceId Resource Identifier.
     *
     * @return self
     */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;

        return $this;
    }

    /**
     * Gets slotDuration
     *
     * @return float|null
     */
    public function getSlotDuration()
    {
        return $this->container['slotDuration'];
    }

    /**
     * Sets slotDuration
     *
     * @param float|null $slotDuration The duration of each slot which is returned. This value will be a multiple of 5 and fall in the following range: 5 <= `slotDuration` <= 360.
     *
     * @return self
     */
    public function setSlotDuration($slotDuration)
    {


        $this->container['slotDuration'] = $slotDuration;

        return $this;
    }

    /**
     * Gets capacities
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\FixedSlot[]|null
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\FixedSlot[]|null $capacities Array of capacity slots in fixed slot format.
     *
     * @return self
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets nextPageToken
     *
     * @return string|null
     */
    public function getNextPageToken()
    {
        return $this->container['nextPageToken'];
    }

    /**
     * Sets nextPageToken
     *
     * @param string|null $nextPageToken Next page token, if there are more pages.
     *
     * @return self
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->container['nextPageToken'] = $nextPageToken;

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


