<?php
/**
 * ListOffersRequestFilters20221107
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery of any replenishable item at a frequency chosen by the customer.  The Replenishment API is available worldwide wherever Amazon Subscribe & Save is available or is supported. The API is available to vendors and FBA selling partners.
 *
 * The version of the OpenAPI document: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ReplenishmentApi20221107\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ListOffersRequestFilters20221107 Class Doc Comment
 *
 * @category Class
 * @description Use these parameters to filter results. Any result must match all of the provided parameters. For any parameter that is an array, the result must match at least one element in the provided array.
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListOffersRequestFilters20221107 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListOffersRequestFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'skus' => 'string[]',
        'asins' => 'string[]',
        'eligibilities' => '\Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\EligibilityStatus20221107[]',
        'preferences' => '\Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\Preference20221107',
        'promotions' => '\Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\Promotion20221107',
        'programTypes' => '\Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\ProgramType20221107[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'skus' => null,
        'asins' => null,
        'eligibilities' => null,
        'preferences' => null,
        'promotions' => null,
        'programTypes' => null
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
        'marketplaceId' => 'marketplaceId',
        'skus' => 'skus',
        'asins' => 'asins',
        'eligibilities' => 'eligibilities',
        'preferences' => 'preferences',
        'promotions' => 'promotions',
        'programTypes' => 'programTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'skus' => 'setSkus',
        'asins' => 'setAsins',
        'eligibilities' => 'setEligibilities',
        'preferences' => 'setPreferences',
        'promotions' => 'setPromotions',
        'programTypes' => 'setProgramTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'skus' => 'getSkus',
        'asins' => 'getAsins',
        'eligibilities' => 'getEligibilities',
        'preferences' => 'getPreferences',
        'promotions' => 'getPromotions',
        'programTypes' => 'getProgramTypes'
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['skus'] = $data['skus'] ?? null;
        $this->container['asins'] = $data['asins'] ?? null;
        $this->container['eligibilities'] = $data['eligibilities'] ?? null;
        $this->container['preferences'] = $data['preferences'] ?? null;
        $this->container['promotions'] = $data['promotions'] ?? null;
        $this->container['programTypes'] = $data['programTypes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        if ($this->container['programTypes'] === null) {
            $invalidProperties[] = "'programTypes' can't be null";
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
     * @param string $marketplaceId The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets skus
     *
     * @return string[]|null
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     *
     * @param string[]|null $skus A list of SKUs to filter. This filter is only supported for sellers and not for vendors.
     *
     * @return self
     */
    public function setSkus($skus)
    {
        $this->container['skus'] = $skus;

        return $this;
    }

    /**
     * Gets asins
     *
     * @return string[]|null
     */
    public function getAsins()
    {
        return $this->container['asins'];
    }

    /**
     * Sets asins
     *
     * @param string[]|null $asins A list of Amazon Standard Identification Numbers (ASINs).
     *
     * @return self
     */
    public function setAsins($asins)
    {
        $this->container['asins'] = $asins;

        return $this;
    }

    /**
     * Gets eligibilities
     *
     * @return \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\EligibilityStatus20221107[]|null
     */
    public function getEligibilities()
    {
        return $this->container['eligibilities'];
    }

    /**
     * Sets eligibilities
     *
     * @param \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\EligibilityStatus20221107[]|null $eligibilities A list of eligibilities associated with an offer.
     *
     * @return self
     */
    public function setEligibilities($eligibilities)
    {
        $this->container['eligibilities'] = $eligibilities;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\Preference20221107|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\Preference20221107|null $preferences preferences
     *
     * @return self
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\Promotion20221107|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\Promotion20221107|null $promotions promotions
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets programTypes
     *
     * @return \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\ProgramType20221107[]
     */
    public function getProgramTypes()
    {
        return $this->container['programTypes'];
    }

    /**
     * Sets programTypes
     *
     * @param \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\ProgramType20221107[] $programTypes A list of replenishment program types.
     *
     * @return self
     */
    public function setProgramTypes($programTypes)
    {
        $this->container['programTypes'] = $programTypes;

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

