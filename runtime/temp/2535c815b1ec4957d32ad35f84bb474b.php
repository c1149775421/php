<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:103:"D:\BaiduNetdiskDownload\phpPath\phpstudy_pro\WWW\blog\public/../application/index\view\index\index.html";i:1605658466;s:105:"D:\BaiduNetdiskDownload\phpPath\phpstudy_pro\WWW\blog\public/../application/index\view\common\header.html";i:1607493301;s:104:"D:\BaiduNetdiskDownload\phpPath\phpstudy_pro\WWW\blog\public/../application/index\view\common\right.html";i:1605657656;s:105:"D:\BaiduNetdiskDownload\phpPath\phpstudy_pro\WWW\blog\public/../application/index\view\common\footer.html";i:1605657656;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ThinkPHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ThinkPHP" />
<meta name="description" content="ThinkPHP" /> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="__PUBLIC__/css/lady.css" type="text/css" rel="stylesheet" />
<link href="__PUBLIC__/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='__PUBLIC__/js/ismobile.js'></script>  
 
</head>

<body>

        <div class="ladytop" style="height:60px;padding:15px 0;overflow: hidden;">
            <div class="nav" >
                <div class="left"><a href="https://www.kancloud.cn/manual/thinkphp5/118003"><img src="__PUBLIC__/images/hunshang.png" alt="完全开发手册"></a></div>
                <div class="right">
                <div class="box">
				<a href="<?php echo url('Index/index'); ?>" rel='dropmenu209'>主页</a>
				<?php if(is_array($cates) || $cates instanceof \think\Collection): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$ca): ?>	
                 <a href="<?php echo url('Cate/cate',array('id'=>$ca['id'])); ?>"  rel='dropmenu209'><?php echo $ca['catename']; ?></a> 
				<?php endforeach; endif; else: echo "" ;endif; ?> 
                 </div>
                </div>
            </div>
        </div>

<div class="hotmenu">
	<div class="con">热门标签：<a href='#'>奇闻趣事</a> 
	<a href='#'>生活妙招</a> 
	<a href='#'>星座</a> 
	<a href='#'>亲子</a> 
	<a href='#'>汽车</a> 
	<a href='#'>宠物百科</a>
	<a href='#'>家居</a>
	<a href="__URL__/public/index.php/admin/login/login.html" 
	style="float:right;font-weight:bold;font-size:20px;">登录</a>
	</div>
</div>

<!--顶部通栏-->


<div class="position"></div>

<div class="overall">

	<div class="left">
		     <?php if(is_array($articles) || $articles instanceof \think\Collection): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$ar): ?>
				<div class="xnews2">
				<div class="pic"><a target="_blank" href="<?php echo url('Article/article',array('id'=>$ar['id'])); ?>"><img src="__IMG__/<?php echo $ar['pic']; ?>" alt="<?php echo $ar['title']; ?>"/></a></div>
				<div class="dec">
				<h3><a target="_blank" href="<?php echo url('Article/article',array('id'=>$ar['id'])); ?>"><?php echo $ar['title']; ?></a></h3>
				<div class="time">发布时间：<?php echo $ar['time']; ?></div>
				<p><?php echo $ar['des']; ?></p>
				<div class="time"> </div>
				</div>
				</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
			
				<div class="pages" style="height:60px;">
				<?php echo $articles->render(); ?>
				</div>
	</div>
	
<!--右边right--->

<div class="right">
                <!--右侧各种广告-->
                <!--猜你喜欢-->
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<li class="hm-t-item hm-t-item-img"><a data-pos="0" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" target="_blank" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" class="hm-t-img-title" style="visibility: visible;"><span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="1" title="吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)" target="_blank" href="http://www.wed114.cn/jiehun/yingyangshipu/20131118113703_5.html" class="hm-t-img-title" style="visibility: visible;"><span>吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="2" title="亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)" target="_blank" href="http://www.wed114.cn/jiehun/liangdiantu/20140611124111_6.html" class="hm-t-img-title" style="visibility: visible;"><span>亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="3" title="饱腹感强的食物 让你既能吃饱又能瘦(3)" target="_blank" href="http://www.wed114.cn/jiehun/jianfeijiqiao/20131223116574_3.html" class="hm-t-img-title" style="visibility: visible;"><span>饱腹感强的食物 让你既能吃饱又能瘦(3)</span></a></li>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" target="_blank" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" data-pos="0"><span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/yingyangshipu/20131118113703_5.html" target="_blank" title="吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)" data-pos="1"><span>吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/liangdiantu/20140611124111_6.html" target="_blank" title="亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)" data-pos="2"><span>亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jianfeijiqiao/20131223116574_3.html" target="_blank" title="饱腹感强的食物 让你既能吃饱又能瘦(3)" data-pos="3"><span>饱腹感强的食物 让你既能吃饱又能瘦(3)</span></a></li>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>

<div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="">              <input type="hidden" value="10711555151249188672" name="s">              <input type="hidden" value="1" name="entry">                                              <input type="hidden" value="gbk" name="ie">                                                          <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="q" autocomplete="off" style="line-height: 30px; width:220px;">              <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                       </form>      </div>                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">              <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>          </div>                  </div>                           </div></div>

<div style="height:15px"></div>


                
            </div>



	
</div>

<!--版权底部footer-->
<div class="footerd">
<ul>
<li>Copyright &#169; 2008-2020  all rights reserved  广州华夏学院 版权所有</li> 
</ul>
</div>

</body>
</html>