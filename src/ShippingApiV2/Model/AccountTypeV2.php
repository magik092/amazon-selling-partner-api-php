<?php
/**
 * AccountTypeV2
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ShippingApiV2\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * AccountTypeV2 Class Doc Comment
 *
 * @category Class
 * @description Shipper Account Type.
 * @package  Webcom\Amazon\Rest\ShippingApiV2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountTypeV2
{
    /**
     * Possible values of this enum
     */
    const SHIPPER_ACCOUNT = 'SHIPPER_ACCOUNT';
    const SHIPPER_ACCOUNT_WITH_INVOICE = 'SHIPPER_ACCOUNT_WITH_INVOICE';
    const AMAZON_ACCOUNT = 'AMAZON_ACCOUNT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPER_ACCOUNT,
            self::SHIPPER_ACCOUNT_WITH_INVOICE,
            self::AMAZON_ACCOUNT,
        ];
    }
}

