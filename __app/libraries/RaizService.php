<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Raiz;

include_once 'RaizClient.php';
include_once 'RaizMarket.php';
include_once 'RaizMaster.php';
include_once 'RaizMOBC.php';
include_once 'RaizOrder.php';
include_once 'RaizParameter.php';
include_once 'RaizRepo.php';
include_once 'RaizUnit.php';
include_once dirname(__FILE__) . '/../helpers/myarray_helper.php';
// include_once dirname(__FILE__) . '/../helpers/mydate_helper.php';

class Service
{
    private $market;
    private $master;
    private $mobc;
    private $prospect;
    private $repo;
    private $client;
    private $order;
    private $unit;
    private $param;

    function __construct()
    {
        $this->client = new Client();
        $this->market = new Market();
        $this->mobc = new Mobc();
        $this->order = new Order();
        $this->param = new Parameter();
        $this->repo = new Repo();
        $this->unit = new Unit();
    }

    function running_text()
    {
        $res = $this->market->running_text();
        $data = $res->result->rows;
        $data = array_column($data ?? [], 'rt_text');
        return $data;
    }

    function products()
    {
        $res = $this->mobc->product_search_product();
        
        // log_message('error', count($res->result->rows));
        $portfolio_ids = [];
        if ($res->result->rows != null) {
            foreach ($res->result->rows as $k => $v) {
                $portfolio_ids[] = $v->portfolio_id;
            }
        }

        $res = $this->mobc->product_search_portfolio($portfolio_ids);
        
        $portfolio_name = [];
        // if ($res->result->rows != null) {
        // }
        foreach ($res->result->rows ?? [] as $k => $v) {
            $portfolio_name[] = $v->portfolio_nameshort;
        }

        $nav = [];
        foreach ($portfolio_ids as $k => $portfolio_id) {
            $res = $this->mobc->product_last_nav($portfolio_id);
            
            if ($res->result->rows != null) {
                foreach ($res->result->rows as $k => $v) {
                    $nav[$portfolio_id] = (array) $v;
                }
            }
        }

        $lastret = [];
        foreach ($nav as $k => $v) {
            $portfolio_id = $k;
            $position_date = $v['position_date'];
            $res = $this->mobc->product_last_return($portfolio_id, $position_date);
            
            if ($res->result->rows != null) {
                foreach ($res->result->rows as $k => $v) {
                    $lastret[$portfolio_id] = (array) $v;
                }
            }
        }

        $res = $this->mobc->product_search_codeset($portfolio_ids);
        
        $codeset = [];
        if ($res->result->rows != null) {
            foreach ($res->result->rows as $k => $v) {
                if ($v->field_id == "6") $codeset[$v->portfolio_id]['tujuan_investasi'] = $v->field_data;
                if ($v->field_id == "10") $codeset[$v->portfolio_id]['risk_score'] = $v->field_data;
                if ($v->field_id == "14") $codeset[$v->portfolio_id]['subs_fee'] = $v->field_data;
                if ($v->field_id == "15") $codeset[$v->portfolio_id]['redm_fee'] = $v->field_data;
                if ($v->field_id == "16") $codeset[$v->portfolio_id]['swit_fee'] = $v->field_data;
            }
        }

        $data = [];
        for ($i = 0; $i < count($portfolio_ids); $i++) {
            $portfolio_id = $portfolio_ids[$i];
            $data[$i]['portfolio_id'] = $portfolio_ids[$i];
            $data[$i]['portfolio_name'] = $portfolio_name[$i];
            $data[$i]['position_date'] = empty($nav[$portfolio_id]['position_date']) ? '-' : date_format(date_create($nav[$portfolio_id]['position_date']), 'd M Y');
            $data[$i]['nav_per_unit'] = number_format($nav[$portfolio_id]['nav_per_unit'], 2);
            $data[$i]['mtd'] = ($nav[$portfolio_id]['r_mtd'] == null) ? '-' : $nav[$portfolio_id]['r_mtd'];
            $data[$i]['ytd'] = ($nav[$portfolio_id]['r_ytd'] == null) ? '-' : $nav[$portfolio_id]['r_ytd'];
            $data[$i]['1y'] = ($nav[$portfolio_id]['r_1y'] == null) ? '-' : $nav[$portfolio_id]['r_1y'];
            $data[$i]['2y'] = ($nav[$portfolio_id]['r_2y'] == null) ? '-' : $nav[$portfolio_id]['r_2y'];
            $data[$i]['tujuan_investasi'] = $codeset[$portfolio_id]['tujuan_investasi'];
            $data[$i]['risk_score'] = $codeset[$portfolio_id]['risk_score'];
            $data[$i]['subs_fee'] = ($codeset[$portfolio_id]['subs_fee'] == null || $codeset[$portfolio_id]['subs_fee'] == 'Tidak ada') ? '-' : $codeset[$portfolio_id]['subs_fee'];
            $data[$i]['redm_fee'] = ($codeset[$portfolio_id]['redm_fee'] == null || $codeset[$portfolio_id]['redm_fee'] == 'Tidak ada') ? '-' : $codeset[$portfolio_id]['redm_fee'];
            $data[$i]['swit_fee'] = ($codeset[$portfolio_id]['swit_fee'] == null || $codeset[$portfolio_id]['swit_fee'] == 'Tidak ada') ? '-' : $codeset[$portfolio_id]['swit_fee'];
        }

        return $data;
    }

