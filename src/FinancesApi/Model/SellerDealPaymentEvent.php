<?php
/**
 * SellerDealPaymentEvent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApi
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

namespace Webcom\Amazon\Rest\FinancesApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * SellerDealPaymentEvent Class Doc Comment
 *
 * @category Class
 * @description An event linked to the payment of a fee related to the specified deal.
 * @package  Webcom\Amazon\Rest\FinancesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerDealPaymentEvent implements ModelInterface, ArrayAccess, \JsonSerializable
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
        'posted_date' => '\DateTime',
        'deal_id' => 'string',
        'deal_description' => 'string',
        'event_type' => 'string',
        'fee_type' => 'string',
        'fee_amount' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'tax_amount' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'total_amount' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => 'date-time',
        'deal_id' => null,
        'deal_description' => null,
        'event_type' => null,
        'fee_type' => null,
        'fee_amount' => null,
        'tax_amount' => null,
        'total_amount' => null
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
        'posted_date' => 'postedDate',
        'deal_id' => 'dealId',
        'deal_description' => 'dealDescription',
        'event_type' => 'eventType',
        'fee_type' => 'feeType',
        'fee_amount' => 'feeAmount',
        'tax_amount' => 'taxAmount',
        'total_amount' => 'totalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
        'deal_id' => 'setDealId',
        'deal_description' => 'setDealDescription',
        'event_type' => 'setEventType',
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'deal_id' => 'getDealId',
        'deal_description' => 'getDealDescription',
        'event_type' => 'getEventType',
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['deal_description'] = $data['deal_description'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return string|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param string|null $deal_id The unique identifier of the deal.
     *
     * @return self
     */
    public function setDealId($deal_id)
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_description
     *
     * @return string|null
     */
    public function getDealDescription()
    {
        return $this->container['deal_description'];
    }

    /**
     * Sets deal_description
     *
     * @param string|null $deal_description The internal description of the deal.
     *
     * @return self
     */
    public function setDealDescription($deal_description)
    {
        $this->container['deal_description'] = $deal_description;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type The type of event: SellerDealComplete.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type The type of fee: RunLightningDealFee.
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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


