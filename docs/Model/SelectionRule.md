# # SelectionRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brands** | **string[]** | A list of the brands of the items to be included in the campaign. | [optional]
**category_ids** | **string[]** | A list of category IDs associated with the listings to be included in the campaign. Ada are created for all the seller&#39;s items listed in the specified categories, up to a maximum of 50,000 items. The IDs can be either a list of eBay category IDs (from the site where the item is hosted), or a list of category IDs defined and used by the seller&#39;s store. eBay Marketplace category IDs To get a list of marketplace category IDs, do one of the following: Get a list of category IDs for a marketplace by adding /sch/allcategories/all-categories to the marketplace URL when browsing the site. For example: http://www.ebay.com.au/sch/allcategories/all-categories Navigate to the desired category on the host site and copy the category ID from the URL. These options are also available for the US marketplace: See Category Changes for the latest list of category IDs. Retrieve a list of category IDs using the Taxonomy API. Seller store category IDs Because store category IDs are uniquely defined and maintained by each seller, this service cannot provide a list of a seller&#39;s IDs. However, sellers can retrieve their store category IDs as follows: Go to Seller Hub &amp;gt; Marketing. Click Manage store categories. A list of your store categories displays. Click the All categories link displayed at the bottom of the list. A complete list of your store categories and their associated store category IDs displays. | [optional]
**category_scope** | **string** | Indicates the source of the category ID; eBay or seller&#39;s store. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/sme:CategoryScopeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**listing_condition_ids** | **string[]** | The ID of the listing&#39;s condition. Note: In all eBay marketplaces, Condition ID 2000 now maps to an item condition of &#39;Certified Refurbished&#39;, and not &#39;Manufacturer Refurbished&#39;. To list an item as &#39;Certified Refurbished&#39;, a seller must be pre-qualified by eBay for this feature. Valid values: 1000 &#x3D; New 2000 &#x3D; Certified refurbished 2500 &#x3D; Seller refurbished 3000 &#x3D; Used/Like new/Pre owned | [optional]
**max_price** | [**\Ebay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional]
**min_price** | [**\Ebay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
