<?php
/*
用户基本操作
*/

class UserAction extends GlAction{

	      function _initialize(){  
			       
		            
			            parent::_initialize(); 
						parent::Check();
						parent::rightInc();
					
			                 
				
				}
			
			
			
			
	       public  function index(){
			   
			    
			            R('Login/checkStep');
					 
					//工作经验 
					
					 $wk=M('Resume_work')->where('add_uid='.$this->uid)->order('end_time desc')->limit(1)->select(); 
					  $edu=M('Resume_edu')->where('add_uid='.$this->uid)->order('end_time desc')->limit(1)->select();        
					 
					/// print_r($wk);
					 
					 $this->assign('wk',$wk[0]);
					 $this->assign('edu',$edu[0]);
					 
					        
													
					     								
													                          
					
			   
			          $this->display();
					
			   
			    }			
				
				
				
				    public function Upass(){
						
						     $this->display();
							 
						}
	
			  
				
				
				  //profile view tamplate
				   public function profile_edit(){
					         
				             $pr=M('User')->where('uid='.$this->uid.' and type=3')->find();
							  
							 // print_r($this->uid);
							//  exit();
							 
							  if($pr['step'] < 2 && $pr['login_type'] !=2 ){
					           redirect('/Login/checkMail');
							  }
							 
							 //获取头像信息
							 
							 $this->assign('pr',$pr);
							  
				            $this->display();
				   
				   }
				   
				   
				
				   
				   
				   
				//save profile
				 
				public function do_profile(){
					     $data=$_POST; 
						 $dao=$this->dao->create();
						
						if($dao){
							     
								 if($data['step']<3){
									 $this->dao->step=3; 
									      $rs=$this->dao->where('uid='.$this->uid)->save(); 
									 }else{
										 $rs=$this->dao->where('uid='.$this->uid)->save(); 
										 }
								 
							   
								
								if($rs){
									    Cookie::set("realname",$data['realname'],60*60*60);
									   $this->_message('success','更新成功','/Resume');
									   
									}else{
										
										$this->_message('error','更新失败');
										}
							
							 }else{
								  
								  exit("错误了");
								 
								 
								 }
							 
					} 
				 
				   
				   
				  
				   
				       public function resume(){
					   
					                
									$dt=$this->dao->where('uid='.$this->uid)->find();
								    $this->assign('dt',$dt);
								    $this->display();
								   
					   
					   }
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				    
					 protected function _message($type = 'success', $content = '更新成功', $jumpUrl = __URL__, $time = 1, $ajax = false)
    {
        $jumpUrl = empty($jumpUrl) ? __URL__ : $jumpUrl ;
        switch ($type){
            case 'success':
                $this->assign('jumpUrl', $jumpUrl);
                $this->assign('waitSecond', $time);
                $this->success($content, $ajax);
                break;
            case 'error':
                $this->assign('jumpUrl', 'javascript:history.back(-1);');
                $this->assign('waitSecond', $time);
                $this->assign('error', $content);
                $this->error($content, $ajax);
                break;
            case 'errorUri':
                $this->assign('jumpUrl', $jumpUrl);
                $this->assign('waitSecond', $time);
                $this->assign('error', $content);
                $this->error($content, $ajax);
                break;
            default:
                die('error type');
                break;
        }
    }
				   
				   
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		public function upPass(){
		
		
			   $data= rfilter($_POST); 
			  
			    /*验证原密码*/
				  
				  if($data['npass'] != $data['npass1']){
					  
					    exit("密码不一致");
					  }
				  
				 $ypass=sha1($data['ypass']);
				  
			
				  
				  $pas=$this->dao->where('uid = '.$this->uid.' and password="'.$ypass.'"')->count();
				  
				//echo $pas;
				  
				  if($pas < 1 ){
					   
					 $this->_message('error','原密码错误');
					  }
				//exit($pas);
				
		      		$data['password']=sha1($data['npass']);	 
                    
		            $savep=$this->dao->where('uid='.$this->uid)->save($data);	
					
					
		            if($savep){
						
		                    $this->_message('success','更新成功'); 
					    
                            } else{
							
				             $this->_message('error','更新失败'.$this->dao->getLastSql());
				  
                         }
		  
			    
			    
			
			  
		 }
	 
	 
	 
	 
	
	 /**
	 
	 上传
	 
	 */
	 
	 
	 
