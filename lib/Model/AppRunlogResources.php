<?php
/**
 * AppRunlogResources
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
 * AppRunlogResources Class Doc Comment
 *
 * @category Class
 * @description Runlog resources
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppRunlogResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'app_runlog_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_reference' => '\OpenAPI\Client\Model\EntityReference',
        'task_reference' => '\OpenAPI\Client\Model\AppTaskReference',
        'userdata_reference' => '\OpenAPI\Client\Model\EntityReference',
        'is_critical' => 'bool',
        'root_reference' => '\OpenAPI\Client\Model\AppRunlogReference',
        'call_runbook_reference' => '\OpenAPI\Client\Model\AppTaskReference',
        'element_type' => 'string',
        'reason_list' => 'string[]',
        'parent_reference' => '\OpenAPI\Client\Model\AppRunlogReference',
        'is_runlog_archived' => 'bool',
        'type' => 'string',
        'application_reference' => '\OpenAPI\Client\Model\AppReference',
        'element_reference' => '\OpenAPI\Client\Model\EntityReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_reference' => null,
        'task_reference' => null,
        'userdata_reference' => null,
        'is_critical' => null,
        'root_reference' => null,
        'call_runbook_reference' => null,
        'element_type' => null,
        'reason_list' => null,
        'parent_reference' => null,
        'is_runlog_archived' => null,
        'type' => null,
        'application_reference' => null,
        'element_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action_reference' => false,
        'task_reference' => false,
        'userdata_reference' => false,
        'is_critical' => false,
        'root_reference' => false,
        'call_runbook_reference' => false,
        'element_type' => false,
        'reason_list' => false,
        'parent_reference' => false,
        'is_runlog_archived' => false,
        'type' => false,
        'application_reference' => false,
        'element_reference' => false
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
        'action_reference' => 'action_reference',
        'task_reference' => 'task_reference',
        'userdata_reference' => 'userdata_reference',
        'is_critical' => 'is_critical',
        'root_reference' => 'root_reference',
        'call_runbook_reference' => 'call_runbook_reference',
        'element_type' => 'element_type',
        'reason_list' => 'reason_list',
        'parent_reference' => 'parent_reference',
        'is_runlog_archived' => 'is_runlog_archived',
        'type' => 'type',
        'application_reference' => 'application_reference',
        'element_reference' => 'element_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_reference' => 'setActionReference',
        'task_reference' => 'setTaskReference',
        'userdata_reference' => 'setUserdataReference',
        'is_critical' => 'setIsCritical',
        'root_reference' => 'setRootReference',
        'call_runbook_reference' => 'setCallRunbookReference',
        'element_type' => 'setElementType',
        'reason_list' => 'setReasonList',
        'parent_reference' => 'setParentReference',
        'is_runlog_archived' => 'setIsRunlogArchived',
        'type' => 'setType',
        'application_reference' => 'setApplicationReference',
        'element_reference' => 'setElementReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_reference' => 'getActionReference',
        'task_reference' => 'getTaskReference',
        'userdata_reference' => 'getUserdataReference',
        'is_critical' => 'getIsCritical',
        'root_reference' => 'getRootReference',
        'call_runbook_reference' => 'getCallRunbookReference',
        'element_type' => 'getElementType',
        'reason_list' => 'getReasonList',
        'parent_reference' => 'getParentReference',
        'is_runlog_archived' => 'getIsRunlogArchived',
        'type' => 'getType',
        'application_reference' => 'getApplicationReference',
        'element_reference' => 'getElementReference'
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
        $this->setIfExists('action_reference', $data ?? [], null);
        $this->setIfExists('task_reference', $data ?? [], null);
        $this->setIfExists('userdata_reference', $data ?? [], null);
        $this->setIfExists('is_critical', $data ?? [], false);
        $this->setIfExists('root_reference', $data ?? [], null);
        $this->setIfExists('call_runbook_reference', $data ?? [], null);
        $this->setIfExists('element_type', $data ?? [], null);
        $this->setIfExists('reason_list', $data ?? [], null);
        $this->setIfExists('parent_reference', $data ?? [], null);
        $this->setIfExists('is_runlog_archived', $data ?? [], false);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('application_reference', $data ?? [], null);
        $this->setIfExists('element_reference', $data ?? [], null);
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

        if ($this->container['is_critical'] === null) {
            $invalidProperties[] = "'is_critical' can't be null";
        }
        if ($this->container['reason_list'] === null) {
            $invalidProperties[] = "'reason_list' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets action_reference
     *
     * @return \OpenAPI\Client\Model\EntityReference|null
     */
    public function getActionReference()
    {
        return $this->container['action_reference'];
    }

    /**
     * Sets action_reference
     *
     * @param \OpenAPI\Client\Model\EntityReference|null $action_reference action_reference
     *
     * @return self
     */
    public function setActionReference($action_reference)
    {
        if (is_null($action_reference)) {
            throw new \InvalidArgumentException('non-nullable action_reference cannot be null');
        }
        $this->container['action_reference'] = $action_reference;

        return $this;
    }

    /**
     * Gets task_reference
     *
     * @return \OpenAPI\Client\Model\AppTaskReference|null
     */
    public function getTaskReference()
    {
        return $this->container['task_reference'];
    }

    /**
     * Sets task_reference
     *
     * @param \OpenAPI\Client\Model\AppTaskReference|null $task_reference task_reference
     *
     * @return self
     */
    public function setTaskReference($task_reference)
    {
        if (is_null($task_reference)) {
            throw new \InvalidArgumentException('non-nullable task_reference cannot be null');
        }
        $this->container['task_reference'] = $task_reference;

        return $this;
    }

    /**
     * Gets userdata_reference
     *
     * @return \OpenAPI\Client\Model\EntityReference|null
     */
    public function getUserdataReference()
    {
        return $this->container['userdata_reference'];
    }

    /**
     * Sets userdata_reference
     *
     * @param \OpenAPI\Client\Model\EntityReference|null $userdata_reference userdata_reference
     *
     * @return self
     */
    public function setUserdataReference($userdata_reference)
    {
        if (is_null($userdata_reference)) {
            throw new \InvalidArgumentException('non-nullable userdata_reference cannot be null');
        }
        $this->container['userdata_reference'] = $userdata_reference;

        return $this;
    }

    /**
     * Gets is_critical
     *
     * @return bool
     */
    public function getIsCritical()
    {
        return $this->container['is_critical'];
    }

    /**
     * Sets is_critical
     *
     * @param bool $is_critical critical or non-critical runlog
     *
     * @return self
     */
    public function setIsCritical($is_critical)
    {
        if (is_null($is_critical)) {
            throw new \InvalidArgumentException('non-nullable is_critical cannot be null');
        }
        $this->container['is_critical'] = $is_critical;

        return $this;
    }

    /**
     * Gets root_reference
     *
     * @return \OpenAPI\Client\Model\AppRunlogReference|null
     */
    public function getRootReference()
    {
        return $this->container['root_reference'];
    }

    /**
     * Sets root_reference
     *
     * @param \OpenAPI\Client\Model\AppRunlogReference|null $root_reference root_reference
     *
     * @return self
     */
    public function setRootReference($root_reference)
    {
        if (is_null($root_reference)) {
            throw new \InvalidArgumentException('non-nullable root_reference cannot be null');
        }
        $this->container['root_reference'] = $root_reference;

        return $this;
    }

    /**
     * Gets call_runbook_reference
     *
     * @return \OpenAPI\Client\Model\AppTaskReference|null
     */
    public function getCallRunbookReference()
    {
        return $this->container['call_runbook_reference'];
    }

    /**
     * Sets call_runbook_reference
     *
     * @param \OpenAPI\Client\Model\AppTaskReference|null $call_runbook_reference call_runbook_reference
     *
     * @return self
     */
    public function setCallRunbookReference($call_runbook_reference)
    {
        if (is_null($call_runbook_reference)) {
            throw new \InvalidArgumentException('non-nullable call_runbook_reference cannot be null');
        }
        $this->container['call_runbook_reference'] = $call_runbook_reference;

        return $this;
    }

    /**
     * Gets element_type
     *
     * @return string|null
     */
    public function getElementType()
    {
        return $this->container['element_type'];
    }

    /**
     * Sets element_type
     *
     * @param string|null $element_type type of element this runlog refers to.
     *
     * @return self
     */
    public function setElementType($element_type)
    {
        if (is_null($element_type)) {
            throw new \InvalidArgumentException('non-nullable element_type cannot be null');
        }
        $this->container['element_type'] = $element_type;

        return $this;
    }

    /**
     * Gets reason_list
     *
     * @return string[]
     */
    public function getReasonList()
    {
        return $this->container['reason_list'];
    }

    /**
     * Sets reason_list
     *
     * @param string[] $reason_list reasons of failure if any
     *
     * @return self
     */
    public function setReasonList($reason_list)
    {
        if (is_null($reason_list)) {
            throw new \InvalidArgumentException('non-nullable reason_list cannot be null');
        }
        $this->container['reason_list'] = $reason_list;

        return $this;
    }

    /**
     * Gets parent_reference
     *
     * @return \OpenAPI\Client\Model\AppRunlogReference|null
     */
    public function getParentReference()
    {
        return $this->container['parent_reference'];
    }

    /**
     * Sets parent_reference
     *
     * @param \OpenAPI\Client\Model\AppRunlogReference|null $parent_reference parent_reference
     *
     * @return self
     */
    public function setParentReference($parent_reference)
    {
        if (is_null($parent_reference)) {
            throw new \InvalidArgumentException('non-nullable parent_reference cannot be null');
        }
        $this->container['parent_reference'] = $parent_reference;

        return $this;
    }

    /**
     * Gets is_runlog_archived
     *
     * @return bool|null
     */
    public function getIsRunlogArchived()
    {
        return $this->container['is_runlog_archived'];
    }

    /**
     * Sets is_runlog_archived
     *
     * @param bool|null $is_runlog_archived Describe if action runlog is archived
     *
     * @return self
     */
    public function setIsRunlogArchived($is_runlog_archived)
    {
        if (is_null($is_runlog_archived)) {
            throw new \InvalidArgumentException('non-nullable is_runlog_archived cannot be null');
        }
        $this->container['is_runlog_archived'] = $is_runlog_archived;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type of runlog
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
     * Gets application_reference
     *
     * @return \OpenAPI\Client\Model\AppReference|null
     */
    public function getApplicationReference()
    {
        return $this->container['application_reference'];
    }

    /**
     * Sets application_reference
     *
     * @param \OpenAPI\Client\Model\AppReference|null $application_reference application_reference
     *
     * @return self
     */
    public function setApplicationReference($application_reference)
    {
        if (is_null($application_reference)) {
            throw new \InvalidArgumentException('non-nullable application_reference cannot be null');
        }
        $this->container['application_reference'] = $application_reference;

        return $this;
    }

    /**
     * Gets element_reference
     *
     * @return \OpenAPI\Client\Model\EntityReference|null
     */
    public function getElementReference()
    {
        return $this->container['element_reference'];
    }

    /**
     * Sets element_reference
     *
     * @param \OpenAPI\Client\Model\EntityReference|null $element_reference element_reference
     *
     * @return self
     */
    public function setElementReference($element_reference)
    {
        if (is_null($element_reference)) {
            throw new \InvalidArgumentException('non-nullable element_reference cannot be null');
        }
        $this->container['element_reference'] = $element_reference;

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

