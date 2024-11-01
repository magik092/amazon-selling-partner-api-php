<?php
/**
 * TransportationDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace Webcom\Amazon\Rest\VendorShipmentsApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * TransportationDetails Class Doc Comment
 *
 * @category Class
 * @description Transportation details for this shipment.
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TransportationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransportationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipMode' => 'string',
        'transportationMode' => 'string',
        'shippedDate' => '\DateTime',
        'estimatedDeliveryDate' => '\DateTime',
        'shipmentDeliveryDate' => '\DateTime',
        'carrierDetails' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\CarrierDetails',
        'billOfLadingNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipMode' => null,
        'transportationMode' => null,
        'shippedDate' => 'date-time',
        'estimatedDeliveryDate' => 'date-time',
        'shipmentDeliveryDate' => 'date-time',
        'carrierDetails' => null,
        'billOfLadingNumber' => null
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
        'shipMode' => 'shipMode',
        'transportationMode' => 'transportationMode',
        'shippedDate' => 'shippedDate',
        'estimatedDeliveryDate' => 'estimatedDeliveryDate',
        'shipmentDeliveryDate' => 'shipmentDeliveryDate',
        'carrierDetails' => 'carrierDetails',
        'billOfLadingNumber' => 'billOfLadingNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipMode' => 'setShipMode',
        'transportationMode' => 'setTransportationMode',
        'shippedDate' => 'setShippedDate',
        'estimatedDeliveryDate' => 'setEstimatedDeliveryDate',
        'shipmentDeliveryDate' => 'setShipmentDeliveryDate',
        'carrierDetails' => 'setCarrierDetails',
        'billOfLadingNumber' => 'setBillOfLadingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipMode' => 'getShipMode',
        'transportationMode' => 'getTransportationMode',
        'shippedDate' => 'getShippedDate',
        'estimatedDeliveryDate' => 'getEstimatedDeliveryDate',
        'shipmentDeliveryDate' => 'getShipmentDeliveryDate',
        'carrierDetails' => 'getCarrierDetails',
        'billOfLadingNumber' => 'getBillOfLadingNumber'
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

    const SHIP_MODE_TRUCK_LOAD = 'TruckLoad';
    const SHIP_MODE_LESS_THAN_TRUCK_LOAD = 'LessThanTruckLoad';
    const SHIP_MODE_SMALL_PARCEL = 'SmallParcel';
    const TRANSPORTATION_MODE_ROAD = 'Road';
    const TRANSPORTATION_MODE_AIR = 'Air';
    const TRANSPORTATION_MODE_OCEAN = 'Ocean';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipModeAllowableValues()
    {
        return [
            self::SHIP_MODE_TRUCK_LOAD,
            self::SHIP_MODE_LESS_THAN_TRUCK_LOAD,
            self::SHIP_MODE_SMALL_PARCEL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportationModeAllowableValues()
    {
        return [
            self::TRANSPORTATION_MODE_ROAD,
            self::TRANSPORTATION_MODE_AIR,
            self::TRANSPORTATION_MODE_OCEAN,
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
        $this->container['shipMode'] = $data['shipMode'] ?? null;
        $this->container['transportationMode'] = $data['transportationMode'] ?? null;
        $this->container['shippedDate'] = $data['shippedDate'] ?? null;
        $this->container['estimatedDeliveryDate'] = $data['estimatedDeliveryDate'] ?? null;
        $this->container['shipmentDeliveryDate'] = $data['shipmentDeliveryDate'] ?? null;
        $this->container['carrierDetails'] = $data['carrierDetails'] ?? null;
        $this->container['billOfLadingNumber'] = $data['billOfLadingNumber'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($this->container['shipMode']) && !in_array($this->container['shipMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipMode', must be one of '%s'",
                $this->container['shipMode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransportationModeAllowableValues();
        if (!is_null($this->container['transportationMode']) && !in_array($this->container['transportationMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transportationMode', must be one of '%s'",
                $this->container['transportationMode'],
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
     * Gets shipMode
     *
     * @return string|null
     */
    public function getShipMode()
    {
        return $this->container['shipMode'];
    }

    /**
     * Sets shipMode
     *
     * @param string|null $shipMode The type of shipment.
     *
     * @return self
     */
    public function setShipMode($shipMode)
    {
        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($shipMode) && !in_array($shipMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipMode', must be one of '%s'",
                    $shipMode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipMode'] = $shipMode;

        return $this;
    }

    /**
     * Gets transportationMode
     *
     * @return string|null
     */
    public function getTransportationMode()
    {
        return $this->container['transportationMode'];
    }

    /**
     * Sets transportationMode
     *
     * @param string|null $transportationMode The mode of transportation for this shipment.
     *
     * @return self
     */
    public function setTransportationMode($transportationMode)
    {
        $allowedValues = $this->getTransportationModeAllowableValues();
        if (!is_null($transportationMode) && !in_array($transportationMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transportationMode', must be one of '%s'",
                    $transportationMode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transportationMode'] = $transportationMode;

        return $this;
    }

    /**
     * Gets shippedDate
     *
     * @return \DateTime|null
     */
    public function getShippedDate()
    {
        return $this->container['shippedDate'];
    }

    /**
     * Sets shippedDate
     *
     * @param \DateTime|null $shippedDate Date when shipment is performed by the Vendor to Buyer
     *
     * @return self
     */
    public function setShippedDate($shippedDate)
    {
        $this->container['shippedDate'] = $shippedDate;

        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param \DateTime|null $estimatedDeliveryDate Estimated Date on which shipment will be delivered from Vendor to Buyer
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets shipmentDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getShipmentDeliveryDate()
    {
        return $this->container['shipmentDeliveryDate'];
    }

    /**
     * Sets shipmentDeliveryDate
     *
     * @param \DateTime|null $shipmentDeliveryDate Date on which shipment will be delivered from Vendor to Buyer
     *
     * @return self
     */
    public function setShipmentDeliveryDate($shipmentDeliveryDate)
    {
        $this->container['shipmentDeliveryDate'] = $shipmentDeliveryDate;

        return $this;
    }

    /**
     * Gets carrierDetails
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\CarrierDetails|null
     */
    public function getCarrierDetails()
    {
        return $this->container['carrierDetails'];
    }

    /**
     * Sets carrierDetails
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\CarrierDetails|null $carrierDetails carrierDetails
     *
     * @return self
     */
    public function setCarrierDetails($carrierDetails)
    {
        $this->container['carrierDetails'] = $carrierDetails;

        return $this;
    }

    /**
     * Gets billOfLadingNumber
     *
     * @return string|null
     */
    public function getBillOfLadingNumber()
    {
        return $this->container['billOfLadingNumber'];
    }

    /**
     * Sets billOfLadingNumber
     *
     * @param string|null $billOfLadingNumber The Bill of Lading (BOL) number is a unique number assigned to each shipment of goods by the vendor or shipper during the creation of the Bill of Lading. This number must be unique for every shipment and cannot be a date/time or single character. The BOL numer is mandatory in Shipment Confirmation message for FTL and LTL shipments, and must match the paper BOL provided with the shipment. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     *
     * @return self
     */
    public function setBillOfLadingNumber($billOfLadingNumber)
    {
        $this->container['billOfLadingNumber'] = $billOfLadingNumber;

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


