<?php
/**
 * CompetitiveSummaryRequest20220501
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
 * CompetitiveSummaryRequest20220501 Class Doc Comment
 *
 * @category Class
 * @description An individual &#x60;competitiveSummary&#x60; request for an ASIN and &#x60;marketplaceId&#x60;.
 * @package  Webcom\Amazon\Rest\ProductPricingApi20220501
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CompetitiveSummaryRequest20220501 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompetitiveSummaryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'marketplaceId' => 'string',
        'includedData' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\CompetitiveSummaryIncludedData20220501[]',
        'lowestPricedOffersInputs' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\LowestPricedOffersInput20220501[]',
        'method' => '\Webcom\Amazon\Rest\ProductPricingApi20220501\Model\HttpMethod20220501',
        'uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'marketplaceId' => null,
        'includedData' => null,
        'lowestPricedOffersInputs' => null,
        'method' => null,
        'uri' => null
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
        'asin' => 'asin',
        'marketplaceId' => 'marketplaceId',
        'includedData' => 'includedData',
        'lowestPricedOffersInputs' => 'lowestPricedOffersInputs',
        'method' => 'method',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'marketplaceId' => 'setMarketplaceId',
        'includedData' => 'setIncludedData',
        'lowestPricedOffersInputs' => 'setLowestPricedOffersInputs',
        'method' => 'setMethod',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'marketplaceId' => 'getMarketplaceId',
        'includedData' => 'getIncludedData',
        'lowestPricedOffersInputs' => 'getLowestPricedOffersInputs',
        'method' => 'getMethod',
        'uri' => 'getUri'
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['includedData'] = $data['includedData'] ?? null;
        $this->container['lowestPricedOffersInputs'] = $data['lowestPricedOffersInputs'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['uri'] = $data['uri'] ?? null;
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
        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        if ($this->container['includedData'] === null) {
            $invalidProperties[] = "'includedData' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ((mb_strlen($this->container['uri']) > 512)) {
            $invalidProperties[] = "invalid value for 'uri', the character length must be smaller than or equal to 512.";
        }

        if ((mb_strlen($this->container['uri']) < 6)) {
            $invalidProperties[] = "invalid value for 'uri', the character length must be bigger than or equal to 6.";
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
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId A marketplace identifier. Specifies the marketplace for which data is returned.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets includedData
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\CompetitiveSummaryIncludedData20220501[]
     */
    public function getIncludedData()
    {
        return $this->container['includedData'];
    }

    /**
     * Sets includedData
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\CompetitiveSummaryIncludedData20220501[] $includedData The list of requested competitive pricing data for the product.
     *
     * @return self
     */
    public function setIncludedData($includedData)
    {
        $this->container['includedData'] = $includedData;

        return $this;
    }

    /**
     * Gets lowestPricedOffersInputs
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\LowestPricedOffersInput20220501[]|null
     */
    public function getLowestPricedOffersInputs()
    {
        return $this->container['lowestPricedOffersInputs'];
    }

    /**
     * Sets lowestPricedOffersInputs
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\LowestPricedOffersInput20220501[]|null $lowestPricedOffersInputs The list of `lowestPricedOffersInput` parameters used to build the `lowestPricedOffers` in the response. This attribute is valid only if `lowestPricedOffers` is requested in `includedData`.
     *
     * @return self
     */
    public function setLowestPricedOffersInputs($lowestPricedOffersInputs)
    {
        $this->container['lowestPricedOffersInputs'] = $lowestPricedOffersInputs;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\HttpMethod20220501
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi20220501\Model\HttpMethod20220501 $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri The URI associated with the individual APIs being called as part of the batch request.
     *
     * @return self
     */
    public function setUri($uri)
    {
        if ((mb_strlen($uri) > 512)) {
            throw new \InvalidArgumentException('invalid length for $uri when calling CompetitiveSummaryRequest20220501., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($uri) < 6)) {
            throw new \InvalidArgumentException('invalid length for $uri when calling CompetitiveSummaryRequest20220501., must be bigger than or equal to 6.');
        }

        $this->container['uri'] = $uri;

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


