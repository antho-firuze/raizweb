<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('rpc_params')) {
    /**
     * RPC Get Params
     *
     * @param string    $key
     * @return array
     */
    function rpc_params($key = null)
    {
        $params = [];
        if (in_array($_SERVER['REQUEST_METHOD'], ['POST'])) {
            // 1. First check this Non Form-Data Request
            $params = json_decode(file_get_contents('php://input'));

            if (!$params || empty($params)) {
                // 2. Next check Form-Data Request : Using for uploading file/image
                $params = json_decode(json_encode($_POST));
            }
        } else {
            // $params = $_GET;
            $params = (object) $_GET;
        }

        $params = (array) $params;
        return isset($key) ? $params[$key] : $params;
    }
}

if (!function_exists('rpc_fail')) {
    /**
     * RPC Output Error
     *
     * @param string    $msg
     * @param int       $code = 0
     * @param int       $status = 500
     * @return die
     */
    function rpc_fail($msg, $code = 0, $status = 500)
    {
        header("HTTP/1.0 $status");
        // === for Allow Cross Domain Webservice ===
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
        header("Access-Control-Allow-Headers: Origin");
        // === for Allow Cross Domain Webservice ===
        header('Accept-Ranges: bytes');
        header('Content-Type: application/json');

        $data = array(
            "message"   => $msg,
            "code"      => $code,
        );
        die(json_encode($data));
    }
}

if (!function_exists('rpc_done')) {
    /**
     * RPC Output Success
     *
     * @param mixed    $payload
     * @return die
     */
    function rpc_done($payload)
    {
        header("HTTP/1.0 200");
        // === for Allow Cross Domain Webservice ===
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
        header("Access-Control-Allow-Headers: Origin");
        // === for Allow Cross Domain Webservice ===
        header('Accept-Ranges: bytes');
        header('Content-Type: application/json');

        die(json_encode($payload));
    }
}
