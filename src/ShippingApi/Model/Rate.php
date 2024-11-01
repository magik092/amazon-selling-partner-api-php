<?php
/**
 * Rate
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace Webcom\Amazon\Rest\ShippingApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Rate Class Doc Comment
 *
 * @category Class
 * @description The available rate that can be used to send the shipment
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Rate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rateId' => 'string',
        'totalCharge' => '\Webcom\Amazon\Rest\ShippingApi\Model\Currency',
        'billedWeight' => '\Webcom\Amazon\Rest\ShippingApi\Model\Weight',
        'expirationTime' => '\DateTime',
        'serviceType' => '\Webcom\Amazon\Rest\ShippingApi\Model\ServiceType',
        'promise' => '\Webcom\Amazon\Rest\ShippingApi\Model\ShippingPromiseSet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rateId' => null,
        'totalCharge' => null,
        'billedWeight' => null,
        'expirationTime' => 'date-time',
        'serviceType' => null,
        'promise' => null
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
        'rateId' => 'rateId',
        'totalCharge' => 'totalCharge',
        'billedWeight' => 'billedWeight',
        'expirationTime' => 'expirationTime',
        'serviceType' => 'serviceType',
        'promise' => 'promise'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rateId' => 'setRateId',
        'totalCharge' => 'setTotalCharge',
        'billedWeight' => 'setBilledWeight',
        'expirationTime' => 'setExpirationTime',
        'serviceType' => 'setServiceType',
        'promise' => 'setPromise'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rateId' => 'getRateId',
        'totalCharge' => 'getTotalCharge',
        'billedWeight' => 'getBilledWeight',
        'expirationTime' => 'getExpirationTime',
        'serviceType' => 'getServiceType',
        'promise' => 'getPromise'
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
        $this->container['rateId'] = $data['rateId'] ?? null;
        $this->container['totalCharge'] = $data['totalCharge'] ?? null;
        $this->container['billedWeight'] = $data['billedWeight'] ?? null;
        $this->container['expirationTime'] = $data['expirationTime'] ?? null;
        $this->container['serviceType'] = $data['serviceType'] ?? null;
        $this->container['promise'] = $data['promise'] ?? null;
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
     * Gets rateId
     *
     * @return string|null
     */
    public function getRateId()
    {
        return $this->container['rateId'];
    }

    /**
     * Sets rateId
     *
     * @param string|null $rateId An identifier for the rate.
     *
     * @return self
     */
    public function setRateId($rateId)
    {
        $this->container['rateId'] = $rateId;

        return $this;
    }

    /**
     * Gets totalCharge
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Currency|null
     */
    public function getTotalCharge()
    {
        return $this->container['totalCharge'];
    }

    /**
     * Sets totalCharge
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Currency|null $totalCharge totalCharge
     *
     * @return self
     */
    public function setTotalCharge($totalCharge)
    {
        $this->container['totalCharge'] = $totalCharge;

        return $this;
    }

    /**
     * Gets billedWeight
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Weight|null
     */
    public function getBilledWeight()
    {
        return $this->container['billedWeight'];
    }

    /**
     * Sets billedWeight
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Weight|null $billedWeight billedWeight
     *
     * @return self
     */
    public function setBilledWeight($billedWeight)
    {
        $this->container['billedWeight'] = $billedWeight;

        return $this;
    }

    /**
     * Gets expirationTime
     *
     * @return \DateTime|null
     */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
     * Sets expirationTime
     *
     * @param \DateTime|null $expirationTime The time after which the offering will expire.
     *
     * @return self
     */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;

        return $this;
    }

    /**
     * Gets serviceType
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\ServiceType|null
     */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
     * Sets serviceType
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\ServiceType|null $serviceType serviceType
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;

        return $this;
    }

    /**
     * Gets promise
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\ShippingPromiseSet|null
     */
    public function getPromise()
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\ShippingPromiseSet|null $promise promise
     *
     * @return self
     */
    public function setPromise($promise)
    {
        $this->container['promise'] = $promise;

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


