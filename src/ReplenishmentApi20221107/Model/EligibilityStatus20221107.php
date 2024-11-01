<?php
/**
 * EligibilityStatus20221107
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
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * EligibilityStatus20221107 Class Doc Comment
 *
 * @category Class
 * @description The current eligibility status of an offer.
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EligibilityStatus20221107
{
    /**
     * Possible values of this enum
     */
    const ELIGIBLE = 'ELIGIBLE';
    const INELIGIBLE = 'INELIGIBLE';
    const SUSPENDED = 'SUSPENDED';
    const REPLENISHMENT_ONLY_ORDERING = 'REPLENISHMENT_ONLY_ORDERING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ELIGIBLE,
            self::INELIGIBLE,
            self::SUSPENDED,
            self::REPLENISHMENT_ONLY_ORDERING,
        ];
    }
}


