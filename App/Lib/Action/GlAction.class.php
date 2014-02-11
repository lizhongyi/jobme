<?php
class GlAction extends Action{
	
	   public $globalMenu;
	   public $ajax;
	   public $id;
	   public $persona;
	   public $user_list;
	 
	   public $groupid;
	   public $group;
	   public $uid; 
	   public $comid;
        /*
	        初始化
	    */
	         function _initialize(){  
			  $this->ajax=intval($_REQUEST['ajax']);
			  $this->id=intval($_REQUEST['id']);         
		     
			  
			   
			   
			   
			  $this->dao=D(MODULE_NAME) ;   
	          include_once('./includes/array.php');	
			    $this->assign("select",$public_arr);
              $this->cuname         = Cookie::get('username'); 
		      $this->uid            = Cookie::get('uid'); 
			  $this->pid            = Cookie::get('pid');
			  $this->level            = Cookie::get('level');
			  $this->post            = Cookie::get('post');
			  $this->utype     = intval(Cookie::get('type'));
		      
			  $this->department     = Cookie::get('department');
			  $this->role_id        = Cookie::get('role_id');
			  $this->realname=      Cookie::get('realname');
			  $this->permission_tile = Cookie::get('permission_tile');
			  $this->permission = Cookie::get('permission');
			  
			 
			  
							 
			       //获取公司ID采用递归
				   if($this->pid != 0){
				   $this->comid=$this->pid;
				   }else{
				   $this->comid=$this->uid;
					   }
					//echo $this->comid;	
					
					
					
					
				
					
						
				  if($this->p_t_array ==""){		
				  $juese=M('Persona')->where('comid='.$this->comid)->order('id asc')->select();
				  $this->persona=$juese;
				  
				  foreach($this->persona as $k=>$v){
					     $nt[]=$v['title'];
					  }
				  
				  Session::set('p_t',$nt,60*60*24);	
				  Cookie::set('p_t',$nt,60*60*24);
				  $this->p_t_array=Cookie::get('p_t');
				  }
				
				  
				  //权限设置普通用户不能访问的模块
				  
				  
				  
				  
				  
				  
				   if($this->level>0){
					 
									  $today=date('Ymd',time());
									  $sdate=M('Vip')->where('uid='.$this->uid)->order('id desc')->limit(1)->getField('end_time');
									  if($today >= $sdate){
										   
										   $d['level']=0;
										   $yp=D('User')->where('uid='.$this->uid)->save($d);
										   if($yp){
											      
												  Session::set('level',0);
												  Cookie::set('level',0);
												 $this->display('endvip');
											     exit();
											   
											   }
										   
										  
									   }
									   
					 
					 }
				  
				  
				  
				  
				   
				  
				  
		            
			         if($this->level==0){
					 
					     $levelname="普通用户";
					 
					 }else if($this->level==1){
						 
						  $levelname="高级用户";
						 
						 }else if($this->level==2){
							
							$levelname="VIP用户"; 
						  	 
							}
				  
				  
				
			       
			      $this->pb_arr=$public_arr;
	              $this->assign('uname', $this->cuname);
		          $this->assign('uid', $this->uid);
				   $this->assign('comid', $this->comid);
		          $this->assign('pid',$this->pid);
		          $this->assign('permission_tile',$this->permission_tile);
				  $this->assign('realid',$this->realid);
			      $this->assign('utype',$this->utype);
				
				  $this->assign('module',MODULE_NAME);
				  $this->assign('level',$this->level);
				  $this->assign('level_name',$levelname);
				  $this->assign('action',ACTION_NAME);
		  
		 	  
                     
        //导入函数
        Load('extend');
         include('./includes/Page.class.php');
		
	
			 
			 
			
						
						
						  $sixin=D('Usermsg')->where('toid='.$this->uid.' and status=0')->count();
						  $work_inform=M('Sinform')->where('to_uid='.$this->uid.' and `read`=0')->count();
						  //echo $work_inform."nasdasd".$this->uid;
						  $c_infonums=$sixin+$work_inform;
						  $this->assign('work_inform',$work_inform);
						  $this->assign('sixin',$sixin);
						  $this->assign('infoTotal',$c_infonums);
						  
					
                         // echo $c_infonums;					
			 
			 
			 
			 
			 
				
			  }
			 
		
		
		
		 
			 
			 

			 
			 
			 
	 public  function Checklogin(){
		        
				if(!Cookie::get('uid')){
				  
						      redirect("/Login");
						    
							 
							 }else{
								 
								 
                                if($this->realname==""){
					                  redirect('/User/profile_edit');
								}
								
								
				                  
								 }
		          
		 }		 
		 
		 
		 
		 
		 
		 
		  public  function Check(){
		        
				if(!Cookie::get('uid')){
				  
						      redirect("/Login");
						    
							 
							 }
		          
		 }		 
		 
		 
		 
