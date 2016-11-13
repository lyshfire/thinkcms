<?php

/* 验证验证码 */
function check_verify($code, $id = ''){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

/* 验证用户名格式 */
function checkName($username){
    if(!preg_match('/^\S+[a-z A-Z]$/', $username)){
        return false;
    }else{
        return true;
    }
}

/* 验证密码格式 */
function checkPwd($userpwd){
    if(!preg_match('/^[a-zA-Z0-9_]{5,15}$/', $userpwd)){
        return false;
    }else{
        return true;
    }
}

/* 自动填充注册时间 */
function getTime(){
    return date("Y-m-d h:i:s");
}