<?php
/**
 * CreateReportScheduleSpecification
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReportsApiV20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2020-09-04
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ReportsApiV20200904\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CreateReportScheduleSpecification Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReportsApiV20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateReportScheduleSpecification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateReportScheduleSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reportType' => 'string',
        'marketplaceIds' => 'string[]',
        'reportOptions' => 'map[string,string]',
        'period' => 'string',
        'nextReportCreationTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reportType' => null,
        'marketplaceIds' => null,
        'reportOptions' => null,
        'period' => null,
        'nextReportCreationTime' => 'date-time'
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
        'reportType' => 'reportType',
        'marketplaceIds' => 'marketplaceIds',
        'reportOptions' => 'reportOptions',
        'period' => 'period',
        'nextReportCreationTime' => 'nextReportCreationTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportType' => 'setReportType',
        'marketplaceIds' => 'setMarketplaceIds',
        'reportOptions' => 'setReportOptions',
        'period' => 'setPeriod',
        'nextReportCreationTime' => 'setNextReportCreationTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportType' => 'getReportType',
        'marketplaceIds' => 'getMarketplaceIds',
        'reportOptions' => 'getReportOptions',
        'period' => 'getPeriod',
        'nextReportCreationTime' => 'getNextReportCreationTime'
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

    const PERIOD_PT5_M = 'PT5M';
    const PERIOD_PT15_M = 'PT15M';
    const PERIOD_PT30_M = 'PT30M';
    const PERIOD_PT1_H = 'PT1H';
    const PERIOD_PT2_H = 'PT2H';
    const PERIOD_PT4_H = 'PT4H';
    const PERIOD_PT8_H = 'PT8H';
    const PERIOD_PT12_H = 'PT12H';
    const PERIOD_P1_D = 'P1D';
    const PERIOD_P2_D = 'P2D';
    const PERIOD_P3_D = 'P3D';
    const PERIOD_PT84_H = 'PT84H';
    const PERIOD_P7_D = 'P7D';
    const PERIOD_P14_D = 'P14D';
    const PERIOD_P15_D = 'P15D';
    const PERIOD_P18_D = 'P18D';
    const PERIOD_P30_D = 'P30D';
    const PERIOD_P1_M = 'P1M';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_PT5_M,
            self::PERIOD_PT15_M,
            self::PERIOD_PT30_M,
            self::PERIOD_PT1_H,
            self::PERIOD_PT2_H,
            self::PERIOD_PT4_H,
            self::PERIOD_PT8_H,
            self::PERIOD_PT12_H,
            self::PERIOD_P1_D,
            self::PERIOD_P2_D,
            self::PERIOD_P3_D,
            self::PERIOD_PT84_H,
            self::PERIOD_P7_D,
            self::PERIOD_P14_D,
            self::PERIOD_P15_D,
            self::PERIOD_P18_D,
            self::PERIOD_P30_D,
            self::PERIOD_P1_M,
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
        $this->container['reportType'] = $data['reportType'] ?? null;
        $this->container['marketplaceIds'] = $data['marketplaceIds'] ?? null;
        $this->container['reportOptions'] = $data['reportOptions'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
        $this->container['nextReportCreationTime'] = $data['nextReportCreationTime'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reportType'] === null) {
            $invalidProperties[] = "'reportType' can't be null";
        }
        if ($this->container['marketplaceIds'] === null) {
            $invalidProperties[] = "'marketplaceIds' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'period', must be one of '%s'",
                $this->container['period'],
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
     * Gets reportType
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType
     *
     * @param string $reportType The report type.
     *
     * @return self
     */
    public function setReportType($reportType)
    {
        $this->container['reportType'] = $reportType;

        return $this;
    }

    /**
     * Gets marketplaceIds
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[] $marketplaceIds A list of marketplace identifiers for the report schedule.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplaceIds)
    {
        $this->container['marketplaceIds'] = $marketplaceIds;

        return $this;
    }

    /**
     * Gets reportOptions
     *
     * @return map[string,string]|null
     */
    public function getReportOptions()
    {
        return $this->container['reportOptions'];
    }

    /**
     * Sets reportOptions
     *
     * @param map[string,string]|null $reportOptions Additional information passed to reports. This varies by report type.
     *
     * @return self
     */
    public function setReportOptions($reportOptions)
    {
        $this->container['reportOptions'] = $reportOptions;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period One of a set of predefined ISO 8601 periods that specifies how often a report should be created.
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $allowedValues = $this->getPeriodAllowableValues();
        if (!in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'period', must be one of '%s'",
                    $period,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets nextReportCreationTime
     *
     * @return \DateTime|null
     */
    public function getNextReportCreationTime()
    {
        return $this->container['nextReportCreationTime'];
    }

    /**
     * Sets nextReportCreationTime
     *
     * @param \DateTime|null $nextReportCreationTime The date and time when the schedule will create its next report, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setNextReportCreationTime($nextReportCreationTime)
    {
        $this->container['nextReportCreationTime'] = $nextReportCreationTime;

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


