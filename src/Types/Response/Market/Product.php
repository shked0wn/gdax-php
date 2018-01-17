<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Product
 *
 * @author Benjamin Franke
 */
class Product implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $base_currency;

    /**
     * @var string
     */
    protected $quote_currency;

    /**
     * @var string
     */
    protected $base_min_size;

    /**
     * @var string
     */
    protected $base_max_size;

    /**
     * @var string
     */
    protected $quote_increment;

    /**
     * @var string
     */
    protected $display_name;

    /**
     * @var bool
     */
    protected $margin_enabled;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $min_market_funds;

    /**
     * @var string
     */
    protected $max_market_funds;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Product
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrency() {
        return $this->base_currency;
    }

    /**
     * @param string $base_currency
     *
     * @return Product
     */
    protected function setBaseCurrency($base_currency) {
        $this->base_currency = $base_currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteCurrency() {
        return $this->quote_currency;
    }

    /**
     * @param string $quote_currency
     *
     * @return Product
     */
    protected function setQuoteCurrency($quote_currency) {
        $this->quote_currency = $quote_currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseMinSize() {
        return $this->base_min_size;
    }

    /**
     * @param string $base_min_size
     *
     * @return Product
     */
    protected function setBaseMinSize($base_min_size) {
        $this->base_min_size = $base_min_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseMaxSize() {
        return $this->base_max_size;
    }

    /**
     * @param string $base_max_size
     *
     * @return Product
     */
    protected function setBaseMaxSize($base_max_size) {
        $this->base_max_size = $base_max_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteIncrement() {
        return $this->quote_increment;
    }

    /**
     * @param string $quote_increment
     *
     * @return Product
     */
    protected function setQuoteIncrement($quote_increment) {
        $this->quote_increment = $quote_increment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName() {
        return $this->display_name;
    }

    /**
     * @param string $display_name
     *
     * @return Product
     */
    protected function setDisplayName($display_name) {
        $this->display_name = $display_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMarginEnabled() {
        return $this->margin_enabled;
    }

    /**
     * @param bool $margin_enabled
     *
     * @return Product
     */
    protected function setMarginEnabled($margin_enabled) {
        $this->margin_enabled = (bool)$margin_enabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Product
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinMarketFunds() {
        return $this->min_market_funds;
    }

    /**
     * @param string $min_market_funds
     *
     * @return Product
     */
    protected function setMinMarketFunds($min_market_funds) {
        $this->min_market_funds = $min_market_funds;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxMarketFunds() {
        return $this->max_market_funds;
    }

    /**
     * @param string $max_market_funds
     *
     * @return Product
     */
    protected function setMaxMarketFunds($max_market_funds) {
        $this->max_market_funds = $max_market_funds;
        return $this;
    }
}
