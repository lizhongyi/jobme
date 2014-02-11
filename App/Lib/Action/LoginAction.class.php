<?php
class LoginAction extends Action{
	
	  
	    public function _initialize(){
			
			
			
			
			
			  $this->cuname         = Cookie::get('username'); 
		      $this->uid            = Cookie::get('uid'); 
			  $this->pid            = Cookie::get('pid');
			  $this->level            = Cookie::get('level');
			  $this->utype     = intval(Cookie::get('type'));
		      
			  $this->department     = Cookie::get('department');
			  $this->role_id        = Cookie::get('role_id');
			  $this->permission_tile = Cookie::get('permission_tile');
			  $this->permission = Cookie::get('permission');
			  
			 
			  
							 
			       //获取公司ID采用递归
				   if($this->pid != 0){
				   $this->comid=$this->pid;
				   }else{
				   $this->comid=$this->uid;
					   }
			
			
				  
	              $this->assign('uname', $this->cuname);
		          $this->assign('uid', $this->uid);
				   $this->assign('comid', $this->comid);
		          $this->assign('pid',$this->pid);
		          $this->assign('permission_tile',$this->permission_tile);
				  $this->assign('realid',$this->realid);
			      $this->assign('utype',$this->utype);
				  $this->assign("select",$public_arr);
				 
			
			
			$this->dao=	D('User');
			
			   
			}
	   
	    
	
  public function index(){
			            if(Cookie::get('uid') != ""){
				           
				           header("Location:/");
				   
				   }
				       
				        $this->display();
			        
			   }
			   
			   
			   
			   public function  doLogin(){ 
		              
					  
					  if(Session::get('uid') != ""){
				   
				        header("Location:/");
				   
				   } 
					   
					 
				     $data= rfilter($_POST);
					 
					 $username=$_POST['username'];
					 $pass=sha1($_POST['password']);
					 
					 if($username=="" || $pass==""){
						  $this->_message('error',$username);
						 
						 }
					 
					 
					 
					 $lo=M('User')->where("username='".$username."' and password='".$pass."' and type=3")->find();
					// exit(M('User')->getLastSql());
					 if($lo['uid']!=""){
						      
							  
							 
							 
							 $data['last_login_time']=time();
							 $data['last_ip']=get_ip();
							 
							// $uptime=M('User')->where('uid='.$lo['uid'])->save($data); 
							  
							 Session::set('uid',$lo['uid']);
							 Session::set('pid',$lo['pid']);
							 Session::set('username',$lo['username']);
							  Session::set('realname',$lo['realname']);
							 Session::set('type',$lo['type']);
							  Session::set('post',$lo['post']);
							 Session::set('role_id',$lo['role_id']);
							  Session::set('level',$lo['level']);
							 
							 
							 
							 Cookie::set('uid',$lo['uid']);
							  Cookie::set('level',$lo['level']);
							  Cookie::set('post',$lo['post']);
							 Cookie::set('pid',$lo['pid']);
							 Cookie::set('username',$lo['username']);
							 Cookie::set('realname',$lo['realname']);
							 Cookie::set('type',$lo['type']);
							 Cookie::set('role_id',$lo['role_id']);
							
						     $this->_message('success','登陆成功');
						 }else{
							 
							  $this->_message('error','登陆失败');
							 }
				        
				   
			        
               }   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   public function checkInput(){
				
				       $act=$_GET['act'];
					   
					   if($act=='uname'){
						      
							 $rs=M('User')->where("username='".$_POST['username']."'")->count();  
							           
									     if($rs>0){
														   exit(false);
														}else{
															exit(true);
															}           
						   
						   }
						   
						   if($act=='mail'){
							   
							    $rs=M('User')->where("email='".$_POST['email']."'")->count();  
								
								
								 if($rs>0){
														   exit(false);
														}else{
															
															exit(true);
															
															}
							   }
							   
						exit('error');	   
				      
				
				}	
			   
			   
			   
		 /*User reg*/
		 
