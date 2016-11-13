<?php
namespace Admin\Controller;
use Think\Controller;
//header('Content-type: application/x-www-form-urlencoded; charset=utf8');

class RegisterController extends Controller {
	public function index(){
		$this->assign('title',"系统管理员注册");
		$this->display('Register/register');
	}

	public function registerUser(){
		$User = D("User"); // 实例化User对象
		if (!$User->create()) {
			$data = array(
				"ret"  => false,
				"info" =>"".$User->getError(),
				);

		}else{
			$result = $User->add(); // 写入数据到数据库
			if ($result) {
				$data = array("ret" => true);
			}else{
				$data = array(
					"ret"  => false,
					"info" => "写数据库失败",	
					);
			}
		}

		$this->ajaxReturn($data);
	}

}
?>