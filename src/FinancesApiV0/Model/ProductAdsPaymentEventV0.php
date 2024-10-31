<?php
/**
 * ProductAdsPaymentEventV0
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
 * ProductAdsPaymentEventV0 Class Doc Comment
 *
 * @category Class
 * @description A Sponsored Products payment event.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductAdsPaymentEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductAdsPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postedDate' => '\DateTime',
        'transactionType' => 'string',
        'invoiceId' => 'string',
        'baseValue' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'taxValue' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'transactionValue' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'postedDate' => 'date-time',
        'transactionType' => null,
        'invoiceId' => null,
        'baseValue' => null,
        'taxValue' => null,
        'transactionValue' => null
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
        'postedDate' => 'postedDate',
        'transactionType' => 'transactionType',
        'invoiceId' => 'invoiceId',
        'baseValue' => 'baseValue',
        'taxValue' => 'taxValue',
        'transactionValue' => 'transactionValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'transactionType' => 'setTransactionType',
        'invoiceId' => 'setInvoiceId',
        'baseValue' => 'setBaseValue',
        'taxValue' => 'setTaxValue',
        'transactionValue' => 'setTransactionValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'transactionType' => 'getTransactionType',
        'invoiceId' => 'getInvoiceId',
        'baseValue' => 'getBaseValue',
        'taxValue' => 'getTaxValue',
        'transactionValue' => 'getTransactionValue'
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
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['invoiceId'] = $data['invoiceId'] ?? null;
        $this->container['baseValue'] = $data['baseValue'] ?? null;
        $this->container['taxValue'] = $data['taxValue'] ?? null;
        $this->container['transactionValue'] = $data['transactionValue'] ?? null;
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
     * @param string|null $transactionType Indicates if the transaction is for a charge or a refund.  Possible values:  * `charge`  * `refund`
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets invoiceId
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoiceId'];
    }

    /**
     * Sets invoiceId
     *
     * @param string|null $invoiceId The identifier for the invoice that includes the transaction.
     *
     * @return self
     */
    public function setInvoiceId($invoiceId)
    {
        $this->container['invoiceId'] = $invoiceId;

        return $this;
    }

    /**
     * Gets baseValue
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getBaseValue()
    {
        return $this->container['baseValue'];
    }

    /**
     * Sets baseValue
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $baseValue baseValue
     *
     * @return self
     */
    public function setBaseValue($baseValue)
    {
        $this->container['baseValue'] = $baseValue;

        return $this;
    }

    /**
     * Gets taxValue
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTaxValue()
    {
        return $this->container['taxValue'];
    }

    /**
     * Sets taxValue
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $taxValue taxValue
     *
     * @return self
     */
    public function setTaxValue($taxValue)
    {
        $this->container['taxValue'] = $taxValue;

        return $this;
    }

    /**
     * Gets transactionValue
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTransactionValue()
    {
        return $this->container['transactionValue'];
    }

    /**
     * Sets transactionValue
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $transactionValue transactionValue
     *
     * @return self
     */
    public function setTransactionValue($transactionValue)
    {
        $this->container['transactionValue'] = $transactionValue;

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


