# # MarketplaceItemOutputResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_blueprint_template** | [**\OpenAPI\Client\Model\MarketplaceItemInputResourcesAppBlueprintTemplate**](MarketplaceItemInputResourcesAppBlueprintTemplate.md) |  |
**app_state** | **string** | State indicating if marketplace item is approved, pending or rejected | [optional] [default to 'PENDING']
**author** | **string** | Person or company which developed the app |
**project_reference_list** | [**\OpenAPI\Client\Model\ProjectReference[]**](ProjectReference.md) | The projects this marketplace item has been assigned to | [optional]
**icon_reference_list** | [**\OpenAPI\Client\Model\MarketplaceIcon[]**](MarketplaceIcon.md) |  | [optional]
**app_group_uuid** | **string** | UUID for the group of MPIs which are versions of the same App | [optional]
**change_log** | **string** | Change log for this version of the app | [optional]
**version** | **string** | Indicates version of the App that this marketplace item represents | [optional]
**app_attribute_list** | **string[]** | Attributes of this app. | [optional]
**app_source** | **string** | Indicates whether the app is Global(Marketplace item) or Local(User created) | [optional] [default to 'LOCAL']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
