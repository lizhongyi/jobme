<?php
	  
/**
 * Created by DW.
 * User: Administrator
 * Date: 13-6-25
 * Time: 上午9:54
 * To change this template use File | Settings | File Templates.
 * className:Sinform
 * dever:yige
 * ProjectName:www.jobme.com OA.
 */
 class SinformAction extends GlAction{
	 
	                public function _initialize(){
						  
						  
						   parent::_initialize();
						 
						    $this->Check();
						}
						
						
						public function index(){
							
							
							  // $condition=" find_in_set($this->uid,to_uid)'";
							  $condition['to_uid']=array('eq',$this->uid);
							  $pageCount = $this->dao->where($condition)->count();
							  $listRows = empty($listRows) ? 10 : $listRows;
							  $orderd = empty($orders) ? 'id DESC' : $orders;
							  $paged = new page($pageCount, $listRows);
							  $infoList= $this->dao
							                        ->Where($condition)
							                        
													//->group('gid')
													
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													
													->select();  
													
													
								
								
								foreach($infoList as $k=>$v){
									   
									   if(in_array($this->uid,explode(',',$v['read']))){
									   
									      $infoList[$k]['rd']=1;
										  
									   }else{
										   
										    $infoList[$k]['rd']=0;
											
										   }
										  // $top1=$this->dao->where($condition)->order('id desc')->limit(1)->select();
										  // $infoList[$k]['nid']=$top1[0]['id'];
									}
								
													
													
								//echo $this->dao->getlastSql();					
							   // print_r($infoList);
							    $this->ajax==0 ? $pageBar = $paged->show() :$pageBar = $paged->show_ajax() ;
							    $this->assign('pageBar',$pageBar);					
							    $this->assign('infoList',$infoList);
								parent::_tpl('ajax');
							    
							
							  }
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  //details jump url
				  public function detail(){
					     
						    parent::checkID($this->id);
						    $dt=$this->dao->where("id=".$this->id)->find();
							if($dt){
							$data['read']=1;
							$data['id']=$this->id;
							$rs=$this->dao->save($data);
							
							if($rs){
								  
								  parent::_message('success','设置完成');
								   
								}else{
									
								   parent::_message('success','设置失败');
									
									
								}
							 
							}
						      
						  
					}
							  
							  
							  
							  
							  
							  
							  
						
	 
	 }