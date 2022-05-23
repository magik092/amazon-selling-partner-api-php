<?php
/**
 * TrackingEvent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * TrackingEvent Class Doc Comment
 *
 * @category Class
 * @description Information for tracking package deliveries.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TrackingEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrackingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eventDate' => '\DateTime',
        'eventAddress' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\TrackingAddress',
        'eventCode' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\EventCode',
        'eventDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eventDate' => 'date-time',
        'eventAddress' => null,
        'eventCode' => null,
        'eventDescription' => null
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
        'eventDate' => 'eventDate',
        'eventAddress' => 'eventAddress',
        'eventCode' => 'eventCode',
        'eventDescription' => 'eventDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eventDate' => 'setEventDate',
        'eventAddress' => 'setEventAddress',
        'eventCode' => 'setEventCode',
        'eventDescription' => 'setEventDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eventDate' => 'getEventDate',
        'eventAddress' => 'getEventAddress',
        'eventCode' => 'getEventCode',
        'eventDescription' => 'getEventDescription'
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
        $this->container['eventDate'] = $data['eventDate'] ?? null;
        $this->container['eventAddress'] = $data['eventAddress'] ?? null;
        $this->container['eventCode'] = $data['eventCode'] ?? null;
        $this->container['eventDescription'] = $data['eventDescription'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eventDate'] === null) {
            $invalidProperties[] = "'eventDate' can't be null";
        }
        if ($this->container['eventAddress'] === null) {
            $invalidProperties[] = "'eventAddress' can't be null";
        }
        if ($this->container['eventCode'] === null) {
            $invalidProperties[] = "'eventCode' can't be null";
        }
        if ($this->container['eventDescription'] === null) {
            $invalidProperties[] = "'eventDescription' can't be null";
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
     * Gets eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['eventDate'];
    }

    /**
     * Sets eventDate
     *
     * @param \DateTime $eventDate eventDate
     *
     * @return self
     */
    public function setEventDate($eventDate)
    {
        $this->container['eventDate'] = $eventDate;

        return $this;
    }

    /**
     * Gets eventAddress
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\TrackingAddress
     */
    public function getEventAddress()
    {
        return $this->container['eventAddress'];
    }

    /**
     * Sets eventAddress
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\TrackingAddress $eventAddress eventAddress
     *
     * @return self
     */
    public function setEventAddress($eventAddress)
    {
        $this->container['eventAddress'] = $eventAddress;

        return $this;
    }

    /**
     * Gets eventCode
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\EventCode
     */
    public function getEventCode()
    {
        return $this->container['eventCode'];
    }

    /**
     * Sets eventCode
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\EventCode $eventCode eventCode
     *
     * @return self
     */
    public function setEventCode($eventCode)
    {
        $this->container['eventCode'] = $eventCode;

        return $this;
    }

    /**
     * Gets eventDescription
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->container['eventDescription'];
    }

    /**
     * Sets eventDescription
     *
     * @param string $eventDescription A description for the corresponding event code.
     *
     * @return self
     */
    public function setEventDescription($eventDescription)
    {
        $this->container['eventDescription'] = $eventDescription;

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


