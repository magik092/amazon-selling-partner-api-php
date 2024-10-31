<?php
/**
 * NetworkComminglingTransactionEventV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances provides financial information that is relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Webcom\Amazon\Rest\FinancesApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * NetworkComminglingTransactionEventV0 Class Doc Comment
 *
 * @category Class
 * @description A network commingling transaction event.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NetworkComminglingTransactionEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NetworkComminglingTransactionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transactionType' => 'string',
        'postedDate' => '\DateTime',
        'netCoTransactionID' => 'string',
        'swapReason' => 'string',
        'aSIN' => 'string',
        'marketplaceId' => 'string',
        'taxExclusiveAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'taxAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transactionType' => null,
        'postedDate' => 'date-time',
        'netCoTransactionID' => null,
        'swapReason' => null,
        'aSIN' => null,
        'marketplaceId' => null,
        'taxExclusiveAmount' => null,
        'taxAmount' => null
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
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'netCoTransactionID' => 'NetCoTransactionID',
        'swapReason' => 'SwapReason',
        'aSIN' => 'ASIN',
        'marketplaceId' => 'MarketplaceId',
        'taxExclusiveAmount' => 'TaxExclusiveAmount',
        'taxAmount' => 'TaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionType' => 'setTransactionType',
        'postedDate' => 'setPostedDate',
        'netCoTransactionID' => 'setNetCoTransactionID',
        'swapReason' => 'setSwapReason',
        'aSIN' => 'setASIN',
        'marketplaceId' => 'setMarketplaceId',
        'taxExclusiveAmount' => 'setTaxExclusiveAmount',
        'taxAmount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionType' => 'getTransactionType',
        'postedDate' => 'getPostedDate',
        'netCoTransactionID' => 'getNetCoTransactionID',
        'swapReason' => 'getSwapReason',
        'aSIN' => 'getASIN',
        'marketplaceId' => 'getMarketplaceId',
        'taxExclusiveAmount' => 'getTaxExclusiveAmount',
        'taxAmount' => 'getTaxAmount'
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
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['netCoTransactionID'] = $data['netCoTransactionID'] ?? null;
        $this->container['swapReason'] = $data['swapReason'] ?? null;
        $this->container['aSIN'] = $data['aSIN'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['taxExclusiveAmount'] = $data['taxExclusiveAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
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
     * Gets transactionType
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType The type of network item swap.  Possible values:  * `NetCo`: A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.  * `ComminglingVAT`: A commingling VAT transaction. Available only in the Spain, UK, France, Germany, and Italy marketplaces.
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets postedDate
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \DateTime|null $postedDate A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     *
     * @return self
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets netCoTransactionID
     *
     * @return string|null
     */
    public function getNetCoTransactionID()
    {
        return $this->container['netCoTransactionID'];
    }

    /**
     * Sets netCoTransactionID
     *
     * @param string|null $netCoTransactionID The identifier for the network item swap.
     *
     * @return self
     */
    public function setNetCoTransactionID($netCoTransactionID)
    {
        $this->container['netCoTransactionID'] = $netCoTransactionID;

        return $this;
    }

    /**
     * Gets swapReason
     *
     * @return string|null
     */
    public function getSwapReason()
    {
        return $this->container['swapReason'];
    }

    /**
     * Sets swapReason
     *
     * @param string|null $swapReason The reason for the network item swap.
     *
     * @return self
     */
    public function setSwapReason($swapReason)
    {
        $this->container['swapReason'] = $swapReason;

        return $this;
    }

    /**
     * Gets aSIN
     *
     * @return string|null
     */
    public function getASIN()
    {
        return $this->container['aSIN'];
    }

    /**
     * Sets aSIN
     *
     * @param string|null $aSIN The Amazon Standard Identification Number (ASIN) of the swapped item.
     *
     * @return self
     */
    public function setASIN($aSIN)
    {
        $this->container['aSIN'] = $aSIN;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The marketplace in which the event took place.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets taxExclusiveAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTaxExclusiveAmount()
    {
        return $this->container['taxExclusiveAmount'];
    }

    /**
     * Sets taxExclusiveAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $taxExclusiveAmount taxExclusiveAmount
     *
     * @return self
     */
    public function setTaxExclusiveAmount($taxExclusiveAmount)
    {
        $this->container['taxExclusiveAmount'] = $taxExclusiveAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $taxAmount taxAmount
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

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


