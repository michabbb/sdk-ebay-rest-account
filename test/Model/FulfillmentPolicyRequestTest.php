<?php
/**
 * FulfillmentPolicyRequestTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client;

use PHPUnit\Framework\TestCase;

/**
 * FulfillmentPolicyRequestTest Class Doc Comment
 *
 * @category    Class
 * @description This root container defines a seller&#39;s fulfillment policy for a specific marketplace and category type. Used when creating or updating a fulfillment policy, fulfillmentPolicyRequest encapsulates a seller&#39;s terms for fulfilling an order and includes the shipping carriers and services used for shipment and time the seller takes to ship an order. While each seller must define at least one fulfillment policy for every marketplace into which they sell, sellers can define multiple fulfillment policies for a single marketplace by specifying different configurations for the unique policies. A successful call returns a fulfillmentPolicyId, plus the Location response header contains the URI to the resource. Policy instructions can be localized by providing a locale in the Content-Language HTTP request header. For example: Content-Language: de-DE. Tip: For more on using business policies, see eBay business policies.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class FulfillmentPolicyRequestTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "FulfillmentPolicyRequest"
     */
    public function testFulfillmentPolicyRequest()
    {
    }

    /**
     * Test attribute "category_types"
     */
    public function testPropertyCategoryTypes()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "freight_shipping"
     */
    public function testPropertyFreightShipping()
    {
    }

    /**
     * Test attribute "global_shipping"
     */
    public function testPropertyGlobalShipping()
    {
    }

    /**
     * Test attribute "handling_time"
     */
    public function testPropertyHandlingTime()
    {
    }

    /**
     * Test attribute "local_pickup"
     */
    public function testPropertyLocalPickup()
    {
    }

    /**
     * Test attribute "marketplace_id"
     */
    public function testPropertyMarketplaceId()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "pickup_drop_off"
     */
    public function testPropertyPickupDropOff()
    {
    }

    /**
     * Test attribute "shipping_options"
     */
    public function testPropertyShippingOptions()
    {
    }

    /**
     * Test attribute "ship_to_locations"
     */
    public function testPropertyShipToLocations()
    {
    }
}
