<?php


 $database=array(         //数据库配置信息       
				'DB_TYPE'   => 'mysql', // 数据库类型 
				'DB_HOST'   => 'localhost', // 服务器地址    
				'DB_NAME'   => 'erpking', // 数据库名      
				'DB_USER'   => 'root', // 用户名       
				'DB_PWD'    => 'lizhongyi-009', // 密码      
				'DB_PORT'   => 3306, // 端口     
				'DB_PREFIX' => 'eking_', // 数据库表前缀 
			    'DEFAULT_THEME' => 'default',
				'APP_AUTOLOAD_PATH'=>'ORG.Util',
				'COOKIE_PREFIX'=>'THINK_',
				//'SHOW_PAGE_TRACE' =>true,  
				'URL_PATHINFO_MODEL' => 1,
                'URL_PATHINFO_DEPR' => '/',
				//'TMPL_ACTION_SUCCESS'=>'Public:success',
				//'TMPL_ACTION_ERROR'=>'Public:error',
				'API_URL'=>'http://app.jobmedia.cn/daima/',
				'UPLOAD_PATH'=>'./Uploads/',
				'OA_URL'=>'http://oa.jobme.cn'
				
             
				);
?>