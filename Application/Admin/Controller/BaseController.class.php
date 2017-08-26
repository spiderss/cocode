<?php
namespace Admin\Controller;
/**
 * Created by PhpStorm.
 * User: zyl006
 * Date: 2017/8/25
 * Time: 12:17
 */
use  Think\Controller;
class BaseController extends Controller
{
        public function __construct()
        {
            parent::__construct();
            if(!session('uid'))
                $this->error("请先登录",U('admin/login/index'));
        }
}