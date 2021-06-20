<html>
	<head>
		<meta charset="utf-8">
		<title>数据库连接</title>
	</head>
	<body>
		<?php
			//连接数据库
			$link=mysqli_connect('localhost','root','root','studb');
			//设置字符集
			mysqli_set_charset($link,'utf8');
			if($link)echo "连接成功";
		?>
	</body>
</html>