<?php
namespace Admin\Model;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 14:54
 */
use Think\Model;
class AdminModel extends Model
{
        protected  $_validate=array(
            array('username','require','管理员名称不得为空！',1,'regex',3),
            array('password','require','密码不得为空！',1,'regex',1),
            array('username','','管理员名称不得重复！',1,'unique',3),
            array('username','require','管理员名称不得为空！',1,'regex',4),
            array('password','require','密码不得为空！',1,'regex',4),
            array('verify','check_verify','验证码错误！',1,'callback',4),
        );

    public function login()
    {
        $password=$this->password;
        $info=$this->where(array('username'=>$this->username))->find();
        if($info&&md5($password)==$info['password']){
            session('uid',$info['id']);
            session('uname',$info['username']);
            return true;
        }else{
            return false;
        }
    }

    public function check_verify($code,$id=''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}