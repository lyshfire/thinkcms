<?php
namespace Admin\Model;
use Think\Model;
/**
* 用户登录模型sub
*/
class UserModel extends Model
{
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
		$data = $this->getByUserName($username);
		if (!empty($data) && $data['username'] == $username) {
			if ($data['userpwd'] != $userpwd) {
				return -1;
			}else{
				return 0;
			}
		}else {
			return -2;
		}
	}
}