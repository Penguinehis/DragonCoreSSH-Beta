<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
