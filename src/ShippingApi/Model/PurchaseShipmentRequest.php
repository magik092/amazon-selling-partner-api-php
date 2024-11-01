<?php
/**
 * PurchaseShipmentRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace Webcom\Amazon\Rest\ShippingApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * PurchaseShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the purchaseShipment operation.
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PurchaseShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
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
        'clientReferenceId' => 'string',
        'shipTo' => '\Webcom\Amazon\Rest\ShippingApi\Model\Address',
        'shipFrom' => '\Webcom\Amazon\Rest\ShippingApi\Model\Address',
        'shipDate' => '\DateTime',
        'serviceType' => '\Webcom\Amazon\Rest\ShippingApi\Model\ServiceType',
        'containers' => '\Webcom\Amazon\Rest\ShippingApi\Model\Container[]',
        'labelSpecification' => '\Webcom\Amazon\Rest\ShippingApi\Model\LabelSpecification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'clientReferenceId' => null,
        'shipTo' => null,
        'shipFrom' => null,
        'shipDate' => 'date-time',
        'serviceType' => null,
        'containers' => null,
        'labelSpecification' => null
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
        'clientReferenceId' => 'clientReferenceId',
        'shipTo' => 'shipTo',
        'shipFrom' => 'shipFrom',
        'shipDate' => 'shipDate',
        'serviceType' => 'serviceType',
        'containers' => 'containers',
        'labelSpecification' => 'labelSpecification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceId' => 'setClientReferenceId',
        'shipTo' => 'setShipTo',
        'shipFrom' => 'setShipFrom',
        'shipDate' => 'setShipDate',
        'serviceType' => 'setServiceType',
        'containers' => 'setContainers',
        'labelSpecification' => 'setLabelSpecification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceId' => 'getClientReferenceId',
        'shipTo' => 'getShipTo',
        'shipFrom' => 'getShipFrom',
        'shipDate' => 'getShipDate',
        'serviceType' => 'getServiceType',
        'containers' => 'getContainers',
        'labelSpecification' => 'getLabelSpecification'
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
        $this->container['clientReferenceId'] = $data['clientReferenceId'] ?? null;
        $this->container['shipTo'] = $data['shipTo'] ?? null;
        $this->container['shipFrom'] = $data['shipFrom'] ?? null;
        $this->container['shipDate'] = $data['shipDate'] ?? null;
        $this->container['serviceType'] = $data['serviceType'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
        $this->container['labelSpecification'] = $data['labelSpecification'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['clientReferenceId'] === null) {
            $invalidProperties[] = "'clientReferenceId' can't be null";
        }
        if ((mb_strlen($this->container['clientReferenceId']) > 40)) {
            $invalidProperties[] = "invalid value for 'clientReferenceId', the character length must be smaller than or equal to 40.";
        }

        if ($this->container['shipTo'] === null) {
            $invalidProperties[] = "'shipTo' can't be null";
        }
        if ($this->container['shipFrom'] === null) {
            $invalidProperties[] = "'shipFrom' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
        if ($this->container['containers'] === null) {
            $invalidProperties[] = "'containers' can't be null";
        }
        if ($this->container['labelSpecification'] === null) {
            $invalidProperties[] = "'labelSpecification' can't be null";
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
     * Gets clientReferenceId
     *
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->container['clientReferenceId'];
    }

    /**
     * Sets clientReferenceId
     *
     * @param string $clientReferenceId Client reference id.
     *
     * @return self
     */
    public function setClientReferenceId($clientReferenceId)
    {
        if ((mb_strlen($clientReferenceId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $clientReferenceId when calling PurchaseShipmentRequest., must be smaller than or equal to 40.');
        }

        $this->container['clientReferenceId'] = $clientReferenceId;

        return $this;
    }

    /**
     * Gets shipTo
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Address
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Address $shipTo shipTo
     *
     * @return self
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets shipFrom
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Address
     */
    public function getShipFrom()
    {
        return $this->container['shipFrom'];
    }

    /**
     * Sets shipFrom
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Address $shipFrom shipFrom
     *
     * @return self
     */
    public function setShipFrom($shipFrom)
    {
        $this->container['shipFrom'] = $shipFrom;

        return $this;
    }

    /**
     * Gets shipDate
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['shipDate'];
    }

    /**
     * Sets shipDate
     *
     * @param \DateTime|null $shipDate The start date and time. This defaults to the current date and time.
     *
     * @return self
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets serviceType
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\ServiceType
     */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
     * Sets serviceType
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\ServiceType $serviceType serviceType
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Container[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Container[] $containers A list of container.
     *
     * @return self
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets labelSpecification
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->container['labelSpecification'];
    }

    /**
     * Sets labelSpecification
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\LabelSpecification $labelSpecification labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification($labelSpecification)
    {
        $this->container['labelSpecification'] = $labelSpecification;

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


