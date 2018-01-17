<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ProductTicker
 *
 * @author Benjamin Franke
 */
class ProductTicker implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var int
     */
    protected $trade_id;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var string
     */
    protected $size;

    /**
     * @var string
     */
    protected $bid;

    /**
     * @var string
     */
    protected $ask;

    /**
     * @var string
     */
    protected $volume;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @return int
     */
    public function getTradeId() {
        return $this->trade_id;
    }

    /**
     * @param int $trade_id
     *
     * @return ProductTicker
     */
    protected function setTradeId($trade_id) {
        $this->trade_id = (int)$trade_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param string $price
     *
     * @return ProductTicker
     */
    protected function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param string $size
     *
     * @return ProductTicker
     */
    protected function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getBid() {
        return $this->bid;
    }

    /**
     * @param string $bid
     *
     * @return ProductTicker
     */
    protected function setBid($bid) {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return string
     */
    public function getAsk() {
        return $this->ask;
    }

    /**
     * @param string $ask
     *
     * @return ProductTicker
     */
    protected function setAsk($ask) {
        $this->ask = $ask;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * @param string $volume
     *
     * @return ProductTicker
     */
    protected function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param string $time
     *
     * @return ProductTicker
     */
    protected function setTime($time) {
        $this->time = new \DateTime($time);
        return $this;
    }

}
