<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登陆</title>
    <link rel="stylesheet" href="/thinkphp/Public/css/login.css">
    <script type="text/javascript" src="/thinkphp/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/thinkphp/Public/js/logcheck.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body style="height: auto;">
    <div id="container">
        <h1>后台登陆</h1>
        <hr>
        <div id="logInfo">
            <form action="login" method="post" accept-charset="utf-8">
                 <input type="text" class="userName" id="userName" name="userName" autofocus="" value="" placeholder="管理员" required="">
                <input type="password" class="password" id="password" name="password" value="" placeholder="密码" required="">
                <input type="submit" class="submit" name="logInfo" value="登陆">
                <p>后台暂时唯一账户,通过数据库操作添加新账号!</p>
            </form>
        </div>
    </div>

</body>
</html>