<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'Memcached.php';

class Repo
{
    private $cache;

    function __construct()
    {
        $this->cache = new \MemcachedLib();
    }

    function identity_load($identity_id)
    {
        $idcache = 'repo_identity_load' . $identity_id;
        // if ($response = $this->cache->get($idcache)) {
        //     return json_decode($response);
        // }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingrepo-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "repo_identity.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "identity_id": "' . $identity_id . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function email_load($email_id)
    {
        $idcache = 'repo_email_load' . $email_id;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingrepo-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "repo_email.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "email_id": "' . $email_id . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function phone_load($phone_id)
    {
        $idcache = 'repo_phone_load' . $phone_id;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingrepo-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "repo_phone.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "phone_id": "' . $phone_id . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function address_load($address_id)
    {
        $idcache = 'repo_address_load' . $address_id;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingrepo-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "repo_address.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "address_id": "' . $address_id . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function document_add($name, $url, $mime = 'image/jpeg')
    {
        log_message('error', 'repo_document_add');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingrepo-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "repo_document.add",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "document_name": "' . $name . '",
                    "document_mime": "' . $mime . '",
                    "document_type": "10",
                    "document_path": "' . $url . '",
                    "folder_id": "1",
                    "binder_id": "0",
                    "box_id": "0"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        log_message('error', $response);
        return json_decode($response);
    }
}
