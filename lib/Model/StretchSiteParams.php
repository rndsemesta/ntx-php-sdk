<?php
/**
 * StretchSiteParams
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
 * StretchSiteParams Class Doc Comment
 *
 * @category Class
 * @description Site parameters for layer2 stretch.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StretchSiteParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'stretch_site_params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_gateway_ip' => 'string',
        'vpn_interface_ip' => 'string',
        'vpn_connection_reference' => '\OpenAPI\Client\Model\VpnConnectionReference',
        'pc_cluster_reference' => '\OpenAPI\Client\Model\ClusterReference',
        'stretch_subnet_reference' => '\OpenAPI\Client\Model\SubnetReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_gateway_ip' => null,
        'vpn_interface_ip' => null,
        'vpn_connection_reference' => null,
        'pc_cluster_reference' => null,
        'stretch_subnet_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_gateway_ip' => false,
        'vpn_interface_ip' => false,
        'vpn_connection_reference' => false,
        'pc_cluster_reference' => false,
        'stretch_subnet_reference' => false
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
        'default_gateway_ip' => 'default_gateway_ip',
        'vpn_interface_ip' => 'vpn_interface_ip',
        'vpn_connection_reference' => 'vpn_connection_reference',
        'pc_cluster_reference' => 'pc_cluster_reference',
        'stretch_subnet_reference' => 'stretch_subnet_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_gateway_ip' => 'setDefaultGatewayIp',
        'vpn_interface_ip' => 'setVpnInterfaceIp',
        'vpn_connection_reference' => 'setVpnConnectionReference',
        'pc_cluster_reference' => 'setPcClusterReference',
        'stretch_subnet_reference' => 'setStretchSubnetReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_gateway_ip' => 'getDefaultGatewayIp',
        'vpn_interface_ip' => 'getVpnInterfaceIp',
        'vpn_connection_reference' => 'getVpnConnectionReference',
        'pc_cluster_reference' => 'getPcClusterReference',
        'stretch_subnet_reference' => 'getStretchSubnetReference'
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
        $this->setIfExists('default_gateway_ip', $data ?? [], null);
        $this->setIfExists('vpn_interface_ip', $data ?? [], null);
        $this->setIfExists('vpn_connection_reference', $data ?? [], null);
        $this->setIfExists('pc_cluster_reference', $data ?? [], null);
        $this->setIfExists('stretch_subnet_reference', $data ?? [], null);
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

        if (!is_null($this->container['default_gateway_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['default_gateway_ip'])) {
            $invalidProperties[] = "invalid value for 'default_gateway_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['vpn_interface_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['vpn_interface_ip'])) {
            $invalidProperties[] = "invalid value for 'vpn_interface_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
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
     * @param string|null $default_gateway_ip default_gateway_ip
     *
     * @return self
     */
    public function setDefaultGatewayIp($default_gateway_ip)
    {
        if (is_null($default_gateway_ip)) {
            throw new \InvalidArgumentException('non-nullable default_gateway_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($default_gateway_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$default_gateway_ip when calling StretchSiteParams., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['default_gateway_ip'] = $default_gateway_ip;

        return $this;
    }

    /**
     * Gets vpn_interface_ip
     *
     * @return string|null
     */
    public function getVpnInterfaceIp()
    {
        return $this->container['vpn_interface_ip'];
    }

    /**
     * Sets vpn_interface_ip
     *
     * @param string|null $vpn_interface_ip vpn_interface_ip
     *
     * @return self
     */
    public function setVpnInterfaceIp($vpn_interface_ip)
    {
        if (is_null($vpn_interface_ip)) {
            throw new \InvalidArgumentException('non-nullable vpn_interface_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($vpn_interface_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$vpn_interface_ip when calling StretchSiteParams., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['vpn_interface_ip'] = $vpn_interface_ip;

        return $this;
    }

    /**
     * Gets vpn_connection_reference
     *
     * @return \OpenAPI\Client\Model\VpnConnectionReference|null
     */
    public function getVpnConnectionReference()
    {
        return $this->container['vpn_connection_reference'];
    }

    /**
     * Sets vpn_connection_reference
     *
     * @param \OpenAPI\Client\Model\VpnConnectionReference|null $vpn_connection_reference vpn_connection_reference
     *
     * @return self
     */
    public function setVpnConnectionReference($vpn_connection_reference)
    {
        if (is_null($vpn_connection_reference)) {
            throw new \InvalidArgumentException('non-nullable vpn_connection_reference cannot be null');
        }
        $this->container['vpn_connection_reference'] = $vpn_connection_reference;

        return $this;
    }

    /**
     * Gets pc_cluster_reference
     *
     * @return \OpenAPI\Client\Model\ClusterReference|null
     */
    public function getPcClusterReference()
    {
        return $this->container['pc_cluster_reference'];
    }

    /**
     * Sets pc_cluster_reference
     *
     * @param \OpenAPI\Client\Model\ClusterReference|null $pc_cluster_reference pc_cluster_reference
     *
     * @return self
     */
    public function setPcClusterReference($pc_cluster_reference)
    {
        if (is_null($pc_cluster_reference)) {
            throw new \InvalidArgumentException('non-nullable pc_cluster_reference cannot be null');
        }
        $this->container['pc_cluster_reference'] = $pc_cluster_reference;

        return $this;
    }

    /**
     * Gets stretch_subnet_reference
     *
     * @return \OpenAPI\Client\Model\SubnetReference|null
     */
    public function getStretchSubnetReference()
    {
        return $this->container['stretch_subnet_reference'];
    }

    /**
     * Sets stretch_subnet_reference
     *
     * @param \OpenAPI\Client\Model\SubnetReference|null $stretch_subnet_reference stretch_subnet_reference
     *
     * @return self
     */
    public function setStretchSubnetReference($stretch_subnet_reference)
    {
        if (is_null($stretch_subnet_reference)) {
            throw new \InvalidArgumentException('non-nullable stretch_subnet_reference cannot be null');
        }
        $this->container['stretch_subnet_reference'] = $stretch_subnet_reference;

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


