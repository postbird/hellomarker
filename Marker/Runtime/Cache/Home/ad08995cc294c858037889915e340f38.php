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
                    <a class="list-group-item" href="/hellomarkertest/marker.php/Home/Index/myNote/">我的记录
                    <i class="pull-right fa fa-bookmark"></i></a>
                    <a class="list-group-item" href="/hellomarkertest/marker.php/Home/Index/myShare/">我的分享<i class="pull-right fa fa-share-alt"></i></a>
                    <a class="list-group-item" href="/hellomarkertest/marker.php/Home/Index/myCollect/">我的收藏<i class="pull-right fa fa-heart"></i></a>
                </div>
            </div>
            <?php if($myErrorFlag == 1): ?><div class="alert alert-danger text-center">Error:  <?php echo ($myErrorInfo); ?></div>
            <?php elseif($myErrorFlag == 2): ?>
                    <div class="alert alert-success text-center">Success:  <?php echo ($myErrorInfo); ?></div>
            <?php elseif($myErrorFlag == 3): ?>
                    <div class="alert alert-warning text-center">Warning:  <?php echo ($myErrorInfo); ?></div><?php endif; ?>
        </div><!--col-3 end-->
        <div class="col-md-9">
    
      <div class="panel panel-default panel-share">
        <div class="panel-heading panel-share-heading">
            <span>我分享的</span><font color="#888">  •   <?php echo ($myNoteCount); ?> 条</font>
        </div>

        <?php if($myNoteFlag == 1): ?><!--         <div class="panel-heading panel-share-heading nav-bottom navbar-form">
            <form action="/hellomarkertest/marker.php/Home/Index/mySearch/" method="get" accept-charset="utf-8" class="form-inline">
                  <div class="form-group">
                      <input id="searchInput"name="selectName" type="text" class="form-control navbar-form navbar-form-left " placeholder="搜索...">
                      <input name="searchType" type="hidden" value="share">
                  <button type="submit" class="btn btn-default navbar-form search-button"><i class="fa fa-search"></i></button>
                  <div class="radio-group">
                      <label><input type="radio" name="selectType" value="address" class="form-control form-radio" checked>地址</label>
                      <label><input type="radio" name="selectType" value="name" class="form-control form-radio">名称</label>
                  </div>
                  </div>

            </form>
        </div> -->
            <div class=" list-group  share-list">
                <?php if(is_array($myNoteRows)): $i = 0; $__LIST__ = $myNoteRows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="#<?php echo ($vo["noteid"]); ?>" class="list-group-item <?php echo ($vo["noteid"]); ?>" onmouseover="shareListHover('.<?php echo ($vo["noteid"]); ?>');" onmouseout="shareListHoverOut('.<?php echo ($vo["noteid"]); ?>');">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="/hellomarkertest/marker.php/Home/Index/noteShareInfo/id/<?php echo ($vo["noteid"]); ?>/">
                                    <img src="/hellomarkertest/Public/uploads/markerimage/src/<?php echo ($vo["imgsrc"]); ?>" class="media-object img-circle" alt="<?php echo ($vo["notename"]); ?>" width="50px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="/hellomarkertest/marker.php/Home/Index/noteShareInfo/id/<?php echo ($vo["noteid"]); ?>" class="media-heading"><font><?php echo ($vo["notename"]); ?></font></a>
                                
                                <div class="media-meta">
                                  <i class="fa fa-clock-o"></i>&nbsp;&nbsp;分享时间  •   <?php echo ($vo["sharetime"]); ?> 
                                  &nbsp;&nbsp<i class="fa fa-comment-o"></i>  •   <?php echo ($vo["notediscusscount"]); ?> 讨论
                                  &nbsp;&nbsp<i class="fa fa-heart-o"></i>  •   <?php echo ($vo["notecollectcount"]); ?> 收藏
                                </div>
                            </div>
                            <div class="media-right media-middle ">
                               <a href="/hellomarkertest/marker.php/Home/Index/myNoteShareDelete/id/<?php echo ($vo["noteid"]); ?>" onclick="javascript:return myNoteShareConfirm();"><i title="取消分享"class="fa fa-trash"></i></a>
                            </div>
                        </div>
                       
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="panel-footer">
                <ul class="pagination">
                  <li> <?php echo ($show); ?></li>
               </ul>
            </div>
            <?php else: ?>
            <div class="panel-body">
                <div >
                    <h2 class="text-center"><i class="fa fa-warning"></i></h2>
                  <h2 class="text-center">暂无任何记录</h2>
                </div>
            </div><?php endif; ?>
        </div>
  
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