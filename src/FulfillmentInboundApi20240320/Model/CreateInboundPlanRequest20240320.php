<?php
/**
 * CreateInboundPlanRequest20240320
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CreateInboundPlanRequest20240320 Class Doc Comment
 *
 * @category Class
 * @description The &#x60;createInboundPlan&#x60; request.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateInboundPlanRequest20240320 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateInboundPlanRequest';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'destinationMarketplaces' => 'string[]',
        'items'                   => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ItemInput20240320[]',
        'name'                    => 'string',
        'sourceAddress'           => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\AddressInput20240320',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'destinationMarketplaces' => null,
        'items'                   => null,
        'name'                    => null,
        'sourceAddress'           => null,
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
        'destinationMarketplaces' => 'destinationMarketplaces',
        'items'                   => 'items',
        'name'                    => 'name',
        'sourceAddress'           => 'sourceAddress',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destinationMarketplaces' => 'setDestinationMarketplaces',
        'items'                   => 'setItems',
        'name'                    => 'setName',
        'sourceAddress'           => 'setSourceAddress',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destinationMarketplaces' => 'getDestinationMarketplaces',
        'items'                   => 'getItems',
        'name'                    => 'getName',
        'sourceAddress'           => 'getSourceAddress',
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
        $this->container['destinationMarketplaces'] = $data['destinationMarketplaces'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['sourceAddress'] = $data['sourceAddress'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destinationMarketplaces'] === null) {
            $invalidProperties[] = "'destinationMarketplaces' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 40)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['sourceAddress'] === null) {
            $invalidProperties[] = "'sourceAddress' can't be null";
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
     * Gets destinationMarketplaces
     *
     * @return string[]
     */
    public function getDestinationMarketplaces()
    {
        return $this->container['destinationMarketplaces'];
    }

    /**
     * Sets destinationMarketplaces
     *
     * @param string[] $destinationMarketplaces Marketplaces where the items need to be shipped to. Currently only one marketplace can be selected in this request.
     *
     * @return self
     */
    public function setDestinationMarketplaces($destinationMarketplaces)
    {
        $this->container['destinationMarketplaces'] = $destinationMarketplaces;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ItemInput20240320[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ItemInput20240320[] $items Items included in this plan.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name for the Inbound Plan. If one isn't provided, a default name will be provided.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateInboundPlanRequest20240320., must be smaller than or equal to 40.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateInboundPlanRequest20240320., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sourceAddress
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\AddressInput20240320
     */
    public function getSourceAddress()
    {
        return $this->container['sourceAddress'];
    }

    /**
     * Sets sourceAddress
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\AddressInput20240320 $sourceAddress sourceAddress
     *
     * @return self
     */
    public function setSourceAddress($sourceAddress)
    {
        $this->container['sourceAddress'] = $sourceAddress;

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


