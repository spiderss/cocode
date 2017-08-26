<?php
namespace Admin\Controller;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 12:09
 */

class LinkController extends BaseController
{
        public function index()
        {
            $link=D('link');
            $count=$link->count();
            $Page=new \Think\Page($count,2);
            $infos=$link->order('sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('infos',$infos);
            $this->assign('page',$Page->show());// 赋值分页输出
            $this->display();
        }

        public function add()
        {
            $link=D('link');

            if(IS_POST)
            {
                $data=I('info');
                if($link->create($data)){
                    if($link->add()){
                        $this->success("添加成功",U('index'));
                    }else{
                        $this->success("添加失败");
                    }
                }else{
                    $this->error($link->getError());
                }
                return ;
            }
            $this->display();
        }

        public function edit()
        {
            $link=D('link');
            if(IS_POST){
                $data=I('info');

                if($link->create($data)){
                    $save=$link->save();
                    if( $save !== false){
                        $this->success('修改链接成功！',U('index'));
                    }else{
                        $this->error('修改链接失败！');
                    }
                }else{
                    $this->error($link->getError());
                }
                return ;
            }
            $id=I('id');
            $info=$link->where(array('id'=>$id))->find();
            $this->assign('info',$info);
            $this->display();
        }
        public function  del()
        {
            $link=D('link');
            if($link->delete(I('id'))){
               echo json_encode(array('code'=>1,'data'=>array('msg'=>'删除成功','url'=>U('index'))));
            }else{
                echo json_encode(array('code'=>0,'data'=>array('msg'=>'删除失败','url'=>U('index'))));
            }
        }

        public function listorder(){
             //$sort=I('sort');
             $link=D('link');
            foreach ($_POST as $id => $sort) {
                $link->where(array('id'=>$id))->setField('sort',$sort);
            }
            $this->success('排序成功！',U('index'));
        }
}