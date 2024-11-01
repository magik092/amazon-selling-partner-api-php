<?php
/**
 * AffordabilityExpenseEventV0
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
 * AffordabilityExpenseEventV0 Class Doc Comment
 *
 * @category Class
 * @description An expense related to an affordability promotion.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AffordabilityExpenseEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AffordabilityExpenseEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'postedDate' => '\DateTime',
        'marketplaceId' => 'string',
        'transactionType' => 'string',
        'baseExpense' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'taxTypeCGST' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'taxTypeSGST' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'taxTypeIGST' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'totalExpense' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0'
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
        'postedDate' => 'date-time',
        'marketplaceId' => null,
        'transactionType' => null,
        'baseExpense' => null,
        'taxTypeCGST' => null,
        'taxTypeSGST' => null,
        'taxTypeIGST' => null,
        'totalExpense' => null
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
        'postedDate' => 'PostedDate',
        'marketplaceId' => 'MarketplaceId',
        'transactionType' => 'TransactionType',
        'baseExpense' => 'BaseExpense',
        'taxTypeCGST' => 'TaxTypeCGST',
        'taxTypeSGST' => 'TaxTypeSGST',
        'taxTypeIGST' => 'TaxTypeIGST',
        'totalExpense' => 'TotalExpense'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'postedDate' => 'setPostedDate',
        'marketplaceId' => 'setMarketplaceId',
        'transactionType' => 'setTransactionType',
        'baseExpense' => 'setBaseExpense',
        'taxTypeCGST' => 'setTaxTypeCGST',
        'taxTypeSGST' => 'setTaxTypeSGST',
        'taxTypeIGST' => 'setTaxTypeIGST',
        'totalExpense' => 'setTotalExpense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'postedDate' => 'getPostedDate',
        'marketplaceId' => 'getMarketplaceId',
        'transactionType' => 'getTransactionType',
        'baseExpense' => 'getBaseExpense',
        'taxTypeCGST' => 'getTaxTypeCGST',
        'taxTypeSGST' => 'getTaxTypeSGST',
        'taxTypeIGST' => 'getTaxTypeIGST',
        'totalExpense' => 'getTotalExpense'
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
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['baseExpense'] = $data['baseExpense'] ?? null;
        $this->container['taxTypeCGST'] = $data['taxTypeCGST'] ?? null;
        $this->container['taxTypeSGST'] = $data['taxTypeSGST'] ?? null;
        $this->container['taxTypeIGST'] = $data['taxTypeIGST'] ?? null;
        $this->container['totalExpense'] = $data['totalExpense'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['taxTypeCGST'] === null) {
            $invalidProperties[] = "'taxTypeCGST' can't be null";
        }
        if ($this->container['taxTypeSGST'] === null) {
            $invalidProperties[] = "'taxTypeSGST' can't be null";
        }
        if ($this->container['taxTypeIGST'] === null) {
            $invalidProperties[] = "'taxTypeIGST' can't be null";
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
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string|null $amazonOrderId An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

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
     * @param string|null $marketplaceId The Amazon-defined marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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
     * @param string|null $transactionType The type of transaction.   Possible values:  * `Charge`: an affordability promotion expense. * `Refund`: an affordability promotion expense reversal.
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets baseExpense
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getBaseExpense()
    {
        return $this->container['baseExpense'];
    }

    /**
     * Sets baseExpense
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $baseExpense baseExpense
     *
     * @return self
     */
    public function setBaseExpense($baseExpense)
    {
        $this->container['baseExpense'] = $baseExpense;

        return $this;
    }

    /**
     * Gets taxTypeCGST
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0
     */
    public function getTaxTypeCGST()
    {
        return $this->container['taxTypeCGST'];
    }

    /**
     * Sets taxTypeCGST
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0 $taxTypeCGST taxTypeCGST
     *
     * @return self
     */
    public function setTaxTypeCGST($taxTypeCGST)
    {
        $this->container['taxTypeCGST'] = $taxTypeCGST;

        return $this;
    }

    /**
     * Gets taxTypeSGST
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0
     */
    public function getTaxTypeSGST()
    {
        return $this->container['taxTypeSGST'];
    }

    /**
     * Sets taxTypeSGST
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0 $taxTypeSGST taxTypeSGST
     *
     * @return self
     */
    public function setTaxTypeSGST($taxTypeSGST)
    {
        $this->container['taxTypeSGST'] = $taxTypeSGST;

        return $this;
    }

    /**
     * Gets taxTypeIGST
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0
     */
    public function getTaxTypeIGST()
    {
        return $this->container['taxTypeIGST'];
    }

    /**
     * Sets taxTypeIGST
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0 $taxTypeIGST taxTypeIGST
     *
     * @return self
     */
    public function setTaxTypeIGST($taxTypeIGST)
    {
        $this->container['taxTypeIGST'] = $taxTypeIGST;

        return $this;
    }

    /**
     * Gets totalExpense
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTotalExpense()
    {
        return $this->container['totalExpense'];
    }

    /**
     * Sets totalExpense
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $totalExpense totalExpense
     *
     * @return self
     */
    public function setTotalExpense($totalExpense)
    {
        $this->container['totalExpense'] = $totalExpense;

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


