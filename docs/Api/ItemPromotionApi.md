# Ebay\Sell\ItemPromotionApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemPromotion()**](ItemPromotionApi.md#createItemPromotion) | **POST** /item_promotion | 
[**deleteItemPromotion()**](ItemPromotionApi.md#deleteItemPromotion) | **DELETE** /item_promotion/{promotion_id} | 
[**getItemPromotion()**](ItemPromotionApi.md#getItemPromotion) | **GET** /item_promotion/{promotion_id} | 
[**updateItemPromotion()**](ItemPromotionApi.md#updateItemPromotion) | **PUT** /item_promotion/{promotion_id} | 


## `createItemPromotion()`

```php
createItemPromotion($body): \Ebay\Sell\Marketing\Model\BaseResponse
```



This method creates an item promotion, where the buyer receives a discount when they meet the buying criteria that's set for the promotion. Known here as &quot;threshold promotions&quot;, these promotions trigger when a threshold is met. eBay highlights promoted items by placing teasers for the promoted items throughout the online buyer flows. Discounts are specified as either a monetary amount or a percentage off the standard sales price of a listing, letting you offer deals such as &quot;Buy 1 Get 1&quot; and &quot;Buy $50, get 20% off&quot;. Volume pricing promotions increase the value of the discount as the buyer increases the quantity they purchase. Coded Coupons provide unique codes that a buyer can use during checkout to receive a discount. The seller can specify the number of times a buyer can use the coupon and the maximum amount across all purchases that can be discounted using the coupon. The coupon code can also be made public (appearing on the seller&rsquo;s Offer page, search pages, the item listing, and the checkout page) or private (only on the seller&rsquo;s Offer page, but the seller can include the code in email and social media). Note: Coded Coupons are currently available in the US, UK, DE, FR, IT, ES, and AU marketplaces. There are two ways to add items to a threshold promotion: Key-based promotions select items using either the listing IDs or inventory reference IDs of the items you want to promote. Note that if you use inventory reference IDs, you must specify both the inventoryReferenceId and the associated inventoryReferenceType of the item(s) you want to include the promotion. Rule-based promotions select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain items in a promotion by minimum and maximum prices, brands, and item conditions. You must create a new promotion in either a DRAFT or SCHEDULED state. Use the DRAFT state when you are initially creating a promotion and you want to be sure it's correctly configured before scheduling it to run. When you create a promotion, the promotion ID is returned in the Location response header. Use this ID to reference the promotion in subsequent requests. Tip: Refer to the Selling Integration Guide for details and examples showing how to create and manage threshold promotions using the Promotions Manager. For information on the eBay marketplaces that support item promotions, see Promotions Manager requirements and restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Marketing\Model\ItemPromotion(); // \Ebay\Sell\Marketing\Model\ItemPromotion | This type defines the fields that describe an item promotion.

try {
    $result = $apiInstance->createItemPromotion($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->createItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Marketing\Model\ItemPromotion**](../Model/ItemPromotion.md)| This type defines the fields that describe an item promotion. | [optional]

### Return type

[**\Ebay\Sell\Marketing\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemPromotion()`

```php
deleteItemPromotion($promotion_id)
```



This method deletes the threshold promotion specified by the promotion_id path parameter. Call getPromotions to retrieve the IDs of a seller's promotions. You can delete any promotion with the exception of those that are currently active (RUNNING). To end a running threshold promotion, call updateItemPromotion and adjust the endDate field as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to delete plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US

try {
    $apiInstance->deleteItemPromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->deleteItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to delete plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &amp;quot;at sign&amp;quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPromotion()`

```php
getItemPromotion($promotion_id): \Ebay\Sell\Marketing\Model\ItemPromotionResponse
```



This method returns the complete details of the threshold promotion specified by the promotion_id path parameter. Call getPromotions to retrieve the IDs of a seller's promotions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to retrieve plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US

try {
    $result = $apiInstance->getItemPromotion($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->getItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to retrieve plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &amp;quot;at sign&amp;quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US |

### Return type

[**\Ebay\Sell\Marketing\Model\ItemPromotionResponse**](../Model/ItemPromotionResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemPromotion()`

```php
updateItemPromotion($promotion_id, $body): \Ebay\Sell\Marketing\Model\BaseResponse
```



This method updates the specified threshold promotion with the new configuration that you supply in the request. Indicate the promotion you want to update using the promotion_id path parameter. Call getPromotions to retrieve the IDs of a seller's promotions. When updating a promotion, supply all the fields that you used to configure the original promotion (and not just the fields you are updating). eBay replaces the specified promotion with the values you supply in the update request and if you don't pass a field that currently has a value, the update request will fail. The parameters you are allowed to update with this request depend on the status of the promotion you're updating: DRAFT or SCHEDULED promotions: You can update any of the parameters in these promotions that have not yet started to run, including the discountRules. RUNNING or PAUSED promotions: You can change the endDate and the item's inventory but you cannot change the promotional discount or the promotion's start date. ENDED promotions: Nothing can be changed. Tip: When updating a RUNNING or PAUSED promotion, set the status field to SCHEDULED for the update request. When the promotion is updated, the previous status (either RUNNING or PAUSED) is retained.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to update plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US
$body = new \Ebay\Sell\Marketing\Model\ItemPromotion(); // \Ebay\Sell\Marketing\Model\ItemPromotion | This type defines the fields that describe an item promotion.

try {
    $result = $apiInstance->updateItemPromotion($promotion_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->updateItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to update plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &amp;quot;at sign&amp;quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US |
 **body** | [**\Ebay\Sell\Marketing\Model\ItemPromotion**](../Model/ItemPromotion.md)| This type defines the fields that describe an item promotion. | [optional]

### Return type

[**\Ebay\Sell\Marketing\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
