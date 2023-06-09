<?php
// $Id: xoops_version.php 94 2006-04-30 12:13:53Z gron $
//  ------------------------------------------------------------------------ //
//              wsProject - A XOOPS Project Management Modul                 //
//                  Copyright (c) 2005 stefan-marr.de                        //
//                    <http://www.stefan-marr.de/>                           //
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

$modversion['name'] = _MI_PROJET_NAME;
$modversion['version'] = '1.0.3';
$modversion['description'] = _MI_PROJET_DESC;
$modversion['credits'] = "Incyte Project Manager Clone\nSpanish translation by hsalazar.\nFrench translation by philou.\n\nTraditional Chinese translation by xoobs.\nDanish translation by Anders Kristiansen\nThx to Simon Yates and Azmeen Afandi for contribute enhancements.\n\nwsProject is powered by TOOLSLAVE Software Engineering [http://www.toolslave.com]";
$modversion['author'] = "Stefan Marr [http://www.stefan-marr.de/]";
$modversion['help'] = "Commercial support by TOOLSLAVE [http://www.toolslave.com]";
$modversion['license'] = "GNU GPL v2 see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "logo.png";
$modversion['dirname'] = "wsproject";

// SQL files (must contain sql generated by phpMyAdmin or phpPgAdmin and table names should not have any prefix
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix)
$modversion['tables'][0] = "projet";
$modversion['tables'][1] = "ws_tasks";
$modversion['tables'][2] = "ws_project";
$modversion['tables'][3] = "ws_restrictions";

// Admin things
$modversion['hasAdmin'] = 1; // Set 0 to not have admin or 1 to have admin.
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1; // This set if it is going to be shown in the site main menu or not 1 or 0.
$modversion['sub'][1]['name'] = _MI_WSPROJECT_MYTASKS;
$modversion['sub'][1]['url'] = "index.php";
$modversion['sub'][2]['name'] = _MI_WSPROJECT_ACTIVEPROJECTS;
$modversion['sub'][2]['url'] = "index.php?op=listprojects";
$modversion['sub'][3]['name'] = _MI_WSPROJECT_COMPLETEDPROJECTS;
$modversion['sub'][3]['url'] = "index.php?op=listcompletedprojects";
$modversion['sub'][4]['name'] = _MI_WSPROJECT_NEWPROJECT;
$modversion['sub'][4]['url'] = "index.php?op=addproject";

// Templates
$modversion['templates'][1]['file'] = 'myTasks.html';
$modversion['templates'][1]['description'] = 'my Tasks overview';
$modversion['templates'][2]['file'] = 'listProjects.html';
$modversion['templates'][2]['description'] = 'list all current projects';
$modversion['templates'][3]['file'] = 'listCompletedProjects.html';
$modversion['templates'][3]['description'] = 'list all completed projects';
$modversion['templates'][4]['file'] = 'showProject.html';
$modversion['templates'][4]['description'] = 'detailed project overview';
$modversion['templates'][5]['file'] = 'showTask.html';
$modversion['templates'][5]['description'] = 'detailed task view';
$modversion['templates'][6]['file'] = 'addTask.html';
$modversion['templates'][6]['description'] = 'add new task';
$modversion['templates'][7]['file'] = 'editProject.html';
$modversion['templates'][7]['description'] = 'edit project';
$modversion['templates'][8]['file'] = 'deleteProject.html';
$modversion['templates'][8]['description'] = 'delete project';
$modversion['templates'][9]['file'] = 'editTask.html';
$modversion['templates'][9]['description'] = 'edit task';
$modversion['templates'][10]['file'] = 'addProject.html';
$modversion['templates'][10]['description'] = 'add a new project';
$modversion['templates'][11]['file'] = 'deleteTask.html';
$modversion['templates'][11]['description'] = 'delete a task';

// Block

$modversion['blocks'][1]['file'] = "smallblock.php";
$modversion['blocks'][1]['name'] = _MI_WSPROJECT_PROJECTSTATUS;
$modversion['blocks'][1]['description'] = "Shows the project status of a random or choosen project";
$modversion['blocks'][1]['show_func'] = "b_wsproject_show_smallblock";
$modversion['blocks'][1]['edit_func'] = "b_wsproject_edit_smallblock";
$modversion['blocks'][1]['template'] = 'smallblock.html';

$modversion['blocks'][2]['file'] = "bigblocks.php";
$modversion['blocks'][2]['name'] = _MI_WSPROJECT_PROJECTOVERVIEW;
$modversion['blocks'][2]['description'] = "Shows a random or choosen project";
$modversion['blocks'][2]['show_func'] = "b_wsproject_show_projectoverview";
$modversion['blocks'][2]['edit_func'] = "b_wsproject_edit_projectoverview";
$modversion['blocks'][2]['template'] = 'ProjectOverview.html';

$modversion['blocks'][3]['file'] = "mytasks.php";
$modversion['blocks'][3]['name'] = _MI_WSPROJECT_MYTASKS;
$modversion['blocks'][3]['description'] = "Shows your current tasks in an full size block";
$modversion['blocks'][3]['show_func'] = "b_wsproject_show_mytasks";
//$modversion['blocks'][3]['edit_func'] = "b_wsproject_edit_projectoverview";
$modversion['blocks'][3]['template'] = 'myTasks_block.html';

// Xoops comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'task_id';
$modversion['comments']['pageName'] = 'index.php';

/*

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "newbb_search";

// Smarty
$modversion['use_smarty'] = 1;
*/

// Notification

$modversion['hasNotification'] = 1;
//$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
//$modversion['notification']['lookup_func'] = 'newbb_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'project';
$modversion['notification']['category'][1]['title'] = _MI_WSPROJECT_PROJECT_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_WSPROJECT_PROJECT_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = 'index.php';
$modversion['notification']['category'][1]['item_name'] = 'project_id';
$modversion['notification']['category'][1]['allow_bookmark'] = 1;

$modversion['notification']['category'][2]['name'] = 'task';
$modversion['notification']['category'][2]['title'] = _MI_WSPROJECT_TASK_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_WSPROJECT_TASK_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = 'index.php';
$modversion['notification']['category'][2]['item_name'] = 'task_id';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'global';
$modversion['notification']['category'][3]['title'] = _MI_WSPROJECT_GLOBAL_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_WSPROJECT_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = array('index.php', '');

$modversion['notification']['event'][1]['name'] = 'new_project';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_WSPROJECT_NEWPROJECT_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_WSPROJECT_NEWPROJECT_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_WSPROJECT_NEWPROJECT_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'project_new_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_WSPROJECT_NEWPROJECT_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'new_task';
$modversion['notification']['event'][2]['category'] = 'project';
$modversion['notification']['event'][2]['title'] = _MI_WSPROJECT_NEWTASK_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_WSPROJECT_NEWTASK_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_WSPROJECT_NEWTASK_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'task_new_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_WSPROJECT_NEWTASK_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'edit_task';
$modversion['notification']['event'][3]['category'] = 'task';
$modversion['notification']['event'][3]['title'] = _MI_WSPROJECT_EDITTASK_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_WSPROJECT_EDITTASK_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_WSPROJECT_EDITTASK_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'task_edit_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_WSPROJECT_EDITTASK_NOTIFYSBJ;

?>