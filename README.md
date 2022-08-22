# sdk-ebay-rest-account

The <b>Account API v1</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (eBay business policies and seller-defined custom policies), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br/><br/>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.


## Installation & Usage

### Requirements

PHP 7.4 and later.  
Should also work with PHP 8.0.  
Should also work with PHP 8.1.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/macropage/sdk-ebay-rest-account.git"
    }
  ],
  "require": {
    "macropage/sdk-ebay-rest-account": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sdk-ebay-rest-account/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\AdvertisingEligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xEBAYCMARKETPLACEID = 'xEBAYCMARKETPLACEID_example'; // string | The unique identifier of the eBay marketplace for which the seller eligibility status shall be checked.<br /><br /><span class=\"tablenote\"><b>Note:</b> This value is case-sensitive.</span>
$programTypes = 'programTypes_example'; // string | A comma-separated list of eBay advertising programs.<br /><br /><span class=\"tablenote\"><b>Tip:</b> See the <a href=\"/api-docs/sell/account/types/plser:AdvertisingProgramEnum\"> AdvertisingProgramEnum</a> type for possible values.</span><br /><br />If no programs are specified, the results will be returned for all programs.

try {
    $result = $apiInstance->getAdvertisingEligibility($xEBAYCMARKETPLACEID, $programTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingEligibilityApi->getAdvertisingEligibility: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertisingEligibilityApi* | [**getAdvertisingEligibility**](docs/Api/AdvertisingEligibilityApi.md#getadvertisingeligibility) | **GET** /advertising_eligibility | 
*CustomPolicyApi* | [**createCustomPolicy**](docs/Api/CustomPolicyApi.md#createcustompolicy) | **POST** /custom_policy/ | 
*CustomPolicyApi* | [**getCustomPolicies**](docs/Api/CustomPolicyApi.md#getcustompolicies) | **GET** /custom_policy/ | 
*CustomPolicyApi* | [**getCustomPolicy**](docs/Api/CustomPolicyApi.md#getcustompolicy) | **GET** /custom_policy/{custom_policy_id} | 
*CustomPolicyApi* | [**updateCustomPolicy**](docs/Api/CustomPolicyApi.md#updatecustompolicy) | **PUT** /custom_policy/{custom_policy_id} | 
*FulfillmentPolicyApi* | [**createFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#createfulfillmentpolicy) | **POST** /fulfillment_policy/ | 
*FulfillmentPolicyApi* | [**deleteFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#deletefulfillmentpolicy) | **DELETE** /fulfillment_policy/{fulfillmentPolicyId} | 
*FulfillmentPolicyApi* | [**getFulfillmentPolicies**](docs/Api/FulfillmentPolicyApi.md#getfulfillmentpolicies) | **GET** /fulfillment_policy | 
*FulfillmentPolicyApi* | [**getFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#getfulfillmentpolicy) | **GET** /fulfillment_policy/{fulfillmentPolicyId} | 
*FulfillmentPolicyApi* | [**getFulfillmentPolicyByName**](docs/Api/FulfillmentPolicyApi.md#getfulfillmentpolicybyname) | **GET** /fulfillment_policy/get_by_policy_name | 
*FulfillmentPolicyApi* | [**updateFulfillmentPolicy**](docs/Api/FulfillmentPolicyApi.md#updatefulfillmentpolicy) | **PUT** /fulfillment_policy/{fulfillmentPolicyId} | 
*KycApi* | [**getKYC**](docs/Api/KycApi.md#getkyc) | **GET** /kyc | 
*OnboardingApi* | [**getPaymentsProgramOnboarding**](docs/Api/OnboardingApi.md#getpaymentsprogramonboarding) | **GET** /payments_program/{marketplace_id}/{payments_program_type}/onboarding | 
*PaymentPolicyApi* | [**createPaymentPolicy**](docs/Api/PaymentPolicyApi.md#createpaymentpolicy) | **POST** /payment_policy | 
*PaymentPolicyApi* | [**deletePaymentPolicy**](docs/Api/PaymentPolicyApi.md#deletepaymentpolicy) | **DELETE** /payment_policy/{payment_policy_id} | 
*PaymentPolicyApi* | [**getPaymentPolicies**](docs/Api/PaymentPolicyApi.md#getpaymentpolicies) | **GET** /payment_policy | 
*PaymentPolicyApi* | [**getPaymentPolicy**](docs/Api/PaymentPolicyApi.md#getpaymentpolicy) | **GET** /payment_policy/{payment_policy_id} | 
*PaymentPolicyApi* | [**getPaymentPolicyByName**](docs/Api/PaymentPolicyApi.md#getpaymentpolicybyname) | **GET** /payment_policy/get_by_policy_name | 
*PaymentPolicyApi* | [**updatePaymentPolicy**](docs/Api/PaymentPolicyApi.md#updatepaymentpolicy) | **PUT** /payment_policy/{payment_policy_id} | 
*PaymentsProgramApi* | [**getPaymentsProgram**](docs/Api/PaymentsProgramApi.md#getpaymentsprogram) | **GET** /payments_program/{marketplace_id}/{payments_program_type} | 
*PrivilegeApi* | [**getPrivileges**](docs/Api/PrivilegeApi.md#getprivileges) | **GET** /privilege | 
*ProgramApi* | [**getOptedInPrograms**](docs/Api/ProgramApi.md#getoptedinprograms) | **GET** /program/get_opted_in_programs | 
*ProgramApi* | [**optInToProgram**](docs/Api/ProgramApi.md#optintoprogram) | **POST** /program/opt_in | 
*ProgramApi* | [**optOutOfProgram**](docs/Api/ProgramApi.md#optoutofprogram) | **POST** /program/opt_out | 
*RateTableApi* | [**getRateTables**](docs/Api/RateTableApi.md#getratetables) | **GET** /rate_table | 
*ReturnPolicyApi* | [**createReturnPolicy**](docs/Api/ReturnPolicyApi.md#createreturnpolicy) | **POST** /return_policy | 
*ReturnPolicyApi* | [**deleteReturnPolicy**](docs/Api/ReturnPolicyApi.md#deletereturnpolicy) | **DELETE** /return_policy/{return_policy_id} | 
*ReturnPolicyApi* | [**getReturnPolicies**](docs/Api/ReturnPolicyApi.md#getreturnpolicies) | **GET** /return_policy | 
*ReturnPolicyApi* | [**getReturnPolicy**](docs/Api/ReturnPolicyApi.md#getreturnpolicy) | **GET** /return_policy/{return_policy_id} | 
*ReturnPolicyApi* | [**getReturnPolicyByName**](docs/Api/ReturnPolicyApi.md#getreturnpolicybyname) | **GET** /return_policy/get_by_policy_name | 
*ReturnPolicyApi* | [**updateReturnPolicy**](docs/Api/ReturnPolicyApi.md#updatereturnpolicy) | **PUT** /return_policy/{return_policy_id} | 
*SalesTaxApi* | [**createOrReplaceSalesTax**](docs/Api/SalesTaxApi.md#createorreplacesalestax) | **PUT** /sales_tax/{countryCode}/{jurisdictionId} | 
*SalesTaxApi* | [**deleteSalesTax**](docs/Api/SalesTaxApi.md#deletesalestax) | **DELETE** /sales_tax/{countryCode}/{jurisdictionId} | 
*SalesTaxApi* | [**getSalesTax**](docs/Api/SalesTaxApi.md#getsalestax) | **GET** /sales_tax/{countryCode}/{jurisdictionId} | 
*SalesTaxApi* | [**getSalesTaxes**](docs/Api/SalesTaxApi.md#getsalestaxes) | **GET** /sales_tax | 

## Models

- [Amount](docs/Model/Amount.md)
- [CategoryType](docs/Model/CategoryType.md)
- [CompactCustomPolicyResponse](docs/Model/CompactCustomPolicyResponse.md)
- [CustomPolicy](docs/Model/CustomPolicy.md)
- [CustomPolicyCreateRequest](docs/Model/CustomPolicyCreateRequest.md)
- [CustomPolicyRequest](docs/Model/CustomPolicyRequest.md)
- [CustomPolicyResponse](docs/Model/CustomPolicyResponse.md)
- [Deposit](docs/Model/Deposit.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [FulfillmentPolicy](docs/Model/FulfillmentPolicy.md)
- [FulfillmentPolicyRequest](docs/Model/FulfillmentPolicyRequest.md)
- [FulfillmentPolicyResponse](docs/Model/FulfillmentPolicyResponse.md)
- [InternationalReturnOverrideType](docs/Model/InternationalReturnOverrideType.md)
- [KycCheck](docs/Model/KycCheck.md)
- [KycResponse](docs/Model/KycResponse.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentPolicy](docs/Model/PaymentPolicy.md)
- [PaymentPolicyRequest](docs/Model/PaymentPolicyRequest.md)
- [PaymentPolicyResponse](docs/Model/PaymentPolicyResponse.md)
- [PaymentsProgramOnboardingResponse](docs/Model/PaymentsProgramOnboardingResponse.md)
- [PaymentsProgramOnboardingSteps](docs/Model/PaymentsProgramOnboardingSteps.md)
- [PaymentsProgramResponse](docs/Model/PaymentsProgramResponse.md)
- [Program](docs/Model/Program.md)
- [Programs](docs/Model/Programs.md)
- [RateTable](docs/Model/RateTable.md)
- [RateTableResponse](docs/Model/RateTableResponse.md)
- [RecipientAccountReference](docs/Model/RecipientAccountReference.md)
- [Region](docs/Model/Region.md)
- [RegionSet](docs/Model/RegionSet.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnPolicyRequest](docs/Model/ReturnPolicyRequest.md)
- [ReturnPolicyResponse](docs/Model/ReturnPolicyResponse.md)
- [SalesTax](docs/Model/SalesTax.md)
- [SalesTaxBase](docs/Model/SalesTaxBase.md)
- [SalesTaxes](docs/Model/SalesTaxes.md)
- [SellerEligibilityMultiProgramResponse](docs/Model/SellerEligibilityMultiProgramResponse.md)
- [SellerEligibilityResponse](docs/Model/SellerEligibilityResponse.md)
- [SellingLimit](docs/Model/SellingLimit.md)
- [SellingPrivileges](docs/Model/SellingPrivileges.md)
- [SetFulfillmentPolicyResponse](docs/Model/SetFulfillmentPolicyResponse.md)
- [SetPaymentPolicyResponse](docs/Model/SetPaymentPolicyResponse.md)
- [SetReturnPolicyResponse](docs/Model/SetReturnPolicyResponse.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [ShippingService](docs/Model/ShippingService.md)
- [TimeDuration](docs/Model/TimeDuration.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.account.readonly**: View your account settings
    - **https://api.ebay.com/oauth/api_scope/sell.account**: View and manage your account settings

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
