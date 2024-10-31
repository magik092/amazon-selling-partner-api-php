<?php
/**
 * PackageGroupingInput20240320
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
 * PackageGroupingInput20240320 Class Doc Comment
 *
 * @category Class
 * @description Packing information for the inbound plan.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackageGroupingInput20240320 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageGroupingInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'boxes' => '\Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\BoxInput20240320[]',
        'packingGroupId' => 'string',
        'shipmentId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'boxes' => null,
        'packingGroupId' => null,
        'shipmentId' => null
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
        'boxes' => 'boxes',
        'packingGroupId' => 'packingGroupId',
        'shipmentId' => 'shipmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'boxes' => 'setBoxes',
        'packingGroupId' => 'setPackingGroupId',
        'shipmentId' => 'setShipmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boxes' => 'getBoxes',
        'packingGroupId' => 'getPackingGroupId',
        'shipmentId' => 'getShipmentId'
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
        $this->container['boxes'] = $data['boxes'] ?? null;
        $this->container['packingGroupId'] = $data['packingGroupId'] ?? null;
        $this->container['shipmentId'] = $data['shipmentId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['boxes'] === null) {
            $invalidProperties[] = "'boxes' can't be null";
        }
        if (!is_null($this->container['packingGroupId']) && (mb_strlen($this->container['packingGroupId']) > 38)) {
            $invalidProperties[] = "invalid value for 'packingGroupId', the character length must be smaller than or equal to 38.";
        }

        if (!is_null($this->container['packingGroupId']) && (mb_strlen($this->container['packingGroupId']) < 38)) {
            $invalidProperties[] = "invalid value for 'packingGroupId', the character length must be bigger than or equal to 38.";
        }

        if (!is_null($this->container['packingGroupId']) && !preg_match("/^[a-zA-Z0-9-]*$/", $this->container['packingGroupId'])) {
            $invalidProperties[] = "invalid value for 'packingGroupId', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if (!is_null($this->container['shipmentId']) && (mb_strlen($this->container['shipmentId']) > 38)) {
            $invalidProperties[] = "invalid value for 'shipmentId', the character length must be smaller than or equal to 38.";
        }

        if (!is_null($this->container['shipmentId']) && (mb_strlen($this->container['shipmentId']) < 38)) {
            $invalidProperties[] = "invalid value for 'shipmentId', the character length must be bigger than or equal to 38.";
        }

        if (!is_null($this->container['shipmentId']) && !preg_match("/^[a-zA-Z0-9-]*$/", $this->container['shipmentId'])) {
            $invalidProperties[] = "invalid value for 'shipmentId', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
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
     * Gets boxes
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\BoxInput20240320[]
     */
    public function getBoxes()
    {
        return $this->container['boxes'];
    }

    /**
     * Sets boxes
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model\BoxInput20240320[] $boxes Box level information being provided.
     *
     * @return self
     */
    public function setBoxes($boxes)
    {
        $this->container['boxes'] = $boxes;

        return $this;
    }

    /**
     * Gets packingGroupId
     *
     * @return string|null
     */
    public function getPackingGroupId()
    {
        return $this->container['packingGroupId'];
    }

    /**
     * Sets packingGroupId
     *
     * @param string|null $packingGroupId The ID of the `packingGroup` that packages are grouped according to. The `PackingGroupId` can only be provided before placement confirmation, and it must belong to the confirmed `PackingOption`. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     *
     * @return self
     */
    public function setPackingGroupId($packingGroupId)
    {
        if (!is_null($packingGroupId) && (mb_strlen($packingGroupId) > 38)) {
            throw new \InvalidArgumentException('invalid length for $packingGroupId when calling PackageGroupingInput20240320., must be smaller than or equal to 38.');
        }
        if (!is_null($packingGroupId) && (mb_strlen($packingGroupId) < 38)) {
            throw new \InvalidArgumentException('invalid length for $packingGroupId when calling PackageGroupingInput20240320., must be bigger than or equal to 38.');
        }
        if (!is_null($packingGroupId) && (!preg_match("/^[a-zA-Z0-9-]*$/", $packingGroupId))) {
            throw new \InvalidArgumentException("invalid value for $packingGroupId when calling PackageGroupingInput20240320., must conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        $this->container['packingGroupId'] = $packingGroupId;

        return $this;
    }

    /**
     * Gets shipmentId
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string|null $shipmentId The ID of the shipment that packages are grouped according to. The `ShipmentId` can only be provided after placement confirmation, and the shipment must belong to the confirmed placement option. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     *
     * @return self
     */
    public function setShipmentId($shipmentId)
    {
        if (!is_null($shipmentId) && (mb_strlen($shipmentId) > 38)) {
            throw new \InvalidArgumentException('invalid length for $shipmentId when calling PackageGroupingInput20240320., must be smaller than or equal to 38.');
        }
        if (!is_null($shipmentId) && (mb_strlen($shipmentId) < 38)) {
            throw new \InvalidArgumentException('invalid length for $shipmentId when calling PackageGroupingInput20240320., must be bigger than or equal to 38.');
        }
        if (!is_null($shipmentId) && (!preg_match("/^[a-zA-Z0-9-]*$/", $shipmentId))) {
            throw new \InvalidArgumentException("invalid value for $shipmentId when calling PackageGroupingInput20240320., must conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        $this->container['shipmentId'] = $shipmentId;

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


