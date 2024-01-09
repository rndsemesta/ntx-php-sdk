<?php
/**
 * VpnGatewayResourcesDefStatus
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
 * VpnGatewayResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description VPN gateway creation/modification status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VpnGatewayResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vpn_gateway_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vpc_reference' => '\OpenAPI\Client\Model\VpcReference',
        'operational_status' => '\OpenAPI\Client\Model\VpnComponentStatus',
        'gateway_device_vendor' => 'string',
        'public_ip' => 'string',
        'gateway_type' => 'string',
        'deployment' => '\OpenAPI\Client\Model\DeploymentStatus',
        'internal_routing_protocol_config' => '\OpenAPI\Client\Model\InternalRoutingProtocolConfigStatus',
        'ebgp_config' => '\OpenAPI\Client\Model\BgpConfigStatus',
        'virtual_network_reference' => '\OpenAPI\Client\Model\VirtualNetworkReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vpc_reference' => null,
        'operational_status' => null,
        'gateway_device_vendor' => null,
        'public_ip' => null,
        'gateway_type' => null,
        'deployment' => null,
        'internal_routing_protocol_config' => null,
        'ebgp_config' => null,
        'virtual_network_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vpc_reference' => false,
        'operational_status' => false,
        'gateway_device_vendor' => false,
        'public_ip' => false,
        'gateway_type' => false,
        'deployment' => false,
        'internal_routing_protocol_config' => false,
        'ebgp_config' => false,
        'virtual_network_reference' => false
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
        'vpc_reference' => 'vpc_reference',
        'operational_status' => 'operational_status',
        'gateway_device_vendor' => 'gateway_device_vendor',
        'public_ip' => 'public_ip',
        'gateway_type' => 'gateway_type',
        'deployment' => 'deployment',
        'internal_routing_protocol_config' => 'internal_routing_protocol_config',
        'ebgp_config' => 'ebgp_config',
        'virtual_network_reference' => 'virtual_network_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vpc_reference' => 'setVpcReference',
        'operational_status' => 'setOperationalStatus',
        'gateway_device_vendor' => 'setGatewayDeviceVendor',
        'public_ip' => 'setPublicIp',
        'gateway_type' => 'setGatewayType',
        'deployment' => 'setDeployment',
        'internal_routing_protocol_config' => 'setInternalRoutingProtocolConfig',
        'ebgp_config' => 'setEbgpConfig',
        'virtual_network_reference' => 'setVirtualNetworkReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vpc_reference' => 'getVpcReference',
        'operational_status' => 'getOperationalStatus',
        'gateway_device_vendor' => 'getGatewayDeviceVendor',
        'public_ip' => 'getPublicIp',
        'gateway_type' => 'getGatewayType',
        'deployment' => 'getDeployment',
        'internal_routing_protocol_config' => 'getInternalRoutingProtocolConfig',
        'ebgp_config' => 'getEbgpConfig',
        'virtual_network_reference' => 'getVirtualNetworkReference'
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
        $this->setIfExists('vpc_reference', $data ?? [], null);
        $this->setIfExists('operational_status', $data ?? [], null);
        $this->setIfExists('gateway_device_vendor', $data ?? [], null);
        $this->setIfExists('public_ip', $data ?? [], null);
        $this->setIfExists('gateway_type', $data ?? [], null);
        $this->setIfExists('deployment', $data ?? [], null);
        $this->setIfExists('internal_routing_protocol_config', $data ?? [], null);
        $this->setIfExists('ebgp_config', $data ?? [], null);
        $this->setIfExists('virtual_network_reference', $data ?? [], null);
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

        if (!is_null($this->container['public_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['public_ip'])) {
            $invalidProperties[] = "invalid value for 'public_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
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
     * Gets operational_status
     *
     * @return \OpenAPI\Client\Model\VpnComponentStatus|null
     */
    public function getOperationalStatus()
    {
        return $this->container['operational_status'];
    }

    /**
     * Sets operational_status
     *
     * @param \OpenAPI\Client\Model\VpnComponentStatus|null $operational_status operational_status
     *
     * @return self
     */
    public function setOperationalStatus($operational_status)
    {
        if (is_null($operational_status)) {
            throw new \InvalidArgumentException('non-nullable operational_status cannot be null');
        }
        $this->container['operational_status'] = $operational_status;

        return $this;
    }

    /**
     * Gets gateway_device_vendor
     *
     * @return string|null
     */
    public function getGatewayDeviceVendor()
    {
        return $this->container['gateway_device_vendor'];
    }

    /**
     * Sets gateway_device_vendor
     *
     * @param string|null $gateway_device_vendor 3rd Party VPN Vendor. This could be a traditional device vendor (like Cisco ASA, Fortinet etc.) or one of the public cloud providers (eg: AWS).
     *
     * @return self
     */
    public function setGatewayDeviceVendor($gateway_device_vendor)
    {
        if (is_null($gateway_device_vendor)) {
            throw new \InvalidArgumentException('non-nullable gateway_device_vendor cannot be null');
        }
        $this->container['gateway_device_vendor'] = $gateway_device_vendor;

        return $this;
    }

    /**
     * Gets public_ip
     *
     * @return string|null
     */
    public function getPublicIp()
    {
        return $this->container['public_ip'];
    }

    /**
     * Sets public_ip
     *
     * @param string|null $public_ip Public IP address of this gateway.
     *
     * @return self
     */
    public function setPublicIp($public_ip)
    {
        if (is_null($public_ip)) {
            throw new \InvalidArgumentException('non-nullable public_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($public_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$public_ip when calling VpnGatewayResourcesDefStatus., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['public_ip'] = $public_ip;

        return $this;
    }

    /**
     * Gets gateway_type
     *
     * @return string|null
     */
    public function getGatewayType()
    {
        return $this->container['gateway_type'];
    }

    /**
     * Sets gateway_type
     *
     * @param string|null $gateway_type Whether this is local or remote gateway entity.
     *
     * @return self
     */
    public function setGatewayType($gateway_type)
    {
        if (is_null($gateway_type)) {
            throw new \InvalidArgumentException('non-nullable gateway_type cannot be null');
        }
        $this->container['gateway_type'] = $gateway_type;

        return $this;
    }

    /**
     * Gets deployment
     *
     * @return \OpenAPI\Client\Model\DeploymentStatus|null
     */
    public function getDeployment()
    {
        return $this->container['deployment'];
    }

    /**
     * Sets deployment
     *
     * @param \OpenAPI\Client\Model\DeploymentStatus|null $deployment deployment
     *
     * @return self
     */
    public function setDeployment($deployment)
    {
        if (is_null($deployment)) {
            throw new \InvalidArgumentException('non-nullable deployment cannot be null');
        }
        $this->container['deployment'] = $deployment;

        return $this;
    }

    /**
     * Gets internal_routing_protocol_config
     *
     * @return \OpenAPI\Client\Model\InternalRoutingProtocolConfigStatus|null
     */
    public function getInternalRoutingProtocolConfig()
    {
        return $this->container['internal_routing_protocol_config'];
    }

    /**
     * Sets internal_routing_protocol_config
     *
     * @param \OpenAPI\Client\Model\InternalRoutingProtocolConfigStatus|null $internal_routing_protocol_config internal_routing_protocol_config
     *
     * @return self
     */
    public function setInternalRoutingProtocolConfig($internal_routing_protocol_config)
    {
        if (is_null($internal_routing_protocol_config)) {
            throw new \InvalidArgumentException('non-nullable internal_routing_protocol_config cannot be null');
        }
        $this->container['internal_routing_protocol_config'] = $internal_routing_protocol_config;

        return $this;
    }

    /**
     * Gets ebgp_config
     *
     * @return \OpenAPI\Client\Model\BgpConfigStatus|null
     */
    public function getEbgpConfig()
    {
        return $this->container['ebgp_config'];
    }

    /**
     * Sets ebgp_config
     *
     * @param \OpenAPI\Client\Model\BgpConfigStatus|null $ebgp_config ebgp_config
     *
     * @return self
     */
    public function setEbgpConfig($ebgp_config)
    {
        if (is_null($ebgp_config)) {
            throw new \InvalidArgumentException('non-nullable ebgp_config cannot be null');
        }
        $this->container['ebgp_config'] = $ebgp_config;

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

