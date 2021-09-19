<?php
/*
 版权所有：小白菜 QQ：2694199949
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
$mod='blank';
include("../includes/common.php");
$title='后台管理';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">后台管理</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
          </li>
		  <li><a href="./set.php"><span class="glyphicon glyphicon-cog"></span> 系统管理</a></li>
		    <li><a href="./web.php"><span class="glyphicon glyphicon-tasks"></span> 站点管理</a></li>
		  <li><a href="../"><span class="glyphicon glyphicon-home"></span> 返回首页</a></li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
<?php
$numrows=$DB->count("SELECT count(*) from xbc_web");
$yyds="2.0";
$mysqlversion=$DB->count("select VERSION()");
?>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-success">
        <div class="panel-heading"><h3 class="panel-title">后台管理首页</h3></div>
          <ul class="list-group">
          <li class="list-group-item"><span class="glyphicon glyphicon-leaf"></span> 程序版本：V<?php echo $yyds?>&nbsp;&nbsp;<a href="https://github.com/2694199949/xiaobaicai_NewMimicry" target="_blank" class="panel panel-info">获取最新版本</a></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> <b>后台统计：</b>系统共有<?php echo $numrows?>个站点</li>
            <li class="list-group-item" style="color:red;"><span class="glyphicon glyphicon-bullhorn"></span> 温馨提示：二维码、LOGO等图片可以用本地路径，也可以使用外链。音乐链接格式要用mp3。</li>
          </ul>
      </div>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">服务器信息</h3>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<b>PHP 版本：</b><?php echo phpversion() ?>
			<?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>
		</li>
		<li class="list-group-item">
			<b>MySQL 版本：</b><?php echo $mysqlversion ?>
		</li>
		<li class="list-group-item">
			<b>服务器软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
		</li>
		
		<li class="list-group-item">
			<b>程序最大运行时间：</b><?php echo ini_get('max_execution_time') ?>s
		</li>
		<li class="list-group-item">
			<b>POST许可：</b><?php echo ini_get('post_max_size'); ?>
		</li>
		<li class="list-group-item">
			<b>文件上传许可：</b><?php echo ini_get('upload_max_filesize'); ?>
		</li>
	</ul>
</div>
    </div>
     <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;font-size:8pt;text-align:center;">
	Copyright © 2021 版权所有. <a href="https://github.com/2694199949/xiaobaicai_NewMimicry">小白菜</a>
	项目开源地址：<a href="https://github.com/2694199949/xiaobaicai_NewMimicry" target="_blank">Github</a>.
     </div>
  </div>