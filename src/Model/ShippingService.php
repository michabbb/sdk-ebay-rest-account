<?php
/**
 * ShippingService
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
 * ShippingService Class Doc Comment
 *
 * @category Class
 * @description A complex type that defines the available shipping services offered in the parent shippingOptions container. The shipping services specified here must be able to accommodate the optionType defined in the parent shippingOption container (either DOMESTIC or INTERNATIONAL). Tip: For more on setting up shipping services, see Setting the shipping carrier and shipping service values.
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalShippingCost' => '\macropage\SDKs\ebay\rest\account\Model\Amount',
        'buyerResponsibleForPickup' => 'bool',
        'buyerResponsibleForShipping' => 'bool',
        'cashOnDeliveryFee' => '\macropage\SDKs\ebay\rest\account\Model\Amount',
        'freeShipping' => 'bool',
        'shippingCarrierCode' => 'string',
        'shippingCost' => '\macropage\SDKs\ebay\rest\account\Model\Amount',
        'shippingServiceCode' => 'string',
        'shipToLocations' => '\macropage\SDKs\ebay\rest\account\Model\RegionSet',
        'sortOrder' => 'int',
        'surcharge' => '\macropage\SDKs\ebay\rest\account\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additionalShippingCost' => null,
        'buyerResponsibleForPickup' => null,
        'buyerResponsibleForShipping' => null,
        'cashOnDeliveryFee' => null,
        'freeShipping' => null,
        'shippingCarrierCode' => null,
        'shippingCost' => null,
        'shippingServiceCode' => null,
        'shipToLocations' => null,
        'sortOrder' => 'int32',
        'surcharge' => null
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
        'additionalShippingCost' => 'additionalShippingCost',
        'buyerResponsibleForPickup' => 'buyerResponsibleForPickup',
        'buyerResponsibleForShipping' => 'buyerResponsibleForShipping',
        'cashOnDeliveryFee' => 'cashOnDeliveryFee',
        'freeShipping' => 'freeShipping',
        'shippingCarrierCode' => 'shippingCarrierCode',
        'shippingCost' => 'shippingCost',
        'shippingServiceCode' => 'shippingServiceCode',
        'shipToLocations' => 'shipToLocations',
        'sortOrder' => 'sortOrder',
        'surcharge' => 'surcharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalShippingCost' => 'setAdditionalShippingCost',
        'buyerResponsibleForPickup' => 'setBuyerResponsibleForPickup',
        'buyerResponsibleForShipping' => 'setBuyerResponsibleForShipping',
        'cashOnDeliveryFee' => 'setCashOnDeliveryFee',
        'freeShipping' => 'setFreeShipping',
        'shippingCarrierCode' => 'setShippingCarrierCode',
        'shippingCost' => 'setShippingCost',
        'shippingServiceCode' => 'setShippingServiceCode',
        'shipToLocations' => 'setShipToLocations',
        'sortOrder' => 'setSortOrder',
        'surcharge' => 'setSurcharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalShippingCost' => 'getAdditionalShippingCost',
        'buyerResponsibleForPickup' => 'getBuyerResponsibleForPickup',
        'buyerResponsibleForShipping' => 'getBuyerResponsibleForShipping',
        'cashOnDeliveryFee' => 'getCashOnDeliveryFee',
        'freeShipping' => 'getFreeShipping',
        'shippingCarrierCode' => 'getShippingCarrierCode',
        'shippingCost' => 'getShippingCost',
        'shippingServiceCode' => 'getShippingServiceCode',
        'shipToLocations' => 'getShipToLocations',
        'sortOrder' => 'getSortOrder',
        'surcharge' => 'getSurcharge'
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
        $this->container['additionalShippingCost'] = isset($data['additionalShippingCost']) ? $data['additionalShippingCost'] : null;
        $this->container['buyerResponsibleForPickup'] = isset($data['buyerResponsibleForPickup']) ? $data['buyerResponsibleForPickup'] : null;
        $this->container['buyerResponsibleForShipping'] = isset($data['buyerResponsibleForShipping']) ? $data['buyerResponsibleForShipping'] : null;
        $this->container['cashOnDeliveryFee'] = isset($data['cashOnDeliveryFee']) ? $data['cashOnDeliveryFee'] : null;
        $this->container['freeShipping'] = isset($data['freeShipping']) ? $data['freeShipping'] : null;
        $this->container['shippingCarrierCode'] = isset($data['shippingCarrierCode']) ? $data['shippingCarrierCode'] : null;
        $this->container['shippingCost'] = isset($data['shippingCost']) ? $data['shippingCost'] : null;
        $this->container['shippingServiceCode'] = isset($data['shippingServiceCode']) ? $data['shippingServiceCode'] : null;
        $this->container['shipToLocations'] = isset($data['shipToLocations']) ? $data['shipToLocations'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
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
     * Gets additionalShippingCost
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Amount|null
     */
    public function getAdditionalShippingCost()
    {
        return $this->container['additionalShippingCost'];
    }

    /**
     * Sets additionalShippingCost
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Amount|null $additionalShippingCost additionalShippingCost
     *
     * @return $this
     */
    public function setAdditionalShippingCost($additionalShippingCost)
    {
        $this->container['additionalShippingCost'] = $additionalShippingCost;

        return $this;
    }

    /**
     * Gets buyerResponsibleForPickup
     *
     * @return bool|null
     */
    public function getBuyerResponsibleForPickup()
    {
        return $this->container['buyerResponsibleForPickup'];
    }

    /**
     * Sets buyerResponsibleForPickup
     *
     * @param bool|null $buyerResponsibleForPickup This field is only applicable to vehicle categories on eBay Motors (US and Canada). If set to true, the buyer is responsible for picking up the vehicle. Otherwise, the seller should specify the vehicle pickup arrangements in the item description. The seller cannot modify this flag if the vehicle has bids or if the listing ends within 12 hours. Default: false
     *
     * @return $this
     */
    public function setBuyerResponsibleForPickup($buyerResponsibleForPickup)
    {
        $this->container['buyerResponsibleForPickup'] = $buyerResponsibleForPickup;

        return $this;
    }

    /**
     * Gets buyerResponsibleForShipping
     *
     * @return bool|null
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->container['buyerResponsibleForShipping'];
    }

    /**
     * Sets buyerResponsibleForShipping
     *
     * @param bool|null $buyerResponsibleForShipping This field is applicable for only items listed in vehicle categories on eBay Motors (US and Canada). If set to true, the buyer is responsible for the shipment of the vehicle. Otherwise, the seller should specify the vehicle shipping arrangements in the item description. The seller cannot modify this flag if the vehicle has bids or if the listing ends within 12 hours. Default: false
     *
     * @return $this
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping)
    {
        $this->container['buyerResponsibleForShipping'] = $buyerResponsibleForShipping;

        return $this;
    }

    /**
     * Gets cashOnDeliveryFee
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Amount|null
     */
    public function getCashOnDeliveryFee()
    {
        return $this->container['cashOnDeliveryFee'];
    }

    /**
     * Sets cashOnDeliveryFee
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Amount|null $cashOnDeliveryFee cashOnDeliveryFee
     *
     * @return $this
     */
    public function setCashOnDeliveryFee($cashOnDeliveryFee)
    {
        $this->container['cashOnDeliveryFee'] = $cashOnDeliveryFee;

        return $this;
    }

    /**
     * Gets freeShipping
     *
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->container['freeShipping'];
    }

    /**
     * Sets freeShipping
     *
     * @param bool|null $freeShipping If set to true, the seller offers free shipping to the buyer. This field can only be included and set to 'true' for the first domestic shipping service option specified in the shippingServices container (it is ignored if set for subsequent shipping services). The first specified shipping service option has a sortOrder value of 1 or (if the sortOrderId field is not used) it is the shipping service option that's specified first in the shippingServices container.
     *
     * @return $this
     */
    public function setFreeShipping($freeShipping)
    {
        $this->container['freeShipping'] = $freeShipping;

        return $this;
    }

    /**
     * Gets shippingCarrierCode
     *
     * @return string|null
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shippingCarrierCode'];
    }

    /**
     * Sets shippingCarrierCode
     *
     * @param string|null $shippingCarrierCode The shipping carrier, such as 'USPS', 'FedEx', 'UPS', and so on.
     *
     * @return $this
     */
    public function setShippingCarrierCode($shippingCarrierCode)
    {
        $this->container['shippingCarrierCode'] = $shippingCarrierCode;

        return $this;
    }

    /**
     * Gets shippingCost
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Amount|null
     */
    public function getShippingCost()
    {
        return $this->container['shippingCost'];
    }

    /**
     * Sets shippingCost
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Amount|null $shippingCost shippingCost
     *
     * @return $this
     */
    public function setShippingCost($shippingCost)
    {
        $this->container['shippingCost'] = $shippingCost;

        return $this;
    }

    /**
     * Gets shippingServiceCode
     *
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->container['shippingServiceCode'];
    }

    /**
     * Sets shippingServiceCode
     *
     * @param string|null $shippingServiceCode The shipping service that the shipping carrier uses to ship an item. For example, an overnight, two-day delivery, or other type of service. For details on configuring shipping services, see Setting the shipping carrier and shipping service values.
     *
     * @return $this
     */
    public function setShippingServiceCode($shippingServiceCode)
    {
        $this->container['shippingServiceCode'] = $shippingServiceCode;

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
     * Gets sortOrder
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     *
     * @param int|null $sortOrder This integer value controls the order that this shipping service option appears in the View Item and Checkout pages, as related to the other specified shipping service options. Sellers can specify up to four domestic shipping services (in four separate shippingService containers), so valid values are 1, 2, 3, and 4. A shipping service option with a sortOrder value of '1' appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a sortOrder value of '4' appears at the bottom of the list. Sellers can specify up to five international shipping services (in five separate shippingService containers, so valid values for international shipping services are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the sortOrder value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages. Set up different domestic and international services by configuring two shippingOptions containers, where you set shippingOptions.optionType to either DOMESTIC or INTERNATIONAL to indicate the area supported by the listed shipping services. If the sortOrder field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. Min: 1. Max: 4 (for domestic shipping service) or 5 (for international shipping service).
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Amount|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Amount|null $surcharge surcharge
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

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


