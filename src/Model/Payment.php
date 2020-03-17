<?php
/**
 * Payment
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @description This type is used to provide details about a buyer&#39;s payment for an order.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Payment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\macropage\SDKs\ebay\rest\fulfillment\Model\Amount',
        'paymentDate' => 'string',
        'paymentHolds' => '\macropage\SDKs\ebay\rest\fulfillment\Model\PaymentHold[]',
        'paymentMethod' => 'string',
        'paymentReferenceId' => 'string',
        'paymentStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'paymentDate' => null,
        'paymentHolds' => null,
        'paymentMethod' => null,
        'paymentReferenceId' => null,
        'paymentStatus' => null
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
        'amount' => 'amount',
        'paymentDate' => 'paymentDate',
        'paymentHolds' => 'paymentHolds',
        'paymentMethod' => 'paymentMethod',
        'paymentReferenceId' => 'paymentReferenceId',
        'paymentStatus' => 'paymentStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'paymentDate' => 'setPaymentDate',
        'paymentHolds' => 'setPaymentHolds',
        'paymentMethod' => 'setPaymentMethod',
        'paymentReferenceId' => 'setPaymentReferenceId',
        'paymentStatus' => 'setPaymentStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'paymentDate' => 'getPaymentDate',
        'paymentHolds' => 'getPaymentHolds',
        'paymentMethod' => 'getPaymentMethod',
        'paymentReferenceId' => 'getPaymentReferenceId',
        'paymentStatus' => 'getPaymentStatus'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['paymentDate'] = isset($data['paymentDate']) ? $data['paymentDate'] : null;
        $this->container['paymentHolds'] = isset($data['paymentHolds']) ? $data['paymentHolds'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['paymentReferenceId'] = isset($data['paymentReferenceId']) ? $data['paymentReferenceId'] : null;
        $this->container['paymentStatus'] = isset($data['paymentStatus']) ? $data['paymentStatus'] : null;
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
     * Gets amount
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\Amount|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets paymentDate
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['paymentDate'];
    }

    /**
     * Sets paymentDate
     *
     * @param string|null $paymentDate The date and time that the payment was received by the seller. This field will not be returned if buyer has yet to pay for the order. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setPaymentDate($paymentDate)
    {
        $this->container['paymentDate'] = $paymentDate;

        return $this;
    }

    /**
     * Gets paymentHolds
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\PaymentHold[]|null
     */
    public function getPaymentHolds()
    {
        return $this->container['paymentHolds'];
    }

    /**
     * Sets paymentHolds
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\PaymentHold[]|null $paymentHolds This container is only returned if eBay is temporarily holding the seller's funds for the order. If a payment hold has been placed on the order, this container includes the reason for the payment hold, the expected release date of the funds into the seller's account, the current state of the hold, and as soon as the payment hold has been released, the actual release date.
     *
     * @return $this
     */
    public function setPaymentHolds($paymentHolds)
    {
        $this->container['paymentHolds'] = $paymentHolds;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string|null $paymentMethod The payment method used by the buyer to pay for the order. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/PaymentMethodTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets paymentReferenceId
     *
     * @return string|null
     */
    public function getPaymentReferenceId()
    {
        return $this->container['paymentReferenceId'];
    }

    /**
     * Sets paymentReferenceId
     *
     * @param string|null $paymentReferenceId This field shows the unique identifier of the buyer's payment for the order.
     *
     * @return $this
     */
    public function setPaymentReferenceId($paymentReferenceId)
    {
        $this->container['paymentReferenceId'] = $paymentReferenceId;

        return $this;
    }

    /**
     * Gets paymentStatus
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['paymentStatus'];
    }

    /**
     * Sets paymentStatus
     *
     * @param string|null $paymentStatus The enumeration value returned in this field indicates the status of the buyer's payment for the order. See the PaymentStatusEnum type definition for more information on the possible payment states. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/PaymentStatusEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->container['paymentStatus'] = $paymentStatus;

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

