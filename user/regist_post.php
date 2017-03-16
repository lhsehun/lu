<?php 
   if(!empty($_POST)){
   	  $username = $_POST['username'];
   	  $password = $_POST['password'];
   	  $repwd = $_POST['rpwd'];
   	  $age = $_POST['age'];
      require "./extends/Model.class.php";
   	  require "./extends/config.php";
   	  $model = new Model("user");
   	  if($repwd==$password){
        $user['u_name']=$username;
        $user['u_password']=$password;
        $user['u_age']=$age;
        $user['u_addtime'] = time();
        if($model->add($user)>0){
	   	  echo "<script>alert('注册成功')</script>";
		  echo "<script>location.href='login.php'</script>";
	   }else{
	   		echo "<script>alert('注册失败')</script>";
		   echo "<script>history.back()</script>";
	   }
   	  }else{
   	  	echo "<script>alert('确认密码与输入密码不一致')</script>";
   	  	echo "<script>history.back()</script>";
   	  }
   }

 
 ?>