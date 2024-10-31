<?php
/**
 * UpdateVerificationStatusRequestBodyV0
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
 * UpdateVerificationStatusRequestBodyV0 Class Doc Comment
 *
 * @category Class
 * @description The updated values of the &#x60;VerificationStatus&#x60; field.
 * @package  Webcom\Amazon\Rest\OrdersApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdateVerificationStatusRequestBodyV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateVerificationStatusRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\Webcom\Amazon\Rest\OrdersApiV0\Model\VerificationStatusV0',
        'externalReviewerId' => 'string',
        'rejectionReasonId' => 'string',
        'verificationDetails' => '\Webcom\Amazon\Rest\OrdersApiV0\Model\VerificationDetailsV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'externalReviewerId' => null,
        'rejectionReasonId' => null,
        'verificationDetails' => null
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
        'status' => 'status',
        'externalReviewerId' => 'externalReviewerId',
        'rejectionReasonId' => 'rejectionReasonId',
        'verificationDetails' => 'verificationDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'externalReviewerId' => 'setExternalReviewerId',
        'rejectionReasonId' => 'setRejectionReasonId',
        'verificationDetails' => 'setVerificationDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'externalReviewerId' => 'getExternalReviewerId',
        'rejectionReasonId' => 'getRejectionReasonId',
        'verificationDetails' => 'getVerificationDetails'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['externalReviewerId'] = $data['externalReviewerId'] ?? null;
        $this->container['rejectionReasonId'] = $data['rejectionReasonId'] ?? null;
        $this->container['verificationDetails'] = $data['verificationDetails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['externalReviewerId'] === null) {
            $invalidProperties[] = "'externalReviewerId' can't be null";
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
     * Gets status
     *
     * @return \Webcom\Amazon\Rest\OrdersApiV0\Model\VerificationStatusV0|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Webcom\Amazon\Rest\OrdersApiV0\Model\VerificationStatusV0|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets externalReviewerId
     *
     * @return string
     */
    public function getExternalReviewerId()
    {
        return $this->container['externalReviewerId'];
    }

    /**
     * Sets externalReviewerId
     *
     * @param string $externalReviewerId The identifier of the order's regulated information reviewer.
     *
     * @return self
     */
    public function setExternalReviewerId($externalReviewerId)
    {
        $this->container['externalReviewerId'] = $externalReviewerId;

        return $this;
    }

    /**
     * Gets rejectionReasonId
     *
     * @return string|null
     */
    public function getRejectionReasonId()
    {
        return $this->container['rejectionReasonId'];
    }

    /**
     * Sets rejectionReasonId
     *
     * @param string|null $rejectionReasonId The unique identifier of the rejection reason used for rejecting the order's regulated information. Only required if the new status is rejected.
     *
     * @return self
     */
    public function setRejectionReasonId($rejectionReasonId)
    {
        $this->container['rejectionReasonId'] = $rejectionReasonId;

        return $this;
    }

    /**
     * Gets verificationDetails
     *
     * @return \Webcom\Amazon\Rest\OrdersApiV0\Model\VerificationDetailsV0|null
     */
    public function getVerificationDetails()
    {
        return $this->container['verificationDetails'];
    }

    /**
     * Sets verificationDetails
     *
     * @param \Webcom\Amazon\Rest\OrdersApiV0\Model\VerificationDetailsV0|null $verificationDetails verificationDetails
     *
     * @return self
     */
    public function setVerificationDetails($verificationDetails)
    {
        $this->container['verificationDetails'] = $verificationDetails;

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


