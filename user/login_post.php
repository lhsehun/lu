<?php 
   if(!empty($_POST)){
   	$username = $_POST['username'];
   	$password = $_POST['password'];
   	// echo $username;
   	// echo $password;
   	require "./extends/Model.class.php";
   	require "./extends/config.php";
   	$model = new Model("user");
   	$user_data = $model->where("u_name='$username'")->select();
   	if(empty($user_data)){
   		echo "<script>alert('用户名不存在')</script>";
   		echo "<script>history.back()</script>";
   		exit;
   	}else{
   		if($password ==$user_data[0]['u_password']){
   			setcookie('admin_user',$user_data[0]['u_name'],0,'');
   			echo "<meta http-equiv='refresh' content='2,url=index.php'>";
   			echo "登录成功,正在跳转...";
   			exit;
   		}else{
   			echo "<script>alert('用户名密码错误')</script>";
   			echo "<script>history.back()</script>";
   			exit;
   		}
   	}
   }
 ?>