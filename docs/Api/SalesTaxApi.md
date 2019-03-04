# macropage\SDKs\ebay\rest\account\SalesTaxApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceSalesTax**](SalesTaxApi.md#createOrReplaceSalesTax) | **PUT** /sales_tax/{countryCode}/{jurisdictionId} | 
[**deleteSalesTax**](SalesTaxApi.md#deleteSalesTax) | **DELETE** /sales_tax/{countryCode}/{jurisdictionId} | 
[**getSalesTax**](SalesTaxApi.md#getSalesTax) | **GET** /sales_tax/{countryCode}/{jurisdictionId} | 
[**getSalesTaxes**](SalesTaxApi.md#getSalesTaxes) | **GET** /sales_tax/ | 


# **createOrReplaceSalesTax**
> createOrReplaceSalesTax($countryCode, $jurisdictionId, $salesTaxBase)



This method creates or updates a sales tax table entry for a jurisdiction. Specify the tax table entry you want to configure using the two path parameters: countryCode and jurisdictionId. A tax table entry for a jurisdiction is comprised of two fields: one for the jurisdiction's sales-tax rate and another that's a boolean value indicating whether or not shipping and handling are taxed in the jurisdiction. You can set up tax tables for countries that support different tax jurisdictions. Currently, only Canada, India, and the US support separate tax jurisdictions. If you sell into any of these countries, you can set up tax tables for any of the country's jurisdictions. Retrieve valid jurisdiction IDs using getSalesTaxJurisdictions in the Metadata API. For details on using this call, see Establishing sales-tax tables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countryCode = 'countryCode_example'; // string | This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country for which you want to create tax table entry.
$jurisdictionId = 'jurisdictionId_example'; // string | This path parameter specifies the ID of the sales-tax jurisdiction for the table entry you want to create.
$salesTaxBase = new \macropage\SDKs\ebay\rest\account\Model\SalesTaxBase(); // \macropage\SDKs\ebay\rest\account\Model\SalesTaxBase | A container that describes the how the sales tax is calculated.

try {
    $apiInstance->createOrReplaceSalesTax($countryCode, $jurisdictionId, $salesTaxBase);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->createOrReplaceSalesTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**| This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country for which you want to create tax table entry. |
 **jurisdictionId** | **string**| This path parameter specifies the ID of the sales-tax jurisdiction for the table entry you want to create. |
 **salesTaxBase** | [**\macropage\SDKs\ebay\rest\account\Model\SalesTaxBase**](../Model/SalesTaxBase.md)| A container that describes the how the sales tax is calculated. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSalesTax**
> deleteSalesTax($countryCode, $jurisdictionId)



This call deletes a tax table entry for a jurisdiction. Specify the jurisdiction to delete using the countryCode and jurisdictionId path parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countryCode = 'countryCode_example'; // string | This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country whose tax table entry you want to delete.
$jurisdictionId = 'jurisdictionId_example'; // string | This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete.

try {
    $apiInstance->deleteSalesTax($countryCode, $jurisdictionId);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->deleteSalesTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**| This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country whose tax table entry you want to delete. |
 **jurisdictionId** | **string**| This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesTax**
> \macropage\SDKs\ebay\rest\account\Model\SalesTax getSalesTax($countryCode, $jurisdictionId)



This call gets the current tax table entry for a specific tax jurisdiction. Specify the jurisdiction to retrieve using the countryCode and jurisdictionId path parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countryCode = 'countryCode_example'; // string | This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country whose tax table you want to retrieve.
$jurisdictionId = 'jurisdictionId_example'; // string | This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry you want to retrieve.

try {
    $result = $apiInstance->getSalesTax($countryCode, $jurisdictionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->getSalesTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**| This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country whose tax table you want to retrieve. |
 **jurisdictionId** | **string**| This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry you want to retrieve. |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SalesTax**](../Model/SalesTax.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesTaxes**
> \macropage\SDKs\ebay\rest\account\Model\SalesTaxes getSalesTaxes($countryCode)



Use this call to retrieve a sales tax table that the seller established for a specific country. Specify the tax table to retrieve using the country_code query parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new macropage\SDKs\ebay\rest\account\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countryCode = 'countryCode_example'; // string | This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country whose tax table you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html

try {
    $result = $apiInstance->getSalesTaxes($countryCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->getSalesTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**| This path parameter specifies the two-letter ISO 3166-1 Alpha-2 code for the country whose tax table you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html |

### Return type

[**\macropage\SDKs\ebay\rest\account\Model\SalesTaxes**](../Model/SalesTaxes.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

