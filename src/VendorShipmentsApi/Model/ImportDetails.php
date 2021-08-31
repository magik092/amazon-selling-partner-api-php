<?php
/**
 * ImportDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace Webcom\Amazon\Rest\VendorShipmentsApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ImportDetails Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ImportDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'methodOfPayment' => 'string',
        'sealNumber' => 'string',
        'route' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\Route',
        'importContainers' => 'string',
        'billableWeight' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\Weight',
        'estimatedShipByDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'methodOfPayment' => null,
        'sealNumber' => null,
        'route' => null,
        'importContainers' => null,
        'billableWeight' => null,
        'estimatedShipByDate' => 'date-time'
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
        'methodOfPayment' => 'methodOfPayment',
        'sealNumber' => 'sealNumber',
        'route' => 'route',
        'importContainers' => 'importContainers',
        'billableWeight' => 'billableWeight',
        'estimatedShipByDate' => 'estimatedShipByDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'methodOfPayment' => 'setMethodOfPayment',
        'sealNumber' => 'setSealNumber',
        'route' => 'setRoute',
        'importContainers' => 'setImportContainers',
        'billableWeight' => 'setBillableWeight',
        'estimatedShipByDate' => 'setEstimatedShipByDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'methodOfPayment' => 'getMethodOfPayment',
        'sealNumber' => 'getSealNumber',
        'route' => 'getRoute',
        'importContainers' => 'getImportContainers',
        'billableWeight' => 'getBillableWeight',
        'estimatedShipByDate' => 'getEstimatedShipByDate'
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

    const METHOD_OF_PAYMENT_PAID_BY_BUYER = 'PaidByBuyer';
    const METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY = 'CollectOnDelivery';
    const METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER = 'DefinedByBuyerAndSeller';
    const METHOD_OF_PAYMENT_FOB_PORT_OF_CALL = 'FOBPortOfCall';
    const METHOD_OF_PAYMENT_PREPAID_BY_SELLER = 'PrepaidBySeller';
    const METHOD_OF_PAYMENT_PAID_BY_SELLER = 'PaidBySeller';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodOfPaymentAllowableValues()
    {
        return [
            self::METHOD_OF_PAYMENT_PAID_BY_BUYER,
            self::METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY,
            self::METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER,
            self::METHOD_OF_PAYMENT_FOB_PORT_OF_CALL,
            self::METHOD_OF_PAYMENT_PREPAID_BY_SELLER,
            self::METHOD_OF_PAYMENT_PAID_BY_SELLER,
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
        $this->container['methodOfPayment'] = $data['methodOfPayment'] ?? null;
        $this->container['sealNumber'] = $data['sealNumber'] ?? null;
        $this->container['route'] = $data['route'] ?? null;
        $this->container['importContainers'] = $data['importContainers'] ?? null;
        $this->container['billableWeight'] = $data['billableWeight'] ?? null;
        $this->container['estimatedShipByDate'] = $data['estimatedShipByDate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMethodOfPaymentAllowableValues();
        if (!is_null($this->container['methodOfPayment']) && !in_array($this->container['methodOfPayment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'methodOfPayment', must be one of '%s'",
                $this->container['methodOfPayment'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['importContainers']) && (mb_strlen($this->container['importContainers']) > 64)) {
            $invalidProperties[] = "invalid value for 'importContainers', the character length must be smaller than or equal to 64.";
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
     * Gets methodOfPayment
     *
     * @return string|null
     */
    public function getMethodOfPayment()
    {
        return $this->container['methodOfPayment'];
    }

    /**
     * Sets methodOfPayment
     *
     * @param string|null $methodOfPayment This is used for import purchase orders only. If the recipient requests, this field will contain the shipment method of payment.
     *
     * @return self
     */
    public function setMethodOfPayment($methodOfPayment)
    {
        $allowedValues = $this->getMethodOfPaymentAllowableValues();
        if (!is_null($methodOfPayment) && !in_array($methodOfPayment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'methodOfPayment', must be one of '%s'",
                    $methodOfPayment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['methodOfPayment'] = $methodOfPayment;

        return $this;
    }

    /**
     * Gets sealNumber
     *
     * @return string|null
     */
    public function getSealNumber()
    {
        return $this->container['sealNumber'];
    }

    /**
     * Sets sealNumber
     *
     * @param string|null $sealNumber The container's seal number.
     *
     * @return self
     */
    public function setSealNumber($sealNumber)
    {
        $this->container['sealNumber'] = $sealNumber;

        return $this;
    }

    /**
     * Gets route
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Route|null
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Route|null $route route
     *
     * @return self
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets importContainers
     *
     * @return string|null
     */
    public function getImportContainers()
    {
        return $this->container['importContainers'];
    }

    /**
     * Sets importContainers
     *
     * @param string|null $importContainers Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if shipment has multiple containers.
     *
     * @return self
     */
    public function setImportContainers($importContainers)
    {
        if (!is_null($importContainers) && (mb_strlen($importContainers) > 64)) {
            throw new \InvalidArgumentException('invalid length for $importContainers when calling ImportDetails., must be smaller than or equal to 64.');
        }

        $this->container['importContainers'] = $importContainers;

        return $this;
    }

    /**
     * Gets billableWeight
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Weight|null
     */
    public function getBillableWeight()
    {
        return $this->container['billableWeight'];
    }

    /**
     * Sets billableWeight
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Weight|null $billableWeight billableWeight
     *
     * @return self
     */
    public function setBillableWeight($billableWeight)
    {
        $this->container['billableWeight'] = $billableWeight;

        return $this;
    }

    /**
     * Gets estimatedShipByDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedShipByDate()
    {
        return $this->container['estimatedShipByDate'];
    }

    /**
     * Sets estimatedShipByDate
     *
     * @param \DateTime|null $estimatedShipByDate Date on which the shipment is expected to be shipped. This value should not be in the past and not more than 60 days out in the future.
     *
     * @return self
     */
    public function setEstimatedShipByDate($estimatedShipByDate)
    {
        $this->container['estimatedShipByDate'] = $estimatedShipByDate;

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


