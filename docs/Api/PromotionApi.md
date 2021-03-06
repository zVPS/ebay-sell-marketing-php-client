# Ebay\Sell\Marketing\PromotionApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListingSet()**](PromotionApi.md#getListingSet) | **GET** /promotion/{promotion_id}/get_listing_set | 
[**getPromotions()**](PromotionApi.md#getPromotions) | **GET** /promotion | 
[**pausePromotion()**](PromotionApi.md#pausePromotion) | **POST** /promotion/{promotion_id}/pause | 
[**resumePromotion()**](PromotionApi.md#resumePromotion) | **POST** /promotion/{promotion_id}/resume | 


## `getListingSet()`

```php
getListingSet($promotion_id, $limit, $offset, $q, $sort, $status)
```



This method returns the set of listings associated with the promotion_id specified in the path parameter. Call getPromotions to retrieve the IDs of a seller's promotions. The listing details are returned in a paginated set and you can control and results returned using the following query parameters: limit, offset, q, sort, and status. Maximum associated listings returned: 200 Default number of listings returned: 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to get plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US
$limit = 'limit_example'; // string | Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200
$offset = 'offset_example'; // string | Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0
$q = 'q_example'; // string | Reserved for future use.
$sort = 'sort_example'; // string | Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &nbsp;&nbsp;&nbsp;sort=PRICE - Sorts the associated listings by their current price in ascending order &nbsp;&nbsp;&nbsp;sort=-TITLE - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a) Valid values: AVAILABLE PRICE TITLE For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
$status = 'status_example'; // string | This query parameter applies only to markdown promotions. It filters the response based on the indicated status of the promotion. Currently, the only supported value for this parameter is MARKED_DOWN, which indicates active markdown promotions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum

try {
    $apiInstance->getListingSet($promotion_id, $limit, $offset, $q, $sort, $status);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getListingSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to get plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &amp;quot;at sign&amp;quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 | [optional]
 **q** | **string**| Reserved for future use. | [optional]
 **sort** | **string**| Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;PRICE - Sorts the associated listings by their current price in ascending order &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;-TITLE - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a) Valid values: AVAILABLE PRICE TITLE For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField | [optional]
 **status** | **string**| This query parameter applies only to markdown promotions. It filters the response based on the indicated status of the promotion. Currently, the only supported value for this parameter is MARKED_DOWN, which indicates active markdown promotions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum | [optional]

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

## `getPromotions()`

```php
getPromotions($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q, $sort): \Ebay\Sell\Marketing\Model\PromotionsPagedCollection
```



This method returns a list of a seller's undeleted promotions. The call returns up to 200 currently-available promotions on the specified marketplace. While the response body does not include the promotion's discountRules or inventoryCriterion containers, it does include the promotionHref (which you can use to retrieve the complete details of the promotion). Use query parameters to sort and filter the results by the number of promotions to return, the promotion state or type, and the eBay marketplace. You can also supply keywords to limit the response to the promotions that contain that keywords in the title of the promotion. Maximum returned: 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The eBay marketplace ID of the site where the promotion is hosted. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States
$limit = 'limit_example'; // string | Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200
$offset = 'offset_example'; // string | Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0
$promotion_status = 'promotion_status_example'; // string | Specifies the promotion state by which you want to filter the results. The response contains only those promotions that match the state you specify. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of input values: 1
$promotion_type = 'promotion_type_example'; // string | Filters the returned promotions based on their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned: CODED_COUPON &ndash; A coupon code promotion set with createItemPromotion. MARKDOWN_SALE &ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &ndash; A volume pricing promotion set with createItemPromotion.
$q = 'q_example'; // string | A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &quot;iPhone&quot; or &quot;Harry Potter.&quot; Commas that separate keywords are ignored. For example, a keyword string of &quot;iPhone, iPad&quot; equals &quot;iPhone iPad&quot;, and each results in a response that contains promotions with both &quot;iPhone&quot; and &quot;iPad&quot; in the title.
$sort = 'sort_example'; // string | Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &nbsp;&nbsp;&nbsp;sort=END_DATE &nbsp; Sorts the promotions in the response by their end dates in ascending order &nbsp;&nbsp;&nbsp;sort=-PROMOTION_NAME &nbsp; Sorts the promotions by their promotion name in descending alphabetical order (Z-Az-a) Valid values: START_DATE END_DATE PROMOTION_NAME For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField

try {
    $result = $apiInstance->getPromotions($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The eBay marketplace ID of the site where the promotion is hosted. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 | [optional]
 **promotion_status** | **string**| Specifies the promotion state by which you want to filter the results. The response contains only those promotions that match the state you specify. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of input values: 1 | [optional]
 **promotion_type** | **string**| Filters the returned promotions based on their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned: CODED_COUPON &amp;ndash; A coupon code promotion set with createItemPromotion. MARKDOWN_SALE &amp;ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &amp;ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &amp;ndash; A volume pricing promotion set with createItemPromotion. | [optional]
 **q** | **string**| A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. | [optional]
 **sort** | **string**| Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;END_DATE &amp;nbsp; Sorts the promotions in the response by their end dates in ascending order &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;-PROMOTION_NAME &amp;nbsp; Sorts the promotions by their promotion name in descending alphabetical order (Z-Az-a) Valid values: START_DATE END_DATE PROMOTION_NAME For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField | [optional]

### Return type

[**\Ebay\Sell\Marketing\Model\PromotionsPagedCollection**](../Model/PromotionsPagedCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pausePromotion()`

```php
pausePromotion($promotion_id)
```



This method pauses a currently-active (RUNNING) threshold promotion and changes the state of the promotion from RUNNING to PAUSED. Pausing a promotion makes the promotion temporarily unavailable to buyers and any currently-incomplete transactions will not receive the promotional offer until the promotion is resumed. Also, promotion teasers are not displayed when a promotion is paused. Pass the ID of the promotion you want to pause using the promotion_id path parameter. Call getPromotions to retrieve the IDs of the seller's promotions. Note: You can only pause threshold promotions (you cannot pause markdown promotions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to pause plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US

try {
    $apiInstance->pausePromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->pausePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to pause plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &amp;quot;at sign&amp;quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US |

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

## `resumePromotion()`

```php
resumePromotion($promotion_id)
```



This method restarts a threshold promotion that was previously paused and changes the state of the promotion from PAUSED to RUNNING. Only promotions that have been previously paused can be resumed. Resuming a promotion reinstates the promotional teasers and any transactions that were in motion before the promotion was paused will again be eligible for the promotion. Pass the ID of the promotion you want to resume using the promotion_id path parameter. Call getPromotions to retrieve the IDs of the seller's promotions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to resume plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US

try {
    $apiInstance->resumePromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->resumePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to resume plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an &amp;quot;at sign&amp;quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. Example: 1********5@EBAY_US |

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
