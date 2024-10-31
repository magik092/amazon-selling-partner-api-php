<?php
/**
 * Account
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\SellersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Sellers
 *
 * The [Selling Partner API for Sellers](https://developer-docs.amazon.com/sp-api/docs/sellers-api-v1-reference) (Sellers API) provides essential information about seller accounts, such as:  - The marketplaces a seller can list in - The default language and currency of a marketplace - Whether the seller has suspended listings  Refer to the [Sellers API reference](https://developer-docs.amazon.com/sp-api/docs/sellers-api-v1-reference) for details about this API's operations, data types, and schemas.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\SellersApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Account Class Doc Comment
 *
 * @category Class
 * @description The response schema for the &#x60;getAccount&#x60; operation.
 * @package  Webcom\Amazon\Rest\SellersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceLevelAttributes' => '\Webcom\Amazon\Rest\SellersApi\Model\MarketplaceLevelAttributes[]',
        'businessType' => 'string',
        'business' => '\Webcom\Amazon\Rest\SellersApi\Model\Business',
        'primaryContact' => '\Webcom\Amazon\Rest\SellersApi\Model\PrimaryContact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceLevelAttributes' => null,
        'businessType' => null,
        'business' => null,
        'primaryContact' => null
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
        'marketplaceLevelAttributes' => 'marketplaceLevelAttributes',
        'businessType' => 'businessType',
        'business' => 'business',
        'primaryContact' => 'primaryContact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceLevelAttributes' => 'setMarketplaceLevelAttributes',
        'businessType' => 'setBusinessType',
        'business' => 'setBusiness',
        'primaryContact' => 'setPrimaryContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceLevelAttributes' => 'getMarketplaceLevelAttributes',
        'businessType' => 'getBusinessType',
        'business' => 'getBusiness',
        'primaryContact' => 'getPrimaryContact'
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

    const BUSINESS_TYPE_CHARITY = 'CHARITY';
    const BUSINESS_TYPE_CRAFTSMAN = 'CRAFTSMAN';
    const BUSINESS_TYPE_NATURAL_PERSON_COMPANY = 'NATURAL_PERSON_COMPANY';
    const BUSINESS_TYPE_PUBLIC_LISTED = 'PUBLIC_LISTED';
    const BUSINESS_TYPE_PRIVATE_LIMITED = 'PRIVATE_LIMITED';
    const BUSINESS_TYPE_SOLE_PROPRIETORSHIP = 'SOLE_PROPRIETORSHIP';
    const BUSINESS_TYPE_STATE_OWNED = 'STATE_OWNED';
    const BUSINESS_TYPE_INDIVIDUAL = 'INDIVIDUAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_CHARITY,
            self::BUSINESS_TYPE_CRAFTSMAN,
            self::BUSINESS_TYPE_NATURAL_PERSON_COMPANY,
            self::BUSINESS_TYPE_PUBLIC_LISTED,
            self::BUSINESS_TYPE_PRIVATE_LIMITED,
            self::BUSINESS_TYPE_SOLE_PROPRIETORSHIP,
            self::BUSINESS_TYPE_STATE_OWNED,
            self::BUSINESS_TYPE_INDIVIDUAL,
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
        $this->container['marketplaceLevelAttributes'] = $data['marketplaceLevelAttributes'] ?? null;
        $this->container['businessType'] = $data['businessType'] ?? null;
        $this->container['business'] = $data['business'] ?? null;
        $this->container['primaryContact'] = $data['primaryContact'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceLevelAttributes'] === null) {
            $invalidProperties[] = "'marketplaceLevelAttributes' can't be null";
        }
        if ($this->container['businessType'] === null) {
            $invalidProperties[] = "'businessType' can't be null";
        }
        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!is_null($this->container['businessType']) && !in_array($this->container['businessType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'businessType', must be one of '%s'",
                $this->container['businessType'],
                implode("', '", $allowedValues)
            );
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
     * Gets marketplaceLevelAttributes
     *
     * @return \Webcom\Amazon\Rest\SellersApi\Model\MarketplaceLevelAttributes[]
     */
    public function getMarketplaceLevelAttributes()
    {
        return $this->container['marketplaceLevelAttributes'];
    }

    /**
     * Sets marketplaceLevelAttributes
     *
     * @param \Webcom\Amazon\Rest\SellersApi\Model\MarketplaceLevelAttributes[] $marketplaceLevelAttributes A list of details of the marketplaces where the seller account is active.
     *
     * @return self
     */
    public function setMarketplaceLevelAttributes($marketplaceLevelAttributes)
    {
        $this->container['marketplaceLevelAttributes'] = $marketplaceLevelAttributes;

        return $this;
    }

    /**
     * Gets businessType
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
     * Sets businessType
     *
     * @param string $businessType The type of business registered for the seller account.
     *
     * @return self
     */
    public function setBusinessType($businessType)
    {
        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!in_array($businessType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'businessType', must be one of '%s'",
                    $businessType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['businessType'] = $businessType;

        return $this;
    }

    /**
     * Gets business
     *
     * @return \Webcom\Amazon\Rest\SellersApi\Model\Business|null
     */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
     * Sets business
     *
     * @param \Webcom\Amazon\Rest\SellersApi\Model\Business|null $business business
     *
     * @return self
     */
    public function setBusiness($business)
    {
        $this->container['business'] = $business;

        return $this;
    }

    /**
     * Gets primaryContact
     *
     * @return \Webcom\Amazon\Rest\SellersApi\Model\PrimaryContact|null
     */
    public function getPrimaryContact()
    {
        return $this->container['primaryContact'];
    }

    /**
     * Sets primaryContact
     *
     * @param \Webcom\Amazon\Rest\SellersApi\Model\PrimaryContact|null $primaryContact primaryContact
     *
     * @return self
     */
    public function setPrimaryContact($primaryContact)
    {
        $this->container['primaryContact'] = $primaryContact;

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


