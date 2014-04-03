<?php
require_once('./Processor.php');
class OrderCheckout extends Processor {
    const ORDER_STATUS_PREFIX = "order_status_q";
    public function __construct() {
        $this->_logFile = "/var/log/httpd/" . __CLASS__ . ".log";
        $this->_key = 'order_checkout';
    }

    public function _getMethod($info) {
        $method = isset($info['checkout_type']) ? $info['checkout_type'] : '';
        return $method;
    }

}

try {
    $orderCheckout = new OrderCheckout();
    $orderCheckout->run();
} catch (Exception $e) {
    error_log(date("[Y-m-d H:i:s]") . $e->getTraceAsString());
}
