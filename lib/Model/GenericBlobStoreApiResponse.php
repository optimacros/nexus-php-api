<?php
/**
 * GenericBlobStoreApiResponse
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
 * GenericBlobStoreApiResponse Class Doc Comment
 *
 * @category Class
 * @package  Optimacros\NexusPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenericBlobStoreApiResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GenericBlobStoreApiResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'softQuota' => '\Optimacros\NexusPhpApi\Model\BlobStoreApiSoftQuota',
        'name' => 'string',
        'type' => 'string',
        'unavailable' => 'bool',
        'blobCount' => 'int',
        'totalSizeInBytes' => 'int',
        'availableSpaceInBytes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'softQuota' => null,
        'name' => null,
        'type' => null,
        'unavailable' => null,
        'blobCount' => 'int64',
        'totalSizeInBytes' => 'int64',
        'availableSpaceInBytes' => 'int64'
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
        'softQuota' => 'softQuota',
        'name' => 'name',
        'type' => 'type',
        'unavailable' => 'unavailable',
        'blobCount' => 'blobCount',
        'totalSizeInBytes' => 'totalSizeInBytes',
        'availableSpaceInBytes' => 'availableSpaceInBytes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'softQuota' => 'setSoftQuota',
        'name' => 'setName',
        'type' => 'setType',
        'unavailable' => 'setUnavailable',
        'blobCount' => 'setBlobCount',
        'totalSizeInBytes' => 'setTotalSizeInBytes',
        'availableSpaceInBytes' => 'setAvailableSpaceInBytes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'softQuota' => 'getSoftQuota',
        'name' => 'getName',
        'type' => 'getType',
        'unavailable' => 'getUnavailable',
        'blobCount' => 'getBlobCount',
        'totalSizeInBytes' => 'getTotalSizeInBytes',
        'availableSpaceInBytes' => 'getAvailableSpaceInBytes'
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
        $this->container['softQuota'] = isset($data['softQuota']) ? $data['softQuota'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unavailable'] = isset($data['unavailable']) ? $data['unavailable'] : null;
        $this->container['blobCount'] = isset($data['blobCount']) ? $data['blobCount'] : null;
        $this->container['totalSizeInBytes'] = isset($data['totalSizeInBytes']) ? $data['totalSizeInBytes'] : null;
        $this->container['availableSpaceInBytes'] = isset($data['availableSpaceInBytes']) ? $data['availableSpaceInBytes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets softQuota
     *
     * @return \Optimacros\NexusPhpApi\Model\BlobStoreApiSoftQuota
     */
    public function getSoftQuota()
    {
        return $this->container['softQuota'];
    }

    /**
     * Sets softQuota
     *
     * @param \Optimacros\NexusPhpApi\Model\BlobStoreApiSoftQuota $softQuota Settings to control the soft quota
     *
     * @return $this
     */
    public function setSoftQuota($softQuota)
    {
        $this->container['softQuota'] = $softQuota;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unavailable
     *
     * @return bool
     */
    public function getUnavailable()
    {
        return $this->container['unavailable'];
    }

    /**
     * Sets unavailable
     *
     * @param bool $unavailable unavailable
     *
     * @return $this
     */
    public function setUnavailable($unavailable)
    {
        $this->container['unavailable'] = $unavailable;

        return $this;
    }

    /**
     * Gets blobCount
     *
     * @return int
     */
    public function getBlobCount()
    {
        return $this->container['blobCount'];
    }

    /**
     * Sets blobCount
     *
     * @param int $blobCount blobCount
     *
     * @return $this
     */
    public function setBlobCount($blobCount)
    {
        $this->container['blobCount'] = $blobCount;

        return $this;
    }

    /**
     * Gets totalSizeInBytes
     *
     * @return int
     */
    public function getTotalSizeInBytes()
    {
        return $this->container['totalSizeInBytes'];
    }

    /**
     * Sets totalSizeInBytes
     *
     * @param int $totalSizeInBytes totalSizeInBytes
     *
     * @return $this
     */
    public function setTotalSizeInBytes($totalSizeInBytes)
    {
        $this->container['totalSizeInBytes'] = $totalSizeInBytes;

        return $this;
    }

    /**
     * Gets availableSpaceInBytes
     *
     * @return int
     */
    public function getAvailableSpaceInBytes()
    {
        return $this->container['availableSpaceInBytes'];
    }

    /**
     * Sets availableSpaceInBytes
     *
     * @param int $availableSpaceInBytes availableSpaceInBytes
     *
     * @return $this
     */
    public function setAvailableSpaceInBytes($availableSpaceInBytes)
    {
        $this->container['availableSpaceInBytes'] = $availableSpaceInBytes;

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


