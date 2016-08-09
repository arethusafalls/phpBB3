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

$lang = array_merge($lang, array(
	'ACP_DELTHANKS'						=> 'Deleted recorded Reps',
	'ACP_POSTS'							=> 'Total posts',
	'ACP_POSTSEND'						=> 'Remaining posts with Reps',
	'ACP_POSTSTHANKS'					=> 'Total posts with Reps',
	'ACP_THANKS'						=> 'Reps for posts',
	'ACP_THANKS_MOD_VER'				=> 'Extension version: ',
	'ACP_THANKS_TRUNCATE'				=> 'Clear the list of Reps',
	'ACP_ALLTHANKS'						=> 'Reps taken into account',
	'ACP_THANKSEND'						=> 'Reps remaining to take into account',
	'ACP_THANKS_REPUT'					=> 'Rating Options',
	'ACP_THANKS_REPUT_SETTINGS'			=> 'Rating Options',
	'ACP_THANKS_REPUT_SETTINGS_EXPLAIN'	=> 'Set the default settings for the rating of posts, topics and forums, based on the Reps system here. <br /> Subject (post, topic or forum) which has the largest total number of Reps is given 100% rating.',
	'ACP_THANKS_SETTINGS'				=> 'Reps Settings',
	'ACP_THANKS_SETTINGS_EXPLAIN'		=> 'Default Reps for posts settings can be changed here.',
	'ACP_THANKS_REFRESH'				=> 'Update counters',
	'ACP_UPDATETHANKS'					=> 'Updated recorded Reps',
	'ACP_USERSEND'						=> 'Remaining users who Repped',
	'ACP_USERSTHANKS'					=> 'Total users who Repped',

	'GRAPHIC_BLOCK_BACK'				=> 'ext/gfksx/ThanksForPosts/images/rating/reput_block_back.gif',
	'GRAPHIC_BLOCK_RED'					=> 'ext/gfksx/ThanksForPosts/images/rating/reput_block_red.gif',
	'GRAPHIC_DEFAULT'					=> 'Images',
	'GRAPHIC_OPTIONS'					=> 'Graphics Options',
	'GRAPHIC_STAR_BACK'					=> 'ext/gfksx/ThanksForPosts/images/rating/reput_star_back.gif',
	'GRAPHIC_STAR_BLUE'					=> 'ext/gfksx/ThanksForPosts/images/rating/reput_star_blue.gif',
	'GRAPHIC_STAR_GOLD'					=> 'ext/gfksx/ThanksForPosts/images/rating/reput_star_gold.gif',

	'IMG_THANKPOSTS'					=> 'To Rep for the post',
	'IMG_REMOVETHANKS'					=> 'Cancel Rep',

	'LOG_CONFIG_THANKS'					=> 'Updated configuration of Reps for post Extension',

	'REFRESH'							=> 'Refresh',
	'REMOVE_THANKS'						=> 'Remove Rep',
	'REMOVE_THANKS_EXPLAIN'				=> 'Users can remove Reps if this option is enabled.',

	'STEPR'								=> ' - executed, step %s',

	'THANKS_COUNTERS_VIEW'				=> 'Reps Counters',
	'THANKS_COUNTERS_VIEW_EXPLAIN'		=> 'If enabled, the block information about the author will show the number of issued/received Reps.',
	'THANKS_FORUM_REPUT_VIEW'			=> 'Show forums rating',
	'THANKS_FORUM_REPUT_VIEW_COLUMN'	=> 'Show forums rating in a column',
	'THANKS_FORUM_REPUT_VIEW_COLUMN_EXPLAIN' => 'If enabled, forum rating will be displayed in a column in the forums list. <br /> Note: this option will only effective for prosilver and if the above option is enabled.',
	'THANKS_GLOBAL_POST'				=> 'Reps in Global Announcements',
	'THANKS_GLOBAL_POST_EXPLAIN'		=> 'If enabled, Reps in Global Announce enabled.',
	'THANKS_FORUM_REPUT_VIEW_EXPLAIN'	=> 'If enabled, forum rating will be displayed in the forums list.',
	'THANKS_INFO_PAGE'					=> 'Informative messages',
	'THANKS_INFO_PAGE_EXPLAIN'			=> 'If enabled, informative messages will be displayed after adding/removing Reps for the post.',
	'THANKS_NOTICE_ON'					=> 'Notices are available',
	'THANKS_NOTICE_ON_EXPLAIN'			=> 'If enabled, notice are available and the user can configure the notification via your profile.',
	'THANKS_NUMBER'						=> 'Number of Reps from the list shown in profile',
	'THANKS_NUMBER_EXPLAIN'				=> 'Maximum number of Reps displayed when viewing a profile. <br /> <strong> Remember that slow down will be noticed if this value is set over 250. </strong>',
	'THANKS_NUMBER_DIGITS'				=> 'The number of decimal places for rating',
	'THANKS_NUMBER_DIGITS_EXPLAIN'		=> 'Specify the number of decimal places for the rating value.',
	'THANKS_NUMBER_ROW_REPUT'			=> 'The number of rows in the toplist for rating',
	'THANKS_NUMBER_ROW_REPUT_EXPLAIN'	=> 'Specify the number of rows to display in posts, topics and forums rating toplist.',
	'THANKS_NUMBER_POST'				=> 'Number of Reps listed in a post',
	'THANKS_NUMBER_POST_EXPLAIN'		=> 'Maximum number of Reps displayed when viewing a post. <br /> <strong> Remember that slow down will be noticed if this value is set over 250. </strong>',
	'THANKS_ONLY_FIRST_POST'			=> 'Only for the first post in the topic',
	'THANKS_ONLY_FIRST_POST_EXPLAIN'	=> 'If enabled, users can Rep only for the first post in the topic.',
	'THANKS_POST_REPUT_VIEW'			=> 'Show rating for posts',
	'THANKS_POST_REPUT_VIEW_EXPLAIN'	=> 'If enabled, posts rating will be displayed when viewing a topic.',
	'THANKS_POSTLIST_VIEW'				=> 'List Reps in post',
	'THANKS_POSTLIST_VIEW_EXPLAIN'		=> 'If enabled, a list of users who Repped the author for the post will be displayed. <br/> Note that this option will only be effective if the administrator has enabled the permission to give Reps for the post in that forum.',
	'THANKS_PROFILELIST_VIEW'			=> 'List Reps in profile',
	'THANKS_PROFILELIST_VIEW_EXPLAIN'	=> 'If enabled, a complete list of Reps including number of Reps and which posts a user has been Repped for will be displayed.',
	'THANKS_REFRESH'					=> 'Update Reps counters',
	'THANKS_REFRESH_EXPLAIN'			=> 'Here you can update Reps counters after a mass removal of posts/topics/users, splitting/merging of topics, setting/removing Global Announcement, enabling/disabling option "Only for the first post in the topic", changing posts owners and etc. This may take some time.<br /><strong>Important: To work correctly, the refresh counters function needs MySQL version 4.1 or later!<br />Attention!<br /> - Refreshing will erase all Reps for the guest posts!<br /> - Refreshing will erase all Reps for the Global Announcements, if the option `Reps in Global Announcements` is OFF!<br /> - Refreshing will erase all Reps for all positions excepting the first in the topic, if the option `Only for the first post in the topic` is ON!</strong>',
	'THANKS_REFRESH_MSG'				=> 'This can take a few minutes to complete. All incorrect Reps entries will be deleted! <br /> Actions is not reversible!',
	'THANKS_REFRESHED_MSG'				=> 'Counters updated',
	'THANKS_REPUT_GRAPHIC'				=> 'Graphic display of the rating',
	'THANKS_REPUT_GRAPHIC_EXPLAIN'		=> 'If enabled, the rating value will be displayed graphically, using the images below.',
	'THANKS_REPUT_HEIGHT'				=> 'Graphics height',
	'THANKS_REPUT_HEIGHT_EXPLAIN'		=> 'Specify the height of the slider for the ranking in pixels. <br /> <strong> Attention! In order to display correctly, you should indicate the height equal to the height of the following image! </strong>',
	'THANKS_REPUT_IMAGE'				=> 'The main image for the slider',
	'THANKS_REPUT_IMAGE_DEFAULT'		=> '<strong>Graphics Preview</strong>',
	'THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN' => 'The image itself and the path to the image can be seen here. Image size is 15x15 pixels. <br /> You can draw your own images for the foreground and background, you can use the file reput_star_.psd in the folder contrib for this. <strong>The height and width of the image should be the same to ensure the correct construction of the graphical scale.</strong>',
	'THANKS_REPUT_IMAGE_EXPLAIN'		=> 'The path - relative to the root folder of phpBB - to the graphic scale image.',
	'THANKS_REPUT_IMAGE_NOEXIST'		=> 'The main image for the graphical scale not found.',
	'THANKS_REPUT_IMAGE_BACK'			=> 'The background image for the slider',
	'THANKS_REPUT_IMAGE_BACK_EXPLAIN'	=> 'The path - relative to the root phpBB install folder - to the graphic scale background image.',
	'THANKS_REPUT_IMAGE_BACK_NOEXIST'	=> 'The background image for the graphic scale not found.',
	'THANKS_REPUT_LEVEL'				=> 'Number of images in a graphic scale',
	'THANKS_REPUT_LEVEL_EXPLAIN'		=> 'The maximum number of images corresponding to 100% of the value of the rating scale in the graphic.',
	'THANKS_TIME_VIEW'					=> 'Rep time',
	'THANKS_TIME_VIEW_EXPLAIN'			=> 'If enabled, the post will display the Rep time.',
	'THANKS_TOP_NUMBER'					=> 'Number of users in top list',
	'THANKS_TOP_NUMBER_EXPLAIN'			=> 'Specify the number of users to show in the toplist on index. 0 - off displaying toplist.',
	'THANKS_TOPIC_REPUT_VIEW'			=> 'Show topic rating',
	'THANKS_TOPIC_REPUT_VIEW_COLUMN'	=> 'Show topic rating in a column',
	'THANKS_TOPIC_REPUT_VIEW_COLUMN_EXPLAIN' => 'If enabled, topic rating will be displayed in a column when viewing a forum. <br /> Note: this option will only be effective for prosilver and if the above option is enabled.',
	'THANKS_TOPIC_REPUT_VIEW_EXPLAIN'	=> 'If enabled, topic rating will be displayed when viewing a forum.',
	'TRUNCATE'							=> 'Clear',
	'TRUNCATE_THANKS'					=> 'Clear the list of Reps',
	'TRUNCATE_THANKS_EXPLAIN'			=> 'This procedure completely clears all Reps counters (removes all issued Reps). <br /> Action is not reversible!',
	'TRUNCATE_THANKS_MSG'				=> 'Reps counters cleared.',
	'REFRESH_THANKS_CONFIRM'			=> 'Do you really want to refresh the Reps counters?',
	'TRUNCATE_THANKS_CONFIRM'			=> 'Do you really want to clear the Reps counters?',
	'TRUNCATE_NO_THANKS'				=> 'Operation canceled',
	'ALLOW_THANKS_PM_ON'				=> 'Notify me PM if someone Reps my post',
	'ALLOW_THANKS_EMAIL_ON'				=> 'Notify me e-mail if someone Reps my post',
));
