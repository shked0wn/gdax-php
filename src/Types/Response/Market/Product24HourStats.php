<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Product24HourStats
 *
 * @author Benjamin Franke
 */
class Product24HourStats implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $open;

    /**
     * @var string
     */
    protected $high;

    /**
     * @var string
     */
    protected $low;

    /**
     * @var string
     */
    protected $volume;

    /**
     * @var string
     */
    protected $last;

    /**
     * @var string
     */
    protected $volume_30day;

    /**
     * @return string
     */
    public function getOpen() {
        return $this->open;
    }

    /**
     * @param string $open
     *
     * @return Product24HourStats
     */
    protected function setOpen($open) {
        $this->open = $open;
        return $this;
    }

    /**
     * @return string
     */
    public function getHigh() {
        return $this->high;
    }

    /**
     * @param string $high
     *
     * @return Product24HourStats
     */
    protected function setHigh($high) {
        $this->high = $high;
        return $this;
    }

    /**
     * @return string
     */
    public function getLow() {
        return $this->low;
    }

    /**
     * @param string $low
     *
     * @return Product24HourStats
     */
    protected function setLow($low) {
        $this->low = $low;
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
     * @return Product24HourStats
     */
    protected function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return string
     */
    public function getLast() {
        return $this->last;
    }

    /**
     * @param string $last
     *
     * @return Product24HourStats
     */
    public function setLast($last) {
        $this->last = $last;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolume30day() {
        return $this->volume_30day;
    }

    /**
     * @param string $volume_30day
     *
     * @return Product24HourStats
     */
    public function setVolume30day($volume_30day) {
        $this->volume_30day = $volume_30day;
        return $this;
    }

}
