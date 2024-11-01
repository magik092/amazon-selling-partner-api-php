<?php
/**
 * RelatedIdentifier20240619
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
 * RelatedIdentifier20240619 Class Doc Comment
 *
 * @category Class
 * @description Related business identifier of the transaction.
 * @package  Webcom\Amazon\Rest\FinancesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RelatedIdentifier20240619 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RelatedIdentifier';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'relatedIdentifierName'  => 'string',
        'relatedIdentifierValue' => 'string',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'relatedIdentifierName'  => null,
        'relatedIdentifierValue' => null,
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
        'relatedIdentifierName'  => 'relatedIdentifierName',
        'relatedIdentifierValue' => 'relatedIdentifierValue',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'relatedIdentifierName'  => 'setRelatedIdentifierName',
        'relatedIdentifierValue' => 'setRelatedIdentifierValue',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'relatedIdentifierName'  => 'getRelatedIdentifierName',
        'relatedIdentifierValue' => 'getRelatedIdentifierValue',
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

    const RELATED_IDENTIFIER_NAME_ORDER_ID = 'ORDER_ID';
    const RELATED_IDENTIFIER_NAME_SHIPMENT_ID = 'SHIPMENT_ID';
    const RELATED_IDENTIFIER_NAME_EVENT_GROUP_ID = 'EVENT_GROUP_ID';
    const RELATED_IDENTIFIER_NAME_REFUND_ID = 'REFUND_ID';
    const RELATED_IDENTIFIER_NAME_INVOICE_ID = 'INVOICE_ID';
    const RELATED_IDENTIFIER_NAME_DISBURSEMENT_ID = 'DISBURSEMENT_ID';
    const RELATED_IDENTIFIER_NAME_TRANSFER_ID = 'TRANSFER_ID';
    const RELATED_IDENTIFIER_NAME_DEFERRED_TRANSACTION_ID = 'DEFERRED_TRANSACTION_ID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRelatedIdentifierNameAllowableValues()
    {
        return [
            self::RELATED_IDENTIFIER_NAME_ORDER_ID,
            self::RELATED_IDENTIFIER_NAME_SHIPMENT_ID,
            self::RELATED_IDENTIFIER_NAME_EVENT_GROUP_ID,
            self::RELATED_IDENTIFIER_NAME_REFUND_ID,
            self::RELATED_IDENTIFIER_NAME_INVOICE_ID,
            self::RELATED_IDENTIFIER_NAME_DISBURSEMENT_ID,
            self::RELATED_IDENTIFIER_NAME_TRANSFER_ID,
            self::RELATED_IDENTIFIER_NAME_DEFERRED_TRANSACTION_ID,
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
        $this->container['relatedIdentifierName'] = $data['relatedIdentifierName'] ?? null;
        $this->container['relatedIdentifierValue'] = $data['relatedIdentifierValue'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRelatedIdentifierNameAllowableValues();
        if (!is_null($this->container['relatedIdentifierName']) && !in_array($this->container['relatedIdentifierName'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'relatedIdentifierName', must be one of '%s'",
                $this->container['relatedIdentifierName'],
                implode("', '", $allowedValues)
            );
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
     * Gets relatedIdentifierName
     *
     * @return string|null
     */
    public function getRelatedIdentifierName()
    {
        return $this->container['relatedIdentifierName'];
    }

    /**
     * Sets relatedIdentifierName
     *
     * @param string|null $relatedIdentifierName An enumerated set of related business identifier names.
     *
     * @return self
     */
    public function setRelatedIdentifierName($relatedIdentifierName)
    {
        $allowedValues = $this->getRelatedIdentifierNameAllowableValues();
        if (!is_null($relatedIdentifierName) && !in_array($relatedIdentifierName, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'relatedIdentifierName', must be one of '%s'",
                    $relatedIdentifierName,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['relatedIdentifierName'] = $relatedIdentifierName;

        return $this;
    }

    /**
     * Gets relatedIdentifierValue
     *
     * @return string|null
     */
    public function getRelatedIdentifierValue()
    {
        return $this->container['relatedIdentifierValue'];
    }

    /**
     * Sets relatedIdentifierValue
     *
     * @param string|null $relatedIdentifierValue Corresponding value of `RelatedIdentifierName`.
     *
     * @return self
     */
    public function setRelatedIdentifierValue($relatedIdentifierValue)
    {
        $this->container['relatedIdentifierValue'] = $relatedIdentifierValue;

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


