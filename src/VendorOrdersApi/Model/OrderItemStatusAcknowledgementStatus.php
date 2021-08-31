<?php
/**
 * OrderItemStatusAcknowledgementStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorOrdersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace Webcom\Amazon\Rest\VendorOrdersApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * OrderItemStatusAcknowledgementStatus Class Doc Comment
 *
 * @category Class
 * @description Acknowledgement status information.
 * @package  Webcom\Amazon\Rest\VendorOrdersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemStatusAcknowledgementStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemStatus_acknowledgementStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmationStatus' => 'string',
        'acceptedQuantity' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\ItemQuantity',
        'rejectedQuantity' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\ItemQuantity',
        'acknowledgementStatusDetails' => '\Webcom\Amazon\Rest\VendorOrdersApi\Model\AcknowledgementStatusDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmationStatus' => null,
        'acceptedQuantity' => null,
        'rejectedQuantity' => null,
        'acknowledgementStatusDetails' => null
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
        'confirmationStatus' => 'confirmationStatus',
        'acceptedQuantity' => 'acceptedQuantity',
        'rejectedQuantity' => 'rejectedQuantity',
        'acknowledgementStatusDetails' => 'acknowledgementStatusDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmationStatus' => 'setConfirmationStatus',
        'acceptedQuantity' => 'setAcceptedQuantity',
        'rejectedQuantity' => 'setRejectedQuantity',
        'acknowledgementStatusDetails' => 'setAcknowledgementStatusDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmationStatus' => 'getConfirmationStatus',
        'acceptedQuantity' => 'getAcceptedQuantity',
        'rejectedQuantity' => 'getRejectedQuantity',
        'acknowledgementStatusDetails' => 'getAcknowledgementStatusDetails'
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

    const CONFIRMATION_STATUS_ACCEPTED = 'ACCEPTED';
    const CONFIRMATION_STATUS_PARTIALLY_ACCEPTED = 'PARTIALLY_ACCEPTED';
    const CONFIRMATION_STATUS_REJECTED = 'REJECTED';
    const CONFIRMATION_STATUS_UNCONFIRMED = 'UNCONFIRMED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfirmationStatusAllowableValues()
    {
        return [
            self::CONFIRMATION_STATUS_ACCEPTED,
            self::CONFIRMATION_STATUS_PARTIALLY_ACCEPTED,
            self::CONFIRMATION_STATUS_REJECTED,
            self::CONFIRMATION_STATUS_UNCONFIRMED,
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
        $this->container['confirmationStatus'] = $data['confirmationStatus'] ?? null;
        $this->container['acceptedQuantity'] = $data['acceptedQuantity'] ?? null;
        $this->container['rejectedQuantity'] = $data['rejectedQuantity'] ?? null;
        $this->container['acknowledgementStatusDetails'] = $data['acknowledgementStatusDetails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConfirmationStatusAllowableValues();
        if (!is_null($this->container['confirmationStatus']) && !in_array($this->container['confirmationStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'confirmationStatus', must be one of '%s'",
                $this->container['confirmationStatus'],
                implode("', '", $allowedValues)
            );
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
     * Gets confirmationStatus
     *
     * @return string|null
     */
    public function getConfirmationStatus()
    {
        return $this->container['confirmationStatus'];
    }

    /**
     * Sets confirmationStatus
     *
     * @param string|null $confirmationStatus Confirmation status of line item.
     *
     * @return self
     */
    public function setConfirmationStatus($confirmationStatus)
    {
        $allowedValues = $this->getConfirmationStatusAllowableValues();
        if (!is_null($confirmationStatus) && !in_array($confirmationStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'confirmationStatus', must be one of '%s'",
                    $confirmationStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['confirmationStatus'] = $confirmationStatus;

        return $this;
    }

    /**
     * Gets acceptedQuantity
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\ItemQuantity|null
     */
    public function getAcceptedQuantity()
    {
        return $this->container['acceptedQuantity'];
    }

    /**
     * Sets acceptedQuantity
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\ItemQuantity|null $acceptedQuantity acceptedQuantity
     *
     * @return self
     */
    public function setAcceptedQuantity($acceptedQuantity)
    {
        $this->container['acceptedQuantity'] = $acceptedQuantity;

        return $this;
    }

    /**
     * Gets rejectedQuantity
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\ItemQuantity|null
     */
    public function getRejectedQuantity()
    {
        return $this->container['rejectedQuantity'];
    }

    /**
     * Sets rejectedQuantity
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\ItemQuantity|null $rejectedQuantity rejectedQuantity
     *
     * @return self
     */
    public function setRejectedQuantity($rejectedQuantity)
    {
        $this->container['rejectedQuantity'] = $rejectedQuantity;

        return $this;
    }

    /**
     * Gets acknowledgementStatusDetails
     *
     * @return \Webcom\Amazon\Rest\VendorOrdersApi\Model\AcknowledgementStatusDetails[]|null
     */
    public function getAcknowledgementStatusDetails()
    {
        return $this->container['acknowledgementStatusDetails'];
    }

    /**
     * Sets acknowledgementStatusDetails
     *
     * @param \Webcom\Amazon\Rest\VendorOrdersApi\Model\AcknowledgementStatusDetails[]|null $acknowledgementStatusDetails Details of item quantity confirmed.
     *
     * @return self
     */
    public function setAcknowledgementStatusDetails($acknowledgementStatusDetails)
    {
        $this->container['acknowledgementStatusDetails'] = $acknowledgementStatusDetails;

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


