<?php

namespace GDAX\Types\Request\Authenticated;

use GDAX\Interfaces\RequestTypeInterface;
use GDAX\Traits\RequestTypeTrait;
use GDAX\Traits\ValidatorTrait;
use GDAX\Utilities\GDAXConstants;

/**
 * Class Order
 *
 * @author Benjamin Franke
 */
class Order implements RequestTypeInterface {

    use RequestTypeTrait;
    use ValidatorTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $client_oid;

    /**
     * @var string
     */
    protected $stp;

    /**
     * @var string
     */
    protected $time_in_force;

    /**
     * @var string
     */
    protected $size;

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
    protected $product_id;

    /**
     * @var string
     */
    protected $cancel_after;

    /**
     * @var bool
     */
    protected $post_only;

    /**
     * @var string
     */
    protected $funds;

    /**
     * @var bool
     */
    protected $overdraft_enabled;

    /**
     * @var string
     */
    protected $funding_amount;

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
    public function setId($id) {
        $this->id = $id;
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
    public function setType($type) {

        $this->checkInArray($type, GDAXConstants::$orderTypeValues);
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
     * @return Order
     */
    public function setSize($size) {
        $this->size = $size;
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
    public function setPrice($price) {
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
     * @return Order
     */
    public function setSide($side) {

        $this->checkInArray($side, GDAXConstants::$orderSideValues);
        $this->side = $side;
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
    public function setProductId($product_id) {

        $this->checkInArray($product_id, GDAXConstants::$productIdValues);
        $this->product_id = $product_id;
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
    public function setClientOid($client_oid) {
        $this->client_oid = $client_oid;
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
    public function setStp($stp) {

        $this->checkInArray($stp, GDAXConstants::$stpValues);
        $this->stp = $stp;
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
    public function setTimeInForce($time_in_force) {
        $this->time_in_force = $time_in_force;
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
    public function setCancelAfter($cancel_after) {

        $this->checkInArray($cancel_after, GDAXConstants::$cancelAfterValues);
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
    public function setPostOnly($post_only) {
        $this->post_only = $post_only;
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
    public function setFunds($funds) {
        $this->funds = $funds;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOverdraftEnabled() {
        return $this->overdraft_enabled;
    }

    /**
     * @param bool $overdraft_enabled
     *
     * @return Order
     */
    public function setOverdraftEnabled($overdraft_enabled) {
        $this->overdraft_enabled = $overdraft_enabled;
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

}
