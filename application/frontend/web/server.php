<?php
class API {
    /**
     * the doc info will be generated automatically into service info page.
     * @params
     * @return
     */
    public function __construct() {
    }

    public function client_can_not_see() {
    }
}

$service = new \Yar_Server(new API());
$service->handle();