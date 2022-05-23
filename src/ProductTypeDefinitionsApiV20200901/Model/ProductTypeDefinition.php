<?php
/**
 * ProductTypeDefinition
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Type Definitions
 *
 * The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).  For more information, see the [Product Type Definitions API Use Case Guide](doc:product-type-api-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-09-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ProductTypeDefinition Class Doc Comment
 *
 * @category Class
 * @description A product type definition represents the attributes and data requirements for a product type in the Amazon catalog. Product type definitions are used interchangeably between the Selling Partner API for Listings Items, Selling Partner API for Catalog Items, and JSON-based listings feeds in the Selling Partner API for Feeds.
 * @package  Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductTypeDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductTypeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metaSchema' => '\Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\SchemaLink',
        'schema' => '\Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\SchemaLink',
        'requirements' => 'string',
        'requirementsEnforced' => 'string',
        'propertyGroups' => 'map[string,\Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\PropertyGroup]',
        'locale' => 'string',
        'marketplaceIds' => 'string[]',
        'productType' => 'string',
        'productTypeVersion' => '\Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\ProductTypeVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'metaSchema' => null,
        'schema' => null,
        'requirements' => null,
        'requirementsEnforced' => null,
        'propertyGroups' => null,
        'locale' => null,
        'marketplaceIds' => null,
        'productType' => null,
        'productTypeVersion' => null
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
        'metaSchema' => 'metaSchema',
        'schema' => 'schema',
        'requirements' => 'requirements',
        'requirementsEnforced' => 'requirementsEnforced',
        'propertyGroups' => 'propertyGroups',
        'locale' => 'locale',
        'marketplaceIds' => 'marketplaceIds',
        'productType' => 'productType',
        'productTypeVersion' => 'productTypeVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metaSchema' => 'setMetaSchema',
        'schema' => 'setSchema',
        'requirements' => 'setRequirements',
        'requirementsEnforced' => 'setRequirementsEnforced',
        'propertyGroups' => 'setPropertyGroups',
        'locale' => 'setLocale',
        'marketplaceIds' => 'setMarketplaceIds',
        'productType' => 'setProductType',
        'productTypeVersion' => 'setProductTypeVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metaSchema' => 'getMetaSchema',
        'schema' => 'getSchema',
        'requirements' => 'getRequirements',
        'requirementsEnforced' => 'getRequirementsEnforced',
        'propertyGroups' => 'getPropertyGroups',
        'locale' => 'getLocale',
        'marketplaceIds' => 'getMarketplaceIds',
        'productType' => 'getProductType',
        'productTypeVersion' => 'getProductTypeVersion'
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

    const REQUIREMENTS_LISTING = 'LISTING';
    const REQUIREMENTS_LISTING_PRODUCT_ONLY = 'LISTING_PRODUCT_ONLY';
    const REQUIREMENTS_LISTING_OFFER_ONLY = 'LISTING_OFFER_ONLY';
    const REQUIREMENTS_ENFORCED_ENFORCED = 'ENFORCED';
    const REQUIREMENTS_ENFORCED_NOT_ENFORCED = 'NOT_ENFORCED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsAllowableValues()
    {
        return [
            self::REQUIREMENTS_LISTING,
            self::REQUIREMENTS_LISTING_PRODUCT_ONLY,
            self::REQUIREMENTS_LISTING_OFFER_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsEnforcedAllowableValues()
    {
        return [
            self::REQUIREMENTS_ENFORCED_ENFORCED,
            self::REQUIREMENTS_ENFORCED_NOT_ENFORCED,
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
        $this->container['metaSchema'] = $data['metaSchema'] ?? null;
        $this->container['schema'] = $data['schema'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
        $this->container['requirementsEnforced'] = $data['requirementsEnforced'] ?? null;
        $this->container['propertyGroups'] = $data['propertyGroups'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['marketplaceIds'] = $data['marketplaceIds'] ?? null;
        $this->container['productType'] = $data['productType'] ?? null;
        $this->container['productTypeVersion'] = $data['productTypeVersion'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['requirements'] === null) {
            $invalidProperties[] = "'requirements' can't be null";
        }
        $allowedValues = $this->getRequirementsAllowableValues();
        if (!is_null($this->container['requirements']) && !in_array($this->container['requirements'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirements', must be one of '%s'",
                $this->container['requirements'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['requirementsEnforced'] === null) {
            $invalidProperties[] = "'requirementsEnforced' can't be null";
        }
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();
        if (!is_null($this->container['requirementsEnforced']) && !in_array($this->container['requirementsEnforced'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirementsEnforced', must be one of '%s'",
                $this->container['requirementsEnforced'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['propertyGroups'] === null) {
            $invalidProperties[] = "'propertyGroups' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['marketplaceIds'] === null) {
            $invalidProperties[] = "'marketplaceIds' can't be null";
        }
        if ($this->container['productType'] === null) {
            $invalidProperties[] = "'productType' can't be null";
        }
        if ($this->container['productTypeVersion'] === null) {
            $invalidProperties[] = "'productTypeVersion' can't be null";
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
     * Gets metaSchema
     *
     * @return \Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\SchemaLink|null
     */
    public function getMetaSchema()
    {
        return $this->container['metaSchema'];
    }

    /**
     * Sets metaSchema
     *
     * @param \Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\SchemaLink|null $metaSchema metaSchema
     *
     * @return self
     */
    public function setMetaSchema($metaSchema)
    {
        $this->container['metaSchema'] = $metaSchema;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return \Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\SchemaLink
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param \Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\SchemaLink $schema schema
     *
     * @return self
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return string
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param string $requirements Name of the requirements set represented in this product type definition.
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        $allowedValues = $this->getRequirementsAllowableValues();
        if (!in_array($requirements, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requirements', must be one of '%s'",
                    $requirements,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets requirementsEnforced
     *
     * @return string
     */
    public function getRequirementsEnforced()
    {
        return $this->container['requirementsEnforced'];
    }

    /**
     * Sets requirementsEnforced
     *
     * @param string $requirementsEnforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates).
     *
     * @return self
     */
    public function setRequirementsEnforced($requirementsEnforced)
    {
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();
        if (!in_array($requirementsEnforced, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requirementsEnforced', must be one of '%s'",
                    $requirementsEnforced,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirementsEnforced'] = $requirementsEnforced;

        return $this;
    }

    /**
     * Gets propertyGroups
     *
     * @return map[string,\Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\PropertyGroup]
     */
    public function getPropertyGroups()
    {
        return $this->container['propertyGroups'];
    }

    /**
     * Sets propertyGroups
     *
     * @param map[string,\Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\PropertyGroup] $propertyGroups Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes.
     *
     * @return self
     */
    public function setPropertyGroups($propertyGroups)
    {
        $this->container['propertyGroups'] = $propertyGroups;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Locale of the display elements contained in the product type definition.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets marketplaceIds
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[] $marketplaceIds Amazon marketplace identifiers for which the product type definition is applicable.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplaceIds)
    {
        $this->container['marketplaceIds'] = $marketplaceIds;

        return $this;
    }

    /**
     * Gets productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string $productType The name of the Amazon product type that this product type definition applies to.
     *
     * @return self
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

        return $this;
    }

    /**
     * Gets productTypeVersion
     *
     * @return \Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\ProductTypeVersion
     */
    public function getProductTypeVersion()
    {
        return $this->container['productTypeVersion'];
    }

    /**
     * Sets productTypeVersion
     *
     * @param \Webcom\Amazon\Rest\ProductTypeDefinitionsApiV20200901\Model\ProductTypeVersion $productTypeVersion productTypeVersion
     *
     * @return self
     */
    public function setProductTypeVersion($productTypeVersion)
    {
        $this->container['productTypeVersion'] = $productTypeVersion;

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


