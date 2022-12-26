<?php
/**
 * NugetProxyRepositoryApiRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Optimacros\NexusPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Nexus Repository Manager REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.43.0-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Optimacros\NexusPhpApi\Model;

use \ArrayAccess;
use \Optimacros\NexusPhpApi\ObjectSerializer;

/**
 * NugetProxyRepositoryApiRequest Class Doc Comment
 *
 * @category Class
 * @package  Optimacros\NexusPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NugetProxyRepositoryApiRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NugetProxyRepositoryApiRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'online' => 'bool',
        'storage' => '\Optimacros\NexusPhpApi\Model\StorageAttributes',
        'cleanup' => '\Optimacros\NexusPhpApi\Model\CleanupPolicyAttributes',
        'proxy' => '\Optimacros\NexusPhpApi\Model\ProxyAttributes',
        'negativeCache' => '\Optimacros\NexusPhpApi\Model\NegativeCacheAttributes',
        'httpClient' => '\Optimacros\NexusPhpApi\Model\HttpClientAttributes',
        'routingRule' => 'string',
        'replication' => '\Optimacros\NexusPhpApi\Model\ReplicationAttributes',
        'nugetProxy' => '\Optimacros\NexusPhpApi\Model\NugetAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'online' => null,
        'storage' => null,
        'cleanup' => null,
        'proxy' => null,
        'negativeCache' => null,
        'httpClient' => null,
        'routingRule' => null,
        'replication' => null,
        'nugetProxy' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'online' => 'online',
        'storage' => 'storage',
        'cleanup' => 'cleanup',
        'proxy' => 'proxy',
        'negativeCache' => 'negativeCache',
        'httpClient' => 'httpClient',
        'routingRule' => 'routingRule',
        'replication' => 'replication',
        'nugetProxy' => 'nugetProxy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'online' => 'setOnline',
        'storage' => 'setStorage',
        'cleanup' => 'setCleanup',
        'proxy' => 'setProxy',
        'negativeCache' => 'setNegativeCache',
        'httpClient' => 'setHttpClient',
        'routingRule' => 'setRoutingRule',
        'replication' => 'setReplication',
        'nugetProxy' => 'setNugetProxy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'online' => 'getOnline',
        'storage' => 'getStorage',
        'cleanup' => 'getCleanup',
        'proxy' => 'getProxy',
        'negativeCache' => 'getNegativeCache',
        'httpClient' => 'getHttpClient',
        'routingRule' => 'getRoutingRule',
        'replication' => 'getReplication',
        'nugetProxy' => 'getNugetProxy'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['cleanup'] = isset($data['cleanup']) ? $data['cleanup'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['negativeCache'] = isset($data['negativeCache']) ? $data['negativeCache'] : null;
        $this->container['httpClient'] = isset($data['httpClient']) ? $data['httpClient'] : null;
        $this->container['routingRule'] = isset($data['routingRule']) ? $data['routingRule'] : null;
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['nugetProxy'] = isset($data['nugetProxy']) ? $data['nugetProxy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.";
        }

        if ($this->container['online'] === null) {
            $invalidProperties[] = "'online' can't be null";
        }
        if ($this->container['storage'] === null) {
            $invalidProperties[] = "'storage' can't be null";
        }
        if ($this->container['proxy'] === null) {
            $invalidProperties[] = "'proxy' can't be null";
        }
        if ($this->container['negativeCache'] === null) {
            $invalidProperties[] = "'negativeCache' can't be null";
        }
        if ($this->container['httpClient'] === null) {
            $invalidProperties[] = "'httpClient' can't be null";
        }
        if ($this->container['nugetProxy'] === null) {
            $invalidProperties[] = "'nugetProxy' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A unique identifier for this repository
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((!preg_match("/^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling NugetProxyRepositoryApiRequest., must conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets online
     *
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool $online Whether this repository accepts incoming requests
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets storage
     *
     * @return \Optimacros\NexusPhpApi\Model\StorageAttributes
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param \Optimacros\NexusPhpApi\Model\StorageAttributes $storage storage
     *
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets cleanup
     *
     * @return \Optimacros\NexusPhpApi\Model\CleanupPolicyAttributes
     */
    public function getCleanup()
    {
        return $this->container['cleanup'];
    }

    /**
     * Sets cleanup
     *
     * @param \Optimacros\NexusPhpApi\Model\CleanupPolicyAttributes $cleanup cleanup
     *
     * @return $this
     */
    public function setCleanup($cleanup)
    {
        $this->container['cleanup'] = $cleanup;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return \Optimacros\NexusPhpApi\Model\ProxyAttributes
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param \Optimacros\NexusPhpApi\Model\ProxyAttributes $proxy proxy
     *
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets negativeCache
     *
     * @return \Optimacros\NexusPhpApi\Model\NegativeCacheAttributes
     */
    public function getNegativeCache()
    {
        return $this->container['negativeCache'];
    }

    /**
     * Sets negativeCache
     *
     * @param \Optimacros\NexusPhpApi\Model\NegativeCacheAttributes $negativeCache negativeCache
     *
     * @return $this
     */
    public function setNegativeCache($negativeCache)
    {
        $this->container['negativeCache'] = $negativeCache;

        return $this;
    }

    /**
     * Gets httpClient
     *
     * @return \Optimacros\NexusPhpApi\Model\HttpClientAttributes
     */
    public function getHttpClient()
    {
        return $this->container['httpClient'];
    }

    /**
     * Sets httpClient
     *
     * @param \Optimacros\NexusPhpApi\Model\HttpClientAttributes $httpClient httpClient
     *
     * @return $this
     */
    public function setHttpClient($httpClient)
    {
        $this->container['httpClient'] = $httpClient;

        return $this;
    }

    /**
     * Gets routingRule
     *
     * @return string
     */
    public function getRoutingRule()
    {
        return $this->container['routingRule'];
    }

    /**
     * Sets routingRule
     *
     * @param string $routingRule routingRule
     *
     * @return $this
     */
    public function setRoutingRule($routingRule)
    {
        $this->container['routingRule'] = $routingRule;

        return $this;
    }

    /**
     * Gets replication
     *
     * @return \Optimacros\NexusPhpApi\Model\ReplicationAttributes
     */
    public function getReplication()
    {
        return $this->container['replication'];
    }

    /**
     * Sets replication
     *
     * @param \Optimacros\NexusPhpApi\Model\ReplicationAttributes $replication replication
     *
     * @return $this
     */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;

        return $this;
    }

    /**
     * Gets nugetProxy
     *
     * @return \Optimacros\NexusPhpApi\Model\NugetAttributes
     */
    public function getNugetProxy()
    {
        return $this->container['nugetProxy'];
    }

    /**
     * Sets nugetProxy
     *
     * @param \Optimacros\NexusPhpApi\Model\NugetAttributes $nugetProxy nugetProxy
     *
     * @return $this
     */
    public function setNugetProxy($nugetProxy)
    {
        $this->container['nugetProxy'] = $nugetProxy;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


