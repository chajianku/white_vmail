<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }

/**
* @function callback_init()
* 向用户表users 添加三个字段 
* white_vmail_send 用于存储验证邮件发送信息
* white_vmail_verify 用于存储用户验证情况
* white_vmail_code 用于存储验证码
*/
function callback_init() {
	global $m;
	$m->query("ALTER TABLE `".DB_PREFIX."users` ADD white_vmail_send tinyint(1) default 0");
	$m->query("ALTER TABLE `".DB_PREFIX."users` ADD white_vmail_verify tinyint(1) default 0");
	$m->query("ALTER TABLE `".DB_PREFIX."users` ADD white_vmail_code int(8)");
}

function callback_remove() {
	global $m;
	$m->query("ALTER TABLE `".DB_PREFIX."users` DROP column `white_vmail_send`");
	$m->query("ALTER TABLE `".DB_PREFIX."users` DROP column `white_vmail_verify`");
	$m->query("ALTER TABLE `".DB_PREFIX."users` DROP column `white_vmail_code`");
}

?>