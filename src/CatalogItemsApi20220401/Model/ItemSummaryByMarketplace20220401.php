<?php
/**
 * ItemSummaryByMarketplace20220401
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\CatalogItemsApi20220401
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\CatalogItemsApi20220401\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ItemSummaryByMarketplace20220401 Class Doc Comment
 *
 * @category Class
 * @description Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 * @package  Webcom\Amazon\Rest\CatalogItemsApi20220401
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemSummaryByMarketplace20220401 implements ModelInterface, ArrayAccess, \JsonSerializable
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
        'marketplaceId'           => 'string',
        'adultProduct'            => 'bool',
        'autographed'             => 'bool',
        'brand'                   => 'string',
        'browseClassification'    => '\Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemBrowseClassification20220401',
        'color'                   => 'string',
        'contributors'            => '\Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemContributor20220401[]',
        'itemClassification'      => 'string',
        'itemName'                => 'string',
        'manufacturer'            => 'string',
        'memorabilia'             => 'bool',
        'modelNumber'             => 'string',
        'packageQuantity'         => 'int',
        'partNumber'              => 'string',
        'releaseDate'             => '\DateTime',
        'size'                    => 'string',
        'style'                   => 'string',
        'tradeInEligible'         => 'bool',
        'websiteDisplayGroup'     => 'string',
        'websiteDisplayGroupName' => 'string',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'marketplaceId'           => null,
        'adultProduct'            => null,
        'autographed'             => null,
        'brand'                   => null,
        'browseClassification'    => null,
        'color'                   => null,
        'contributors'            => null,
        'itemClassification'      => null,
        'itemName'                => null,
        'manufacturer'            => null,
        'memorabilia'             => null,
        'modelNumber'             => null,
        'packageQuantity'         => null,
        'partNumber'              => null,
        'releaseDate'             => 'date',
        'size'                    => null,
        'style'                   => null,
        'tradeInEligible'         => null,
        'websiteDisplayGroup'     => null,
        'websiteDisplayGroupName' => null,
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
        'marketplaceId'           => 'marketplaceId',
        'adultProduct'            => 'adultProduct',
        'autographed'             => 'autographed',
        'brand'                   => 'brand',
        'browseClassification'    => 'browseClassification',
        'color'                   => 'color',
        'contributors'            => 'contributors',
        'itemClassification'      => 'itemClassification',
        'itemName'                => 'itemName',
        'manufacturer'            => 'manufacturer',
        'memorabilia'             => 'memorabilia',
        'modelNumber'             => 'modelNumber',
        'packageQuantity'         => 'packageQuantity',
        'partNumber'              => 'partNumber',
        'releaseDate'             => 'releaseDate',
        'size'                    => 'size',
        'style'                   => 'style',
        'tradeInEligible'         => 'tradeInEligible',
        'websiteDisplayGroup'     => 'websiteDisplayGroup',
        'websiteDisplayGroupName' => 'websiteDisplayGroupName',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId'           => 'setMarketplaceId',
        'adultProduct'            => 'setAdultProduct',
        'autographed'             => 'setAutographed',
        'brand'                   => 'setBrand',
        'browseClassification'    => 'setBrowseClassification',
        'color'                   => 'setColor',
        'contributors'            => 'setContributors',
        'itemClassification'      => 'setItemClassification',
        'itemName'                => 'setItemName',
        'manufacturer'            => 'setManufacturer',
        'memorabilia'             => 'setMemorabilia',
        'modelNumber'             => 'setModelNumber',
        'packageQuantity'         => 'setPackageQuantity',
        'partNumber'              => 'setPartNumber',
        'releaseDate'             => 'setReleaseDate',
        'size'                    => 'setSize',
        'style'                   => 'setStyle',
        'tradeInEligible'         => 'setTradeInEligible',
        'websiteDisplayGroup'     => 'setWebsiteDisplayGroup',
        'websiteDisplayGroupName' => 'setWebsiteDisplayGroupName',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId'           => 'getMarketplaceId',
        'adultProduct'            => 'getAdultProduct',
        'autographed'             => 'getAutographed',
        'brand'                   => 'getBrand',
        'browseClassification'    => 'getBrowseClassification',
        'color'                   => 'getColor',
        'contributors'            => 'getContributors',
        'itemClassification'      => 'getItemClassification',
        'itemName'                => 'getItemName',
        'manufacturer'            => 'getManufacturer',
        'memorabilia'             => 'getMemorabilia',
        'modelNumber'             => 'getModelNumber',
        'packageQuantity'         => 'getPackageQuantity',
        'partNumber'              => 'getPartNumber',
        'releaseDate'             => 'getReleaseDate',
        'size'                    => 'getSize',
        'style'                   => 'getStyle',
        'tradeInEligible'         => 'getTradeInEligible',
        'websiteDisplayGroup'     => 'getWebsiteDisplayGroup',
        'websiteDisplayGroupName' => 'getWebsiteDisplayGroupName',
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

    const ITEM_CLASSIFICATION_BASE_PRODUCT = 'BASE_PRODUCT';
    const ITEM_CLASSIFICATION_OTHER = 'OTHER';
    const ITEM_CLASSIFICATION_PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
    const ITEM_CLASSIFICATION_VARIATION_PARENT = 'VARIATION_PARENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemClassificationAllowableValues()
    {
        return [
            self::ITEM_CLASSIFICATION_BASE_PRODUCT,
            self::ITEM_CLASSIFICATION_OTHER,
            self::ITEM_CLASSIFICATION_PRODUCT_BUNDLE,
            self::ITEM_CLASSIFICATION_VARIATION_PARENT,
        ];
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
        $this->container['adultProduct'] = $data['adultProduct'] ?? null;
        $this->container['autographed'] = $data['autographed'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['browseClassification'] = $data['browseClassification'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['contributors'] = $data['contributors'] ?? null;
        $this->container['itemClassification'] = $data['itemClassification'] ?? null;
        $this->container['itemName'] = $data['itemName'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['memorabilia'] = $data['memorabilia'] ?? null;
        $this->container['modelNumber'] = $data['modelNumber'] ?? null;
        $this->container['packageQuantity'] = $data['packageQuantity'] ?? null;
        $this->container['partNumber'] = $data['partNumber'] ?? null;
        $this->container['releaseDate'] = $data['releaseDate'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['style'] = $data['style'] ?? null;
        $this->container['tradeInEligible'] = $data['tradeInEligible'] ?? null;
        $this->container['websiteDisplayGroup'] = $data['websiteDisplayGroup'] ?? null;
        $this->container['websiteDisplayGroupName'] = $data['websiteDisplayGroupName'] ?? null;
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
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($this->container['itemClassification']) && !in_array($this->container['itemClassification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'itemClassification', must be one of '%s'",
                $this->container['itemClassification'],
                implode("', '", $allowedValues)
            );
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
     * Gets adultProduct
     *
     * @return bool|null
     */
    public function getAdultProduct()
    {
        return $this->container['adultProduct'];
    }

    /**
     * Sets adultProduct
     *
     * @param bool|null $adultProduct Identifies an Amazon catalog item is intended for an adult audience or is sexual in nature.
     *
     * @return self
     */
    public function setAdultProduct($adultProduct)
    {
        $this->container['adultProduct'] = $adultProduct;

        return $this;
    }

    /**
     * Gets autographed
     *
     * @return bool|null
     */
    public function getAutographed()
    {
        return $this->container['autographed'];
    }

    /**
     * Sets autographed
     *
     * @param bool|null $autographed Identifies an Amazon catalog item is autographed by a player or celebrity.
     *
     * @return self
     */
    public function setAutographed($autographed)
    {
        $this->container['autographed'] = $autographed;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Name of the brand associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets browseClassification
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemBrowseClassification20220401|null
     */
    public function getBrowseClassification()
    {
        return $this->container['browseClassification'];
    }

    /**
     * Sets browseClassification
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemBrowseClassification20220401|null $browseClassification browseClassification
     *
     * @return self
     */
    public function setBrowseClassification($browseClassification)
    {
        $this->container['browseClassification'] = $browseClassification;

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
     * @param string|null $color Name of the color associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets contributors
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemContributor20220401[]|null
     */
    public function getContributors()
    {
        return $this->container['contributors'];
    }

    /**
     * Sets contributors
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemContributor20220401[]|null $contributors Individual contributors to the creation of an item, such as the authors or actors.
     *
     * @return self
     */
    public function setContributors($contributors)
    {
        $this->container['contributors'] = $contributors;

        return $this;
    }

    /**
     * Gets itemClassification
     *
     * @return string|null
     */
    public function getItemClassification()
    {
        return $this->container['itemClassification'];
    }

    /**
     * Sets itemClassification
     *
     * @param string|null $itemClassification Classification type associated with the Amazon catalog item.
     *
     * @return self
     */
    public function setItemClassification($itemClassification)
    {
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($itemClassification) && !in_array($itemClassification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'itemClassification', must be one of '%s'",
                    $itemClassification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['itemClassification'] = $itemClassification;

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
     * Gets memorabilia
     *
     * @return bool|null
     */
    public function getMemorabilia()
    {
        return $this->container['memorabilia'];
    }

    /**
     * Sets memorabilia
     *
     * @param bool|null $memorabilia Identifies an Amazon catalog item is memorabilia valued for its connection with historical events, culture, or entertainment.
     *
     * @return self
     */
    public function setMemorabilia($memorabilia)
    {
        $this->container['memorabilia'] = $memorabilia;

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
     * @param int|null $packageQuantity Quantity of an Amazon catalog item in one package.
     *
     * @return self
     */
    public function setPackageQuantity($packageQuantity)
    {
        $this->container['packageQuantity'] = $packageQuantity;

        return $this;
    }

    /**
     * Gets partNumber
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['partNumber'];
    }

    /**
     * Sets partNumber
     *
     * @param string|null $partNumber Part number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setPartNumber($partNumber)
    {
        $this->container['partNumber'] = $partNumber;

        return $this;
    }

    /**
     * Gets releaseDate
     *
     * @return \DateTime|null
     */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
     * Sets releaseDate
     *
     * @param \DateTime|null $releaseDate First date on which an Amazon catalog item is shippable to customers.
     *
     * @return self
     */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;

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
     * @param string|null $size Name of the size associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string|null $style Name of the style associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets tradeInEligible
     *
     * @return bool|null
     */
    public function getTradeInEligible()
    {
        return $this->container['tradeInEligible'];
    }

    /**
     * Sets tradeInEligible
     *
     * @param bool|null $tradeInEligible Identifies an Amazon catalog item is eligible for trade-in.
     *
     * @return self
     */
    public function setTradeInEligible($tradeInEligible)
    {
        $this->container['tradeInEligible'] = $tradeInEligible;

        return $this;
    }

    /**
     * Gets websiteDisplayGroup
     *
     * @return string|null
     */
    public function getWebsiteDisplayGroup()
    {
        return $this->container['websiteDisplayGroup'];
    }

    /**
     * Sets websiteDisplayGroup
     *
     * @param string|null $websiteDisplayGroup Identifier of the website display group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setWebsiteDisplayGroup($websiteDisplayGroup)
    {
        $this->container['websiteDisplayGroup'] = $websiteDisplayGroup;

        return $this;
    }

    /**
     * Gets websiteDisplayGroupName
     *
     * @return string|null
     */
    public function getWebsiteDisplayGroupName()
    {
        return $this->container['websiteDisplayGroupName'];
    }

    /**
     * Sets websiteDisplayGroupName
     *
     * @param string|null $websiteDisplayGroupName Display name of the website display group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setWebsiteDisplayGroupName($websiteDisplayGroupName)
    {
        $this->container['websiteDisplayGroupName'] = $websiteDisplayGroupName;

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


