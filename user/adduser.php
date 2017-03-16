<?php 
    
   if(!empty($_POST)){
   	  $username = $_POST['username'];
   	  $password = $_POST['pwd'];
   	  $age = $_POST['age'];
      require "./extends/Model.class.php";
   	  require "./extends/config.php";
   	  $model = new Model("user");
        $user['u_name']=$username;
        $user['u_password']=$password;
        $user['u_age']=$age;
        $user['u_addtime'] = time();
        if($model->add($user)>0){
	   	  echo "<script>alert('添加成功')</script>";
		  echo "<script>location.href='index.php'</script>";
	   }else{
	   		echo "<script>alert('添加失败')</script>";
		   echo "<script>history.back()</script>";
	   }
   	  }else{
   	  	echo "<script>alert('不能为空')</script>";
   	  	echo "<script>history.back()</script>";
   	  }


 ?>