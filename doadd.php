<?php
require('redis.php');

$username = $_POST['username'];
$age = $_POST['age'];
$password = $_POST['password'];


$uid = $redis->incr('userId');
$redis->rPush('userid', $uid);
$redis->hMset('user'.$uid, [
    'uid' => $uid,
    'username' => $username,
    'password' => $password,
    'age' => $age
]);
$redis->set('username:'.$username,$uid);
header('Location:list.php');
?>
