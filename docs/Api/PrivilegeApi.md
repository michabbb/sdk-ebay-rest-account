# macropage\SDKs\ebay\rest\account\PrivilegeApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPrivileges**](PrivilegeApi.md#getPrivileges) | **GET** /privilege/ | 



## getPrivileges

> \macropage\SDKs\ebay\rest\account\Model\SellingPrivileges getPrivileges()



This method retrieves the seller's current set of privileges. The call returns whether or not the seller's eBay registration has been completed, as well as the details of their site-wide sellingLimt (the amount and quantity they can sell on a given day).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\PrivilegeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPrivileges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivilegeApi->getPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SellingPrivileges**](../Model/SellingPrivileges.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

