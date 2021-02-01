<?php
/**
 * PartneredLtlDataInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentInboundApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * PartneredLtlDataInput Class Doc Comment
 *
 * @category Class
 * @description Information that is required by an Amazon-partnered carrier to ship a Less Than Truckload/Full Truckload (LTL/FTL) inbound shipment.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PartneredLtlDataInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PartneredLtlDataInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Contact',
        'box_count' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\UnsignedIntType',
        'seller_freight_class' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\SellerFreightClass',
        'freight_ready_date' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\DateStringType',
        'pallet_list' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\PalletList',
        'total_weight' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Weight',
        'seller_declared_value' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact' => null,
        'box_count' => null,
        'seller_freight_class' => null,
        'freight_ready_date' => null,
        'pallet_list' => null,
        'total_weight' => null,
        'seller_declared_value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'contact' => 'Contact',
        'box_count' => 'BoxCount',
        'seller_freight_class' => 'SellerFreightClass',
        'freight_ready_date' => 'FreightReadyDate',
        'pallet_list' => 'PalletList',
        'total_weight' => 'TotalWeight',
        'seller_declared_value' => 'SellerDeclaredValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'box_count' => 'setBoxCount',
        'seller_freight_class' => 'setSellerFreightClass',
        'freight_ready_date' => 'setFreightReadyDate',
        'pallet_list' => 'setPalletList',
        'total_weight' => 'setTotalWeight',
        'seller_declared_value' => 'setSellerDeclaredValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'box_count' => 'getBoxCount',
        'seller_freight_class' => 'getSellerFreightClass',
        'freight_ready_date' => 'getFreightReadyDate',
        'pallet_list' => 'getPalletList',
        'total_weight' => 'getTotalWeight',
        'seller_declared_value' => 'getSellerDeclaredValue'
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
        return self::$swaggerModelName;
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['box_count'] = isset($data['box_count']) ? $data['box_count'] : null;
        $this->container['seller_freight_class'] = isset($data['seller_freight_class']) ? $data['seller_freight_class'] : null;
        $this->container['freight_ready_date'] = isset($data['freight_ready_date']) ? $data['freight_ready_date'] : null;
        $this->container['pallet_list'] = isset($data['pallet_list']) ? $data['pallet_list'] : null;
        $this->container['total_weight'] = isset($data['total_weight']) ? $data['total_weight'] : null;
        $this->container['seller_declared_value'] = isset($data['seller_declared_value']) ? $data['seller_declared_value'] : null;
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
     * Gets contact
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Contact $contact Contact information for the person in the seller's organization who is responsible for the shipment. Used by the carrier if they have questions about the shipment.
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets box_count
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\UnsignedIntType
     */
    public function getBoxCount()
    {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\UnsignedIntType $box_count The number of boxes in the shipment.
     *
     * @return $this
     */
    public function setBoxCount($box_count)
    {
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets seller_freight_class
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\SellerFreightClass
     */
    public function getSellerFreightClass()
    {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\SellerFreightClass $seller_freight_class seller_freight_class
     *
     * @return $this
     */
    public function setSellerFreightClass($seller_freight_class)
    {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }

    /**
     * Gets freight_ready_date
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\DateStringType
     */
    public function getFreightReadyDate()
    {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\DateStringType $freight_ready_date The date that the shipment will be ready to be picked up by the carrier.
     *
     * @return $this
     */
    public function setFreightReadyDate($freight_ready_date)
    {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }

    /**
     * Gets pallet_list
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\PalletList
     */
    public function getPalletList()
    {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\PalletList $pallet_list pallet_list
     *
     * @return $this
     */
    public function setPalletList($pallet_list)
    {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Weight
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Weight $total_weight The total weight of the shipment.
     *
     * @return $this
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets seller_declared_value
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Amount
     */
    public function getSellerDeclaredValue()
    {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\Amount $seller_declared_value The declaration of the total value of the inventory in the shipment.
     *
     * @return $this
     */
    public function setSellerDeclaredValue($seller_declared_value)
    {
        $this->container['seller_declared_value'] = $seller_declared_value;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

