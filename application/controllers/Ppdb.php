<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
		public function __construct() {
			parent::__construct();
		}
		/* the rest of your code... */
	public function index()
	{
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('PPDB/index', $data);
		$this->load->view('komponen/footer', $data);
	}
}
