<?php

namespace GDAX\Types\Response\Authenticated;

use GDAX\Interfaces\ResponseTypeInterface;
use GDAX\Traits\ResponseTypeTrait;

/**
 * Class Fill
 *
 * @author Benjamin Franke
 */
class Fill implements ResponseTypeInterface {

    use ResponseTypeTrait;

    /**
     * @var string
     */
    protected $trade_id;

    /**
     * @var string
     */
    protected $product_id;

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
    protected $order_id;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $liquidity;

    /**
     * @var string
     */
    protected $fee;

    /**
     * @var bool
     */
    protected $settled;

    /**
     * @var string
     */
    protected $side;

    /**
     * @var string
     */
    protected $user_id;

    /**
     * @var string
     */
    protected $profile_id;

    /**
     * @var float
     */
    protected $usd_volume;

    /**
     * @return int
     */
    public function getTradeId() {
        return $this->trade_id;
    }

    /**
     * @param int $trade_id
     *
     * @return Fill
     */
    protected function setTradeId($trade_id) {
        $this->trade_id = (int)$trade_id;
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
     * @return Fill
     */
    protected function setProductId($product_id) {
        $this->product_id = $product_id;
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
     * @return Fill
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
     * @return Fill
     */
    protected function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId() {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     *
     * @return Fill
     */
    protected function setOrderId($order_id) {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return Fill
     */
    protected function setCreatedAt($created_at) {
        $this->created_at = new \DateTime($created_at);
        return $this;
    }

    /**
     * @return string
     */
    public function getLiquidity() {
        return $this->liquidity;
    }

    /**
     * @param string $liquidity
     *
     * @return Fill
     */
    protected function setLiquidity($liquidity) {
        $this->liquidity = $liquidity;
        return $this;
    }

    /**
     * @return string
     */
    public function getFee() {
        return $this->fee;
    }

    /**
     * @param string $fee
     *
     * @return Fill
     */
    protected function setFee($fee) {
        $this->fee = $fee;
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
     * @return Fill
     */
    protected function setSettled($settled) {
        $this->settled = (bool)$settled;
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
     * @return Fill
     */
    protected function setSide($side) {
        $this->side = $side;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     *
     * @return Fill
     */
    protected function setUserId($user_id) {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileId() {
        return $this->profile_id;
    }

    /**
     * @param string $profile_id
     *
     * @return Fill
     */
    protected function setProfileId($profile_id) {
        $this->profile_id = $profile_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsdVolume() {
        return $this->usd_volume;
    }

    /**
     * @param string $usd_volume
     *
     * @return Fill
     */
    public function setUsdVolume($usd_volume) {
        $this->usd_volume = $usd_volume;
        return $this;
    }

}
