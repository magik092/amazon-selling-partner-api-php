<?php
/**
 * ReasonComment20240320
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
 * ReasonComment20240320 Class Doc Comment
 *
 * @category Class
 * @description Reason for cancelling or rescheduling a self-ship appointment.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi20240320
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReasonComment20240320
{
    /**
     * Possible values of this enum
     */
    const APPOINTMENT_REQUESTED_BY_MISTAKE = 'APPOINTMENT_REQUESTED_BY_MISTAKE';
    const VEHICLE_DELAY = 'VEHICLE_DELAY';
    const SLOT_NOT_SUITABLE = 'SLOT_NOT_SUITABLE';
    const OUTSIDE_CARRIER_BUSINESS_HOURS = 'OUTSIDE_CARRIER_BUSINESS_HOURS';
    const UNFAVOURABLE_EXTERNAL_CONDITIONS = 'UNFAVOURABLE_EXTERNAL_CONDITIONS';
    const PROCUREMENT_DELAY = 'PROCUREMENT_DELAY';
    const SHIPPING_PLAN_CHANGED = 'SHIPPING_PLAN_CHANGED';
    const INCREASED_QUANTITY = 'INCREASED_QUANTITY';
    const OTHER = 'OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPOINTMENT_REQUESTED_BY_MISTAKE,
            self::VEHICLE_DELAY,
            self::SLOT_NOT_SUITABLE,
            self::OUTSIDE_CARRIER_BUSINESS_HOURS,
            self::UNFAVOURABLE_EXTERNAL_CONDITIONS,
            self::PROCUREMENT_DELAY,
            self::SHIPPING_PLAN_CHANGED,
            self::INCREASED_QUANTITY,
            self::OTHER,
        ];
    }
}


