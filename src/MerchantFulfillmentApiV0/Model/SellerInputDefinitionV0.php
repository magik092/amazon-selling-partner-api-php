<?php
/**
 * SellerInputDefinitionV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * SellerInputDefinitionV0 Class Doc Comment
 *
 * @category Class
 * @description Specifies characteristics that apply to a seller input.
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerInputDefinitionV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerInputDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isRequired' => 'bool',
        'dataType' => 'string',
        'constraints' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ConstraintV0[]',
        'inputDisplayText' => 'string',
        'inputTarget' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\InputTargetTypeV0',
        'storedValue' => '\Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\AdditionalSellerInputV0',
        'restrictedSetValues' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'isRequired' => null,
        'dataType' => null,
        'constraints' => null,
        'inputDisplayText' => null,
        'inputTarget' => null,
        'storedValue' => null,
        'restrictedSetValues' => null
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
        'isRequired' => 'IsRequired',
        'dataType' => 'DataType',
        'constraints' => 'Constraints',
        'inputDisplayText' => 'InputDisplayText',
        'inputTarget' => 'InputTarget',
        'storedValue' => 'StoredValue',
        'restrictedSetValues' => 'RestrictedSetValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isRequired' => 'setIsRequired',
        'dataType' => 'setDataType',
        'constraints' => 'setConstraints',
        'inputDisplayText' => 'setInputDisplayText',
        'inputTarget' => 'setInputTarget',
        'storedValue' => 'setStoredValue',
        'restrictedSetValues' => 'setRestrictedSetValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isRequired' => 'getIsRequired',
        'dataType' => 'getDataType',
        'constraints' => 'getConstraints',
        'inputDisplayText' => 'getInputDisplayText',
        'inputTarget' => 'getInputTarget',
        'storedValue' => 'getStoredValue',
        'restrictedSetValues' => 'getRestrictedSetValues'
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
        $this->container['isRequired'] = $data['isRequired'] ?? null;
        $this->container['dataType'] = $data['dataType'] ?? null;
        $this->container['constraints'] = $data['constraints'] ?? null;
        $this->container['inputDisplayText'] = $data['inputDisplayText'] ?? null;
        $this->container['inputTarget'] = $data['inputTarget'] ?? null;
        $this->container['storedValue'] = $data['storedValue'] ?? null;
        $this->container['restrictedSetValues'] = $data['restrictedSetValues'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isRequired'] === null) {
            $invalidProperties[] = "'isRequired' can't be null";
        }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
        }
        if ($this->container['inputDisplayText'] === null) {
            $invalidProperties[] = "'inputDisplayText' can't be null";
        }
        if ($this->container['storedValue'] === null) {
            $invalidProperties[] = "'storedValue' can't be null";
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
     * Gets isRequired
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     *
     * @param bool $isRequired When true, the additional input field is required.
     *
     * @return self
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string $dataType The data type of the additional input field.
     *
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ConstraintV0[]
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\ConstraintV0[] $constraints List of constraints.
     *
     * @return self
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets inputDisplayText
     *
     * @return string
     */
    public function getInputDisplayText()
    {
        return $this->container['inputDisplayText'];
    }

    /**
     * Sets inputDisplayText
     *
     * @param string $inputDisplayText The display text for the additional input field.
     *
     * @return self
     */
    public function setInputDisplayText($inputDisplayText)
    {
        $this->container['inputDisplayText'] = $inputDisplayText;

        return $this;
    }

    /**
     * Gets inputTarget
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\InputTargetTypeV0|null
     */
    public function getInputTarget()
    {
        return $this->container['inputTarget'];
    }

    /**
     * Sets inputTarget
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\InputTargetTypeV0|null $inputTarget inputTarget
     *
     * @return self
     */
    public function setInputTarget($inputTarget)
    {
        $this->container['inputTarget'] = $inputTarget;

        return $this;
    }

    /**
     * Gets storedValue
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\AdditionalSellerInputV0
     */
    public function getStoredValue()
    {
        return $this->container['storedValue'];
    }

    /**
     * Sets storedValue
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model\AdditionalSellerInputV0 $storedValue storedValue
     *
     * @return self
     */
    public function setStoredValue($storedValue)
    {
        $this->container['storedValue'] = $storedValue;

        return $this;
    }

    /**
     * Gets restrictedSetValues
     *
     * @return string[]|null
     */
    public function getRestrictedSetValues()
    {
        return $this->container['restrictedSetValues'];
    }

    /**
     * Sets restrictedSetValues
     *
     * @param string[]|null $restrictedSetValues The set of fixed values in an additional seller input.
     *
     * @return self
     */
    public function setRestrictedSetValues($restrictedSetValues)
    {
        $this->container['restrictedSetValues'] = $restrictedSetValues;

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

