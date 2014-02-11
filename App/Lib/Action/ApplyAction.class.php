<?php
/*
用户基本操作
*/

class ApplyAction extends GlAction{

	      function _initialize(){  
			       
		            
			            parent::_initialize(); 
						parent::Check();
					
			                 
				
				}
				
				
				public function delete(){
					
					    parent::checkID($this->id);
						 
						 $d['deleteid']=1;
					    $rs=$this->dao->where('id='.$this->id)->save($d);	 
					    
						if($rs){
							
							  
							  parent::_message('success','删除成功',$_SERVER['HTTP_REFERER']);
							   
							}else{
								
								 parent::_message('error','删除失败');
								
								}
					
					}
				
				
				
				
}
				
				?>