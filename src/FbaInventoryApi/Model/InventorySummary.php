<?php
/**
 * InventorySummary
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FbaInventoryApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network. Today this API is available only in the North America region. In 2021 we plan to release this API in the Europe and Far East regions.
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

namespace Webcom\Amazon\Rest\FbaInventoryApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * InventorySummary Class Doc Comment
 *
 * @category Class
 * @description Inventory summary for a specific item.
 * @package  Webcom\Amazon\Rest\FbaInventoryApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InventorySummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventorySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'fnSku' => 'string',
        'sellerSku' => 'string',
        'condition' => 'string',
        'inventoryDetails' => '\Webcom\Amazon\Rest\FbaInventoryApi\Model\InventoryDetails',
        'lastUpdatedTime' => '\DateTime',
        'productName' => 'string',
        'totalQuantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'fnSku' => null,
        'sellerSku' => null,
        'condition' => null,
        'inventoryDetails' => null,
        'lastUpdatedTime' => 'date-time',
        'productName' => null,
        'totalQuantity' => null
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
        'asin' => 'asin',
        'fnSku' => 'fnSku',
        'sellerSku' => 'sellerSku',
        'condition' => 'condition',
        'inventoryDetails' => 'inventoryDetails',
        'lastUpdatedTime' => 'lastUpdatedTime',
        'productName' => 'productName',
        'totalQuantity' => 'totalQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'fnSku' => 'setFnSku',
        'sellerSku' => 'setSellerSku',
        'condition' => 'setCondition',
        'inventoryDetails' => 'setInventoryDetails',
        'lastUpdatedTime' => 'setLastUpdatedTime',
        'productName' => 'setProductName',
        'totalQuantity' => 'setTotalQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'fnSku' => 'getFnSku',
        'sellerSku' => 'getSellerSku',
        'condition' => 'getCondition',
        'inventoryDetails' => 'getInventoryDetails',
        'lastUpdatedTime' => 'getLastUpdatedTime',
        'productName' => 'getProductName',
        'totalQuantity' => 'getTotalQuantity'
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['fnSku'] = $data['fnSku'] ?? null;
        $this->container['sellerSku'] = $data['sellerSku'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['inventoryDetails'] = $data['inventoryDetails'] ?? null;
        $this->container['lastUpdatedTime'] = $data['lastUpdatedTime'] ?? null;
        $this->container['productName'] = $data['productName'] ?? null;
        $this->container['totalQuantity'] = $data['totalQuantity'] ?? null;
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
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets fnSku
     *
     * @return string|null
     */
    public function getFnSku()
    {
        return $this->container['fnSku'];
    }

    /**
     * Sets fnSku
     *
     * @param string|null $fnSku Amazon's fulfillment network SKU identifier.
     *
     * @return self
     */
    public function setFnSku($fnSku)
    {
        $this->container['fnSku'] = $fnSku;

        return $this;
    }

    /**
     * Gets sellerSku
     *
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['sellerSku'];
    }

    /**
     * Sets sellerSku
     *
     * @param string|null $sellerSku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($sellerSku)
    {
        $this->container['sellerSku'] = $sellerSku;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition The condition of the item as described by the seller (for example, New Item).
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets inventoryDetails
     *
     * @return \Webcom\Amazon\Rest\FbaInventoryApi\Model\InventoryDetails|null
     */
    public function getInventoryDetails()
    {
        return $this->container['inventoryDetails'];
    }

    /**
     * Sets inventoryDetails
     *
     * @param \Webcom\Amazon\Rest\FbaInventoryApi\Model\InventoryDetails|null $inventoryDetails inventoryDetails
     *
     * @return self
     */
    public function setInventoryDetails($inventoryDetails)
    {
        $this->container['inventoryDetails'] = $inventoryDetails;

        return $this;
    }

    /**
     * Gets lastUpdatedTime
     *
     * @return \DateTime|null
     */
    public function getLastUpdatedTime()
    {
        return $this->container['lastUpdatedTime'];
    }

    /**
     * Sets lastUpdatedTime
     *
     * @param \DateTime|null $lastUpdatedTime The date and time that any quantity was last updated.
     *
     * @return self
     */
    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->container['lastUpdatedTime'] = $lastUpdatedTime;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName The localized language product title of the item within the specific marketplace.
     *
     * @return self
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets totalQuantity
     *
     * @return int|null
     */
    public function getTotalQuantity()
    {
        return $this->container['totalQuantity'];
    }

    /**
     * Sets totalQuantity
     *
     * @param int|null $totalQuantity The total number of units in an inbound shipment or in Amazon fulfillment centers.
     *
     * @return self
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->container['totalQuantity'] = $totalQuantity;

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


