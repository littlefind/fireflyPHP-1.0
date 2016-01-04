<?php

/**
 * 前台首页控制器
 * User: find35.com
 * Date: 15/12/24
 * Time: 下午5:44
 */
class Home extends Controller
{
    public function index($data = array()){
        //加载首页页面
        $this->show('index/index',$data);
    }
}





