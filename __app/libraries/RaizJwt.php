<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'Jwt.php';

class Jwt
{
    protected $_jwt;
    protected $_config = array(
        'jwt_key'     => '786!@#$%^&*AllahummaSholli-alaSayyidinaaMuhammad',
        'jwt_algo'    => 'HS512',
    );

    function __construct()
    {
        $this->_jwt = new \JWT();
    }

    public function getToken($payload = [])
    {
        return $this->_jwt->encode($payload, $this->_config['jwt_key']);
    }
    
    public function getPayload($jwt)
    {
        return $this->_jwt->decode($jwt, $this->_config['jwt_key']);
    }
}
