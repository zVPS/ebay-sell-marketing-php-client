<?php
/**
 * SelectionRule
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * The Marketing API offers two platforms that sellers can use to promote and advertise their products: Promoted Listings is an eBay ad service that lets sellers set up ad campaigns for the products they want to promote. eBay displays the ads in search results and in other marketing modules as SPONSORED listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, see Promoted Listings. Promotions Manager gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as &quot;20% off&quot; and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion teasers throughout buyer flows. For complete details, see Promotions Manager. Marketing reports, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts. Important! Sellers must have an active eBay Store subscription, and they must accept the Terms and Conditions before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the &quot;requirements and restrictions&quot; sections for Promoted Listings and Promotions Manager. The table below lists all the Marketing API calls grouped by resource.
 *
 * The version of the OpenAPI document: v1.10.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Marketing\Model;

use \ArrayAccess;
use \Ebay\Sell\Marketing\ObjectSerializer;

/**
 * SelectionRule Class Doc Comment
 *
 * @category Class
 * @description This type specifies the selection rules used to create a campaign.
 * @package  Ebay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SelectionRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SelectionRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brands' => 'string[]',
        'category_ids' => 'string[]',
        'category_scope' => 'string',
        'listing_condition_ids' => 'string[]',
        'max_price' => '\Ebay\Sell\Marketing\Model\Amount',
        'min_price' => '\Ebay\Sell\Marketing\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brands' => null,
        'category_ids' => null,
        'category_scope' => null,
        'listing_condition_ids' => null,
        'max_price' => null,
        'min_price' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'brands' => 'brands',
        'category_ids' => 'categoryIds',
        'category_scope' => 'categoryScope',
        'listing_condition_ids' => 'listingConditionIds',
        'max_price' => 'maxPrice',
        'min_price' => 'minPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brands' => 'setBrands',
        'category_ids' => 'setCategoryIds',
        'category_scope' => 'setCategoryScope',
        'listing_condition_ids' => 'setListingConditionIds',
        'max_price' => 'setMaxPrice',
        'min_price' => 'setMinPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brands' => 'getBrands',
        'category_ids' => 'getCategoryIds',
        'category_scope' => 'getCategoryScope',
        'listing_condition_ids' => 'getListingConditionIds',
        'max_price' => 'getMaxPrice',
        'min_price' => 'getMinPrice'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['brands'] = $data['brands'] ?? null;
        $this->container['category_ids'] = $data['category_ids'] ?? null;
        $this->container['category_scope'] = $data['category_scope'] ?? null;
        $this->container['listing_condition_ids'] = $data['listing_condition_ids'] ?? null;
        $this->container['max_price'] = $data['max_price'] ?? null;
        $this->container['min_price'] = $data['min_price'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets brands
     *
     * @return string[]|null
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     *
     * @param string[]|null $brands A list of the brands of the items to be included in the campaign.
     *
     * @return self
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets category_ids
     *
     * @return string[]|null
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param string[]|null $category_ids A list of category IDs associated with the listings to be included in the campaign. Ada are created for all the seller's items listed in the specified categories, up to a maximum of 50,000 items. The IDs can be either a list of eBay category IDs (from the site where the item is hosted), or a list of category IDs defined and used by the seller's store. eBay Marketplace category IDs To get a list of marketplace category IDs, do one of the following: Get a list of category IDs for a marketplace by adding /sch/allcategories/all-categories to the marketplace URL when browsing the site. For example: http://www.ebay.com.au/sch/allcategories/all-categories Navigate to the desired category on the host site and copy the category ID from the URL. These options are also available for the US marketplace: See Category Changes for the latest list of category IDs. Retrieve a list of category IDs using the Taxonomy API. Seller store category IDs Because store category IDs are uniquely defined and maintained by each seller, this service cannot provide a list of a seller's IDs. However, sellers can retrieve their store category IDs as follows: Go to Seller Hub &gt; Marketing. Click Manage store categories. A list of your store categories displays. Click the All categories link displayed at the bottom of the list. A complete list of your store categories and their associated store category IDs displays.
     *
     * @return self
     */
    public function setCategoryIds($category_ids)
    {
        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets category_scope
     *
     * @return string|null
     */
    public function getCategoryScope()
    {
        return $this->container['category_scope'];
    }

    /**
     * Sets category_scope
     *
     * @param string|null $category_scope Indicates the source of the category ID; eBay or seller's store. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CategoryScopeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCategoryScope($category_scope)
    {
        $this->container['category_scope'] = $category_scope;

        return $this;
    }

    /**
     * Gets listing_condition_ids
     *
     * @return string[]|null
     */
    public function getListingConditionIds()
    {
        return $this->container['listing_condition_ids'];
    }

    /**
     * Sets listing_condition_ids
     *
     * @param string[]|null $listing_condition_ids The ID of the listing's condition. Note: In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Valid values: 1000 = New 2000 = Certified refurbished 2500 = Seller refurbished 3000 = Used/Like new/Pre owned
     *
     * @return self
     */
    public function setListingConditionIds($listing_condition_ids)
    {
        $this->container['listing_condition_ids'] = $listing_condition_ids;

        return $this;
    }

    /**
     * Gets max_price
     *
     * @return \Ebay\Sell\Marketing\Model\Amount|null
     */
    public function getMaxPrice()
    {
        return $this->container['max_price'];
    }

    /**
     * Sets max_price
     *
     * @param \Ebay\Sell\Marketing\Model\Amount|null $max_price max_price
     *
     * @return self
     */
    public function setMaxPrice($max_price)
    {
        $this->container['max_price'] = $max_price;

        return $this;
    }

    /**
     * Gets min_price
     *
     * @return \Ebay\Sell\Marketing\Model\Amount|null
     */
    public function getMinPrice()
    {
        return $this->container['min_price'];
    }

    /**
     * Sets min_price
     *
     * @param \Ebay\Sell\Marketing\Model\Amount|null $min_price min_price
     *
     * @return self
     */
    public function setMinPrice($min_price)
    {
        $this->container['min_price'] = $min_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

