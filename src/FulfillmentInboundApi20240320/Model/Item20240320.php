<?php
/**
 * Item20240320
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
 * Item20240320 Class Doc Comment
 *
 * @category Class
 * @description Information associated with a single SKU in the seller&#39;s catalog.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item20240320 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Item';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'asin'                 => 'string',
        'expiration'           => 'string',
        'fnsku'                => 'string',
        'labelOwner'           => 'string',
        'manufacturingLotCode' => 'string',
        'msku'                 => 'string',
        'prepInstructions'     => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\PrepInstruction20240320[]',
        'quantity'             => 'int',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'asin'                 => null,
        'expiration'           => null,
        'fnsku'                => null,
        'labelOwner'           => null,
        'manufacturingLotCode' => null,
        'msku'                 => null,
        'prepInstructions'     => null,
        'quantity'             => null,
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
        'asin'                 => 'asin',
        'expiration'           => 'expiration',
        'fnsku'                => 'fnsku',
        'labelOwner'           => 'labelOwner',
        'manufacturingLotCode' => 'manufacturingLotCode',
        'msku'                 => 'msku',
        'prepInstructions'     => 'prepInstructions',
        'quantity'             => 'quantity',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin'                 => 'setAsin',
        'expiration'           => 'setExpiration',
        'fnsku'                => 'setFnsku',
        'labelOwner'           => 'setLabelOwner',
        'manufacturingLotCode' => 'setManufacturingLotCode',
        'msku'                 => 'setMsku',
        'prepInstructions'     => 'setPrepInstructions',
        'quantity'             => 'setQuantity',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin'                 => 'getAsin',
        'expiration'           => 'getExpiration',
        'fnsku'                => 'getFnsku',
        'labelOwner'           => 'getLabelOwner',
        'manufacturingLotCode' => 'getManufacturingLotCode',
        'msku'                 => 'getMsku',
        'prepInstructions'     => 'getPrepInstructions',
        'quantity'             => 'getQuantity',
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
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['fnsku'] = $data['fnsku'] ?? null;
        $this->container['labelOwner'] = $data['labelOwner'] ?? null;
        $this->container['manufacturingLotCode'] = $data['manufacturingLotCode'] ?? null;
        $this->container['msku'] = $data['msku'] ?? null;
        $this->container['prepInstructions'] = $data['prepInstructions'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ((mb_strlen($this->container['asin']) > 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['asin']) < 1)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['expiration']) && !preg_match("/^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['expiration'])) {
            $invalidProperties[] = "invalid value for 'expiration', must be conform to the pattern /^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.";
        }

        if ($this->container['fnsku'] === null) {
            $invalidProperties[] = "'fnsku' can't be null";
        }
        if ((mb_strlen($this->container['fnsku']) > 10)) {
            $invalidProperties[] = "invalid value for 'fnsku', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['fnsku']) < 1)) {
            $invalidProperties[] = "invalid value for 'fnsku', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['labelOwner'] === null) {
            $invalidProperties[] = "'labelOwner' can't be null";
        }
        if ((mb_strlen($this->container['labelOwner']) > 1024)) {
            $invalidProperties[] = "invalid value for 'labelOwner', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['labelOwner']) < 1)) {
            $invalidProperties[] = "invalid value for 'labelOwner', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['manufacturingLotCode']) && (mb_strlen($this->container['manufacturingLotCode']) > 256)) {
            $invalidProperties[] = "invalid value for 'manufacturingLotCode', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['manufacturingLotCode']) && (mb_strlen($this->container['manufacturingLotCode']) < 1)) {
            $invalidProperties[] = "invalid value for 'manufacturingLotCode', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['msku'] === null) {
            $invalidProperties[] = "'msku' can't be null";
        }
        if ((mb_strlen($this->container['msku']) > 40)) {
            $invalidProperties[] = "invalid value for 'msku', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['msku']) < 1)) {
            $invalidProperties[] = "invalid value for 'msku', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['prepInstructions'] === null) {
            $invalidProperties[] = "'prepInstructions' can't be null";
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
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        if ((mb_strlen($asin) > 10)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling Item20240320., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($asin) < 1)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling Item20240320., must be bigger than or equal to 1.');
        }

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string|null $expiration The expiration date of the MSKU. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) datetime format with pattern`YYYY-MM-DD`. The same MSKU with different expiration dates cannot go into the same box.
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        if (!is_null($expiration) && (!preg_match("/^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $expiration))) {
            throw new \InvalidArgumentException(
                "invalid value for $expiration when calling Item20240320., must conform to the pattern /^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/."
            );
        }

        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets fnsku
     *
     * @return string
     */
    public function getFnsku()
    {
        return $this->container['fnsku'];
    }

    /**
     * Sets fnsku
     *
     * @param string $fnsku A unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center.
     *
     * @return self
     */
    public function setFnsku($fnsku)
    {
        if ((mb_strlen($fnsku) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fnsku when calling Item20240320., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($fnsku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $fnsku when calling Item20240320., must be bigger than or equal to 1.');
        }

        $this->container['fnsku'] = $fnsku;

        return $this;
    }

    /**
     * Gets labelOwner
     *
     * @return string
     */
    public function getLabelOwner()
    {
        return $this->container['labelOwner'];
    }

    /**
     * Sets labelOwner
     *
     * @param string $labelOwner Specifies who will label the items. Options include `AMAZON`, `SELLER`, and `NONE`.
     *
     * @return self
     */
    public function setLabelOwner($labelOwner)
    {
        if ((mb_strlen($labelOwner) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $labelOwner when calling Item20240320., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($labelOwner) < 1)) {
            throw new \InvalidArgumentException('invalid length for $labelOwner when calling Item20240320., must be bigger than or equal to 1.');
        }

        $this->container['labelOwner'] = $labelOwner;

        return $this;
    }

    /**
     * Gets manufacturingLotCode
     *
     * @return string|null
     */
    public function getManufacturingLotCode()
    {
        return $this->container['manufacturingLotCode'];
    }

    /**
     * Sets manufacturingLotCode
     *
     * @param string|null $manufacturingLotCode The manufacturing lot code.
     *
     * @return self
     */
    public function setManufacturingLotCode($manufacturingLotCode)
    {
        if (!is_null($manufacturingLotCode) && (mb_strlen($manufacturingLotCode) > 256)) {
            throw new \InvalidArgumentException('invalid length for $manufacturingLotCode when calling Item20240320., must be smaller than or equal to 256.');
        }
        if (!is_null($manufacturingLotCode) && (mb_strlen($manufacturingLotCode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $manufacturingLotCode when calling Item20240320., must be bigger than or equal to 1.');
        }

        $this->container['manufacturingLotCode'] = $manufacturingLotCode;

        return $this;
    }

    /**
     * Gets msku
     *
     * @return string
     */
    public function getMsku()
    {
        return $this->container['msku'];
    }

    /**
     * Sets msku
     *
     * @param string $msku The merchant SKU, a merchant-supplied identifier of a specific SKU.
     *
     * @return self
     */
    public function setMsku($msku)
    {
        if ((mb_strlen($msku) > 40)) {
            throw new \InvalidArgumentException('invalid length for $msku when calling Item20240320., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($msku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $msku when calling Item20240320., must be bigger than or equal to 1.');
        }

        $this->container['msku'] = $msku;

        return $this;
    }

    /**
     * Gets prepInstructions
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\PrepInstruction20240320[]
     */
    public function getPrepInstructions()
    {
        return $this->container['prepInstructions'];
    }

    /**
     * Sets prepInstructions
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\PrepInstruction20240320[] $prepInstructions Special preparations that are required for an item.
     *
     * @return self
     */
    public function setPrepInstructions($prepInstructions)
    {
        $this->container['prepInstructions'] = $prepInstructions;

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
     * @param int $quantity The number of the specified MSKU.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (($quantity > 10000)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Item20240320., must be smaller than or equal to 10000.');
        }
        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Item20240320., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

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


