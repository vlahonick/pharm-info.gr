<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-31 23:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-31 23:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 23:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL u was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-12-31 23:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL u was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 23:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-31 23:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 23:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL use was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-12-31 23:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL use was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 23:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-31 23:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 23:44:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /var/www/PharmInfo/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-12-31 23:44:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /var/www/PharmInfo/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/PharmI...', 411, Array)
#1 /var/www/PharmInfo/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /var/www/PharmInfo/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('auth')
#3 /var/www/PharmInfo/modules/auth/classes/kohana/auth.php(26): Kohana_Config->load('auth')
#4 /var/www/PharmInfo/application/classes/controller/user.php(7): Kohana_Auth::instance()
#5 [internal function]: Controller_User->action_index()
#6 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-31 23:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-31 23:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 23:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-31 23:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}