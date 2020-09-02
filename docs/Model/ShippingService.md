# # ShippingService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalShippingCost** | [**\macropage\SDKs\ebay\rest\account\Model\Amount**](Amount.md) |  | [optional] 
**buyerResponsibleForPickup** | **bool** | This field is only applicable to vehicle categories on eBay Motors (US and Canada). If set to true, the buyer is responsible for picking up the vehicle. Otherwise, the seller should specify the vehicle pickup arrangements in the item description. The seller cannot modify this flag if the vehicle has bids or if the listing ends within 12 hours. Default: false | [optional] 
**buyerResponsibleForShipping** | **bool** | This field is applicable for only items listed in vehicle categories on eBay Motors (US and Canada). If set to true, the buyer is responsible for the shipment of the vehicle. Otherwise, the seller should specify the vehicle shipping arrangements in the item description. The seller cannot modify this flag if the vehicle has bids or if the listing ends within 12 hours. Default: false | [optional] 
**cashOnDeliveryFee** | [**\macropage\SDKs\ebay\rest\account\Model\Amount**](Amount.md) |  | [optional] 
**freeShipping** | **bool** | If set to true, the seller offers free shipping to the buyer. This field can only be included and set to &#39;true&#39; for the first domestic shipping service option specified in the shippingServices container (it is ignored if set for subsequent shipping services). The first specified shipping service option has a sortOrder value of 1 or (if the sortOrderId field is not used) it is the shipping service option that&#39;s specified first in the shippingServices container. | [optional] 
**shippingCarrierCode** | **string** | The shipping carrier, such as &#39;USPS&#39;, &#39;FedEx&#39;, &#39;UPS&#39;, and so on. | [optional] 
**shippingCost** | [**\macropage\SDKs\ebay\rest\account\Model\Amount**](Amount.md) |  | [optional] 
**shippingServiceCode** | **string** | The shipping service that the shipping carrier uses to ship an item. For example, an overnight, two-day delivery, or other type of service. For details on configuring shipping services, see Setting the shipping carrier and shipping service values. | [optional] 
**shipToLocations** | [**\macropage\SDKs\ebay\rest\account\Model\RegionSet**](RegionSet.md) |  | [optional] 
**sortOrder** | **int** | This integer value controls the order that this shipping service option appears in the View Item and Checkout pages, as related to the other specified shipping service options. Sellers can specify up to four domestic shipping services (in four separate shippingService containers), so valid values are 1, 2, 3, and 4. A shipping service option with a sortOrder value of &#39;1&#39; appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a sortOrder value of &#39;4&#39; appears at the bottom of the list. Sellers can specify up to five international shipping services (in five separate shippingService containers, so valid values for international shipping services are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the sortOrder value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages. Set up different domestic and international services by configuring two shippingOptions containers, where you set shippingOptions.optionType to either DOMESTIC or INTERNATIONAL to indicate the area supported by the listed shipping services. If the sortOrder field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. Min: 1. Max: 4 (for domestic shipping service) or 5 (for international shipping service). | [optional] 
**surcharge** | [**\macropage\SDKs\ebay\rest\account\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


