<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>top</title>
    <link rel="stylesheet" href="../includes/css/admin.css">
    <script src="../includes/js/admin_top_nav.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body id="top">
    <h1>LOGO</h1>
    <ul>
        <li><a href="sidebar.php" id="nav1" target="sidebar" class="selected" onclick="admin_top_nav(1)">首页</a></li>
        <li><a href="sidebar_content.php" target="sidebar" id="nav2" onclick="admin_top_nav(2)">内容</a></li>
        <li><a href="##" id="nav3" target="sidebar" onclick="admin_top_nav(3)">会员</a></li>
        <li><a href="##" id="nav4" target="sidebar" onclick="admin_top_nav(4)">系统</a></li>
    </ul>
    <p>你好,<strong>Admin</strong> <a href="../" target="_blank">[去首页]</a><a href="##">[退出登陆]</a></p>
</body>
</html>