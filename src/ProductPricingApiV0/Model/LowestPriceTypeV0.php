<?php
/**
 * LowestPriceTypeV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
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

namespace Webcom\Amazon\Rest\ProductPricingApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * LowestPriceTypeV0 Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LowestPriceTypeV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LowestPriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'condition' => 'string',
        'fulfillmentChannel' => 'string',
        'offerType' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferCustomerTypeV0',
        'quantityTier' => 'int',
        'quantityDiscountType' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\QuantityDiscountTypeV0',
        'landedPrice' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0',
        'listingPrice' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0',
        'shipping' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0',
        'points' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\PointsV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'condition' => null,
        'fulfillmentChannel' => null,
        'offerType' => null,
        'quantityTier' => 'int32',
        'quantityDiscountType' => null,
        'landedPrice' => null,
        'listingPrice' => null,
        'shipping' => null,
        'points' => null
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
        'condition' => 'condition',
        'fulfillmentChannel' => 'fulfillmentChannel',
        'offerType' => 'offerType',
        'quantityTier' => 'quantityTier',
        'quantityDiscountType' => 'quantityDiscountType',
        'landedPrice' => 'LandedPrice',
        'listingPrice' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'fulfillmentChannel' => 'setFulfillmentChannel',
        'offerType' => 'setOfferType',
        'quantityTier' => 'setQuantityTier',
        'quantityDiscountType' => 'setQuantityDiscountType',
        'landedPrice' => 'setLandedPrice',
        'listingPrice' => 'setListingPrice',
        'shipping' => 'setShipping',
        'points' => 'setPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'fulfillmentChannel' => 'getFulfillmentChannel',
        'offerType' => 'getOfferType',
        'quantityTier' => 'getQuantityTier',
        'quantityDiscountType' => 'getQuantityDiscountType',
        'landedPrice' => 'getLandedPrice',
        'listingPrice' => 'getListingPrice',
        'shipping' => 'getShipping',
        'points' => 'getPoints'
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
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['fulfillmentChannel'] = $data['fulfillmentChannel'] ?? null;
        $this->container['offerType'] = $data['offerType'] ?? null;
        $this->container['quantityTier'] = $data['quantityTier'] ?? null;
        $this->container['quantityDiscountType'] = $data['quantityDiscountType'] ?? null;
        $this->container['landedPrice'] = $data['landedPrice'] ?? null;
        $this->container['listingPrice'] = $data['listingPrice'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['fulfillmentChannel'] === null) {
            $invalidProperties[] = "'fulfillmentChannel' can't be null";
        }
        if ($this->container['listingPrice'] === null) {
            $invalidProperties[] = "'listingPrice' can't be null";
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
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets fulfillmentChannel
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillmentChannel'];
    }

    /**
     * Sets fulfillmentChannel
     *
     * @param string $fulfillmentChannel Indicates whether the item is fulfilled by Amazon or by the seller.
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillmentChannel)
    {
        $this->container['fulfillmentChannel'] = $fulfillmentChannel;

        return $this;
    }

    /**
     * Gets offerType
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferCustomerTypeV0|null
     */
    public function getOfferType()
    {
        return $this->container['offerType'];
    }

    /**
     * Sets offerType
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferCustomerTypeV0|null $offerType offerType
     *
     * @return self
     */
    public function setOfferType($offerType)
    {
        $this->container['offerType'] = $offerType;

        return $this;
    }

    /**
     * Gets quantityTier
     *
     * @return int|null
     */
    public function getQuantityTier()
    {
        return $this->container['quantityTier'];
    }

    /**
     * Sets quantityTier
     *
     * @param int|null $quantityTier Indicates at what quantity this price becomes active.
     *
     * @return self
     */
    public function setQuantityTier($quantityTier)
    {
        $this->container['quantityTier'] = $quantityTier;

        return $this;
    }

    /**
     * Gets quantityDiscountType
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\QuantityDiscountTypeV0|null
     */
    public function getQuantityDiscountType()
    {
        return $this->container['quantityDiscountType'];
    }

    /**
     * Sets quantityDiscountType
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\QuantityDiscountTypeV0|null $quantityDiscountType quantityDiscountType
     *
     * @return self
     */
    public function setQuantityDiscountType($quantityDiscountType)
    {
        $this->container['quantityDiscountType'] = $quantityDiscountType;

        return $this;
    }

    /**
     * Gets landedPrice
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0|null
     */
    public function getLandedPrice()
    {
        return $this->container['landedPrice'];
    }

    /**
     * Sets landedPrice
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0|null $landedPrice landedPrice
     *
     * @return self
     */
    public function setLandedPrice($landedPrice)
    {
        $this->container['landedPrice'] = $landedPrice;

        return $this;
    }

    /**
     * Gets listingPrice
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0
     */
    public function getListingPrice()
    {
        return $this->container['listingPrice'];
    }

    /**
     * Sets listingPrice
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0 $listingPrice listingPrice
     *
     * @return self
     */
    public function setListingPrice($listingPrice)
    {
        $this->container['listingPrice'] = $listingPrice;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\PointsV0|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\PointsV0|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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


