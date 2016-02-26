<?php
require('redis.php');

$username = $_POST['username'];
$age = $_POST['age'];

$uid = $redis->incr('userId');
$redis->rPush('userid', $uid);
$redis->hMset('user'.$uid, [
    'uid' => $uid,
    'username' => $username,
    'age' => $age
]);
header('Location:list.php');
?>
