<?php
class HunterAction extends GlAction {
	
	
	                    public function _initialize(){
							
							    
								parent::_initialize();  
							 $this->Checklogin();
							
							}
							
							
							public function index(){
								
								
								$this->display();
								
					    	}
							
							
							public function detail(){
								   
								   parent::checkID($this->id);
								   $dt=M('User')->where('uid='.$this->id)->find();
								    
									parent::checkdata($dt);
								   
								   
								   if($dt['pid']==0){
									      
										  $comid=$dt['uid'];
									   }else{
										   $comid=$dt['pid'];
										   }
								   $dt['company']=M('User_company')->where('uid='.$comid)->getField('companyname');                    $dt['comid']=$comid;
								   $dt['zhiwei_num']=M('Works')->where('comid='.$comid)->count();
								   
								   
								   
								     //NEW job list
				 $condition = array();
				             $id              =$_GET['id'];
							
                             $title           =formatQuery($_GET['title']);
                             $industry        =$this->_get('industry');
							 $cid = $_GET['cid'];
							 
                             $executive_arm   =$this->_get('executive_arm');
				             $area            =$this->_get('area'); 
							 $status          =$this->_get('status');
							 $stage           =$this->_get('stage');
							 $Search_posts    =$this->_get('Search_posts');
							 $display=1;
							 $condition = !empty($conditions) ? $conditions : '' ;
	                         $title &&  $condition['title'] = array('like', '%'.$title.'%');
							 $area &&  $condition['area'] = array('eq',$area);
							 $cid &&  $condition['cid'] = array('eq',$cid);
							 $display &&  $condition['display'] = array('eq',$display);
							 $industry && $industry['industry'] = array('eq',$industry);
                             $executive_arm != 0 && $condition['executive_arm'] = array('eq',$executive_arm);
                             $status !=0 && $condition['status'] = array('eq', $status);
                             $stage !=0 && $condition['stage'] = array('eq', $stage);
							 $Search_posts && $condition['Search_posts']=array('like','%'.$Search_posts.'%');
							 $condition['display']=1;
							 $id &&           $condition['uid']=array('eq',$id);
							// print_r($condition);
							
							$pageCount = M("Works")->where($condition)->count();
							$listRows = empty($listRows) ? 15 : $listRows;
							$orderd = empty($orders) ? 'id DESC' : $orders;
							$paged = new page($pageCount, $listRows);
							$dataContentList = M("Works")
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
													 
													
							//echo M('Works')->getLastSql();						
													                          
							$pageContentBar = $paged->show();
							$this->assign('getList', $dataContentList);
							$this->assign('pageBar', $pageContentBar);
                   
			   
			              
								   
								   
								   //职位列表
								   
								   
								   $this->assign('Title',$dt['realname']);
								   $this->assign('dt',$dt);
								   $this->display();
								
								}
							
	
	}

?>