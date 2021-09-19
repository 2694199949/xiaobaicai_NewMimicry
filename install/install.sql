DROP TABLE IF EXISTS `xbc_config`;</explode>
CREATE TABLE `xbc_config` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `switch` int(1) NOT NULL DEFAULT '1',
  `user` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `toptitle` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `zuobiao` varchar(50) NOT NULL,
  `zuobiaoen` varchar(50) NOT NULL,
  `box_left` varchar(255) NULL,
  `box_right1` varchar(255) NULL,
  `box_right2` varchar(255) NULL,
  `music` varchar(255) NULL,
  `footer` varchar(255) NULL,
  `qqimg` varchar(255) NULL,
  `vximg` varchar(255) NULL,
  `zfbimg` varchar(255) NULL,
  `githubimg` varchar(255) NULL,
  `qqtext` varchar(255) NULL,
  `vxtext` varchar(255) NULL,
  `zfbtext` varchar(255) NULL,
  `githubtext` varchar(255) NULL,
  `template` int(1) NOT NULL DEFAULT '1',
  `active` INT(1) NOT NULL default '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

INSERT INTO `xbc_config`(`id`,  `switch`, `user`, `pwd`, `sitename`, `keywords`, `description`, `toptitle`, `logo`, `adminname`, `zuobiao`, `zuobiaoen`, `box_left`, `box_right1`, `box_right2`, `music`, `footer`, `qqimg`, `vximg`, `zfbimg`, `githubimg`, `qqtext`, `vxtext`, `zfbtext`, `githubtext`,  `active`) VALUES
('1', '1', 'admin', '123456', '白菜新拟态个人主页', '个人主页,个人单页,个人引导页,白菜新拟态个人主页,白菜新拟态个人引导页', '白菜新拟态个人主页/引导页，让你更好的展示自己', 'New Mimicry', 'assets/img/logo.png', '小白菜<br>Tencent_Mask', '中国 • 广东', 'CHINA GUANGDONG', ' 	钟爱写Web前端<br>本页面基于HTML和CSS开发<br>追求的不仅是技术更是梦想', '说出来你可能不信<br>一直被模仿，从未被超越。', '这是真的吗？<滑稽>', 'http://music.163.com/song/media/outer/url?id=1831407507.mp3', 'Copyright © 2021 版权所有.小白菜.<br>
项目开源地址：<a href="https://github.com/2694199949/xiaobaicai_NewMimicry" target="_blank">Github</a>.', 'https://pan.adg56.cn/view.php/1af89fb5b9a5eb62adf224fa424fd9ee.jpg', 'https://pan.adg56.cn/view.php/dba417c0a5b5b8cbd6cd027f9d0c97e2.jpg', 'https://pan.adg56.cn/view.php/be4fa5c18da587e3c7ad877baf482f39.png', 'https://pan.adg56.cn/view.php/af0afda9d9bcd9ca89429afb8a3839dc.jpg', 'QQ提示', '微信提示', '支付宝提示', 'Github提示', '1');</explode>

DROP TABLE IF EXISTS `xbc_web`;</explode>
create table `xbc_web` (
`id` int(1) NOT NULL AUTO_INCREMENT,
`url` varchar(255) NULL,
`name` text NULL,
`active` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>
INSERT INTO `xbc_web`(`id`, `url`, `name`, `active`) VALUES
('1', ' ', '站点一', '1');</explode>

DROP TABLE IF EXISTS `xbc_font`;</explode>
create table `xbc_font` (
`id` int(1) NOT NULL AUTO_INCREMENT,
`yyds` varchar(255) NULL,
`active` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>
INSERT INTO `xbc_font`(`id`, `yyds`, `active`) VALUES
('1', '2.0', '1');</explode>