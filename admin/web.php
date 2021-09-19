<?php 
/*
 版权所有：小白菜 QQ：2694199949
 开源地址：https://github.com/2694199949/xiaobaicai_NewMimicry
*/
include("../includes/common.php");
$title='站点管理';
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
		  <li class="active"><a href="./web.php"><span class="glyphicon glyphicon-tasks"></span> 站点管理</a></li>
		  <li><a href="../"><span class="glyphicon glyphicon-home"></span> 返回首页</a></li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-sm-12 col-md-10 center-block" style="float: none;">
<?php
$my=isset($_GET['my'])?$_GET['my']:null;

if($my=='add')
{
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">添加站点</h3></div>
<div class="panel-body">';
echo '<div class="panel-body">';
echo '<form action="./web.php?my=add_submit" method="POST">
<div class="form-group">
<label>*站点名称</label><br>
<input type="text" class="form-control" name="name" value="" required>
</div>
<div class="form-group">
<label>*站点url链接</label><br>
<input type="text" class="form-control" name="url" value="" required>
</div>
<div class="form-group">
<label>*是否显示</label><br>
<select class="form-control" name="active"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<br/>

<input type="submit" class="btn btn-primary btn-block" value="确定添加"></form>';
echo '<br/><a href="./web.php">>>返回站点列表</a>';
echo '</div></div>
<script>
$("select[name=\'is_curl\']").change(function(){
	if($(this).val() == 1){
		$("#curl_display").css("display","inherit");
	}else{
		$("#curl_display").css("display","none");
	}
});
function Addstr(id, str) {
	$("#"+id).val($("#"+id).val()+str);
}
</script>';
}
elseif($my=='edit')
{
$id=$_GET['id'];
$row=$DB->get_row("select * from xbc_web where id='$id' limit 1");
echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">修改站点信息</h3></div>
<div class="panel-body">';
echo '<div class="panel-body">';
echo '<form action="./web.php?my=edit_submit&id='.$id.'" method="POST">
<div class="form-group">
<label>站点名称</label><br>
<input type="text" class="form-control" name="name" value="'.$row['name'].'" required>
</div>
<div class="form-group">
<label>站点url链接</label><br>
<input type="text" class="form-control" name="url" value="'.$row['url'].'" required>
</div>
<div class="form-group">
<label>是否显示</label><br>
<select class="form-control" name="active" default="'.$row['active'].'"><option value="1">1_是</option><option value="0">0_否</option></select>
</div>
<br/>

<input type="submit" class="btn btn-primary btn-block"
value="确定修改"></form>
';
echo '<br/><a href="./web.php">>>返回站点列表</a>';
echo '</div></div>
<script>
$("select[name=\'is_curl\']").change(function(){
	if($(this).val() == 1){
		$("#curl_display").css("display","inherit");
	}else{
		$("#curl_display").css("display","none");
	}
});
function Addstr(id, str) {
	$("#"+id).val($("#"+id).val()+str);
}
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default")||0);
}
</script>';
}
elseif($my=='add_submit')
{
$name=$_POST['name'];
$url=$_POST['url'];
$active=$_POST['active'];
if($name==NULL or $url==NULL){
showmsg('保存错误,请确保每项都不为空!',3);
} else {
$sql="insert into `xbc_web` (`name`,`url`,`active`) values ('".$name."','".$url."','".$active."')";
if($DB->query($sql)){
	showmsg('添加站点成功！<br/><br/><a href="./web.php">>>返回站点列表</a>',1);
}else
	showmsg('添加站点失败！'.$DB->error(),4);
}
}
elseif($my=='edit_submit')
{
$id=$_GET['id'];
$rows=$DB->get_row("select * from xbc_web where id='$id' limit 1");
if(!$rows)
	showmsg('当前记录不存在！',3);
$name=$_POST['name'];
$url=$_POST['url'];
$active=$_POST['active'];
if($name==NULL or $url==NULL){
showmsg('保存错误,请确保每项都不为空!',3);
} else {
if($DB->query("update xbc_web set name='$name',url='$url',active='$active' where id='{$id}'"))
	showmsg('修改站点成功！<br/><br/><a href="./web.php">>>返回站点列表</a>',1);
else
	showmsg('修改站点失败！'.$DB->error(),4);
}
}
elseif($my=='delete')
{
$id=$_GET['id'];
$sql="DELETE FROM xbc_web WHERE id='$id'";
if($DB->query($sql))
	showmsg('删除成功！<br/><br/><a href="./web.php">>>返回站点列表</a>',1);
else
	showmsg('删除失败！'.$DB->error(),4);
}
else
{

$numrows=$DB->count("SELECT count(*) from xbc_web");
$sql=" 1";
$con='系统共有 <b>'.$numrows.'</b> 个站点<br/><a href="./web.php?my=add" class="btn btn-primary">新增站点</a>';

echo '<div class="alert alert-info">';
echo $con;
echo '</div>';

?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>ID</th><th>名称</th><th>链接</th><th>状态</th><th>操作</th></tr></thead>
          <tbody>
<?php
$pagesize=30;
$pages=intval($numrows/$pagesize);
if ($numrows%$pagesize)
{
 $pages++;
 }
if (isset($_GET['page'])){
$page=intval($_GET['page']);
}
else{
$page=1;
}
$offset=$pagesize*($page - 1);

$rs=$DB->query("SELECT * FROM xbc_web WHERE{$sql} order by id asc");
while($res = $DB->fetch($rs))
{
echo '<tr><td><b>'.$res['id'].'</b></td><td>'.$res['name'].'</td><td>'.$res['url'].'</td><td>'.($res['active']==1?'<font color=green>显示中</font>':'<font color=red>未显示</font>').'</td><td><a href="./web.php?my=edit&id='.$res['id'].'" class="btn btn-info btn-xs">编辑</a>&nbsp;<a href="./web.php?my=delete&id='.$res['id'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此站点链接吗？\');">删除</a></td></tr>';
}
?>
          </tbody>
        </table>
      </div>
      
<?php }?>
    </div>
  </div>