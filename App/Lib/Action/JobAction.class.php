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
 
 class JobAction extends GlAction{
	 
	             
				 
	         public function _initialize(){
			        
					parent::_initialize();
					$this->dao=M('Works');
					
				    
			  }
	 
	        
			//show index list
			
			function index(){
				 
				 
				// echo $this->dao->where('display=1')->count();
					     
				    
			    //NEW job list
				 $condition = array();
				            
                             $keyword           =formatQuery($_GET['keyword']);
                             $industry        =$this->_get('industry');
							 $area            =$this->_get('area');
							 $area_cn         =$this->_get('area_cn'); 
							 $trade           =$this->_get('trade');
							 $trade_cn        =  $this->_get('trade_cn');
							 $payment         =$this->_get('payment');
							 $payment1        =$this->_get('payment1');
							 $keyword         =$this->_get('keyword');
							
							 $condition = !empty($conditions) ? $conditions : '' ;
	                         $area &&  $condition['area'] = array('eq',$area);
							 $cid &&  $condition['cid'] = array('eq',$cid);
							
							 $payment &&  $condition['payment']=array('egt',$payment);
							 $payment1 &&  $condition['payment1']=array('elt',$payment1);
							 $trade    && $condition['industry']=array('eq',$trade);
							 $area_cn && $condition['area_cn']=array('like','%'.$area_cn.'%');
							 
							 $keyword && $condition['Search_posts']=array('like','%'.$keyword.'%');
							 $condition['display']=1;
							 //$condition['end_time']=array('eq',0);
//							 $condition['logic_']='OR';
//							 $condition['end_time']=array('gt',time());
                              $pageCount = M("Works")->where($condition)->count();
							  $listRows = empty($listRows) ? 15 : $listRows;
							  $orderd = 'id DESC';
							  $paged = new page($pageCount, $listRows);
							  
							  
							  
							
							  
							  
							  
							  
							  $dt = M("Works")
													  ->Where($condition)
													  ->Field('id,uid,custom,Search_posts,area_cn,create_time,payment,payment1,cid')
													  ->Order($orderd)
													  
													  ->Limit($paged->firstRow.','.$paged->listRows)
													  ->select();  
									
									
									
									foreach($dt as $k=>$v){
										   
										   $dt[$k]['sed']=M('Saved')->where('uid='.$this->uid.' and gid='.$v['id'])->count();                                           $dt[$k]['aped']=M('Apply')->where('a_uid='.$this->uid.' and gid='.$v['id'])->count(); 
										
										
										}
									
									
									
								if($area!='' || $trade!='' || $keyword  != '' || $industry !=""){
									
										
							        $ct=$_SERVER['QUERY_STRING'];;						 
													
								}
								
						   //echo $this->dao->getLastSql();		
													                          
							$pageContentBar = $paged->show();
							$this->assign('getList', $dt);
							$this->assign('ct',$ct);
							$this->assign('pageBar', $pageContentBar);
                   
			         
			                if($this->uid){
			                $this->display();
					  }else{
						  
						  $this->display('index1');
						  
						  }
				
				
				
				}
	 
	 
	        function detail(){
				     $this->Check();
				
				     parent::checkID($this->id);
					 
					 $detail=$this->dao->where('id='.$this->id)->find();
					 
					 parent::checkdata($detail);
					 
					 // get lietou user files
					 
					  
					 $hid=M('User')->
					 Field('uid,username,realname,face,pid,shanchang')->
					 where('uid='.$detail['uid'])->find();
					 
					 if($hid['pid']==0){
						   
						   $comid=$detail['uid'];
						 
						 }else{
							 
							 $comid=$hid['pid'];
							  
						  }
						  
						 $detail['aped']=M('Apply')->where('a_uid='.$this->uid.' and gid ='.$detail['id'].'')->count();
						 $detail['saved']=M('Saved')->where('uid='.$this->uid.' and gid='.$detail['id'] )->count(); 
						 
						// print_r($detail['aped']); 
						  
					
						  
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
	 
	                      
						  
						  
						  
						  
				  public function apply(){
					    
					     $jobid=$_GET['jobid'];
					      parent::checkID($jobid);
						  
						  $this->display('plus/apply');
					  
					  }		  
						  
						  
	 
	 
	               public function do_apply(){
					   
					       //检测职位ID
						   
						   $jobid=$_GET['jobid'];
						    
							parent::checkID($jobid);
							
							//检测简历是否完整
							
							$edu=M('Resume_edu')->where('add_uid='.$this->uid)->count();
							 
							   if($edu==0){
								   
								   parent::_message('error','您的简历未填写完整');
								 
								}
								
								
								
								//这里是收费的部分
								
						
							  // if($this->level==0){
//								   
//								  
//								    $dangyue=date('Ym',time());
//								    $applyed=M('Apply')->where('a_uid='.$this->uid.' and month ='.$dangyue)->count(); 
//							          //  exit(M('Apply')->getlastSql());
//							               if($applyed>2){
//								       parent::_message('error','【你是普通用户，三个职位已经用完，增加请升级！】');
//								  
//								     }
//								   
//								   }	 
//								 
//							   if($this->level==1){
//								   
//								  
//								    $dangyue=date('Ym',time());
//								    $applyed=M('Apply')->where('a_uid='.$this->uid.' and month ='.$dangyue)->count(); 
//							          //  exit(M('Apply')->getlastSql());
//							               if($applyed>9){
//								   
//								                  parent::_message('error','【你是高级用户，十个职位已经用完，增加请升级！】');
//								  
//								                 }
//								   
//								   }	 
//								   
								   
								   
								   
								   
								   
								   
								   
											  $applyed=M('Apply')->where('gid='.$jobid.' and a_uid='.$this->uid.'')->count();
												
											   if($applyed>0){
													 
													  parent::_message('success','您已经应聘过这个职位了');
													
												   } 
															
								
								
								
								
							    //写入一条应聘过的职位	
						      
							   $touid=M('Works')->where('id=jobid')->getField('uid');
							   $data=$_POST;
							   $data['create_time']=time();
							   $data['month']=date('Ym',time());
							   $data['a_uid']=$this->uid;
							   $rs=M('Apply')->add($data);
					           
							           if($rs){
										   
										   //写入私信
														   
											 $post=rfilter($_POST); 
											 $data['content']   = $post['message'];
											 $data['toid']      = $touid;
											 $data['faid']      = $this->uid;
											 $data['uid']       = $this->uid;
											 $data['create_time']=time();
											 
											 $send=D("Usermsg")->add($data);
							
									   
										   
										   
										  parent::_message('success','申请成功');
								   
								     }else{
									   
									    parent::_message('error','应聘失败');
									}
					   }
	 
	 
	 
	 
	                     
						
	 
	                    
	             public function add(){
					 
					 
					 
					 }
	 
	             
				 public  function view(){
					 
					     $uid=$_GET['uid'];
						 $gid=$_GET['gid'];
						 
						 if($uid && $gid){
							 
							   $dt=M('Works')->where('id='.$gid)->find();
							   
							   if($dt['uid']!=$uid){
								   
								    parent::_message('error','非法操作');
								   
								   }else{
									   
									    
									   
									   }
							 
							 }
					 
					 
					 } 
	 
	 
	 }

?>