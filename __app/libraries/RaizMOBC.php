<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'Memcached.php';

class MOBC
{
    private $cache;

    function __construct()
    {
        $this->cache = new \MemcachedLib();
    }

    function product_list()
    {
        $idcache = 'product_list';
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $repo = $this->product_search_product();
        // log_message('error', $repo);
        $repo = json_decode($repo);
        // log_message('error', count((array) $repo->result->rows));
        $portfolio_ids = [];
        if ($repo->result->rows != null) {
            foreach ($repo->result->rows as $k => $v) {
                $portfolio_ids[] = $v->portfolio_id;
            }
        }

        $repo = $this->product_search_portfolio($portfolio_ids);
        $repo = json_decode($repo);

        $response = $repo->result->rows;

        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function product_search_product()
    {
        $idcache = 'product_search_product';
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

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
                "method": "mobc_product.search_product",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
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

        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function product_search_portfolio($portfolio_ids = array())
    {
        $idcache = 'product_search_portfolio' . join('_', $portfolio_ids);
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $portfolio_ids = join(',', $portfolio_ids);

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
                "method": "mobc_product.search_portfolio", 
                "appcode": "RaizIndonesia", 
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas", 
                "id": 78910, 
                "params": {
                    "page_no": 1, 
                    "limit": 0, 
                    "portfolio_id": [' . $portfolio_ids . ']
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

    function product_last_nav($portfolio_id)
    {
        $idcache = 'product_last_nav' . $portfolio_id;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

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
            CURLOPT_POSTFIELDS => '{"agent": "windows", "method": "mobc_product.last_nav", "appcode": "RaizIndonesia", "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas", "id": 78910, "params": {"page_no": 1, "limit": 0, "portfolio_id": ' . $portfolio_id . '}}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function product_last_return($portfolio_id, $position_date)
    {
        $idcache = 'product_last_return' . $portfolio_id . $position_date;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

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
            CURLOPT_POSTFIELDS => '{"agent": "windows", "method": "mobc_product.last_return", "appcode": "RaizIndonesia", "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas", "id": 78910, "params": {"page_no": 1, "limit": 0, "portfolio_id": ' . $portfolio_id . ', "position_date": "' . $position_date . '"}}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->cache->save($idcache, $response);
        return json_decode($response);
    }

    function product_search_codeset($portfolio_ids = array())
    {
        $idcache = 'product_search_codeset' . join('_', $portfolio_ids);
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $portfolio_ids = join(',', $portfolio_ids);

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
                "method": "mobc_product.search_codeset",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "field_id": [
                        3,
                        6,
                        10,
                        14,
                        15,
                        16
                    ],
                    "portfolio_id": [' . $portfolio_ids . ']
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

    function product_search_account($portfolio_ids = array())
    {
        $idcache = 'product_search_account' . join('_', $portfolio_ids);
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $portfolio_ids = join(',', $portfolio_ids);

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
                "method": "mobc_product.search_account",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "portfolio_id": [' . $portfolio_ids . ']
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
}
