<?php
/**
 * Region20240320
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Region20240320 Class Doc Comment
 *
 * @category Class
 * @description Representation of a location used within the inbounding experience.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Region20240320 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Region';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'countryCode' => 'string',
        'state' => 'string',
        'warehouseId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'countryCode' => null,
        'state' => null,
        'warehouseId' => null
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
        'countryCode' => 'countryCode',
        'state' => 'state',
        'warehouseId' => 'warehouseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countryCode' => 'setCountryCode',
        'state' => 'setState',
        'warehouseId' => 'setWarehouseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countryCode' => 'getCountryCode',
        'state' => 'getState',
        'warehouseId' => 'getWarehouseId'
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
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['warehouseId'] = $data['warehouseId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) > 1024)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) < 1)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 1024)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['warehouseId']) && (mb_strlen($this->container['warehouseId']) > 1024)) {
            $invalidProperties[] = "invalid value for 'warehouseId', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['warehouseId']) && (mb_strlen($this->container['warehouseId']) < 1)) {
            $invalidProperties[] = "invalid value for 'warehouseId', the character length must be bigger than or equal to 1.";
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
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode ISO 3166 standard alpha-2 country code.
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        if (!is_null($countryCode) && (mb_strlen($countryCode) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling Region20240320., must be smaller than or equal to 1024.');
        }
        if (!is_null($countryCode) && (mb_strlen($countryCode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling Region20240320., must be bigger than or equal to 1.');
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State.
     *
     * @return self
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $state when calling Region20240320., must be smaller than or equal to 1024.');
        }
        if (!is_null($state) && (mb_strlen($state) < 1)) {
            throw new \InvalidArgumentException('invalid length for $state when calling Region20240320., must be bigger than or equal to 1.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets warehouseId
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouseId'];
    }

    /**
     * Sets warehouseId
     *
     * @param string|null $warehouseId An identifier for a warehouse, such as a FC, IXD, upstream storage.
     *
     * @return self
     */
    public function setWarehouseId($warehouseId)
    {
        if (!is_null($warehouseId) && (mb_strlen($warehouseId) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $warehouseId when calling Region20240320., must be smaller than or equal to 1024.');
        }
        if (!is_null($warehouseId) && (mb_strlen($warehouseId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $warehouseId when calling Region20240320., must be bigger than or equal to 1.');
        }

        $this->container['warehouseId'] = $warehouseId;

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


