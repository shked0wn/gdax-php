<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class ProductHistoricRate
 *
 * @author Brandon Eckenrode
 */
class ProductHistoricRate implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @var string
     */
    protected $low;

    /**
     * @var string
     */
    protected $high;

    /**
     * @var string
     */
    protected $open;

    /**
     * @var string
     */
    protected $close;

    /**
     * @var string
     */
    protected $volume;

    /**
     * @return \DateTime
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param int $time
     *
     * @return ProductHistoricRate
     */
    protected function setTime($time) {

        if ($time === null) {
            $time = 0;
        }

        $this->time = new \DateTime('@' . $time);
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
     * @return ProductHistoricRate
     */
    protected function setLow($low) {
        $this->low = $low;
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
     * @return ProductHistoricRate
     */
    protected function setHigh($high) {
        $this->high = $high;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpen() {
        return $this->open;
    }

    /**
     * @param string $open
     *
     * @return ProductHistoricRate
     */
    protected function setOpen($open) {
        $this->open = $open;
        return $this;
    }

    /**
     * @return string
     */
    public function getClose() {
        return $this->close;
    }

    /**
     * @param string $close
     *
     * @return ProductHistoricRate
     */
    protected function setClose($close) {
        $this->close = $close;
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
     * @return ProductHistoricRate
     */
    protected function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        if (!empty($data['message'])) {
            return $this;
        }

        return $this->setTime($data[0])
            ->setLow($data[1])
            ->setHigh($data[2])
            ->setOpen($data[3])
            ->setClose($data[4])
            ->setVolume($data[5]);

    }

}
