<?php
namespace app\index\controller;
use think\Controller;
class Article  extends  Controller
{
    public function article()
    {
	  $cates=db('cate')->select();//查询所有的数据
	  
	  $this->assign('cates',$cates);
		  
		  
	   //接收文章id
		$id=input('id');  
		$article=db('article')->find($id); //查找某一个ID的文章
		
		//点击数增加
		
		// click 字段加 1
		db('article')->where('id','=',$id)->setInc('click');
		
		
		$this->assign('article',$article);  
		  
       return $this->fetch();
    }
}
