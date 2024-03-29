<?php
/**
 * Deployment
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
 * Deployment Class Doc Comment
 *
 * @category Class
 * @description Deployment related config for this gateway.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Deployment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'deployment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'install_lb_route' => 'bool',
        'vcenter_deployment_details' => '\OpenAPI\Client\Model\VcenterDeploymentDetails',
        'ip_prefix_length' => 'int',
        'static_ip' => 'string',
        'default_gateway_ip' => 'string',
        'image_source_url' => 'string',
        'pe_cluster_reference' => '\OpenAPI\Client\Model\ClusterReference',
        'subnet_reference' => '\OpenAPI\Client\Model\SubnetReference',
        'installed_software_version' => 'string',
        'vlan_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'install_lb_route' => null,
        'vcenter_deployment_details' => null,
        'ip_prefix_length' => 'uint16',
        'static_ip' => null,
        'default_gateway_ip' => null,
        'image_source_url' => null,
        'pe_cluster_reference' => null,
        'subnet_reference' => null,
        'installed_software_version' => null,
        'vlan_id' => 'uint16'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'install_lb_route' => false,
        'vcenter_deployment_details' => false,
        'ip_prefix_length' => false,
        'static_ip' => false,
        'default_gateway_ip' => false,
        'image_source_url' => false,
        'pe_cluster_reference' => false,
        'subnet_reference' => false,
        'installed_software_version' => false,
        'vlan_id' => false
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
        'install_lb_route' => 'install_lb_route',
        'vcenter_deployment_details' => 'vcenter_deployment_details',
        'ip_prefix_length' => 'ip_prefix_length',
        'static_ip' => 'static_ip',
        'default_gateway_ip' => 'default_gateway_ip',
        'image_source_url' => 'image_source_url',
        'pe_cluster_reference' => 'pe_cluster_reference',
        'subnet_reference' => 'subnet_reference',
        'installed_software_version' => 'installed_software_version',
        'vlan_id' => 'vlan_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'install_lb_route' => 'setInstallLbRoute',
        'vcenter_deployment_details' => 'setVcenterDeploymentDetails',
        'ip_prefix_length' => 'setIpPrefixLength',
        'static_ip' => 'setStaticIp',
        'default_gateway_ip' => 'setDefaultGatewayIp',
        'image_source_url' => 'setImageSourceUrl',
        'pe_cluster_reference' => 'setPeClusterReference',
        'subnet_reference' => 'setSubnetReference',
        'installed_software_version' => 'setInstalledSoftwareVersion',
        'vlan_id' => 'setVlanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'install_lb_route' => 'getInstallLbRoute',
        'vcenter_deployment_details' => 'getVcenterDeploymentDetails',
        'ip_prefix_length' => 'getIpPrefixLength',
        'static_ip' => 'getStaticIp',
        'default_gateway_ip' => 'getDefaultGatewayIp',
        'image_source_url' => 'getImageSourceUrl',
        'pe_cluster_reference' => 'getPeClusterReference',
        'subnet_reference' => 'getSubnetReference',
        'installed_software_version' => 'getInstalledSoftwareVersion',
        'vlan_id' => 'getVlanId'
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
        $this->setIfExists('install_lb_route', $data ?? [], null);
        $this->setIfExists('vcenter_deployment_details', $data ?? [], null);
        $this->setIfExists('ip_prefix_length', $data ?? [], null);
        $this->setIfExists('static_ip', $data ?? [], null);
        $this->setIfExists('default_gateway_ip', $data ?? [], null);
        $this->setIfExists('image_source_url', $data ?? [], null);
        $this->setIfExists('pe_cluster_reference', $data ?? [], null);
        $this->setIfExists('subnet_reference', $data ?? [], null);
        $this->setIfExists('installed_software_version', $data ?? [], null);
        $this->setIfExists('vlan_id', $data ?? [], null);
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

        if (!is_null($this->container['ip_prefix_length']) && ($this->container['ip_prefix_length'] > 32)) {
            $invalidProperties[] = "invalid value for 'ip_prefix_length', must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['ip_prefix_length']) && ($this->container['ip_prefix_length'] < 0)) {
            $invalidProperties[] = "invalid value for 'ip_prefix_length', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['static_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['static_ip'])) {
            $invalidProperties[] = "invalid value for 'static_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['default_gateway_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['default_gateway_ip'])) {
            $invalidProperties[] = "invalid value for 'default_gateway_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['installed_software_version']) && (mb_strlen($this->container['installed_software_version']) > 1000)) {
            $invalidProperties[] = "invalid value for 'installed_software_version', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['vlan_id']) && ($this->container['vlan_id'] > 4095)) {
            $invalidProperties[] = "invalid value for 'vlan_id', must be smaller than or equal to 4095.";
        }

        if (!is_null($this->container['vlan_id']) && ($this->container['vlan_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'vlan_id', must be bigger than or equal to 0.";
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
     * Gets install_lb_route
     *
     * @return bool|null
     */
    public function getInstallLbRoute()
    {
        return $this->container['install_lb_route'];
    }

    /**
     * Sets install_lb_route
     *
     * @param bool|null $install_lb_route Boolean flag indicating user opt-in for installing Xi LB route in on-prem PC and PE CVMs provided on-prem PC, PE and VPN VM are in the same subnet
     *
     * @return self
     */
    public function setInstallLbRoute($install_lb_route)
    {
        if (is_null($install_lb_route)) {
            throw new \InvalidArgumentException('non-nullable install_lb_route cannot be null');
        }
        $this->container['install_lb_route'] = $install_lb_route;

        return $this;
    }

    /**
     * Gets vcenter_deployment_details
     *
     * @return \OpenAPI\Client\Model\VcenterDeploymentDetails|null
     */
    public function getVcenterDeploymentDetails()
    {
        return $this->container['vcenter_deployment_details'];
    }

    /**
     * Sets vcenter_deployment_details
     *
     * @param \OpenAPI\Client\Model\VcenterDeploymentDetails|null $vcenter_deployment_details vcenter_deployment_details
     *
     * @return self
     */
    public function setVcenterDeploymentDetails($vcenter_deployment_details)
    {
        if (is_null($vcenter_deployment_details)) {
            throw new \InvalidArgumentException('non-nullable vcenter_deployment_details cannot be null');
        }
        $this->container['vcenter_deployment_details'] = $vcenter_deployment_details;

        return $this;
    }

    /**
     * Gets ip_prefix_length
     *
     * @return int|null
     */
    public function getIpPrefixLength()
    {
        return $this->container['ip_prefix_length'];
    }

    /**
     * Sets ip_prefix_length
     *
     * @param int|null $ip_prefix_length IP prefix length of the subnet that the gateway VM is on.
     *
     * @return self
     */
    public function setIpPrefixLength($ip_prefix_length)
    {
        if (is_null($ip_prefix_length)) {
            throw new \InvalidArgumentException('non-nullable ip_prefix_length cannot be null');
        }

        if (($ip_prefix_length > 32)) {
            throw new \InvalidArgumentException('invalid value for $ip_prefix_length when calling Deployment., must be smaller than or equal to 32.');
        }
        if (($ip_prefix_length < 0)) {
            throw new \InvalidArgumentException('invalid value for $ip_prefix_length when calling Deployment., must be bigger than or equal to 0.');
        }

        $this->container['ip_prefix_length'] = $ip_prefix_length;

        return $this;
    }

    /**
     * Gets static_ip
     *
     * @return string|null
     */
    public function getStaticIp()
    {
        return $this->container['static_ip'];
    }

    /**
     * Sets static_ip
     *
     * @param string|null $static_ip Static IP address of the VPN gateway VM.
     *
     * @return self
     */
    public function setStaticIp($static_ip)
    {
        if (is_null($static_ip)) {
            throw new \InvalidArgumentException('non-nullable static_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($static_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$static_ip when calling Deployment., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['static_ip'] = $static_ip;

        return $this;
    }

    /**
     * Gets default_gateway_ip
     *
     * @return string|null
     */
    public function getDefaultGatewayIp()
    {
        return $this->container['default_gateway_ip'];
    }

    /**
     * Sets default_gateway_ip
     *
     * @param string|null $default_gateway_ip Default gateway IP address.
     *
     * @return self
     */
    public function setDefaultGatewayIp($default_gateway_ip)
    {
        if (is_null($default_gateway_ip)) {
            throw new \InvalidArgumentException('non-nullable default_gateway_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($default_gateway_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$default_gateway_ip when calling Deployment., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['default_gateway_ip'] = $default_gateway_ip;

        return $this;
    }

    /**
     * Gets image_source_url
     *
     * @return string|null
     */
    public function getImageSourceUrl()
    {
        return $this->container['image_source_url'];
    }

    /**
     * Sets image_source_url
     *
     * @param string|null $image_source_url The software image to install on the gateway appliance. If set, \"installed_software_version\" must be omitted.
     *
     * @return self
     */
    public function setImageSourceUrl($image_source_url)
    {
        if (is_null($image_source_url)) {
            throw new \InvalidArgumentException('non-nullable image_source_url cannot be null');
        }
        $this->container['image_source_url'] = $image_source_url;

        return $this;
    }

    /**
     * Gets pe_cluster_reference
     *
     * @return \OpenAPI\Client\Model\ClusterReference|null
     */
    public function getPeClusterReference()
    {
        return $this->container['pe_cluster_reference'];
    }

    /**
     * Sets pe_cluster_reference
     *
     * @param \OpenAPI\Client\Model\ClusterReference|null $pe_cluster_reference pe_cluster_reference
     *
     * @return self
     */
    public function setPeClusterReference($pe_cluster_reference)
    {
        if (is_null($pe_cluster_reference)) {
            throw new \InvalidArgumentException('non-nullable pe_cluster_reference cannot be null');
        }
        $this->container['pe_cluster_reference'] = $pe_cluster_reference;

        return $this;
    }

    /**
     * Gets subnet_reference
     *
     * @return \OpenAPI\Client\Model\SubnetReference|null
     */
    public function getSubnetReference()
    {
        return $this->container['subnet_reference'];
    }

    /**
     * Sets subnet_reference
     *
     * @param \OpenAPI\Client\Model\SubnetReference|null $subnet_reference subnet_reference
     *
     * @return self
     */
    public function setSubnetReference($subnet_reference)
    {
        if (is_null($subnet_reference)) {
            throw new \InvalidArgumentException('non-nullable subnet_reference cannot be null');
        }
        $this->container['subnet_reference'] = $subnet_reference;

        return $this;
    }

    /**
     * Gets installed_software_version
     *
     * @return string|null
     */
    public function getInstalledSoftwareVersion()
    {
        return $this->container['installed_software_version'];
    }

    /**
     * Sets installed_software_version
     *
     * @param string|null $installed_software_version The software version to install on the gateway appliance. If set, \"image_source_url\" must be omitted.
     *
     * @return self
     */
    public function setInstalledSoftwareVersion($installed_software_version)
    {
        if (is_null($installed_software_version)) {
            throw new \InvalidArgumentException('non-nullable installed_software_version cannot be null');
        }
        if ((mb_strlen($installed_software_version) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $installed_software_version when calling Deployment., must be smaller than or equal to 1000.');
        }

        $this->container['installed_software_version'] = $installed_software_version;

        return $this;
    }

    /**
     * Gets vlan_id
     *
     * @return int|null
     */
    public function getVlanId()
    {
        return $this->container['vlan_id'];
    }

    /**
     * Sets vlan_id
     *
     * @param int|null $vlan_id The on-prem VLAN to deploy the VPN gateway on. This is not needed if the subnet_reference is provided.
     *
     * @return self
     */
    public function setVlanId($vlan_id)
    {
        if (is_null($vlan_id)) {
            throw new \InvalidArgumentException('non-nullable vlan_id cannot be null');
        }

        if (($vlan_id > 4095)) {
            throw new \InvalidArgumentException('invalid value for $vlan_id when calling Deployment., must be smaller than or equal to 4095.');
        }
        if (($vlan_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $vlan_id when calling Deployment., must be bigger than or equal to 0.');
        }

        $this->container['vlan_id'] = $vlan_id;

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


