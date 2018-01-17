<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class Deposit
 *
 * @author Benjamin Franke
 */
class Deposit implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $payment_method_id;

    /**
     * @var string
     */
    protected $coinbase_account_id;

    /**
     * @return string
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param string $amount
     *
     * @return Deposit
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Deposit
     */
    public function setCurrency($currency) {

        $this->checkInArray($currency, GDAXConstants::$currencyValues);
        $this->currency = $currency;
        return $this;

    }

    /**
     * @return string
     */
    public function getPaymentMethodId() {
        return $this->payment_method_id;
    }

    /**
     * @param string $payment_method_id
     *
     * @return Deposit
     */
    public function setPaymentMethodId($payment_method_id) {
        $this->payment_method_id = $payment_method_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoinbaseAccountId() {
        return $this->coinbase_account_id;
    }

    /**
     * @param string $coinbase_account_id
     *
     * @return Deposit
     */
    public function setCoinbaseAccountId($coinbase_account_id) {
        $this->coinbase_account_id = $coinbase_account_id;
        return $this;
    }

}
