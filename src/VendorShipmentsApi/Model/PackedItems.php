<?php
/**
 * PackedItems
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
 * PackedItems Class Doc Comment
 *
 * @category Class
 * @description Details of the item being shipped.
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackedItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackedItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemSequenceNumber' => 'string',
        'buyerProductIdentifier' => 'string',
        'vendorProductIdentifier' => 'string',
        'packedQuantity' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\ItemQuantity',
        'itemDetails' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\PackageItemDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'itemSequenceNumber' => null,
        'buyerProductIdentifier' => null,
        'vendorProductIdentifier' => null,
        'packedQuantity' => null,
        'itemDetails' => null
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
        'itemSequenceNumber' => 'itemSequenceNumber',
        'buyerProductIdentifier' => 'buyerProductIdentifier',
        'vendorProductIdentifier' => 'vendorProductIdentifier',
        'packedQuantity' => 'packedQuantity',
        'itemDetails' => 'itemDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
        'buyerProductIdentifier' => 'setBuyerProductIdentifier',
        'vendorProductIdentifier' => 'setVendorProductIdentifier',
        'packedQuantity' => 'setPackedQuantity',
        'itemDetails' => 'setItemDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
        'buyerProductIdentifier' => 'getBuyerProductIdentifier',
        'vendorProductIdentifier' => 'getVendorProductIdentifier',
        'packedQuantity' => 'getPackedQuantity',
        'itemDetails' => 'getItemDetails'
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
        $this->container['itemSequenceNumber'] = $data['itemSequenceNumber'] ?? null;
        $this->container['buyerProductIdentifier'] = $data['buyerProductIdentifier'] ?? null;
        $this->container['vendorProductIdentifier'] = $data['vendorProductIdentifier'] ?? null;
        $this->container['packedQuantity'] = $data['packedQuantity'] ?? null;
        $this->container['itemDetails'] = $data['itemDetails'] ?? null;
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
     * Gets itemSequenceNumber
     *
     * @return string|null
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param string|null $itemSequenceNumber Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level.
     *
     * @return self
     */
    public function setItemSequenceNumber($itemSequenceNumber)
    {
        $this->container['itemSequenceNumber'] = $itemSequenceNumber;

        return $this;
    }

    /**
     * Gets buyerProductIdentifier
     *
     * @return string|null
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyerProductIdentifier'];
    }

    /**
     * Sets buyerProductIdentifier
     *
     * @param string|null $buyerProductIdentifier Buyer Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setBuyerProductIdentifier($buyerProductIdentifier)
    {
        $this->container['buyerProductIdentifier'] = $buyerProductIdentifier;

        return $this;
    }

    /**
     * Gets vendorProductIdentifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendorProductIdentifier'];
    }

    /**
     * Sets vendorProductIdentifier
     *
     * @param string|null $vendorProductIdentifier The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets packedQuantity
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\ItemQuantity|null
     */
    public function getPackedQuantity()
    {
        return $this->container['packedQuantity'];
    }

    /**
     * Sets packedQuantity
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\ItemQuantity|null $packedQuantity packedQuantity
     *
     * @return self
     */
    public function setPackedQuantity($packedQuantity)
    {
        $this->container['packedQuantity'] = $packedQuantity;

        return $this;
    }

    /**
     * Gets itemDetails
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PackageItemDetails|null
     */
    public function getItemDetails()
    {
        return $this->container['itemDetails'];
    }

    /**
     * Sets itemDetails
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PackageItemDetails|null $itemDetails itemDetails
     *
     * @return self
     */
    public function setItemDetails($itemDetails)
    {
        $this->container['itemDetails'] = $itemDetails;

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

