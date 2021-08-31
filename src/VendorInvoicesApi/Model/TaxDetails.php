<?php
/**
 * TaxDetails
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

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * TaxDetails Class Doc Comment
 *
 * @category Class
 * @description Details of tax amount applied.
 * @package  Webcom\Amazon\Rest\VendorInvoicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'taxType' => 'string',
        'taxRate' => 'string',
        'taxAmount' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money',
        'taxableAmount' => '\Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'taxType' => null,
        'taxRate' => null,
        'taxAmount' => null,
        'taxableAmount' => null
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
        'taxType' => 'taxType',
        'taxRate' => 'taxRate',
        'taxAmount' => 'taxAmount',
        'taxableAmount' => 'taxableAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taxType' => 'setTaxType',
        'taxRate' => 'setTaxRate',
        'taxAmount' => 'setTaxAmount',
        'taxableAmount' => 'setTaxableAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taxType' => 'getTaxType',
        'taxRate' => 'getTaxRate',
        'taxAmount' => 'getTaxAmount',
        'taxableAmount' => 'getTaxableAmount'
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

    const TAX_TYPE_CGST = 'CGST';
    const TAX_TYPE_SGST = 'SGST';
    const TAX_TYPE_CESS = 'CESS';
    const TAX_TYPE_UTGST = 'UTGST';
    const TAX_TYPE_IGST = 'IGST';
    const TAX_TYPE_MW_ST = 'MwSt.';
    const TAX_TYPE_PST = 'PST';
    const TAX_TYPE_TVA = 'TVA';
    const TAX_TYPE_VAT = 'VAT';
    const TAX_TYPE_GST = 'GST';
    const TAX_TYPE_ST = 'ST';
    const TAX_TYPE_CONSUMPTION = 'Consumption';
    const TAX_TYPE_MUTUALLY_DEFINED = 'MutuallyDefined';
    const TAX_TYPE_DOMESTIC_VAT = 'DomesticVAT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxTypeAllowableValues()
    {
        return [
            self::TAX_TYPE_CGST,
            self::TAX_TYPE_SGST,
            self::TAX_TYPE_CESS,
            self::TAX_TYPE_UTGST,
            self::TAX_TYPE_IGST,
            self::TAX_TYPE_MW_ST,
            self::TAX_TYPE_PST,
            self::TAX_TYPE_TVA,
            self::TAX_TYPE_VAT,
            self::TAX_TYPE_GST,
            self::TAX_TYPE_ST,
            self::TAX_TYPE_CONSUMPTION,
            self::TAX_TYPE_MUTUALLY_DEFINED,
            self::TAX_TYPE_DOMESTIC_VAT,
        ];
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
        $this->container['taxType'] = $data['taxType'] ?? null;
        $this->container['taxRate'] = $data['taxRate'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['taxableAmount'] = $data['taxableAmount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['taxType'] === null) {
            $invalidProperties[] = "'taxType' can't be null";
        }
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!is_null($this->container['taxType']) && !in_array($this->container['taxType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'taxType', must be one of '%s'",
                $this->container['taxType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['taxAmount'] === null) {
            $invalidProperties[] = "'taxAmount' can't be null";
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
     * Gets taxType
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['taxType'];
    }

    /**
     * Sets taxType
     *
     * @param string $taxType Type of the tax applied.
     *
     * @return self
     */
    public function setTaxType($taxType)
    {
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!in_array($taxType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'taxType', must be one of '%s'",
                    $taxType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['taxType'] = $taxType;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param string|null $taxRate A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     *
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money $taxAmount taxAmount
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxableAmount
     *
     * @return \Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money|null
     */
    public function getTaxableAmount()
    {
        return $this->container['taxableAmount'];
    }

    /**
     * Sets taxableAmount
     *
     * @param \Webcom\Amazon\Rest\VendorInvoicesApi\Model\Money|null $taxableAmount taxableAmount
     *
     * @return self
     */
    public function setTaxableAmount($taxableAmount)
    {
        $this->container['taxableAmount'] = $taxableAmount;

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


