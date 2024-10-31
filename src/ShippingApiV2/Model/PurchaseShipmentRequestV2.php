<?php
/**
 * PurchaseShipmentRequestV2
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
 * PurchaseShipmentRequestV2 Class Doc Comment
 *
 * @category Class
 * @description The request schema for the purchaseShipment operation.
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PurchaseShipmentRequestV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requestToken' => 'string',
        'rateId' => 'string',
        'requestedDocumentSpecification' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\RequestedDocumentSpecificationV2',
        'requestedValueAddedServices' => '\Webcom\Amazon\Rest\ShippingApiV2\Model\RequestedValueAddedServiceV2[]',
        'additionalInputs' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'requestToken' => null,
        'rateId' => null,
        'requestedDocumentSpecification' => null,
        'requestedValueAddedServices' => null,
        'additionalInputs' => null
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
        'requestToken' => 'requestToken',
        'rateId' => 'rateId',
        'requestedDocumentSpecification' => 'requestedDocumentSpecification',
        'requestedValueAddedServices' => 'requestedValueAddedServices',
        'additionalInputs' => 'additionalInputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requestToken' => 'setRequestToken',
        'rateId' => 'setRateId',
        'requestedDocumentSpecification' => 'setRequestedDocumentSpecification',
        'requestedValueAddedServices' => 'setRequestedValueAddedServices',
        'additionalInputs' => 'setAdditionalInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requestToken' => 'getRequestToken',
        'rateId' => 'getRateId',
        'requestedDocumentSpecification' => 'getRequestedDocumentSpecification',
        'requestedValueAddedServices' => 'getRequestedValueAddedServices',
        'additionalInputs' => 'getAdditionalInputs'
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
        $this->container['requestToken'] = $data['requestToken'] ?? null;
        $this->container['rateId'] = $data['rateId'] ?? null;
        $this->container['requestedDocumentSpecification'] = $data['requestedDocumentSpecification'] ?? null;
        $this->container['requestedValueAddedServices'] = $data['requestedValueAddedServices'] ?? null;
        $this->container['additionalInputs'] = $data['additionalInputs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['requestToken'] === null) {
            $invalidProperties[] = "'requestToken' can't be null";
        }
        if ($this->container['rateId'] === null) {
            $invalidProperties[] = "'rateId' can't be null";
        }
        if ($this->container['requestedDocumentSpecification'] === null) {
            $invalidProperties[] = "'requestedDocumentSpecification' can't be null";
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
     * Gets requestToken
     *
     * @return string
     */
    public function getRequestToken()
    {
        return $this->container['requestToken'];
    }

    /**
     * Sets requestToken
     *
     * @param string $requestToken A unique token generated to identify a getRates operation.
     *
     * @return self
     */
    public function setRequestToken($requestToken)
    {
        $this->container['requestToken'] = $requestToken;

        return $this;
    }

    /**
     * Gets rateId
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->container['rateId'];
    }

    /**
     * Sets rateId
     *
     * @param string $rateId An identifier for the rate (shipment offering) provided by a shipping service provider.
     *
     * @return self
     */
    public function setRateId($rateId)
    {
        $this->container['rateId'] = $rateId;

        return $this;
    }

    /**
     * Gets requestedDocumentSpecification
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\RequestedDocumentSpecificationV2
     */
    public function getRequestedDocumentSpecification()
    {
        return $this->container['requestedDocumentSpecification'];
    }

    /**
     * Sets requestedDocumentSpecification
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\RequestedDocumentSpecificationV2 $requestedDocumentSpecification requestedDocumentSpecification
     *
     * @return self
     */
    public function setRequestedDocumentSpecification($requestedDocumentSpecification)
    {
        $this->container['requestedDocumentSpecification'] = $requestedDocumentSpecification;

        return $this;
    }

    /**
     * Gets requestedValueAddedServices
     *
     * @return \Webcom\Amazon\Rest\ShippingApiV2\Model\RequestedValueAddedServiceV2[]|null
     */
    public function getRequestedValueAddedServices()
    {
        return $this->container['requestedValueAddedServices'];
    }

    /**
     * Sets requestedValueAddedServices
     *
     * @param \Webcom\Amazon\Rest\ShippingApiV2\Model\RequestedValueAddedServiceV2[]|null $requestedValueAddedServices The value-added services to be added to a shipping service purchase.
     *
     * @return self
     */
    public function setRequestedValueAddedServices($requestedValueAddedServices)
    {
        $this->container['requestedValueAddedServices'] = $requestedValueAddedServices;

        return $this;
    }

    /**
     * Gets additionalInputs
     *
     * @return map[string,object]|null
     */
    public function getAdditionalInputs()
    {
        return $this->container['additionalInputs'];
    }

    /**
     * Sets additionalInputs
     *
     * @param map[string,object]|null $additionalInputs The additional inputs required to purchase a shipping offering, in JSON format. The JSON provided here must adhere to the JSON schema that is returned in the response to the getAdditionalInputs operation.  Additional inputs are only required when indicated by the requiresAdditionalInputs property in the response to the getRates operation.
     *
     * @return self
     */
    public function setAdditionalInputs($additionalInputs)
    {
        $this->container['additionalInputs'] = $additionalInputs;

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


