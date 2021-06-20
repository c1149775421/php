
<?php
//连接数据库
include 'conn.php';
//获取增加学生信息
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$edu = $_POST['edu'];
$salary = $_POST['salary'];
$bonus = $_POST['bonus'];
$city = $_POST['city'];
//编写预处理sql语句
$sql = "insert into `student` values(null,?,?,?,?,?,?,?)";

//预处理SQL模板
$stmt = mysqli_prepare($link, $sql);
//参数绑定,并为已经绑定的变量赋值
mysqli_stmt_bind_param($stmt, 'sssssss', $name, $sex, $age, $edu, $salary, $bonus, $city);
if ($name) {
	//执行预处理(第1次执行)
	$result = mysqli_stmt_execute($stmt);
	mysqli_close($link);//关闭连接
	if ($result) {//添加学生成功,跳转到首页
			header("Location:index.php");
	}else{
		exit('添加学生sql语句执行失败。错误信息:'.mysqli_error($link));
	}
}else{
	//添加学生失败//输出提示,跳转到首页
	echo "添加学生失败!<br><br>";
	header('Refresh: 3; url=index.php');//3s后跳转
}
?>