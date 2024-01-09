# # Schedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval_type** | **string** | Type of schedule interval. For schedule once, the interval_type is set to Once. ONCE is for aperiodic schedules. |
**duration_secs** | **int** | Duration of the event. If set, an event of duration duration_usecs will repeat as per the recurrence defined in interval_type. | [optional]
**start_time** | **\DateTime** | Start time of the schedule. The time should be specified in this manner. date-fullyear(4digit) \&quot;-\&quot; date-month(2digit) \&quot;-\&quot; date-mday(2digit) \&quot;T\&quot; time-hour(2digit) \&quot;:\&quot; time-minute(2digit) \&quot;:\&quot; time-second(2digit) [.] \&quot;Z\&quot;  or (\&quot;+\&quot; / \&quot;-\&quot;) time-hour(2digit) \&quot;:\&quot; time-minute(2digit) Examples - 1985-04-12T23:20:50.52Z represents 20 minutes and 50.52 seconds after the 23rd hour of   April 12th, 1985 in UTC. - 1996-12-19T16:39:57-08:00 This represents 39 minutes and 57 seconds after the 16th hour   of December 19th, 1996 with an offset of -08:00 from UTC (Pacific Standard Time).   Note that this is equivalent to 1996-12-20T00:39:57Z in UTC. | [optional]
**interval_multiple** | **int** | Multiple of interval_type. |
**day_of_week** | **string[]** | For schedule on weekly basis,like every Monday and Friday 10:00. To use this field, it is required that start_time (datetime) is set, and the interval_type is set to weekly or NONE.  If interval_type is set to NONE, then, only schedule for Monday and Friday once, in this example. | [optional]
**end_time** | **\DateTime** | End time of the schedule. The time should be specified in this manner. date-fullyear(4digit) \&quot;-\&quot; date-month(2digit) \&quot;-\&quot; date-mday(2digit) \&quot;T\&quot; time-hour(2digit) \&quot;:\&quot; time-minute(2digit) \&quot;:\&quot; time-second(2digit) [.] \&quot;Z\&quot;  or (\&quot;+\&quot; / \&quot;-\&quot;) time-hour(2digit) \&quot;:\&quot; time-minute(2digit) Examples - 1985-04-12T23:20:50.52Z represents 20 minutes and 50.52 seconds after the 23rd hour of   April 12th, 1985 in UTC. - 1996-12-19T16:39:57-08:00 This represents 39 minutes and 57 seconds after the 16th hour   of December 19th, 1996 with an offset of -08:00 from UTC (Pacific Standard Time).   Note that this is equivalent to 1996-12-20T00:39:57Z in UTC. | [optional]
**is_suspended** | **bool** | Whether the schedule is suspended. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
