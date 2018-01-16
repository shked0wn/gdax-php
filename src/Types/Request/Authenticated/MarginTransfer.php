<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class MarginTransfer
 *
 * @author Benjamin Franke
 */
class MarginTransfer implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;

    /**
     * @var string
     */
    protected $margin_profile_id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @return string
     */
    public function getMarginProfileId() {
        return $this->margin_profile_id;
    }

    /**
     * @param string $margin_profile_id
     *
     * @return MarginTransfer
     */
    public function setMarginProfileId($margin_profile_id) {
        $this->margin_profile_id = $margin_profile_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return MarginTransfer
     */
    public function setType($type) {

        $this->checkInArray($type, GDAXConstants::$marginTransferTypeValues);
        $this->type = $type;
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
     * @return MarginTransfer
     */
    public function setCurrency($currency) {

        $this->checkInArray($currency, GDAXConstants::$currencyValues);
        $this->currency = $currency;
        return $this;

    }

    /**
     * @return string
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param string $amount
     *
     * @return MarginTransfer
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

}
