<?php
/**
 * FeedDocumentEncryptionDetails20200904
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Feeds
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * The version of the OpenAPI document: 2020-09-04
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FeedsApi20200904\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \Webcom\Amazon\Rest\ResourcesApi\Model\FeedDocumentInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FeedDocumentEncryptionDetails20200904 Class Doc Comment
 *
 * @category Class
 * @description Encryption details for required client-side encryption and decryption of document contents.
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeedDocumentEncryptionDetails20200904 implements ModelInterface, ArrayAccess, \JsonSerializable, FeedDocumentInterface

{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedDocumentEncryptionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'standard' => 'string',
        'initializationVector' => 'string',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'standard' => null,
        'initializationVector' => null,
        'key' => null
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
        'standard' => 'standard',
        'initializationVector' => 'initializationVector',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standard' => 'setStandard',
        'initializationVector' => 'setInitializationVector',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standard' => 'getStandard',
        'initializationVector' => 'getInitializationVector',
        'key' => 'getKey'
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

    const STANDARD_AES = 'AES';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStandardAllowableValues()
    {
        return [
            self::STANDARD_AES,
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
        $this->container['standard'] = $data['standard'] ?? null;
        $this->container['initializationVector'] = $data['initializationVector'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
        $allowedValues = $this->getStandardAllowableValues();
        if (!is_null($this->container['standard']) && !in_array($this->container['standard'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'standard', must be one of '%s'",
                $this->container['standard'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['initializationVector'] === null) {
            $invalidProperties[] = "'initializationVector' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
     * Gets standard
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param string $standard The encryption standard required to encrypt or decrypt the document contents.
     *
     * @return self
     */
    public function setStandard($standard)
    {
        $allowedValues = $this->getStandardAllowableValues();
        if (!in_array($standard, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'standard', must be one of '%s'",
                    $standard,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets initializationVector
     *
     * @return string
     */
    public function getInitializationVector()
    {
        return $this->container['initializationVector'];
    }

    /**
     * Sets initializationVector
     *
     * @param string $initializationVector The vector to encrypt or decrypt the document contents using Cipher Block Chaining (CBC).
     *
     * @return self
     */
    public function setInitializationVector($initializationVector)
    {
        $this->container['initializationVector'] = $initializationVector;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key The encryption key used to encrypt or decrypt the document contents.
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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

