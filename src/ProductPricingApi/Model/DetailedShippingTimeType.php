<?php
/**
 * DetailedShippingTimeType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ProductPricingApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * DetailedShippingTimeType Class Doc Comment
 *
 * @category Class
 * @description The time range in which an item will likely be shipped once an order has been placed.
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DetailedShippingTimeType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DetailedShippingTimeType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'minimum_hours' => 'int',
        'maximum_hours' => 'int',
        'available_date' => 'float',
        'availability_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'minimum_hours' => 'int64',
        'maximum_hours' => 'int64',
        'available_date' => null,
        'availability_type' => null
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
        'minimum_hours' => 'minimumHours',
        'maximum_hours' => 'maximumHours',
        'available_date' => 'availableDate',
        'availability_type' => 'availabilityType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimum_hours' => 'setMinimumHours',
        'maximum_hours' => 'setMaximumHours',
        'available_date' => 'setAvailableDate',
        'availability_type' => 'setAvailabilityType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimum_hours' => 'getMinimumHours',
        'maximum_hours' => 'getMaximumHours',
        'available_date' => 'getAvailableDate',
        'availability_type' => 'getAvailabilityType'
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

    const AVAILABILITY_TYPE_NOW = 'NOW';
    const AVAILABILITY_TYPE_FUTURE_WITHOUT_DATE = 'FUTURE_WITHOUT_DATE';
    const AVAILABILITY_TYPE_FUTURE_WITH_DATE = 'FUTURE_WITH_DATE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityTypeAllowableValues()
    {
        return [
            self::AVAILABILITY_TYPE_NOW,
            self::AVAILABILITY_TYPE_FUTURE_WITHOUT_DATE,
            self::AVAILABILITY_TYPE_FUTURE_WITH_DATE,
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
        $this->container['minimum_hours'] = $data['minimum_hours'] ?? null;
        $this->container['maximum_hours'] = $data['maximum_hours'] ?? null;
        $this->container['available_date'] = $data['available_date'] ?? null;
        $this->container['availability_type'] = $data['availability_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAvailabilityTypeAllowableValues();
        if (!is_null($this->container['availability_type']) && !in_array($this->container['availability_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availability_type', must be one of '%s'",
                $this->container['availability_type'],
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
     * Gets minimum_hours
     *
     * @return int|null
     */
    public function getMinimumHours()
    {
        return $this->container['minimum_hours'];
    }

    /**
     * Sets minimum_hours
     *
     * @param int|null $minimum_hours The minimum time, in hours, that the item will likely be shipped after the order has been placed.
     *
     * @return self
     */
    public function setMinimumHours($minimum_hours)
    {
        $this->container['minimum_hours'] = $minimum_hours;

        return $this;
    }

    /**
     * Gets maximum_hours
     *
     * @return int|null
     */
    public function getMaximumHours()
    {
        return $this->container['maximum_hours'];
    }

    /**
     * Sets maximum_hours
     *
     * @param int|null $maximum_hours The maximum time, in hours, that the item will likely be shipped after the order has been placed.
     *
     * @return self
     */
    public function setMaximumHours($maximum_hours)
    {
        $this->container['maximum_hours'] = $maximum_hours;

        return $this;
    }

    /**
     * Gets available_date
     *
     * @return float|null
     */
    public function getAvailableDate()
    {
        return $this->container['available_date'];
    }

    /**
     * Sets available_date
     *
     * @param float|null $available_date The date when the item will be available for shipping. Only displayed for items that are not currently available for shipping.
     *
     * @return self
     */
    public function setAvailableDate($available_date)
    {
        $this->container['available_date'] = $available_date;

        return $this;
    }

    /**
     * Gets availability_type
     *
     * @return string|null
     */
    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type
     *
     * @param string|null $availability_type Indicates whether the item is available for shipping now, or on a known or an unknown date in the future. If known, the availableDate property indicates the date that the item will be available for shipping. Possible values: NOW, FUTURE_WITHOUT_DATE, FUTURE_WITH_DATE.
     *
     * @return self
     */
    public function setAvailabilityType($availability_type)
    {
        $allowedValues = $this->getAvailabilityTypeAllowableValues();
        if (!is_null($availability_type) && !in_array($availability_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availability_type', must be one of '%s'",
                    $availability_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability_type'] = $availability_type;

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


