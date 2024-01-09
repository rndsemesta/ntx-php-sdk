# # IdentityCategorizationDirectoryConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**matching_criteria_list** | [**\OpenAPI\Client\Model\IdCategorizationMatchingCriteria[]**](IdCategorizationMatchingCriteria.md) | The matching criteria used to determine whether an entity will be affected by identity categorization. If not provided, no entity will be affected. Only a single entry in this list is supported today. | [optional]
**domain_controller_list** | [**\OpenAPI\Client\Model\IdCategorizationDomainController[]**](IdCategorizationDomainController.md) | List of domain controllers to be used for event scraping. | [optional]
**directory_service_reference** | [**\OpenAPI\Client\Model\DirectoryServiceReference**](DirectoryServiceReference.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
