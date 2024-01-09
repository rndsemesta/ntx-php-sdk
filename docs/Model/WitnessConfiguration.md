# # WitnessConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**witness_address** | **string** | Address of the witness, which will be witnessing this Recovery Plan. This will be same as Availability Zone URL, on which witness is deployed. | [optional]
**witness_failover_timeout_secs** | **int** | Time in seconds after which witness will trigger failover on this Recovery Plan in case there is a failure of source cluster or pause replication for entities in case there is a failure of target cluster. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
