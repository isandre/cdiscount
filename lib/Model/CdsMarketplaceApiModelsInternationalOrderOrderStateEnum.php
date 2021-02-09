<?php
/**
 * CdsMarketplaceApiModelsInternationalOrderOrderStateEnum
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
 * CdsMarketplaceApiModelsInternationalOrderOrderStateEnum Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CdsMarketplaceApiModelsInternationalOrderOrderStateEnum
{
    /**
     * Possible values of this enum
     */
    const CANCELLED_BY_CUSTOMER = 'CancelledByCustomer';
    const ACCEPTED_BY_SELLER = 'AcceptedBySeller';
    const WAITING_FOR_SHIPMENT_ACCEPTATION = 'WaitingForShipmentAcceptation';
    const SHIPPED = 'Shipped';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED_BY_CUSTOMER,
            self::ACCEPTED_BY_SELLER,
            self::WAITING_FOR_SHIPMENT_ACCEPTATION,
            self::SHIPPED,
        ];
    }
}


