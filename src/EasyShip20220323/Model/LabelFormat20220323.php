<?php
/**
 * LabelFormat20220323
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\EasyShip20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\EasyShip20220323\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * LabelFormat20220323 Class Doc Comment
 *
 * @category Class
 * @description The file format in which the shipping label will be created.
 * @package  Webcom\Amazon\Rest\EasyShip20220323
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LabelFormat20220323
{
    /**
     * Possible values of this enum
     */
    const PDF = 'PDF';
    const ZPL = 'ZPL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
            self::ZPL,
        ];
    }
}


