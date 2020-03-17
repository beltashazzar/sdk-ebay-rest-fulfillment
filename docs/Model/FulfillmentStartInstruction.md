# FulfillmentStartInstruction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ebaySupportedFulfillment** | **bool** | This field is only returned if its value is true and indicates that the fulfillment will be shipped via eBay&#39;s Global Shipping Program. For more information, see the Global Shipping Program help topic. | [optional] 
**finalDestinationAddress** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\Address**](Address.md) |  | [optional] 
**fulfillmentInstructionsType** | **string** | The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of SHIP_TO if the ebaySupportedFulfillment field is returned with a value of true. See the FulfillmentInstructionsType definition for more information about different fulfillment types. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/FulfillmentInstructionsType.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**maxEstimatedDeliveryDate** | **string** | This is the estimated latest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if the value of the fulfillmentInstructionsType field is DIGITAL. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**minEstimatedDeliveryDate** | **string** | This is the estimated earliest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if the value of the fulfillmentInstructionsType field is DIGITAL. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**pickupStep** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\PickupStep**](PickupStep.md) |  | [optional] 
**shippingStep** | [**\macropage\SDKs\ebay\rest\fulfillment\Model\ShippingStep**](ShippingStep.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

