<?php
/**
 * CompetitivePricingTypeV0
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
 * CompetitivePricingTypeV0 Class Doc Comment
 *
 * @category Class
 * @description Competitive pricing information for the item.
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CompetitivePricingTypeV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompetitivePricingType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'competitivePrices' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\CompetitivePriceTypeV0[]',
        'numberOfOfferListings' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferListingCountTypeV0[]',
        'tradeInValue' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'competitivePrices' => null,
        'numberOfOfferListings' => null,
        'tradeInValue' => null
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
        'competitivePrices' => 'CompetitivePrices',
        'numberOfOfferListings' => 'NumberOfOfferListings',
        'tradeInValue' => 'TradeInValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'competitivePrices' => 'setCompetitivePrices',
        'numberOfOfferListings' => 'setNumberOfOfferListings',
        'tradeInValue' => 'setTradeInValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'competitivePrices' => 'getCompetitivePrices',
        'numberOfOfferListings' => 'getNumberOfOfferListings',
        'tradeInValue' => 'getTradeInValue'
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
        $this->container['competitivePrices'] = $data['competitivePrices'] ?? null;
        $this->container['numberOfOfferListings'] = $data['numberOfOfferListings'] ?? null;
        $this->container['tradeInValue'] = $data['tradeInValue'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['competitivePrices'] === null) {
            $invalidProperties[] = "'competitivePrices' can't be null";
        }
        if ($this->container['numberOfOfferListings'] === null) {
            $invalidProperties[] = "'numberOfOfferListings' can't be null";
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
     * Gets competitivePrices
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\CompetitivePriceTypeV0[]
     */
    public function getCompetitivePrices()
    {
        return $this->container['competitivePrices'];
    }

    /**
     * Sets competitivePrices
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\CompetitivePriceTypeV0[] $competitivePrices A list of competitive pricing information.
     *
     * @return self
     */
    public function setCompetitivePrices($competitivePrices)
    {
        $this->container['competitivePrices'] = $competitivePrices;

        return $this;
    }

    /**
     * Gets numberOfOfferListings
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferListingCountTypeV0[]
     */
    public function getNumberOfOfferListings()
    {
        return $this->container['numberOfOfferListings'];
    }

    /**
     * Sets numberOfOfferListings
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferListingCountTypeV0[] $numberOfOfferListings The number of active offer listings for the item that was submitted. The listing count is returned by condition, one for each listing condition value that is returned.
     *
     * @return self
     */
    public function setNumberOfOfferListings($numberOfOfferListings)
    {
        $this->container['numberOfOfferListings'] = $numberOfOfferListings;

        return $this;
    }

    /**
     * Gets tradeInValue
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0|null
     */
    public function getTradeInValue()
    {
        return $this->container['tradeInValue'];
    }

    /**
     * Sets tradeInValue
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\MoneyTypeV0|null $tradeInValue tradeInValue
     *
     * @return self
     */
    public function setTradeInValue($tradeInValue)
    {
        $this->container['tradeInValue'] = $tradeInValue;

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

