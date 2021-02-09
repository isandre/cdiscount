<?php
/**
 * CdsMarketplaceApiModelsDiscussionDtosDiscussionType
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
 * CdsMarketplaceApiModelsDiscussionDtosDiscussionType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CdsMarketplaceApiModelsDiscussionDtosDiscussionType
{
    /**
     * Possible values of this enum
     */
    const OFFER = 'Offer';
    const DISCUSSION = 'Discussion';
    const CLAIM = 'Claim';
    const ARBITRATION = 'Arbitration';
    const FAVOURED = 'Favoured';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OFFER,
            self::DISCUSSION,
            self::CLAIM,
            self::ARBITRATION,
            self::FAVOURED,
        ];
    }
}


