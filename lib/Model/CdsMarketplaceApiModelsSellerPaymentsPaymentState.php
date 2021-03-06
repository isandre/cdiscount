<?php
/**
 * CdsMarketplaceApiModelsSellerPaymentsPaymentState
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
 * CdsMarketplaceApiModelsSellerPaymentsPaymentState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CdsMarketplaceApiModelsSellerPaymentsPaymentState
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const ALL = 'All';
    const ESTIMATED = 'Estimated';
    const PAID = 'Paid';
    const BLOCKED = 'Blocked';
    const EXPRESS_PAID = 'ExpressPaid';
    const NOT_PAYABLE = 'NotPayable';
    const IN_PROCESS = 'InProcess';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::ALL,
            self::ESTIMATED,
            self::PAID,
            self::BLOCKED,
            self::EXPRESS_PAID,
            self::NOT_PAYABLE,
            self::IN_PROCESS,
        ];
    }
}


