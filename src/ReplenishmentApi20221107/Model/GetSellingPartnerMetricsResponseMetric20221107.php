<?php
/**
 * GetSellingPartnerMetricsResponseMetric20221107
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery of any replenishable item at a frequency chosen by the customer.  The Replenishment API is available worldwide wherever Amazon Subscribe & Save is available or is supported. The API is available to vendors and FBA selling partners.
 *
 * The version of the OpenAPI document: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ReplenishmentApi20221107\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * GetSellingPartnerMetricsResponseMetric20221107 Class Doc Comment
 *
 * @category Class
 * @description An object which contains metric data for a selling partner.
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetSellingPartnerMetricsResponseMetric20221107 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetSellingPartnerMetricsResponseMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notDeliveredDueToOOS' => 'double',
        'totalSubscriptionsRevenue' => 'double',
        'shippedSubscriptionUnits' => 'float',
        'activeSubscriptions' => 'float',
        'subscriberAverageRevenue' => 'double',
        'nonSubscriberAverageRevenue' => 'double',
        'lostRevenueDueToOOS' => 'double',
        'subscriberAverageReorders' => 'double',
        'nonSubscriberAverageReorders' => 'double',
        'couponsRevenuePenetration' => 'double',
        'timeInterval' => '\Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\TimeInterval20221107',
        'currencyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'notDeliveredDueToOOS' => 'double',
        'totalSubscriptionsRevenue' => 'double',
        'shippedSubscriptionUnits' => 'int64',
        'activeSubscriptions' => 'int64',
        'subscriberAverageRevenue' => 'double',
        'nonSubscriberAverageRevenue' => 'double',
        'lostRevenueDueToOOS' => 'double',
        'subscriberAverageReorders' => 'double',
        'nonSubscriberAverageReorders' => 'double',
        'couponsRevenuePenetration' => 'double',
        'timeInterval' => null,
        'currencyCode' => null
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
        'notDeliveredDueToOOS' => 'notDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'totalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'shippedSubscriptionUnits',
        'activeSubscriptions' => 'activeSubscriptions',
        'subscriberAverageRevenue' => 'subscriberAverageRevenue',
        'nonSubscriberAverageRevenue' => 'nonSubscriberAverageRevenue',
        'lostRevenueDueToOOS' => 'lostRevenueDueToOOS',
        'subscriberAverageReorders' => 'subscriberAverageReorders',
        'nonSubscriberAverageReorders' => 'nonSubscriberAverageReorders',
        'couponsRevenuePenetration' => 'couponsRevenuePenetration',
        'timeInterval' => 'timeInterval',
        'currencyCode' => 'currencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notDeliveredDueToOOS' => 'setNotDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'setTotalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'setShippedSubscriptionUnits',
        'activeSubscriptions' => 'setActiveSubscriptions',
        'subscriberAverageRevenue' => 'setSubscriberAverageRevenue',
        'nonSubscriberAverageRevenue' => 'setNonSubscriberAverageRevenue',
        'lostRevenueDueToOOS' => 'setLostRevenueDueToOOS',
        'subscriberAverageReorders' => 'setSubscriberAverageReorders',
        'nonSubscriberAverageReorders' => 'setNonSubscriberAverageReorders',
        'couponsRevenuePenetration' => 'setCouponsRevenuePenetration',
        'timeInterval' => 'setTimeInterval',
        'currencyCode' => 'setCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notDeliveredDueToOOS' => 'getNotDeliveredDueToOOS',
        'totalSubscriptionsRevenue' => 'getTotalSubscriptionsRevenue',
        'shippedSubscriptionUnits' => 'getShippedSubscriptionUnits',
        'activeSubscriptions' => 'getActiveSubscriptions',
        'subscriberAverageRevenue' => 'getSubscriberAverageRevenue',
        'nonSubscriberAverageRevenue' => 'getNonSubscriberAverageRevenue',
        'lostRevenueDueToOOS' => 'getLostRevenueDueToOOS',
        'subscriberAverageReorders' => 'getSubscriberAverageReorders',
        'nonSubscriberAverageReorders' => 'getNonSubscriberAverageReorders',
        'couponsRevenuePenetration' => 'getCouponsRevenuePenetration',
        'timeInterval' => 'getTimeInterval',
        'currencyCode' => 'getCurrencyCode'
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
        $this->container['notDeliveredDueToOOS'] = $data['notDeliveredDueToOOS'] ?? null;
        $this->container['totalSubscriptionsRevenue'] = $data['totalSubscriptionsRevenue'] ?? null;
        $this->container['shippedSubscriptionUnits'] = $data['shippedSubscriptionUnits'] ?? null;
        $this->container['activeSubscriptions'] = $data['activeSubscriptions'] ?? null;
        $this->container['subscriberAverageRevenue'] = $data['subscriberAverageRevenue'] ?? null;
        $this->container['nonSubscriberAverageRevenue'] = $data['nonSubscriberAverageRevenue'] ?? null;
        $this->container['lostRevenueDueToOOS'] = $data['lostRevenueDueToOOS'] ?? null;
        $this->container['subscriberAverageReorders'] = $data['subscriberAverageReorders'] ?? null;
        $this->container['nonSubscriberAverageReorders'] = $data['nonSubscriberAverageReorders'] ?? null;
        $this->container['couponsRevenuePenetration'] = $data['couponsRevenuePenetration'] ?? null;
        $this->container['timeInterval'] = $data['timeInterval'] ?? null;
        $this->container['currencyCode'] = $data['currencyCode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['notDeliveredDueToOOS']) && ($this->container['notDeliveredDueToOOS'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'notDeliveredDueToOOS', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['notDeliveredDueToOOS']) && ($this->container['notDeliveredDueToOOS'] < 0)) {
            $invalidProperties[] = "invalid value for 'notDeliveredDueToOOS', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['totalSubscriptionsRevenue']) && ($this->container['totalSubscriptionsRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'totalSubscriptionsRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shippedSubscriptionUnits']) && ($this->container['shippedSubscriptionUnits'] < 0)) {
            $invalidProperties[] = "invalid value for 'shippedSubscriptionUnits', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['activeSubscriptions']) && ($this->container['activeSubscriptions'] < 0)) {
            $invalidProperties[] = "invalid value for 'activeSubscriptions', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['subscriberAverageRevenue']) && ($this->container['subscriberAverageRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'subscriberAverageRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['nonSubscriberAverageRevenue']) && ($this->container['nonSubscriberAverageRevenue'] < 0)) {
            $invalidProperties[] = "invalid value for 'nonSubscriberAverageRevenue', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lostRevenueDueToOOS']) && ($this->container['lostRevenueDueToOOS'] < 0)) {
            $invalidProperties[] = "invalid value for 'lostRevenueDueToOOS', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['subscriberAverageReorders']) && ($this->container['subscriberAverageReorders'] < 0)) {
            $invalidProperties[] = "invalid value for 'subscriberAverageReorders', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['nonSubscriberAverageReorders']) && ($this->container['nonSubscriberAverageReorders'] < 0)) {
            $invalidProperties[] = "invalid value for 'nonSubscriberAverageReorders', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['couponsRevenuePenetration']) && ($this->container['couponsRevenuePenetration'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'couponsRevenuePenetration', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['couponsRevenuePenetration']) && ($this->container['couponsRevenuePenetration'] < 0)) {
            $invalidProperties[] = "invalid value for 'couponsRevenuePenetration', must be bigger than or equal to 0.";
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
     * Gets notDeliveredDueToOOS
     *
     * @return double|null
     */
    public function getNotDeliveredDueToOOS()
    {
        return $this->container['notDeliveredDueToOOS'];
    }

    /**
     * Sets notDeliveredDueToOOS
     *
     * @param double|null $notDeliveredDueToOOS The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the `PERFORMANCE` `timePeriodType`.
     *
     * @return self
     */
    public function setNotDeliveredDueToOOS($notDeliveredDueToOOS)
    {

        if (!is_null($notDeliveredDueToOOS) && ($notDeliveredDueToOOS > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $notDeliveredDueToOOS when calling GetSellingPartnerMetricsResponseMetric20221107., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($notDeliveredDueToOOS) && ($notDeliveredDueToOOS < 0)) {
            throw new \InvalidArgumentException('invalid value for $notDeliveredDueToOOS when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['notDeliveredDueToOOS'] = $notDeliveredDueToOOS;

        return $this;
    }

    /**
     * Gets totalSubscriptionsRevenue
     *
     * @return double|null
     */
    public function getTotalSubscriptionsRevenue()
    {
        return $this->container['totalSubscriptionsRevenue'];
    }

    /**
     * Sets totalSubscriptionsRevenue
     *
     * @param double|null $totalSubscriptionsRevenue The revenue generated from subscriptions over a period of time. Applicable for both the `PERFORMANCE` and `FORECAST` `timePeriodType`.
     *
     * @return self
     */
    public function setTotalSubscriptionsRevenue($totalSubscriptionsRevenue)
    {

        if (!is_null($totalSubscriptionsRevenue) && ($totalSubscriptionsRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $totalSubscriptionsRevenue when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['totalSubscriptionsRevenue'] = $totalSubscriptionsRevenue;

        return $this;
    }

    /**
     * Gets shippedSubscriptionUnits
     *
     * @return float|null
     */
    public function getShippedSubscriptionUnits()
    {
        return $this->container['shippedSubscriptionUnits'];
    }

    /**
     * Sets shippedSubscriptionUnits
     *
     * @param float|null $shippedSubscriptionUnits The number of units shipped to the subscribers over a period of time. Applicable for both the `PERFORMANCE` and `FORECAST` `timePeriodType`.
     *
     * @return self
     */
    public function setShippedSubscriptionUnits($shippedSubscriptionUnits)
    {

        if (!is_null($shippedSubscriptionUnits) && ($shippedSubscriptionUnits < 0)) {
            throw new \InvalidArgumentException('invalid value for $shippedSubscriptionUnits when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['shippedSubscriptionUnits'] = $shippedSubscriptionUnits;

        return $this;
    }

    /**
     * Gets activeSubscriptions
     *
     * @return float|null
     */
    public function getActiveSubscriptions()
    {
        return $this->container['activeSubscriptions'];
    }

    /**
     * Sets activeSubscriptions
     *
     * @param float|null $activeSubscriptions The number of active subscriptions present at the end of the period. Applicable only for the `PERFORMANCE` `timePeriodType`.
     *
     * @return self
     */
    public function setActiveSubscriptions($activeSubscriptions)
    {

        if (!is_null($activeSubscriptions) && ($activeSubscriptions < 0)) {
            throw new \InvalidArgumentException('invalid value for $activeSubscriptions when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['activeSubscriptions'] = $activeSubscriptions;

        return $this;
    }

    /**
     * Gets subscriberAverageRevenue
     *
     * @return double|null
     */
    public function getSubscriberAverageRevenue()
    {
        return $this->container['subscriberAverageRevenue'];
    }

    /**
     * Sets subscriberAverageRevenue
     *
     * @param double|null $subscriberAverageRevenue The average revenue per subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the `PERFORMANCE` `timePeriodType`.
     *
     * @return self
     */
    public function setSubscriberAverageRevenue($subscriberAverageRevenue)
    {

        if (!is_null($subscriberAverageRevenue) && ($subscriberAverageRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $subscriberAverageRevenue when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['subscriberAverageRevenue'] = $subscriberAverageRevenue;

        return $this;
    }

    /**
     * Gets nonSubscriberAverageRevenue
     *
     * @return double|null
     */
    public function getNonSubscriberAverageRevenue()
    {
        return $this->container['nonSubscriberAverageRevenue'];
    }

    /**
     * Sets nonSubscriberAverageRevenue
     *
     * @param double|null $nonSubscriberAverageRevenue The average revenue per non-subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the `PERFORMANCE` `timePeriodType`.
     *
     * @return self
     */
    public function setNonSubscriberAverageRevenue($nonSubscriberAverageRevenue)
    {

        if (!is_null($nonSubscriberAverageRevenue) && ($nonSubscriberAverageRevenue < 0)) {
            throw new \InvalidArgumentException('invalid value for $nonSubscriberAverageRevenue when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['nonSubscriberAverageRevenue'] = $nonSubscriberAverageRevenue;

        return $this;
    }

    /**
     * Gets lostRevenueDueToOOS
     *
     * @return double|null
     */
    public function getLostRevenueDueToOOS()
    {
        return $this->container['lostRevenueDueToOOS'];
    }

    /**
     * Sets lostRevenueDueToOOS
     *
     * @param double|null $lostRevenueDueToOOS The revenue that would have been generated had there not been out of stock. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return self
     */
    public function setLostRevenueDueToOOS($lostRevenueDueToOOS)
    {

        if (!is_null($lostRevenueDueToOOS) && ($lostRevenueDueToOOS < 0)) {
            throw new \InvalidArgumentException('invalid value for $lostRevenueDueToOOS when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['lostRevenueDueToOOS'] = $lostRevenueDueToOOS;

        return $this;
    }

    /**
     * Gets subscriberAverageReorders
     *
     * @return double|null
     */
    public function getSubscriberAverageReorders()
    {
        return $this->container['subscriberAverageReorders'];
    }

    /**
     * Sets subscriberAverageReorders
     *
     * @param double|null $subscriberAverageReorders The average reorders per subscriber of the program over a period of 12 months. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return self
     */
    public function setSubscriberAverageReorders($subscriberAverageReorders)
    {

        if (!is_null($subscriberAverageReorders) && ($subscriberAverageReorders < 0)) {
            throw new \InvalidArgumentException('invalid value for $subscriberAverageReorders when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['subscriberAverageReorders'] = $subscriberAverageReorders;

        return $this;
    }

    /**
     * Gets nonSubscriberAverageReorders
     *
     * @return double|null
     */
    public function getNonSubscriberAverageReorders()
    {
        return $this->container['nonSubscriberAverageReorders'];
    }

    /**
     * Sets nonSubscriberAverageReorders
     *
     * @param double|null $nonSubscriberAverageReorders The average reorders per non-subscriber of the program over a period of past 12 months. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return self
     */
    public function setNonSubscriberAverageReorders($nonSubscriberAverageReorders)
    {

        if (!is_null($nonSubscriberAverageReorders) && ($nonSubscriberAverageReorders < 0)) {
            throw new \InvalidArgumentException('invalid value for $nonSubscriberAverageReorders when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['nonSubscriberAverageReorders'] = $nonSubscriberAverageReorders;

        return $this;
    }

    /**
     * Gets couponsRevenuePenetration
     *
     * @return double|null
     */
    public function getCouponsRevenuePenetration()
    {
        return $this->container['couponsRevenuePenetration'];
    }

    /**
     * Sets couponsRevenuePenetration
     *
     * @param double|null $couponsRevenuePenetration The percentage of revenue from ASINs with coupons out of total revenue from all ASINs. Applicable only for the PERFORMANCE timePeriodType.
     *
     * @return self
     */
    public function setCouponsRevenuePenetration($couponsRevenuePenetration)
    {

        if (!is_null($couponsRevenuePenetration) && ($couponsRevenuePenetration > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $couponsRevenuePenetration when calling GetSellingPartnerMetricsResponseMetric20221107., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($couponsRevenuePenetration) && ($couponsRevenuePenetration < 0)) {
            throw new \InvalidArgumentException('invalid value for $couponsRevenuePenetration when calling GetSellingPartnerMetricsResponseMetric20221107., must be bigger than or equal to 0.');
        }

        $this->container['couponsRevenuePenetration'] = $couponsRevenuePenetration;

        return $this;
    }

    /**
     * Gets timeInterval
     *
     * @return \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\TimeInterval20221107|null
     */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
     * Sets timeInterval
     *
     * @param \Webcom\Amazon\Rest\ReplenishmentApi20221107\Model\TimeInterval20221107|null $timeInterval timeInterval
     *
     * @return self
     */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string|null $currencyCode The currency code in ISO 4217 format.
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

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


