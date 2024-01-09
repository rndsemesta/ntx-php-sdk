<?php
/**
 * AwsElasticIpResourcesDefStatus
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
 * AwsElasticIpResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description AWS elastic IP creation/modification status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AwsElasticIpResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'aws_elastic_ip_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'public_ip_address' => 'string',
        'allocation_id' => 'string',
        'instance_id' => 'string',
        'association_id' => 'string',
        'network_interface_id' => 'string',
        'private_ip_address' => 'string',
        'network_interface_owner_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain' => null,
        'public_ip_address' => null,
        'allocation_id' => null,
        'instance_id' => null,
        'association_id' => null,
        'network_interface_id' => null,
        'private_ip_address' => null,
        'network_interface_owner_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain' => false,
        'public_ip_address' => false,
        'allocation_id' => false,
        'instance_id' => false,
        'association_id' => false,
        'network_interface_id' => false,
        'private_ip_address' => false,
        'network_interface_owner_id' => false
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
        'domain' => 'domain',
        'public_ip_address' => 'public_ip_address',
        'allocation_id' => 'allocation_id',
        'instance_id' => 'instance_id',
        'association_id' => 'association_id',
        'network_interface_id' => 'network_interface_id',
        'private_ip_address' => 'private_ip_address',
        'network_interface_owner_id' => 'network_interface_owner_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'public_ip_address' => 'setPublicIpAddress',
        'allocation_id' => 'setAllocationId',
        'instance_id' => 'setInstanceId',
        'association_id' => 'setAssociationId',
        'network_interface_id' => 'setNetworkInterfaceId',
        'private_ip_address' => 'setPrivateIpAddress',
        'network_interface_owner_id' => 'setNetworkInterfaceOwnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'public_ip_address' => 'getPublicIpAddress',
        'allocation_id' => 'getAllocationId',
        'instance_id' => 'getInstanceId',
        'association_id' => 'getAssociationId',
        'network_interface_id' => 'getNetworkInterfaceId',
        'private_ip_address' => 'getPrivateIpAddress',
        'network_interface_owner_id' => 'getNetworkInterfaceOwnerId'
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('public_ip_address', $data ?? [], null);
        $this->setIfExists('allocation_id', $data ?? [], null);
        $this->setIfExists('instance_id', $data ?? [], null);
        $this->setIfExists('association_id', $data ?? [], null);
        $this->setIfExists('network_interface_id', $data ?? [], null);
        $this->setIfExists('private_ip_address', $data ?? [], null);
        $this->setIfExists('network_interface_owner_id', $data ?? [], null);
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

        if (!is_null($this->container['public_ip_address']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['public_ip_address'])) {
            $invalidProperties[] = "invalid value for 'public_ip_address', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['instance_id']) && !preg_match("/^i-[a-f0-9]{1,17}$/", $this->container['instance_id'])) {
            $invalidProperties[] = "invalid value for 'instance_id', must be conform to the pattern /^i-[a-f0-9]{1,17}$/.";
        }

        if (!is_null($this->container['private_ip_address']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['private_ip_address'])) {
            $invalidProperties[] = "invalid value for 'private_ip_address', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
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
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain Indicates whether the address is an EC2 or VPC address.
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets public_ip_address
     *
     * @return string|null
     */
    public function getPublicIpAddress()
    {
        return $this->container['public_ip_address'];
    }

    /**
     * Sets public_ip_address
     *
     * @param string|null $public_ip_address The Elastic IP address
     *
     * @return self
     */
    public function setPublicIpAddress($public_ip_address)
    {
        if (is_null($public_ip_address)) {
            throw new \InvalidArgumentException('non-nullable public_ip_address cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($public_ip_address)))) {
            throw new \InvalidArgumentException("invalid value for \$public_ip_address when calling AwsElasticIpResourcesDefStatus., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['public_ip_address'] = $public_ip_address;

        return $this;
    }

    /**
     * Gets allocation_id
     *
     * @return string|null
     */
    public function getAllocationId()
    {
        return $this->container['allocation_id'];
    }

    /**
     * Sets allocation_id
     *
     * @param string|null $allocation_id The allocation AWS ID for the address (only for VPC)
     *
     * @return self
     */
    public function setAllocationId($allocation_id)
    {
        if (is_null($allocation_id)) {
            throw new \InvalidArgumentException('non-nullable allocation_id cannot be null');
        }
        $this->container['allocation_id'] = $allocation_id;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string|null $instance_id The AWS ID of the instance the address is associated with.
     *
     * @return self
     */
    public function setInstanceId($instance_id)
    {
        if (is_null($instance_id)) {
            throw new \InvalidArgumentException('non-nullable instance_id cannot be null');
        }

        if ((!preg_match("/^i-[a-f0-9]{1,17}$/", ObjectSerializer::toString($instance_id)))) {
            throw new \InvalidArgumentException("invalid value for \$instance_id when calling AwsElasticIpResourcesDefStatus., must conform to the pattern /^i-[a-f0-9]{1,17}$/.");
        }

        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets association_id
     *
     * @return string|null
     */
    public function getAssociationId()
    {
        return $this->container['association_id'];
    }

    /**
     * Sets association_id
     *
     * @param string|null $association_id The association AWS ID for the address (only for VPC)
     *
     * @return self
     */
    public function setAssociationId($association_id)
    {
        if (is_null($association_id)) {
            throw new \InvalidArgumentException('non-nullable association_id cannot be null');
        }
        $this->container['association_id'] = $association_id;

        return $this;
    }

    /**
     * Gets network_interface_id
     *
     * @return string|null
     */
    public function getNetworkInterfaceId()
    {
        return $this->container['network_interface_id'];
    }

    /**
     * Sets network_interface_id
     *
     * @param string|null $network_interface_id The network interface (if any) that the address is associated with (only for VPC).
     *
     * @return self
     */
    public function setNetworkInterfaceId($network_interface_id)
    {
        if (is_null($network_interface_id)) {
            throw new \InvalidArgumentException('non-nullable network_interface_id cannot be null');
        }
        $this->container['network_interface_id'] = $network_interface_id;

        return $this;
    }

    /**
     * Gets private_ip_address
     *
     * @return string|null
     */
    public function getPrivateIpAddress()
    {
        return $this->container['private_ip_address'];
    }

    /**
     * Sets private_ip_address
     *
     * @param string|null $private_ip_address The private IP address associated with the Elastic IP (only for VPC)
     *
     * @return self
     */
    public function setPrivateIpAddress($private_ip_address)
    {
        if (is_null($private_ip_address)) {
            throw new \InvalidArgumentException('non-nullable private_ip_address cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($private_ip_address)))) {
            throw new \InvalidArgumentException("invalid value for \$private_ip_address when calling AwsElasticIpResourcesDefStatus., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['private_ip_address'] = $private_ip_address;

        return $this;
    }

    /**
     * Gets network_interface_owner_id
     *
     * @return string|null
     */
    public function getNetworkInterfaceOwnerId()
    {
        return $this->container['network_interface_owner_id'];
    }

    /**
     * Sets network_interface_owner_id
     *
     * @param string|null $network_interface_owner_id The owner AWS ID (only for VPC).
     *
     * @return self
     */
    public function setNetworkInterfaceOwnerId($network_interface_owner_id)
    {
        if (is_null($network_interface_owner_id)) {
            throw new \InvalidArgumentException('non-nullable network_interface_owner_id cannot be null');
        }
        $this->container['network_interface_owner_id'] = $network_interface_owner_id;

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


