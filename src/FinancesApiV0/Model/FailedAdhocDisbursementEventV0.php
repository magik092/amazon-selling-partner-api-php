<?php
/**
 * FailedAdhocDisbursementEventV0
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
 * FailedAdhocDisbursementEventV0 Class Doc Comment
 *
 * @category Class
 * @description Failed ad hoc disbursement event list.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FailedAdhocDisbursementEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FailedAdhocDisbursementEvent';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'fundsTransfersType'      => 'string',
        'transferId'              => 'string',
        'disbursementId'          => 'string',
        'paymentDisbursementType' => 'string',
        'status'                  => 'string',
        'transferAmount'          => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0',
        'postedDate'              => '\DateTime',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'fundsTransfersType'      => null,
        'transferId'              => null,
        'disbursementId'          => null,
        'paymentDisbursementType' => null,
        'status'                  => null,
        'transferAmount'          => null,
        'postedDate'              => 'date-time',
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
        'fundsTransfersType'      => 'FundsTransfersType',
        'transferId'              => 'TransferId',
        'disbursementId'          => 'DisbursementId',
        'paymentDisbursementType' => 'PaymentDisbursementType',
        'status'                  => 'Status',
        'transferAmount'          => 'TransferAmount',
        'postedDate'              => 'PostedDate',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundsTransfersType'      => 'setFundsTransfersType',
        'transferId'              => 'setTransferId',
        'disbursementId'          => 'setDisbursementId',
        'paymentDisbursementType' => 'setPaymentDisbursementType',
        'status'                  => 'setStatus',
        'transferAmount'          => 'setTransferAmount',
        'postedDate'              => 'setPostedDate',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundsTransfersType'      => 'getFundsTransfersType',
        'transferId'              => 'getTransferId',
        'disbursementId'          => 'getDisbursementId',
        'paymentDisbursementType' => 'getPaymentDisbursementType',
        'status'                  => 'getStatus',
        'transferAmount'          => 'getTransferAmount',
        'postedDate'              => 'getPostedDate',
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
        $this->container['fundsTransfersType'] = $data['fundsTransfersType'] ?? null;
        $this->container['transferId'] = $data['transferId'] ?? null;
        $this->container['disbursementId'] = $data['disbursementId'] ?? null;
        $this->container['paymentDisbursementType'] = $data['paymentDisbursementType'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['transferAmount'] = $data['transferAmount'] ?? null;
        $this->container['postedDate'] = $data['postedDate'] ?? null;
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
     * Gets fundsTransfersType
     *
     * @return string|null
     */
    public function getFundsTransfersType()
    {
        return $this->container['fundsTransfersType'];
    }

    /**
     * Sets fundsTransfersType
     *
     * @param string|null $fundsTransfersType The type of fund transfer. For example, `Refund`.
     *
     * @return self
     */
    public function setFundsTransfersType($fundsTransfersType)
    {
        $this->container['fundsTransfersType'] = $fundsTransfersType;

        return $this;
    }

    /**
     * Gets transferId
     *
     * @return string|null
     */
    public function getTransferId()
    {
        return $this->container['transferId'];
    }

    /**
     * Sets transferId
     *
     * @param string|null $transferId The transfer identifier.
     *
     * @return self
     */
    public function setTransferId($transferId)
    {
        $this->container['transferId'] = $transferId;

        return $this;
    }

    /**
     * Gets disbursementId
     *
     * @return string|null
     */
    public function getDisbursementId()
    {
        return $this->container['disbursementId'];
    }

    /**
     * Sets disbursementId
     *
     * @param string|null $disbursementId The disbursement identifier.
     *
     * @return self
     */
    public function setDisbursementId($disbursementId)
    {
        $this->container['disbursementId'] = $disbursementId;

        return $this;
    }

    /**
     * Gets paymentDisbursementType
     *
     * @return string|null
     */
    public function getPaymentDisbursementType()
    {
        return $this->container['paymentDisbursementType'];
    }

    /**
     * Sets paymentDisbursementType
     *
     * @param string|null $paymentDisbursementType The type of payment for disbursement. For example, `CREDIT_CARD`.
     *
     * @return self
     */
    public function setPaymentDisbursementType($paymentDisbursementType)
    {
        $this->container['paymentDisbursementType'] = $paymentDisbursementType;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the failed `AdhocDisbursement`. For example, `HARD_DECLINED`.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transferAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getTransferAmount()
    {
        return $this->container['transferAmount'];
    }

    /**
     * Sets transferAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $transferAmount transferAmount
     *
     * @return self
     */
    public function setTransferAmount($transferAmount)
    {
        $this->container['transferAmount'] = $transferAmount;

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
     * @param mixed $value Value to be set
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


