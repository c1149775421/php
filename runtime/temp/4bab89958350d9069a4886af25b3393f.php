<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"/www/admin/localhost_80/wwwroot/blog/public/../application/admin/view/admin/lst.html";i:1614505120;s:85:"/www/admin/localhost_80/wwwroot/blog/public/../application/admin/view/common/top.html";i:1607488088;s:86:"/www/admin/localhost_80/wwwroot/blog/public/../application/admin/view/common/left.html";i:1610628763;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
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
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Login/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/modify',array('id'=>\think\Request::instance()->session('id'))); ?>">
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
						    <li>
						        <a href="http://localhost:8080/blog/public/index.php/">
						            <span class="menu-text">前台主页</span>
						            <i class="menu-expand"></i>
						        </a>
						    </li>
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
                                <a href="<?php echo url('Index/index'); ?>">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                     <li>
                         <a href="https://www.bilibili.com/" class="menu-dropdown">
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
							<li class="active">管理员管理</li>
						</ul>
					</div>
					<!-- /Page Breadcrumb -->

					<!-- Page Body -->
					<div class="page-body">

						<button type="button" tooltip="添加管理员" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('Admin/add'); ?>'">
							<i class="fa fa-plus"></i> Add
						</button>
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="widget">
									<div class="widget-body">
										<div class="flip-scroll">
											<table class="table table-bordered table-hover">
												<thead class="">
													<tr>
														<th class="text-center">ID</th>
														<th class="text-center">管理员名称</th>
														<th class="text-center">管理员密码</th>
														<th class="text-center">操作</th>
													</tr>
												</thead>
												<tbody>
													<?php if(is_array($list) || $list instanceof \think\Collection): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$li): ?>
													<tr>
														<td align="center"><?php echo $li['id']; ?></td>
														<td align="center"><?php echo $li['username']; ?></td>
														<td align="center"><?php echo $li['password']; ?></td>
														<td align="center">
															<a href="<?php echo url('Admin/modify',array('id'=>$li['id'])); ?>" class="btn btn-primary btn-sm shiny">
																<i class="fa fa-edit"></i> 编辑
															</a>
															<a href="<?php echo url('Admin/del',array('id'=>$li['id'])); ?>" onClick="return confirm('确实要删除吗')" class="btn btn-danger btn-sm shiny">
																<i class="fa fa-trash-o"></i> 删除
															</a>
															<!-- onClick="return confirm('确定要删除吗')" -->
														</td>
													</tr>
													<?php endforeach; endif; else: echo "" ;endif; ?>
													<div style="text-align: center;">
														<?php echo $list->render(); ?>
													</div>
												</tbody>
											</table>
										</div>
										<div>
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



	</body>
</html>
