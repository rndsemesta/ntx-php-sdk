# # DayTime

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**day_of_week** | **string** | Day of week the policy has to take effect. |
**time** | **string** | Time of the day, the policy will be started. This is in \&quot;&lt;x&gt;h:&lt;y&gt;m\&quot; format. The values must be between 00h:00m and 23h:59m. For example user specified 18h:00m and the current time is 17h:00m then the first snapshot will be captured at 18h:00m. If the current time is 19h:00m then the first snapshot will be captured at 18h:00m next day. If not set, policy will be applicable immediately. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
