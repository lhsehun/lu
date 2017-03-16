<?php require "initconfig.php" ?>
<?php
    // 查询数据库的数据
    require "./extends/Model.class.php";
    require "./extends/config.php";
    require "./extends/Page.class.php";
    $model = new Model("user");
    // 分页
    // 第一步 计算总长度
    // 第二步 创建分页对象
    // 第三步 查询的条件存放到 limit条件中
    // 第四步 输出要显示的Page分页信息
    $count = $model->count();
    $page = new Page($count,10);
    $data = $model->limit($page->firstRow,$page->listRows) ->order("u_id desc")->select();
    // 需要显示分页的数据
    $page->setConfig("first","首页");
    $page->setConfig("last","尾页");
    $page->setConfig("theme","<ul class='pagination'><li>%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%</li></ul>");
    if(isset($_GET['page'])){
    	$currentPage = $_GET['page'];
    }else {
    	$currentPage = 1;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>主页</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <h2>用户列表</h2> 
    <table>
    	<thead>
    	    <th>用户ID</th>
    		<th>用户名</th>
            <th>年龄</th>
            <th>添加时间</th>
    	</thead>
    	<tbody>
    		<?php foreach ($data as $value):?>
    			<tr>
    			    <td>
    			    <?=$value['u_id']?> 	
    			    </td>
    			    <td>
    			    <?=$value['u_name']?> 	
    			    </td>
    			    <td><?=$value['u_age']?></td>
    			    <td><?=$value['u_addtime']?></td>
    			    <td><a href="action.php?a=delete&u_id=<?=$value['u_id']?>&page=<?=$currentPage?>">删除</a></td>
    			</tr>
    		<?php endforeach;?>
            <tr>
                <td><a href="add.php">添加</a></td>
            </tr>
    	</tbody>
    </table>
    <div>
		<?=$page->show()?>
	</div>
</body>
</html>