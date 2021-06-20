<?php
//连接数据库
include 'conn.php';
//获取id
$id = $_GET['id'];
//编写查询sql语句
$sql = "SELECT * FROM `student` WHERE `id`=$id";
//执行查询操作,处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
	exit('查询sql语句执行失败。错误信息:'.mysqli_error($link));//获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//将二维数数组转化为一堆数组
foreach ($data as $key => $value) {
	foreach ($value as $k => $v) {
		$arr[$k]=$v;
	}
}
//echo "<pre>";
//var_dump($arr);
//echo "</pre>";
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>学生信息管理系统</title>
		<style type="text/css">
			body {
				background-image: url(02.jpg);
				background-size: 100%;
			}
			.box {
				display: table;
				margin: 0 auto;
				padding-left: 200px;
			}
			h2 {
				text-align: center;
			}
			.add {
				margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<div class="box">
			<h2>修改学生信息</h2>
			<div class="add">
				<form action="action_editStudent.php" method="post" enctype="multipart/form-data">
					<table border="1" cellpadding="0" cellspacing="0">
						<tr>
							<th>编号:</th>
							<td>
								<input type="text" name="id" size="5" value="<?php echo $arr["id"] ?>" readonly="readonly">
							</td>
						</tr>
						<tr>
							<th>姓名:</th>
							<td>
								<input type="text" name="name" size="25" value="<?php echo $arr["name"] ?>">
							</td>
						</tr>
						<tr>
							<th>性别:</th>
							<td>
								<label><input <?php if ($arr["sex"]=="男") {echo "checked";} ?> type="radio" name="sex" value="男">男</label>
								<label><input <?php if ($arr["sex"]=="女") {echo "checked";} ?> type="radio" name="sex" value="女">女</label>
							</td>
						</tr>
						<tr>
							<th>年龄:</th>
							<td>
								<input type="text" name="age" size="25" value="<?php echo $arr["age"] ?>">
							</td>
						</tr>
						<tr>
							<th>学历:</th>
							<td>
								<select name="edu">
									<option <?php if ($arr["edu"]) {echo "selected" ;} ?> value="">--请选择--</option>
									<option <?php if ($arr["edu"]=="研究生") {echo "selected" ;} ?> value="研究生">研究生</option>
									<option <?php if ($arr["edu"]=="本科") {echo "selected" ;} ?> value="本科">本科</option>
									<option <?php if ($arr["edu"]=="专科") {echo "selected" ;} ?> value="专科">专科</option>
									<option <?php if ($arr["edu"]=="高中") {echo "selected" ;} ?> value="高中">高中</option>
									<option <?php if ($arr["edu"]=="初中") {echo "selected" ;} ?> value="初中">初中</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>工资:</th>
							<td><input type="text" name="salary" size="25" value="<?php echo $arr["salary"] ?>"></td>
						</tr>
						<tr>
							<th>奖金:</th>
							<td><input type="text" name="bonus" size="25" value="<?php echo $arr["bonus"] ?>"></td>
						</tr>
						<tr>
							<th>籍贯:</th>
							<td><input type="text" name="city" size="25" value="<?php echo $arr["city"] ?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center; padding-left: 15px;">
								<input type="button" onclick="javascript :history.back(-1);" value="返回">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="提交">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
