<?php
/**
 * InventorySummary20240509
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * InventorySummary20240509 Class Doc Comment
 *
 * @category Class
 * @description Summary of inventory per SKU.
 * @package  Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InventorySummary20240509 implements ModelInterface, ArrayAccess, \JsonSerializable
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
        'inventoryDetails'     => '\Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509\Model\InventoryDetails20240509',
        'sku'                  => 'string',
        'totalInboundQuantity' => 'int',
        'totalOnhandQuantity'  => 'int',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'inventoryDetails'     => null,
        'sku'                  => null,
        'totalInboundQuantity' => 'int64',
        'totalOnhandQuantity'  => 'int64',
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
        'inventoryDetails'     => 'inventoryDetails',
        'sku'                  => 'sku',
        'totalInboundQuantity' => 'totalInboundQuantity',
        'totalOnhandQuantity'  => 'totalOnhandQuantity',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventoryDetails'     => 'setInventoryDetails',
        'sku'                  => 'setSku',
        'totalInboundQuantity' => 'setTotalInboundQuantity',
        'totalOnhandQuantity'  => 'setTotalOnhandQuantity',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventoryDetails'     => 'getInventoryDetails',
        'sku'                  => 'getSku',
        'totalInboundQuantity' => 'getTotalInboundQuantity',
        'totalOnhandQuantity'  => 'getTotalOnhandQuantity',
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
        $this->container['inventoryDetails'] = $data['inventoryDetails'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['totalInboundQuantity'] = $data['totalInboundQuantity'] ?? null;
        $this->container['totalOnhandQuantity'] = $data['totalOnhandQuantity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * Gets inventoryDetails
     *
     * @return \Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509\Model\InventoryDetails20240509|null
     */
    public function getInventoryDetails()
    {
        return $this->container['inventoryDetails'];
    }

    /**
     * Sets inventoryDetails
     *
     * @param \Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509\Model\InventoryDetails20240509|null $inventoryDetails inventoryDetails
     *
     * @return self
     */
    public function setInventoryDetails($inventoryDetails)
    {
        $this->container['inventoryDetails'] = $inventoryDetails;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The seller or merchant SKU.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets totalInboundQuantity
     *
     * @return int|null
     */
    public function getTotalInboundQuantity()
    {
        return $this->container['totalInboundQuantity'];
    }

    /**
     * Sets totalInboundQuantity
     *
     * @param int|null $totalInboundQuantity Total quantity that is in-transit from the seller and has not yet been received at an AWD Distribution Center
     *
     * @return self
     */
    public function setTotalInboundQuantity($totalInboundQuantity)
    {
        $this->container['totalInboundQuantity'] = $totalInboundQuantity;

        return $this;
    }

    /**
     * Gets totalOnhandQuantity
     *
     * @return int|null
     */
    public function getTotalOnhandQuantity()
    {
        return $this->container['totalOnhandQuantity'];
    }

    /**
     * Sets totalOnhandQuantity
     *
     * @param int|null $totalOnhandQuantity Total quantity that is present in AWD distribution centers.
     *
     * @return self
     */
    public function setTotalOnhandQuantity($totalOnhandQuantity)
    {
        $this->container['totalOnhandQuantity'] = $totalOnhandQuantity;

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
     * @param mixed $value Value to be set
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


