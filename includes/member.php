<?php
/*
 版权所有：小白菜
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
if(!defined('IN_CRONLITE'))exit();
$my=isset($_GET['my'])?$_GET['my']:null;
$clientip=$_SERVER['REMOTE_ADDR'];
if(isset($_COOKIE["admin_token"]))
{
	$token=authcode(daddslashes($_COOKIE['admin_token']), 'DECODE', SYS_KEY);
	list($user, $sid) = explode("\t", $token);
	$session=md5($conf['user'].$conf['pwd'].$password_hash);
	if($session==$sid) {
		$islogin=1;
	}
}
?>