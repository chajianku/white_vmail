<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
loadhead();
if (isset($_GET['key'])) {
	$verifyKey = $_GET['key'];
} else {
	$verifyKey = '';
}
$result = $m->query("SELECT white_vmail_code FROM ".DB_PREFIX."users WHERE id = ".$i['user']['uid']);
$row = $m->fetch_array($result);
$verifyCode = $row['white_vmail_code'];
if (sha1(md5($verifyCode)) == $verifyKey) {
	$m->query("UPDATE ".DB_PREFIX."users SET white_vmail_verify = 1 WHERE id = ".$i['user']['uid']);
	echo '
	<div class="panel panel-success">
		<div class="panel-heading">邮箱验证</div>
		<div class="panel-body">
			<h3>邮箱已完成验证！</h3>
		</div>
	</div>
	';
} else {
	echo '
	<div class="panel panel-danger">
		<div class="panel-heading">邮箱验证</div>
		<div class="panel-body">
			<h3>邮箱验证失败！</h3>
		</div>
	</div>
	';
}
?>

<?php
echo '邮箱有效性验证 V1.0 // 插件作者：<a href="http://blog.vgoing.net" target="_blank">white</a><br/>百度贴吧云签到 V3.9 // 程序作者: <a href="http://zhizhe8.net" target="_blank">无名智者</a> &amp; <a href="http://www.longtings.com/" target="_blank">mokeyjay</a>';
loadfoot();
?>