<?php
/**
 * CdsMarketplaceApiModelsSellerPaymentsCommissionDetail
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Order Management
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CdsMarketplaceApiModelsSellerPaymentsCommissionDetail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CdsMarketplaceApiModelsSellerPaymentsCommissionDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cds.MarketplaceApi.Models.SellerPayments.CommissionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commission_amount' => 'double',
        'payment_facility_amount' => 'double',
        'commission4x_amount' => 'double',
        'is_commission4x_simulation_displayed' => 'bool',
        'total' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commission_amount' => 'double',
        'payment_facility_amount' => 'double',
        'commission4x_amount' => 'double',
        'is_commission4x_simulation_displayed' => null,
        'total' => 'double'
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
        'commission_amount' => 'commission_amount',
        'payment_facility_amount' => 'payment_facility_amount',
        'commission4x_amount' => 'commission4x_amount',
        'is_commission4x_simulation_displayed' => 'is_commission4x_simulation_displayed',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commission_amount' => 'setCommissionAmount',
        'payment_facility_amount' => 'setPaymentFacilityAmount',
        'commission4x_amount' => 'setCommission4xAmount',
        'is_commission4x_simulation_displayed' => 'setIsCommission4xSimulationDisplayed',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commission_amount' => 'getCommissionAmount',
        'payment_facility_amount' => 'getPaymentFacilityAmount',
        'commission4x_amount' => 'getCommission4xAmount',
        'is_commission4x_simulation_displayed' => 'getIsCommission4xSimulationDisplayed',
        'total' => 'getTotal'
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
        $this->container['commission_amount'] = $data['commission_amount'] ?? null;
        $this->container['payment_facility_amount'] = $data['payment_facility_amount'] ?? null;
        $this->container['commission4x_amount'] = $data['commission4x_amount'] ?? null;
        $this->container['is_commission4x_simulation_displayed'] = $data['is_commission4x_simulation_displayed'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets commission_amount
     *
     * @return double|null
     */
    public function getCommissionAmount()
    {
        return $this->container['commission_amount'];
    }

    /**
     * Sets commission_amount
     *
     * @param double|null $commission_amount commission_amount
     *
     * @return self
     */
    public function setCommissionAmount($commission_amount)
    {
        $this->container['commission_amount'] = $commission_amount;

        return $this;
    }

    /**
     * Gets payment_facility_amount
     *
     * @return double|null
     */
    public function getPaymentFacilityAmount()
    {
        return $this->container['payment_facility_amount'];
    }

    /**
     * Sets payment_facility_amount
     *
     * @param double|null $payment_facility_amount payment_facility_amount
     *
     * @return self
     */
    public function setPaymentFacilityAmount($payment_facility_amount)
    {
        $this->container['payment_facility_amount'] = $payment_facility_amount;

        return $this;
    }

    /**
     * Gets commission4x_amount
     *
     * @return double|null
     */
    public function getCommission4xAmount()
    {
        return $this->container['commission4x_amount'];
    }

    /**
     * Sets commission4x_amount
     *
     * @param double|null $commission4x_amount commission4x_amount
     *
     * @return self
     */
    public function setCommission4xAmount($commission4x_amount)
    {
        $this->container['commission4x_amount'] = $commission4x_amount;

        return $this;
    }

    /**
     * Gets is_commission4x_simulation_displayed
     *
     * @return bool|null
     */
    public function getIsCommission4xSimulationDisplayed()
    {
        return $this->container['is_commission4x_simulation_displayed'];
    }

    /**
     * Sets is_commission4x_simulation_displayed
     *
     * @param bool|null $is_commission4x_simulation_displayed is_commission4x_simulation_displayed
     *
     * @return self
     */
    public function setIsCommission4xSimulationDisplayed($is_commission4x_simulation_displayed)
    {
        $this->container['is_commission4x_simulation_displayed'] = $is_commission4x_simulation_displayed;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


