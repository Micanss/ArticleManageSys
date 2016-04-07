<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="/thinkphp/Public/js/adminManage.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="/thinkphp/Public/css/adminIndex.css">
</head>
<body>
    <div class="top">
        <span><?php echo ($title); ?></span>
        <p>当前管理员,<b><?php echo ($userName); ?></b></p>
    </div>
    <hr>
    <div class="main">
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fd</title>
    <link rel="stylesheet" href="">
    <style type="text/css" media="screen">
        .addVideo{
            margin: 0 400px;
            
            height: 500px;
            padding: 10px;
        }
        .addVideo .input-group{
                margin: 10px 0 10px 0; 
        }
       .addVideo .col-lg-6{
       }
        .submit{
            background-color: #337AB7;
            height: 45px;
            width: 400px;
            border-radius: 5px;
            color: white;
            letter-spacing: 10px;
            font-family: 微软雅黑;
            font-size: 20px;
       }
       .submit:hover{
        background-color: #204D74;
       }
       
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.form-control').popover('show');
        })
       
    </script>
</head>
<body>
<div class="addVideo">
    <form action="#" method="post" accept-charset="utf-8">
        <div class="input-group" >
        <span class="input-group-addon" id="basic-addon1">视频名称:</span>
        <input type="text" class="form-control" placeholder="VideoName(Up to 20 characters)" aria-describedby="basic-addon1" maxlength="20" required="" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." >
        </div>

          <div class="col-lg-13" style="background-color: white;">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">视频分类 <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">电影</a></li>
                  <li><a href="#">动漫</a></li>
                  <li><a href="#">动画</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control" readonly="" aria-label="..." placeholder="category" >
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        <div class="input-group" >
        <span class="input-group-addon" id="basic-addon1">主演/角色:</span>
        <input type="text" class="form-control" placeholder="Stars(Each name is separated by '/')/(Up to 50 characters)" required="" maxlength="50" aria-describedby="basic-addon1">
        </div>
          <div class="col-lg-13">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">内容分类 <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">热血</a></li>
                  <li><a href="#">动作</a></li>
                  <li><a href="#">爱情</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control" readonly="" aria-label="..." placeholder="Content category" >
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
          <div class="col-lg-13">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">地区选择 <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">中国</a></li>
                  <li><a href="#">美国</a></li>
                  <li><a href="#">日本</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control" readonly="" aria-label="..." placeholder="area" >
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
          <div class="col-lg-13">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">语言种类 <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">汉语</a></li>
                  <li><a href="#">英语</a></li>
                  <li><a href="#">日语</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input type="text" class="form-control" readonly="" aria-label="..." placeholder="Language" >
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        <div class="input-group" style="background-color: white;">
        <span class="input-group-addon" id="basic-addon1">发布时间:</span>
        <input type="date" name="" value="" placeholder="">
        </div>
        <div class="input-group" >
        <span class="input-group-addon" id="basic-addon1">内容介绍:</span>
        <textarea name="" rows="4" cols="63" style="resize:none;" placeholder="Summary(Up to 200 characters)" maxlength="200"></textarea>
        </div>
        <div class="input-group" style="background-color: white;">
        <span class="input-group-addon" id="basic-addon1">豆瓣评分:</span>
        <input type="number" name="" value="" placeholder="">
        </div>
        <input type="submit" class="submit" name="" value="添加" >
    </form>

</div>
</body>
</html>
    </div>
</body>
</html>