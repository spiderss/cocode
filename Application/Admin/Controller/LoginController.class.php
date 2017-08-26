<?php
namespace Admin\Controller;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 12:09
 */
use Think\Controller;
class LoginController extends Controller
{
        public function index()
        {
            $admin=D('admin');
            if(IS_POST){
                if($admin->create($_POST,4)){
                    if($admin->login()){
                        $this->success("登录成功",U('admin/index'));
                    }else{
                        $this->error("用户名或密码错误");
                    }
                }else{
                    $this->error($admin->getError());
                }
                return ;
            }
           $this->display();
        }

        public function getVerfiy(){
            $Verify =     new \Think\Verify();
            $Verify->fontSize = 30;
            $Verify->length   = 4;
            $Verify->useNoise = true;
            $Verify->entry();
        }



}