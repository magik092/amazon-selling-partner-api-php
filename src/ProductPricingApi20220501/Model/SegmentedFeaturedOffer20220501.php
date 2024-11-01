<?php
/**
 * SegmentedFeaturedOffer20220501
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi20220501
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, refer to the [Product Pricing v2022-05-01 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ProductPricingApi20220501\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * SegmentedFeaturedOffer20220501 Class Doc Comment
 *
 * @category Class
 * @description A product offer with segment information indicating where it&#39;s featured.
 * @package  Webcom\Amazon\Rest\ProductPricingApi20220501
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SegmentedFeaturedOffer20220501 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SegmentedFeaturedOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'condition' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\Condition20220501',
        'subCondition' => 'string',
        'fulfillmentType' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\FulfillmentType20220501',
        'listingPrice' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\MoneyType20220501',
        'shippingOptions' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\ShippingOption20220501[]',
        'points' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\Points20220501',
        'primeDetails' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\PrimeDetails20220501',
        'featuredOfferSegments' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\FeaturedOfferSegment20220501[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'condition' => null,
        'subCondition' => null,
        'fulfillmentType' => null,
        'listingPrice' => null,
        'shippingOptions' => null,
        'points' => null,
        'primeDetails' => null,
        'featuredOfferSegments' => null
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
        'sellerId' => 'sellerId',
        'condition' => 'condition',
        'subCondition' => 'subCondition',
        'fulfillmentType' => 'fulfillmentType',
        'listingPrice' => 'listingPrice',
        'shippingOptions' => 'shippingOptions',
        'points' => 'points',
        'primeDetails' => 'primeDetails',
        'featuredOfferSegments' => 'featuredOfferSegments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'condition' => 'setCondition',
        'subCondition' => 'setSubCondition',
        'fulfillmentType' => 'setFulfillmentType',
        'listingPrice' => 'setListingPrice',
        'shippingOptions' => 'setShippingOptions',
        'points' => 'setPoints',
        'primeDetails' => 'setPrimeDetails',
        'featuredOfferSegments' => 'setFeaturedOfferSegments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'condition' => 'getCondition',
        'subCondition' => 'getSubCondition',
        'fulfillmentType' => 'getFulfillmentType',
        'listingPrice' => 'getListingPrice',
        'shippingOptions' => 'getShippingOptions',
        'points' => 'getPoints',
        'primeDetails' => 'getPrimeDetails',
        'featuredOfferSegments' => 'getFeaturedOfferSegments'
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

    const SUB_CONDITION__NEW = 'New';
    const SUB_CONDITION_MINT = 'Mint';
    const SUB_CONDITION_VERY_GOOD = 'VeryGood';
    const SUB_CONDITION_GOOD = 'Good';
    const SUB_CONDITION_ACCEPTABLE = 'Acceptable';
    const SUB_CONDITION_POOR = 'Poor';
    const SUB_CONDITION_CLUB = 'Club';
    const SUB_CONDITION_OEM = 'OEM';
    const SUB_CONDITION_WARRANTY = 'Warranty';
    const SUB_CONDITION_REFURBISHED_WARRANTY = 'RefurbishedWarranty';
    const SUB_CONDITION_REFURBISHED = 'Refurbished';
    const SUB_CONDITION_OPEN_BOX = 'OpenBox';
    const SUB_CONDITION_OTHER = 'Other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubConditionAllowableValues()
    {
        return [
            self::SUB_CONDITION__NEW,
            self::SUB_CONDITION_MINT,
            self::SUB_CONDITION_VERY_GOOD,
            self::SUB_CONDITION_GOOD,
            self::SUB_CONDITION_ACCEPTABLE,
            self::SUB_CONDITION_POOR,
            self::SUB_CONDITION_CLUB,
            self::SUB_CONDITION_OEM,
            self::SUB_CONDITION_WARRANTY,
            self::SUB_CONDITION_REFURBISHED_WARRANTY,
            self::SUB_CONDITION_REFURBISHED,
            self::SUB_CONDITION_OPEN_BOX,
            self::SUB_CONDITION_OTHER,
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
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['subCondition'] = $data['subCondition'] ?? null;
        $this->container['fulfillmentType'] = $data['fulfillmentType'] ?? null;
        $this->container['listingPrice'] = $data['listingPrice'] ?? null;
        $this->container['shippingOptions'] = $data['shippingOptions'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
        $this->container['primeDetails'] = $data['primeDetails'] ?? null;
        $this->container['featuredOfferSegments'] = $data['featuredOfferSegments'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerId'] === null) {
            $invalidProperties[] = "'sellerId' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        $allowedValues = $this->getSubConditionAllowableValues();
        if (!is_null($this->container['subCondition']) && !in_array($this->container['subCondition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subCondition', must be one of '%s'",
                $this->container['subCondition'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fulfillmentType'] === null) {
            $invalidProperties[] = "'fulfillmentType' can't be null";
        }
        if ($this->container['listingPrice'] === null) {
            $invalidProperties[] = "'listingPrice' can't be null";
        }
        if ($this->container['featuredOfferSegments'] === null) {
            $invalidProperties[] = "'featuredOfferSegments' can't be null";
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
     * Gets sellerId
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string $sellerId The seller identifier for the offer.
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\Condition20220501
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\Condition20220501 $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets subCondition
     *
     * @return string|null
     */
    public function getSubCondition()
    {
        return $this->container['subCondition'];
    }

    /**
     * Sets subCondition
     *
     * @param string|null $subCondition The item subcondition for the offer.
     *
     * @return self
     */
    public function setSubCondition($subCondition)
    {
        $allowedValues = $this->getSubConditionAllowableValues();
        if (!is_null($subCondition) && !in_array($subCondition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subCondition', must be one of '%s'",
                    $subCondition,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subCondition'] = $subCondition;

        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\FulfillmentType20220501
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\FulfillmentType20220501 $fulfillmentType fulfillmentType
     *
     * @return self
     */
    public function setFulfillmentType($fulfillmentType)
    {
        $this->container['fulfillmentType'] = $fulfillmentType;

        return $this;
    }

    /**
     * Gets listingPrice
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\MoneyType20220501
     */
    public function getListingPrice()
    {
        return $this->container['listingPrice'];
    }

    /**
     * Sets listingPrice
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\MoneyType20220501 $listingPrice listingPrice
     *
     * @return self
     */
    public function setListingPrice($listingPrice)
    {
        $this->container['listingPrice'] = $listingPrice;

        return $this;
    }

    /**
     * Gets shippingOptions
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\ShippingOption20220501[]|null
     */
    public function getShippingOptions()
    {
        return $this->container['shippingOptions'];
    }

    /**
     * Sets shippingOptions
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\ShippingOption20220501[]|null $shippingOptions A list of shipping options associated with this offer
     *
     * @return self
     */
    public function setShippingOptions($shippingOptions)
    {
        $this->container['shippingOptions'] = $shippingOptions;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\Points20220501|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\Points20220501|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets primeDetails
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\PrimeDetails20220501|null
     */
    public function getPrimeDetails()
    {
        return $this->container['primeDetails'];
    }

    /**
     * Sets primeDetails
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\PrimeDetails20220501|null $primeDetails primeDetails
     *
     * @return self
     */
    public function setPrimeDetails($primeDetails)
    {
        $this->container['primeDetails'] = $primeDetails;

        return $this;
    }

    /**
     * Gets featuredOfferSegments
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\FeaturedOfferSegment20220501[]
     */
    public function getFeaturedOfferSegments()
    {
        return $this->container['featuredOfferSegments'];
    }

    /**
     * Sets featuredOfferSegments
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\FeaturedOfferSegment20220501[] $featuredOfferSegments The list of segment information in which the offer is featured.
     *
     * @return self
     */
    public function setFeaturedOfferSegments($featuredOfferSegments)
    {
        $this->container['featuredOfferSegments'] = $featuredOfferSegments;

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


