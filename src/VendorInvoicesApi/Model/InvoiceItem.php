<?php
/**
 * InvoiceItem
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorInvoicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\VendorInvoicesApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @description Details of the item being invoiced.
 * @package  Webcom\Amazon\Rest\VendorInvoicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InvoiceItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemSequenceNumber' => 'int',
        'amazonProductIdentifier' => 'string',
        'vendorProductIdentifier' => 'string',
        'invoicedQuantity' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\ItemQuantity',
        'netCost' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money',
        'purchaseOrderNumber' => 'string',
        'hsnCode' => 'string',
        'creditNoteDetails' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\CreditNoteDetails',
        'taxDetails' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\TaxDetails[]',
        'chargeDetails' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\ChargeDetails[]',
        'allowanceDetails' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\AllowanceDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'itemSequenceNumber' => null,
        'amazonProductIdentifier' => null,
        'vendorProductIdentifier' => null,
        'invoicedQuantity' => null,
        'netCost' => null,
        'purchaseOrderNumber' => null,
        'hsnCode' => null,
        'creditNoteDetails' => null,
        'taxDetails' => null,
        'chargeDetails' => null,
        'allowanceDetails' => null
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
        'itemSequenceNumber' => 'itemSequenceNumber',
        'amazonProductIdentifier' => 'amazonProductIdentifier',
        'vendorProductIdentifier' => 'vendorProductIdentifier',
        'invoicedQuantity' => 'invoicedQuantity',
        'netCost' => 'netCost',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'hsnCode' => 'hsnCode',
        'creditNoteDetails' => 'creditNoteDetails',
        'taxDetails' => 'taxDetails',
        'chargeDetails' => 'chargeDetails',
        'allowanceDetails' => 'allowanceDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
        'amazonProductIdentifier' => 'setAmazonProductIdentifier',
        'vendorProductIdentifier' => 'setVendorProductIdentifier',
        'invoicedQuantity' => 'setInvoicedQuantity',
        'netCost' => 'setNetCost',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'hsnCode' => 'setHsnCode',
        'creditNoteDetails' => 'setCreditNoteDetails',
        'taxDetails' => 'setTaxDetails',
        'chargeDetails' => 'setChargeDetails',
        'allowanceDetails' => 'setAllowanceDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
        'amazonProductIdentifier' => 'getAmazonProductIdentifier',
        'vendorProductIdentifier' => 'getVendorProductIdentifier',
        'invoicedQuantity' => 'getInvoicedQuantity',
        'netCost' => 'getNetCost',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'hsnCode' => 'getHsnCode',
        'creditNoteDetails' => 'getCreditNoteDetails',
        'taxDetails' => 'getTaxDetails',
        'chargeDetails' => 'getChargeDetails',
        'allowanceDetails' => 'getAllowanceDetails'
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
        $this->container['itemSequenceNumber'] = $data['itemSequenceNumber'] ?? null;
        $this->container['amazonProductIdentifier'] = $data['amazonProductIdentifier'] ?? null;
        $this->container['vendorProductIdentifier'] = $data['vendorProductIdentifier'] ?? null;
        $this->container['invoicedQuantity'] = $data['invoicedQuantity'] ?? null;
        $this->container['netCost'] = $data['netCost'] ?? null;
        $this->container['purchaseOrderNumber'] = $data['purchaseOrderNumber'] ?? null;
        $this->container['hsnCode'] = $data['hsnCode'] ?? null;
        $this->container['creditNoteDetails'] = $data['creditNoteDetails'] ?? null;
        $this->container['taxDetails'] = $data['taxDetails'] ?? null;
        $this->container['chargeDetails'] = $data['chargeDetails'] ?? null;
        $this->container['allowanceDetails'] = $data['allowanceDetails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemSequenceNumber'] === null) {
            $invalidProperties[] = "'itemSequenceNumber' can't be null";
        }
        if ($this->container['invoicedQuantity'] === null) {
            $invalidProperties[] = "'invoicedQuantity' can't be null";
        }
        if ($this->container['netCost'] === null) {
            $invalidProperties[] = "'netCost' can't be null";
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
     * Gets itemSequenceNumber
     *
     * @return int
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param int $itemSequenceNumber Unique number related to this line item.
     *
     * @return self
     */
    public function setItemSequenceNumber($itemSequenceNumber)
    {
        $this->container['itemSequenceNumber'] = $itemSequenceNumber;

        return $this;
    }

    /**
     * Gets amazonProductIdentifier
     *
     * @return string|null
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazonProductIdentifier'];
    }

    /**
     * Sets amazonProductIdentifier
     *
     * @param string|null $amazonProductIdentifier Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setAmazonProductIdentifier($amazonProductIdentifier)
    {
        $this->container['amazonProductIdentifier'] = $amazonProductIdentifier;

        return $this;
    }

    /**
     * Gets vendorProductIdentifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendorProductIdentifier'];
    }

    /**
     * Sets vendorProductIdentifier
     *
     * @param string|null $vendorProductIdentifier The vendor selected product identifier of the item. Should be the same as was provided in the purchase order.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets invoicedQuantity
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\ItemQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->container['invoicedQuantity'];
    }

    /**
     * Sets invoicedQuantity
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\ItemQuantity $invoicedQuantity invoicedQuantity
     *
     * @return self
     */
    public function setInvoicedQuantity($invoicedQuantity)
    {
        $this->container['invoicedQuantity'] = $invoicedQuantity;

        return $this;
    }

    /**
     * Gets netCost
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money
     */
    public function getNetCost()
    {
        return $this->container['netCost'];
    }

    /**
     * Sets netCost
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money $netCost netCost
     *
     * @return self
     */
    public function setNetCost($netCost)
    {
        $this->container['netCost'] = $netCost;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber The Amazon purchase order number for this invoiced line item. Formatting Notes: 8-character alpha-numeric code. This value is mandatory only when `invoiceType` is `Invoice`, and is not required when `invoiceType` is `CreditNote`.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets hsnCode
     *
     * @return string|null
     */
    public function getHsnCode()
    {
        return $this->container['hsnCode'];
    }

    /**
     * Sets hsnCode
     *
     * @param string|null $hsnCode The HSN Tax code. The HSN number cannot contain alphabets.
     *
     * @return self
     */
    public function setHsnCode($hsnCode)
    {
        $this->container['hsnCode'] = $hsnCode;

        return $this;
    }

    /**
     * Gets creditNoteDetails
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\CreditNoteDetails|null
     */
    public function getCreditNoteDetails()
    {
        return $this->container['creditNoteDetails'];
    }

    /**
     * Sets creditNoteDetails
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\CreditNoteDetails|null $creditNoteDetails creditNoteDetails
     *
     * @return self
     */
    public function setCreditNoteDetails($creditNoteDetails)
    {
        $this->container['creditNoteDetails'] = $creditNoteDetails;

        return $this;
    }

    /**
     * Gets taxDetails
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\TaxDetails[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\TaxDetails[]|null $taxDetails Individual tax details per line item.
     *
     * @return self
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets chargeDetails
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['chargeDetails'];
    }

    /**
     * Sets chargeDetails
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\ChargeDetails[]|null $chargeDetails Individual charge details per line item.
     *
     * @return self
     */
    public function setChargeDetails($chargeDetails)
    {
        $this->container['chargeDetails'] = $chargeDetails;

        return $this;
    }

    /**
     * Gets allowanceDetails
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\AllowanceDetails[]|null
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowanceDetails'];
    }

    /**
     * Sets allowanceDetails
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\AllowanceDetails[]|null $allowanceDetails Individual allowance details per line item.
     *
     * @return self
     */
    public function setAllowanceDetails($allowanceDetails)
    {
        $this->container['allowanceDetails'] = $allowanceDetails;

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


