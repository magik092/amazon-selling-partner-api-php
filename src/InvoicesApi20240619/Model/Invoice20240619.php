<?php
/**
 * Invoice20240619
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\InvoicesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Invoices.
 *
 * Use the Selling Partner API for Invoices to retrieve and manage invoice-related operations, which can help selling partners manage their bookkeeping processes.
 *
 * The version of the OpenAPI document: 2024-06-19
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\InvoicesApi20240619\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Invoice20240619 Class Doc Comment
 *
 * @category Class
 * @description Provides detailed information about an invoice.
 * @package  Webcom\Amazon\Rest\InvoicesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Invoice20240619 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => '\DateTime',
        'errorCode' => 'string',
        'externalInvoiceId' => 'string',
        'govResponse' => 'string',
        'id' => 'string',
        'invoiceType' => 'string',
        'series' => 'string',
        'status' => 'string',
        'transactionIds' => '\Webcom\Amazon\Rest\InvoicesApi20240619\Model\TransactionIdentifier20240619[]',
        'transactionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => 'date-time',
        'errorCode' => null,
        'externalInvoiceId' => null,
        'govResponse' => null,
        'id' => null,
        'invoiceType' => null,
        'series' => null,
        'status' => null,
        'transactionIds' => null,
        'transactionType' => null
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
        'date' => 'date',
        'errorCode' => 'errorCode',
        'externalInvoiceId' => 'externalInvoiceId',
        'govResponse' => 'govResponse',
        'id' => 'id',
        'invoiceType' => 'invoiceType',
        'series' => 'series',
        'status' => 'status',
        'transactionIds' => 'transactionIds',
        'transactionType' => 'transactionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'errorCode' => 'setErrorCode',
        'externalInvoiceId' => 'setExternalInvoiceId',
        'govResponse' => 'setGovResponse',
        'id' => 'setId',
        'invoiceType' => 'setInvoiceType',
        'series' => 'setSeries',
        'status' => 'setStatus',
        'transactionIds' => 'setTransactionIds',
        'transactionType' => 'setTransactionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'errorCode' => 'getErrorCode',
        'externalInvoiceId' => 'getExternalInvoiceId',
        'govResponse' => 'getGovResponse',
        'id' => 'getId',
        'invoiceType' => 'getInvoiceType',
        'series' => 'getSeries',
        'status' => 'getStatus',
        'transactionIds' => 'getTransactionIds',
        'transactionType' => 'getTransactionType'
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['errorCode'] = $data['errorCode'] ?? null;
        $this->container['externalInvoiceId'] = $data['externalInvoiceId'] ?? null;
        $this->container['govResponse'] = $data['govResponse'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['series'] = $data['series'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['transactionIds'] = $data['transactionIds'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
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
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The date and time the invoice is issued. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode If the invoice is in an error state, this attribute displays the error code.
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets externalInvoiceId
     *
     * @return string|null
     */
    public function getExternalInvoiceId()
    {
        return $this->container['externalInvoiceId'];
    }

    /**
     * Sets externalInvoiceId
     *
     * @param string|null $externalInvoiceId The invoice identifier that is used by an external party. This is typically the government agency that authorized the invoice.
     *
     * @return self
     */
    public function setExternalInvoiceId($externalInvoiceId)
    {
        $this->container['externalInvoiceId'] = $externalInvoiceId;

        return $this;
    }

    /**
     * Gets govResponse
     *
     * @return string|null
     */
    public function getGovResponse()
    {
        return $this->container['govResponse'];
    }

    /**
     * Sets govResponse
     *
     * @param string|null $govResponse The response message from the government authority when there is an error during invoice issuance.
     *
     * @return self
     */
    public function setGovResponse($govResponse)
    {
        $this->container['govResponse'] = $govResponse;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The invoice identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType The classification of the invoice type. This varies across marketplaces. Use the `getInvoicesAttributes` operation to check `invoiceType` options.
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets series
     *
     * @return string|null
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param string|null $series Use this identifier in conjunction with `externalInvoiceId` to identify invoices from the same seller.
     *
     * @return self
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

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
     * @param string|null $status The invoice status classification. Use the `getInvoicesAttributes` operation to check invoice status options.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transactionIds
     *
     * @return \Webcom\Amazon\Rest\InvoicesApi20240619\Model\TransactionIdentifier20240619[]|null
     */
    public function getTransactionIds()
    {
        return $this->container['transactionIds'];
    }

    /**
     * Sets transactionIds
     *
     * @param \Webcom\Amazon\Rest\InvoicesApi20240619\Model\TransactionIdentifier20240619[]|null $transactionIds List with identifiers for the transactions associated to the invoice.
     *
     * @return self
     */
    public function setTransactionIds($transactionIds)
    {
        $this->container['transactionIds'] = $transactionIds;

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
     * @param string|null $transactionType Classification of the transaction that originated this invoice. Use the `getInvoicesAttributes` operation to check `transactionType` options.
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

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


