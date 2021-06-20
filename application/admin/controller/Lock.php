<?php
namespace app\admin\controller;
use think\Controller;
class Lock  extends  Controller
{
	// 全局锁
	public function _initialize()

	{
		// 判断session中是否存在用户名
		if(!session('username')){

			return $this->success('请先登录!','Login/login');

		}

	}
}
