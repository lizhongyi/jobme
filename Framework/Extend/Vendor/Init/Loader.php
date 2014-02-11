<?php

class Inits{
	

     // 验证是否登录
   static function CheckLogin(){
	    import("ORG.Util.Session");
		if (!Session::get('Hash')){
			 return false;
		}	 
	   
   }
   
       // 生成验证码
    public function verify(){
	    import("ORG.Util.Image");
		Image::buildImageVerify();
    }



   
       //发送邮件
    public function phpmailer($sendmail,$FromName='卓迈招聘',$subject='测试一封邮件',$body='测试'){
	    
		Vendor('Phpmailer.phpmailer');
		
		
		$mailconfig = D("mailconfig");
		$mailconfig = $mailconfig->select();
		   foreach($mailconfig as $k=>$s){
			    $mailconfig[$s['name']] = $s['value'];
			   
		}
		
	

	    $mail             = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host       = $mailconfig['smtpservers'];
		$mail->SMTPAuth   = true;
		$mail->Username   = $mailconfig['smtpusername']; 
		$mail->Password   = $mailconfig['smtppassword']; 
		$mail->Port       = $mailconfig['smtpport'];
		$mail->From       = $mailconfig['smtpfrom']; 
		$mail->FromName   = $FromName;
		$mail->CharSet    = "utf-8";
		$mail->Encoding   = "base64";
		$mail->AddAddress($sendmail,"");
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body =$body;
		$mail->AltBody ="text/html";
		if(!$mail->Send())  
		{
		return false;
		}  
		else 
		{
		return true;
		} 
    }
	
	
	




   
   static function Test(){
	   echo "asd";
   }
	 
 }

?>