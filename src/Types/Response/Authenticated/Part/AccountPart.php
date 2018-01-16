<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class AccountPart
 *
 * @author Benjamin Franke
 */
class AccountPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $balance;

    /**
     * @var string
     */
    protected $hold;

    /**
     * @var string
     */
    protected $funded_amount;

    /**
     * @var string
     */
    protected $default_amount;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return AccountPart
     */
    protected function setId($id) {
        $this->id = $id;
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
     * @return AccountPart
     */
    protected function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * @param string $balance
     *
     * @return AccountPart
     */
    protected function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return string
     */
    public function getHold() {
        return $this->hold;
    }

    /**
     * @param string $hold
     *
     * @return AccountPart
     */
    protected function setHold($hold) {
        $this->hold = $hold;
        return $this;
    }

    /**
     * @return string
     */
    public function getFundedAmount() {
        return $this->funded_amount;
    }

    /**
     * @param string $funded_amount
     *
     * @return AccountPart
     */
    protected function setFundedAmount($funded_amount) {
        $this->funded_amount = $funded_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultAmount() {
        return $this->default_amount;
    }

    /**
     * @param string $default_amount
     *
     * @return AccountPart
     */
    protected function setDefaultAmount($default_amount) {
        $this->default_amount = $default_amount;
        return $this;
    }

}