    public function upFace(){
		    
			if(empty($_FILES)){
				  
				 exit("<script> parent.callback(3);</script>");
				 
				}
				else{
					 $uploadFile = upload($this->getActionName());
					if($uploadFile) {
						
						//exit($uploadFile);
						$fname=$uploadFile[0]['savepath']."m_".$uploadFile[0]['savename'];
						$wh=getimagesize($fname);
						
						
						if($wh[0] > 200){ 
						
							$data['face2']=sub1($fname);
							$data['face1']=0;
							
							$data['uid']=$this->uid;
							$cheng=$this->dao->where('uid='.$this->uid)->save($data);
							if($cheng){
						 exit("<script> parent.callback(2,'".sub1($fname)."',$wh[0],$wh[1]);</script>");
							}else{
								echo "这里有错误";
								}
						}else{
						//写数据库删除
						   
							 @unlink($this->userarr['face']);
							
							
							$data['face']=sub1($fname);
							$data['face1']=1;
							$data['face2']="";
							$data['uid']=$this->uid;
							$cheng=$this->dao->where('uid='.$this->uid)->save($data);
							exit("<script> parent.callback(1,'".sub1($fname)."');</script>");
						}
							
							
					}
					
					
					}
			  
			 
		  
	}
	
	
	
	
	
	
	
	
	
	
	 /**
	 
	 上传
	 
	 */
    public function  cutFace(){
		    
			if(!$_POST) exit("提交失败");
				//exit("nihaohah");
			
			$x1=intval($_POST['x1']);
			$y1=intval($_POST['y1']);
			$x2=intval($_POST['x2']);
			$y2=intval($_POST['y2']);
			$face2=$this->dao->where('uid='.$this->uid)->getField('face2');
			$picname=sub1($face2);
		
			$ext=substr($picname,-3);
			//exit($face2);
			$dstimg=$picname;
			$nw=intval($x2-$x1);
			$nh=intval($y2-$y1);
			
			
			$r = 100;
            if($x2<$x1||$y2<$y1){
              return false;
             }
			 
            $img=$picname;
             if($ext=='jpg'){
            $im=imagecreatefromjpeg($img);
			 }
			
             if($ext=='gif'){
            $im=imagecreatefromgif($img);
			 }
			 
             if($ext=='png'){
            $im=imagecreatefrompng($img);
			 }
            $percent = $r*0.01;
           
           list($width, $height) = getimagesize($img);
            $new_width = $width * $percent;
            $new_height = $height * $percent;
            $tempimg = imagecreatetruecolor($new_width,$new_height);
            imagecopyresampled($tempimg, $im,0,0,0,0, $new_width,$new_height, $width, $height);
			
			
			
             if($ext=='jpg'){
           imagejpeg($tempimg,"Uploads/User/face/temp_".$picname);
			 }
            
			if($ext=='gif'){
           imagegif($tempimg,"Uploads/User/face/temp_".$picname);
			 }
			 if($ext=='png'){
           imagepng($tempimg,"Uploads/User/face/temp_".$picname);
			 }
			
			
			
            imagedestroy ($im);

           $ims=$tempimg;
           $srcW=imagesx($ims);
           $srcH=imagesx($ims);
           $top_x = $x1;
           $top_y = $y1;
           $bottom_x = $x2;
           $bottom_y = $y2;
           $newimg = imagecreatetruecolor($bottom_x-$top_x,$bottom_y-$top_y);
           imagecopyresampled($newimg, $ims,0,0,$top_x,$top_y, $srcW,$srcH, $srcW, $srcH);    
		   $nface="Uploads/User/face/".substr(md5($this->uid),8).time().".".$ext;
		   
		   
		   if($ext=='png'){
           imagepng($newimg,$nface);
			 }
		   
		    if($ext=='gif'){
           imagegif($newimg,$nface);
			 }
			 if($ext=='jpg'){
           imagejpeg($newimg,$nface);
			 }
		   
         
		   
           if(imagedestroy ($ims))
		   /*更新数据库删除临时图*/
		   @unlink("Uploads/User/face/temp_".$picname);
		   @unlink($picname);
		   $data['face']="/".$nface;
		   $data['face1']=1;
		   $data['face2']="";
		   $data['uid']=$this->uid;
		   $sv=$this->dao->where('uid='.$this->uid)->save($data);
		   if($sv){
			       
				   echo "/".$nface;
				   
			   }
		   else{
			  //  echo $this->dao->getLastSql();
			   
			   }


			
			
			 
		  
	}
		
		
		
		
		
		
		
