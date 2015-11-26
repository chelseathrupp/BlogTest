<?php 

class AjaxResponse{

	public $success;
	public $error_code;
	public $error_msg;
	public $data;


	public function __construct($success = false, $error_code = 0, $error_msg = '', $data = array()){

		$this->success = $success;
		$this->error_code = $error_code;
		$this->error_msg = $error_msg;
		$this->data = $data;

	}

	public function toArray(){

		$array = ['success' => $this->success, 'error_code' => $this->error_code, 'error_msg' => $this->error_msg,
		 'data' => $this->data];

		 return $array;
	}
}