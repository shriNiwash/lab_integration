<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
	  parent::__construct();
	  $this->load->helper('url');
	  $this->load->library('my_auth');

	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$apiEndpoint = 'https://uat.tez.hospital/xzy/lis/login';
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$requestData = array(
			'username' => $username,
			'password' => $password
		);

		$requestDataJson = json_encode($requestData);
	
		$headers = array(
			'Content-Type: application/json; charset=UTF-8',
		);
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $requestDataJson); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		$response = curl_exec($ch);
		$responseData = json_decode($response);
		// print_r($responseData);die;
		if($responseData->status == 200)
		{
			$session_data = array(
				'id'                     => $responseData->id,
				'username'               => $responseData->record->username,
				'employeid'              => $responseData->record->employee_id,
				'roles'                  => $responseData->record->role,
				'timezone'               => $responseData->record->timezone
			  );
  
			  $this->my_auth->login($session_data);
			  redirect('pathology');
		}
		else{
			redirect('system');
		}
	
	}
	
	

}
