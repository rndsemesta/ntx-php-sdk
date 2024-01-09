# # LogCollectorSupportCaseUpload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | **\DateTime** | Start time of the schedule. The time should be specified in this manner. date-fullyear(4digit) \&quot;-\&quot; date-month(2digit) \&quot;-\&quot; date-mday(2digit) \&quot;T\&quot; time-hour(2digit) \&quot;:\&quot; time-minute(2digit) \&quot;:\&quot; time-second(2digit) [.] \&quot;Z\&quot;  or (\&quot;+\&quot; / \&quot;-\&quot;) time-hour(2digit) \&quot;:\&quot; time-minute(2digit) Examples - 1985-04-12T23:20:50.52Z represents 20 minutes and 50.52 seconds after the 23rd hour of   April 12th, 1985 in UTC. - 1996-12-19T16:39:57-08:00 This represents 39 minutes and 57 seconds after the 16th hour   of December 19th, 1996 with an offset of -08:00 from UTC (Pacific Standard Time).   Note that this is equivalent to 1996-12-20T00:39:57Z in UTC. | [optional]
**anonymize_output** | **bool** | Flag for anonymized log collection. | [optional]
**end_time** | **\DateTime** | End time of the schedule. The time should be specified in this manner. date-fullyear(4digit) \&quot;-\&quot; date-month(2digit) \&quot;-\&quot; date-mday(2digit) \&quot;T\&quot; time-hour(2digit) \&quot;:\&quot; time-minute(2digit) \&quot;:\&quot; time-second(2digit) [.] \&quot;Z\&quot;  or (\&quot;+\&quot; / \&quot;-\&quot;) time-hour(2digit) \&quot;:\&quot; time-minute(2digit) Examples - 1985-04-12T23:20:50.52Z represents 20 minutes and 50.52 seconds after the 23rd hour of   April 12th, 1985 in UTC. - 1996-12-19T16:39:57-08:00 This represents 39 minutes and 57 seconds after the 16th hour   of December 19th, 1996 with an offset of -08:00 from UTC (Pacific Standard Time).   Note that this is equivalent to 1996-12-20T00:39:57Z in UTC. | [optional]
**num_hours** | **int** | Number of hours for which log has to be collected. Starts from current time - no_of_hours till current time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
