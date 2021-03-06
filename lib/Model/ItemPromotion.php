<?php
/**
 * ItemPromotion
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
 * ItemPromotion Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields that describe a threshold promotion and includes the promotional discount, the items included in the promotion, and the rules that specify when the promotion is applied.
 * @package  Ebay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemPromotion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemPromotion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apply_discount_to_single_item_only' => 'bool',
        'budget' => '\Ebay\Sell\Marketing\Model\Amount',
        'coupon_configuration' => '\Ebay\Sell\Marketing\Model\CouponConfiguration',
        'description' => 'string',
        'discount_rules' => '\Ebay\Sell\Marketing\Model\DiscountRule[]',
        'end_date' => 'string',
        'inventory_criterion' => '\Ebay\Sell\Marketing\Model\InventoryCriterion',
        'marketplace_id' => 'string',
        'name' => 'string',
        'priority' => 'string',
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
        'apply_discount_to_single_item_only' => null,
        'budget' => null,
        'coupon_configuration' => null,
        'description' => null,
        'discount_rules' => null,
        'end_date' => null,
        'inventory_criterion' => null,
        'marketplace_id' => null,
        'name' => null,
        'priority' => null,
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
        'apply_discount_to_single_item_only' => 'applyDiscountToSingleItemOnly',
        'budget' => 'budget',
        'coupon_configuration' => 'couponConfiguration',
        'description' => 'description',
        'discount_rules' => 'discountRules',
        'end_date' => 'endDate',
        'inventory_criterion' => 'inventoryCriterion',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'priority' => 'priority',
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
        'apply_discount_to_single_item_only' => 'setApplyDiscountToSingleItemOnly',
        'budget' => 'setBudget',
        'coupon_configuration' => 'setCouponConfiguration',
        'description' => 'setDescription',
        'discount_rules' => 'setDiscountRules',
        'end_date' => 'setEndDate',
        'inventory_criterion' => 'setInventoryCriterion',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'priority' => 'setPriority',
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
        'apply_discount_to_single_item_only' => 'getApplyDiscountToSingleItemOnly',
        'budget' => 'getBudget',
        'coupon_configuration' => 'getCouponConfiguration',
        'description' => 'getDescription',
        'discount_rules' => 'getDiscountRules',
        'end_date' => 'getEndDate',
        'inventory_criterion' => 'getInventoryCriterion',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'priority' => 'getPriority',
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
        $this->container['apply_discount_to_single_item_only'] = isset($data['apply_discount_to_single_item_only']) ? $data['apply_discount_to_single_item_only'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['coupon_configuration'] = isset($data['coupon_configuration']) ? $data['coupon_configuration'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_rules'] = isset($data['discount_rules']) ? $data['discount_rules'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['inventory_criterion'] = isset($data['inventory_criterion']) ? $data['inventory_criterion'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
     * Gets apply_discount_to_single_item_only
     *
     * @return bool|null
     */
    public function getApplyDiscountToSingleItemOnly()
    {
        return $this->container['apply_discount_to_single_item_only'];
    }

    /**
     * Sets apply_discount_to_single_item_only
     *
     * @param bool|null $apply_discount_to_single_item_only This flag is relevant in only when promotionType is set to VOLUME_DISCOUNT. For details on volume pricing promotions, see Configuring volume pricing discounts. If set to true, the discount is applied only when the buyer purchases multiple quantities of a single item in the promotion. Otherwise, the promotional discount applies to multiple quantities of any items in the promotion. Different variations of a multi-variation item are considered to be the same item. Note that this flag is not relevant if the inventoryCriterion container identifies a single listing ID for the promotion.
     *
     * @return self
     */
    public function setApplyDiscountToSingleItemOnly($apply_discount_to_single_item_only)
    {
        $this->container['apply_discount_to_single_item_only'] = $apply_discount_to_single_item_only;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \Ebay\Sell\Marketing\Model\Amount|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \Ebay\Sell\Marketing\Model\Amount|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets coupon_configuration
     *
     * @return \Ebay\Sell\Marketing\Model\CouponConfiguration|null
     */
    public function getCouponConfiguration()
    {
        return $this->container['coupon_configuration'];
    }

    /**
     * Sets coupon_configuration
     *
     * @param \Ebay\Sell\Marketing\Model\CouponConfiguration|null $coupon_configuration coupon_configuration
     *
     * @return self
     */
    public function setCouponConfiguration($coupon_configuration)
    {
        $this->container['coupon_configuration'] = $coupon_configuration;

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
     * @param string|null $description This is the seller-defined &quot;tag line&quot; for the offer, such as &quot;Save on designer shoes.&quot; The tag line appears under the &quot;offer-type text&quot; that is generated for the promotion and is displayed on the offer tile that's shown on the seller's All Offers page, and on the event page for the promotion. Note: Offer-type text is a teaser that's presented throughout the buyer's journey through the sales flow and is generated by eBay. The offer-type text is not editable by the seller&mdash;it's derived from the settings in the discountRules and discountSpecification fields&mdash;and can be, for example, &quot;Extra 20% off when you buy 3+&quot;. Maximum length: 50 Required if you are configuring CODED_COUPON, ORDER_DISCOUNT, or MARKDOWN_SALE promotions (and not valid for VOLUME_DISCOUNT promotions).
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_rules
     *
     * @return \Ebay\Sell\Marketing\Model\DiscountRule[]|null
     */
    public function getDiscountRules()
    {
        return $this->container['discount_rules'];
    }

    /**
     * Sets discount_rules
     *
     * @param \Ebay\Sell\Marketing\Model\DiscountRule[]|null $discount_rules This container defines a promotion using the following two required fields: discountBenefit &ndash; Defines a discount as either a monetary amount or a percentage that is subtracted from the sales price of an item, a set of items, or an order. discountSpecification &ndash; Defines a set of rules that determine when the promotion is applied. Note: For volume pricing, you must specify at least two and not more than four discountBenefit/discountSpecification pairs. In addition, you must define each set of rules with a ruleOrder value that corresponds with the order of volume discounts you present. Tip: Refer to Specifying item promotion discounts for information and examples on how to combine discountBenefit and discountSpecification to create different types of promotions.
     *
     * @return self
     */
    public function setDiscountRules($discount_rules)
    {
        $this->container['discount_rules'] = $discount_rules;

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
     * Gets inventory_criterion
     *
     * @return \Ebay\Sell\Marketing\Model\InventoryCriterion|null
     */
    public function getInventoryCriterion()
    {
        return $this->container['inventory_criterion'];
    }

    /**
     * Sets inventory_criterion
     *
     * @param \Ebay\Sell\Marketing\Model\InventoryCriterion|null $inventory_criterion inventory_criterion
     *
     * @return self
     */
    public function setInventoryCriterion($inventory_criterion)
    {
        $this->container['inventory_criterion'] = $inventory_criterion;

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
     * @param string|null $marketplace_id The eBay marketplace ID of the site where the threshold promotion is hosted. Threshold promotions are currently supported on a limited number of eBay marketplaces. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
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
     * @param string|null $name The seller-defined name or &quot;title&quot; of the promotion that the seller can use to identify a promotion. This label is not displayed in end-user flows. Maximum length: 90
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
     * @param string|null $promotion_image_url This field is required for CODED_COUPON and MARKDOWN_SALE promotions, optional for ORDER_DISCOUNT promotions, and not valid for VOLUME_DISCOUNT promotions. Populate this field with a URL that points to an image to be used with the promotion. This image is displayed on the seller's All Offers page. The URL must point to either JPEG or PNG image and it must be a minimum of 500x500 pixels in dimension and cannot exceed 12Mb in size.
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
     * @param string|null $promotion_status The current status of the promotion. When creating a new promotion, this value must be set to either DRAFT or SCHEDULED. Note that you must set this value to SCHEDULED when you update a RUNNING promotion. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay API documentation</a>
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
     * @param string|null $promotion_type Use this field to specify the type of the promotion you are creating. The supported types are: CODED_COUPON &ndash; A coupon code promotion set with createItemPromotion. MARKDOWN_SALE &ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &ndash; A volume pricing promotion set with createItemPromotion. See the Promotions Manager documentation for details. Required if you are creating a volume pricing promotion (VOLUME_DISCOUNT). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
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


