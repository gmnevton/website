<?php
// $Id: xoops_version.php,v 1.13 2003/04/02 04:44:23 mvandam Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$modversion['name'] = _MI_NEWBB_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _MI_NEWBB_DESC;
$modversion['credits'] = "Kazumi Ono<br />( http://www.myweb.ne.jp/ )";
$modversion['author'] = "Original admin section (phpBB 1.4.4) by<br />The phpBB Group<br />( http://www.phpbb.com/ )<br />";
$modversion['help'] = "newbb.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/xoopsbb_slogo.png";
$modversion['dirname'] = "newbb";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "bb_categories";
$modversion['tables'][1] = "bb_forum_access";
$modversion['tables'][2] = "bb_forum_mods";
$modversion['tables'][3] = "bb_forums";
$modversion['tables'][4] = "bb_posts";
$modversion['tables'][5] = "bb_posts_text";
$modversion['tables'][6] = "bb_topics";


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'newbb_index.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'newbb_search.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'newbb_searchresults.html';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file'] = 'newbb_thread.html';
$modversion['templates'][4]['description'] = '';
$modversion['templates'][5]['file'] = 'newbb_viewforum.html';
$modversion['templates'][5]['description'] = '';
$modversion['templates'][6]['file'] = 'newbb_viewtopic_flat.html';
$modversion['templates'][6]['description'] = '';
$modversion['templates'][7]['file'] = 'newbb_viewtopic_thread.html';
$modversion['templates'][7]['description'] = '';

// Blocks
$modversion['blocks'][1]['file'] = "newbb_new.php";
$modversion['blocks'][1]['name'] = _MI_NEWBB_BNAME1;
$modversion['blocks'][1]['description'] = "Shows recent topics in the forums";
$modversion['blocks'][1]['show_func'] = "b_newbb_new_show";
$modversion['blocks'][1]['options'] = "10|1|time";
$modversion['blocks'][1]['edit_func'] = "b_newbb_new_edit";
$modversion['blocks'][1]['template'] = 'newbb_block_new.html';

$modversion['blocks'][2]['file'] = "newbb_new.php";
$modversion['blocks'][2]['name'] = _MI_NEWBB_BNAME2;
$modversion['blocks'][2]['description'] = "Shows most viewed topics in the forums";
$modversion['blocks'][2]['show_func'] = "b_newbb_new_show";
$modversion['blocks'][2]['options'] = "10|1|views";
$modversion['blocks'][2]['edit_func'] = "b_newbb_new_edit";
$modversion['blocks'][2]['template'] = 'newbb_block_top.html';

$modversion['blocks'][3]['file'] = "newbb_new.php";
$modversion['blocks'][3]['name'] = _MI_NEWBB_BNAME3;
$modversion['blocks'][3]['description'] = "Shows most active topics in the forums";
$modversion['blocks'][3]['show_func'] = "b_newbb_new_show";
$modversion['blocks'][3]['options'] = "10|1|replies";
$modversion['blocks'][3]['edit_func'] = "b_newbb_new_edit";
$modversion['blocks'][3]['template'] = 'newbb_block_active.html';

$modversion['blocks'][4]['file'] = "newbb_new.php";
$modversion['blocks'][4]['name'] = _MI_NEWBB_BNAME4;
$modversion['blocks'][4]['description'] = "Shows recent and private topics in the forums";
$modversion['blocks'][4]['show_func'] = "b_newbb_new_private_show";
$modversion['blocks'][4]['options'] = "10|1|time";
$modversion['blocks'][4]['edit_func'] = "b_newbb_new_edit";
$modversion['blocks'][4]['template'] = 'newbb_block_prv.html';

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "newbb_search";

// Smarty
$modversion['use_smarty'] = 1;

// Notification

$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'newbb_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'thread';
$modversion['notification']['category'][1]['title'] = _MI_NEWBB_THREAD_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_NEWBB_THREAD_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = 'viewtopic.php';
$modversion['notification']['category'][1]['item_name'] = 'topic_id';
$modversion['notification']['category'][1]['allow_bookmark'] = 1;

$modversion['notification']['category'][2]['name'] = 'forum';
$modversion['notification']['category'][2]['title'] = _MI_NEWBB_FORUM_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_NEWBB_FORUM_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('viewtopic.php', 'viewforum.php');
$modversion['notification']['category'][2]['item_name'] = 'forum';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'global';
$modversion['notification']['category'][3]['title'] = _MI_NEWBB_GLOBAL_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_NEWBB_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = array('index.php', 'viewtopic.php', 'viewforum.php');

$modversion['notification']['event'][1]['name'] = 'new_post';
$modversion['notification']['event'][1]['category'] = 'thread';
$modversion['notification']['event'][1]['title'] = _MI_NEWBB_THREAD_NEWPOST_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'thread_newpost_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'new_thread';
$modversion['notification']['event'][2]['category'] = 'forum';
$modversion['notification']['event'][2]['title'] = _MI_NEWBB_FORUM_NEWTHREAD_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'forum_newthread_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'new_forum';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['title'] = _MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_newforum_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'new_post';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['title'] = _MI_NEWBB_GLOBAL_NEWPOST_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_newpost_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_post';
$modversion['notification']['event'][5]['category'] = 'forum';
$modversion['notification']['event'][5]['title'] = _MI_NEWBB_FORUM_NEWPOST_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'forum_newpost_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'new_fullpost';
$modversion['notification']['event'][6]['category'] = 'global';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'global_newfullpost_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ;

?>
