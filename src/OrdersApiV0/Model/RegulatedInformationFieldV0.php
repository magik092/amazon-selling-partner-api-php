<?php
/**
 * RegulatedInformationFieldV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace Webcom\Amazon\Rest\OrdersApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * RegulatedInformationFieldV0 Class Doc Comment
 *
 * @category Class
 * @description A field collected from the regulatory form.
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RegulatedInformationFieldV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegulatedInformationField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fieldId' => 'string',
        'fieldLabel' => 'string',
        'fieldType' => 'string',
        'fieldValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fieldId' => null,
        'fieldLabel' => null,
        'fieldType' => null,
        'fieldValue' => null
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
        'fieldId' => 'FieldId',
        'fieldLabel' => 'FieldLabel',
        'fieldType' => 'FieldType',
        'fieldValue' => 'FieldValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fieldId' => 'setFieldId',
        'fieldLabel' => 'setFieldLabel',
        'fieldType' => 'setFieldType',
        'fieldValue' => 'setFieldValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fieldId' => 'getFieldId',
        'fieldLabel' => 'getFieldLabel',
        'fieldType' => 'getFieldType',
        'fieldValue' => 'getFieldValue'
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

    const FIELD_TYPE_TEXT = 'Text';
    const FIELD_TYPE_FILE_ATTACHMENT = 'FileAttachment';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_FILE_ATTACHMENT,
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
        $this->container['fieldId'] = $data['fieldId'] ?? null;
        $this->container['fieldLabel'] = $data['fieldLabel'] ?? null;
        $this->container['fieldType'] = $data['fieldType'] ?? null;
        $this->container['fieldValue'] = $data['fieldValue'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fieldId'] === null) {
            $invalidProperties[] = "'fieldId' can't be null";
        }
        if ($this->container['fieldLabel'] === null) {
            $invalidProperties[] = "'fieldLabel' can't be null";
        }
        if ($this->container['fieldType'] === null) {
            $invalidProperties[] = "'fieldType' can't be null";
        }
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!is_null($this->container['fieldType']) && !in_array($this->container['fieldType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fieldType', must be one of '%s'",
                $this->container['fieldType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fieldValue'] === null) {
            $invalidProperties[] = "'fieldValue' can't be null";
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
     * Gets fieldId
     *
     * @return string
     */
    public function getFieldId()
    {
        return $this->container['fieldId'];
    }

    /**
     * Sets fieldId
     *
     * @param string $fieldId The unique identifier for the field.
     *
     * @return self
     */
    public function setFieldId($fieldId)
    {
        $this->container['fieldId'] = $fieldId;

        return $this;
    }

    /**
     * Gets fieldLabel
     *
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->container['fieldLabel'];
    }

    /**
     * Sets fieldLabel
     *
     * @param string $fieldLabel The name for the field.
     *
     * @return self
     */
    public function setFieldLabel($fieldLabel)
    {
        $this->container['fieldLabel'] = $fieldLabel;

        return $this;
    }

    /**
     * Gets fieldType
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
     * Sets fieldType
     *
     * @param string $fieldType The type of field.
     *
     * @return self
     */
    public function setFieldType($fieldType)
    {
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!in_array($fieldType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fieldType', must be one of '%s'",
                    $fieldType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fieldType'] = $fieldType;

        return $this;
    }

    /**
     * Gets fieldValue
     *
     * @return string
     */
    public function getFieldValue()
    {
        return $this->container['fieldValue'];
    }

    /**
     * Sets fieldValue
     *
     * @param string $fieldValue The content of the field as collected in regulatory form. Note that FileAttachment type fields will contain a URL to download the attachment here.
     *
     * @return self
     */
    public function setFieldValue($fieldValue)
    {
        $this->container['fieldValue'] = $fieldValue;

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


