<?php
/**
 * GetTrackingResultV2
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ShippingApiV2\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * GetTrackingResultV2 Class Doc Comment
 *
 * @category Class
 * @description The payload for the getTracking operation.
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetTrackingResultV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTrackingResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trackingId' => 'string',
        'alternateLegTrackingId' => 'string',
        'eventHistory' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\EventV2[]',
        'promisedDeliveryDate' => '\DateTime',
        'summary' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\TrackingSummaryV2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'trackingId' => null,
        'alternateLegTrackingId' => null,
        'eventHistory' => null,
        'promisedDeliveryDate' => 'date-time',
        'summary' => null
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
        'trackingId' => 'trackingId',
        'alternateLegTrackingId' => 'alternateLegTrackingId',
        'eventHistory' => 'eventHistory',
        'promisedDeliveryDate' => 'promisedDeliveryDate',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trackingId' => 'setTrackingId',
        'alternateLegTrackingId' => 'setAlternateLegTrackingId',
        'eventHistory' => 'setEventHistory',
        'promisedDeliveryDate' => 'setPromisedDeliveryDate',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trackingId' => 'getTrackingId',
        'alternateLegTrackingId' => 'getAlternateLegTrackingId',
        'eventHistory' => 'getEventHistory',
        'promisedDeliveryDate' => 'getPromisedDeliveryDate',
        'summary' => 'getSummary'
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
        $this->container['trackingId'] = $data['trackingId'] ?? null;
        $this->container['alternateLegTrackingId'] = $data['alternateLegTrackingId'] ?? null;
        $this->container['eventHistory'] = $data['eventHistory'] ?? null;
        $this->container['promisedDeliveryDate'] = $data['promisedDeliveryDate'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['trackingId'] === null) {
            $invalidProperties[] = "'trackingId' can't be null";
        }
        if ($this->container['alternateLegTrackingId'] === null) {
            $invalidProperties[] = "'alternateLegTrackingId' can't be null";
        }
        if ($this->container['eventHistory'] === null) {
            $invalidProperties[] = "'eventHistory' can't be null";
        }
        if ($this->container['promisedDeliveryDate'] === null) {
            $invalidProperties[] = "'promisedDeliveryDate' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
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
     * Gets trackingId
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->container['trackingId'];
    }

    /**
     * Sets trackingId
     *
     * @param string $trackingId The carrier generated identifier for a package in a purchased shipment.
     *
     * @return self
     */
    public function setTrackingId($trackingId)
    {
        $this->container['trackingId'] = $trackingId;

        return $this;
    }

    /**
     * Gets alternateLegTrackingId
     *
     * @return string
     */
    public function getAlternateLegTrackingId()
    {
        return $this->container['alternateLegTrackingId'];
    }

    /**
     * Sets alternateLegTrackingId
     *
     * @param string $alternateLegTrackingId The carrier generated reverse identifier for a returned package in a purchased shipment.
     *
     * @return self
     */
    public function setAlternateLegTrackingId($alternateLegTrackingId)
    {
        $this->container['alternateLegTrackingId'] = $alternateLegTrackingId;

        return $this;
    }

    /**
     * Gets eventHistory
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\EventV2[]
     */
    public function getEventHistory()
    {
        return $this->container['eventHistory'];
    }

    /**
     * Sets eventHistory
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\EventV2[] $eventHistory A list of tracking events.
     *
     * @return self
     */
    public function setEventHistory($eventHistory)
    {
        $this->container['eventHistory'] = $eventHistory;

        return $this;
    }

    /**
     * Gets promisedDeliveryDate
     *
     * @return \DateTime
     */
    public function getPromisedDeliveryDate()
    {
        return $this->container['promisedDeliveryDate'];
    }

    /**
     * Sets promisedDeliveryDate
     *
     * @param \DateTime $promisedDeliveryDate The date and time by which the shipment is promised to be delivered.
     *
     * @return self
     */
    public function setPromisedDeliveryDate($promisedDeliveryDate)
    {
        $this->container['promisedDeliveryDate'] = $promisedDeliveryDate;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\TrackingSummaryV2
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\TrackingSummaryV2 $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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


