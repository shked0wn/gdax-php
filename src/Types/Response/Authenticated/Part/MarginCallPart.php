<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class MarginCallPart
 *
 * @author Benjamin Franke
 */
class MarginCallPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var string
     */
    protected $side;

    /**
     * @var string
     */
    protected $size;

    /**
     * @var string
     */
    protected $funds;

    /**
     * @return bool
     */
    public function isActive() {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return MarginCallPart
     */
    protected function setActive($active) {
        $this->active = (bool)$active;
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
     * @return MarginCallPart
     */
    protected function setPrice($price) {
        $this->price = $price;
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
     * @return MarginCallPart
     */
    protected function setSide($side) {
        $this->side = $side;
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
     * @return MarginCallPart
     */
    protected function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getFunds() {
        return $this->funds;
    }

    /**
     * @param string $funds
     *
     * @return MarginCallPart
     */
    protected function setFunds($funds) {
        $this->funds = $funds;
        return $this;
    }

}
