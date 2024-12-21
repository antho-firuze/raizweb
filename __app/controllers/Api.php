<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

include_once dirname(__FILE__) . '/../libraries/RaizAuth.php';
include_once dirname(__FILE__) . '/../libraries/RaizClient.php';
include_once dirname(__FILE__) . '/../libraries/RaizMarket.php';
include_once dirname(__FILE__) . '/../libraries/RaizMaster.php';
include_once dirname(__FILE__) . '/../libraries/RaizMOBC.php';
include_once dirname(__FILE__) . '/../libraries/RaizOrder.php';
include_once dirname(__FILE__) . '/../libraries/RaizParameter.php';
include_once dirname(__FILE__) . '/../libraries/RaizRepo.php';
include_once dirname(__FILE__) . '/../libraries/RaizUnit.php';
include_once dirname(__FILE__) . '/../helpers/myarray_helper.php';
include_once dirname(__FILE__) . '/../helpers/rpc_helper.php';
include_once dirname(__FILE__) . '/../helpers/myarray_helper.php';
include_once dirname(__FILE__) . '/../helpers/mydate_helper.php';

class Api extends CI_Controller
{
    private $auth;

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
        parent::__construct();
        $this->auth = new Raiz\Auth();

        $this->client = new Raiz\Client();
        $this->market = new Raiz\Market();
        $this->mobc = new Raiz\Mobc();
        $this->order = new Raiz\Order();
        $this->param = new Raiz\Parameter();
        $this->repo = new Raiz\Repo();
        $this->unit = new Raiz\Unit();

