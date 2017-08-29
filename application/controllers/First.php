<?php 
	class First extends CI_Controller {

		public function index() {
			$this->load->view('uploadfile');
		}

		public function uploadFile() {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|png|jpg|txt|xlsx';
			$this->load->library('upload', $config);

			$upload = $this->upload->do_upload('filename');

			if ($upload!=null)
			{
				echo "Success Upload";
			}
			else
			{
				echo "Failed";
			}

			
		}
	}