		  function do_reg(){
			  
			         Load('extend');
			         //first reg step1
					 $this->dao=D('User');
					 $data=$_POST;
					 
					//check ext
					 $c=$this->dao->where('username='.$_POST['username'])->count();
					 if($c>0){
						  $this->error('用户名已经存在！');
						 }
						 
					 if($_POST['username']==""){
						  $this->error('用户名不能为空');
						 }	 
					 $daoAdd=$this->dao->create();
					 if($daoAdd){
						    $this->dao->status=0;
							$this->dao->step=1;
							$this->dao->create_time=time(); 
							$this->dao->regip=get_client_ip();
							$nums=base64_encode(md5($data['username'].rand(0,999999).time()));
							$this->dao->activate=$nums;
							$this->dao->password=sha1($data['password']);
							$this->dao->pid=0;
							$this->dao->type=3;
						    $rs=$this->dao->add();
						    if($rs){
								//send an email to this emialaddrs
								$to=$data['email'];
								$name='Jobme';
								$subject="账号激活邮件";
								$url="<a href='http://".$_SERVER['HTTP_HOST']."/Login/activate/uid/".$rs."/numbs/".$nums."'>点击激活</a>";
								$body="这是我们给你发送的一封激活账号的邮件请点击下面链接激活邮箱<br>".$url;
								$send=send_email($to,$subject,$body,$charset='UTF-8', $attachment = null);
								 
								 if($send==0){
									   $this->dao->where('uid='.$rs)->delete();
									   
									   $this->error('系统异常,邮件地址有问题');
									 
									 }else{
										   
										
											
										 $lo=M('User')->where('uid='.$rs)->find();	
										 
										 Session::set('uid',$lo['uid']);
										 Session::set('pid',$lo['pid']);
										 Session::set('username',$lo['username']);
										  Session::set('realname',$lo['realname']);
										 Session::set('type',$lo['type']);
										
										 
										 
										 Cookie::set('uid',$lo['uid'],60*60*24);
										 Cookie::set('pid',$lo['pid'],60*60*24);
										 Cookie::set('username',$lo['username'],60*60*24);
										 Cookie::set('realname',$lo['realname'],60*60*24);
										 Cookie::set('type',$lo['type'],60*60*24);
											
										 $this->_message('success','注册成功','/Login/checkMail',1);
										 
										 }
								 
								}
							
						 }
					 
			          
			        
			  
			  
			  
			  
			  }
		
		
		
			   /*退出登陆*/
			   public function logout(){
				
			          Session::set('uid','');
					  Session::set('uname','');
					  Session::set('level','');
					  Session::set('realid','');
					  Session::set('face','');
					  Session::set('permission','');
					  Session::set('role_id','');
					  Session::set('login_type','');
					   
					  
					  Session::set('consultant','');
					  Cookie::set('role_id','',time()-1);
					  Cookie::set('login_type','',time()-1);
					  Cookie::set('level','',time()-1);
					  Cookie::set('uid','',time()-1);
					  Cookie::set('realid','',time()-1);
					  Cookie::set('uname','',time()-1);
					  Cookie::set('face','',time()-1);
					  Cookie::set('consultant','',time()-1);
	                  redirect("/Login");
               //  print_r($_COOKIE);
		   
		       //echo  Session::get('uid');
			
          

      
    
				   
			   }
			   
			   
			  
			   
			   	public function activate(){
					
					     $uid=$this->_get('uid');
						 $nums=$this->_get('numbs');
						 if(!$uid){
							  
							   $this->error('参数错误');
							 
							 }
							 
						 $condition['uid']=array('eq',$uid);
						 $condition['activate']=array('eq',$nums);
						 $condition['step']=array('eq',1);	 
						 $activate=M('User')->where($condition)->count();
						 
						 if( $activate > 0){
							  
							   $data['step']=2;
							   
							   $r=M('User')->where('uid='.$uid)->save($data);
							   
							   
							   if($r){
								   
								   $this->_message('success','激活成功','/User/profile_edit');
							    }else{
								 
								 $this->_message('error',"激活失败，或该链接已经失效");
								 }	 
							   
							 }else{
								 
								 $this->_message('error',"该链接已经失效");
								 }	 
						
							 
					
					}
					
					
			   
			   
			    //checksetp
		  
