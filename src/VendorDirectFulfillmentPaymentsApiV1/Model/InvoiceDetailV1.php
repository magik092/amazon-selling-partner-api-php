<?php
/**
 * InvoiceDetailV1
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
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

namespace Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * InvoiceDetailV1 Class Doc Comment
 *
 * @category Class
 * @description Represents the invoice details, including the invoice number, date, parties involved, payment terms, totals, taxes, charges, and line items.
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InvoiceDetailV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoiceNumber' => 'string',
        'invoiceDate' => '\DateTime',
        'referenceNumber' => 'string',
        'remitToParty' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1',
        'shipFromParty' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1',
        'billToParty' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1',
        'shipToCountryCode' => 'string',
        'paymentTermsCode' => 'string',
        'invoiceTotal' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\MoneyV1',
        'taxTotals' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\TaxDetailV1[]',
        'additionalDetails' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\AdditionalDetailsV1[]',
        'chargeDetails' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\ChargeDetailsV1[]',
        'items' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\InvoiceItemV1[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoiceNumber' => null,
        'invoiceDate' => 'date-time',
        'referenceNumber' => null,
        'remitToParty' => null,
        'shipFromParty' => null,
        'billToParty' => null,
        'shipToCountryCode' => null,
        'paymentTermsCode' => null,
        'invoiceTotal' => null,
        'taxTotals' => null,
        'additionalDetails' => null,
        'chargeDetails' => null,
        'items' => null
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
        'invoiceNumber' => 'invoiceNumber',
        'invoiceDate' => 'invoiceDate',
        'referenceNumber' => 'referenceNumber',
        'remitToParty' => 'remitToParty',
        'shipFromParty' => 'shipFromParty',
        'billToParty' => 'billToParty',
        'shipToCountryCode' => 'shipToCountryCode',
        'paymentTermsCode' => 'paymentTermsCode',
        'invoiceTotal' => 'invoiceTotal',
        'taxTotals' => 'taxTotals',
        'additionalDetails' => 'additionalDetails',
        'chargeDetails' => 'chargeDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoiceNumber' => 'setInvoiceNumber',
        'invoiceDate' => 'setInvoiceDate',
        'referenceNumber' => 'setReferenceNumber',
        'remitToParty' => 'setRemitToParty',
        'shipFromParty' => 'setShipFromParty',
        'billToParty' => 'setBillToParty',
        'shipToCountryCode' => 'setShipToCountryCode',
        'paymentTermsCode' => 'setPaymentTermsCode',
        'invoiceTotal' => 'setInvoiceTotal',
        'taxTotals' => 'setTaxTotals',
        'additionalDetails' => 'setAdditionalDetails',
        'chargeDetails' => 'setChargeDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoiceNumber' => 'getInvoiceNumber',
        'invoiceDate' => 'getInvoiceDate',
        'referenceNumber' => 'getReferenceNumber',
        'remitToParty' => 'getRemitToParty',
        'shipFromParty' => 'getShipFromParty',
        'billToParty' => 'getBillToParty',
        'shipToCountryCode' => 'getShipToCountryCode',
        'paymentTermsCode' => 'getPaymentTermsCode',
        'invoiceTotal' => 'getInvoiceTotal',
        'taxTotals' => 'getTaxTotals',
        'additionalDetails' => 'getAdditionalDetails',
        'chargeDetails' => 'getChargeDetails',
        'items' => 'getItems'
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
        $this->container['invoiceNumber'] = $data['invoiceNumber'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['referenceNumber'] = $data['referenceNumber'] ?? null;
        $this->container['remitToParty'] = $data['remitToParty'] ?? null;
        $this->container['shipFromParty'] = $data['shipFromParty'] ?? null;
        $this->container['billToParty'] = $data['billToParty'] ?? null;
        $this->container['shipToCountryCode'] = $data['shipToCountryCode'] ?? null;
        $this->container['paymentTermsCode'] = $data['paymentTermsCode'] ?? null;
        $this->container['invoiceTotal'] = $data['invoiceTotal'] ?? null;
        $this->container['taxTotals'] = $data['taxTotals'] ?? null;
        $this->container['additionalDetails'] = $data['additionalDetails'] ?? null;
        $this->container['chargeDetails'] = $data['chargeDetails'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoiceNumber'] === null) {
            $invalidProperties[] = "'invoiceNumber' can't be null";
        }
        if ($this->container['invoiceDate'] === null) {
            $invalidProperties[] = "'invoiceDate' can't be null";
        }
        if ($this->container['remitToParty'] === null) {
            $invalidProperties[] = "'remitToParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
        }
        if ($this->container['invoiceTotal'] === null) {
            $invalidProperties[] = "'invoiceTotal' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string $invoiceNumber The unique invoice number.
     *
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param \DateTime $invoiceDate Invoice date.
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets referenceNumber
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string|null $referenceNumber An additional unique reference number used for regulatory or other purposes.
     *
     * @return self
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets remitToParty
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1
     */
    public function getRemitToParty()
    {
        return $this->container['remitToParty'];
    }

    /**
     * Sets remitToParty
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1 $remitToParty remitToParty
     *
     * @return self
     */
    public function setRemitToParty($remitToParty)
    {
        $this->container['remitToParty'] = $remitToParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1 $shipFromParty shipFromParty
     *
     * @return self
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets billToParty
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1|null
     */
    public function getBillToParty()
    {
        return $this->container['billToParty'];
    }

    /**
     * Sets billToParty
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\PartyIdentificationV1|null $billToParty billToParty
     *
     * @return self
     */
    public function setBillToParty($billToParty)
    {
        $this->container['billToParty'] = $billToParty;

        return $this;
    }

    /**
     * Gets shipToCountryCode
     *
     * @return string|null
     */
    public function getShipToCountryCode()
    {
        return $this->container['shipToCountryCode'];
    }

    /**
     * Sets shipToCountryCode
     *
     * @param string|null $shipToCountryCode Ship-to country code.
     *
     * @return self
     */
    public function setShipToCountryCode($shipToCountryCode)
    {
        $this->container['shipToCountryCode'] = $shipToCountryCode;

        return $this;
    }

    /**
     * Gets paymentTermsCode
     *
     * @return string|null
     */
    public function getPaymentTermsCode()
    {
        return $this->container['paymentTermsCode'];
    }

    /**
     * Sets paymentTermsCode
     *
     * @param string|null $paymentTermsCode The payment terms for the invoice.
     *
     * @return self
     */
    public function setPaymentTermsCode($paymentTermsCode)
    {
        $this->container['paymentTermsCode'] = $paymentTermsCode;

        return $this;
    }

    /**
     * Gets invoiceTotal
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\MoneyV1
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoiceTotal'];
    }

    /**
     * Sets invoiceTotal
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\MoneyV1 $invoiceTotal invoiceTotal
     *
     * @return self
     */
    public function setInvoiceTotal($invoiceTotal)
    {
        $this->container['invoiceTotal'] = $invoiceTotal;

        return $this;
    }

    /**
     * Gets taxTotals
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\TaxDetailV1[]|null
     */
    public function getTaxTotals()
    {
        return $this->container['taxTotals'];
    }

    /**
     * Sets taxTotals
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\TaxDetailV1[]|null $taxTotals Individual tax details per line item.
     *
     * @return self
     */
    public function setTaxTotals($taxTotals)
    {
        $this->container['taxTotals'] = $taxTotals;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\AdditionalDetailsV1[]|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\AdditionalDetailsV1[]|null $additionalDetails Additional details provided by the selling party, for tax-related or other purposes.
     *
     * @return self
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

        return $this;
    }

    /**
     * Gets chargeDetails
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\ChargeDetailsV1[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['chargeDetails'];
    }

    /**
     * Sets chargeDetails
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\ChargeDetailsV1[]|null $chargeDetails Total charge amount details for all line items.
     *
     * @return self
     */
    public function setChargeDetails($chargeDetails)
    {
        $this->container['chargeDetails'] = $chargeDetails;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\InvoiceItemV1[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\InvoiceItemV1[] $items Provides the details of the items in this invoice.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


