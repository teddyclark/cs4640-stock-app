<?php
/**
 * Company
 *
 * PHP version 5
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finnhub API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finnhub\Model;

use \ArrayAccess;
use \Finnhub\ObjectSerializer;

/**
 * Company Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Company implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'age' => 'int',
        'title' => 'string',
        'since' => 'string',
        'sex' => 'string',
        'compensation' => 'int',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'age' => 'int64',
        'title' => null,
        'since' => null,
        'sex' => null,
        'compensation' => 'int64',
        'currency' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'age' => 'age',
        'title' => 'title',
        'since' => 'since',
        'sex' => 'sex',
        'compensation' => 'compensation',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'age' => 'setAge',
        'title' => 'setTitle',
        'since' => 'setSince',
        'sex' => 'setSex',
        'compensation' => 'setCompensation',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'age' => 'getAge',
        'title' => 'getTitle',
        'since' => 'getSince',
        'sex' => 'getSex',
        'compensation' => 'getCompensation',
        'currency' => 'getCurrency'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['since'] = isset($data['since']) ? $data['since'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['compensation'] = isset($data['compensation']) ? $data['compensation'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Executive name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int|null $age Age
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets since
     *
     * @return string|null
     */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
     * Sets since
     *
     * @param string|null $since Year appointed
     *
     * @return $this
     */
    public function setSince($since)
    {
        $this->container['since'] = $since;

        return $this;
    }

    /**
     * Gets sex
     *
     * @return string|null
     */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param string|null $sex Sex
     *
     * @return $this
     */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets compensation
     *
     * @return int|null
     */
    public function getCompensation()
    {
        return $this->container['compensation'];
    }

    /**
     * Sets compensation
     *
     * @param int|null $compensation Total compensation
     *
     * @return $this
     */
    public function setCompensation($compensation)
    {
        $this->container['compensation'] = $compensation;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Compensation currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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

