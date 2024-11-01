<?php
/**
 * TaxRegistrationDetailV1
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
 * TaxRegistrationDetailV1 Class Doc Comment
 *
 * @category Class
 * @description Tax registration details of the entity.
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxRegistrationDetailV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxRegistrationDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'taxRegistrationType' => 'string',
        'taxRegistrationNumber' => 'string',
        'taxRegistrationAddress' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\AddressV1',
        'taxRegistrationMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'taxRegistrationType' => null,
        'taxRegistrationNumber' => null,
        'taxRegistrationAddress' => null,
        'taxRegistrationMessage' => null
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
        'taxRegistrationType' => 'taxRegistrationType',
        'taxRegistrationNumber' => 'taxRegistrationNumber',
        'taxRegistrationAddress' => 'taxRegistrationAddress',
        'taxRegistrationMessage' => 'taxRegistrationMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taxRegistrationType' => 'setTaxRegistrationType',
        'taxRegistrationNumber' => 'setTaxRegistrationNumber',
        'taxRegistrationAddress' => 'setTaxRegistrationAddress',
        'taxRegistrationMessage' => 'setTaxRegistrationMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taxRegistrationType' => 'getTaxRegistrationType',
        'taxRegistrationNumber' => 'getTaxRegistrationNumber',
        'taxRegistrationAddress' => 'getTaxRegistrationAddress',
        'taxRegistrationMessage' => 'getTaxRegistrationMessage'
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

    const TAX_REGISTRATION_TYPE_VAT = 'VAT';
    const TAX_REGISTRATION_TYPE_GST = 'GST';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxRegistrationTypeAllowableValues()
    {
        return [
            self::TAX_REGISTRATION_TYPE_VAT,
            self::TAX_REGISTRATION_TYPE_GST,
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
        $this->container['taxRegistrationType'] = $data['taxRegistrationType'] ?? null;
        $this->container['taxRegistrationNumber'] = $data['taxRegistrationNumber'] ?? null;
        $this->container['taxRegistrationAddress'] = $data['taxRegistrationAddress'] ?? null;
        $this->container['taxRegistrationMessage'] = $data['taxRegistrationMessage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (!is_null($this->container['taxRegistrationType']) && !in_array($this->container['taxRegistrationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'taxRegistrationType', must be one of '%s'",
                $this->container['taxRegistrationType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['taxRegistrationNumber'] === null) {
            $invalidProperties[] = "'taxRegistrationNumber' can't be null";
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
     * Gets taxRegistrationType
     *
     * @return string|null
     */
    public function getTaxRegistrationType()
    {
        return $this->container['taxRegistrationType'];
    }

    /**
     * Sets taxRegistrationType
     *
     * @param string|null $taxRegistrationType Tax registration type for the entity.
     *
     * @return self
     */
    public function setTaxRegistrationType($taxRegistrationType)
    {
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (!is_null($taxRegistrationType) && !in_array($taxRegistrationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'taxRegistrationType', must be one of '%s'",
                    $taxRegistrationType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['taxRegistrationType'] = $taxRegistrationType;

        return $this;
    }

    /**
     * Gets taxRegistrationNumber
     *
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
        return $this->container['taxRegistrationNumber'];
    }

    /**
     * Sets taxRegistrationNumber
     *
     * @param string $taxRegistrationNumber Tax registration number for the entity. For example, VAT ID or Consumption Tax ID.
     *
     * @return self
     */
    public function setTaxRegistrationNumber($taxRegistrationNumber)
    {
        $this->container['taxRegistrationNumber'] = $taxRegistrationNumber;

        return $this;
    }

    /**
     * Gets taxRegistrationAddress
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\AddressV1|null
     */
    public function getTaxRegistrationAddress()
    {
        return $this->container['taxRegistrationAddress'];
    }

    /**
     * Sets taxRegistrationAddress
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentPaymentsApiV1\Model\AddressV1|null $taxRegistrationAddress taxRegistrationAddress
     *
     * @return self
     */
    public function setTaxRegistrationAddress($taxRegistrationAddress)
    {
        $this->container['taxRegistrationAddress'] = $taxRegistrationAddress;

        return $this;
    }

    /**
     * Gets taxRegistrationMessage
     *
     * @return string|null
     */
    public function getTaxRegistrationMessage()
    {
        return $this->container['taxRegistrationMessage'];
    }

    /**
     * Sets taxRegistrationMessage
     *
     * @param string|null $taxRegistrationMessage Tax registration message that can be used for additional tax related details.
     *
     * @return self
     */
    public function setTaxRegistrationMessage($taxRegistrationMessage)
    {
        $this->container['taxRegistrationMessage'] = $taxRegistrationMessage;

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


