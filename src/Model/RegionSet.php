<?php
/**
 * RegionSet
 *
 * PHP version 5
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
 * OpenAPI spec version: v1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * RegionSet Class Doc Comment
 *
 * @category Class
 * @description This complex type contains the regionIncluded and regionExcluded fields, which indicate the areas to where the seller does and doesn&#39;t ship. Normally a seller ships to as many areas as possible using both DOMESTIC and INTERNATIONAL shipping options, and they don&#39;t have a need to exclude any regions from their ship-to locations. Here, there&#39;s no reason to set regionExcluded fields. However, it makes sense to set the regionExcluded field when a seller wants to exclude a small area that&#39;s within a larger area they service. For example, suppose a seller indicates they ship &#39;Worldwide&#39;, but for some reason must exclude a specific country, or world region. Note: Configuring the shipToLocations is tricky because the regionIncluded and regionExcluded fields are valid in different parts of the schema and their allowable settings vary upon the context. For details on setting these fields, see .
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RegionSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegionSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'regionExcluded' => '\macropage\SDKs\ebay\rest\account\Model\Region[]',
        'regionIncluded' => '\macropage\SDKs\ebay\rest\account\Model\Region[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'regionExcluded' => null,
        'regionIncluded' => null
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
        'regionExcluded' => 'regionExcluded',
        'regionIncluded' => 'regionIncluded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'regionExcluded' => 'setRegionExcluded',
        'regionIncluded' => 'setRegionIncluded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'regionExcluded' => 'getRegionExcluded',
        'regionIncluded' => 'getRegionIncluded'
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
        $this->container['regionExcluded'] = isset($data['regionExcluded']) ? $data['regionExcluded'] : null;
        $this->container['regionIncluded'] = isset($data['regionIncluded']) ? $data['regionIncluded'] : null;
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
     * Gets regionExcluded
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Region[]|null
     */
    public function getRegionExcluded()
    {
        return $this->container['regionExcluded'];
    }

    /**
     * Sets regionExcluded
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Region[]|null $regionExcluded A list of one or more regionsName fields that specify the areas to where a seller does not ship. Populate regionExcluded in only the top-level shipToLocations container (do not populate this field within the shippingOptions container). Normally a seller ships to as many areas as possible using both DOMESTIC and INTERNATIONAL shipping options and they don't have a need to exclude any regions from their ship-to locations. With this, there's no reason to set regionExclude fields. However, it makes sense to set the regionExcluded field when a seller wants to exclude a small area that's located within a larger area they service. For example, suppose a seller indicates they ship 'Worldwide', but for some reason must exclude a specific country, or world region, from the larger world area they ship to. To retrieve the regions you can specify in the associated regionName field, call GeteBayDetails with DetailName set to ExcludeShippingLocationDetails, then review the Location fields in the response for the strings that you can specify regionExcluded.regionName. Note that if a buyer's primary ship-to location is a region that a seller has excluded in their fulfillment policy (or if the buyer does not have a primary ship-to location), they will receive an error message if they attempt to buy or place a bid on an item that uses that fulfillment policy. For details on setting this field, see Excluding specific regions from included shipping areas.
     *
     * @return $this
     */
    public function setRegionExcluded($regionExcluded)
    {
        $this->container['regionExcluded'] = $regionExcluded;

        return $this;
    }

    /**
     * Gets regionIncluded
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Region[]|null
     */
    public function getRegionIncluded()
    {
        return $this->container['regionIncluded'];
    }

    /**
     * Sets regionIncluded
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Region[]|null $regionIncluded Required if optionType set to INTERNATIONAL. A list of one or more regionsName fields that specify the areas to where a seller ships. Important: Populate this field only when the parent shipToLocations object is located within a shippingOptions container (that is, the parent shipTolocations object must not be the one at the top-level of the policy). Also, this field needs to be populated only when the associated shippingOptions container has optionType set to INTERNATIONAL. Withing an international shipping option, set this value to Worldwide to indicate the seller ships to all world regions. If needed, use the regionExcluded field to exclude any regions in the world to where the seller does not ship. Each eBay marketplace supports its own set of allowable shipping locations. Obtain the valid 'Ship-To Locations' for a marketplace by calling GeteBayDetails with DetailName set to ShippingLocationDetails, then review the ShippingLocation fields in the response for the strings that you can specify in the regionIncluded.regionName field. For DOMESTIC shipping options, eBay automatically uses the seller's listing country as the default regionIncluded country. For details on setting this field, see How to set up worldwide shipping. This field is always returned in the shipping policy response.
     *
     * @return $this
     */
    public function setRegionIncluded($regionIncluded)
    {
        $this->container['regionIncluded'] = $regionIncluded;

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
}


