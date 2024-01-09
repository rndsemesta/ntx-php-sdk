# # AwsVmResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**root_device_type** | **string** | The root device type | [optional]
**private_dns_name** | **string** | The private DNS name of the instance. | [optional]
**availability_zone** | **string** | The zone on which the instance is created | [optional]
**block_device_map** | [**\OpenAPI\Client\Model\AwsBlockDeviceMapOutputStatus**](AwsBlockDeviceMapOutputStatus.md) |  | [optional]
**id** | **string** | The AWS ID of the instance. | [optional]
**subnet_id** | **string** | The subnet within the VPC the instance belongs to. | [optional]
**platform** | **string** | Platform of the instance e.g. Windows | [optional]
**state** | **string** | Instance&#39;s current state. | [optional]
**console_output** | **string** | Console output of the instance | [optional]
**public_ip_address** | **string** | The public IP of the instance | [optional]
**key_name** | **string** | The name of the key pair used to launch the instance | [optional]
**image_id** | **string** | The AWS ID of the AMI on the instance. | [optional]
**public_dns_name** | **string** | The public DNS name of the instance. | [optional]
**account_uuid** | **string** | The AWS account to which the instance belongs. | [optional]
**instance_profile_name** | **string** | The name of the IAM Instance Profile (IIP) associated with the instance. | [optional]
**region** | **string** | The region to which the instance belongs. | [optional]
**launch_time** | **string** | The time the instance was launched | [optional]
**instance_initiated_shutdown_behavior** | **string** | Specifies whether the instance stops or terminates on instance-initiated shutdown. | [optional]
**instance_type** | **string** | The type of instance e.g.&#39;t1.micro&#39;, &#39;m1.small&#39; | [optional]
**security_group_list** | [**\OpenAPI\Client\Model\AwsSecurityGroupListInner[]**](AwsSecurityGroupListInner.md) | List of AWS security group IDs. | [optional]
**private_ip_address** | **string** | The specific available IP from the subnet assigned to the instance. | [optional]
**vpc_id** | **string** | The VPC AWS ID, if running in VPC. | [optional]
**tag_list** | [**\OpenAPI\Client\Model\AwsTagListInner[]**](AwsTagListInner.md) | The AWS Tags associated with any AWS resource | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
