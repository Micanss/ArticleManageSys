<?php 
require substr(dirname(__FILE__),0,-6).'\init.inc.php';
//后台索引入口文件
if (isset($_SESSION['admin'])) {
    Tools::alertLocation(null,'admin.php');
}else{
    Tools::alertLocation(null,'admin_login.php');
}