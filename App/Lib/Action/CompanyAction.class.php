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
 
 
 
class CompanyAction extends GlAction{
	
	
	
	
	
	
	  public function _initialize(){
						  
						  
						   parent::_initialize();
						   parent::rightInc();
						
						}
						
						
					public function index(){
						
						if($this->level < 2){
							  
							    $this->display('../Index/upvip');
								
								exit();
							
							}
						    
			    //NEW job list
				 $condition = array();
				            
							
                             $title           =formatQuery($_GET['title']);
                             $industry        =$this->_get('industry');
							 $keyword         =$_GET['keyword'];
							 $area            =$_GET['area'];
                             $area_cn         =$_GET['area_cn'];
							 $trade           =$_GET['trade'];  
							 $area_cn  && $condition['area_cn']=array('like','%'.$area_cn.'%');
							 $area     && $condition['area'] =array('eq',$area);
							 $trade    && $condition['trade']=array('eq',$trade);
							 $keyword  && $condition['keyword']=array('like','%'.$keyword.'%');
							
	                       
							 $condition['display']=1;
							 $condition['pid']=array('eq',0);
							 $condition['companyname']=array('neq','');
							 $pageCount = M("User_company")->where($condition)->count();
							 $listRows = empty($listRows) ? 15 : $listRows;
							 $orderd = empty($orders) ? 'id DESC' : $orders;
							 $paged = new page($pageCount, $listRows);
							 $dataContentList = M("User_company")
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
							
							foreach($dataContentList as $k=>$v){
								   
								   $dataContentList[$k]['job_totals']=M('Works')->where('comid='.$v['uid'])->count();
								
								}
							
							
							
													 
										//echo  M("User_company")->getLastSql();			
													
									    // echo $pageCount;				                          
							$pageContentBar = $paged->show();
							$this->assign('getList', $dataContentList);
							$this->assign('pageBar', $pageContentBar);
                   
			   
			                $this->display();
				
				
				
				}   
				
				
				
				
				public function company_job(){
					
					       parent::checkID($this->id);
						   
						   
						   
						   
						   
						   
						   
						   
						   $keyword           =formatQuery($_GET['keyword']);
                             $industry        =$this->_get('industry');
							 $area            =$this->_get('area');
							 $area_cn         =$this->_get('area'); 
							 $trade           =$this->_get('trade');
							 $trade_cn        =  $this->_get('trade_cn');
							 $payment         =$this->_get('payment');
							 $payment1        =$this->_get('payment1');
							 $keyword         =$this->_get('keyword');
							 $display=1;
							// $condition = !empty($conditions) ? $conditions : '' ;
	                         $area &&  $condition['area'] = array('eq',$area);
							 //$cid &&  $condition['cid'] = array('eq',$cid);
							 $display &&  $condition['display'] = array('eq',$display);
							 $payment &&  $condition['payment']=array('gt',$payment);
							 $payment1 &&  $condition['payment1']=array('gt',$payment1);
							 
							 $keyword && $condition['Search_posts']=array('like','%'.$keyword.'%');

						   
						   
						   
						   
						   
						   
						 
						  $dt=M("User_company")->Field('companyname,uid')->where('uid='.$this->id)->find();
						     
							$condition['comid']=array("eq",$this->id);
						    $pageCount = M("Works")->where($condition)->count();
							$listRows = empty($listRows) ? 15 : $listRows;
							$orderd = empty($orders) ? 'id DESC' : $orders;
							$paged = new page($pageCount, $listRows);
							$dataContentList = M("Works")
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
													 
													
													
													                          
							  $pageContentBar = $paged->show(); 
							  
							  
							  $this->assign("dt",$dt);
							  
							  $this->assign("jobList",$dataContentList);
							  
							  $this->assign("pagebar",$pageContentBar);
							  
							  $this->display();
							  
					
					
					}
				
				
				
				
				
				public function detail(){   
				
				              parent::checkID($this->id);
							  
							   
                              $dt=M("User_company")->where('uid='.$this->id)->find();
							 
							  $hunter=M('User')->where('pid='.$this->id.' and step > 0 or uid='.$this->id.' and step > 0' )->select();
							  
							   if(!$dt){
								   throw_exception('没有找到数据','InfoException');
								   }
								   
								   
								
								
								
							  foreach($hunter as $k=>$v){
								  
								      $hunter[$k]['jcont']=M('Works')->where('uid='.$v['uid'])->count();
								  
								  }	   
								   
								   
							  $this->assign('Title',$dt['companyname']);
							  $this->assign('hlist',$hunter);	
							  $this->assign('dt',$dt);
							  $this->display();		
 					
					}
	 
	
	
	
	
	}

?>