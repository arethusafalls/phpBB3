<?php
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_url_matcher.' . $phpEx);

// Start session management

$login_result = $auth->login("root", "password", true, 1, 0);

if ($user->data['user_id'] == ANONYMOUS)
{
    echo 'Please login!';
}
else
{
    echo 'Thanks for logging in, ' . $user->data['username_clean'];
}

?>