<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

class Auth
{
    private $username;
    private $otpEmail;
    private $otp;
    private $isRemember = false;

    function __construct()
    {
    }

    function setRemember()
    {
    }

    function getRemember()
    {
    }

    function checkToken()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingmobc-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "mobc_prospect.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        if ($response->error->code == '02-0')
            return false;
        else
            return true;
    }

    function signUp()
    {
    }

    function signIn($identifier, $password)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingsystem-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "system_access.client_login",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78911,
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "login": "' . $identifier . '",
                    "password": "' . $password . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    function signOut()
    {
    }

    function forgotPwd()
    {
    }

    function resetPwd()
    {
    }

    function changePwd()
    {
    }
}
