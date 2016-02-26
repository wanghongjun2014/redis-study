<?php
require('redis.php');



if ($_POST['submit']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $redis->get('username:'.$username);
    if (!empty($id)) {
        $pass = $redis->hGet('user'.$id,'passowrd');
        if ($pass == $password) {
            
        }
    }
}


?>


<form action="" method="post">
    用户名:<input type="text" name="username" /><br>
    密码:<input type="password" name="password" /><br>
    <input type="submit" value="提交" >

</form>
