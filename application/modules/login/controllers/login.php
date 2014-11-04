<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends MY_Controller {

	public $login_status = false;

	function __construct() {

		parent::__construct();		
		$this->load->library("Aauth");
	}

	public function index() {
		$this->load->view("login_v");
	}
	
	public function login_func(){
		$email = $_POST['email-l'];
		$pass = $_POST['pass'];
		
	 	if ($this->aauth->login($email, $pass)){
            echo 'Logged in';
        }else{
            echo 'Invalid username password combination';
		}
	}
	
	public function register_user(){
		$email =  $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$c_pass = $_POST['c-pass'];
		$ban = 0;
		$userid = "";
		
		$verification_code = md5($email);
		if($pass === $c_pass){
			 // $a = $this->aauth->create_user($email, $pass, $username,$ban,NULL,NULL,NULL,NULL,NULL,NULL,$verification_code,NULL,0);
			 $a = $this->aauth->create_user($email, $pass, $username);
	        if ($a){
	        	$this->aauth->login($email, $pass);//log in the registered user
				$userid = $this->aauth->get_user_id($email);//get this users id
				//$this->aauth->send_verification($userid);//send user verification mail email server needed
				$this->aauth->logout();//log out user
				echo "Created";
	        }else{
	            echo "Not created";
			}
		}else{
			echo "Passwords do not match";
		}
        //print_r($this->aauth->get_user($a));
        // $this->aauth->print_errors();
	}
	
	
	public function send_verification(){
		$this->aauth->reset_password($user_id, $ver_code);//verification code unknown		
		echo "<pre>";
		print_r($userinfo);
		echo "</pre>"; 
		die;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
