<?php
/**
 * ExportInvoicesRequest20240619
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
 * ExportInvoicesRequest20240619 Class Doc Comment
 *
 * @category Class
 * @description The information required to create the export request.
 * @package  Webcom\Amazon\Rest\InvoicesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ExportInvoicesRequest20240619 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportInvoicesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dateEnd' => '\DateTime',
        'dateStart' => '\DateTime',
        'externalInvoiceId' => 'string',
        'fileFormat' => '\Webcom\Amazon\Rest\InvoicesApi20240619\Model\FileFormat20240619',
        'invoiceType' => 'string',
        'marketplaceId' => 'string',
        'series' => 'string',
        'statuses' => 'string[]',
        'transactionIdentifier' => '\Webcom\Amazon\Rest\InvoicesApi20240619\Model\TransactionIdentifier20240619',
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
        'dateEnd' => 'date',
        'dateStart' => 'date',
        'externalInvoiceId' => null,
        'fileFormat' => null,
        'invoiceType' => null,
        'marketplaceId' => null,
        'series' => null,
        'statuses' => null,
        'transactionIdentifier' => null,
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
        'dateEnd' => 'dateEnd',
        'dateStart' => 'dateStart',
        'externalInvoiceId' => 'externalInvoiceId',
        'fileFormat' => 'fileFormat',
        'invoiceType' => 'invoiceType',
        'marketplaceId' => 'marketplaceId',
        'series' => 'series',
        'statuses' => 'statuses',
        'transactionIdentifier' => 'transactionIdentifier',
        'transactionType' => 'transactionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dateEnd' => 'setDateEnd',
        'dateStart' => 'setDateStart',
        'externalInvoiceId' => 'setExternalInvoiceId',
        'fileFormat' => 'setFileFormat',
        'invoiceType' => 'setInvoiceType',
        'marketplaceId' => 'setMarketplaceId',
        'series' => 'setSeries',
        'statuses' => 'setStatuses',
        'transactionIdentifier' => 'setTransactionIdentifier',
        'transactionType' => 'setTransactionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dateEnd' => 'getDateEnd',
        'dateStart' => 'getDateStart',
        'externalInvoiceId' => 'getExternalInvoiceId',
        'fileFormat' => 'getFileFormat',
        'invoiceType' => 'getInvoiceType',
        'marketplaceId' => 'getMarketplaceId',
        'series' => 'getSeries',
        'statuses' => 'getStatuses',
        'transactionIdentifier' => 'getTransactionIdentifier',
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
        $this->container['dateEnd'] = $data['dateEnd'] ?? null;
        $this->container['dateStart'] = $data['dateStart'] ?? null;
        $this->container['externalInvoiceId'] = $data['externalInvoiceId'] ?? null;
        $this->container['fileFormat'] = $data['fileFormat'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['series'] = $data['series'] ?? null;
        $this->container['statuses'] = $data['statuses'] ?? null;
        $this->container['transactionIdentifier'] = $data['transactionIdentifier'] ?? null;
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

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
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
     * Gets dateEnd
     *
     * @return \DateTime|null
     */
    public function getDateEnd()
    {
        return $this->container['dateEnd'];
    }

    /**
     * Sets dateEnd
     *
     * @param \DateTime|null $dateEnd The latest invoice creation date for invoices that you want to include in the response. Dates are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The default is the time of the request.
     *
     * @return self
     */
    public function setDateEnd($dateEnd)
    {
        $this->container['dateEnd'] = $dateEnd;

        return $this;
    }

    /**
     * Gets dateStart
     *
     * @return \DateTime|null
     */
    public function getDateStart()
    {
        return $this->container['dateStart'];
    }

    /**
     * Sets dateStart
     *
     * @param \DateTime|null $dateStart The earliest invoice creation date for invoices that you want to include in the response. Dates are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. The default is 24 hours prior to the time of the request.
     *
     * @return self
     */
    public function setDateStart($dateStart)
    {
        $this->container['dateStart'] = $dateStart;

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
     * @param string|null $externalInvoiceId The external ID of the invoices you want included in the response.
     *
     * @return self
     */
    public function setExternalInvoiceId($externalInvoiceId)
    {
        $this->container['externalInvoiceId'] = $externalInvoiceId;

        return $this;
    }

    /**
     * Gets fileFormat
     *
     * @return \Webcom\Amazon\Rest\InvoicesApi20240619\Model\FileFormat20240619|null
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /**
     * Sets fileFormat
     *
     * @param \Webcom\Amazon\Rest\InvoicesApi20240619\Model\FileFormat20240619|null $fileFormat fileFormat
     *
     * @return self
     */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;

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
     * @param string|null $invoiceType The marketplace-specific classification of the invoice type. Use the `getInvoicesAttributes` operation to check `invoiceType` options.
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId The ID of the marketplace from which you want the invoices.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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
     * @param string|null $series The series number of the invoices you want included in the response.
     *
     * @return self
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return string[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param string[]|null $statuses A list of statuses that you can use to filter invoices. Use the `getInvoicesAttributes` operation to check invoice status options.  Min count: 1
     *
     * @return self
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets transactionIdentifier
     *
     * @return \Webcom\Amazon\Rest\InvoicesApi20240619\Model\TransactionIdentifier20240619|null
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transactionIdentifier'];
    }

    /**
     * Sets transactionIdentifier
     *
     * @param \Webcom\Amazon\Rest\InvoicesApi20240619\Model\TransactionIdentifier20240619|null $transactionIdentifier transactionIdentifier
     *
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->container['transactionIdentifier'] = $transactionIdentifier;

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
     * @param string|null $transactionType The marketplace-specific classification of the transaction type for which the invoice was created. Use the `getInvoicesAttributes` operation to check `transactionType` options
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

