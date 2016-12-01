<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita extends CI_Controller {



	public function index()
	{
		$this->load->view('ceritaku');
	}
}
