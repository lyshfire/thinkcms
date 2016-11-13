<?php
namespace Admin\Controller;
use Think\Controller;
//header('Content-type: application/x-www-form-urlencoded; charset=utf8');

class PasswordController extends Controller {
	public function index(){
		$this->display('Password/setpassword');
	}

}
?>