<?php
/**
 * ListHandoverSlotsRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\EasyShipV20220323\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ListHandoverSlotsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the &#x60;listHandoverSlots&#x60; operation.
 * @package  Webcom\Amazon\Rest\EasyShipV20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListHandoverSlotsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListHandoverSlotsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'amazonOrderId' => 'string',
        'packageDimensions' => '\Webcom\Amazon\Rest\EasyShipV20220323\Model\Dimensions',
        'packageWeight' => '\Webcom\Amazon\Rest\EasyShipV20220323\Model\Weight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'amazonOrderId' => null,
        'packageDimensions' => null,
        'packageWeight' => null
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
        'marketplaceId' => 'marketplaceId',
        'amazonOrderId' => 'amazonOrderId',
        'packageDimensions' => 'packageDimensions',
        'packageWeight' => 'packageWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'amazonOrderId' => 'setAmazonOrderId',
        'packageDimensions' => 'setPackageDimensions',
        'packageWeight' => 'setPackageWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'amazonOrderId' => 'getAmazonOrderId',
        'packageDimensions' => 'getPackageDimensions',
        'packageWeight' => 'getPackageWeight'
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['amazonOrderId'] = $data['amazonOrderId'] ?? null;
        $this->container['packageDimensions'] = $data['packageDimensions'] ?? null;
        $this->container['packageWeight'] = $data['packageWeight'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        if ((mb_strlen($this->container['marketplaceId']) > 255)) {
            $invalidProperties[] = "invalid value for 'marketplaceId', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['marketplaceId']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplaceId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
        }
        if ($this->container['packageDimensions'] === null) {
            $invalidProperties[] = "'packageDimensions' can't be null";
        }
        if ($this->container['packageWeight'] === null) {
            $invalidProperties[] = "'packageWeight' can't be null";
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
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId A string of up to 255 characters.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        if ((mb_strlen($marketplaceId) > 255)) {
            throw new \InvalidArgumentException('invalid length for $marketplaceId when calling ListHandoverSlotsRequest., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($marketplaceId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplaceId when calling ListHandoverSlotsRequest., must be bigger than or equal to 1.');
        }

        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     *
     * @return self
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets packageDimensions
     *
     * @return \Webcom\Amazon\Rest\EasyShipV20220323\Model\Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['packageDimensions'];
    }

    /**
     * Sets packageDimensions
     *
     * @param \Webcom\Amazon\Rest\EasyShipV20220323\Model\Dimensions $packageDimensions packageDimensions
     *
     * @return self
     */
    public function setPackageDimensions($packageDimensions)
    {
        $this->container['packageDimensions'] = $packageDimensions;

        return $this;
    }

    /**
     * Gets packageWeight
     *
     * @return \Webcom\Amazon\Rest\EasyShipV20220323\Model\Weight
     */
    public function getPackageWeight()
    {
        return $this->container['packageWeight'];
    }

    /**
     * Sets packageWeight
     *
     * @param \Webcom\Amazon\Rest\EasyShipV20220323\Model\Weight $packageWeight packageWeight
     *
     * @return self
     */
    public function setPackageWeight($packageWeight)
    {
        $this->container['packageWeight'] = $packageWeight;

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


