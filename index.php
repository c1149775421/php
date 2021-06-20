<?php
//连接数据库
include 'conn.php';
//编写sql语句
$sql='select * from `student`';
//执行查询操作,处理结果集
$result=mysqli_query($link,$sql);
if(!$result){
	exit('查询失败, 错误信息: '.mysqli_error($link));
	}
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);

$sql='select count(*) from `student`';
$n=mysqli_query($link,$sql);
if(!$n){
	exit('查询失败,错误信息: '.mysqli_error($link));
}
$num=mysqli_fetch_assoc($n);
$num=implode($num);
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>学生管理系统界面</title>
		<style type="text/css">
			body {
				background: url(01.jpg);
				background-size: 100%;
			}
			h1 {
				font-size: 50px;
				letter-spacing: 10px;
				text-align: center;
				margin-top: 50px;
				margin-bottom: 5px;
				color: #FFFF00;
				text-shadow: 5px 8px 10px black;
			}
			.wrapper {
				font-family: "楷书";
				color: aqua;
				font-weight: bold;
				width: 1000px;
				margin: 20px auto;
			}
			.add {
				margin-bottom: 20px;
			}
			
			.add a {
				text-decoration: none;
				color: white;
				font-weight: bold;
			}
			td {
				text-align: center;
				color: red;
				font-weight: bold;
			}
			th {
				color: blue;
				font-weight: bold;
				font-family: "楷体","微软雅黑";
				font-size: 20px;
			}
			button {
				background-color: magenta;
				border-radius: 15px;
				border: 2px solid #0076ff;
			}
		</style>
	</head>
	<body>
		<h1>学生信息管理系统</h1>
	<div class="wrapper">
		<div class="add">
			<button><a href="addStudent.html">添加学生</a></button>&nbsp;&nbsp;&nbsp;共
			<?php echo $num?>个学生&nbsp;&nbsp;&nbsp;
			<button><a href="searchStudent.html">查找学生</a></button>
		</div>
		<table width="960" border="1" cellpadding="0" cellspacing="0">
			<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>学历</th>
				<th>工资</th>
				<th>奖金</th>
				<th>籍贯</th>
				<th>操作</th>
			</tr>
		<?php
		foreach ($data as $key =>$value){
			foreach($value as $k =>$v){
				$arr[$k]=$v;
			}
		echo "<tr>";
		echo "<td>{$arr['id']}</td>";
		echo "<td>{$arr['name']}</td>";
		echo "<td>{$arr['sex']}</td>";
		echo "<td>{$arr['age']}</td>";
		echo "<td>{$arr['edu']}</td>";
		echo "<td>{$arr['salary']}</td>";
		echo "<td>{$arr['bonus']}</td>";
		echo "<td>{$arr['city']}</td>";
		echo "<td>
				<a href='javascript:del({$arr['id']})'>删除</a>
				<a href='editStudent.php?id={$arr['id']}'>修改</a>
			</td>";
		echo "</tr>";
		//echo "<pre>";
		//print_r($arr);
		//echo "</pre>";
		}
		//关闭连接
		mysqli_close($link);
		?>
		</table>
		<div>
			<script type="text/javascript">
				function del(id){
					if (confirm("确定删除这个学生吗?")){
						window.location = "action_del.php?id=" + id;
					}
				}
			</script>
		</div>
	</div>
	</body>
</html>
