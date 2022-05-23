<?php
/**
 * ReturnItem
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
 * ReturnItem Class Doc Comment
 *
 * @category Class
 * @description An item that Amazon accepted for return.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReturnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerReturnItemId' => 'string',
        'sellerFulfillmentOrderItemId' => 'string',
        'amazonShipmentId' => 'string',
        'sellerReturnReasonCode' => 'string',
        'returnComment' => 'string',
        'amazonReturnReasonCode' => 'string',
        'status' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\FulfillmentReturnItemStatus',
        'statusChangedDate' => '\DateTime',
        'returnAuthorizationId' => 'string',
        'returnReceivedCondition' => '\Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\ReturnItemDisposition',
        'fulfillmentCenterId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sellerReturnItemId' => null,
        'sellerFulfillmentOrderItemId' => null,
        'amazonShipmentId' => null,
        'sellerReturnReasonCode' => null,
        'returnComment' => null,
        'amazonReturnReasonCode' => null,
        'status' => null,
        'statusChangedDate' => 'date-time',
        'returnAuthorizationId' => null,
        'returnReceivedCondition' => null,
        'fulfillmentCenterId' => null
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
        'sellerReturnItemId' => 'sellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'sellerFulfillmentOrderItemId',
        'amazonShipmentId' => 'amazonShipmentId',
        'sellerReturnReasonCode' => 'sellerReturnReasonCode',
        'returnComment' => 'returnComment',
        'amazonReturnReasonCode' => 'amazonReturnReasonCode',
        'status' => 'status',
        'statusChangedDate' => 'statusChangedDate',
        'returnAuthorizationId' => 'returnAuthorizationId',
        'returnReceivedCondition' => 'returnReceivedCondition',
        'fulfillmentCenterId' => 'fulfillmentCenterId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerReturnItemId' => 'setSellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'setSellerFulfillmentOrderItemId',
        'amazonShipmentId' => 'setAmazonShipmentId',
        'sellerReturnReasonCode' => 'setSellerReturnReasonCode',
        'returnComment' => 'setReturnComment',
        'amazonReturnReasonCode' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'statusChangedDate' => 'setStatusChangedDate',
        'returnAuthorizationId' => 'setReturnAuthorizationId',
        'returnReceivedCondition' => 'setReturnReceivedCondition',
        'fulfillmentCenterId' => 'setFulfillmentCenterId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerReturnItemId' => 'getSellerReturnItemId',
        'sellerFulfillmentOrderItemId' => 'getSellerFulfillmentOrderItemId',
        'amazonShipmentId' => 'getAmazonShipmentId',
        'sellerReturnReasonCode' => 'getSellerReturnReasonCode',
        'returnComment' => 'getReturnComment',
        'amazonReturnReasonCode' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'statusChangedDate' => 'getStatusChangedDate',
        'returnAuthorizationId' => 'getReturnAuthorizationId',
        'returnReceivedCondition' => 'getReturnReceivedCondition',
        'fulfillmentCenterId' => 'getFulfillmentCenterId'
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
        $this->container['sellerReturnItemId'] = $data['sellerReturnItemId'] ?? null;
        $this->container['sellerFulfillmentOrderItemId'] = $data['sellerFulfillmentOrderItemId'] ?? null;
        $this->container['amazonShipmentId'] = $data['amazonShipmentId'] ?? null;
        $this->container['sellerReturnReasonCode'] = $data['sellerReturnReasonCode'] ?? null;
        $this->container['returnComment'] = $data['returnComment'] ?? null;
        $this->container['amazonReturnReasonCode'] = $data['amazonReturnReasonCode'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusChangedDate'] = $data['statusChangedDate'] ?? null;
        $this->container['returnAuthorizationId'] = $data['returnAuthorizationId'] ?? null;
        $this->container['returnReceivedCondition'] = $data['returnReceivedCondition'] ?? null;
        $this->container['fulfillmentCenterId'] = $data['fulfillmentCenterId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerReturnItemId'] === null) {
            $invalidProperties[] = "'sellerReturnItemId' can't be null";
        }
        if ($this->container['sellerFulfillmentOrderItemId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderItemId' can't be null";
        }
        if ($this->container['amazonShipmentId'] === null) {
            $invalidProperties[] = "'amazonShipmentId' can't be null";
        }
        if ($this->container['sellerReturnReasonCode'] === null) {
            $invalidProperties[] = "'sellerReturnReasonCode' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusChangedDate'] === null) {
            $invalidProperties[] = "'statusChangedDate' can't be null";
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
     * Gets sellerReturnItemId
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['sellerReturnItemId'];
    }

    /**
     * Sets sellerReturnItemId
     *
     * @param string $sellerReturnItemId An identifier assigned by the seller to the return item.
     *
     * @return self
     */
    public function setSellerReturnItemId($sellerReturnItemId)
    {
        $this->container['sellerReturnItemId'] = $sellerReturnItemId;

        return $this;
    }

    /**
     * Gets sellerFulfillmentOrderItemId
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['sellerFulfillmentOrderItemId'];
    }

    /**
     * Sets sellerFulfillmentOrderItemId
     *
     * @param string $sellerFulfillmentOrderItemId The identifier assigned to the item by the seller when the fulfillment order was created.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($sellerFulfillmentOrderItemId)
    {
        $this->container['sellerFulfillmentOrderItemId'] = $sellerFulfillmentOrderItemId;

        return $this;
    }

    /**
     * Gets amazonShipmentId
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazonShipmentId'];
    }

    /**
     * Sets amazonShipmentId
     *
     * @param string $amazonShipmentId The identifier for the shipment that is associated with the return item.
     *
     * @return self
     */
    public function setAmazonShipmentId($amazonShipmentId)
    {
        $this->container['amazonShipmentId'] = $amazonShipmentId;

        return $this;
    }

    /**
     * Gets sellerReturnReasonCode
     *
     * @return string
     */
    public function getSellerReturnReasonCode()
    {
        return $this->container['sellerReturnReasonCode'];
    }

    /**
     * Sets sellerReturnReasonCode
     *
     * @param string $sellerReturnReasonCode The return reason code assigned to the return item by the seller.
     *
     * @return self
     */
    public function setSellerReturnReasonCode($sellerReturnReasonCode)
    {
        $this->container['sellerReturnReasonCode'] = $sellerReturnReasonCode;

        return $this;
    }

    /**
     * Gets returnComment
     *
     * @return string|null
     */
    public function getReturnComment()
    {
        return $this->container['returnComment'];
    }

    /**
     * Sets returnComment
     *
     * @param string|null $returnComment An optional comment about the return item.
     *
     * @return self
     */
    public function setReturnComment($returnComment)
    {
        $this->container['returnComment'] = $returnComment;

        return $this;
    }

    /**
     * Gets amazonReturnReasonCode
     *
     * @return string|null
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->container['amazonReturnReasonCode'];
    }

    /**
     * Sets amazonReturnReasonCode
     *
     * @param string|null $amazonReturnReasonCode The return reason code that the Amazon fulfillment center assigned to the return item.
     *
     * @return self
     */
    public function setAmazonReturnReasonCode($amazonReturnReasonCode)
    {
        $this->container['amazonReturnReasonCode'] = $amazonReturnReasonCode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\FulfillmentReturnItemStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\FulfillmentReturnItemStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusChangedDate
     *
     * @return \DateTime
     */
    public function getStatusChangedDate()
    {
        return $this->container['statusChangedDate'];
    }

    /**
     * Sets statusChangedDate
     *
     * @param \DateTime $statusChangedDate statusChangedDate
     *
     * @return self
     */
    public function setStatusChangedDate($statusChangedDate)
    {
        $this->container['statusChangedDate'] = $statusChangedDate;

        return $this;
    }

    /**
     * Gets returnAuthorizationId
     *
     * @return string|null
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['returnAuthorizationId'];
    }

    /**
     * Sets returnAuthorizationId
     *
     * @param string|null $returnAuthorizationId Identifies the return authorization used to return this item. See ReturnAuthorization.
     *
     * @return self
     */
    public function setReturnAuthorizationId($returnAuthorizationId)
    {
        $this->container['returnAuthorizationId'] = $returnAuthorizationId;

        return $this;
    }

    /**
     * Gets returnReceivedCondition
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\ReturnItemDisposition|null
     */
    public function getReturnReceivedCondition()
    {
        return $this->container['returnReceivedCondition'];
    }

    /**
     * Sets returnReceivedCondition
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model\ReturnItemDisposition|null $returnReceivedCondition returnReceivedCondition
     *
     * @return self
     */
    public function setReturnReceivedCondition($returnReceivedCondition)
    {
        $this->container['returnReceivedCondition'] = $returnReceivedCondition;

        return $this;
    }

    /**
     * Gets fulfillmentCenterId
     *
     * @return string|null
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillmentCenterId'];
    }

    /**
     * Sets fulfillmentCenterId
     *
     * @param string|null $fulfillmentCenterId The identifier for the Amazon fulfillment center that processed the return item.
     *
     * @return self
     */
    public function setFulfillmentCenterId($fulfillmentCenterId)
    {
        $this->container['fulfillmentCenterId'] = $fulfillmentCenterId;

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


