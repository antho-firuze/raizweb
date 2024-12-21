<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'Memcached.php';

class Market
{
    private $cache;

    function __construct()
    {
        $this->cache = new \MemcachedLib();
    }

    function running_text()
    {
        $idcache = 'running_text';
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingmarket2-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
				"agent": "windows",
				"method": "market_database.market_runningtext.search",
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

    function company_load($company_id)
    {
        $idcache = 'company_load' . $company_id;
        if ($response = $this->cache->get($idcache)) {
            return json_decode($response);
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://stagingmarket2-api.raiz-indonesia.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "agent": "windows",
                "method": "market_company.market_company.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "company_id": "' . $company_id . '"
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
