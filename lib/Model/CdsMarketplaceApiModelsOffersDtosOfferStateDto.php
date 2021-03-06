<?php
/**
 * CdsMarketplaceApiModelsOffersDtosOfferStateDto
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * CdsMarketplaceApiModelsOffersDtosOfferStateDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CdsMarketplaceApiModelsOffersDtosOfferStateDto
{
    /**
     * Possible values of this enum
     */
    const WAITING_FOR_PRODUCT_ACTIVATION = 'WaitingForProductActivation';
    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';
    const OBSOLETE = 'Obsolete';
    const FULFILLMENT = 'Fulfillment';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WAITING_FOR_PRODUCT_ACTIVATION,
            self::ACTIVE,
            self::INACTIVE,
            self::OBSOLETE,
            self::FULFILLMENT,
        ];
    }
}


