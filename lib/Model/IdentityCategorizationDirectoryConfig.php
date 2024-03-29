<?php
/**
 * IdentityCategorizationDirectoryConfig
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
 * IdentityCategorizationDirectoryConfig Class Doc Comment
 *
 * @category Class
 * @description Identity categorization directory config.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IdentityCategorizationDirectoryConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'identity_categorization_directory_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'matching_criteria_list' => '\OpenAPI\Client\Model\IdCategorizationMatchingCriteria[]',
        'domain_controller_list' => '\OpenAPI\Client\Model\IdCategorizationDomainController[]',
        'directory_service_reference' => '\OpenAPI\Client\Model\DirectoryServiceReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'matching_criteria_list' => null,
        'domain_controller_list' => null,
        'directory_service_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'matching_criteria_list' => false,
        'domain_controller_list' => false,
        'directory_service_reference' => false
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
        'matching_criteria_list' => 'matching_criteria_list',
        'domain_controller_list' => 'domain_controller_list',
        'directory_service_reference' => 'directory_service_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'matching_criteria_list' => 'setMatchingCriteriaList',
        'domain_controller_list' => 'setDomainControllerList',
        'directory_service_reference' => 'setDirectoryServiceReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'matching_criteria_list' => 'getMatchingCriteriaList',
        'domain_controller_list' => 'getDomainControllerList',
        'directory_service_reference' => 'getDirectoryServiceReference'
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
        $this->setIfExists('matching_criteria_list', $data ?? [], null);
        $this->setIfExists('domain_controller_list', $data ?? [], null);
        $this->setIfExists('directory_service_reference', $data ?? [], null);
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

        if ($this->container['directory_service_reference'] === null) {
            $invalidProperties[] = "'directory_service_reference' can't be null";
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
     * Gets matching_criteria_list
     *
     * @return \OpenAPI\Client\Model\IdCategorizationMatchingCriteria[]|null
     */
    public function getMatchingCriteriaList()
    {
        return $this->container['matching_criteria_list'];
    }

    /**
     * Sets matching_criteria_list
     *
     * @param \OpenAPI\Client\Model\IdCategorizationMatchingCriteria[]|null $matching_criteria_list The matching criteria used to determine whether an entity will be affected by identity categorization. If not provided, no entity will be affected. Only a single entry in this list is supported today.
     *
     * @return self
     */
    public function setMatchingCriteriaList($matching_criteria_list)
    {
        if (is_null($matching_criteria_list)) {
            throw new \InvalidArgumentException('non-nullable matching_criteria_list cannot be null');
        }
        $this->container['matching_criteria_list'] = $matching_criteria_list;

        return $this;
    }

    /**
     * Gets domain_controller_list
     *
     * @return \OpenAPI\Client\Model\IdCategorizationDomainController[]|null
     */
    public function getDomainControllerList()
    {
        return $this->container['domain_controller_list'];
    }

    /**
     * Sets domain_controller_list
     *
     * @param \OpenAPI\Client\Model\IdCategorizationDomainController[]|null $domain_controller_list List of domain controllers to be used for event scraping.
     *
     * @return self
     */
    public function setDomainControllerList($domain_controller_list)
    {
        if (is_null($domain_controller_list)) {
            throw new \InvalidArgumentException('non-nullable domain_controller_list cannot be null');
        }
        $this->container['domain_controller_list'] = $domain_controller_list;

        return $this;
    }

    /**
     * Gets directory_service_reference
     *
     * @return \OpenAPI\Client\Model\DirectoryServiceReference
     */
    public function getDirectoryServiceReference()
    {
        return $this->container['directory_service_reference'];
    }

    /**
     * Sets directory_service_reference
     *
     * @param \OpenAPI\Client\Model\DirectoryServiceReference $directory_service_reference directory_service_reference
     *
     * @return self
     */
    public function setDirectoryServiceReference($directory_service_reference)
    {
        if (is_null($directory_service_reference)) {
            throw new \InvalidArgumentException('non-nullable directory_service_reference cannot be null');
        }
        $this->container['directory_service_reference'] = $directory_service_reference;

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


