<?php

namespace Webcom\Amazon\Rest\ResourcesApi\Model;

/**
 * FeedDocument20210630 Class Doc Comment
 *
 * @category Class
 * @description Information required for the feed document.
 * @package  Webcom\Amazon\Rest\FeedsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
interface FeedDocumentInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid();

    /**
     * Gets feedDocumentId
     *
     * @return string
     */
    public function getFeedDocumentId();

    /**
     * Sets feedDocumentId
     *
     * @param string $feedDocumentId The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20210630\Model\FeedDocumentInterface20210630|\Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocument20200904
     */
    public function setFeedDocumentId($feedDocumentId);

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl();

    /**
     * Sets url
     *
     * @param string $url A presigned URL for the feed document. This URL expires after 5 minutes.
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20210630\Model\FeedDocumentInterface20210630|\Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocument20200904
     */
    public function setUrl($url);

    /**
     * Gets compressionAlgorithm
     *
     * @return string|null
     */
    public function getCompressionAlgorithm();

    /**
     * Sets compressionAlgorithm
     *
     * @param string|null $compressionAlgorithm If present, the feed document contents are compressed using the indicated algorithm.
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20210630\Model\FeedDocumentInterface20210630|\Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocument20200904
     */
    public function setCompressionAlgorithm($compressionAlgorithm);

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset);

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset);

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value);

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset);

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize();

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue();
}
