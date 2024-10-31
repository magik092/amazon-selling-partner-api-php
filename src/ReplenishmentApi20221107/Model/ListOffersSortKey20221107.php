<?php
/**
 * ListOffersSortKey20221107
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
 * ListOffersSortKey20221107 Class Doc Comment
 *
 * @category Class
 * @description The attribute to use to sort the results.
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListOffersSortKey20221107
{
    /**
     * Possible values of this enum
     */
    const ASIN = 'ASIN';
    const SELLING_PARTNER_FUNDED_BASE_DISCOUNT_PERCENTAGE = 'SELLING_PARTNER_FUNDED_BASE_DISCOUNT_PERCENTAGE';
    const SELLING_PARTNER_FUNDED_TIERED_DISCOUNT_PERCENTAGE = 'SELLING_PARTNER_FUNDED_TIERED_DISCOUNT_PERCENTAGE';
    const AMAZON_FUNDED_BASE_DISCOUNT_PERCENTAGE = 'AMAZON_FUNDED_BASE_DISCOUNT_PERCENTAGE';
    const AMAZON_FUNDED_TIERED_DISCOUNT_PERCENTAGE = 'AMAZON_FUNDED_TIERED_DISCOUNT_PERCENTAGE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASIN,
            self::SELLING_PARTNER_FUNDED_BASE_DISCOUNT_PERCENTAGE,
            self::SELLING_PARTNER_FUNDED_TIERED_DISCOUNT_PERCENTAGE,
            self::AMAZON_FUNDED_BASE_DISCOUNT_PERCENTAGE,
            self::AMAZON_FUNDED_TIERED_DISCOUNT_PERCENTAGE,
        ];
    }
}

