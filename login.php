<?php
// 高危漏洞代码：仅供测试！！！

// 1. 接收 GET 参数（明文传输）
$user = $_GET['username'];
$pass = $_GET['password'];

// 2. 高危 SQL 注入漏洞（直接拼接变量，无过滤）
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

// 3. 弱口令
$weak_user = "admin";
$weak_pass = "admin";

if($user == $weak_user && $pass == $weak_pass) {
    echo "登录成功！弱口令存在！";
} else {
    echo "登录失败";
}

echo "<br>你的SQL语句为：$sql";
?>
