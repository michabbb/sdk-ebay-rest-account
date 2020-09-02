# macropage\SDKs\ebay\rest\account\ReturnPolicyApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturnPolicy**](ReturnPolicyApi.md#createReturnPolicy) | **POST** /return_policy/ | 
[**deleteReturnPolicy**](ReturnPolicyApi.md#deleteReturnPolicy) | **DELETE** /return_policy/{return_policy_id} | 
[**getReturnPolicies**](ReturnPolicyApi.md#getReturnPolicies) | **GET** /return_policy/ | 
[**getReturnPolicy**](ReturnPolicyApi.md#getReturnPolicy) | **GET** /return_policy/{return_policy_id} | 
[**getReturnPolicyByName**](ReturnPolicyApi.md#getReturnPolicyByName) | **GET** /return_policy/get_by_policy_name | 
[**updateReturnPolicy**](ReturnPolicyApi.md#updateReturnPolicy) | **PUT** /return_policy/{return_policy_id} | 



## createReturnPolicy

> \macropage\SDKs\ebay\rest\account\Model\SetReturnPolicyResponse createReturnPolicy($returnPolicyRequest)



This method creates a new return policy where the policy encapsulates seller's terms for returning items. Use the Metadata API method getReturnPolicies to determine which categories require you to supply a return policy for the marketplace(s) into which you list. Each policy targets a marketplaceId and categoryTypes.name combination and you can create multiple policies for each combination. A successful request returns the URI to the new policy in the Location response header and the ID for the new policy is returned in the response payload. Tip: For details on creating and using the business policies supported by the Account API, see eBay business policies. Marketplaces and locales Policy instructions can be localized by providing a locale in the Accept-Language HTTP request header. For example, the following setting displays field values from the request body in German: Accept-Language: de-DE. Target the specific locale of a marketplace that supports multiple locales using the Content-Language request header. For example, target the French locale of the Canadian marketplace by specifying the fr-CA locale for Content-Language. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: fr-BE. Tip: For details on headers, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returnPolicyRequest = new \macropage\SDKs\ebay\rest\account\Model\ReturnPolicyRequest(); // \macropage\SDKs\ebay\rest\account\Model\ReturnPolicyRequest | Return policy request

try {
    $result = $apiInstance->createReturnPolicy($returnPolicyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->createReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnPolicyRequest** | [**\macropage\SDKs\ebay\rest\account\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return policy request |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SetReturnPolicyResponse**](../Model/SetReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteReturnPolicy

> deleteReturnPolicy($returnPolicyId)



This method deletes a return policy. Supply the ID of the policy you want to delete in the returnPolicyId path parameter. Note that you cannot delete the default return policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returnPolicyId = 'returnPolicyId_example'; // string | This path parameter specifies the ID of the return policy you want to delete.

try {
    $apiInstance->deleteReturnPolicy($returnPolicyId);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->deleteReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnPolicyId** | **string**| This path parameter specifies the ID of the return policy you want to delete. |

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


## getReturnPolicies

> \macropage\SDKs\ebay\rest\account\Model\ReturnPolicyResponse getReturnPolicies($marketplaceId)



This method retrieves all the return policies configured for the marketplace you specify using the marketplace_id query parameter. Marketplaces and locales Get the correct policies for a marketplace that supports multiple locales using the Content-Language request header. For example, get the policies for the French locale of the Canadian marketplace by specifying fr-CA for the Content-Language header. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: fr-BE. For details on header values, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html

try {
    $result = $apiInstance->getReturnPolicies($marketplaceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReturnPolicy

> \macropage\SDKs\ebay\rest\account\Model\ReturnPolicy getReturnPolicy($returnPolicyId)



This method retrieves the complete details of the return policy specified by the returnPolicyId path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returnPolicyId = 'returnPolicyId_example'; // string | This path parameter specifies the of the return policy you want to retrieve.

try {
    $result = $apiInstance->getReturnPolicy($returnPolicyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnPolicyId** | **string**| This path parameter specifies the of the return policy you want to retrieve. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReturnPolicyByName

> \macropage\SDKs\ebay\rest\account\Model\ReturnPolicy getReturnPolicyByName($marketplaceId, $name)



This method retrieves the complete details of a single return policy. Supply both the policy name and its associated marketplace_id in the request query parameters. Marketplaces and locales Get the correct policy for a marketplace that supports multiple locales using the Content-Language request header. For example, get a policy for the French locale of the Canadian marketplace by specifying fr-CA for the Content-Language header. Likewise, target the Dutch locale of the Belgium marketplace by setting Content-Language: fr-BE. For details on header values, see HTTP request headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplaceId = 'marketplaceId_example'; // string | This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html
$name = 'name_example'; // string | This query parameter specifies the user-defined name of the return policy you want to retrieve.

try {
    $result = $apiInstance->getReturnPolicyByName($marketplaceId, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicyByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplaceId** | **string**| This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html |
 **name** | **string**| This query parameter specifies the user-defined name of the return policy you want to retrieve. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReturnPolicy

> \macropage\SDKs\ebay\rest\account\Model\SetReturnPolicyResponse updateReturnPolicy($returnPolicyId, $returnPolicyRequest)



This method updates an existing return policy. Specify the policy you want to update using the return_policy_id path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returnPolicyId = 'returnPolicyId_example'; // string | This path parameter specifies the ID of the return policy you want to update.
$returnPolicyRequest = new \macropage\SDKs\ebay\rest\account\Model\ReturnPolicyRequest(); // \macropage\SDKs\ebay\rest\account\Model\ReturnPolicyRequest | Container for a return policy request.

try {
    $result = $apiInstance->updateReturnPolicy($returnPolicyId, $returnPolicyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->updateReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnPolicyId** | **string**| This path parameter specifies the ID of the return policy you want to update. |
 **returnPolicyRequest** | [**\macropage\SDKs\ebay\rest\account\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Container for a return policy request. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SetReturnPolicyResponse**](../Model/SetReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

