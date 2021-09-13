<?php
/*
 版权所有：小白菜 QQ：2694199949
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=100%, initial-scale=1"/>
  <title><?php echo $config['title']?></title>
  <link rel="shortcut icon" href="<?php echo $config['icon']?>">
  <meta name="keywords" content="<?php echo $config['keywords']?>" />
  <meta name="description" content="<?php echo $config['description']?>" />
  <link rel="stylesheet" href="style.css">
  <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
</head>
<body>
  <div id="content">
    <div id="ti">
      <?php echo $config['hometitle']?>
    </div>
    <div id="hitokoto">
      <script>
        hitokoto()
      </script>
    </div>
    <div class="toptop">
      <div class="box">
      <?php echo $config['title']?>
    </div>
    </div>
    <div class="main">
      <div class="main-1">
        <div class="box">
          <img class="img" src="<?php echo $config['adminpng']?>">
          <div class="boxbox">
            <center>
              <font class="admin"><i></i><?php echo $config['adminname']?></font>
            </center>
          </div>
        </div>
      </div>
      <div class="main-2">
        <div class="box ju">
          <h4>
            <font class="zuobiao"><i></i><?php echo $config['zuobiao']?></font>
            <div><?php echo $config['guad']?></div>
          </h4>
        </div>
        <div class="box">
          <font class="newweb"><i></i><?php echo $config['webbox']?></font>
        </div>
        <div class="box">
          <?php echo $config['zbox']?>
        </div>
      </div>
    </div>
    <div class="foot">      
<?php echo $config['footweb']?>
    </div>
        <div class="foots">
          <div class="box-top" style="text-align: center;margin-top: 5%;">
        <a href="<?php echo $config['fontqq']?>" target="_blank"><font class="qq"><i></i></font></a>
        <a href="<?php echo $config['fontzfb']?>" target="_blank"><font class="zfb"><i></i></font></a>
        <a href="<?php echo $config['fontgithub']?>" target="_blank"><font class="github"><i></i></font></a>
        <a href="<?php echo $config['fontvx']?>" target="_blank"><font class="vx"><i></i></font></a>
      </div>
      </div>
    <div class="footer">
      <br><?php echo $config['foot']?>
    </div>
  </div>
  </div>
 <embed src="<?php echo $config['music']?>" loop="true" autostart="true" hidden="true">
 	<div id="tp-weather-widget" style="position:absolute;z-index:99999;"></div>
</body>
	<style type="text/css">
			a.sc-eHgmQL.hQLwwD {
				display: none;
			}
			#tp-weather-widget .sw-container {
				right: 10px !important;
				left: unset !important;
			}
		</style>
		<script>
			(function(a, h, g, f, e, d, c, b) {
				b = function() {
					d = h.createElement(g);
					c = h.getElementsByTagName(g)[0];
					d.src = e;
					d.charset = "utf-8";
					d.async = 1;
					c.parentNode.insertBefore(d, c)
				};
				a["SeniverseWeatherWidgetObject"] = f;
				a[f] || (a[f] = function() {
					(a[f].q = a[f].q || []).push(arguments)
				});
				a[f].l = +new Date();
				if (a.attachEvent) {
					a.attachEvent("onload", b)
				} else {
					a.addEventListener("load", b, false)
				}
			}(window, document, "script", "SeniverseWeatherWidget", "//cdn.sencdn.com/widget2/static/js/bundle.js?t=" +
				parseInt((new Date().getTime() / 100000000).toString(), 10)));
			window.SeniverseWeatherWidget('show', {
				flavor: "bubble",
				location: "WX4FBXXFKE4F",
				geolocation: true,
				language: "zh-Hans",
				unit: "c",
				theme: "auto",
				token: "26c4103c-986c-4ecc-a1f7-a52b5d18b1a6",
				hover: "enabled",
				container: "tp-weather-widget"
			})
		</script>
		<script src="index.js"></script>
</html>
