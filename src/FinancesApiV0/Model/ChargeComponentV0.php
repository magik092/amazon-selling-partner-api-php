<?php
/**
 * ChargeComponentV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances provides financial information that is relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Webcom\Amazon\Rest\FinancesApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ChargeComponentV0 Class Doc Comment
 *
 * @category Class
 * @description A charge on the seller&#39;s account.  Possible values:  * &#x60;Principal&#x60;: The selling price of the order item, which is equal to the selling price of the item multiplied by the quantity ordered.  * &#x60;Tax&#x60;: The tax on the principal that is collected by the seller.  * &#x60;MarketplaceFacilitatorTax-Principal&#x60;: The tax that is withheld on the principal.  * &#x60;MarketplaceFacilitatorTax-Shipping&#x60;: The tax that is withheld on the &#x60;ShippingCharge&#x60;.  * &#x60;MarketplaceFacilitatorTax-Giftwrap&#x60;: The tax that is withheld on the Giftwrap charge.  * &#x60;MarketplaceFacilitatorTax-Other&#x60;: The tax that is withheld on other miscellaneous charges.  * &#x60;Discount&#x60;: The promotional discount for an order item.  * &#x60;TaxDiscount&#x60;: The tax that is deducted for promotional rebates.  * &#x60;CODItemCharge&#x60;: The COD charge for an order item.  * &#x60;CODItemTaxCharge&#x60;: The tax that is collected by the seller on a &#x60;CODItemCharge&#x60;.  * &#x60;CODOrderCharge&#x60;: The COD charge for an order.  * &#x60;CODOrderTaxCharge&#x60;: The tax that is collected by the seller on a &#x60;CODOrderCharge&#x60;.  * &#x60;CODShippingCharge&#x60;: Shipping charges for a COD order.  * &#x60;CODShippingTaxCharge&#x60;: The tax that is collected by the seller on a &#x60;CODShippingCharge&#x60;.  * &#x60;ShippingCharge&#x60;: The shipping charge.  * &#x60;ShippingTax&#x60;: The tax that is collected by the seller on a &#x60;ShippingCharge&#x60;.  * &#x60;Goodwill&#x60;: The amount of money that is given to a buyer as a gesture of goodwill or to compensate for pain and suffering in the buying experience.  * &#x60;Giftwrap&#x60;: The gift wrap charge.  * &#x60;GiftwrapTax&#x60;: The tax that is collected by the seller on a gift wrap charge.  * &#x60;RestockingFee&#x60;: The charge that is applied to the buyer when returning a product in certain categories.  * &#x60;ReturnShipping&#x60;: The amount of money that is given to the buyer to compensate for shipping the item back if we are at fault.  * &#x60;PointsFee&#x60;: The value of Amazon Points deducted from the refund if the buyer does not have enough Amazon Points to cover the deduction.  * &#x60;GenericDeduction&#x60;: A generic bad debt deduction.  * &#x60;FreeReplacementReturnShipping&#x60;: The compensation for return shipping when a buyer receives the wrong item, requests a free replacement, and returns the incorrect item.  * &#x60;PaymentMethodFee&#x60;: The fee that is collected for certain payment methods in certain marketplaces.  * &#x60;ExportCharge&#x60;: The export duty that is charged when an item is shipped to an international destination as part of the Amazon Global program.  * &#x60;SAFE-TReimbursement&#x60;: The SAFE-T claim amount for the item.  * &#x60;TCS-CGST&#x60;: Tax Collected at Source (TCS) for Central Goods and Services Tax (CGST).  * &#x60;TCS-SGST&#x60;: Tax Collected at Source for State Goods and Services Tax (SGST).  * &#x60;TCS-IGST&#x60;: Tax Collected at Source for Integrated Goods and Services Tax (IGST).  * &#x60;TCS-UTGST&#x60;: Tax Collected at Source for Union Territories Goods and Services Tax (UTGST).
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ChargeComponentV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chargeType' => 'string',
        'chargeAmount' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chargeType' => null,
        'chargeAmount' => null
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
        'chargeType' => 'ChargeType',
        'chargeAmount' => 'ChargeAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chargeType' => 'setChargeType',
        'chargeAmount' => 'setChargeAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chargeType' => 'getChargeType',
        'chargeAmount' => 'getChargeAmount'
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
        $this->container['chargeType'] = $data['chargeType'] ?? null;
        $this->container['chargeAmount'] = $data['chargeAmount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets chargeType
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
     * Sets chargeType
     *
     * @param string|null $chargeType The type of charge.
     *
     * @return self
     */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;

        return $this;
    }

    /**
     * Gets chargeAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null
     */
    public function getChargeAmount()
    {
        return $this->container['chargeAmount'];
    }

    /**
     * Sets chargeAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\CurrencyV0|null $chargeAmount chargeAmount
     *
     * @return self
     */
    public function setChargeAmount($chargeAmount)
    {
        $this->container['chargeAmount'] = $chargeAmount;

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


