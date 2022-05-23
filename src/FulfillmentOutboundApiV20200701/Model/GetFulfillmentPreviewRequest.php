<?php
/**
 * GetFulfillmentPreviewRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
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

namespace Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * GetFulfillmentPreviewRequest Class Doc Comment
 *
 * @category Class
 * @description The request body schema for the getFulfillmentPreview operation.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetFulfillmentPreviewRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFulfillmentPreviewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'address' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\Address',
        'items' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\GetFulfillmentPreviewItem[]',
        'shippingSpeedCategories' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\ShippingSpeedCategory[]',
        'includeCODFulfillmentPreview' => 'bool',
        'includeDeliveryWindows' => 'bool',
        'featureConstraints' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\FeatureSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'address' => null,
        'items' => null,
        'shippingSpeedCategories' => null,
        'includeCODFulfillmentPreview' => null,
        'includeDeliveryWindows' => null,
        'featureConstraints' => null
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
        'marketplaceId' => 'marketplaceId',
        'address' => 'address',
        'items' => 'items',
        'shippingSpeedCategories' => 'shippingSpeedCategories',
        'includeCODFulfillmentPreview' => 'includeCODFulfillmentPreview',
        'includeDeliveryWindows' => 'includeDeliveryWindows',
        'featureConstraints' => 'featureConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'address' => 'setAddress',
        'items' => 'setItems',
        'shippingSpeedCategories' => 'setShippingSpeedCategories',
        'includeCODFulfillmentPreview' => 'setIncludeCODFulfillmentPreview',
        'includeDeliveryWindows' => 'setIncludeDeliveryWindows',
        'featureConstraints' => 'setFeatureConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'address' => 'getAddress',
        'items' => 'getItems',
        'shippingSpeedCategories' => 'getShippingSpeedCategories',
        'includeCODFulfillmentPreview' => 'getIncludeCODFulfillmentPreview',
        'includeDeliveryWindows' => 'getIncludeDeliveryWindows',
        'featureConstraints' => 'getFeatureConstraints'
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['shippingSpeedCategories'] = $data['shippingSpeedCategories'] ?? null;
        $this->container['includeCODFulfillmentPreview'] = $data['includeCODFulfillmentPreview'] ?? null;
        $this->container['includeDeliveryWindows'] = $data['includeDeliveryWindows'] ?? null;
        $this->container['featureConstraints'] = $data['featureConstraints'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The marketplace the fulfillment order is placed against.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\Address $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\GetFulfillmentPreviewItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\GetFulfillmentPreviewItem[] $items An array of fulfillment preview item information.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets shippingSpeedCategories
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\ShippingSpeedCategory[]|null
     */
    public function getShippingSpeedCategories()
    {
        return $this->container['shippingSpeedCategories'];
    }

    /**
     * Sets shippingSpeedCategories
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\ShippingSpeedCategory[]|null $shippingSpeedCategories shippingSpeedCategories
     *
     * @return self
     */
    public function setShippingSpeedCategories($shippingSpeedCategories)
    {
        $this->container['shippingSpeedCategories'] = $shippingSpeedCategories;

        return $this;
    }

    /**
     * Gets includeCODFulfillmentPreview
     *
     * @return bool|null
     */
    public function getIncludeCODFulfillmentPreview()
    {
        return $this->container['includeCODFulfillmentPreview'];
    }

    /**
     * Sets includeCODFulfillmentPreview
     *
     * @param bool|null $includeCODFulfillmentPreview Specifies whether to return fulfillment order previews that are for COD (Cash On Delivery).  Possible values:  * true - Returns all fulfillment order previews (both for COD and not for COD). * false - Returns only fulfillment order previews that are not for COD.
     *
     * @return self
     */
    public function setIncludeCODFulfillmentPreview($includeCODFulfillmentPreview)
    {
        $this->container['includeCODFulfillmentPreview'] = $includeCODFulfillmentPreview;

        return $this;
    }

    /**
     * Gets includeDeliveryWindows
     *
     * @return bool|null
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->container['includeDeliveryWindows'];
    }

    /**
     * Sets includeDeliveryWindows
     *
     * @param bool|null $includeDeliveryWindows Specifies whether to return the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery.
     *
     * @return self
     */
    public function setIncludeDeliveryWindows($includeDeliveryWindows)
    {
        $this->container['includeDeliveryWindows'] = $includeDeliveryWindows;

        return $this;
    }

    /**
     * Gets featureConstraints
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['featureConstraints'];
    }

    /**
     * Sets featureConstraints
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\FeatureSettings[]|null $featureConstraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return self
     */
    public function setFeatureConstraints($featureConstraints)
    {
        $this->container['featureConstraints'] = $featureConstraints;

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


