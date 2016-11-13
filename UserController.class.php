<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	private $messageList="";
	 
	public function userLogined(){	
		$this->assign('username',session('username'));	
        $this->display('Admin/index');
    }
	public function userLogin(){
		$result = $this->checkUser();
		if ($result){
			//$this->success("登录成功!");
			session('username',trim(I('param.username','')));
			$this->assign('username',session('username'));
			$this->display('Admin/index');
		}else {			
			$this->error($this->messageList);	
		}
	}
	private  function checkUser(){
		$UserName  = $con['username']  = trim(I('param.username',''));
		$UserPwd   = md5(I('param.userpwd',''));
		$VerfyCode = I('param.verfycode','');

		
		if (!check_verify($VerfyCode)){
			$this->messageList = "验证码错误";
			return false;
		}
		$user = M("User");
		$data = $user->where($con)->select();
		
		if (!empty($data)){	
			if ($data[0]['userpwd'] == $UserPwd){
				return true;
			}	
			$this->messageList = "密码错误";			
		}else {
			$this->messageList = "用户不存在";
		}	
		return false;
	}
	
}