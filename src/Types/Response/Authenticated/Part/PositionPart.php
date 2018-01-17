<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class PositionPart
 *
 * @author Benjamin Franke
 */
class PositionPart implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $size;

    /**
     * @var string
     */
    protected $complement;

    /**
     * @var string
     */
    protected $max_size;

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return PositionPart
     */
    protected function setType($type) {
        $this->type = $type;
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
     * @return PositionPart
     */
    protected function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * @param string $complement
     *
     * @return PositionPart
     */
    protected function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxSize() {
        return $this->max_size;
    }

    /**
     * @param string $max_size
     *
     * @return PositionPart
     */
    protected function setMaxSize($max_size) {
        $this->max_size = $max_size;
        return $this;
    }

}
