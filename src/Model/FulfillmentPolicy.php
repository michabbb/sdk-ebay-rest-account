<?php
/**
 * FulfillmentPolicy
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Account API
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br><br>For details on the restrictions and availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#acct-restrictions\">API restrictions</a>.
 *
 * The version of the OpenAPI document: v1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\account\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\account\ObjectSerializer;

/**
 * FulfillmentPolicy Class Doc Comment
 *
 * @category Class
 * @description This root container defines a seller&#39;s fulfillment policy for a specific marketplace and category type. fulfillmentPolicy encapsulates a seller&#39;s terms for fulfilling an order and includes the shipping carriers and services used for shipment and time the seller takes to ship an order. While each seller must define at least one fulfillment policy for every marketplace into which they sell, sellers can define multiple fulfillment policies for a single marketplace by specifying different configurations for the unique policies.
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryTypes' => '\macropage\SDKs\ebay\rest\account\Model\CategoryType[]',
        'description' => 'string',
        'freightShipping' => 'bool',
        'fulfillmentPolicyId' => 'string',
        'globalShipping' => 'bool',
        'handlingTime' => '\macropage\SDKs\ebay\rest\account\Model\TimeDuration',
        'localPickup' => 'bool',
        'marketplaceId' => 'string',
        'name' => 'string',
        'pickupDropOff' => 'bool',
        'shippingOptions' => '\macropage\SDKs\ebay\rest\account\Model\ShippingOption[]',
        'shipToLocations' => '\macropage\SDKs\ebay\rest\account\Model\RegionSet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'categoryTypes' => null,
        'description' => null,
        'freightShipping' => null,
        'fulfillmentPolicyId' => null,
        'globalShipping' => null,
        'handlingTime' => null,
        'localPickup' => null,
        'marketplaceId' => null,
        'name' => null,
        'pickupDropOff' => null,
        'shippingOptions' => null,
        'shipToLocations' => null
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
        'categoryTypes' => 'categoryTypes',
        'description' => 'description',
        'freightShipping' => 'freightShipping',
        'fulfillmentPolicyId' => 'fulfillmentPolicyId',
        'globalShipping' => 'globalShipping',
        'handlingTime' => 'handlingTime',
        'localPickup' => 'localPickup',
        'marketplaceId' => 'marketplaceId',
        'name' => 'name',
        'pickupDropOff' => 'pickupDropOff',
        'shippingOptions' => 'shippingOptions',
        'shipToLocations' => 'shipToLocations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryTypes' => 'setCategoryTypes',
        'description' => 'setDescription',
        'freightShipping' => 'setFreightShipping',
        'fulfillmentPolicyId' => 'setFulfillmentPolicyId',
        'globalShipping' => 'setGlobalShipping',
        'handlingTime' => 'setHandlingTime',
        'localPickup' => 'setLocalPickup',
        'marketplaceId' => 'setMarketplaceId',
        'name' => 'setName',
        'pickupDropOff' => 'setPickupDropOff',
        'shippingOptions' => 'setShippingOptions',
        'shipToLocations' => 'setShipToLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryTypes' => 'getCategoryTypes',
        'description' => 'getDescription',
        'freightShipping' => 'getFreightShipping',
        'fulfillmentPolicyId' => 'getFulfillmentPolicyId',
        'globalShipping' => 'getGlobalShipping',
        'handlingTime' => 'getHandlingTime',
        'localPickup' => 'getLocalPickup',
        'marketplaceId' => 'getMarketplaceId',
        'name' => 'getName',
        'pickupDropOff' => 'getPickupDropOff',
        'shippingOptions' => 'getShippingOptions',
        'shipToLocations' => 'getShipToLocations'
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
        $this->container['categoryTypes'] = isset($data['categoryTypes']) ? $data['categoryTypes'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['freightShipping'] = isset($data['freightShipping']) ? $data['freightShipping'] : null;
        $this->container['fulfillmentPolicyId'] = isset($data['fulfillmentPolicyId']) ? $data['fulfillmentPolicyId'] : null;
        $this->container['globalShipping'] = isset($data['globalShipping']) ? $data['globalShipping'] : null;
        $this->container['handlingTime'] = isset($data['handlingTime']) ? $data['handlingTime'] : null;
        $this->container['localPickup'] = isset($data['localPickup']) ? $data['localPickup'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pickupDropOff'] = isset($data['pickupDropOff']) ? $data['pickupDropOff'] : null;
        $this->container['shippingOptions'] = isset($data['shippingOptions']) ? $data['shippingOptions'] : null;
        $this->container['shipToLocations'] = isset($data['shipToLocations']) ? $data['shipToLocations'] : null;
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
     * Gets categoryTypes
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\CategoryType[]|null
     */
    public function getCategoryTypes()
    {
        return $this->container['categoryTypes'];
    }

    /**
     * Sets categoryTypes
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\CategoryType[]|null $categoryTypes The CategoryTypeEnum value to which this policy applies. Used to discern accounts that sell motor vehicles from those that don't. (Currently, each policy can be set to only one categoryTypes value at a time.)
     *
     * @return $this
     */
    public function setCategoryTypes($categoryTypes)
    {
        $this->container['categoryTypes'] = $categoryTypes;

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
     * @param string|null $description An optional seller-defined description of the fulfillment policy for internal use (this value is not displayed to end users). Max length: 250
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets freightShipping
     *
     * @return bool|null
     */
    public function getFreightShipping()
    {
        return $this->container['freightShipping'];
    }

    /**
     * Sets freightShipping
     *
     * @param bool|null $freightShipping If set to true, the seller offers freight shipping. Default: false
     *
     * @return $this
     */
    public function setFreightShipping($freightShipping)
    {
        $this->container['freightShipping'] = $freightShipping;

        return $this;
    }

    /**
     * Gets fulfillmentPolicyId
     *
     * @return string|null
     */
    public function getFulfillmentPolicyId()
    {
        return $this->container['fulfillmentPolicyId'];
    }

    /**
     * Sets fulfillmentPolicyId
     *
     * @param string|null $fulfillmentPolicyId A unique eBay-assigned ID for the fulfillment policy. This ID is generated when the policy is created.
     *
     * @return $this
     */
    public function setFulfillmentPolicyId($fulfillmentPolicyId)
    {
        $this->container['fulfillmentPolicyId'] = $fulfillmentPolicyId;

        return $this;
    }

    /**
     * Gets globalShipping
     *
     * @return bool|null
     */
    public function getGlobalShipping()
    {
        return $this->container['globalShipping'];
    }

    /**
     * Sets globalShipping
     *
     * @param bool|null $globalShipping If set to true, the seller has opted-in to the eBay Global Shipping Program and that they use that service for their international shipments. Setting this value automatically sets the international shipping service for the policy to International Priority Shipping and the buyer does not need to set any other shipping services for their INTERNATIONAL shipping options (unless they sell items not covered by the Global Shipping Program). If this value is set to false, the seller is responsible for manually specifying the international shipping services, as described in Setting up worldwide shipping. To opt-in to the Global Shipping Program, log in to eBay and navigate to My Account &gt; Site Preferences &gt; Shipping preferences. Default: false
     *
     * @return $this
     */
    public function setGlobalShipping($globalShipping)
    {
        $this->container['globalShipping'] = $globalShipping;

        return $this;
    }

    /**
     * Gets handlingTime
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\TimeDuration|null
     */
    public function getHandlingTime()
    {
        return $this->container['handlingTime'];
    }

    /**
     * Sets handlingTime
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\TimeDuration|null $handlingTime handlingTime
     *
     * @return $this
     */
    public function setHandlingTime($handlingTime)
    {
        $this->container['handlingTime'] = $handlingTime;

        return $this;
    }

    /**
     * Gets localPickup
     *
     * @return bool|null
     */
    public function getLocalPickup()
    {
        return $this->container['localPickup'];
    }

    /**
     * Sets localPickup
     *
     * @param bool|null $localPickup If set to true, the seller offers local pickup of their items. Local pickup is supported by the Inventory API, and it can be used with Add/Revise/Relist calls. To enable local pickup, a seller (1) must be eligible for local pickup and (2) must set this boolean field to 'true'. Currently, local pickup is available to only large retail merchants and can be applied to only multiple-quantity, fixed-price listings. In addition to setting this field, the merchant must also do the following to enable the &quot;Local Pickup&quot; option on a multiple-quantity, fixed-price listing: Have inventory for the product at one or more physical stores tied to the merchant's account. Sellers can use the createInventoryLocaion method in the Inventory API to associate physical stores to their account and they can then can add inventory to specific store locations. Include the seller-defined SKU value of the product(s) in the request. For single-variation listings, the SKU value is specified in the Item.SKU field and for multiple-variation listings, the SKU value(s) are specified in the Item.Variations.Variation.SKU field(s). Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: Include only one paymentMethods field in the payment policy and set its value to PAYPAL. Include a valid PayPal contact in the recipientAccountReference.referenceId field of the payment policy. Have a valid store location with a complete street address. When a seller is successful at listing an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the &quot;Available for In-Store Pickup&quot; option on the listing, along with information on the closest store that has the item.Default: false
     *
     * @return $this
     */
    public function setLocalPickup($localPickup)
    {
        $this->container['localPickup'] = $localPickup;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The ID of the eBay marketplace to which this fulfillment policy applies. If this value is not specified, value defaults to the seller's eBay registration site. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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
     * @param string|null $name A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pickupDropOff
     *
     * @return bool|null
     */
    public function getPickupDropOff()
    {
        return $this->container['pickupDropOff'];
    }

    /**
     * Sets pickupDropOff
     *
     * @param bool|null $pickupDropOff If set to true, the seller offers the &quot;Click and Collect&quot; feature. Click and Collect is supported by the Inventory API, and it can be used with Add/Revise/Relist calls. To enable &quot;Click and Collect&quot;, a seller (1) must be eligible for Click and Collect and (2) must set this boolean field to 'true'. Currently, Click and Collect is available to only large retail merchants selling in the eBay AU and UK marketplaces. In addition to setting this field, the merchant must also do the following to enable the &quot;Click and Collect&quot; option on a listing: Have inventory for the product at one or more physical stores tied to the merchant's account. Sellers can use the createInventoryLocaion method in the Inventory API to associate physical stores to their account and they can then can add inventory to specific store locations. Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: Set the immediatePay flag in the payment policy to 'true'. Include only one paymentMethods field in the payment policy and set its value to PAYPAL. Include a valid PayPal contact in the recipientAccountReference.referenceId field of the payment policy. Have a valid store location with a complete street address. When a UK merchant successfully lists an item with Click and Collect, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the &quot;Available for Click and Collect&quot; option on the listing, along with information on the closest store that has the item.Default: false
     *
     * @return $this
     */
    public function setPickupDropOff($pickupDropOff)
    {
        $this->container['pickupDropOff'] = $pickupDropOff;

        return $this;
    }

    /**
     * Gets shippingOptions
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\ShippingOption[]|null
     */
    public function getShippingOptions()
    {
        return $this->container['shippingOptions'];
    }

    /**
     * Sets shippingOptions
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\ShippingOption[]|null $shippingOptions A list that defines the seller's shipping configurations for DOMESTIC and INTERNATIONAL order shipments. shippingOptions is a list with a single element if the seller ships to only domestic locations. If the seller also ships internationally, the list contains a second element that defines their international shipping options. Shipping options configure the high-level shipping settings that apply to orders, such as flat-rate or calculated shipping, any rate tables the seller wants to associate with the shipping services, plus other details (such as the shippingServices offered for domestic or international shipments).
     *
     * @return $this
     */
    public function setShippingOptions($shippingOptions)
    {
        $this->container['shippingOptions'] = $shippingOptions;

        return $this;
    }

    /**
     * Gets shipToLocations
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\RegionSet|null
     */
    public function getShipToLocations()
    {
        return $this->container['shipToLocations'];
    }

    /**
     * Sets shipToLocations
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\RegionSet|null $shipToLocations shipToLocations
     *
     * @return $this
     */
    public function setShipToLocations($shipToLocations)
    {
        $this->container['shipToLocations'] = $shipToLocations;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


