<?php
/*
 版权所有：小白菜
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
error_reporting(0);
define('IN_CRONLITE', true);
define('VERSION', '1001');
define('SYSTEM_ROOT', dirname(__FILE__).'/');
define('ROOT', dirname(SYSTEM_ROOT).'/');
define('SYS_KEY', 'xbcxbc');
define('CC_Defender', 1); //防CC攻击开关(1为session模式)

date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();

if(CC_Defender!=0)
	include_once SYSTEM_ROOT.'security.php';

if(is_file(SYSTEM_ROOT.'360safe/360webscan.php')){//360网站卫士
    require_once(SYSTEM_ROOT.'360safe/360webscan.php');
}

require ROOT.'config.php';

if(!defined('SQLITE') && (!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']))//检测安装
{
header('Content-type:text/html;charset=utf-8');
echo '<div style="border-radius: 50px;background: #fff;box-shadow:  5px 5px 10px #bebebe,-5px -5px 10px #ffffff;text-align:center;font-size:24pt;padding:20px;margin:20vh auto;">你还没安装！<a href="../install/">点此安装</a></div>';
exit();
}

//连接数据库
include_once(SYSTEM_ROOT."db.class.php");
$DB=new DB($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']);

if($DB->query("select * from xbc_config where 1")==FALSE)//检测安装2
{
header('Content-type:text/html;charset=utf-8');
echo '<div style="border-radius: 50px;background: #fff;box-shadow:  5px 5px 10px #bebebe,-5px -5px 10px #ffffff;text-align:center;font-size:24pt;padding:20px;margin:20vh auto;">你还没安装！<a href="../install/">点此安装</a></div>';
exit();
}


$siterow=$DB->get_row("select * from xbc_domain where domain='{$_SERVER['HTTP_HOST']}' limit 1");
if($siterow && $siterow['siteid']!=1){
	$siteid=$siterow['siteid'];
	$conf=$DB->get_row("SELECT * FROM xbc_config WHERE id='$siteid' limit 1");//获取系统配置
	if($conf['date']<date("Y-m-d"))
		exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>");
	elseif($conf['active']==0)
		exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>");
	else{
		$is_fenzhan=1;
	}
}else{
	$is_fenzhan=0;
	$siteid=1;
	$conf=$DB->get_row("SELECT * FROM xbc_config WHERE id='$siteid' limit 1");//获取系统配置
}

include_once(SYSTEM_ROOT."function.php");
include_once(SYSTEM_ROOT."member.php");
?>