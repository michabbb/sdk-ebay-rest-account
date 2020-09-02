# macropage\SDKs\ebay\rest\account\FulfillmentPolicyApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillmentPolicy**](FulfillmentPolicyApi.md#createFulfillmentPolicy) | **POST** /fulfillment_policy/ | 
[**deleteFulfillmentPolicy**](FulfillmentPolicyApi.md#deleteFulfillmentPolicy) | **DELETE** /fulfillment_policy/{fulfillmentPolicyId} | 
[**getFulfillmentPolicies**](FulfillmentPolicyApi.md#getFulfillmentPolicies) | **GET** /fulfillment_policy/ | 
[**getFulfillmentPolicy**](FulfillmentPolicyApi.md#getFulfillmentPolicy) | **GET** /fulfillment_policy/{fulfillmentPolicyId} | 
[**getFulfillmentPolicyByName**](FulfillmentPolicyApi.md#getFulfillmentPolicyByName) | **GET** /fulfillment_policy/get_by_policy_name | 
[**updateFulfillmentPolicy**](FulfillmentPolicyApi.md#updateFulfillmentPolicy) | **PUT** /fulfillment_policy/{fulfillmentPolicyId} | 



## createFulfillmentPolicy

> \macropage\SDKs\ebay\rest\account\Model\SetFulfillmentPolicyResponse createFulfillmentPolicy($fulfillmentPolicyRequest)



This method creates a new fulfillment policy where the policy encapsulates seller's terms for fulfilling item purchases. Fulfillment policies include the shipment options that the seller offers to buyers. Each policy targets a marketplaceId and categoryTypes.name combination and you can create multiple policies for each combination. Be aware that some marketplaces require a specific fulfillment policy for vehicle listings. A successful request returns the URI to the new policy in the Location response header and the ID for the new policy is returned in the response payload. Tip: For details on creating and using the business policies supported by the Account API, see eBay business policies. Marketplaces and locales Policy instructions can be localized by providing a locale in the Accept-Language HTTP request header. For example, the following setting displays field values from the request body in German: Accept-Language: de-DE. Target the specific locale of a marketplace that supports multiple locales using the Content-Language request header. For example, target the French locale of the Canadian marketplace by specifying the fr-CA locale for Content-Language. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: fr-BE. Tip: For details on headers, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillmentPolicyRequest = new \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyRequest(); // \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyRequest | Request to create a seller account fulfillment policy.

try {
    $result = $apiInstance->createFulfillmentPolicy($fulfillmentPolicyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->createFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillmentPolicyRequest** | [**\macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyRequest**](../Model/FulfillmentPolicyRequest.md)| Request to create a seller account fulfillment policy. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SetFulfillmentPolicyResponse**](../Model/SetFulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFulfillmentPolicy

> deleteFulfillmentPolicy($fulfillmentPolicyId)



This method deletes a fulfillment policy. Supply the ID of the policy you want to delete in the fulfillmentPolicyId path parameter. Note that you cannot delete the default fulfillment policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillmentPolicyId = 'fulfillmentPolicyId_example'; // string | This path parameter specifies the ID of the fulfillment policy to delete.

try {
    $apiInstance->deleteFulfillmentPolicy($fulfillmentPolicyId);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->deleteFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillmentPolicyId** | **string**| This path parameter specifies the ID of the fulfillment policy to delete. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFulfillmentPolicies

> \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyResponse getFulfillmentPolicies($marketplaceId)



This method retrieves all the fulfillment policies configured for the marketplace you specify using the marketplace_id query parameter. Marketplaces and locales Get the correct policies for a marketplace that supports multiple locales using the Content-Language request header. For example, get the policies for the French locale of the Canadian marketplace by specifying fr-CA for the Content-Language header. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: fr-BE. For details on header values, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html

try {
    $result = $apiInstance->getFulfillmentPolicies($marketplaceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyResponse**](../Model/FulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFulfillmentPolicy

> \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicy getFulfillmentPolicy($fulfillmentPolicyId)



This method retrieves the complete details of a fulfillment policy. Supply the ID of the policy you want to retrieve using the fulfillmentPolicyId path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillmentPolicyId = 'fulfillmentPolicyId_example'; // string | This path parameter specifies the ID of the fulfillment policy you want to retrieve.

try {
    $result = $apiInstance->getFulfillmentPolicy($fulfillmentPolicyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillmentPolicyId** | **string**| This path parameter specifies the ID of the fulfillment policy you want to retrieve. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFulfillmentPolicyByName

> \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicy getFulfillmentPolicyByName($marketplaceId, $name)



This method retrieves the complete details for a single fulfillment policy. In the request, supply both the policy name and its associated marketplace_id as query parameters. Marketplaces and locales Get the correct policy for a marketplace that supports multiple locales using the Content-Language request header. For example, get a policy for the French locale of the Canadian marketplace by specifying fr-CA for the Content-Language header. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: fr-BE. For details on header values, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html
$name = 'name_example'; // string | This query parameter specifies the user-defined name of the fulfillment policy you want to retrieve.

try {
    $result = $apiInstance->getFulfillmentPolicyByName($marketplaceId, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicyByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html |
 **name** | **string**| This query parameter specifies the user-defined name of the fulfillment policy you want to retrieve. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateFulfillmentPolicy

> \macropage\SDKs\ebay\rest\account\Model\SetFulfillmentPolicyResponse updateFulfillmentPolicy($fulfillmentPolicyId, $fulfillmentPolicyRequest)



This method updates an existing fulfillment policy. Specify the policy you want to update using the fulfillment_policy_id path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillmentPolicyId = 'fulfillmentPolicyId_example'; // string | This path parameter specifies the ID of the fulfillment policy you want to update.
$fulfillmentPolicyRequest = new \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyRequest(); // \macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyRequest | Fulfillment policy request

try {
    $result = $apiInstance->updateFulfillmentPolicy($fulfillmentPolicyId, $fulfillmentPolicyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->updateFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillmentPolicyId** | **string**| This path parameter specifies the ID of the fulfillment policy you want to update. |
 **fulfillmentPolicyRequest** | [**\macropage\SDKs\ebay\rest\account\Model\FulfillmentPolicyRequest**](../Model/FulfillmentPolicyRequest.md)| Fulfillment policy request |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SetFulfillmentPolicyResponse**](../Model/SetFulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

