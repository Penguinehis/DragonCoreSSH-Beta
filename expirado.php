<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
