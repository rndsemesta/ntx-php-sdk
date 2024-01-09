<?php
/**
 * SupportCaseResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Nutanix Intentful API
 *
 * Move programming from the user to the machine.
 *
 * The version of the OpenAPI document: 3.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SupportCaseResponse Class Doc Comment
 *
 * @category Class
 * @description Support case Resources definition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupportCaseResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'support_case_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'log_collector' => '\OpenAPI\Client\Model\LogCollectorSupportCaseUpload',
        'contact_details' => '\OpenAPI\Client\Model\ContactInformation',
        'ncc_checks_pc' => '\OpenAPI\Client\Model\NccChecksSupportCaseUpload',
        'creator_name' => 'string',
        'case_number' => 'string',
        'nos_version' => 'string',
        'creation_date' => '\DateTime',
        'priority' => 'string',
        'hypervisor_version' => 'string',
        'case_type' => 'string',
        'case_id' => 'string',
        'custom_key_values' => 'array<string,string>',
        'owner' => 'string',
        'serial_number' => 'string',
        'additional_notification_list' => '\OpenAPI\Client\Model\ContactInformation[]',
        'log_collector_pc' => '\OpenAPI\Client\Model\LogCollectorSupportCaseUpload',
        'cluster_reference' => '\OpenAPI\Client\Model\ClusterReference',
        'ncc_checks' => '\OpenAPI\Client\Model\NccChecksSupportCaseUpload'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'log_collector' => null,
        'contact_details' => null,
        'ncc_checks_pc' => null,
        'creator_name' => null,
        'case_number' => null,
        'nos_version' => null,
        'creation_date' => 'date-time',
        'priority' => null,
        'hypervisor_version' => null,
        'case_type' => null,
        'case_id' => null,
        'custom_key_values' => null,
        'owner' => null,
        'serial_number' => null,
        'additional_notification_list' => null,
        'log_collector_pc' => null,
        'cluster_reference' => null,
        'ncc_checks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'log_collector' => false,
        'contact_details' => false,
        'ncc_checks_pc' => false,
        'creator_name' => false,
        'case_number' => false,
        'nos_version' => false,
        'creation_date' => false,
        'priority' => false,
        'hypervisor_version' => false,
        'case_type' => false,
        'case_id' => false,
        'custom_key_values' => false,
        'owner' => false,
        'serial_number' => false,
        'additional_notification_list' => false,
        'log_collector_pc' => false,
        'cluster_reference' => false,
        'ncc_checks' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'log_collector' => 'log_collector',
        'contact_details' => 'contact_details',
        'ncc_checks_pc' => 'ncc_checks_pc',
        'creator_name' => 'creator_name',
        'case_number' => 'case_number',
        'nos_version' => 'nos_version',
        'creation_date' => 'creation_date',
        'priority' => 'priority',
        'hypervisor_version' => 'hypervisor_version',
        'case_type' => 'case_type',
        'case_id' => 'case_id',
        'custom_key_values' => 'custom_key_values',
        'owner' => 'owner',
        'serial_number' => 'serial_number',
        'additional_notification_list' => 'additional_notification_list',
        'log_collector_pc' => 'log_collector_pc',
        'cluster_reference' => 'cluster_reference',
        'ncc_checks' => 'ncc_checks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'log_collector' => 'setLogCollector',
        'contact_details' => 'setContactDetails',
        'ncc_checks_pc' => 'setNccChecksPc',
        'creator_name' => 'setCreatorName',
        'case_number' => 'setCaseNumber',
        'nos_version' => 'setNosVersion',
        'creation_date' => 'setCreationDate',
        'priority' => 'setPriority',
        'hypervisor_version' => 'setHypervisorVersion',
        'case_type' => 'setCaseType',
        'case_id' => 'setCaseId',
        'custom_key_values' => 'setCustomKeyValues',
        'owner' => 'setOwner',
        'serial_number' => 'setSerialNumber',
        'additional_notification_list' => 'setAdditionalNotificationList',
        'log_collector_pc' => 'setLogCollectorPc',
        'cluster_reference' => 'setClusterReference',
        'ncc_checks' => 'setNccChecks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'log_collector' => 'getLogCollector',
        'contact_details' => 'getContactDetails',
        'ncc_checks_pc' => 'getNccChecksPc',
        'creator_name' => 'getCreatorName',
        'case_number' => 'getCaseNumber',
        'nos_version' => 'getNosVersion',
        'creation_date' => 'getCreationDate',
        'priority' => 'getPriority',
        'hypervisor_version' => 'getHypervisorVersion',
        'case_type' => 'getCaseType',
        'case_id' => 'getCaseId',
        'custom_key_values' => 'getCustomKeyValues',
        'owner' => 'getOwner',
        'serial_number' => 'getSerialNumber',
        'additional_notification_list' => 'getAdditionalNotificationList',
        'log_collector_pc' => 'getLogCollectorPc',
        'cluster_reference' => 'getClusterReference',
        'ncc_checks' => 'getNccChecks'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('log_collector', $data ?? [], null);
        $this->setIfExists('contact_details', $data ?? [], null);
        $this->setIfExists('ncc_checks_pc', $data ?? [], null);
        $this->setIfExists('creator_name', $data ?? [], null);
        $this->setIfExists('case_number', $data ?? [], null);
        $this->setIfExists('nos_version', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('hypervisor_version', $data ?? [], null);
        $this->setIfExists('case_type', $data ?? [], null);
        $this->setIfExists('case_id', $data ?? [], null);
        $this->setIfExists('custom_key_values', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('serial_number', $data ?? [], null);
        $this->setIfExists('additional_notification_list', $data ?? [], null);
        $this->setIfExists('log_collector_pc', $data ?? [], null);
        $this->setIfExists('cluster_reference', $data ?? [], null);
        $this->setIfExists('ncc_checks', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['additional_notification_list']) && (count($this->container['additional_notification_list']) > 3)) {
            $invalidProperties[] = "invalid value for 'additional_notification_list', number of items must be less than or equal to 3.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the case.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets log_collector
     *
     * @return \OpenAPI\Client\Model\LogCollectorSupportCaseUpload|null
     */
    public function getLogCollector()
    {
        return $this->container['log_collector'];
    }

    /**
     * Sets log_collector
     *
     * @param \OpenAPI\Client\Model\LogCollectorSupportCaseUpload|null $log_collector log_collector
     *
     * @return self
     */
    public function setLogCollector($log_collector)
    {
        if (is_null($log_collector)) {
            throw new \InvalidArgumentException('non-nullable log_collector cannot be null');
        }
        $this->container['log_collector'] = $log_collector;

        return $this;
    }

    /**
     * Gets contact_details
     *
     * @return \OpenAPI\Client\Model\ContactInformation|null
     */
    public function getContactDetails()
    {
        return $this->container['contact_details'];
    }

    /**
     * Sets contact_details
     *
     * @param \OpenAPI\Client\Model\ContactInformation|null $contact_details contact_details
     *
     * @return self
     */
    public function setContactDetails($contact_details)
    {
        if (is_null($contact_details)) {
            throw new \InvalidArgumentException('non-nullable contact_details cannot be null');
        }
        $this->container['contact_details'] = $contact_details;

        return $this;
    }

    /**
     * Gets ncc_checks_pc
     *
     * @return \OpenAPI\Client\Model\NccChecksSupportCaseUpload|null
     */
    public function getNccChecksPc()
    {
        return $this->container['ncc_checks_pc'];
    }

    /**
     * Sets ncc_checks_pc
     *
     * @param \OpenAPI\Client\Model\NccChecksSupportCaseUpload|null $ncc_checks_pc ncc_checks_pc
     *
     * @return self
     */
    public function setNccChecksPc($ncc_checks_pc)
    {
        if (is_null($ncc_checks_pc)) {
            throw new \InvalidArgumentException('non-nullable ncc_checks_pc cannot be null');
        }
        $this->container['ncc_checks_pc'] = $ncc_checks_pc;

        return $this;
    }

    /**
     * Gets creator_name
     *
     * @return string|null
     */
    public function getCreatorName()
    {
        return $this->container['creator_name'];
    }

    /**
     * Sets creator_name
     *
     * @param string|null $creator_name Name of the person who created the case.
     *
     * @return self
     */
    public function setCreatorName($creator_name)
    {
        if (is_null($creator_name)) {
            throw new \InvalidArgumentException('non-nullable creator_name cannot be null');
        }
        $this->container['creator_name'] = $creator_name;

        return $this;
    }

    /**
     * Gets case_number
     *
     * @return string|null
     */
    public function getCaseNumber()
    {
        return $this->container['case_number'];
    }

    /**
     * Sets case_number
     *
     * @param string|null $case_number Support Case Number. This is the pretty version of case as visible to the user. Example \"00151752\"
     *
     * @return self
     */
    public function setCaseNumber($case_number)
    {
        if (is_null($case_number)) {
            throw new \InvalidArgumentException('non-nullable case_number cannot be null');
        }
        $this->container['case_number'] = $case_number;

        return $this;
    }

    /**
     * Gets nos_version
     *
     * @return string|null
     */
    public function getNosVersion()
    {
        return $this->container['nos_version'];
    }

    /**
     * Sets nos_version
     *
     * @param string|null $nos_version Nos version of the block for which support case is opened.
     *
     * @return self
     */
    public function setNosVersion($nos_version)
    {
        if (is_null($nos_version)) {
            throw new \InvalidArgumentException('non-nullable nos_version cannot be null');
        }
        $this->container['nos_version'] = $nos_version;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date Date on which the case was created.
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority Priority of the support case being created Example P4-Low, P3-Normal, P2-Critical, P1-Emergency.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets hypervisor_version
     *
     * @return string|null
     */
    public function getHypervisorVersion()
    {
        return $this->container['hypervisor_version'];
    }

    /**
     * Sets hypervisor_version
     *
     * @param string|null $hypervisor_version Hypervisor version for which support case is opened.
     *
     * @return self
     */
    public function setHypervisorVersion($hypervisor_version)
    {
        if (is_null($hypervisor_version)) {
            throw new \InvalidArgumentException('non-nullable hypervisor_version cannot be null');
        }
        $this->container['hypervisor_version'] = $hypervisor_version;

        return $this;
    }

    /**
     * Gets case_type
     *
     * @return string|null
     */
    public function getCaseType()
    {
        return $this->container['case_type'];
    }

    /**
     * Sets case_type
     *
     * @param string|null $case_type Type of the support case being opened.
     *
     * @return self
     */
    public function setCaseType($case_type)
    {
        if (is_null($case_type)) {
            throw new \InvalidArgumentException('non-nullable case_type cannot be null');
        }
        $this->container['case_type'] = $case_type;

        return $this;
    }

    /**
     * Gets case_id
     *
     * @return string|null
     */
    public function getCaseId()
    {
        return $this->container['case_id'];
    }

    /**
     * Sets case_id
     *
     * @param string|null $case_id Support Case Id. This is the id to be used to query support details. Example \"500W0000003w3FEIAY\"
     *
     * @return self
     */
    public function setCaseId($case_id)
    {
        if (is_null($case_id)) {
            throw new \InvalidArgumentException('non-nullable case_id cannot be null');
        }
        $this->container['case_id'] = $case_id;

        return $this;
    }

    /**
     * Gets custom_key_values
     *
     * @return array<string,string>|null
     */
    public function getCustomKeyValues()
    {
        return $this->container['custom_key_values'];
    }

    /**
     * Sets custom_key_values
     *
     * @param array<string,string>|null $custom_key_values Generic key value pair used for custom attributes.
     *
     * @return self
     */
    public function setCustomKeyValues($custom_key_values)
    {
        if (is_null($custom_key_values)) {
            throw new \InvalidArgumentException('non-nullable custom_key_values cannot be null');
        }
        $this->container['custom_key_values'] = $custom_key_values;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner Owner of the case.
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number Serial Number of the block for which help is needed.
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {
        if (is_null($serial_number)) {
            throw new \InvalidArgumentException('non-nullable serial_number cannot be null');
        }
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets additional_notification_list
     *
     * @return \OpenAPI\Client\Model\ContactInformation[]|null
     */
    public function getAdditionalNotificationList()
    {
        return $this->container['additional_notification_list'];
    }

    /**
     * Sets additional_notification_list
     *
     * @param \OpenAPI\Client\Model\ContactInformation[]|null $additional_notification_list List of email addresses of the extra recipients who need to be notified for case management.
     *
     * @return self
     */
    public function setAdditionalNotificationList($additional_notification_list)
    {
        if (is_null($additional_notification_list)) {
            throw new \InvalidArgumentException('non-nullable additional_notification_list cannot be null');
        }

        if ((count($additional_notification_list) > 3)) {
            throw new \InvalidArgumentException('invalid value for $additional_notification_list when calling SupportCaseResponse., number of items must be less than or equal to 3.');
        }
        $this->container['additional_notification_list'] = $additional_notification_list;

        return $this;
    }

    /**
     * Gets log_collector_pc
     *
     * @return \OpenAPI\Client\Model\LogCollectorSupportCaseUpload|null
     */
    public function getLogCollectorPc()
    {
        return $this->container['log_collector_pc'];
    }

    /**
     * Sets log_collector_pc
     *
     * @param \OpenAPI\Client\Model\LogCollectorSupportCaseUpload|null $log_collector_pc log_collector_pc
     *
     * @return self
     */
    public function setLogCollectorPc($log_collector_pc)
    {
        if (is_null($log_collector_pc)) {
            throw new \InvalidArgumentException('non-nullable log_collector_pc cannot be null');
        }
        $this->container['log_collector_pc'] = $log_collector_pc;

        return $this;
    }

    /**
     * Gets cluster_reference
     *
     * @return \OpenAPI\Client\Model\ClusterReference|null
     */
    public function getClusterReference()
    {
        return $this->container['cluster_reference'];
    }

    /**
     * Sets cluster_reference
     *
     * @param \OpenAPI\Client\Model\ClusterReference|null $cluster_reference cluster_reference
     *
     * @return self
     */
    public function setClusterReference($cluster_reference)
    {
        if (is_null($cluster_reference)) {
            throw new \InvalidArgumentException('non-nullable cluster_reference cannot be null');
        }
        $this->container['cluster_reference'] = $cluster_reference;

        return $this;
    }

    /**
     * Gets ncc_checks
     *
     * @return \OpenAPI\Client\Model\NccChecksSupportCaseUpload|null
     */
    public function getNccChecks()
    {
        return $this->container['ncc_checks'];
    }

    /**
     * Sets ncc_checks
     *
     * @param \OpenAPI\Client\Model\NccChecksSupportCaseUpload|null $ncc_checks ncc_checks
     *
     * @return self
     */
    public function setNccChecks($ncc_checks)
    {
        if (is_null($ncc_checks)) {
            throw new \InvalidArgumentException('non-nullable ncc_checks cannot be null');
        }
        $this->container['ncc_checks'] = $ncc_checks;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

