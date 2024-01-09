# # AwsVmResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instance_type** | **string** | The type of instance e.g.&#39;t1.micro&#39;, &#39;m1.small&#39; | [optional]
**instance_profile_name** | **string** | The name of the IAM Instance Profile (IIP) associated with the instance | [optional]
**availability_zone** | **string** | The zone on which the instance is to be created. | [optional]
**subnet_id** | **string** | The subnet within the VPC the instance belongs to. | [optional]
**key_name** | **string** | The name of the key pair used to launch the instance | [optional]
**region** | **string** | The region to which the instance belongs. | [optional]
**user_data** | **string** | User data passed to launch the instance | [optional]
**instance_initiated_shutdown_behavior** | **string** | Specifies whether the instance stops or terminates on instance-initiated shutdown. | [optional]
**image_id** | **string** | The AWS ID of the AMI on the instance. | [optional]
**state** | **string** | Instance&#39;s desired state. | [optional]
**security_group_list** | [**\OpenAPI\Client\Model\AwsSecurityGroupListInner[]**](AwsSecurityGroupListInner.md) | List of AWS security group IDs. | [optional]
**block_device_map** | [**\OpenAPI\Client\Model\AwsBlockDeviceMap**](AwsBlockDeviceMap.md) |  | [optional]
**private_ip_address** | **string** | The specific available IP from the subnet assigned to the instance. | [optional]
**vpc_id** | **string** | The VPC AWS ID, if running in VPC. | [optional]
**tag_list** | [**\OpenAPI\Client\Model\AwsTagListInner[]**](AwsTagListInner.md) | The AWS Tags associated with any AWS resource | [optional]
**account_uuid** | **string** | The AWS account to which the instance belongs. | [optional]
**associate_public_ip_address** | **bool** | Indicates whether the network interface receives a public IP address.Can associate a public IP address with a network interface only if it has a device index of eth0 and if it is a new network interface (not an existing one). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
