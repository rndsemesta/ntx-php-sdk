<?php
/**
 * RoutingPolicyResources
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
 * RoutingPolicyResources Class Doc Comment
 *
 * @category Class
 * @description Routing Policy creation/modification spec. The routing policy matches incoming traffic on the router based on the following fields: &#39;source&#39;, &#39;destination&#39;, &#39;protocol_type&#39;, &#39;protocol_parameters&#39;. Once traffic matches the parameters defined in the policy &#39;action&#39; field defines the action that needs to be performed on the traffic. &#39;action&#39; could be permit/deny/reroute.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoutingPolicyResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'routing_policy_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_bidirectional' => 'bool',
        'vpc_reference' => '\OpenAPI\Client\Model\VpcReference',
        'destination' => '\OpenAPI\Client\Model\NetworkAddress',
        'priority' => 'int',
        'source' => '\OpenAPI\Client\Model\NetworkAddress',
        'protocol_parameters' => '\OpenAPI\Client\Model\ProtocolParameters',
        'virtual_network_reference' => '\OpenAPI\Client\Model\VirtualNetworkReference',
        'action' => '\OpenAPI\Client\Model\RoutingPolicyAction',
        'protocol_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_bidirectional' => null,
        'vpc_reference' => null,
        'destination' => null,
        'priority' => 'int16',
        'source' => null,
        'protocol_parameters' => null,
        'virtual_network_reference' => null,
        'action' => null,
        'protocol_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_bidirectional' => false,
        'vpc_reference' => false,
        'destination' => false,
        'priority' => false,
        'source' => false,
        'protocol_parameters' => false,
        'virtual_network_reference' => false,
        'action' => false,
        'protocol_type' => false
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
        'is_bidirectional' => 'is_bidirectional',
        'vpc_reference' => 'vpc_reference',
        'destination' => 'destination',
        'priority' => 'priority',
        'source' => 'source',
        'protocol_parameters' => 'protocol_parameters',
        'virtual_network_reference' => 'virtual_network_reference',
        'action' => 'action',
        'protocol_type' => 'protocol_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_bidirectional' => 'setIsBidirectional',
        'vpc_reference' => 'setVpcReference',
        'destination' => 'setDestination',
        'priority' => 'setPriority',
        'source' => 'setSource',
        'protocol_parameters' => 'setProtocolParameters',
        'virtual_network_reference' => 'setVirtualNetworkReference',
        'action' => 'setAction',
        'protocol_type' => 'setProtocolType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_bidirectional' => 'getIsBidirectional',
        'vpc_reference' => 'getVpcReference',
        'destination' => 'getDestination',
        'priority' => 'getPriority',
        'source' => 'getSource',
        'protocol_parameters' => 'getProtocolParameters',
        'virtual_network_reference' => 'getVirtualNetworkReference',
        'action' => 'getAction',
        'protocol_type' => 'getProtocolType'
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
        $this->setIfExists('is_bidirectional', $data ?? [], false);
        $this->setIfExists('vpc_reference', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('protocol_parameters', $data ?? [], null);
        $this->setIfExists('virtual_network_reference', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('protocol_type', $data ?? [], null);
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

        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if (($this->container['priority'] > 1000)) {
            $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 1000.";
        }

        if (($this->container['priority'] < 1)) {
            $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 1.";
        }

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['protocol_type'] === null) {
            $invalidProperties[] = "'protocol_type' can't be null";
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
     * Gets destination
     *
     * @return \OpenAPI\Client\Model\NetworkAddress
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \OpenAPI\Client\Model\NetworkAddress $destination destination
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
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }

        if (($priority > 1000)) {
            throw new \InvalidArgumentException('invalid value for $priority when calling RoutingPolicyResources., must be smaller than or equal to 1000.');
        }
        if (($priority < 1)) {
            throw new \InvalidArgumentException('invalid value for $priority when calling RoutingPolicyResources., must be bigger than or equal to 1.');
        }

        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\NetworkAddress
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\NetworkAddress $source source
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
     * Gets protocol_parameters
     *
     * @return \OpenAPI\Client\Model\ProtocolParameters|null
     */
    public function getProtocolParameters()
    {
        return $this->container['protocol_parameters'];
    }

    /**
     * Sets protocol_parameters
     *
     * @param \OpenAPI\Client\Model\ProtocolParameters|null $protocol_parameters protocol_parameters
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
     * @return \OpenAPI\Client\Model\RoutingPolicyAction
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \OpenAPI\Client\Model\RoutingPolicyAction $action action
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
     * @return string
     */
    public function getProtocolType()
    {
        return $this->container['protocol_type'];
    }

    /**
     * Sets protocol_type
     *
     * @param string $protocol_type protocol_type
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


