<?php
namespace app\admin\controller;
use think\Controller;
class Admin  extends  Lock
{
	// 获取管理员列表 模块
    public function lst()
    {

		// $list=db('admin')->select();不分页查询

		$list=db('admin')->paginate(2);//分页查询

		$this->assign('list',$list);//数据分派
		return $this->fetch();//显示模板
    }

	
	// 添加管理员 模块
	public function add()

	{
		// 如果请求方式为post
		if(request()->isPost()){
			// 获取发送的数据，封装成数据模块
			$data=[

				'username'=>input('username'),

				'password'=>input('password')

			];
			// 把获取的数据写入数据库
			$admin=db('admin')->insert($data);

		
			// 如果写入数据库成功
			if($admin){
				// 返回提示信息
				$this->success('管理员添加成功','Admin/lst');

			}else{

				$this->error('管理员添加失败');

			}

		}
		// 显示模板
		return $this->fetch();

	}

	//前往修改页面
	public function modify()

	{
		// 获取传过来的id
		$id=input('id');
		// 根据id定位到对应的用户
		$edit=db('admin')->find($id);

		// $edit=db('admin')->where('id','=',$id)->find();
		// 渲染数据
		$this->assign('admin',$edit);
		// 显示模板
		return $this->fetch();

	}

	//实现修改功能
	public function update()

	{
		// 获取传过来的id
		$id=input('id');
		// 获取发送的数据，封装成数据模块
		$date=[

			'username'=>input('username'),

			'password'=>input('password')

		];
		// 权限判断
		if($id=="3"){
			// 根据id查找到对应的用户，更新用户信息
			$update=db('admin')->where('id','=',$id)->update($date);
			// 判断是否成功
			if($update){

				$this->success('管理员修改成功','Admin/lst');

			}else{

				$this->error('管理员修改失败');

			}

		}else{

			$this->error('你没有修改权限','Admin/lst');

		}

		

	}

	
	// 删除用户 模块
	public function del()

	{
		// 获取传过来的id
		$id = input('id');
		// 查询所有用户列表
		$min=db('admin')->select();
		// 如果列表的管理员数量只有一个
		if(count($min)<=1){
			// 不执行删除，温馨提醒后跳转添加管理员界面
			$this->error('就剩一个管理员了,请先添加一个超级管理员再删除','Admin/add');

		}else{
			// 权限判断
			if($id=="3"){
				// 根据id删除对应的用户
				$del = db('admin')->delete($id);
				// 判断是否删除成功
				if($del){

					$this->success('管理员删除成功','Admin/lst');

				}else{

					$this->error('管理员删除失败');

				}

			}else{

				$this->error('你没有删除权限','Admin/lst');

			}

			

		}
		// 显示模板
		return $this->fetch();

	}
}
