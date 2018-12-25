<?php 

class Files extends CI_Controller{

	public function index(){

		$viewData["images"] = $this->db->get("files")->result();

		$this->load->view("upload_view", $viewData);
	}

	public function upload(){

		// $config["allowed_types"] = "*";	-> Tüm dosyalar...
		$config["allowed_types"] 	= "jpg|gif|png|jpeg";
		$config["upload_path"] 		= "uploads/";

		$this->load->library("upload", $config);

		//do_upload() metodu true veya false olarak bir deger dondurur.(islem basarili veya basarisiz)
		if ($this->upload->do_upload("file")) {
		 	
			$file_name = $this->upload->data("file_name");

			$data = array(

				"file_name" => $file_name,
				"file_url" => base_url("uploads/$file_name")
			);

			$insert = $this->db->insert("files", $data);
		 } 

		 else{

		 	echo "Başarısız";
		 }
	}
}

 ?>