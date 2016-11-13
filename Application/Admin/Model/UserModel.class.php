<?php
namespace Admin\Model;
use Think\Model;
/**
* 用户登录模型sub
*/
class UserModel extends Model
{
	protected $_auto = array ( 
	    array('userpwd','md5',1,'function') ,//对password字段在新增的时候使md5函数处理
	    array('userrepwd','md5',1,'function') ,//对password字段在新增的时候使md5函数处理
	    array('regtime','getTime',1,'function') ,
	 );

	protected $_validate = array(
    	array('username','','用户名已经存在！',0,'unique',1),//在新增的时候验证name字段是否唯一
    	array('username','checkName','用户名不符合要求！',0,'function'), //在新增的时候验证name字段是否符号规则
    	array('userrepwd','userpwd','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
    	array('userpwd','checkPwd','密码格式不正确',0,'function'), //自定义函数验证密码格式 
    	array('useremail','','邮箱已经存在！',0,'unique',1),//在注册时验证邮箱唯一性
    	array('useremail','email','邮箱格式不符合要求。'),
 	);

	function checkVerfy($verfycode){
		/* step1：验证验证码 */
		return check_verify($verfycode);
	}

	function checkUser($username,$userpwd)
	{
		/* step2：通过输入的用户名查找数据库
		 * 成功返回一维数组,用户名正确;否则返回null
		 * step3：用户名正确则继续验证密码
		 */
		$condition['username'] = ''.$username;
		$data = $this->where($condition)->select();
		
		if (!empty($data)) {
			for ($i=0; $i < count($data); $i++) { 
				if ($data[$i]['username'] == $username) {
					if ($data[$i]['userpwd'] != $userpwd) {
						return -1; /* 密码错误 */
					}else{
						return 0; /* 登录成功 */
					}
				}
			}
			
		}
		
		return -2; /* 用户名不存在 */
		
	}
}