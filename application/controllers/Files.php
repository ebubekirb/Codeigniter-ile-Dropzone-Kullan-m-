<?php 

class Files extends CI_Controller{

	public function index(){

		$this->load->view("upload_view");
	}

	public function upload(){

		// $config["allowed_types"] = "*";	-> Tüm dosyalar...
		$config["allowed_types"] 	= "jpg|gif|png";
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