<?php
/**
 * GetRatesRequestV2
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
 * GetRatesRequestV2 Class Doc Comment
 *
 * @category Class
 * @description The request schema for the getRates operation. When the channelType is Amazon, the shipTo address is not required and will be ignored.
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetRatesRequestV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipTo' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2',
        'shipFrom' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2',
        'returnTo' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2',
        'shipDate' => '\DateTime',
        'shipperInstruction' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\ShipperInstructionV2',
        'packages' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\PackageV2[]',
        'valueAddedServices' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\ValueAddedServiceDetailsV2',
        'taxDetails' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\TaxDetailV2[]',
        'channelDetails' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\ChannelDetailsV2',
        'clientReferenceDetails' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\ClientReferenceDetailV2[]',
        'shipmentType' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\ShipmentTypeV2',
        'destinationAccessPointDetails' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\AccessPointDetailsV2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipTo' => null,
        'shipFrom' => null,
        'returnTo' => null,
        'shipDate' => 'date-time',
        'shipperInstruction' => null,
        'packages' => null,
        'valueAddedServices' => null,
        'taxDetails' => null,
        'channelDetails' => null,
        'clientReferenceDetails' => null,
        'shipmentType' => null,
        'destinationAccessPointDetails' => null
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
        'shipTo' => 'shipTo',
        'shipFrom' => 'shipFrom',
        'returnTo' => 'returnTo',
        'shipDate' => 'shipDate',
        'shipperInstruction' => 'shipperInstruction',
        'packages' => 'packages',
        'valueAddedServices' => 'valueAddedServices',
        'taxDetails' => 'taxDetails',
        'channelDetails' => 'channelDetails',
        'clientReferenceDetails' => 'clientReferenceDetails',
        'shipmentType' => 'shipmentType',
        'destinationAccessPointDetails' => 'destinationAccessPointDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipTo' => 'setShipTo',
        'shipFrom' => 'setShipFrom',
        'returnTo' => 'setReturnTo',
        'shipDate' => 'setShipDate',
        'shipperInstruction' => 'setShipperInstruction',
        'packages' => 'setPackages',
        'valueAddedServices' => 'setValueAddedServices',
        'taxDetails' => 'setTaxDetails',
        'channelDetails' => 'setChannelDetails',
        'clientReferenceDetails' => 'setClientReferenceDetails',
        'shipmentType' => 'setShipmentType',
        'destinationAccessPointDetails' => 'setDestinationAccessPointDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipTo' => 'getShipTo',
        'shipFrom' => 'getShipFrom',
        'returnTo' => 'getReturnTo',
        'shipDate' => 'getShipDate',
        'shipperInstruction' => 'getShipperInstruction',
        'packages' => 'getPackages',
        'valueAddedServices' => 'getValueAddedServices',
        'taxDetails' => 'getTaxDetails',
        'channelDetails' => 'getChannelDetails',
        'clientReferenceDetails' => 'getClientReferenceDetails',
        'shipmentType' => 'getShipmentType',
        'destinationAccessPointDetails' => 'getDestinationAccessPointDetails'
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
        $this->container['shipTo'] = $data['shipTo'] ?? null;
        $this->container['shipFrom'] = $data['shipFrom'] ?? null;
        $this->container['returnTo'] = $data['returnTo'] ?? null;
        $this->container['shipDate'] = $data['shipDate'] ?? null;
        $this->container['shipperInstruction'] = $data['shipperInstruction'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['valueAddedServices'] = $data['valueAddedServices'] ?? null;
        $this->container['taxDetails'] = $data['taxDetails'] ?? null;
        $this->container['channelDetails'] = $data['channelDetails'] ?? null;
        $this->container['clientReferenceDetails'] = $data['clientReferenceDetails'] ?? null;
        $this->container['shipmentType'] = $data['shipmentType'] ?? null;
        $this->container['destinationAccessPointDetails'] = $data['destinationAccessPointDetails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipFrom'] === null) {
            $invalidProperties[] = "'shipFrom' can't be null";
        }
        if ($this->container['packages'] === null) {
            $invalidProperties[] = "'packages' can't be null";
        }
        if ($this->container['channelDetails'] === null) {
            $invalidProperties[] = "'channelDetails' can't be null";
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
     * Gets shipTo
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2|null
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2|null $shipTo shipTo
     *
     * @return self
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets shipFrom
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2
     */
    public function getShipFrom()
    {
        return $this->container['shipFrom'];
    }

    /**
     * Sets shipFrom
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2 $shipFrom shipFrom
     *
     * @return self
     */
    public function setShipFrom($shipFrom)
    {
        $this->container['shipFrom'] = $shipFrom;

        return $this;
    }

    /**
     * Gets returnTo
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2|null
     */
    public function getReturnTo()
    {
        return $this->container['returnTo'];
    }

    /**
     * Sets returnTo
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\AddressV2|null $returnTo returnTo
     *
     * @return self
     */
    public function setReturnTo($returnTo)
    {
        $this->container['returnTo'] = $returnTo;

        return $this;
    }

    /**
     * Gets shipDate
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['shipDate'];
    }

    /**
     * Sets shipDate
     *
     * @param \DateTime|null $shipDate The ship date and time (the requested pickup). This defaults to the current date and time.
     *
     * @return self
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets shipperInstruction
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\ShipperInstructionV2|null
     */
    public function getShipperInstruction()
    {
        return $this->container['shipperInstruction'];
    }

    /**
     * Sets shipperInstruction
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\ShipperInstructionV2|null $shipperInstruction shipperInstruction
     *
     * @return self
     */
    public function setShipperInstruction($shipperInstruction)
    {
        $this->container['shipperInstruction'] = $shipperInstruction;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\PackageV2[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\PackageV2[] $packages A list of packages to be shipped through a shipping service offering.
     *
     * @return self
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets valueAddedServices
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\ValueAddedServiceDetailsV2|null
     */
    public function getValueAddedServices()
    {
        return $this->container['valueAddedServices'];
    }

    /**
     * Sets valueAddedServices
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\ValueAddedServiceDetailsV2|null $valueAddedServices valueAddedServices
     *
     * @return self
     */
    public function setValueAddedServices($valueAddedServices)
    {
        $this->container['valueAddedServices'] = $valueAddedServices;

        return $this;
    }

    /**
     * Gets taxDetails
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\TaxDetailV2[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\TaxDetailV2[]|null $taxDetails A list of tax detail information.
     *
     * @return self
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets channelDetails
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\ChannelDetailsV2
     */
    public function getChannelDetails()
    {
        return $this->container['channelDetails'];
    }

    /**
     * Sets channelDetails
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\ChannelDetailsV2 $channelDetails channelDetails
     *
     * @return self
     */
    public function setChannelDetails($channelDetails)
    {
        $this->container['channelDetails'] = $channelDetails;

        return $this;
    }

    /**
     * Gets clientReferenceDetails
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\ClientReferenceDetailV2[]|null
     */
    public function getClientReferenceDetails()
    {
        return $this->container['clientReferenceDetails'];
    }

    /**
     * Sets clientReferenceDetails
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\ClientReferenceDetailV2[]|null $clientReferenceDetails Object to pass additional information about the MCI Integrator shipperType: List of ClientReferenceDetail
     *
     * @return self
     */
    public function setClientReferenceDetails($clientReferenceDetails)
    {
        $this->container['clientReferenceDetails'] = $clientReferenceDetails;

        return $this;
    }

    /**
     * Gets shipmentType
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\ShipmentTypeV2|null
     */
    public function getShipmentType()
    {
        return $this->container['shipmentType'];
    }

    /**
     * Sets shipmentType
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\ShipmentTypeV2|null $shipmentType shipmentType
     *
     * @return self
     */
    public function setShipmentType($shipmentType)
    {
        $this->container['shipmentType'] = $shipmentType;

        return $this;
    }

    /**
     * Gets destinationAccessPointDetails
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\AccessPointDetailsV2|null
     */
    public function getDestinationAccessPointDetails()
    {
        return $this->container['destinationAccessPointDetails'];
    }

    /**
     * Sets destinationAccessPointDetails
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\AccessPointDetailsV2|null $destinationAccessPointDetails destinationAccessPointDetails
     *
     * @return self
     */
    public function setDestinationAccessPointDetails($destinationAccessPointDetails)
    {
        $this->container['destinationAccessPointDetails'] = $destinationAccessPointDetails;

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


