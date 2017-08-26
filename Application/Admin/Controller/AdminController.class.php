<?php
namespace Admin\Controller;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 12:09
 */

class AdminController extends BaseController
{
        public function index()
        {
            $admin=D('admin');
            $count=$admin->count();
            $Page=new \Think\Page($count,2);
            $infos=$admin->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('infos',$infos);
            $this->assign('page',$Page->show());// 赋值分页输出
            $this->display();
        }

        public function add()
        {
            $admin=D('admin');
            if(IS_POST)
            {
                $data=I('info');
                $data['password']=md5($data['password']);
                if($admin->create($data)){
                    if($admin->add()){
                        $this->success("添加成功",U('index'));
                    }else{
                        $this->success("添加失败");
                    }
                }else{
                    $this->error($admin->getError());
                }
                return ;
            }
            $this->display();
        }

        public function edit()
        {
            $admin=D('admin');
            if(IS_POST){
                $data=I('info');
                $admin_s=$admin->find($data['id']);
                $password=$admin_s['password'];
                if($data['password']){
                    $data['password']=md5($data['password']);
                }else{
                    $data['password']=$password;
                }
                if($admin->create($data)){
                    $save=$admin->save();
                    if( $save !== false){
                        $this->success('修改管理员成功！',U('index'));
                    }else{
                        $this->error('修改管理员失败！');
                    }
                }else{
                    $this->error($admin->getError());
                }
                return ;
            }
            $id=I('id');
            $info=$admin->where(array('id'=>$id))->find();

            $this->assign('info',$info);
            $this->display();
        }
        public function  del()
        {
            $admin=D('admin');
            $id=I('id');

            if($id<=1){
                echo json_encode(array('code'=>1,'data'=>array('msg'=>'超级管理员不允许删除','url'=>U('index'))));
                retrun ;
            }
            if($admin->where(array("id"=>$id))->delete()){
               echo json_encode(array('code'=>1,'data'=>array('msg'=>'删除成功','url'=>U('index'))));
            }else{
                echo json_encode(array('code'=>0,'data'=>array('msg'=>'删除失败','url'=>U('index'))));
            }
        }


    public function logout(){
        session(null);

        $this->success('退出成功',U('admin/login/index'));
    }


}