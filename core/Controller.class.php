<?php

/**
 * 所有控制器的基类
 * User: find35.com
 * Date: 15/12/26
 * Time: 上午9:53
 */
class Controller
{
    /**
     * 加载指定的模板页面
     * @param $page
     * @param array $data
     */
    public function show($page,$data=array()){
        $url = "app/views/".$page.".php";
        //判断页面是否存在
        if(file_exists($url)){
            require_once $url;
        }
    }
}