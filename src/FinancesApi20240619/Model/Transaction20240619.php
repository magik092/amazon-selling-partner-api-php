<?php
/**
 * Transaction20240619
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Finances
 *
 * The Selling Partner API for Finances provides financial information relevant to a seller's business. You can obtain financial events for a given order or date range without having to wait until a statement period closes.
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

namespace Webcom\Amazon\Rest\FinancesApi20240619\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Transaction20240619 Class Doc Comment
 *
 * @category Class
 * @description All the information related to a transaction.
 * @package  Webcom\Amazon\Rest\FinancesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Transaction20240619 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Transaction';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'sellingPartnerMetadata' => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\SellingPartnerMetadata20240619',
        'relatedIdentifiers'     => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\RelatedIdentifier20240619[]',
        'transactionType'        => 'string',
        'transactionId'          => 'string',
        'transactionStatus'      => 'string',
        'description'            => 'string',
        'postedDate'             => '\DateTime',
        'totalAmount'            => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\Currency20240619',
        'marketplaceDetails'     => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\MarketplaceDetails20240619',
        'items'                  => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\Item20240619[]',
        'contexts'               => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\Context20240619[]',
        'breakdowns'             => '\Webcom\Amazon\Rest\FinancesApi20240619\Model\Breakdown20240619[]',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'sellingPartnerMetadata' => null,
        'relatedIdentifiers'     => null,
        'transactionType'        => null,
        'transactionId'          => null,
        'transactionStatus'      => null,
        'description'            => null,
        'postedDate'             => 'date-time',
        'totalAmount'            => null,
        'marketplaceDetails'     => null,
        'items'                  => null,
        'contexts'               => null,
        'breakdowns'             => null,
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
        'sellingPartnerMetadata' => 'sellingPartnerMetadata',
        'relatedIdentifiers'     => 'relatedIdentifiers',
        'transactionType'        => 'transactionType',
        'transactionId'          => 'transactionId',
        'transactionStatus'      => 'transactionStatus',
        'description'            => 'description',
        'postedDate'             => 'postedDate',
        'totalAmount'            => 'totalAmount',
        'marketplaceDetails'     => 'marketplaceDetails',
        'items'                  => 'items',
        'contexts'               => 'contexts',
        'breakdowns'             => 'breakdowns',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellingPartnerMetadata' => 'setSellingPartnerMetadata',
        'relatedIdentifiers'     => 'setRelatedIdentifiers',
        'transactionType'        => 'setTransactionType',
        'transactionId'          => 'setTransactionId',
        'transactionStatus'      => 'setTransactionStatus',
        'description'            => 'setDescription',
        'postedDate'             => 'setPostedDate',
        'totalAmount'            => 'setTotalAmount',
        'marketplaceDetails'     => 'setMarketplaceDetails',
        'items'                  => 'setItems',
        'contexts'               => 'setContexts',
        'breakdowns'             => 'setBreakdowns',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellingPartnerMetadata' => 'getSellingPartnerMetadata',
        'relatedIdentifiers'     => 'getRelatedIdentifiers',
        'transactionType'        => 'getTransactionType',
        'transactionId'          => 'getTransactionId',
        'transactionStatus'      => 'getTransactionStatus',
        'description'            => 'getDescription',
        'postedDate'             => 'getPostedDate',
        'totalAmount'            => 'getTotalAmount',
        'marketplaceDetails'     => 'getMarketplaceDetails',
        'items'                  => 'getItems',
        'contexts'               => 'getContexts',
        'breakdowns'             => 'getBreakdowns',
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
        $this->container['sellingPartnerMetadata'] = $data['sellingPartnerMetadata'] ?? null;
        $this->container['relatedIdentifiers'] = $data['relatedIdentifiers'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['transactionId'] = $data['transactionId'] ?? null;
        $this->container['transactionStatus'] = $data['transactionStatus'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['marketplaceDetails'] = $data['marketplaceDetails'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['contexts'] = $data['contexts'] ?? null;
        $this->container['breakdowns'] = $data['breakdowns'] ?? null;
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
     * Gets sellingPartnerMetadata
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\SellingPartnerMetadata20240619|null
     */
    public function getSellingPartnerMetadata()
    {
        return $this->container['sellingPartnerMetadata'];
    }

    /**
     * Sets sellingPartnerMetadata
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\SellingPartnerMetadata20240619|null $sellingPartnerMetadata sellingPartnerMetadata
     *
     * @return self
     */
    public function setSellingPartnerMetadata($sellingPartnerMetadata)
    {
        $this->container['sellingPartnerMetadata'] = $sellingPartnerMetadata;

        return $this;
    }

    /**
     * Gets relatedIdentifiers
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\RelatedIdentifier20240619[]|null
     */
    public function getRelatedIdentifiers()
    {
        return $this->container['relatedIdentifiers'];
    }

    /**
     * Sets relatedIdentifiers
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\RelatedIdentifier20240619[]|null $relatedIdentifiers Related business identifiers of the transaction.
     *
     * @return self
     */
    public function setRelatedIdentifiers($relatedIdentifiers)
    {
        $this->container['relatedIdentifiers'] = $relatedIdentifiers;

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
     * @param string|null $transactionType The type of transaction.  **Possible value:** `Shipment`
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string|null $transactionId The unique identifier of the transaction.
     *
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets transactionStatus
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
     * Sets transactionStatus
     *
     * @param string|null $transactionStatus The status of the transaction.   **Possible values:**  * `Deferred` * `Released`
     *
     * @return self
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->container['transactionStatus'] = $transactionStatus;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Describes the reasons for the transaction.  **Example:** 'Order Payment', 'Refund Order'
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets totalAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\Currency20240619|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\Currency20240619|null $totalAmount totalAmount
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets marketplaceDetails
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\MarketplaceDetails20240619|null
     */
    public function getMarketplaceDetails()
    {
        return $this->container['marketplaceDetails'];
    }

    /**
     * Sets marketplaceDetails
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\MarketplaceDetails20240619|null $marketplaceDetails marketplaceDetails
     *
     * @return self
     */
    public function setMarketplaceDetails($marketplaceDetails)
    {
        $this->container['marketplaceDetails'] = $marketplaceDetails;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\Item20240619[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\Item20240619[]|null $items A list of items in the transaction.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets contexts
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\Context20240619[]|null
     */
    public function getContexts()
    {
        return $this->container['contexts'];
    }

    /**
     * Sets contexts
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\Context20240619[]|null $contexts A list of additional information about the item.
     *
     * @return self
     */
    public function setContexts($contexts)
    {
        $this->container['contexts'] = $contexts;

        return $this;
    }

    /**
     * Gets breakdowns
     *
     * @return \Webcom\Amazon\Rest\FinancesApi20240619\Model\Breakdown20240619[]|null
     */
    public function getBreakdowns()
    {
        return $this->container['breakdowns'];
    }

    /**
     * Sets breakdowns
     *
     * @param \Webcom\Amazon\Rest\FinancesApi20240619\Model\Breakdown20240619[]|null $breakdowns A list of breakdowns that provide details on how the total amount is calculated for the transaction.
     *
     * @return self
     */
    public function setBreakdowns($breakdowns)
    {
        $this->container['breakdowns'] = $breakdowns;

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


