# # AlertResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_update_time** | **\DateTime** | The last time this alert was updated.  System sets this. | [optional]
**source_entity** | [**\OpenAPI\Client\Model\AlertResourcesSourceEntity**](AlertResourcesSourceEntity.md) |  | [optional]
**rca_metadata_list** | [**\OpenAPI\Client\Model\RcaMetadata[]**](RcaMetadata.md) | List of cause and resolution object from alert RCA metadata. | [optional]
**affected_entity_list** | [**\OpenAPI\Client\Model\EntityInfo[]**](EntityInfo.md) | A list of entities causing and/or related to this alert. | [optional]
**severity** | **string** | Alert severity |
**title** | **string** | Alert title |
**default_message** | **string** | Alert message. | [optional]
**creation_time** | **\DateTime** | The time that this alert was created. | [optional]
**resolution_status** | [**\OpenAPI\Client\Model\AlertState**](AlertState.md) |  | [optional]
**indicator_list** | [**\OpenAPI\Client\Model\Indicator[]**](Indicator.md) | The symptoms that caused this alert | [optional]
**acknowledged_status** | [**\OpenAPI\Client\Model\AlertState**](AlertState.md) |  | [optional]
**is_user_defined** | **bool** | The alert is raised by user defined policy or not. | [optional]
**severity_trail_list** | [**\OpenAPI\Client\Model\AlertResourcesSeverityTrailListInner[]**](AlertResourcesSeverityTrailListInner.md) | The field has a list of information alert severity change history. If the alert is duplicated without severity change, then, that instance will not be saved here. | [optional]
**classification_list** | **string[]** | Component classification | [optional]
**possible_cause_list** | [**\OpenAPI\Client\Model\CauseAnalysis[]**](CauseAnalysis.md) | An ordered list of the possible causes and resolutions for the alert. | [optional]
**impact_type_list** | **string[]** | The area this alert could impact. | [optional]
**parameters** | [**array<string,\OpenAPI\Client\Model\ParamValue>**](ParamValue.md) | Alert notification type specific parameters. | [optional]
**type** | **string** | A preconfigured, or dynamically created alert type or alert type UUID. For example, A1128 for the storage pool space usage exceeded alerts, or, a real UUID for user defined alert policy. |
**impact_list** | **string[]** | The impact of the alert. | [optional] [readonly]
**latest_occurrence_time** | **\DateTime** | Alert instances could be dedupped by the system.  However, the last time this similar alert was received is still be updated in this field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
