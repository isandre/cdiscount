# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CommercialGestureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Order number (ex scopus_id).
$seller_id = 98979; // int | In production enter the desired SellerId

try {
    $result = $apiInstance->getOrdersOrdernumberCommercialGestureEligibilities($order_number, $seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialGestureApi->getOrdersOrdernumberCommercialGestureEligibilities: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://marketplaceapi.cdiscount.com/OrderManagement*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommercialGestureApi* | [**getOrdersOrdernumberCommercialGestureEligibilities**](docs/Api/CommercialGestureApi.md#getordersordernumbercommercialgestureeligibilities) | **GET** /orders/{orderNumber}/commercial-gesture-eligibilities | Gets if an order is eligible to commercial gesture.
*CommercialGestureApi* | [**getOrdersOrdernumberCommercialGestures**](docs/Api/CommercialGestureApi.md#getordersordernumbercommercialgestures) | **GET** /orders/{orderNumber}/commercial-gestures | Gets informations relative to commercial gestures on a order.
*CommercialGestureApi* | [**postOrdersOrdernumberCommercialGestures**](docs/Api/CommercialGestureApi.md#postordersordernumbercommercialgestures) | **POST** /orders/{orderNumber}/commercial-gestures | Creates a commercial gesture on a order.
*OrderApi* | [**patchOrdersOrdernumberValidate**](docs/Api/OrderApi.md#patchordersordernumbervalidate) | **PATCH** /orders/{orderNumber}/validate | Validates an order.
*OrderApi* | [**postOrdersSearch**](docs/Api/OrderApi.md#postorderssearch) | **POST** /orders/search | Searches orders by criteria.

## Models

- [CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsDiscussionDiscussionAttachment](docs/Model/CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsDiscussionDiscussionAttachment.md)
- [CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsDiscussionDiscussionHead](docs/Model/CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsDiscussionDiscussionHead.md)
- [CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsInternationalOrderOrderThumbnail](docs/Model/CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsInternationalOrderOrderThumbnail.md)
- [CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsOffersOffer](docs/Model/CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsOffersOffer.md)
- [CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsSellerPaymentsPaymentItemData](docs/Model/CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsSellerPaymentsPaymentItemData.md)
- [CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsSellerPricingCommissionDeal](docs/Model/CdsMarketplaceApiApiCommonTotalCountPagedListOfCdsMarketplaceApiModelsSellerPricingCommissionDeal.md)
- [CdsMarketplaceApiModelsActionRatingAction](docs/Model/CdsMarketplaceApiModelsActionRatingAction.md)
- [CdsMarketplaceApiModelsActionRatingActionRating](docs/Model/CdsMarketplaceApiModelsActionRatingActionRating.md)
- [CdsMarketplaceApiModelsActionRatingActionRatingList](docs/Model/CdsMarketplaceApiModelsActionRatingActionRatingList.md)
- [CdsMarketplaceApiModelsCategoriesCategoriesTree](docs/Model/CdsMarketplaceApiModelsCategoriesCategoriesTree.md)
- [CdsMarketplaceApiModelsCategoriesCategory](docs/Model/CdsMarketplaceApiModelsCategoriesCategory.md)
- [CdsMarketplaceApiModelsCategoryModelsModelCategory](docs/Model/CdsMarketplaceApiModelsCategoryModelsModelCategory.md)
- [CdsMarketplaceApiModelsCategoryModelsModelsTree](docs/Model/CdsMarketplaceApiModelsCategoryModelsModelsTree.md)
- [CdsMarketplaceApiModelsCategoryModelsProperty](docs/Model/CdsMarketplaceApiModelsCategoryModelsProperty.md)
- [CdsMarketplaceApiModelsCategoryModelsRangedValues](docs/Model/CdsMarketplaceApiModelsCategoryModelsRangedValues.md)
- [CdsMarketplaceApiModelsCommercialGestureCommercialGestureMotivation](docs/Model/CdsMarketplaceApiModelsCommercialGestureCommercialGestureMotivation.md)
- [CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations](docs/Model/CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations.md)
- [CdsMarketplaceApiModelsCommercialGestureCreateCommercialGestureRequest](docs/Model/CdsMarketplaceApiModelsCommercialGestureCreateCommercialGestureRequest.md)
- [CdsMarketplaceApiModelsCompetingOfferCompetingOfferChange](docs/Model/CdsMarketplaceApiModelsCompetingOfferCompetingOfferChange.md)
- [CdsMarketplaceApiModelsCompetingOfferOffer](docs/Model/CdsMarketplaceApiModelsCompetingOfferOffer.md)
- [CdsMarketplaceApiModelsCompetingOfferProduct](docs/Model/CdsMarketplaceApiModelsCompetingOfferProduct.md)
- [CdsMarketplaceApiModelsCompetingOfferSeller](docs/Model/CdsMarketplaceApiModelsCompetingOfferSeller.md)
- [CdsMarketplaceApiModelsCompetingOfferShipping](docs/Model/CdsMarketplaceApiModelsCompetingOfferShipping.md)
- [CdsMarketplaceApiModelsDiscussionAttachmentState](docs/Model/CdsMarketplaceApiModelsDiscussionAttachmentState.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionAttachment](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionAttachment.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionHead](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionHead.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionMail](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionMail.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionMessage](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionMessage.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionPatchRequest](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionPatchRequest.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionRecipientType](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionRecipientType.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionReplyRequest](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionReplyRequest.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionSearchRequest](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionSearchRequest.md)
- [CdsMarketplaceApiModelsDiscussionDiscussionThread](docs/Model/CdsMarketplaceApiModelsDiscussionDiscussionThread.md)
- [CdsMarketplaceApiModelsDiscussionDtosDiscussionStateFilter](docs/Model/CdsMarketplaceApiModelsDiscussionDtosDiscussionStateFilter.md)
- [CdsMarketplaceApiModelsDiscussionDtosDiscussionType](docs/Model/CdsMarketplaceApiModelsDiscussionDtosDiscussionType.md)
- [CdsMarketplaceApiModelsDiscussionDtosDiscussionTypeFilter](docs/Model/CdsMarketplaceApiModelsDiscussionDtosDiscussionTypeFilter.md)
- [CdsMarketplaceApiModelsDiscussionDtosUserType](docs/Model/CdsMarketplaceApiModelsDiscussionDtosUserType.md)
- [CdsMarketplaceApiModelsDocumentsDocumentContent](docs/Model/CdsMarketplaceApiModelsDocumentsDocumentContent.md)
- [CdsMarketplaceApiModelsDocumentsDocumentInformation](docs/Model/CdsMarketplaceApiModelsDocumentsDocumentInformation.md)
- [CdsMarketplaceApiModelsDocumentsDocumentInformationResponse](docs/Model/CdsMarketplaceApiModelsDocumentsDocumentInformationResponse.md)
- [CdsMarketplaceApiModelsInternationalOrderCustomerCompany](docs/Model/CdsMarketplaceApiModelsInternationalOrderCustomerCompany.md)
- [CdsMarketplaceApiModelsInternationalOrderCustomerInformations](docs/Model/CdsMarketplaceApiModelsInternationalOrderCustomerInformations.md)
- [CdsMarketplaceApiModelsInternationalOrderDelivery](docs/Model/CdsMarketplaceApiModelsInternationalOrderDelivery.md)
- [CdsMarketplaceApiModelsInternationalOrderDtosInternationalOrderStatusEnum](docs/Model/CdsMarketplaceApiModelsInternationalOrderDtosInternationalOrderStatusEnum.md)
- [CdsMarketplaceApiModelsInternationalOrderInformation](docs/Model/CdsMarketplaceApiModelsInternationalOrderInformation.md)
- [CdsMarketplaceApiModelsInternationalOrderOrder](docs/Model/CdsMarketplaceApiModelsInternationalOrderOrder.md)
- [CdsMarketplaceApiModelsInternationalOrderOrderItem](docs/Model/CdsMarketplaceApiModelsInternationalOrderOrderItem.md)
- [CdsMarketplaceApiModelsInternationalOrderOrderProduct](docs/Model/CdsMarketplaceApiModelsInternationalOrderOrderProduct.md)
- [CdsMarketplaceApiModelsInternationalOrderOrderStateEnum](docs/Model/CdsMarketplaceApiModelsInternationalOrderOrderStateEnum.md)
- [CdsMarketplaceApiModelsInternationalOrderOrderThumbnail](docs/Model/CdsMarketplaceApiModelsInternationalOrderOrderThumbnail.md)
- [CdsMarketplaceApiModelsInternationalOrderPrice](docs/Model/CdsMarketplaceApiModelsInternationalOrderPrice.md)
- [CdsMarketplaceApiModelsInternationalOrderPricing](docs/Model/CdsMarketplaceApiModelsInternationalOrderPricing.md)
- [CdsMarketplaceApiModelsInternationalOrderProduct](docs/Model/CdsMarketplaceApiModelsInternationalOrderProduct.md)
- [CdsMarketplaceApiModelsInternationalOrderSearchOrderRequest](docs/Model/CdsMarketplaceApiModelsInternationalOrderSearchOrderRequest.md)
- [CdsMarketplaceApiModelsInternationalOrderSeller](docs/Model/CdsMarketplaceApiModelsInternationalOrderSeller.md)
- [CdsMarketplaceApiModelsInternationalOrderShipping](docs/Model/CdsMarketplaceApiModelsInternationalOrderShipping.md)
- [CdsMarketplaceApiModelsInternationalOrderShippingCosts](docs/Model/CdsMarketplaceApiModelsInternationalOrderShippingCosts.md)
- [CdsMarketplaceApiModelsInternationalOrderTaxes](docs/Model/CdsMarketplaceApiModelsInternationalOrderTaxes.md)
- [CdsMarketplaceApiModelsInternationalOrderUnitSalesPrice](docs/Model/CdsMarketplaceApiModelsInternationalOrderUnitSalesPrice.md)
- [CdsMarketplaceApiModelsOfferIntegrationDtosDetailedPackageIntegrationStateDto](docs/Model/CdsMarketplaceApiModelsOfferIntegrationDtosDetailedPackageIntegrationStateDto.md)
- [CdsMarketplaceApiModelsOfferIntegrationDtosOfferLogDto](docs/Model/CdsMarketplaceApiModelsOfferIntegrationDtosOfferLogDto.md)
- [CdsMarketplaceApiModelsOfferIntegrationDtosOfferPropertyLogDto](docs/Model/CdsMarketplaceApiModelsOfferIntegrationDtosOfferPropertyLogDto.md)
- [CdsMarketplaceApiModelsOfferIntegrationPackageLog](docs/Model/CdsMarketplaceApiModelsOfferIntegrationPackageLog.md)
- [CdsMarketplaceApiModelsOffersDiscount](docs/Model/CdsMarketplaceApiModelsOffersDiscount.md)
- [CdsMarketplaceApiModelsOffersDiscountType](docs/Model/CdsMarketplaceApiModelsOffersDiscountType.md)
- [CdsMarketplaceApiModelsOffersDtosLogisticManagementDto](docs/Model/CdsMarketplaceApiModelsOffersDtosLogisticManagementDto.md)
- [CdsMarketplaceApiModelsOffersDtosOfferStateDto](docs/Model/CdsMarketplaceApiModelsOffersDtosOfferStateDto.md)
- [CdsMarketplaceApiModelsOffersDtosPriceAlignmentActionDto](docs/Model/CdsMarketplaceApiModelsOffersDtosPriceAlignmentActionDto.md)
- [CdsMarketplaceApiModelsOffersDtosProductPackagingUnitDto](docs/Model/CdsMarketplaceApiModelsOffersDtosProductPackagingUnitDto.md)
- [CdsMarketplaceApiModelsOffersDtosProductStateDto](docs/Model/CdsMarketplaceApiModelsOffersDtosProductStateDto.md)
- [CdsMarketplaceApiModelsOffersDtosSoldOutManagementDto](docs/Model/CdsMarketplaceApiModelsOffersDtosSoldOutManagementDto.md)
- [CdsMarketplaceApiModelsOffersOffer](docs/Model/CdsMarketplaceApiModelsOffersOffer.md)
- [CdsMarketplaceApiModelsOffersOfferConditionRequest](docs/Model/CdsMarketplaceApiModelsOffersOfferConditionRequest.md)
- [CdsMarketplaceApiModelsOffersOfferPool](docs/Model/CdsMarketplaceApiModelsOffersOfferPool.md)
- [CdsMarketplaceApiModelsOffersOfferSortOrder](docs/Model/CdsMarketplaceApiModelsOffersOfferSortOrder.md)
- [CdsMarketplaceApiModelsOffersOfferStateRequest](docs/Model/CdsMarketplaceApiModelsOffersOfferStateRequest.md)
- [CdsMarketplaceApiModelsOffersSearchOffersRequest](docs/Model/CdsMarketplaceApiModelsOffersSearchOffersRequest.md)
- [CdsMarketplaceApiModelsOffersShippingInformation](docs/Model/CdsMarketplaceApiModelsOffersShippingInformation.md)
- [CdsMarketplaceApiModelsOffersStock](docs/Model/CdsMarketplaceApiModelsOffersStock.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiDiscount](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiDiscount.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiDiscountUnit](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiDiscountUnit.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageRequest](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageRequest.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageResponse](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiOfferPackageResponse.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiOfferPool](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiOfferPool.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiOfferSubmission](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiOfferSubmission.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiPackageChannel](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiPackageChannel.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiPackageType](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiPackageType.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiPackagingUnit](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiPackagingUnit.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiPriceItem](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiPriceItem.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiPriceMustBeAligned](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiPriceMustBeAligned.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiProductCondition](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiProductCondition.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiPublicationPool](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiPublicationPool.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiShipping](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiShipping.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiShippingDeliveryMode](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiShippingDeliveryMode.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiTaxCategory](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiTaxCategory.md)
- [CdsMarketplaceApiModelsOffersSubmissionApiTaxes](docs/Model/CdsMarketplaceApiModelsOffersSubmissionApiTaxes.md)
- [CdsMarketplaceApiModelsOrderAcceptationState](docs/Model/CdsMarketplaceApiModelsOrderAcceptationState.md)
- [CdsMarketplaceApiModelsOrderAcceptationStateMkpRequest](docs/Model/CdsMarketplaceApiModelsOrderAcceptationStateMkpRequest.md)
- [CdsMarketplaceApiModelsOrderAddress](docs/Model/CdsMarketplaceApiModelsOrderAddress.md)
- [CdsMarketplaceApiModelsOrderAskingForReturnTypeEnum](docs/Model/CdsMarketplaceApiModelsOrderAskingForReturnTypeEnum.md)
- [CdsMarketplaceApiModelsOrderCivility](docs/Model/CdsMarketplaceApiModelsOrderCivility.md)
- [CdsMarketplaceApiModelsOrderCorporation](docs/Model/CdsMarketplaceApiModelsOrderCorporation.md)
- [CdsMarketplaceApiModelsOrderCountry](docs/Model/CdsMarketplaceApiModelsOrderCountry.md)
- [CdsMarketplaceApiModelsOrderCustomer](docs/Model/CdsMarketplaceApiModelsOrderCustomer.md)
- [CdsMarketplaceApiModelsOrderErrorTypeEnum](docs/Model/CdsMarketplaceApiModelsOrderErrorTypeEnum.md)
- [CdsMarketplaceApiModelsOrderOfferOrder](docs/Model/CdsMarketplaceApiModelsOrderOfferOrder.md)
- [CdsMarketplaceApiModelsOrderOrder](docs/Model/CdsMarketplaceApiModelsOrderOrder.md)
- [CdsMarketplaceApiModelsOrderOrderCancelRequest](docs/Model/CdsMarketplaceApiModelsOrderOrderCancelRequest.md)
- [CdsMarketplaceApiModelsOrderOrderLine](docs/Model/CdsMarketplaceApiModelsOrderOrderLine.md)
- [CdsMarketplaceApiModelsOrderOrderLineCancelRequest](docs/Model/CdsMarketplaceApiModelsOrderOrderLineCancelRequest.md)
- [CdsMarketplaceApiModelsOrderOrderLineFull](docs/Model/CdsMarketplaceApiModelsOrderOrderLineFull.md)
- [CdsMarketplaceApiModelsOrderOrderLineValidateRequest](docs/Model/CdsMarketplaceApiModelsOrderOrderLineValidateRequest.md)
- [CdsMarketplaceApiModelsOrderOrderRefundableLinesRequest](docs/Model/CdsMarketplaceApiModelsOrderOrderRefundableLinesRequest.md)
- [CdsMarketplaceApiModelsOrderOrderState](docs/Model/CdsMarketplaceApiModelsOrderOrderState.md)
- [CdsMarketplaceApiModelsOrderOrderStateEnum](docs/Model/CdsMarketplaceApiModelsOrderOrderStateEnum.md)
- [CdsMarketplaceApiModelsOrderOrderStatus](docs/Model/CdsMarketplaceApiModelsOrderOrderStatus.md)
- [CdsMarketplaceApiModelsOrderOrderType](docs/Model/CdsMarketplaceApiModelsOrderOrderType.md)
- [CdsMarketplaceApiModelsOrderOrderValidateError](docs/Model/CdsMarketplaceApiModelsOrderOrderValidateError.md)
- [CdsMarketplaceApiModelsOrderOrderValidateLineResult](docs/Model/CdsMarketplaceApiModelsOrderOrderValidateLineResult.md)
- [CdsMarketplaceApiModelsOrderOrderValidateRequest](docs/Model/CdsMarketplaceApiModelsOrderOrderValidateRequest.md)
- [CdsMarketplaceApiModelsOrderOrderValidateResult](docs/Model/CdsMarketplaceApiModelsOrderOrderValidateResult.md)
- [CdsMarketplaceApiModelsOrderParcel](docs/Model/CdsMarketplaceApiModelsOrderParcel.md)
- [CdsMarketplaceApiModelsOrderParcelItem](docs/Model/CdsMarketplaceApiModelsOrderParcelItem.md)
- [CdsMarketplaceApiModelsOrderParcelStatus](docs/Model/CdsMarketplaceApiModelsOrderParcelStatus.md)
- [CdsMarketplaceApiModelsOrderProductCondition](docs/Model/CdsMarketplaceApiModelsOrderProductCondition.md)
- [CdsMarketplaceApiModelsOrderProductConditionEnum](docs/Model/CdsMarketplaceApiModelsOrderProductConditionEnum.md)
- [CdsMarketplaceApiModelsOrderRefundInformation](docs/Model/CdsMarketplaceApiModelsOrderRefundInformation.md)
- [CdsMarketplaceApiModelsOrderSearchOrderRequest](docs/Model/CdsMarketplaceApiModelsOrderSearchOrderRequest.md)
- [CdsMarketplaceApiModelsOrderTracking](docs/Model/CdsMarketplaceApiModelsOrderTracking.md)
- [CdsMarketplaceApiModelsOrderValidationStatus](docs/Model/CdsMarketplaceApiModelsOrderValidationStatus.md)
- [CdsMarketplaceApiModelsOrderVoucher](docs/Model/CdsMarketplaceApiModelsOrderVoucher.md)
- [CdsMarketplaceApiModelsOrderVoucherActor](docs/Model/CdsMarketplaceApiModelsOrderVoucherActor.md)
- [CdsMarketplaceApiModelsPremiumPacksDiscount](docs/Model/CdsMarketplaceApiModelsPremiumPacksDiscount.md)
- [CdsMarketplaceApiModelsPremiumPacksPremiumPack](docs/Model/CdsMarketplaceApiModelsPremiumPacksPremiumPack.md)
- [CdsMarketplaceApiModelsPremiumPacksPremiumPackSubscriptionRequest](docs/Model/CdsMarketplaceApiModelsPremiumPacksPremiumPackSubscriptionRequest.md)
- [CdsMarketplaceApiModelsPremiumPacksSellerPremiumPack](docs/Model/CdsMarketplaceApiModelsPremiumPacksSellerPremiumPack.md)
- [CdsMarketplaceApiModelsPremiumPacksVoucherRequest](docs/Model/CdsMarketplaceApiModelsPremiumPacksVoucherRequest.md)
- [CdsMarketplaceApiModelsPremiumPacksVoucherResponse](docs/Model/CdsMarketplaceApiModelsPremiumPacksVoucherResponse.md)
- [CdsMarketplaceApiModelsProductIntegrationDtosProductDto](docs/Model/CdsMarketplaceApiModelsProductIntegrationDtosProductDto.md)
- [CdsMarketplaceApiModelsProductIntegrationDtosProductIntegrationState](docs/Model/CdsMarketplaceApiModelsProductIntegrationDtosProductIntegrationState.md)
- [CdsMarketplaceApiModelsProductIntegrationDtosSubmitPackageResponseDto](docs/Model/CdsMarketplaceApiModelsProductIntegrationDtosSubmitPackageResponseDto.md)
- [CdsMarketplaceApiModelsProductIntegrationPackageLog](docs/Model/CdsMarketplaceApiModelsProductIntegrationPackageLog.md)
- [CdsMarketplaceApiModelsProductIntegrationProductPackageSubmissionResult](docs/Model/CdsMarketplaceApiModelsProductIntegrationProductPackageSubmissionResult.md)
- [CdsMarketplaceApiModelsProductIntegrationProductPropertyLog](docs/Model/CdsMarketplaceApiModelsProductIntegrationProductPropertyLog.md)
- [CdsMarketplaceApiModelsProductSearchProductsRequest](docs/Model/CdsMarketplaceApiModelsProductSearchProductsRequest.md)
- [CdsMarketplaceApiModelsProductSearchProductsResult](docs/Model/CdsMarketplaceApiModelsProductSearchProductsResult.md)
- [CdsMarketplaceApiModelsSalesChannelsSalesChannelInfo](docs/Model/CdsMarketplaceApiModelsSalesChannelsSalesChannelInfo.md)
- [CdsMarketplaceApiModelsSellerAddress](docs/Model/CdsMarketplaceApiModelsSellerAddress.md)
- [CdsMarketplaceApiModelsSellerAddressHeadOffice](docs/Model/CdsMarketplaceApiModelsSellerAddressHeadOffice.md)
- [CdsMarketplaceApiModelsSellerCatalogDtoFilterItemResponse](docs/Model/CdsMarketplaceApiModelsSellerCatalogDtoFilterItemResponse.md)
- [CdsMarketplaceApiModelsSellerCatalogEnumCatalogFilterRule](docs/Model/CdsMarketplaceApiModelsSellerCatalogEnumCatalogFilterRule.md)
- [CdsMarketplaceApiModelsSellerCatalogEnumCurrency](docs/Model/CdsMarketplaceApiModelsSellerCatalogEnumCurrency.md)
- [CdsMarketplaceApiModelsSellerCatalogEnumFilterCategory](docs/Model/CdsMarketplaceApiModelsSellerCatalogEnumFilterCategory.md)
- [CdsMarketplaceApiModelsSellerCatalogOfferMarkupRate](docs/Model/CdsMarketplaceApiModelsSellerCatalogOfferMarkupRate.md)
- [CdsMarketplaceApiModelsSellerCatalogPricingResponse](docs/Model/CdsMarketplaceApiModelsSellerCatalogPricingResponse.md)
- [CdsMarketplaceApiModelsSellerCatalogRequestCatalogPricingRequest](docs/Model/CdsMarketplaceApiModelsSellerCatalogRequestCatalogPricingRequest.md)
- [CdsMarketplaceApiModelsSellerDeliveryMode](docs/Model/CdsMarketplaceApiModelsSellerDeliveryMode.md)
- [CdsMarketplaceApiModelsSellerEnumsSellerState](docs/Model/CdsMarketplaceApiModelsSellerEnumsSellerState.md)
- [CdsMarketplaceApiModelsSellerEnumsSellerSubState](docs/Model/CdsMarketplaceApiModelsSellerEnumsSellerSubState.md)
- [CdsMarketplaceApiModelsSellerHyperMedia](docs/Model/CdsMarketplaceApiModelsSellerHyperMedia.md)
- [CdsMarketplaceApiModelsSellerIdentificationDtosGroupDto](docs/Model/CdsMarketplaceApiModelsSellerIdentificationDtosGroupDto.md)
- [CdsMarketplaceApiModelsSellerIdentificationDtosIntegratorDto](docs/Model/CdsMarketplaceApiModelsSellerIdentificationDtosIntegratorDto.md)
- [CdsMarketplaceApiModelsSellerIdentificationDtosMethodDto](docs/Model/CdsMarketplaceApiModelsSellerIdentificationDtosMethodDto.md)
- [CdsMarketplaceApiModelsSellerIdentificationDtosRightDetailsDto](docs/Model/CdsMarketplaceApiModelsSellerIdentificationDtosRightDetailsDto.md)
- [CdsMarketplaceApiModelsSellerIdentificationDtosTranslationDto](docs/Model/CdsMarketplaceApiModelsSellerIdentificationDtosTranslationDto.md)
- [CdsMarketplaceApiModelsSellerIndicatorsSellerIndicator](docs/Model/CdsMarketplaceApiModelsSellerIndicatorsSellerIndicator.md)
- [CdsMarketplaceApiModelsSellerIndicatorsSellerIndicatorsMessage](docs/Model/CdsMarketplaceApiModelsSellerIndicatorsSellerIndicatorsMessage.md)
- [CdsMarketplaceApiModelsSellerIndicatorsTresholdType](docs/Model/CdsMarketplaceApiModelsSellerIndicatorsTresholdType.md)
- [CdsMarketplaceApiModelsSellerPaymentsClaimsDetail](docs/Model/CdsMarketplaceApiModelsSellerPaymentsClaimsDetail.md)
- [CdsMarketplaceApiModelsSellerPaymentsCommissionCreditDetail](docs/Model/CdsMarketplaceApiModelsSellerPaymentsCommissionCreditDetail.md)
- [CdsMarketplaceApiModelsSellerPaymentsCommissionDetail](docs/Model/CdsMarketplaceApiModelsSellerPaymentsCommissionDetail.md)
- [CdsMarketplaceApiModelsSellerPaymentsOrderDetailEarning](docs/Model/CdsMarketplaceApiModelsSellerPaymentsOrderDetailEarning.md)
- [CdsMarketplaceApiModelsSellerPaymentsPaymentItemData](docs/Model/CdsMarketplaceApiModelsSellerPaymentsPaymentItemData.md)
- [CdsMarketplaceApiModelsSellerPaymentsPaymentState](docs/Model/CdsMarketplaceApiModelsSellerPaymentsPaymentState.md)
- [CdsMarketplaceApiModelsSellerPaymentsRefundsDetail](docs/Model/CdsMarketplaceApiModelsSellerPaymentsRefundsDetail.md)
- [CdsMarketplaceApiModelsSellerPaymentsSaleDetail](docs/Model/CdsMarketplaceApiModelsSellerPaymentsSaleDetail.md)
- [CdsMarketplaceApiModelsSellerPaymentsSellerPaymentsData](docs/Model/CdsMarketplaceApiModelsSellerPaymentsSellerPaymentsData.md)
- [CdsMarketplaceApiModelsSellerPaymentsSellerPaymentsSearchRequest](docs/Model/CdsMarketplaceApiModelsSellerPaymentsSellerPaymentsSearchRequest.md)
- [CdsMarketplaceApiModelsSellerPricingAnimation](docs/Model/CdsMarketplaceApiModelsSellerPricingAnimation.md)
- [CdsMarketplaceApiModelsSellerPricingCommercialAnimationsDocument](docs/Model/CdsMarketplaceApiModelsSellerPricingCommercialAnimationsDocument.md)
- [CdsMarketplaceApiModelsSellerPricingCommercialAnimationsResponse](docs/Model/CdsMarketplaceApiModelsSellerPricingCommercialAnimationsResponse.md)
- [CdsMarketplaceApiModelsSellerPricingCommissionDeal](docs/Model/CdsMarketplaceApiModelsSellerPricingCommissionDeal.md)
- [CdsMarketplaceApiModelsSellerPricingSearchCommissionsListRequest](docs/Model/CdsMarketplaceApiModelsSellerPricingSearchCommissionsListRequest.md)
- [CdsMarketplaceApiModelsSellerSalesChannel](docs/Model/CdsMarketplaceApiModelsSellerSalesChannel.md)
- [CdsMarketplaceApiModelsSellerSellerInformation](docs/Model/CdsMarketplaceApiModelsSellerSellerInformation.md)
- [CdsMarketplaceApiModelsWarehouseWarehouse](docs/Model/CdsMarketplaceApiModelsWarehouseWarehouse.md)
- [CdsMarketplaceApiModelsWarehouseWarehouseAddress](docs/Model/CdsMarketplaceApiModelsWarehouseWarehouseAddress.md)
- [CdsMarketplaceApiModelsWarehouseWarehouseType](docs/Model/CdsMarketplaceApiModelsWarehouseWarehouseType.md)

## Authorization

### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header



### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
