<?php
namespace app\admin\controller;
use think\Controller;
class Article  extends  Lock
{
	// 分页查询文章
    public function lst()
    { 

	   //db('admin')->select() 不分页查询

		   

		$articles=db('article')->order('id desc')->paginate(2);//分页查询所有文章 
		// 渲染数据
	    $this->assign('articles',$articles);
		// 渲染模板 
       return $this->fetch();
    }

	
	// 添加文章 模块
	public function add()

	{ 
		// 查询文章列表
		 $cates=db('cate')->select();
		// 渲染数据
		 $this->assign('cates',$cates);

		 
		// 判断请求的类型是否为post
		 if(request()->isPost()){

		 	
			// 获取数据，封装成数据模块
		 	$data=[

		 		'title'=>input('title'),

				'author'=>input('author'),

				'des'=>input('des'),

				'keywords'=>input('keywords'),

				'content'=>input('content'),

				'click'=>input('click'),

				'time'=>date('Y-m-d'),

				'cateid'=>input('cateid')

		 		

		 	];

			//文件上传功能开始

			if($_FILES['pic']['tmp_name']){

				

				// 获取表单上传文件 例如上传了001.jpg

				    $file = request()->file('pic');

				    

				    // 移动到框架应用根目录/public/uploads/ 目录下

				    if($file){

				        $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');

				        if($info){

				            // 成功上传后 获取上传信息

							// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

				           $data['pic'] ='uploads/'.$info->getSaveName();

				        }else{

				            // 上传失败获取错误信息

				            echo $file->getError();

				        }

				    }

				

				

			}

			

			//文件上传功能结束

			

		 	$article=db('article')->insert($data);  //增加功能
			// 判断是否添加成功
		 	if($article){

		 		$this->success('文章添加成功','Article/lst');

		 		

		 	}else{

		 		

		 		$this->error('文章添加失败');

		 	}

		 } 
		// 渲染模板
		 return $this->fetch();

	}	

	public function modify()

	{ 

		$id=input('id');

		$cates=db('cate')->select();

		$this->assign('cates',$cates);

		

		$article=db('article')->where('id','=',$id)->find();

	    $this->assign('article',$article); 

		return $this->fetch();

	}	

	

	

	public function update()

	{ 

		 $cates=db('cate')->select();

		 $this->assign('cates',$cates);

		 

		 if(request()->isPost()){

		 	

		 	$data=[

				'id'=>input('id'),

		 		'title'=>input('title'),

				'author'=>input('author'),

				'des'=>input('des'),

				'keywords'=>input('keywords'),

				'content'=>input('content'),

				'click'=>input('click'),

				'time'=>date('Y-m-d'),

				'cateid'=>input('cateid')

		 		

		 	];

			//文件上传功能开始

			if($_FILES['pic']['tmp_name']){

				

				// 获取表单上传文件 例如上传了001.jpg

				    $file = request()->file('pic');

				    

				    // 移动到框架应用根目录/public/uploads/ 目录下

				    if($file){

				        $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');

				        if($info){

				            // 成功上传后 获取上传信息

				          

				            

							// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

				           $data['pic'] ='uploads/'.$info->getSaveName();

				           

						

				        }else{

				            // 上传失败获取错误信息

				            echo $file->getError();

				        }

				    }

				

				

			}

			

			//文件上传功能结束

			

		 	$article=db('article')->update($data);  //增加功能

		 	if($article){

		 		$this->success('文章修改成功','Article/lst');

		 		

		 	}else{

		 		

		 		$this->error('文章修改失败');

		 	}

		 }

		 

		 

		 

		 return $this->fetch();

	}	
	// 删除文章 模块
	public function del()

	{
		// 获取id
		$id = input('id');
		// 从数据库中删除
		$del = db('article')->delete($id);
		// 判断是否删除成功
		if($del){

			$this->success('文章删除成功','Article/lst');

		}else{

			$this->error('文章删除失败');

		}
		// 渲染模板
		return $this->fetch();

	}

	
}
