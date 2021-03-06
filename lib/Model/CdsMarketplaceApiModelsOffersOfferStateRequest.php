<?php
/**
 * CdsMarketplaceApiModelsOffersOfferStateRequest
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
 * CdsMarketplaceApiModelsOffersOfferStateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CdsMarketplaceApiModelsOffersOfferStateRequest
{
    /**
     * Possible values of this enum
     */
    const ALL_OFFERS_ONLY = 'AllOffersOnly';
    const ONLINE_OFFERS_ONLY = 'OnlineOffersOnly';
    const PUBLISHED_OFFERS_ONLY = 'PublishedOffersOnly';
    const OFFLINE_OFFERS_ONLY = 'OfflineOffersOnly';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_OFFERS_ONLY,
            self::ONLINE_OFFERS_ONLY,
            self::PUBLISHED_OFFERS_ONLY,
            self::OFFLINE_OFFERS_ONLY,
        ];
    }
}


