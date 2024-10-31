<?php
/**
 * Shipment
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\VendorShipmentsApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description A list of one or more shipments with respective details.
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorShipmentIdentifier' => 'string',
        'transactionType' => 'string',
        'buyerReferenceNumber' => 'string',
        'transactionDate' => '\DateTime',
        'currentShipmentStatus' => 'string',
        'currentshipmentStatusDate' => '\DateTime',
        'shipmentStatusDetails' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\ShipmentStatusDetails[]',
        'shipmentCreateDate' => '\DateTime',
        'shipmentConfirmDate' => '\DateTime',
        'packageLabelCreateDate' => '\DateTime',
        'shipmentFreightTerm' => 'string',
        'sellingParty' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification',
        'shipFromParty' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification',
        'shipToParty' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification',
        'shipmentMeasurements' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\TransportShipmentMeasurements',
        'collectFreightPickupDetails' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\CollectFreightPickupDetails',
        'purchaseOrders' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\PurchaseOrders[]',
        'importDetails' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\ImportDetails',
        'containers' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\Containers[]',
        'transportationDetails' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\TransportationDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vendorShipmentIdentifier' => null,
        'transactionType' => null,
        'buyerReferenceNumber' => null,
        'transactionDate' => 'date-time',
        'currentShipmentStatus' => null,
        'currentshipmentStatusDate' => 'date-time',
        'shipmentStatusDetails' => null,
        'shipmentCreateDate' => 'date-time',
        'shipmentConfirmDate' => 'date-time',
        'packageLabelCreateDate' => 'date-time',
        'shipmentFreightTerm' => null,
        'sellingParty' => null,
        'shipFromParty' => null,
        'shipToParty' => null,
        'shipmentMeasurements' => null,
        'collectFreightPickupDetails' => null,
        'purchaseOrders' => null,
        'importDetails' => null,
        'containers' => null,
        'transportationDetails' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'vendorShipmentIdentifier' => 'vendorShipmentIdentifier',
        'transactionType' => 'transactionType',
        'buyerReferenceNumber' => 'buyerReferenceNumber',
        'transactionDate' => 'transactionDate',
        'currentShipmentStatus' => 'currentShipmentStatus',
        'currentshipmentStatusDate' => 'currentshipmentStatusDate',
        'shipmentStatusDetails' => 'shipmentStatusDetails',
        'shipmentCreateDate' => 'shipmentCreateDate',
        'shipmentConfirmDate' => 'shipmentConfirmDate',
        'packageLabelCreateDate' => 'packageLabelCreateDate',
        'shipmentFreightTerm' => 'shipmentFreightTerm',
        'sellingParty' => 'sellingParty',
        'shipFromParty' => 'shipFromParty',
        'shipToParty' => 'shipToParty',
        'shipmentMeasurements' => 'shipmentMeasurements',
        'collectFreightPickupDetails' => 'collectFreightPickupDetails',
        'purchaseOrders' => 'purchaseOrders',
        'importDetails' => 'importDetails',
        'containers' => 'containers',
        'transportationDetails' => 'transportationDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorShipmentIdentifier' => 'setVendorShipmentIdentifier',
        'transactionType' => 'setTransactionType',
        'buyerReferenceNumber' => 'setBuyerReferenceNumber',
        'transactionDate' => 'setTransactionDate',
        'currentShipmentStatus' => 'setCurrentShipmentStatus',
        'currentshipmentStatusDate' => 'setCurrentshipmentStatusDate',
        'shipmentStatusDetails' => 'setShipmentStatusDetails',
        'shipmentCreateDate' => 'setShipmentCreateDate',
        'shipmentConfirmDate' => 'setShipmentConfirmDate',
        'packageLabelCreateDate' => 'setPackageLabelCreateDate',
        'shipmentFreightTerm' => 'setShipmentFreightTerm',
        'sellingParty' => 'setSellingParty',
        'shipFromParty' => 'setShipFromParty',
        'shipToParty' => 'setShipToParty',
        'shipmentMeasurements' => 'setShipmentMeasurements',
        'collectFreightPickupDetails' => 'setCollectFreightPickupDetails',
        'purchaseOrders' => 'setPurchaseOrders',
        'importDetails' => 'setImportDetails',
        'containers' => 'setContainers',
        'transportationDetails' => 'setTransportationDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorShipmentIdentifier' => 'getVendorShipmentIdentifier',
        'transactionType' => 'getTransactionType',
        'buyerReferenceNumber' => 'getBuyerReferenceNumber',
        'transactionDate' => 'getTransactionDate',
        'currentShipmentStatus' => 'getCurrentShipmentStatus',
        'currentshipmentStatusDate' => 'getCurrentshipmentStatusDate',
        'shipmentStatusDetails' => 'getShipmentStatusDetails',
        'shipmentCreateDate' => 'getShipmentCreateDate',
        'shipmentConfirmDate' => 'getShipmentConfirmDate',
        'packageLabelCreateDate' => 'getPackageLabelCreateDate',
        'shipmentFreightTerm' => 'getShipmentFreightTerm',
        'sellingParty' => 'getSellingParty',
        'shipFromParty' => 'getShipFromParty',
        'shipToParty' => 'getShipToParty',
        'shipmentMeasurements' => 'getShipmentMeasurements',
        'collectFreightPickupDetails' => 'getCollectFreightPickupDetails',
        'purchaseOrders' => 'getPurchaseOrders',
        'importDetails' => 'getImportDetails',
        'containers' => 'getContainers',
        'transportationDetails' => 'getTransportationDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const TRANSACTION_TYPE__NEW = 'New';
    const TRANSACTION_TYPE_CANCEL = 'Cancel';
    const CURRENT_SHIPMENT_STATUS_CREATED = 'Created';
    const CURRENT_SHIPMENT_STATUS_TRANSPORTATION_REQUESTED = 'TransportationRequested';
    const CURRENT_SHIPMENT_STATUS_CARRIER_ASSIGNED = 'CarrierAssigned';
    const CURRENT_SHIPMENT_STATUS_SHIPPED = 'Shipped';
    const SHIPMENT_FREIGHT_TERM_COLLECT = 'Collect';
    const SHIPMENT_FREIGHT_TERM_PREPAID = 'Prepaid';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE__NEW,
            self::TRANSACTION_TYPE_CANCEL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentShipmentStatusAllowableValues()
    {
        return [
            self::CURRENT_SHIPMENT_STATUS_CREATED,
            self::CURRENT_SHIPMENT_STATUS_TRANSPORTATION_REQUESTED,
            self::CURRENT_SHIPMENT_STATUS_CARRIER_ASSIGNED,
            self::CURRENT_SHIPMENT_STATUS_SHIPPED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentFreightTermAllowableValues()
    {
        return [
            self::SHIPMENT_FREIGHT_TERM_COLLECT,
            self::SHIPMENT_FREIGHT_TERM_PREPAID,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['vendorShipmentIdentifier'] = $data['vendorShipmentIdentifier'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['buyerReferenceNumber'] = $data['buyerReferenceNumber'] ?? null;
        $this->container['transactionDate'] = $data['transactionDate'] ?? null;
        $this->container['currentShipmentStatus'] = $data['currentShipmentStatus'] ?? null;
        $this->container['currentshipmentStatusDate'] = $data['currentshipmentStatusDate'] ?? null;
        $this->container['shipmentStatusDetails'] = $data['shipmentStatusDetails'] ?? null;
        $this->container['shipmentCreateDate'] = $data['shipmentCreateDate'] ?? null;
        $this->container['shipmentConfirmDate'] = $data['shipmentConfirmDate'] ?? null;
        $this->container['packageLabelCreateDate'] = $data['packageLabelCreateDate'] ?? null;
        $this->container['shipmentFreightTerm'] = $data['shipmentFreightTerm'] ?? null;
        $this->container['sellingParty'] = $data['sellingParty'] ?? null;
        $this->container['shipFromParty'] = $data['shipFromParty'] ?? null;
        $this->container['shipToParty'] = $data['shipToParty'] ?? null;
        $this->container['shipmentMeasurements'] = $data['shipmentMeasurements'] ?? null;
        $this->container['collectFreightPickupDetails'] = $data['collectFreightPickupDetails'] ?? null;
        $this->container['purchaseOrders'] = $data['purchaseOrders'] ?? null;
        $this->container['importDetails'] = $data['importDetails'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
        $this->container['transportationDetails'] = $data['transportationDetails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['vendorShipmentIdentifier'] === null) {
            $invalidProperties[] = "'vendorShipmentIdentifier' can't be null";
        }
        if ($this->container['transactionType'] === null) {
            $invalidProperties[] = "'transactionType' can't be null";
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transactionType']) && !in_array($this->container['transactionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transactionType', must be one of '%s'",
                $this->container['transactionType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transactionDate'] === null) {
            $invalidProperties[] = "'transactionDate' can't be null";
        }
        $allowedValues = $this->getCurrentShipmentStatusAllowableValues();
        if (!is_null($this->container['currentShipmentStatus']) && !in_array($this->container['currentShipmentStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currentShipmentStatus', must be one of '%s'",
                $this->container['currentShipmentStatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentFreightTermAllowableValues();
        if (!is_null($this->container['shipmentFreightTerm']) && !in_array($this->container['shipmentFreightTerm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipmentFreightTerm', must be one of '%s'",
                $this->container['shipmentFreightTerm'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sellingParty'] === null) {
            $invalidProperties[] = "'sellingParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
        }
        if ($this->container['shipToParty'] === null) {
            $invalidProperties[] = "'shipToParty' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets vendorShipmentIdentifier
     *
     * @return string
     */
    public function getVendorShipmentIdentifier()
    {
        return $this->container['vendorShipmentIdentifier'];
    }

    /**
     * Sets vendorShipmentIdentifier
     *
     * @param string $vendorShipmentIdentifier Unique Transportation ID created by Vendor (Should not be used over the last 365 days).
     *
     * @return self
     */
    public function setVendorShipmentIdentifier($vendorShipmentIdentifier)
    {
        $this->container['vendorShipmentIdentifier'] = $vendorShipmentIdentifier;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType Indicates the type of  transportation request such as (New,Cancel,Confirm and PackageLabelRequest). Each transactiontype has a unique set of operation and there are corresponding details to be populated for each operation.
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!in_array($transactionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transactionType', must be one of '%s'",
                    $transactionType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets buyerReferenceNumber
     *
     * @return string|null
     */
    public function getBuyerReferenceNumber()
    {
        return $this->container['buyerReferenceNumber'];
    }

    /**
     * Sets buyerReferenceNumber
     *
     * @param string|null $buyerReferenceNumber The buyer Reference Number is a unique identifier generated by buyer for all Collect/WePay shipments when you submit a transportation request. This field is mandatory for Collect/WePay shipments.
     *
     * @return self
     */
    public function setBuyerReferenceNumber($buyerReferenceNumber)
    {
        $this->container['buyerReferenceNumber'] = $buyerReferenceNumber;

        return $this;
    }

    /**
     * Gets transactionDate
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     *
     * @param \DateTime $transactionDate Date on which the transportation request was submitted.
     *
     * @return self
     */
    public function setTransactionDate($transactionDate)
    {
        $this->container['transactionDate'] = $transactionDate;

        return $this;
    }

    /**
     * Gets currentShipmentStatus
     *
     * @return string|null
     */
    public function getCurrentShipmentStatus()
    {
        return $this->container['currentShipmentStatus'];
    }

    /**
     * Sets currentShipmentStatus
     *
     * @param string|null $currentShipmentStatus Indicates the current shipment status.
     *
     * @return self
     */
    public function setCurrentShipmentStatus($currentShipmentStatus)
    {
        $allowedValues = $this->getCurrentShipmentStatusAllowableValues();
        if (!is_null($currentShipmentStatus) && !in_array($currentShipmentStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currentShipmentStatus', must be one of '%s'",
                    $currentShipmentStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currentShipmentStatus'] = $currentShipmentStatus;

        return $this;
    }

    /**
     * Gets currentshipmentStatusDate
     *
     * @return \DateTime|null
     */
    public function getCurrentshipmentStatusDate()
    {
        return $this->container['currentshipmentStatusDate'];
    }

    /**
     * Sets currentshipmentStatusDate
     *
     * @param \DateTime|null $currentshipmentStatusDate Date and time when the last status was updated.
     *
     * @return self
     */
    public function setCurrentshipmentStatusDate($currentshipmentStatusDate)
    {
        $this->container['currentshipmentStatusDate'] = $currentshipmentStatusDate;

        return $this;
    }

    /**
     * Gets shipmentStatusDetails
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\ShipmentStatusDetails[]|null
     */
    public function getShipmentStatusDetails()
    {
        return $this->container['shipmentStatusDetails'];
    }

    /**
     * Sets shipmentStatusDetails
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\ShipmentStatusDetails[]|null $shipmentStatusDetails Indicates the list of current shipment status details and when the last update was received from carrier this is available on shipment Details response.
     *
     * @return self
     */
    public function setShipmentStatusDetails($shipmentStatusDetails)
    {
        $this->container['shipmentStatusDetails'] = $shipmentStatusDetails;

        return $this;
    }

    /**
     * Gets shipmentCreateDate
     *
     * @return \DateTime|null
     */
    public function getShipmentCreateDate()
    {
        return $this->container['shipmentCreateDate'];
    }

    /**
     * Sets shipmentCreateDate
     *
     * @param \DateTime|null $shipmentCreateDate The date and time of the shipment request created by vendor.
     *
     * @return self
     */
    public function setShipmentCreateDate($shipmentCreateDate)
    {
        $this->container['shipmentCreateDate'] = $shipmentCreateDate;

        return $this;
    }

    /**
     * Gets shipmentConfirmDate
     *
     * @return \DateTime|null
     */
    public function getShipmentConfirmDate()
    {
        return $this->container['shipmentConfirmDate'];
    }

    /**
     * Sets shipmentConfirmDate
     *
     * @param \DateTime|null $shipmentConfirmDate The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Buyer destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future.
     *
     * @return self
     */
    public function setShipmentConfirmDate($shipmentConfirmDate)
    {
        $this->container['shipmentConfirmDate'] = $shipmentConfirmDate;

        return $this;
    }

    /**
     * Gets packageLabelCreateDate
     *
     * @return \DateTime|null
     */
    public function getPackageLabelCreateDate()
    {
        return $this->container['packageLabelCreateDate'];
    }

    /**
     * Sets packageLabelCreateDate
     *
     * @param \DateTime|null $packageLabelCreateDate The date and time of the package label created for the shipment by buyer.
     *
     * @return self
     */
    public function setPackageLabelCreateDate($packageLabelCreateDate)
    {
        $this->container['packageLabelCreateDate'] = $packageLabelCreateDate;

        return $this;
    }

    /**
     * Gets shipmentFreightTerm
     *
     * @return string|null
     */
    public function getShipmentFreightTerm()
    {
        return $this->container['shipmentFreightTerm'];
    }

    /**
     * Sets shipmentFreightTerm
     *
     * @param string|null $shipmentFreightTerm Indicates if this transportation request is WePay/Collect or TheyPay/Prepaid. This is a mandatory information.
     *
     * @return self
     */
    public function setShipmentFreightTerm($shipmentFreightTerm)
    {
        $allowedValues = $this->getShipmentFreightTermAllowableValues();
        if (!is_null($shipmentFreightTerm) && !in_array($shipmentFreightTerm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipmentFreightTerm', must be one of '%s'",
                    $shipmentFreightTerm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipmentFreightTerm'] = $shipmentFreightTerm;

        return $this;
    }

    /**
     * Gets sellingParty
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['sellingParty'];
    }

    /**
     * Sets sellingParty
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification $sellingParty sellingParty
     *
     * @return self
     */
    public function setSellingParty($sellingParty)
    {
        $this->container['sellingParty'] = $sellingParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification $shipFromParty shipFromParty
     *
     * @return self
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets shipToParty
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['shipToParty'];
    }

    /**
     * Sets shipToParty
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PartyIdentification $shipToParty shipToParty
     *
     * @return self
     */
    public function setShipToParty($shipToParty)
    {
        $this->container['shipToParty'] = $shipToParty;

        return $this;
    }

    /**
     * Gets shipmentMeasurements
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\TransportShipmentMeasurements|null
     */
    public function getShipmentMeasurements()
    {
        return $this->container['shipmentMeasurements'];
    }

    /**
     * Sets shipmentMeasurements
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\TransportShipmentMeasurements|null $shipmentMeasurements shipmentMeasurements
     *
     * @return self
     */
    public function setShipmentMeasurements($shipmentMeasurements)
    {
        $this->container['shipmentMeasurements'] = $shipmentMeasurements;

        return $this;
    }

    /**
     * Gets collectFreightPickupDetails
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\CollectFreightPickupDetails|null
     */
    public function getCollectFreightPickupDetails()
    {
        return $this->container['collectFreightPickupDetails'];
    }

    /**
     * Sets collectFreightPickupDetails
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\CollectFreightPickupDetails|null $collectFreightPickupDetails collectFreightPickupDetails
     *
     * @return self
     */
    public function setCollectFreightPickupDetails($collectFreightPickupDetails)
    {
        $this->container['collectFreightPickupDetails'] = $collectFreightPickupDetails;

        return $this;
    }

    /**
     * Gets purchaseOrders
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PurchaseOrders[]|null
     */
    public function getPurchaseOrders()
    {
        return $this->container['purchaseOrders'];
    }

    /**
     * Sets purchaseOrders
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\PurchaseOrders[]|null $purchaseOrders Indicates the purchase orders involved for the transportation request. This group is an array create 1 for each PO and list their corresponding items. This information is used for deciding the route,truck allocation and storage efficiently. This is a mandatory information for Buyer performing transportation from vendor warehouse (WePay/Collect)
     *
     * @return self
     */
    public function setPurchaseOrders($purchaseOrders)
    {
        $this->container['purchaseOrders'] = $purchaseOrders;

        return $this;
    }

    /**
     * Gets importDetails
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\ImportDetails|null
     */
    public function getImportDetails()
    {
        return $this->container['importDetails'];
    }

    /**
     * Sets importDetails
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\ImportDetails|null $importDetails importDetails
     *
     * @return self
     */
    public function setImportDetails($importDetails)
    {
        $this->container['importDetails'] = $importDetails;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Containers[]|null
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Containers[]|null $containers A list of the items in this transportation and their associated inner container details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     *
     * @return self
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets transportationDetails
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\TransportationDetails|null
     */
    public function getTransportationDetails()
    {
        return $this->container['transportationDetails'];
    }

    /**
     * Sets transportationDetails
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\TransportationDetails|null $transportationDetails transportationDetails
     *
     * @return self
     */
    public function setTransportationDetails($transportationDetails)
    {
        $this->container['transportationDetails'] = $transportationDetails;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


