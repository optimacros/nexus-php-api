<?php
/**
 * AssetXO
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
 * AssetXO Class Doc Comment
 *
 * @category Class
 * @package  Optimacros\NexusPhpApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetXO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetXO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'downloadUrl' => 'string',
        'path' => 'string',
        'id' => 'string',
        'repository' => 'string',
        'format' => 'string',
        'checksum' => 'map[string,object]',
        'contentType' => 'string',
        'lastModified' => '\DateTime',
        'lastDownloaded' => '\DateTime',
        'uploader' => 'string',
        'uploaderIp' => 'string',
        'fileSize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'downloadUrl' => null,
        'path' => null,
        'id' => null,
        'repository' => null,
        'format' => null,
        'checksum' => null,
        'contentType' => null,
        'lastModified' => 'date-time',
        'lastDownloaded' => 'date-time',
        'uploader' => null,
        'uploaderIp' => null,
        'fileSize' => 'int64'
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
        'downloadUrl' => 'downloadUrl',
        'path' => 'path',
        'id' => 'id',
        'repository' => 'repository',
        'format' => 'format',
        'checksum' => 'checksum',
        'contentType' => 'contentType',
        'lastModified' => 'lastModified',
        'lastDownloaded' => 'lastDownloaded',
        'uploader' => 'uploader',
        'uploaderIp' => 'uploaderIp',
        'fileSize' => 'fileSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downloadUrl' => 'setDownloadUrl',
        'path' => 'setPath',
        'id' => 'setId',
        'repository' => 'setRepository',
        'format' => 'setFormat',
        'checksum' => 'setChecksum',
        'contentType' => 'setContentType',
        'lastModified' => 'setLastModified',
        'lastDownloaded' => 'setLastDownloaded',
        'uploader' => 'setUploader',
        'uploaderIp' => 'setUploaderIp',
        'fileSize' => 'setFileSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downloadUrl' => 'getDownloadUrl',
        'path' => 'getPath',
        'id' => 'getId',
        'repository' => 'getRepository',
        'format' => 'getFormat',
        'checksum' => 'getChecksum',
        'contentType' => 'getContentType',
        'lastModified' => 'getLastModified',
        'lastDownloaded' => 'getLastDownloaded',
        'uploader' => 'getUploader',
        'uploaderIp' => 'getUploaderIp',
        'fileSize' => 'getFileSize'
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
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['lastDownloaded'] = isset($data['lastDownloaded']) ? $data['lastDownloaded'] : null;
        $this->container['uploader'] = isset($data['uploader']) ? $data['uploader'] : null;
        $this->container['uploaderIp'] = isset($data['uploaderIp']) ? $data['uploaderIp'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
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
     * Gets downloadUrl
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
     * Sets downloadUrl
     *
     * @param string $downloadUrl downloadUrl
     *
     * @return $this
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets repository
     *
     * @return string
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     *
     * @param string $repository repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets checksum
     *
     * @return map[string,object]
     */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
     * Sets checksum
     *
     * @param map[string,object] $checksum checksum
     *
     * @return $this
     */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;

        return $this;
    }

    /**
     * Gets contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
     * Sets contentType
     *
     * @param string $contentType contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;

        return $this;
    }

    /**
     * Gets lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
     * Sets lastModified
     *
     * @param \DateTime $lastModified lastModified
     *
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;

        return $this;
    }

    /**
     * Gets lastDownloaded
     *
     * @return \DateTime
     */
    public function getLastDownloaded()
    {
        return $this->container['lastDownloaded'];
    }

    /**
     * Sets lastDownloaded
     *
     * @param \DateTime $lastDownloaded lastDownloaded
     *
     * @return $this
     */
    public function setLastDownloaded($lastDownloaded)
    {
        $this->container['lastDownloaded'] = $lastDownloaded;

        return $this;
    }

    /**
     * Gets uploader
     *
     * @return string
     */
    public function getUploader()
    {
        return $this->container['uploader'];
    }

    /**
     * Sets uploader
     *
     * @param string $uploader uploader
     *
     * @return $this
     */
    public function setUploader($uploader)
    {
        $this->container['uploader'] = $uploader;

        return $this;
    }

    /**
     * Gets uploaderIp
     *
     * @return string
     */
    public function getUploaderIp()
    {
        return $this->container['uploaderIp'];
    }

    /**
     * Sets uploaderIp
     *
     * @param string $uploaderIp uploaderIp
     *
     * @return $this
     */
    public function setUploaderIp($uploaderIp)
    {
        $this->container['uploaderIp'] = $uploaderIp;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param int $fileSize fileSize
     *
     * @return $this
     */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;

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


