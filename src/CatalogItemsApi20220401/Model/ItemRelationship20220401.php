<?php
/**
 * ItemRelationship20220401
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
 * ItemRelationship20220401 Class Doc Comment
 *
 * @category Class
 * @description Relationship details for an Amazon catalog item.
 * @package  Webcom\Amazon\Rest\CatalogItemsApi20220401
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemRelationship20220401 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ItemRelationship';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'childAsins'     => 'string[]',
        'parentAsins'    => 'string[]',
        'variationTheme' => '\Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemVariationTheme20220401',
        'type'           => 'string',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'childAsins'     => null,
        'parentAsins'    => null,
        'variationTheme' => null,
        'type'           => null,
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
        'childAsins'     => 'childAsins',
        'parentAsins'    => 'parentAsins',
        'variationTheme' => 'variationTheme',
        'type'           => 'type',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'childAsins'     => 'setChildAsins',
        'parentAsins'    => 'setParentAsins',
        'variationTheme' => 'setVariationTheme',
        'type'           => 'setType',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'childAsins'     => 'getChildAsins',
        'parentAsins'    => 'getParentAsins',
        'variationTheme' => 'getVariationTheme',
        'type'           => 'getType',
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

    const TYPE_VARIATION = 'VARIATION';
    const TYPE_PACKAGE_HIERARCHY = 'PACKAGE_HIERARCHY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VARIATION,
            self::TYPE_PACKAGE_HIERARCHY,
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
        $this->container['childAsins'] = $data['childAsins'] ?? null;
        $this->container['parentAsins'] = $data['parentAsins'] ?? null;
        $this->container['variationTheme'] = $data['variationTheme'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets childAsins
     *
     * @return string[]|null
     */
    public function getChildAsins()
    {
        return $this->container['childAsins'];
    }

    /**
     * Sets childAsins
     *
     * @param string[]|null $childAsins Identifiers (ASINs) of the related items that are children of this item.
     *
     * @return self
     */
    public function setChildAsins($childAsins)
    {
        $this->container['childAsins'] = $childAsins;

        return $this;
    }

    /**
     * Gets parentAsins
     *
     * @return string[]|null
     */
    public function getParentAsins()
    {
        return $this->container['parentAsins'];
    }

    /**
     * Sets parentAsins
     *
     * @param string[]|null $parentAsins Identifiers (ASINs) of the related items that are parents of this item.
     *
     * @return self
     */
    public function setParentAsins($parentAsins)
    {
        $this->container['parentAsins'] = $parentAsins;

        return $this;
    }

    /**
     * Gets variationTheme
     *
     * @return \Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemVariationTheme20220401|null
     */
    public function getVariationTheme()
    {
        return $this->container['variationTheme'];
    }

    /**
     * Sets variationTheme
     *
     * @param \Webcom\Amazon\Rest\CatalogItemsApi20220401\Model\ItemVariationTheme20220401|null $variationTheme variationTheme
     *
     * @return self
     */
    public function setVariationTheme($variationTheme)
    {
        $this->container['variationTheme'] = $variationTheme;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of relationship.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