    function profile()
    {
        $data = [];
        $data['session'] = $_SESSION;

        $res = $this->client->individu_load($_SESSION['client_id']);
        
        $individu = $res->result->rows[0];
        $data['individu'] = (array) $individu;

        $res = $this->client->client_kyc_search($_SESSION['client_id']);
        
        $kyc = $res->result->rows;
        $data['fatca'] = $kyc[array_search(46, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $data['tin_country'] = $kyc[array_search(59, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $data['tin'] = $kyc[array_search(58, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $data['tujuan_investasi'] = $kyc[array_search(1, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $data['sumber_dana'] = $kyc[array_search(15, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $data['tingkat_penghasilan'] = $kyc[array_search(3, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $data['kepemilikan_investasi'] = $kyc[array_search(44, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $alamat_ktp = $kyc[array_search(49, array_column($kyc, 'kyc_id'))]->kyc_answer;
        $alamat_domisili = $kyc[array_search(52, array_column($kyc, 'kyc_id'))]->kyc_answer;

        $res = $this->repo->address_load($alamat_ktp);
        
        $res = $res->result->rows[0];
        $data['ktp_address'] = (array) $res;

        $res = $this->repo->address_load($alamat_domisili);
        
        $res = $res->result->rows[0];
        $data['domisili_address'] = (array) $res;

        $res = $this->repo->identity_load($individu->sid_id);
        
        $identity = $res->result->rows[0];
        $data['identity'] = (array) $identity;

        $res = $this->param->parameter_idcard_type();
        
        $res = $res->result->rows;
        // log_message('error', $identity->identity_type);
        $key = array_search($identity->identity_type, array_column($res, 'type_id'));
        $data['idcardtype'] = (array) $res[$key];

        $res = $this->param->parameter_country();
        
        $res = $res->result->rows;
        $key = array_search($individu->nationality_id, array_column($res, 'country_id'));
        $data['country'] = (array) $res[$key];

        $res = $this->param->parameter_ccy();
        
        $res = $res->result->rows;
        $key = array_search($individu->ccy_id, array_column($res, 'ccy_id'));
        $data['currency'] = (array) $res[$key];

        $res = $this->param->parameter_religion();
        
        $res = $res->result->rows;
        $key = array_search($individu->religion_id, array_column($res, 'religion_id'));
        $data['religion'] = (array) $res[$key];

        $res = $this->param->parameter_occupation();
        
        $res = $res->result->rows;
        $key = array_search($individu->occupation_id, array_column($res, 'occupation_id'));
        $data['occupation'] = (array) $res[$key];

        $res = $this->param->parameter_education_level();
        
        $res = $res->result->rows;
        $key = array_search($individu->level_id, array_column($res, 'level_id'));
        $data['education'] = (array) $res[$key];

        $res = $this->param->parameter_risk_level();
        
        $res = $res->result->rows;
        $key = array_search($individu->risk_id, array_column($res, 'risk_id'));
        $data['risk'] = (array) $res[$key];

        $res = $this->param->parameter_business_activity();
        
        $res = $res->result->rows;
        $key = array_search($individu->officeactivity_id, array_column($res, 'activity_id'));
        $data['business'] = (array) $res[$key];

        $res = $this->repo->email_load($individu->correspondence_email_id);
        
        $res = $res->result->rows[0];
        $data['individu_email'] = (array) $res;

        $res = $this->repo->phone_load($individu->correspondence_phone_id);
        
        $res = $res->result->rows[0];
        $data['individu_phone'] = (array) $res;

        $res = $this->repo->address_load($individu->office_address_id);
        
        $res = $res->result->rows[0];
        $data['office_address'] = (array) $res;

        $res = $this->repo->phone_load($individu->office_phone_id);
        
        $res = $res->result->rows[0];
        $data['office_phone'] = (array) $res;

        $res = $this->repo->address_load($individu->correspondence_address_id);
        
        $res = $res->result->rows[0];
        $data['correspondence_address'] = (array) $res;

        return $data;
    }

    function summary($ccy_id)
    {
        $data = [];
        $data['session'] = $_SESSION;

        $res = $this->client->individu_load($_SESSION['client_id']);
        
        $individu = $res->result->rows[0];
        $data['individu'] = (array) $individu;

        $res = $this->mobc->product_search_product();
        $product_search_product = object_to_array($res->result->rows);

        // log_message('error', count($res->result->rows));
        $portfolio_ids = array_column($product_search_product ?? [], 'portfolio_id');

        $res = $this->mobc->product_search_portfolio($portfolio_ids);

        $product_search_portfolio = $res->result->rows;
        $arr1 = array_column($product_search_portfolio ?? [], 'portfolio_id');
        $arr2 = array_column($product_search_portfolio ?? [], 'portfolio_nameshort');
        $arr3 = array_column($product_search_portfolio ?? [], 'assettype_id');
        $portfolio = array_combine($arr1, $arr2);
        $assettype = array_combine($arr1, $arr3);

        $res = $this->unit->unit_nav_load($portfolio_ids, date("Y-m-d"));
        
        $unitNav = $res->result->rows[0];
        $position_date = $unitNav->position_date;

        $res = $this->unit->unit_balance_search($portfolio_ids, $ccy_id, $_SESSION['client_id'], $position_date);
        
        $unitBalance = object_to_array($res->result->rows);
        // log_message('error', 'unitBalance: '.count($unitBalance));

        $sum_unit_value = 0;
        $sum_cost_total = 0;
        $sum_unrealized = 0;
        foreach ($unitBalance ?? [] as $k => $v) {
            $unitBalance[$k]['portfolio_nameshort'] = $portfolio[$v['portfolio_id']];
            $unitBalance[$k]['assettype_id'] = $assettype[$v['portfolio_id']];
            $sum_unit_value += $v['unit_value'];
            $sum_cost_total += $v['cost_total'];
            $sum_unrealized += ($v['unit_value'] - $v['cost_total']);
        }
        // log_message('error', 'sum_unit_value: ' . $sum_unit_value);

        $res = $this->param->parameter_asset_type();
        
        $paramAssetType = object_to_array($res->result->rows);

        $allocate = array_reduce($unitBalance ?? [], function ($c, $i) {
            // log_message('error', 'assettype_id: ' . $i['assettype_id'] .' - '. $i['unit_value']);
            isset($c[$i['assettype_id']]) ? $c[$i['assettype_id']]['sum_asset_value'] += $i['unit_value'] : $c[$i['assettype_id']]['sum_asset_value'] = $i['unit_value'];
            return $c;
        });
        foreach ($allocate ?? [] as $k => $v) {
            $key = array_search($k, array_column($paramAssetType ?? [], 'type_id'));
            $allocate[$k]['desc'] = $paramAssetType[$key]['type_description'];
            $allocate[$k]['percentage'] = number_format($v['sum_asset_value'] / $sum_unit_value, 2);
        }
        $data['allocate'] = $allocate;
        // print_r($allocate);
        // print_r(array_values($sum));

        // FORMAT 
        foreach ($unitBalance ?? [] as $k => $v) {
            $unitBalance[$k]['unit_balance'] = number_format($v['unit_balance'], 2);
            $unitBalance[$k]['unit_price'] = number_format($v['unit_price'], 2);
            $unitBalance[$k]['unit_value'] = number_format($v['unit_value'], 2);
            $unitBalance[$k]['cost_total'] = number_format($v['cost_total'], 2);
            $unitBalance[$k]['unrealized'] = number_format($v['unrealized'], 2);
        }

        $data['rows'] = $unitBalance;
        $data['sum_unit_value'] = number_format($sum_unit_value, 2);
        $data['sum_cost_total'] = number_format($sum_cost_total, 2);
        $data['sum_unrealized'] = number_format($sum_unrealized, 2);
        $data['percentage'] = $sum_cost_total == 0 ? 0.0 : number_format($sum_unrealized / $sum_cost_total * 100, 2);

        $res = $this->unit->unit_balance_history($portfolio_ids, $ccy_id, $_SESSION['client_id'], $position_date);
        
        $unitHistory = object_to_array($res->result->rows);
        // log_message('error', 'unitHistory: ' . count($unitHistory));

        $history = array_reduce($unitHistory ?? [], function ($c, $i) {
            // log_message('error', 'assettype_id: ' . $i['assettype_id'] .' - '. $i['unit_value']);
            isset($c[$i['position_date']]) ? $c[$i['position_date']]['sum_value'] += $i['unit_value'] : $c[$i['position_date']]['sum_value'] = $i['unit_value'];
            return $c;
        });
        $data['history'] = $history;
        $data['historyMaxValue'] = $history == null ? null : max(array_column($history ?? [], 'sum_value'));
        // log_message('error', 'max value: ' . max(array_column($history, 'sum_value')));

        // print_r(array_column($history, 'sum_value'));
        // print_r($history);
        return $data;
    }

    function subscribe($from_date, $to_date)
    {
        $data = [];
        $data['session'] = $_SESSION;

        $res = $this->client->individu_load($_SESSION['client_id']);
        
        $individu = $res->result->rows[0];
        $data['individu'] = (array) $individu;

        $res = $this->order->subscription_search($from_date, $to_date);
        
        $subs = object_to_array($res->result->rows);
        $portfolio_ids = array_column($subs ?? [], 'portfolio_id');
        $portfolio_ids = array_unique($portfolio_ids);

        $res = $this->mobc->product_search_portfolio($portfolio_ids);
        $portfolio = [];
        foreach ($res->result->rows ?? [] as $k => $v) {
            $portfolio[$v->portfolio_id] = $v->portfolio_nameshort;
        }

        foreach ($subs ?? [] as $k => $v) {
            $subs[$k]['portfolio_nameshort'] = $portfolio[$v['portfolio_id']];
            $subs[$k]['order_date'] = date_format(date_create($v['order_date']), 'd M Y');
            $subs[$k]['batch_date'] = empty($v['batch_date']) ? '' : date_format(date_create($v['batch_date']), 'd M Y');
            $subs[$k]['status_code'] = $this->order->getStatusCode($v['status_id']);
            $subs[$k]['trx_amount'] = number_format($v['trx_amount'], 2);
            $subs[$k]['trx_unit'] = number_format($v['trx_unit'], 2);
            $subs[$k]['trx_price'] = number_format($v['trx_price'], 2);
            $subs[$k]['bukti_transfer'] = $this->order->getStatusPayment($v['status_id'], $v['status_verify'], $v['id_reason'], $v['verify_reason']);
            $subs[$k]['aksi_batal'] = $v['status_id'] == '1' && ($v['status_verify'] == '1' || $v['status_verify'] == '2');
        }
        $data['rows'] = $subs;

        return $data;
    }

    function redeem($from_date, $to_date)
    {
        $data = [];
        $data['session'] = $_SESSION;

        $res = $this->client->individu_load($_SESSION['client_id']);
        $individu_load = $res->result->rows ?? [];
        $data['individu'] = object_to_array($individu_load[0]);

        $res = $this->order->redemption_search($from_date, $to_date);
        $redemption_search = $res->result->rows ?? [];
        $portfolio_ids = array_column($redemption_search ?? [], 'portfolio_id');
        $portfolio_ids = array_unique($portfolio_ids);

        $res = $this->mobc->product_search_portfolio($portfolio_ids);
        $product_search_portfolio = $res->result->rows ?? [];
        $arr1 = array_column($product_search_portfolio ?? [], 'portfolio_id');
        $arr2 = array_column($product_search_portfolio ?? [], 'portfolio_nameshort');
        $portfolio_name = array_combine($arr1, $arr2);

        $redm = object_to_array($redemption_search);
        foreach ($redm ?? [] as $k => $v) {
            $redm[$k]['portfolio_nameshort'] = $portfolio_name[$v['portfolio_id']];
            $redm[$k]['order_date'] = date_format(date_create($v['order_date']), 'd M Y');
            $redm[$k]['batch_date'] = empty($v['batch_date']) ? '' : date_format(date_create($v['batch_date']), 'd M Y');
            $redm[$k]['status_code'] = $this->order->getStatusCode($v['status_id']);
            $redm[$k]['order_amount'] = number_format($v['order_amount'], 2);
            $redm[$k]['order_unit'] = number_format($v['order_unit'], 2);
            $redm[$k]['order_by'] = $v['order_by'] == '3' ? 'Y' : '';
            $redm[$k]['trx_net'] = number_format($v['trx_net'], 2);
            $redm[$k]['trx_unit'] = number_format($v['trx_unit'], 2);
            $redm[$k]['trx_price'] = number_format($v['trx_price'], 2);
            $redm[$k]['trx_amount'] = number_format($v['trx_amount'], 2);
            $redm[$k]['bukti_transfer'] = $this->order->getStatusPayment($v['status_id'], $v['status_verify'], $v['id_reason'], $v['verify_reason']);
            $redm[$k]['aksi_batal'] = $v['status_id'] == '1' && ($v['status_verify'] == '1' || $v['status_verify'] == '2');
        }
        $data['rows'] = $redm;

        return $data;
    }
}
