<?php
namespace app\admin\controller;
use think\Controller;
class Login  extends  Controller
{
	// 登录 模块
    public function login()
    {
		// 判断请求的方式是否为post
		if(request()->isPost()){
			// 将请求参数封装成数据模块
			$data=[

				'username'=>input('username'),

				'password'=>input('password'),

				'code'=>input('code'),

			];

			
			// 查询数据库，对比用户名和密码是否正确
			$admin=db('admin')->where('username','=',$data['username'])->where('password','=',$data['password'])->find();
			// 把用户名存入session中
			session('username',$admin['username']);
			// 把用户id存入session中
			session('id',$admin['id']);

			
			// 新建一个验证码对象
			$captcha = new \think\captcha\Captcha();

			if(!$captcha->check($data['code'])){

				$this->error('验证码错误');

			}elseif($admin){

				$this->success('登录成功','Index/index');

			}else{

				$this->error('登录失败');

			}

		}

	   
       return $this->fetch();
    }
	// 退出登录
	public function logout()
	{
		// 把session设置为null
		session(null);

		$this->success('退出成功','Login/login');

	}
}
