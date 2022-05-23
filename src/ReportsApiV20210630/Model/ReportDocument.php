<?php
/**
 * ReportDocument
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReportsApiV20210630
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2021-06-30
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ReportsApiV20210630\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ReportDocument Class Doc Comment
 *
 * @category Class
 * @description Information required for the report document.
 * @package  Webcom\Amazon\Rest\ReportsApiV20210630
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReportDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reportDocumentId' => 'string',
        'url' => 'string',
        'compressionAlgorithm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reportDocumentId' => null,
        'url' => null,
        'compressionAlgorithm' => null
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
        'reportDocumentId' => 'reportDocumentId',
        'url' => 'url',
        'compressionAlgorithm' => 'compressionAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportDocumentId' => 'setReportDocumentId',
        'url' => 'setUrl',
        'compressionAlgorithm' => 'setCompressionAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportDocumentId' => 'getReportDocumentId',
        'url' => 'getUrl',
        'compressionAlgorithm' => 'getCompressionAlgorithm'
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

    const COMPRESSION_ALGORITHM_GZIP = 'GZIP';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        return [
            self::COMPRESSION_ALGORITHM_GZIP,
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
        $this->container['reportDocumentId'] = $data['reportDocumentId'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['compressionAlgorithm'] = $data['compressionAlgorithm'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reportDocumentId'] === null) {
            $invalidProperties[] = "'reportDocumentId' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($this->container['compressionAlgorithm']) && !in_array($this->container['compressionAlgorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'compressionAlgorithm', must be one of '%s'",
                $this->container['compressionAlgorithm'],
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
     * Gets reportDocumentId
     *
     * @return string
     */
    public function getReportDocumentId()
    {
        return $this->container['reportDocumentId'];
    }

    /**
     * Sets reportDocumentId
     *
     * @param string $reportDocumentId The identifier for the report document. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportDocumentId($reportDocumentId)
    {
        $this->container['reportDocumentId'] = $reportDocumentId;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A presigned URL for the report document. This URL expires after 5 minutes.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets compressionAlgorithm
     *
     * @return string|null
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compressionAlgorithm'];
    }

    /**
     * Sets compressionAlgorithm
     *
     * @param string|null $compressionAlgorithm If present, the report document contents have been compressed with the provided algorithm.
     *
     * @return self
     */
    public function setCompressionAlgorithm($compressionAlgorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($compressionAlgorithm) && !in_array($compressionAlgorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'compressionAlgorithm', must be one of '%s'",
                    $compressionAlgorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compressionAlgorithm'] = $compressionAlgorithm;

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


