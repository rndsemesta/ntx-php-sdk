# # AwsImageResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**root_device_type** | **string** | Root device type (e.g. ebs, instance-store) | [optional]
**kernel_id** | **string** | Kernal AWS ID of the image. | [optional]
**hypervisor** | **string** | The supported hypervisor. | [optional]
**id** | **string** | The AWS ID of the AMI. | [optional]
**platform** | **string** | Platform of the image (e.g. Windows) | [optional]
**architecture** | **string** | Architecture of the AWS image (e.g. i386, x86_64) | [optional]
**tag_list** | [**\OpenAPI\Client\Model\AwsTagListInner[]**](AwsTagListInner.md) | The AWS Tags associated with any AWS resource | [optional]
**virtualization_type** | **string** | Type of virtualization supported. | [optional]
**root_device_name** | **string** | Root device name (e.g. /dev/sda1, /dev/sda2) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
