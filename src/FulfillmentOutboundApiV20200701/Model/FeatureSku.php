<?php
/**
 * FeatureSku
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
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

namespace Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FeatureSku Class Doc Comment
 *
 * @category Class
 * @description Information about an SKU, including the count available, identifiers, and a list of overlapping SKUs that share the same inventory pool.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeatureSku implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeatureSku';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerSku' => 'string',
        'fnSku' => 'string',
        'asin' => 'string',
        'skuCount' => 'float',
        'overlappingSkus' => 'string[]'
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
        'fnSku' => null,
        'asin' => null,
        'skuCount' => null,
        'overlappingSkus' => null
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
        'fnSku' => 'fnSku',
        'asin' => 'asin',
        'skuCount' => 'skuCount',
        'overlappingSkus' => 'overlappingSkus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSku' => 'setSellerSku',
        'fnSku' => 'setFnSku',
        'asin' => 'setAsin',
        'skuCount' => 'setSkuCount',
        'overlappingSkus' => 'setOverlappingSkus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSku' => 'getSellerSku',
        'fnSku' => 'getFnSku',
        'asin' => 'getAsin',
        'skuCount' => 'getSkuCount',
        'overlappingSkus' => 'getOverlappingSkus'
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
        $this->container['fnSku'] = $data['fnSku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['skuCount'] = $data['skuCount'] ?? null;
        $this->container['overlappingSkus'] = $data['overlappingSkus'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $sellerSku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     *
     * @return self
     */
    public function setSellerSku($sellerSku)
    {
        $this->container['sellerSku'] = $sellerSku;

        return $this;
    }

    /**
     * Gets fnSku
     *
     * @return string|null
     */
    public function getFnSku()
    {
        return $this->container['fnSku'];
    }

    /**
     * Sets fnSku
     *
     * @param string|null $fnSku The unique SKU used by Amazon's fulfillment network.
     *
     * @return self
     */
    public function setFnSku($fnSku)
    {
        $this->container['fnSku'] = $fnSku;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets skuCount
     *
     * @return float|null
     */
    public function getSkuCount()
    {
        return $this->container['skuCount'];
    }

    /**
     * Sets skuCount
     *
     * @param float|null $skuCount The number of SKUs available for this service.
     *
     * @return self
     */
    public function setSkuCount($skuCount)
    {
        $this->container['skuCount'] = $skuCount;

        return $this;
    }

    /**
     * Gets overlappingSkus
     *
     * @return string[]|null
     */
    public function getOverlappingSkus()
    {
        return $this->container['overlappingSkus'];
    }

    /**
     * Sets overlappingSkus
     *
     * @param string[]|null $overlappingSkus Other seller SKUs that are shared across the same inventory.
     *
     * @return self
     */
    public function setOverlappingSkus($overlappingSkus)
    {
        $this->container['overlappingSkus'] = $overlappingSkus;

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


