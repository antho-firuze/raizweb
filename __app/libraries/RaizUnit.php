<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'Memcached.php';

class Unit
{
    private $cache;

    function __construct()
    {
        $this->cache = new \MemcachedLib();
    }

    function unit_nav_load($portfolio_ids = [], $as_date, $option_date = 'end')
    {
        $idcache = 'unit_nav_load' . join('_', $portfolio_ids) . $as_date . $option_date;
        // if ($response = $this->cache->get($idcache)) {
        //     return json_decode($response);
        // }

        $portfolio_ids = join(',', $portfolio_ids);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://staginginvest-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "invest_data.unit_nav.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "option_date": "' . $option_date . '",
                    "type_date": "position",
                    "as_date": "' . $as_date . '",
                    "portfolio_list": [' . $portfolio_ids . ']
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

    function unit_balance_search($portfolio_ids = [], $ccy_id, $client_id, $position_date)
    {
        $idcache = 'unit_balance_search' . join('_', $portfolio_ids) . $ccy_id . $client_id . $position_date;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $portfolio_ids = join(',', $portfolio_ids);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://staginginvest-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "invest_data.unit_balance.search",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 1000,
                    "ccy_id": "' . $ccy_id . '",
                    "portfolio_list": [' . $portfolio_ids . '],
                    "parent_id": "' . $client_id . '",
                    "position_date": "' . $position_date . '"
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

    function unit_balance_search_for_redeem($client_id, $position_date)
    {
        $idcache = 'unit_balance_search_for_redeem' . $client_id . $position_date;
        // if ($response = $this->cache->get($idcache)) {
        //     return json_decode($response);
        // }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://staginginvest-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "invest_data.unit_balance.search",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 1000,
                    "client_id": "' . $client_id . '",
                    "position_date": "' . $position_date . '"
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

    function unit_balance_history($portfolio_ids = [], $ccy_id, $client_id, $position_date, $option_date = 'last')
    {
        $idcache = 'unit_balance_history' . join('_', $portfolio_ids) . $ccy_id . $client_id . $position_date . $option_date;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $portfolio_ids = join(',', $portfolio_ids);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://staginginvest-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "invest_data.unit_balance.history",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 1000,
                    "ccy_id": "' . $ccy_id . '",
                    "portfolio_list": [' . $portfolio_ids . '],
                    "parent_id": "' . $client_id . '",
                    "position_date": "' . $position_date . '",
                    "option_date": "' . $option_date . '"
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
