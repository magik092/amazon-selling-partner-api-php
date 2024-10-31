<?php
/**
 * BoxInput20240320
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
 * BoxInput20240320 Class Doc Comment
 *
 * @category Class
 * @description Input information for a given box.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BoxInput20240320 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'BoxInput';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'contentInformationSource' => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\BoxContentInformationSource20240320',
        'dimensions'               => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\Dimensions20240320',
        'items'                    => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ItemInput20240320[]',
        'quantity'                 => 'int',
        'weight'                   => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\Weight20240320',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'contentInformationSource' => null,
        'dimensions'               => null,
        'items'                    => null,
        'quantity'                 => null,
        'weight'                   => null,
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
        'contentInformationSource' => 'contentInformationSource',
        'dimensions'               => 'dimensions',
        'items'                    => 'items',
        'quantity'                 => 'quantity',
        'weight'                   => 'weight',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contentInformationSource' => 'setContentInformationSource',
        'dimensions'               => 'setDimensions',
        'items'                    => 'setItems',
        'quantity'                 => 'setQuantity',
        'weight'                   => 'setWeight',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contentInformationSource' => 'getContentInformationSource',
        'dimensions'               => 'getDimensions',
        'items'                    => 'getItems',
        'quantity'                 => 'getQuantity',
        'weight'                   => 'getWeight',
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
        $this->container['contentInformationSource'] = $data['contentInformationSource'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contentInformationSource'] === null) {
            $invalidProperties[] = "'contentInformationSource' can't be null";
        }
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] > 10000)) {
            $invalidProperties[] = "invalid value for 'quantity', must be smaller than or equal to 10000.";
        }

        if (($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
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
     * Gets contentInformationSource
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\BoxContentInformationSource20240320
     */
    public function getContentInformationSource()
    {
        return $this->container['contentInformationSource'];
    }

    /**
     * Sets contentInformationSource
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\BoxContentInformationSource20240320 $contentInformationSource contentInformationSource
     *
     * @return self
     */
    public function setContentInformationSource($contentInformationSource)
    {
        $this->container['contentInformationSource'] = $contentInformationSource;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\Dimensions20240320
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\Dimensions20240320 $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ItemInput20240320[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ItemInput20240320[]|null $items The items and their quantity in the box. This must be empty if the box `contentInformationSource` is `BARCODE_2D` or `MANUAL_PROCESS`.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The number of containers where all other properties like weight or dimensions are identical.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (($quantity > 10000)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling BoxInput20240320., must be smaller than or equal to 10000.');
        }
        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling BoxInput20240320., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\Weight20240320
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\Weight20240320 $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