        $this->load->helper(['url', 'cookie']);
        $this->load->library('session');
    }

    public function _remap($method, $params = array())
    {
        // foreach ($_SESSION ?? [] as $k => $v) {
        //     log_message('error', $k .' : ' . $_SESSION[$k]);
        // }
        log_message('error', 'api->token_id: ' . $_SESSION['token_id']);

        if (method_exists($this, $method)) {
            $needToken = [
                'subscribe_search', 
                'subscribe_add', 
                'subscribe_cancel', 
                'ifua_list',
                'client_bank_account',
            ];
            if (in_array($method, $needToken)) {
                if ($_SESSION['token_id'] == null) {
                    // log_message('error', 'token: null');
                    rpc_fail('Please Sign In !');
                }

                if ($this->auth->checkToken($_SESSION['token_id']) != true) {
                    // log_message('error', 'token: invalid');
                    rpc_fail('Invalid Token !');
                }

                // log_message('error', 'token: valid');
            }

            return call_user_func_array(array($this, $method), $params);
        }
        rpc_fail('API Not Found !');
    }

    function index()
    {
        log_message('error', date('Y-m-d'));
        // rpc_done(rpc_params());
        // rpc_done(rpc_params('identifier'));
        rpc_fail('Unknown Request !');
        // rpc_done('this is success');
        // echo phpinfo();
    }

    public function signin()
    {
        $res = $this->auth->signIn(rpc_params('email'), rpc_params('password'));
        if ($res->status == false)
            rpc_fail($res->message ?? 'Email or Password is not correct !');

        // $this->session->set_userdata((array) $res->result);
        foreach ((array) $res->result ?? [] as $k => $v) {
            $_SESSION[$k] = $v;
        }

        rpc_done('Login Success, welcome !');
    }

    public function signout()
    {
        session_destroy();
        rpc_done('Logout Success, thank you !');
    }

    function running_text()
    {
        $res = $this->market->running_text();
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;
        $data = array_column($data ?? [], 'rt_text');

        rpc_done($data);
    }

    function market_company_load()
    {
        $res = $this->market->company_load(rpc_params('company_id'));
        $data = $res->result->rows;

        rpc_done($data);
    }

    function mobc_product_list()
    {
        $res = $this->mobc->product_search_product();
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;
        $portfolio = array_column($data ?? [], 'portfolio_id');

        $res = $this->mobc->product_search_portfolio($portfolio);
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        rpc_done($data);
    }

    function mobc_product_search_account()
    {
        $portfolio_ids = rpc_params('portfolio_id') ?? '';
        $portfolio_ids = explode(',', $portfolio_ids);

        $res = $this->mobc->product_search_account($portfolio_ids);
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        $data = filter_array($data, 'account_type', rpc_params('account_type') ?? 'S');
        $data = filter_array($data, 'account_id', rpc_params('account_id'));

        rpc_done($data);
    }

    function parameter_ccy()
    {
        $res = $this->param->parameter_ccy();
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;
        $data = filter_array($data, 'ccy_id', rpc_params('ccy_id'));

        rpc_done($data);
    }

    function subscribe_search()
    {
        $from_date = date_convert(rpc_params('from_date'));
        $to_date = date_convert(rpc_params('to_date'));

        $res = $this->order->subscription_search($from_date, $to_date);
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        rpc_done($data);
    }

    function subscribe_add()
    {
        $res = $this->order->subscription_add(rpc_params());
        if ($res->status == false)
            rpc_fail($res->message ?? 'Proses gagal !');

        rpc_done('Data berhasil di simpan !');
    }

    function subscribe_cancel()
    {
        $res = $this->order->subscription_cancel(rpc_params('order_id'));
        if ($res->status == false)
            rpc_fail($res->message ?? 'Proses gagal !');

        rpc_done('Pembatalan berhasil !');
    }

    function subscribe_upload()
    {
        $res = $this->order->subscription_upload(rpc_params('order_id'), 'user_file');
        if ($res->status == false)
            rpc_fail($res->message ?? 'Upload Bukti Transfer Gagal !');

        rpc_done('Upload Bukti Transfer Berhasil !');
    }

    function redeem_add()
    {
        $res = $this->order->redemption_add(rpc_params());
        if ($res->status == false)
            rpc_fail($res->message ?? 'Proses gagal !');

        rpc_done('Data berhasil di simpan !');
    }

    function redeem_cancel()
    {
        $res = $this->order->redemption_cancel(rpc_params('order_id'));
        if ($res->status == false)
            rpc_fail($res->message ?? 'Proses gagal !');

        rpc_done('Pembatalan berhasil !');
    }

    function redeem_upload()
    {
        $res = $this->order->redemption_upload(rpc_params('order_id'), 'user_file');
        if ($res->status == false)
            rpc_fail($res->message ?? 'Upload Bukti Transfer Gagal !');

        rpc_done('Upload Bukti Transfer Berhasil !');
    }

    function client_individu()
    {
        $res = $this->client->individu_load($_SESSION['client_id']);
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        rpc_done($data);
    }
    
    function client_individu_search_sub()
    {
        $res = $this->client->individu_search_sub();
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        rpc_done($data);
    }
    
    function client_bank_account()
    {
        $res = $this->client->bank_account();
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        $data = filter_array($data, 'account_id', rpc_params('account_id'), false);

        rpc_done($data);
    }

    function repo_identity()
    {
        $res = $this->repo->identity_load(rpc_params('identity_id'));
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $data = $res->result->rows;

        rpc_done($data);
    }

    function ifua_list()
    {
        $res = $this->client->individu_search_sub();
        if ($res->status == false)
            rpc_fail($res->message ?? '');

        $individu = object_to_array($res->result->rows);

        foreach ($individu ?? [] as $k => $v) {
            $res = $this->repo->identity_load($v['ifua_id']);
            if ($res->status == false)
                rpc_fail($res->message ?? '');

            $identity = object_to_array($res->result->rows[0]);

            $individu[$k] = array_merge($individu[$k], $identity);
        }

        $data = $individu;

        rpc_done($data);
    }

    function portfolio_client_list()
    {
        $res = $this->unit->unit_nav_load([], date("Y-m-d"));
        $unit_nav_load = $res->result->rows ?? [];
        $position_date = $unit_nav_load[0]->position_date;

        $res = $this->unit->unit_balance_search_for_redeem(rpc_params('client_id'), $position_date);
        $unit_balance_search_for_redeem = $res->result->rows ?? [];
        $portfolio_ids = array_column($unit_balance_search_for_redeem ?? [], 'portfolio_id');
        
        $res = $this->mobc->product_search_portfolio($portfolio_ids);
        $product_search_portfolio = $res->result->rows ?? [];
        $arr1 = array_column($product_search_portfolio ?? [], 'portfolio_id');
        $arr2 = array_column($product_search_portfolio ?? [], 'portfolio_nameshort');
        $arr3 = array_column($product_search_portfolio ?? [], 'portfolio_code');
        $portfolio_name = array_combine($arr1, $arr2);
        $portfolio_code = array_combine($arr1, $arr3);

        $unit_balance_search_for_redeem = object_to_array($unit_balance_search_for_redeem);
        foreach ($unit_balance_search_for_redeem ?? [] as $k => $v) {
            $unit_balance_search_for_redeem[$k]['portfolio_nameshort'] = $portfolio_name[$v['portfolio_id']];
            $unit_balance_search_for_redeem[$k]['portfolio_code'] = $portfolio_code[$v['portfolio_id']];
        }

        rpc_done($unit_balance_search_for_redeem);
    }
}
