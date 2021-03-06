<?php
/**
 * PromotionDetail
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
 * PromotionDetail Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields that describe a promotion. This includes all the information about a promotion except for the listings that are a part of the promotion.
 * @package  Ebay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PromotionDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'coupon_code' => 'string',
        'description' => 'string',
        'end_date' => 'string',
        'marketplace_id' => 'string',
        'name' => 'string',
        'priority' => 'string',
        'promotion_href' => 'string',
        'promotion_id' => 'string',
        'promotion_image_url' => 'string',
        'promotion_status' => 'string',
        'promotion_type' => 'string',
        'start_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'coupon_code' => null,
        'description' => null,
        'end_date' => null,
        'marketplace_id' => null,
        'name' => null,
        'priority' => null,
        'promotion_href' => null,
        'promotion_id' => null,
        'promotion_image_url' => null,
        'promotion_status' => null,
        'promotion_type' => null,
        'start_date' => null
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
        'coupon_code' => 'couponCode',
        'description' => 'description',
        'end_date' => 'endDate',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'priority' => 'priority',
        'promotion_href' => 'promotionHref',
        'promotion_id' => 'promotionId',
        'promotion_image_url' => 'promotionImageUrl',
        'promotion_status' => 'promotionStatus',
        'promotion_type' => 'promotionType',
        'start_date' => 'startDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coupon_code' => 'setCouponCode',
        'description' => 'setDescription',
        'end_date' => 'setEndDate',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'priority' => 'setPriority',
        'promotion_href' => 'setPromotionHref',
        'promotion_id' => 'setPromotionId',
        'promotion_image_url' => 'setPromotionImageUrl',
        'promotion_status' => 'setPromotionStatus',
        'promotion_type' => 'setPromotionType',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coupon_code' => 'getCouponCode',
        'description' => 'getDescription',
        'end_date' => 'getEndDate',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'priority' => 'getPriority',
        'promotion_href' => 'getPromotionHref',
        'promotion_id' => 'getPromotionId',
        'promotion_image_url' => 'getPromotionImageUrl',
        'promotion_status' => 'getPromotionStatus',
        'promotion_type' => 'getPromotionType',
        'start_date' => 'getStartDate'
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
        $this->container['coupon_code'] = isset($data['coupon_code']) ? $data['coupon_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['promotion_href'] = isset($data['promotion_href']) ? $data['promotion_href'] : null;
        $this->container['promotion_id'] = isset($data['promotion_id']) ? $data['promotion_id'] : null;
        $this->container['promotion_image_url'] = isset($data['promotion_image_url']) ? $data['promotion_image_url'] : null;
        $this->container['promotion_status'] = isset($data['promotion_status']) ? $data['promotion_status'] : null;
        $this->container['promotion_type'] = isset($data['promotion_type']) ? $data['promotion_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
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
     * Gets coupon_code
     *
     * @return string|null
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string|null $coupon_code A unique code that buyers can use during checkout to receive a discount. The code must be unique across eBay.
     *
     * @return self
     */
    public function setCouponCode($coupon_code)
    {
        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description This is the seller-defined &quot;tag line&quot; for the offer, such as &quot;Save on designer shoes.&quot; Tag lines appear under the &quot;offer-type text&quot; that is generated for a promotion and displayed under the offer tile that is shown on the seller's All Offers page and on the promotion's event page. Note: Offer-type text is a teaser that's presented throughout the buyer's journey through the sales flow and is generated by eBay. This text is not editable by the seller&mdash;it's derived from the settings in the discountRules and discountSpecification fields&mdash;and can be, for example, &quot;Extra 20% off when you buy 3+&quot;. Maximum length: 50 Required if you are configuring ORDER_DISCOUNT or MARKDOWN_SALE promotions (and not valid for VOLUME_DISCOUNT promotions).
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date The date and time the promotion ends in UTC format (yyyy-MM-ddThh:mm:ssZ). If this field is blank (null), it indicates the promotion has no end date. For display purposes, convert this time into the local time of the seller.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The eBay marketplace ID of the site where the promotion is hosted. Threshold promotions are supported on a select set of marketplaces while markdown promotions are supported on all eBay marketplaces. Valid values for threshold promotions are as follows: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The seller-defined name or &quot;title&quot; of the promotion, such as &quot;Buy 1 Get 1&quot;, that the seller can use to identify a promotion. This label is not displayed in end-user flows. Maximum length: 90
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority Applicable for only ORDER_DISCOUNT promotions, this field indicates the precedence of the promotion, which is used to determine the position of a promotion on the seller's All Offers page. If an item is associated with multiple promotions, the promotion with the higher priority takes precedence. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionPriorityEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets promotion_href
     *
     * @return string|null
     */
    public function getPromotionHref()
    {
        return $this->container['promotion_href'];
    }

    /**
     * Sets promotion_href
     *
     * @param string|null $promotion_href The URI of the promotion details.
     *
     * @return self
     */
    public function setPromotionHref($promotion_href)
    {
        $this->container['promotion_href'] = $promotion_href;

        return $this;
    }

    /**
     * Gets promotion_id
     *
     * @return string|null
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id
     *
     * @param string|null $promotion_id A unique eBay-assigned ID for the promotion that's generated when the promotion is created.
     *
     * @return self
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets promotion_image_url
     *
     * @return string|null
     */
    public function getPromotionImageUrl()
    {
        return $this->container['promotion_image_url'];
    }

    /**
     * Sets promotion_image_url
     *
     * @param string|null $promotion_image_url Required for CODED_COUPON and MARKDOWN_SALE promotions, optional for ORDER_DISCOUNT promotions, and not applicable for VOLUME_DISCOUNT promotions, this field is a URL that points to an image for the promotion. This image is displayed on the seller's All Offers page. The URL must point to either JPEG or PNG image and it must be a minimum of 500x500 pixels in dimension and cannot exceed 12Mb in size.
     *
     * @return self
     */
    public function setPromotionImageUrl($promotion_image_url)
    {
        $this->container['promotion_image_url'] = $promotion_image_url;

        return $this;
    }

    /**
     * Gets promotion_status
     *
     * @return string|null
     */
    public function getPromotionStatus()
    {
        return $this->container['promotion_status'];
    }

    /**
     * Sets promotion_status
     *
     * @param string|null $promotion_status The current status of the promotion. When creating a new promotion, you must set this value to either DRAFT or SCHEDULED. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPromotionStatus($promotion_status)
    {
        $this->container['promotion_status'] = $promotion_status;

        return $this;
    }

    /**
     * Gets promotion_type
     *
     * @return string|null
     */
    public function getPromotionType()
    {
        return $this->container['promotion_type'];
    }

    /**
     * Sets promotion_type
     *
     * @param string|null $promotion_type Indicates type of the promotion, either CODED_COUPON, MARKDOWN_SALE, ORDER_DISCOUNT, or VOLUME_DISCOUNT. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPromotionType($promotion_type)
    {
        $this->container['promotion_type'] = $promotion_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date The date and time the promotion starts in UTC format (yyyy-MM-ddThh:mm:ssZ). For display purposes, convert this time into the local time of the seller.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
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


