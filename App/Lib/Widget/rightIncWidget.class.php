<?php
class rightIncWidget extends Widget{
	
	
    public function render($data){ 
	
	               if(MODULE_NAME == 'User'){
	               $apply=M('Apply')->where('a_uid='.Cookie::get('uid'))->count();
				   $saved=M('Saved')->where('uid='.Cookie::get('uid'))->count();
				   }
				   
				   
				   $srList=M('Sr')->where('uid='.Cookie::get('uid'))->order('id desc')->limit(5)->select();
				   $srct=M('Sr')->where('uid='.Cookie::get('uid'))->count();
				   //print_r(M('Sr')->getLastSql());
	               $data['aps']=$apply;
				   $data['saved']=$saved;
				   $data['sr']=$srList;
				   $data['srct']=$srct;
				   
				   
	               $data['module']=MODULE_NAME;
	
	
        $ct=$this->renderFile('',$data);
		
		return $ct;
        
   } 
}
 

?>