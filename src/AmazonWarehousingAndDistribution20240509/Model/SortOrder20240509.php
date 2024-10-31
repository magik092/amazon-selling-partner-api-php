<?php
/**
 * SortOrder20240509
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509\Model;

use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * SortOrder20240509 Class Doc Comment
 *
 * @category Class
 * @description Sort order for a collection of items. For example, order or shipment.
 * @package  Webcom\Amazon\Rest\AmazonWarehousingAndDistribution20240509
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SortOrder20240509
{
    /**
     * Possible values of this enum
     */
    const ASCENDING = 'ASCENDING';
    const DESCENDING = 'DESCENDING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASCENDING,
            self::DESCENDING,
        ];
    }
}


