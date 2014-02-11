<?php
/*

收藏管理

*/
class SavedAction extends GlAction{
	
	
	  function _initialize(){  
			       
		            
			            parent::_initialize(); 
						parent::Check();
					
			                 
				
				}
				
				
				
				
				 
						 public function add(){
							 
							    parent::checkID($_POST['gid']);
								
								$data=$_POST;
								
								$data['create_time']=time();
								$data['uid']=$this->uid;
								
								//插入前检测
								
								$ed=$this->dao->where('gid='.$data['gid'].' and uid='.$this->uid)->count();
								if($ed>0){
									   
									   parent::_message('success','已收藏');
									
									}
									
								$rs=$this->dao->add($data);
								 
								 if($rs){
                                        parent::_message('success','已收藏');
									 }else{
										 parent::_message('error','收藏失败'); 
										 }
									 
									 
								 
							 
							 }
							 
							 
							 
							public function delete(){
					
					    parent::checkID($this->id);
						 
						
					    $rs=$this->dao->where('id='.$this->id.' and uid='.$this->uid.' or  gid='.$this->id.' and uid='.$this->uid)->delete();	 
					    
						if($rs){
							
							  
							  parent::_message('success','取消成功',$_SERVER['HTTP_REFERER']);
							   
							}else{
								
								 parent::_message('error','取消失败');
								
								}
					
					}
	 
	 
		
				
				
				
	}

?>