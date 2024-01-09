# # QueryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query_explaination** | **string** | A description of the interpretation done by the search engine. | [optional]
**auto_completion_list** | [**\OpenAPI\Client\Model\AutoCompletion[]**](AutoCompletion.md) | List of all the autocompletions for a given user query. | [optional]
**query_context** | **string** | Common context for query which needs to be shared across client and search service. Client can pass some context which will be echoed back along with the response. | [optional]
**query_term_list** | [**\OpenAPI\Client\Model\QueryTerm[]**](QueryTerm.md) | Structured representation that infers query intent unambiguously. Client will echo this information back to the backend. Essentially, it is like a search result link. The list has an item corresponding to every query term. One user query is nothing but a collection of multiple query terms. | [optional]
**result** | [**\OpenAPI\Client\Model\Result**](Result.md) |  | [optional]
**user_query** | **string** | User query in simple text. | [optional]
**time_taken** | **int** | Time taken(ms) in executing the search query. | [optional]
**plain_text_query** | **bool** | A boolean flag to distinguish between a plain text search_for query and the search_for query with query term list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
