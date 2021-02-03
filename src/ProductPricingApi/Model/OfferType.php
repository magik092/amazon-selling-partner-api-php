<?php
/**
 * OfferType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace Webcom\Amazon\Rest\ProductPricingApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * OfferType Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OfferType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buying_price' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\PriceType',
        'regular_price' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType',
        'fulfillment_channel' => 'string',
        'item_condition' => 'string',
        'item_sub_condition' => 'string',
        'seller_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buying_price' => null,
        'regular_price' => null,
        'fulfillment_channel' => null,
        'item_condition' => null,
        'item_sub_condition' => null,
        'seller_sku' => null
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
        'buying_price' => 'BuyingPrice',
        'regular_price' => 'RegularPrice',
        'fulfillment_channel' => 'FulfillmentChannel',
        'item_condition' => 'ItemCondition',
        'item_sub_condition' => 'ItemSubCondition',
        'seller_sku' => 'SellerSKU'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buying_price' => 'setBuyingPrice',
        'regular_price' => 'setRegularPrice',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'item_condition' => 'setItemCondition',
        'item_sub_condition' => 'setItemSubCondition',
        'seller_sku' => 'setSellerSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buying_price' => 'getBuyingPrice',
        'regular_price' => 'getRegularPrice',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'item_condition' => 'getItemCondition',
        'item_sub_condition' => 'getItemSubCondition',
        'seller_sku' => 'getSellerSku'
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
        $this->container['buying_price'] = $data['buying_price'] ?? null;
        $this->container['regular_price'] = $data['regular_price'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['item_sub_condition'] = $data['item_sub_condition'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buying_price'] === null) {
            $invalidProperties[] = "'buying_price' can't be null";
        }
        if ($this->container['regular_price'] === null) {
            $invalidProperties[] = "'regular_price' can't be null";
        }
        if ($this->container['fulfillment_channel'] === null) {
            $invalidProperties[] = "'fulfillment_channel' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if ($this->container['item_sub_condition'] === null) {
            $invalidProperties[] = "'item_sub_condition' can't be null";
        }
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
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
     * Gets buying_price
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\PriceType
     */
    public function getBuyingPrice()
    {
        return $this->container['buying_price'];
    }

    /**
     * Sets buying_price
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\PriceType $buying_price buying_price
     *
     * @return self
     */
    public function setBuyingPrice($buying_price)
    {
        $this->container['buying_price'] = $buying_price;

        return $this;
    }

    /**
     * Gets regular_price
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType
     */
    public function getRegularPrice()
    {
        return $this->container['regular_price'];
    }

    /**
     * Sets regular_price
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType $regular_price regular_price
     *
     * @return self
     */
    public function setRegularPrice($regular_price)
    {
        $this->container['regular_price'] = $regular_price;

        return $this;
    }

    /**
     * Gets fulfillment_channel
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param string $fulfillment_channel The fulfillment channel for the offer listing. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller.
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets item_condition
     *
     * @return string
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param string $item_condition The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets item_sub_condition
     *
     * @return string
     */
    public function getItemSubCondition()
    {
        return $this->container['item_sub_condition'];
    }

    /**
     * Sets item_sub_condition
     *
     * @param string $item_sub_condition The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return self
     */
    public function setItemSubCondition($item_sub_condition)
    {
        $this->container['item_sub_condition'] = $item_sub_condition;

        return $this;
    }

    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

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