	  public function checkID($id){
		  
		     if(!$id){
				  
				  self::_message('error','关键条件丢失');
				  
				 }
		  
		  }
	  	 
		 
		 
	/**
     * 数据列表
     *
     * @param $conditions 条件
     * @param $orders 排序
     * @param $listRows 每页显示数量
     * @param $joind 是否表关联
     * @param $table 关联表
     * @param $join 
     * @param $fields 取字段
     */
    public function getList($table,$conditions = '', $orders = '' , $listRows = '')
         {
		$condition['display']=array('eq',0);	 
        $condition = !empty($conditions) ? $conditions : '' ;
        $pageCount = $table->where($condition)->count();
		
        $listRows = empty($listRows) ? 15 : $listRows;
        $orderd = empty($orders) ? 'id DESC' : $orders;
        $paged = new page($pageCount, $listRows);
        $dataContentList = $table->Where($condition)->Order($orderd)->Limit($paged->firstRow.','.$paged->listRows)->select();      
		$pageContentBar = $paged->show();
        $this->assign('getList', $dataContentList);
        $this->assign('pageBar', $pageContentBar);
        
    }
		 
		
		
   public function get_json_list($model,$where,$orders,$listRows,$ajax=0){
	   
	  
            
			
			
			$pageCount=$model->where($where)->count();
			$listRows = empty($listRows) ? 10 : $listRows;
			$orderd = empty($orders) ? 'id DESC' : $orders;
			$paged = new page($pageCount, $listRows);
		    $list=$model->Where($where)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select(); 
													
	      										 
			foreach($list as $k=>$v){
				   
				   $list[$k]=(array)$list[$k];
				  
				}
		
		    if($ajax==0){
		        $pageContentBar = $paged->show();
		    }else{
			    $pageContentBar = $paged->show_ajax();
			}
	        return array('list'=>$list,'pagebar'=>$pageContentBar);
		   		
	   
	    } 
		
		
		
		
			 
			 
			 //公共编辑提交
			 protected function _do_modfy($model,$su='更新成功',$err='更新失败',$data='',$jumpUri=0){
				 
				 
				                    if(!$this->id){
					                 self::_message('error','条件丢失');	 
					   }            
									 unset($data['ajax']);
                                     $data['id']=$this->id;
				                     $rs=$model->save($data);
					                 if($rs){
						        
								     self::_message('success',$su);
								
						             }else{
							          self::_message('error',$err);
							   
							      }
				 
				 }
			 
			 
			 
			 
			 
			 
			 
			 
			//公共单个删除
			
			
			
			protected function __deletes($table,$id){

				    	 if($id!=0){
						     $data['display']=0;
						     $rs=$table->where("id=".$id)->save($data);
							 //如果回调函数有的话就直接返回rs否则进入下面
							 //echo $table->getLastSql();
							 
						  if($rs){
							    
							     $this->_message('success',"删除成功",$_SERVER['HTTP_REFERER']);
							   
							   }
						   
						  }else{
							 
							
							    $this->_message('error',"删除失败");
							 
							 }
					 
				
				
				}
			 
			 
			 
			 
			 
		   
		 //这个地方是右侧边栏，主要是申请，收藏和搜索条件的数量
		 
		 
		  public function rightInc(){
			  
			       //限度去申请职位
				   $apply=M('Apply')->where('a_uid='.$this->uid)->count();
				   $saved=M('Saved')->where('uid='.$this->uid)->count();
				   $srList=M('Sr')->where('uid='.$this->uid)->limit(5)->select();
				   $this->assign('sr',$srList);
				   $this->assign('aps',$apply);
				   $this->assign('saved',$saved);
				   
			  
			  }
		   
		   
		   
		   
		  
		  // set template NAME
		  protected function _tpl($tplname){
			        
					return  $this->ajax==0 ? $this->display() : $this->display($tplname) ; 
					
			  }
		 
