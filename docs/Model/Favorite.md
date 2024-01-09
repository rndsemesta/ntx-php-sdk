# # Favorite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**route** | **string** | Optional route if present to directly link to the favorite. | [optional]
**query_term_list** | [**\OpenAPI\Client\Model\QueryTerm[]**](QueryTerm.md) | Structured representation that infers query intent unambiguously. Client will echo this information back to the backend. Essentially, it is like a search result link. The list has an item corresponding to every query term. One user query is nothing but a collection of multiple query terms. | [optional]
**complete_query** | **string** | Actual query string. | [optional]
**uuid** | **string** | Entity id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
