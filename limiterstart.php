<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
