<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
