<?php
/**
 * CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageRequest
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
 * CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cds.MarketplaceApi.Models.Offers.SubmissionApi.OfferPackageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'legacy_package_id' => 'int',
        'name' => 'string',
        'culture_name' => 'string',
        'offer_pool_list' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPublicationPool[]',
        'package_file_path' => 'string',
        'package_checksum' => 'string',
        'uri' => 'string',
        'package_type' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPackageType',
        'channel' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPackageChannel',
        'purge_and_replace' => 'bool',
        'offers_count' => 'int',
        'offers' => '\OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiOfferSubmission[]',
        'is_seller_feature_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'legacy_package_id' => 'int64',
        'name' => null,
        'culture_name' => null,
        'offer_pool_list' => null,
        'package_file_path' => null,
        'package_checksum' => null,
        'uri' => 'uri',
        'package_type' => null,
        'channel' => null,
        'purge_and_replace' => null,
        'offers_count' => 'int32',
        'offers' => null,
        'is_seller_feature_active' => null
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
        'legacy_package_id' => 'legacy_package_id',
        'name' => 'name',
        'culture_name' => 'culture_name',
        'offer_pool_list' => 'offer_pool_list',
        'package_file_path' => 'package_file_path',
        'package_checksum' => 'package_checksum',
        'uri' => 'uri',
        'package_type' => 'package_type',
        'channel' => 'channel',
        'purge_and_replace' => 'purge_and_replace',
        'offers_count' => 'offers_count',
        'offers' => 'offers',
        'is_seller_feature_active' => 'is_seller_feature_active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legacy_package_id' => 'setLegacyPackageId',
        'name' => 'setName',
        'culture_name' => 'setCultureName',
        'offer_pool_list' => 'setOfferPoolList',
        'package_file_path' => 'setPackageFilePath',
        'package_checksum' => 'setPackageChecksum',
        'uri' => 'setUri',
        'package_type' => 'setPackageType',
        'channel' => 'setChannel',
        'purge_and_replace' => 'setPurgeAndReplace',
        'offers_count' => 'setOffersCount',
        'offers' => 'setOffers',
        'is_seller_feature_active' => 'setIsSellerFeatureActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legacy_package_id' => 'getLegacyPackageId',
        'name' => 'getName',
        'culture_name' => 'getCultureName',
        'offer_pool_list' => 'getOfferPoolList',
        'package_file_path' => 'getPackageFilePath',
        'package_checksum' => 'getPackageChecksum',
        'uri' => 'getUri',
        'package_type' => 'getPackageType',
        'channel' => 'getChannel',
        'purge_and_replace' => 'getPurgeAndReplace',
        'offers_count' => 'getOffersCount',
        'offers' => 'getOffers',
        'is_seller_feature_active' => 'getIsSellerFeatureActive'
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
        $this->container['legacy_package_id'] = $data['legacy_package_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['culture_name'] = $data['culture_name'] ?? null;
        $this->container['offer_pool_list'] = $data['offer_pool_list'] ?? null;
        $this->container['package_file_path'] = $data['package_file_path'] ?? null;
        $this->container['package_checksum'] = $data['package_checksum'] ?? null;
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['package_type'] = $data['package_type'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['purge_and_replace'] = $data['purge_and_replace'] ?? null;
        $this->container['offers_count'] = $data['offers_count'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
        $this->container['is_seller_feature_active'] = $data['is_seller_feature_active'] ?? null;
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
     * Gets legacy_package_id
     *
     * @return int|null
     */
    public function getLegacyPackageId()
    {
        return $this->container['legacy_package_id'];
    }

    /**
     * Sets legacy_package_id
     *
     * @param int|null $legacy_package_id legacy_package_id
     *
     * @return self
     */
    public function setLegacyPackageId($legacy_package_id)
    {
        $this->container['legacy_package_id'] = $legacy_package_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets culture_name
     *
     * @return string|null
     */
    public function getCultureName()
    {
        return $this->container['culture_name'];
    }

    /**
     * Sets culture_name
     *
     * @param string|null $culture_name culture_name
     *
     * @return self
     */
    public function setCultureName($culture_name)
    {
        $this->container['culture_name'] = $culture_name;

        return $this;
    }

    /**
     * Gets offer_pool_list
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPublicationPool[]|null
     */
    public function getOfferPoolList()
    {
        return $this->container['offer_pool_list'];
    }

    /**
     * Sets offer_pool_list
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPublicationPool[]|null $offer_pool_list offer_pool_list
     *
     * @return self
     */
    public function setOfferPoolList($offer_pool_list)
    {
        $this->container['offer_pool_list'] = $offer_pool_list;

        return $this;
    }

    /**
     * Gets package_file_path
     *
     * @return string|null
     */
    public function getPackageFilePath()
    {
        return $this->container['package_file_path'];
    }

    /**
     * Sets package_file_path
     *
     * @param string|null $package_file_path package_file_path
     *
     * @return self
     */
    public function setPackageFilePath($package_file_path)
    {
        $this->container['package_file_path'] = $package_file_path;

        return $this;
    }

    /**
     * Gets package_checksum
     *
     * @return string|null
     */
    public function getPackageChecksum()
    {
        return $this->container['package_checksum'];
    }

    /**
     * Sets package_checksum
     *
     * @param string|null $package_checksum package_checksum
     *
     * @return self
     */
    public function setPackageChecksum($package_checksum)
    {
        $this->container['package_checksum'] = $package_checksum;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPackageType|null
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPackageType|null $package_type package_type
     *
     * @return self
     */
    public function setPackageType($package_type)
    {
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPackageChannel|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiPackageChannel|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets purge_and_replace
     *
     * @return bool|null
     */
    public function getPurgeAndReplace()
    {
        return $this->container['purge_and_replace'];
    }

    /**
     * Sets purge_and_replace
     *
     * @param bool|null $purge_and_replace purge_and_replace
     *
     * @return self
     */
    public function setPurgeAndReplace($purge_and_replace)
    {
        $this->container['purge_and_replace'] = $purge_and_replace;

        return $this;
    }

    /**
     * Gets offers_count
     *
     * @return int|null
     */
    public function getOffersCount()
    {
        return $this->container['offers_count'];
    }

    /**
     * Sets offers_count
     *
     * @param int|null $offers_count offers_count
     *
     * @return self
     */
    public function setOffersCount($offers_count)
    {
        $this->container['offers_count'] = $offers_count;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiOfferSubmission[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \OpenAPI\Client\Model\CdsMarketplaceApiModelsOffersSubmissionApiOfferSubmission[]|null $offers offers
     *
     * @return self
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets is_seller_feature_active
     *
     * @return bool|null
     */
    public function getIsSellerFeatureActive()
    {
        return $this->container['is_seller_feature_active'];
    }

    /**
     * Sets is_seller_feature_active
     *
     * @param bool|null $is_seller_feature_active is_seller_feature_active
     *
     * @return self
     */
    public function setIsSellerFeatureActive($is_seller_feature_active)
    {
        $this->container['is_seller_feature_active'] = $is_seller_feature_active;

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


