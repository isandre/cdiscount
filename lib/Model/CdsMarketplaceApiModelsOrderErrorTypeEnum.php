<?php
/**
 * CdsMarketplaceApiModelsOrderErrorTypeEnum
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
 * CdsMarketplaceApiModelsOrderErrorTypeEnum Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CdsMarketplaceApiModelsOrderErrorTypeEnum
{
    /**
     * Possible values of this enum
     */
    const UNEXPECTED_EXCEPTION = 'UnexpectedException';
    const MISSING_FIELD = 'MissingField';
    const PACKAGE_NOT_FOUND = 'PackageNotFound';
    const PACKAGE_MATCHING_FILE_ERROR = 'PackageMatchingFileError';
    const ORDER_NOT_FOUND = 'OrderNotFound';
    const ORDER_STATE_INCOHERENT = 'OrderStateIncoherent';
    const ORDER_LINE_CANCELLED_ACCEPTED_CONFLICT = 'OrderLineCancelledAcceptedConflict';
    const SELLER_NOT_FOUND = 'SellerNotFound';
    const INVALID_FILE_FORMAT = 'InvalidFileFormat';
    const FILE_ALREADY_SUBMITTED = 'FileAlreadySubmitted';
    const INVALID_REQUEST = 'InvalidRequest';
    const FILE_DOWNLOAD_EXCEPTION = 'FileDownloadException';
    const SELLER_NOT_AUTHORIZED = 'SellerNotAuthorized';
    const ORDER_LINE_NOT_FOUND = 'OrderLineNotFound';
    const ORDER_LINE_INCOHERENT_STATE = 'OrderLineIncoherentState';
    const FUNCTION_NOT_ACTIVE = 'FunctionNotActive';
    const ORDER_PRICE_OR_QUANTITY_ERROR = 'OrderPriceOrQuantityError';
    const ORDER_TRACKING_INFORMATION_ERROR = 'OrderTrackingInformationError';
    const TOO_MANY_PRODUCTS_IN_PACKAGE_ERROR = 'TooManyProductsInPackageError';
    const QUOTA = 'Quota';
    const REFUND_ERROR = 'RefundError';
    const DISCUSSION_CREATION_ERROR = 'DiscussionCreationError';
    const CONFIGURATION_ERROR = 'ConfigurationError';
    const ORDER_PARTIALLY_CANCELED = 'OrderPartiallyCanceled';
    const ORDER_LINE_UPDATE_NOT_AUTHORIZED = 'OrderLineUpdateNotAuthorized';
    const ORDER_UPDATE_NOT_AUTHORIZED = 'OrderUpdateNotAuthorized';
    const ASKING_FOR_RETURN_AND_REMOVAL_NOT_AUTHORIZED = 'AskingForReturnAndRemovalNotAuthorized';
    const ORDER_LINE_ERROR = 'OrderLineError';
    const UNAUTHORIZED_VALUE_EXCEPTION = 'UnauthorizedValueException';
    const NOT_AUTHORIZED_EXCEPTION = 'NotAuthorizedException';
    const FULFILLMENT_API_EXCEPTION = 'FulfillmentApiException';
    const OFFER_NOT_FOUND_EXCEPTION = 'OfferNotFoundException';
    const OPERATION_MANAGER_SERVICE_EXCEPTION = 'OperationManagerServiceException';
    const INACTIVE_SELLER_ERROR = 'InactiveSellerError';
    const NO_DATA_ERROR = 'NoDataError';
    const PRODUCT_INTEGRATION_CLOSED = 'ProductIntegrationClosed';
    const PRODUCT_NOT_REFERENCED_EXCEPTION = 'ProductNotReferencedException';
    const PRODUCT_REFERENCED_WITHOUT_STOCK_EXCEPTION = 'ProductReferencedWithoutStockException';
    const PRODUCT_NUMBER_LIMIT_EXCEEDED_EXCEPTION = 'ProductNumberLimitExceededException';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNEXPECTED_EXCEPTION,
            self::MISSING_FIELD,
            self::PACKAGE_NOT_FOUND,
            self::PACKAGE_MATCHING_FILE_ERROR,
            self::ORDER_NOT_FOUND,
            self::ORDER_STATE_INCOHERENT,
            self::ORDER_LINE_CANCELLED_ACCEPTED_CONFLICT,
            self::SELLER_NOT_FOUND,
            self::INVALID_FILE_FORMAT,
            self::FILE_ALREADY_SUBMITTED,
            self::INVALID_REQUEST,
            self::FILE_DOWNLOAD_EXCEPTION,
            self::SELLER_NOT_AUTHORIZED,
            self::ORDER_LINE_NOT_FOUND,
            self::ORDER_LINE_INCOHERENT_STATE,
            self::FUNCTION_NOT_ACTIVE,
            self::ORDER_PRICE_OR_QUANTITY_ERROR,
            self::ORDER_TRACKING_INFORMATION_ERROR,
            self::TOO_MANY_PRODUCTS_IN_PACKAGE_ERROR,
            self::QUOTA,
            self::REFUND_ERROR,
            self::DISCUSSION_CREATION_ERROR,
            self::CONFIGURATION_ERROR,
            self::ORDER_PARTIALLY_CANCELED,
            self::ORDER_LINE_UPDATE_NOT_AUTHORIZED,
            self::ORDER_UPDATE_NOT_AUTHORIZED,
            self::ASKING_FOR_RETURN_AND_REMOVAL_NOT_AUTHORIZED,
            self::ORDER_LINE_ERROR,
            self::UNAUTHORIZED_VALUE_EXCEPTION,
            self::NOT_AUTHORIZED_EXCEPTION,
            self::FULFILLMENT_API_EXCEPTION,
            self::OFFER_NOT_FOUND_EXCEPTION,
            self::OPERATION_MANAGER_SERVICE_EXCEPTION,
            self::INACTIVE_SELLER_ERROR,
            self::NO_DATA_ERROR,
            self::PRODUCT_INTEGRATION_CLOSED,
            self::PRODUCT_NOT_REFERENCED_EXCEPTION,
            self::PRODUCT_REFERENCED_WITHOUT_STOCK_EXCEPTION,
            self::PRODUCT_NUMBER_LIMIT_EXCEEDED_EXCEPTION,
        ];
    }
}


