<?php
/**
 * RecoveryPlanPolicyState
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
 * RecoveryPlanPolicyState Class Doc Comment
 *
 * @category Class
 * @description State of enforced policy on an entity.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecoveryPlanPolicyState implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recovery_plan_policy_state';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'policy_reference' => '\OpenAPI\Client\Model\Reference',
        'policy_info' => '\OpenAPI\Client\Model\RecoveryPlanInfo',
        'compliance_status' => 'string',
        'enforcement_mode' => 'string',
        'error_message_list' => '\OpenAPI\Client\Model\MessageResource[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'policy_reference' => null,
        'policy_info' => null,
        'compliance_status' => null,
        'enforcement_mode' => null,
        'error_message_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'policy_reference' => false,
        'policy_info' => false,
        'compliance_status' => false,
        'enforcement_mode' => false,
        'error_message_list' => false
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
        'policy_reference' => 'policy_reference',
        'policy_info' => 'policy_info',
        'compliance_status' => 'compliance_status',
        'enforcement_mode' => 'enforcement_mode',
        'error_message_list' => 'error_message_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'policy_reference' => 'setPolicyReference',
        'policy_info' => 'setPolicyInfo',
        'compliance_status' => 'setComplianceStatus',
        'enforcement_mode' => 'setEnforcementMode',
        'error_message_list' => 'setErrorMessageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'policy_reference' => 'getPolicyReference',
        'policy_info' => 'getPolicyInfo',
        'compliance_status' => 'getComplianceStatus',
        'enforcement_mode' => 'getEnforcementMode',
        'error_message_list' => 'getErrorMessageList'
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
        $this->setIfExists('policy_reference', $data ?? [], null);
        $this->setIfExists('policy_info', $data ?? [], null);
        $this->setIfExists('compliance_status', $data ?? [], null);
        $this->setIfExists('enforcement_mode', $data ?? [], null);
        $this->setIfExists('error_message_list', $data ?? [], null);
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

        if ($this->container['policy_reference'] === null) {
            $invalidProperties[] = "'policy_reference' can't be null";
        }
        if ($this->container['compliance_status'] === null) {
            $invalidProperties[] = "'compliance_status' can't be null";
        }
        if ($this->container['enforcement_mode'] === null) {
            $invalidProperties[] = "'enforcement_mode' can't be null";
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
     * Gets policy_reference
     *
     * @return \OpenAPI\Client\Model\Reference
     */
    public function getPolicyReference()
    {
        return $this->container['policy_reference'];
    }

    /**
     * Sets policy_reference
     *
     * @param \OpenAPI\Client\Model\Reference $policy_reference policy_reference
     *
     * @return self
     */
    public function setPolicyReference($policy_reference)
    {
        if (is_null($policy_reference)) {
            throw new \InvalidArgumentException('non-nullable policy_reference cannot be null');
        }
        $this->container['policy_reference'] = $policy_reference;

        return $this;
    }

    /**
     * Gets policy_info
     *
     * @return \OpenAPI\Client\Model\RecoveryPlanInfo|null
     */
    public function getPolicyInfo()
    {
        return $this->container['policy_info'];
    }

    /**
     * Sets policy_info
     *
     * @param \OpenAPI\Client\Model\RecoveryPlanInfo|null $policy_info policy_info
     *
     * @return self
     */
    public function setPolicyInfo($policy_info)
    {
        if (is_null($policy_info)) {
            throw new \InvalidArgumentException('non-nullable policy_info cannot be null');
        }
        $this->container['policy_info'] = $policy_info;

        return $this;
    }

    /**
     * Gets compliance_status
     *
     * @return string
     */
    public function getComplianceStatus()
    {
        return $this->container['compliance_status'];
    }

    /**
     * Sets compliance_status
     *
     * @param string $compliance_status Compliance state enum.
     *
     * @return self
     */
    public function setComplianceStatus($compliance_status)
    {
        if (is_null($compliance_status)) {
            throw new \InvalidArgumentException('non-nullable compliance_status cannot be null');
        }
        $this->container['compliance_status'] = $compliance_status;

        return $this;
    }

    /**
     * Gets enforcement_mode
     *
     * @return string
     */
    public function getEnforcementMode()
    {
        return $this->container['enforcement_mode'];
    }

    /**
     * Sets enforcement_mode
     *
     * @param string $enforcement_mode Policy enforcement mode informs us about what the policy engine is currently doing to enforce the policy on the entity. Monitoring indicates that the policy engine is simply monitoring the entity's state. Enforcing means that the policy engine is currently trying to enforce the policy on the entity. Enforcement failed indicates that the policy engine encountered a non-transient error and requires user intervention to fix the problem, error message gives the reason for error in this case.
     *
     * @return self
     */
    public function setEnforcementMode($enforcement_mode)
    {
        if (is_null($enforcement_mode)) {
            throw new \InvalidArgumentException('non-nullable enforcement_mode cannot be null');
        }
        $this->container['enforcement_mode'] = $enforcement_mode;

        return $this;
    }

    /**
     * Gets error_message_list
     *
     * @return \OpenAPI\Client\Model\MessageResource[]|null
     */
    public function getErrorMessageList()
    {
        return $this->container['error_message_list'];
    }

    /**
     * Sets error_message_list
     *
     * @param \OpenAPI\Client\Model\MessageResource[]|null $error_message_list error_message_list
     *
     * @return self
     */
    public function setErrorMessageList($error_message_list)
    {
        if (is_null($error_message_list)) {
            throw new \InvalidArgumentException('non-nullable error_message_list cannot be null');
        }
        $this->container['error_message_list'] = $error_message_list;

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


