<?php
/**
 * FulfillmentAction
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
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

namespace Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FulfillmentAction Class Doc Comment
 *
 * @category Class
 * @description Specifies whether the fulfillment order should ship now or have an order hold put on it.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApiV20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentAction
{
    /**
     * Possible values of this enum
     */
    const SHIP = 'Ship';
    const HOLD = 'Hold';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIP,
            self::HOLD,
        ];
    }
}

