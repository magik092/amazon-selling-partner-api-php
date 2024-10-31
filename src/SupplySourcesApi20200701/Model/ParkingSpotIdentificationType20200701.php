<?php
/**
 * ParkingSpotIdentificationType20200701
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\SupplySourcesApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Supply Sources
 *
 * Manage configurations and capabilities of seller supply sources.
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

namespace Webcom\Amazon\Rest\SupplySourcesApi20200701\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ParkingSpotIdentificationType20200701 Class Doc Comment
 *
 * @category Class
 * @description The type of parking spot identification.
 * @package  Webcom\Amazon\Rest\SupplySourcesApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParkingSpotIdentificationType20200701
{
    /**
     * Possible values of this enum
     */
    const NUMBERED = 'Numbered';
    const OTHER = 'Other';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBERED,
            self::OTHER,
        ];
    }
}

