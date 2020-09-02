# macropage\SDKs\ebay\rest\account\PaymentsProgramApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsProgram**](PaymentsProgramApi.md#getPaymentsProgram) | **GET** /payments_program/{marketplace_id}/{payments_program_type} | 



## getPaymentsProgram

> \macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse getPaymentsProgram($marketplaceId, $paymentsProgramType)



This method returns whether or not the user is opted-in to the payment program. Sellers opt-in to payment programs by marketplace and you must target a specific marketplace in your requests to this method using the marketplace_id path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\PaymentsProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This path parameter specifies the eBay marketplace of the payment program for which you want to retrieve the seller's status.
$paymentsProgramType = 'paymentsProgramType_example'; // string | This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use.

try {
    $result = $apiInstance->getPaymentsProgram($marketplaceId, $paymentsProgramType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsProgramApi->getPaymentsProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| This path parameter specifies the eBay marketplace of the payment program for which you want to retrieve the seller&#39;s status. |
 **paymentsProgramType** | **string**| This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse**](../Model/PaymentsProgramResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

