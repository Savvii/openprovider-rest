<?php
/**
 * ResellerReseller
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
 * ResellerReseller Class Doc Comment
 *
 * @category Class
 * @package  Savvii\OpenproviderRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResellerReseller implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'resellerReseller';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_data' => '\Savvii\OpenproviderRest\Model\ResellerResellerAdditionalData',
        'address' => '\Savvii\OpenproviderRest\Model\ContactAddress',
        'balance' => 'float',
        'comments' => 'string',
        'company_name' => 'string',
        'contacts' => '\Savvii\OpenproviderRest\Model\PersoncontactContact[]',
        'email' => 'string',
        'fax' => '\Savvii\OpenproviderRest\Model\CustomerFax',
        'id' => 'int',
        'locale' => 'string',
        'name' => '\Savvii\OpenproviderRest\Model\ContactName',
        'phone' => '\Savvii\OpenproviderRest\Model\ContactPhone',
        'reserved_balance' => 'float',
        'settings' => '\Savvii\OpenproviderRest\Model\ResellerSettings',
        'statistics' => '\Savvii\OpenproviderRest\Model\ResellerStatistics',
        'status' => 'string',
        'tier' => 'int',
        'vat' => 'string',
        'vatperc' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_data' => null,
        'address' => null,
        'balance' => 'double',
        'comments' => null,
        'company_name' => null,
        'contacts' => null,
        'email' => null,
        'fax' => null,
        'id' => 'int32',
        'locale' => null,
        'name' => null,
        'phone' => null,
        'reserved_balance' => 'double',
        'settings' => null,
        'statistics' => null,
        'status' => null,
        'tier' => 'int32',
        'vat' => null,
        'vatperc' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additional_data' => false,
		'address' => false,
		'balance' => false,
		'comments' => false,
		'company_name' => false,
		'contacts' => false,
		'email' => false,
		'fax' => false,
		'id' => false,
		'locale' => false,
		'name' => false,
		'phone' => false,
		'reserved_balance' => false,
		'settings' => false,
		'statistics' => false,
		'status' => false,
		'tier' => false,
		'vat' => false,
		'vatperc' => false
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
        'additional_data' => 'additional_data',
        'address' => 'address',
        'balance' => 'balance',
        'comments' => 'comments',
        'company_name' => 'company_name',
        'contacts' => 'contacts',
        'email' => 'email',
        'fax' => 'fax',
        'id' => 'id',
        'locale' => 'locale',
        'name' => 'name',
        'phone' => 'phone',
        'reserved_balance' => 'reserved_balance',
        'settings' => 'settings',
        'statistics' => 'statistics',
        'status' => 'status',
        'tier' => 'tier',
        'vat' => 'vat',
        'vatperc' => 'vatperc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_data' => 'setAdditionalData',
        'address' => 'setAddress',
        'balance' => 'setBalance',
        'comments' => 'setComments',
        'company_name' => 'setCompanyName',
        'contacts' => 'setContacts',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'id' => 'setId',
        'locale' => 'setLocale',
        'name' => 'setName',
        'phone' => 'setPhone',
        'reserved_balance' => 'setReservedBalance',
        'settings' => 'setSettings',
        'statistics' => 'setStatistics',
        'status' => 'setStatus',
        'tier' => 'setTier',
        'vat' => 'setVat',
        'vatperc' => 'setVatperc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_data' => 'getAdditionalData',
        'address' => 'getAddress',
        'balance' => 'getBalance',
        'comments' => 'getComments',
        'company_name' => 'getCompanyName',
        'contacts' => 'getContacts',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'id' => 'getId',
        'locale' => 'getLocale',
        'name' => 'getName',
        'phone' => 'getPhone',
        'reserved_balance' => 'getReservedBalance',
        'settings' => 'getSettings',
        'statistics' => 'getStatistics',
        'status' => 'getStatus',
        'tier' => 'getTier',
        'vat' => 'getVat',
        'vatperc' => 'getVatperc'
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
        $this->setIfExists('additional_data', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('reserved_balance', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('statistics', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tier', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('vatperc', $data ?? [], null);
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
     * Gets additional_data
     *
     * @return \Savvii\OpenproviderRest\Model\ResellerResellerAdditionalData|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Savvii\OpenproviderRest\Model\ResellerResellerAdditionalData|null $additional_data additional_data
     *
     * @return self
     */
    public function setAdditionalData($additional_data)
    {
        if (is_null($additional_data)) {
            throw new \InvalidArgumentException('non-nullable additional_data cannot be null');
        }
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Savvii\OpenproviderRest\Model\ContactAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Savvii\OpenproviderRest\Model\ContactAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \Savvii\OpenproviderRest\Model\PersoncontactContact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Savvii\OpenproviderRest\Model\PersoncontactContact[]|null $contacts contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        if (is_null($contacts)) {
            throw new \InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return \Savvii\OpenproviderRest\Model\CustomerFax|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param \Savvii\OpenproviderRest\Model\CustomerFax|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        if (is_null($fax)) {
            throw new \InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Savvii\OpenproviderRest\Model\ContactName|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Savvii\OpenproviderRest\Model\ContactName|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Savvii\OpenproviderRest\Model\ContactPhone|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Savvii\OpenproviderRest\Model\ContactPhone|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets reserved_balance
     *
     * @return float|null
     */
    public function getReservedBalance()
    {
        return $this->container['reserved_balance'];
    }

    /**
     * Sets reserved_balance
     *
     * @param float|null $reserved_balance reserved_balance
     *
     * @return self
     */
    public function setReservedBalance($reserved_balance)
    {
        if (is_null($reserved_balance)) {
            throw new \InvalidArgumentException('non-nullable reserved_balance cannot be null');
        }
        $this->container['reserved_balance'] = $reserved_balance;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Savvii\OpenproviderRest\Model\ResellerSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Savvii\OpenproviderRest\Model\ResellerSettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        if (is_null($settings)) {
            throw new \InvalidArgumentException('non-nullable settings cannot be null');
        }
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \Savvii\OpenproviderRest\Model\ResellerStatistics|null
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \Savvii\OpenproviderRest\Model\ResellerStatistics|null $statistics statistics
     *
     * @return self
     */
    public function setStatistics($statistics)
    {
        if (is_null($statistics)) {
            throw new \InvalidArgumentException('non-nullable statistics cannot be null');
        }
        $this->container['statistics'] = $statistics;

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
     * Gets tier
     *
     * @return int|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param int|null $tier tier
     *
     * @return self
     */
    public function setTier($tier)
    {
        if (is_null($tier)) {
            throw new \InvalidArgumentException('non-nullable tier cannot be null');
        }
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets vatperc
     *
     * @return float|null
     */
    public function getVatperc()
    {
        return $this->container['vatperc'];
    }

    /**
     * Sets vatperc
     *
     * @param float|null $vatperc vatperc
     *
     * @return self
     */
    public function setVatperc($vatperc)
    {
        if (is_null($vatperc)) {
            throw new \InvalidArgumentException('non-nullable vatperc cannot be null');
        }
        $this->container['vatperc'] = $vatperc;

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


