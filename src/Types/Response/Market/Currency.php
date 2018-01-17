<?php

namespace GDAX\Types\Response\Market;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Currency
 *
 * @author Benjamin Franke
 */
class Currency implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $min_size;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Currency
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Currency
     */
    protected function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinSize() {
        return $this->min_size;
    }

    /**
     * @param string $min_size
     *
     * @return Currency
     */
    protected function setMinSize($min_size) {
        $this->min_size = $min_size;
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
     * @return Currency
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

}
