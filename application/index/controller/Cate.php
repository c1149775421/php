<?php
namespace app\index\controller;
use think\Controller;
class Cate  extends  Controller
{
    public function cate()
    {
	
	  $cates=db('cate')->order('id desc')->select();//查询所有的数据
	  
	  $this->assign('cates',$cates);
		  
	//栏目文章
	
	$cateid=input('id');
	
	 $articles=db('article')->where('cateid','=',$cateid)->paginate(2);//分页查询“相应的栏目”所有的文章		  
	 $this->assign('articles',$articles);	  
		  
       return $this->fetch();
    }
}
