<?php
/**
 * OrderListOrdersRequestOrderBy
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Savvii\OpenproviderRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Savvii\OpenproviderRest\Model;

use \ArrayAccess;
use \Savvii\OpenproviderRest\ObjectSerializer;

/**
 * OrderListOrdersRequestOrderBy Class Doc Comment
 *
 * @category Class
 * @package  Savvii\OpenproviderRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderListOrdersRequestOrderBy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderListOrdersRequestOrderBy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_date' => 'string',
        'common_name' => 'string',
        'expiration_date' => 'string',
        'order_date' => 'string',
        'product_name' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_date' => null,
        'common_name' => null,
        'expiration_date' => null,
        'order_date' => null,
        'product_name' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active_date' => false,
		'common_name' => false,
		'expiration_date' => false,
		'order_date' => false,
		'product_name' => false,
		'status' => false
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
        'active_date' => 'active_date',
        'common_name' => 'common_name',
        'expiration_date' => 'expiration_date',
        'order_date' => 'order_date',
        'product_name' => 'product_name',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_date' => 'setActiveDate',
        'common_name' => 'setCommonName',
        'expiration_date' => 'setExpirationDate',
        'order_date' => 'setOrderDate',
        'product_name' => 'setProductName',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_date' => 'getActiveDate',
        'common_name' => 'getCommonName',
        'expiration_date' => 'getExpirationDate',
        'order_date' => 'getOrderDate',
        'product_name' => 'getProductName',
        'status' => 'getStatus'
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
        $this->setIfExists('active_date', $data ?? [], null);
        $this->setIfExists('common_name', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('order_date', $data ?? [], 'desc');
        $this->setIfExists('product_name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets active_date
     *
     * @return string|null
     */
    public function getActiveDate()
    {
        return $this->container['active_date'];
    }

    /**
     * Sets active_date
     *
     * @param string|null $active_date active_date
     *
     * @return self
     */
    public function setActiveDate($active_date)
    {
        if (is_null($active_date)) {
            throw new \InvalidArgumentException('non-nullable active_date cannot be null');
        }
        $this->container['active_date'] = $active_date;

        return $this;
    }

    /**
     * Gets common_name
     *
     * @return string|null
     */
    public function getCommonName()
    {
        return $this->container['common_name'];
    }

    /**
     * Sets common_name
     *
     * @param string|null $common_name common_name
     *
     * @return self
     */
    public function setCommonName($common_name)
    {
        if (is_null($common_name)) {
            throw new \InvalidArgumentException('non-nullable common_name cannot be null');
        }
        $this->container['common_name'] = $common_name;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string|null $order_date order_date
     *
     * @return self
     */
    public function setOrderDate($order_date)
    {
        if (is_null($order_date)) {
            throw new \InvalidArgumentException('non-nullable order_date cannot be null');
        }
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string|null $product_name product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        if (is_null($product_name)) {
            throw new \InvalidArgumentException('non-nullable product_name cannot be null');
        }
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


