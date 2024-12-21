<?php defined('BASEPATH') or exit('No direct script access allowed');

include_once dirname(__FILE__) . '/../libraries/RaizAuth.php';
include_once dirname(__FILE__) . '/../libraries/RaizService.php';

include_once dirname(__FILE__) . '/../helpers/rpc_helper.php';
include_once dirname(__FILE__) . '/../helpers/mydate_helper.php';

class Frontend extends CI_Controller
{
	private $auth;
	private $raiz;

	function __construct()
	{
		parent::__construct();
		$this->auth = new Raiz\Auth();
		$this->raiz = new Raiz\Service();

		$this->load->helper(['url', 'cookie']);
		$this->load->library('session');
	}

	public function _remap($method, $params = array())
	{
		// log_message('error', 'session-key: ' . join(' | ', array_keys($_SESSION)));
		// log_message('error', 'session-val: ' . join(' | ', $_SESSION));
		log_message('error', 'fro->token_id: ' . $_SESSION['token_id']);
		log_message('error', 'client_id: ' . $_SESSION['client_id']);
		setcookie("base_url", base_url(), time() + (86400 * 30), "/"); // 86400 = 1 day

		if (method_exists($this, $method)) {
			$needToken = ['entry', 'profile', 'summary', 'subscribe', 'redeem'];
			if (in_array($method, $needToken)) {
				if ($_SESSION['token_id'] == null) {
					// log_message('error', '_remap => token: null');
					setcookie("isSignin", 0, time() + (86400 * 30), "/"); // 86400 = 1 day
					show_error('Please Sign In !', 0, 'Information');
				}

				if ($this->auth->checkToken($_SESSION['token_id']) != true) {
					// log_message('error', '_remap => token: invalid');
					setcookie("isSignin", 0, time() + (86400 * 30), "/"); // 86400 = 1 day
					show_error('Please Sign In !', 0, 'Invalid Token');
				}

				// log_message('error', '_remap => token: valid');
				setcookie("isSignin", 1, time() + (86400 * 30), "/"); // 86400 = 1 day
			} else {
				if ($this->auth->checkToken($_SESSION['token_id']) == false) {
					// log_message('error', '_remap => token: invalid');
					// session_destroy();
					setcookie("isSignin", 0, time() + (86400 * 30), "/"); // 86400 = 1 day
				} else {
					// log_message('error', '_remap => token: valid');
					setcookie("isSignin", 1, time() + (86400 * 30), "/"); // 86400 = 1 day
				}
			}

			return call_user_func_array(array($this, $method), $params);
		}
		show_404();
	}


	public function index()
	{
		$data['running_text'] = $this->raiz->running_text();
		$data['products'] = $this->raiz->products();

		$this->load->view('index', $data);
	}

	public function entry()
	{
		$this->load->view('entry');
	}

	public function profile()
	{
		$data = $this->raiz->profile();
		$this->load->view('profile', $data);
	}

	public function summary()
	{
		$ccy_id = rpc_params('ccy_id') ?? 1;
		$data = $this->raiz->summary($ccy_id);
		$this->load->view('summary', $data);
	}

	public function subscribe()
	{
		$from_date = date_convert(rpc_params('from_date'));
		$to_date = date_convert(rpc_params('to_date'));

		$data = $this->raiz->subscribe($from_date, $to_date);
		$this->load->view('subscribe', $data);
	}

	public function redeem()
	{
		$from_date = date_convert(rpc_params('from_date'));
		$to_date = date_convert(rpc_params('to_date'));

		$data = $this->raiz->redeem($from_date, $to_date);
		$this->load->view('redeem', $data);
	}

	public function history()
	{
		$this->load->view('history');
	}

	public function nabung()
	{
		$this->load->view('nabung');
	}
}
