<?php
/**
*
* Thanks For Posts extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CLEAR_LIST_THANKS'			=> 'Clear Reps List',
	'CLEAR_LIST_THANKS_CONFIRM'	=> 'Do you really want to clear the user`s Reps List?',
	'CLEAR_LIST_THANKS_GIVE'	=> 'List of Reps issued by the user was cleared.',
	'CLEAR_LIST_THANKS_POST'	=> 'List of Reps in the message was cleared.',
	'CLEAR_LIST_THANKS_RECEIVE'	=> 'List of Reps obtained by the user was cleared.',

	'DISABLE_REMOVE_THANKS'		=> 'Deleting Reps has been disabled by the administrator',

	'GIVEN'						=> 'Has&nbsp;Repped',
	'GLOBAL_INCORRECT_THANKS'	=> 'You cannot give Reps for a Global Announcement that has no reference to a particular forum.',
	'GRATITUDES'				=> 'Reps list',

	'INCORRECT_THANKS'			=> 'Invalid Rep',

	'JUMP_TO_FORUM'				=> 'Jump to forum',
	'JUMP_TO_TOPIC'				=> 'Jump to topic',

	'FOR_MESSAGE'				=> ' for post',
	'FURTHER_THANKS'     	    => ' and one more user',
	'FURTHER_THANKS_PL'         => ' and %d more users',

	'NO_VIEW_USERS_THANKS'		=> 'You are not authorised to view the Reps List.',

	'NOTIFICATION_THANKS_GIVE'	=> array(
		1 => '<strong>Received Rep</strong> from %1$s for the post:',
		2 => '<strong>Received Rep</strong> from %1$s for the post:',
	),
	'NOTIFICATION_THANKS_REMOVE'=> array(
		1 => '<strong>Removed Rep</strong> from %1$s for the post:',
		2 => '<strong>Removed Rep</strong> from %1$s for the post:',
	),
	'NOTIFICATION_TYPE_THANKS_GIVE'		=> 'Someone Repped you for a post',
	'NOTIFICATION_TYPE_THANKS_REMOVE'	=> 'Someone removed Rep for your post',

	'RECEIVED'					=> 'Been&nbsp;Repped',
	'REMOVE_THANKS'				=> 'Remove your Rep: ',
	'REMOVE_THANKS_CONFIRM'		=> 'Are you sure you want to remove your Rep?',
	'REMOVE_THANKS_SHORT'		=> 'Remove Rep',
	'REPUT'						=> 'Rating',
	'REPUT_TOPLIST'				=> 'Reps Toplist — %d',
	'RETING_LOGIN_EXPLAIN'		=> 'You are not authorised to view the toplist.',
	'RATING_NO_VIEW_TOPLIST'	=> 'You are not authorised to view the toplist.',
	'RATING_VIEW_TOPLIST_NO'	=> 'Toplist is empty or disabled by administrator',
	'RATING_FORUM'				=> 'Forum',
	'RATING_POST'				=> 'Post',
	'RATING_TOP_FORUM'			=> 'Rating forums',
	'RATING_TOP_POST'			=> 'Rating posts',
	'RATING_TOP_TOPIC'			=> 'Rating topics',
	'RATING_TOPIC'				=> 'Topic',
//	'RETURN_POST'				=> 'Return',

	'THANK'						=> 'time',
	'THANK_FROM'				=> 'from',
	'THANK_TEXT_1'				=> 'These users Repped the author ',
	'THANK_TEXT_2'				=> ' for the post: ',
	'THANK_TEXT_2PL'			=> ' for the post (total %d):',
	'THANK_POST'				=> 'Rep the author of the post: ',
	'THANK_POST_SHORT'			=> 'Rep',
	'THANKS'					=> array(
		1	=> '%d time',
		2	=> '%d times',
	),
	'THANKS_BACK'				=> 'Return',
	'THANKS_INFO_GIVE'			=> 'You have just Repped for the post.',
	'THANKS_INFO_REMOVE'		=> 'You have just removed your Rep.',
	'THANKS_LIST'				=> 'View/Close list',
	'THANKS_PM_MES_GIVE'		=> 'has Repped for the post',
	'THANKS_PM_MES_REMOVE'		=> 'has removed Rep the post',
	'THANKS_PM_SUBJECT_GIVE'	=> 'Repped you for the post',
	'THANKS_PM_SUBJECT_REMOVE'	=> 'Removed Rep for the post',
	'THANKS_USER'				=> 'List of Reps',

	'THANKS_INSTALLED'			=> 'Reps for the post',
	'THANKS_INSTALLED_EXPLAIN'  => '<strong>CAUTION!<br />You are strongly advised to only run this installation after following the instruction on code changes to the files (or perform the installation using AutoMod)! <br />It is also strongly recommended to select Yes to Display Full Results (below)!</strong>',
	'THANKS_CUSTOM0_FUNCTION'	=> 'Update values for the _thanks table',
	'THANKS_CUSTOM1_FUNCTION'	=> 'Check remove module',
	'THANKS_CUSTOM2_FUNCTION'	=> 'Check refrech cache',
	'TOPLIST'					=> 'Posts toplist',
));
