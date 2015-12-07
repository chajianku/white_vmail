<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
/*
Plugin Name: 邮箱验证（UI_3）
Version: 1.2
Plugin URL: http://www.vgoing.net
Description: 此插件用于用户邮箱验证
Author: white
Author Email: admin@vgoing.net
Author URL: http://blog.vgoing.net
For: V3.0+
*/

function white_vmail_set() {
	echo '<li ';
	if(isset($_GET['plugin']) && $_GET['plugin'] == 'white_vmail') { echo 'class="active"'; }
	echo '><a href="index.php?mod=admin:setplug&plug=white_vmail"><span class="glyphicon glyphicon-envelope"></span> 邮箱验证管理</a></li>';
}

addAction('navi_3','white_vmail_set');

?>