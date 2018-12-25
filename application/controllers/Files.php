<?php 

class Files extends CI_Controller{

	public function index(){

		$this->load->view("upload_view");
	}

	public function test(){

		echo "test";
	}
}

 ?>