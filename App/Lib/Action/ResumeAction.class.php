<?php
	  
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-4-25
 * Time: 上午9:54
 * To change this template use File | Settings | File Templates.
 * className:Resume
 * dever:yige
 * ProjectName:jobmedia OA.
 */
class ResumeAction extends GlAction{
	
	
                     public   function _initialize(){  
			       
		            
			            parent::_initialize(); 
						parent::Check();
						
			                 
				
				}
			
			          
					   public function index(){
			                          
									  
									  //查找是否存在简历
									 $rcount=$this->dao->where('uid='.$this->uid)->count();
									 if($rcount==0){
										 
										 $data['uid']=$this->uid;
										 $rs=$this->dao->add($data); 
										 
									  }
									 
									 
									 
									 $dt=M('User')->where('uid='.$this->uid)->find();
									 $dt['edu']=M('Resume_edu')->where('resume_id='.$dt['uid'])->select();$dt['work']=M('Resume_work')->where('resume_id='.$dt['uid'])->select();
									
									$ex=$this->dao->where("uid=".$this->uid)->find(); 
									$this->assign('ex',$ex);
								     $this->assign('dt',$dt);
								
								     $this->display();
			     }  
				 
				   
				      public function edit(){
						          
								 $ex=$this->dao->where("uid=".$this->uid)->find(); 
							     $this->assign('dt',$ex);
								 $this->display();
						  
						  }
				  
				  public function do_edit(){
					         
							  $data=$_POST;
							  
							  $data['update_time']=time();
							  $rs=$this->dao->where('uid='.$this->uid)->save($data);
							  if($rs){
								  
								      parent::_message('success','保存成功');
								  }else{
									   parent::_message('error',$this->dao->getlastSql());
									    
									  }
							  
					    }
						
						
						
						
						
						public function profile(){
							        
									
							         $pr=M('User')->where('uid='.$this->uid)->find();
									 $this->assign('pr',$pr);
									 $this->display(); 
									 
							    
							}
				 
				 
				 
				 
			
				 
				 
				 
				 //执行技能
				 
				 public function zhiye(){
					 
					     
						         $ex['skills']=$this->dao->where("uid=".$this->uid)->getField('skills'); 
							     $this->assign('dt',$ex);
								 $this->display();
						  
					 
					 }
					 
					 
					  public function xiangmu(){
					 
					     
						         $ex['xiangmu']=$this->dao->where("uid=".$this->uid)->getField('skills'); 
							     $this->assign('dt',$ex);
								 $this->display();
						  
					 
					 }
				  
				  
				  //保存语言能力
				  
				  public function do_yuyan(){
					  
			                
							 $data=$_POST;
							 
							 if(!$data['uid']){
								  parent::_message('error','保存失败');
								 }
							  
							  $rs=D('Resume')->where('uid='.$data['uid'])->save($data);
							  if($rs){
								  
								   parent::_message('success','保存成功');
								  }		
									
									  
					  
					  
					  }
				       
			
}
			
			
?>			