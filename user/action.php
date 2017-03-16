<?php 
   if(empty($_GET['a'])){
   	header("location:index.php");
   	exit;
   }
   require "./extends/Model.class.php";
   require "./extends/config.php";
   $model = new Model("user");
    switch ($_GET['a']) {
    	case 'delete':
    	if($model->delete($_GET['u_id'])>0){
   			echo "<script>alert('删除成功')</script>";
   			echo "<script>location.href='index.php?page=".$_GET['page']."'</script>";
   		}else{
   			echo "<script>alert('删除失败')</script>";
   			echo "<script>history.back()</script>";
   		}
   	break;
   	default:
   		# code...
   		break;
   	}   
 ?>