<?php
/**
 * PackageTrackingDetails20200701
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
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

namespace Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * PackageTrackingDetails20200701 Class Doc Comment
 *
 * @category Class
 * @description Tracking details of package
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackageTrackingDetails20200701 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageTrackingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packageNumber' => 'int',
        'trackingNumber' => 'string',
        'customerTrackingLink' => 'string',
        'carrierCode' => 'string',
        'carrierPhoneNumber' => 'string',
        'carrierURL' => 'string',
        'shipDate' => '\DateTime',
        'estimatedArrivalDate' => '\DateTime',
        'shipToAddress' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\TrackingAddress20200701',
        'currentStatus' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\CurrentStatus20200701',
        'currentStatusDescription' => 'string',
        'signedForBy' => 'string',
        'additionalLocationInfo' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\AdditionalLocationInfo20200701',
        'trackingEvents' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\TrackingEvent20200701[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'packageNumber' => 'int32',
        'trackingNumber' => null,
        'customerTrackingLink' => null,
        'carrierCode' => null,
        'carrierPhoneNumber' => null,
        'carrierURL' => null,
        'shipDate' => 'date-time',
        'estimatedArrivalDate' => 'date-time',
        'shipToAddress' => null,
        'currentStatus' => null,
        'currentStatusDescription' => null,
        'signedForBy' => null,
        'additionalLocationInfo' => null,
        'trackingEvents' => null
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
        'packageNumber' => 'packageNumber',
        'trackingNumber' => 'trackingNumber',
        'customerTrackingLink' => 'customerTrackingLink',
        'carrierCode' => 'carrierCode',
        'carrierPhoneNumber' => 'carrierPhoneNumber',
        'carrierURL' => 'carrierURL',
        'shipDate' => 'shipDate',
        'estimatedArrivalDate' => 'estimatedArrivalDate',
        'shipToAddress' => 'shipToAddress',
        'currentStatus' => 'currentStatus',
        'currentStatusDescription' => 'currentStatusDescription',
        'signedForBy' => 'signedForBy',
        'additionalLocationInfo' => 'additionalLocationInfo',
        'trackingEvents' => 'trackingEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packageNumber' => 'setPackageNumber',
        'trackingNumber' => 'setTrackingNumber',
        'customerTrackingLink' => 'setCustomerTrackingLink',
        'carrierCode' => 'setCarrierCode',
        'carrierPhoneNumber' => 'setCarrierPhoneNumber',
        'carrierURL' => 'setCarrierURL',
        'shipDate' => 'setShipDate',
        'estimatedArrivalDate' => 'setEstimatedArrivalDate',
        'shipToAddress' => 'setShipToAddress',
        'currentStatus' => 'setCurrentStatus',
        'currentStatusDescription' => 'setCurrentStatusDescription',
        'signedForBy' => 'setSignedForBy',
        'additionalLocationInfo' => 'setAdditionalLocationInfo',
        'trackingEvents' => 'setTrackingEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packageNumber' => 'getPackageNumber',
        'trackingNumber' => 'getTrackingNumber',
        'customerTrackingLink' => 'getCustomerTrackingLink',
        'carrierCode' => 'getCarrierCode',
        'carrierPhoneNumber' => 'getCarrierPhoneNumber',
        'carrierURL' => 'getCarrierURL',
        'shipDate' => 'getShipDate',
        'estimatedArrivalDate' => 'getEstimatedArrivalDate',
        'shipToAddress' => 'getShipToAddress',
        'currentStatus' => 'getCurrentStatus',
        'currentStatusDescription' => 'getCurrentStatusDescription',
        'signedForBy' => 'getSignedForBy',
        'additionalLocationInfo' => 'getAdditionalLocationInfo',
        'trackingEvents' => 'getTrackingEvents'
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
        $this->container['packageNumber'] = $data['packageNumber'] ?? null;
        $this->container['trackingNumber'] = $data['trackingNumber'] ?? null;
        $this->container['customerTrackingLink'] = $data['customerTrackingLink'] ?? null;
        $this->container['carrierCode'] = $data['carrierCode'] ?? null;
        $this->container['carrierPhoneNumber'] = $data['carrierPhoneNumber'] ?? null;
        $this->container['carrierURL'] = $data['carrierURL'] ?? null;
        $this->container['shipDate'] = $data['shipDate'] ?? null;
        $this->container['estimatedArrivalDate'] = $data['estimatedArrivalDate'] ?? null;
        $this->container['shipToAddress'] = $data['shipToAddress'] ?? null;
        $this->container['currentStatus'] = $data['currentStatus'] ?? null;
        $this->container['currentStatusDescription'] = $data['currentStatusDescription'] ?? null;
        $this->container['signedForBy'] = $data['signedForBy'] ?? null;
        $this->container['additionalLocationInfo'] = $data['additionalLocationInfo'] ?? null;
        $this->container['trackingEvents'] = $data['trackingEvents'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageNumber'] === null) {
            $invalidProperties[] = "'packageNumber' can't be null";
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
     * Gets packageNumber
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['packageNumber'];
    }

    /**
     * Sets packageNumber
     *
     * @param int $packageNumber The package identifier.
     *
     * @return self
     */
    public function setPackageNumber($packageNumber)
    {
        $this->container['packageNumber'] = $packageNumber;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string|null $trackingNumber The tracking number for the package.
     *
     * @return self
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets customerTrackingLink
     *
     * @return string|null
     */
    public function getCustomerTrackingLink()
    {
        return $this->container['customerTrackingLink'];
    }

    /**
     * Sets customerTrackingLink
     *
     * @param string|null $customerTrackingLink Link on swiship.com that allows customers to track the package.
     *
     * @return self
     */
    public function setCustomerTrackingLink($customerTrackingLink)
    {
        $this->container['customerTrackingLink'] = $customerTrackingLink;

        return $this;
    }

    /**
     * Gets carrierCode
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     *
     * @param string|null $carrierCode The name of the carrier.
     *
     * @return self
     */
    public function setCarrierCode($carrierCode)
    {
        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets carrierPhoneNumber
     *
     * @return string|null
     */
    public function getCarrierPhoneNumber()
    {
        return $this->container['carrierPhoneNumber'];
    }

    /**
     * Sets carrierPhoneNumber
     *
     * @param string|null $carrierPhoneNumber The phone number of the carrier.
     *
     * @return self
     */
    public function setCarrierPhoneNumber($carrierPhoneNumber)
    {
        $this->container['carrierPhoneNumber'] = $carrierPhoneNumber;

        return $this;
    }

    /**
     * Gets carrierURL
     *
     * @return string|null
     */
    public function getCarrierURL()
    {
        return $this->container['carrierURL'];
    }

    /**
     * Sets carrierURL
     *
     * @param string|null $carrierURL The URL of the carrier's website.
     *
     * @return self
     */
    public function setCarrierURL($carrierURL)
    {
        $this->container['carrierURL'] = $carrierURL;

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
     * @param \DateTime|null $shipDate Date timestamp
     *
     * @return self
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets estimatedArrivalDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimatedArrivalDate'];
    }

    /**
     * Sets estimatedArrivalDate
     *
     * @param \DateTime|null $estimatedArrivalDate Date timestamp
     *
     * @return self
     */
    public function setEstimatedArrivalDate($estimatedArrivalDate)
    {
        $this->container['estimatedArrivalDate'] = $estimatedArrivalDate;

        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\TrackingAddress20200701|null
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\TrackingAddress20200701|null $shipToAddress shipToAddress
     *
     * @return self
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->container['shipToAddress'] = $shipToAddress;

        return $this;
    }

    /**
     * Gets currentStatus
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\CurrentStatus20200701|null
     */
    public function getCurrentStatus()
    {
        return $this->container['currentStatus'];
    }

    /**
     * Sets currentStatus
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\CurrentStatus20200701|null $currentStatus currentStatus
     *
     * @return self
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->container['currentStatus'] = $currentStatus;

        return $this;
    }

    /**
     * Gets currentStatusDescription
     *
     * @return string|null
     */
    public function getCurrentStatusDescription()
    {
        return $this->container['currentStatusDescription'];
    }

    /**
     * Sets currentStatusDescription
     *
     * @param string|null $currentStatusDescription Description corresponding to the `CurrentStatus` value.
     *
     * @return self
     */
    public function setCurrentStatusDescription($currentStatusDescription)
    {
        $this->container['currentStatusDescription'] = $currentStatusDescription;

        return $this;
    }

    /**
     * Gets signedForBy
     *
     * @return string|null
     */
    public function getSignedForBy()
    {
        return $this->container['signedForBy'];
    }

    /**
     * Sets signedForBy
     *
     * @param string|null $signedForBy The name of the person who signed for the package.
     *
     * @return self
     */
    public function setSignedForBy($signedForBy)
    {
        $this->container['signedForBy'] = $signedForBy;

        return $this;
    }

    /**
     * Gets additionalLocationInfo
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\AdditionalLocationInfo20200701|null
     */
    public function getAdditionalLocationInfo()
    {
        return $this->container['additionalLocationInfo'];
    }

    /**
     * Sets additionalLocationInfo
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\AdditionalLocationInfo20200701|null $additionalLocationInfo additionalLocationInfo
     *
     * @return self
     */
    public function setAdditionalLocationInfo($additionalLocationInfo)
    {
        $this->container['additionalLocationInfo'] = $additionalLocationInfo;

        return $this;
    }

    /**
     * Gets trackingEvents
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\TrackingEvent20200701[]|null
     */
    public function getTrackingEvents()
    {
        return $this->container['trackingEvents'];
    }

    /**
     * Sets trackingEvents
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\TrackingEvent20200701[]|null $trackingEvents An array of tracking event information.
     *
     * @return self
     */
    public function setTrackingEvents($trackingEvents)
    {
        $this->container['trackingEvents'] = $trackingEvents;

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


