<?php
/**
 * ListOfferMetricsSortKey20221107
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
 * ListOfferMetricsSortKey20221107 Class Doc Comment
 *
 * @category Class
 * @description The attribute to use to sort the results.
 * @package  Webcom\Amazon\Rest\ReplenishmentApi20221107
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListOfferMetricsSortKey20221107
{
    /**
     * Possible values of this enum
     */
    const SHIPPED_SUBSCRIPTION_UNITS = 'SHIPPED_SUBSCRIPTION_UNITS';
    const TOTAL_SUBSCRIPTIONS_REVENUE = 'TOTAL_SUBSCRIPTIONS_REVENUE';
    const ACTIVE_SUBSCRIPTIONS = 'ACTIVE_SUBSCRIPTIONS';
    const NEXT_90_DAYS_SHIPPED_SUBSCRIPTION_UNITS = 'NEXT_90DAYS_SHIPPED_SUBSCRIPTION_UNITS';
    const NEXT_60_DAYS_SHIPPED_SUBSCRIPTION_UNITS = 'NEXT_60DAYS_SHIPPED_SUBSCRIPTION_UNITS';
    const NEXT_30_DAYS_SHIPPED_SUBSCRIPTION_UNITS = 'NEXT_30DAYS_SHIPPED_SUBSCRIPTION_UNITS';
    const NEXT_90_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE = 'NEXT_90DAYS_TOTAL_SUBSCRIPTIONS_REVENUE';
    const NEXT_60_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE = 'NEXT_60DAYS_TOTAL_SUBSCRIPTIONS_REVENUE';
    const NEXT_30_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE = 'NEXT_30DAYS_TOTAL_SUBSCRIPTIONS_REVENUE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPED_SUBSCRIPTION_UNITS,
            self::TOTAL_SUBSCRIPTIONS_REVENUE,
            self::ACTIVE_SUBSCRIPTIONS,
            self::NEXT_90_DAYS_SHIPPED_SUBSCRIPTION_UNITS,
            self::NEXT_60_DAYS_SHIPPED_SUBSCRIPTION_UNITS,
            self::NEXT_30_DAYS_SHIPPED_SUBSCRIPTION_UNITS,
            self::NEXT_90_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE,
            self::NEXT_60_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE,
            self::NEXT_30_DAYS_TOTAL_SUBSCRIPTIONS_REVENUE,
        ];
    }
}