		  protected function _message($type = 'success', $content = '更新成功', $jumpUrl = __URL__, $time = 1, $ajax = false)
    {
        $jumpUrl = empty($jumpUrl) ? __URL__ : $jumpUrl ;
        switch ($type){
            case 'success':
                $this->assign('jumpUrl', $jumpUrl);
                $this->assign('waitSecond', $time);
                $this->success($content, $ajax);
                break;
            case 'error':
                $this->assign('jumpUrl', 'javascript:history.back(-1);');
                $this->assign('waitSecond', $time);
                $this->assign('error', $content);
                $this->error($content, $ajax);
                break;
            case 'errorUri':
                $this->assign('jumpUrl', $jumpUrl);
                $this->assign('waitSecond', $time);
                $this->assign('error', $content);
                $this->error($content, $ajax);
                break;
            default:
                die('error type');
                break;
        }
    }
	
	
	
	//获取公共角色
							public function get_persona($per){
							          $perArray=explode(',',$per);
									  foreach($perArray as $k=>$v){
									         
											 $persona[]=$this->p_t_array[$v]."";	  
										  
										  }
										return implode(',',$persona);  
							
							}	
	
	
	
	//获取后寻人的最快状态
	public function  __get_c_stage($gid){
				 
				     // if(!$gid || intval($gid)==0) return false;
					  
					  $stages=M("Candidate")->field('stage,id,gid')->where('gid='.$gid,' and stage > 1')->order('stage desc')->limit(1)->select();
					  if($stages[0]['stage']) {
					  return $stages[0]['stage'];			    
					  }else{
						  return 1;
						  }
				 
				 }	
				 
				 
				 //公共回收站
				 public function __recycle($table,$conditions = '', $orders = '' , $listRows = ''){
					 
											  $condition = !empty($conditions) ? $conditions : '' ;
											  $pageCount = $table->where($condition)->count();
											  
											  $listRows = empty($listRows) ? 15 : $listRows;
											  $orderd = empty($orders) ? 'id DESC' : $orders;
											  $paged = new page($pageCount, $listRows);
											  $dataContentList = $table->Where($condition)->Order($orderd)->Limit($paged->firstRow.','.$paged->listRows)->select();
											
											  $pageContentBar = $paged->show();
											  $this->assign('getList', $dataContentList);
											  $this->assign('pageBar', $pageContentBar);
					 
					 
					 }
					 
					 
					 
					//从回收站中恢复
					public  function __recover($table,$id){
						
						         
								 if(!$id){
									    
										self::_message('error','关键字段丢失');
									     
									 }
								
								  $data['display']=1;	 
						          $rs=$table->where('id='.$id)->save($data);
								  if($rs){
									     
										  self::_message('success','恢复成功',$_SERVER['HTTP_REFERER']);
									  
									  }
						
						}
						
						
						//硬删除,清理回收站
						
						public function __hard_delete($table,$id){
							         
							               
								 if(!$id){
									    
										self::_message('error','关键字段丢失');
									     
									 }
								
								  $data['display']=1;	 
						          $rs=$table->where('id='.$id)->delete();
								  if($rs){
									     
										  self::_message('success','该数据已经彻底删除',$_SERVER['HTTP_REFERER']);
									  
									  }  
							}
						
						
						
						
		  protected function _setMethod($set = 'POST')
{
$getMethod = strtolower($_SERVER['REQUEST_METHOD']);
if($getMethod != $set){
self::_message('error',"当前只接受 {$set} 数据");
}
}		









protected function _checkPermission($action = NULL)
{
	
	if($this->pid !=0 && $this->role_id > 2){
 

 
$formatAction = $action;
if(empty($action)) $formatAction = MODULE_NAME.'_'.ACTION_NAME;
$permissionFile = CMS_DATA."/cache.StaffRole.php";




$permission = $this->permission;
            if($permission != 'all'){
                  if(file_exists($permissionFile)){
                 $getPermission = @require($permissionFile);
                 foreach((array)$getPermission as $row){
                 if($row['id'] == $this->role_id){
                $arrPermission = explode(',',$row['role_permission']);

              }
}
}else{
      $roleDao = D('StaffRole');
      $getPermission = $roleDao->Where("id={$this->role_id}")->find();
      $arrPermission = explode(',',$getPermission['role_permission']);

      writeCache('StaffRole');

}




if(!in_array($formatAction,$arrPermission)){
	
	    
        self::_message('error','当前角色组无权限进行此操作，请联系管理员授权',0,5);
}
}






}else{
	
	 
	 
	 
	 
	
	  
	
	}




}



    // checkdata 2013/7/16 10:42
	
	  public function checkdata($id){
		  
		          if(!$id){
					  
					    throw_exception('没有找到数据','InfoException');
					  
					  }
		  
		  }




		
				 
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>