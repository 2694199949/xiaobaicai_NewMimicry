<?php
/*
 版权所有：小白菜
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
include("./includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $conf['sitename']; ?></title>
    <meta name="description" content="<?php echo $conf['description']; ?>">
    <meta name="keywords" content="<?php echo $conf['keywords']; ?>">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
  <script src="assets/js/jquery.js"></script>
</head>
<body>
  <div class="content">
    <div class="top">
      <div id="ti">
      <?php echo $conf['toptitle']; ?>
      </div>
      <div id="hitokoto">
        <script>
          hitokoto()
        </script>
      </div>
    </div>
    <div class="middle">
      <div class="card middle-left">
        <div class="box-left">
          <img class="img" src="<?php echo $conf['logo']; ?>">
        </div>
        <div class="box-right">
          <font class="admin"><i></i><?php echo $conf['adminname']; ?></font>
        </div>
        <div class="zbfont">
          <h4>
            <font class="zuobiao"><i></i><?php echo $conf['zuobiao']; ?></font>
            <div><?php echo $conf['zuobiaoen']; ?></div>
          </h4>
        </div>
        <div class="new-card">
          <div class="hua">
            <h5><?php echo $conf['box_left']; ?>
            </h5>
          </div>
        </div>
      </div>
      <div class="card middle-right">
        <div class="new-card">
        <h6>
        	<?php echo $conf['box_right1']; ?>
        	</h6>
        </div>
      </div>
      <div class="card middle-right">
        <div class="new-card">
        <h6>
        	<?php echo $conf['box_right2']; ?>
        	</h6>
        </div>
      </div>
    </div>
    <div class="box-bottom">
      <div class="card-bottom">
      		<?php
      	$rs=$DB->query("SELECT * FROM xbc_web WHERE active=1 order by id desc limit 7");
      	while($res = $DB->fetch($rs))
      	{
      	echo ' <div class="web-card bottom-web"><a href="'.$res['url'].'" target="_blank"><i></i>'.$res['name'].'</a></div>';
      	}
      	        ?>
      </div>
    </div>
    <div class="card-font">
      <div class="box-bottom">
        <a href="javascript:;" onclick="jQuery('.wb-box-QQ').show()">
          <div class="Round qq"><i></i></div>
        </a>
         <a href="javascript:;" onclick="jQuery('.wb-box-ZFB').show()">
        <div class="Round zfb"><i></i></div>
                </a>
         <a href="javascript:;" onclick="jQuery('.wb-box-ZSM').show()">
        <div class="Round github"><i></i></div>
                </a>
         <a href="javascript:;" onclick="jQuery('.wb-box-WX').show()">
        <div class="Round vx"><i></i></div>      
        </a>
      </div>
    </div>
    <div class="foot">
      <?php echo $conf['footer']; ?>
    </div>
  </div>
  <audio autoplay loop id="music">
    <source src="<?php echo $conf['music']; ?>" type="audio/mpeg">
  </audio>

  <div id="tp-weather-widget" style="position:absolute;z-index:99999;"></div>
  <script src="main.js"></script>
  <div class="wb-box-QQ">
    <div class="wb-box1">
      <img href="index.html" src="<?php echo $conf['qqimg']?>" height="320" class="imgc" />
    </div>
    <div class="wb-box-text">
      <a style="font-size:15px; font-weight:bold;color:#ffffff;"><?php echo $conf['qqtext']?></a>
    </div>
    <div class="wb-box-bg">
      <img href="javascript:;" width="100%" height="600%" src="assets/img/bg.png" onclick="jQuery('.wb-box-QQ').hide()" class="close" />
    </div>
  </div>
  <div class="wb-box-WX">
    <div class="wb-box1">
      <img href="index.html" src="<?php echo $conf['vximg']?>" class="imgc" height="265" />
    </div>
    <div class="wb-box-text">
      <a style="font-size:15px; font-weight:bold;color:#ffffff;"><?php echo $conf['vxtext']?></a>
    </div>
    <div class="wb-box-bg">
      <img href="javascript:;" width="100%" height="600%" src="assets/img/bg.png" onclick="jQuery('.wb-box-WX').hide()" class="close" />
    </div>
  </div>
  <div class="wb-box-ZFB">
    <div class="wb-box1">
      <img href="index.html" src="<?php echo $conf['zfbimg']?>" class="imgc" height="265" />
    </div>
    <div class="wb-box-text">
      <a style="font-size:15px; font-weight:bold;color:#ffffff;"><?php echo $conf['zfbtext']?></a>
    </div>
    <div class="wb-box-bg">
      <img href="javascript:;" width="100%" height="600%" src="assets/img/bg.png" onclick="jQuery('.wb-box-ZFB').hide()" class="close" />
    </div>
  </div>
  <div class="wb-box-ZSM">
    <div class="wb-box1">
      <img href="index.html" src="<?php echo $conf['githubimg']?>" class="imgc" height="265" />
    </div>
    <div class="wb-box-text">
      <a style="font-size:15px; font-weight:bold;color:#ffffff;"><?php echo $conf['githubtext']?></a>
    </div>
    <div class="wb-box-bg">
      <img href="javascript:;" width="100%" height="600%" src="assets/img/bg.png" onclick="jQuery('.wb-box-ZSM').hide()" class="close" />
    </div>
  </div>
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
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?418d64f96155f87a164675678dd83fab";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
</body>

</html>