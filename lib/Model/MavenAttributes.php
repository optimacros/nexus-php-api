<?php
/**
 * MavenAttributes
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
 * MavenAttributes Class Doc Comment
 *
 * @category Class
 * @package  Optimacros\NexusPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MavenAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MavenAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'versionPolicy' => 'string',
        'layoutPolicy' => 'string',
        'contentDisposition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'versionPolicy' => null,
        'layoutPolicy' => null,
        'contentDisposition' => null
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
        'versionPolicy' => 'versionPolicy',
        'layoutPolicy' => 'layoutPolicy',
        'contentDisposition' => 'contentDisposition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'versionPolicy' => 'setVersionPolicy',
        'layoutPolicy' => 'setLayoutPolicy',
        'contentDisposition' => 'setContentDisposition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'versionPolicy' => 'getVersionPolicy',
        'layoutPolicy' => 'getLayoutPolicy',
        'contentDisposition' => 'getContentDisposition'
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

    const VERSION_POLICY_RELEASE = 'RELEASE';
    const VERSION_POLICY_SNAPSHOT = 'SNAPSHOT';
    const VERSION_POLICY_MIXED = 'MIXED';
    const LAYOUT_POLICY_STRICT = 'STRICT';
    const LAYOUT_POLICY_PERMISSIVE = 'PERMISSIVE';
    const CONTENT_DISPOSITION_INLINE = 'INLINE';
    const CONTENT_DISPOSITION_ATTACHMENT = 'ATTACHMENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionPolicyAllowableValues()
    {
        return [
            self::VERSION_POLICY_RELEASE,
            self::VERSION_POLICY_SNAPSHOT,
            self::VERSION_POLICY_MIXED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayoutPolicyAllowableValues()
    {
        return [
            self::LAYOUT_POLICY_STRICT,
            self::LAYOUT_POLICY_PERMISSIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentDispositionAllowableValues()
    {
        return [
            self::CONTENT_DISPOSITION_INLINE,
            self::CONTENT_DISPOSITION_ATTACHMENT,
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
        $this->container['versionPolicy'] = isset($data['versionPolicy']) ? $data['versionPolicy'] : null;
        $this->container['layoutPolicy'] = isset($data['layoutPolicy']) ? $data['layoutPolicy'] : null;
        $this->container['contentDisposition'] = isset($data['contentDisposition']) ? $data['contentDisposition'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVersionPolicyAllowableValues();
        if (!is_null($this->container['versionPolicy']) && !in_array($this->container['versionPolicy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'versionPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLayoutPolicyAllowableValues();
        if (!is_null($this->container['layoutPolicy']) && !in_array($this->container['layoutPolicy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'layoutPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContentDispositionAllowableValues();
        if (!is_null($this->container['contentDisposition']) && !in_array($this->container['contentDisposition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contentDisposition', must be one of '%s'",
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
     * Gets versionPolicy
     *
     * @return string
     */
    public function getVersionPolicy()
    {
        return $this->container['versionPolicy'];
    }

    /**
     * Sets versionPolicy
     *
     * @param string $versionPolicy What type of artifacts does this repository store?
     *
     * @return $this
     */
    public function setVersionPolicy($versionPolicy)
    {
        $allowedValues = $this->getVersionPolicyAllowableValues();
        if (!is_null($versionPolicy) && !in_array($versionPolicy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'versionPolicy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['versionPolicy'] = $versionPolicy;

        return $this;
    }

    /**
     * Gets layoutPolicy
     *
     * @return string
     */
    public function getLayoutPolicy()
    {
        return $this->container['layoutPolicy'];
    }

    /**
     * Sets layoutPolicy
     *
     * @param string $layoutPolicy Validate that all paths are maven artifact or metadata paths
     *
     * @return $this
     */
    public function setLayoutPolicy($layoutPolicy)
    {
        $allowedValues = $this->getLayoutPolicyAllowableValues();
        if (!is_null($layoutPolicy) && !in_array($layoutPolicy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'layoutPolicy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['layoutPolicy'] = $layoutPolicy;

        return $this;
    }

    /**
     * Gets contentDisposition
     *
     * @return string
     */
    public function getContentDisposition()
    {
        return $this->container['contentDisposition'];
    }

    /**
     * Sets contentDisposition
     *
     * @param string $contentDisposition Content Disposition
     *
     * @return $this
     */
    public function setContentDisposition($contentDisposition)
    {
        $allowedValues = $this->getContentDispositionAllowableValues();
        if (!is_null($contentDisposition) && !in_array($contentDisposition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contentDisposition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contentDisposition'] = $contentDisposition;

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


