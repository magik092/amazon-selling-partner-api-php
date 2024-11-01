<?php
/**
 * ConfirmShipmentRequestV0
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
 * Use the Orders Selling Partner API to programmatically retrieve order information. With this API, you can develop fast, flexible, and custom applications to manage order synchronization, perform order research, and create demand-based decision support tools.   _Note:_ For the JP, AU, and SG marketplaces, the Orders API supports orders from 2016 onward. For all other marketplaces, the Orders API supports orders for the last two years (orders older than this don't show up in the response).
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
 * ConfirmShipmentRequestV0 Class Doc Comment
 *
 * @category Class
 * @description The request schema for an shipment confirmation.
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ConfirmShipmentRequestV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConfirmShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packageDetail' => '\Webcom\Amazon\Rest\OrdersApiV0\Model\PackageDetailV0',
        'codCollectionMethod' => 'string',
        'marketplaceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'packageDetail' => null,
        'codCollectionMethod' => null,
        'marketplaceId' => null
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
        'packageDetail' => 'packageDetail',
        'codCollectionMethod' => 'codCollectionMethod',
        'marketplaceId' => 'marketplaceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packageDetail' => 'setPackageDetail',
        'codCollectionMethod' => 'setCodCollectionMethod',
        'marketplaceId' => 'setMarketplaceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packageDetail' => 'getPackageDetail',
        'codCollectionMethod' => 'getCodCollectionMethod',
        'marketplaceId' => 'getMarketplaceId'
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

    const COD_COLLECTION_METHOD_DIRECT_PAYMENT = 'DirectPayment';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodCollectionMethodAllowableValues()
    {
        return [
            self::COD_COLLECTION_METHOD_DIRECT_PAYMENT,
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
        $this->container['packageDetail'] = $data['packageDetail'] ?? null;
        $this->container['codCollectionMethod'] = $data['codCollectionMethod'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageDetail'] === null) {
            $invalidProperties[] = "'packageDetail' can't be null";
        }
        $allowedValues = $this->getCodCollectionMethodAllowableValues();
        if (!is_null($this->container['codCollectionMethod']) && !in_array($this->container['codCollectionMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'codCollectionMethod', must be one of '%s'",
                $this->container['codCollectionMethod'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
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
     * Gets packageDetail
     *
     * @return \Webcom\Amazon\Rest\OrdersApiV0\Model\PackageDetailV0
     */
    public function getPackageDetail()
    {
        return $this->container['packageDetail'];
    }

    /**
     * Sets packageDetail
     *
     * @param \Webcom\Amazon\Rest\OrdersApiV0\Model\PackageDetailV0 $packageDetail packageDetail
     *
     * @return self
     */
    public function setPackageDetail($packageDetail)
    {
        $this->container['packageDetail'] = $packageDetail;

        return $this;
    }

    /**
     * Gets codCollectionMethod
     *
     * @return string|null
     */
    public function getCodCollectionMethod()
    {
        return $this->container['codCollectionMethod'];
    }

    /**
     * Sets codCollectionMethod
     *
     * @param string|null $codCollectionMethod The COD collection method (only supported in the JP marketplace).
     *
     * @return self
     */
    public function setCodCollectionMethod($codCollectionMethod)
    {
        $allowedValues = $this->getCodCollectionMethodAllowableValues();
        if (!is_null($codCollectionMethod) && !in_array($codCollectionMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'codCollectionMethod', must be one of '%s'",
                    $codCollectionMethod,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['codCollectionMethod'] = $codCollectionMethod;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId The unobfuscated marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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


