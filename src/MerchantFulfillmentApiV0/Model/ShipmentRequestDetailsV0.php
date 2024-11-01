<?php
/**
 * ShipmentRequestDetailsV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ShipmentRequestDetailsV0 Class Doc Comment
 *
 * @category Class
 * @description Shipment information required for requesting shipping service offers or for creating a shipment.
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentRequestDetailsV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentRequestDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'sellerOrderId' => 'string',
        'itemList' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ItemV0[]',
        'shipFromAddress' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\AddressV0',
        'packageDimensions' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\PackageDimensionsV0',
        'weight' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\WeightV0',
        'mustArriveByDate' => '\DateTime',
        'shipDate' => '\DateTime',
        'shippingServiceOptions' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ShippingServiceOptionsV0',
        'labelCustomization' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\LabelCustomizationV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazonOrderId' => null,
        'sellerOrderId' => null,
        'itemList' => null,
        'shipFromAddress' => null,
        'packageDimensions' => null,
        'weight' => null,
        'mustArriveByDate' => 'date-time',
        'shipDate' => 'date-time',
        'shippingServiceOptions' => null,
        'labelCustomization' => null
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
        'amazonOrderId' => 'AmazonOrderId',
        'sellerOrderId' => 'SellerOrderId',
        'itemList' => 'ItemList',
        'shipFromAddress' => 'ShipFromAddress',
        'packageDimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'mustArriveByDate' => 'MustArriveByDate',
        'shipDate' => 'ShipDate',
        'shippingServiceOptions' => 'ShippingServiceOptions',
        'labelCustomization' => 'LabelCustomization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'sellerOrderId' => 'setSellerOrderId',
        'itemList' => 'setItemList',
        'shipFromAddress' => 'setShipFromAddress',
        'packageDimensions' => 'setPackageDimensions',
        'weight' => 'setWeight',
        'mustArriveByDate' => 'setMustArriveByDate',
        'shipDate' => 'setShipDate',
        'shippingServiceOptions' => 'setShippingServiceOptions',
        'labelCustomization' => 'setLabelCustomization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'sellerOrderId' => 'getSellerOrderId',
        'itemList' => 'getItemList',
        'shipFromAddress' => 'getShipFromAddress',
        'packageDimensions' => 'getPackageDimensions',
        'weight' => 'getWeight',
        'mustArriveByDate' => 'getMustArriveByDate',
        'shipDate' => 'getShipDate',
        'shippingServiceOptions' => 'getShippingServiceOptions',
        'labelCustomization' => 'getLabelCustomization'
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
        $this->container['amazonOrderId'] = $data['amazonOrderId'] ?? null;
        $this->container['sellerOrderId'] = $data['sellerOrderId'] ?? null;
        $this->container['itemList'] = $data['itemList'] ?? null;
        $this->container['shipFromAddress'] = $data['shipFromAddress'] ?? null;
        $this->container['packageDimensions'] = $data['packageDimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['mustArriveByDate'] = $data['mustArriveByDate'] ?? null;
        $this->container['shipDate'] = $data['shipDate'] ?? null;
        $this->container['shippingServiceOptions'] = $data['shippingServiceOptions'] ?? null;
        $this->container['labelCustomization'] = $data['labelCustomization'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
        }
        if (!is_null($this->container['sellerOrderId']) && (mb_strlen($this->container['sellerOrderId']) > 64)) {
            $invalidProperties[] = "invalid value for 'sellerOrderId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['itemList'] === null) {
            $invalidProperties[] = "'itemList' can't be null";
        }
        if ($this->container['shipFromAddress'] === null) {
            $invalidProperties[] = "'shipFromAddress' can't be null";
        }
        if ($this->container['packageDimensions'] === null) {
            $invalidProperties[] = "'packageDimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['shippingServiceOptions'] === null) {
            $invalidProperties[] = "'shippingServiceOptions' can't be null";
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
     * @param string $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string|null $sellerOrderId A seller-defined order identifier.
     *
     * @return self
     */
    public function setSellerOrderId($sellerOrderId)
    {
        if (!is_null($sellerOrderId) && (mb_strlen($sellerOrderId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $sellerOrderId when calling ShipmentRequestDetailsV0., must be smaller than or equal to 64.');
        }

        $this->container['sellerOrderId'] = $sellerOrderId;

        return $this;
    }

    /**
     * Gets itemList
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ItemV0[]
     */
    public function getItemList()
    {
        return $this->container['itemList'];
    }

    /**
     * Sets itemList
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ItemV0[] $itemList The list of items to be included in a shipment.
     *
     * @return self
     */
    public function setItemList($itemList)
    {
        $this->container['itemList'] = $itemList;

        return $this;
    }

    /**
     * Gets shipFromAddress
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\AddressV0
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\AddressV0 $shipFromAddress shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

        return $this;
    }

    /**
     * Gets packageDimensions
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\PackageDimensionsV0
     */
    public function getPackageDimensions()
    {
        return $this->container['packageDimensions'];
    }

    /**
     * Sets packageDimensions
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\PackageDimensionsV0 $packageDimensions packageDimensions
     *
     * @return self
     */
    public function setPackageDimensions($packageDimensions)
    {
        $this->container['packageDimensions'] = $packageDimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\WeightV0
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\WeightV0 $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets mustArriveByDate
     *
     * @return \DateTime|null
     */
    public function getMustArriveByDate()
    {
        return $this->container['mustArriveByDate'];
    }

    /**
     * Sets mustArriveByDate
     *
     * @param \DateTime|null $mustArriveByDate Date-time formatted timestamp.
     *
     * @return self
     */
    public function setMustArriveByDate($mustArriveByDate)
    {
        $this->container['mustArriveByDate'] = $mustArriveByDate;

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
     * @param \DateTime|null $shipDate Date-time formatted timestamp.
     *
     * @return self
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets shippingServiceOptions
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ShippingServiceOptionsV0
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shippingServiceOptions'];
    }

    /**
     * Sets shippingServiceOptions
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ShippingServiceOptionsV0 $shippingServiceOptions shippingServiceOptions
     *
     * @return self
     */
    public function setShippingServiceOptions($shippingServiceOptions)
    {
        $this->container['shippingServiceOptions'] = $shippingServiceOptions;

        return $this;
    }

    /**
     * Gets labelCustomization
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\LabelCustomizationV0|null
     */
    public function getLabelCustomization()
    {
        return $this->container['labelCustomization'];
    }

    /**
     * Sets labelCustomization
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\LabelCustomizationV0|null $labelCustomization labelCustomization
     *
     * @return self
     */
    public function setLabelCustomization($labelCustomization)
    {
        $this->container['labelCustomization'] = $labelCustomization;

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


