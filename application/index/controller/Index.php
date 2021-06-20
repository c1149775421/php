<?php
namespace app\index\controller;
use think\Controller;
class Index  extends  Controller
{
    public function index()
    {
	   $cates=db('cate')->order('id desc')->select();//查询所有的数据	
	   
	   $articles=db('article')->paginate(2);//分页查询所有的文章	
      	  
	   
	   $this->assign('cates',$cates);
	   $this->assign('articles',$articles);
	   
       return $this->fetch();
    }
}
