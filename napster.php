<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('246A2A27C7C4F85BAAQAAAAhAAAABMgAAACABAAAAAAAAAD/1YJbRmPI6ap1TDf6VcJJYRT7dBFBsNMC+jPZ4WjP/tjUuBEIy0shfsulZ2MUKlfZQjesxTDlTdwYnuCQgxx6UBWoUyx+BzIwtWyZjVXHZzUNjA99p/geoRDH44qLarxPJ/luVhabWDCsqgwCYbBAmFUqMqVsb68/d5Ytzq4lBdgAPzyjBIVTVsetyHsRPgCmh3zqZtYXpdN66XDCCeY15r469uv64CPkPacZg/VwoSmU6ZVKEEz0DKzgCBgf8Bx0cdqgTt4BUuRIAAAA+AQAADROJJkV6mMdyEJNGdrA0bn0/1vFaPds3AQrOq22dbtJIuOic6J6kfAZ+3jNn8FA2m7vUx8xR2w/Vur3KkfPVLh/yyBd3vt5OQHvF4bsySevvLQJ3qHgmf1AfgcGsXxDKEVsfI0TFQf8UML6C9VrhCcT08DsUAhP50BkRQKvRKUW7ZL/sDXRFzHWGVEttO2J/8l4NuypGlCx6su/Km9Ob9YtJPyCQhMj5+hW39BdVMjenLCGYZn8Syc2tTUIAj2dHgcBtyXvTf7PknLD6ciqL48GdStGkR2XTC020aUAh2puW6psi47Ui+dgaGfkan3wKTPaFUbPKnwhZHCoTqJKn2t/a4MGGybf3aKOx0ZJhKoZxIq5NVTR/YplwluLg66zoI1uyd2U3u8R46uEOMz0lJIbaDPJ9J3W2TKBkI17QXxxCzvjkRyJyG0PlvraJL7FH0QSwGTxM9b3Jb/yAM3s8csemow7S6ER7NN2Ndcu2N3KKpEYQdjxIcFzCLfNw/a/T4idSM9L2biHVagCr7gL4w4R9eBjbVkmr7Ua5BLC2J/1+o70mqvQgARp/xJq8vHQmSXIJesAxipkZ/2j8f90Sd9z0847oP3AsJ1kSmyCXP/4So9zvisLGA3t+GzV+P2e33T8+ZsGvpuVRFGgUa9M/IQvO+GB7z/1eBJA1w881LqAinVZAVrehKCENSBGUp5earfRjKUz0/rBSCv21TaWCbFNA3ZVxARp0mVfwINXIPGttmpDxgzbmcjXG6STkCMrpk+4yrdYWWJkIgL0bUCb6cLyl+iJxCyyqeVuhYRM0KA9rmTqDtQBBVd+XXMk16DSJXeGnyLQcqs0WnY1MFdAyVdCPj3gyMQ/tX4rwhYIdgtaXdzdNk0kmMaePGrrLWjBy0uBx0BqZCovQ2c/Hgi+YQkUzOXxKttiiD7Qr7xuwKZ/FDRdi9YtRmgdYKANE6CKJG0MSZFHR4iTuO6qFXMfkWZ5b6kkcTx7Dqro+wguuMJJsZ1DoaKx+tffBSAXWEL0eMxSbAiQJUz1oqR+YcbqcHOk7E5jijjkocdDF+zcQD+e2zr/XkGRI8Cvcid47XV/D3gRQ3T7Xq5TaIT6iLRnkqdiqEDvzSfvHrdmQqTfWgtV2f77XFB1fqFVps7eW3LTmsgq2PkdvP9LwsIIf/98LhUnTzRF4Wk8ixQ32SmiSffG7aIRz/w8uQrhl3hlZbNE0jqribNZP7DFG2YKfVErJQsf3QwuJ1CjH5LDaOV6HlrMwthiJ9oO3Fy3FH6D9F0t21Au95Ils3tiHmOppTglIpg60NKJmKjryw4r9Xyao6CGE9nRFzx6r7uCbH5yp5ubgCH80U8a7vT+n7vuoPvlpcYTnx5r4JyDIT4q4OwhY92hQMauNtvG0WhCNSziwkK9e38KZfbdIKPQ2afLyjnzjy7BtwIXGeR6k2KiUuHidOqM3ok9NOoNEM6L7nLuUjJTTOuE/j7mg6sl8NtxXOkuyVD+AGCN5JEaNJCRFx/nRlEASPT79vppsrSipk9OEWsiyceZA6+2QffLYyAoii4NU0hGE3h58xIZx7SIPtj2TNxFDOoCgd5I9lh/PxrOxNu7XymcgrcZ4sRvS02LdPNQOCaaA5V8KG2zAklGTZ2ZSTdb9pmpAoWKGdgXFRkkflW2AOj4exv4Jj+RRrtUyGT8TXVxQG7lLIs5rEkAAAAABQAAyEoUx62dofFnYG8faAAh6Y3e1mSgtcP/zdIe8ctIQUh0OxyMrkUW5dQOkIPHcxn0zPP9Kcx9LnA/R1NATgof/LPXSNu3W1I+81tIpE9zhSzcal+QpofPi8R6qlxLfbKlPwz/GQIqEequA0hYXxnZhve0p4ADGBoI8OpfZQztPBtvFUa5Xn+qXfMVHcg+Zt/g/BGik9HvqIG/zq2Wp+BIuKKJEMOm2WQh/iNrg4LoAejjjvvm11wz5W3fTJg461hYvccPdd7MylUpIeVdXrzWkPxAsTRidozYqzcdxcVgkIGO+AU5RlTBHUANMBky7GdRG2pV6b7z6H3WsZYtCVidbg30d1qGT5jGOO+9KqtMyVT4INwNWcvJyUJQIUgwtiQygmQx7H2FSxochyxhZQWITtGB60eD6DlyQS83K8YqP8XX7PgoJAh7RQfXeAH71Iu00nMggRWXq/CsV8wA5irmilRgVQePiFmVE66SmeTU4op4cGjE+EZ/OwIYzOrSafonpwn5oUMQnV15FFYIU1LHevElxaxrqB5puc1ylzSkrdKFV6iEmJQsU+P0JFVmkg78V1CtKNgzwnMLKJ9EhL2vrk3RZutXXlgVwBXzRoXqpukK1lbjMOHOhI9XasgFyqGJhXB6Wiv3JOxpnIr3lSdh9DWn5RPaAQ4lZuEsUizSiyorxfZmltL0f2sTsjAiJR7Ivp+RnsCP6sPb/MB0Y3bAXlqwsJ03RBYxHLHTXXmnWXHSPua5plFY0olbrOAuO1vMIe9CwzYLCjMtybv11XsDt8vbCT8nUclgcSk8IZbtJQPTtYA/iHpLHYLK5rN1cUcRwHNNDFQOB8HBDG/Yi6O7dBnaqR0Je8rqjjDl/N+nWQf1ByaJT2SJZDHjRWSTl+YX8zFIucbdIHg6HIAC9xVQo4wzs99/L9dF4L3Q/ZWQpqZIlCKAwcJUNZbIlxC8xiswjloi7qdE4KINu3seYG+5lSSM/HtY8Dcvl8Hxx7uQqiImaTdvGTrVtyn8fR7LrTQqfXf6EOkpOTRlhNEjhCa44/NoTx6B9XF0JbWYE4KxFMO/8oHGM8c515nyn5xFq1TZm7Zb79442fpKQ9+c+tknjJBm7C4pfkr3wByZaBOJWyBY5i1fQ5Hq3M3AfPGPI8k9c9y50p5i59dHk2HGQQci5gpa/KREh0K3TsF7dIO5RkD9XfqpUoXCqt5jfZTU18SRr9lfCcGzWhm4FEdXaEI22WicF3QBBoJvV38s7W5jibSFQA3DG625P9/x2L5TPoitwXR3O/vPZz+FkuzqzhczKRjWRLi2qFIAa04w7Fo3o/Qquz5DIqd8j6YldrPi94AKa+M00k7+1chTOjsBWgD+I0vZncAQ8GIlCixlK8FelTkai5KlYaGLGVa5IPqW4+GTEzIMF8dHdPyzcY/2Ex/FdvZ4QETqZbVhCZ2/ms7wnGvl4vLT63CxJPl171mFaQCZNUuP511X+CUwZnVaSvFPmCe9v8hcjT1fge8U8ApPTNC18AZx8ZYjaT4IjPrqMOZhhX9ThpSjZiiiipRPyY4TVGI5Sz9uFWxYb+rgzQUiHMIhXl8dxsmU7Yl3MR0qa1RrIQUUP9UGJ2UeP73aPGABMVPhu70tPx/3dPcc2oZyq0fW48lUadvcifcQImU4eXd9tINRBKETT1pcVfFYlrFFXpv3nbk1bClCglBLrAHa6wFKAAAAAAUAAN9n2siAlcAqbo+hsJD9PMVC9J1QA1IHDfmufAHI92wKy8LbgMon8FY5shwxww4dPmG/CgZvpETlIVjlJYgZv89Qe2wNHe7mCxpcRW3XG7FtVcE4QDkaWAXclbb3K53lcYhFqRxmbpGCYGArI6a/4AxUNDlemoeuVjo1runogbB5Ra0s9HpPrIiyG5l6KZpN74qhrHH25HNoQQUXns1yu1pc5fJDLd9SjJImXNyBX24eDy0SFBSox+bzVXzPjA8nV+io91QWYXk8TaW4o1k6sEKXRtWsUhz860guUxHiGhwm/s9BvKpuNV7Kvi59gwPk7f58gQz6ILzPj5MHe1Y2MaJcKbdu8J0sKlL/T2EDtWwDCI9bZ35t29/lyIItATZ+YbPyBI7nqHuBZUtW9s9qjgv9eVdc0RD2glhHrO0QzNe5K3omKKruwZ2X5Qffl1eQRVaS+AxtnEd8vcRqBazVsQFNmdmKHvtctPBlsXgxKybCvxJIwPiK0pm+NNCOJ79DMvAuO745ZypwAAfnoI61TSbFe9IDnE26vaGOaf7UStLwxd2NbVaJDb3tLHHhGPWB+9dN4FhpidDXXiBnsmdppuqreCfV0oNPwV8NeFTjOUzgg7URDRHJIb65MakCkKPpQlE2vHs+AWRp8RCgJADx3lruUGDvw3mt3OsUKvOB9BwIkSsk281khQwkVo8LnMAQsT62HZEmRacBdDNkesKIVWop0GGh7TKESvzU5qUQ9FrEzOh2FHOlb6ZnJCOP/PrtplhtfDMayZz6BDN/+o5Aki3nznyHmcmi4k+NprdN7R+ijCPusPkvIII6V0V1noGo0aDCKDgGAW9UocbZta5RcyPOn/TPU+4CvbybHmAqsAdVRL3FClSnCwxriwdZvhVb0CfJzJKDvr8cp3ZjiUxUmRDMXwf3D07azYCbdfXknKtBgf4t1JGkj811/Y+iam5EZcNuJhIW2MyKRlscp48NYbrVMBHnKpc7t3qx/W/hDO6138U79lOCzr/OOt2vFBDnSvTo/6w4L2Z2sVgTee6PaewpPWHtVJZ8CTs/DyAKiOwgcliNM/9o+feIDkvR3DGRmqJ+tpBgbUlrPU9IvNuuQ3Dod9AMwR4qSw6DM86Loqg1VZbZ5ty9cYR21G3bqnTZ9HXMNztBa0qokZFByjZdQENsFry6s4rXkD1RUnOCkwBMeYhnBn1LpIdTLyx3eQyPnfDK7s5IhbSthUsBmAWi5ZmEBX9uFd10qJjts0Fvv0kf9R/sL8F18w6BF0DzOwHbgWhlpcLrMwPVKcQ5vCA0XB45f0e+QpnTJ4sFvIdAKxfKZRg8XiN19IIoOiOQpAfOQy42sYWhNhvoJoyEgaEmJTk88/CgFLbxmJmfs83q9n7b91X2vM2MgHfA7tvwe6+TEJZFf08L5eUe44xWOoUDWPF6c/eItPbEMLFkIa2RLJR9udhJ64XfAuMrufY0ZrxfuunAF+srD5S+abdv3djlsJOnA0OIsvZmjP87TZlbAz6S88qsEuujfzpSjyZF4BdTalWFb9K8Ka1sUmQeIAPqZ+HwlgftqIydoR8FP0wzDPJkhsPC1glSdlVDJJ+mMzkLzt+Err8I0azL8vQFg2XHuFtvRUMr1lvX+21k+OkQ41j0W4RJAXKbQV56kuN2LDLhv44WkQ+/R0+VlRYpye8fR5QHfuFm3I1yG2P5f3WNLwPQCAAAAAgFAAC01s+n7TvDiAZ8nLA3ykpnN2TETeBa7hrgkWeyWWIgx3IMWlI3KSIDoE9Mjxa0JX9jN2EED5XiquBH4i2BXD9glnrZMeSMk0SKIb2U4Q0t2MpIsrli5fofhsRYn9iwQSoYZdwkR0XETDODtQ40p5foeTzh0jxVFwMU7JRWKHWsivjrQ98+fYQ9vhIrF5PMS+M2WuP0hG8U4U4mo7K1HWhYN4pXn1KV+GhMG4vUlm6G4yFn3BVA0ZfZt2Aei4EY45/GXkIzR5/xNg1KoGfwvRsYQAcRlCZmF6t7U1D0yMU1IqfK+nCKe7bo8g4OfUa9NJ+ZIcolyOUZb2c+ctFuGqeQWgsNdVv/6VoPD3F5rqgo3pnjpAEVRHrY33EAttpWNiuu9XqRrcKgfTb+HJD4MrIvgBULOhlHHmC41e77OoAdUEjW5gHm+lzod8AV1u8xhmfAH7IctMgoUOq/xRa0PjlEuNUrnbDzP+OEOTDR1rpEVeYRG8RIiQ5MoQeobFpyKDQqeDsQl5r/rRosiiY1bdpqZUJA0ghMFRatkysZaU+DPQ2hFQvBuFxppY2GZ5QlOKJD7XfUQ9l6dO6/YcDQkenVhTxFfi9ZiJMs+x+8GTN+hQKWnwGx77xzu5YrCq1JgMLW1tV4DD89FdZtq64IdryeZB49XtV0zUc/1wPGispL9+Z5OfEr7sHbDzWwl7d8bwTr55dQw/XEddGObGJQTPgPsh3AncdF5jPmH2DQ7Fhy6uicJkOsDs88l3rwJGG+puzRXmDDSCQAhuksg+rD0ADCXYkusOoKalQzKbDp1ztH0kXIMkQZvHVxSh0Ru0/9VvFciFBevEa7n8Vu+3F1xAZTu2ziCzruyqBMLsQDgdggIvbYGOqWbwNsdWiwTzoTMo00HE+uSrY+fImzJq4Xt5rPSYSRJv2Io3mFJt2N84vlQppWbrBy+ObW4+tuJP+Cv/UIBgKpTJiAbe5HBAW1PUnbDAjMKmCG1RF8bxqnIAjk2Dv0tLe6XEVWSXNJ1KudF9uI3JbEI3unCQnmXtJkgBcyHbK+XyT3M1/cHgsspMaOIHEl7z49Aipb7kBX5mXAvJiptToB/jrcdzjK/YWDXFmMYzwKNxBoB1igl5H/HTd+VMc3S/V8ppctuC6JAOj2Z+IUko52w+CZtaeLXEF3gbLSkxeveF5k+pZFzbvgCuwkPqgDTB8tztRVpmZrA51Andke2wqKFcEa7VN8gOGpJ9r/FLs2FbSnCDcdhRLFAe3/L66kGK4DtNWJ8D4GS57SnwEqwwsPePGBDbVXkAKa9Qfc6mhAQY+QpRwExvd++l0Hg9NNLlzmNPs1IPZUOl03yE3mgVjgdKRsJdAeTHoBD6moA0SW/4qpwneL22yo/Wm8i7l+Ui+0nAcUyo6zc3g3W+wK06wbS8M3QVbrE+a9xjBZk8mC+YN57AMCXck72Nnqa7y9r7EE56qKZXxdF25fD0AXZ7zODtXBgCpzVvKEuXcglvYHlmYh5GesqWG4n46L8uNYtius45/g880OCL78Q1LbBiwPIulnnxB36W6DE8MOWC+nB2dzxGj05eXUwhWfK/wKTJRy32Dw6I2f+eD6R1B3mDrrVsjSqp8ROqixx0dOKXnFqblKymn1xSTy6Ixq7zrKnyjsz6lZFs+Zb+x40FiDMrxcwG60zfJBOr95xeAjr7ZnPSoaDMrQSJ6ptkVwWsadBK3T/NIdUQAAAAgFAADoDsvaG9HndjbNGIQHGY0POTprQdP7hTcCI0b1Pr3716DIeebumG8wvG9o48UN1zon62RnH8HoyGdJ4rL6KSaJFJE1hHC3CIzOhWXRLiqIHtBbu14AS1yQvw6++jZCajsAL4UAtfS6QsS9XH7Pu2QGdVqmOwEhS774nVA9eGnU8shTNMZ6g8TPCXelq4cueRjCDX07kJ8OdWjFIgZ1LdjKT70/arx2f4H29FO3o6ARuabDBtIlB6TGWn50B/E1ZnkhSLah3RjrxNWnkTyKvot9/rQj5zgjRRCd0tLxXdKQShFNN40jL0EdF/966c5a2mQNKnR3to039v2CaLWmao9sBjXq03ROP//YbFzfDoXKccfVContiLlUPkoOP6QDTmEKVDHYD+6G671q5bUt/nccJ2jYIo5apJSwqfF+dPWg2eBZ1R0M8BZJ0hKNZ64QsY85oO4QKQR/jEblhjjFueEcS95Ehz7TuFUKWNuA3N5zIVleLCPZfxNEcViuQeeb1NWSDcLEvp20c+L6nkpP2ER/jJGFH8k8pcvYDfdi3+QojDKXRtGjYH9Oj41IMbwb6xA7QVB7srYoyWL/iyHQlPvT30olHTVzHo7N0nZPK+8SQI7/iTKV+/+zLMyOE7RVLt8Wy9QWdrFdmTVi+1E3vSWBi7KvMO/Z5PoTZ6GPWmMQKEBFdHZkaq6WplYYNCreEAX6pwrXUz/BKI7ly3sZ/ctDSSoc1/C1h275RN+aej6EbqR/syiJPyvvg6p21IxrLFJ8NSrcY6OafANo0PlCWrBebbBKInMbRmsMkpcg/acYhLxJON8RByuW/+r37RW+ee7IwrCZSBbytKEGD0fhXPuh2Vdh3SKf0zcs6Can8MC2ULiiXPvD8ucQ1hpt+pazsoDE1TTcaQ8Mu4Ayw5x9k7boxt7hr6EhNW7+uiJ3eVBC8MVsOZlUTVi6vyXL8H/gQE5aV3pwV1gabwa4r5ozpM2mTtWaDcUp3xpm5cDVef0gmHNb9mftzBr3pa6uGag1ePdPXJWipZ94SkFV2RKBNmMUTmBscF+XU6L8+Pf3T6niz/pCIFWuGRZMO9Hfhg23Z/2vlr4wYjUvmZYoZVTXSlvkPoc4gkUXsqquSaIfgI7k0NCEkoqdGELRucfkeguTnubr7PHAUMPgEa/93Umobd6FfahHSGrIFmuGsOGh1fyohj7Asvz+RJsCK7gh2WDv/7Yp4g32X3cHsiDxcbEveKp3mCNM8Dhh+XUwvVR4AcxVzRGKKO3ebNWV4dzGUs9pmUK2z2sKs3BYhnn2wEMSrZGp0AKWB+N8svGZazzfjny9gkA+EjzXq0q3/dqVag31HzP/GMzB5HZGuLMIZ6XBiQvUoey+CMtHKKImBuVa4JehwK/4uSi5wFOqLszQJFm6IEZFvaIQhOwHA0JO3yAFQ3L2vzSXFdJzPC8EC3OKsWtuSF976/bSl0MH2BS+U3fQ7WGLcP8JlBKiJk2vyiTYY28ZOlQXVSJ5c9HMmj6H1l6Xh6lUsdufJZEBiREBhQpshc2sFg6u4yiuMDRhls7EBo09sAg+fAFzzwE31fVVFY6VH7zf3AVEa/E5MOrG8Iprt9eexxB/d9H6OrcBtVmjdENFsBPul5K7rmczM0g6q8AtHtx2casTYsVQVyGbELaoDWQbrvGq7hAbRImB3XmYVgCJPp//yYbk33t4mm7pLxBl8M85j0PzKrSwUgAAAAAFAAALPeThbriCQCX07LWFfX3G6rCgQl7BUK1+3c1VlpbJcSQ0qcXpQmJ/2giFsnbE1nzrgkI3Uk7a35IhqzdsqTtMOg4JoyYSKXgI255ezZiv32r+ZLpca5MsuRDFGvXn8FB0pNWCNmrf7ME+okOdJeaLtQg/jD7Hb6z63Gvptl56oESb/P9zTgCuJKnbUafKHuCTXZxlpOM9S+EfJ7wSLWaDKoXfcyywHWWOWEW6rWTjM8WC5s+SrV9ATJwcNd5g5Xs8Z6WvS0sBIA9qqhlc8UsCYTDC9Bi7qoiqx6+A9iBhvL1cJDLYK/FmJigrSR5M7HxxCCugxB+/YpWMFc89BnaEeuhd4hkf8/QlZ8yzExlAzI3Bafo1S17+YI4vKdEXL1uvojPasrpNlmI2nN+EqVHd2EhUoIRQOELoqI02A7CuQv9anULClTnZtO+fLt4RqQSw1D5W/mZf113giT+xmF6ESJWtodktMThZNQXXGV5se3LqkQlzgsCy5r10SB1Q8D6Umaw1z7pkVUUGfkFYtev20OLD8qIDKAJ14GnlGIQHpKKcoHngVB0HG7/hz8sRzbFf6HVQWhdnmZLW1tvzCQlLC76Zn3atIT2qUFLYwM2A9bizk7BhEgNLS+/dll+IG007mgbjLd5HqDR0ricwQe1oitRL9itbliRABENtvKNwe66ZDrPBKebYiWg6jfECFrqKVxzEMMs7aNfeqnnuvw9J4QaSH8/QkGL5cVsQuEA33UX+CVC/VdqmGGphAcxQljyknvQWqcqTFydNRvrh7xfMqUa8jED76JLea4Z2mU9bBgXuyp0Xiq+Gtq8pRaSw3G06VFvwcABOX6MYyxpfmm7nEzGrEd5YL76QoRHTNaWWoKnwgagp1wobpluk3LrZAlIv8plXtF1oMBwDSgANnduVkbeyt1ybCNAzfG0rB6K6T8wrPEMFgr2LRiKrS9Tw0P9721xQGYbafAud6gmqazy+Uirx//l9pLp4QhU7+DmFcXumLR5/J90BwjF8xW1FSLqWdYYXeBqRhU2U+6LR2SjYkImuD7XVwDHP5a/WopgPeHhOPNZiIlwb00LBcrSxPUSAMyB8bsRznfOSRQBZEquofqDrC6nMuig/QuewkJzK7zfoCazfX5gp0PDULVmQpcb7OZJ4rQrUvCS8UN/6HGNxLbacu91rgaHwH7BligyfDy504mZixfCW7QAMRWvXbo/+YatOVACh3xy6wHBjTFbzIiL2h5TsXnwtwkI8QFYY0fv+90MHOXfgPHrpCmEEHeeklIXdk0D/ep8phqp9LmUHoJOMTlU1jWarqt/2gI3MwG187r9c+L05P7y/RiC/QZ6j47AJyJw0t3S6MLMu9E+Uc64RHXCdZefA2tVwKtTRdKGQv2aKsH68tItE80us17tsuGGhcbY8RJVoAUjSc+RSV4L1+05igbkOICmKego4YxiwVHCmq+5DLajlh/CVo53xgnbpieVIVbeYDHqUt2gX6UH208JN1uAgnp9uh+UUpUkhAED97xE2ZRPBFdZF/MSI/zLwAM6Ulik06GrIyn5Aq1faOLCyGVIPzQICL/heHQdbRUUSZpLwzc+Z084Z46B0reOc3TLWpkj9WACw+OVzyEzHJkA4E5X4E2jwbkYfLFqTYNrEcQyvDFe6A8HOqjGwP6feqXzzYi/KjkXQB4F/chEptq9fF7TtDSi4x2HtdVMAAAAABQAA9ttM4zQtlf2CSFNZptC1VLhyBvh1u8gzb9j+L3O/HoM4NOKXcTICPyHhvWG/Lt0tlZu+8dEH3z0GWiiKDzGTkL7ZnZQYnVOLnPVOgmklDKR0AesmBNKI7JrZIg0futSe34VqwPMdfD6byS0PXVIxoqNcHCHvT0maeS29bae2M3mzmUkPQYemQTGszFphHwM6JRNlLytWFS5/Iy8ZC+wLDaPzXU/mOtJxlc/F9PLbriidBUzEX3S445teypdZ5oRSUHC3hblMuSaSTVd/KoN+HHgosL8Qd0jCylCW6tsCLuqm0xehrI4qiyL0wJ/SPHjDNDpwoJ7Z1AjIkkQvLEiYKelRyT1B/qlkMijpcuqEfSE6Bq92fH4AizoeSKsai6vD9xD5C1eEs3gV8sNMcS6E86O7L6IviDU3UpLlAJYRsDkHQAgC0rIrtNk+W59NUdRltkA0UDajvWBXaMfnSNQNIaExqdpkafhdAa5X7Q/5vZazZRp55N8p23qAjw987cWSjGylFn/JtCoTdK3UiNPffH37ntJwplIby4XRUaWItKmoDWJR1KQL6rpqfn/17PhQ5KbizL0N7TPM1/LTR3Oog3MdR+boS/frawgzgKJFzColn3sLaGBVL24tgInl9IMJnq6XlGjdF+KUYEgSvKjJ6JggwpRXa46zumFkUJdQK9PIMZYq/HCDU0Q5bkfKSFruz/IwIOjdS/ze6TnZLIC+8wgBa5rLsTG25+/f7zXyyXef2paUDci59Ed6j1JNmQU7vqqUu2xVrVkRqUND0kmknNkeSRLe4/YAAINxjY6RMmakoKnsQ2xud+ZlP00Kc2XafIp0WpevjkIaShRT3pDK2f+PNGpBLBdiAZwqy5H/ytoeoBzzHhZTnGiDYEGTg6RBzwcHvmUpuHuZc0tLuiDXXvnpWtaoZ6OVOrR0ubiQiLwKmNzk6yYMDVKXZNaB4SFqp9eKaH262QO4IeDaGC4oQNcAw4TVazPYK994stpVYNe1UQuXQbeKJBL7P308YzdfM3zWKINlUJf5hYJuA6w1/BX8idM3LyAnA3ZY/1TS3GdUoq4XbKfbN1AyWP0JvEz3ZnhD9nwM81OJrvkiSDHqg2arxaWz6KPiXvnFr+d+4FLc43rLWIe2PZno4pQ6FTafrOrGvy2M5izv15PzsqO96EFJ8wjlyNLN5uBiLFKJkaMhTBpb1fXC/XFA2yc91RrkfMVQ4dJLBxVdJbLfgfQuxgTxuJCdtYaYUV5Q29zByALRltNVcfw3NAIao+1mESLYeycC+7jylfZlEN6X5y20rtRA3j3lgcwhoNNna2K8MPmDNLF905hL8pUuxB7EjMoH65B37kAzwI8VVInI5FShuc/yG17GNcFZwQXX031IRBYZrJ+fU7X/Oc+JFmTbIHV+8F48+//wNKx/nasZgdloN0dpYPu9YuxulJmsrCZ8PfQymA8vZJbFwQGJ//YSTeYHc+PTZ7YOgtPGXtpmlU5GS4GOqQ7M4Y7ATobSL5cwRy1dbFlfTwsKo7qWPO9KskojLWMVRqhSGyF8XYaxM2hhGvaUwBxT2soObMCeJqMUjeq5BrShoqFlyYg7DBLPYiNVCOknV6K9LAPTqKMZZUJoUA2TQebHGhdVgq7D66I9ZnAI1jyIKzclvfoS0KyCIrgiUPpIcZxpvjruG05bKLizuGjBUBpVoovQaSJ+Dy0mdM8AAAAA');
