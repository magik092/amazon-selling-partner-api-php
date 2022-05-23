<?php
/**
 * ItemSummaryByMarketplace
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\CatalogItemsApiV20201201
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, see the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2020-12-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-12-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\CatalogItemsApiV20201201\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ItemSummaryByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 * @package  Webcom\Amazon\Rest\CatalogItemsApiV20201201
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemSummaryByMarketplace implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'brandName' => 'string',
        'browseNode' => 'string',
        'colorName' => 'string',
        'itemName' => 'string',
        'manufacturer' => 'string',
        'modelNumber' => 'string',
        'sizeName' => 'string',
        'styleName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'brandName' => null,
        'browseNode' => null,
        'colorName' => null,
        'itemName' => null,
        'manufacturer' => null,
        'modelNumber' => null,
        'sizeName' => null,
        'styleName' => null
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
        'marketplaceId' => 'marketplaceId',
        'brandName' => 'brandName',
        'browseNode' => 'browseNode',
        'colorName' => 'colorName',
        'itemName' => 'itemName',
        'manufacturer' => 'manufacturer',
        'modelNumber' => 'modelNumber',
        'sizeName' => 'sizeName',
        'styleName' => 'styleName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'brandName' => 'setBrandName',
        'browseNode' => 'setBrowseNode',
        'colorName' => 'setColorName',
        'itemName' => 'setItemName',
        'manufacturer' => 'setManufacturer',
        'modelNumber' => 'setModelNumber',
        'sizeName' => 'setSizeName',
        'styleName' => 'setStyleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'brandName' => 'getBrandName',
        'browseNode' => 'getBrowseNode',
        'colorName' => 'getColorName',
        'itemName' => 'getItemName',
        'manufacturer' => 'getManufacturer',
        'modelNumber' => 'getModelNumber',
        'sizeName' => 'getSizeName',
        'styleName' => 'getStyleName'
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['browseNode'] = $data['browseNode'] ?? null;
        $this->container['colorName'] = $data['colorName'] ?? null;
        $this->container['itemName'] = $data['itemName'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['modelNumber'] = $data['modelNumber'] ?? null;
        $this->container['sizeName'] = $data['sizeName'] ?? null;
        $this->container['styleName'] = $data['styleName'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
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
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId Amazon marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName Name of the brand associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets browseNode
     *
     * @return string|null
     */
    public function getBrowseNode()
    {
        return $this->container['browseNode'];
    }

    /**
     * Sets browseNode
     *
     * @param string|null $browseNode Identifier of the browse node associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrowseNode($browseNode)
    {
        $this->container['browseNode'] = $browseNode;

        return $this;
    }

    /**
     * Gets colorName
     *
     * @return string|null
     */
    public function getColorName()
    {
        return $this->container['colorName'];
    }

    /**
     * Sets colorName
     *
     * @param string|null $colorName Name of the color associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setColorName($colorName)
    {
        $this->container['colorName'] = $colorName;

        return $this;
    }

    /**
     * Gets itemName
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName
     *
     * @param string|null $itemName Name, or title, associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Name of the manufacturer associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets modelNumber
     *
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->container['modelNumber'];
    }

    /**
     * Sets modelNumber
     *
     * @param string|null $modelNumber Model number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setModelNumber($modelNumber)
    {
        $this->container['modelNumber'] = $modelNumber;

        return $this;
    }

    /**
     * Gets sizeName
     *
     * @return string|null
     */
    public function getSizeName()
    {
        return $this->container['sizeName'];
    }

    /**
     * Sets sizeName
     *
     * @param string|null $sizeName Name of the size associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setSizeName($sizeName)
    {
        $this->container['sizeName'] = $sizeName;

        return $this;
    }

    /**
     * Gets styleName
     *
     * @return string|null
     */
    public function getStyleName()
    {
        return $this->container['styleName'];
    }

    /**
     * Sets styleName
     *
     * @param string|null $styleName Name of the style associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setStyleName($styleName)
    {
        $this->container['styleName'] = $styleName;

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


