<?php
/**
 * SellerDealPaymentEventV0
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
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
 * SellerDealPaymentEventV0 Class Doc Comment
 *
 * @category Class
 * @description An event linked to the payment of a fee related to the specified deal.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerDealPaymentEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerDealPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postedDate' => '\DateTime',
        'dealId' => 'string',
        'dealDescription' => 'string',
        'eventType' => 'string',
        'feeType' => 'string',
        'feeAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'taxAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'totalAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0'
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
        'dealId' => null,
        'dealDescription' => null,
        'eventType' => null,
        'feeType' => null,
        'feeAmount' => null,
        'taxAmount' => null,
        'totalAmount' => null
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
        'dealId' => 'dealId',
        'dealDescription' => 'dealDescription',
        'eventType' => 'eventType',
        'feeType' => 'feeType',
        'feeAmount' => 'feeAmount',
        'taxAmount' => 'taxAmount',
        'totalAmount' => 'totalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'dealId' => 'setDealId',
        'dealDescription' => 'setDealDescription',
        'eventType' => 'setEventType',
        'feeType' => 'setFeeType',
        'feeAmount' => 'setFeeAmount',
        'taxAmount' => 'setTaxAmount',
        'totalAmount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'dealId' => 'getDealId',
        'dealDescription' => 'getDealDescription',
        'eventType' => 'getEventType',
        'feeType' => 'getFeeType',
        'feeAmount' => 'getFeeAmount',
        'taxAmount' => 'getTaxAmount',
        'totalAmount' => 'getTotalAmount'
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
        $this->container['dealId'] = $data['dealId'] ?? null;
        $this->container['dealDescription'] = $data['dealDescription'] ?? null;
        $this->container['eventType'] = $data['eventType'] ?? null;
        $this->container['feeType'] = $data['feeType'] ?? null;
        $this->container['feeAmount'] = $data['feeAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
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
     * @param \DateTime|null $postedDate postedDate
     *
     * @return self
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets dealId
     *
     * @return string|null
     */
    public function getDealId()
    {
        return $this->container['dealId'];
    }

    /**
     * Sets dealId
     *
     * @param string|null $dealId The unique identifier of the deal.
     *
     * @return self
     */
    public function setDealId($dealId)
    {
        $this->container['dealId'] = $dealId;

        return $this;
    }

    /**
     * Gets dealDescription
     *
     * @return string|null
     */
    public function getDealDescription()
    {
        return $this->container['dealDescription'];
    }

    /**
     * Sets dealDescription
     *
     * @param string|null $dealDescription The internal description of the deal.
     *
     * @return self
     */
    public function setDealDescription($dealDescription)
    {
        $this->container['dealDescription'] = $dealDescription;

        return $this;
    }

    /**
     * Gets eventType
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string|null $eventType The type of event: SellerDealComplete.
     *
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets feeType
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['feeType'];
    }

    /**
     * Sets feeType
     *
     * @param string|null $feeType The type of fee: RunLightningDealFee.
     *
     * @return self
     */
    public function setFeeType($feeType)
    {
        $this->container['feeType'] = $feeType;

        return $this;
    }

    /**
     * Gets feeAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getFeeAmount()
    {
        return $this->container['feeAmount'];
    }

    /**
     * Sets feeAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $feeAmount feeAmount
     *
     * @return self
     */
    public function setFeeAmount($feeAmount)
    {
        $this->container['feeAmount'] = $feeAmount;

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
     * Gets totalAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $totalAmount totalAmount
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

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