		       public function checkStep(){
				           $uid=Cookie::get('uid');
				          $step=M('User')->where('uid='.$uid)->find();
						  
							$this->assign('email',$step['email']);
							
				         
						 if($step['pid']==0 && $step['login_type'] !=2){
					  
					   switch ($step['step']){
						     
							 case 1 :
							 redirect('/Login/checkMail');
							 exit;
							 break;
							 case 2 :
						     redirect('/User/profile_edit');
							 exit;
					
							  break;
							 case 10 :
							 $this->display('disbaled');
						      exit;
							 break;
						   }  
						   
						  
						    
							   
							   
							
							 
							 
							 }
				 
				 }		
			
			   
			   
			   
			   public function checkMail(){
				            
				            $uid=Cookie::get('uid');
				            $step=M('User')->where('uid='.$uid)->find();
							
							if($step['login_type']==2){
								 redirect('/User/profile_edit');
								}
							
							if($step['step'] > 2){
								  $this->checkStep();
								}
							
							$this->assign('email',$step['email']);
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
					
			   
			   public function examine(){
				      
					  
					  //get examine profile
					  if($this->pid==0){
					  $eid=$this->uid;
					  
					  }else{
						  $eid=$this->pid;
						  }
						  
					          $dt=D('User_company')->Field('examine,examine_info')->where('uid='.$eid)->find();
					         if($dt['examine']==0){
							  $dt['title']=":)您的资料正在审核中...";
							  }
							  
							 if($dt['examine']==2){
							  $dt['title']=":(您的资料没有通过审核...";
							  }  
							 $this->assign('dt',$dt);
							 
							 if($dt['examine']==1){
								     
									 
								 
								 }
							 
							 
							 
							 
					      $this->display();
				   
				   
				   }
			   
			   
			   
			   
			   public function forget(){
				   
				   
				       $this->display();
				   
				   }
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   public  function repass(){
		
			  $toemail=$_POST['umail'];
			  if($toemail==""){
				   exit('邮箱不存在');
				  }
			  $tiao=$this->dao->where('email ="'.$toemail.'"  and type=3')->find();
			 
			  if(!$tiao['uid']){
				 exit('邮箱不存在');  
			   }
				  
				  /*生成随机验证码*/
				  $randnum=base64_encode($toemail.",".rand(1,time()));
				  //echo $randnum;
				 // exit();
				  $data['randnum']=$randnum;
				  $data['uid']=$tiao['uid'];
				  $uprand=$this->dao->where('uid='.$tiao['uid'])->save($data);
				  
				//  exit($this->dao->getLastSql());
				/*导热邮件类*/  
				 require_cache('includes/class.phpmailer.php');
				if(!$uprand){
					 
					 exit('邮件异常');
					
					}
				   require_cache('includes/mailer.class.php');
				
				         $from      =    $this->sysConfig['site_name'];
				         $email     =    $this->sysConfig['smtpmail'];
						 $protocol  =    $this->sysConfig['smtpyz'];
						 $host      =    $this->sysConfig['smtpserver']; 
						 $port      =    $this->sysConfig['smtpport']; 
						 $user      =    $this->sysConfig['smtpuser']; 
						 $pass      =    $this->sysConfig['smtppass']; 
						
						
						
			          
						
						$to= $toemail;
						$subject="找回密码";
						$body="您好您的密码需要修改，请点击如下链接<a href='http://".$_SERVER['HTTP_HOST']."/Login/urepass/rand/".$randnum."'>http://".$_SERVER['HTTP_HOST']."/Login/urepass/rand/".$randnum."</a>";
						$is_html=true;
						$charset='utf-8';
			            $body             = eregi_replace("[\]",'',$body); //对邮件内容进行必要的过滤
					
						
					
						                 $fasong=send_email($to,$subject,$body,$charset='UTF-8', $attachment = null);
						                 if($fasong){
							
							             exit ('ok');
							
							             }else{
							             echo 0;	
							             }
										 
						    
						

			  
			 
			
			 
		}
		//找回密码
		public  function urepass(){
			
			              $rand=$_GET['rand'];
			          
				          if($_GET['act'] != 'uppass' && $rand !="" ){
							 
							 
					         $array = explode(',',base64_decode($rand));
						
					 
					  //查询验证码
					      $tiao=$this->dao->where('email ="'.$array[0].'" and randnum = "'.$rand.'"')->find();
					      
					   if(!$tiao['uid']){
						   
						   self::_message('errorUri', '验证码作物或已经失效', U('Index/index'));
						   exit();
						   
						   }else{
							  
							    $this->assign('rand',$rand);
								$this->display();
								exit();
							   
					}  
						 }
                   if($_GET['act'] == 'uppass' ){
					   
					        $pass    =  $_POST['pass'];
					        $pass1   =  $_POST['pass1'];
	                        $rand    =  $_POST['rand'];
							
							
							
							if($pass=="" || $pass1==""){
							 
							   exit('请输入密码');	
							}
							
							if($pass != $pass1){
							 
							   exit('两次输入的不一致');	
							}
						   $array = explode(',',base64_decode($rand));
						   $tiao=$this->dao->where('email ="'.$array[0].'" and randnum = "'.$rand.'"')->find();
						  
						  
						   //更新
						   $data['password']=sha1($pass);
                           $data['randnum']="";
						   $data['uid']=$tiao['uid'];
						   $up=$this->dao->where('uid='.$tiao['uid'])->save($data);
						   if($up){
							    
								exit('ok');
								
							   }
							  else{
								  
								  exit('修改失败');
								  
								  } 
						 
						  
					   }
					  
					  } 
					  
				   
				   
				   public function info(){
					   
					     echo file_get_contents('https://graph.qq.com/user/get_user_info?oauth_consumer_key=1101083455&access_token=46EDEB7FA0D042771629A163B50C422B&openid=55AE04C605FB14FABECEDF038E664558&format=json');
					   
					   }
					   
					   
					   
				
				 public function callback(){
					     
						 
					   
					     $this->display();
					
					
						


						  
				      }
				   
				   
				   //检测QQ用户是否注册
				   
				   
				   public function checkReg(){
					   
					         //接受post
							 
							 $ed=M('User')->where('openId="'.$_POST['openId'].'"')->count();
							 
							 echo $ed;
							 if($ed==1){
								 
								       $lo=M('User')->where('openId="'.$_POST['openId'].'"')->find();	
										 
										 Session::set('uid',$lo['uid']);
										 Session::set('pid',$lo['pid']);
										 Session::set('username',$lo['username']);
										  Session::set('realname',$lo['realname']);
										  Session::set('type',$lo['type']);
										  Session::set('login_type',$lo['login_type']);
										
										 
										 
										 Cookie::set('uid',$lo['uid'],60*60*24);
										 Cookie::set('username',$lo['username'],60*60*24);
										 Cookie::set('realname',$lo['realname'],60*60*24);
										 Cookie::set('type',$lo['type'],60*60*24);
										  Cookie::set('login_type',$lo['login_type'],60*60*24);
								 
								 }
					   
					   }
			       public function regQq(){
					   
					         $ed=M('User')->where('openId="'.$_POST['openId'].'"')->count();
							 if($ed==1){
								  echo 1;
								  exit();
								 }
					          
							  $data['openId']=$_POST['openId'];
							  $data['accessToken']=$_POST['accessToken'];
							  $data['type']=3;
							  $data['create_time']=time();
							  $data['realname']=$_POST['nickname'];
							  $data['username']=$_POST['openId'];
							  $data['login_type']=2;
							  $data['face']=$_POST['face'];
							  $rs=D('User')->add($data);
							  if($rs){
								  
								  
								  
								  
								  $lo=M('User')->where('openId="'.$_POST['openId'].'"')->find();	
										 
										 Session::set('uid',$lo['uid']);
										 Session::set('pid',$lo['pid']);
										 Session::set('username',$lo['username']);
										  Session::set('realname',$lo['realname']);
										  Session::set('type',$lo['type']);
										  Session::set('login_type',$lo['login_type']);
										
										 
										 
										 Cookie::set('uid',$lo['uid'],60*60*24);
										 Cookie::set('username',$lo['username'],60*60*24);
										 Cookie::set('realname',$lo['realname'],60*60*24);
										 Cookie::set('type',$lo['type'],60*60*24);
										  Cookie::set('login_type',$lo['login_type'],60*60*24);
								 
								  echo 1;
								  
								  
								  
								  }else{
									  echo D('User')->getLastSql();
									  }
							  
					   
					   }

}

?>