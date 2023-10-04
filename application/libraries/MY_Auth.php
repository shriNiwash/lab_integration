<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Auth {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function isLoggedIn() {
        return $this->CI->session->userdata('user_id');
    }

    public function login($user_id) {
        $this->CI->session->set_userdata('user_id', $user_id);
    }

    public function logout() {
        $this->CI->session->unset_userdata('user_id');
    }
}
