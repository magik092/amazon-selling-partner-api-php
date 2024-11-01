<?php
/**
 * Marketplace
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
 * Marketplace Class Doc Comment
 *
 * @category Class
 * @description Information about an Amazon marketplace where a seller can list items and customers can view and purchase items.
 * @package  Webcom\Amazon\Rest\SellersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Marketplace implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Marketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'countryCode' => 'string',
        'defaultCurrencyCode' => 'string',
        'defaultLanguageCode' => 'string',
        'domainName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'countryCode' => null,
        'defaultCurrencyCode' => null,
        'defaultLanguageCode' => null,
        'domainName' => null
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
        'id' => 'id',
        'name' => 'name',
        'countryCode' => 'countryCode',
        'defaultCurrencyCode' => 'defaultCurrencyCode',
        'defaultLanguageCode' => 'defaultLanguageCode',
        'domainName' => 'domainName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'countryCode' => 'setCountryCode',
        'defaultCurrencyCode' => 'setDefaultCurrencyCode',
        'defaultLanguageCode' => 'setDefaultLanguageCode',
        'domainName' => 'setDomainName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'countryCode' => 'getCountryCode',
        'defaultCurrencyCode' => 'getDefaultCurrencyCode',
        'defaultLanguageCode' => 'getDefaultLanguageCode',
        'domainName' => 'getDomainName'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['defaultCurrencyCode'] = $data['defaultCurrencyCode'] ?? null;
        $this->container['defaultLanguageCode'] = $data['defaultLanguageCode'] ?? null;
        $this->container['domainName'] = $data['domainName'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if (!preg_match("/^([A-Z]{2})$/", $this->container['countryCode'])) {
            $invalidProperties[] = "invalid value for 'countryCode', must be conform to the pattern /^([A-Z]{2})$/.";
        }

        if ($this->container['defaultCurrencyCode'] === null) {
            $invalidProperties[] = "'defaultCurrencyCode' can't be null";
        }
        if ($this->container['defaultLanguageCode'] === null) {
            $invalidProperties[] = "'defaultLanguageCode' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The encrypted marketplace value.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The marketplace name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode The ISO 3166-1 alpha-2 format country code of the marketplace.
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {

        if ((!preg_match("/^([A-Z]{2})$/", $countryCode))) {
            throw new \InvalidArgumentException("invalid value for $countryCode when calling Marketplace., must conform to the pattern /^([A-Z]{2})$/.");
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets defaultCurrencyCode
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['defaultCurrencyCode'];
    }

    /**
     * Sets defaultCurrencyCode
     *
     * @param string $defaultCurrencyCode The ISO 4217 format currency code of the marketplace.
     *
     * @return self
     */
    public function setDefaultCurrencyCode($defaultCurrencyCode)
    {
        $this->container['defaultCurrencyCode'] = $defaultCurrencyCode;

        return $this;
    }

    /**
     * Gets defaultLanguageCode
     *
     * @return string
     */
    public function getDefaultLanguageCode()
    {
        return $this->container['defaultLanguageCode'];
    }

    /**
     * Sets defaultLanguageCode
     *
     * @param string $defaultLanguageCode The ISO 639-1 format language code of the marketplace.
     *
     * @return self
     */
    public function setDefaultLanguageCode($defaultLanguageCode)
    {
        $this->container['defaultLanguageCode'] = $defaultLanguageCode;

        return $this;
    }

    /**
     * Gets domainName
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
     * Sets domainName
     *
     * @param string $domainName The domain name of the marketplace.
     *
     * @return self
     */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;

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


