<?php
/**
 * CdsMarketplaceApiModelsOffersSubmissionApiShipping
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
 * CdsMarketplaceApiModelsOffersSubmissionApiShipping Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CdsMarketplaceApiModelsOffersSubmissionApiShipping implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cds.MarketplaceApi.Models.Offers.SubmissionApi.Shipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_mode' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiShippingDeliveryMode',
        'charges' => 'double',
        'additional_charges' => 'double',
        'min_lead_time' => 'int',
        'max_lead_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_mode' => null,
        'charges' => 'double',
        'additional_charges' => 'double',
        'min_lead_time' => 'int32',
        'max_lead_time' => 'int32'
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
        'delivery_mode' => 'delivery_mode',
        'charges' => 'charges',
        'additional_charges' => 'additional_charges',
        'min_lead_time' => 'min_lead_time',
        'max_lead_time' => 'max_lead_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_mode' => 'setDeliveryMode',
        'charges' => 'setCharges',
        'additional_charges' => 'setAdditionalCharges',
        'min_lead_time' => 'setMinLeadTime',
        'max_lead_time' => 'setMaxLeadTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_mode' => 'getDeliveryMode',
        'charges' => 'getCharges',
        'additional_charges' => 'getAdditionalCharges',
        'min_lead_time' => 'getMinLeadTime',
        'max_lead_time' => 'getMaxLeadTime'
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
        $this->container['delivery_mode'] = $data['delivery_mode'] ?? null;
        $this->container['charges'] = $data['charges'] ?? null;
        $this->container['additional_charges'] = $data['additional_charges'] ?? null;
        $this->container['min_lead_time'] = $data['min_lead_time'] ?? null;
        $this->container['max_lead_time'] = $data['max_lead_time'] ?? null;
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
     * Gets delivery_mode
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiShippingDeliveryMode|null
     */
    public function getDeliveryMode()
    {
        return $this->container['delivery_mode'];
    }

    /**
     * Sets delivery_mode
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiShippingDeliveryMode|null $delivery_mode delivery_mode
     *
     * @return self
     */
    public function setDeliveryMode($delivery_mode)
    {
        $this->container['delivery_mode'] = $delivery_mode;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return double|null
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param double|null $charges charges
     *
     * @return self
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets additional_charges
     *
     * @return double|null
     */
    public function getAdditionalCharges()
    {
        return $this->container['additional_charges'];
    }

    /**
     * Sets additional_charges
     *
     * @param double|null $additional_charges additional_charges
     *
     * @return self
     */
    public function setAdditionalCharges($additional_charges)
    {
        $this->container['additional_charges'] = $additional_charges;

        return $this;
    }

    /**
     * Gets min_lead_time
     *
     * @return int|null
     */
    public function getMinLeadTime()
    {
        return $this->container['min_lead_time'];
    }

    /**
     * Sets min_lead_time
     *
     * @param int|null $min_lead_time min_lead_time
     *
     * @return self
     */
    public function setMinLeadTime($min_lead_time)
    {
        $this->container['min_lead_time'] = $min_lead_time;

        return $this;
    }

    /**
     * Gets max_lead_time
     *
     * @return int|null
     */
    public function getMaxLeadTime()
    {
        return $this->container['max_lead_time'];
    }

    /**
     * Sets max_lead_time
     *
     * @param int|null $max_lead_time max_lead_time
     *
     * @return self
     */
    public function setMaxLeadTime($max_lead_time)
    {
        $this->container['max_lead_time'] = $max_lead_time;

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


