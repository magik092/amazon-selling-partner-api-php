<?php
/**
 * RelationshipType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\CatalogItemsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
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

namespace Webcom\Amazon\Rest\CatalogItemsApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * RelationshipType Class Doc Comment
 *
 * @category Class
 * @description Specific variations of the item.
 * @package  Webcom\Amazon\Rest\CatalogItemsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RelationshipType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RelationshipType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifiers' => '\Webcom\Amazon\Rest\CatalogItemsApi\Model\IdentifierType',
        'color' => 'string',
        'edition' => 'string',
        'flavor' => 'string',
        'gemType' => 'string[]',
        'golfClubFlex' => 'string',
        'handOrientation' => 'string',
        'hardwarePlatform' => 'string',
        'materialType' => 'string[]',
        'metalType' => 'string',
        'model' => 'string',
        'operatingSystem' => 'string[]',
        'productTypeSubcategory' => 'string',
        'ringSize' => 'string',
        'shaftMaterial' => 'string',
        'scent' => 'string',
        'size' => 'string',
        'sizePerPearl' => 'string',
        'golfClubLoft' => '\Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits',
        'totalDiamondWeight' => '\Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits',
        'totalGemWeight' => '\Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits',
        'packageQuantity' => 'int',
        'itemDimensions' => '\Webcom\Amazon\Rest\CatalogItemsApi\Model\DimensionType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifiers' => null,
        'color' => null,
        'edition' => null,
        'flavor' => null,
        'gemType' => null,
        'golfClubFlex' => null,
        'handOrientation' => null,
        'hardwarePlatform' => null,
        'materialType' => null,
        'metalType' => null,
        'model' => null,
        'operatingSystem' => null,
        'productTypeSubcategory' => null,
        'ringSize' => null,
        'shaftMaterial' => null,
        'scent' => null,
        'size' => null,
        'sizePerPearl' => null,
        'golfClubLoft' => null,
        'totalDiamondWeight' => null,
        'totalGemWeight' => null,
        'packageQuantity' => null,
        'itemDimensions' => null
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
        'identifiers' => 'Identifiers',
        'color' => 'Color',
        'edition' => 'Edition',
        'flavor' => 'Flavor',
        'gemType' => 'GemType',
        'golfClubFlex' => 'GolfClubFlex',
        'handOrientation' => 'HandOrientation',
        'hardwarePlatform' => 'HardwarePlatform',
        'materialType' => 'MaterialType',
        'metalType' => 'MetalType',
        'model' => 'Model',
        'operatingSystem' => 'OperatingSystem',
        'productTypeSubcategory' => 'ProductTypeSubcategory',
        'ringSize' => 'RingSize',
        'shaftMaterial' => 'ShaftMaterial',
        'scent' => 'Scent',
        'size' => 'Size',
        'sizePerPearl' => 'SizePerPearl',
        'golfClubLoft' => 'GolfClubLoft',
        'totalDiamondWeight' => 'TotalDiamondWeight',
        'totalGemWeight' => 'TotalGemWeight',
        'packageQuantity' => 'PackageQuantity',
        'itemDimensions' => 'ItemDimensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifiers' => 'setIdentifiers',
        'color' => 'setColor',
        'edition' => 'setEdition',
        'flavor' => 'setFlavor',
        'gemType' => 'setGemType',
        'golfClubFlex' => 'setGolfClubFlex',
        'handOrientation' => 'setHandOrientation',
        'hardwarePlatform' => 'setHardwarePlatform',
        'materialType' => 'setMaterialType',
        'metalType' => 'setMetalType',
        'model' => 'setModel',
        'operatingSystem' => 'setOperatingSystem',
        'productTypeSubcategory' => 'setProductTypeSubcategory',
        'ringSize' => 'setRingSize',
        'shaftMaterial' => 'setShaftMaterial',
        'scent' => 'setScent',
        'size' => 'setSize',
        'sizePerPearl' => 'setSizePerPearl',
        'golfClubLoft' => 'setGolfClubLoft',
        'totalDiamondWeight' => 'setTotalDiamondWeight',
        'totalGemWeight' => 'setTotalGemWeight',
        'packageQuantity' => 'setPackageQuantity',
        'itemDimensions' => 'setItemDimensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifiers' => 'getIdentifiers',
        'color' => 'getColor',
        'edition' => 'getEdition',
        'flavor' => 'getFlavor',
        'gemType' => 'getGemType',
        'golfClubFlex' => 'getGolfClubFlex',
        'handOrientation' => 'getHandOrientation',
        'hardwarePlatform' => 'getHardwarePlatform',
        'materialType' => 'getMaterialType',
        'metalType' => 'getMetalType',
        'model' => 'getModel',
        'operatingSystem' => 'getOperatingSystem',
        'productTypeSubcategory' => 'getProductTypeSubcategory',
        'ringSize' => 'getRingSize',
        'shaftMaterial' => 'getShaftMaterial',
        'scent' => 'getScent',
        'size' => 'getSize',
        'sizePerPearl' => 'getSizePerPearl',
        'golfClubLoft' => 'getGolfClubLoft',
        'totalDiamondWeight' => 'getTotalDiamondWeight',
        'totalGemWeight' => 'getTotalGemWeight',
        'packageQuantity' => 'getPackageQuantity',
        'itemDimensions' => 'getItemDimensions'
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
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['edition'] = $data['edition'] ?? null;
        $this->container['flavor'] = $data['flavor'] ?? null;
        $this->container['gemType'] = $data['gemType'] ?? null;
        $this->container['golfClubFlex'] = $data['golfClubFlex'] ?? null;
        $this->container['handOrientation'] = $data['handOrientation'] ?? null;
        $this->container['hardwarePlatform'] = $data['hardwarePlatform'] ?? null;
        $this->container['materialType'] = $data['materialType'] ?? null;
        $this->container['metalType'] = $data['metalType'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['operatingSystem'] = $data['operatingSystem'] ?? null;
        $this->container['productTypeSubcategory'] = $data['productTypeSubcategory'] ?? null;
        $this->container['ringSize'] = $data['ringSize'] ?? null;
        $this->container['shaftMaterial'] = $data['shaftMaterial'] ?? null;
        $this->container['scent'] = $data['scent'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['sizePerPearl'] = $data['sizePerPearl'] ?? null;
        $this->container['golfClubLoft'] = $data['golfClubLoft'] ?? null;
        $this->container['totalDiamondWeight'] = $data['totalDiamondWeight'] ?? null;
        $this->container['totalGemWeight'] = $data['totalGemWeight'] ?? null;
        $this->container['packageQuantity'] = $data['packageQuantity'] ?? null;
        $this->container['itemDimensions'] = $data['itemDimensions'] ?? null;
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
     * Gets identifiers
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi\Model\IdentifierType|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi\Model\IdentifierType|null $identifiers identifiers
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color The color variation of the item.
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets edition
     *
     * @return string|null
     */
    public function getEdition()
    {
        return $this->container['edition'];
    }

    /**
     * Sets edition
     *
     * @param string|null $edition The edition variation of the item.
     *
     * @return self
     */
    public function setEdition($edition)
    {
        $this->container['edition'] = $edition;

        return $this;
    }

    /**
     * Gets flavor
     *
     * @return string|null
     */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
     * Sets flavor
     *
     * @param string|null $flavor The flavor variation of the item.
     *
     * @return self
     */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;

        return $this;
    }

    /**
     * Gets gemType
     *
     * @return string[]|null
     */
    public function getGemType()
    {
        return $this->container['gemType'];
    }

    /**
     * Sets gemType
     *
     * @param string[]|null $gemType The gem type variations of the item.
     *
     * @return self
     */
    public function setGemType($gemType)
    {
        $this->container['gemType'] = $gemType;

        return $this;
    }

    /**
     * Gets golfClubFlex
     *
     * @return string|null
     */
    public function getGolfClubFlex()
    {
        return $this->container['golfClubFlex'];
    }

    /**
     * Sets golfClubFlex
     *
     * @param string|null $golfClubFlex The golf club flex variation of an item.
     *
     * @return self
     */
    public function setGolfClubFlex($golfClubFlex)
    {
        $this->container['golfClubFlex'] = $golfClubFlex;

        return $this;
    }

    /**
     * Gets handOrientation
     *
     * @return string|null
     */
    public function getHandOrientation()
    {
        return $this->container['handOrientation'];
    }

    /**
     * Sets handOrientation
     *
     * @param string|null $handOrientation The hand orientation variation of an item.
     *
     * @return self
     */
    public function setHandOrientation($handOrientation)
    {
        $this->container['handOrientation'] = $handOrientation;

        return $this;
    }

    /**
     * Gets hardwarePlatform
     *
     * @return string|null
     */
    public function getHardwarePlatform()
    {
        return $this->container['hardwarePlatform'];
    }

    /**
     * Sets hardwarePlatform
     *
     * @param string|null $hardwarePlatform The hardware platform variation of an item.
     *
     * @return self
     */
    public function setHardwarePlatform($hardwarePlatform)
    {
        $this->container['hardwarePlatform'] = $hardwarePlatform;

        return $this;
    }

    /**
     * Gets materialType
     *
     * @return string[]|null
     */
    public function getMaterialType()
    {
        return $this->container['materialType'];
    }

    /**
     * Sets materialType
     *
     * @param string[]|null $materialType The material type variations of an item.
     *
     * @return self
     */
    public function setMaterialType($materialType)
    {
        $this->container['materialType'] = $materialType;

        return $this;
    }

    /**
     * Gets metalType
     *
     * @return string|null
     */
    public function getMetalType()
    {
        return $this->container['metalType'];
    }

    /**
     * Sets metalType
     *
     * @param string|null $metalType The metal type variation of an item.
     *
     * @return self
     */
    public function setMetalType($metalType)
    {
        $this->container['metalType'] = $metalType;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The model variation of an item.
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets operatingSystem
     *
     * @return string[]|null
     */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
     * Sets operatingSystem
     *
     * @param string[]|null $operatingSystem The operating system variations of an item.
     *
     * @return self
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;

        return $this;
    }

    /**
     * Gets productTypeSubcategory
     *
     * @return string|null
     */
    public function getProductTypeSubcategory()
    {
        return $this->container['productTypeSubcategory'];
    }

    /**
     * Sets productTypeSubcategory
     *
     * @param string|null $productTypeSubcategory The product type subcategory variation of an item.
     *
     * @return self
     */
    public function setProductTypeSubcategory($productTypeSubcategory)
    {
        $this->container['productTypeSubcategory'] = $productTypeSubcategory;

        return $this;
    }

    /**
     * Gets ringSize
     *
     * @return string|null
     */
    public function getRingSize()
    {
        return $this->container['ringSize'];
    }

    /**
     * Sets ringSize
     *
     * @param string|null $ringSize The ring size variation of an item.
     *
     * @return self
     */
    public function setRingSize($ringSize)
    {
        $this->container['ringSize'] = $ringSize;

        return $this;
    }

    /**
     * Gets shaftMaterial
     *
     * @return string|null
     */
    public function getShaftMaterial()
    {
        return $this->container['shaftMaterial'];
    }

    /**
     * Sets shaftMaterial
     *
     * @param string|null $shaftMaterial The shaft material variation of an item.
     *
     * @return self
     */
    public function setShaftMaterial($shaftMaterial)
    {
        $this->container['shaftMaterial'] = $shaftMaterial;

        return $this;
    }

    /**
     * Gets scent
     *
     * @return string|null
     */
    public function getScent()
    {
        return $this->container['scent'];
    }

    /**
     * Sets scent
     *
     * @param string|null $scent The scent variation of an item.
     *
     * @return self
     */
    public function setScent($scent)
    {
        $this->container['scent'] = $scent;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size The size variation of an item.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets sizePerPearl
     *
     * @return string|null
     */
    public function getSizePerPearl()
    {
        return $this->container['sizePerPearl'];
    }

    /**
     * Sets sizePerPearl
     *
     * @param string|null $sizePerPearl The size per pearl variation of an item.
     *
     * @return self
     */
    public function setSizePerPearl($sizePerPearl)
    {
        $this->container['sizePerPearl'] = $sizePerPearl;

        return $this;
    }

    /**
     * Gets golfClubLoft
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits|null
     */
    public function getGolfClubLoft()
    {
        return $this->container['golfClubLoft'];
    }

    /**
     * Sets golfClubLoft
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits|null $golfClubLoft golfClubLoft
     *
     * @return self
     */
    public function setGolfClubLoft($golfClubLoft)
    {
        $this->container['golfClubLoft'] = $golfClubLoft;

        return $this;
    }

    /**
     * Gets totalDiamondWeight
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits|null
     */
    public function getTotalDiamondWeight()
    {
        return $this->container['totalDiamondWeight'];
    }

    /**
     * Sets totalDiamondWeight
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits|null $totalDiamondWeight totalDiamondWeight
     *
     * @return self
     */
    public function setTotalDiamondWeight($totalDiamondWeight)
    {
        $this->container['totalDiamondWeight'] = $totalDiamondWeight;

        return $this;
    }

    /**
     * Gets totalGemWeight
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits|null
     */
    public function getTotalGemWeight()
    {
        return $this->container['totalGemWeight'];
    }

    /**
     * Sets totalGemWeight
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi\Model\DecimalWithUnits|null $totalGemWeight totalGemWeight
     *
     * @return self
     */
    public function setTotalGemWeight($totalGemWeight)
    {
        $this->container['totalGemWeight'] = $totalGemWeight;

        return $this;
    }

    /**
     * Gets packageQuantity
     *
     * @return int|null
     */
    public function getPackageQuantity()
    {
        return $this->container['packageQuantity'];
    }

    /**
     * Sets packageQuantity
     *
     * @param int|null $packageQuantity The package quantity variation of an item.
     *
     * @return self
     */
    public function setPackageQuantity($packageQuantity)
    {
        $this->container['packageQuantity'] = $packageQuantity;

        return $this;
    }

    /**
     * Gets itemDimensions
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi\Model\DimensionType|null
     */
    public function getItemDimensions()
    {
        return $this->container['itemDimensions'];
    }

    /**
     * Sets itemDimensions
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi\Model\DimensionType|null $itemDimensions itemDimensions
     *
     * @return self
     */
    public function setItemDimensions($itemDimensions)
    {
        $this->container['itemDimensions'] = $itemDimensions;

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


