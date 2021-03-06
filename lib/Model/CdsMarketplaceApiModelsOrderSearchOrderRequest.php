<?php
/**
 * CdsMarketplaceApiModelsOrderSearchOrderRequest
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
 * CdsMarketplaceApiModelsOrderSearchOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CdsMarketplaceApiModelsOrderSearchOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cds.MarketplaceApi.Models.Order.SearchOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fetch_order_lines' => 'bool',
        'states' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderState[]',
        'begin_creation_date' => '\DateTime',
        'end_creation_date' => '\DateTime',
        'begin_modification_date' => '\DateTime',
        'end_modification_date' => '\DateTime',
        'include_external_fbc_site_id' => 'bool',
        'order_reference_list' => 'string[]',
        'partner_order_ref' => 'string',
        'corporation_code' => 'string',
        'order_type' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderType',
        'fetch_parcels' => 'bool',
        'country' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderCountry'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fetch_order_lines' => null,
        'states' => null,
        'begin_creation_date' => 'date-time',
        'end_creation_date' => 'date-time',
        'begin_modification_date' => 'date-time',
        'end_modification_date' => 'date-time',
        'include_external_fbc_site_id' => null,
        'order_reference_list' => null,
        'partner_order_ref' => null,
        'corporation_code' => null,
        'order_type' => null,
        'fetch_parcels' => null,
        'country' => null
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
        'fetch_order_lines' => 'fetch_order_lines',
        'states' => 'states',
        'begin_creation_date' => 'begin_creation_date',
        'end_creation_date' => 'end_creation_date',
        'begin_modification_date' => 'begin_modification_date',
        'end_modification_date' => 'end_modification_date',
        'include_external_fbc_site_id' => 'include_external_fbc_site_id',
        'order_reference_list' => 'order_reference_list',
        'partner_order_ref' => 'partner_order_ref',
        'corporation_code' => 'corporation_code',
        'order_type' => 'order_type',
        'fetch_parcels' => 'fetch_parcels',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fetch_order_lines' => 'setFetchOrderLines',
        'states' => 'setStates',
        'begin_creation_date' => 'setBeginCreationDate',
        'end_creation_date' => 'setEndCreationDate',
        'begin_modification_date' => 'setBeginModificationDate',
        'end_modification_date' => 'setEndModificationDate',
        'include_external_fbc_site_id' => 'setIncludeExternalFbcSiteId',
        'order_reference_list' => 'setOrderReferenceList',
        'partner_order_ref' => 'setPartnerOrderRef',
        'corporation_code' => 'setCorporationCode',
        'order_type' => 'setOrderType',
        'fetch_parcels' => 'setFetchParcels',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fetch_order_lines' => 'getFetchOrderLines',
        'states' => 'getStates',
        'begin_creation_date' => 'getBeginCreationDate',
        'end_creation_date' => 'getEndCreationDate',
        'begin_modification_date' => 'getBeginModificationDate',
        'end_modification_date' => 'getEndModificationDate',
        'include_external_fbc_site_id' => 'getIncludeExternalFbcSiteId',
        'order_reference_list' => 'getOrderReferenceList',
        'partner_order_ref' => 'getPartnerOrderRef',
        'corporation_code' => 'getCorporationCode',
        'order_type' => 'getOrderType',
        'fetch_parcels' => 'getFetchParcels',
        'country' => 'getCountry'
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
        $this->container['fetch_order_lines'] = $data['fetch_order_lines'] ?? null;
        $this->container['states'] = $data['states'] ?? null;
        $this->container['begin_creation_date'] = $data['begin_creation_date'] ?? null;
        $this->container['end_creation_date'] = $data['end_creation_date'] ?? null;
        $this->container['begin_modification_date'] = $data['begin_modification_date'] ?? null;
        $this->container['end_modification_date'] = $data['end_modification_date'] ?? null;
        $this->container['include_external_fbc_site_id'] = $data['include_external_fbc_site_id'] ?? null;
        $this->container['order_reference_list'] = $data['order_reference_list'] ?? null;
        $this->container['partner_order_ref'] = $data['partner_order_ref'] ?? null;
        $this->container['corporation_code'] = $data['corporation_code'] ?? null;
        $this->container['order_type'] = $data['order_type'] ?? null;
        $this->container['fetch_parcels'] = $data['fetch_parcels'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
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
     * Gets fetch_order_lines
     *
     * @return bool|null
     */
    public function getFetchOrderLines()
    {
        return $this->container['fetch_order_lines'];
    }

    /**
     * Sets fetch_order_lines
     *
     * @param bool|null $fetch_order_lines fetch_order_lines
     *
     * @return self
     */
    public function setFetchOrderLines($fetch_order_lines)
    {
        $this->container['fetch_order_lines'] = $fetch_order_lines;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderState[]|null
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderState[]|null $states states
     *
     * @return self
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets begin_creation_date
     *
     * @return \DateTime|null
     */
    public function getBeginCreationDate()
    {
        return $this->container['begin_creation_date'];
    }

    /**
     * Sets begin_creation_date
     *
     * @param \DateTime|null $begin_creation_date begin_creation_date
     *
     * @return self
     */
    public function setBeginCreationDate($begin_creation_date)
    {
        $this->container['begin_creation_date'] = $begin_creation_date;

        return $this;
    }

    /**
     * Gets end_creation_date
     *
     * @return \DateTime|null
     */
    public function getEndCreationDate()
    {
        return $this->container['end_creation_date'];
    }

    /**
     * Sets end_creation_date
     *
     * @param \DateTime|null $end_creation_date end_creation_date
     *
     * @return self
     */
    public function setEndCreationDate($end_creation_date)
    {
        $this->container['end_creation_date'] = $end_creation_date;

        return $this;
    }

    /**
     * Gets begin_modification_date
     *
     * @return \DateTime|null
     */
    public function getBeginModificationDate()
    {
        return $this->container['begin_modification_date'];
    }

    /**
     * Sets begin_modification_date
     *
     * @param \DateTime|null $begin_modification_date begin_modification_date
     *
     * @return self
     */
    public function setBeginModificationDate($begin_modification_date)
    {
        $this->container['begin_modification_date'] = $begin_modification_date;

        return $this;
    }

    /**
     * Gets end_modification_date
     *
     * @return \DateTime|null
     */
    public function getEndModificationDate()
    {
        return $this->container['end_modification_date'];
    }

    /**
     * Sets end_modification_date
     *
     * @param \DateTime|null $end_modification_date end_modification_date
     *
     * @return self
     */
    public function setEndModificationDate($end_modification_date)
    {
        $this->container['end_modification_date'] = $end_modification_date;

        return $this;
    }

    /**
     * Gets include_external_fbc_site_id
     *
     * @return bool|null
     */
    public function getIncludeExternalFbcSiteId()
    {
        return $this->container['include_external_fbc_site_id'];
    }

    /**
     * Sets include_external_fbc_site_id
     *
     * @param bool|null $include_external_fbc_site_id include_external_fbc_site_id
     *
     * @return self
     */
    public function setIncludeExternalFbcSiteId($include_external_fbc_site_id)
    {
        $this->container['include_external_fbc_site_id'] = $include_external_fbc_site_id;

        return $this;
    }

    /**
     * Gets order_reference_list
     *
     * @return string[]|null
     */
    public function getOrderReferenceList()
    {
        return $this->container['order_reference_list'];
    }

    /**
     * Sets order_reference_list
     *
     * @param string[]|null $order_reference_list order_reference_list
     *
     * @return self
     */
    public function setOrderReferenceList($order_reference_list)
    {
        $this->container['order_reference_list'] = $order_reference_list;

        return $this;
    }

    /**
     * Gets partner_order_ref
     *
     * @return string|null
     */
    public function getPartnerOrderRef()
    {
        return $this->container['partner_order_ref'];
    }

    /**
     * Sets partner_order_ref
     *
     * @param string|null $partner_order_ref partner_order_ref
     *
     * @return self
     */
    public function setPartnerOrderRef($partner_order_ref)
    {
        $this->container['partner_order_ref'] = $partner_order_ref;

        return $this;
    }

    /**
     * Gets corporation_code
     *
     * @return string|null
     */
    public function getCorporationCode()
    {
        return $this->container['corporation_code'];
    }

    /**
     * Sets corporation_code
     *
     * @param string|null $corporation_code corporation_code
     *
     * @return self
     */
    public function setCorporationCode($corporation_code)
    {
        $this->container['corporation_code'] = $corporation_code;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderType|null
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderType|null $order_type order_type
     *
     * @return self
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets fetch_parcels
     *
     * @return bool|null
     */
    public function getFetchParcels()
    {
        return $this->container['fetch_parcels'];
    }

    /**
     * Sets fetch_parcels
     *
     * @param bool|null $fetch_parcels fetch_parcels
     *
     * @return self
     */
    public function setFetchParcels($fetch_parcels)
    {
        $this->container['fetch_parcels'] = $fetch_parcels;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderCountry|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderCountry|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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


