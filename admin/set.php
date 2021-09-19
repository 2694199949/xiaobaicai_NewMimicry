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
		  <li class="active"><a href="./set.php"><span class="glyphicon glyphicon-cog"></span> 系统管理</a></li>
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
	$sitename=daddslashes($_POST['sitename']);
	$keywords=daddslashes($_POST['keywords']);
	$description=daddslashes($_POST['description']);
	$toptitle=daddslashes($_POST['toptitle']);
	$logo=daddslashes($_POST['logo']);
	$adminname=daddslashes($_POST['adminname']);
	$zuobiao=daddslashes($_POST['zuobiao']);
	$zuobiaoen=daddslashes($_POST['zuobiaoen']);
	$box_left=daddslashes($_POST['box_left']);
	$box_right1=daddslashes($_POST['box_right1']);
	$box_right2=daddslashes($_POST['box_right2']);
	$music=daddslashes($_POST['music']);
	$footer=daddslashes($_POST['footer']);
	$user=daddslashes($_POST['user']);
	$pwd=daddslashes($_POST['pwd']);
	$qqimg=daddslashes($_POST['qqimg']);
	$vximg=daddslashes($_POST['vximg']);
	$zfbimg=daddslashes($_POST['zfbimg']);
	$githubimg=daddslashes($_POST['githubimg']);
	$qqtext=daddslashes($_POST['qqtext']);
	$vxtext=daddslashes($_POST['vxtext']);
	$zfbtext=daddslashes($_POST['zfbtext']);
	$githubtext=daddslashes($_POST['githubtext']);
	$sql="update `xbc_config` set `sitename` ='{$sitename}',`keywords` ='{$keywords}',`description` ='{$description}',`toptitle` ='{$toptitle}',`logo` ='{$logo}',`adminname` ='{$adminname}',`zuobiao` ='{$zuobiao}',`zuobiaoen` ='{$zuobiaoen}',`box_left` ='{$box_left}',`box_right1` ='{$box_right1}',`box_right2` ='{$box_right2}',`music` ='{$music}',`footer` ='{$footer}', `qqimg` ='{$qqimg}',`vximg` ='{$vximg}',`zfbimg` ='{$zfbimg}',`githubimg` ='{$githubimg}',`qqtext` ='{$qqtext}',`vxtext` ='{$vxtext}',`zfbtext` ='{$zfbtext}',`githubtext` ='{$githubtext}' where `id`='{$siteid}'";
	if(!empty($pwd))$DB->query("update `xbc_config` set `pwd` ='{$pwd}',`user` ='{$user}' where `id`='{$siteid}'");
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>
<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">系统配置</h3></div>
<div class="panel-body">
  <form action="./set.php" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站名称</label>
	  <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $conf['sitename']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">关键字</label>
	  <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $conf['keywords']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站描述</label>
	  <div class="col-sm-10"><input type="text" name="description" value="<?php echo $conf['description']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">顶部标题</label>
	  <div class="col-sm-10"><input type="text" name="toptitle" value="<?php echo $conf['toptitle']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">头像地址</label>
	  <div class="col-sm-10"><input type="text" name="logo" value="<?php echo $conf['logo']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">作者名称</label>
	  <div class="col-sm-10"><input type="text" name="adminname" value="<?php echo $conf['adminname']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">中文坐标</label>
	  <div class="col-sm-10"><input type="text" name="zuobiao" value="<?php echo $conf['zuobiao']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">英文坐标</label>
	  <div class="col-sm-10"><input type="text" name="zuobiaoen" value="<?php echo $conf['zuobiaoen']; ?>" class="form-control"/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">背景音乐&nbsp;&nbsp;<a href="http://www.musictool.top/" target="_blank">在线获取链接/下载音乐</a></label>
	  <div class="col-sm-10"><input type="text" name="music" value="<?php echo $conf['music']; ?>" class="form-control"/></div>
	</div><br/>
    <div class="form-group">
	  <label class="col-sm-2 control-label">个人简介</label>
	  <div class="col-sm-10"><textarea class="form-control" name="box_left" rows="5"><?php echo $conf['box_left']; ?></textarea></div>
	</div><br/>
    <div class="form-group">
	  <label class="col-sm-2 control-label">个人留言一</label>
	  <div class="col-sm-10"><textarea class="form-control" name="box_right1" rows="5"><?php echo $conf['box_right1']; ?></textarea></div>
	</div><br/>
    <div class="form-group">
	  <label class="col-sm-2 control-label">个人留言二</label>
	  <div class="col-sm-10"><textarea class="form-control" name="box_right2" rows="5"><?php echo $conf['box_right2']; ?></textarea></div>
	</div><br/>
    <div class="form-group">
	  <label class="col-sm-2 control-label">底部版权</label>
	  <div class="col-sm-10"><textarea class="form-control" name="footer" rows="5"><?php echo $conf['footer']; ?></textarea></div>
	</div><br/>
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
	  <label class="col-sm-2 control-label">用户名重置</label>
	  <div class="col-sm-10"><input type="text" name="user" value="" class="form-control" placeholder="不修改请留空"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">密码重置</label>
	  <div class="col-sm-10"><input type="text" name="pwd" value="" class="form-control" placeholder="不修改请留空"/></div>
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