<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| BREADCRUMB CONFIG
| -------------------------------------------------------------------
| This file will contain some dynamic_menu settings.
|
| $config['db_model'] = 'm_acl'                             Define your model name.
| $config['db_function'] = '_acl_sidebar_menu'              Define your model function to load list of menu.
| $config['session_level_name'] = ''                        Define your the level keys from your session.
| $config['default']['db_menu_type'] = 'sidebar_menu'     Define menu type from your database.
| $config['default']['menu_icon_class'] = ''              Define menu icon class and other class ex:'typcn'.
| $config['default']['menu_anchor_class'] = ''            Define menu anchor class.
| $config['default']['menu_label_tag_open'] = ''          Define menu label tag.  Leave blank if your menu haven't label tag.
| $config['default']['menu_label_tag_close'] = ''         Define menu label close tag. 
| $config['default']['menu_child_icon_class'] = ''        Define menu child icon class and other class ex:'typcn' leave blank if the child haven't an icon.
| $config['default']['menu_child_anchor_class'] = ''      Define menu child anchor class.
| $config['default']['menu_child_label_tag_open'] = ''    Define menu child label tag open. Leave blank if your menu haven't label tag.
| $config['default']['menu_child_label_tag_close'] = ''   Define menu child label close tag.
| $config['default']['menu_parent_class'] = ''            Define menu parent class.
| $config['default']['menu_parent_anchor_attribute'] = '' Define menu parent attribe.
| $config['default']['menu_parent_ul_class'] = ''         Define menu ul parent class.
| $config['default']['menu_parent_arrow_icon'] = ''       Define menu parent arrow icon. Ex : <i class="angle fa fa-angle-right"></i>
| $config['default']['menu_parent_arrow_position'] = 'R'  Defime menu parent arraow position. The value will be accept 'L' for 'Left' and 'R' for 'Right'.
|
| Defaults provided for twitter bootstrap 2.0
*/

$config['db_model'] = 'm_acl';
$config['db_function'] = '_acl_menu';
$config['session_level_name'] = 'users_level';
$config['default']['db_menu_type'] = 'sidebar_menu';

$config['default']['menu_icon_class'] = '';
$config['default']['menu_anchor_class'] = '';
$config['default']['menu_label_tag_open'] = '';
$config['default']['menu_label_tag_close'] = '';
$config['default']['menu_child_icon_class'] = '';
$config['default']['menu_child_anchor_class'] = '';
$config['default']['menu_child_label_tag_open'] = '';
$config['default']['menu_child_label_tag_close'] = '';
$config['default']['menu_parent_class'] = '';
$config['default']['menu_parent_anchor_attribute'] = '';
$config['default']['menu_parent_ul_class'] = '';
$config['default']['menu_parent_arrow_icon'] = '';
$config['default']['menu_parent_arrow_position'] = '';

/* End of file dynamic_menu.php */
/* Location: ./application/config/dynamic_menu.php */