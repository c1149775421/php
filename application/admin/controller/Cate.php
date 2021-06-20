<?php
namespace app\admin\controller;
use think\Controller;
class Cate  extends  Lock
{
	// 分页查询文章列表
    public function lst()
    {

		// $list=db('admin')->select();不分页查询

		$list=db('cate')->order('id desc')->paginate(2);//分页查询

		$this->assign('list',$list);
		return $this->fetch();
    }

	

	

	public function add()

	{

		if(request()->isPost()){

			$data=[

				'catename'=>input('catename')

			];

			

			$admin=db('cate')->insert($data);

		

			if($admin){

				$this->success('栏目添加成功','Cate/lst');

			}else{

				$this->error('栏目添加失败');

			}

		}

		return $this->fetch();

	}

	

	//前往修改页面

	public function modify()

	{

		$id=input('id');

		$edit=db('cate')->find($id);

		// $edit=db('admin')->where('id','=',$id)->find();

		$this->assign('cate',$edit);

		return $this->fetch();

	}

	//实现修改功能

	public function update()

	{

		$id=input('id');

		$date=[

			'catename'=>input('catename'),

		];

		$update=db('cate')->where('id','=',$id)->update($date);

		if($update){

			$this->success('栏目修改成功','Cate/lst');

		}else{

			$this->error('栏目修改失败');

		}

	}

	

	public function del()

	{

		$id = input('id');

		$del = db('cate')->delete($id);

		if($del){

			$this->success('栏目删除成功','Cate/lst');

		}else{

			$this->error('栏目删除失败');

		}

		return $this->fetch();

	}

	
}
