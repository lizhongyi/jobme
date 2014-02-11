<?php
/** 
* cache.StaffRole.php
*
* @package    YIGECMS
* @author     
* @copyright  Copyright (c) 2008-2010  (http://www.oa.com)
* @license    http://www.oa.com/license.txt
   
*/

if (!defined('jobOA')) exit();

return array (
  0 => 
  array (
    'id' => '13',
    'title' => '禁止访问',
    'role_permission' => 'none',
    'mark' => '新成员默认都是这组别的',
    'comid' => '0',
    'systeam' => '1',
    'create_time' => '0',
    'update_time' => '0',
  ),
  1 => 
  array (
    'id' => '5',
    'title' => '决策层',
    'role_permission' => 'all',
    'mark' => '',
    'comid' => '1',
    'systeam' => '1',
    'create_time' => '1364283937',
    'update_time' => '0',
  ),
  2 => 
  array (
    'id' => '14',
    'title' => '普通职员',
    'role_permission' => 'Works_index,Works_add,Works_detail,,Works_modfy,Works_delete,Candidate_index,Candidate_add,Candidate_modfy,Candidate_delete,Collection_index,Collection_command,Commission_modfy,Collection_command,Persiona_index,Team_index,Team_add,Team_modfy,Nteam_index,Nteam_add,Nteam_modfy,Ticheng_index,Ticheng_add,Ticheng_modfy',
    'mark' => '这组只能止痒了',
    'comid' => '46',
    'systeam' => '0',
    'create_time' => '1364359602',
    'update_time' => '1364364467',
  ),
);