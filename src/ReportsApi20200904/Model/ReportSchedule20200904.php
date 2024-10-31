<?php
/**
 * ReportSchedule20200904
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReportsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports
 *
 * Effective **June 27, 2024**, the Selling Partner API for Reports v2020-09-04 will no longer be available and all calls to it will fail. Integrations that rely on the Reports API must migrate to [Reports v2021-06-30](https://developer-docs.amazon.com/sp-api/docs/reports-api-v2021-06-30-reference) to avoid service disruption.
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

namespace Webcom\Amazon\Rest\ReportsApi20200904\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ReportSchedule20200904 Class Doc Comment
 *
 * @category Class
 * @description Detailed information about a report schedule.
 * @package  Webcom\Amazon\Rest\ReportsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReportSchedule20200904 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reportScheduleId' => 'string',
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
        'reportScheduleId' => null,
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
        'reportScheduleId' => 'reportScheduleId',
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
        'reportScheduleId' => 'setReportScheduleId',
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
        'reportScheduleId' => 'getReportScheduleId',
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
        $this->container['reportScheduleId'] = $data['reportScheduleId'] ?? null;
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

        if ($this->container['reportScheduleId'] === null) {
            $invalidProperties[] = "'reportScheduleId' can't be null";
        }
        if ($this->container['reportType'] === null) {
            $invalidProperties[] = "'reportType' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
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
     * Gets reportScheduleId
     *
     * @return string
     */
    public function getReportScheduleId()
    {
        return $this->container['reportScheduleId'];
    }

    /**
     * Sets reportScheduleId
     *
     * @param string $reportScheduleId The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportScheduleId($reportScheduleId)
    {
        $this->container['reportScheduleId'] = $reportScheduleId;

        return $this;
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
     * @return string[]|null
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[]|null $marketplaceIds A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
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
     * @param string $period An ISO 8601 period value that indicates how often a report should be created.
     *
     * @return self
     */
    public function setPeriod($period)
    {
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


