<?php
/**
 * FeesEstimateRequestV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductFeesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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

namespace Webcom\Amazon\Rest\ProductFeesApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FeesEstimateRequestV0 Class Doc Comment
 *
 * @category Class
 * @description A product, marketplace, and proposed price used to request estimated fees.
 * @package  Webcom\Amazon\Rest\ProductFeesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeesEstimateRequestV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeesEstimateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'isAmazonFulfilled' => 'bool',
        'priceToEstimateFees' => '\Webcom\Amazon\Rest\ProductFeesApiV0\Model\PriceToEstimateFeesV0',
        'identifier' => 'string',
        'optionalFulfillmentProgram' => '\Webcom\Amazon\Rest\ProductFeesApiV0\Model\OptionalFulfillmentProgramV0'
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
        'isAmazonFulfilled' => null,
        'priceToEstimateFees' => null,
        'identifier' => null,
        'optionalFulfillmentProgram' => null
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
        'marketplaceId' => 'MarketplaceId',
        'isAmazonFulfilled' => 'IsAmazonFulfilled',
        'priceToEstimateFees' => 'PriceToEstimateFees',
        'identifier' => 'Identifier',
        'optionalFulfillmentProgram' => 'OptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'isAmazonFulfilled' => 'setIsAmazonFulfilled',
        'priceToEstimateFees' => 'setPriceToEstimateFees',
        'identifier' => 'setIdentifier',
        'optionalFulfillmentProgram' => 'setOptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'isAmazonFulfilled' => 'getIsAmazonFulfilled',
        'priceToEstimateFees' => 'getPriceToEstimateFees',
        'identifier' => 'getIdentifier',
        'optionalFulfillmentProgram' => 'getOptionalFulfillmentProgram'
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
        $this->container['isAmazonFulfilled'] = $data['isAmazonFulfilled'] ?? null;
        $this->container['priceToEstimateFees'] = $data['priceToEstimateFees'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['optionalFulfillmentProgram'] = $data['optionalFulfillmentProgram'] ?? null;
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
        if ($this->container['priceToEstimateFees'] === null) {
            $invalidProperties[] = "'priceToEstimateFees' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
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
     * @param string $marketplaceId A marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets isAmazonFulfilled
     *
     * @return bool|null
     */
    public function getIsAmazonFulfilled()
    {
        return $this->container['isAmazonFulfilled'];
    }

    /**
     * Sets isAmazonFulfilled
     *
     * @param bool|null $isAmazonFulfilled When true, the offer is fulfilled by Amazon.
     *
     * @return self
     */
    public function setIsAmazonFulfilled($isAmazonFulfilled)
    {
        $this->container['isAmazonFulfilled'] = $isAmazonFulfilled;

        return $this;
    }

    /**
     * Gets priceToEstimateFees
     *
     * @return \Webcom\Amazon\Rest\ProductFeesApiV0\Model\PriceToEstimateFeesV0
     */
    public function getPriceToEstimateFees()
    {
        return $this->container['priceToEstimateFees'];
    }

    /**
     * Sets priceToEstimateFees
     *
     * @param \Webcom\Amazon\Rest\ProductFeesApiV0\Model\PriceToEstimateFeesV0 $priceToEstimateFees priceToEstimateFees
     *
     * @return self
     */
    public function setPriceToEstimateFees($priceToEstimateFees)
    {
        $this->container['priceToEstimateFees'] = $priceToEstimateFees;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier A unique identifier provided by the caller to track this request.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets optionalFulfillmentProgram
     *
     * @return \Webcom\Amazon\Rest\ProductFeesApiV0\Model\OptionalFulfillmentProgramV0|null
     */
    public function getOptionalFulfillmentProgram()
    {
        return $this->container['optionalFulfillmentProgram'];
    }

    /**
     * Sets optionalFulfillmentProgram
     *
     * @param \Webcom\Amazon\Rest\ProductFeesApiV0\Model\OptionalFulfillmentProgramV0|null $optionalFulfillmentProgram optionalFulfillmentProgram
     *
     * @return self
     */
    public function setOptionalFulfillmentProgram($optionalFulfillmentProgram)
    {
        $this->container['optionalFulfillmentProgram'] = $optionalFulfillmentProgram;

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


