# # CouponConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**coupon_code** | **string** | A unique code that buyers can use during checkout to receive a discount. The code must be unique across eBay. The code must be from 8-15 alphanumeric characters and can contain no more than two dashes ( - ). This is required when the promotion type is CODED_COUPON. | [optional]
**coupon_type** | **string** | This indicates the type of Coded Coupon promotion, and is required when the promotion type is CODED_COUPON. Supported types: PRIVATE_SINGLE_SELLER_COUPON: Anyone can use and share the coupon code, but it isn&#39;t posted on eBay. PUBLIC_SINGLE_SELLER_COUPON: Anyone can find the coupon code on eBay and use it. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/sme:CouponTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**max_coupon_redemption_per_user** | **int** | This sets the limit on the number of times a buyer can use this coupon. The range of values is 1-10. If no value is provided, a buyer can use the coupon an unlimited number of times. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
