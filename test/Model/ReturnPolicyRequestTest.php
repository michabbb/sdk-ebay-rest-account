<?php
/**
 * ReturnPolicyRequestTest
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
 * ReturnPolicyRequestTest Class Doc Comment
 *
 * @category    Class
 * @description This root container defines a seller&#39;s return policy for a specific marketplace and category type. Used when creating or updating a return policy, returnPolicyRequest encapsulates a seller&#39;s terms for how buyers can return items. While each seller must define at least one payment policy for every marketplace into which they sell, sellers can define multiple payment policies for a single marketplace by specifying different configurations for the unique policies. A successful call returns a paymentPolicyId, plus the Location response header contains the URI to the resource. Use the Metadata API method to determine which categories in the marketplace(s) require you to provide a return policy. Also note that some marketplaces require you to provide a specific return policy for vehicle listings. Policy instructions can be localized by providing a locale in the Content-Language HTTP request header. For example: Content-Language: de-DE. Tip: For more on using business policies, see eBay business policies.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ReturnPolicyRequestTest extends TestCase
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
     * Test "ReturnPolicyRequest"
     */
    public function testReturnPolicyRequest()
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
     * Test attribute "extended_holiday_returns_offered"
     */
    public function testPropertyExtendedHolidayReturnsOffered()
    {
    }

    /**
     * Test attribute "international_override"
     */
    public function testPropertyInternationalOverride()
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
     * Test attribute "refund_method"
     */
    public function testPropertyRefundMethod()
    {
    }

    /**
     * Test attribute "restocking_fee_percentage"
     */
    public function testPropertyRestockingFeePercentage()
    {
    }

    /**
     * Test attribute "return_instructions"
     */
    public function testPropertyReturnInstructions()
    {
    }

    /**
     * Test attribute "return_method"
     */
    public function testPropertyReturnMethod()
    {
    }

    /**
     * Test attribute "return_period"
     */
    public function testPropertyReturnPeriod()
    {
    }

    /**
     * Test attribute "returns_accepted"
     */
    public function testPropertyReturnsAccepted()
    {
    }

    /**
     * Test attribute "return_shipping_cost_payer"
     */
    public function testPropertyReturnShippingCostPayer()
    {
    }
}
