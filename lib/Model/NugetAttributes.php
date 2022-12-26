<?php
/**
 * NugetAttributes
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
 * NugetAttributes Class Doc Comment
 *
 * @category Class
 * @package  Optimacros\NexusPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NugetAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NugetAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'queryCacheItemMaxAge' => 'int',
        'nugetVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'queryCacheItemMaxAge' => 'int32',
        'nugetVersion' => null
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
        'queryCacheItemMaxAge' => 'queryCacheItemMaxAge',
        'nugetVersion' => 'nugetVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'queryCacheItemMaxAge' => 'setQueryCacheItemMaxAge',
        'nugetVersion' => 'setNugetVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'queryCacheItemMaxAge' => 'getQueryCacheItemMaxAge',
        'nugetVersion' => 'getNugetVersion'
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

    const NUGET_VERSION_V2 = 'V2';
    const NUGET_VERSION_V3 = 'V3';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNugetVersionAllowableValues()
    {
        return [
            self::NUGET_VERSION_V2,
            self::NUGET_VERSION_V3,
        ];
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
        $this->container['queryCacheItemMaxAge'] = isset($data['queryCacheItemMaxAge']) ? $data['queryCacheItemMaxAge'] : null;
        $this->container['nugetVersion'] = isset($data['nugetVersion']) ? $data['nugetVersion'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNugetVersionAllowableValues();
        if (!is_null($this->container['nugetVersion']) && !in_array($this->container['nugetVersion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'nugetVersion', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets queryCacheItemMaxAge
     *
     * @return int
     */
    public function getQueryCacheItemMaxAge()
    {
        return $this->container['queryCacheItemMaxAge'];
    }

    /**
     * Sets queryCacheItemMaxAge
     *
     * @param int $queryCacheItemMaxAge How long to cache query results from the proxied repository (in seconds)
     *
     * @return $this
     */
    public function setQueryCacheItemMaxAge($queryCacheItemMaxAge)
    {
        $this->container['queryCacheItemMaxAge'] = $queryCacheItemMaxAge;

        return $this;
    }

    /**
     * Gets nugetVersion
     *
     * @return string
     */
    public function getNugetVersion()
    {
        return $this->container['nugetVersion'];
    }

    /**
     * Sets nugetVersion
     *
     * @param string $nugetVersion Nuget protocol version
     *
     * @return $this
     */
    public function setNugetVersion($nugetVersion)
    {
        $allowedValues = $this->getNugetVersionAllowableValues();
        if (!is_null($nugetVersion) && !in_array($nugetVersion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'nugetVersion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nugetVersion'] = $nugetVersion;

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

