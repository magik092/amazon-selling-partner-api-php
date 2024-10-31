<?php
/**
 * OwnerConstraint20240320
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentInboundApi20240320\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * OwnerConstraint20240320 Class Doc Comment
 *
 * @category Class
 * @description A constraint that can apply to an individual owner. If no constraint is specified, both &#x60;AMAZON&#x60; and &#x60;SELLER&#x60; are acceptable.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OwnerConstraint20240320
{
    /**
     * Possible values of this enum
     */
    const AMAZON_ONLY = 'AMAZON_ONLY';
    const NONE_ONLY = 'NONE_ONLY';
    const SELLER_ONLY = 'SELLER_ONLY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON_ONLY,
            self::NONE_ONLY,
            self::SELLER_ONLY,
        ];
    }
}


