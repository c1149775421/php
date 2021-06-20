<?php
namespace app\admin\controller;
use think\Controller;
class Index  extends  Lock
{
    // 后台主页 模块
    public function index()
    {
        // 渲染模板
        return $this->fetch();
    }
}
