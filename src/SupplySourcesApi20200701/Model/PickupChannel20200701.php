<?php
/**
 * PickupChannel20200701
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\SupplySourcesApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Supply Sources
 *
 * Manage configurations and capabilities of seller supply sources.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\SupplySourcesApi20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * PickupChannel20200701 Class Doc Comment
 *
 * @category Class
 * @description The pick up channel of a supply source.
 * @package  Webcom\Amazon\Rest\SupplySourcesApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PickupChannel20200701 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inventoryHoldPeriod' => '\Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\Duration20200701',
        'isSupported' => 'bool',
        'operationalConfiguration' => '\Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\OperationalConfiguration20200701',
        'inStorePickupConfiguration' => '\Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\InStorePickupConfiguration20200701',
        'curbsidePickupConfiguration' => '\Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\CurbsidePickupConfiguration20200701'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inventoryHoldPeriod' => null,
        'isSupported' => null,
        'operationalConfiguration' => null,
        'inStorePickupConfiguration' => null,
        'curbsidePickupConfiguration' => null
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
        'inventoryHoldPeriod' => 'inventoryHoldPeriod',
        'isSupported' => 'isSupported',
        'operationalConfiguration' => 'operationalConfiguration',
        'inStorePickupConfiguration' => 'inStorePickupConfiguration',
        'curbsidePickupConfiguration' => 'curbsidePickupConfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventoryHoldPeriod' => 'setInventoryHoldPeriod',
        'isSupported' => 'setIsSupported',
        'operationalConfiguration' => 'setOperationalConfiguration',
        'inStorePickupConfiguration' => 'setInStorePickupConfiguration',
        'curbsidePickupConfiguration' => 'setCurbsidePickupConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventoryHoldPeriod' => 'getInventoryHoldPeriod',
        'isSupported' => 'getIsSupported',
        'operationalConfiguration' => 'getOperationalConfiguration',
        'inStorePickupConfiguration' => 'getInStorePickupConfiguration',
        'curbsidePickupConfiguration' => 'getCurbsidePickupConfiguration'
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
        $this->container['inventoryHoldPeriod'] = $data['inventoryHoldPeriod'] ?? null;
        $this->container['isSupported'] = $data['isSupported'] ?? null;
        $this->container['operationalConfiguration'] = $data['operationalConfiguration'] ?? null;
        $this->container['inStorePickupConfiguration'] = $data['inStorePickupConfiguration'] ?? null;
        $this->container['curbsidePickupConfiguration'] = $data['curbsidePickupConfiguration'] ?? null;
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
     * Gets inventoryHoldPeriod
     *
     * @return \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\Duration20200701|null
     */
    public function getInventoryHoldPeriod()
    {
        return $this->container['inventoryHoldPeriod'];
    }

    /**
     * Sets inventoryHoldPeriod
     *
     * @param \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\Duration20200701|null $inventoryHoldPeriod inventoryHoldPeriod
     *
     * @return self
     */
    public function setInventoryHoldPeriod($inventoryHoldPeriod)
    {
        $this->container['inventoryHoldPeriod'] = $inventoryHoldPeriod;

        return $this;
    }

    /**
     * Gets isSupported
     *
     * @return bool|null
     */
    public function getIsSupported()
    {
        return $this->container['isSupported'];
    }

    /**
     * Sets isSupported
     *
     * @param bool|null $isSupported isSupported
     *
     * @return self
     */
    public function setIsSupported($isSupported)
    {
        $this->container['isSupported'] = $isSupported;

        return $this;
    }

    /**
     * Gets operationalConfiguration
     *
     * @return \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\OperationalConfiguration20200701|null
     */
    public function getOperationalConfiguration()
    {
        return $this->container['operationalConfiguration'];
    }

    /**
     * Sets operationalConfiguration
     *
     * @param \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\OperationalConfiguration20200701|null $operationalConfiguration operationalConfiguration
     *
     * @return self
     */
    public function setOperationalConfiguration($operationalConfiguration)
    {
        $this->container['operationalConfiguration'] = $operationalConfiguration;

        return $this;
    }

    /**
     * Gets inStorePickupConfiguration
     *
     * @return \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\InStorePickupConfiguration20200701|null
     */
    public function getInStorePickupConfiguration()
    {
        return $this->container['inStorePickupConfiguration'];
    }

    /**
     * Sets inStorePickupConfiguration
     *
     * @param \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\InStorePickupConfiguration20200701|null $inStorePickupConfiguration inStorePickupConfiguration
     *
     * @return self
     */
    public function setInStorePickupConfiguration($inStorePickupConfiguration)
    {
        $this->container['inStorePickupConfiguration'] = $inStorePickupConfiguration;

        return $this;
    }

    /**
     * Gets curbsidePickupConfiguration
     *
     * @return \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\CurbsidePickupConfiguration20200701|null
     */
    public function getCurbsidePickupConfiguration()
    {
        return $this->container['curbsidePickupConfiguration'];
    }

    /**
     * Sets curbsidePickupConfiguration
     *
     * @param \Webcom\Amazon\Rest\SupplySourcesApi20200701\Model\CurbsidePickupConfiguration20200701|null $curbsidePickupConfiguration curbsidePickupConfiguration
     *
     * @return self
     */
    public function setCurbsidePickupConfiguration($curbsidePickupConfiguration)
    {
        $this->container['curbsidePickupConfiguration'] = $curbsidePickupConfiguration;

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


