<?php
/**
 * ExportStatus20240619
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\InvoicesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Invoices.
 *
 * Use the Selling Partner API for Invoices to retrieve and manage invoice-related operations, which can help selling partners manage their bookkeeping processes.
 *
 * The version of the OpenAPI document: 2024-06-19
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\InvoicesApi20240619\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ExportStatus20240619 Class Doc Comment
 *
 * @category Class
 * @description The current status of the request.
 * @package  Webcom\Amazon\Rest\InvoicesApi20240619
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportStatus20240619
{
    /**
     * Possible values of this enum
     */
    const REQUESTED = 'REQUESTED';
    const PROCESSING = 'PROCESSING';
    const DONE = 'DONE';
    const ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REQUESTED,
            self::PROCESSING,
            self::DONE,
            self::ERROR,
        ];
    }
}


