<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Order
 *
 * @author Benjamin Franke
 */
class Order implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $client_oid;

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
    protected $funds;

    /**
     * @var string
     */
    protected $product_id;

    /**
     * @var string
     */
    protected $side;

    /**
     * @var string
     */
    protected $stp;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $time_in_force;

    /**
     * @var \DateTime
     */
    protected $expire_time;

    /**
     * @var string
     */
    protected $cancel_after;

    /**
     * @var bool
     */
    protected $post_only;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var bool
     */
    protected $fill_fees;

    /**
     * @var string
     */
    protected $filled_size;

    /**
     * @var string
     */
    protected $executed_value;

    /**
     * @var string
     */
    protected $overdraft_enabled;

    /**
     * @var string
     */
    protected $funding_amount;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var bool
     */
    protected $settled;

    /**
     * @var string
     */
    protected $specified_funds;

    /**
     * @var string
     */
    protected $reject_reason;

    /**
     * @var \DateTime
     */
    protected $done_at;

    /**
     * @var string
     */
    protected $done_reason;

    /**
     * @var string
     */
    protected $stop;

    /**
     * @var string
     */
    protected $stop_price;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Order
     */
    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientOid() {
        return $this->client_oid;
    }

    /**
     * @param string $client_oid
     *
     * @return Order
     */
    protected function setClientOid($client_oid) {
        $this->client_oid = $client_oid;
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
     * @return Order
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
     * @return Order
     */
    protected function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId() {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return Order
     */
    protected function setProductId($product_id) {
        $this->product_id = $product_id;
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
     * @return Order
     */
    protected function setSide($side) {
        $this->side = $side;
        return $this;
    }

    /**
     * @return string
     */
    public function getStp() {
        return $this->stp;
    }

    /**
     * @param string $stp
     *
     * @return Order
     */
    protected function setStp($stp) {
        $this->stp = $stp;
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
     * @return Order
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeInForce() {
        return $this->time_in_force;
    }

    /**
     * @param string $time_in_force
     *
     * @return Order
     */
    protected function setTimeInForce($time_in_force) {
        $this->time_in_force = $time_in_force;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireTime() {
        return $this->expire_time;
    }

    /**
     * @param \DateTime $expire_time
     *
     * @return Order
     */
    public function setExpireTime($expire_time) {
        $this->expire_time = new \DateTime($expire_time);
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelAfter() {
        return $this->cancel_after;
    }

    /**
     * @param string $cancel_after
     *
     * @return Order
     */
    protected function setCancelAfter($cancel_after) {
        $this->cancel_after = $cancel_after;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPostOnly() {
        return $this->post_only;
    }

    /**
     * @param bool $post_only
     *
     * @return Order
     */
    protected function setPostOnly($post_only) {
        $this->post_only = (bool)$post_only;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     *
     * @return Order
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = new \DateTime($created_at);
        return $this;
    }

    /**
     * @return string
     */
    public function getFillFees() {
        return $this->fill_fees;
    }

    /**
     * @param string $fill_fees
     *
     * @return Order
     */
    protected function setFillFees($fill_fees) {
        $this->fill_fees = $fill_fees;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilledSize() {
        return $this->filled_size;
    }

    /**
     * @param string $filled_size
     *
     * @return Order
     */
    protected function setFilledSize($filled_size) {
        $this->filled_size = $filled_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecutedValue() {
        return $this->executed_value;
    }

    /**
     * @param string $executed_value
     *
     * @return Order
     */
    protected function setExecutedValue($executed_value) {
        $this->executed_value = $executed_value;
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
     * @return Order
     */
    protected function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSettled() {
        return $this->settled;
    }

    /**
     * @param bool $settled
     *
     * @return Order
     */
    protected function setSettled($settled) {
        $this->settled = (bool)$settled;
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
     * @return Order
     */
    protected function setFunds($funds) {
        $this->funds = $funds;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverdraftEnabled() {
        return $this->overdraft_enabled;
    }

    /**
     * @param bool $overdraft_enabled
     *
     * @return Order
     */
    public function setOverdraftEnabled($overdraft_enabled) {
        $this->overdraft_enabled = (bool)$overdraft_enabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getFundingAmount() {
        return $this->funding_amount;
    }

    /**
     * @param string $funding_amount
     *
     * @return Order
     */
    public function setFundingAmount($funding_amount) {
        $this->funding_amount = $funding_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecifiedFunds() {
        return $this->specified_funds;
    }

    /**
     * @param string $specified_funds
     *
     * @return Order
     */
    public function setSpecifiedFunds($specified_funds) {
        $this->specified_funds = $specified_funds;
        return $this;
    }

    /**
     * @return string
     */
    public function getRejectReason() {
        return $this->reject_reason;
    }

    /**
     * @param string $reject_reason
     *
     * @return self
     */
    public function setRejectReason($reject_reason) {
        $this->reject_reason = $reject_reason;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getDoneAt() {
        return $this->done_at;
    }

    /**
     * @param \DateTime $done_at
     *
     * @return Order
     */
    protected function setDoneAt($done_at) {
        $this->done_at = $done_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoneReason() {
        return $this->done_reason;
    }

    /**
     * @param string $done_reason
     *
     * @return Order
     */
    protected function setDoneReason($done_reason) {
        $this->done_reason = $done_reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getStop() {
        return $this->stop;
    }

    /**
     * @param string $stop
     *
     * @return Order
     */
    protected function setStop($stop) {
        $this->stop = $stop;
        return $this;
    }

    /**
     * @return string
     */
    public function getStopPrice() {
        return $this->stop_price;
    }

    /**
     * @param string $stop_price
     *
     * @return Order
     */
    public function setStopPrice($stop_price) {
        $this->stop_price = $stop_price;
        return $this;
    }


}
