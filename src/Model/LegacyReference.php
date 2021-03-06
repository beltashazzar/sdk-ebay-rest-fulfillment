<?php
/**
 * LegacyReference
 *
 * PHP version 5
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: 1.11.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\fulfillment\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\fulfillment\ObjectSerializer;

/**
 * LegacyReference Class Doc Comment
 *
 * @category Class
 * @description Type defining the legacyReference container. This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID and transaction ID to identify the order line item.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LegacyReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LegacyReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'legacyItemId' => 'string',
        'legacyTransactionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'legacyItemId' => null,
        'legacyTransactionId' => null
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
        'legacyItemId' => 'legacyItemId',
        'legacyTransactionId' => 'legacyTransactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legacyItemId' => 'setLegacyItemId',
        'legacyTransactionId' => 'setLegacyTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legacyItemId' => 'getLegacyItemId',
        'legacyTransactionId' => 'getLegacyTransactionId'
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
        $this->container['legacyItemId'] = isset($data['legacyItemId']) ? $data['legacyItemId'] : null;
        $this->container['legacyTransactionId'] = isset($data['legacyTransactionId']) ? $data['legacyTransactionId'] : null;
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
     * Gets legacyItemId
     *
     * @return string|null
     */
    public function getLegacyItemId()
    {
        return $this->container['legacyItemId'];
    }

    /**
     * Sets legacyItemId
     *
     * @param string|null $legacyItemId The unique identifier of a listing in legacy/Trading API format. Note: Both legacyItemId and legacyTransactionId are needed to identify an order line item.
     *
     * @return $this
     */
    public function setLegacyItemId($legacyItemId)
    {
        $this->container['legacyItemId'] = $legacyItemId;

        return $this;
    }

    /**
     * Gets legacyTransactionId
     *
     * @return string|null
     */
    public function getLegacyTransactionId()
    {
        return $this->container['legacyTransactionId'];
    }

    /**
     * Sets legacyTransactionId
     *
     * @param string|null $legacyTransactionId The unique identifier of a sale/transaction in legacy/Trading API format. A 'transaction ID' is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder. Note: Both legacyItemId and legacyTransactionId are needed to identify an order line item.
     *
     * @return $this
     */
    public function setLegacyTransactionId($legacyTransactionId)
    {
        $this->container['legacyTransactionId'] = $legacyTransactionId;

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
}


