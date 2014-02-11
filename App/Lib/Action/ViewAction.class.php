<?php
/**
 * Created by Adobe DW cs6.
 * User: Administrator
 * Date: 13-5-6
 * Time: PM 15:16
 * To change this template use File | Settings | File Templates.
 * className:job
 * dever:yige
 * ProjectName:jobmedia app.
 */
 
 class ViewAction extends GlAction{
	 
	             
				 
	         public function _initialize(){
			        
					parent::_initialize();
					$this->dao=M('Works');
					
				    
			  }
	 
	        
		
	 
	 
	      
	                     
						
	 
	 
	             
				 public  function index(){
					 
					 
					 
					 
				         $uid=$_GET['uid'];
						 $gid=$_GET['gid'];
					 
					 $detail=$this->dao->where('id='.$gid)->find();
					 
				     if($detail['uid'] !=$uid){
						 
						      parent::_message('error','非法操作');
						 
						 }
					 
					 // get lietou user files
					 
					  
					 $hid=M('User')->
					 Field('uid,username,realname,face,pid,shanchang')->
					 where('uid='.$detail['uid'])->find();
					 
					 if($hid['pid']==0){
						   
						   $comid=$detail['uid'];
						 
						 }else{
							 
							 $comid=$hid['pid'];
							  
						  }
						  
					
						  
					
						  
					 $company=M('User_company')->
					 Field('companyname,uid,pid')->
					 where('uid='.$comid)->find();
					 
					 //print_r($company);
					 
					 $client=M('Client')->
					 Field('uid,comid,companyname,company_name,nature,short_name,area,scale,content,trade,trade_cn')->
					 where('id='.$detail['cid'])->find();                   
					 
					 $this->assign('client',$client);
					
					 $this->assign('Title',$detail['Search_posts']);
					  $this->assign('vo',$detail);
					 $this->assign('com',$company);
					 $this->assign('ht',$hid);
					 
				     $this->display();
				
			
					 
					 } 
	 
	 
	 }

?>