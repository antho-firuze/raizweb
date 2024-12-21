<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('res_fail')) {
    /**
     * Return Fail
     *
     * @param	string	$msg    
     * @param	int	    $code	
     * @return	object
     */
    function res_fail($msg, $code = 0)
    {
        return (object) [
            'status' => false,
            'message' => $msg,
            'code' => $code,
        ];
    }
}

if (!function_exists('res_done')) {
    /**
     * Return Done
     *
     * @param	array	$data    
     * @param	int	    $code	
     * @return	object
     */
    function res_done($data = array())
    {
        return (object) [
            'status' => true,
            'data' => is_array($data) ? (object) $data : $data,
        ];
    }
}
