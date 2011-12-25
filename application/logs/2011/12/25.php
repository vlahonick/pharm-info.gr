<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-25 08:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-12-25 08:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-25 17:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-12-25 17:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-25 17:31:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:31:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:35:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:35:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:35:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:35:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:35:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:35:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:35:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:35:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:35:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:35:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:36:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/home.php [ 8 ]
2011-12-25 17:36:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 17:36:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/home.php [ 7 ]
2011-12-25 17:36:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/home.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 17:37:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 17:37:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:37:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: home ~ APPPATH/views/template.php [ 17 ]
2011-12-25 17:37:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: home ~ APPPATH/views/template.php [ 17 ]
--
#0 /var/www/PharmInfo/application/views/template.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 17, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 17:39:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/controller/home.php [ 8 ]
2011-12-25 17:39:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/controller/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 17:39:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/controller/home.php [ 9 ]
2011-12-25 17:39:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 17:39:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/home.php [ 19 ]
2011-12-25 17:39:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/home.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 17:41:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: home ~ APPPATH/views/template.php [ 17 ]
2011-12-25 17:41:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: home ~ APPPATH/views/template.php [ 17 ]
--
#0 /var/www/PharmInfo/application/views/template.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 17, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:27:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:27:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:28:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:28:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:28:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:28:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:28:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:28:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:28:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:28:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:28:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:28:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:29:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2011-12-25 18:29:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-25 18:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo_small.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo_small.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo_small.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo_small.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 18:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PharmInfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-12-25 18:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PharmInfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-25 18:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 18:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL faq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-12-25 19:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL faq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-25 19:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:06:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
2011-12-25 19:06:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
--
#0 /var/www/application/views/contact.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-25 19:06:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
2011-12-25 19:06:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
--
#0 /var/www/application/views/contact.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-25 19:16:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
2011-12-25 19:16:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
--
#0 /var/www/application/views/contact.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-25 19:17:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
2011-12-25 19:17:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/contact.php [ 1 ]
--
#0 /var/www/application/views/contact.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/system/classes/kohana/view.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#10 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-25 19:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:25:12 --- ERROR: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/controller/contact.php [ 26 ]
2011-12-25 19:25:12 --- STRACE: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/controller/contact.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 19:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:30:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ]
2011-12-25 19:30:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 19:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:31:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ]
2011-12-25 19:31:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 19:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:48:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/contact.php [ 27 ]
2011-12-25 19:48:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/contact.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 19:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:52:42 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
2011-12-25 19:52:42 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
--
#0 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /var/www/modules/email/classes/email.php(134): Swift_Mime_SimpleMessage->setFrom('')
#6 /var/www/application/classes/controller/contact.php(36): Email::send(Array, '', '', '<br/><hr/><br/>...', true)
#7 [internal function]: Controller_Contact->action_send()
#8 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contact))
#9 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-25 19:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:54:30 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
2011-12-25 19:54:30 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
--
#0 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /var/www/modules/email/classes/email.php(134): Swift_Mime_SimpleMessage->setFrom('')
#6 /var/www/application/classes/controller/contact.php(36): Email::send(Array, '', '', '<br/><hr/><br/>...', true)
#7 [internal function]: Controller_Contact->action_send()
#8 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contact))
#9 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-25 19:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:55:37 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
2011-12-25 19:55:37 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
--
#0 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /var/www/modules/email/classes/email.php(134): Swift_Mime_SimpleMessage->setFrom('')
#6 /var/www/application/classes/controller/contact.php(36): Email::send('vlahonick@gmail...', '', '', '<br/><hr/><br/>...', true)
#7 [internal function]: Controller_Contact->action_send()
#8 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contact))
#9 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-25 19:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:55:44 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
2011-12-25 19:55:44 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
--
#0 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /var/www/modules/email/classes/email.php(134): Swift_Mime_SimpleMessage->setFrom('')
#6 /var/www/application/classes/controller/contact.php(36): Email::send('vlahonick@gmail...', '', '', '<br/><hr/><br/>...', true)
#7 [internal function]: Controller_Contact->action_send()
#8 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contact))
#9 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-25 19:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 19:57:32 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
2011-12-25 19:57:32 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ]
--
#0 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /var/www/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /var/www/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 /var/www/modules/email/classes/email.php(134): Swift_Mime_SimpleMessage->setFrom('')
#6 /var/www/application/classes/controller/contact.php(36): Email::send('vlahonick@gmail...', '', '', '<br/><hr/><br/>...', true)
#7 [internal function]: Controller_Contact->action_send()
#8 /var/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contact))
#9 /var/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-25 19:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 19:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:22:46 --- ERROR: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH/classes/model/html.php [ 9 ]
2011-12-25 20:22:46 --- STRACE: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH/classes/model/html.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-25 20:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a-z.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a-z.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/PharmInfo.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-25 20:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-25 20:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/index.php(109): Kohana_Request->execute()
#1 {main}