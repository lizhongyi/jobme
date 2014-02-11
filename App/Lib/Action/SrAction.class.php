<?php
/*
保存搜索条件类
*/


class SrAction extends GlAction{
	
	
	
	
	              public function _initialize(){
				 
				    parent::_initialize();
				     $this->Check();
				 }	  
	
	            
				//index
				
				
				   public function index(){
					        
							  $condition['uid']=array('eq',$this->uid);
							  $pageCount = $this->dao->where($condition)->count();
							  $listRows = empty($listRows) ? 15 : $listRows;
							  $orderd = empty($orders) ? 'id DESC' : $orders;
							  $paged = new page($pageCount, $listRows);
							  $dt = $this->dao
													  ->Where($condition)
													  ->Field('id,title,url,create_time')
													  ->Order($orderd)
													  
													  ->Limit($paged->firstRow.','.$paged->listRows)
													  ->select();
													  
													  $pageContentBar = $paged->show();
							$this->assign('getList', $dt);
							$this->assign('ct',$ct);
							$this->assign('pageBar', $pageContentBar);
                   
			   
			                $this->display();
				  
					   
					}
				
				
				//add 
				
				public function add(){
					
					     
						 
						      
                            $keyword           =formatQuery($_GET['keyword']);
                            // $industry        =$this->_get('industry');
							 $area            =$this->_get('area');
							 $area_cn         =$this->_get('area_cn'); 
							 $trade           =$this->_get('trade');
							 $trade_cn        =  $this->_get('trade_cn');
							 $payment         =$this->_get('payment');
							 $payment1        =$this->_get('payment1');
						     //$keyword         =$this->_get('keyword');
						     
							 $title=" ";
							 $keyword  && $title.="关键字：".$keyword; 
							 $area    && $title.=$area_cn."+";
							 $trade   && $title.=$trade_cn."+";
							 $payment  && $title.=$payment."万~".$payment1."万+";
							  
							
						     $p=0;
							 
                             if($area != '')     $p=$p+1;
							 if($trade != '')    $p=$p+1;					 
						     if($payment != '')  $p=$p+1; 
						     if($payment1 != '') $p=$p+1;
							 if($keyword != '')  $p=$p+1;
							 
							 if($p < 2){
								 
								   parent::_message('error','写入失败');
								 
								 }
							  
							 $data['title']=$title;
							 $data['uid']  =$this->uid;
							 $data['create_time'] = time();
							 $data['url']=substr($_SERVER['QUERY_STRING'],12,strlen($_SERVER['QUERY_STRING']));
							  
							  $ed=$this->dao->where('title="'.$data['title'].'" and uid='.$this->uid)->count();
							  if($ed>0){
								     parent::_message('error','写入失败');
								  }	 
								 
							 $rs=$this->dao->add($data);	 
						     if($rs){
								     parent::_message('success','写入成功');
								 }else{
									  parent::_message('error','写入失败');
									 
									 }
						
					
					
					}
	
	
	
	 
	      
		  public function delete(){
			          
					   parent::checkID($this->id);
					   
					   $rs=$this->dao->where('id='.$this->id)->delete();
					   
			           if($rs){
						      parent::_message('success','删除成功');
						    }else{
							  parent::_message('error','删除失败');
						  }
						   
						   
						   
			  }
	
	
	
	
	
	
	    public function doCommand(){
		           
				   
				 
                  
                 if(getMethod() == 'get'){
                       $operate = trim($_GET['sid']);
                       }elseif(getMethod() == 'post'){
                       $operate = 100;
                       }else{
                       parent::_message('error', '只支持POST,GET数据');
                       }
                      
                      if($operate=='100'){
                                $ids= implode(',',$_POST['id']);
								 $rs=$this->dao->where("id in ($ids)")->delete();
								  if($rs){
									    if($_PSOT['ajax']!=1){
									      parent::_message('success', '删除成功',$_SERVER['HTTP_REFERER'].$_REQUEST['maodian'],$ajax=true);
										}else
										{
											echo "nihao";
										}
									}else{ 
									 
										 parent::_message('error', '删除失败');
									}

							
							}else{
								
								 parent::_message('error', '操作类型错误');
								
								}
	       }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}

?>