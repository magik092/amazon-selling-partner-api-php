<?php
/**
 * CarrierAccountInputV2
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ShippingApiV2\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CarrierAccountInputV2 Class Doc Comment
 *
 * @category Class
 * @description Info About CarrierAccountInput
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CarrierAccountInputV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CarrierAccountInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'descriptionLocalizationKey' => 'string',
        'name' => 'string',
        'groupName' => 'string',
        'inputType' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\InputTypeV2',
        'isMandatory' => 'bool',
        'isConfidential' => 'bool',
        'isHidden' => 'bool',
        'validationMetadata' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\ValidationMetadataV2[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'descriptionLocalizationKey' => null,
        'name' => null,
        'groupName' => null,
        'inputType' => null,
        'isMandatory' => null,
        'isConfidential' => null,
        'isHidden' => null,
        'validationMetadata' => null
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
        'descriptionLocalizationKey' => 'descriptionLocalizationKey',
        'name' => 'name',
        'groupName' => 'groupName',
        'inputType' => 'inputType',
        'isMandatory' => 'isMandatory',
        'isConfidential' => 'isConfidential',
        'isHidden' => 'isHidden',
        'validationMetadata' => 'validationMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'descriptionLocalizationKey' => 'setDescriptionLocalizationKey',
        'name' => 'setName',
        'groupName' => 'setGroupName',
        'inputType' => 'setInputType',
        'isMandatory' => 'setIsMandatory',
        'isConfidential' => 'setIsConfidential',
        'isHidden' => 'setIsHidden',
        'validationMetadata' => 'setValidationMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'descriptionLocalizationKey' => 'getDescriptionLocalizationKey',
        'name' => 'getName',
        'groupName' => 'getGroupName',
        'inputType' => 'getInputType',
        'isMandatory' => 'getIsMandatory',
        'isConfidential' => 'getIsConfidential',
        'isHidden' => 'getIsHidden',
        'validationMetadata' => 'getValidationMetadata'
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
        $this->container['descriptionLocalizationKey'] = $data['descriptionLocalizationKey'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['groupName'] = $data['groupName'] ?? null;
        $this->container['inputType'] = $data['inputType'] ?? null;
        $this->container['isMandatory'] = $data['isMandatory'] ?? null;
        $this->container['isConfidential'] = $data['isConfidential'] ?? null;
        $this->container['isHidden'] = $data['isHidden'] ?? null;
        $this->container['validationMetadata'] = $data['validationMetadata'] ?? null;
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
     * Gets descriptionLocalizationKey
     *
     * @return string|null
     */
    public function getDescriptionLocalizationKey()
    {
        return $this->container['descriptionLocalizationKey'];
    }

    /**
     * Sets descriptionLocalizationKey
     *
     * @param string|null $descriptionLocalizationKey descriptionLocalizationKey value .
     *
     * @return self
     */
    public function setDescriptionLocalizationKey($descriptionLocalizationKey)
    {
        $this->container['descriptionLocalizationKey'] = $descriptionLocalizationKey;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name value .
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets groupName
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     *
     * @param string|null $groupName groupName value .
     *
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

        return $this;
    }

    /**
     * Gets inputType
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\InputTypeV2|null
     */
    public function getInputType()
    {
        return $this->container['inputType'];
    }

    /**
     * Sets inputType
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\InputTypeV2|null $inputType inputType
     *
     * @return self
     */
    public function setInputType($inputType)
    {
        $this->container['inputType'] = $inputType;

        return $this;
    }

    /**
     * Gets isMandatory
     *
     * @return bool|null
     */
    public function getIsMandatory()
    {
        return $this->container['isMandatory'];
    }

    /**
     * Sets isMandatory
     *
     * @param bool|null $isMandatory mandatory or not  value .
     *
     * @return self
     */
    public function setIsMandatory($isMandatory)
    {
        $this->container['isMandatory'] = $isMandatory;

        return $this;
    }

    /**
     * Gets isConfidential
     *
     * @return bool|null
     */
    public function getIsConfidential()
    {
        return $this->container['isConfidential'];
    }

    /**
     * Sets isConfidential
     *
     * @param bool|null $isConfidential is value is Confidential .
     *
     * @return self
     */
    public function setIsConfidential($isConfidential)
    {
        $this->container['isConfidential'] = $isConfidential;

        return $this;
    }

    /**
     * Gets isHidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['isHidden'];
    }

    /**
     * Sets isHidden
     *
     * @param bool|null $isHidden is value is hidden .
     *
     * @return self
     */
    public function setIsHidden($isHidden)
    {
        $this->container['isHidden'] = $isHidden;

        return $this;
    }

    /**
     * Gets validationMetadata
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\ValidationMetadataV2[]|null
     */
    public function getValidationMetadata()
    {
        return $this->container['validationMetadata'];
    }

    /**
     * Sets validationMetadata
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\ValidationMetadataV2[]|null $validationMetadata A list of ValidationMetadata
     *
     * @return self
     */
    public function setValidationMetadata($validationMetadata)
    {
        $this->container['validationMetadata'] = $validationMetadata;

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


