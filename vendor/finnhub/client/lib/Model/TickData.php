<?php
/**
 * TickData
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
 * TickData Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TickData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TickData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        's' => 'string',
        'skip' => 'int',
        'count' => 'int',
        'total' => 'int',
        'v' => 'float[]',
        'p' => 'float[]',
        't' => 'int[]',
        'x' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        's' => null,
        'skip' => 'int64',
        'count' => 'int64',
        'total' => 'int64',
        'v' => 'float',
        'p' => 'float',
        't' => 'int64',
        'x' => null
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
        's' => 's',
        'skip' => 'skip',
        'count' => 'count',
        'total' => 'total',
        'v' => 'v',
        'p' => 'p',
        't' => 't',
        'x' => 'x'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        's' => 'setS',
        'skip' => 'setSkip',
        'count' => 'setCount',
        'total' => 'setTotal',
        'v' => 'setV',
        'p' => 'setP',
        't' => 'setT',
        'x' => 'setX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        's' => 'getS',
        'skip' => 'getSkip',
        'count' => 'getCount',
        'total' => 'getTotal',
        'v' => 'getV',
        'p' => 'getP',
        't' => 'getT',
        'x' => 'getX'
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
        $this->container['s'] = isset($data['s']) ? $data['s'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['v'] = isset($data['v']) ? $data['v'] : null;
        $this->container['p'] = isset($data['p']) ? $data['p'] : null;
        $this->container['t'] = isset($data['t']) ? $data['t'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
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
     * Gets s
     *
     * @return string|null
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     *
     * @param string|null $s Symbol.
     *
     * @return $this
     */
    public function setS($s)
    {
        $this->container['s'] = $s;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int|null $skip Number of ticks skipped.
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Number of ticks returned. If <code>count</code> < <code>limit</code>, all data for that date has been returned.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total number of ticks for that date.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets v
     *
     * @return float[]|null
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param float[]|null $v List of volume data.
     *
     * @return $this
     */
    public function setV($v)
    {
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets p
     *
     * @return float[]|null
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param float[]|null $p List of price data.
     *
     * @return $this
     */
    public function setP($p)
    {
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets t
     *
     * @return int[]|null
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param int[]|null $t List of timestamp in UNIX ms.
     *
     * @return $this
     */
    public function setT($t)
    {
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets x
     *
     * @return string[]|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param string[]|null $x List of venues/exchanges.
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

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


