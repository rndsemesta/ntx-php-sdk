# # SearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query_context** | **string** | Common context for query which needs to be shared across client and search service. Client can pass some context which will be echoed back along with the response. | [optional]
**explicit_query** | **bool** | Flag to indicate the user explicitly made this query (e.g by pressing enter) and is not still typing. Helpful for tracking concrete queries fired by the user. | [optional]
**generate_autocompletions_only** | **bool** | Flag to specify  if user is interested only in autocompletions. | [optional]
**query_term_list** | [**\OpenAPI\Client\Model\QueryTerm[]**](QueryTerm.md) | Structured representation that infers query intent unambiguously. Client will echo this information back to the backend. Essentially, it is like a search result link. The list has an item corresponding to every query term. One user query is nothing but a collection of multiple query terms. | [optional]
**is_autocomplete_selection** | **bool** | Flag to indicate the user selected an autocomplete. Helpful for tracking concrete autocomplete selections. | [optional]
**timezone** | **string** | Timezone in which the query is getting excecuted. | [optional]
**user_query** | **string** | User query in simple text. | [optional]
**widget_id_list** | **string[]** | Optional list of widgets that a client can request for a specific query.The list is meant to be populated with IDs based on the previous searchresponse. For instance the first response can indicate that the result consists of widget ids \&quot;property_summary\&quot;, \&quot;metric_summary\&quot; (or some other form of unique identifier but without any actual data). The client can then make a second request for those widgets. This helps in performance reasons as well as for refreshing content on demand. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
