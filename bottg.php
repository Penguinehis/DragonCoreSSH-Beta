<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
