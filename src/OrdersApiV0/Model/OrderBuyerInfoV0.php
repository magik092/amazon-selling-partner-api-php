<?php
/**
 * OrderBuyerInfoV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * Use the Orders Selling Partner API to programmatically retrieve order information. With this API, you can develop fast, flexible, and custom applications to manage order synchronization, perform order research, and create demand-based decision support tools.   _Note:_ For the JP, AU, and SG marketplaces, the Orders API supports orders from 2016 onward. For all other marketplaces, the Orders API supports orders for the last two years (orders older than this don't show up in the response).
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

namespace Webcom\Amazon\Rest\OrdersApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * OrderBuyerInfoV0 Class Doc Comment
 *
 * @category Class
 * @description Buyer information for an order.
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderBuyerInfoV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderBuyerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'buyerEmail' => 'string',
        'buyerName' => 'string',
        'buyerCounty' => 'string',
        'buyerTaxInfo' => '\Webcom\Amazon\Rest\OrdersApiV0\Model\BuyerTaxInfoV0',
        'purchaseOrderNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazonOrderId' => null,
        'buyerEmail' => null,
        'buyerName' => null,
        'buyerCounty' => null,
        'buyerTaxInfo' => null,
        'purchaseOrderNumber' => null
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
        'amazonOrderId' => 'AmazonOrderId',
        'buyerEmail' => 'BuyerEmail',
        'buyerName' => 'BuyerName',
        'buyerCounty' => 'BuyerCounty',
        'buyerTaxInfo' => 'BuyerTaxInfo',
        'purchaseOrderNumber' => 'PurchaseOrderNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'buyerEmail' => 'setBuyerEmail',
        'buyerName' => 'setBuyerName',
        'buyerCounty' => 'setBuyerCounty',
        'buyerTaxInfo' => 'setBuyerTaxInfo',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'buyerEmail' => 'getBuyerEmail',
        'buyerName' => 'getBuyerName',
        'buyerCounty' => 'getBuyerCounty',
        'buyerTaxInfo' => 'getBuyerTaxInfo',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber'
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
        $this->container['amazonOrderId'] = $data['amazonOrderId'] ?? null;
        $this->container['buyerEmail'] = $data['buyerEmail'] ?? null;
        $this->container['buyerName'] = $data['buyerName'] ?? null;
        $this->container['buyerCounty'] = $data['buyerCounty'] ?? null;
        $this->container['buyerTaxInfo'] = $data['buyerTaxInfo'] ?? null;
        $this->container['purchaseOrderNumber'] = $data['purchaseOrderNumber'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
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
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets buyerEmail
     *
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->container['buyerEmail'];
    }

    /**
     * Sets buyerEmail
     *
     * @param string|null $buyerEmail The anonymized email address of the buyer.
     *
     * @return self
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->container['buyerEmail'] = $buyerEmail;

        return $this;
    }

    /**
     * Gets buyerName
     *
     * @return string|null
     */
    public function getBuyerName()
    {
        return $this->container['buyerName'];
    }

    /**
     * Sets buyerName
     *
     * @param string|null $buyerName The buyer name or the recipient name.
     *
     * @return self
     */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;

        return $this;
    }

    /**
     * Gets buyerCounty
     *
     * @return string|null
     */
    public function getBuyerCounty()
    {
        return $this->container['buyerCounty'];
    }

    /**
     * Sets buyerCounty
     *
     * @param string|null $buyerCounty The county of the buyer.  **Note**: This attribute is only available in the Brazil marketplace.
     *
     * @return self
     */
    public function setBuyerCounty($buyerCounty)
    {
        $this->container['buyerCounty'] = $buyerCounty;

        return $this;
    }

    /**
     * Gets buyerTaxInfo
     *
     * @return \Webcom\Amazon\Rest\OrdersApiV0\Model\BuyerTaxInfoV0|null
     */
    public function getBuyerTaxInfo()
    {
        return $this->container['buyerTaxInfo'];
    }

    /**
     * Sets buyerTaxInfo
     *
     * @param \Webcom\Amazon\Rest\OrdersApiV0\Model\BuyerTaxInfoV0|null $buyerTaxInfo buyerTaxInfo
     *
     * @return self
     */
    public function setBuyerTaxInfo($buyerTaxInfo)
    {
        $this->container['buyerTaxInfo'] = $buyerTaxInfo;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber The purchase order (PO) number entered by the buyer at checkout. Only returned for orders where the buyer entered a PO number at checkout.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

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


