# # AutoCompletion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**search_type** | **string** | Search type for the autocompletion. | [optional]
**complete_query** | **string** | The complete query corresponding the the auto-completion. | [optional]
**query_term_list** | [**\OpenAPI\Client\Model\QueryTerm[]**](QueryTerm.md) | Structured representation that infers query intent unambiguously. Client will echo this information back to the backend. Essentially, it is like a search result link. The list has an item corresponding to every query term. One user query is nothing but a collection of multiple query terms. | [optional]
**entity_type** | **string** | Enity type or focus for the autocompletion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
