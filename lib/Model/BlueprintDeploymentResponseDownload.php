<?php
/**
 * BlueprintDeploymentResponseDownload
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
 * BlueprintDeploymentResponseDownload Class Doc Comment
 *
 * @category Class
 * @description Deployment definition for Application.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BlueprintDeploymentResponseDownload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'blueprint_deployment_response_download';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'percent_fault_tolerance' => 'int',
        'fault_domain_scope' => 'string',
        'description' => 'string',
        'action_list' => '\OpenAPI\Client\Model\AppActionResponseDownload[]',
        'type' => 'string',
        'message_list' => '\OpenAPI\Client\Model\MessageResource[]',
        'uuid' => 'string',
        'name' => 'string',
        'editables' => 'array<string,mixed>',
        'state' => 'string',
        'published_service_local_reference_list' => '\OpenAPI\Client\Model\AppPublishedServiceReferenceUpload[]',
        'depends_on_list' => '\OpenAPI\Client\Model\EntityReference[]',
        'max_replicas' => 'string',
        'package_local_reference_list' => '\OpenAPI\Client\Model\AppPackageReferenceUpload[]',
        'substrate_local_reference' => '\OpenAPI\Client\Model\AppSubstrateReferenceUpload',
        'variable_list' => '\OpenAPI\Client\Model\AppVariableResponseDownload[]',
        'min_replicas' => 'string',
        'options' => 'object',
        'num_fault_tolerance' => 'int',
        'brownfield_instance_list' => '\OpenAPI\Client\Model\BrownfieldInstanceInput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'percent_fault_tolerance' => 'int64',
        'fault_domain_scope' => null,
        'description' => null,
        'action_list' => null,
        'type' => null,
        'message_list' => null,
        'uuid' => 'UUID',
        'name' => null,
        'editables' => null,
        'state' => null,
        'published_service_local_reference_list' => null,
        'depends_on_list' => null,
        'max_replicas' => null,
        'package_local_reference_list' => null,
        'substrate_local_reference' => null,
        'variable_list' => null,
        'min_replicas' => null,
        'options' => null,
        'num_fault_tolerance' => 'int64',
        'brownfield_instance_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'percent_fault_tolerance' => false,
        'fault_domain_scope' => false,
        'description' => false,
        'action_list' => false,
        'type' => false,
        'message_list' => false,
        'uuid' => false,
        'name' => false,
        'editables' => false,
        'state' => false,
        'published_service_local_reference_list' => false,
        'depends_on_list' => false,
        'max_replicas' => false,
        'package_local_reference_list' => false,
        'substrate_local_reference' => false,
        'variable_list' => false,
        'min_replicas' => false,
        'options' => false,
        'num_fault_tolerance' => false,
        'brownfield_instance_list' => false
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
        'percent_fault_tolerance' => 'percent_fault_tolerance',
        'fault_domain_scope' => 'fault_domain_scope',
        'description' => 'description',
        'action_list' => 'action_list',
        'type' => 'type',
        'message_list' => 'message_list',
        'uuid' => 'uuid',
        'name' => 'name',
        'editables' => 'editables',
        'state' => 'state',
        'published_service_local_reference_list' => 'published_service_local_reference_list',
        'depends_on_list' => 'depends_on_list',
        'max_replicas' => 'max_replicas',
        'package_local_reference_list' => 'package_local_reference_list',
        'substrate_local_reference' => 'substrate_local_reference',
        'variable_list' => 'variable_list',
        'min_replicas' => 'min_replicas',
        'options' => 'options',
        'num_fault_tolerance' => 'num_fault_tolerance',
        'brownfield_instance_list' => 'brownfield_instance_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percent_fault_tolerance' => 'setPercentFaultTolerance',
        'fault_domain_scope' => 'setFaultDomainScope',
        'description' => 'setDescription',
        'action_list' => 'setActionList',
        'type' => 'setType',
        'message_list' => 'setMessageList',
        'uuid' => 'setUuid',
        'name' => 'setName',
        'editables' => 'setEditables',
        'state' => 'setState',
        'published_service_local_reference_list' => 'setPublishedServiceLocalReferenceList',
        'depends_on_list' => 'setDependsOnList',
        'max_replicas' => 'setMaxReplicas',
        'package_local_reference_list' => 'setPackageLocalReferenceList',
        'substrate_local_reference' => 'setSubstrateLocalReference',
        'variable_list' => 'setVariableList',
        'min_replicas' => 'setMinReplicas',
        'options' => 'setOptions',
        'num_fault_tolerance' => 'setNumFaultTolerance',
        'brownfield_instance_list' => 'setBrownfieldInstanceList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percent_fault_tolerance' => 'getPercentFaultTolerance',
        'fault_domain_scope' => 'getFaultDomainScope',
        'description' => 'getDescription',
        'action_list' => 'getActionList',
        'type' => 'getType',
        'message_list' => 'getMessageList',
        'uuid' => 'getUuid',
        'name' => 'getName',
        'editables' => 'getEditables',
        'state' => 'getState',
        'published_service_local_reference_list' => 'getPublishedServiceLocalReferenceList',
        'depends_on_list' => 'getDependsOnList',
        'max_replicas' => 'getMaxReplicas',
        'package_local_reference_list' => 'getPackageLocalReferenceList',
        'substrate_local_reference' => 'getSubstrateLocalReference',
        'variable_list' => 'getVariableList',
        'min_replicas' => 'getMinReplicas',
        'options' => 'getOptions',
        'num_fault_tolerance' => 'getNumFaultTolerance',
        'brownfield_instance_list' => 'getBrownfieldInstanceList'
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
        $this->setIfExists('percent_fault_tolerance', $data ?? [], null);
        $this->setIfExists('fault_domain_scope', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('action_list', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'GREENFIELD');
        $this->setIfExists('message_list', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('editables', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('published_service_local_reference_list', $data ?? [], null);
        $this->setIfExists('depends_on_list', $data ?? [], null);
        $this->setIfExists('max_replicas', $data ?? [], '1');
        $this->setIfExists('package_local_reference_list', $data ?? [], null);
        $this->setIfExists('substrate_local_reference', $data ?? [], null);
        $this->setIfExists('variable_list', $data ?? [], null);
        $this->setIfExists('min_replicas', $data ?? [], '1');
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('num_fault_tolerance', $data ?? [], null);
        $this->setIfExists('brownfield_instance_list', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['message_list'] === null) {
            $invalidProperties[] = "'message_list' can't be null";
        }
        if (!is_null($this->container['uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
            $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['max_replicas'] === null) {
            $invalidProperties[] = "'max_replicas' can't be null";
        }
        if ($this->container['substrate_local_reference'] === null) {
            $invalidProperties[] = "'substrate_local_reference' can't be null";
        }
        if ($this->container['min_replicas'] === null) {
            $invalidProperties[] = "'min_replicas' can't be null";
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
     * Gets percent_fault_tolerance
     *
     * @return int|null
     */
    public function getPercentFaultTolerance()
    {
        return $this->container['percent_fault_tolerance'];
    }

    /**
     * Sets percent_fault_tolerance
     *
     * @param int|null $percent_fault_tolerance 
     *
     * @return self
     */
    public function setPercentFaultTolerance($percent_fault_tolerance)
    {
        if (is_null($percent_fault_tolerance)) {
            throw new \InvalidArgumentException('non-nullable percent_fault_tolerance cannot be null');
        }
        $this->container['percent_fault_tolerance'] = $percent_fault_tolerance;

        return $this;
    }

    /**
     * Gets fault_domain_scope
     *
     * @return string|null
     */
    public function getFaultDomainScope()
    {
        return $this->container['fault_domain_scope'];
    }

    /**
     * Sets fault_domain_scope
     *
     * @param string|null $fault_domain_scope 
     *
     * @return self
     */
    public function setFaultDomainScope($fault_domain_scope)
    {
        if (is_null($fault_domain_scope)) {
            throw new \InvalidArgumentException('non-nullable fault_domain_scope cannot be null');
        }
        $this->container['fault_domain_scope'] = $fault_domain_scope;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling BlueprintDeploymentResponseDownload., must be smaller than or equal to 1000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets action_list
     *
     * @return \OpenAPI\Client\Model\AppActionResponseDownload[]|null
     */
    public function getActionList()
    {
        return $this->container['action_list'];
    }

    /**
     * Sets action_list
     *
     * @param \OpenAPI\Client\Model\AppActionResponseDownload[]|null $action_list List of references to action
     *
     * @return self
     */
    public function setActionList($action_list)
    {
        if (is_null($action_list)) {
            throw new \InvalidArgumentException('non-nullable action_list cannot be null');
        }
        $this->container['action_list'] = $action_list;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets message_list
     *
     * @return \OpenAPI\Client\Model\MessageResource[]
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \OpenAPI\Client\Model\MessageResource[] $message_list Message list for blueprint deployment
     *
     * @return self
     */
    public function setMessageList($message_list)
    {
        if (is_null($message_list)) {
            throw new \InvalidArgumentException('non-nullable message_list cannot be null');
        }
        $this->container['message_list'] = $message_list;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$uuid when calling BlueprintDeploymentResponseDownload., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BlueprintDeploymentResponseDownload., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets editables
     *
     * @return array<string,mixed>|null
     */
    public function getEditables()
    {
        return $this->container['editables'];
    }

    /**
     * Sets editables
     *
     * @param array<string,mixed>|null $editables Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above.
     *
     * @return self
     */
    public function setEditables($editables)
    {
        if (is_null($editables)) {
            throw new \InvalidArgumentException('non-nullable editables cannot be null');
        }
        $this->container['editables'] = $editables;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets published_service_local_reference_list
     *
     * @return \OpenAPI\Client\Model\AppPublishedServiceReferenceUpload[]|null
     */
    public function getPublishedServiceLocalReferenceList()
    {
        return $this->container['published_service_local_reference_list'];
    }

    /**
     * Sets published_service_local_reference_list
     *
     * @param \OpenAPI\Client\Model\AppPublishedServiceReferenceUpload[]|null $published_service_local_reference_list List of references for published services
     *
     * @return self
     */
    public function setPublishedServiceLocalReferenceList($published_service_local_reference_list)
    {
        if (is_null($published_service_local_reference_list)) {
            throw new \InvalidArgumentException('non-nullable published_service_local_reference_list cannot be null');
        }
        $this->container['published_service_local_reference_list'] = $published_service_local_reference_list;

        return $this;
    }

    /**
     * Gets depends_on_list
     *
     * @return \OpenAPI\Client\Model\EntityReference[]|null
     */
    public function getDependsOnList()
    {
        return $this->container['depends_on_list'];
    }

    /**
     * Sets depends_on_list
     *
     * @param \OpenAPI\Client\Model\EntityReference[]|null $depends_on_list 
     *
     * @return self
     */
    public function setDependsOnList($depends_on_list)
    {
        if (is_null($depends_on_list)) {
            throw new \InvalidArgumentException('non-nullable depends_on_list cannot be null');
        }
        $this->container['depends_on_list'] = $depends_on_list;

        return $this;
    }

    /**
     * Gets max_replicas
     *
     * @return string
     */
    public function getMaxReplicas()
    {
        return $this->container['max_replicas'];
    }

    /**
     * Sets max_replicas
     *
     * @param string $max_replicas Maximum replicas for the deployment.
     *
     * @return self
     */
    public function setMaxReplicas($max_replicas)
    {
        if (is_null($max_replicas)) {
            throw new \InvalidArgumentException('non-nullable max_replicas cannot be null');
        }
        $this->container['max_replicas'] = $max_replicas;

        return $this;
    }

    /**
     * Gets package_local_reference_list
     *
     * @return \OpenAPI\Client\Model\AppPackageReferenceUpload[]|null
     */
    public function getPackageLocalReferenceList()
    {
        return $this->container['package_local_reference_list'];
    }

    /**
     * Sets package_local_reference_list
     *
     * @param \OpenAPI\Client\Model\AppPackageReferenceUpload[]|null $package_local_reference_list List of references for the packages
     *
     * @return self
     */
    public function setPackageLocalReferenceList($package_local_reference_list)
    {
        if (is_null($package_local_reference_list)) {
            throw new \InvalidArgumentException('non-nullable package_local_reference_list cannot be null');
        }
        $this->container['package_local_reference_list'] = $package_local_reference_list;

        return $this;
    }

    /**
     * Gets substrate_local_reference
     *
     * @return \OpenAPI\Client\Model\AppSubstrateReferenceUpload
     */
    public function getSubstrateLocalReference()
    {
        return $this->container['substrate_local_reference'];
    }

    /**
     * Sets substrate_local_reference
     *
     * @param \OpenAPI\Client\Model\AppSubstrateReferenceUpload $substrate_local_reference substrate_local_reference
     *
     * @return self
     */
    public function setSubstrateLocalReference($substrate_local_reference)
    {
        if (is_null($substrate_local_reference)) {
            throw new \InvalidArgumentException('non-nullable substrate_local_reference cannot be null');
        }
        $this->container['substrate_local_reference'] = $substrate_local_reference;

        return $this;
    }

    /**
     * Gets variable_list
     *
     * @return \OpenAPI\Client\Model\AppVariableResponseDownload[]|null
     */
    public function getVariableList()
    {
        return $this->container['variable_list'];
    }

    /**
     * Sets variable_list
     *
     * @param \OpenAPI\Client\Model\AppVariableResponseDownload[]|null $variable_list 
     *
     * @return self
     */
    public function setVariableList($variable_list)
    {
        if (is_null($variable_list)) {
            throw new \InvalidArgumentException('non-nullable variable_list cannot be null');
        }
        $this->container['variable_list'] = $variable_list;

        return $this;
    }

    /**
     * Gets min_replicas
     *
     * @return string
     */
    public function getMinReplicas()
    {
        return $this->container['min_replicas'];
    }

    /**
     * Sets min_replicas
     *
     * @param string $min_replicas Minimum replicas for the deployment.
     *
     * @return self
     */
    public function setMinReplicas($min_replicas)
    {
        if (is_null($min_replicas)) {
            throw new \InvalidArgumentException('non-nullable min_replicas cannot be null');
        }
        $this->container['min_replicas'] = $min_replicas;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object|null $options Additional deployment options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets num_fault_tolerance
     *
     * @return int|null
     */
    public function getNumFaultTolerance()
    {
        return $this->container['num_fault_tolerance'];
    }

    /**
     * Sets num_fault_tolerance
     *
     * @param int|null $num_fault_tolerance 
     *
     * @return self
     */
    public function setNumFaultTolerance($num_fault_tolerance)
    {
        if (is_null($num_fault_tolerance)) {
            throw new \InvalidArgumentException('non-nullable num_fault_tolerance cannot be null');
        }
        $this->container['num_fault_tolerance'] = $num_fault_tolerance;

        return $this;
    }

    /**
     * Gets brownfield_instance_list
     *
     * @return \OpenAPI\Client\Model\BrownfieldInstanceInput[]|null
     */
    public function getBrownfieldInstanceList()
    {
        return $this->container['brownfield_instance_list'];
    }

    /**
     * Sets brownfield_instance_list
     *
     * @param \OpenAPI\Client\Model\BrownfieldInstanceInput[]|null $brownfield_instance_list brownfield map
     *
     * @return self
     */
    public function setBrownfieldInstanceList($brownfield_instance_list)
    {
        if (is_null($brownfield_instance_list)) {
            throw new \InvalidArgumentException('non-nullable brownfield_instance_list cannot be null');
        }
        $this->container['brownfield_instance_list'] = $brownfield_instance_list;

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

