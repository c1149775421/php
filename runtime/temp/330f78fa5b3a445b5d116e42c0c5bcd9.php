<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"/www/admin/localhost_80/wwwroot/blog/public/../application/admin/view/login/login.html";i:1607490915;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>ThinkPHP</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/css/beyond.css" rel="stylesheet">
    <link href="__PUBLIC__/css/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/css/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
				<div class="loginbox-textbox">
				    <input style="width:80px;height:30px;float:left;" 
					class="form-control" placeholder="code" name="code" type="text">
					<img style="float:right;" src="<?php echo captcha_src(); ?>" alt="captcha" 
					onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"/>
				</div>
				
                <div style="margin-top:30px;" class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">&nbsp;</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/bootstrap.js"></script>
    <script src="__PUBLIC__/js/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/js/beyond.js"></script>




</body><!--Body Ends--></html>