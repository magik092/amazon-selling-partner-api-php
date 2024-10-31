<?php
/**
 * PackageDocumentDetailV2
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
 * PackageDocumentDetailV2 Class Doc Comment
 *
 * @category Class
 * @description The post-purchase details of a package that will be shipped using a shipping service.
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackageDocumentDetailV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageDocumentDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packageClientReferenceId' => 'string',
        'packageDocuments' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\PackageDocumentV2[]',
        'trackingId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'packageClientReferenceId' => null,
        'packageDocuments' => null,
        'trackingId' => null
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
        'packageClientReferenceId' => 'packageClientReferenceId',
        'packageDocuments' => 'packageDocuments',
        'trackingId' => 'trackingId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packageClientReferenceId' => 'setPackageClientReferenceId',
        'packageDocuments' => 'setPackageDocuments',
        'trackingId' => 'setTrackingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packageClientReferenceId' => 'getPackageClientReferenceId',
        'packageDocuments' => 'getPackageDocuments',
        'trackingId' => 'getTrackingId'
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
        $this->container['packageClientReferenceId'] = $data['packageClientReferenceId'] ?? null;
        $this->container['packageDocuments'] = $data['packageDocuments'] ?? null;
        $this->container['trackingId'] = $data['trackingId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageClientReferenceId'] === null) {
            $invalidProperties[] = "'packageClientReferenceId' can't be null";
        }
        if ($this->container['packageDocuments'] === null) {
            $invalidProperties[] = "'packageDocuments' can't be null";
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
     * Gets packageClientReferenceId
     *
     * @return string
     */
    public function getPackageClientReferenceId()
    {
        return $this->container['packageClientReferenceId'];
    }

    /**
     * Sets packageClientReferenceId
     *
     * @param string $packageClientReferenceId A client provided unique identifier for a package being shipped. This value should be saved by the client to pass as a parameter to the getShipmentDocuments operation.
     *
     * @return self
     */
    public function setPackageClientReferenceId($packageClientReferenceId)
    {
        $this->container['packageClientReferenceId'] = $packageClientReferenceId;

        return $this;
    }

    /**
     * Gets packageDocuments
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\PackageDocumentV2[]
     */
    public function getPackageDocuments()
    {
        return $this->container['packageDocuments'];
    }

    /**
     * Sets packageDocuments
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\PackageDocumentV2[] $packageDocuments A list of documents related to a package.
     *
     * @return self
     */
    public function setPackageDocuments($packageDocuments)
    {
        $this->container['packageDocuments'] = $packageDocuments;

        return $this;
    }

    /**
     * Gets trackingId
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['trackingId'];
    }

    /**
     * Sets trackingId
     *
     * @param string|null $trackingId The carrier generated identifier for a package in a purchased shipment.
     *
     * @return self
     */
    public function setTrackingId($trackingId)
    {
        $this->container['trackingId'] = $trackingId;

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

