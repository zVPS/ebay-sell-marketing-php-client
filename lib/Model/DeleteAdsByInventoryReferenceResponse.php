<?php
/**
 * DeleteAdsByInventoryReferenceResponse
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
 * DeleteAdsByInventoryReferenceResponse Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields returned by request to delete a set of ads by inventory reference ID.
 * @package  Ebay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeleteAdsByInventoryReferenceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeleteAdsByInventoryReferenceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ad_ids' => 'string[]',
        'errors' => '\Ebay\Sell\Marketing\Model\Error[]',
        'inventory_reference_id' => 'string',
        'inventory_reference_type' => 'string',
        'status_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ad_ids' => null,
        'errors' => null,
        'inventory_reference_id' => null,
        'inventory_reference_type' => null,
        'status_code' => null
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
        'ad_ids' => 'adIds',
        'errors' => 'errors',
        'inventory_reference_id' => 'inventoryReferenceId',
        'inventory_reference_type' => 'inventoryReferenceType',
        'status_code' => 'statusCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_ids' => 'setAdIds',
        'errors' => 'setErrors',
        'inventory_reference_id' => 'setInventoryReferenceId',
        'inventory_reference_type' => 'setInventoryReferenceType',
        'status_code' => 'setStatusCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_ids' => 'getAdIds',
        'errors' => 'getErrors',
        'inventory_reference_id' => 'getInventoryReferenceId',
        'inventory_reference_type' => 'getInventoryReferenceType',
        'status_code' => 'getStatusCode'
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
        $this->container['ad_ids'] = isset($data['ad_ids']) ? $data['ad_ids'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['inventory_reference_id'] = isset($data['inventory_reference_id']) ? $data['inventory_reference_id'] : null;
        $this->container['inventory_reference_type'] = isset($data['inventory_reference_type']) ? $data['inventory_reference_type'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
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
     * Gets ad_ids
     *
     * @return string[]|null
     */
    public function getAdIds()
    {
        return $this->container['ad_ids'];
    }

    /**
     * Sets ad_ids
     *
     * @param string[]|null $ad_ids The list of ad IDs that were removed from the campaign.
     *
     * @return self
     */
    public function setAdIds($ad_ids)
    {
        $this->container['ad_ids'] = $ad_ids;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Ebay\Sell\Marketing\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Ebay\Sell\Marketing\Model\Error[]|null $errors The container for the errors associated with the request.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets inventory_reference_id
     *
     * @return string|null
     */
    public function getInventoryReferenceId()
    {
        return $this->container['inventory_reference_id'];
    }

    /**
     * Sets inventory_reference_id
     *
     * @param string|null $inventory_reference_id An ID that identifies an a single-item listing or multiple-variation listing that is managed with the Inventory API. The inventory reference ID is a seller-defined value that can be either an SKU for a single-item listing or an inventoryItemGroupKey for a multiple-value listing.
     *
     * @return self
     */
    public function setInventoryReferenceId($inventory_reference_id)
    {
        $this->container['inventory_reference_id'] = $inventory_reference_id;

        return $this;
    }

    /**
     * Gets inventory_reference_type
     *
     * @return string|null
     */
    public function getInventoryReferenceType()
    {
        return $this->container['inventory_reference_type'];
    }

    /**
     * Sets inventory_reference_type
     *
     * @param string|null $inventory_reference_type Indicates the type of item the inventoryReferenceId references. The item can be either an INVENTORY_ITEM or INVENTORY_ITEM_GROUP. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setInventoryReferenceType($inventory_reference_type)
    {
        $this->container['inventory_reference_type'] = $inventory_reference_type;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successfully deleted.
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

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


