<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instamojo extends CI_Controller {

	public function index() {
		echo "success";
	}
    
    public function payment() {
    	$logfile = APPPATH . 'logs/debug.log';
	$bt = debug_backtrace();
	$caller = array_shift($bt);
	$path = explode('/', $caller['file']);
	$line = date('Y-m-d h:i:sa') . ' -> ' . $path[count($path) - 2] . '/' . $path[count($path) - 1] . ' -> ' . $caller['line'] . ': ';
	file_put_contents($logfile, $line . 'amount => '. $this->input->post('amount').
		. 'buyer => '.$this->input->post('buyer').
		. 'buyer_name => '.$this->input->post('buyer_name').
		. 'buyer_phone => '.$this->input->post('buyer_phone').
		. 'currency => '.$this->input->post('currency').
		. 'fees => '.$this->input->post('fees').
		. 'longurl => '.$this->input->post('longurl').
		. 'mac => '.$this->input->post('mac').
		. 'payment_id => '.$this->input->post('payment_id').
		. 'payment_request_id => '.$this->input->post('payment_request_id').
		. 'purpose => '.$this->input->post('purpose').
		. 'shorturl => '.$this->input->post('shorturl').
		. 'status => '.$this->input->post('status') . "\n", FILE_APPEND);
	
		
	}
}
?>