# # SetFulfillmentPolicyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categoryTypes** | [**\macropage\SDKs\ebay\rest\account\Model\CategoryType[]**](CategoryType.md) | The CategoryTypeEnum value to which this policy applies. Used to discern accounts that sell motor vehicles from those that don&#39;t. (Currently, each policy can be set to only one categoryTypes value at a time.) | [optional] 
**description** | **string** | An optional seller-defined description of the fulfillment policy for internal use (this value is not displayed to end users). Max length: 250 | [optional] 
**freightShipping** | **bool** | If set to true, the seller offers freight shipping. | [optional] 
**fulfillmentPolicyId** | **string** | A unique eBay-assigned ID for a fulfillment policy. This ID is generated when the policy is created. | [optional] 
**globalShipping** | **bool** | If set to true, the seller has opted-in to the Global Shipping Program and eBay automatically sets the international shipping service options to International Priority Shipping. If the value of globalShipping is false, the seller is responsible for specifying one or more international shipping service options if they want to ship internationally. | [optional] 
**handlingTime** | [**\macropage\SDKs\ebay\rest\account\Model\TimeDuration**](TimeDuration.md) |  | [optional] 
**localPickup** | **bool** | If set to true, the seller offers local pickup of their items. | [optional] 
**marketplaceId** | **string** | The ID of the eBay marketplace to which this fulfillment policy applies. If this value is not specified, value defaults to the seller&#39;s eBay registration site. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**name** | **string** | A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64 | [optional] 
**pickupDropOff** | **bool** | If set to true, the seller offers the &amp;quot;Click and Collect&amp;quot; option. Currently, &amp;quot;Click and Collect&amp;quot; is available only to large retail merchants the eBay AU and UK marketplaces. | [optional] 
**shippingOptions** | [**\macropage\SDKs\ebay\rest\account\Model\ShippingOption[]**](ShippingOption.md) | A list that defines the seller&#39;s shipping configurations for DOMESTIC and INTERNATIONAL order shipments. The list has a single element if the seller ships to only domestic locations. If the seller also ships internationally, a second element defines their international shipping options. Shipping options configure the high-level shipping settings that apply to orders, such as flat-rate or calculated shipping, and any rate tables the seller wants to associate with the shipping services. Each shippingOption element has a shippingServices container that defines the list of shipping services (domestic or international) offered with this fulfillment policy. | [optional] 
**shipToLocations** | [**\macropage\SDKs\ebay\rest\account\Model\RegionSet**](RegionSet.md) |  | [optional] 
**warnings** | [**\macropage\SDKs\ebay\rest\account\Model\Error[]**](Error.md) | A list of warnings related to request. This field normally returns empty, which indicates the request did not generate any warnings. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


