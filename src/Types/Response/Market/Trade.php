<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Trade
 *
 * @author Benjamin Franke
 */
class Trade implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var \DateTime
     */
    protected $time;

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
    protected $side;

    /**
     * @return \DateTime
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param string $time
     *
     * @return Trade
     */
    protected function setTime($time) {
        $this->time = new \DateTime($time);
        return $this;
    }

    /**
     * @return int
     */
    public function getTradeId() {
        return $this->trade_id;
    }

    /**
     * @param int $trade_id
     *
     * @return Trade
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
     * @return Trade
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
     * @return Trade
     */
    protected function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getSide() {
        return $this->side;
    }

    /**
     * @param string $side
     *
     * @return Trade
     */
    protected function setSide($side) {
        $this->side = $side;
        return $this;
    }

}
