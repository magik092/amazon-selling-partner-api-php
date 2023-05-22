<?php
/**
 * ExceptionDatesV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace Webcom\Amazon\Rest\OrdersApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ExceptionDatesV0 Class Doc Comment
 *
 * @category Class
 * @description Dates when the business is closed or open with a different time window.
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExceptionDatesV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ExceptionDates';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'exceptionDate' => 'string',
        'isOpen'        => 'bool',
        'openIntervals' => '\Webcom\Amazon\Rest\OrdersApiV0\Model\OpenIntervalV0[]',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'exceptionDate' => null,
        'isOpen'        => null,
        'openIntervals' => null,
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'exceptionDate' => 'ExceptionDate',
        'isOpen'        => 'IsOpen',
        'openIntervals' => 'OpenIntervals',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exceptionDate' => 'setExceptionDate',
        'isOpen'        => 'setIsOpen',
        'openIntervals' => 'setOpenIntervals',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exceptionDate' => 'getExceptionDate',
        'isOpen'        => 'getIsOpen',
        'openIntervals' => 'getOpenIntervals',
    ];
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
        $this->container['exceptionDate'] = $data['exceptionDate'] ?? null;
        $this->container['isOpen'] = $data['isOpen'] ?? null;
        $this->container['openIntervals'] = $data['openIntervals'] ?? null;
    }

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
     * Gets exceptionDate
     *
     * @return string|null
     */
    public function getExceptionDate()
    {
        return $this->container['exceptionDate'];
    }

    /**
     * Sets exceptionDate
     *
     * @param string|null $exceptionDate Date when the business is closed, in ISO-8601 date format.
     *
     * @return self
     */
    public function setExceptionDate($exceptionDate)
    {
        $this->container['exceptionDate'] = $exceptionDate;

        return $this;
    }

    /**
     * Gets isOpen
     *
     * @return bool|null
     */
    public function getIsOpen()
    {
        return $this->container['isOpen'];
    }

    /**
     * Sets isOpen
     *
     * @param bool|null $isOpen Boolean indicating if the business is closed or open on that date.
     *
     * @return self
     */
    public function setIsOpen($isOpen)
    {
        $this->container['isOpen'] = $isOpen;

        return $this;
    }

    /**
     * Gets openIntervals
     *
     * @return \Webcom\Amazon\Rest\OrdersApiV0\Model\OpenIntervalV0[]|null
     */
    public function getOpenIntervals()
    {
        return $this->container['openIntervals'];
    }

    /**
     * Sets openIntervals
     *
     * @param \Webcom\Amazon\Rest\OrdersApiV0\Model\OpenIntervalV0[]|null $openIntervals Time window during the day when the business is open.
     *
     * @return self
     */
    public function setOpenIntervals($openIntervals)
    {
        $this->container['openIntervals'] = $openIntervals;

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


