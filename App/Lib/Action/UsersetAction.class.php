<?php
/**
 * Created by DW cs6.
 * User: Administrator
 * Date: 13-7-18
 * Time: 上午11:15
 * To change this template use File | Settings | File    Templates.
 * className:Userset
 * dever:yige
 * ProjectName:jobme.cn.
 */
 
 class UsersetAction extends GlAction {
	 
	 
	 
	                 function _initialize(){  
			            parent::_initialize(); 
						parent::Check();
						parent::rightInc();
						 
					
				}
	            
	             
				 
			    	public function index(){
					
					
					              $this->display();
					
					} 
					
					
					
	            
				public function do_add(){
					
					
					          $data=$_POST;
					          
							  $ed=$this->dao->where('uid='.$this->uid)->count();
							  $data['uid']=$this->uid;
							  $data['update_time']=time();
							  if($ed==0){
							  
							      $rs=$this->dao->where('uid='.$this->uid)->add($data);
					          
							  }else{
								   
								   $rs=$this->dao->where('uid='.$this->uid)->save($data);
								  
								  }
								  
								  
								  if($rs){
									  
									        
											parent::_message('success','设置成功',$_SERVER['HTTP_REFERER']);
									      
									  
									  }else{
										  
										  exit($this->dao->getLastSql());
										  
										  }
								  
								  
					
					
					}
	 
	 
	 
	 
	 }