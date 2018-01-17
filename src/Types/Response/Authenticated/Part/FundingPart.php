<?php

namespace GDAX\Types\Response\Authenticated\Part;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class FundingPart
 *
 * @author Benjamin Franke
 */
class FundingPart implements ResponseTypeInterface {

    use ResponseTypeTrait {
        initFromArray as protected traitInitFromArray;
    }

    /**
     * @var string
     */
    protected $max_funding_value;

    /**
     * @var string
     */
    protected $funding_value;

    /**
     * @var OldestOutstandingPart
     */
    protected $oldest_outstanding;

    /**
     * @return string
     */
    public function getMaxFundingValue() {
        return $this->max_funding_value;
    }

    /**
     * @param string $max_funding_value
     *
     * @return FundingPart
     */
    protected function setMaxFundingValue($max_funding_value) {
        $this->max_funding_value = $max_funding_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFundingValue() {
        return $this->funding_value;
    }

    /**
     * @param string $funding_value
     *
     * @return FundingPart
     */
    protected function setFundingValue($funding_value) {
        $this->funding_value = $funding_value;
        return $this;
    }

    /**
     * @return OldestOutstandingPart
     */
    public function getOldestOutstanding() {
        return $this->oldest_outstanding;
    }

    /**
     * @param OldestOutstandingPart $oldest_outstanding
     *
     * @return FundingPart
     */
    protected function setOldestOutstanding($oldest_outstanding) {
        $this->oldest_outstanding = $oldest_outstanding;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function initFromArray(array $data) {

        $this->traitInitFromArray($data);

        $this->setOldestOutstanding((new OldestOutstandingPart())->initFromArray($data['oldest_outstanding']));

        return $this;

    }

}
