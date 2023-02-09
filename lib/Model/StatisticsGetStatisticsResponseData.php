<?php
/**
 * StatisticsGetStatisticsResponseData
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
 * StatisticsGetStatisticsResponseData Class Doc Comment
 *
 * @category Class
 * @package  Savvii\OpenproviderRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatisticsGetStatisticsResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'statisticsGetStatisticsResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => '\Savvii\OpenproviderRest\Model\StatisticsCurrencyStatistics',
        'customer' => '\Savvii\OpenproviderRest\Model\StatisticsCustomerStatistics',
        'dns' => '\Savvii\OpenproviderRest\Model\StatisticsDnsStatistics',
        'domain' => '\Savvii\OpenproviderRest\Model\StatisticsDomainStatistics',
        'license' => '\Savvii\OpenproviderRest\Model\StatisticsLicenseStatistics',
        'spam_experts' => '\Savvii\OpenproviderRest\Model\StatisticsSpamExpertsStatistics',
        'ssl' => '\Savvii\OpenproviderRest\Model\StatisticsSslStatistics'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'customer' => null,
        'dns' => null,
        'domain' => null,
        'license' => null,
        'spam_experts' => null,
        'ssl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
		'customer' => false,
		'dns' => false,
		'domain' => false,
		'license' => false,
		'spam_experts' => false,
		'ssl' => false
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
        'currency' => 'currency',
        'customer' => 'customer',
        'dns' => 'dns',
        'domain' => 'domain',
        'license' => 'license',
        'spam_experts' => 'spam_experts',
        'ssl' => 'ssl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'customer' => 'setCustomer',
        'dns' => 'setDns',
        'domain' => 'setDomain',
        'license' => 'setLicense',
        'spam_experts' => 'setSpamExperts',
        'ssl' => 'setSsl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'customer' => 'getCustomer',
        'dns' => 'getDns',
        'domain' => 'getDomain',
        'license' => 'getLicense',
        'spam_experts' => 'getSpamExperts',
        'ssl' => 'getSsl'
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
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('dns', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
        $this->setIfExists('spam_experts', $data ?? [], null);
        $this->setIfExists('ssl', $data ?? [], null);
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
     * Gets currency
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsCurrencyStatistics|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsCurrencyStatistics|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsCustomerStatistics|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsCustomerStatistics|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets dns
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsDnsStatistics|null
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsDnsStatistics|null $dns dns
     *
     * @return self
     */
    public function setDns($dns)
    {
        if (is_null($dns)) {
            throw new \InvalidArgumentException('non-nullable dns cannot be null');
        }
        $this->container['dns'] = $dns;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsDomainStatistics|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsDomainStatistics|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets license
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsLicenseStatistics|null
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsLicenseStatistics|null $license license
     *
     * @return self
     */
    public function setLicense($license)
    {
        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets spam_experts
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsSpamExpertsStatistics|null
     */
    public function getSpamExperts()
    {
        return $this->container['spam_experts'];
    }

    /**
     * Sets spam_experts
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsSpamExpertsStatistics|null $spam_experts spam_experts
     *
     * @return self
     */
    public function setSpamExperts($spam_experts)
    {
        if (is_null($spam_experts)) {
            throw new \InvalidArgumentException('non-nullable spam_experts cannot be null');
        }
        $this->container['spam_experts'] = $spam_experts;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return \Savvii\OpenproviderRest\Model\StatisticsSslStatistics|null
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param \Savvii\OpenproviderRest\Model\StatisticsSslStatistics|null $ssl ssl
     *
     * @return self
     */
    public function setSsl($ssl)
    {
        if (is_null($ssl)) {
            throw new \InvalidArgumentException('non-nullable ssl cannot be null');
        }
        $this->container['ssl'] = $ssl;

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


