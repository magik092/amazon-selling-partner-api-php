<?php
/**
 * FeedDocument20200904
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Feeds
 *
 * Effective **June 27, 2024**, the Selling Partner API for Feeds v2020-09-04 will no longer be available and all calls to it will fail. Integrations that rely on the Feeds API must migrate to [Feeds v2021-06-30](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference) to avoid service disruption.
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

namespace Webcom\Amazon\Rest\FeedsApi20200904\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \Webcom\Amazon\Rest\ResourcesApi\Model\FeedDocumentInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FeedDocument20200904 Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FeedsApi20200904
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeedDocument20200904 implements ModelInterface, ArrayAccess, \JsonSerializable, FeedDocumentInterface

{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feedDocumentId' => 'string',
        'url' => 'string',
        'encryptionDetails' => '\Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocumentEncryptionDetails20200904',
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
        'feedDocumentId' => null,
        'url' => null,
        'encryptionDetails' => null,
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
        'feedDocumentId' => 'feedDocumentId',
        'url' => 'url',
        'encryptionDetails' => 'encryptionDetails',
        'compressionAlgorithm' => 'compressionAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedDocumentId' => 'setFeedDocumentId',
        'url' => 'setUrl',
        'encryptionDetails' => 'setEncryptionDetails',
        'compressionAlgorithm' => 'setCompressionAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedDocumentId' => 'getFeedDocumentId',
        'url' => 'getUrl',
        'encryptionDetails' => 'getEncryptionDetails',
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
        $this->container['feedDocumentId'] = $data['feedDocumentId'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['encryptionDetails'] = $data['encryptionDetails'] ?? null;
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

        if ($this->container['feedDocumentId'] === null) {
            $invalidProperties[] = "'feedDocumentId' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['encryptionDetails'] === null) {
            $invalidProperties[] = "'encryptionDetails' can't be null";
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
     * Gets feedDocumentId
     *
     * @return string
     */
    public function getFeedDocumentId()
    {
        return $this->container['feedDocumentId'];
    }

    /**
     * Sets feedDocumentId
     *
     * @param string $feedDocumentId The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setFeedDocumentId($feedDocumentId)
    {
        $this->container['feedDocumentId'] = $feedDocumentId;

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
     * @param string $url A presigned URL for the feed document. If `compressionAlgorithm` is not returned, you can download the feed directly from this URL. This URL expires after 5 minutes.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets encryptionDetails
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocumentEncryptionDetails20200904
     */
    public function getEncryptionDetails()
    {
        return $this->container['encryptionDetails'];
    }

    /**
     * Sets encryptionDetails
     *
     * @param \Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocumentEncryptionDetails20200904 $encryptionDetails encryptionDetails
     *
     * @return self
     */
    public function setEncryptionDetails($encryptionDetails)
    {
        $this->container['encryptionDetails'] = $encryptionDetails;

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
     * @param string|null $compressionAlgorithm If the feed document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the feed when you download. Otherwise, you can download the feed directly. Refer to [Step 6. Download and decrypt the feed processing report](doc:feeds-api-v2020-09-04-use-case-guide#step-6-download-and-decrypt-the-feed-processing-report) in the use case guide, where sample code is provided.
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


