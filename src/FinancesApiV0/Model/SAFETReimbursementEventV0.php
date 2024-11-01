<?php
/**
 * SAFETReimbursementEventV0
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
 * SAFETReimbursementEventV0 Class Doc Comment
 *
 * @category Class
 * @description A SAFE-T claim reimbursement on the seller&#39;s account.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SAFETReimbursementEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SAFETReimbursementEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postedDate' => '\DateTime',
        'sAFETClaimId' => 'string',
        'reimbursedAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'reasonCode' => 'string',
        'sAFETReimbursementItemList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\SAFETReimbursementItemV0[]'
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
        'sAFETClaimId' => null,
        'reimbursedAmount' => null,
        'reasonCode' => null,
        'sAFETReimbursementItemList' => null
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
        'postedDate' => 'PostedDate',
        'sAFETClaimId' => 'SAFETClaimId',
        'reimbursedAmount' => 'ReimbursedAmount',
        'reasonCode' => 'ReasonCode',
        'sAFETReimbursementItemList' => 'SAFETReimbursementItemList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'sAFETClaimId' => 'setSAFETClaimId',
        'reimbursedAmount' => 'setReimbursedAmount',
        'reasonCode' => 'setReasonCode',
        'sAFETReimbursementItemList' => 'setSAFETReimbursementItemList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'sAFETClaimId' => 'getSAFETClaimId',
        'reimbursedAmount' => 'getReimbursedAmount',
        'reasonCode' => 'getReasonCode',
        'sAFETReimbursementItemList' => 'getSAFETReimbursementItemList'
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
        $this->container['sAFETClaimId'] = $data['sAFETClaimId'] ?? null;
        $this->container['reimbursedAmount'] = $data['reimbursedAmount'] ?? null;
        $this->container['reasonCode'] = $data['reasonCode'] ?? null;
        $this->container['sAFETReimbursementItemList'] = $data['sAFETReimbursementItemList'] ?? null;
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
     * Gets sAFETClaimId
     *
     * @return string|null
     */
    public function getSAFETClaimId()
    {
        return $this->container['sAFETClaimId'];
    }

    /**
     * Sets sAFETClaimId
     *
     * @param string|null $sAFETClaimId A SAFE-T claim identifier.
     *
     * @return self
     */
    public function setSAFETClaimId($sAFETClaimId)
    {
        $this->container['sAFETClaimId'] = $sAFETClaimId;

        return $this;
    }

    /**
     * Gets reimbursedAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getReimbursedAmount()
    {
        return $this->container['reimbursedAmount'];
    }

    /**
     * Sets reimbursedAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $reimbursedAmount reimbursedAmount
     *
     * @return self
     */
    public function setReimbursedAmount($reimbursedAmount)
    {
        $this->container['reimbursedAmount'] = $reimbursedAmount;

        return $this;
    }

    /**
     * Gets reasonCode
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     *
     * @param string|null $reasonCode Indicates why the seller was reimbursed.
     *
     * @return self
     */
    public function setReasonCode($reasonCode)
    {
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }

    /**
     * Gets sAFETReimbursementItemList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\SAFETReimbursementItemV0[]|null
     */
    public function getSAFETReimbursementItemList()
    {
        return $this->container['sAFETReimbursementItemList'];
    }

    /**
     * Sets sAFETReimbursementItemList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\SAFETReimbursementItemV0[]|null $sAFETReimbursementItemList A list of `SAFETReimbursementItem`.
     *
     * @return self
     */
    public function setSAFETReimbursementItemList($sAFETReimbursementItemList)
    {
        $this->container['sAFETReimbursementItemList'] = $sAFETReimbursementItemList;

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


