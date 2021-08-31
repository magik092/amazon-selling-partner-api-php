<?php
/**
 * OrderItemStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorOrdersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace Webcom\Amazon\Rest\VendorOrdersApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * OrderItemStatus Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorOrdersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemSequenceNumber' => 'string',
        'buyerProductIdentifier' => 'string',
        'vendorProductIdentifier' => 'string',
        'netCost' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\Money',
        'listPrice' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\Money',
        'orderedQuantity' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\OrderItemStatusOrderedQuantity',
        'acknowledgementStatus' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\OrderItemStatusAcknowledgementStatus'
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
        'netCost' => null,
        'listPrice' => null,
        'orderedQuantity' => null,
        'acknowledgementStatus' => null
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
        'netCost' => 'netCost',
        'listPrice' => 'listPrice',
        'orderedQuantity' => 'orderedQuantity',
        'acknowledgementStatus' => 'acknowledgementStatus'
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
        'netCost' => 'setNetCost',
        'listPrice' => 'setListPrice',
        'orderedQuantity' => 'setOrderedQuantity',
        'acknowledgementStatus' => 'setAcknowledgementStatus'
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
        'netCost' => 'getNetCost',
        'listPrice' => 'getListPrice',
        'orderedQuantity' => 'getOrderedQuantity',
        'acknowledgementStatus' => 'getAcknowledgementStatus'
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
        $this->container['netCost'] = $data['netCost'] ?? null;
        $this->container['listPrice'] = $data['listPrice'] ?? null;
        $this->container['orderedQuantity'] = $data['orderedQuantity'] ?? null;
        $this->container['acknowledgementStatus'] = $data['acknowledgementStatus'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemSequenceNumber'] === null) {
            $invalidProperties[] = "'itemSequenceNumber' can't be null";
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
     * Gets itemSequenceNumber
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param string $itemSequenceNumber Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
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
     * @param string|null $buyerProductIdentifier Buyer's Standard Identification Number (ASIN) of an item.
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
     * @param string|null $vendorProductIdentifier The vendor selected product identification of the item.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets netCost
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\Money|null
     */
    public function getNetCost()
    {
        return $this->container['netCost'];
    }

    /**
     * Sets netCost
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\Money|null $netCost netCost
     *
     * @return self
     */
    public function setNetCost($netCost)
    {
        $this->container['netCost'] = $netCost;

        return $this;
    }

    /**
     * Gets listPrice
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\Money|null
     */
    public function getListPrice()
    {
        return $this->container['listPrice'];
    }

    /**
     * Sets listPrice
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\Money|null $listPrice listPrice
     *
     * @return self
     */
    public function setListPrice($listPrice)
    {
        $this->container['listPrice'] = $listPrice;

        return $this;
    }

    /**
     * Gets orderedQuantity
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\OrderItemStatusOrderedQuantity|null
     */
    public function getOrderedQuantity()
    {
        return $this->container['orderedQuantity'];
    }

    /**
     * Sets orderedQuantity
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\OrderItemStatusOrderedQuantity|null $orderedQuantity orderedQuantity
     *
     * @return self
     */
    public function setOrderedQuantity($orderedQuantity)
    {
        $this->container['orderedQuantity'] = $orderedQuantity;

        return $this;
    }

    /**
     * Gets acknowledgementStatus
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\OrderItemStatusAcknowledgementStatus|null
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgementStatus'];
    }

    /**
     * Sets acknowledgementStatus
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\OrderItemStatusAcknowledgementStatus|null $acknowledgementStatus acknowledgementStatus
     *
     * @return self
     */
    public function setAcknowledgementStatus($acknowledgementStatus)
    {
        $this->container['acknowledgementStatus'] = $acknowledgementStatus;

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


