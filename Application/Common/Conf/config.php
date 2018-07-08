<?php
return array(
	//'配置项'=>'配置值'
	//
    // 'URL_PATHINFO_DEPR'     =>  '-',	// PATHINFO模式下，各参数之间的分割符号
    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
    'URL_ROUTE_RULES'       =>  array(
    	'showuserb'=>'Home/user/showuserb',
    ), // 默认路由规则 针对模块
    'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记
    'LOAD_EXT_CONFIG'=>'db',
   'LOAD_EXT_FILE'=>'f1',
   /* 'ACTION_SUFFIX'         =>  'Action', // 操作方法后缀*/
   'SHOW_PAGE_TRACE'=>true,
    'trace_page_tabs'=>array(
        'base'=>'基本信息',
        'file'=>'文件信息',
        'think'=>'think流程',
        'error'=>'错误信息',
        'sql'=>'sql语句',
        'debug'=>'调试',
        'user'=>'用户信息',
    ),
    'TOKEN_ON'=>true,//令牌认证开启
    'TOKEN_NAME'=>'__hash__',//认证的名称
    'TOKEN_TYPE'=>'md5',//令牌类型
    'TOKEN_RESET'=>true,//是否令牌可以重置
);