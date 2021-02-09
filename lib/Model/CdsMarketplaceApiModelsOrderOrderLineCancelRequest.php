<?php
/**
 * CdsMarketplaceApiModelsOrderOrderLineCancelRequest
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
 * CdsMarketplaceApiModelsOrderOrderLineCancelRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CdsMarketplaceApiModelsOrderOrderLineCancelRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cds.MarketplaceApi.Models.Order.OrderLineCancelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'int',
        'customer_case_id' => 'int',
        'motif_id' => 'int',
        'date_demande' => '\DateTime',
        'comment' => 'string',
        'application_source_id' => 'int',
        'quantity' => 'int',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_id' => 'int32',
        'customer_case_id' => 'int32',
        'motif_id' => 'int32',
        'date_demande' => 'date-time',
        'comment' => null,
        'application_source_id' => 'int32',
        'quantity' => 'int32',
        'sku' => null
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
        'user_id' => 'user_id',
        'customer_case_id' => 'customer_case_id',
        'motif_id' => 'motif_id',
        'date_demande' => 'date_demande',
        'comment' => 'comment',
        'application_source_id' => 'application_source_id',
        'quantity' => 'quantity',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'customer_case_id' => 'setCustomerCaseId',
        'motif_id' => 'setMotifId',
        'date_demande' => 'setDateDemande',
        'comment' => 'setComment',
        'application_source_id' => 'setApplicationSourceId',
        'quantity' => 'setQuantity',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'customer_case_id' => 'getCustomerCaseId',
        'motif_id' => 'getMotifId',
        'date_demande' => 'getDateDemande',
        'comment' => 'getComment',
        'application_source_id' => 'getApplicationSourceId',
        'quantity' => 'getQuantity',
        'sku' => 'getSku'
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
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['customer_case_id'] = $data['customer_case_id'] ?? null;
        $this->container['motif_id'] = $data['motif_id'] ?? null;
        $this->container['date_demande'] = $data['date_demande'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['application_source_id'] = $data['application_source_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
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
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets customer_case_id
     *
     * @return int|null
     */
    public function getCustomerCaseId()
    {
        return $this->container['customer_case_id'];
    }

    /**
     * Sets customer_case_id
     *
     * @param int|null $customer_case_id customer_case_id
     *
     * @return self
     */
    public function setCustomerCaseId($customer_case_id)
    {
        $this->container['customer_case_id'] = $customer_case_id;

        return $this;
    }

    /**
     * Gets motif_id
     *
     * @return int|null
     */
    public function getMotifId()
    {
        return $this->container['motif_id'];
    }

    /**
     * Sets motif_id
     *
     * @param int|null $motif_id motif_id
     *
     * @return self
     */
    public function setMotifId($motif_id)
    {
        $this->container['motif_id'] = $motif_id;

        return $this;
    }

    /**
     * Gets date_demande
     *
     * @return \DateTime|null
     */
    public function getDateDemande()
    {
        return $this->container['date_demande'];
    }

    /**
     * Sets date_demande
     *
     * @param \DateTime|null $date_demande date_demande
     *
     * @return self
     */
    public function setDateDemande($date_demande)
    {
        $this->container['date_demande'] = $date_demande;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets application_source_id
     *
     * @return int|null
     */
    public function getApplicationSourceId()
    {
        return $this->container['application_source_id'];
    }

    /**
     * Sets application_source_id
     *
     * @param int|null $application_source_id application_source_id
     *
     * @return self
     */
    public function setApplicationSourceId($application_source_id)
    {
        $this->container['application_source_id'] = $application_source_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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