		public function vip(){
			      
				     
				   
				  
			       
				    $this->display();
			
			
			}
		
		
		public function up1(){
			        
					
					if($this->level==1){
						   
						    parent::_message('error','对不起，你已经是高级用户！');
						
						}
					
			      $this->display();
			
			 
			 }
			 
			 
			 
			 public function do_vip(){
				       
					   
					   
					   
                
                          
                       
					   $t=$_GET['t'];
                       $t1=substr(sha1(date('ymdhis',time()).'nihao'),4,11);
                       $t2=substr(sha1(date('ymdhis',time()) - 1 .'nihao'),4,11); 
					    $t3=substr(sha1(date('ymdhis',time()) - 2 .'nihao'),4,11); 
					 
					  if($t1!=$t && $t2!=$t && $t3=$t) parent::_message('error','验证失败');
                         
						

					  
					   $jin=$_GET['qian'];
					   
					    //exit($jin);
					   
					   if($jin==1){
						   
						    $vtpye=1;
						   
						   }else if($jin=='500'){
							   
							  $vtpye=2;
							   
						  }else{
							    
								parent::_message('error','验证失败');
							  
							  }
							   
							   
							   
						//假设充值成功
						
						
						$d['uid']=$this->uid;
						$d['vtpye']=$vtpye;
						$d['start_time']=date('Ymd',time());
						$d['end_time']=date('Y')+1 . date('md',time());
						
						$rs=D('vip')->add($d);
						
						if($rs){
							
							   $dt['level']=$vtpye;
							   $ap=D('User')->where('uid='.$this->uid)->save($dt);
							   
							   if($ap){
								       
								   }
								   
								 
								    Session::set('level',$vtpye);
									Cookie::set('level',$vtpye,60*60*60);
								   
								 parent::_message('success','升级成功');  
								 
							   
							   }else{
								  
								 parent::_message('error','升级失败');
								 
								
								 
								}	   
							   
							   
				      
				 
				  }
			 
			 
			 public function up2(){
				 
				   
				   
				   	if($this->level==2){
						   
						    parent::_message('error','对不起，你已经是VIP用户！');
						
						}
				   
			
			      $this->display();
			
			 
			 }
		
		
		
		
		
		
		
		
		  public function saved(){
			       
				            //$condition['deleteid']=array('eq',0);
					        $condition['uid']=array('eq',$this->uid);
					        $pageCount = M('Saved')->where($condition)->count();
							$listRows = empty($listRows) ? 15 : $listRows;
							$orderd = empty($orders) ? 'id DESC' : $orders;
							$paged = new page($pageCount, $listRows);
							$sed =M('Saved')
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
													 
													
													
													                          
							$pageContentBar = $paged->show();
					        $this->assign('sed',$sed);
					        $this->assign('pagebar',$pageContentBar);
			                $this->display();
				   
			  
			  
			  }
		
		
		public function apply(){
			
			      
							//$condition['deleteid']=array('eq',0);
					        $condition['a_uid']=array('eq',$this->uid);
					        $pageCount = M('Apply')->where($condition)->count();
							$listRows = empty($listRows) ? 15 : $listRows;
							$orderd = empty($orders) ? 'id DESC' : $orders;
							$paged = new page($pageCount, $listRows);
							$apply =M('Apply')
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
						    //状态数组
							
							$stage=array('','初选','顾问面试','已推荐','客户面试','薪酬谈判','已录用','入职','付款通知');						 
								
								
								foreach($apply as $k=>$v){
								         
										$st=M('Candidate')->where('gid='.$v['gid'].' and  resume_id='.$this->uid)->getField('stage');
										$apply[$k]['st']=$stage[$st]; 
									
									}
													
													
													                          
							$pageContentBar = $paged->show();
					 
					 
					 
					 $this->assign('ap',$apply);
					 $this->assign('pagebar',$pageContentBar);
			   
			          $this->display();
					
			
			
			}
		
		
		               public function setting(){
						   
						    
						   $dt=M('Userset')->where('uid='.$this->uid)->find();
						   $this->assign('dt',$dt);
						   
						  
						    
						   $this->display();
			  
			  
			  
			         }
		
				   
				   
				
	
	}

?>