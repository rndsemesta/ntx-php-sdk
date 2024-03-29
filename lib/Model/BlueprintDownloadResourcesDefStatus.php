<?php
/**
 * BlueprintDownloadResourcesDefStatus
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
 * BlueprintDownloadResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description Status of the Blueprint.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BlueprintDownloadResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'blueprint_download_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_attrs' => 'array<string,mixed>',
        'service_definition_list' => '\OpenAPI\Client\Model\AppServiceResponseDownload[]',
        'substrate_definition_list' => '\OpenAPI\Client\Model\AppSubstrateResponseDownload[]',
        'credential_definition_list' => '\OpenAPI\Client\Model\AppCredentialResponseDownload[]',
        'package_definition_list' => '\OpenAPI\Client\Model\AppPackageResponseDownload[]',
        'app_profile_list' => '\OpenAPI\Client\Model\AppProfileResponseDownload[]',
        'published_service_definition_list' => '\OpenAPI\Client\Model\AppPublishedServiceResponseDownload[]',
        'default_credential_local_reference' => '\OpenAPI\Client\Model\AppCredentialReferenceUpload',
        'state' => 'string',
        'type' => 'string',
        'message_list' => '\OpenAPI\Client\Model\MessageResource[]',
        'is_cloned' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_attrs' => null,
        'service_definition_list' => null,
        'substrate_definition_list' => null,
        'credential_definition_list' => null,
        'package_definition_list' => null,
        'app_profile_list' => null,
        'published_service_definition_list' => null,
        'default_credential_local_reference' => null,
        'state' => null,
        'type' => null,
        'message_list' => null,
        'is_cloned' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_attrs' => false,
        'service_definition_list' => false,
        'substrate_definition_list' => false,
        'credential_definition_list' => false,
        'package_definition_list' => false,
        'app_profile_list' => false,
        'published_service_definition_list' => false,
        'default_credential_local_reference' => false,
        'state' => false,
        'type' => false,
        'message_list' => false,
        'is_cloned' => false
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
        'client_attrs' => 'client_attrs',
        'service_definition_list' => 'service_definition_list',
        'substrate_definition_list' => 'substrate_definition_list',
        'credential_definition_list' => 'credential_definition_list',
        'package_definition_list' => 'package_definition_list',
        'app_profile_list' => 'app_profile_list',
        'published_service_definition_list' => 'published_service_definition_list',
        'default_credential_local_reference' => 'default_credential_local_reference',
        'state' => 'state',
        'type' => 'type',
        'message_list' => 'message_list',
        'is_cloned' => 'is_cloned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_attrs' => 'setClientAttrs',
        'service_definition_list' => 'setServiceDefinitionList',
        'substrate_definition_list' => 'setSubstrateDefinitionList',
        'credential_definition_list' => 'setCredentialDefinitionList',
        'package_definition_list' => 'setPackageDefinitionList',
        'app_profile_list' => 'setAppProfileList',
        'published_service_definition_list' => 'setPublishedServiceDefinitionList',
        'default_credential_local_reference' => 'setDefaultCredentialLocalReference',
        'state' => 'setState',
        'type' => 'setType',
        'message_list' => 'setMessageList',
        'is_cloned' => 'setIsCloned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_attrs' => 'getClientAttrs',
        'service_definition_list' => 'getServiceDefinitionList',
        'substrate_definition_list' => 'getSubstrateDefinitionList',
        'credential_definition_list' => 'getCredentialDefinitionList',
        'package_definition_list' => 'getPackageDefinitionList',
        'app_profile_list' => 'getAppProfileList',
        'published_service_definition_list' => 'getPublishedServiceDefinitionList',
        'default_credential_local_reference' => 'getDefaultCredentialLocalReference',
        'state' => 'getState',
        'type' => 'getType',
        'message_list' => 'getMessageList',
        'is_cloned' => 'getIsCloned'
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
        $this->setIfExists('client_attrs', $data ?? [], null);
        $this->setIfExists('service_definition_list', $data ?? [], null);
        $this->setIfExists('substrate_definition_list', $data ?? [], null);
        $this->setIfExists('credential_definition_list', $data ?? [], null);
        $this->setIfExists('package_definition_list', $data ?? [], null);
        $this->setIfExists('app_profile_list', $data ?? [], null);
        $this->setIfExists('published_service_definition_list', $data ?? [], null);
        $this->setIfExists('default_credential_local_reference', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('message_list', $data ?? [], null);
        $this->setIfExists('is_cloned', $data ?? [], false);
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

        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
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
     * Gets client_attrs
     *
     * @return array<string,mixed>|null
     */
    public function getClientAttrs()
    {
        return $this->container['client_attrs'];
    }

    /**
     * Sets client_attrs
     *
     * @param array<string,mixed>|null $client_attrs Data needed for clients.
     *
     * @return self
     */
    public function setClientAttrs($client_attrs)
    {
        if (is_null($client_attrs)) {
            throw new \InvalidArgumentException('non-nullable client_attrs cannot be null');
        }
        $this->container['client_attrs'] = $client_attrs;

        return $this;
    }

    /**
     * Gets service_definition_list
     *
     * @return \OpenAPI\Client\Model\AppServiceResponseDownload[]|null
     */
    public function getServiceDefinitionList()
    {
        return $this->container['service_definition_list'];
    }

    /**
     * Sets service_definition_list
     *
     * @param \OpenAPI\Client\Model\AppServiceResponseDownload[]|null $service_definition_list Service definitions for Blueprint.
     *
     * @return self
     */
    public function setServiceDefinitionList($service_definition_list)
    {
        if (is_null($service_definition_list)) {
            throw new \InvalidArgumentException('non-nullable service_definition_list cannot be null');
        }
        $this->container['service_definition_list'] = $service_definition_list;

        return $this;
    }

    /**
     * Gets substrate_definition_list
     *
     * @return \OpenAPI\Client\Model\AppSubstrateResponseDownload[]|null
     */
    public function getSubstrateDefinitionList()
    {
        return $this->container['substrate_definition_list'];
    }

    /**
     * Sets substrate_definition_list
     *
     * @param \OpenAPI\Client\Model\AppSubstrateResponseDownload[]|null $substrate_definition_list Substrate definitions for Blueprint.
     *
     * @return self
     */
    public function setSubstrateDefinitionList($substrate_definition_list)
    {
        if (is_null($substrate_definition_list)) {
            throw new \InvalidArgumentException('non-nullable substrate_definition_list cannot be null');
        }
        $this->container['substrate_definition_list'] = $substrate_definition_list;

        return $this;
    }

    /**
     * Gets credential_definition_list
     *
     * @return \OpenAPI\Client\Model\AppCredentialResponseDownload[]|null
     */
    public function getCredentialDefinitionList()
    {
        return $this->container['credential_definition_list'];
    }

    /**
     * Sets credential_definition_list
     *
     * @param \OpenAPI\Client\Model\AppCredentialResponseDownload[]|null $credential_definition_list Credential definitions for Blueprint.
     *
     * @return self
     */
    public function setCredentialDefinitionList($credential_definition_list)
    {
        if (is_null($credential_definition_list)) {
            throw new \InvalidArgumentException('non-nullable credential_definition_list cannot be null');
        }
        $this->container['credential_definition_list'] = $credential_definition_list;

        return $this;
    }

    /**
     * Gets package_definition_list
     *
     * @return \OpenAPI\Client\Model\AppPackageResponseDownload[]|null
     */
    public function getPackageDefinitionList()
    {
        return $this->container['package_definition_list'];
    }

    /**
     * Sets package_definition_list
     *
     * @param \OpenAPI\Client\Model\AppPackageResponseDownload[]|null $package_definition_list Package definitions for Blueprint.
     *
     * @return self
     */
    public function setPackageDefinitionList($package_definition_list)
    {
        if (is_null($package_definition_list)) {
            throw new \InvalidArgumentException('non-nullable package_definition_list cannot be null');
        }
        $this->container['package_definition_list'] = $package_definition_list;

        return $this;
    }

    /**
     * Gets app_profile_list
     *
     * @return \OpenAPI\Client\Model\AppProfileResponseDownload[]|null
     */
    public function getAppProfileList()
    {
        return $this->container['app_profile_list'];
    }

    /**
     * Sets app_profile_list
     *
     * @param \OpenAPI\Client\Model\AppProfileResponseDownload[]|null $app_profile_list App profile definitions for Blueprint.
     *
     * @return self
     */
    public function setAppProfileList($app_profile_list)
    {
        if (is_null($app_profile_list)) {
            throw new \InvalidArgumentException('non-nullable app_profile_list cannot be null');
        }
        $this->container['app_profile_list'] = $app_profile_list;

        return $this;
    }

    /**
     * Gets published_service_definition_list
     *
     * @return \OpenAPI\Client\Model\AppPublishedServiceResponseDownload[]|null
     */
    public function getPublishedServiceDefinitionList()
    {
        return $this->container['published_service_definition_list'];
    }

    /**
     * Sets published_service_definition_list
     *
     * @param \OpenAPI\Client\Model\AppPublishedServiceResponseDownload[]|null $published_service_definition_list Published service definitions for Blueprint.
     *
     * @return self
     */
    public function setPublishedServiceDefinitionList($published_service_definition_list)
    {
        if (is_null($published_service_definition_list)) {
            throw new \InvalidArgumentException('non-nullable published_service_definition_list cannot be null');
        }
        $this->container['published_service_definition_list'] = $published_service_definition_list;

        return $this;
    }

    /**
     * Gets default_credential_local_reference
     *
     * @return \OpenAPI\Client\Model\AppCredentialReferenceUpload|null
     */
    public function getDefaultCredentialLocalReference()
    {
        return $this->container['default_credential_local_reference'];
    }

    /**
     * Sets default_credential_local_reference
     *
     * @param \OpenAPI\Client\Model\AppCredentialReferenceUpload|null $default_credential_local_reference default_credential_local_reference
     *
     * @return self
     */
    public function setDefaultCredentialLocalReference($default_credential_local_reference)
    {
        if (is_null($default_credential_local_reference)) {
            throw new \InvalidArgumentException('non-nullable default_credential_local_reference cannot be null');
        }
        $this->container['default_credential_local_reference'] = $default_credential_local_reference;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state 
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
     * @param string|null $type Type of blueprint
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        if ((mb_strlen($type) > 64)) {
            throw new \InvalidArgumentException('invalid length for $type when calling BlueprintDownloadResourcesDefStatus., must be smaller than or equal to 64.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets message_list
     *
     * @return \OpenAPI\Client\Model\MessageResource[]|null
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \OpenAPI\Client\Model\MessageResource[]|null $message_list Message list for app blueprint
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
     * Gets is_cloned
     *
     * @return bool|null
     */
    public function getIsCloned()
    {
        return $this->container['is_cloned'];
    }

    /**
     * Sets is_cloned
     *
     * @param bool|null $is_cloned Cloned or original blueprint
     *
     * @return self
     */
    public function setIsCloned($is_cloned)
    {
        if (is_null($is_cloned)) {
            throw new \InvalidArgumentException('non-nullable is_cloned cannot be null');
        }
        $this->container['is_cloned'] = $is_cloned;

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


