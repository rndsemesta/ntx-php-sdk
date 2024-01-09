# # XigDnsConfigResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rewrite_rules_list** | [**\OpenAPI\Client\Model\RewriteRule[]**](RewriteRule.md) | Rules to rewrite API paths. | [optional]
**jwk_source_list** | [**\OpenAPI\Client\Model\JwkSource[]**](JwkSource.md) | -&gt; Required if any proxy rule has token validation on. This is the source information where XIG will poll for JSON web keys and do token validations against. | [optional]
**bypass_auth_path_list** | **string[]** | -&gt; Api path regex which needs to bypass authendication/token validation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
