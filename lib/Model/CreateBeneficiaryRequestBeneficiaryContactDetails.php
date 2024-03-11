<?php
/**
 * CreateBeneficiaryRequestBeneficiaryContactDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Payout APIs
 *
 * Cashfree's Payout APIs provide developers with a streamlined pathway to integrate advanced payout capabilities into their applications, platforms and websites.
 *
 * The version of the OpenAPI document: 2024-01-01
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * CreateBeneficiaryRequestBeneficiaryContactDetails Class Doc Comment
 *
 * @category Class
 * @description It should contain the contact details of the beneficiary.
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateBeneficiaryRequestBeneficiaryContactDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateBeneficiaryRequest_beneficiary_contact_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'beneficiary_email' => 'string',
        'beneficiary_phone' => 'string',
        'beneficiary_country_code' => 'string',
        'beneficiary_address' => 'string',
        'beneficiary_city' => 'string',
        'beneficiary_state' => 'string',
        'beneficiary_postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'beneficiary_email' => null,
        'beneficiary_phone' => null,
        'beneficiary_country_code' => null,
        'beneficiary_address' => null,
        'beneficiary_city' => null,
        'beneficiary_state' => null,
        'beneficiary_postal_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'beneficiary_email' => false,
		'beneficiary_phone' => false,
		'beneficiary_country_code' => false,
		'beneficiary_address' => false,
		'beneficiary_city' => false,
		'beneficiary_state' => false,
		'beneficiary_postal_code' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'beneficiary_email' => 'beneficiary_email',
        'beneficiary_phone' => 'beneficiary_phone',
        'beneficiary_country_code' => 'beneficiary_country_code',
        'beneficiary_address' => 'beneficiary_address',
        'beneficiary_city' => 'beneficiary_city',
        'beneficiary_state' => 'beneficiary_state',
        'beneficiary_postal_code' => 'beneficiary_postal_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beneficiary_email' => 'setBeneficiaryEmail',
        'beneficiary_phone' => 'setBeneficiaryPhone',
        'beneficiary_country_code' => 'setBeneficiaryCountryCode',
        'beneficiary_address' => 'setBeneficiaryAddress',
        'beneficiary_city' => 'setBeneficiaryCity',
        'beneficiary_state' => 'setBeneficiaryState',
        'beneficiary_postal_code' => 'setBeneficiaryPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beneficiary_email' => 'getBeneficiaryEmail',
        'beneficiary_phone' => 'getBeneficiaryPhone',
        'beneficiary_country_code' => 'getBeneficiaryCountryCode',
        'beneficiary_address' => 'getBeneficiaryAddress',
        'beneficiary_city' => 'getBeneficiaryCity',
        'beneficiary_state' => 'getBeneficiaryState',
        'beneficiary_postal_code' => 'getBeneficiaryPostalCode'
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
        $this->setIfExists('beneficiary_email', $data ?? [], null);
        $this->setIfExists('beneficiary_phone', $data ?? [], null);
        $this->setIfExists('beneficiary_country_code', $data ?? [], null);
        $this->setIfExists('beneficiary_address', $data ?? [], null);
        $this->setIfExists('beneficiary_city', $data ?? [], null);
        $this->setIfExists('beneficiary_state', $data ?? [], null);
        $this->setIfExists('beneficiary_postal_code', $data ?? [], null);
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

        if (!is_null($this->container['beneficiary_email']) && (mb_strlen($this->container['beneficiary_email']) > 200)) {
            $invalidProperties[] = "invalid value for 'beneficiary_email', the character length must be smaller than or equal to 200.";
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
     * Gets beneficiary_email
     *
     * @return string|null
     */
    public function getBeneficiaryEmail()
    {
        return $this->container['beneficiary_email'];
    }

    /**
     * Sets beneficiary_email
     *
     * @param string|null $beneficiary_email It is the email address of the beneficiary. The maximum character limit is 200. It should contain dot (.) and at the rate of (@).
     *
     * @return self
     */
    public function setBeneficiaryEmail($beneficiary_email)
    {
        if (is_null($beneficiary_email)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_email cannot be null');
        }
        if ((mb_strlen($beneficiary_email) > 200)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_email when calling CreateBeneficiaryRequestBeneficiaryContactDetails., must be smaller than or equal to 200.');
        }

        $this->container['beneficiary_email'] = $beneficiary_email;

        return $this;
    }

    /**
     * Gets beneficiary_phone
     *
     * @return string|null
     */
    public function getBeneficiaryPhone()
    {
        return $this->container['beneficiary_phone'];
    }

    /**
     * Sets beneficiary_phone
     *
     * @param string|null $beneficiary_phone It is the phone number of the beneficiary. Only reigstered Indian phone numbers are allowed. The value should be between 8 and 12 characters after stripping +91.
     *
     * @return self
     */
    public function setBeneficiaryPhone($beneficiary_phone)
    {
        if (is_null($beneficiary_phone)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_phone cannot be null');
        }
        $this->container['beneficiary_phone'] = $beneficiary_phone;

        return $this;
    }

    /**
     * Gets beneficiary_country_code
     *
     * @return string|null
     */
    public function getBeneficiaryCountryCode()
    {
        return $this->container['beneficiary_country_code'];
    }

    /**
     * Sets beneficiary_country_code
     *
     * @param string|null $beneficiary_country_code It is the country code (+91) of the beneficiary's phone number
     *
     * @return self
     */
    public function setBeneficiaryCountryCode($beneficiary_country_code)
    {
        if (is_null($beneficiary_country_code)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_country_code cannot be null');
        }
        $this->container['beneficiary_country_code'] = $beneficiary_country_code;

        return $this;
    }

    /**
     * Gets beneficiary_address
     *
     * @return string|null
     */
    public function getBeneficiaryAddress()
    {
        return $this->container['beneficiary_address'];
    }

    /**
     * Sets beneficiary_address
     *
     * @param string|null $beneficiary_address It is the address information of the beneficiary.
     *
     * @return self
     */
    public function setBeneficiaryAddress($beneficiary_address)
    {
        if (is_null($beneficiary_address)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_address cannot be null');
        }
        $this->container['beneficiary_address'] = $beneficiary_address;

        return $this;
    }

    /**
     * Gets beneficiary_city
     *
     * @return string|null
     */
    public function getBeneficiaryCity()
    {
        return $this->container['beneficiary_city'];
    }

    /**
     * Sets beneficiary_city
     *
     * @param string|null $beneficiary_city It is the name of the city as present in the beneficiary's address.
     *
     * @return self
     */
    public function setBeneficiaryCity($beneficiary_city)
    {
        if (is_null($beneficiary_city)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_city cannot be null');
        }
        $this->container['beneficiary_city'] = $beneficiary_city;

        return $this;
    }

    /**
     * Gets beneficiary_state
     *
     * @return string|null
     */
    public function getBeneficiaryState()
    {
        return $this->container['beneficiary_state'];
    }

    /**
     * Sets beneficiary_state
     *
     * @param string|null $beneficiary_state It is the name of the state as present in the beneficiary's address.
     *
     * @return self
     */
    public function setBeneficiaryState($beneficiary_state)
    {
        if (is_null($beneficiary_state)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_state cannot be null');
        }
        $this->container['beneficiary_state'] = $beneficiary_state;

        return $this;
    }

    /**
     * Gets beneficiary_postal_code
     *
     * @return string|null
     */
    public function getBeneficiaryPostalCode()
    {
        return $this->container['beneficiary_postal_code'];
    }

    /**
     * Sets beneficiary_postal_code
     *
     * @param string|null $beneficiary_postal_code It is the PIN code information as present in the beneficiary's address. The maximum character limit is 6. Only numbers are allowed.
     *
     * @return self
     */
    public function setBeneficiaryPostalCode($beneficiary_postal_code)
    {
        if (is_null($beneficiary_postal_code)) {
            throw new \InvalidArgumentException('non-nullable beneficiary_postal_code cannot be null');
        }
        $this->container['beneficiary_postal_code'] = $beneficiary_postal_code;

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


