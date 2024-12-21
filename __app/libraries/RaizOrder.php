<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'Memcached.php';
include_once 'RaizRepo.php';
include_once dirname(__FILE__) . '/../helpers/return_helper.php';
include_once dirname(__FILE__) . '/../helpers/myupload_helper.php';
include_once dirname(__FILE__) . '/../helpers/myencrypt_helper.php';

class Order
{
    private $cache;

    function __construct()
    {
        $this->cache = new \MemcachedLib();
    }

    function document_add($order_id, $document_id, $document_no)
    {
        log_message('error', 'order_document_add');
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
                "method": "order_document.add",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_id": "' . $order_id . '",
                    "type_id": "17",
                    "document_issuer": "Raiz Invest Indonesia",
                    "document_no": "' . $document_no . '",
                    "document_title": "Bukti Transfer",
                    "document_link": "' . $document_id . '"
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

    function subscription_load($order_id)
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
                "method": "order_subscription.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_id": "' . $order_id . '"
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

    function subscription_search($from_date, $to_date)
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
                "method": "order_subscription.search",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 1000,
                    "option_date": "between",
                    "from_date": "' . $from_date . '",
                    "to_date": "' . $to_date . '",
                    "option_order": "T1.order_id ASC"
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

    function subscription_add($params = array())
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
                "method": "order_subscription.add",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_date": "' . date('Y-m-d') . '",
                    "account_id": "' . $params['account_id'] . '",
                    "bank_id": "' . $params['bank_id'] . '",
                    "order_amount": "' . $params['order_amount'] . '",
                    "portfolio_id": "' . $params['portfolio_id'] . '",
                    "client_id": "' . $_SESSION['client_id'] . '",
                    "sales_id": "' . $_SESSION['sales_id'] . '"
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

    function subscription_payment_set($order_id, $filename)
    {
        log_message('error', 'subscription_payment_set');
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
                "method": "order_subscription.payment_set",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_id": "' . $order_id . '",
                    "account_id": "3",
                    "bank_id": "0",
                    "payment_status": "2",
                    "payment_proof": "Bukti Transfer",
                    "payment_reference": "' . $filename . '",
                    "payment_description": "Bank Transfer"
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

    function subscription_cancel($order_id)
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
                "method": "order_subscription.set_cancel",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_id": "' . $order_id . '",
                    "notes": "input double"
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

    function subscription_upload($order_id, $user_file)
    {
        $res = $this->subscription_load($order_id);
        if ($res->status == false)
            return res_fail($res->message);

        $account_id = $res->result->rows[0]->account_id;
        $bank_id = "0";
        $filename = $res->result->rows[0]->reff_sales;
        $filename = $filename . random_str();

        $res = upload_file($user_file, $filename, 'assets/subscribe/');
        if ($res->status == false)
            return res_fail($res->message);

        $filename = $res->data->filename;
        $mime = $res->data->mime;
        $url = $res->data->url;

        log_message('error', 'filename: ' . $filename);
        log_message('error', 'mime: ' . $mime);
        log_message('error', 'url: ' . $url);

        $repo = new Repo();
        $res = $repo->document_add($filename, $url, $mime);
        if ($res->status == false)
            return res_fail($res->message);

        $document_id = $res->result->document_id;

        log_message('error', 'order_id: ' . $order_id);
        log_message('error', 'document_id: ' . $document_id);

        $res = $this->document_add($order_id, $document_id, $filename);
        if ($res->status == false)
            return res_fail($res->message);

        $res = $this->subscription_payment_set($order_id, $filename);
        if ($res->status == false)
            return res_fail($res->message);

        return res_done();
    }

    function getStatusCode($status_id)
    {
        switch ($status_id) {
            case 1:
                return 'SUBMIT';
            case 2:
                return 'BATCH TO CUSTODIAN';
            case 3:
                return 'CANCEL';
            case 4:
                return 'ALLOCATE';
            case 5:
                return 'CONFIRM';
            case 6:
                return 'REJECT';
            case 7:
                return 'PENDING';
        }
    }

    function getStatusPayment($status_id, $status_verify, $id_reason, $verify_reason)
    {
        switch ($status_id) {
            case 1:
                if ($status_verify == "1" || $status_verify == "2")
                    return 'need_proof';
                else if ($status_verify == "3")
                    return 'OK';
                else
                    return $verify_reason;
            case 3:
                return '';
            case 2:
            case 4:
            case 5:
                return 'OK';
            case 6:
            case 7:
                return $id_reason;
        }
    }

    function redemption_load($order_id)
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
                "method": "order_redemption.load",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_id": "' . $order_id . '"
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

    function redemption_search($from_date, $to_date)
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
                "method": "order_redemption.search",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 1000,
                    "option_date": "between",
                    "from_date": "' . $from_date . '",
                    "to_date": "' . $to_date . '",
                    "option_order": "T1.order_id ASC"
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

    function redemption_add($params = array())
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
                "method": "order_redemption.add",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_date": "' . date('Y-m-d') . '",
                    "order_by": "' . $params['order_by'] . '",
                    "order_unit": "' . $params['order_unit'] . '",
                    "order_amount": "' . $params['order_amount'] . '",
                    "portfolio_id": "' . $params['portfolio_id'] . '",
                    "identity_id": "' . $params['identity_id'] . '",
                    "ifua_id": "' . $params['ifua_id'] . '",
                    "account_id": "' . $params['account_id'] . '"
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

    function redemption_upload($order_id, $user_file)
    {
        $res = $this->redemption_load($order_id);
        if ($res->status == false)
            return res_fail($res->message);

        $account_id = $res->result->rows[0]->account_id;
        $bank_id = "0";
        $filename = $res->result->rows[0]->reff_sales;
        $filename = $filename . random_str();

        $res = upload_file($user_file, $filename, 'assets/redeem/');
        if ($res->status == false)
            return res_fail($res->message);

        $filename = $res->data->filename;
        $mime = $res->data->mime;
        $url = $res->data->url;

        log_message('error', 'filename: ' . $filename);
        log_message('error', 'mime: ' . $mime);
        log_message('error', 'url: ' . $url);

        $repo = new Repo();
        $res = $repo->document_add($filename, $url, $mime);
        if ($res->status == false)
            return res_fail($res->message);

        $document_id = $res->result->document_id;

        log_message('error', 'order_id: ' . $order_id);
        log_message('error', 'document_id: ' . $document_id);

        $res = $this->document_add($order_id, $document_id, $filename);
        if ($res->status == false)
            return res_fail($res->message);

        // $res = $this->subscription_payment_set($order_id, $filename);
        // if ($res->status == false)
        //     return res_fail($res->message);

        return res_done();
    }

    function redemption_cancel($order_id)
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
                "method": "order_redemption.set_cancel",
                "appcode": "RaizIndonesia",
                "appkey": "lodufeposozahukaxekezirimebomerusekahegihojobehezomunudededewofabijenodofalilifoditupicebikuhirabolilopixupuxawajexejagahejexifanotirikikicirogesukowotanoxubetuvijurolutoxurohinenahulonenigomeheguliropibumawobodedanesixipabomagacobubojirulewuwuvituxoguxas",
                "id": 78910,
                "token_id": "' . $_SESSION['token_id'] . '",
                "params": {
                    "page_no": 1,
                    "limit": 0,
                    "order_id": "' . $order_id . '",
                    "notes": "input double"
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
}
