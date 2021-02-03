<?php
/**
 * SellerFreightClass
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Webcom\Amazon\Rest\FulfillmentInboundApi\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * SellerFreightClass Class Doc Comment
 *
 * @category Class
 * @description The freight class of the shipment. For information about determining the freight class, contact the carrier.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellerFreightClass
{
    /**
     * Possible values of this enum
     */
    const _50 = '50';
    const _55 = '55';
    const _60 = '60';
    const _65 = '65';
    const _70 = '70';
    const _77_5 = '77.5';
    const _85 = '85';
    const _92_5 = '92.5';
    const _100 = '100';
    const _110 = '110';
    const _125 = '125';
    const _150 = '150';
    const _175 = '175';
    const _200 = '200';
    const _250 = '250';
    const _300 = '300';
    const _400 = '400';
    const _500 = '500';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_50,
            self::_55,
            self::_60,
            self::_65,
            self::_70,
            self::_77_5,
            self::_85,
            self::_92_5,
            self::_100,
            self::_110,
            self::_125,
            self::_150,
            self::_175,
            self::_200,
            self::_250,
            self::_300,
            self::_400,
            self::_500,
        ];
    }
}


