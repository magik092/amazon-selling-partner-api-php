<?php
/**
 * StandardIdForLabel
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\MerchantFulfillmentApi\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * StandardIdForLabel Class Doc Comment
 *
 * @category Class
 * @description The type of standard identifier to print on the label.
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StandardIdForLabel
{
    /**
     * Possible values of this enum
     */
    const AMAZON_ORDER_ID = 'AmazonOrderId';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON_ORDER_ID,
        ];
    }
}


