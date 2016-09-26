<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="hellomarker,postbird,李瞻文,ptbird">
    <meta name="description" content="hellomarker,一本正经的吃喝玩乐！Powered by postbird!">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>HelloMarker | 一本正经地吃喝玩乐</title>
    <link rel="stylesheet" href="/hellomarkertest/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/hellomarkertest/Public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/hellomarkertest/Marker/Home/View/Public/css/marker.css">
    <link rel="stylesheet" href="/hellomarkertest/Marker/Home/View/Public/css/jquery-clock.css">
    <link rel="stylesheet" href="/hellomarkertest/Marker/Home/View/Public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/hellomarkertest/Marker/Home/View/Public/css/weatherIcon.css">
    <script src="/hellomarkertest/Public/js/jquery-1.10.2.js"></script>
    <script src="/hellomarkertest/Public/js/bootstrap.min.js"></script>
    <script>
      var appUrl="/hellomarkertest/marker.php";
    </script>
    <script src="/hellomarkertest/Marker/Home/View/Public/js/marker.js"></script>
    <script src="/hellomarkertest/Public/js/kindeditor/kindeditor-min.js"></script>
</head>
<body style="background-color:#F4F8FA;letter-spacing:0.2px;">
    <div style="background-color:#fff;">
        <div class="container">
              <div class="log-nav">
              <div style="float:left;">
                   <a href="/hellomarkertest" class="navbar-band logo-a"></a>
                   <span class="slogan visible-lg"> | 一 本 正 经 地 吃 喝 玩 乐 </span>
              </div>
                <ul class="nav navbar-right">
                 <?php if($userLoginFlag == 0): ?><li ><a href="/hellomarkertest/marker.php/Home/User/index">登录</a></li>
                    <li><a href="/hellomarkertest/marker.php/Home/User/userSign">注册</a></li>
                <?php else: ?>
                    <li title='我的Marker'><a href="/hellomarkertest/marker.php/Home/Index/myNote/"><i class='fa fa-bookmark-o' ></i></a></li>
                    <li title='我的应用' class="visible-lg"><a href="/hellomarkertest/marker.php/Home/Work/myWork/"><i class='fa fa-cubes' ></i></a></li>
                    <li class="visible-lg dropdown user-header ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class='fa fa-user-secret'></i> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/hellomarkertest/marker.php/Home/Index/myHome/user/<?php echo ($usersessionname); ?>">我的主页</a></li>
                            <li><a href="/hellomarkertest/marker.php/Home/User/myChange/">编辑个人资料</a></li>
                            <li class="divider"></li>
                            <li><a href="/hellomarkertest/marker.php/Home/User/userLogout">退出</a></li>
                        </ul>
                    </li>
                    <li title='主页' class="hidden-lg"><a href="/hellomarkertest/marker.php/Home/Index/myHome/user/<?php echo ($usersessionname); ?>"><i class='fa fa-user-secret' ></i></a></li>
                    <li title='退出' class="hidden-lg"><a href="/hellomarkertest/marker.php/Home/User/userLogout"><i class='fa fa-power-off' ></i></a></li><?php endif; ?>
               </ul> 
               </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header ">
              <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#nav-header" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs" href="#">专 注 生 活 </a>
            </div>
            <div class="collapse navbar-collapse" id="nav-header">
                <ul class="nav navbar-nav ">
                    <li ><a href="/hellomarkertest/marker.php/Home/Index/">首页</a></li>
                    <li ><a href="/hellomarkertest/marker.php/Home/Article/">吾说八道</a></li>
                    <li><a href="/hellomarkertest/marker.php/Home/Index/markerShare/sid/all">吃喝玩乐</a></li>
                    <li ><a href="/hellomarkertest/marker.php/Home/Work/">一「本」正经</a></li>
                    <li><a href="/hellomarkertest/marker.php/Home/Account/">柴米油盐</a></li>
                    <li ><a href="/hellomarkertest/marker.php/Home/Weather/">未雨绸缪</a></li>
                    <li ><a href="/hellomarkertest/marker.php/Home/App/">也有APP</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-ul">
                <li><a href="/hellomarkertest/marker.php/Home/Bug/"><i class="fa fa-map-o"></i>&nbsp;&nbsp; 「 略懂七八 」</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container ">
    <div class="row">
    <?php if($userHomeFlag == 1): ?><div class="col-md-3">
            <div class="panel panel-default user-home">
                <div class="list-group">
                    <a class="list-group-item" href="/hellomarkertest/marker.php/Home/User/myChange/">编辑资料<i class="pull-right fa fa-keyboard-o"></i></a>
                    <a class="list-group-item my-note" href="/hellomarkertest/marker.php/Home/User/myChangePassword/">修改密码<i class="pull-right fa fa-magnet"></i></a>
                    <a class="list-group-item" href="/hellomarkertest/marker.php/Home/User/myChangeLogo/">上传头像<i class="pull-right fa fa-meh-o"></i></a>
                </div>
            </div>
            <?php if($myChangeErrorFlag == 1): ?><div class="alert alert-danger"><strong><i class="fa fa-info-circle"></i>  <?php echo ($myChangeError); ?></strong></div><?php endif; ?>
        </div><!--col-3 end-->
        <div class="col-md-9">
            
            <form action="/hellomarkertest/marker.php/Home/User/myChangeWork/" method="post" accept-charset="utf-8">
                <div class="panel panel-default user-home user-login">
                    <div class="panel-heading">
                        <?php echo ($userHomeRow[0]['username']); ?> 的个人资料
                    </div>
                     <div class="panel-body">
                        <div class="form-group">
                        <label title="不可更改"><i class="fa fa-dot-circle-o"></i> 用户名</label>
                            <input title="不可更改" type="text" name="username" id="username" class="form-control " value="<?php echo ($userHomeRow[0]['username']); ?>" readonly disabled>
                        </div>
                        <div class="form-group">
                            <label title="必填项"><i class="fa fa-dot-circle-o"></i> 性别</label>
                            <label  class="radio-item"><input type="radio" name="usersex" id="userpassword" value="男" checked>  男</label>
                            <label  class="radio-item"><input type="radio" name="usersex" id="userpassword" value="女">  女</label>
                        </div>
                        <div class="form-group">
                            <label title="地址" for="useraddress"><i class="fa fa-dot-circle-o"></i> 所在地</label>
                            <input title="地址" type="text" name="useraddress" id="useraddress" class="form-control" value="<?php echo ($userHomeRow[0]['useraddress']); ?>" >
                        </div>
                        <div class="form-group">
                            <label title="QQ" for="userqq"><i class="fa fa-dot-circle-o"></i> QQ  </label>
                            <input title="QQ" type="text" name="userqq" id="userqq" class="form-control" value="<?php echo ($userHomeRow[0]['userqq']); ?>" >
                        </div>
                        <div class="form-group">
                            <label title="微信" for="userwechat"><i class="fa fa-dot-circle-o"></i> 微信  </label>
                            <input title="微信" type="text" name="userwechat" id="userwechat" class="form-control" value="<?php echo ($userHomeRow[0]['userwechat']); ?>" >
                        </div>
                        <div class="form-group">
                            <label title="兴趣" for="userinterest"><i class="fa fa-dot-circle-o"></i> 兴趣  </label>
                            <textarea class="hidden"></textarea>
                            <textarea title="兴趣"  name="userinterest" id="userinterest" class="form-control" rows="3" wrap="hard"><?php echo ($userHomeRow[0]['userinterest']); ?></textarea>
                        </div>   
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <button type="submit" id="userloginbutton" class="btn btn-primary">更新个人资料</button>
                        </div>
                    </div>
                </div>
             </form>
            
        </div><!--col-9 end-->
    <?php else: ?>
        <div class="col-md-12">
            <div class="jumbotron">
                <h2 class="text-center"><i class="fa fa-warning"></i></h2>
              <h2 class="text-center">用户不存在</h2>
            </div>
        </div><?php endif; ?>
    </div><!--row end-->
</div><!--container end-->


<div class="container">
	<footer>
       <p class="pull-right "><a href="#" class="scrollToTop">Back to top</a></p>
    </footer>
</div>
<footer class="footer"style="margin-top:20px">

		<div class=" text-center ">
	        <h3><small>powered by <a href="http://www.ptbird.cn" target="_blank">postbird</a></small></h3>
        </div>
</footer>
</body>
</html>