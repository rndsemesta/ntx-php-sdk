# OpenAPIClient-php

Move programming from the user to the machine.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https:////.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccessControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AccessControlPolicyListMetadata(); // \OpenAPI\Client\Model\AccessControlPolicyListMetadata

try {
    $result = $apiInstance->accessControlPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlPoliciesApi->accessControlPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api/nutanix/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessControlPoliciesApi* | [**accessControlPoliciesListPost**](docs/Api/AccessControlPoliciesApi.md#accesscontrolpolicieslistpost) | **POST** /access_control_policies/list | Get a list of existing Access Control Policies
*AccessControlPoliciesApi* | [**accessControlPoliciesPost**](docs/Api/AccessControlPoliciesApi.md#accesscontrolpoliciespost) | **POST** /access_control_policies | Create a new Access Control Policy
*AccessControlPoliciesApi* | [**accessControlPoliciesUuidDelete**](docs/Api/AccessControlPoliciesApi.md#accesscontrolpoliciesuuiddelete) | **DELETE** /access_control_policies/{uuid} | Delete a existing Access Control Policy
*AccessControlPoliciesApi* | [**accessControlPoliciesUuidGet**](docs/Api/AccessControlPoliciesApi.md#accesscontrolpoliciesuuidget) | **GET** /access_control_policies/{uuid} | Get a existing Access Control Policy
*AccessControlPoliciesApi* | [**accessControlPoliciesUuidPut**](docs/Api/AccessControlPoliciesApi.md#accesscontrolpoliciesuuidput) | **PUT** /access_control_policies/{uuid} | Update a existing Access Control Policy
*AccountsApi* | [**accountsListPost**](docs/Api/AccountsApi.md#accountslistpost) | **POST** /accounts/list | List the Account
*AccountsApi* | [**accountsPost**](docs/Api/AccountsApi.md#accountspost) | **POST** /accounts | Create Account
*AccountsApi* | [**accountsUuidDelete**](docs/Api/AccountsApi.md#accountsuuiddelete) | **DELETE** /accounts/{uuid} | Delete Account
*AccountsApi* | [**accountsUuidGet**](docs/Api/AccountsApi.md#accountsuuidget) | **GET** /accounts/{uuid} | Get Account
*AccountsApi* | [**accountsUuidPut**](docs/Api/AccountsApi.md#accountsuuidput) | **PUT** /accounts/{uuid} | Update Account
*AccountsApi* | [**accountsUuidVerifyGet**](docs/Api/AccountsApi.md#accountsuuidverifyget) | **GET** /accounts/{uuid}/verify | Verify account
*ActionRuleResultsApi* | [**actionRuleResultsActionActionPost**](docs/Api/ActionRuleResultsApi.md#actionruleresultsactionactionpost) | **POST** /action_rule_results/action/{action} | Perform an action to abort/resume action rule execution instance.
*ActionRuleResultsApi* | [**actionRuleResultsListPost**](docs/Api/ActionRuleResultsApi.md#actionruleresultslistpost) | **POST** /action_rule_results/list | Get a list of existing action_rule_result
*ActionRuleResultsApi* | [**actionRuleResultsPost**](docs/Api/ActionRuleResultsApi.md#actionruleresultspost) | **POST** /action_rule_results | Create a new action_rule_result
*ActionRuleResultsApi* | [**actionRuleResultsUuidDelete**](docs/Api/ActionRuleResultsApi.md#actionruleresultsuuiddelete) | **DELETE** /action_rule_results/{uuid} | Delete a existing action_rule_result
*ActionRuleResultsApi* | [**actionRuleResultsUuidGet**](docs/Api/ActionRuleResultsApi.md#actionruleresultsuuidget) | **GET** /action_rule_results/{uuid} | Get a existing action_rule_result
*ActionRulesApi* | [**actionRulesListPost**](docs/Api/ActionRulesApi.md#actionruleslistpost) | **POST** /action_rules/list | Get a list of existing action_rule
*ActionRulesApi* | [**actionRulesPost**](docs/Api/ActionRulesApi.md#actionrulespost) | **POST** /action_rules | Create a new action_rule
*ActionRulesApi* | [**actionRulesTriggerPost**](docs/Api/ActionRulesApi.md#actionrulestriggerpost) | **POST** /action_rules/trigger | Manually trigger action rules execution.
*ActionRulesApi* | [**actionRulesUuidDelete**](docs/Api/ActionRulesApi.md#actionrulesuuiddelete) | **DELETE** /action_rules/{uuid} | Delete a existing action_rule
*ActionRulesApi* | [**actionRulesUuidGet**](docs/Api/ActionRulesApi.md#actionrulesuuidget) | **GET** /action_rules/{uuid} | Get a existing action_rule
*ActionRulesApi* | [**actionRulesUuidPut**](docs/Api/ActionRulesApi.md#actionrulesuuidput) | **PUT** /action_rules/{uuid} | Update a existing action_rule
*ActionRulesApi* | [**actionRulesValidatePost**](docs/Api/ActionRulesApi.md#actionrulesvalidatepost) | **POST** /action_rules/validate | Validate an action rule
*ActionTemplatesApi* | [**actionTemplatesListPost**](docs/Api/ActionTemplatesApi.md#actiontemplateslistpost) | **POST** /action_templates/list | Get a list of existing action_template
*ActionTemplatesApi* | [**actionTemplatesPost**](docs/Api/ActionTemplatesApi.md#actiontemplatespost) | **POST** /action_templates | Create a new action_template
*ActionTemplatesApi* | [**actionTemplatesUuidDelete**](docs/Api/ActionTemplatesApi.md#actiontemplatesuuiddelete) | **DELETE** /action_templates/{uuid} | Delete a existing action_template
*ActionTemplatesApi* | [**actionTemplatesUuidGet**](docs/Api/ActionTemplatesApi.md#actiontemplatesuuidget) | **GET** /action_templates/{uuid} | Get a existing action_template
*ActionTemplatesApi* | [**actionTemplatesUuidPut**](docs/Api/ActionTemplatesApi.md#actiontemplatesuuidput) | **PUT** /action_templates/{uuid} | Update a existing action_template
*ActionTriggerTypesApi* | [**actionTriggerTypesListPost**](docs/Api/ActionTriggerTypesApi.md#actiontriggertypeslistpost) | **POST** /action_trigger_types/list | Get a list of existing action_trigger_type
*ActionTriggerTypesApi* | [**actionTriggerTypesPost**](docs/Api/ActionTriggerTypesApi.md#actiontriggertypespost) | **POST** /action_trigger_types | Create a new action_trigger_type
*ActionTriggerTypesApi* | [**actionTriggerTypesUuidDisplayMetadataGet**](docs/Api/ActionTriggerTypesApi.md#actiontriggertypesuuiddisplaymetadataget) | **GET** /action_trigger_types/{uuid}/display_metadata | Get action trigger type UI display metadata
*ActionTriggerTypesApi* | [**actionTriggerTypesUuidGet**](docs/Api/ActionTriggerTypesApi.md#actiontriggertypesuuidget) | **GET** /action_trigger_types/{uuid} | Get a existing action_trigger_type
*ActionTriggerTypesApi* | [**actionTriggerTypesUuidPut**](docs/Api/ActionTriggerTypesApi.md#actiontriggertypesuuidput) | **PUT** /action_trigger_types/{uuid} | Update a existing action_trigger_type
*ActionTypesApi* | [**actionTypesListPost**](docs/Api/ActionTypesApi.md#actiontypeslistpost) | **POST** /action_types/list | Get a list of existing action_type
*ActionTypesApi* | [**actionTypesPost**](docs/Api/ActionTypesApi.md#actiontypespost) | **POST** /action_types | Create a new action_type
*ActionTypesApi* | [**actionTypesUuidDisplayMetadataGet**](docs/Api/ActionTypesApi.md#actiontypesuuiddisplaymetadataget) | **GET** /action_types/{uuid}/display_metadata | Get action type UI display metadata
*ActionTypesApi* | [**actionTypesUuidGet**](docs/Api/ActionTypesApi.md#actiontypesuuidget) | **GET** /action_types/{uuid} | Get a existing action_type
*ActionTypesApi* | [**actionTypesUuidPut**](docs/Api/ActionTypesApi.md#actiontypesuuidput) | **PUT** /action_types/{uuid} | Update a existing action_type
*AddressGroupsApi* | [**addressGroupsListPost**](docs/Api/AddressGroupsApi.md#addressgroupslistpost) | **POST** /address_groups/list | Address groups lists
*AddressGroupsApi* | [**addressGroupsPost**](docs/Api/AddressGroupsApi.md#addressgroupspost) | **POST** /address_groups | Create a new address_group
*AddressGroupsApi* | [**addressGroupsUuidDelete**](docs/Api/AddressGroupsApi.md#addressgroupsuuiddelete) | **DELETE** /address_groups/{uuid} | Delete a existing address_group
*AddressGroupsApi* | [**addressGroupsUuidGet**](docs/Api/AddressGroupsApi.md#addressgroupsuuidget) | **GET** /address_groups/{uuid} | Get a existing address_group
*AddressGroupsApi* | [**addressGroupsUuidPut**](docs/Api/AddressGroupsApi.md#addressgroupsuuidput) | **PUT** /address_groups/{uuid} | Update a existing address_group
*AlertsApi* | [**alertsActionActionPost**](docs/Api/AlertsApi.md#alertsactionactionpost) | **POST** /alerts/action/{action} | Perform an action to acknowledge or resolve alerts.
*AlertsApi* | [**alertsListPost**](docs/Api/AlertsApi.md#alertslistpost) | **POST** /alerts/list | Get a list of existing alert
*AlertsApi* | [**alertsNotifyPost**](docs/Api/AlertsApi.md#alertsnotifypost) | **POST** /alerts/notify | Create a new alert
*AlertsApi* | [**alertsUuidGet**](docs/Api/AlertsApi.md#alertsuuidget) | **GET** /alerts/{uuid} | Get a existing alert
*AppRunlogsApi* | [**appRunlogsArchivalPolicyListPost**](docs/Api/AppRunlogsApi.md#apprunlogsarchivalpolicylistpost) | **POST** /app_runlogs/archival_policy/list | Returns archive information of the runlogs
*AppRunlogsApi* | [**appRunlogsArchivalPolicyUuidGet**](docs/Api/AppRunlogsApi.md#apprunlogsarchivalpolicyuuidget) | **GET** /app_runlogs/archival_policy/{uuid} | Returns archive information of the runlogs
*AppRunlogsApi* | [**appRunlogsArchiveFileUuidDownloadGet**](docs/Api/AppRunlogsApi.md#apprunlogsarchivefileuuiddownloadget) | **GET** /app_runlogs/archive_file/{uuid}/download | Returns archive containing script and output file for download
*AppTasksApi* | [**appTasksListPost**](docs/Api/AppTasksApi.md#apptaskslistpost) | **POST** /app_tasks/list | Get a list of existing app_tasks
*AppTasksApi* | [**appTasksPost**](docs/Api/AppTasksApi.md#apptaskspost) | **POST** /app_tasks | Create a new app_task
*AppTasksApi* | [**appTasksUuidDelete**](docs/Api/AppTasksApi.md#apptasksuuiddelete) | **DELETE** /app_tasks/{uuid} | Delete a existing app_task
*AppTasksApi* | [**appTasksUuidGet**](docs/Api/AppTasksApi.md#apptasksuuidget) | **GET** /app_tasks/{uuid} | Get a existing app_task
*AppTasksApi* | [**appTasksUuidPut**](docs/Api/AppTasksApi.md#apptasksuuidput) | **PUT** /app_tasks/{uuid} | Update a existing app_task
*AppTasksApi* | [**appTasksUuidSharePut**](docs/Api/AppTasksApi.md#apptasksuuidshareput) | **PUT** /app_tasks/{uuid}/share | Update a existing app_task
*AppsApi* | [**appsListPost**](docs/Api/AppsApi.md#appslistpost) | **POST** /apps/list | List the Application
*AppsApi* | [**appsPost**](docs/Api/AppsApi.md#appspost) | **POST** /apps | Create Application
*AppsApi* | [**appsUuidActionsActionUuidRunPost**](docs/Api/AppsApi.md#appsuuidactionsactionuuidrunpost) | **POST** /apps/{uuid}/actions/{action_uuid}/run | The API to run an action of appplication on provided target.
*AppsApi* | [**appsUuidAppRunlogsListPost**](docs/Api/AppsApi.md#appsuuidapprunlogslistpost) | **POST** /apps/{uuid}/app_runlogs/list | List the Runlogs
*AppsApi* | [**appsUuidAppRunlogsRunlogUuidAbortPost**](docs/Api/AppsApi.md#appsuuidapprunlogsrunloguuidabortpost) | **POST** /apps/{uuid}/app_runlogs/{runlog_uuid}/abort | Abort Runlog
*AppsApi* | [**appsUuidAppRunlogsRunlogUuidGet**](docs/Api/AppsApi.md#appsuuidapprunlogsrunloguuidget) | **GET** /apps/{uuid}/app_runlogs/{runlog_uuid} | Get Runlog
*AppsApi* | [**appsUuidAppRunlogsRunlogUuidOutputDownloadGet**](docs/Api/AppsApi.md#appsuuidapprunlogsrunloguuidoutputdownloadget) | **GET** /apps/{uuid}/app_runlogs/{runlog_uuid}/output/download | Returns output file for download
*AppsApi* | [**appsUuidAppRunlogsRunlogUuidOutputGet**](docs/Api/AppsApi.md#appsuuidapprunlogsrunloguuidoutputget) | **GET** /apps/{uuid}/app_runlogs/{runlog_uuid}/output | Returns last 10 lines of output of runlog
*AppsApi* | [**appsUuidDelete**](docs/Api/AppsApi.md#appsuuiddelete) | **DELETE** /apps/{uuid} | Delete Application
*AppsApi* | [**appsUuidGet**](docs/Api/AppsApi.md#appsuuidget) | **GET** /apps/{uuid} | Get Application
*AppsApi* | [**appsUuidPut**](docs/Api/AppsApi.md#appsuuidput) | **PUT** /apps/{uuid} | Update Application
*AppsApi* | [**appsUuidSubstratesSubstrateUuidGet**](docs/Api/AppsApi.md#appsuuidsubstratessubstrateuuidget) | **GET** /apps/{uuid}/substrates/{substrate_uuid} | Get Substrate Element
*AuditsApi* | [**auditsListPost**](docs/Api/AuditsApi.md#auditslistpost) | **POST** /audits/list | Get a list of existing audit
*AuditsApi* | [**auditsUuidGet**](docs/Api/AuditsApi.md#auditsuuidget) | **GET** /audits/{uuid} | Get a existing audit
*AvailabilityZonesApi* | [**availabilityZonesListPost**](docs/Api/AvailabilityZonesApi.md#availabilityzoneslistpost) | **POST** /availability_zones/list | Get availability zones
*AvailabilityZonesApi* | [**availabilityZonesPost**](docs/Api/AvailabilityZonesApi.md#availabilityzonespost) | **POST** /availability_zones | Create an availability zone
*AvailabilityZonesApi* | [**availabilityZonesSyncPost**](docs/Api/AvailabilityZonesApi.md#availabilityzonessyncpost) | **POST** /availability_zones/sync | Sync global entities to all connected availability zones.
*AvailabilityZonesApi* | [**availabilityZonesUuidDelete**](docs/Api/AvailabilityZonesApi.md#availabilityzonesuuiddelete) | **DELETE** /availability_zones/{uuid} | Delete an availability zone
*AvailabilityZonesApi* | [**availabilityZonesUuidGet**](docs/Api/AvailabilityZonesApi.md#availabilityzonesuuidget) | **GET** /availability_zones/{uuid} | Get details for an availability zones
*AvailabilityZonesApi* | [**availabilityZonesUuidPut**](docs/Api/AvailabilityZonesApi.md#availabilityzonesuuidput) | **PUT** /availability_zones/{uuid} | Modify availability zone
*AwsAvailabilityZonesApi* | [**awsAvailabilityZonesListPost**](docs/Api/AwsAvailabilityZonesApi.md#awsavailabilityzoneslistpost) | **POST** /aws/availability_zones/list | List all the AWS availability zones
*AwsElasticIpsApi* | [**awsElasticIpsListPost**](docs/Api/AwsElasticIpsApi.md#awselasticipslistpost) | **POST** /aws/elastic_ips/list | List AWS elastic IPs.
*AwsImagesApi* | [**awsImagesListPost**](docs/Api/AwsImagesApi.md#awsimageslistpost) | **POST** /aws/images/list | List all AWS AMIs.
*AwsKeyPairsApi* | [**awsKeyPairsListPost**](docs/Api/AwsKeyPairsApi.md#awskeypairslistpost) | **POST** /aws/key_pairs/list | List all the AWS key pairs
*AwsMachineTypesApi* | [**awsMachineTypesListPost**](docs/Api/AwsMachineTypesApi.md#awsmachinetypeslistpost) | **POST** /aws/machine_types/list | List all the AWS machine types
*AwsRegionsApi* | [**awsRegionsListPost**](docs/Api/AwsRegionsApi.md#awsregionslistpost) | **POST** /aws/regions/list | List all the AWS regions
*AwsRolesApi* | [**awsRolesListPost**](docs/Api/AwsRolesApi.md#awsroleslistpost) | **POST** /aws/roles/list | List all the AWS roles
*AwsSecurityGroupsApi* | [**awsSecurityGroupsAccountUuidRegionIdGet**](docs/Api/AwsSecurityGroupsApi.md#awssecuritygroupsaccountuuidregionidget) | **GET** /aws/security_groups/{account_uuid}/{region}/{id} | Get an AWS security group
*AwsSecurityGroupsApi* | [**awsSecurityGroupsListPost**](docs/Api/AwsSecurityGroupsApi.md#awssecuritygroupslistpost) | **POST** /aws/security_groups/list | List all AWS Security Groups
*AwsSubnetsApi* | [**awsSubnetsAccountUuidRegionIdGet**](docs/Api/AwsSubnetsApi.md#awssubnetsaccountuuidregionidget) | **GET** /aws/subnets/{account_uuid}/{region}/{id} | Get details for an AWS subnet
*AwsSubnetsApi* | [**awsSubnetsListPost**](docs/Api/AwsSubnetsApi.md#awssubnetslistpost) | **POST** /aws/subnets/list | List all AWS subnets.
*AwsVmsApi* | [**awsVmsListPost**](docs/Api/AwsVmsApi.md#awsvmslistpost) | **POST** /aws/vms/list | List AWS VMs.
*AwsVmsApi* | [**awsVmsPost**](docs/Api/AwsVmsApi.md#awsvmspost) | **POST** /aws/vms | Create an AWS instance(VM)
*AwsVmsApi* | [**awsVmsUuidDelete**](docs/Api/AwsVmsApi.md#awsvmsuuiddelete) | **DELETE** /aws/vms/{uuid} | Delete an AWS VM.
*AwsVmsApi* | [**awsVmsUuidGet**](docs/Api/AwsVmsApi.md#awsvmsuuidget) | **GET** /aws/vms/{uuid} | Get an AWS VM.
*AwsVmsApi* | [**awsVmsUuidPut**](docs/Api/AwsVmsApi.md#awsvmsuuidput) | **PUT** /aws/vms/{uuid} | Update an AWS VM.
*AwsVolumeTypesApi* | [**awsVolumeTypesListPost**](docs/Api/AwsVolumeTypesApi.md#awsvolumetypeslistpost) | **POST** /aws/volume_types/list | List all the AWS volume types
*AwsVpcsApi* | [**awsVpcsAccountUuidRegionIdGet**](docs/Api/AwsVpcsApi.md#awsvpcsaccountuuidregionidget) | **GET** /aws/vpcs/{account_uuid}/{region}/{id} | Get an AWS VPC
*AwsVpcsApi* | [**awsVpcsListPost**](docs/Api/AwsVpcsApi.md#awsvpcslistpost) | **POST** /aws/vpcs/list | List all AWS VPCs
*BatchApi* | [**batchPost**](docs/Api/BatchApi.md#batchpost) | **POST** /batch | Submit a list of one or more intentful REST APIs to be processed
*BillingApi* | [**billingAccountGet**](docs/Api/BillingApi.md#billingaccountget) | **GET** /billing/account | Get account information for the current user.
*BillingApi* | [**billingInvoicesPost**](docs/Api/BillingApi.md#billinginvoicespost) | **POST** /billing/invoices | Get a list of existing billing_invoices
*BillingApi* | [**billingSummaryGet**](docs/Api/BillingApi.md#billingsummaryget) | **GET** /billing/summary | Get usage details for the current tenant.
*BillingApi* | [**billingUnbilledInvoiceGet**](docs/Api/BillingApi.md#billingunbilledinvoiceget) | **GET** /billing/unbilled_invoice | Get unbilled usage summary.
*BlackoutsApi* | [**blackoutsListPost**](docs/Api/BlackoutsApi.md#blackoutslistpost) | **POST** /blackouts/list | Retrieve all blackout objects
*BlackoutsApi* | [**blackoutsPost**](docs/Api/BlackoutsApi.md#blackoutspost) | **POST** /blackouts | Create blackout object
*BlackoutsApi* | [**blackoutsUuidDelete**](docs/Api/BlackoutsApi.md#blackoutsuuiddelete) | **DELETE** /blackouts/{uuid} | Delete specified blackout object
*BlackoutsApi* | [**blackoutsUuidGet**](docs/Api/BlackoutsApi.md#blackoutsuuidget) | **GET** /blackouts/{uuid} | Retrieve specified blackout object
*BlackoutsApi* | [**blackoutsUuidPut**](docs/Api/BlackoutsApi.md#blackoutsuuidput) | **PUT** /blackouts/{uuid} | Update blackout entity
*BlueprintApi* | [**blueprintsBrownfieldImportVmsListPost**](docs/Api/BlueprintApi.md#blueprintsbrownfieldimportvmslistpost) | **POST** /blueprints/brownfield_import/vms/list | List the vms available for import
*BlueprintApi* | [**blueprintsImportFilePost**](docs/Api/BlueprintApi.md#blueprintsimportfilepost) | **POST** /blueprints/import_file | Create Blueprint from file
*BlueprintApi* | [**blueprintsImportJsonPost**](docs/Api/BlueprintApi.md#blueprintsimportjsonpost) | **POST** /blueprints/import_json | Create Blueprint using json
*BlueprintApi* | [**blueprintsListPost**](docs/Api/BlueprintApi.md#blueprintslistpost) | **POST** /blueprints/list | List the Blueprint
*BlueprintApi* | [**blueprintsMarketplaceLaunchPost**](docs/Api/BlueprintApi.md#blueprintsmarketplacelaunchpost) | **POST** /blueprints/marketplace_launch | Launch the marketplace item
*BlueprintApi* | [**blueprintsPendingLaunchesListPost**](docs/Api/BlueprintApi.md#blueprintspendinglauncheslistpost) | **POST** /blueprints/pending_launches/list | List the pending Blueprint launches
*BlueprintApi* | [**blueprintsPost**](docs/Api/BlueprintApi.md#blueprintspost) | **POST** /blueprints | Create Blueprint
*BlueprintApi* | [**blueprintsUuidClonePost**](docs/Api/BlueprintApi.md#blueprintsuuidclonepost) | **POST** /blueprints/{uuid}/clone | Clone the blueprint
*BlueprintApi* | [**blueprintsUuidDelete**](docs/Api/BlueprintApi.md#blueprintsuuiddelete) | **DELETE** /blueprints/{uuid} | Delete Blueprint
*BlueprintApi* | [**blueprintsUuidExportFileGet**](docs/Api/BlueprintApi.md#blueprintsuuidexportfileget) | **GET** /blueprints/{uuid}/export_file | Download blueprint file
*BlueprintApi* | [**blueprintsUuidExportJsonGet**](docs/Api/BlueprintApi.md#blueprintsuuidexportjsonget) | **GET** /blueprints/{uuid}/export_json | Get Blueprint in json format
*BlueprintApi* | [**blueprintsUuidGet**](docs/Api/BlueprintApi.md#blueprintsuuidget) | **GET** /blueprints/{uuid} | Get Blueprint
*BlueprintApi* | [**blueprintsUuidLaunchPost**](docs/Api/BlueprintApi.md#blueprintsuuidlaunchpost) | **POST** /blueprints/{uuid}/launch | Launch the blueprint
*BlueprintApi* | [**blueprintsUuidPendingLaunchesLaunchedUuidGet**](docs/Api/BlueprintApi.md#blueprintsuuidpendinglauncheslauncheduuidget) | **GET** /blueprints/{uuid}/pending_launches/{launched_uuid} | Get the pending launch details
*BlueprintApi* | [**blueprintsUuidPut**](docs/Api/BlueprintApi.md#blueprintsuuidput) | **PUT** /blueprints/{uuid} | Update Blueprint
*CategoriesApi* | [**categoriesListPost**](docs/Api/CategoriesApi.md#categorieslistpost) | **POST** /categories/list | List the category keys.
*CategoriesApi* | [**categoriesNameDelete**](docs/Api/CategoriesApi.md#categoriesnamedelete) | **DELETE** /categories/{name} | Delete a category Key.
*CategoriesApi* | [**categoriesNameGet**](docs/Api/CategoriesApi.md#categoriesnameget) | **GET** /categories/{name} | Get a category key.
*CategoriesApi* | [**categoriesNameListPost**](docs/Api/CategoriesApi.md#categoriesnamelistpost) | **POST** /categories/{name}/list | List the values for a specified key.
*CategoriesApi* | [**categoriesNamePut**](docs/Api/CategoriesApi.md#categoriesnameput) | **PUT** /categories/{name} | Create or Update a category Key.
*CategoriesApi* | [**categoriesNameValueDelete**](docs/Api/CategoriesApi.md#categoriesnamevaluedelete) | **DELETE** /categories/{name}/{value} | Delete a category value.
*CategoriesApi* | [**categoriesNameValueGet**](docs/Api/CategoriesApi.md#categoriesnamevalueget) | **GET** /categories/{name}/{value} | Get a category value.
*CategoriesApi* | [**categoriesNameValuePut**](docs/Api/CategoriesApi.md#categoriesnamevalueput) | **PUT** /categories/{name}/{value} | Create or Update a category value.
*CategoriesApi* | [**categoryQueryPost**](docs/Api/CategoriesApi.md#categoryquerypost) | **POST** /category/query | Get category usage details.
*CellApi* | [**cellsListPost**](docs/Api/CellApi.md#cellslistpost) | **POST** /cells/list | Retrieves all cells
*CellApi* | [**cellsPost**](docs/Api/CellApi.md#cellspost) | **POST** /cells | Create a cell instance
*CellApi* | [**cellsUuidDelete**](docs/Api/CellApi.md#cellsuuiddelete) | **DELETE** /cells/{uuid} | Delete specified cell
*CellApi* | [**cellsUuidGet**](docs/Api/CellApi.md#cellsuuidget) | **GET** /cells/{uuid} | Retrieves specified cell
*CellApi* | [**cellsUuidPut**](docs/Api/CellApi.md#cellsuuidput) | **PUT** /cells/{uuid} | Update cell
*CloudApi* | [**cloudConfigsCloudTypeGet**](docs/Api/CloudApi.md#cloudconfigscloudtypeget) | **GET** /cloud_configs/{cloud_type} | Gets the Nutanix hosted cloud config.
*CloudApi* | [**cloudTrustsListPost**](docs/Api/CloudApi.md#cloudtrustslistpost) | **POST** /cloud_trusts/list | List trusted clouds.
*CloudApi* | [**cloudTrustsPost**](docs/Api/CloudApi.md#cloudtrustspost) | **POST** /cloud_trusts | Pairs this cloud with the given cloud (Nutanix hosted cloud/ Onprem Cloud).
*CloudApi* | [**cloudTrustsUuidDelete**](docs/Api/CloudApi.md#cloudtrustsuuiddelete) | **DELETE** /cloud_trusts/{uuid} | Deletes the specified cloud pairing.
*CloudApi* | [**cloudTrustsUuidGet**](docs/Api/CloudApi.md#cloudtrustsuuidget) | **GET** /cloud_trusts/{uuid} | Get the details of the specified trusted cloud.
*CloudTenantApi* | [**cloudTenantsListPost**](docs/Api/CloudTenantApi.md#cloudtenantslistpost) | **POST** /cloud_tenants/list | list the cloud_tenants
*CloudTenantApi* | [**cloudTenantsPost**](docs/Api/CloudTenantApi.md#cloudtenantspost) | **POST** /cloud_tenants | Register cloud_tenant to PC.
*CloudTenantApi* | [**cloudTenantsUuidDelete**](docs/Api/CloudTenantApi.md#cloudtenantsuuiddelete) | **DELETE** /cloud_tenants/{uuid} | Delete cloud_tenant
*CloudTenantApi* | [**cloudTenantsUuidGet**](docs/Api/CloudTenantApi.md#cloudtenantsuuidget) | **GET** /cloud_tenants/{uuid} | Get cloud_tenant details
*CloudTenantApi* | [**cloudTenantsUuidPut**](docs/Api/CloudTenantApi.md#cloudtenantsuuidput) | **PUT** /cloud_tenants/{uuid} | Update cloud_tenant details
*ClustersApi* | [**clustersEntityReplicationTargetDetailsPost**](docs/Api/ClustersApi.md#clustersentityreplicationtargetdetailspost) | **POST** /clusters/entity_replication_target_details | Get the placement information for an entity. This will be used to identify the replication target for an entity snapshot or placement of the entity.
*ClustersApi* | [**clustersListPost**](docs/Api/ClustersApi.md#clusterslistpost) | **POST** /clusters/list | Get a list of existing clusters
*ClustersApi* | [**clustersMulticlusterConfigClusterUuidMigrateSspConfigPost**](docs/Api/ClustersApi.md#clustersmulticlusterconfigclusteruuidmigratesspconfigpost) | **POST** /clusters/multicluster_config/{cluster_uuid}/migrate_ssp_config | Migrate SSP config from a Prism Element.
*ClustersApi* | [**clustersMulticlusterConfigPost**](docs/Api/ClustersApi.md#clustersmulticlusterconfigpost) | **POST** /clusters/multicluster_config | Apply multicluster configuration from Prism Central.
*ClustersApi* | [**clustersMulticlusterConfigUuidCancelPost**](docs/Api/ClustersApi.md#clustersmulticlusterconfiguuidcancelpost) | **POST** /clusters/multicluster_config/{uuid}/cancel | Cancel a multicluster configuration request from Prism Central.
*ClustersApi* | [**clustersMulticlusterConfigUuidDelete**](docs/Api/ClustersApi.md#clustersmulticlusterconfiguuiddelete) | **DELETE** /clusters/multicluster_config/{uuid} | Delete a scheduled and unprocessed multicluster configuration request.
*ClustersApi* | [**clustersMulticlusterConfigUuidPausePost**](docs/Api/ClustersApi.md#clustersmulticlusterconfiguuidpausepost) | **POST** /clusters/multicluster_config/{uuid}/pause | Pause a multicluster configuration request from Prism Central.
*ClustersApi* | [**clustersMulticlusterConfigUuidPut**](docs/Api/ClustersApi.md#clustersmulticlusterconfiguuidput) | **PUT** /clusters/multicluster_config/{uuid} | Update a scheduled and unprocessed multicluster configuration request.
*ClustersApi* | [**clustersMulticlusterConfigUuidResumePost**](docs/Api/ClustersApi.md#clustersmulticlusterconfiguuidresumepost) | **POST** /clusters/multicluster_config/{uuid}/resume | Resume a paused multicluster configuration request.
*ClustersApi* | [**clustersRecoveryPointResourceReservationPost**](docs/Api/ClustersApi.md#clustersrecoverypointresourcereservationpost) | **POST** /clusters/recovery_point_resource_reservation | Update the Lazan resource reservation lease for the given recovery point replication.
*ClustersApi* | [**clustersSynchronousReplicationCapablePost**](docs/Api/ClustersApi.md#clusterssynchronousreplicationcapablepost) | **POST** /clusters/synchronous_replication_capable | Get a list of existing clusters
*ClustersApi* | [**clustersUuidCertificatesCaCertsCaNameDelete**](docs/Api/ClustersApi.md#clustersuuidcertificatescacertscanamedelete) | **DELETE** /clusters/{uuid}/certificates/ca_certs/{ca_name} | Delete the CA certificate
*ClustersApi* | [**clustersUuidCertificatesCaCertsPost**](docs/Api/ClustersApi.md#clustersuuidcertificatescacertspost) | **POST** /clusters/{uuid}/certificates/ca_certs | Add a new CA certificate
*ClustersApi* | [**clustersUuidCertificatesClientAuthDelete**](docs/Api/ClustersApi.md#clustersuuidcertificatesclientauthdelete) | **DELETE** /clusters/{uuid}/certificates/client_auth | Remove the CA chain for client authentication
*ClustersApi* | [**clustersUuidCertificatesClientAuthPost**](docs/Api/ClustersApi.md#clustersuuidcertificatesclientauthpost) | **POST** /clusters/{uuid}/certificates/client_auth | Import CA chain for client authentication
*ClustersApi* | [**clustersUuidCertificatesClientAuthPut**](docs/Api/ClustersApi.md#clustersuuidcertificatesclientauthput) | **PUT** /clusters/{uuid}/certificates/client_auth | Replace the CA chain for client authentication
*ClustersApi* | [**clustersUuidCertificatesCsrsGet**](docs/Api/ClustersApi.md#clustersuuidcertificatescsrsget) | **GET** /clusters/{uuid}/certificates/csrs | Download CSRs from cluster
*ClustersApi* | [**clustersUuidCertificatesCsrsNodeIpGet**](docs/Api/ClustersApi.md#clustersuuidcertificatescsrsnodeipget) | **GET** /clusters/{uuid}/certificates/csrs/{node_ip} | Download CSR from a discovered node
*ClustersApi* | [**clustersUuidCertificatesPemkeyImportPost**](docs/Api/ClustersApi.md#clustersuuidcertificatespemkeyimportpost) | **POST** /clusters/{uuid}/certificates/pemkey/import | Import a new key
*ClustersApi* | [**clustersUuidCertificatesPemkeyPost**](docs/Api/ClustersApi.md#clustersuuidcertificatespemkeypost) | **POST** /clusters/{uuid}/certificates/pemkey | Generate a 2048 bits cipher length RSA key
*ClustersApi* | [**clustersUuidCertificatesRootDelete**](docs/Api/ClustersApi.md#clustersuuidcertificatesrootdelete) | **DELETE** /clusters/{uuid}/certificates/root | Remove PC root certificates
*ClustersApi* | [**clustersUuidCertificatesRootGet**](docs/Api/ClustersApi.md#clustersuuidcertificatesrootget) | **GET** /clusters/{uuid}/certificates/root | Retrieve PC root certificates
*ClustersApi* | [**clustersUuidCertificatesRootPost**](docs/Api/ClustersApi.md#clustersuuidcertificatesrootpost) | **POST** /clusters/{uuid}/certificates/root | Save a PC root certificate on a PC or a PE
*ClustersApi* | [**clustersUuidCertificatesSvmCertsKmsUuidPost**](docs/Api/ClustersApi.md#clustersuuidcertificatessvmcertskmsuuidpost) | **POST** /clusters/{uuid}/certificates/svm_certs/{kms_uuid} | Add one or more certificates to a service VM
*ClustersApi* | [**clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete**](docs/Api/ClustersApi.md#clustersuuidcertificatessvmcertsnodeuuidkmsuuiddelete) | **DELETE** /clusters/{uuid}/certificates/svm_certs/{node_uuid}/{kms_uuid} | Delete the certificate on a service VM
*ClustersApi* | [**clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut**](docs/Api/ClustersApi.md#clustersuuidcertificatessvmcertsnodeuuidkmsuuidput) | **PUT** /clusters/{uuid}/certificates/svm_certs/{node_uuid}/{kms_uuid} | Replace the certificate on a service VM
*ClustersApi* | [**clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete**](docs/Api/ClustersApi.md#clustersuuidcloudcredentialscloudtypecloudcredentialsiddelete) | **DELETE** /clusters/{uuid}/cloud_credentials/{cloud_type}/{cloud_credentials_id} | Delete a existing cloud credentials
*ClustersApi* | [**clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet**](docs/Api/ClustersApi.md#clustersuuidcloudcredentialscloudtypecloudcredentialsidget) | **GET** /clusters/{uuid}/cloud_credentials/{cloud_type}/{cloud_credentials_id} | Get a existing cloud credentials
*ClustersApi* | [**clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut**](docs/Api/ClustersApi.md#clustersuuidcloudcredentialscloudtypecloudcredentialsidput) | **PUT** /clusters/{uuid}/cloud_credentials/{cloud_type}/{cloud_credentials_id} | Update a existing cloud credentials
*ClustersApi* | [**clustersUuidCloudCredentialsCloudTypeDelete**](docs/Api/ClustersApi.md#clustersuuidcloudcredentialscloudtypedelete) | **DELETE** /clusters/{uuid}/cloud_credentials/{cloud_type} | Delete all cloud credentials
*ClustersApi* | [**clustersUuidCloudCredentialsCloudTypeListPost**](docs/Api/ClustersApi.md#clustersuuidcloudcredentialscloudtypelistpost) | **POST** /clusters/{uuid}/cloud_credentials/{cloud_type}/list | Get a list of existing cloud credentials
*ClustersApi* | [**clustersUuidCloudCredentialsCloudTypePost**](docs/Api/ClustersApi.md#clustersuuidcloudcredentialscloudtypepost) | **POST** /clusters/{uuid}/cloud_credentials/{cloud_type} | Add a cloud credential for accessing cloud sites
*ClustersApi* | [**clustersUuidGet**](docs/Api/ClustersApi.md#clustersuuidget) | **GET** /clusters/{uuid} | Get a existing cluster
*ClustersApi* | [**clustersUuidPut**](docs/Api/ClustersApi.md#clustersuuidput) | **PUT** /clusters/{uuid} | Update a existing cluster
*DatacenterApi* | [**datacentersListPost**](docs/Api/DatacenterApi.md#datacenterslistpost) | **POST** /datacenters/list | Retrieves all datacenters
*DatacenterApi* | [**datacentersPost**](docs/Api/DatacenterApi.md#datacenterspost) | **POST** /datacenters | Create a datacenter instance
*DatacenterApi* | [**datacentersUuidDelete**](docs/Api/DatacenterApi.md#datacentersuuiddelete) | **DELETE** /datacenters/{uuid} | Delete specified datacenter
*DatacenterApi* | [**datacentersUuidGet**](docs/Api/DatacenterApi.md#datacentersuuidget) | **GET** /datacenters/{uuid} | Retrieves specified datacenter
*DatacenterApi* | [**datacentersUuidPut**](docs/Api/DatacenterApi.md#datacentersuuidput) | **PUT** /datacenters/{uuid} | Update datacenter
*DefaultApi* | [**eventsPost**](docs/Api/DefaultApi.md#eventspost) | **POST** /events | Proxies events request to nusights Db API server.
*DefaultApi* | [**metricsApiPost**](docs/Api/DefaultApi.md#metricsapipost) | **POST** /metrics/{api} | Proxies metrics request to nusights Db API server.
*DefaultApi* | [**vmsUuidVmDiskVmDiskUuidDataGet**](docs/Api/DefaultApi.md#vmsuuidvmdiskvmdiskuuiddataget) | **GET** /vms/{uuid}/vm_disk/{vm_disk_uuid}/data | Read from a VM disk.
*DefaultApi* | [**vmsUuidVmDiskVmDiskUuidDataPut**](docs/Api/DefaultApi.md#vmsuuidvmdiskvmdiskuuiddataput) | **PUT** /vms/{uuid}/vm_disk/{vm_disk_uuid}/data | Write to a VM disk.
*DefaultApi* | [**xigDnsConfigGet**](docs/Api/DefaultApi.md#xigdnsconfigget) | **GET** /xig_dns_config | Get PC&#39;s DNS Config for Xi Intent Gatedway.
*DirectConnectVirtualInterfacesApi* | [**directConnectsVirtualInterfacesListPost**](docs/Api/DirectConnectVirtualInterfacesApi.md#directconnectsvirtualinterfaceslistpost) | **POST** /direct_connects/virtual_interfaces/list | Get a list of existing direct_connect_virtual_interfaces
*DirectConnectVirtualInterfacesApi* | [**directConnectsVirtualInterfacesPost**](docs/Api/DirectConnectVirtualInterfacesApi.md#directconnectsvirtualinterfacespost) | **POST** /direct_connects/virtual_interfaces | Create a new direct_connect_virtual_interface
*DirectConnectVirtualInterfacesApi* | [**directConnectsVirtualInterfacesUuidDelete**](docs/Api/DirectConnectVirtualInterfacesApi.md#directconnectsvirtualinterfacesuuiddelete) | **DELETE** /direct_connects/virtual_interfaces/{uuid} | Delete a existing direct_connect_virtual_interface
*DirectConnectVirtualInterfacesApi* | [**directConnectsVirtualInterfacesUuidGet**](docs/Api/DirectConnectVirtualInterfacesApi.md#directconnectsvirtualinterfacesuuidget) | **GET** /direct_connects/virtual_interfaces/{uuid} | Get a existing direct_connect_virtual_interface
*DirectConnectVirtualInterfacesApi* | [**directConnectsVirtualInterfacesUuidPut**](docs/Api/DirectConnectVirtualInterfacesApi.md#directconnectsvirtualinterfacesuuidput) | **PUT** /direct_connects/virtual_interfaces/{uuid} | Update a existing direct_connect_virtual_interface
*DirectConnectsApi* | [**directConnectsConnectionsListPost**](docs/Api/DirectConnectsApi.md#directconnectsconnectionslistpost) | **POST** /direct_connects/connections/list | Get a list of existing direct_connects
*DirectConnectsApi* | [**directConnectsConnectionsPost**](docs/Api/DirectConnectsApi.md#directconnectsconnectionspost) | **POST** /direct_connects/connections | Create a new direct_connect
*DirectConnectsApi* | [**directConnectsConnectionsUuidDelete**](docs/Api/DirectConnectsApi.md#directconnectsconnectionsuuiddelete) | **DELETE** /direct_connects/connections/{uuid} | Delete a existing direct_connect
*DirectConnectsApi* | [**directConnectsConnectionsUuidGet**](docs/Api/DirectConnectsApi.md#directconnectsconnectionsuuidget) | **GET** /direct_connects/connections/{uuid} | Get a existing direct_connect
*DirectConnectsApi* | [**directConnectsConnectionsUuidPut**](docs/Api/DirectConnectsApi.md#directconnectsconnectionsuuidput) | **PUT** /direct_connects/connections/{uuid} | Update a existing direct_connect
*DirectConnectsApi* | [**directConnectsServiceProvidersListPost**](docs/Api/DirectConnectsApi.md#directconnectsserviceproviderslistpost) | **POST** /direct_connects/service_providers/list | Get a list of existing direct_connects service providers
*DirectoryServicesApi* | [**directoryServicesListPost**](docs/Api/DirectoryServicesApi.md#directoryserviceslistpost) | **POST** /directory_services/list | Get a list of existing directory service configurations
*DirectoryServicesApi* | [**directoryServicesPost**](docs/Api/DirectoryServicesApi.md#directoryservicespost) | **POST** /directory_services | Create a new directory service configuration
*DirectoryServicesApi* | [**directoryServicesUuidDelete**](docs/Api/DirectoryServicesApi.md#directoryservicesuuiddelete) | **DELETE** /directory_services/{uuid} | Delete a existing directory service configuration
*DirectoryServicesApi* | [**directoryServicesUuidGet**](docs/Api/DirectoryServicesApi.md#directoryservicesuuidget) | **GET** /directory_services/{uuid} | Get a existing directory service configuration
*DirectoryServicesApi* | [**directoryServicesUuidPut**](docs/Api/DirectoryServicesApi.md#directoryservicesuuidput) | **PUT** /directory_services/{uuid} | Update a existing directory service configuration
*DirectoryServicesApi* | [**directoryServicesUuidSearchPost**](docs/Api/DirectoryServicesApi.md#directoryservicesuuidsearchpost) | **POST** /directory_services/{uuid}/search | Search user or group in the directory service.
*DirectoryServicesInternalApi* | [**directoryServicesInternalGet**](docs/Api/DirectoryServicesInternalApi.md#directoryservicesinternalget) | **GET** /directory_services_internal | Directory service internal API
*DisksApi* | [**disksListPost**](docs/Api/DisksApi.md#diskslistpost) | **POST** /disks/list | Get a list of existing Disks
*DisksApi* | [**disksUuidDelete**](docs/Api/DisksApi.md#disksuuiddelete) | **DELETE** /disks/{uuid} | Delete a existing Disk
*DisksApi* | [**disksUuidGet**](docs/Api/DisksApi.md#disksuuidget) | **GET** /disks/{uuid} | Get a existing Disk
*DockerRegistryApi* | [**dockerRegistriesListPost**](docs/Api/DockerRegistryApi.md#dockerregistrieslistpost) | **POST** /docker_registries/list | List all docker registries
*DockerRegistryApi* | [**dockerRegistriesPost**](docs/Api/DockerRegistryApi.md#dockerregistriespost) | **POST** /docker_registries | Create a docker registry
*DockerRegistryApi* | [**dockerRegistriesUuidDelete**](docs/Api/DockerRegistryApi.md#dockerregistriesuuiddelete) | **DELETE** /docker_registries/{uuid} | Deletes a Docker registry
*DockerRegistryApi* | [**dockerRegistriesUuidGet**](docs/Api/DockerRegistryApi.md#dockerregistriesuuidget) | **GET** /docker_registries/{uuid} | Retrieve a Docker registry
*DockerRegistryApi* | [**dockerRegistriesUuidPut**](docs/Api/DockerRegistryApi.md#dockerregistriesuuidput) | **PUT** /docker_registries/{uuid} | Update a docker registry
*DockerRegistryApi* | [**dockerRegistriesUuidSearchListPost**](docs/Api/DockerRegistryApi.md#dockerregistriesuuidsearchlistpost) | **POST** /docker_registries/{uuid}/search/list | Searches docker containers for specified registry
*EntitySyncRulesApi* | [**entitySyncRulesListPost**](docs/Api/EntitySyncRulesApi.md#entitysyncruleslistpost) | **POST** /entity_sync_rules/list | Get a list of existing entity_sync_rules
*EntitySyncRulesApi* | [**entitySyncRulesPost**](docs/Api/EntitySyncRulesApi.md#entitysyncrulespost) | **POST** /entity_sync_rules | Create a new entity_sync_rule
*EntitySyncRulesApi* | [**entitySyncRulesUuidDelete**](docs/Api/EntitySyncRulesApi.md#entitysyncrulesuuiddelete) | **DELETE** /entity_sync_rules/{uuid} | Delete a existing entity_sync_rule
*EntitySyncRulesApi* | [**entitySyncRulesUuidGet**](docs/Api/EntitySyncRulesApi.md#entitysyncrulesuuidget) | **GET** /entity_sync_rules/{uuid} | Get a existing entity_sync_rule
*EntitySyncRulesApi* | [**entitySyncRulesUuidListEntitiesToSyncGet**](docs/Api/EntitySyncRulesApi.md#entitysyncrulesuuidlistentitiestosyncget) | **GET** /entity_sync_rules/{uuid}/list_entities_to_sync | Get the list of entities which needs to be synced.
*EntitySyncRulesApi* | [**entitySyncRulesUuidProcessPost**](docs/Api/EntitySyncRulesApi.md#entitysyncrulesuuidprocesspost) | **POST** /entity_sync_rules/{uuid}/process | Process an entity sync rule.
*EntitySyncRulesApi* | [**entitySyncRulesUuidPut**](docs/Api/EntitySyncRulesApi.md#entitysyncrulesuuidput) | **PUT** /entity_sync_rules/{uuid} | Update a existing entity_sync_rule
*EnvironmentsApi* | [**environmentsListPost**](docs/Api/EnvironmentsApi.md#environmentslistpost) | **POST** /environments/list | List the Environment
*EnvironmentsApi* | [**environmentsPost**](docs/Api/EnvironmentsApi.md#environmentspost) | **POST** /environments | Create Environment
*EnvironmentsApi* | [**environmentsUuidDelete**](docs/Api/EnvironmentsApi.md#environmentsuuiddelete) | **DELETE** /environments/{uuid} | Delete Environment
*EnvironmentsApi* | [**environmentsUuidGet**](docs/Api/EnvironmentsApi.md#environmentsuuidget) | **GET** /environments/{uuid} | Get Environment
*EnvironmentsApi* | [**environmentsUuidPut**](docs/Api/EnvironmentsApi.md#environmentsuuidput) | **PUT** /environments/{uuid} | Update Environment
*FavoritesApi* | [**searchFavoritesGet**](docs/Api/FavoritesApi.md#searchfavoritesget) | **GET** /search/favorites | Get all favorites.
*FavoritesApi* | [**searchFavoritesPost**](docs/Api/FavoritesApi.md#searchfavoritespost) | **POST** /search/favorites | Create a favorite
*FavoritesApi* | [**searchFavoritesUuidDelete**](docs/Api/FavoritesApi.md#searchfavoritesuuiddelete) | **DELETE** /search/favorites/{uuid} | Delete a favorite.
*FileStoreApi* | [**fileStoreListPost**](docs/Api/FileStoreApi.md#filestorelistpost) | **POST** /file_store/list | Get a list of existing file_items
*FileStoreApi* | [**fileStorePost**](docs/Api/FileStoreApi.md#filestorepost) | **POST** /file_store | Create a new file_item
*FileStoreApi* | [**fileStoreUuidDelete**](docs/Api/FileStoreApi.md#filestoreuuiddelete) | **DELETE** /file_store/{uuid} | Delete a existing file_item
*FileStoreApi* | [**fileStoreUuidFileGet**](docs/Api/FileStoreApi.md#filestoreuuidfileget) | **GET** /file_store/{uuid}/file | Get file item contents
*FileStoreApi* | [**fileStoreUuidFilePut**](docs/Api/FileStoreApi.md#filestoreuuidfileput) | **PUT** /file_store/{uuid}/file | Upload file item contents
*FileStoreApi* | [**fileStoreUuidGet**](docs/Api/FileStoreApi.md#filestoreuuidget) | **GET** /file_store/{uuid} | Get a existing file_item
*FileStoreApi* | [**fileStoreUuidPut**](docs/Api/FileStoreApi.md#filestoreuuidput) | **PUT** /file_store/{uuid} | Update a existing file_item
*FloatingIpApi* | [**floatingIpsListPost**](docs/Api/FloatingIpApi.md#floatingipslistpost) | **POST** /floating_ips/list | Get a list of existing Floating IPs
*FloatingIpApi* | [**floatingIpsPost**](docs/Api/FloatingIpApi.md#floatingipspost) | **POST** /floating_ips | Create a new Floating IP
*FloatingIpApi* | [**floatingIpsUuidDelete**](docs/Api/FloatingIpApi.md#floatingipsuuiddelete) | **DELETE** /floating_ips/{uuid} | Delete a existing Floating IP
*FloatingIpApi* | [**floatingIpsUuidGet**](docs/Api/FloatingIpApi.md#floatingipsuuidget) | **GET** /floating_ips/{uuid} | Get a existing Floating IP
*FloatingIpApi* | [**floatingIpsUuidPut**](docs/Api/FloatingIpApi.md#floatingipsuuidput) | **PUT** /floating_ips/{uuid} | Update a existing Floating IP
*GcpDiskTypesApi* | [**gcpV1DiskTypesListPost**](docs/Api/GcpDiskTypesApi.md#gcpv1disktypeslistpost) | **POST** /gcp/v1/disk_types/list | Get Google cloud disk types
*GcpFirewallsApi* | [**gcpV1FirewallsListPost**](docs/Api/GcpFirewallsApi.md#gcpv1firewallslistpost) | **POST** /gcp/v1/firewalls/list | Get Google cloud firewalls
*GcpImagesApi* | [**gcpV1ImagesListPost**](docs/Api/GcpImagesApi.md#gcpv1imageslistpost) | **POST** /gcp/v1/images/list | Get Google cloud images
*GcpInstancesApi* | [**gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet**](docs/Api/GcpInstancesApi.md#gcpv1accountsaccountuuidzonezonenameinstancesuuidget) | **GET** /gcp/v1/accounts/{account_uuid}/zone/{zone_name}/instances/{uuid} | Get gcp vm
*GcpInstancesApi* | [**gcpV1InstancesListPost**](docs/Api/GcpInstancesApi.md#gcpv1instanceslistpost) | **POST** /gcp/v1/instances/list | Get Google cloud vm instances
*GcpMachineTypesApi* | [**gcpV1MachineTypesListPost**](docs/Api/GcpMachineTypesApi.md#gcpv1machinetypeslistpost) | **POST** /gcp/v1/machine_types/list | Get Google cloud machine types
*GcpNetworksApi* | [**gcpV1NetworksListPost**](docs/Api/GcpNetworksApi.md#gcpv1networkslistpost) | **POST** /gcp/v1/networks/list | Get Google cloud networks
*GcpPersistentDisksApi* | [**gcpV1PersistentDisksListPost**](docs/Api/GcpPersistentDisksApi.md#gcpv1persistentdiskslistpost) | **POST** /gcp/v1/persistent_disks/list | Get Google cloud persistent disks
*GcpRegionsApi* | [**gcpV1RegionsListPost**](docs/Api/GcpRegionsApi.md#gcpv1regionslistpost) | **POST** /gcp/v1/regions/list | Get Google cloud regions
*GcpSnapshotsApi* | [**gcpV1SnapshotsListPost**](docs/Api/GcpSnapshotsApi.md#gcpv1snapshotslistpost) | **POST** /gcp/v1/snapshots/list | Get Google cloud snapshots
*GcpSubnetworksApi* | [**gcpV1SubnetworksListPost**](docs/Api/GcpSubnetworksApi.md#gcpv1subnetworkslistpost) | **POST** /gcp/v1/subnetworks/list | Get Google cloud subnetworks
*GcpZonesApi* | [**gcpV1ZonesListPost**](docs/Api/GcpZonesApi.md#gcpv1zoneslistpost) | **POST** /gcp/v1/zones/list | Get Google cloud zones
*GraphqlApi* | [**graphqlPost**](docs/Api/GraphqlApi.md#graphqlpost) | **POST** /graphql | Execute graphql queries.
*GroupsApi* | [**groupsPost**](docs/Api/GroupsApi.md#groupspost) | **POST** /groups | Get Entities.
*HostsApi* | [**hostsListPost**](docs/Api/HostsApi.md#hostslistpost) | **POST** /hosts/list | Get a list of existing Hosts
*HostsApi* | [**hostsUuidDelete**](docs/Api/HostsApi.md#hostsuuiddelete) | **DELETE** /hosts/{uuid} | Delete a existing Host
*HostsApi* | [**hostsUuidGet**](docs/Api/HostsApi.md#hostsuuidget) | **GET** /hosts/{uuid} | Get a existing Host
*HostsApi* | [**hostsUuidPut**](docs/Api/HostsApi.md#hostsuuidput) | **PUT** /hosts/{uuid} | Update a existing Host
*IdempotenceIdentifiersApi* | [**idempotenceIdentifiersClientIdentifierDelete**](docs/Api/IdempotenceIdentifiersApi.md#idempotenceidentifiersclientidentifierdelete) | **DELETE** /idempotence_identifiers/{client_identifier} | Delete an existing idempotence_identifier
*IdempotenceIdentifiersApi* | [**idempotenceIdentifiersClientIdentifierGet**](docs/Api/IdempotenceIdentifiersApi.md#idempotenceidentifiersclientidentifierget) | **GET** /idempotence_identifiers/{client_identifier} | Get an existing idempotence_identifier
*IdempotenceIdentifiersApi* | [**idempotenceIdentifiersPost**](docs/Api/IdempotenceIdentifiersApi.md#idempotenceidentifierspost) | **POST** /idempotence_identifiers | Create an new idempotence_identifier \&quot; (UUID4)\&quot;
*IdempotenceIdentifiersApi* | [**idempotenceIdentifiersSaltedPost**](docs/Api/IdempotenceIdentifiersApi.md#idempotenceidentifierssaltedpost) | **POST** /idempotence_identifiers/salted | Create an new idempotence_identifier \&quot; (Salted / UUID5)\&quot;
*IdentityCategorizationApi* | [**identityCategorizationCategoryMappingsListPost**](docs/Api/IdentityCategorizationApi.md#identitycategorizationcategorymappingslistpost) | **POST** /identity_categorization/category_mappings/list | Get a list of existing category_mappings
*IdentityCategorizationApi* | [**identityCategorizationCategoryMappingsPost**](docs/Api/IdentityCategorizationApi.md#identitycategorizationcategorymappingspost) | **POST** /identity_categorization/category_mappings | Create a new category_mapping
*IdentityCategorizationApi* | [**identityCategorizationCategoryMappingsUuidDelete**](docs/Api/IdentityCategorizationApi.md#identitycategorizationcategorymappingsuuiddelete) | **DELETE** /identity_categorization/category_mappings/{uuid} | Delete a existing category_mapping
*IdentityCategorizationApi* | [**identityCategorizationCategoryMappingsUuidGet**](docs/Api/IdentityCategorizationApi.md#identitycategorizationcategorymappingsuuidget) | **GET** /identity_categorization/category_mappings/{uuid} | Get a existing category_mapping
*IdentityCategorizationApi* | [**identityCategorizationCategoryMappingsUuidPut**](docs/Api/IdentityCategorizationApi.md#identitycategorizationcategorymappingsuuidput) | **PUT** /identity_categorization/category_mappings/{uuid} | Update a existing category_mapping
*IdentityCategorizationApi* | [**identityCategorizationConfigurationGet**](docs/Api/IdentityCategorizationApi.md#identitycategorizationconfigurationget) | **GET** /identity_categorization/configuration | Gets identity categorization configuration
*IdentityCategorizationApi* | [**identityCategorizationConfigurationPut**](docs/Api/IdentityCategorizationApi.md#identitycategorizationconfigurationput) | **PUT** /identity_categorization/configuration | Configures identity categorization
*IdentityProvidersApi* | [**identityProvidersCallbackPost**](docs/Api/IdentityProvidersApi.md#identityproviderscallbackpost) | **POST** /identity_providers/callback | Endpoint which will be called from the identity provider.
*IdentityProvidersApi* | [**identityProvidersListPost**](docs/Api/IdentityProvidersApi.md#identityproviderslistpost) | **POST** /identity_providers/list | Get a list of existing identity_provider
*IdentityProvidersApi* | [**identityProvidersPost**](docs/Api/IdentityProvidersApi.md#identityproviderspost) | **POST** /identity_providers | Create a new identity_provider
*IdentityProvidersApi* | [**identityProvidersRedirectListPost**](docs/Api/IdentityProvidersApi.md#identityprovidersredirectlistpost) | **POST** /identity_providers/redirect_list | Get a list of existing identity_provider
*IdentityProvidersApi* | [**identityProvidersSpMetadataGet**](docs/Api/IdentityProvidersApi.md#identityprovidersspmetadataget) | **GET** /identity_providers/sp_metadata | Endpoint which will give service provider metadata as output
*IdentityProvidersApi* | [**identityProvidersUuidDelete**](docs/Api/IdentityProvidersApi.md#identityprovidersuuiddelete) | **DELETE** /identity_providers/{uuid} | Delete a existing identity_provider
*IdentityProvidersApi* | [**identityProvidersUuidGet**](docs/Api/IdentityProvidersApi.md#identityprovidersuuidget) | **GET** /identity_providers/{uuid} | Get a existing identity_provider
*IdentityProvidersApi* | [**identityProvidersUuidPut**](docs/Api/IdentityProvidersApi.md#identityprovidersuuidput) | **PUT** /identity_providers/{uuid} | Update a existing identity_provider
*ImagePlacementPoliciesApi* | [**imagesPlacementPoliciesListPost**](docs/Api/ImagePlacementPoliciesApi.md#imagesplacementpolicieslistpost) | **POST** /images/placement_policies/list | Get a list of existing image_placement_policies
*ImagePlacementPoliciesApi* | [**imagesPlacementPoliciesPost**](docs/Api/ImagePlacementPoliciesApi.md#imagesplacementpoliciespost) | **POST** /images/placement_policies | Create a new image_placement_policy
*ImagePlacementPoliciesApi* | [**imagesPlacementPoliciesUuidDelete**](docs/Api/ImagePlacementPoliciesApi.md#imagesplacementpoliciesuuiddelete) | **DELETE** /images/placement_policies/{uuid} | Delete a existing image_placement_policy
*ImagePlacementPoliciesApi* | [**imagesPlacementPoliciesUuidGet**](docs/Api/ImagePlacementPoliciesApi.md#imagesplacementpoliciesuuidget) | **GET** /images/placement_policies/{uuid} | Get a existing image_placement_policy
*ImagePlacementPoliciesApi* | [**imagesPlacementPoliciesUuidPut**](docs/Api/ImagePlacementPoliciesApi.md#imagesplacementpoliciesuuidput) | **PUT** /images/placement_policies/{uuid} | Update a existing image_placement_policy
*ImagesApi* | [**imagesListPost**](docs/Api/ImagesApi.md#imageslistpost) | **POST** /images/list | Get a list of existing images
*ImagesApi* | [**imagesMigratePost**](docs/Api/ImagesApi.md#imagesmigratepost) | **POST** /images/migrate | Migrate images from PE cluster to PC
*ImagesApi* | [**imagesPost**](docs/Api/ImagesApi.md#imagespost) | **POST** /images | Create a new image
*ImagesApi* | [**imagesRemoteCopyPost**](docs/Api/ImagesApi.md#imagesremotecopypost) | **POST** /images/remote_copy | Copy AHV images between on-prem and Xi
*ImagesApi* | [**imagesUuidDelete**](docs/Api/ImagesApi.md#imagesuuiddelete) | **DELETE** /images/{uuid} | Delete a existing image
*ImagesApi* | [**imagesUuidFileGet**](docs/Api/ImagesApi.md#imagesuuidfileget) | **GET** /images/{uuid}/file | Get Image Contents
*ImagesApi* | [**imagesUuidFilePut**](docs/Api/ImagesApi.md#imagesuuidfileput) | **PUT** /images/{uuid}/file | Upload Image Contents
*ImagesApi* | [**imagesUuidGet**](docs/Api/ImagesApi.md#imagesuuidget) | **GET** /images/{uuid} | Get a existing image
*ImagesApi* | [**imagesUuidPut**](docs/Api/ImagesApi.md#imagesuuidput) | **PUT** /images/{uuid} | Update a existing image
*IpfixExportersApi* | [**ipfixExportersPost**](docs/Api/IpfixExportersApi.md#ipfixexporterspost) | **POST** /ipfix_exporters | Create a new IPFix Exporter
*IpfixExportersApi* | [**ipfixExportersUuidDelete**](docs/Api/IpfixExportersApi.md#ipfixexportersuuiddelete) | **DELETE** /ipfix_exporters/{uuid} | Delete a existing IPFix Exporter
*Layer2StretchApi* | [**layer2StretchesListPost**](docs/Api/Layer2StretchApi.md#layer2stretcheslistpost) | **POST** /layer2_stretches/list | Get a list of existing layer2_stretches
*Layer2StretchApi* | [**layer2StretchesPost**](docs/Api/Layer2StretchApi.md#layer2stretchespost) | **POST** /layer2_stretches | Create a new layer2_stretch
*Layer2StretchApi* | [**layer2StretchesRelatedEntitiesUuidGet**](docs/Api/Layer2StretchApi.md#layer2stretchesrelatedentitiesuuidget) | **GET** /layer2_stretches/related_entities/{uuid} | Get a existing layer2_stretch related entities
*Layer2StretchApi* | [**layer2StretchesUuidDelete**](docs/Api/Layer2StretchApi.md#layer2stretchesuuiddelete) | **DELETE** /layer2_stretches/{uuid} | Delete a existing layer2_stretch
*Layer2StretchApi* | [**layer2StretchesUuidGet**](docs/Api/Layer2StretchApi.md#layer2stretchesuuidget) | **GET** /layer2_stretches/{uuid} | Get a existing layer2_stretch
*MarketplaceItemApi* | [**marketplaceItemsConfigGet**](docs/Api/MarketplaceItemApi.md#marketplaceitemsconfigget) | **GET** /marketplace_items/config | Retrieve configuration for Nutanix apps
*MarketplaceItemApi* | [**marketplaceItemsConfigPost**](docs/Api/MarketplaceItemApi.md#marketplaceitemsconfigpost) | **POST** /marketplace_items/config | Enable or disable the Nutanix apps in the marketplace
*MarketplaceItemApi* | [**marketplaceItemsListPost**](docs/Api/MarketplaceItemApi.md#marketplaceitemslistpost) | **POST** /marketplace_items/list | Get a list of existing marketplace items
*MarketplaceItemApi* | [**marketplaceItemsPost**](docs/Api/MarketplaceItemApi.md#marketplaceitemspost) | **POST** /marketplace_items | Create a new marketplace item
*MarketplaceItemApi* | [**marketplaceItemsRenderPost**](docs/Api/MarketplaceItemApi.md#marketplaceitemsrenderpost) | **POST** /marketplace_items/render | Create a Marketplace item from the given input.
*MarketplaceItemApi* | [**marketplaceItemsUuidDelete**](docs/Api/MarketplaceItemApi.md#marketplaceitemsuuiddelete) | **DELETE** /marketplace_items/{uuid} | Delete a existing marketplace item
*MarketplaceItemApi* | [**marketplaceItemsUuidGet**](docs/Api/MarketplaceItemApi.md#marketplaceitemsuuidget) | **GET** /marketplace_items/{uuid} | Get a existing marketplace item
*MarketplaceItemApi* | [**marketplaceItemsUuidPut**](docs/Api/MarketplaceItemApi.md#marketplaceitemsuuidput) | **PUT** /marketplace_items/{uuid} | Update a existing marketplace item
*MhVmApi* | [**mhVmsUuidValidateMigrationPost**](docs/Api/MhVmApi.md#mhvmsuuidvalidatemigrationpost) | **POST** /mh_vms/{uuid}/validate_migration | Validates the feasibility of VM migration to given migration target.
*MhVmsApi* | [**mhVmsListPost**](docs/Api/MhVmsApi.md#mhvmslistpost) | **POST** /mh_vms/list | Get a list of existing VMs
*MhVmsApi* | [**mhVmsPost**](docs/Api/MhVmsApi.md#mhvmspost) | **POST** /mh_vms | Create a new VM
*MhVmsApi* | [**mhVmsUuidGet**](docs/Api/MhVmsApi.md#mhvmsuuidget) | **GET** /mh_vms/{uuid} | Get an existing VM
*MhVmsApi* | [**mhVmsUuidPut**](docs/Api/MhVmsApi.md#mhvmsuuidput) | **PUT** /mh_vms/{uuid} | Update an existing VM
*MhVmsApi* | [**mhVmsUuidRevertPost**](docs/Api/MhVmsApi.md#mhvmsuuidrevertpost) | **POST** /mh_vms/{uuid}/revert | Revert the VM to the given recovery point.
*MhVmsApi* | [**mhVmsUuidSnapshotPost**](docs/Api/MhVmsApi.md#mhvmsuuidsnapshotpost) | **POST** /mh_vms/{uuid}/snapshot | Create a VM recovery point.
*MigrateApi* | [**migratePost**](docs/Api/MigrateApi.md#migratepost) | **POST** /migrate | Migrate a set of VMs or Volume Groups.
*NetworkDeviceApi* | [**networkDevicesListPost**](docs/Api/NetworkDeviceApi.md#networkdeviceslistpost) | **POST** /network_devices/list | Retrieves all network devices
*NetworkDeviceApi* | [**networkDevicesPost**](docs/Api/NetworkDeviceApi.md#networkdevicespost) | **POST** /network_devices | Create a network device instance
*NetworkDeviceApi* | [**networkDevicesUuidDelete**](docs/Api/NetworkDeviceApi.md#networkdevicesuuiddelete) | **DELETE** /network_devices/{uuid} | Delete specified network device
*NetworkDeviceApi* | [**networkDevicesUuidGet**](docs/Api/NetworkDeviceApi.md#networkdevicesuuidget) | **GET** /network_devices/{uuid} | Retrieves specified network device
*NetworkDeviceApi* | [**networkDevicesUuidPut**](docs/Api/NetworkDeviceApi.md#networkdevicesuuidput) | **PUT** /network_devices/{uuid} | Update network device
*NetworkFunctionChainsApi* | [**networkFunctionChainsListPost**](docs/Api/NetworkFunctionChainsApi.md#networkfunctionchainslistpost) | **POST** /network_function_chains/list | Get a list of existing Network Function Chains
*NetworkFunctionChainsApi* | [**networkFunctionChainsPost**](docs/Api/NetworkFunctionChainsApi.md#networkfunctionchainspost) | **POST** /network_function_chains | Create a new Network Function Chain
*NetworkFunctionChainsApi* | [**networkFunctionChainsUuidDelete**](docs/Api/NetworkFunctionChainsApi.md#networkfunctionchainsuuiddelete) | **DELETE** /network_function_chains/{uuid} | Delete a existing Network Function Chain
*NetworkFunctionChainsApi* | [**networkFunctionChainsUuidGet**](docs/Api/NetworkFunctionChainsApi.md#networkfunctionchainsuuidget) | **GET** /network_function_chains/{uuid} | Get a existing Network Function Chain
*NetworkFunctionChainsApi* | [**networkFunctionChainsUuidPut**](docs/Api/NetworkFunctionChainsApi.md#networkfunctionchainsuuidput) | **PUT** /network_function_chains/{uuid} | Update a existing Network Function Chain
*NetworkSecurityRulesApi* | [**networkSecurityRulesExportGet**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulesexportget) | **GET** /network_security_rules/export | Export all network security rules
*NetworkSecurityRulesApi* | [**networkSecurityRulesImportApplyPost**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulesimportapplypost) | **POST** /network_security_rules/import/apply | Imports all the network security rules specified by the data.
*NetworkSecurityRulesApi* | [**networkSecurityRulesImportDryRunPost**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulesimportdryrunpost) | **POST** /network_security_rules/import/dry_run | Reports on the impact of importing the policy
*NetworkSecurityRulesApi* | [**networkSecurityRulesListPost**](docs/Api/NetworkSecurityRulesApi.md#networksecurityruleslistpost) | **POST** /network_security_rules/list | Get all network security rules
*NetworkSecurityRulesApi* | [**networkSecurityRulesPost**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulespost) | **POST** /network_security_rules | Create a new Network security rule
*NetworkSecurityRulesApi* | [**networkSecurityRulesUuidDelete**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulesuuiddelete) | **DELETE** /network_security_rules/{uuid} | Delete a existing Network security rule
*NetworkSecurityRulesApi* | [**networkSecurityRulesUuidGet**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulesuuidget) | **GET** /network_security_rules/{uuid} | Get a existing Network security rule
*NetworkSecurityRulesApi* | [**networkSecurityRulesUuidPut**](docs/Api/NetworkSecurityRulesApi.md#networksecurityrulesuuidput) | **PUT** /network_security_rules/{uuid} | Update a existing Network security rule
*NgtApi* | [**ngtListPost**](docs/Api/NgtApi.md#ngtlistpost) | **POST** /ngt/list | Get a list of existing vms
*NgtApi* | [**ngtUuidGet**](docs/Api/NgtApi.md#ngtuuidget) | **GET** /ngt/{uuid} | Get a existing ngt
*NgtApi* | [**vmsUuidNgtGet**](docs/Api/NgtApi.md#vmsuuidngtget) | **GET** /vms/{uuid}/ngt | Get a existing ngt
*NgtPoliciesApi* | [**ngtPoliciesListPost**](docs/Api/NgtPoliciesApi.md#ngtpolicieslistpost) | **POST** /ngt_policies/list | Get a list of existing ngt_policies
*NgtPoliciesApi* | [**ngtPoliciesPost**](docs/Api/NgtPoliciesApi.md#ngtpoliciespost) | **POST** /ngt_policies | Create a new ngt_policy
*NgtPoliciesApi* | [**ngtPoliciesUuidDelete**](docs/Api/NgtPoliciesApi.md#ngtpoliciesuuiddelete) | **DELETE** /ngt_policies/{uuid} | Delete a existing ngt_policy
*NgtPoliciesApi* | [**ngtPoliciesUuidGet**](docs/Api/NgtPoliciesApi.md#ngtpoliciesuuidget) | **GET** /ngt_policies/{uuid} | Get a existing ngt_policy
*NgtPoliciesApi* | [**ngtPoliciesUuidPut**](docs/Api/NgtPoliciesApi.md#ngtpoliciesuuidput) | **PUT** /ngt_policies/{uuid} | Update a existing ngt_policy
*OauthApi* | [**oauthAdfsLoginGet**](docs/Api/OauthApi.md#oauthadfsloginget) | **GET** /oauth/adfs_login | ADFS login url for idp
*OauthApi* | [**oauthAuthorizePost**](docs/Api/OauthApi.md#oauthauthorizepost) | **POST** /oauth/authorize | Used to get authorization code from server
*OauthApi* | [**oauthClientClientIdDelete**](docs/Api/OauthApi.md#oauthclientclientiddelete) | **DELETE** /oauth/client/{client_id} | Delete an existing Oauth client
*OauthApi* | [**oauthClientClientIdGet**](docs/Api/OauthApi.md#oauthclientclientidget) | **GET** /oauth/client/{client_id} | Used to fetch existing oauth client details
*OauthApi* | [**oauthClientClientIdPut**](docs/Api/OauthApi.md#oauthclientclientidput) | **PUT** /oauth/client/{client_id} | Used to update existing client details
*OauthApi* | [**oauthClientListPost**](docs/Api/OauthApi.md#oauthclientlistpost) | **POST** /oauth/client/list | Retrieves all oauth client
*OauthApi* | [**oauthClientPost**](docs/Api/OauthApi.md#oauthclientpost) | **POST** /oauth/client | This is used to register new oauth client
*OauthApi* | [**oauthGenerateTokenPost**](docs/Api/OauthApi.md#oauthgeneratetokenpost) | **POST** /oauth/generate_token | This is used when the user is already authenticated and would like to create bearer tokens for distribution
*OauthApi* | [**oauthIdpCallbackGet**](docs/Api/OauthApi.md#oauthidpcallbackget) | **GET** /oauth/idp_callback | Oauth2 callback from IDP to intent gateway
*OauthApi* | [**oauthIdpLoginGet**](docs/Api/OauthApi.md#oauthidploginget) | **GET** /oauth/idp_login | Oauth2 login to idp
*OauthApi* | [**oauthRevokeTokenPost**](docs/Api/OauthApi.md#oauthrevoketokenpost) | **POST** /oauth/revoke_token | Revoke a token will cause the token to be removed from system Any subsequent authorization calls with the token will fail
*OauthApi* | [**oauthTokenPost**](docs/Api/OauthApi.md#oauthtokenpost) | **POST** /oauth/token | This callback is used to get token from Oauth2 provider
*OvasApi* | [**ovasCapabilitiesGet**](docs/Api/OvasApi.md#ovascapabilitiesget) | **GET** /ovas/capabilities | Capability information for OVAs.
*OvasApi* | [**ovasCapabilitiesOptions**](docs/Api/OvasApi.md#ovascapabilitiesoptions) | **OPTIONS** /ovas/capabilities | Returns metadata for /ovas/capabilities endpoint.
*OvasApi* | [**ovasListPost**](docs/Api/OvasApi.md#ovaslistpost) | **POST** /ovas/list | Get a list of existing OVAs
*OvasApi* | [**ovasPost**](docs/Api/OvasApi.md#ovaspost) | **POST** /ovas | Create a new ova
*OvasApi* | [**ovasUuidChunksConcatenatePost**](docs/Api/OvasApi.md#ovasuuidchunksconcatenatepost) | **POST** /ovas/{uuid}/chunks/concatenate | Concatenate uploaded file chunks of an OVA
*OvasApi* | [**ovasUuidChunksHead**](docs/Api/OvasApi.md#ovasuuidchunkshead) | **HEAD** /ovas/{uuid}/chunks | Uploaded OVA file info
*OvasApi* | [**ovasUuidChunksPut**](docs/Api/OvasApi.md#ovasuuidchunksput) | **PUT** /ovas/{uuid}/chunks | Upload file chunk of an OVA
*OvasApi* | [**ovasUuidDelete**](docs/Api/OvasApi.md#ovasuuiddelete) | **DELETE** /ovas/{uuid} | Delete a existing OVA
*OvasApi* | [**ovasUuidDisksDiskIdGet**](docs/Api/OvasApi.md#ovasuuiddisksdiskidget) | **GET** /ovas/{uuid}/disks/{disk_id} | Get an existing disk of an OVA
*OvasApi* | [**ovasUuidDisksGet**](docs/Api/OvasApi.md#ovasuuiddisksget) | **GET** /ovas/{uuid}/disks | Gets a list of existing disks of an OVA
*OvasApi* | [**ovasUuidFileGet**](docs/Api/OvasApi.md#ovasuuidfileget) | **GET** /ovas/{uuid}/file | Get OVA Contents
*OvasApi* | [**ovasUuidGet**](docs/Api/OvasApi.md#ovasuuidget) | **GET** /ovas/{uuid} | Get an existing OVA
*OvasApi* | [**ovasUuidPut**](docs/Api/OvasApi.md#ovasuuidput) | **PUT** /ovas/{uuid} | Update name of an existing OVA
*OvasApi* | [**ovasUuidVmSpecGet**](docs/Api/OvasApi.md#ovasuuidvmspecget) | **GET** /ovas/{uuid}/vm_spec | Get VM spec from an OVA.
*PermissionsApi* | [**permissionsListPost**](docs/Api/PermissionsApi.md#permissionslistpost) | **POST** /permissions/list | List the permissions.
*PermissionsApi* | [**permissionsPost**](docs/Api/PermissionsApi.md#permissionspost) | **POST** /permissions | Create a permission.
*PermissionsApi* | [**permissionsUuidDelete**](docs/Api/PermissionsApi.md#permissionsuuiddelete) | **DELETE** /permissions/{uuid} | Delete a permission.
*PermissionsApi* | [**permissionsUuidGet**](docs/Api/PermissionsApi.md#permissionsuuidget) | **GET** /permissions/{uuid} | Get a permission.
*PermissionsApi* | [**permissionsUuidPut**](docs/Api/PermissionsApi.md#permissionsuuidput) | **PUT** /permissions/{uuid} | Update a permission.
*PhysicalAvailabilityZoneApi* | [**tenantClustersPhysicalAvailabilityZoneGet**](docs/Api/PhysicalAvailabilityZoneApi.md#tenantclustersphysicalavailabilityzoneget) | **GET** /tenant_clusters/physical_availability_zone | Physical Availability zone configuration.
*PhysicalAvailabilityZoneApi* | [**tenantClustersPhysicalAvailabilityZoneKeysGet**](docs/Api/PhysicalAvailabilityZoneApi.md#tenantclustersphysicalavailabilityzonekeysget) | **GET** /tenant_clusters/physical_availability_zone/keys | Get Physical Availability Zone&#39;s JWKS
*PhysicalAvailabilityZoneApi* | [**tenantClustersPhysicalAvailabilityZonePost**](docs/Api/PhysicalAvailabilityZoneApi.md#tenantclustersphysicalavailabilityzonepost) | **POST** /tenant_clusters/physical_availability_zone | Configure a Physical Availability zone.
*PortalServicesApi* | [**portalServicesSoftwareSoftwareTypeListPost**](docs/Api/PortalServicesApi.md#portalservicessoftwaresoftwaretypelistpost) | **POST** /portal_services/software/{software_type}/list | Get all available software on Nutanix Portal
*PortalServicesApi* | [**portalServicesSoftwareSoftwareTypeVersionGet**](docs/Api/PortalServicesApi.md#portalservicessoftwaresoftwaretypeversionget) | **GET** /portal_services/software/{software_type}/{version} | Get specified software information
*PortalServicesApi* | [**portalServicesSupportCasesCaseIdGet**](docs/Api/PortalServicesApi.md#portalservicessupportcasescaseidget) | **GET** /portal_services/support_cases/{case_id} | Get specified support case.
*PortalServicesApi* | [**portalServicesSupportCasesListPost**](docs/Api/PortalServicesApi.md#portalservicessupportcaseslistpost) | **POST** /portal_services/support_cases/list | List support cases.
*PortalServicesApi* | [**portalServicesSupportCasesPost**](docs/Api/PortalServicesApi.md#portalservicessupportcasespost) | **POST** /portal_services/support_cases | Create support case.
*PortalServicesApi* | [**portalServicesSupportCasesTemplateTemplateIdGet**](docs/Api/PortalServicesApi.md#portalservicessupportcasestemplatetemplateidget) | **GET** /portal_services/support_cases/template/{template_id} | Get screen template from portal.
*PortalServicesApi* | [**portalServicesSupportCasesUploadPost**](docs/Api/PortalServicesApi.md#portalservicessupportcasesuploadpost) | **POST** /portal_services/support_cases/upload | Upload attachements for a specific support case.
*PrismCentralApi* | [**prismCentralCmspConfigurePost**](docs/Api/PrismCentralApi.md#prismcentralcmspconfigurepost) | **POST** /prism_central/cmsp/configure | Enables CMSP on Prism Central.
*PrismCentralApi* | [**prismCentralGet**](docs/Api/PrismCentralApi.md#prismcentralget) | **GET** /prism_central | Get a existing Prism Central
*PrismCentralApi* | [**prismCentralNodesPost**](docs/Api/PrismCentralApi.md#prismcentralnodespost) | **POST** /prism_central/nodes | Add a new prism central VM to Prism Central cluster.
*ProjectApi* | [**projectsInternalPost**](docs/Api/ProjectApi.md#projectsinternalpost) | **POST** /projects_internal | Create a new Project
*ProjectApi* | [**projectsInternalUuidGet**](docs/Api/ProjectApi.md#projectsinternaluuidget) | **GET** /projects_internal/{uuid} | Get a existing Project
*ProjectApi* | [**projectsInternalUuidPut**](docs/Api/ProjectApi.md#projectsinternaluuidput) | **PUT** /projects_internal/{uuid} | Update a existing Project
*ProjectsApi* | [**projectsListPost**](docs/Api/ProjectsApi.md#projectslistpost) | **POST** /projects/list | Get a list of existing Projects
*ProjectsApi* | [**projectsPost**](docs/Api/ProjectsApi.md#projectspost) | **POST** /projects | Create a new Project
*ProjectsApi* | [**projectsUuidDelete**](docs/Api/ProjectsApi.md#projectsuuiddelete) | **DELETE** /projects/{uuid} | Delete a existing Project
*ProjectsApi* | [**projectsUuidGet**](docs/Api/ProjectsApi.md#projectsuuidget) | **GET** /projects/{uuid} | Get a existing Project
*ProjectsApi* | [**projectsUuidPut**](docs/Api/ProjectsApi.md#projectsuuidput) | **PUT** /projects/{uuid} | Update a existing Project
*ProtectionRulesApi* | [**protectionRulesListPost**](docs/Api/ProtectionRulesApi.md#protectionruleslistpost) | **POST** /protection_rules/list | Get protection rules
*ProtectionRulesApi* | [**protectionRulesPost**](docs/Api/ProtectionRulesApi.md#protectionrulespost) | **POST** /protection_rules | Create a protection rule
*ProtectionRulesApi* | [**protectionRulesQueryEntitiesGet**](docs/Api/ProtectionRulesApi.md#protectionrulesqueryentitiesget) | **GET** /protection_rules/query_entities | Get a list of entities along with their protection status.
*ProtectionRulesApi* | [**protectionRulesUuidDelete**](docs/Api/ProtectionRulesApi.md#protectionrulesuuiddelete) | **DELETE** /protection_rules/{uuid} | Delete a protection rule
*ProtectionRulesApi* | [**protectionRulesUuidGet**](docs/Api/ProtectionRulesApi.md#protectionrulesuuidget) | **GET** /protection_rules/{uuid} | Get details for a protection rule
*ProtectionRulesApi* | [**protectionRulesUuidProcessPost**](docs/Api/ProtectionRulesApi.md#protectionrulesuuidprocesspost) | **POST** /protection_rules/{uuid}/process | Process a protection rule
*ProtectionRulesApi* | [**protectionRulesUuidPut**](docs/Api/ProtectionRulesApi.md#protectionrulesuuidput) | **PUT** /protection_rules/{uuid} | Modify protection rule
*ProtectionRulesApi* | [**protectionRulesUuidQueryEntitiesGet**](docs/Api/ProtectionRulesApi.md#protectionrulesuuidqueryentitiesget) | **GET** /protection_rules/{uuid}/query_entities | Get a list of entities affected by a protection rule
*RackApi* | [**racksListPost**](docs/Api/RackApi.md#rackslistpost) | **POST** /racks/list | Retrieves all racks
*RackApi* | [**racksPost**](docs/Api/RackApi.md#rackspost) | **POST** /racks | Create a rack instance
*RackApi* | [**racksUuidDelete**](docs/Api/RackApi.md#racksuuiddelete) | **DELETE** /racks/{uuid} | Delete specified rack
*RackApi* | [**racksUuidGet**](docs/Api/RackApi.md#racksuuidget) | **GET** /racks/{uuid} | Retrieves specified rack
*RackApi* | [**racksUuidPut**](docs/Api/RackApi.md#racksuuidput) | **PUT** /racks/{uuid} | Update rack
*RackApi* | [**racksValidateRackConfigPost**](docs/Api/RackApi.md#racksvalidaterackconfigpost) | **POST** /racks/validate_rack_config | Validates Specified Rack Configuration
*RackableUnitApi* | [**rackableUnitsListPost**](docs/Api/RackableUnitApi.md#rackableunitslistpost) | **POST** /rackable_units/list | Retrieves all rackable units
*RackableUnitApi* | [**rackableUnitsUuidGet**](docs/Api/RackableUnitApi.md#rackableunitsuuidget) | **GET** /rackable_units/{uuid} | Retrieves specified rackable unit
*RackableUnitApi* | [**rackableUnitsUuidPut**](docs/Api/RackableUnitApi.md#rackableunitsuuidput) | **PUT** /rackable_units/{uuid} | Update rackable unit
*RecoveryPlanJobsApi* | [**recoveryPlanJobsListPost**](docs/Api/RecoveryPlanJobsApi.md#recoveryplanjobslistpost) | **POST** /recovery_plan_jobs/list | List the Recovery Plan Jobs
*RecoveryPlanJobsApi* | [**recoveryPlanJobsPost**](docs/Api/RecoveryPlanJobsApi.md#recoveryplanjobspost) | **POST** /recovery_plan_jobs | Create Recovery Plan Job
*RecoveryPlanJobsApi* | [**recoveryPlanJobsUuidActionPost**](docs/Api/RecoveryPlanJobsApi.md#recoveryplanjobsuuidactionpost) | **POST** /recovery_plan_jobs/{uuid}/{action} | Perform an action on Recovery Plan Job
*RecoveryPlanJobsApi* | [**recoveryPlanJobsUuidDelete**](docs/Api/RecoveryPlanJobsApi.md#recoveryplanjobsuuiddelete) | **DELETE** /recovery_plan_jobs/{uuid} | Delete Recovery Plan Job
*RecoveryPlanJobsApi* | [**recoveryPlanJobsUuidGet**](docs/Api/RecoveryPlanJobsApi.md#recoveryplanjobsuuidget) | **GET** /recovery_plan_jobs/{uuid} | Get Recovery Plan Job
*RecoveryPlanJobsApi* | [**recoveryPlanJobsUuidStatusGet**](docs/Api/RecoveryPlanJobsApi.md#recoveryplanjobsuuidstatusget) | **GET** /recovery_plan_jobs/{uuid}/{status} | Get the execution status of the Recovery Plan Job
*RecoveryPlansApi* | [**recoveryPlansListPost**](docs/Api/RecoveryPlansApi.md#recoveryplanslistpost) | **POST** /recovery_plans/list | List the Recovery Plans
*RecoveryPlansApi* | [**recoveryPlansPost**](docs/Api/RecoveryPlansApi.md#recoveryplanspost) | **POST** /recovery_plans | Create Recovery Plan
*RecoveryPlansApi* | [**recoveryPlansUuidDelete**](docs/Api/RecoveryPlansApi.md#recoveryplansuuiddelete) | **DELETE** /recovery_plans/{uuid} | Delete Recovery Plan
*RecoveryPlansApi* | [**recoveryPlansUuidEntitiesGet**](docs/Api/RecoveryPlansApi.md#recoveryplansuuidentitiesget) | **GET** /recovery_plans/{uuid}/entities | Get entities associated with the Recovery Plan
*RecoveryPlansApi* | [**recoveryPlansUuidGet**](docs/Api/RecoveryPlansApi.md#recoveryplansuuidget) | **GET** /recovery_plans/{uuid} | Get Recovery Plan
*RecoveryPlansApi* | [**recoveryPlansUuidPut**](docs/Api/RecoveryPlansApi.md#recoveryplansuuidput) | **PUT** /recovery_plans/{uuid} | Update Recovery Plan
*RecoveryPointsApi* | [**recoveryPointsUuidReplicatePost**](docs/Api/RecoveryPointsApi.md#recoverypointsuuidreplicatepost) | **POST** /recovery_points/{uuid}/replicate | Replicate a Recovery Point
*RecoveryPointsApi* | [**recoveryPointsUuidRestorePost**](docs/Api/RecoveryPointsApi.md#recoverypointsuuidrestorepost) | **POST** /recovery_points/{uuid}/restore | Restore a recovery point.
*RemoteConnectionsApi* | [**azProxyPost**](docs/Api/RemoteConnectionsApi.md#azproxypost) | **POST** /az_proxy | Proxies request to remote AZ
*RemoteConnectionsApi* | [**fanoutProxyPost**](docs/Api/RemoteConnectionsApi.md#fanoutproxypost) | **POST** /fanout_proxy | Proxies request to remote cluster
*RemoteConnectionsApi* | [**remoteConnectionsListPost**](docs/Api/RemoteConnectionsApi.md#remoteconnectionslistpost) | **POST** /remote_connections/list | Get list of remote connections
*RemoteConnectionsApi* | [**remoteConnectionsPost**](docs/Api/RemoteConnectionsApi.md#remoteconnectionspost) | **POST** /remote_connections | Creates a remote connection
*RemoteConnectionsApi* | [**remoteConnectionsUuidDelete**](docs/Api/RemoteConnectionsApi.md#remoteconnectionsuuiddelete) | **DELETE** /remote_connections/{uuid} | Delete an existing remote connection
*RemoteConnectionsApi* | [**remoteConnectionsUuidGet**](docs/Api/RemoteConnectionsApi.md#remoteconnectionsuuidget) | **GET** /remote_connections/{uuid} | Used to fetch remote connection details
*RemoteConnectionsApi* | [**remoteConnectionsUuidPut**](docs/Api/RemoteConnectionsApi.md#remoteconnectionsuuidput) | **PUT** /remote_connections/{uuid} | Used to update remote connection details
*RemoteConnectionsApi* | [**remoteRpcRequestPost**](docs/Api/RemoteConnectionsApi.md#remoterpcrequestpost) | **POST** /remote_rpc_request | Execute Remote RPC
*RemoteSyslogModulesApi* | [**remoteSyslogModulesListPost**](docs/Api/RemoteSyslogModulesApi.md#remotesyslogmoduleslistpost) | **POST** /remote_syslog_modules/list | Get a list of existing Remote Syslog modules
*RemoteSyslogModulesApi* | [**remoteSyslogModulesPost**](docs/Api/RemoteSyslogModulesApi.md#remotesyslogmodulespost) | **POST** /remote_syslog_modules | Create a new Remote Syslog modules list
*RemoteSyslogModulesApi* | [**remoteSyslogModulesUuidDelete**](docs/Api/RemoteSyslogModulesApi.md#remotesyslogmodulesuuiddelete) | **DELETE** /remote_syslog_modules/{uuid} | Delete a existing Remote Syslog modules list
*RemoteSyslogModulesApi* | [**remoteSyslogModulesUuidGet**](docs/Api/RemoteSyslogModulesApi.md#remotesyslogmodulesuuidget) | **GET** /remote_syslog_modules/{uuid} | Get a existing Remote Syslog modules list
*RemoteSyslogModulesApi* | [**remoteSyslogModulesUuidPut**](docs/Api/RemoteSyslogModulesApi.md#remotesyslogmodulesuuidput) | **PUT** /remote_syslog_modules/{uuid} | Update a existing Remote Syslog modules list
*RemoteSyslogServersApi* | [**remoteSyslogServersClusterRsyslogServersGet**](docs/Api/RemoteSyslogServersApi.md#remotesyslogserversclusterrsyslogserversget) | **GET** /remote_syslog_servers/cluster_rsyslog_servers | Remote Syslog servers configured on all PEs registered to PC.
*RemoteSyslogServersApi* | [**remoteSyslogServersListPost**](docs/Api/RemoteSyslogServersApi.md#remotesyslogserverslistpost) | **POST** /remote_syslog_servers/list | Get a list of existing Remote Syslog servers
*RemoteSyslogServersApi* | [**remoteSyslogServersPost**](docs/Api/RemoteSyslogServersApi.md#remotesyslogserverspost) | **POST** /remote_syslog_servers | Create a new Remote Syslog server
*RemoteSyslogServersApi* | [**remoteSyslogServersUuidDelete**](docs/Api/RemoteSyslogServersApi.md#remotesyslogserversuuiddelete) | **DELETE** /remote_syslog_servers/{uuid} | Delete a existing Remote Syslog server
*RemoteSyslogServersApi* | [**remoteSyslogServersUuidGet**](docs/Api/RemoteSyslogServersApi.md#remotesyslogserversuuidget) | **GET** /remote_syslog_servers/{uuid} | Get a existing Remote Syslog server
*RemoteSyslogServersApi* | [**remoteSyslogServersUuidPut**](docs/Api/RemoteSyslogServersApi.md#remotesyslogserversuuidput) | **PUT** /remote_syslog_servers/{uuid} | Update a existing Remote Syslog server
*ReportsApi* | [**commonReportConfigsListPost**](docs/Api/ReportsApi.md#commonreportconfigslistpost) | **POST** /common_report_configs/list | List the common report configs.
*ReportsApi* | [**commonReportConfigsPost**](docs/Api/ReportsApi.md#commonreportconfigspost) | **POST** /common_report_configs | Create common report config.
*ReportsApi* | [**commonReportConfigsUuidDelete**](docs/Api/ReportsApi.md#commonreportconfigsuuiddelete) | **DELETE** /common_report_configs/{uuid} | Delete common report config.
*ReportsApi* | [**commonReportConfigsUuidGet**](docs/Api/ReportsApi.md#commonreportconfigsuuidget) | **GET** /common_report_configs/{uuid} | Get common report config information.
*ReportsApi* | [**commonReportConfigsUuidPut**](docs/Api/ReportsApi.md#commonreportconfigsuuidput) | **PUT** /common_report_configs/{uuid} | Update common report config.
*ReportsApi* | [**reportConfigsListPost**](docs/Api/ReportsApi.md#reportconfigslistpost) | **POST** /report_configs/list | List the report configs.
*ReportsApi* | [**reportConfigsPost**](docs/Api/ReportsApi.md#reportconfigspost) | **POST** /report_configs | Create report config.
*ReportsApi* | [**reportConfigsUuidDelete**](docs/Api/ReportsApi.md#reportconfigsuuiddelete) | **DELETE** /report_configs/{uuid} | Delete report config.
*ReportsApi* | [**reportConfigsUuidGet**](docs/Api/ReportsApi.md#reportconfigsuuidget) | **GET** /report_configs/{uuid} | Get report config information.
*ReportsApi* | [**reportConfigsUuidPut**](docs/Api/ReportsApi.md#reportconfigsuuidput) | **PUT** /report_configs/{uuid} | Update report config.
*ReportsApi* | [**reportInstancesListPost**](docs/Api/ReportsApi.md#reportinstanceslistpost) | **POST** /report_instances/list | Get the list of all the Generated report instances.
*ReportsApi* | [**reportInstancesPost**](docs/Api/ReportsApi.md#reportinstancespost) | **POST** /report_instances | Create a report instance.
*ReportsApi* | [**reportInstancesUuidDelete**](docs/Api/ReportsApi.md#reportinstancesuuiddelete) | **DELETE** /report_instances/{uuid} | Delete the generated report instance.
*ReportsApi* | [**reportInstancesUuidGet**](docs/Api/ReportsApi.md#reportinstancesuuidget) | **GET** /report_instances/{uuid} | Get the specified report instance.
*ReportsApi* | [**reportsDownloadTypeUuidGet**](docs/Api/ReportsApi.md#reportsdownloadtypeuuidget) | **GET** /reports/download/{type}/{uuid} | Download a resource.
*ReportsApi* | [**reportsNotifyPost**](docs/Api/ReportsApi.md#reportsnotifypost) | **POST** /reports/notify | Email the specified generated reports to specified recipients.
*ReportsApi* | [**reportsUploadTypePost**](docs/Api/ReportsApi.md#reportsuploadtypepost) | **POST** /reports/upload/{type} | Upload a file.
*RolesApi* | [**rolesListPost**](docs/Api/RolesApi.md#roleslistpost) | **POST** /roles/list | List the roles.
*RolesApi* | [**rolesPost**](docs/Api/RolesApi.md#rolespost) | **POST** /roles | Create a role.
*RolesApi* | [**rolesUuidDelete**](docs/Api/RolesApi.md#rolesuuiddelete) | **DELETE** /roles/{uuid} | Delete a role.
*RolesApi* | [**rolesUuidGet**](docs/Api/RolesApi.md#rolesuuidget) | **GET** /roles/{uuid} | Get a role.
*RolesApi* | [**rolesUuidPut**](docs/Api/RolesApi.md#rolesuuidput) | **PUT** /roles/{uuid} | Update a role.
*RoutingPoliciesApi* | [**routingPoliciesListPost**](docs/Api/RoutingPoliciesApi.md#routingpolicieslistpost) | **POST** /routing_policies/list | Get a list of existing routing_policies
*RoutingPoliciesApi* | [**routingPoliciesPost**](docs/Api/RoutingPoliciesApi.md#routingpoliciespost) | **POST** /routing_policies | Create a new routing_policy
*RoutingPoliciesApi* | [**routingPoliciesUuidDelete**](docs/Api/RoutingPoliciesApi.md#routingpoliciesuuiddelete) | **DELETE** /routing_policies/{uuid} | Delete a existing routing_policy
*RoutingPoliciesApi* | [**routingPoliciesUuidGet**](docs/Api/RoutingPoliciesApi.md#routingpoliciesuuidget) | **GET** /routing_policies/{uuid} | Get a existing routing_policy
*RoutingPoliciesApi* | [**routingPoliciesUuidPut**](docs/Api/RoutingPoliciesApi.md#routingpoliciesuuidput) | **PUT** /routing_policies/{uuid} | Update a existing routing_policy
*RoutingPoliciesApi* | [**routingPoliciesUuidResetCountersPost**](docs/Api/RoutingPoliciesApi.md#routingpoliciesuuidresetcounterspost) | **POST** /routing_policies/{uuid}/reset_counters | Clear routing policy counters.
*RoutingPoliciesApi* | [**virtualNetworksRoutingPoliciesListPost**](docs/Api/RoutingPoliciesApi.md#virtualnetworksroutingpolicieslistpost) | **POST** /virtual_networks/routing_policies/list | Get a list of existing routing_policies
*RoutingPoliciesApi* | [**virtualNetworksRoutingPoliciesPost**](docs/Api/RoutingPoliciesApi.md#virtualnetworksroutingpoliciespost) | **POST** /virtual_networks/routing_policies | Create a new routing_policy
*RoutingPoliciesApi* | [**virtualNetworksRoutingPoliciesUuidDelete**](docs/Api/RoutingPoliciesApi.md#virtualnetworksroutingpoliciesuuiddelete) | **DELETE** /virtual_networks/routing_policies/{uuid} | Delete a existing routing_policy
*RoutingPoliciesApi* | [**virtualNetworksRoutingPoliciesUuidGet**](docs/Api/RoutingPoliciesApi.md#virtualnetworksroutingpoliciesuuidget) | **GET** /virtual_networks/routing_policies/{uuid} | Get a existing routing_policy
*RoutingPoliciesApi* | [**virtualNetworksRoutingPoliciesUuidPut**](docs/Api/RoutingPoliciesApi.md#virtualnetworksroutingpoliciesuuidput) | **PUT** /virtual_networks/routing_policies/{uuid} | Update a existing routing_policy
*RoutingPoliciesApi* | [**virtualNetworksRoutingPoliciesUuidResetCountersPost**](docs/Api/RoutingPoliciesApi.md#virtualnetworksroutingpoliciesuuidresetcounterspost) | **POST** /virtual_networks/routing_policies/{uuid}/reset_counters | Clear routing policy counters.
*RoutingPoliciesApi* | [**virtualNetworksUuidRoutingPoliciesResetCountersPost**](docs/Api/RoutingPoliciesApi.md#virtualnetworksuuidroutingpoliciesresetcounterspost) | **POST** /virtual_networks/{uuid}/routing_policies/reset_counters | Clear all routing policy counters.
*RoutingPoliciesApi* | [**vpcsUuidRoutingPoliciesResetCountersPost**](docs/Api/RoutingPoliciesApi.md#vpcsuuidroutingpoliciesresetcounterspost) | **POST** /vpcs/{uuid}/routing_policies/reset_counters | Clear all routing policy counters.
*SearchApi* | [**searchPost**](docs/Api/SearchApi.md#searchpost) | **POST** /search | Search Information on cluster
*SecurityMonitoringApi* | [**securityMonitoringQueryPost**](docs/Api/SecurityMonitoringApi.md#securitymonitoringquerypost) | **POST** /security_monitoring/query | Query API in Security Monitoring.
*SecurityMonitoringApi* | [**securityMonitoringTopologyPost**](docs/Api/SecurityMonitoringApi.md#securitymonitoringtopologypost) | **POST** /security_monitoring/topology | Topology details
*ServiceGroupsApi* | [**serviceGroupsListPost**](docs/Api/ServiceGroupsApi.md#servicegroupslistpost) | **POST** /service_groups/list | List the service groups
*ServiceGroupsApi* | [**serviceGroupsPost**](docs/Api/ServiceGroupsApi.md#servicegroupspost) | **POST** /service_groups | Create a new service_group
*ServiceGroupsApi* | [**serviceGroupsUuidDelete**](docs/Api/ServiceGroupsApi.md#servicegroupsuuiddelete) | **DELETE** /service_groups/{uuid} | Delete a existing service_group
*ServiceGroupsApi* | [**serviceGroupsUuidGet**](docs/Api/ServiceGroupsApi.md#servicegroupsuuidget) | **GET** /service_groups/{uuid} | Get a existing service_group
*ServiceGroupsApi* | [**serviceGroupsUuidPut**](docs/Api/ServiceGroupsApi.md#servicegroupsuuidput) | **PUT** /service_groups/{uuid} | Update a existing service_group
*ServicesApi* | [**servicesDisasterRecoveryPost**](docs/Api/ServicesApi.md#servicesdisasterrecoverypost) | **POST** /services/disaster_recovery | Manage Disaster Recovery service.
*ServicesApi* | [**servicesFilesManagerPost**](docs/Api/ServicesApi.md#servicesfilesmanagerpost) | **POST** /services/files_manager | Manage Files Manager service.
*ServicesApi* | [**servicesFlowSecurityPlanningClusterCapabilityGet**](docs/Api/ServicesApi.md#servicesflowsecurityplanningclustercapabilityget) | **GET** /services/flow/security_planning/cluster_capability | Cluster feature status.
*ServicesApi* | [**servicesFlowSecurityPlanningDataCollectorUpgradeGet**](docs/Api/ServicesApi.md#servicesflowsecurityplanningdatacollectorupgradeget) | **GET** /services/flow/security_planning/data_collector/upgrade | Data Collector Upgrade Status.
*ServicesApi* | [**servicesFlowSecurityPlanningDataCollectorUpgradePost**](docs/Api/ServicesApi.md#servicesflowsecurityplanningdatacollectorupgradepost) | **POST** /services/flow/security_planning/data_collector/upgrade | Security Planning Data Collector Upgrade.
*ServicesApi* | [**servicesFlowSecurityPlanningPost**](docs/Api/ServicesApi.md#servicesflowsecurityplanningpost) | **POST** /services/flow/security_planning | Security Planning Configuration.
*ServicesApi* | [**servicesFlowSecurityPlanningStatusGet**](docs/Api/ServicesApi.md#servicesflowsecurityplanningstatusget) | **GET** /services/flow/security_planning/status | Service status.
*ServicesApi* | [**servicesMicrosegPost**](docs/Api/ServicesApi.md#servicesmicrosegpost) | **POST** /services/microseg | Manage Microsegmentation.
*ServicesApi* | [**servicesNucalmPost**](docs/Api/ServicesApi.md#servicesnucalmpost) | **POST** /services/nucalm | Manage NuCalm service.
*ServicesApi* | [**servicesOssPost**](docs/Api/ServicesApi.md#servicesosspost) | **POST** /services/oss | Manage Bucket Service Manager service.
*ServicesApi* | [**servicesServiceNameClusterCapabilityGet**](docs/Api/ServicesApi.md#servicesservicenameclustercapabilityget) | **GET** /services/{service_name}/cluster_capability | Cluster feature status.
*ServicesApi* | [**servicesServiceNameStatusGet**](docs/Api/ServicesApi.md#servicesservicenamestatusget) | **GET** /services/{service_name}/status | Service status.
*ServicesApi* | [**servicesXfitPost**](docs/Api/ServicesApi.md#servicesxfitpost) | **POST** /services/xfit | Manage xfit service.
*SshUserApi* | [**sshUserListPost**](docs/Api/SshUserApi.md#sshuserlistpost) | **POST** /ssh_user/list | Retrieves all SSH Users on the cluster
*SshUserApi* | [**sshUserPost**](docs/Api/SshUserApi.md#sshuserpost) | **POST** /ssh_user | Add SSH User to the entity
*SshUserApi* | [**sshUserUuidDelete**](docs/Api/SshUserApi.md#sshuseruuiddelete) | **DELETE** /ssh_user/{uuid} | Unregister specified SSH User
*SshUserApi* | [**sshUserUuidGet**](docs/Api/SshUserApi.md#sshuseruuidget) | **GET** /ssh_user/{uuid} | Retrieves specified SSH User
*SshUserApi* | [**sshUserUuidPut**](docs/Api/SshUserApi.md#sshuseruuidput) | **PUT** /ssh_user/{uuid} | Update SSH User entity
*StoragePoliciesApi* | [**storagePoliciesGetInfoEntityTypeUuidGet**](docs/Api/StoragePoliciesApi.md#storagepoliciesgetinfoentitytypeuuidget) | **GET** /storage_policies/get_info/{entity_type}/{uuid} | Get effective storage configuration on an entity
*StoragePoliciesApi* | [**storagePoliciesListPost**](docs/Api/StoragePoliciesApi.md#storagepolicieslistpost) | **POST** /storage_policies/list | Get a list of existing storage_policies
*StoragePoliciesApi* | [**storagePoliciesPost**](docs/Api/StoragePoliciesApi.md#storagepoliciespost) | **POST** /storage_policies | Create a new storage_policy
*StoragePoliciesApi* | [**storagePoliciesUuidDelete**](docs/Api/StoragePoliciesApi.md#storagepoliciesuuiddelete) | **DELETE** /storage_policies/{uuid} | Delete a existing storage_policy
*StoragePoliciesApi* | [**storagePoliciesUuidGet**](docs/Api/StoragePoliciesApi.md#storagepoliciesuuidget) | **GET** /storage_policies/{uuid} | Get a existing storage_policy
*StoragePoliciesApi* | [**storagePoliciesUuidGetComplianceCountGet**](docs/Api/StoragePoliciesApi.md#storagepoliciesuuidgetcompliancecountget) | **GET** /storage_policies/{uuid}/get_compliance_count | Get compliance count per storage policy
*StoragePoliciesApi* | [**storagePoliciesUuidPut**](docs/Api/StoragePoliciesApi.md#storagepoliciesuuidput) | **PUT** /storage_policies/{uuid} | Update a existing storage_policy
*StreamingPolicyApi* | [**streamingPoliciesListPost**](docs/Api/StreamingPolicyApi.md#streamingpolicieslistpost) | **POST** /streaming_policies/list | Retrieves all Streaming Policies
*StreamingPolicyApi* | [**streamingPoliciesPost**](docs/Api/StreamingPolicyApi.md#streamingpoliciespost) | **POST** /streaming_policies | Create Streaming Policy
*StreamingPolicyApi* | [**streamingPoliciesUuidDelete**](docs/Api/StreamingPolicyApi.md#streamingpoliciesuuiddelete) | **DELETE** /streaming_policies/{uuid} | Delete specified Streaming Policy
*StreamingPolicyApi* | [**streamingPoliciesUuidGet**](docs/Api/StreamingPolicyApi.md#streamingpoliciesuuidget) | **GET** /streaming_policies/{uuid} | Retrieves specified Streaming Policy
*StreamingPolicyApi* | [**streamingPoliciesUuidPut**](docs/Api/StreamingPolicyApi.md#streamingpoliciesuuidput) | **PUT** /streaming_policies/{uuid} | Update Streaming Policy entity
*SubnetsApi* | [**subnetsListPost**](docs/Api/SubnetsApi.md#subnetslistpost) | **POST** /subnets/list | Get a list of existing subnets
*SubnetsApi* | [**subnetsPost**](docs/Api/SubnetsApi.md#subnetspost) | **POST** /subnets | Create a new subnet
*SubnetsApi* | [**subnetsUuidDelete**](docs/Api/SubnetsApi.md#subnetsuuiddelete) | **DELETE** /subnets/{uuid} | Delete a existing subnet
*SubnetsApi* | [**subnetsUuidGet**](docs/Api/SubnetsApi.md#subnetsuuidget) | **GET** /subnets/{uuid} | Get a existing subnet
*SubnetsApi* | [**subnetsUuidPut**](docs/Api/SubnetsApi.md#subnetsuuidput) | **PUT** /subnets/{uuid} | Update a existing subnet
*TasksApi* | [**tasksListPost**](docs/Api/TasksApi.md#taskslistpost) | **POST** /tasks/list | Get a list of existing Tasks
*TasksApi* | [**tasksPollPost**](docs/Api/TasksApi.md#taskspollpost) | **POST** /tasks/poll | Poll for completion of tasks
*TasksApi* | [**tasksUuidAbortPost**](docs/Api/TasksApi.md#tasksuuidabortpost) | **POST** /tasks/{uuid}/abort | Issue abort request on the task
*TasksApi* | [**tasksUuidGet**](docs/Api/TasksApi.md#tasksuuidget) | **GET** /tasks/{uuid} | Get a existing Task
*TenantsApi* | [**tenantClustersAccountTerminatePost**](docs/Api/TenantsApi.md#tenantclustersaccountterminatepost) | **POST** /tenant_clusters/account/terminate | Terminate a tenant account
*TenantsApi* | [**tenantClustersConfigTenantsPost**](docs/Api/TenantsApi.md#tenantclustersconfigtenantspost) | **POST** /tenant_clusters/config/tenants | Create a new Tenant
*UnderlaySubnetApi* | [**underlaySubnetsListPost**](docs/Api/UnderlaySubnetApi.md#underlaysubnetslistpost) | **POST** /underlay_subnets/list | Retrieves all underlay subnets
*UnderlaySubnetApi* | [**underlaySubnetsPost**](docs/Api/UnderlaySubnetApi.md#underlaysubnetspost) | **POST** /underlay_subnets | Create a underlay subnet instance
*UnderlaySubnetApi* | [**underlaySubnetsUuidDelete**](docs/Api/UnderlaySubnetApi.md#underlaysubnetsuuiddelete) | **DELETE** /underlay_subnets/{uuid} | Delete specified underlay subnet
*UnderlaySubnetApi* | [**underlaySubnetsUuidGet**](docs/Api/UnderlaySubnetApi.md#underlaysubnetsuuidget) | **GET** /underlay_subnets/{uuid} | Retrieves specified underlay subnet
*UnderlaySubnetApi* | [**underlaySubnetsUuidPut**](docs/Api/UnderlaySubnetApi.md#underlaysubnetsuuidput) | **PUT** /underlay_subnets/{uuid} | Update underlay subnet
*UserGroupsApi* | [**userGroupsListPost**](docs/Api/UserGroupsApi.md#usergroupslistpost) | **POST** /user_groups/list | Get a list of existing User Groups
*UserGroupsApi* | [**userGroupsPost**](docs/Api/UserGroupsApi.md#usergroupspost) | **POST** /user_groups | Add a User group.
*UserGroupsApi* | [**userGroupsUuidDelete**](docs/Api/UserGroupsApi.md#usergroupsuuiddelete) | **DELETE** /user_groups/{uuid} | Delete a existing User Group
*UserGroupsApi* | [**userGroupsUuidGet**](docs/Api/UserGroupsApi.md#usergroupsuuidget) | **GET** /user_groups/{uuid} | Get a existing User Group
*UserGroupsApi* | [**userGroupsUuidPut**](docs/Api/UserGroupsApi.md#usergroupsuuidput) | **PUT** /user_groups/{uuid} | Update a existing User Group
*UsersApi* | [**logoutGet**](docs/Api/UsersApi.md#logoutget) | **GET** /logout | Logs out the current user
*UsersApi* | [**usersInfoGet**](docs/Api/UsersApi.md#usersinfoget) | **GET** /users/info | Retrieves the Access control policies and other user data for logged in user.
*UsersApi* | [**usersListPost**](docs/Api/UsersApi.md#userslistpost) | **POST** /users/list | Get a list of existing Users
*UsersApi* | [**usersMeGet**](docs/Api/UsersApi.md#usersmeget) | **GET** /users/me | Retrieves currently logged in user.
*UsersApi* | [**usersPost**](docs/Api/UsersApi.md#userspost) | **POST** /users | Create a new User
*UsersApi* | [**usersUuidDelete**](docs/Api/UsersApi.md#usersuuiddelete) | **DELETE** /users/{uuid} | Delete a existing User
*UsersApi* | [**usersUuidGet**](docs/Api/UsersApi.md#usersuuidget) | **GET** /users/{uuid} | Get a existing User
*UsersApi* | [**usersUuidProjectUsageSummaryGet**](docs/Api/UsersApi.md#usersuuidprojectusagesummaryget) | **GET** /users/{uuid}/project_usage_summary | Retrieves specified user resource domain information.
*UsersApi* | [**usersUuidPut**](docs/Api/UsersApi.md#usersuuidput) | **PUT** /users/{uuid} | Update a existing User
*VersionsApi* | [**versionsGet**](docs/Api/VersionsApi.md#versionsget) | **GET** /versions | Get details on the api version
*VirtualNetworkApi* | [**virtualNetworksListPost**](docs/Api/VirtualNetworkApi.md#virtualnetworkslistpost) | **POST** /virtual_networks/list | Get a list of existing virtual networks
*VirtualNetworkApi* | [**virtualNetworksPost**](docs/Api/VirtualNetworkApi.md#virtualnetworkspost) | **POST** /virtual_networks | Create a new virtual network
*VirtualNetworkApi* | [**virtualNetworksUuidDelete**](docs/Api/VirtualNetworkApi.md#virtualnetworksuuiddelete) | **DELETE** /virtual_networks/{uuid} | Delete a existing virtual network
*VirtualNetworkApi* | [**virtualNetworksUuidGet**](docs/Api/VirtualNetworkApi.md#virtualnetworksuuidget) | **GET** /virtual_networks/{uuid} | Get a existing virtual network
*VirtualNetworkApi* | [**virtualNetworksUuidPut**](docs/Api/VirtualNetworkApi.md#virtualnetworksuuidput) | **PUT** /virtual_networks/{uuid} | Update a existing virtual network
*VirtualNetworkApi* | [**vpcsListPost**](docs/Api/VirtualNetworkApi.md#vpcslistpost) | **POST** /vpcs/list | Get a list of existing VPCs
*VirtualNetworkApi* | [**vpcsPost**](docs/Api/VirtualNetworkApi.md#vpcspost) | **POST** /vpcs | Create a new VPC
*VirtualNetworkApi* | [**vpcsUuidDelete**](docs/Api/VirtualNetworkApi.md#vpcsuuiddelete) | **DELETE** /vpcs/{uuid} | Delete a existing VPC
*VirtualNetworkApi* | [**vpcsUuidGet**](docs/Api/VirtualNetworkApi.md#vpcsuuidget) | **GET** /vpcs/{uuid} | Get a existing VPC
*VirtualNetworkApi* | [**vpcsUuidPacketTracePost**](docs/Api/VirtualNetworkApi.md#vpcsuuidpackettracepost) | **POST** /vpcs/{uuid}/packet_trace | Logical Packet Trace
*VirtualNetworkApi* | [**vpcsUuidPut**](docs/Api/VirtualNetworkApi.md#vpcsuuidput) | **PUT** /vpcs/{uuid} | Update a existing VPC
*VmHostAffinityLegacyPoliciesApi* | [**vmHostAffinityLegacyPoliciesListPost**](docs/Api/VmHostAffinityLegacyPoliciesApi.md#vmhostaffinitylegacypolicieslistpost) | **POST** /vm_host_affinity_legacy_policies/list | Get a list of existing VM Host Affinity Legacy Policies
*VmHostAffinityLegacyPoliciesApi* | [**vmHostAffinityLegacyPoliciesUuidDelete**](docs/Api/VmHostAffinityLegacyPoliciesApi.md#vmhostaffinitylegacypoliciesuuiddelete) | **DELETE** /vm_host_affinity_legacy_policies/{uuid} | Delete a existing VM Host Affinity Legacy Policy
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesListPost**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypolicieslistpost) | **POST** /vm_host_affinity_policies/list | Get a list of existing VM Host Affinity Policies
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesPost**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypoliciespost) | **POST** /vm_host_affinity_policies | Create a new VM Host Affinity Policy
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesUuidDelete**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypoliciesuuiddelete) | **DELETE** /vm_host_affinity_policies/{uuid} | Delete a existing VM Host Affinity Policy
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesUuidGet**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypoliciesuuidget) | **GET** /vm_host_affinity_policies/{uuid} | Get a existing VM Host Affinity Policy
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesUuidPut**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypoliciesuuidput) | **PUT** /vm_host_affinity_policies/{uuid} | Update a existing VM Host Affinity Policy
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesUuidReEnforcePost**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypoliciesuuidreenforcepost) | **POST** /vm_host_affinity_policies/{uuid}/re_enforce | Re-enforce VM Host Affinity Policy for all the applicable VMs
*VmHostAffinityPoliciesApi* | [**vmHostAffinityPoliciesUuidVmsListPost**](docs/Api/VmHostAffinityPoliciesApi.md#vmhostaffinitypoliciesuuidvmslistpost) | **POST** /vm_host_affinity_policies/{uuid}/vms_list | Information about the VMs which are part of VM Host Affinity Policy
*VmRecoveryPointsApi* | [**vmRecoveryPointsClonePost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsclonepost) | **POST** /vm_recovery_points/clone | Clone a vm recovery point for the given time point.
*VmRecoveryPointsApi* | [**vmRecoveryPointsListPost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointslistpost) | **POST** /vm_recovery_points/list | Get a list of existing vm recovery point
*VmRecoveryPointsApi* | [**vmRecoveryPointsPost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointspost) | **POST** /vm_recovery_points | Create a new vm recovery point
*VmRecoveryPointsApi* | [**vmRecoveryPointsRestorePost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsrestorepost) | **POST** /vm_recovery_points/restore | Restore a vm recovery point for the given time point.
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidClonePost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuidclonepost) | **POST** /vm_recovery_points/{uuid}/clone | Clone a vm_recovery_point.
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidDelete**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuiddelete) | **DELETE** /vm_recovery_points/{uuid} | Delete a existing vm recovery point
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidGet**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuidget) | **GET** /vm_recovery_points/{uuid} | Get a existing vm recovery point
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidPromotePost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuidpromotepost) | **POST** /vm_recovery_points/{uuid}/promote | Promote a vm recovery point.
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidPut**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuidput) | **PUT** /vm_recovery_points/{uuid} | Update a existing vm recovery point
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidRestorePost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuidrestorepost) | **POST** /vm_recovery_points/{uuid}/restore | Restore a vm recovery point.
*VmRecoveryPointsApi* | [**vmRecoveryPointsUuidValidateRestorePost**](docs/Api/VmRecoveryPointsApi.md#vmrecoverypointsuuidvalidaterestorepost) | **POST** /vm_recovery_points/{uuid}/validate_restore | Validates the feasibility of vm restoration from the vm recovery point.
*VmsApi* | [**vmsCapabilitiesGet**](docs/Api/VmsApi.md#vmscapabilitiesget) | **GET** /vms/capabilities | Capability information for VMs.
*VmsApi* | [**vmsCapabilitiesOptions**](docs/Api/VmsApi.md#vmscapabilitiesoptions) | **OPTIONS** /vms/capabilities | Returns metadata for /vms/capabilities endpoint.
*VmsApi* | [**vmsListPost**](docs/Api/VmsApi.md#vmslistpost) | **POST** /vms/list | Get a list of existing VMs
*VmsApi* | [**vmsPost**](docs/Api/VmsApi.md#vmspost) | **POST** /vms | Create a new VM
*VmsApi* | [**vmsUuidAcpiRebootPost**](docs/Api/VmsApi.md#vmsuuidacpirebootpost) | **POST** /vms/{uuid}/acpi_reboot | Create a VM acpi_reboot request.
*VmsApi* | [**vmsUuidAcpiShutdownPost**](docs/Api/VmsApi.md#vmsuuidacpishutdownpost) | **POST** /vms/{uuid}/acpi_shutdown | Create a VM acpi_shutdown request.
*VmsApi* | [**vmsUuidClonePost**](docs/Api/VmsApi.md#vmsuuidclonepost) | **POST** /vms/{uuid}/clone | Clone a vm.
*VmsApi* | [**vmsUuidDelete**](docs/Api/VmsApi.md#vmsuuiddelete) | **DELETE** /vms/{uuid} | Delete an existing VM
*VmsApi* | [**vmsUuidExportPost**](docs/Api/VmsApi.md#vmsuuidexportpost) | **POST** /vms/{uuid}/export | Create an OVA object.
*VmsApi* | [**vmsUuidGet**](docs/Api/VmsApi.md#vmsuuidget) | **GET** /vms/{uuid} | Get an existing VM
*VmsApi* | [**vmsUuidGuestRebootPost**](docs/Api/VmsApi.md#vmsuuidguestrebootpost) | **POST** /vms/{uuid}/guest_reboot | Create a VM guest_reboot request.
*VmsApi* | [**vmsUuidGuestShutdownPost**](docs/Api/VmsApi.md#vmsuuidguestshutdownpost) | **POST** /vms/{uuid}/guest_shutdown | Create a VM guest_shutdown request.
*VmsApi* | [**vmsUuidMigrateDisksPost**](docs/Api/VmsApi.md#vmsuuidmigratediskspost) | **POST** /vms/{uuid}/migrate_disks | Migrate disks to a different container
*VmsApi* | [**vmsUuidPauseReplicationPost**](docs/Api/VmsApi.md#vmsuuidpausereplicationpost) | **POST** /vms/{uuid}/pause_replication | Pause the replication for the VM.
*VmsApi* | [**vmsUuidPowerCyclePost**](docs/Api/VmsApi.md#vmsuuidpowercyclepost) | **POST** /vms/{uuid}/power_cycle | Create a VM power_cycle request.
*VmsApi* | [**vmsUuidPut**](docs/Api/VmsApi.md#vmsuuidput) | **PUT** /vms/{uuid} | Update an existing VM
*VmsApi* | [**vmsUuidResetPost**](docs/Api/VmsApi.md#vmsuuidresetpost) | **POST** /vms/{uuid}/reset | Create a VM reset request.
*VmsApi* | [**vmsUuidResumeReplicationPost**](docs/Api/VmsApi.md#vmsuuidresumereplicationpost) | **POST** /vms/{uuid}/resume_replication | Resume the replication for the VM.
*VmsApi* | [**vmsUuidRevertPost**](docs/Api/VmsApi.md#vmsuuidrevertpost) | **POST** /vms/{uuid}/revert | Revert the vm to the given recovery point.
*VmsApi* | [**vmsUuidSnapshotPost**](docs/Api/VmsApi.md#vmsuuidsnapshotpost) | **POST** /vms/{uuid}/snapshot | Create a vm recovery point.
*VmsApi* | [**vmsUuidUpdateIpPut**](docs/Api/VmsApi.md#vmsuuidupdateipput) | **PUT** /vms/{uuid}/update_ip | Request IP addresses for NICs with the given UUIDs.
*VmsApi* | [**vmsUuidValidateMigrationPost**](docs/Api/VmsApi.md#vmsuuidvalidatemigrationpost) | **POST** /vms/{uuid}/validate_migration | Validates the feasibility of VM migration to given migration target.
*VmwareClusterApi* | [**vmwareV6ClusterListPost**](docs/Api/VmwareClusterApi.md#vmwarev6clusterlistpost) | **POST** /vmware/v6/cluster/list | List all clusters
*VmwareDatacenterApi* | [**vmwareV6DatacenterListPost**](docs/Api/VmwareDatacenterApi.md#vmwarev6datacenterlistpost) | **POST** /vmware/v6/datacenter/list | List datacenters
*VmwareDatastoreApi* | [**vmwareV6DatastoreListPost**](docs/Api/VmwareDatastoreApi.md#vmwarev6datastorelistpost) | **POST** /vmware/v6/datastore/list | List datastores
*VmwareHostApi* | [**vmwareV6HostListPost**](docs/Api/VmwareHostApi.md#vmwarev6hostlistpost) | **POST** /vmware/v6/host/list | List all hosts
*VmwareNetworkApi* | [**vmwareV6NetworkListPost**](docs/Api/VmwareNetworkApi.md#vmwarev6networklistpost) | **POST** /vmware/v6/network/list | List all networks
*VmwareNetworkAdapterApi* | [**vmwareV6NetworkAdapterListPost**](docs/Api/VmwareNetworkAdapterApi.md#vmwarev6networkadapterlistpost) | **POST** /vmware/v6/network_adapter/list | List all network adapters supported
*VmwareResourcepoolApi* | [**vmwareV6ResourcepoolListPost**](docs/Api/VmwareResourcepoolApi.md#vmwarev6resourcepoollistpost) | **POST** /vmware/v6/resourcepool/list | List resource pool
*VmwareStoragePodApi* | [**vmwareV6StoragePodListPost**](docs/Api/VmwareStoragePodApi.md#vmwarev6storagepodlistpost) | **POST** /vmware/v6/storage_pod/list | List all storage_pods
*VmwareTemplateApi* | [**vmwareV6AccountsAccountUuidTemplatesUuidGet**](docs/Api/VmwareTemplateApi.md#vmwarev6accountsaccountuuidtemplatesuuidget) | **GET** /vmware/v6/accounts/{account_uuid}/templates/{uuid} | Get vmware template
*VmwareTemplateApi* | [**vmwareV6TemplateListPost**](docs/Api/VmwareTemplateApi.md#vmwarev6templatelistpost) | **POST** /vmware/v6/template/list | List vm templates
*VmwareTimezoneApi* | [**vmwareV6TimezoneListPost**](docs/Api/VmwareTimezoneApi.md#vmwarev6timezonelistpost) | **POST** /vmware/v6/timezone/list | List all timezones
*VmwareVmApi* | [**vmwareV6AccountsAccountUuidVmsUuidGet**](docs/Api/VmwareVmApi.md#vmwarev6accountsaccountuuidvmsuuidget) | **GET** /vmware/v6/accounts/{account_uuid}/vms/{uuid} | Get vmware vm
*VmwareVmApi* | [**vmwareV6VmListPost**](docs/Api/VmwareVmApi.md#vmwarev6vmlistpost) | **POST** /vmware/v6/vm/list | List all virtual machines
*VolumeGroupsApi* | [**volumeGroupsListPost**](docs/Api/VolumeGroupsApi.md#volumegroupslistpost) | **POST** /volume_groups/list | Get a list of existing volume_groups
*VolumeGroupsApi* | [**volumeGroupsPost**](docs/Api/VolumeGroupsApi.md#volumegroupspost) | **POST** /volume_groups | Create a new volume_group
*VolumeGroupsApi* | [**volumeGroupsUuidDelete**](docs/Api/VolumeGroupsApi.md#volumegroupsuuiddelete) | **DELETE** /volume_groups/{uuid} | Delete a existing volume_group
*VolumeGroupsApi* | [**volumeGroupsUuidGet**](docs/Api/VolumeGroupsApi.md#volumegroupsuuidget) | **GET** /volume_groups/{uuid} | Get a existing volume_group
*VolumeGroupsApi* | [**volumeGroupsUuidPut**](docs/Api/VolumeGroupsApi.md#volumegroupsuuidput) | **PUT** /volume_groups/{uuid} | Update a existing volume_group
*VpcApi* | [**vpcsUuidRouteTablesGet**](docs/Api/VpcApi.md#vpcsuuidroutetablesget) | **GET** /vpcs/{uuid}/route_tables | Get a existing vpc_route_table
*VpcApi* | [**vpcsUuidRouteTablesPut**](docs/Api/VpcApi.md#vpcsuuidroutetablesput) | **PUT** /vpcs/{uuid}/route_tables | Update a existing vpc_route_table
*VpnConnectionApi* | [**vpnConnectionsListPost**](docs/Api/VpnConnectionApi.md#vpnconnectionslistpost) | **POST** /vpn_connections/list | Get a list of existing vpn_connections
*VpnConnectionApi* | [**vpnConnectionsPost**](docs/Api/VpnConnectionApi.md#vpnconnectionspost) | **POST** /vpn_connections | Create a new vpn_connection
*VpnConnectionApi* | [**vpnConnectionsUuidDelete**](docs/Api/VpnConnectionApi.md#vpnconnectionsuuiddelete) | **DELETE** /vpn_connections/{uuid} | Delete a existing vpn_connection
*VpnConnectionApi* | [**vpnConnectionsUuidGet**](docs/Api/VpnConnectionApi.md#vpnconnectionsuuidget) | **GET** /vpn_connections/{uuid} | Get a existing vpn_connection
*VpnConnectionApi* | [**vpnConnectionsUuidPut**](docs/Api/VpnConnectionApi.md#vpnconnectionsuuidput) | **PUT** /vpn_connections/{uuid} | Update a existing vpn_connection
*VpnConnectionApi* | [**vpnConnectionsUuidVendorConfigGet**](docs/Api/VpnConnectionApi.md#vpnconnectionsuuidvendorconfigget) | **GET** /vpn_connections/{uuid}/vendor_config | Vendor devices for which configuration steps can be downloaded.
*VpnConnectionApi* | [**vpnConnectionsUuidVendorConfigNameGet**](docs/Api/VpnConnectionApi.md#vpnconnectionsuuidvendorconfignameget) | **GET** /vpn_connections/{uuid}/vendor_config/{name} | Download vendor device configuration steps.
*VpnConnectionApi* | [**vpnConnectionsUuidVendorConfigNameVersionGet**](docs/Api/VpnConnectionApi.md#vpnconnectionsuuidvendorconfignameversionget) | **GET** /vpn_connections/{uuid}/vendor_config/{name}/{version} | Download vendor device configuration steps.
*VpnGatewayApi* | [**vpnGatewaysListPost**](docs/Api/VpnGatewayApi.md#vpngatewayslistpost) | **POST** /vpn_gateways/list | Get a list of existing vpn_gateways
*VpnGatewayApi* | [**vpnGatewaysPost**](docs/Api/VpnGatewayApi.md#vpngatewayspost) | **POST** /vpn_gateways | Create a new vpn_gateway
*VpnGatewayApi* | [**vpnGatewaysUuidDelete**](docs/Api/VpnGatewayApi.md#vpngatewaysuuiddelete) | **DELETE** /vpn_gateways/{uuid} | Delete a existing vpn_gateway
*VpnGatewayApi* | [**vpnGatewaysUuidGet**](docs/Api/VpnGatewayApi.md#vpngatewaysuuidget) | **GET** /vpn_gateways/{uuid} | Get a existing vpn_gateway
*VpnGatewayApi* | [**vpnGatewaysUuidPut**](docs/Api/VpnGatewayApi.md#vpngatewaysuuidput) | **PUT** /vpn_gateways/{uuid} | Update a existing vpn_gateway
*WhatifApi* | [**capacityPlanningRecommendationsPost**](docs/Api/WhatifApi.md#capacityplanningrecommendationspost) | **POST** /capacity_planning/recommendations | Recommend nodes for scenario.
*WhatifApi* | [**capacityPlanningRecommendationsTaskUuidGet**](docs/Api/WhatifApi.md#capacityplanningrecommendationstaskuuidget) | **GET** /capacity_planning/recommendations/{task_uuid} | Get scenario runway and recommendation
*WhatifApi* | [**capacityPlanningReportsPost**](docs/Api/WhatifApi.md#capacityplanningreportspost) | **POST** /capacity_planning/reports | Generate scenario summary pdf report
*WhatifApi* | [**capacityPlanningReportsTaskUuidGet**](docs/Api/WhatifApi.md#capacityplanningreportstaskuuidget) | **GET** /capacity_planning/reports/{task_uuid} | Get scenario summary pdf report
*WhatifApi* | [**capacityPlanningScenariosGet**](docs/Api/WhatifApi.md#capacityplanningscenariosget) | **GET** /capacity_planning/scenarios | Get scenarios name and uuid with pagination
*WhatifApi* | [**capacityPlanningScenariosPost**](docs/Api/WhatifApi.md#capacityplanningscenariospost) | **POST** /capacity_planning/scenarios | Create a scenario
*WhatifApi* | [**capacityPlanningScenariosUuidDelete**](docs/Api/WhatifApi.md#capacityplanningscenariosuuiddelete) | **DELETE** /capacity_planning/scenarios/{uuid} | Delete scenario
*WhatifApi* | [**capacityPlanningScenariosUuidGet**](docs/Api/WhatifApi.md#capacityplanningscenariosuuidget) | **GET** /capacity_planning/scenarios/{uuid} | Get scenario with uuid
*WhatifApi* | [**capacityPlanningScenariosUuidPut**](docs/Api/WhatifApi.md#capacityplanningscenariosuuidput) | **PUT** /capacity_planning/scenarios/{uuid} | Update scenario

## Models

- [ADRule](docs/Model/ADRule.md)
- [ADRule1](docs/Model/ADRule1.md)
- [AccessControlPolicy](docs/Model/AccessControlPolicy.md)
- [AccessControlPolicyDefStatus](docs/Model/AccessControlPolicyDefStatus.md)
- [AccessControlPolicyDetail](docs/Model/AccessControlPolicyDetail.md)
- [AccessControlPolicyDetailFilterList](docs/Model/AccessControlPolicyDetailFilterList.md)
- [AccessControlPolicyInput](docs/Model/AccessControlPolicyInput.md)
- [AccessControlPolicyIntentInput](docs/Model/AccessControlPolicyIntentInput.md)
- [AccessControlPolicyIntentResource](docs/Model/AccessControlPolicyIntentResource.md)
- [AccessControlPolicyIntentResponse](docs/Model/AccessControlPolicyIntentResponse.md)
- [AccessControlPolicyListIntentResponse](docs/Model/AccessControlPolicyListIntentResponse.md)
- [AccessControlPolicyListMetadata](docs/Model/AccessControlPolicyListMetadata.md)
- [AccessControlPolicyListMetadataOutput](docs/Model/AccessControlPolicyListMetadataOutput.md)
- [AccessControlPolicyMetadata](docs/Model/AccessControlPolicyMetadata.md)
- [AccessControlPolicyReference](docs/Model/AccessControlPolicyReference.md)
- [AccessControlPolicyResources](docs/Model/AccessControlPolicyResources.md)
- [AccessControlPolicyResources1](docs/Model/AccessControlPolicyResources1.md)
- [AccessControlPolicyStatus](docs/Model/AccessControlPolicyStatus.md)
- [Account](docs/Model/Account.md)
- [AccountDefStatus](docs/Model/AccountDefStatus.md)
- [AccountDetails](docs/Model/AccountDetails.md)
- [AccountIntentInput](docs/Model/AccountIntentInput.md)
- [AccountIntentResource](docs/Model/AccountIntentResource.md)
- [AccountIntentResponse](docs/Model/AccountIntentResponse.md)
- [AccountListIntentResponse](docs/Model/AccountListIntentResponse.md)
- [AccountListMetadata](docs/Model/AccountListMetadata.md)
- [AccountListMetadataOutput](docs/Model/AccountListMetadataOutput.md)
- [AccountMetadata](docs/Model/AccountMetadata.md)
- [AccountReference](docs/Model/AccountReference.md)
- [AccountReferenceUpload](docs/Model/AccountReferenceUpload.md)
- [AccountResources](docs/Model/AccountResources.md)
- [AccountResourcesDefStatus](docs/Model/AccountResourcesDefStatus.md)
- [AccountStatus](docs/Model/AccountStatus.md)
- [ActionInstanceObject](docs/Model/ActionInstanceObject.md)
- [ActionResult](docs/Model/ActionResult.md)
- [ActionRule](docs/Model/ActionRule.md)
- [ActionRuleDefStatus](docs/Model/ActionRuleDefStatus.md)
- [ActionRuleIntentInput](docs/Model/ActionRuleIntentInput.md)
- [ActionRuleIntentResource](docs/Model/ActionRuleIntentResource.md)
- [ActionRuleIntentResponse](docs/Model/ActionRuleIntentResponse.md)
- [ActionRuleListIntentResponse](docs/Model/ActionRuleListIntentResponse.md)
- [ActionRuleListMetadata](docs/Model/ActionRuleListMetadata.md)
- [ActionRuleListMetadataOutput](docs/Model/ActionRuleListMetadataOutput.md)
- [ActionRuleMetadata](docs/Model/ActionRuleMetadata.md)
- [ActionRuleReference](docs/Model/ActionRuleReference.md)
- [ActionRuleResources](docs/Model/ActionRuleResources.md)
- [ActionRuleResult](docs/Model/ActionRuleResult.md)
- [ActionRuleResultActionInput](docs/Model/ActionRuleResultActionInput.md)
- [ActionRuleResultDefStatus](docs/Model/ActionRuleResultDefStatus.md)
- [ActionRuleResultIntentInput](docs/Model/ActionRuleResultIntentInput.md)
- [ActionRuleResultIntentResource](docs/Model/ActionRuleResultIntentResource.md)
- [ActionRuleResultIntentResponse](docs/Model/ActionRuleResultIntentResponse.md)
- [ActionRuleResultListIntentResponse](docs/Model/ActionRuleResultListIntentResponse.md)
- [ActionRuleResultListMetadata](docs/Model/ActionRuleResultListMetadata.md)
- [ActionRuleResultListMetadataOutput](docs/Model/ActionRuleResultListMetadataOutput.md)
- [ActionRuleResultMetadata](docs/Model/ActionRuleResultMetadata.md)
- [ActionRuleResultReference](docs/Model/ActionRuleResultReference.md)
- [ActionRuleResultResources](docs/Model/ActionRuleResultResources.md)
- [ActionRuleResultStatus](docs/Model/ActionRuleResultStatus.md)
- [ActionRuleStatus](docs/Model/ActionRuleStatus.md)
- [ActionRuleTriggerInput](docs/Model/ActionRuleTriggerInput.md)
- [ActionRuleValidationInput](docs/Model/ActionRuleValidationInput.md)
- [ActionRuleXPilotParams](docs/Model/ActionRuleXPilotParams.md)
- [ActionServiceComponentType](docs/Model/ActionServiceComponentType.md)
- [ActionServiceFileValue](docs/Model/ActionServiceFileValue.md)
- [ActionServiceParamValue](docs/Model/ActionServiceParamValue.md)
- [ActionTemplate](docs/Model/ActionTemplate.md)
- [ActionTemplateDefStatus](docs/Model/ActionTemplateDefStatus.md)
- [ActionTemplateIntentInput](docs/Model/ActionTemplateIntentInput.md)
- [ActionTemplateIntentResource](docs/Model/ActionTemplateIntentResource.md)
- [ActionTemplateIntentResponse](docs/Model/ActionTemplateIntentResponse.md)
- [ActionTemplateListIntentResponse](docs/Model/ActionTemplateListIntentResponse.md)
- [ActionTemplateListMetadata](docs/Model/ActionTemplateListMetadata.md)
- [ActionTemplateListMetadataOutput](docs/Model/ActionTemplateListMetadataOutput.md)
- [ActionTemplateMetadata](docs/Model/ActionTemplateMetadata.md)
- [ActionTemplateReference](docs/Model/ActionTemplateReference.md)
- [ActionTemplateResources](docs/Model/ActionTemplateResources.md)
- [ActionTemplateStatus](docs/Model/ActionTemplateStatus.md)
- [ActionTriggerType](docs/Model/ActionTriggerType.md)
- [ActionTriggerTypeDefStatus](docs/Model/ActionTriggerTypeDefStatus.md)
- [ActionTriggerTypeIntentInput](docs/Model/ActionTriggerTypeIntentInput.md)
- [ActionTriggerTypeIntentResource](docs/Model/ActionTriggerTypeIntentResource.md)
- [ActionTriggerTypeIntentResponse](docs/Model/ActionTriggerTypeIntentResponse.md)
- [ActionTriggerTypeListIntentResponse](docs/Model/ActionTriggerTypeListIntentResponse.md)
- [ActionTriggerTypeListMetadata](docs/Model/ActionTriggerTypeListMetadata.md)
- [ActionTriggerTypeListMetadataOutput](docs/Model/ActionTriggerTypeListMetadataOutput.md)
- [ActionTriggerTypeMetadata](docs/Model/ActionTriggerTypeMetadata.md)
- [ActionTriggerTypeReference](docs/Model/ActionTriggerTypeReference.md)
- [ActionTriggerTypeStatus](docs/Model/ActionTriggerTypeStatus.md)
- [ActionType](docs/Model/ActionType.md)
- [ActionTypeDefStatus](docs/Model/ActionTypeDefStatus.md)
- [ActionTypeIntentInput](docs/Model/ActionTypeIntentInput.md)
- [ActionTypeIntentResource](docs/Model/ActionTypeIntentResource.md)
- [ActionTypeIntentResponse](docs/Model/ActionTypeIntentResponse.md)
- [ActionTypeListIntentResponse](docs/Model/ActionTypeListIntentResponse.md)
- [ActionTypeListMetadata](docs/Model/ActionTypeListMetadata.md)
- [ActionTypeListMetadataOutput](docs/Model/ActionTypeListMetadataOutput.md)
- [ActionTypeMetadata](docs/Model/ActionTypeMetadata.md)
- [ActionTypeReference](docs/Model/ActionTypeReference.md)
- [ActionTypeStatus](docs/Model/ActionTypeStatus.md)
- [Address](docs/Model/Address.md)
- [AddressGroup](docs/Model/AddressGroup.md)
- [AddressGroupListMetadata](docs/Model/AddressGroupListMetadata.md)
- [AddressGroupListResponse](docs/Model/AddressGroupListResponse.md)
- [AddressGroupReference](docs/Model/AddressGroupReference.md)
- [AddressGroupResponse](docs/Model/AddressGroupResponse.md)
- [AddressGroupResponseResource](docs/Model/AddressGroupResponseResource.md)
- [AdjustedWorkload](docs/Model/AdjustedWorkload.md)
- [AffectedEntity](docs/Model/AffectedEntity.md)
- [AffectedEntityConflictingProtectionRuleListInner](docs/Model/AffectedEntityConflictingProtectionRuleListInner.md)
- [AffectedEntityList](docs/Model/AffectedEntityList.md)
- [Alert](docs/Model/Alert.md)
- [AlertActionInput](docs/Model/AlertActionInput.md)
- [AlertDefStatus](docs/Model/AlertDefStatus.md)
- [AlertIntentInput](docs/Model/AlertIntentInput.md)
- [AlertIntentResource](docs/Model/AlertIntentResource.md)
- [AlertIntentResponse](docs/Model/AlertIntentResponse.md)
- [AlertListIntentResponse](docs/Model/AlertListIntentResponse.md)
- [AlertListMetadata](docs/Model/AlertListMetadata.md)
- [AlertListMetadataOutput](docs/Model/AlertListMetadataOutput.md)
- [AlertMetadata](docs/Model/AlertMetadata.md)
- [AlertNotificationInput](docs/Model/AlertNotificationInput.md)
- [AlertReference](docs/Model/AlertReference.md)
- [AlertResources](docs/Model/AlertResources.md)
- [AlertResourcesSeverityTrailListInner](docs/Model/AlertResourcesSeverityTrailListInner.md)
- [AlertResourcesSourceEntity](docs/Model/AlertResourcesSourceEntity.md)
- [AlertState](docs/Model/AlertState.md)
- [AlertStatus](docs/Model/AlertStatus.md)
- [ApiRequest](docs/Model/ApiRequest.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [App](docs/Model/App.md)
- [AppActionInput](docs/Model/AppActionInput.md)
- [AppActionInputUpload](docs/Model/AppActionInputUpload.md)
- [AppActionResponse](docs/Model/AppActionResponse.md)
- [AppActionResponseDownload](docs/Model/AppActionResponseDownload.md)
- [AppActionrunArgs](docs/Model/AppActionrunArgs.md)
- [AppActionrunInput](docs/Model/AppActionrunInput.md)
- [AppActionrunResponse](docs/Model/AppActionrunResponse.md)
- [AppActionrunSpec](docs/Model/AppActionrunSpec.md)
- [AppActionrunStatus](docs/Model/AppActionrunStatus.md)
- [AppBlueprintDeploymentReference](docs/Model/AppBlueprintDeploymentReference.md)
- [AppBlueprintDeploymentReferenceUpload](docs/Model/AppBlueprintDeploymentReferenceUpload.md)
- [AppCostInput](docs/Model/AppCostInput.md)
- [AppCostInputUpload](docs/Model/AppCostInputUpload.md)
- [AppCostResponse](docs/Model/AppCostResponse.md)
- [AppCostResponseDownload](docs/Model/AppCostResponseDownload.md)
- [AppCredentialInput](docs/Model/AppCredentialInput.md)
- [AppCredentialInputUpload](docs/Model/AppCredentialInputUpload.md)
- [AppCredentialReference](docs/Model/AppCredentialReference.md)
- [AppCredentialReferenceUpload](docs/Model/AppCredentialReferenceUpload.md)
- [AppCredentialResponse](docs/Model/AppCredentialResponse.md)
- [AppCredentialResponseDownload](docs/Model/AppCredentialResponseDownload.md)
- [AppCustomIntentInput](docs/Model/AppCustomIntentInput.md)
- [AppDefStatus](docs/Model/AppDefStatus.md)
- [AppDeploymentElement](docs/Model/AppDeploymentElement.md)
- [AppDeploymentInput](docs/Model/AppDeploymentInput.md)
- [AppDeploymentReference](docs/Model/AppDeploymentReference.md)
- [AppDeploymentReferenceUpload](docs/Model/AppDeploymentReferenceUpload.md)
- [AppDeploymentResponse](docs/Model/AppDeploymentResponse.md)
- [AppIntentInput](docs/Model/AppIntentInput.md)
- [AppIntentResource](docs/Model/AppIntentResource.md)
- [AppIntentResponse](docs/Model/AppIntentResponse.md)
- [AppListIntentResponse](docs/Model/AppListIntentResponse.md)
- [AppListMetadata](docs/Model/AppListMetadata.md)
- [AppListMetadataOutput](docs/Model/AppListMetadataOutput.md)
- [AppMetadata](docs/Model/AppMetadata.md)
- [AppPackageElement](docs/Model/AppPackageElement.md)
- [AppPackageInput](docs/Model/AppPackageInput.md)
- [AppPackageInputUpload](docs/Model/AppPackageInputUpload.md)
- [AppPackageReference](docs/Model/AppPackageReference.md)
- [AppPackageReferenceUpload](docs/Model/AppPackageReferenceUpload.md)
- [AppPackageResponse](docs/Model/AppPackageResponse.md)
- [AppPackageResponseDownload](docs/Model/AppPackageResponseDownload.md)
- [AppProfileInput](docs/Model/AppProfileInput.md)
- [AppProfileInputUpload](docs/Model/AppProfileInputUpload.md)
- [AppProfileReference](docs/Model/AppProfileReference.md)
- [AppProfileReferenceUpload](docs/Model/AppProfileReferenceUpload.md)
- [AppProfileResponse](docs/Model/AppProfileResponse.md)
- [AppProfileResponseDownload](docs/Model/AppProfileResponseDownload.md)
- [AppPublishedServiceElement](docs/Model/AppPublishedServiceElement.md)
- [AppPublishedServiceInput](docs/Model/AppPublishedServiceInput.md)
- [AppPublishedServiceInputUpload](docs/Model/AppPublishedServiceInputUpload.md)
- [AppPublishedServiceReference](docs/Model/AppPublishedServiceReference.md)
- [AppPublishedServiceReferenceUpload](docs/Model/AppPublishedServiceReferenceUpload.md)
- [AppPublishedServiceResponse](docs/Model/AppPublishedServiceResponse.md)
- [AppPublishedServiceResponseDownload](docs/Model/AppPublishedServiceResponseDownload.md)
- [AppReference](docs/Model/AppReference.md)
- [AppResources](docs/Model/AppResources.md)
- [AppResourcesDefStatus](docs/Model/AppResourcesDefStatus.md)
- [AppRule](docs/Model/AppRule.md)
- [AppRule1](docs/Model/AppRule1.md)
- [AppRunbookInput](docs/Model/AppRunbookInput.md)
- [AppRunbookInputUpload](docs/Model/AppRunbookInputUpload.md)
- [AppRunbookResponse](docs/Model/AppRunbookResponse.md)
- [AppRunbookResponseDownload](docs/Model/AppRunbookResponseDownload.md)
- [AppRunlogArchiveListResponse](docs/Model/AppRunlogArchiveListResponse.md)
- [AppRunlogArchiveResponse](docs/Model/AppRunlogArchiveResponse.md)
- [AppRunlogList](docs/Model/AppRunlogList.md)
- [AppRunlogListMetadata](docs/Model/AppRunlogListMetadata.md)
- [AppRunlogListMetadataOutput](docs/Model/AppRunlogListMetadataOutput.md)
- [AppRunlogMetadata](docs/Model/AppRunlogMetadata.md)
- [AppRunlogOutput](docs/Model/AppRunlogOutput.md)
- [AppRunlogOutputResponse](docs/Model/AppRunlogOutputResponse.md)
- [AppRunlogOutputStatus](docs/Model/AppRunlogOutputStatus.md)
- [AppRunlogReference](docs/Model/AppRunlogReference.md)
- [AppRunlogResources](docs/Model/AppRunlogResources.md)
- [AppRunlogResponse](docs/Model/AppRunlogResponse.md)
- [AppRunlogStatus](docs/Model/AppRunlogStatus.md)
- [AppServiceElement](docs/Model/AppServiceElement.md)
- [AppServiceInput](docs/Model/AppServiceInput.md)
- [AppServiceInputUpload](docs/Model/AppServiceInputUpload.md)
- [AppServicePort](docs/Model/AppServicePort.md)
- [AppServiceReference](docs/Model/AppServiceReference.md)
- [AppServiceReferenceUpload](docs/Model/AppServiceReferenceUpload.md)
- [AppServiceResponse](docs/Model/AppServiceResponse.md)
- [AppServiceResponseDownload](docs/Model/AppServiceResponseDownload.md)
- [AppStatus](docs/Model/AppStatus.md)
- [AppSubstrateElement](docs/Model/AppSubstrateElement.md)
- [AppSubstrateInput](docs/Model/AppSubstrateInput.md)
- [AppSubstrateInputUpload](docs/Model/AppSubstrateInputUpload.md)
- [AppSubstrateReadinessProbe](docs/Model/AppSubstrateReadinessProbe.md)
- [AppSubstrateReadinessProbeUpload](docs/Model/AppSubstrateReadinessProbeUpload.md)
- [AppSubstrateReference](docs/Model/AppSubstrateReference.md)
- [AppSubstrateReferenceUpload](docs/Model/AppSubstrateReferenceUpload.md)
- [AppSubstrateResponse](docs/Model/AppSubstrateResponse.md)
- [AppSubstrateResponseDownload](docs/Model/AppSubstrateResponseDownload.md)
- [AppTask](docs/Model/AppTask.md)
- [AppTaskDefStatus](docs/Model/AppTaskDefStatus.md)
- [AppTaskInput](docs/Model/AppTaskInput.md)
- [AppTaskInputUpload](docs/Model/AppTaskInputUpload.md)
- [AppTaskIntentInput](docs/Model/AppTaskIntentInput.md)
- [AppTaskIntentResource](docs/Model/AppTaskIntentResource.md)
- [AppTaskIntentResponse](docs/Model/AppTaskIntentResponse.md)
- [AppTaskListIntentResponse](docs/Model/AppTaskListIntentResponse.md)
- [AppTaskListMetadata](docs/Model/AppTaskListMetadata.md)
- [AppTaskListMetadataOutput](docs/Model/AppTaskListMetadataOutput.md)
- [AppTaskMetadata](docs/Model/AppTaskMetadata.md)
- [AppTaskReference](docs/Model/AppTaskReference.md)
- [AppTaskReferenceUpload](docs/Model/AppTaskReferenceUpload.md)
- [AppTaskResources](docs/Model/AppTaskResources.md)
- [AppTaskResourcesDefStatus](docs/Model/AppTaskResourcesDefStatus.md)
- [AppTaskResponse](docs/Model/AppTaskResponse.md)
- [AppTaskResponseDownload](docs/Model/AppTaskResponseDownload.md)
- [AppTaskShare](docs/Model/AppTaskShare.md)
- [AppTaskShareIntentInput](docs/Model/AppTaskShareIntentInput.md)
- [AppTaskShareResources](docs/Model/AppTaskShareResources.md)
- [AppTaskStatus](docs/Model/AppTaskStatus.md)
- [AppVariableInput](docs/Model/AppVariableInput.md)
- [AppVariableInputUpload](docs/Model/AppVariableInputUpload.md)
- [AppVariableResponse](docs/Model/AppVariableResponse.md)
- [AppVariableResponseDownload](docs/Model/AppVariableResponseDownload.md)
- [AssignmentRule](docs/Model/AssignmentRule.md)
- [AttachmentReferenceInput](docs/Model/AttachmentReferenceInput.md)
- [AttachmentReferenceOutput](docs/Model/AttachmentReferenceOutput.md)
- [Attribute](docs/Model/Attribute.md)
- [AuditDef](docs/Model/AuditDef.md)
- [AuditListMetadata](docs/Model/AuditListMetadata.md)
- [AuditListMetadataOutput](docs/Model/AuditListMetadataOutput.md)
- [AuditListResponse](docs/Model/AuditListResponse.md)
- [AuditMetadata](docs/Model/AuditMetadata.md)
- [AuditParameters](docs/Model/AuditParameters.md)
- [AuditReference](docs/Model/AuditReference.md)
- [AuditResources](docs/Model/AuditResources.md)
- [AuditResponse](docs/Model/AuditResponse.md)
- [AuditStatus](docs/Model/AuditStatus.md)
- [AuditUser](docs/Model/AuditUser.md)
- [AutoCompletion](docs/Model/AutoCompletion.md)
- [AvailabilityZone](docs/Model/AvailabilityZone.md)
- [AvailabilityZoneDefStatus](docs/Model/AvailabilityZoneDefStatus.md)
- [AvailabilityZoneInformation](docs/Model/AvailabilityZoneInformation.md)
- [AvailabilityZoneIntentInput](docs/Model/AvailabilityZoneIntentInput.md)
- [AvailabilityZoneIntentResource](docs/Model/AvailabilityZoneIntentResource.md)
- [AvailabilityZoneIntentResponse](docs/Model/AvailabilityZoneIntentResponse.md)
- [AvailabilityZoneListIntentResponse](docs/Model/AvailabilityZoneListIntentResponse.md)
- [AvailabilityZoneListMetadata](docs/Model/AvailabilityZoneListMetadata.md)
- [AvailabilityZoneListMetadataOutput](docs/Model/AvailabilityZoneListMetadataOutput.md)
- [AvailabilityZoneMetadata](docs/Model/AvailabilityZoneMetadata.md)
- [AvailabilityZoneReference](docs/Model/AvailabilityZoneReference.md)
- [AvailabilityZoneResources](docs/Model/AvailabilityZoneResources.md)
- [AvailabilityZoneResourcesSpec](docs/Model/AvailabilityZoneResourcesSpec.md)
- [AvailabilityZoneResourcesSpecCredentials](docs/Model/AvailabilityZoneResourcesSpecCredentials.md)
- [AvailabilityZoneResourcesSpecCredentialsPc](docs/Model/AvailabilityZoneResourcesSpecCredentialsPc.md)
- [AvailabilityZoneStatus](docs/Model/AvailabilityZoneStatus.md)
- [AwsAvailabilityZoneDefStatus](docs/Model/AwsAvailabilityZoneDefStatus.md)
- [AwsAvailabilityZoneIntentResource](docs/Model/AwsAvailabilityZoneIntentResource.md)
- [AwsAvailabilityZoneListIntentResponse](docs/Model/AwsAvailabilityZoneListIntentResponse.md)
- [AwsAvailabilityZoneListMetadata](docs/Model/AwsAvailabilityZoneListMetadata.md)
- [AwsAvailabilityZoneListMetadataOutput](docs/Model/AwsAvailabilityZoneListMetadataOutput.md)
- [AwsAvailabilityZoneMetadata](docs/Model/AwsAvailabilityZoneMetadata.md)
- [AwsAvailabilityZoneResourcesDefStatus](docs/Model/AwsAvailabilityZoneResourcesDefStatus.md)
- [AwsAvailabilityZoneStatus](docs/Model/AwsAvailabilityZoneStatus.md)
- [AwsBlockDeviceMap](docs/Model/AwsBlockDeviceMap.md)
- [AwsBlockDeviceMapOutputStatus](docs/Model/AwsBlockDeviceMapOutputStatus.md)
- [AwsCredentials](docs/Model/AwsCredentials.md)
- [AwsElasticIpDefStatus](docs/Model/AwsElasticIpDefStatus.md)
- [AwsElasticIpIntentResource](docs/Model/AwsElasticIpIntentResource.md)
- [AwsElasticIpListIntentResponse](docs/Model/AwsElasticIpListIntentResponse.md)
- [AwsElasticIpListMetadata](docs/Model/AwsElasticIpListMetadata.md)
- [AwsElasticIpListMetadataOutput](docs/Model/AwsElasticIpListMetadataOutput.md)
- [AwsElasticIpMetadata](docs/Model/AwsElasticIpMetadata.md)
- [AwsElasticIpResourcesDefStatus](docs/Model/AwsElasticIpResourcesDefStatus.md)
- [AwsElasticIpStatus](docs/Model/AwsElasticIpStatus.md)
- [AwsImageDefStatus](docs/Model/AwsImageDefStatus.md)
- [AwsImageIntentResource](docs/Model/AwsImageIntentResource.md)
- [AwsImageListIntentResponse](docs/Model/AwsImageListIntentResponse.md)
- [AwsImageListMetadata](docs/Model/AwsImageListMetadata.md)
- [AwsImageListMetadataOutput](docs/Model/AwsImageListMetadataOutput.md)
- [AwsImageMetadata](docs/Model/AwsImageMetadata.md)
- [AwsImageResourcesDefStatus](docs/Model/AwsImageResourcesDefStatus.md)
- [AwsImageStatus](docs/Model/AwsImageStatus.md)
- [AwsInstanceDisk](docs/Model/AwsInstanceDisk.md)
- [AwsInstanceDiskOutputStatus](docs/Model/AwsInstanceDiskOutputStatus.md)
- [AwsKeyPairDefStatus](docs/Model/AwsKeyPairDefStatus.md)
- [AwsKeyPairIntentResource](docs/Model/AwsKeyPairIntentResource.md)
- [AwsKeyPairListIntentResponse](docs/Model/AwsKeyPairListIntentResponse.md)
- [AwsKeyPairListMetadata](docs/Model/AwsKeyPairListMetadata.md)
- [AwsKeyPairListMetadataOutput](docs/Model/AwsKeyPairListMetadataOutput.md)
- [AwsKeyPairMetadata](docs/Model/AwsKeyPairMetadata.md)
- [AwsKeyPairResourcesDefStatus](docs/Model/AwsKeyPairResourcesDefStatus.md)
- [AwsKeyPairStatus](docs/Model/AwsKeyPairStatus.md)
- [AwsMachineTypeDefStatus](docs/Model/AwsMachineTypeDefStatus.md)
- [AwsMachineTypeIntentResource](docs/Model/AwsMachineTypeIntentResource.md)
- [AwsMachineTypeListIntentResponse](docs/Model/AwsMachineTypeListIntentResponse.md)
- [AwsMachineTypeListMetadata](docs/Model/AwsMachineTypeListMetadata.md)
- [AwsMachineTypeListMetadataOutput](docs/Model/AwsMachineTypeListMetadataOutput.md)
- [AwsMachineTypeMetadata](docs/Model/AwsMachineTypeMetadata.md)
- [AwsMachineTypeResourcesDefStatus](docs/Model/AwsMachineTypeResourcesDefStatus.md)
- [AwsMachineTypeStatus](docs/Model/AwsMachineTypeStatus.md)
- [AwsRegionDefStatus](docs/Model/AwsRegionDefStatus.md)
- [AwsRegionIntentResource](docs/Model/AwsRegionIntentResource.md)
- [AwsRegionListIntentResponse](docs/Model/AwsRegionListIntentResponse.md)
- [AwsRegionListMetadata](docs/Model/AwsRegionListMetadata.md)
- [AwsRegionListMetadataOutput](docs/Model/AwsRegionListMetadataOutput.md)
- [AwsRegionMetadata](docs/Model/AwsRegionMetadata.md)
- [AwsRegionResourcesDefStatus](docs/Model/AwsRegionResourcesDefStatus.md)
- [AwsRegionStatus](docs/Model/AwsRegionStatus.md)
- [AwsRoleDefStatus](docs/Model/AwsRoleDefStatus.md)
- [AwsRoleIntentResource](docs/Model/AwsRoleIntentResource.md)
- [AwsRoleListIntentResponse](docs/Model/AwsRoleListIntentResponse.md)
- [AwsRoleListMetadata](docs/Model/AwsRoleListMetadata.md)
- [AwsRoleListMetadataOutput](docs/Model/AwsRoleListMetadataOutput.md)
- [AwsRoleMetadata](docs/Model/AwsRoleMetadata.md)
- [AwsRoleResourcesDefStatus](docs/Model/AwsRoleResourcesDefStatus.md)
- [AwsRoleStatus](docs/Model/AwsRoleStatus.md)
- [AwsSecurityGroupDefStatus](docs/Model/AwsSecurityGroupDefStatus.md)
- [AwsSecurityGroupIntentResource](docs/Model/AwsSecurityGroupIntentResource.md)
- [AwsSecurityGroupListInner](docs/Model/AwsSecurityGroupListInner.md)
- [AwsSecurityGroupListIntentResponse](docs/Model/AwsSecurityGroupListIntentResponse.md)
- [AwsSecurityGroupListMetadata](docs/Model/AwsSecurityGroupListMetadata.md)
- [AwsSecurityGroupListMetadataOutput](docs/Model/AwsSecurityGroupListMetadataOutput.md)
- [AwsSecurityGroupMetadata](docs/Model/AwsSecurityGroupMetadata.md)
- [AwsSecurityGroupResourcesDefStatus](docs/Model/AwsSecurityGroupResourcesDefStatus.md)
- [AwsSecurityGroupStatus](docs/Model/AwsSecurityGroupStatus.md)
- [AwsSubnetDefStatus](docs/Model/AwsSubnetDefStatus.md)
- [AwsSubnetIntentResource](docs/Model/AwsSubnetIntentResource.md)
- [AwsSubnetListIntentResponse](docs/Model/AwsSubnetListIntentResponse.md)
- [AwsSubnetListMetadata](docs/Model/AwsSubnetListMetadata.md)
- [AwsSubnetListMetadataOutput](docs/Model/AwsSubnetListMetadataOutput.md)
- [AwsSubnetMetadata](docs/Model/AwsSubnetMetadata.md)
- [AwsSubnetResourcesDefStatus](docs/Model/AwsSubnetResourcesDefStatus.md)
- [AwsSubnetStatus](docs/Model/AwsSubnetStatus.md)
- [AwsTagListInner](docs/Model/AwsTagListInner.md)
- [AwsVm](docs/Model/AwsVm.md)
- [AwsVmDefStatus](docs/Model/AwsVmDefStatus.md)
- [AwsVmIntentInput](docs/Model/AwsVmIntentInput.md)
- [AwsVmIntentResource](docs/Model/AwsVmIntentResource.md)
- [AwsVmIntentResponse](docs/Model/AwsVmIntentResponse.md)
- [AwsVmListIntentResponse](docs/Model/AwsVmListIntentResponse.md)
- [AwsVmListMetadata](docs/Model/AwsVmListMetadata.md)
- [AwsVmListMetadataOutput](docs/Model/AwsVmListMetadataOutput.md)
- [AwsVmMetadata](docs/Model/AwsVmMetadata.md)
- [AwsVmReference](docs/Model/AwsVmReference.md)
- [AwsVmResources](docs/Model/AwsVmResources.md)
- [AwsVmResourcesDefStatus](docs/Model/AwsVmResourcesDefStatus.md)
- [AwsVmStatus](docs/Model/AwsVmStatus.md)
- [AwsVolumeTypeDefStatus](docs/Model/AwsVolumeTypeDefStatus.md)
- [AwsVolumeTypeIntentResource](docs/Model/AwsVolumeTypeIntentResource.md)
- [AwsVolumeTypeListIntentResponse](docs/Model/AwsVolumeTypeListIntentResponse.md)
- [AwsVolumeTypeListMetadata](docs/Model/AwsVolumeTypeListMetadata.md)
- [AwsVolumeTypeListMetadataOutput](docs/Model/AwsVolumeTypeListMetadataOutput.md)
- [AwsVolumeTypeMetadata](docs/Model/AwsVolumeTypeMetadata.md)
- [AwsVolumeTypeResourcesDefStatus](docs/Model/AwsVolumeTypeResourcesDefStatus.md)
- [AwsVolumeTypeStatus](docs/Model/AwsVolumeTypeStatus.md)
- [AwsVpcDefStatus](docs/Model/AwsVpcDefStatus.md)
- [AwsVpcIntentResource](docs/Model/AwsVpcIntentResource.md)
- [AwsVpcListIntentResponse](docs/Model/AwsVpcListIntentResponse.md)
- [AwsVpcListMetadata](docs/Model/AwsVpcListMetadata.md)
- [AwsVpcListMetadataOutput](docs/Model/AwsVpcListMetadataOutput.md)
- [AwsVpcMetadata](docs/Model/AwsVpcMetadata.md)
- [AwsVpcResourcesDefStatus](docs/Model/AwsVpcResourcesDefStatus.md)
- [AwsVpcStatus](docs/Model/AwsVpcStatus.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [BasicCredential](docs/Model/BasicCredential.md)
- [BatchListMetadata](docs/Model/BatchListMetadata.md)
- [BatchListMetadataOutput](docs/Model/BatchListMetadataOutput.md)
- [BatchMetadata](docs/Model/BatchMetadata.md)
- [BatchReference](docs/Model/BatchReference.md)
- [BatchRequest](docs/Model/BatchRequest.md)
- [BatchResponse](docs/Model/BatchResponse.md)
- [BatchStatus](docs/Model/BatchStatus.md)
- [BgpConfig](docs/Model/BgpConfig.md)
- [BgpConfigStatus](docs/Model/BgpConfigStatus.md)
- [BillingInvoice](docs/Model/BillingInvoice.md)
- [BillingInvoiceItem](docs/Model/BillingInvoiceItem.md)
- [BillingInvoiceList](docs/Model/BillingInvoiceList.md)
- [BillingSummary](docs/Model/BillingSummary.md)
- [BillingSummaryChargeGroup](docs/Model/BillingSummaryChargeGroup.md)
- [Blackout](docs/Model/Blackout.md)
- [BlackoutDefStatus](docs/Model/BlackoutDefStatus.md)
- [BlackoutIntentInput](docs/Model/BlackoutIntentInput.md)
- [BlackoutIntentResource](docs/Model/BlackoutIntentResource.md)
- [BlackoutIntentResponse](docs/Model/BlackoutIntentResponse.md)
- [BlackoutListIntentResponse](docs/Model/BlackoutListIntentResponse.md)
- [BlackoutListMetadata](docs/Model/BlackoutListMetadata.md)
- [BlackoutListMetadataOutput](docs/Model/BlackoutListMetadataOutput.md)
- [BlackoutMetadata](docs/Model/BlackoutMetadata.md)
- [BlackoutReference](docs/Model/BlackoutReference.md)
- [BlackoutResources](docs/Model/BlackoutResources.md)
- [BlackoutResourcesScopeEntityListInner](docs/Model/BlackoutResourcesScopeEntityListInner.md)
- [BlackoutStatus](docs/Model/BlackoutStatus.md)
- [Block](docs/Model/Block.md)
- [Blueprint](docs/Model/Blueprint.md)
- [BlueprintCloneInput](docs/Model/BlueprintCloneInput.md)
- [BlueprintCloneResponse](docs/Model/BlueprintCloneResponse.md)
- [BlueprintCustomIntentInput](docs/Model/BlueprintCustomIntentInput.md)
- [BlueprintDefStatus](docs/Model/BlueprintDefStatus.md)
- [BlueprintDependencyList](docs/Model/BlueprintDependencyList.md)
- [BlueprintDeploymentInput](docs/Model/BlueprintDeploymentInput.md)
- [BlueprintDeploymentInputUpload](docs/Model/BlueprintDeploymentInputUpload.md)
- [BlueprintDeploymentResponse](docs/Model/BlueprintDeploymentResponse.md)
- [BlueprintDeploymentResponseDownload](docs/Model/BlueprintDeploymentResponseDownload.md)
- [BlueprintDownloadDefStatus](docs/Model/BlueprintDownloadDefStatus.md)
- [BlueprintDownloadIntentResponse](docs/Model/BlueprintDownloadIntentResponse.md)
- [BlueprintDownloadResourcesDefStatus](docs/Model/BlueprintDownloadResourcesDefStatus.md)
- [BlueprintIntentInput](docs/Model/BlueprintIntentInput.md)
- [BlueprintIntentResource](docs/Model/BlueprintIntentResource.md)
- [BlueprintIntentResponse](docs/Model/BlueprintIntentResponse.md)
- [BlueprintLaunchInput](docs/Model/BlueprintLaunchInput.md)
- [BlueprintLaunchResponse](docs/Model/BlueprintLaunchResponse.md)
- [BlueprintLaunchResponseStatus](docs/Model/BlueprintLaunchResponseStatus.md)
- [BlueprintLaunchSpec](docs/Model/BlueprintLaunchSpec.md)
- [BlueprintListIntentResponse](docs/Model/BlueprintListIntentResponse.md)
- [BlueprintListMetadata](docs/Model/BlueprintListMetadata.md)
- [BlueprintListMetadataOutput](docs/Model/BlueprintListMetadataOutput.md)
- [BlueprintMarketplaceLaunchInput](docs/Model/BlueprintMarketplaceLaunchInput.md)
- [BlueprintMarketplaceLaunchResponse](docs/Model/BlueprintMarketplaceLaunchResponse.md)
- [BlueprintMarketplaceLaunchResponseStatus](docs/Model/BlueprintMarketplaceLaunchResponseStatus.md)
- [BlueprintMarketplaceLaunchSpec](docs/Model/BlueprintMarketplaceLaunchSpec.md)
- [BlueprintMetadata](docs/Model/BlueprintMetadata.md)
- [BlueprintPendingLaunchesListResponse](docs/Model/BlueprintPendingLaunchesListResponse.md)
- [BlueprintPendingLaunchesResource](docs/Model/BlueprintPendingLaunchesResource.md)
- [BlueprintPendingLaunchesResponse](docs/Model/BlueprintPendingLaunchesResponse.md)
- [BlueprintPendingLaunchesStatus](docs/Model/BlueprintPendingLaunchesStatus.md)
- [BlueprintReference](docs/Model/BlueprintReference.md)
- [BlueprintResources](docs/Model/BlueprintResources.md)
- [BlueprintResourcesDefStatus](docs/Model/BlueprintResourcesDefStatus.md)
- [BlueprintStatus](docs/Model/BlueprintStatus.md)
- [BlueprintUpload](docs/Model/BlueprintUpload.md)
- [BlueprintUploadCustomIntentInput](docs/Model/BlueprintUploadCustomIntentInput.md)
- [BlueprintUploadOutput](docs/Model/BlueprintUploadOutput.md)
- [BlueprintUploadResources](docs/Model/BlueprintUploadResources.md)
- [BrownfieldInstanceInput](docs/Model/BrownfieldInstanceInput.md)
- [BuildInfo](docs/Model/BuildInfo.md)
- [CaCert](docs/Model/CaCert.md)
- [CaChainSpec](docs/Model/CaChainSpec.md)
- [Capabilities](docs/Model/Capabilities.md)
- [Capability](docs/Model/Capability.md)
- [CapabilityDetails](docs/Model/CapabilityDetails.md)
- [CapabilityInformation](docs/Model/CapabilityInformation.md)
- [CapabilityResponse](docs/Model/CapabilityResponse.md)
- [CapabilityValue](docs/Model/CapabilityValue.md)
- [CapacityPlanningScenariosPost201Response](docs/Model/CapacityPlanningScenariosPost201Response.md)
- [CategoryFilter](docs/Model/CategoryFilter.md)
- [CategoryKey](docs/Model/CategoryKey.md)
- [CategoryKeyListResponse](docs/Model/CategoryKeyListResponse.md)
- [CategoryKeyStatus](docs/Model/CategoryKeyStatus.md)
- [CategoryListMetadata](docs/Model/CategoryListMetadata.md)
- [CategoryListMetadataOutput](docs/Model/CategoryListMetadataOutput.md)
- [CategoryMapping](docs/Model/CategoryMapping.md)
- [CategoryMappingDefStatus](docs/Model/CategoryMappingDefStatus.md)
- [CategoryMappingIntentInput](docs/Model/CategoryMappingIntentInput.md)
- [CategoryMappingIntentResource](docs/Model/CategoryMappingIntentResource.md)
- [CategoryMappingIntentResponse](docs/Model/CategoryMappingIntentResponse.md)
- [CategoryMappingListIntentResponse](docs/Model/CategoryMappingListIntentResponse.md)
- [CategoryMappingListMetadata](docs/Model/CategoryMappingListMetadata.md)
- [CategoryMappingListMetadataOutput](docs/Model/CategoryMappingListMetadataOutput.md)
- [CategoryMappingMetadata](docs/Model/CategoryMappingMetadata.md)
- [CategoryMappingReference](docs/Model/CategoryMappingReference.md)
- [CategoryMappingResources](docs/Model/CategoryMappingResources.md)
- [CategoryMappingResourcesAdMapping](docs/Model/CategoryMappingResourcesAdMapping.md)
- [CategoryMappingResourcesDefStatus](docs/Model/CategoryMappingResourcesDefStatus.md)
- [CategoryMappingResourcesDefStatusAdMapping](docs/Model/CategoryMappingResourcesDefStatusAdMapping.md)
- [CategoryMappingStatus](docs/Model/CategoryMappingStatus.md)
- [CategoryMetadata](docs/Model/CategoryMetadata.md)
- [CategoryQueryInput](docs/Model/CategoryQueryInput.md)
- [CategoryQueryResponse](docs/Model/CategoryQueryResponse.md)
- [CategoryQueryResponseMetadata](docs/Model/CategoryQueryResponseMetadata.md)
- [CategoryQueryResponseResultsInner](docs/Model/CategoryQueryResponseResultsInner.md)
- [CategoryReference](docs/Model/CategoryReference.md)
- [CategoryStatus](docs/Model/CategoryStatus.md)
- [CategoryValue](docs/Model/CategoryValue.md)
- [CategoryValueListResponse](docs/Model/CategoryValueListResponse.md)
- [CategoryValueStatus](docs/Model/CategoryValueStatus.md)
- [CauseAnalysis](docs/Model/CauseAnalysis.md)
- [Cell](docs/Model/Cell.md)
- [CellDefStatus](docs/Model/CellDefStatus.md)
- [CellIntentInput](docs/Model/CellIntentInput.md)
- [CellIntentResource](docs/Model/CellIntentResource.md)
- [CellIntentResponse](docs/Model/CellIntentResponse.md)
- [CellListIntentResponse](docs/Model/CellListIntentResponse.md)
- [CellListMetadata](docs/Model/CellListMetadata.md)
- [CellListMetadataOutput](docs/Model/CellListMetadataOutput.md)
- [CellMetadata](docs/Model/CellMetadata.md)
- [CellReference](docs/Model/CellReference.md)
- [CellResources](docs/Model/CellResources.md)
- [CellStatus](docs/Model/CellStatus.md)
- [Certificate](docs/Model/Certificate.md)
- [CertificateSpec](docs/Model/CertificateSpec.md)
- [CertificateSpecUploadInput](docs/Model/CertificateSpecUploadInput.md)
- [CertificationSigningInfo](docs/Model/CertificationSigningInfo.md)
- [ChangedRegionsListMetadata](docs/Model/ChangedRegionsListMetadata.md)
- [ChangedRegionsListMetadataOutput](docs/Model/ChangedRegionsListMetadataOutput.md)
- [ChangedRegionsMetadata](docs/Model/ChangedRegionsMetadata.md)
- [ChangedRegionsReference](docs/Model/ChangedRegionsReference.md)
- [ChangedRegionsStatus](docs/Model/ChangedRegionsStatus.md)
- [Checksum](docs/Model/Checksum.md)
- [CitrixConnectorConfigDetails](docs/Model/CitrixConnectorConfigDetails.md)
- [CitrixConnectorConfigDetailsSpec](docs/Model/CitrixConnectorConfigDetailsSpec.md)
- [CitrixResourceLocation](docs/Model/CitrixResourceLocation.md)
- [CitrixResourceLocationSpec](docs/Model/CitrixResourceLocationSpec.md)
- [ClientAuth](docs/Model/ClientAuth.md)
- [CloudConfigResponse](docs/Model/CloudConfigResponse.md)
- [CloudCredentials](docs/Model/CloudCredentials.md)
- [CloudCredentialsDefStatus](docs/Model/CloudCredentialsDefStatus.md)
- [CloudCredentialsIntentInput](docs/Model/CloudCredentialsIntentInput.md)
- [CloudCredentialsIntentResource](docs/Model/CloudCredentialsIntentResource.md)
- [CloudCredentialsIntentResponse](docs/Model/CloudCredentialsIntentResponse.md)
- [CloudCredentialsListIntentResponse](docs/Model/CloudCredentialsListIntentResponse.md)
- [CloudCredentialsListMetadata](docs/Model/CloudCredentialsListMetadata.md)
- [CloudCredentialsListMetadataOutput](docs/Model/CloudCredentialsListMetadataOutput.md)
- [CloudCredentialsMetadata](docs/Model/CloudCredentialsMetadata.md)
- [CloudCredentialsReference](docs/Model/CloudCredentialsReference.md)
- [CloudCredentialsResources](docs/Model/CloudCredentialsResources.md)
- [CloudCredentialsStatus](docs/Model/CloudCredentialsStatus.md)
- [CloudTenant](docs/Model/CloudTenant.md)
- [CloudTenantDefStatus](docs/Model/CloudTenantDefStatus.md)
- [CloudTenantIntentInput](docs/Model/CloudTenantIntentInput.md)
- [CloudTenantIntentResource](docs/Model/CloudTenantIntentResource.md)
- [CloudTenantIntentResponse](docs/Model/CloudTenantIntentResponse.md)
- [CloudTenantListIntentResponse](docs/Model/CloudTenantListIntentResponse.md)
- [CloudTenantListMetadata](docs/Model/CloudTenantListMetadata.md)
- [CloudTenantListMetadataOutput](docs/Model/CloudTenantListMetadataOutput.md)
- [CloudTenantMetadata](docs/Model/CloudTenantMetadata.md)
- [CloudTenantReference](docs/Model/CloudTenantReference.md)
- [CloudTenantResources](docs/Model/CloudTenantResources.md)
- [CloudTenantResourcesDefStatus](docs/Model/CloudTenantResourcesDefStatus.md)
- [CloudTenantStatus](docs/Model/CloudTenantStatus.md)
- [CloudTrust](docs/Model/CloudTrust.md)
- [CloudTrustDefStatus](docs/Model/CloudTrustDefStatus.md)
- [CloudTrustIntentInput](docs/Model/CloudTrustIntentInput.md)
- [CloudTrustIntentResource](docs/Model/CloudTrustIntentResource.md)
- [CloudTrustIntentResponse](docs/Model/CloudTrustIntentResponse.md)
- [CloudTrustListIntentResponse](docs/Model/CloudTrustListIntentResponse.md)
- [CloudTrustListMetadata](docs/Model/CloudTrustListMetadata.md)
- [CloudTrustListMetadataOutput](docs/Model/CloudTrustListMetadataOutput.md)
- [CloudTrustMetadata](docs/Model/CloudTrustMetadata.md)
- [CloudTrustReference](docs/Model/CloudTrustReference.md)
- [CloudTrustResources](docs/Model/CloudTrustResources.md)
- [CloudTrustResponse](docs/Model/CloudTrustResponse.md)
- [CloudTrustStatus](docs/Model/CloudTrustStatus.md)
- [Cluster](docs/Model/Cluster.md)
- [ClusterAnalysis](docs/Model/ClusterAnalysis.md)
- [ClusterCapability](docs/Model/ClusterCapability.md)
- [ClusterCapabilityPrecheck](docs/Model/ClusterCapabilityPrecheck.md)
- [ClusterCapabilityStatus](docs/Model/ClusterCapabilityStatus.md)
- [ClusterConfig](docs/Model/ClusterConfig.md)
- [ClusterConfigSpec](docs/Model/ClusterConfigSpec.md)
- [ClusterDefStatus](docs/Model/ClusterDefStatus.md)
- [ClusterDefStatusResources](docs/Model/ClusterDefStatusResources.md)
- [ClusterDomainServer](docs/Model/ClusterDomainServer.md)
- [ClusterIntentInput](docs/Model/ClusterIntentInput.md)
- [ClusterIntentResource](docs/Model/ClusterIntentResource.md)
- [ClusterIntentResponse](docs/Model/ClusterIntentResponse.md)
- [ClusterListIntentResponse](docs/Model/ClusterListIntentResponse.md)
- [ClusterListMetadata](docs/Model/ClusterListMetadata.md)
- [ClusterListMetadataOutput](docs/Model/ClusterListMetadataOutput.md)
- [ClusterManagementServer](docs/Model/ClusterManagementServer.md)
- [ClusterMetadata](docs/Model/ClusterMetadata.md)
- [ClusterNetwork](docs/Model/ClusterNetwork.md)
- [ClusterNetworkEntity](docs/Model/ClusterNetworkEntity.md)
- [ClusterNodes](docs/Model/ClusterNodes.md)
- [ClusterReference](docs/Model/ClusterReference.md)
- [ClusterResources](docs/Model/ClusterResources.md)
- [ClusterSoftware](docs/Model/ClusterSoftware.md)
- [ClusterSpec](docs/Model/ClusterSpec.md)
- [ClusterStatus](docs/Model/ClusterStatus.md)
- [ClusterSynchronousReplicationCapableInput](docs/Model/ClusterSynchronousReplicationCapableInput.md)
- [ClusterSynchronousReplicationCapableResponseInner](docs/Model/ClusterSynchronousReplicationCapableResponseInner.md)
- [ClusterSyslogServer](docs/Model/ClusterSyslogServer.md)
- [ClusterSyslogServerList](docs/Model/ClusterSyslogServerList.md)
- [CmspConfig](docs/Model/CmspConfig.md)
- [CmspConfigEnablement](docs/Model/CmspConfigEnablement.md)
- [CmspExpansionConfig](docs/Model/CmspExpansionConfig.md)
- [CmspNetworkConfig](docs/Model/CmspNetworkConfig.md)
- [CommonReportConfig](docs/Model/CommonReportConfig.md)
- [CommonReportConfigDefStatus](docs/Model/CommonReportConfigDefStatus.md)
- [CommonReportConfigIntentInput](docs/Model/CommonReportConfigIntentInput.md)
- [CommonReportConfigIntentResource](docs/Model/CommonReportConfigIntentResource.md)
- [CommonReportConfigIntentResponse](docs/Model/CommonReportConfigIntentResponse.md)
- [CommonReportConfigListIntentResponse](docs/Model/CommonReportConfigListIntentResponse.md)
- [CommonReportConfigListMetadata](docs/Model/CommonReportConfigListMetadata.md)
- [CommonReportConfigListMetadataOutput](docs/Model/CommonReportConfigListMetadataOutput.md)
- [CommonReportConfigMetadata](docs/Model/CommonReportConfigMetadata.md)
- [CommonReportConfigReference](docs/Model/CommonReportConfigReference.md)
- [CommonReportConfigResources](docs/Model/CommonReportConfigResources.md)
- [CommonReportConfigResources1](docs/Model/CommonReportConfigResources1.md)
- [CommonReportConfigStatus](docs/Model/CommonReportConfigStatus.md)
- [ComponentError](docs/Model/ComponentError.md)
- [CompositeResponse](docs/Model/CompositeResponse.md)
- [CompressionParametersForTheEntities](docs/Model/CompressionParametersForTheEntities.md)
- [ConfigurationInfo](docs/Model/ConfigurationInfo.md)
- [ContactInformation](docs/Model/ContactInformation.md)
- [ControllerVm](docs/Model/ControllerVm.md)
- [Credentials](docs/Model/Credentials.md)
- [CsrsSpec](docs/Model/CsrsSpec.md)
- [CustomizationSpecListMetadata](docs/Model/CustomizationSpecListMetadata.md)
- [CustomizationSpecListMetadataOutput](docs/Model/CustomizationSpecListMetadataOutput.md)
- [CustomizationSpecMetadata](docs/Model/CustomizationSpecMetadata.md)
- [CustomizationSpecReference](docs/Model/CustomizationSpecReference.md)
- [CustomizationSpecStatus](docs/Model/CustomizationSpecStatus.md)
- [DataCollectorConfig](docs/Model/DataCollectorConfig.md)
- [DataStoreConfig](docs/Model/DataStoreConfig.md)
- [Datacenter](docs/Model/Datacenter.md)
- [DatacenterComponent](docs/Model/DatacenterComponent.md)
- [DatacenterDefStatus](docs/Model/DatacenterDefStatus.md)
- [DatacenterIntentInput](docs/Model/DatacenterIntentInput.md)
- [DatacenterIntentResource](docs/Model/DatacenterIntentResource.md)
- [DatacenterIntentResponse](docs/Model/DatacenterIntentResponse.md)
- [DatacenterListIntentResponse](docs/Model/DatacenterListIntentResponse.md)
- [DatacenterListMetadata](docs/Model/DatacenterListMetadata.md)
- [DatacenterListMetadataOutput](docs/Model/DatacenterListMetadataOutput.md)
- [DatacenterMetadata](docs/Model/DatacenterMetadata.md)
- [DatacenterReference](docs/Model/DatacenterReference.md)
- [DatacenterResources](docs/Model/DatacenterResources.md)
- [DatacenterStatus](docs/Model/DatacenterStatus.md)
- [DayTime](docs/Model/DayTime.md)
- [Deployment](docs/Model/Deployment.md)
- [DeploymentStatus](docs/Model/DeploymentStatus.md)
- [DescriptionItem](docs/Model/DescriptionItem.md)
- [DhcpOptions](docs/Model/DhcpOptions.md)
- [DirectConnect](docs/Model/DirectConnect.md)
- [DirectConnectDefStatus](docs/Model/DirectConnectDefStatus.md)
- [DirectConnectIntentInput](docs/Model/DirectConnectIntentInput.md)
- [DirectConnectIntentResource](docs/Model/DirectConnectIntentResource.md)
- [DirectConnectIntentResponse](docs/Model/DirectConnectIntentResponse.md)
- [DirectConnectListIntentResponse](docs/Model/DirectConnectListIntentResponse.md)
- [DirectConnectListMetadata](docs/Model/DirectConnectListMetadata.md)
- [DirectConnectListMetadataOutput](docs/Model/DirectConnectListMetadataOutput.md)
- [DirectConnectMetadata](docs/Model/DirectConnectMetadata.md)
- [DirectConnectReference](docs/Model/DirectConnectReference.md)
- [DirectConnectResources](docs/Model/DirectConnectResources.md)
- [DirectConnectResourcesDefStatus](docs/Model/DirectConnectResourcesDefStatus.md)
- [DirectConnectServiceProviderListResponseInner](docs/Model/DirectConnectServiceProviderListResponseInner.md)
- [DirectConnectServiceProviderListResponseInnerOfferedBandwidthsInner](docs/Model/DirectConnectServiceProviderListResponseInnerOfferedBandwidthsInner.md)
- [DirectConnectStatus](docs/Model/DirectConnectStatus.md)
- [DirectConnectVifStatus](docs/Model/DirectConnectVifStatus.md)
- [DirectConnectVirtualInterface](docs/Model/DirectConnectVirtualInterface.md)
- [DirectConnectVirtualInterfaceDefStatus](docs/Model/DirectConnectVirtualInterfaceDefStatus.md)
- [DirectConnectVirtualInterfaceIntentInput](docs/Model/DirectConnectVirtualInterfaceIntentInput.md)
- [DirectConnectVirtualInterfaceIntentResource](docs/Model/DirectConnectVirtualInterfaceIntentResource.md)
- [DirectConnectVirtualInterfaceIntentResponse](docs/Model/DirectConnectVirtualInterfaceIntentResponse.md)
- [DirectConnectVirtualInterfaceListIntentResponse](docs/Model/DirectConnectVirtualInterfaceListIntentResponse.md)
- [DirectConnectVirtualInterfaceListMetadata](docs/Model/DirectConnectVirtualInterfaceListMetadata.md)
- [DirectConnectVirtualInterfaceListMetadataOutput](docs/Model/DirectConnectVirtualInterfaceListMetadataOutput.md)
- [DirectConnectVirtualInterfaceMetadata](docs/Model/DirectConnectVirtualInterfaceMetadata.md)
- [DirectConnectVirtualInterfaceReference](docs/Model/DirectConnectVirtualInterfaceReference.md)
- [DirectConnectVirtualInterfaceResources](docs/Model/DirectConnectVirtualInterfaceResources.md)
- [DirectConnectVirtualInterfaceResourcesDefStatus](docs/Model/DirectConnectVirtualInterfaceResourcesDefStatus.md)
- [DirectConnectVirtualInterfaceStatus](docs/Model/DirectConnectVirtualInterfaceStatus.md)
- [DirectoryService](docs/Model/DirectoryService.md)
- [DirectoryServiceDefStatus](docs/Model/DirectoryServiceDefStatus.md)
- [DirectoryServiceIntentInput](docs/Model/DirectoryServiceIntentInput.md)
- [DirectoryServiceIntentResource](docs/Model/DirectoryServiceIntentResource.md)
- [DirectoryServiceIntentResponse](docs/Model/DirectoryServiceIntentResponse.md)
- [DirectoryServiceListIntentResponse](docs/Model/DirectoryServiceListIntentResponse.md)
- [DirectoryServiceListMetadata](docs/Model/DirectoryServiceListMetadata.md)
- [DirectoryServiceListMetadataOutput](docs/Model/DirectoryServiceListMetadataOutput.md)
- [DirectoryServiceMetadata](docs/Model/DirectoryServiceMetadata.md)
- [DirectoryServiceOuInput](docs/Model/DirectoryServiceOuInput.md)
- [DirectoryServiceReference](docs/Model/DirectoryServiceReference.md)
- [DirectoryServiceResources](docs/Model/DirectoryServiceResources.md)
- [DirectoryServiceResources1](docs/Model/DirectoryServiceResources1.md)
- [DirectoryServiceSearchMetadata](docs/Model/DirectoryServiceSearchMetadata.md)
- [DirectoryServiceSearchResponse](docs/Model/DirectoryServiceSearchResponse.md)
- [DirectoryServiceStatus](docs/Model/DirectoryServiceStatus.md)
- [DirectoryServiceUser](docs/Model/DirectoryServiceUser.md)
- [DirectoryServiceUserGroupInput](docs/Model/DirectoryServiceUserGroupInput.md)
- [DirectoryServiceUserGroupStatus](docs/Model/DirectoryServiceUserGroupStatus.md)
- [DirectoryServiceUserStatus](docs/Model/DirectoryServiceUserStatus.md)
- [DisasterRecoveryServiceConfigInput](docs/Model/DisasterRecoveryServiceConfigInput.md)
- [DiskAddress](docs/Model/DiskAddress.md)
- [DiskDefStatus](docs/Model/DiskDefStatus.md)
- [DiskDefStatusResources](docs/Model/DiskDefStatusResources.md)
- [DiskIntentInput](docs/Model/DiskIntentInput.md)
- [DiskIntentResource](docs/Model/DiskIntentResource.md)
- [DiskIntentResponse](docs/Model/DiskIntentResponse.md)
- [DiskListIntentResponse](docs/Model/DiskListIntentResponse.md)
- [DiskListMetadata](docs/Model/DiskListMetadata.md)
- [DiskListMetadataOutput](docs/Model/DiskListMetadataOutput.md)
- [DiskMetadata](docs/Model/DiskMetadata.md)
- [DiskReference](docs/Model/DiskReference.md)
- [DiskSpec](docs/Model/DiskSpec.md)
- [DiskStatus](docs/Model/DiskStatus.md)
- [DiskStorageConfig](docs/Model/DiskStorageConfig.md)
- [DisplayMetadata](docs/Model/DisplayMetadata.md)
- [DockerRegistry](docs/Model/DockerRegistry.md)
- [DockerRegistryDefStatus](docs/Model/DockerRegistryDefStatus.md)
- [DockerRegistryImageSearchListIntentResponse](docs/Model/DockerRegistryImageSearchListIntentResponse.md)
- [DockerRegistryImageStatus](docs/Model/DockerRegistryImageStatus.md)
- [DockerRegistryImageTag](docs/Model/DockerRegistryImageTag.md)
- [DockerRegistryIntentInput](docs/Model/DockerRegistryIntentInput.md)
- [DockerRegistryIntentResource](docs/Model/DockerRegistryIntentResource.md)
- [DockerRegistryIntentResponse](docs/Model/DockerRegistryIntentResponse.md)
- [DockerRegistryListIntentResponse](docs/Model/DockerRegistryListIntentResponse.md)
- [DockerRegistryListMetadata](docs/Model/DockerRegistryListMetadata.md)
- [DockerRegistryListMetadataOutput](docs/Model/DockerRegistryListMetadataOutput.md)
- [DockerRegistryMetadata](docs/Model/DockerRegistryMetadata.md)
- [DockerRegistryReference](docs/Model/DockerRegistryReference.md)
- [DockerRegistryResources](docs/Model/DockerRegistryResources.md)
- [DockerRegistryStatus](docs/Model/DockerRegistryStatus.md)
- [DpdConfig](docs/Model/DpdConfig.md)
- [DpdConfigStatus](docs/Model/DpdConfigStatus.md)
- [EbFilter](docs/Model/EbFilter.md)
- [Edge](docs/Model/Edge.md)
- [EffectiveStorageConfig](docs/Model/EffectiveStorageConfig.md)
- [EmailConfig](docs/Model/EmailConfig.md)
- [EncryptionParametersForTheEntities](docs/Model/EncryptionParametersForTheEntities.md)
- [Entity](docs/Model/Entity.md)
- [EntityComplianceStatus](docs/Model/EntityComplianceStatus.md)
- [EntityFilterExpression](docs/Model/EntityFilterExpression.md)
- [EntityFilterExpressionLeftHandSide](docs/Model/EntityFilterExpressionLeftHandSide.md)
- [EntityInfo](docs/Model/EntityInfo.md)
- [EntityMetadata](docs/Model/EntityMetadata.md)
- [EntityReference](docs/Model/EntityReference.md)
- [EntitySpec](docs/Model/EntitySpec.md)
- [EntitySyncInput](docs/Model/EntitySyncInput.md)
- [EntitySyncRule](docs/Model/EntitySyncRule.md)
- [EntitySyncRuleDefStatus](docs/Model/EntitySyncRuleDefStatus.md)
- [EntitySyncRuleIntentInput](docs/Model/EntitySyncRuleIntentInput.md)
- [EntitySyncRuleIntentResource](docs/Model/EntitySyncRuleIntentResource.md)
- [EntitySyncRuleIntentResponse](docs/Model/EntitySyncRuleIntentResponse.md)
- [EntitySyncRuleListIntentResponse](docs/Model/EntitySyncRuleListIntentResponse.md)
- [EntitySyncRuleListMetadata](docs/Model/EntitySyncRuleListMetadata.md)
- [EntitySyncRuleListMetadataOutput](docs/Model/EntitySyncRuleListMetadataOutput.md)
- [EntitySyncRuleMetadata](docs/Model/EntitySyncRuleMetadata.md)
- [EntitySyncRuleProcessInputInner](docs/Model/EntitySyncRuleProcessInputInner.md)
- [EntitySyncRuleReference](docs/Model/EntitySyncRuleReference.md)
- [EntitySyncRuleResources](docs/Model/EntitySyncRuleResources.md)
- [EntitySyncRuleStatus](docs/Model/EntitySyncRuleStatus.md)
- [EntitybrowserResponse](docs/Model/EntitybrowserResponse.md)
- [Environment](docs/Model/Environment.md)
- [EnvironmentDefStatus](docs/Model/EnvironmentDefStatus.md)
- [EnvironmentIntentInput](docs/Model/EnvironmentIntentInput.md)
- [EnvironmentIntentResource](docs/Model/EnvironmentIntentResource.md)
- [EnvironmentIntentResponse](docs/Model/EnvironmentIntentResponse.md)
- [EnvironmentListIntentResponse](docs/Model/EnvironmentListIntentResponse.md)
- [EnvironmentListMetadata](docs/Model/EnvironmentListMetadata.md)
- [EnvironmentListMetadataOutput](docs/Model/EnvironmentListMetadataOutput.md)
- [EnvironmentMetadata](docs/Model/EnvironmentMetadata.md)
- [EnvironmentReference](docs/Model/EnvironmentReference.md)
- [EnvironmentResources](docs/Model/EnvironmentResources.md)
- [EnvironmentResourcesDefStatus](docs/Model/EnvironmentResourcesDefStatus.md)
- [EnvironmentStatus](docs/Model/EnvironmentStatus.md)
- [EpochConfig](docs/Model/EpochConfig.md)
- [ErrorMessageObject](docs/Model/ErrorMessageObject.md)
- [ExchangeWorkload](docs/Model/ExchangeWorkload.md)
- [ExecutionSchedule](docs/Model/ExecutionSchedule.md)
- [Expression](docs/Model/Expression.md)
- [ExternalConfigurations](docs/Model/ExternalConfigurations.md)
- [ExternalConfigurationsSpec](docs/Model/ExternalConfigurationsSpec.md)
- [ExternalNetwork](docs/Model/ExternalNetwork.md)
- [ExternalSubnet](docs/Model/ExternalSubnet.md)
- [ExternalSubnetDefStatus](docs/Model/ExternalSubnetDefStatus.md)
- [FailoverCluster](docs/Model/FailoverCluster.md)
- [Favorite](docs/Model/Favorite.md)
- [FavoriteGetResponse](docs/Model/FavoriteGetResponse.md)
- [FileItem](docs/Model/FileItem.md)
- [FileItemDefStatus](docs/Model/FileItemDefStatus.md)
- [FileItemIntentInput](docs/Model/FileItemIntentInput.md)
- [FileItemIntentResource](docs/Model/FileItemIntentResource.md)
- [FileItemIntentResponse](docs/Model/FileItemIntentResponse.md)
- [FileItemListIntentResponse](docs/Model/FileItemListIntentResponse.md)
- [FileItemListMetadata](docs/Model/FileItemListMetadata.md)
- [FileItemListMetadataOutput](docs/Model/FileItemListMetadataOutput.md)
- [FileItemMetadata](docs/Model/FileItemMetadata.md)
- [FileItemReference](docs/Model/FileItemReference.md)
- [FileItemResources](docs/Model/FileItemResources.md)
- [FileItemResourcesDefStatus](docs/Model/FileItemResourcesDefStatus.md)
- [FileItemStatus](docs/Model/FileItemStatus.md)
- [FilesManagerServiceConfigInput](docs/Model/FilesManagerServiceConfigInput.md)
- [Filter](docs/Model/Filter.md)
- [FilterExpression](docs/Model/FilterExpression.md)
- [FloatingIp](docs/Model/FloatingIp.md)
- [FloatingIpDefStatus](docs/Model/FloatingIpDefStatus.md)
- [FloatingIpIntentInput](docs/Model/FloatingIpIntentInput.md)
- [FloatingIpIntentResource](docs/Model/FloatingIpIntentResource.md)
- [FloatingIpIntentResponse](docs/Model/FloatingIpIntentResponse.md)
- [FloatingIpListIntentResponse](docs/Model/FloatingIpListIntentResponse.md)
- [FloatingIpListMetadata](docs/Model/FloatingIpListMetadata.md)
- [FloatingIpListMetadataOutput](docs/Model/FloatingIpListMetadataOutput.md)
- [FloatingIpMetadata](docs/Model/FloatingIpMetadata.md)
- [FloatingIpReference](docs/Model/FloatingIpReference.md)
- [FloatingIpResources](docs/Model/FloatingIpResources.md)
- [FloatingIpResourcesDefStatus](docs/Model/FloatingIpResourcesDefStatus.md)
- [FloatingIpStatus](docs/Model/FloatingIpStatus.md)
- [FlowSecurityPlanningConfigInput](docs/Model/FlowSecurityPlanningConfigInput.md)
- [FlowService](docs/Model/FlowService.md)
- [GcpListMetadata](docs/Model/GcpListMetadata.md)
- [GenericResourceSpec](docs/Model/GenericResourceSpec.md)
- [GenericResponse](docs/Model/GenericResponse.md)
- [GetInfo](docs/Model/GetInfo.md)
- [GraphqlQuery](docs/Model/GraphqlQuery.md)
- [GraphqlResponse](docs/Model/GraphqlResponse.md)
- [GroupRequestedAttribute](docs/Model/GroupRequestedAttribute.md)
- [GroupsEntity](docs/Model/GroupsEntity.md)
- [GroupsFieldData](docs/Model/GroupsFieldData.md)
- [GroupsGetEntitiesRequest](docs/Model/GroupsGetEntitiesRequest.md)
- [GroupsGetEntitiesResponse](docs/Model/GroupsGetEntitiesResponse.md)
- [GroupsGroupResult](docs/Model/GroupsGroupResult.md)
- [GroupsRequestedAttribute](docs/Model/GroupsRequestedAttribute.md)
- [GroupsTimevaluePair](docs/Model/GroupsTimevaluePair.md)
- [GuestCustomization](docs/Model/GuestCustomization.md)
- [GuestCustomizationCloudInit](docs/Model/GuestCustomizationCloudInit.md)
- [GuestCustomizationStatus](docs/Model/GuestCustomizationStatus.md)
- [GuestCustomizationStatusCloudInit](docs/Model/GuestCustomizationStatusCloudInit.md)
- [GuestCustomizationStatusSysprep](docs/Model/GuestCustomizationStatusSysprep.md)
- [GuestCustomizationSysprep](docs/Model/GuestCustomizationSysprep.md)
- [GuestToolsSpec](docs/Model/GuestToolsSpec.md)
- [GuestToolsStatus](docs/Model/GuestToolsStatus.md)
- [HelpResult](docs/Model/HelpResult.md)
- [Host](docs/Model/Host.md)
- [HostDefStatus](docs/Model/HostDefStatus.md)
- [HostGpu](docs/Model/HostGpu.md)
- [HostIntentInput](docs/Model/HostIntentInput.md)
- [HostIntentResource](docs/Model/HostIntentResource.md)
- [HostIntentResponse](docs/Model/HostIntentResponse.md)
- [HostListIntentResponse](docs/Model/HostListIntentResponse.md)
- [HostListMetadata](docs/Model/HostListMetadata.md)
- [HostListMetadataOutput](docs/Model/HostListMetadataOutput.md)
- [HostMetadata](docs/Model/HostMetadata.md)
- [HostReference](docs/Model/HostReference.md)
- [HostResources](docs/Model/HostResources.md)
- [HostStatus](docs/Model/HostStatus.md)
- [HttpProxyWhitelist](docs/Model/HttpProxyWhitelist.md)
- [Hypervisor](docs/Model/Hypervisor.md)
- [HypervisorInfo](docs/Model/HypervisorInfo.md)
- [HypervisorServer](docs/Model/HypervisorServer.md)
- [Icmp](docs/Model/Icmp.md)
- [IcmpStatus](docs/Model/IcmpStatus.md)
- [IdCategorizationDomainController](docs/Model/IdCategorizationDomainController.md)
- [IdCategorizationMatchingCriteria](docs/Model/IdCategorizationMatchingCriteria.md)
- [IdempotenceIdentifiersInput](docs/Model/IdempotenceIdentifiersInput.md)
- [IdempotenceIdentifiersListMetadata](docs/Model/IdempotenceIdentifiersListMetadata.md)
- [IdempotenceIdentifiersListMetadataOutput](docs/Model/IdempotenceIdentifiersListMetadataOutput.md)
- [IdempotenceIdentifiersMetadata](docs/Model/IdempotenceIdentifiersMetadata.md)
- [IdempotenceIdentifiersReference](docs/Model/IdempotenceIdentifiersReference.md)
- [IdempotenceIdentifiersResponse](docs/Model/IdempotenceIdentifiersResponse.md)
- [IdempotenceIdentifiersStatus](docs/Model/IdempotenceIdentifiersStatus.md)
- [IdentifierInput](docs/Model/IdentifierInput.md)
- [IdentifierResponse](docs/Model/IdentifierResponse.md)
- [IdentityCategorizationConfig](docs/Model/IdentityCategorizationConfig.md)
- [IdentityCategorizationDirectoryConfig](docs/Model/IdentityCategorizationDirectoryConfig.md)
- [IdentityProvider](docs/Model/IdentityProvider.md)
- [IdentityProviderDefStatus](docs/Model/IdentityProviderDefStatus.md)
- [IdentityProviderDefStatusResources](docs/Model/IdentityProviderDefStatusResources.md)
- [IdentityProviderDefStatusResourcesIdpProperties](docs/Model/IdentityProviderDefStatusResourcesIdpProperties.md)
- [IdentityProviderIntentInput](docs/Model/IdentityProviderIntentInput.md)
- [IdentityProviderIntentResource](docs/Model/IdentityProviderIntentResource.md)
- [IdentityProviderIntentResponse](docs/Model/IdentityProviderIntentResponse.md)
- [IdentityProviderListIntentResponse](docs/Model/IdentityProviderListIntentResponse.md)
- [IdentityProviderListMetadata](docs/Model/IdentityProviderListMetadata.md)
- [IdentityProviderListMetadataOutput](docs/Model/IdentityProviderListMetadataOutput.md)
- [IdentityProviderMetadata](docs/Model/IdentityProviderMetadata.md)
- [IdentityProviderReference](docs/Model/IdentityProviderReference.md)
- [IdentityProviderResources](docs/Model/IdentityProviderResources.md)
- [IdentityProviderStatus](docs/Model/IdentityProviderStatus.md)
- [IdentityProviderUser](docs/Model/IdentityProviderUser.md)
- [Image](docs/Model/Image.md)
- [ImageDefStatus](docs/Model/ImageDefStatus.md)
- [ImageIntentInput](docs/Model/ImageIntentInput.md)
- [ImageIntentResource](docs/Model/ImageIntentResource.md)
- [ImageIntentResponse](docs/Model/ImageIntentResponse.md)
- [ImageListIntentResponse](docs/Model/ImageListIntentResponse.md)
- [ImageListMetadata](docs/Model/ImageListMetadata.md)
- [ImageListMetadataOutput](docs/Model/ImageListMetadataOutput.md)
- [ImageMetadata](docs/Model/ImageMetadata.md)
- [ImageMigrateInput](docs/Model/ImageMigrateInput.md)
- [ImagePlacementInfo](docs/Model/ImagePlacementInfo.md)
- [ImagePlacementPolicy](docs/Model/ImagePlacementPolicy.md)
- [ImagePlacementPolicyDefStatus](docs/Model/ImagePlacementPolicyDefStatus.md)
- [ImagePlacementPolicyIntentInput](docs/Model/ImagePlacementPolicyIntentInput.md)
- [ImagePlacementPolicyIntentResource](docs/Model/ImagePlacementPolicyIntentResource.md)
- [ImagePlacementPolicyIntentResponse](docs/Model/ImagePlacementPolicyIntentResponse.md)
- [ImagePlacementPolicyListIntentResponse](docs/Model/ImagePlacementPolicyListIntentResponse.md)
- [ImagePlacementPolicyListMetadata](docs/Model/ImagePlacementPolicyListMetadata.md)
- [ImagePlacementPolicyListMetadataOutput](docs/Model/ImagePlacementPolicyListMetadataOutput.md)
- [ImagePlacementPolicyMetadata](docs/Model/ImagePlacementPolicyMetadata.md)
- [ImagePlacementPolicyReference](docs/Model/ImagePlacementPolicyReference.md)
- [ImagePlacementPolicyResources](docs/Model/ImagePlacementPolicyResources.md)
- [ImagePlacementPolicyResourcesDefStatus](docs/Model/ImagePlacementPolicyResourcesDefStatus.md)
- [ImagePlacementPolicyState](docs/Model/ImagePlacementPolicyState.md)
- [ImagePlacementPolicyStatus](docs/Model/ImagePlacementPolicyStatus.md)
- [ImageReference](docs/Model/ImageReference.md)
- [ImageRemoteCopyInput](docs/Model/ImageRemoteCopyInput.md)
- [ImageResources](docs/Model/ImageResources.md)
- [ImageResourcesDefStatus](docs/Model/ImageResourcesDefStatus.md)
- [ImageSpec](docs/Model/ImageSpec.md)
- [ImageStatus](docs/Model/ImageStatus.md)
- [ImageVersionResources](docs/Model/ImageVersionResources.md)
- [ImageVersionStatus](docs/Model/ImageVersionStatus.md)
- [Indicator](docs/Model/Indicator.md)
- [InternalDirectoryServiceConfig](docs/Model/InternalDirectoryServiceConfig.md)
- [InternalDirectoryServiceResponse](docs/Model/InternalDirectoryServiceResponse.md)
- [InternalOpenLdapConfig](docs/Model/InternalOpenLdapConfig.md)
- [InternalRoutingProtocolConfig](docs/Model/InternalRoutingProtocolConfig.md)
- [InternalRoutingProtocolConfigStatus](docs/Model/InternalRoutingProtocolConfigStatus.md)
- [InternalServiceAccountConfig](docs/Model/InternalServiceAccountConfig.md)
- [IpAddress](docs/Model/IpAddress.md)
- [IpConfig](docs/Model/IpConfig.md)
- [IpPool](docs/Model/IpPool.md)
- [IpSubnet](docs/Model/IpSubnet.md)
- [IpSubnetStatus](docs/Model/IpSubnetStatus.md)
- [IpUsageStats](docs/Model/IpUsageStats.md)
- [IpfixExporter](docs/Model/IpfixExporter.md)
- [IpfixExporterDefStatus](docs/Model/IpfixExporterDefStatus.md)
- [IpfixExporterIntentInput](docs/Model/IpfixExporterIntentInput.md)
- [IpfixExporterIntentResource](docs/Model/IpfixExporterIntentResource.md)
- [IpfixExporterIntentResponse](docs/Model/IpfixExporterIntentResponse.md)
- [IpfixExporterListIntentResponse](docs/Model/IpfixExporterListIntentResponse.md)
- [IpfixExporterListMetadata](docs/Model/IpfixExporterListMetadata.md)
- [IpfixExporterListMetadataOutput](docs/Model/IpfixExporterListMetadataOutput.md)
- [IpfixExporterMetadata](docs/Model/IpfixExporterMetadata.md)
- [IpfixExporterReference](docs/Model/IpfixExporterReference.md)
- [IpfixExporterResources](docs/Model/IpfixExporterResources.md)
- [IpfixExporterStatus](docs/Model/IpfixExporterStatus.md)
- [Ipmi](docs/Model/Ipmi.md)
- [IpsecConfig](docs/Model/IpsecConfig.md)
- [IpsecConfigStatus](docs/Model/IpsecConfigStatus.md)
- [IpsecConfigStatusNegotiatedProposal](docs/Model/IpsecConfigStatusNegotiatedProposal.md)
- [IsolationRule](docs/Model/IsolationRule.md)
- [JsonWebKey](docs/Model/JsonWebKey.md)
- [JwkSource](docs/Model/JwkSource.md)
- [KeySetResponse](docs/Model/KeySetResponse.md)
- [Layer2Stretch](docs/Model/Layer2Stretch.md)
- [Layer2StretchDefStatus](docs/Model/Layer2StretchDefStatus.md)
- [Layer2StretchIntentInput](docs/Model/Layer2StretchIntentInput.md)
- [Layer2StretchIntentResource](docs/Model/Layer2StretchIntentResource.md)
- [Layer2StretchIntentResponse](docs/Model/Layer2StretchIntentResponse.md)
- [Layer2StretchListIntentResponse](docs/Model/Layer2StretchListIntentResponse.md)
- [Layer2StretchListMetadata](docs/Model/Layer2StretchListMetadata.md)
- [Layer2StretchListMetadataOutput](docs/Model/Layer2StretchListMetadataOutput.md)
- [Layer2StretchMetadata](docs/Model/Layer2StretchMetadata.md)
- [Layer2StretchReference](docs/Model/Layer2StretchReference.md)
- [Layer2StretchRelatedEntities](docs/Model/Layer2StretchRelatedEntities.md)
- [Layer2StretchResources](docs/Model/Layer2StretchResources.md)
- [Layer2StretchResourcesDefStatus](docs/Model/Layer2StretchResourcesDefStatus.md)
- [Layer2StretchStatus](docs/Model/Layer2StretchStatus.md)
- [Layer2StretchSubnetInfo](docs/Model/Layer2StretchSubnetInfo.md)
- [Layer2StretchVpnConnectionInfo](docs/Model/Layer2StretchVpnConnectionInfo.md)
- [Link](docs/Model/Link.md)
- [ListEntitiesToSyncResponseInner](docs/Model/ListEntitiesToSyncResponseInner.md)
- [ListEntitiesToSyncResponseInnerAvailabilityZoneSyncDetailsInner](docs/Model/ListEntitiesToSyncResponseInnerAvailabilityZoneSyncDetailsInner.md)
- [LogCollectorSupportCaseUpload](docs/Model/LogCollectorSupportCaseUpload.md)
- [LogoutResponse](docs/Model/LogoutResponse.md)
- [LtssServiceInfo](docs/Model/LtssServiceInfo.md)
- [MarketplaceIcon](docs/Model/MarketplaceIcon.md)
- [MarketplaceItem](docs/Model/MarketplaceItem.md)
- [MarketplaceItemConfig](docs/Model/MarketplaceItemConfig.md)
- [MarketplaceItemDefStatus](docs/Model/MarketplaceItemDefStatus.md)
- [MarketplaceItemInputResources](docs/Model/MarketplaceItemInputResources.md)
- [MarketplaceItemInputResourcesAppBlueprintTemplate](docs/Model/MarketplaceItemInputResourcesAppBlueprintTemplate.md)
- [MarketplaceItemIntentInput](docs/Model/MarketplaceItemIntentInput.md)
- [MarketplaceItemIntentResource](docs/Model/MarketplaceItemIntentResource.md)
- [MarketplaceItemIntentResponse](docs/Model/MarketplaceItemIntentResponse.md)
- [MarketplaceItemListIntentResponse](docs/Model/MarketplaceItemListIntentResponse.md)
- [MarketplaceItemListMetadata](docs/Model/MarketplaceItemListMetadata.md)
- [MarketplaceItemListMetadataOutput](docs/Model/MarketplaceItemListMetadataOutput.md)
- [MarketplaceItemMetadata](docs/Model/MarketplaceItemMetadata.md)
- [MarketplaceItemOutputResources](docs/Model/MarketplaceItemOutputResources.md)
- [MarketplaceItemReference](docs/Model/MarketplaceItemReference.md)
- [MarketplaceItemRenderInput](docs/Model/MarketplaceItemRenderInput.md)
- [MarketplaceItemRenderOutput](docs/Model/MarketplaceItemRenderOutput.md)
- [MarketplaceItemStatus](docs/Model/MarketplaceItemStatus.md)
- [MessageResource](docs/Model/MessageResource.md)
- [Metadata](docs/Model/Metadata.md)
- [MetadataOfTheClonedVm](docs/Model/MetadataOfTheClonedVm.md)
- [MetadataOfTheRestoredVm](docs/Model/MetadataOfTheRestoredVm.md)
- [MhVm](docs/Model/MhVm.md)
- [MhVmDefStatus](docs/Model/MhVmDefStatus.md)
- [MhVmIntentInput](docs/Model/MhVmIntentInput.md)
- [MhVmIntentResource](docs/Model/MhVmIntentResource.md)
- [MhVmIntentResponse](docs/Model/MhVmIntentResponse.md)
- [MhVmListIntentResponse](docs/Model/MhVmListIntentResponse.md)
- [MhVmListMetadata](docs/Model/MhVmListMetadata.md)
- [MhVmListMetadataOutput](docs/Model/MhVmListMetadataOutput.md)
- [MhVmMetadata](docs/Model/MhVmMetadata.md)
- [MhVmNicOverride](docs/Model/MhVmNicOverride.md)
- [MhVmReference](docs/Model/MhVmReference.md)
- [MhVmResources](docs/Model/MhVmResources.md)
- [MhVmResourcesDefStatus](docs/Model/MhVmResourcesDefStatus.md)
- [MhVmRevertInput](docs/Model/MhVmRevertInput.md)
- [MhVmSnapshotInput](docs/Model/MhVmSnapshotInput.md)
- [MhVmSpecOverride](docs/Model/MhVmSpecOverride.md)
- [MhVmStatus](docs/Model/MhVmStatus.md)
- [MhVmStorageConfig](docs/Model/MhVmStorageConfig.md)
- [MhVmStorageConfigStatus](docs/Model/MhVmStorageConfigStatus.md)
- [MicrosegServiceConfigInput](docs/Model/MicrosegServiceConfigInput.md)
- [MigrateDiskContainerReference](docs/Model/MigrateDiskContainerReference.md)
- [MigrateDisksInput](docs/Model/MigrateDisksInput.md)
- [MigrateInput](docs/Model/MigrateInput.md)
- [MigrateInputVmListInner](docs/Model/MigrateInputVmListInner.md)
- [MigrationTarget](docs/Model/MigrationTarget.md)
- [MonetaryValue](docs/Model/MonetaryValue.md)
- [MulticlusterConfigDefStatus](docs/Model/MulticlusterConfigDefStatus.md)
- [MulticlusterConfigIntentInput](docs/Model/MulticlusterConfigIntentInput.md)
- [MulticlusterConfigIntentResponse](docs/Model/MulticlusterConfigIntentResponse.md)
- [MulticlusterConfigListMetadata](docs/Model/MulticlusterConfigListMetadata.md)
- [MulticlusterConfigListMetadataOutput](docs/Model/MulticlusterConfigListMetadataOutput.md)
- [MulticlusterConfigMetadata](docs/Model/MulticlusterConfigMetadata.md)
- [MulticlusterConfigReference](docs/Model/MulticlusterConfigReference.md)
- [MulticlusterConfigSpec](docs/Model/MulticlusterConfigSpec.md)
- [MulticlusterConfigSpecResources](docs/Model/MulticlusterConfigSpecResources.md)
- [MulticlusterConfigStatus](docs/Model/MulticlusterConfigStatus.md)
- [NameIdentifierMap](docs/Model/NameIdentifierMap.md)
- [NccChecksSupportCaseUpload](docs/Model/NccChecksSupportCaseUpload.md)
- [NetworkAddress](docs/Model/NetworkAddress.md)
- [NetworkAddressStatus](docs/Model/NetworkAddressStatus.md)
- [NetworkConfig](docs/Model/NetworkConfig.md)
- [NetworkConfiguration](docs/Model/NetworkConfiguration.md)
- [NetworkDevice](docs/Model/NetworkDevice.md)
- [NetworkDeviceDefStatus](docs/Model/NetworkDeviceDefStatus.md)
- [NetworkDeviceIntentInput](docs/Model/NetworkDeviceIntentInput.md)
- [NetworkDeviceIntentResource](docs/Model/NetworkDeviceIntentResource.md)
- [NetworkDeviceIntentResponse](docs/Model/NetworkDeviceIntentResponse.md)
- [NetworkDeviceListIntentResponse](docs/Model/NetworkDeviceListIntentResponse.md)
- [NetworkDeviceListMetadata](docs/Model/NetworkDeviceListMetadata.md)
- [NetworkDeviceListMetadataOutput](docs/Model/NetworkDeviceListMetadataOutput.md)
- [NetworkDeviceMetadata](docs/Model/NetworkDeviceMetadata.md)
- [NetworkDeviceReference](docs/Model/NetworkDeviceReference.md)
- [NetworkDeviceResources](docs/Model/NetworkDeviceResources.md)
- [NetworkDeviceStatus](docs/Model/NetworkDeviceStatus.md)
- [NetworkFunctionChain](docs/Model/NetworkFunctionChain.md)
- [NetworkFunctionChainDefStatus](docs/Model/NetworkFunctionChainDefStatus.md)
- [NetworkFunctionChainIntentInput](docs/Model/NetworkFunctionChainIntentInput.md)
- [NetworkFunctionChainIntentResource](docs/Model/NetworkFunctionChainIntentResource.md)
- [NetworkFunctionChainIntentResponse](docs/Model/NetworkFunctionChainIntentResponse.md)
- [NetworkFunctionChainListIntentResponse](docs/Model/NetworkFunctionChainListIntentResponse.md)
- [NetworkFunctionChainListMetadata](docs/Model/NetworkFunctionChainListMetadata.md)
- [NetworkFunctionChainListMetadataOutput](docs/Model/NetworkFunctionChainListMetadataOutput.md)
- [NetworkFunctionChainMetadata](docs/Model/NetworkFunctionChainMetadata.md)
- [NetworkFunctionChainReference](docs/Model/NetworkFunctionChainReference.md)
- [NetworkFunctionChainResource](docs/Model/NetworkFunctionChainResource.md)
- [NetworkFunctionChainStatus](docs/Model/NetworkFunctionChainStatus.md)
- [NetworkFunctionListMetadata](docs/Model/NetworkFunctionListMetadata.md)
- [NetworkFunctionListMetadataOutput](docs/Model/NetworkFunctionListMetadataOutput.md)
- [NetworkFunctionMetadata](docs/Model/NetworkFunctionMetadata.md)
- [NetworkFunctionReference](docs/Model/NetworkFunctionReference.md)
- [NetworkFunctionResource](docs/Model/NetworkFunctionResource.md)
- [NetworkFunctionStatus](docs/Model/NetworkFunctionStatus.md)
- [NetworkRule](docs/Model/NetworkRule.md)
- [NetworkRuleIcmpTypeCodeListInner](docs/Model/NetworkRuleIcmpTypeCodeListInner.md)
- [NetworkRuleStatus](docs/Model/NetworkRuleStatus.md)
- [NetworkRuleStatusIcmpTypeCodeListInner](docs/Model/NetworkRuleStatusIcmpTypeCodeListInner.md)
- [NetworkSecurityRule](docs/Model/NetworkSecurityRule.md)
- [NetworkSecurityRuleDefStatus](docs/Model/NetworkSecurityRuleDefStatus.md)
- [NetworkSecurityRuleImportEntity](docs/Model/NetworkSecurityRuleImportEntity.md)
- [NetworkSecurityRuleImportResponse](docs/Model/NetworkSecurityRuleImportResponse.md)
- [NetworkSecurityRuleIntentInput](docs/Model/NetworkSecurityRuleIntentInput.md)
- [NetworkSecurityRuleIntentResource](docs/Model/NetworkSecurityRuleIntentResource.md)
- [NetworkSecurityRuleIntentResponse](docs/Model/NetworkSecurityRuleIntentResponse.md)
- [NetworkSecurityRuleListIntentResponse](docs/Model/NetworkSecurityRuleListIntentResponse.md)
- [NetworkSecurityRuleListMetadata](docs/Model/NetworkSecurityRuleListMetadata.md)
- [NetworkSecurityRuleListMetadataOutput](docs/Model/NetworkSecurityRuleListMetadataOutput.md)
- [NetworkSecurityRuleMetadata](docs/Model/NetworkSecurityRuleMetadata.md)
- [NetworkSecurityRuleReference](docs/Model/NetworkSecurityRuleReference.md)
- [NetworkSecurityRuleResources](docs/Model/NetworkSecurityRuleResources.md)
- [NetworkSecurityRuleResourcesStatus](docs/Model/NetworkSecurityRuleResourcesStatus.md)
- [NetworkSecurityRuleStatus](docs/Model/NetworkSecurityRuleStatus.md)
- [NgtListMetadata](docs/Model/NgtListMetadata.md)
- [NgtListMetadataOutput](docs/Model/NgtListMetadataOutput.md)
- [NgtListResponse](docs/Model/NgtListResponse.md)
- [NgtMetadata](docs/Model/NgtMetadata.md)
- [NgtPolicy](docs/Model/NgtPolicy.md)
- [NgtPolicyDefStatus](docs/Model/NgtPolicyDefStatus.md)
- [NgtPolicyIntentInput](docs/Model/NgtPolicyIntentInput.md)
- [NgtPolicyIntentResource](docs/Model/NgtPolicyIntentResource.md)
- [NgtPolicyIntentResponse](docs/Model/NgtPolicyIntentResponse.md)
- [NgtPolicyListIntentResponse](docs/Model/NgtPolicyListIntentResponse.md)
- [NgtPolicyListMetadata](docs/Model/NgtPolicyListMetadata.md)
- [NgtPolicyListMetadataOutput](docs/Model/NgtPolicyListMetadataOutput.md)
- [NgtPolicyMetadata](docs/Model/NgtPolicyMetadata.md)
- [NgtPolicyReference](docs/Model/NgtPolicyReference.md)
- [NgtPolicyResources](docs/Model/NgtPolicyResources.md)
- [NgtPolicyResourcesParameters](docs/Model/NgtPolicyResourcesParameters.md)
- [NgtPolicyStatus](docs/Model/NgtPolicyStatus.md)
- [NgtReference](docs/Model/NgtReference.md)
- [NgtResponse](docs/Model/NgtResponse.md)
- [NgtStatus](docs/Model/NgtStatus.md)
- [NicUpdateIpInfo](docs/Model/NicUpdateIpInfo.md)
- [Node](docs/Model/Node.md)
- [NodeSpec](docs/Model/NodeSpec.md)
- [NotificationPolicy](docs/Model/NotificationPolicy.md)
- [NucalmServiceConfigInput](docs/Model/NucalmServiceConfigInput.md)
- [NusightsProxyListMetadata](docs/Model/NusightsProxyListMetadata.md)
- [NusightsProxyListMetadataOutput](docs/Model/NusightsProxyListMetadataOutput.md)
- [NusightsProxyMetadata](docs/Model/NusightsProxyMetadata.md)
- [NusightsProxyReference](docs/Model/NusightsProxyReference.md)
- [NusightsProxyStatus](docs/Model/NusightsProxyStatus.md)
- [NutanixGuestToolsSpec](docs/Model/NutanixGuestToolsSpec.md)
- [NutanixGuestToolsStatus](docs/Model/NutanixGuestToolsStatus.md)
- [OauthClientInput](docs/Model/OauthClientInput.md)
- [OauthClientList](docs/Model/OauthClientList.md)
- [OauthClientListMetadata](docs/Model/OauthClientListMetadata.md)
- [OauthClientListMetadataOutput](docs/Model/OauthClientListMetadataOutput.md)
- [OauthClientMetadata](docs/Model/OauthClientMetadata.md)
- [OauthClientReference](docs/Model/OauthClientReference.md)
- [OauthClientResponse](docs/Model/OauthClientResponse.md)
- [OauthClientStatus](docs/Model/OauthClientStatus.md)
- [OauthGenerateTokenRequest](docs/Model/OauthGenerateTokenRequest.md)
- [OauthGenerateTokenResponse](docs/Model/OauthGenerateTokenResponse.md)
- [OauthListMetadata](docs/Model/OauthListMetadata.md)
- [OauthListMetadataOutput](docs/Model/OauthListMetadataOutput.md)
- [OauthMetadata](docs/Model/OauthMetadata.md)
- [OauthReference](docs/Model/OauthReference.md)
- [OauthStatus](docs/Model/OauthStatus.md)
- [OauthToken](docs/Model/OauthToken.md)
- [OpenLdapConfiguration](docs/Model/OpenLdapConfiguration.md)
- [OpenLdapConfigurationDefStatus](docs/Model/OpenLdapConfigurationDefStatus.md)
- [OpenLdapConfigurationDefStatusUserConfiguration](docs/Model/OpenLdapConfigurationDefStatusUserConfiguration.md)
- [OpenLdapConfigurationDefStatusUserGroupConfiguration](docs/Model/OpenLdapConfigurationDefStatusUserGroupConfiguration.md)
- [OpenLdapConfigurationUserConfiguration](docs/Model/OpenLdapConfigurationUserConfiguration.md)
- [OpenLdapConfigurationUserGroupConfiguration](docs/Model/OpenLdapConfigurationUserGroupConfiguration.md)
- [OplogUsage](docs/Model/OplogUsage.md)
- [OspfConfig](docs/Model/OspfConfig.md)
- [OspfConfigStatus](docs/Model/OspfConfigStatus.md)
- [OssServiceConfigInput](docs/Model/OssServiceConfigInput.md)
- [OvaCreateInput](docs/Model/OvaCreateInput.md)
- [OvaDiskInfo](docs/Model/OvaDiskInfo.md)
- [OvaDiskInfoDeviceProperties](docs/Model/OvaDiskInfoDeviceProperties.md)
- [OvaDiskListResponse](docs/Model/OvaDiskListResponse.md)
- [OvaGetResponse](docs/Model/OvaGetResponse.md)
- [OvaInfo](docs/Model/OvaInfo.md)
- [OvaListMetadata](docs/Model/OvaListMetadata.md)
- [OvaListMetadataOutput](docs/Model/OvaListMetadataOutput.md)
- [OvaListResponse](docs/Model/OvaListResponse.md)
- [OvaMetadata](docs/Model/OvaMetadata.md)
- [OvaUpdateInput](docs/Model/OvaUpdateInput.md)
- [PacketTrace](docs/Model/PacketTrace.md)
- [PacketTraceInput](docs/Model/PacketTraceInput.md)
- [PacketTraceStage](docs/Model/PacketTraceStage.md)
- [Page](docs/Model/Page.md)
- [PageMetadata](docs/Model/PageMetadata.md)
- [ParamDescriptor](docs/Model/ParamDescriptor.md)
- [ParamDescriptorChoiceListInner](docs/Model/ParamDescriptorChoiceListInner.md)
- [ParamDescriptorParentParamsInner](docs/Model/ParamDescriptorParentParamsInner.md)
- [ParamValue](docs/Model/ParamValue.md)
- [ParameterError](docs/Model/ParameterError.md)
- [PcVm](docs/Model/PcVm.md)
- [PcVmNicConfiguration](docs/Model/PcVmNicConfiguration.md)
- [PemkeySpec](docs/Model/PemkeySpec.md)
- [Permission](docs/Model/Permission.md)
- [PermissionDefStatus](docs/Model/PermissionDefStatus.md)
- [PermissionIntentInput](docs/Model/PermissionIntentInput.md)
- [PermissionIntentResource](docs/Model/PermissionIntentResource.md)
- [PermissionIntentResponse](docs/Model/PermissionIntentResponse.md)
- [PermissionListIntentResponse](docs/Model/PermissionListIntentResponse.md)
- [PermissionListMetadata](docs/Model/PermissionListMetadata.md)
- [PermissionListMetadataOutput](docs/Model/PermissionListMetadataOutput.md)
- [PermissionMetadata](docs/Model/PermissionMetadata.md)
- [PermissionReference](docs/Model/PermissionReference.md)
- [PermissionResources](docs/Model/PermissionResources.md)
- [PermissionStatus](docs/Model/PermissionStatus.md)
- [Perspective](docs/Model/Perspective.md)
- [PerspectiveLink](docs/Model/PerspectiveLink.md)
- [PerspectiveLinkGroup](docs/Model/PerspectiveLinkGroup.md)
- [PhysicalAvailabilityZone](docs/Model/PhysicalAvailabilityZone.md)
- [PhysicalAvailabilityZoneListMetadata](docs/Model/PhysicalAvailabilityZoneListMetadata.md)
- [PhysicalAvailabilityZoneListMetadataOutput](docs/Model/PhysicalAvailabilityZoneListMetadataOutput.md)
- [PhysicalAvailabilityZoneMetadata](docs/Model/PhysicalAvailabilityZoneMetadata.md)
- [PhysicalAvailabilityZoneReference](docs/Model/PhysicalAvailabilityZoneReference.md)
- [PhysicalAvailabilityZoneResources](docs/Model/PhysicalAvailabilityZoneResources.md)
- [PhysicalAvailabilityZoneStatus](docs/Model/PhysicalAvailabilityZoneStatus.md)
- [PlacementDetail](docs/Model/PlacementDetail.md)
- [PlacementEntityFilter](docs/Model/PlacementEntityFilter.md)
- [PlacementSpec](docs/Model/PlacementSpec.md)
- [PoliciesInner](docs/Model/PoliciesInner.md)
- [PoolStats](docs/Model/PoolStats.md)
- [PortRange](docs/Model/PortRange.md)
- [PortRangeStatus](docs/Model/PortRangeStatus.md)
- [PortalSoftware](docs/Model/PortalSoftware.md)
- [PostalAddress](docs/Model/PostalAddress.md)
- [PrismCentral](docs/Model/PrismCentral.md)
- [PrismCentralEnableCmspStatus](docs/Model/PrismCentralEnableCmspStatus.md)
- [PrismCentralListMetadata](docs/Model/PrismCentralListMetadata.md)
- [PrismCentralListMetadataOutput](docs/Model/PrismCentralListMetadataOutput.md)
- [PrismCentralMetadata](docs/Model/PrismCentralMetadata.md)
- [PrismCentralNodes](docs/Model/PrismCentralNodes.md)
- [PrismCentralNodesListMetadata](docs/Model/PrismCentralNodesListMetadata.md)
- [PrismCentralNodesListMetadataOutput](docs/Model/PrismCentralNodesListMetadataOutput.md)
- [PrismCentralNodesMetadata](docs/Model/PrismCentralNodesMetadata.md)
- [PrismCentralNodesReference](docs/Model/PrismCentralNodesReference.md)
- [PrismCentralNodesResources](docs/Model/PrismCentralNodesResources.md)
- [PrismCentralNodesStatus](docs/Model/PrismCentralNodesStatus.md)
- [PrismCentralReference](docs/Model/PrismCentralReference.md)
- [PrismCentralRequestStatus](docs/Model/PrismCentralRequestStatus.md)
- [PrismCentralResources](docs/Model/PrismCentralResources.md)
- [PrismCentralStatus](docs/Model/PrismCentralStatus.md)
- [ProceduralErrorResponse](docs/Model/ProceduralErrorResponse.md)
- [ProceduralResponse](docs/Model/ProceduralResponse.md)
- [Project](docs/Model/Project.md)
- [ProjectDefStatus](docs/Model/ProjectDefStatus.md)
- [ProjectDetails](docs/Model/ProjectDetails.md)
- [ProjectIntentInput](docs/Model/ProjectIntentInput.md)
- [ProjectIntentResource](docs/Model/ProjectIntentResource.md)
- [ProjectIntentResponse](docs/Model/ProjectIntentResponse.md)
- [ProjectInternal](docs/Model/ProjectInternal.md)
- [ProjectInternalAccessControlPolicyListInner](docs/Model/ProjectInternalAccessControlPolicyListInner.md)
- [ProjectInternalAccessControlPolicyListInnerMetadata](docs/Model/ProjectInternalAccessControlPolicyListInnerMetadata.md)
- [ProjectInternalDefStatus](docs/Model/ProjectInternalDefStatus.md)
- [ProjectInternalDefStatusAccessControlPolicyListStatusInner](docs/Model/ProjectInternalDefStatusAccessControlPolicyListStatusInner.md)
- [ProjectInternalIntentInput](docs/Model/ProjectInternalIntentInput.md)
- [ProjectInternalIntentResponse](docs/Model/ProjectInternalIntentResponse.md)
- [ProjectInternalUserGroupListInner](docs/Model/ProjectInternalUserGroupListInner.md)
- [ProjectInternalUserListInner](docs/Model/ProjectInternalUserListInner.md)
- [ProjectListIntentResponse](docs/Model/ProjectListIntentResponse.md)
- [ProjectListMetadata](docs/Model/ProjectListMetadata.md)
- [ProjectListMetadataOutput](docs/Model/ProjectListMetadataOutput.md)
- [ProjectMetadata](docs/Model/ProjectMetadata.md)
- [ProjectReference](docs/Model/ProjectReference.md)
- [ProjectResourceStatus](docs/Model/ProjectResourceStatus.md)
- [ProjectResources](docs/Model/ProjectResources.md)
- [ProjectResources1](docs/Model/ProjectResources1.md)
- [ProjectResources2](docs/Model/ProjectResources2.md)
- [ProjectResources3](docs/Model/ProjectResources3.md)
- [ProjectStatus](docs/Model/ProjectStatus.md)
- [ProtectionInfo](docs/Model/ProtectionInfo.md)
- [ProtectionPolicyState](docs/Model/ProtectionPolicyState.md)
- [ProtectionRule](docs/Model/ProtectionRule.md)
- [ProtectionRuleDefStatus](docs/Model/ProtectionRuleDefStatus.md)
- [ProtectionRuleIntentInput](docs/Model/ProtectionRuleIntentInput.md)
- [ProtectionRuleIntentResource](docs/Model/ProtectionRuleIntentResource.md)
- [ProtectionRuleIntentResponse](docs/Model/ProtectionRuleIntentResponse.md)
- [ProtectionRuleListIntentResponse](docs/Model/ProtectionRuleListIntentResponse.md)
- [ProtectionRuleListMetadata](docs/Model/ProtectionRuleListMetadata.md)
- [ProtectionRuleListMetadataOutput](docs/Model/ProtectionRuleListMetadataOutput.md)
- [ProtectionRuleMetadata](docs/Model/ProtectionRuleMetadata.md)
- [ProtectionRuleReference](docs/Model/ProtectionRuleReference.md)
- [ProtectionRuleResources](docs/Model/ProtectionRuleResources.md)
- [ProtectionRuleResourcesAvailabilityZoneConnectivityListInner](docs/Model/ProtectionRuleResourcesAvailabilityZoneConnectivityListInner.md)
- [ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner](docs/Model/ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner.md)
- [ProtectionRuleResourcesOrderedAvailabilityZoneListInner](docs/Model/ProtectionRuleResourcesOrderedAvailabilityZoneListInner.md)
- [ProtectionRuleStatus](docs/Model/ProtectionRuleStatus.md)
- [ProtocolParameters](docs/Model/ProtocolParameters.md)
- [ProtocolParametersStatus](docs/Model/ProtocolParametersStatus.md)
- [ProviderOauthToken](docs/Model/ProviderOauthToken.md)
- [PublicKey](docs/Model/PublicKey.md)
- [PulseConfiguration](docs/Model/PulseConfiguration.md)
- [QosConfig](docs/Model/QosConfig.md)
- [QosConfigStatus](docs/Model/QosConfigStatus.md)
- [QuarantineRule](docs/Model/QuarantineRule.md)
- [QuarantineRule1](docs/Model/QuarantineRule1.md)
- [QueryEntitiesResponse](docs/Model/QueryEntitiesResponse.md)
- [QueryEntitiesResponseEntityListInner](docs/Model/QueryEntitiesResponseEntityListInner.md)
- [QueryEntitiesResponseEntityListInnerErrorReasonListInner](docs/Model/QueryEntitiesResponseEntityListInnerErrorReasonListInner.md)
- [QueryGroupResults](docs/Model/QueryGroupResults.md)
- [QueryGroupsEntity](docs/Model/QueryGroupsEntity.md)
- [QueryGroupsFieldData](docs/Model/QueryGroupsFieldData.md)
- [QueryRequest](docs/Model/QueryRequest.md)
- [QueryResponse](docs/Model/QueryResponse.md)
- [QueryResult](docs/Model/QueryResult.md)
- [QueryTerm](docs/Model/QueryTerm.md)
- [QueryTimevaluePair](docs/Model/QueryTimevaluePair.md)
- [QueryValue](docs/Model/QueryValue.md)
- [Rack](docs/Model/Rack.md)
- [RackConfig](docs/Model/RackConfig.md)
- [RackDefStatus](docs/Model/RackDefStatus.md)
- [RackIntentInput](docs/Model/RackIntentInput.md)
- [RackIntentResource](docs/Model/RackIntentResource.md)
- [RackIntentResponse](docs/Model/RackIntentResponse.md)
- [RackListIntentResponse](docs/Model/RackListIntentResponse.md)
- [RackListMetadata](docs/Model/RackListMetadata.md)
- [RackListMetadataOutput](docs/Model/RackListMetadataOutput.md)
- [RackMetadata](docs/Model/RackMetadata.md)
- [RackReference](docs/Model/RackReference.md)
- [RackResources](docs/Model/RackResources.md)
- [RackStatus](docs/Model/RackStatus.md)
- [RackableUnit](docs/Model/RackableUnit.md)
- [RackableUnitDefStatus](docs/Model/RackableUnitDefStatus.md)
- [RackableUnitIntentInput](docs/Model/RackableUnitIntentInput.md)
- [RackableUnitIntentResource](docs/Model/RackableUnitIntentResource.md)
- [RackableUnitIntentResponse](docs/Model/RackableUnitIntentResponse.md)
- [RackableUnitListIntentResponse](docs/Model/RackableUnitListIntentResponse.md)
- [RackableUnitListMetadata](docs/Model/RackableUnitListMetadata.md)
- [RackableUnitListMetadataOutput](docs/Model/RackableUnitListMetadataOutput.md)
- [RackableUnitMetadata](docs/Model/RackableUnitMetadata.md)
- [RackableUnitReference](docs/Model/RackableUnitReference.md)
- [RackableUnitResources](docs/Model/RackableUnitResources.md)
- [RackableUnitStatus](docs/Model/RackableUnitStatus.md)
- [RcaMetadata](docs/Model/RcaMetadata.md)
- [RebootNgtPolicyParameters](docs/Model/RebootNgtPolicyParameters.md)
- [RebootNgtPolicyParametersSchedule](docs/Model/RebootNgtPolicyParametersSchedule.md)
- [Recipient](docs/Model/Recipient.md)
- [RecommendationParams](docs/Model/RecommendationParams.md)
- [RecoverEntities](docs/Model/RecoverEntities.md)
- [RecoverEntitiesEntityInfoListInner](docs/Model/RecoverEntitiesEntityInfoListInner.md)
- [RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner](docs/Model/RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner.md)
- [RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInnerVolumeGroupAttachmentInfoListInner](docs/Model/RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInnerVolumeGroupAttachmentInfoListInner.md)
- [RecoveredEntityInformation](docs/Model/RecoveredEntityInformation.md)
- [RecoveredEntityInformationRecoveredEntityInfo](docs/Model/RecoveredEntityInformationRecoveredEntityInfo.md)
- [RecoveryPlan](docs/Model/RecoveryPlan.md)
- [RecoveryPlanDataServiceIpConfig](docs/Model/RecoveryPlanDataServiceIpConfig.md)
- [RecoveryPlanDefStatus](docs/Model/RecoveryPlanDefStatus.md)
- [RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner](docs/Model/RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner.md)
- [RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInnerAvailabilityZoneOrderListInner](docs/Model/RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInnerAvailabilityZoneOrderListInner.md)
- [RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInnerAvailabilityZoneOrderListInnerAvailabilityZoneListInner](docs/Model/RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInnerAvailabilityZoneOrderListInnerAvailabilityZoneListInner.md)
- [RecoveryPlanEntities](docs/Model/RecoveryPlanEntities.md)
- [RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInner](docs/Model/RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInner.md)
- [RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerAvailabilityZoneOrderListInner](docs/Model/RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerAvailabilityZoneOrderListInner.md)
- [RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerAvailabilityZoneOrderListInnerAvailabilityZoneListInner](docs/Model/RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerAvailabilityZoneOrderListInnerAvailabilityZoneListInner.md)
- [RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInner](docs/Model/RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInner.md)
- [RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInnerRecoverability](docs/Model/RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInnerRecoverability.md)
- [RecoveryPlanFloatingIpConfig](docs/Model/RecoveryPlanFloatingIpConfig.md)
- [RecoveryPlanInfo](docs/Model/RecoveryPlanInfo.md)
- [RecoveryPlanInfoRecoverability](docs/Model/RecoveryPlanInfoRecoverability.md)
- [RecoveryPlanIntentInput](docs/Model/RecoveryPlanIntentInput.md)
- [RecoveryPlanIntentResource](docs/Model/RecoveryPlanIntentResource.md)
- [RecoveryPlanIntentResponse](docs/Model/RecoveryPlanIntentResponse.md)
- [RecoveryPlanJob](docs/Model/RecoveryPlanJob.md)
- [RecoveryPlanJobActionRequest](docs/Model/RecoveryPlanJobActionRequest.md)
- [RecoveryPlanJobDefStatus](docs/Model/RecoveryPlanJobDefStatus.md)
- [RecoveryPlanJobDefStatusRecoveryPlanSpecification](docs/Model/RecoveryPlanJobDefStatusRecoveryPlanSpecification.md)
- [RecoveryPlanJobDefStatusValidationInformation](docs/Model/RecoveryPlanJobDefStatusValidationInformation.md)
- [RecoveryPlanJobExecutionPhasesStatus](docs/Model/RecoveryPlanJobExecutionPhasesStatus.md)
- [RecoveryPlanJobExecutionStatus](docs/Model/RecoveryPlanJobExecutionStatus.md)
- [RecoveryPlanJobIntentInput](docs/Model/RecoveryPlanJobIntentInput.md)
- [RecoveryPlanJobIntentResource](docs/Model/RecoveryPlanJobIntentResource.md)
- [RecoveryPlanJobIntentResponse](docs/Model/RecoveryPlanJobIntentResponse.md)
- [RecoveryPlanJobListIntentResponse](docs/Model/RecoveryPlanJobListIntentResponse.md)
- [RecoveryPlanJobListMetadata](docs/Model/RecoveryPlanJobListMetadata.md)
- [RecoveryPlanJobListMetadataOutput](docs/Model/RecoveryPlanJobListMetadataOutput.md)
- [RecoveryPlanJobMetadata](docs/Model/RecoveryPlanJobMetadata.md)
- [RecoveryPlanJobPhaseExecutionStatus](docs/Model/RecoveryPlanJobPhaseExecutionStatus.md)
- [RecoveryPlanJobReference](docs/Model/RecoveryPlanJobReference.md)
- [RecoveryPlanJobResources](docs/Model/RecoveryPlanJobResources.md)
- [RecoveryPlanJobResourcesExecutionParameters](docs/Model/RecoveryPlanJobResourcesExecutionParameters.md)
- [RecoveryPlanJobResponse](docs/Model/RecoveryPlanJobResponse.md)
- [RecoveryPlanJobStatus](docs/Model/RecoveryPlanJobStatus.md)
- [RecoveryPlanJobStepExecutionStatus](docs/Model/RecoveryPlanJobStepExecutionStatus.md)
- [RecoveryPlanJobStepStatus](docs/Model/RecoveryPlanJobStepStatus.md)
- [RecoveryPlanListIntentResponse](docs/Model/RecoveryPlanListIntentResponse.md)
- [RecoveryPlanListMetadata](docs/Model/RecoveryPlanListMetadata.md)
- [RecoveryPlanListMetadataOutput](docs/Model/RecoveryPlanListMetadataOutput.md)
- [RecoveryPlanMetadata](docs/Model/RecoveryPlanMetadata.md)
- [RecoveryPlanNetwork](docs/Model/RecoveryPlanNetwork.md)
- [RecoveryPlanPolicyState](docs/Model/RecoveryPlanPolicyState.md)
- [RecoveryPlanReference](docs/Model/RecoveryPlanReference.md)
- [RecoveryPlanResources](docs/Model/RecoveryPlanResources.md)
- [RecoveryPlanResourcesParameters](docs/Model/RecoveryPlanResourcesParameters.md)
- [RecoveryPlanResourcesParametersDataServiceIpMappingListInner](docs/Model/RecoveryPlanResourcesParametersDataServiceIpMappingListInner.md)
- [RecoveryPlanResourcesParametersFloatingIpAssignmentListInner](docs/Model/RecoveryPlanResourcesParametersFloatingIpAssignmentListInner.md)
- [RecoveryPlanResourcesParametersFloatingIpAssignmentListInnerVmIpAssignmentListInner](docs/Model/RecoveryPlanResourcesParametersFloatingIpAssignmentListInnerVmIpAssignmentListInner.md)
- [RecoveryPlanResourcesParametersFloatingIpAssignmentListInnerVmIpAssignmentListInnerVmNicInformation](docs/Model/RecoveryPlanResourcesParametersFloatingIpAssignmentListInnerVmIpAssignmentListInnerVmNicInformation.md)
- [RecoveryPlanResourcesParametersNetworkMappingListInner](docs/Model/RecoveryPlanResourcesParametersNetworkMappingListInner.md)
- [RecoveryPlanResourcesParametersNetworkMappingListInnerAvailabilityZoneNetworkMappingListInner](docs/Model/RecoveryPlanResourcesParametersNetworkMappingListInnerAvailabilityZoneNetworkMappingListInner.md)
- [RecoveryPlanScriptConfig](docs/Model/RecoveryPlanScriptConfig.md)
- [RecoveryPlanStage](docs/Model/RecoveryPlanStage.md)
- [RecoveryPlanStageStageWork](docs/Model/RecoveryPlanStageStageWork.md)
- [RecoveryPlanStatus](docs/Model/RecoveryPlanStatus.md)
- [RecoveryPlanSubnetConfig](docs/Model/RecoveryPlanSubnetConfig.md)
- [RecoveryPlanValidationMessage](docs/Model/RecoveryPlanValidationMessage.md)
- [RecoveryPlanValidationMessageCauseAndResolutionMessageListInner](docs/Model/RecoveryPlanValidationMessageCauseAndResolutionMessageListInner.md)
- [RecoveryPlanVmIpAssignment](docs/Model/RecoveryPlanVmIpAssignment.md)
- [RecoveryPlanVmIpAssignmentIpConfigListInner](docs/Model/RecoveryPlanVmIpAssignmentIpConfigListInner.md)
- [RecoveryPlanVolumeGroupRecoveryInfo](docs/Model/RecoveryPlanVolumeGroupRecoveryInfo.md)
- [RecoveryPlanVolumeGroupRecoveryInfoVolumeGroupConfigInfoListInner](docs/Model/RecoveryPlanVolumeGroupRecoveryInfoVolumeGroupConfigInfoListInner.md)
- [RecoveryPointResourceReservationSpec](docs/Model/RecoveryPointResourceReservationSpec.md)
- [RecoveryPointResourceReservationSpecRecoveryPointSpec](docs/Model/RecoveryPointResourceReservationSpecRecoveryPointSpec.md)
- [RecoveryPointResourceReservationSpecResourceReservationSpec](docs/Model/RecoveryPointResourceReservationSpecResourceReservationSpec.md)
- [RecoveryPointResources](docs/Model/RecoveryPointResources.md)
- [RecoveryPointResources1](docs/Model/RecoveryPointResources1.md)
- [RecoveryPointResources1Recoverability](docs/Model/RecoveryPointResources1Recoverability.md)
- [RecoveryPointRestoreInput](docs/Model/RecoveryPointRestoreInput.md)
- [RecoveryPointRestoreInputVmListInner](docs/Model/RecoveryPointRestoreInputVmListInner.md)
- [Reference](docs/Model/Reference.md)
- [RemoteConnection](docs/Model/RemoteConnection.md)
- [RemoteConnectionCredential](docs/Model/RemoteConnectionCredential.md)
- [RemoteConnectionDefStatus](docs/Model/RemoteConnectionDefStatus.md)
- [RemoteConnectionInfo](docs/Model/RemoteConnectionInfo.md)
- [RemoteConnectionIntentInput](docs/Model/RemoteConnectionIntentInput.md)
- [RemoteConnectionIntentResource](docs/Model/RemoteConnectionIntentResource.md)
- [RemoteConnectionIntentResponse](docs/Model/RemoteConnectionIntentResponse.md)
- [RemoteConnectionListIntentResponse](docs/Model/RemoteConnectionListIntentResponse.md)
- [RemoteConnectionListMetadata](docs/Model/RemoteConnectionListMetadata.md)
- [RemoteConnectionListMetadataOutput](docs/Model/RemoteConnectionListMetadataOutput.md)
- [RemoteConnectionMetadata](docs/Model/RemoteConnectionMetadata.md)
- [RemoteConnectionReference](docs/Model/RemoteConnectionReference.md)
- [RemoteConnectionResources](docs/Model/RemoteConnectionResources.md)
- [RemoteConnectionStatus](docs/Model/RemoteConnectionStatus.md)
- [RemoteConnectionToken](docs/Model/RemoteConnectionToken.md)
- [RemoteRpcRequestInput](docs/Model/RemoteRpcRequestInput.md)
- [RemoteSyslogModule](docs/Model/RemoteSyslogModule.md)
- [RemoteSyslogModuleDefStatus](docs/Model/RemoteSyslogModuleDefStatus.md)
- [RemoteSyslogModuleIntentInput](docs/Model/RemoteSyslogModuleIntentInput.md)
- [RemoteSyslogModuleIntentResource](docs/Model/RemoteSyslogModuleIntentResource.md)
- [RemoteSyslogModuleIntentResponse](docs/Model/RemoteSyslogModuleIntentResponse.md)
- [RemoteSyslogModuleListIntentResponse](docs/Model/RemoteSyslogModuleListIntentResponse.md)
- [RemoteSyslogModuleListMetadata](docs/Model/RemoteSyslogModuleListMetadata.md)
- [RemoteSyslogModuleListMetadataOutput](docs/Model/RemoteSyslogModuleListMetadataOutput.md)
- [RemoteSyslogModuleMetadata](docs/Model/RemoteSyslogModuleMetadata.md)
- [RemoteSyslogModuleReference](docs/Model/RemoteSyslogModuleReference.md)
- [RemoteSyslogModuleResources](docs/Model/RemoteSyslogModuleResources.md)
- [RemoteSyslogModuleStatus](docs/Model/RemoteSyslogModuleStatus.md)
- [RemoteSyslogServer](docs/Model/RemoteSyslogServer.md)
- [RemoteSyslogServerDefStatus](docs/Model/RemoteSyslogServerDefStatus.md)
- [RemoteSyslogServerIntentInput](docs/Model/RemoteSyslogServerIntentInput.md)
- [RemoteSyslogServerIntentResource](docs/Model/RemoteSyslogServerIntentResource.md)
- [RemoteSyslogServerIntentResponse](docs/Model/RemoteSyslogServerIntentResponse.md)
- [RemoteSyslogServerListIntentResponse](docs/Model/RemoteSyslogServerListIntentResponse.md)
- [RemoteSyslogServerListMetadata](docs/Model/RemoteSyslogServerListMetadata.md)
- [RemoteSyslogServerListMetadataOutput](docs/Model/RemoteSyslogServerListMetadataOutput.md)
- [RemoteSyslogServerMetadata](docs/Model/RemoteSyslogServerMetadata.md)
- [RemoteSyslogServerReference](docs/Model/RemoteSyslogServerReference.md)
- [RemoteSyslogServerStatus](docs/Model/RemoteSyslogServerStatus.md)
- [RepetitionCriteria](docs/Model/RepetitionCriteria.md)
- [ReplicateRecoveryPointInput](docs/Model/ReplicateRecoveryPointInput.md)
- [ReportConfig](docs/Model/ReportConfig.md)
- [ReportConfigDefStatus](docs/Model/ReportConfigDefStatus.md)
- [ReportConfigIntentInput](docs/Model/ReportConfigIntentInput.md)
- [ReportConfigIntentResource](docs/Model/ReportConfigIntentResource.md)
- [ReportConfigIntentResponse](docs/Model/ReportConfigIntentResponse.md)
- [ReportConfigListIntentResponse](docs/Model/ReportConfigListIntentResponse.md)
- [ReportConfigListMetadata](docs/Model/ReportConfigListMetadata.md)
- [ReportConfigListMetadataOutput](docs/Model/ReportConfigListMetadataOutput.md)
- [ReportConfigMetadata](docs/Model/ReportConfigMetadata.md)
- [ReportConfigReference](docs/Model/ReportConfigReference.md)
- [ReportConfigResources](docs/Model/ReportConfigResources.md)
- [ReportConfigResources1](docs/Model/ReportConfigResources1.md)
- [ReportConfigStatus](docs/Model/ReportConfigStatus.md)
- [ReportCustomization](docs/Model/ReportCustomization.md)
- [ReportInstance](docs/Model/ReportInstance.md)
- [ReportInstance1](docs/Model/ReportInstance1.md)
- [ReportInstanceDefStatus](docs/Model/ReportInstanceDefStatus.md)
- [ReportInstanceIntentInput](docs/Model/ReportInstanceIntentInput.md)
- [ReportInstanceIntentResource](docs/Model/ReportInstanceIntentResource.md)
- [ReportInstanceIntentResponse](docs/Model/ReportInstanceIntentResponse.md)
- [ReportInstanceListIntentResponse](docs/Model/ReportInstanceListIntentResponse.md)
- [ReportInstanceListMetadata](docs/Model/ReportInstanceListMetadata.md)
- [ReportInstanceListMetadataOutput](docs/Model/ReportInstanceListMetadataOutput.md)
- [ReportInstanceMetadata](docs/Model/ReportInstanceMetadata.md)
- [ReportInstanceReference](docs/Model/ReportInstanceReference.md)
- [ReportInstanceStatus](docs/Model/ReportInstanceStatus.md)
- [ReportNotificationSpec](docs/Model/ReportNotificationSpec.md)
- [ReportParams](docs/Model/ReportParams.md)
- [ReportTemplate](docs/Model/ReportTemplate.md)
- [ResourceChargeListMetadata](docs/Model/ResourceChargeListMetadata.md)
- [ResourceChargeListMetadataOutput](docs/Model/ResourceChargeListMetadataOutput.md)
- [ResourceChargeMetadata](docs/Model/ResourceChargeMetadata.md)
- [ResourceChargeReference](docs/Model/ResourceChargeReference.md)
- [ResourceChargeStatus](docs/Model/ResourceChargeStatus.md)
- [ResourceDomainListMetadata](docs/Model/ResourceDomainListMetadata.md)
- [ResourceDomainListMetadataOutput](docs/Model/ResourceDomainListMetadataOutput.md)
- [ResourceDomainMetadata](docs/Model/ResourceDomainMetadata.md)
- [ResourceDomainReference](docs/Model/ResourceDomainReference.md)
- [ResourceDomainResourcesStatus](docs/Model/ResourceDomainResourcesStatus.md)
- [ResourceDomainSpec](docs/Model/ResourceDomainSpec.md)
- [ResourceDomainStatus](docs/Model/ResourceDomainStatus.md)
- [ResourceTimeSeries](docs/Model/ResourceTimeSeries.md)
- [ResourceUploadResponse](docs/Model/ResourceUploadResponse.md)
- [ResourceUtilizationSpec](docs/Model/ResourceUtilizationSpec.md)
- [ResourceUtilizationStatus](docs/Model/ResourceUtilizationStatus.md)
- [Result](docs/Model/Result.md)
- [RetentionPolicy](docs/Model/RetentionPolicy.md)
- [RewriteRule](docs/Model/RewriteRule.md)
- [RightHandSide](docs/Model/RightHandSide.md)
- [Role](docs/Model/Role.md)
- [RoleDefStatus](docs/Model/RoleDefStatus.md)
- [RoleIntentInput](docs/Model/RoleIntentInput.md)
- [RoleIntentResource](docs/Model/RoleIntentResource.md)
- [RoleIntentResponse](docs/Model/RoleIntentResponse.md)
- [RoleListIntentResponse](docs/Model/RoleListIntentResponse.md)
- [RoleListMetadata](docs/Model/RoleListMetadata.md)
- [RoleListMetadataOutput](docs/Model/RoleListMetadataOutput.md)
- [RoleMetadata](docs/Model/RoleMetadata.md)
- [RoleReference](docs/Model/RoleReference.md)
- [RoleResources](docs/Model/RoleResources.md)
- [RoleResources1](docs/Model/RoleResources1.md)
- [RoleStatus](docs/Model/RoleStatus.md)
- [RootCertificate](docs/Model/RootCertificate.md)
- [Route](docs/Model/Route.md)
- [RouteNexthopReference](docs/Model/RouteNexthopReference.md)
- [RouteNexthopStatus](docs/Model/RouteNexthopStatus.md)
- [RouteStatus](docs/Model/RouteStatus.md)
- [RoutingPolicy](docs/Model/RoutingPolicy.md)
- [RoutingPolicyAction](docs/Model/RoutingPolicyAction.md)
- [RoutingPolicyActionStatus](docs/Model/RoutingPolicyActionStatus.md)
- [RoutingPolicyCounters](docs/Model/RoutingPolicyCounters.md)
- [RoutingPolicyDefStatus](docs/Model/RoutingPolicyDefStatus.md)
- [RoutingPolicyIntentInput](docs/Model/RoutingPolicyIntentInput.md)
- [RoutingPolicyIntentResource](docs/Model/RoutingPolicyIntentResource.md)
- [RoutingPolicyIntentResponse](docs/Model/RoutingPolicyIntentResponse.md)
- [RoutingPolicyListIntentResponse](docs/Model/RoutingPolicyListIntentResponse.md)
- [RoutingPolicyListMetadata](docs/Model/RoutingPolicyListMetadata.md)
- [RoutingPolicyListMetadataOutput](docs/Model/RoutingPolicyListMetadataOutput.md)
- [RoutingPolicyMetadata](docs/Model/RoutingPolicyMetadata.md)
- [RoutingPolicyReference](docs/Model/RoutingPolicyReference.md)
- [RoutingPolicyResources](docs/Model/RoutingPolicyResources.md)
- [RoutingPolicyResourcesDefStatus](docs/Model/RoutingPolicyResourcesDefStatus.md)
- [RoutingPolicyStatus](docs/Model/RoutingPolicyStatus.md)
- [RowElement](docs/Model/RowElement.md)
- [RuleExecutionPlan](docs/Model/RuleExecutionPlan.md)
- [Runway](docs/Model/Runway.md)
- [SamlUserGroupInput](docs/Model/SamlUserGroupInput.md)
- [Schedule](docs/Model/Schedule.md)
- [ScopeFilterExpression](docs/Model/ScopeFilterExpression.md)
- [ScopeRightHandSide](docs/Model/ScopeRightHandSide.md)
- [SearchRequest](docs/Model/SearchRequest.md)
- [Section](docs/Model/Section.md)
- [SecurityPlanningClusterCapability](docs/Model/SecurityPlanningClusterCapability.md)
- [SecurityPlanningClusterCapabilityStatus](docs/Model/SecurityPlanningClusterCapabilityStatus.md)
- [SecurityPlanningDataCollectorUpgradeConfigInput](docs/Model/SecurityPlanningDataCollectorUpgradeConfigInput.md)
- [SecurityPlanningDataCollectorUpgradeStatus](docs/Model/SecurityPlanningDataCollectorUpgradeStatus.md)
- [SecurityPlanningPrechecks](docs/Model/SecurityPlanningPrechecks.md)
- [SelectionCriteria](docs/Model/SelectionCriteria.md)
- [SerialPort](docs/Model/SerialPort.md)
- [ServiceAccount](docs/Model/ServiceAccount.md)
- [ServiceCapability](docs/Model/ServiceCapability.md)
- [ServiceCapabilityValidationMessageListInner](docs/Model/ServiceCapabilityValidationMessageListInner.md)
- [ServiceConfigStatus](docs/Model/ServiceConfigStatus.md)
- [ServiceEnablementStatus](docs/Model/ServiceEnablementStatus.md)
- [ServiceGroup](docs/Model/ServiceGroup.md)
- [ServiceGroupListMetadata](docs/Model/ServiceGroupListMetadata.md)
- [ServiceGroupListResponse](docs/Model/ServiceGroupListResponse.md)
- [ServiceGroupReference](docs/Model/ServiceGroupReference.md)
- [ServiceGroupResponse](docs/Model/ServiceGroupResponse.md)
- [ServiceGroupResponseResource](docs/Model/ServiceGroupResponseResource.md)
- [ServiceIpCounters](docs/Model/ServiceIpCounters.md)
- [ServiceResponse](docs/Model/ServiceResponse.md)
- [SingleResponse](docs/Model/SingleResponse.md)
- [SmtpServer](docs/Model/SmtpServer.md)
- [SnapshotRetentionPolicy](docs/Model/SnapshotRetentionPolicy.md)
- [SnapshotRetentionPolicyForRollupSchedules](docs/Model/SnapshotRetentionPolicyForRollupSchedules.md)
- [SoftwareListIntentResponse](docs/Model/SoftwareListIntentResponse.md)
- [SoftwareListMetadata](docs/Model/SoftwareListMetadata.md)
- [SoftwareListMetadataOutput](docs/Model/SoftwareListMetadataOutput.md)
- [SoftwareMetadata](docs/Model/SoftwareMetadata.md)
- [SoftwareReference](docs/Model/SoftwareReference.md)
- [SoftwareStatus](docs/Model/SoftwareStatus.md)
- [SourceAuth](docs/Model/SourceAuth.md)
- [SourceOptions](docs/Model/SourceOptions.md)
- [SpecForTheGivenEntityType](docs/Model/SpecForTheGivenEntityType.md)
- [SplunkWorkload](docs/Model/SplunkWorkload.md)
- [SqlWorkload](docs/Model/SqlWorkload.md)
- [SshUser](docs/Model/SshUser.md)
- [SshUserDefStatus](docs/Model/SshUserDefStatus.md)
- [SshUserDetails](docs/Model/SshUserDetails.md)
- [SshUserDetailsEntityListInner](docs/Model/SshUserDetailsEntityListInner.md)
- [SshUserIntentInput](docs/Model/SshUserIntentInput.md)
- [SshUserIntentResource](docs/Model/SshUserIntentResource.md)
- [SshUserIntentResponse](docs/Model/SshUserIntentResponse.md)
- [SshUserList](docs/Model/SshUserList.md)
- [SshUserListIntentResponse](docs/Model/SshUserListIntentResponse.md)
- [SshUserListMetadata](docs/Model/SshUserListMetadata.md)
- [SshUserListMetadataOutput](docs/Model/SshUserListMetadataOutput.md)
- [SshUserMetadata](docs/Model/SshUserMetadata.md)
- [SshUserReference](docs/Model/SshUserReference.md)
- [SshUserRequestDetails](docs/Model/SshUserRequestDetails.md)
- [SshUserRequestDetailsEntityListInner](docs/Model/SshUserRequestDetailsEntityListInner.md)
- [SshUserStatus](docs/Model/SshUserStatus.md)
- [SslKey](docs/Model/SslKey.md)
- [SspConfigInput](docs/Model/SspConfigInput.md)
- [SspMigrationStatus](docs/Model/SspMigrationStatus.md)
- [Status](docs/Model/Status.md)
- [StoragePolicy](docs/Model/StoragePolicy.md)
- [StoragePolicyComplianceCount](docs/Model/StoragePolicyComplianceCount.md)
- [StoragePolicyDefStatus](docs/Model/StoragePolicyDefStatus.md)
- [StoragePolicyIntentInput](docs/Model/StoragePolicyIntentInput.md)
- [StoragePolicyIntentResource](docs/Model/StoragePolicyIntentResource.md)
- [StoragePolicyIntentResponse](docs/Model/StoragePolicyIntentResponse.md)
- [StoragePolicyListIntentResponse](docs/Model/StoragePolicyListIntentResponse.md)
- [StoragePolicyListMetadata](docs/Model/StoragePolicyListMetadata.md)
- [StoragePolicyListMetadataOutput](docs/Model/StoragePolicyListMetadataOutput.md)
- [StoragePolicyMetadata](docs/Model/StoragePolicyMetadata.md)
- [StoragePolicyReference](docs/Model/StoragePolicyReference.md)
- [StoragePolicyResources](docs/Model/StoragePolicyResources.md)
- [StoragePolicyResourcesDefStatus](docs/Model/StoragePolicyResourcesDefStatus.md)
- [StoragePolicyStatus](docs/Model/StoragePolicyStatus.md)
- [StorageQoSParametersForTheEntities](docs/Model/StorageQoSParametersForTheEntities.md)
- [StorageQosPolicyConfigInput](docs/Model/StorageQosPolicyConfigInput.md)
- [StorageQosPolicyConfigOutput](docs/Model/StorageQosPolicyConfigOutput.md)
- [StreamingPolicy](docs/Model/StreamingPolicy.md)
- [StreamingPolicyDefStatus](docs/Model/StreamingPolicyDefStatus.md)
- [StreamingPolicyDetails](docs/Model/StreamingPolicyDetails.md)
- [StreamingPolicyIntentInput](docs/Model/StreamingPolicyIntentInput.md)
- [StreamingPolicyIntentResource](docs/Model/StreamingPolicyIntentResource.md)
- [StreamingPolicyIntentResponse](docs/Model/StreamingPolicyIntentResponse.md)
- [StreamingPolicyListIntentResponse](docs/Model/StreamingPolicyListIntentResponse.md)
- [StreamingPolicyListMetadata](docs/Model/StreamingPolicyListMetadata.md)
- [StreamingPolicyListMetadataOutput](docs/Model/StreamingPolicyListMetadataOutput.md)
- [StreamingPolicyMetadata](docs/Model/StreamingPolicyMetadata.md)
- [StreamingPolicyReference](docs/Model/StreamingPolicyReference.md)
- [StreamingPolicyRequestDetails](docs/Model/StreamingPolicyRequestDetails.md)
- [StreamingPolicyStatus](docs/Model/StreamingPolicyStatus.md)
- [StretchSiteParams](docs/Model/StretchSiteParams.md)
- [StretchStatus](docs/Model/StretchStatus.md)
- [Subnet](docs/Model/Subnet.md)
- [SubnetDefStatus](docs/Model/SubnetDefStatus.md)
- [SubnetIntentInput](docs/Model/SubnetIntentInput.md)
- [SubnetIntentResource](docs/Model/SubnetIntentResource.md)
- [SubnetIntentResponse](docs/Model/SubnetIntentResponse.md)
- [SubnetListIntentResponse](docs/Model/SubnetListIntentResponse.md)
- [SubnetListMetadata](docs/Model/SubnetListMetadata.md)
- [SubnetListMetadataOutput](docs/Model/SubnetListMetadataOutput.md)
- [SubnetMetadata](docs/Model/SubnetMetadata.md)
- [SubnetReference](docs/Model/SubnetReference.md)
- [SubnetResources](docs/Model/SubnetResources.md)
- [SubnetResourcesDefStatus](docs/Model/SubnetResourcesDefStatus.md)
- [SubnetStatus](docs/Model/SubnetStatus.md)
- [SupportCase](docs/Model/SupportCase.md)
- [SupportCaseDefStatus](docs/Model/SupportCaseDefStatus.md)
- [SupportCaseIntentInput](docs/Model/SupportCaseIntentInput.md)
- [SupportCaseIntentResource](docs/Model/SupportCaseIntentResource.md)
- [SupportCaseIntentResponse](docs/Model/SupportCaseIntentResponse.md)
- [SupportCaseListIntentResponse](docs/Model/SupportCaseListIntentResponse.md)
- [SupportCaseListMetadata](docs/Model/SupportCaseListMetadata.md)
- [SupportCaseListMetadataOutput](docs/Model/SupportCaseListMetadataOutput.md)
- [SupportCaseMetadata](docs/Model/SupportCaseMetadata.md)
- [SupportCaseReference](docs/Model/SupportCaseReference.md)
- [SupportCaseResources](docs/Model/SupportCaseResources.md)
- [SupportCaseResponse](docs/Model/SupportCaseResponse.md)
- [SupportCaseStatus](docs/Model/SupportCaseStatus.md)
- [SupportCaseTemplateResponse](docs/Model/SupportCaseTemplateResponse.md)
- [SupportCaseUpload](docs/Model/SupportCaseUpload.md)
- [SupportCaseUploadDefStatus](docs/Model/SupportCaseUploadDefStatus.md)
- [SupportCaseUploadIntentInput](docs/Model/SupportCaseUploadIntentInput.md)
- [SupportCaseUploadIntentResponse](docs/Model/SupportCaseUploadIntentResponse.md)
- [SupportCaseUploadListMetadata](docs/Model/SupportCaseUploadListMetadata.md)
- [SupportCaseUploadListMetadataOutput](docs/Model/SupportCaseUploadListMetadataOutput.md)
- [SupportCaseUploadMetadata](docs/Model/SupportCaseUploadMetadata.md)
- [SupportCaseUploadReference](docs/Model/SupportCaseUploadReference.md)
- [SupportCaseUploadResources](docs/Model/SupportCaseUploadResources.md)
- [SupportCaseUploadStatus](docs/Model/SupportCaseUploadStatus.md)
- [SyslogModule](docs/Model/SyslogModule.md)
- [SyslogServerResources](docs/Model/SyslogServerResources.md)
- [TargetGroup](docs/Model/TargetGroup.md)
- [Task](docs/Model/Task.md)
- [TaskListIntentResponse](docs/Model/TaskListIntentResponse.md)
- [TaskListMetadata](docs/Model/TaskListMetadata.md)
- [TaskListMetadataOutput](docs/Model/TaskListMetadataOutput.md)
- [TaskMetadata](docs/Model/TaskMetadata.md)
- [TaskPollInput](docs/Model/TaskPollInput.md)
- [TaskPollResponse](docs/Model/TaskPollResponse.md)
- [TaskReference](docs/Model/TaskReference.md)
- [TaskStatus](docs/Model/TaskStatus.md)
- [Tcp](docs/Model/Tcp.md)
- [TcpStatus](docs/Model/TcpStatus.md)
- [TemplateRow](docs/Model/TemplateRow.md)
- [Tenant](docs/Model/Tenant.md)
- [TenantListMetadata](docs/Model/TenantListMetadata.md)
- [TenantListMetadataOutput](docs/Model/TenantListMetadataOutput.md)
- [TenantMetadata](docs/Model/TenantMetadata.md)
- [TenantReference](docs/Model/TenantReference.md)
- [TenantStatus](docs/Model/TenantStatus.md)
- [TheFieldsThatCanBeAllowedOrDisallowedDuringAnOperation](docs/Model/TheFieldsThatCanBeAllowedOrDisallowedDuringAnOperation.md)
- [TimeseriesResponse](docs/Model/TimeseriesResponse.md)
- [Token](docs/Model/Token.md)
- [TopologyRequest](docs/Model/TopologyRequest.md)
- [TopologyResponse](docs/Model/TopologyResponse.md)
- [Traffic](docs/Model/Traffic.md)
- [TrafficVisibilityPrecheckResults](docs/Model/TrafficVisibilityPrecheckResults.md)
- [TrafficVisibilityValidationResult](docs/Model/TrafficVisibilityValidationResult.md)
- [TriggerInfo](docs/Model/TriggerInfo.md)
- [TriggerInstanceObject](docs/Model/TriggerInstanceObject.md)
- [TunnelReference](docs/Model/TunnelReference.md)
- [TunnelReferenceUpload](docs/Model/TunnelReferenceUpload.md)
- [Udp](docs/Model/Udp.md)
- [UdpStatus](docs/Model/UdpStatus.md)
- [UnbilledInvoice](docs/Model/UnbilledInvoice.md)
- [UnderlaySubnet](docs/Model/UnderlaySubnet.md)
- [UnderlaySubnetDefStatus](docs/Model/UnderlaySubnetDefStatus.md)
- [UnderlaySubnetIntentInput](docs/Model/UnderlaySubnetIntentInput.md)
- [UnderlaySubnetIntentResource](docs/Model/UnderlaySubnetIntentResource.md)
- [UnderlaySubnetIntentResponse](docs/Model/UnderlaySubnetIntentResponse.md)
- [UnderlaySubnetListIntentResponse](docs/Model/UnderlaySubnetListIntentResponse.md)
- [UnderlaySubnetListMetadata](docs/Model/UnderlaySubnetListMetadata.md)
- [UnderlaySubnetListMetadataOutput](docs/Model/UnderlaySubnetListMetadataOutput.md)
- [UnderlaySubnetMetadata](docs/Model/UnderlaySubnetMetadata.md)
- [UnderlaySubnetReference](docs/Model/UnderlaySubnetReference.md)
- [UnderlaySubnetResources](docs/Model/UnderlaySubnetResources.md)
- [UnderlaySubnetStatus](docs/Model/UnderlaySubnetStatus.md)
- [UpgradeNotification](docs/Model/UpgradeNotification.md)
- [User](docs/Model/User.md)
- [UserDefStatus](docs/Model/UserDefStatus.md)
- [UserDetailsObject](docs/Model/UserDetailsObject.md)
- [UserGroup](docs/Model/UserGroup.md)
- [UserGroupDefStatus](docs/Model/UserGroupDefStatus.md)
- [UserGroupInputResource](docs/Model/UserGroupInputResource.md)
- [UserGroupIntentInput](docs/Model/UserGroupIntentInput.md)
- [UserGroupIntentResource](docs/Model/UserGroupIntentResource.md)
- [UserGroupIntentResponse](docs/Model/UserGroupIntentResponse.md)
- [UserGroupListIntentResponse](docs/Model/UserGroupListIntentResponse.md)
- [UserGroupListMetadata](docs/Model/UserGroupListMetadata.md)
- [UserGroupListMetadataOutput](docs/Model/UserGroupListMetadataOutput.md)
- [UserGroupMetadata](docs/Model/UserGroupMetadata.md)
- [UserGroupOutputResource](docs/Model/UserGroupOutputResource.md)
- [UserGroupReference](docs/Model/UserGroupReference.md)
- [UserGroupStatus](docs/Model/UserGroupStatus.md)
- [UserInfo](docs/Model/UserInfo.md)
- [UserInputResource](docs/Model/UserInputResource.md)
- [UserIntentInput](docs/Model/UserIntentInput.md)
- [UserIntentResource](docs/Model/UserIntentResource.md)
- [UserIntentResponse](docs/Model/UserIntentResponse.md)
- [UserListIntentResponse](docs/Model/UserListIntentResponse.md)
- [UserListMetadata](docs/Model/UserListMetadata.md)
- [UserListMetadataOutput](docs/Model/UserListMetadataOutput.md)
- [UserMetadata](docs/Model/UserMetadata.md)
- [UserReference](docs/Model/UserReference.md)
- [UserStatus](docs/Model/UserStatus.md)
- [UserStatusResource](docs/Model/UserStatusResource.md)
- [UserStatusResourceResourceUsageSummary](docs/Model/UserStatusResourceResourceUsageSummary.md)
- [UserUsageInProjects](docs/Model/UserUsageInProjects.md)
- [UserUsageInProjectsProjectResourceDomainListInner](docs/Model/UserUsageInProjectsProjectResourceDomainListInner.md)
- [VMResources](docs/Model/VMResources.md)
- [VMResources1](docs/Model/VMResources1.md)
- [ValidateRackConfigInput](docs/Model/ValidateRackConfigInput.md)
- [ValidateRackConfigOutput](docs/Model/ValidateRackConfigOutput.md)
- [ValidationResult](docs/Model/ValidationResult.md)
- [ValueInfo](docs/Model/ValueInfo.md)
- [ValueInfoMaximum](docs/Model/ValueInfoMaximum.md)
- [ValueInfoMinimum](docs/Model/ValueInfoMinimum.md)
- [VcenterDeploymentDetails](docs/Model/VcenterDeploymentDetails.md)
- [VdiWorkload](docs/Model/VdiWorkload.md)
- [VendorConfig](docs/Model/VendorConfig.md)
- [VendorConfigListResponse](docs/Model/VendorConfigListResponse.md)
- [Versions](docs/Model/Versions.md)
- [Vertex](docs/Model/Vertex.md)
- [VgRecoveryPointListMetadata](docs/Model/VgRecoveryPointListMetadata.md)
- [VgRecoveryPointListMetadataOutput](docs/Model/VgRecoveryPointListMetadataOutput.md)
- [VgRecoveryPointMetadata](docs/Model/VgRecoveryPointMetadata.md)
- [VgRecoveryPointReference](docs/Model/VgRecoveryPointReference.md)
- [VgRecoveryPointStatus](docs/Model/VgRecoveryPointStatus.md)
- [VirtualNetwork](docs/Model/VirtualNetwork.md)
- [VirtualNetworkDefStatus](docs/Model/VirtualNetworkDefStatus.md)
- [VirtualNetworkIntentInput](docs/Model/VirtualNetworkIntentInput.md)
- [VirtualNetworkIntentResource](docs/Model/VirtualNetworkIntentResource.md)
- [VirtualNetworkIntentResponse](docs/Model/VirtualNetworkIntentResponse.md)
- [VirtualNetworkListIntentResponse](docs/Model/VirtualNetworkListIntentResponse.md)
- [VirtualNetworkListMetadata](docs/Model/VirtualNetworkListMetadata.md)
- [VirtualNetworkListMetadataOutput](docs/Model/VirtualNetworkListMetadataOutput.md)
- [VirtualNetworkMetadata](docs/Model/VirtualNetworkMetadata.md)
- [VirtualNetworkReference](docs/Model/VirtualNetworkReference.md)
- [VirtualNetworkResources](docs/Model/VirtualNetworkResources.md)
- [VirtualNetworkResourcesDefStatus](docs/Model/VirtualNetworkResourcesDefStatus.md)
- [VirtualNetworkStatus](docs/Model/VirtualNetworkStatus.md)
- [VirtualServerWorkload](docs/Model/VirtualServerWorkload.md)
- [Vm](docs/Model/Vm.md)
- [VmBootConfig](docs/Model/VmBootConfig.md)
- [VmBootDevice](docs/Model/VmBootDevice.md)
- [VmCategoryWorkload](docs/Model/VmCategoryWorkload.md)
- [VmCloneInput](docs/Model/VmCloneInput.md)
- [VmCloneOverrideSpec](docs/Model/VmCloneOverrideSpec.md)
- [VmDefStatus](docs/Model/VmDefStatus.md)
- [VmDisk](docs/Model/VmDisk.md)
- [VmDiskDataSourceReference](docs/Model/VmDiskDataSourceReference.md)
- [VmDiskDeviceProperties](docs/Model/VmDiskDeviceProperties.md)
- [VmDiskListMetadata](docs/Model/VmDiskListMetadata.md)
- [VmDiskListMetadataOutput](docs/Model/VmDiskListMetadataOutput.md)
- [VmDiskMetadata](docs/Model/VmDiskMetadata.md)
- [VmDiskOutputStatus](docs/Model/VmDiskOutputStatus.md)
- [VmDiskOutputStatusDataSourceReference](docs/Model/VmDiskOutputStatusDataSourceReference.md)
- [VmDiskReference](docs/Model/VmDiskReference.md)
- [VmDiskStatus](docs/Model/VmDiskStatus.md)
- [VmExportInput](docs/Model/VmExportInput.md)
- [VmGpu](docs/Model/VmGpu.md)
- [VmGpuListMetadata](docs/Model/VmGpuListMetadata.md)
- [VmGpuListMetadataOutput](docs/Model/VmGpuListMetadataOutput.md)
- [VmGpuMetadata](docs/Model/VmGpuMetadata.md)
- [VmGpuOutputStatus](docs/Model/VmGpuOutputStatus.md)
- [VmGpuReference](docs/Model/VmGpuReference.md)
- [VmGpuStatus](docs/Model/VmGpuStatus.md)
- [VmGuestPowerStateTransitionConfig](docs/Model/VmGuestPowerStateTransitionConfig.md)
- [VmHostAffinityLegacyPolicyConfig](docs/Model/VmHostAffinityLegacyPolicyConfig.md)
- [VmHostAffinityLegacyPolicyInfo](docs/Model/VmHostAffinityLegacyPolicyInfo.md)
- [VmHostAffinityLegacyPolicyListMetadata](docs/Model/VmHostAffinityLegacyPolicyListMetadata.md)
- [VmHostAffinityLegacyPolicyListMetadataOutput](docs/Model/VmHostAffinityLegacyPolicyListMetadataOutput.md)
- [VmHostAffinityLegacyPolicyListResponse](docs/Model/VmHostAffinityLegacyPolicyListResponse.md)
- [VmHostAffinityLegacyPolicyMetadata](docs/Model/VmHostAffinityLegacyPolicyMetadata.md)
- [VmHostAffinityPolicyConfig](docs/Model/VmHostAffinityPolicyConfig.md)
- [VmHostAffinityPolicyCreateInput](docs/Model/VmHostAffinityPolicyCreateInput.md)
- [VmHostAffinityPolicyGetMetadataOutput](docs/Model/VmHostAffinityPolicyGetMetadataOutput.md)
- [VmHostAffinityPolicyGetResponse](docs/Model/VmHostAffinityPolicyGetResponse.md)
- [VmHostAffinityPolicyInfo](docs/Model/VmHostAffinityPolicyInfo.md)
- [VmHostAffinityPolicyListMetadata](docs/Model/VmHostAffinityPolicyListMetadata.md)
- [VmHostAffinityPolicyListMetadataOutput](docs/Model/VmHostAffinityPolicyListMetadataOutput.md)
- [VmHostAffinityPolicyListResponse](docs/Model/VmHostAffinityPolicyListResponse.md)
- [VmHostAffinityPolicyUpdateInput](docs/Model/VmHostAffinityPolicyUpdateInput.md)
- [VmHostAffinityPolicyUpdateMetadata](docs/Model/VmHostAffinityPolicyUpdateMetadata.md)
- [VmHostAffinityPolicyVmsInfo](docs/Model/VmHostAffinityPolicyVmsInfo.md)
- [VmHostAffinityPolicyVmsListMetadata](docs/Model/VmHostAffinityPolicyVmsListMetadata.md)
- [VmHostAffinityPolicyVmsListMetadataOutput](docs/Model/VmHostAffinityPolicyVmsListMetadataOutput.md)
- [VmHostAffinityPolicyVmsListResponse](docs/Model/VmHostAffinityPolicyVmsListResponse.md)
- [VmIntentInput](docs/Model/VmIntentInput.md)
- [VmIntentResource](docs/Model/VmIntentResource.md)
- [VmIntentResponse](docs/Model/VmIntentResponse.md)
- [VmListIntentResponse](docs/Model/VmListIntentResponse.md)
- [VmListMetadata](docs/Model/VmListMetadata.md)
- [VmListMetadataOutput](docs/Model/VmListMetadataOutput.md)
- [VmMetadata](docs/Model/VmMetadata.md)
- [VmMetadataOverride](docs/Model/VmMetadataOverride.md)
- [VmNic](docs/Model/VmNic.md)
- [VmNicListMetadata](docs/Model/VmNicListMetadata.md)
- [VmNicListMetadataOutput](docs/Model/VmNicListMetadataOutput.md)
- [VmNicMetadata](docs/Model/VmNicMetadata.md)
- [VmNicOutputStatus](docs/Model/VmNicOutputStatus.md)
- [VmNicReference](docs/Model/VmNicReference.md)
- [VmNicStatus](docs/Model/VmNicStatus.md)
- [VmPowerStateMechanism](docs/Model/VmPowerStateMechanism.md)
- [VmRecoveryPoint](docs/Model/VmRecoveryPoint.md)
- [VmRecoveryPointDefStatus](docs/Model/VmRecoveryPointDefStatus.md)
- [VmRecoveryPointIntentInput](docs/Model/VmRecoveryPointIntentInput.md)
- [VmRecoveryPointIntentResource](docs/Model/VmRecoveryPointIntentResource.md)
- [VmRecoveryPointIntentResponse](docs/Model/VmRecoveryPointIntentResponse.md)
- [VmRecoveryPointListIntentResponse](docs/Model/VmRecoveryPointListIntentResponse.md)
- [VmRecoveryPointListMetadata](docs/Model/VmRecoveryPointListMetadata.md)
- [VmRecoveryPointListMetadataOutput](docs/Model/VmRecoveryPointListMetadataOutput.md)
- [VmRecoveryPointMetadata](docs/Model/VmRecoveryPointMetadata.md)
- [VmRecoveryPointRealizeRestoreInput](docs/Model/VmRecoveryPointRealizeRestoreInput.md)
- [VmRecoveryPointReference](docs/Model/VmRecoveryPointReference.md)
- [VmRecoveryPointRestoreInput](docs/Model/VmRecoveryPointRestoreInput.md)
- [VmRecoveryPointStatus](docs/Model/VmRecoveryPointStatus.md)
- [VmRecoveryPointsCloneInput](docs/Model/VmRecoveryPointsCloneInput.md)
- [VmRecoveryPointsOverrideSpec](docs/Model/VmRecoveryPointsOverrideSpec.md)
- [VmRecoveryPointsRealizeCloneInput](docs/Model/VmRecoveryPointsRealizeCloneInput.md)
- [VmReference](docs/Model/VmReference.md)
- [VmReferenceWithCustomization](docs/Model/VmReferenceWithCustomization.md)
- [VmResourceSpec](docs/Model/VmResourceSpec.md)
- [VmResources](docs/Model/VmResources.md)
- [VmResourcesDefStatus](docs/Model/VmResourcesDefStatus.md)
- [VmRestoreOverrideSpec](docs/Model/VmRestoreOverrideSpec.md)
- [VmRevertInput](docs/Model/VmRevertInput.md)
- [VmSetPowerStateInput](docs/Model/VmSetPowerStateInput.md)
- [VmSetPowerStateResponse](docs/Model/VmSetPowerStateResponse.md)
- [VmSnapshotInput](docs/Model/VmSnapshotInput.md)
- [VmSpec](docs/Model/VmSpec.md)
- [VmSpecOutput](docs/Model/VmSpecOutput.md)
- [VmSpecOverride](docs/Model/VmSpecOverride.md)
- [VmSpecWarning](docs/Model/VmSpecWarning.md)
- [VmStatus](docs/Model/VmStatus.md)
- [VmStorageConfig](docs/Model/VmStorageConfig.md)
- [VmStorageConfigStatus](docs/Model/VmStorageConfigStatus.md)
- [VmUpdateIpInput](docs/Model/VmUpdateIpInput.md)
- [VmValidateMigrationInput](docs/Model/VmValidateMigrationInput.md)
- [VmValidateMigrationOutputInner](docs/Model/VmValidateMigrationOutputInner.md)
- [VmValidateRestoreOutputInner](docs/Model/VmValidateRestoreOutputInner.md)
- [VmVnumaConfig](docs/Model/VmVnumaConfig.md)
- [VmVtpmConfig](docs/Model/VmVtpmConfig.md)
- [VmVtpmStatus](docs/Model/VmVtpmStatus.md)
- [VmWorkload](docs/Model/VmWorkload.md)
- [VmsUuidVmDiskVmDiskUuidDataPut200Response](docs/Model/VmsUuidVmDiskVmDiskUuidDataPut200Response.md)
- [VmwareListMetadata](docs/Model/VmwareListMetadata.md)
- [VolumeDiskResourceInput](docs/Model/VolumeDiskResourceInput.md)
- [VolumeDiskResourceOutput](docs/Model/VolumeDiskResourceOutput.md)
- [VolumeGroup](docs/Model/VolumeGroup.md)
- [VolumeGroupDefStatus](docs/Model/VolumeGroupDefStatus.md)
- [VolumeGroupIntentInput](docs/Model/VolumeGroupIntentInput.md)
- [VolumeGroupIntentResource](docs/Model/VolumeGroupIntentResource.md)
- [VolumeGroupIntentResponse](docs/Model/VolumeGroupIntentResponse.md)
- [VolumeGroupListIntentResponse](docs/Model/VolumeGroupListIntentResponse.md)
- [VolumeGroupListMetadata](docs/Model/VolumeGroupListMetadata.md)
- [VolumeGroupListMetadataOutput](docs/Model/VolumeGroupListMetadataOutput.md)
- [VolumeGroupMetadata](docs/Model/VolumeGroupMetadata.md)
- [VolumeGroupReference](docs/Model/VolumeGroupReference.md)
- [VolumeGroupResourcesInput](docs/Model/VolumeGroupResourcesInput.md)
- [VolumeGroupResourcesOutput](docs/Model/VolumeGroupResourcesOutput.md)
- [VolumeGroupStatus](docs/Model/VolumeGroupStatus.md)
- [VolumeRecoveryPointReference](docs/Model/VolumeRecoveryPointReference.md)
- [VolumeReference](docs/Model/VolumeReference.md)
- [VolumeSpec](docs/Model/VolumeSpec.md)
- [Vpc](docs/Model/Vpc.md)
- [VpcDefStatus](docs/Model/VpcDefStatus.md)
- [VpcIntentInput](docs/Model/VpcIntentInput.md)
- [VpcIntentResource](docs/Model/VpcIntentResource.md)
- [VpcIntentResponse](docs/Model/VpcIntentResponse.md)
- [VpcListIntentResponse](docs/Model/VpcListIntentResponse.md)
- [VpcListMetadata](docs/Model/VpcListMetadata.md)
- [VpcListMetadataOutput](docs/Model/VpcListMetadataOutput.md)
- [VpcMetadata](docs/Model/VpcMetadata.md)
- [VpcReference](docs/Model/VpcReference.md)
- [VpcResources](docs/Model/VpcResources.md)
- [VpcResourcesDefStatus](docs/Model/VpcResourcesDefStatus.md)
- [VpcRouteTable](docs/Model/VpcRouteTable.md)
- [VpcRouteTableDefStatus](docs/Model/VpcRouteTableDefStatus.md)
- [VpcRouteTableIntentInput](docs/Model/VpcRouteTableIntentInput.md)
- [VpcRouteTableIntentResponse](docs/Model/VpcRouteTableIntentResponse.md)
- [VpcRouteTableListMetadata](docs/Model/VpcRouteTableListMetadata.md)
- [VpcRouteTableListMetadataOutput](docs/Model/VpcRouteTableListMetadataOutput.md)
- [VpcRouteTableMetadata](docs/Model/VpcRouteTableMetadata.md)
- [VpcRouteTableReference](docs/Model/VpcRouteTableReference.md)
- [VpcRouteTableResources](docs/Model/VpcRouteTableResources.md)
- [VpcRouteTableResourcesDefStatus](docs/Model/VpcRouteTableResourcesDefStatus.md)
- [VpcRouteTableStatus](docs/Model/VpcRouteTableStatus.md)
- [VpcStatus](docs/Model/VpcStatus.md)
- [VpnComponentStatus](docs/Model/VpnComponentStatus.md)
- [VpnConnection](docs/Model/VpnConnection.md)
- [VpnConnectionDefStatus](docs/Model/VpnConnectionDefStatus.md)
- [VpnConnectionIntentInput](docs/Model/VpnConnectionIntentInput.md)
- [VpnConnectionIntentResource](docs/Model/VpnConnectionIntentResource.md)
- [VpnConnectionIntentResponse](docs/Model/VpnConnectionIntentResponse.md)
- [VpnConnectionListIntentResponse](docs/Model/VpnConnectionListIntentResponse.md)
- [VpnConnectionListMetadata](docs/Model/VpnConnectionListMetadata.md)
- [VpnConnectionListMetadataOutput](docs/Model/VpnConnectionListMetadataOutput.md)
- [VpnConnectionMetadata](docs/Model/VpnConnectionMetadata.md)
- [VpnConnectionReference](docs/Model/VpnConnectionReference.md)
- [VpnConnectionResources](docs/Model/VpnConnectionResources.md)
- [VpnConnectionResourcesDefStatus](docs/Model/VpnConnectionResourcesDefStatus.md)
- [VpnConnectionStatus](docs/Model/VpnConnectionStatus.md)
- [VpnGateway](docs/Model/VpnGateway.md)
- [VpnGatewayDefStatus](docs/Model/VpnGatewayDefStatus.md)
- [VpnGatewayIntentInput](docs/Model/VpnGatewayIntentInput.md)
- [VpnGatewayIntentResource](docs/Model/VpnGatewayIntentResource.md)
- [VpnGatewayIntentResponse](docs/Model/VpnGatewayIntentResponse.md)
- [VpnGatewayListIntentResponse](docs/Model/VpnGatewayListIntentResponse.md)
- [VpnGatewayListMetadata](docs/Model/VpnGatewayListMetadata.md)
- [VpnGatewayListMetadataOutput](docs/Model/VpnGatewayListMetadataOutput.md)
- [VpnGatewayMetadata](docs/Model/VpnGatewayMetadata.md)
- [VpnGatewayReference](docs/Model/VpnGatewayReference.md)
- [VpnGatewayResources](docs/Model/VpnGatewayResources.md)
- [VpnGatewayResourcesDefStatus](docs/Model/VpnGatewayResourcesDefStatus.md)
- [VpnGatewayStatus](docs/Model/VpnGatewayStatus.md)
- [VswitchConfig](docs/Model/VswitchConfig.md)
- [WhatifScenario](docs/Model/WhatifScenario.md)
- [WhatifScenarios](docs/Model/WhatifScenarios.md)
- [WhatifScenariosScenariosInner](docs/Model/WhatifScenariosScenariosInner.md)
- [WidgetConfig](docs/Model/WidgetConfig.md)
- [WidgetDataProjection](docs/Model/WidgetDataProjection.md)
- [WidgetFieldDescriptor](docs/Model/WidgetFieldDescriptor.md)
- [WindowsDomain](docs/Model/WindowsDomain.md)
- [WitnessConfiguration](docs/Model/WitnessConfiguration.md)
- [Workload](docs/Model/Workload.md)
- [XenWorkload](docs/Model/XenWorkload.md)
- [XfitServiceInput](docs/Model/XfitServiceInput.md)
- [XigDnsConfigResponse](docs/Model/XigDnsConfigResponse.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
