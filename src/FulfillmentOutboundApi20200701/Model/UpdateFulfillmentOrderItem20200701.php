<?php
/**
 * UpdateFulfillmentOrderItem20200701
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
 * UpdateFulfillmentOrderItem20200701 Class Doc Comment
 *
 * @category Class
 * @description Item information for updating a fulfillment order.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdateFulfillmentOrderItem20200701 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateFulfillmentOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerSku' => 'string',
        'sellerFulfillmentOrderItemId' => 'string',
        'quantity' => 'int',
        'giftMessage' => 'string',
        'displayableComment' => 'string',
        'fulfillmentNetworkSku' => 'string',
        'orderItemDisposition' => 'string',
        'perUnitDeclaredValue' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701',
        'perUnitPrice' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701',
        'perUnitTax' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701'
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
        'sellerFulfillmentOrderItemId' => null,
        'quantity' => 'int32',
        'giftMessage' => null,
        'displayableComment' => null,
        'fulfillmentNetworkSku' => null,
        'orderItemDisposition' => null,
        'perUnitDeclaredValue' => null,
        'perUnitPrice' => null,
        'perUnitTax' => null
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
        'sellerFulfillmentOrderItemId' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'giftMessage' => 'giftMessage',
        'displayableComment' => 'displayableComment',
        'fulfillmentNetworkSku' => 'fulfillmentNetworkSku',
        'orderItemDisposition' => 'orderItemDisposition',
        'perUnitDeclaredValue' => 'perUnitDeclaredValue',
        'perUnitPrice' => 'perUnitPrice',
        'perUnitTax' => 'perUnitTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSku' => 'setSellerSku',
        'sellerFulfillmentOrderItemId' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'giftMessage' => 'setGiftMessage',
        'displayableComment' => 'setDisplayableComment',
        'fulfillmentNetworkSku' => 'setFulfillmentNetworkSku',
        'orderItemDisposition' => 'setOrderItemDisposition',
        'perUnitDeclaredValue' => 'setPerUnitDeclaredValue',
        'perUnitPrice' => 'setPerUnitPrice',
        'perUnitTax' => 'setPerUnitTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSku' => 'getSellerSku',
        'sellerFulfillmentOrderItemId' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'giftMessage' => 'getGiftMessage',
        'displayableComment' => 'getDisplayableComment',
        'fulfillmentNetworkSku' => 'getFulfillmentNetworkSku',
        'orderItemDisposition' => 'getOrderItemDisposition',
        'perUnitDeclaredValue' => 'getPerUnitDeclaredValue',
        'perUnitPrice' => 'getPerUnitPrice',
        'perUnitTax' => 'getPerUnitTax'
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
        $this->container['sellerFulfillmentOrderItemId'] = $data['sellerFulfillmentOrderItemId'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['giftMessage'] = $data['giftMessage'] ?? null;
        $this->container['displayableComment'] = $data['displayableComment'] ?? null;
        $this->container['fulfillmentNetworkSku'] = $data['fulfillmentNetworkSku'] ?? null;
        $this->container['orderItemDisposition'] = $data['orderItemDisposition'] ?? null;
        $this->container['perUnitDeclaredValue'] = $data['perUnitDeclaredValue'] ?? null;
        $this->container['perUnitPrice'] = $data['perUnitPrice'] ?? null;
        $this->container['perUnitTax'] = $data['perUnitTax'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerFulfillmentOrderItemId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderItemId' can't be null";
        }
        if ((mb_strlen($this->container['sellerFulfillmentOrderItemId']) > 50)) {
            $invalidProperties[] = "invalid value for 'sellerFulfillmentOrderItemId', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (!is_null($this->container['giftMessage']) && (mb_strlen($this->container['giftMessage']) > 512)) {
            $invalidProperties[] = "invalid value for 'giftMessage', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['displayableComment']) && (mb_strlen($this->container['displayableComment']) > 250)) {
            $invalidProperties[] = "invalid value for 'displayableComment', the character length must be smaller than or equal to 250.";
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
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['sellerSku'];
    }

    /**
     * Sets sellerSku
     *
     * @param string|null $sellerSku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($sellerSku)
    {
        $this->container['sellerSku'] = $sellerSku;

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
     * @param string $sellerFulfillmentOrderItemId Identifies the fulfillment order item to update. Created with a previous call to the createFulfillmentOrder operation.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($sellerFulfillmentOrderItemId)
    {
        if ((mb_strlen($sellerFulfillmentOrderItemId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sellerFulfillmentOrderItemId when calling UpdateFulfillmentOrderItem20200701., must be smaller than or equal to 50.');
        }

        $this->container['sellerFulfillmentOrderItemId'] = $sellerFulfillmentOrderItemId;

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
     * Gets giftMessage
     *
     * @return string|null
     */
    public function getGiftMessage()
    {
        return $this->container['giftMessage'];
    }

    /**
     * Sets giftMessage
     *
     * @param string|null $giftMessage A message to the gift recipient, if applicable.
     *
     * @return self
     */
    public function setGiftMessage($giftMessage)
    {
        if (!is_null($giftMessage) && (mb_strlen($giftMessage) > 512)) {
            throw new \InvalidArgumentException('invalid length for $giftMessage when calling UpdateFulfillmentOrderItem20200701., must be smaller than or equal to 512.');
        }

        $this->container['giftMessage'] = $giftMessage;

        return $this;
    }

    /**
     * Gets displayableComment
     *
     * @return string|null
     */
    public function getDisplayableComment()
    {
        return $this->container['displayableComment'];
    }

    /**
     * Sets displayableComment
     *
     * @param string|null $displayableComment Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip.
     *
     * @return self
     */
    public function setDisplayableComment($displayableComment)
    {
        if (!is_null($displayableComment) && (mb_strlen($displayableComment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $displayableComment when calling UpdateFulfillmentOrderItem20200701., must be smaller than or equal to 250.');
        }

        $this->container['displayableComment'] = $displayableComment;

        return $this;
    }

    /**
     * Gets fulfillmentNetworkSku
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillmentNetworkSku'];
    }

    /**
     * Sets fulfillmentNetworkSku
     *
     * @param string|null $fulfillmentNetworkSku Amazon's fulfillment network SKU of the item.
     *
     * @return self
     */
    public function setFulfillmentNetworkSku($fulfillmentNetworkSku)
    {
        $this->container['fulfillmentNetworkSku'] = $fulfillmentNetworkSku;

        return $this;
    }

    /**
     * Gets orderItemDisposition
     *
     * @return string|null
     */
    public function getOrderItemDisposition()
    {
        return $this->container['orderItemDisposition'];
    }

    /**
     * Sets orderItemDisposition
     *
     * @param string|null $orderItemDisposition Indicates whether the item is sellable or unsellable.
     *
     * @return self
     */
    public function setOrderItemDisposition($orderItemDisposition)
    {
        $this->container['orderItemDisposition'] = $orderItemDisposition;

        return $this;
    }

    /**
     * Gets perUnitDeclaredValue
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701|null
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->container['perUnitDeclaredValue'];
    }

    /**
     * Sets perUnitDeclaredValue
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701|null $perUnitDeclaredValue perUnitDeclaredValue
     *
     * @return self
     */
    public function setPerUnitDeclaredValue($perUnitDeclaredValue)
    {
        $this->container['perUnitDeclaredValue'] = $perUnitDeclaredValue;

        return $this;
    }

    /**
     * Gets perUnitPrice
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701|null
     */
    public function getPerUnitPrice()
    {
        return $this->container['perUnitPrice'];
    }

    /**
     * Sets perUnitPrice
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701|null $perUnitPrice perUnitPrice
     *
     * @return self
     */
    public function setPerUnitPrice($perUnitPrice)
    {
        $this->container['perUnitPrice'] = $perUnitPrice;

        return $this;
    }

    /**
     * Gets perUnitTax
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701|null
     */
    public function getPerUnitTax()
    {
        return $this->container['perUnitTax'];
    }

    /**
     * Sets perUnitTax
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Money20200701|null $perUnitTax perUnitTax
     *
     * @return self
     */
    public function setPerUnitTax($perUnitTax)
    {
        $this->container['perUnitTax'] = $perUnitTax;

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

