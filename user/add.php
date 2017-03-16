<!DOCTYPE html>
<html>
<head>
	<title>添加用户</title>
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
</head>
<body>
    <h1>添加用户</h1>
    <form action="adduser.php" method="post">
      <table>
    	<tr>
    		<td>用户名</td>
    	</tr>
    	<tr>
    		<td><input type="text" name="username"></td>
    	</tr>
    	<tr>
    		<td>密码</td>
    	</tr>
    	<tr>
    		<td><input type="password" name="pwd"></td>
    	</tr>
    	<tr>
    		<td>年龄</td>
    	</tr>
    	<tr>
    		<td><input type="text" name="age"></td>
    	</tr>
    	<tr>
    		<td><input type="submit" value="添加" class="submit"></td>
    	</tr>
      </table>
    </form>
</body>
</html>