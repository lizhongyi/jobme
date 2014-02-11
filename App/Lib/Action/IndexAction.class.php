<?php
class IndexAction extends GlAction {
	
	
	     public function _initialize(){
			        
					parent::_initialize();
					
					 
					
					
					
					//检测会员是否到期
					 
					
					
				    
			  }
		 
		  public function index(){
			  
			             
							 
							// $condition['end_time']=array('eq',0);
							// $condition['logic_']='OR';
							// $condition['end_time']=array('gt',time());
							$pageCount = M("Works")->where($condition)->count();
							$listRows = empty($listRows) ? 15 : $listRows;
							$orderd = empty($orders) ? 'id DESC' : $orders;
							$paged = new page($pageCount, $listRows);
							
								$memcache = new Memcache;
								$memcache->connect("127.0.0.1", 11211) or die ("Could not connect");						
							 
							
							
							  $key=md5('jobs'.$_GET['p']);
							  if(!$memcache->get($key))
							  {
										
										
							             $dt = M("Works")
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();
													
													
													foreach($dt as $k=>$v){
										   
										   $dt[$k]['sed']=M('Saved')->where('uid='.$this->uid.' and gid='.$v['id'])->count();                                           $dt[$k]['aped']=M('Apply')->where('a_uid='.$this->uid.' and gid='.$v['id'])->count(); 
										 
										
										}
										$f = 'sql';
										$memcache->add($key,serialize($dt),0,120);  			
										$data=$dt;			
													
											 
							  }
							  else{
									  $f = 'mem';
									  $data_mem=$memcache->get($key);
									  $data = unserialize($data_mem);
							  }
										
													
							 				
										//echo $f;			
													
													
										 $memcache->close();			
													
													                          
							$pageContentBar = $paged->show();
							//$this->assign('fa',$f);
							$this->assign('getList', $data);
							$this->assign('pageBar', $pageContentBar);
                           	
			         
					  if($this->uid){
			                $this->display();
					  }else{
						  
						  $this->display('index1');
						  
						  }
			  }
			  
			  
			  
			  public function test(){
				  
				  
				      echo $_SERVER['HTTP_REFERER'];
				  
				  
				  
				  }
			  
			  
			  
			  
		  
}
?>