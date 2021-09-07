<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>后台管理</title>
  <link rel="stylesheet" type="text/css" href="style.css" data-for="result">
</head>
<body>
  <?php
/*
   版权所有：小白菜 QQ：2694199949
   开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
  */
error_reporting(0);
include './pass.php';
function qxg($str) {
	$str=stripslashes($str);
	$str=str_replace('\'','\\'.'\'',$str);
	return $str;
}
$namess=end(explode('/',$_SERVER['PHP_SELF']));
if($_COOKIE['x_Cookie'] == $用户名 and $_COOKIE['y_Cookie'] == $密码) {
} else {
	if(!empty($_POST['adminname'])) {
		if($_POST['password'] == $密码 & $_POST['adminname'] == $用户名) {
			setcookie("y_Cookie", $密码);
			setcookie("x_Cookie", $用户名);
		} else {
			echo"<script>alert('用户名或密码错误!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
			exit;
		}
	} else {
		?>
		    <div class="login_box">
		    <div class="login">
		        <div class="login-title">登录后台</div>
		        <form action="./<?php echo $namess;?>" method="POST" autocomplete="off">
		          <div class="login-line">
		            <input type="text" name="adminname" class="inputtxt" autocomplete="on" placeholder="账号">
		          </div>
		          <div class="login-line">
		            <input type="password" name="password" class="inputtxt" placeholder="密码">
		          </div>
		          <input type="submit" value="登录" class="buttontxt">
		        </form>
		      </div>
		  </div>
		  </div>
		  <?php exit;
	}
}
?>
<?php if(empty($_GET['sort'])) {
	$_GET['sort']='index';
}
?>
<div class="index">
<div class="index-h">
</div>
<div class="index-c">
<div class="index-nav">
	<ul>
		<li><a href="../index.php" target="_blank" >网站前台</a></li>
		<li><a href="?">基本设置</a></li>
		<li><a href="?sort=admin">修改密码</a></li>
	</ul>
</div>
<?php if($_GET['sort']=='index') {
	include '../includes/config.php';
	$strm=
	array(array('网站名称','title',''),
	array('标题','description',''),
	array('关键字','keywords','默认：个人主页,新拟态主页,白菜新拟态主页'),
	array('网站简介','sketch','默认：新拟态前端开发，白菜新拟态主页'),
	array('头像地址','adminpng','外部url加http://或https://'),
	array('管理员名称','adminname','默认：小白菜'),
	array('首页左顶标题','hometitle','默认：New Mimicry'),
	array('中文坐标','zuobiao','默认：中国 广东'),
	array('英文坐标','guad','默认：CHINA GUANGDONG'),
	array('QQ链接','fontqq',''),
	array('支付宝链接','fontzfb',''),
	array('Github链接','fontgithub',''),
	array('微信链接','fontvx',''),
	array('自定义区块','zbox','默认：待续'),
	array('信息介绍','webbox',''),
	array('底部站点','footweb',''),
	array('版权代码','foot',''));
	?>	
		 <?php 
		 if($_GET['mod']=='save') {
		$strss='<?php ';
		for ($i=0;$i<count($strm);$i++) {
			$guodus=explode('-',$strm[$i][1]);
			if(count($guodus)==1) {
				$strss.='$config[\''.$guodus[0].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';
			} elseif(count($guodus)==2) {
				$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';
			} elseif(count($guodus)==3) {
				$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\'][\''.$guodus[2].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';
			}
		}
		$strss.=' ?>';
		file_put_contents('../includes/config.php',$strss);
		echo"<script>alert('设置保存成功!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
		?>	
			 <?php exit;
	}
	?>
	<form action="?sort=index&mod=save" method="POST">
	<table width="100%" border="1" class="table_striped table_hover">
	<?php for ($i=0;$i<count($strm);$i++) {
		?>
		<tr>
		    <td width="150"><?php echo $strm[$i][0];
		?></td>
		    <td><?php if($i<14) {
			?><input type="text" name="<?php echo $strm[$i][1];?>"  autocomplete="off"  value="<?php echo $config[$strm[$i][1]];?>">
				<?php
		} else {
			?>
				<textarea rows="6" cols="130%" name='<?php echo $strm[$i][1];?>'><?php echo $config[$strm[$i][1]];
			?></textarea>
				<?php
		}
		?>
			</td>
			<td width="200"><?php echo $strm[$i][2];
		?></td>
		  </tr>
			<?php
	}
	?>
		</table>
	<input  type="submit" value="保存修改" class="button" >
	</form>
	<?php
} elseif($_GET['sort']=='admin') {
	?>   
		<?php if($_GET['mod']=='save') {
		if(!empty($_POST['name']) and !empty($_POST['pass'])) {
			$strss='<?php $用户名=\''.$_POST['name'].'\'; $密码=\''.$_POST['pass'].'\';?>';
			file_put_contents('./pass.php',$strss);
		} else {
			$zt='n';
		}
		?>	
			 <br>
			 <?php if($zt=='n') {
			echo "<script>alert('用户名或密码不能为空!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
		} else {
			echo "<script>alert('用户名密码修改成功!!!');location.href='?sort=index';</script>";
		}
		?><?php exit;
	}
	?>
	<form action="?sort=admin&mod=save" method="POST">
	<table width="100%" border="0" cellspacing="2">
		<tr>
		<td width="150">修改用户名</td>
		<td><input type="text" name="name"  autocomplete="off" placeholder="输入修改后的用户名" style="width:91%"></td>
		<td>请设置复杂一点的用户名</td>
		</tr>
	  <tr>
	    <td width="150">修改密码</td>
	    <td><input type="text" name="pass"  autocomplete="off" placeholder="输入修改后的密码" style="width:91%"></td>
		<td>请设置复杂一点的密码</td>	
	  </tr>
	</table>    
	<input  type="submit" value="保存修改" class="button">
	</form>
	 <?php
}
?>
 <div class="index-f">
	<p>Copyright © 2021 版权所有. <a href="https://github.com/2694199949/xiaobaicai_NewMimicry">小白菜</a></p>
	项目开源地址：<a href="https://github.com/2694199949/xiaobaicai_NewMimicry" target="_blank">Github</a>.
</div>
</div>
</div>
 </body
 ></html>