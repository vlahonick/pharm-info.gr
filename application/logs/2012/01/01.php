<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-01 00:00:45 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/kohana/database/pdo.php [ 241 ]
2012-01-01 00:00:45 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/kohana/database/pdo.php [ 241 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_PDO->list_columns('users')
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#2 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#3 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#5 /var/www/PharmInfo/application/classes/controller/user.php(6): Kohana_ORM::factory('user')
#6 [internal function]: Controller_User->action_index()
#7 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-01 00:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:40:00 --- ERROR: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'pharminfo'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/pdo.php [ 59 ]
2012-01-01 00:40:00 --- STRACE: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'pharminfo'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/pdo.php [ 59 ]
--
#0 /var/www/PharmInfo/modules/database/classes/kohana/database/pdo.php(248): Kohana_Database_PDO->connect()
#1 /var/www/PharmInfo/modules/database/classes/kohana/database.php(473): Kohana_Database_PDO->escape('admin@example.c...')
#2 /var/www/PharmInfo/modules/database/classes/kohana/database/query/builder/insert.php(140): Kohana_Database->quote('admin@example.c...')
#3 /var/www/PharmInfo/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /var/www/PharmInfo/application/classes/controller/user.php(13): Kohana_ORM->save()
#7 [internal function]: Controller_User->action_index()
#8 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 00:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:40:54 --- ERROR: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'pharminfo'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/pdo.php [ 59 ]
2012-01-01 00:40:54 --- STRACE: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'pharminfo'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/pdo.php [ 59 ]
--
#0 /var/www/PharmInfo/modules/database/classes/kohana/database/pdo.php(248): Kohana_Database_PDO->connect()
#1 /var/www/PharmInfo/modules/database/classes/kohana/database.php(473): Kohana_Database_PDO->escape('admin@example.c...')
#2 /var/www/PharmInfo/modules/database/classes/kohana/database/query/builder/insert.php(140): Kohana_Database->quote('admin@example.c...')
#3 /var/www/PharmInfo/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /var/www/PharmInfo/application/classes/controller/user.php(13): Kohana_ORM->save()
#7 [internal function]: Controller_User->action_index()
#8 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 00:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:40:56 --- ERROR: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'pharminfo'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/pdo.php [ 59 ]
2012-01-01 00:40:56 --- STRACE: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'pharminfo'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/pdo.php [ 59 ]
--
#0 /var/www/PharmInfo/modules/database/classes/kohana/database/pdo.php(248): Kohana_Database_PDO->connect()
#1 /var/www/PharmInfo/modules/database/classes/kohana/database.php(473): Kohana_Database_PDO->escape('admin@example.c...')
#2 /var/www/PharmInfo/modules/database/classes/kohana/database/query/builder/insert.php(140): Kohana_Database->quote('admin@example.c...')
#3 /var/www/PharmInfo/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /var/www/PharmInfo/application/classes/controller/user.php(13): Kohana_ORM->save()
#7 [internal function]: Controller_User->action_index()
#8 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 00:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:44:17 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/kohana/database/pdo.php [ 241 ]
2012-01-01 00:44:17 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/kohana/database/pdo.php [ 241 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_PDO->list_columns('roles')
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#2 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#3 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#5 /var/www/PharmInfo/application/classes/controller/user.php(16): Kohana_ORM::factory('role')
#6 [internal function]: Controller_User->action_index()
#7 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-01 00:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:51:28 --- ERROR: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'admin' for key 'uniq_username' [ INSERT INTO users (email, username, password) VALUES ('admin@example.com', 'admin', 'admin') ] ~ MODPATH/database/classes/kohana/database/pdo.php [ 157 ]
2012-01-01 00:51:28 --- STRACE: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'admin' for key 'uniq_username' [ INSERT INTO users (email, username, password) VALUES ('admin@example.com', 'admin', 'admin') ] ~ MODPATH/database/classes/kohana/database/pdo.php [ 157 ]
--
#0 /var/www/PharmInfo/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO use...', false, Array)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/PharmInfo/application/classes/controller/user.php(13): Kohana_ORM->save()
#4 [internal function]: Controller_User->action_index()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-01 00:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:54:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/kohana/auth/orm.php [ 76 ]
2012-01-01 00:54:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/kohana/auth/orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 00:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:55:15 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/kohana/database/pdo.php [ 241 ]
2012-01-01 00:55:15 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/kohana/database/pdo.php [ 241 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_PDO->list_columns('roles')
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#2 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#3 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#4 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /var/www/PharmInfo/modules/orm/classes/kohana/auth/orm.php(86): Kohana_ORM::factory('role', Array)
#6 /var/www/PharmInfo/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('admin', 'admin', false)
#7 /var/www/PharmInfo/application/classes/controller/user.php(19): Kohana_Auth->login('admin', 'admin')
#8 [internal function]: Controller_User->action_login()
#9 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#10 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-01 00:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 00:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 00:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:09:47 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Auth ~ APPPATH/classes/controller/user.php [ 6 ]
2012-01-01 01:09:47 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Auth ~ APPPATH/classes/controller/user.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 01:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:10:10 --- ERROR: ErrorException [ 8 ]: Undefined index: session_type ~ MODPATH/auth/classes/kohana/auth.php [ 57 ]
2012-01-01 01:10:10 --- STRACE: ErrorException [ 8 ]: Undefined index: session_type ~ MODPATH/auth/classes/kohana/auth.php [ 57 ]
--
#0 /var/www/PharmInfo/modules/auth/classes/kohana/auth.php(57): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/PharmI...', 57, Array)
#1 /var/www/PharmInfo/application/classes/controller/user.php(6): Kohana_Auth->__construct()
#2 [internal function]: Controller_User->action_index()
#3 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-01 01:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:11:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::hash() ~ APPPATH/classes/controller/user.php [ 6 ]
2012-01-01 01:11:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::hash() ~ APPPATH/classes/controller/user.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 01:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:13:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:13:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL udashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL udashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usdashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usdashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userdashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userdashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user.dashboard ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user.dashboard ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userdashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userdashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:19:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2012-01-01 01:19:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-01 01:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:20:36 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-01 01:20:36 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/PharmInfo/application/classes/controller/user.php(41): Kohana_ORM->__get('name')
#1 [internal function]: Controller_User->action_dashboard()
#2 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-01 01:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 01:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 01:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 01:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 01:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/add/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 02:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/add/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/add/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 02:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/add/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/add/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 02:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/add/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-01 02:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/lo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/lo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/logi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/logi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/loginm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/loginm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/l was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/l was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/lo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/lo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/logi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-01 02:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/logi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-01 02:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:31:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::dropdown() ~ APPPATH/views/admin/user.php [ 13 ]
2012-01-01 02:31:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::dropdown() ~ APPPATH/views/admin/user.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 02:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:39:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get_roles() ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-01-01 02:39:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get_roles() ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 02:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:39:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get_roles() ~ APPPATH/classes/controller/admin.php [ 22 ]
2012-01-01 02:39:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get_roles() ~ APPPATH/classes/controller/admin.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 02:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:43:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::fetchAll() ~ APPPATH/classes/model/role.php [ 13 ]
2012-01-01 02:43:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::fetchAll() ~ APPPATH/classes/model/role.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 02:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:43:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::fetchAll() ~ APPPATH/classes/model/role.php [ 13 ]
2012-01-01 02:43:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::fetchAll() ~ APPPATH/classes/model/role.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 02:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:45:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH/views/admin/user.php [ 13 ]
2012-01-01 02:45:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH/views/admin/user.php [ 13 ]
--
#0 /var/www/PharmInfo/application/views/admin/user.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 13, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/PharmInfo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/PharmInfo/application/classes/controller/admin.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->action_add()
#7 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-01 02:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:45:44 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, object given, called in /var/www/PharmInfo/application/views/admin/user.php on line 13 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
2012-01-01 02:45:44 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, object given, called in /var/www/PharmInfo/application/views/admin/user.php on line 13 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
--
#0 /var/www/PharmInfo/system/classes/kohana/form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/PharmI...', 252, Array)
#1 /var/www/PharmInfo/application/views/admin/user.php(13): Kohana_Form::select('roles', Object(Model_Role), Array, Array)
#2 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#3 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#4 /var/www/PharmInfo/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/PharmInfo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#6 /var/www/PharmInfo/application/classes/controller/admin.php(30): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Admin->action_add()
#8 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-01 02:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 02:57:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::select_list() ~ APPPATH/classes/controller/admin.php [ 24 ]
2012-01-01 02:57:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::select_list() ~ APPPATH/classes/controller/admin.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-01 02:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 02:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:07:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-01 03:07:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/PharmInfo/application/classes/controller/admin.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_Admin->action_add()
#4 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-01 03:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:12:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH/classes/controller/admin.php [ 15 ]
2012-01-01 03:12:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH/classes/controller/admin.php [ 15 ]
--
#0 /var/www/PharmInfo/application/classes/controller/admin.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 15, Array)
#1 [internal function]: Controller_Admin->action_add()
#2 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-01 03:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:12:44 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/admin.php [ 25 ]
2012-01-01 03:12:44 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/admin.php [ 25 ]
--
#0 /var/www/PharmInfo/application/classes/controller/admin.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/PharmI...', 25, Array)
#1 [internal function]: Controller_Admin->action_add()
#2 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-01 03:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:13:22 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-01 03:13:22 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/PharmInfo/application/classes/controller/admin.php(23): Kohana_ORM->save()
#3 [internal function]: Controller_Admin->action_add()
#4 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-01 03:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:14:02 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-01 03:14:02 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/PharmInfo/application/classes/controller/admin.php(23): Kohana_ORM->save()
#3 [internal function]: Controller_Admin->action_add()
#4 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-01 03:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:15:06 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/admin.php [ 25 ]
2012-01-01 03:15:06 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/admin.php [ 25 ]
--
#0 /var/www/PharmInfo/application/classes/controller/admin.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/PharmI...', 25, Array)
#1 [internal function]: Controller_Admin->action_add()
#2 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-01 03:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:17:11 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-01 03:17:11 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/PharmInfo/application/classes/controller/admin.php(23): Kohana_ORM->save()
#3 [internal function]: Controller_Admin->action_add()
#4 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-01 03:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:17:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/admin.php [ 25 ]
2012-01-01 03:17:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/admin.php [ 25 ]
--
#0 /var/www/PharmInfo/application/classes/controller/admin.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/PharmI...', 25, Array)
#1 [internal function]: Controller_Admin->action_add()
#2 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-01 03:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:27:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-01 03:27:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/PharmInfo/application/classes/controller/admin.php(23): Kohana_ORM->save()
#3 [internal function]: Controller_Admin->action_add()
#4 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-01 03:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:28:17 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-01 03:28:17 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /var/www/PharmInfo/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /var/www/PharmInfo/application/classes/controller/admin.php(23): Kohana_ORM->save()
#3 [internal function]: Controller_Admin->action_add()
#4 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-01 03:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:35:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
2012-01-01 03:35:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template.php [ 5 ]
--
#0 /var/www/PharmInfo/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 5, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-01 03:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:36:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 38 ]
2012-01-01 03:36:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 38 ]
--
#0 /var/www/PharmInfo/application/views/template.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 38, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-01 03:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:36:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 38 ]
2012-01-01 03:36:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 38 ]
--
#0 /var/www/PharmInfo/application/views/template.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 38, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-01 03:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:36:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 38 ]
2012-01-01 03:36:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 38 ]
--
#0 /var/www/PharmInfo/application/views/template.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/PharmI...', 38, Array)
#1 /var/www/PharmInfo/system/classes/kohana/view.php(61): include('/var/www/PharmI...')
#2 /var/www/PharmInfo/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/PharmI...', Array)
#3 /var/www/PharmInfo/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/PharmInfo/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/PharmInfo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/PharmInfo/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-01 03:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/ui-bg_highlight-hard_100_f5f3e5_1x100.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/add/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/add/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-01 03:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-01 03:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/PharmInfo/index.php(109): Kohana_Request->execute()
#1 {main}