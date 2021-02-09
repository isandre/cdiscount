<?php
/**
 * CdsMarketplaceApiModelsOffersSearchOffersRequest
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
 * CdsMarketplaceApiModelsOffersSearchOffersRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CdsMarketplaceApiModelsOffersSearchOffersRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cds.MarketplaceApi.Models.Offers.SearchOffersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_product_id_list' => 'string[]',
        'sort_order' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferSortOrder',
        'state_filter' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferStateRequest',
        'condition_filter' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferConditionRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_product_id_list' => null,
        'sort_order' => null,
        'state_filter' => null,
        'condition_filter' => null
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
        'seller_product_id_list' => 'seller_product_id_list',
        'sort_order' => 'sort_order',
        'state_filter' => 'state_filter',
        'condition_filter' => 'condition_filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_product_id_list' => 'setSellerProductIdList',
        'sort_order' => 'setSortOrder',
        'state_filter' => 'setStateFilter',
        'condition_filter' => 'setConditionFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_product_id_list' => 'getSellerProductIdList',
        'sort_order' => 'getSortOrder',
        'state_filter' => 'getStateFilter',
        'condition_filter' => 'getConditionFilter'
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
        $this->container['seller_product_id_list'] = $data['seller_product_id_list'] ?? null;
        $this->container['sort_order'] = $data['sort_order'] ?? null;
        $this->container['state_filter'] = $data['state_filter'] ?? null;
        $this->container['condition_filter'] = $data['condition_filter'] ?? null;
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
     * Gets seller_product_id_list
     *
     * @return string[]|null
     */
    public function getSellerProductIdList()
    {
        return $this->container['seller_product_id_list'];
    }

    /**
     * Sets seller_product_id_list
     *
     * @param string[]|null $seller_product_id_list seller_product_id_list
     *
     * @return self
     */
    public function setSellerProductIdList($seller_product_id_list)
    {
        $this->container['seller_product_id_list'] = $seller_product_id_list;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferSortOrder|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferSortOrder|null $sort_order sort_order
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets state_filter
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferStateRequest|null
     */
    public function getStateFilter()
    {
        return $this->container['state_filter'];
    }

    /**
     * Sets state_filter
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferStateRequest|null $state_filter state_filter
     *
     * @return self
     */
    public function setStateFilter($state_filter)
    {
        $this->container['state_filter'] = $state_filter;

        return $this;
    }

    /**
     * Gets condition_filter
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferConditionRequest|null
     */
    public function getConditionFilter()
    {
        return $this->container['condition_filter'];
    }

    /**
     * Sets condition_filter
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersOfferConditionRequest|null $condition_filter condition_filter
     *
     * @return self
     */
    public function setConditionFilter($condition_filter)
    {
        $this->container['condition_filter'] = $condition_filter;

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


