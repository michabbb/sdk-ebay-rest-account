<?php
/**
 * PaymentPolicy
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
 * PaymentPolicy Class Doc Comment
 *
 * @category Class
 * @description Root container that defines the fields for a seller&#39;s payment policy. The paymentPolicy encapsulates a seller&#39;s payment terms and consists of payment details for the seller, the name and description of the policy, and the marketplace and category group(s) covered by the payment policy. While each seller must define at least one payment policy for every marketplace into which they sell, sellers can define multiple payment policies for a single marketplace by specifying different configurations for the unique policies.
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryTypes' => '\macropage\SDKs\ebay\rest\account\Model\CategoryType[]',
        'deposit' => '\macropage\SDKs\ebay\rest\account\Model\Deposit',
        'description' => 'string',
        'fullPaymentDueIn' => '\macropage\SDKs\ebay\rest\account\Model\TimeDuration',
        'immediatePay' => 'bool',
        'marketplaceId' => 'string',
        'name' => 'string',
        'paymentInstructions' => 'string',
        'paymentMethods' => '\macropage\SDKs\ebay\rest\account\Model\PaymentMethod[]',
        'paymentPolicyId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'categoryTypes' => null,
        'deposit' => null,
        'description' => null,
        'fullPaymentDueIn' => null,
        'immediatePay' => null,
        'marketplaceId' => null,
        'name' => null,
        'paymentInstructions' => null,
        'paymentMethods' => null,
        'paymentPolicyId' => null
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
        'deposit' => 'deposit',
        'description' => 'description',
        'fullPaymentDueIn' => 'fullPaymentDueIn',
        'immediatePay' => 'immediatePay',
        'marketplaceId' => 'marketplaceId',
        'name' => 'name',
        'paymentInstructions' => 'paymentInstructions',
        'paymentMethods' => 'paymentMethods',
        'paymentPolicyId' => 'paymentPolicyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryTypes' => 'setCategoryTypes',
        'deposit' => 'setDeposit',
        'description' => 'setDescription',
        'fullPaymentDueIn' => 'setFullPaymentDueIn',
        'immediatePay' => 'setImmediatePay',
        'marketplaceId' => 'setMarketplaceId',
        'name' => 'setName',
        'paymentInstructions' => 'setPaymentInstructions',
        'paymentMethods' => 'setPaymentMethods',
        'paymentPolicyId' => 'setPaymentPolicyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryTypes' => 'getCategoryTypes',
        'deposit' => 'getDeposit',
        'description' => 'getDescription',
        'fullPaymentDueIn' => 'getFullPaymentDueIn',
        'immediatePay' => 'getImmediatePay',
        'marketplaceId' => 'getMarketplaceId',
        'name' => 'getName',
        'paymentInstructions' => 'getPaymentInstructions',
        'paymentMethods' => 'getPaymentMethods',
        'paymentPolicyId' => 'getPaymentPolicyId'
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
        $this->container['deposit'] = isset($data['deposit']) ? $data['deposit'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fullPaymentDueIn'] = isset($data['fullPaymentDueIn']) ? $data['fullPaymentDueIn'] : null;
        $this->container['immediatePay'] = isset($data['immediatePay']) ? $data['immediatePay'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paymentInstructions'] = isset($data['paymentInstructions']) ? $data['paymentInstructions'] : null;
        $this->container['paymentMethods'] = isset($data['paymentMethods']) ? $data['paymentMethods'] : null;
        $this->container['paymentPolicyId'] = isset($data['paymentPolicyId']) ? $data['paymentPolicyId'] : null;
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
     * Gets deposit
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\Deposit|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\Deposit|null $deposit deposit
     *
     * @return $this
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

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
     * @param string|null $description An optional seller-defined description of the payment policy for internal use (this value is not displayed to end users). Max length: 250
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fullPaymentDueIn
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\TimeDuration|null
     */
    public function getFullPaymentDueIn()
    {
        return $this->container['fullPaymentDueIn'];
    }

    /**
     * Sets fullPaymentDueIn
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\TimeDuration|null $fullPaymentDueIn fullPaymentDueIn
     *
     * @return $this
     */
    public function setFullPaymentDueIn($fullPaymentDueIn)
    {
        $this->container['fullPaymentDueIn'] = $fullPaymentDueIn;

        return $this;
    }

    /**
     * Gets immediatePay
     *
     * @return bool|null
     */
    public function getImmediatePay()
    {
        return $this->container['immediatePay'];
    }

    /**
     * Sets immediatePay
     *
     * @param bool|null $immediatePay If set to true, payment is due upon receipt (eBay generates a receipt when the buyer agrees to purchase an item). This boolean must be set in the payment policy if the seller wants to create a listing that has an &quot;immediate payment&quot; requirement. The seller can change the immediate payment requirement at any time during the life cycle of a listing. The following must be true before a seller can apply an immediate payment requirement to an item: The seller must have a PayPal Business account. The Buy It Now price cannot be higher than $60,000 USD. The eBay marketplace on which the item is listed must support PayPal payments. The listing type must be fixed-price, or an auction with a Buy It Now option.To enable the immediate payment requirement, the seller must also perform the following actions via API calls: Provide a valid paymentMethods.recipientAccountReference.referenceId value. Offer PayPal as the only payment method for the item(s). Specify all related costs to the buyer (because the buyer is not be able to use the Buyer Request Total feature in an immediate payment listing); these costs include flat-rate shipping costs for each domestic and international shipping service offered, package handling costs, and any shipping surcharges. Include and set the shippingProfileDiscountInfo container values if you are going to use promotional shipping discounts.For more information, see the Understanding immediate payment Help page. Note: Listings created with the Inventory API must reference a payment policy that has immediatePay is set to true. Items listed with the Inventory API must also be fixed-price good-till-canceled (GTC) listings where PayPal is the only supported payment method (paymentMethod must be set to PAYPAL).Default: false
     *
     * @return $this
     */
    public function setImmediatePay($immediatePay)
    {
        $this->container['immediatePay'] = $immediatePay;

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
     * @param string|null $marketplaceId The ID of the eBay marketplace to which the payment policy applies. If this value is not specified, value defaults to the seller's eBay registration site. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html'>eBay API documentation</a>
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
     * @param string|null $name A user-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets paymentInstructions
     *
     * @return string|null
     */
    public function getPaymentInstructions()
    {
        return $this->container['paymentInstructions'];
    }

    /**
     * Sets paymentInstructions
     *
     * @param string|null $paymentInstructions This user-defined field allows the seller to give payment instructions to the buyer. These instructions appear on the eBay View Item and Checkout pages. eBay recommends the seller use this field to clarify payment policies for motor vehicles (eBay Motors US and CA). For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle. Max length: 500
     *
     * @return $this
     */
    public function setPaymentInstructions($paymentInstructions)
    {
        $this->container['paymentInstructions'] = $paymentInstructions;

        return $this;
    }

    /**
     * Gets paymentMethods
     *
     * @return \macropage\SDKs\ebay\rest\account\Model\PaymentMethod[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['paymentMethods'];
    }

    /**
     * Sets paymentMethods
     *
     * @param \macropage\SDKs\ebay\rest\account\Model\PaymentMethod[]|null $paymentMethods A list of the payment methods accepted by the seller. Each payment policy must specify at least one payment method. Note: Each eBay marketplace supports and requires its own set of payment methods, and not all marketplaces allow all payment methods. Check the specifics of the marketplaces where you list items to ensure your payment policies meet the payment method requirements needed for any specific listing. Note: Item listings created with the Inventory API must reference a payment policy that has this value set to PAYPAL (currently, the Inventory API supports only fixed-prince GTC items with immediate pay (which required payments to be made via PayPal). Payment policies used with motor vehicle listings that require a deposit must have PayPal listed has a payment method (deposits require PayPal as the payment method). Also, in order for a buyer to make a full payment on a US or CA motor vehicle, the payment policy must specify at least one of the following as a payment method: CashOnPickup LoanCheck MOCC (money order or cashier's check) PaymentSeeDescription (payment instructions are in the paymentInstructions field) PersonalCheck
     *
     * @return $this
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->container['paymentMethods'] = $paymentMethods;

        return $this;
    }

    /**
     * Gets paymentPolicyId
     *
     * @return string|null
     */
    public function getPaymentPolicyId()
    {
        return $this->container['paymentPolicyId'];
    }

    /**
     * Sets paymentPolicyId
     *
     * @param string|null $paymentPolicyId A unique eBay-assigned ID for a payment policy. This ID is generated when the policy is created.
     *
     * @return $this
     */
    public function setPaymentPolicyId($paymentPolicyId)
    {
        $this->container['paymentPolicyId'] = $paymentPolicyId;

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


