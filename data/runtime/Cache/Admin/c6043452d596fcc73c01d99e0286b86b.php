<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/public/lib/html5.js"></script>
    <script type="text/javascript" src="/public/lib/respond.min.js"></script>
    <script type="text/javascript" src="/public/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="/public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/public/static/h-ui.iconfont/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>后台登录 - hsblog</title>
</head>
<body>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <div class="col-md-offset-3">
            <img width="38.555%" src="/public/static/h-ui.admin/images/logo.png">
        </div>
        <form class="form form-horizontal" action="<?php echo U('Admin/Login/login');?>" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont Hui-iconfont-user2"></i></label>
                <div class="formControls col-xs-8">
                    <input id="name" name="name" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont Hui-iconfont-suoding"></i></label>
                <div class="formControls col-xs-8">
                    <input id="passwd" name="passwd" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont Hui-iconfont-shijian"></i></label>
                <div class="formControls col-xs-8 ">
                    <input class="input-text size-L" type="text" placeholder="验证码"  name="verify" style="width:150px;">
                    <img src="<?php echo U('Admin/Login/showVerify');?>" width="40%" title="点击刷新" onclick="this.src+='&'+Math.random();">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
</body>
</html>