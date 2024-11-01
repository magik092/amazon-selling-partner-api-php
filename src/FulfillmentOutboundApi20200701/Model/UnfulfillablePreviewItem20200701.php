<?php
/**
 * UnfulfillablePreviewItem20200701
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * UnfulfillablePreviewItem20200701 Class Doc Comment
 *
 * @category Class
 * @description Information about unfulfillable items in a fulfillment order preview.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UnfulfillablePreviewItem20200701 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnfulfillablePreviewItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerSku' => 'string',
        'quantity' => 'int',
        'sellerFulfillmentOrderItemId' => 'string',
        'itemUnfulfillableReasons' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sellerSku' => null,
        'quantity' => 'int32',
        'sellerFulfillmentOrderItemId' => null,
        'itemUnfulfillableReasons' => null
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
        'sellerSku' => 'sellerSku',
        'quantity' => 'quantity',
        'sellerFulfillmentOrderItemId' => 'sellerFulfillmentOrderItemId',
        'itemUnfulfillableReasons' => 'itemUnfulfillableReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'sellerFulfillmentOrderItemId' => 'setSellerFulfillmentOrderItemId',
        'itemUnfulfillableReasons' => 'setItemUnfulfillableReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'sellerFulfillmentOrderItemId' => 'getSellerFulfillmentOrderItemId',
        'itemUnfulfillableReasons' => 'getItemUnfulfillableReasons'
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
        $this->container['sellerSku'] = $data['sellerSku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['sellerFulfillmentOrderItemId'] = $data['sellerFulfillmentOrderItemId'] ?? null;
        $this->container['itemUnfulfillableReasons'] = $data['itemUnfulfillableReasons'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerSku'] === null) {
            $invalidProperties[] = "'sellerSku' can't be null";
        }
        if ((mb_strlen($this->container['sellerSku']) > 50)) {
            $invalidProperties[] = "invalid value for 'sellerSku', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['sellerFulfillmentOrderItemId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderItemId' can't be null";
        }
        if ((mb_strlen($this->container['sellerFulfillmentOrderItemId']) > 50)) {
            $invalidProperties[] = "invalid value for 'sellerFulfillmentOrderItemId', the character length must be smaller than or equal to 50.";
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
     * Gets sellerSku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['sellerSku'];
    }

    /**
     * Sets sellerSku
     *
     * @param string $sellerSku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($sellerSku)
    {
        if ((mb_strlen($sellerSku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sellerSku when calling UnfulfillablePreviewItem20200701., must be smaller than or equal to 50.');
        }

        $this->container['sellerSku'] = $sellerSku;

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
     * @param int $quantity The item quantity.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sellerFulfillmentOrderItemId
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['sellerFulfillmentOrderItemId'];
    }

    /**
     * Sets sellerFulfillmentOrderItemId
     *
     * @param string $sellerFulfillmentOrderItemId A fulfillment order item identifier created with a call to the `getFulfillmentPreview` operation.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($sellerFulfillmentOrderItemId)
    {
        if ((mb_strlen($sellerFulfillmentOrderItemId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sellerFulfillmentOrderItemId when calling UnfulfillablePreviewItem20200701., must be smaller than or equal to 50.');
        }

        $this->container['sellerFulfillmentOrderItemId'] = $sellerFulfillmentOrderItemId;

        return $this;
    }

    /**
     * Gets itemUnfulfillableReasons
     *
     * @return string[]|null
     */
    public function getItemUnfulfillableReasons()
    {
        return $this->container['itemUnfulfillableReasons'];
    }

    /**
     * Sets itemUnfulfillableReasons
     *
     * @param string[]|null $itemUnfulfillableReasons String list
     *
     * @return self
     */
    public function setItemUnfulfillableReasons($itemUnfulfillableReasons)
    {
        $this->container['itemUnfulfillableReasons'] = $itemUnfulfillableReasons;

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


