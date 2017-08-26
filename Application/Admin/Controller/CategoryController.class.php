<?php
namespace Admin\Controller;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 12:09
 */

class CategoryController extends BaseController
{
        public function index()
        {
            $cate=D('cate');
            $infos=$cate->order('sort asc')->select();
            $this->assign('infos',$infos);
            $this->display();
        }

        public function add()
        {
            $cate=D('cate');

            if(IS_POST)
            {
                $data['catename']=I('catename');
                if($cate->create($data)){
                    if($cate->add()){
                        $this->success("添加成功",U('index'));
                    }else{
                        $this->success("添加失败");
                    }
                }else{
                    $this->error($cate->getError());
                }
                return ;
            }
            $this->display();
        }

        public function edit()
        {
            $cate=D('cate');
            if(IS_POST){
                $data['catename']=I('catename');
                $data['id']=I('id');
                if($cate->create($data)){
                    $save=$cate->save();
                    if( $save !== false){
                        $this->success('修改栏目成功！',U('index'));
                    }else{
                        $this->error('修改栏目失败！');
                    }
                }else{
                    $this->error($cate->getError());
                }
                return ;
            }
            $id=I('id');
            $info=$cate->where(array('id'=>$id))->find();
            $this->assign('info',$info);
            $this->display();
        }
        public function  del()
        {
            $cate=D('cate');
            if($cate->delete(I('id'))){
               echo json_encode(array('code'=>1,'data'=>array('msg'=>'删除成功','url'=>U('index'))));
            }else{
                echo json_encode(array('code'=>0,'data'=>array('msg'=>'删除失败','url'=>U('index'))));
            }
        }

        public function listorder(){
             //$sort=I('sort');
             $cate=D('cate');
            foreach ($_POST as $id => $sort) {
                $cate->where(array('id'=>$id))->setField('sort',$sort);
            }
            $this->success('排序成功！',U('index'));
        }
}