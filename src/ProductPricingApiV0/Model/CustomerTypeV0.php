<?php
/**
 * CustomerTypeV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace Webcom\Amazon\Rest\ProductPricingApiV0\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CustomerTypeV0 Class Doc Comment
 *
 * @category Class
 * @description Indicates whether to request Consumer or Business offers. Default is Consumer.
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerTypeV0
{
    /**
     * Possible values of this enum
     */
    const CONSUMER = 'Consumer';
    const BUSINESS = 'Business';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONSUMER,
            self::BUSINESS,
        ];
    }
}


