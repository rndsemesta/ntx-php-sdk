<?php
/**
 * AuditResources
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
 * AuditResources Class Doc Comment
 *
 * @category Class
 * @description Audit entity definition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuditResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'audit_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audit_message' => 'string',
        'cluster_reference' => '\OpenAPI\Client\Model\ClusterReference',
        'operation_parameter_list' => '\OpenAPI\Client\Model\AuditParameters[]',
        'source_entity_reference' => '\OpenAPI\Client\Model\EntityInfo',
        'operation_start_time' => '\DateTime',
        'initiated_user' => '\OpenAPI\Client\Model\AuditUser',
        'operation_complete_time' => '\DateTime',
        'operation_type' => 'string',
        'affected_entity_reference_list' => '\OpenAPI\Client\Model\EntityInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audit_message' => null,
        'cluster_reference' => null,
        'operation_parameter_list' => null,
        'source_entity_reference' => null,
        'operation_start_time' => 'date-time',
        'initiated_user' => null,
        'operation_complete_time' => 'date-time',
        'operation_type' => null,
        'affected_entity_reference_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audit_message' => false,
        'cluster_reference' => false,
        'operation_parameter_list' => false,
        'source_entity_reference' => false,
        'operation_start_time' => false,
        'initiated_user' => false,
        'operation_complete_time' => false,
        'operation_type' => false,
        'affected_entity_reference_list' => false
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
        'audit_message' => 'audit_message',
        'cluster_reference' => 'cluster_reference',
        'operation_parameter_list' => 'operation_parameter_list',
        'source_entity_reference' => 'source_entity_reference',
        'operation_start_time' => 'operation_start_time',
        'initiated_user' => 'initiated_user',
        'operation_complete_time' => 'operation_complete_time',
        'operation_type' => 'operation_type',
        'affected_entity_reference_list' => 'affected_entity_reference_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audit_message' => 'setAuditMessage',
        'cluster_reference' => 'setClusterReference',
        'operation_parameter_list' => 'setOperationParameterList',
        'source_entity_reference' => 'setSourceEntityReference',
        'operation_start_time' => 'setOperationStartTime',
        'initiated_user' => 'setInitiatedUser',
        'operation_complete_time' => 'setOperationCompleteTime',
        'operation_type' => 'setOperationType',
        'affected_entity_reference_list' => 'setAffectedEntityReferenceList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audit_message' => 'getAuditMessage',
        'cluster_reference' => 'getClusterReference',
        'operation_parameter_list' => 'getOperationParameterList',
        'source_entity_reference' => 'getSourceEntityReference',
        'operation_start_time' => 'getOperationStartTime',
        'initiated_user' => 'getInitiatedUser',
        'operation_complete_time' => 'getOperationCompleteTime',
        'operation_type' => 'getOperationType',
        'affected_entity_reference_list' => 'getAffectedEntityReferenceList'
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
        $this->setIfExists('audit_message', $data ?? [], null);
        $this->setIfExists('cluster_reference', $data ?? [], null);
        $this->setIfExists('operation_parameter_list', $data ?? [], null);
        $this->setIfExists('source_entity_reference', $data ?? [], null);
        $this->setIfExists('operation_start_time', $data ?? [], null);
        $this->setIfExists('initiated_user', $data ?? [], null);
        $this->setIfExists('operation_complete_time', $data ?? [], null);
        $this->setIfExists('operation_type', $data ?? [], null);
        $this->setIfExists('affected_entity_reference_list', $data ?? [], null);
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

        if ($this->container['audit_message'] === null) {
            $invalidProperties[] = "'audit_message' can't be null";
        }
        if ((mb_strlen($this->container['audit_message']) > 1024)) {
            $invalidProperties[] = "invalid value for 'audit_message', the character length must be smaller than or equal to 1024.";
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
     * Gets audit_message
     *
     * @return string
     */
    public function getAuditMessage()
    {
        return $this->container['audit_message'];
    }

    /**
     * Sets audit_message
     *
     * @param string $audit_message Audit message.
     *
     * @return self
     */
    public function setAuditMessage($audit_message)
    {
        if (is_null($audit_message)) {
            throw new \InvalidArgumentException('non-nullable audit_message cannot be null');
        }
        if ((mb_strlen($audit_message) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $audit_message when calling AuditResources., must be smaller than or equal to 1024.');
        }

        $this->container['audit_message'] = $audit_message;

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
     * Gets operation_parameter_list
     *
     * @return \OpenAPI\Client\Model\AuditParameters[]|null
     */
    public function getOperationParameterList()
    {
        return $this->container['operation_parameter_list'];
    }

    /**
     * Sets operation_parameter_list
     *
     * @param \OpenAPI\Client\Model\AuditParameters[]|null $operation_parameter_list Parameters associated with the operation captured in the audit.
     *
     * @return self
     */
    public function setOperationParameterList($operation_parameter_list)
    {
        if (is_null($operation_parameter_list)) {
            throw new \InvalidArgumentException('non-nullable operation_parameter_list cannot be null');
        }
        $this->container['operation_parameter_list'] = $operation_parameter_list;

        return $this;
    }

    /**
     * Gets source_entity_reference
     *
     * @return \OpenAPI\Client\Model\EntityInfo|null
     */
    public function getSourceEntityReference()
    {
        return $this->container['source_entity_reference'];
    }

    /**
     * Sets source_entity_reference
     *
     * @param \OpenAPI\Client\Model\EntityInfo|null $source_entity_reference source_entity_reference
     *
     * @return self
     */
    public function setSourceEntityReference($source_entity_reference)
    {
        if (is_null($source_entity_reference)) {
            throw new \InvalidArgumentException('non-nullable source_entity_reference cannot be null');
        }
        $this->container['source_entity_reference'] = $source_entity_reference;

        return $this;
    }

    /**
     * Gets operation_start_time
     *
     * @return \DateTime|null
     */
    public function getOperationStartTime()
    {
        return $this->container['operation_start_time'];
    }

    /**
     * Sets operation_start_time
     *
     * @param \DateTime|null $operation_start_time UTC date and time in RFC-3339 format when operation was started.
     *
     * @return self
     */
    public function setOperationStartTime($operation_start_time)
    {
        if (is_null($operation_start_time)) {
            throw new \InvalidArgumentException('non-nullable operation_start_time cannot be null');
        }
        $this->container['operation_start_time'] = $operation_start_time;

        return $this;
    }

    /**
     * Gets initiated_user
     *
     * @return \OpenAPI\Client\Model\AuditUser|null
     */
    public function getInitiatedUser()
    {
        return $this->container['initiated_user'];
    }

    /**
     * Sets initiated_user
     *
     * @param \OpenAPI\Client\Model\AuditUser|null $initiated_user initiated_user
     *
     * @return self
     */
    public function setInitiatedUser($initiated_user)
    {
        if (is_null($initiated_user)) {
            throw new \InvalidArgumentException('non-nullable initiated_user cannot be null');
        }
        $this->container['initiated_user'] = $initiated_user;

        return $this;
    }

    /**
     * Gets operation_complete_time
     *
     * @return \DateTime|null
     */
    public function getOperationCompleteTime()
    {
        return $this->container['operation_complete_time'];
    }

    /**
     * Sets operation_complete_time
     *
     * @param \DateTime|null $operation_complete_time UTC date and time in RFC-3339 format when operation was completed.
     *
     * @return self
     */
    public function setOperationCompleteTime($operation_complete_time)
    {
        if (is_null($operation_complete_time)) {
            throw new \InvalidArgumentException('non-nullable operation_complete_time cannot be null');
        }
        $this->container['operation_complete_time'] = $operation_complete_time;

        return $this;
    }

    /**
     * Gets operation_type
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param string|null $operation_type The operation type the audit captures.
     *
     * @return self
     */
    public function setOperationType($operation_type)
    {
        if (is_null($operation_type)) {
            throw new \InvalidArgumentException('non-nullable operation_type cannot be null');
        }
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets affected_entity_reference_list
     *
     * @return \OpenAPI\Client\Model\EntityInfo[]|null
     */
    public function getAffectedEntityReferenceList()
    {
        return $this->container['affected_entity_reference_list'];
    }

    /**
     * Sets affected_entity_reference_list
     *
     * @param \OpenAPI\Client\Model\EntityInfo[]|null $affected_entity_reference_list A list of entities causing and/or related to the audit.
     *
     * @return self
     */
    public function setAffectedEntityReferenceList($affected_entity_reference_list)
    {
        if (is_null($affected_entity_reference_list)) {
            throw new \InvalidArgumentException('non-nullable affected_entity_reference_list cannot be null');
        }
        $this->container['affected_entity_reference_list'] = $affected_entity_reference_list;

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


