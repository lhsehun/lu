<!DOCTYPE html>
<html>
<head>
	<title>主页</title>
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<script src="js/myjs.js"></script>
	<!-- <script src="js/md5.js"></script> -->
</head>
<body>
    <h1>用户注册</h1>
    <form action="regist_post.php" method="post">
    	<table>
    	    <tr>
    	    	<td>用户名：</td>
                <td>
                	<input type="text" name="username" autocomplete="off">
                </td>
    	    </tr> 
    	    <tr>
    	    	<td>密码：</td>
                <td>
                	<input type="password" name="password" autocomplete="off">
                </td>
    	    </tr>
            <tr>
                <td>确认密码：</td>
                <td>
                    <input type="password" name="rpwd" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>年龄：</td>
                <td>
                    <input type="number" name="age" autocomplete="off">
                </td>
            </tr>
    	    <tr>
	   	    <td></td>
	   	 	<td>
	   	 		<input type="submit" value="注册" class="submit">
	   	 	</td>
	   	 </tr>
    	</table>
    </form> 
</body>
</html>