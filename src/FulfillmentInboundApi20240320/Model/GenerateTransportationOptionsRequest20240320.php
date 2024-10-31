<?php
/**
 * GenerateTransportationOptionsRequest20240320
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * GenerateTransportationOptionsRequest20240320 Class Doc Comment
 *
 * @category Class
 * @description The &#x60;generateTransportationOptions&#x60; request.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GenerateTransportationOptionsRequest20240320 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'GenerateTransportationOptionsRequest';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'placementOptionId'                    => 'string',
        'shipmentTransportationConfigurations' => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ShipmentTransportationConfiguration20240320[]',
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'placementOptionId'                    => null,
        'shipmentTransportationConfigurations' => null,
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
        'placementOptionId'                    => 'placementOptionId',
        'shipmentTransportationConfigurations' => 'shipmentTransportationConfigurations',
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'placementOptionId'                    => 'setPlacementOptionId',
        'shipmentTransportationConfigurations' => 'setShipmentTransportationConfigurations',
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'placementOptionId'                    => 'getPlacementOptionId',
        'shipmentTransportationConfigurations' => 'getShipmentTransportationConfigurations',
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
        $this->container['placementOptionId'] = $data['placementOptionId'] ?? null;
        $this->container['shipmentTransportationConfigurations'] = $data['shipmentTransportationConfigurations'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['placementOptionId'] === null) {
            $invalidProperties[] = "'placementOptionId' can't be null";
        }
        if ((mb_strlen($this->container['placementOptionId']) > 38)) {
            $invalidProperties[] = "invalid value for 'placementOptionId', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['placementOptionId']) < 38)) {
            $invalidProperties[] = "invalid value for 'placementOptionId', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['placementOptionId'])) {
            $invalidProperties[] = "invalid value for 'placementOptionId', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['shipmentTransportationConfigurations'] === null) {
            $invalidProperties[] = "'shipmentTransportationConfigurations' can't be null";
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
     * Gets placementOptionId
     *
     * @return string
     */
    public function getPlacementOptionId()
    {
        return $this->container['placementOptionId'];
    }

    /**
     * Sets placementOptionId
     *
     * @param string $placementOptionId The placement option to generate transportation options for.
     *
     * @return self
     */
    public function setPlacementOptionId($placementOptionId)
    {
        if ((mb_strlen($placementOptionId) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $placementOptionId when calling GenerateTransportationOptionsRequest20240320., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($placementOptionId) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $placementOptionId when calling GenerateTransportationOptionsRequest20240320., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $placementOptionId))) {
            throw new \InvalidArgumentException(
                "invalid value for $placementOptionId when calling GenerateTransportationOptionsRequest20240320., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['placementOptionId'] = $placementOptionId;

        return $this;
    }

    /**
     * Gets shipmentTransportationConfigurations
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ShipmentTransportationConfiguration20240320[]
     */
    public function getShipmentTransportationConfigurations()
    {
        return $this->container['shipmentTransportationConfigurations'];
    }

    /**
     * Sets shipmentTransportationConfigurations
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\ShipmentTransportationConfiguration20240320[] $shipmentTransportationConfigurations List of shipment transportation configurations.
     *
     * @return self
     */
    public function setShipmentTransportationConfigurations($shipmentTransportationConfigurations)
    {
        $this->container['shipmentTransportationConfigurations'] = $shipmentTransportationConfigurations;

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


