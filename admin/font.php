<?php
/*
 版权所有：小白菜 QQ：2694199949
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
$mod='blank';
include("../includes/common.php");
$title='系统管理';
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
          <li>
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
          </li>

		  <li><a href="./set.php"><span class="glyphicon glyphicon-cog"></span> 系统管理</a></li>
		  <li class="active"><a href="./font.php"><span class="glyphicon glyphicon-qrcode"></span> 配二维码</a></li>
		  <li><a href="./web.php"><span class="glyphicon glyphicon-tasks"></span> 站点管理</a></li>
		  <li><a href="../"><span class="glyphicon glyphicon-home"></span> 返回首页</a></li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['submit'])) {
	$qqimg=daddslashes($_POST['qqimg']);
	$vximg=daddslashes($_POST['vximg']);
	$zfbimg=daddslashes($_POST['zfbimg']);
	$githubimg=daddslashes($_POST['githubimg']);
	$qqtext=daddslashes($_POST['qqtext']);
	$vxtext=daddslashes($_POST['vxtext']);
	$zfbtext=daddslashes($_POST['zfbtext']);
	$githubtext=daddslashes($_POST['githubtext']);
	$sql="update `xbc_config` set `qqimg` ='{$qqimg}',`vximg` ='{$vximg}',`zfbimg` ='{$zfbimg}',`githubimg` ='{$githubimg}',`qqtext` ='{$qqtext}',`vxtext` ='{$vxtext}',`zfbtext` ='{$zfbtext}',`githubtext` ='{$githubtext}' where `id`='{$siteid}'";
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">二维码配置</h3></div>
<div class="panel-body">
  <form action="./set.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">QQ二维码图片</label>
	  <div class="col-sm-10"><input type="text" name="qqimg" value="<?php echo $conf['qqimg']; ?>" class="form-control"/></div>
	  <label class="col-sm-2 control-label">QQ顶部提示文字</label>
	  <div class="col-sm-10"><input type="text" name="qqtext" value="<?php echo $conf['qqtext']; ?>" class="form-control"  /></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">微信二维码</label>
	  <div class="col-sm-10"><input type="text" name="vximg" value="<?php echo $conf['vximg']; ?>" class="form-control"  /></div>
	  <label class="col-sm-2 control-label">微信顶部提示文字</label>
	  <div class="col-sm-10"><input type="text" name="vxtext" value="<?php echo $conf['vxtext']; ?>" class="form-control"  /></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">支付宝二维码</label>
	  <div class="col-sm-10"><input type="text" name="zfbimg" value="<?php echo $conf['zfbimg']; ?>" class="form-control"/></div>
	  <label class="col-sm-2 control-label">支付宝顶部提示文字</label>
	  <div class="col-sm-10"><input type="text" name="zfbtext" value="<?php echo $conf['zfbtext']; ?>" class="form-control"  /></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">Github二维码</label>
	  <div class="col-sm-10"><input type="text" name="githubimg" value="<?php echo $conf['githubimg']; ?>" class="form-control"/></div>
	  <label class="col-sm-2 control-label">Github顶部提示文字</label>
	  <div class="col-sm-10"><input type="text" name="githubtext" value="<?php echo $conf['githubtext']; ?>" class="form-control"  /></div>
	</div><br/>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
	 </div>
	</div>
  </form>
</div>
</div>
<?php
}?>

    </div>
  </div>