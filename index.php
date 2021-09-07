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
    <div class="box-box">
      <div class="box-top">
        <a href="<?php echo $config['fontqq']?>" target="_blank"><font class="qq"><i></i></font></a>
        <a href="<?php echo $config['fontzfb']?>" target="_blank"><font class="zfb"><i></i></font></a>
        <a href="<?php echo $config['fontgithub']?>" target="_blank"><font class="github"><i></i></font></a>
        <a href="<?php echo $config['fontvx']?>" target="_blank"><font class="vx"><i></i></font></a>
      </div>
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
    <div class="footer">
      <br><?php echo $config['foot']?>
    </div>
  </div>
  </div>
</body>
</html>
