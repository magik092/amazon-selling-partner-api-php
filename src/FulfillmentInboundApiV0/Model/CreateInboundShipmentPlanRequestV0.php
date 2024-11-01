<?php
/**
 * CreateInboundShipmentPlanRequestV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CreateInboundShipmentPlanRequestV0 Class Doc Comment
 *
 * @category Class
 * @description The request schema for the createInboundShipmentPlan operation.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateInboundShipmentPlanRequestV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInboundShipmentPlanRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipFromAddress' => '\Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\AddressV0',
        'labelPrepPreference' => '\Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\LabelPrepPreferenceV0',
        'shipToCountryCode' => 'string',
        'shipToCountrySubdivisionCode' => 'string',
        'inboundShipmentPlanRequestItems' => '\Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\InboundShipmentPlanRequestItemV0[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipFromAddress' => null,
        'labelPrepPreference' => null,
        'shipToCountryCode' => null,
        'shipToCountrySubdivisionCode' => null,
        'inboundShipmentPlanRequestItems' => null
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
        'shipFromAddress' => 'ShipFromAddress',
        'labelPrepPreference' => 'LabelPrepPreference',
        'shipToCountryCode' => 'ShipToCountryCode',
        'shipToCountrySubdivisionCode' => 'ShipToCountrySubdivisionCode',
        'inboundShipmentPlanRequestItems' => 'InboundShipmentPlanRequestItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipFromAddress' => 'setShipFromAddress',
        'labelPrepPreference' => 'setLabelPrepPreference',
        'shipToCountryCode' => 'setShipToCountryCode',
        'shipToCountrySubdivisionCode' => 'setShipToCountrySubdivisionCode',
        'inboundShipmentPlanRequestItems' => 'setInboundShipmentPlanRequestItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipFromAddress' => 'getShipFromAddress',
        'labelPrepPreference' => 'getLabelPrepPreference',
        'shipToCountryCode' => 'getShipToCountryCode',
        'shipToCountrySubdivisionCode' => 'getShipToCountrySubdivisionCode',
        'inboundShipmentPlanRequestItems' => 'getInboundShipmentPlanRequestItems'
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
        $this->container['shipFromAddress'] = $data['shipFromAddress'] ?? null;
        $this->container['labelPrepPreference'] = $data['labelPrepPreference'] ?? null;
        $this->container['shipToCountryCode'] = $data['shipToCountryCode'] ?? null;
        $this->container['shipToCountrySubdivisionCode'] = $data['shipToCountrySubdivisionCode'] ?? null;
        $this->container['inboundShipmentPlanRequestItems'] = $data['inboundShipmentPlanRequestItems'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipFromAddress'] === null) {
            $invalidProperties[] = "'shipFromAddress' can't be null";
        }
        if ($this->container['labelPrepPreference'] === null) {
            $invalidProperties[] = "'labelPrepPreference' can't be null";
        }
        if ($this->container['inboundShipmentPlanRequestItems'] === null) {
            $invalidProperties[] = "'inboundShipmentPlanRequestItems' can't be null";
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
     * Gets shipFromAddress
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\AddressV0
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\AddressV0 $shipFromAddress shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

        return $this;
    }

    /**
     * Gets labelPrepPreference
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\LabelPrepPreferenceV0
     */
    public function getLabelPrepPreference()
    {
        return $this->container['labelPrepPreference'];
    }

    /**
     * Sets labelPrepPreference
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\LabelPrepPreferenceV0 $labelPrepPreference labelPrepPreference
     *
     * @return self
     */
    public function setLabelPrepPreference($labelPrepPreference)
    {
        $this->container['labelPrepPreference'] = $labelPrepPreference;

        return $this;
    }

    /**
     * Gets shipToCountryCode
     *
     * @return string|null
     */
    public function getShipToCountryCode()
    {
        return $this->container['shipToCountryCode'];
    }

    /**
     * Sets shipToCountryCode
     *
     * @param string|null $shipToCountryCode The two-character country code for the country where the inbound shipment is to be sent.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.   Values:   ShipToCountryCode values for North America:  * CA – Canada  * MX - Mexico  * US - United States  ShipToCountryCode values for MCI sellers in Europe:  * DE – Germany  * ES – Spain  * FR – France  * GB – United Kingdom  * IT – Italy  Default: The country code for the seller's home marketplace.
     *
     * @return self
     */
    public function setShipToCountryCode($shipToCountryCode)
    {
        $this->container['shipToCountryCode'] = $shipToCountryCode;

        return $this;
    }

    /**
     * Gets shipToCountrySubdivisionCode
     *
     * @return string|null
     */
    public function getShipToCountrySubdivisionCode()
    {
        return $this->container['shipToCountrySubdivisionCode'];
    }

    /**
     * Sets shipToCountrySubdivisionCode
     *
     * @param string|null $shipToCountrySubdivisionCode The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, \"IN-MH\". In full ISO 3166-2 format.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     *
     * @return self
     */
    public function setShipToCountrySubdivisionCode($shipToCountrySubdivisionCode)
    {
        $this->container['shipToCountrySubdivisionCode'] = $shipToCountrySubdivisionCode;

        return $this;
    }

    /**
     * Gets inboundShipmentPlanRequestItems
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\InboundShipmentPlanRequestItemV0[]
     */
    public function getInboundShipmentPlanRequestItems()
    {
        return $this->container['inboundShipmentPlanRequestItems'];
    }

    /**
     * Sets inboundShipmentPlanRequestItems
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApiV0\Model\InboundShipmentPlanRequestItemV0[] $inboundShipmentPlanRequestItems List of inbound shipment plan requests
     *
     * @return self
     */
    public function setInboundShipmentPlanRequestItems($inboundShipmentPlanRequestItems)
    {
        $this->container['inboundShipmentPlanRequestItems'] = $inboundShipmentPlanRequestItems;

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


