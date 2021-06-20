<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\phpStudy\PHPTutorial\WWW\blog\public/../application/admin\view\article\modify.html";i:1607479386;s:81:"C:\phpStudy\PHPTutorial\WWW\blog\public/../application/admin\view\common\top.html";i:1606269976;s:82:"C:\phpStudy\PHPTutorial\WWW\blog\public/../application/admin\view\common\left.html";i:1606875742;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>ThinkPHP</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/css/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/css/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/css/animate.css" rel="stylesheet">
	<script src="__PUBLIC__/ueditor/ueditor.config.js"></script>
	<script src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
	<script src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
	
	
    
</head>
<body>
	<!-- 头部 -->
    	
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__PUBLIC__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/update'); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>


               

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
						
            				
            <div class="page-sidebar" id="sidebar">
				
				
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
					
					<li>
					    <a href="#" class="menu-dropdown">
					        <i class="menu-icon fa fa-gear"></i>
					        <span class="menu-text">控制面板</span>
					        <i class="menu-expand"></i>
					    </a>    
						<ul class="submenu">
						    <!-- <li>
						        <a href="http://localhost:8080/blog/public/index.php/">
						            <span class="menu-text">前台主页</span>
						            <i class="menu-expand"></i>
						        </a>
						    </li> -->
							<li>
							    <a href="<?php echo url('Index/index'); ?>">
							        <span class="menu-text">后台主页</span>
							        <i class="menu-expand"></i>
							    </a>
							</li>
						</ul> 
					</li>
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Article/lst'); ?>">
                                    <span class="menu-text">文章列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

					<li>
					    <a href="#" class="menu-dropdown">
					        <i class="menu-icon fa fa-file-text"></i>
					        <span class="menu-text">栏目管理</span>
					        <i class="menu-expand"></i>
					    </a>
					    <ul class="submenu">
					        <li>
					            <a href="<?php echo url('Cate/lst'); ?>">
					                <span class="menu-text">
					                    栏目列表                                    </span>
					                <i class="menu-expand"></i>
					            </a>
					        </li>
					    </ul>                            
					</li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                     <li>
                         <a href="http://www.chuanke.com/s2260700.html" class="menu-dropdown">
                             <i class="menu-icon fa fa-gear"></i>
                             <span class="menu-text">视频教程</span>
                             <i class="menu-expand"></i>
                         </a>                           
                     </li>                         
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
           
			
           
            
			<!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">文章管理</a>
                    </li>
                                        <li class="active">修改文章</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('Article/update'); ?>" method="post" enctype="multipart/form-data">
                         <input value="<?php echo $article['id']; ?>" class="form-control" id="id" placeholder="" name="id" required="" type="hidden"> 
						 
						  <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">文章标题</label>
                            <div class="col-sm-6">
                                <input value="<?php echo $article['title']; ?>" class="form-control" id="title" placeholder="" name="title" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">&nbsp;</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章作者</label>
                            <div class="col-sm-6">
                                <input value="<?php echo $article['author']; ?>" class="form-control" id="author" placeholder="" name="author" required="" type="text">
                            </div>
                        </div> 
						
						<div class="form-group">
						     <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
						     <div class="col-sm-6">
						        <select name="cateid" id="cateid">
									
									<?php if(is_array($cates) || $cates instanceof \think\Collection): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$ca): ?>
									<option <?php if($ca['id'] == $article['cateid']): ?>selected="selected"<?php endif; ?> value="<?php echo $ca['id']; ?>"><?php echo $ca['catename']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									
								</select>
						     </div>
						 </div> 
						 
						 <div class="form-group">
						     <label for="group_id" class="col-sm-2 control-label no-padding-right">图片上传</label>
						     <div class="col-sm-6">
						         <input  id="pic" placeholder="" name="pic" required="" type="file" style="display: inline;">
								 <img src="__IMG__/<?php echo $article['pic']; ?>" style="width:50px;height:50px;">
						     </div>
						 </div> 
						
						 
						 <div class="form-group">
						     <label for="group_id" class="col-sm-2 control-label no-padding-right">文章描述</label>
						     <div class="col-sm-6">
						         <input value="<?php echo $article['des']; ?>" class="form-control" id="des" placeholder="" name="des" required="" type="text">
						     </div>
						 </div> 
						 
						 <div class="form-group">
						     <label for="group_id" class="col-sm-2 control-label no-padding-right">点击数</label>
						     <div class="col-sm-6">
						         <input value="<?php echo $article['click']; ?>" class="form-control" id="click" placeholder="" name="click" required="" type="text">
						     </div>
						 </div> 
						 
						 <div class="form-group">
						     <label for="group_id" class="col-sm-2 control-label no-padding-right">关键字</label>
						     <div class="col-sm-6">
						         <input value="<?php echo $article['keywords']; ?>" class="form-control" id="des" placeholder="" name="keywords" required="" type="text">
						     </div>
						 </div> 
						 
						 <div class="form-group">
						     <label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
						     <div class="col-sm-6">
						         <textarea  name="content" id="content"><?php echo $article['content']; ?></textarea>
						     </div>
						 </div> 
						 
						 
						 
						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="btn btn-default">修改文章</button>
						    </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="__PUBLIC__/js/jquery_002.js"></script>
    <script src="__PUBLIC__/js/bootstrap.js"></script>
    <script src="__PUBLIC__/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/js/beyond.js"></script>
    
    <script type="text/javascript">
    
        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        UE.getEditor('content',{initialFrameWidth:600,initialFrameHeight:300,});
        
    
    
    </script>

</body></html>