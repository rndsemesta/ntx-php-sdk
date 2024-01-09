<?php
/**
 * RoutingPolicyResourcesDefStatus
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
 * RoutingPolicyResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description Routing policy creation/modification status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoutingPolicyResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'routing_policy_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'service_ip_counters_reverse_direction' => '\OpenAPI\Client\Model\ServiceIpCounters[]',
        'vpc_reference' => '\OpenAPI\Client\Model\VpcReference',
        'error_message' => 'string',
        'routing_policy_counters_reverse_direction' => '\OpenAPI\Client\Model\RoutingPolicyCounters',
        'destination' => '\OpenAPI\Client\Model\NetworkAddressStatus',
        'service_ip_counters' => '\OpenAPI\Client\Model\ServiceIpCounters[]',
        'is_bidirectional' => 'bool',
        'source' => '\OpenAPI\Client\Model\NetworkAddressStatus',
        'routing_policy_counters' => '\OpenAPI\Client\Model\RoutingPolicyCounters',
        'protocol_parameters' => '\OpenAPI\Client\Model\ProtocolParametersStatus',
        'virtual_network_reference' => '\OpenAPI\Client\Model\VirtualNetworkReference',
        'action' => '\OpenAPI\Client\Model\RoutingPolicyActionStatus',
        'protocol_type' => 'string',
        'priority' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'service_ip_counters_reverse_direction' => null,
        'vpc_reference' => null,
        'error_message' => null,
        'routing_policy_counters_reverse_direction' => null,
        'destination' => null,
        'service_ip_counters' => null,
        'is_bidirectional' => null,
        'source' => null,
        'routing_policy_counters' => null,
        'protocol_parameters' => null,
        'virtual_network_reference' => null,
        'action' => null,
        'protocol_type' => null,
        'priority' => 'int16'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'service_ip_counters_reverse_direction' => false,
        'vpc_reference' => false,
        'error_message' => false,
        'routing_policy_counters_reverse_direction' => false,
        'destination' => false,
        'service_ip_counters' => false,
        'is_bidirectional' => false,
        'source' => false,
        'routing_policy_counters' => false,
        'protocol_parameters' => false,
        'virtual_network_reference' => false,
        'action' => false,
        'protocol_type' => false,
        'priority' => false
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
        'service_ip_counters_reverse_direction' => 'service_ip_counters_reverse_direction',
        'vpc_reference' => 'vpc_reference',
        'error_message' => 'error_message',
        'routing_policy_counters_reverse_direction' => 'routing_policy_counters_reverse_direction',
        'destination' => 'destination',
        'service_ip_counters' => 'service_ip_counters',
        'is_bidirectional' => 'is_bidirectional',
        'source' => 'source',
        'routing_policy_counters' => 'routing_policy_counters',
        'protocol_parameters' => 'protocol_parameters',
        'virtual_network_reference' => 'virtual_network_reference',
        'action' => 'action',
        'protocol_type' => 'protocol_type',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_ip_counters_reverse_direction' => 'setServiceIpCountersReverseDirection',
        'vpc_reference' => 'setVpcReference',
        'error_message' => 'setErrorMessage',
        'routing_policy_counters_reverse_direction' => 'setRoutingPolicyCountersReverseDirection',
        'destination' => 'setDestination',
        'service_ip_counters' => 'setServiceIpCounters',
        'is_bidirectional' => 'setIsBidirectional',
        'source' => 'setSource',
        'routing_policy_counters' => 'setRoutingPolicyCounters',
        'protocol_parameters' => 'setProtocolParameters',
        'virtual_network_reference' => 'setVirtualNetworkReference',
        'action' => 'setAction',
        'protocol_type' => 'setProtocolType',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_ip_counters_reverse_direction' => 'getServiceIpCountersReverseDirection',
        'vpc_reference' => 'getVpcReference',
        'error_message' => 'getErrorMessage',
        'routing_policy_counters_reverse_direction' => 'getRoutingPolicyCountersReverseDirection',
        'destination' => 'getDestination',
        'service_ip_counters' => 'getServiceIpCounters',
        'is_bidirectional' => 'getIsBidirectional',
        'source' => 'getSource',
        'routing_policy_counters' => 'getRoutingPolicyCounters',
        'protocol_parameters' => 'getProtocolParameters',
        'virtual_network_reference' => 'getVirtualNetworkReference',
        'action' => 'getAction',
        'protocol_type' => 'getProtocolType',
        'priority' => 'getPriority'
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
        $this->setIfExists('service_ip_counters_reverse_direction', $data ?? [], null);
        $this->setIfExists('vpc_reference', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('routing_policy_counters_reverse_direction', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('service_ip_counters', $data ?? [], null);
        $this->setIfExists('is_bidirectional', $data ?? [], false);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('routing_policy_counters', $data ?? [], null);
        $this->setIfExists('protocol_parameters', $data ?? [], null);
        $this->setIfExists('virtual_network_reference', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('protocol_type', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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
     * Gets service_ip_counters_reverse_direction
     *
     * @return \OpenAPI\Client\Model\ServiceIpCounters[]|null
     */
    public function getServiceIpCountersReverseDirection()
    {
        return $this->container['service_ip_counters_reverse_direction'];
    }

    /**
     * Sets service_ip_counters_reverse_direction
     *
     * @param \OpenAPI\Client\Model\ServiceIpCounters[]|null $service_ip_counters_reverse_direction Policy counters for each service IP for reverse direction reroute routing policy. Applicable only if is_bidirectional is true.
     *
     * @return self
     */
    public function setServiceIpCountersReverseDirection($service_ip_counters_reverse_direction)
    {
        if (is_null($service_ip_counters_reverse_direction)) {
            throw new \InvalidArgumentException('non-nullable service_ip_counters_reverse_direction cannot be null');
        }
        $this->container['service_ip_counters_reverse_direction'] = $service_ip_counters_reverse_direction;

        return $this;
    }

    /**
     * Gets vpc_reference
     *
     * @return \OpenAPI\Client\Model\VpcReference|null
     */
    public function getVpcReference()
    {
        return $this->container['vpc_reference'];
    }

    /**
     * Sets vpc_reference
     *
     * @param \OpenAPI\Client\Model\VpcReference|null $vpc_reference vpc_reference
     *
     * @return self
     */
    public function setVpcReference($vpc_reference)
    {
        if (is_null($vpc_reference)) {
            throw new \InvalidArgumentException('non-nullable vpc_reference cannot be null');
        }
        $this->container['vpc_reference'] = $vpc_reference;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message Error message describing why the routing policy is inactive.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            throw new \InvalidArgumentException('non-nullable error_message cannot be null');
        }
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets routing_policy_counters_reverse_direction
     *
     * @return \OpenAPI\Client\Model\RoutingPolicyCounters|null
     */
    public function getRoutingPolicyCountersReverseDirection()
    {
        return $this->container['routing_policy_counters_reverse_direction'];
    }

    /**
     * Sets routing_policy_counters_reverse_direction
     *
     * @param \OpenAPI\Client\Model\RoutingPolicyCounters|null $routing_policy_counters_reverse_direction routing_policy_counters_reverse_direction
     *
     * @return self
     */
    public function setRoutingPolicyCountersReverseDirection($routing_policy_counters_reverse_direction)
    {
        if (is_null($routing_policy_counters_reverse_direction)) {
            throw new \InvalidArgumentException('non-nullable routing_policy_counters_reverse_direction cannot be null');
        }
        $this->container['routing_policy_counters_reverse_direction'] = $routing_policy_counters_reverse_direction;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \OpenAPI\Client\Model\NetworkAddressStatus|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \OpenAPI\Client\Model\NetworkAddressStatus|null $destination destination
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets service_ip_counters
     *
     * @return \OpenAPI\Client\Model\ServiceIpCounters[]|null
     */
    public function getServiceIpCounters()
    {
        return $this->container['service_ip_counters'];
    }

    /**
     * Sets service_ip_counters
     *
     * @param \OpenAPI\Client\Model\ServiceIpCounters[]|null $service_ip_counters Policy counters for each service IP.
     *
     * @return self
     */
    public function setServiceIpCounters($service_ip_counters)
    {
        if (is_null($service_ip_counters)) {
            throw new \InvalidArgumentException('non-nullable service_ip_counters cannot be null');
        }
        $this->container['service_ip_counters'] = $service_ip_counters;

        return $this;
    }

    /**
     * Gets is_bidirectional
     *
     * @return bool|null
     */
    public function getIsBidirectional()
    {
        return $this->container['is_bidirectional'];
    }

    /**
     * Sets is_bidirectional
     *
     * @param bool|null $is_bidirectional Whether to configure/install policy in reverse direction too (i.e matching traffic from destination to source)
     *
     * @return self
     */
    public function setIsBidirectional($is_bidirectional)
    {
        if (is_null($is_bidirectional)) {
            throw new \InvalidArgumentException('non-nullable is_bidirectional cannot be null');
        }
        $this->container['is_bidirectional'] = $is_bidirectional;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\NetworkAddressStatus|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\NetworkAddressStatus|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets routing_policy_counters
     *
     * @return \OpenAPI\Client\Model\RoutingPolicyCounters|null
     */
    public function getRoutingPolicyCounters()
    {
        return $this->container['routing_policy_counters'];
    }

    /**
     * Sets routing_policy_counters
     *
     * @param \OpenAPI\Client\Model\RoutingPolicyCounters|null $routing_policy_counters routing_policy_counters
     *
     * @return self
     */
    public function setRoutingPolicyCounters($routing_policy_counters)
    {
        if (is_null($routing_policy_counters)) {
            throw new \InvalidArgumentException('non-nullable routing_policy_counters cannot be null');
        }
        $this->container['routing_policy_counters'] = $routing_policy_counters;

        return $this;
    }

    /**
     * Gets protocol_parameters
     *
     * @return \OpenAPI\Client\Model\ProtocolParametersStatus|null
     */
    public function getProtocolParameters()
    {
        return $this->container['protocol_parameters'];
    }

    /**
     * Sets protocol_parameters
     *
     * @param \OpenAPI\Client\Model\ProtocolParametersStatus|null $protocol_parameters protocol_parameters
     *
     * @return self
     */
    public function setProtocolParameters($protocol_parameters)
    {
        if (is_null($protocol_parameters)) {
            throw new \InvalidArgumentException('non-nullable protocol_parameters cannot be null');
        }
        $this->container['protocol_parameters'] = $protocol_parameters;

        return $this;
    }

    /**
     * Gets virtual_network_reference
     *
     * @return \OpenAPI\Client\Model\VirtualNetworkReference|null
     */
    public function getVirtualNetworkReference()
    {
        return $this->container['virtual_network_reference'];
    }

    /**
     * Sets virtual_network_reference
     *
     * @param \OpenAPI\Client\Model\VirtualNetworkReference|null $virtual_network_reference virtual_network_reference
     *
     * @return self
     */
    public function setVirtualNetworkReference($virtual_network_reference)
    {
        if (is_null($virtual_network_reference)) {
            throw new \InvalidArgumentException('non-nullable virtual_network_reference cannot be null');
        }
        $this->container['virtual_network_reference'] = $virtual_network_reference;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \OpenAPI\Client\Model\RoutingPolicyActionStatus|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \OpenAPI\Client\Model\RoutingPolicyActionStatus|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets protocol_type
     *
     * @return string|null
     */
    public function getProtocolType()
    {
        return $this->container['protocol_type'];
    }

    /**
     * Sets protocol_type
     *
     * @param string|null $protocol_type The IP protocol type of traffic that is entering the router.
     *
     * @return self
     */
    public function setProtocolType($protocol_type)
    {
        if (is_null($protocol_type)) {
            throw new \InvalidArgumentException('non-nullable protocol_type cannot be null');
        }
        $this->container['protocol_type'] = $protocol_type;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
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


