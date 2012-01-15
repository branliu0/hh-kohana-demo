<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-15 10:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-15 10:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 11:24:47 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-15 11:24:47 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-15 11:24:55 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-15 11:24:55 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-15 11:25:35 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/blog.php [ 7 ]
2012-01-15 11:25:35 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/blog.php [ 7 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/blog.php(7): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/brandonkl...', 7, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 11:26:07 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/blog.php [ 7 ]
2012-01-15 11:26:07 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/blog.php [ 7 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/blog.php(7): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/brandonkl...', 7, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 11:42:53 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'brandonkliu'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-15 11:42:53 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'brandonkliu'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM k...', false, Array)
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/model/post.php(6): Kohana_Database_Query->execute()
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/blog.php(6): Model_Post->get_all_posts()
#4 [internal function]: Controller_Blog->action_index()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 14:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:23:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/new.php [ 1 ]
2012-01-15 14:23:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/new.php [ 1 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/blog/new.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/brandonkl...', 1, Array)
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/template.php(2): Kohana_View->__toString()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-15 14:23:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/blog/new.php [ 15 ]
2012-01-15 14:23:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/blog/new.php [ 15 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/blog/new.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/brandonkl...', 15, Array)
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/template.php(2): Kohana_View->__toString()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-15 14:31:32 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/controller/blog.php [ 13 ]
2012-01-15 14:31:32 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/controller/blog.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 14:32:01 --- ERROR: Database_Exception [ 1146 ]: Table 'demo.posts' doesn't exist [ SHOW FULL COLUMNS FROM `posts` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-15 14:32:01 --- STRACE: Database_Exception [ 1146 ]: Table 'demo.posts' doesn't exist [ SHOW FULL COLUMNS FROM `posts` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('posts')
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/blog.php(13): Kohana_ORM::factory('post')
#7 [internal function]: Controller_Blog->action_new()
#8 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#9 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-15 14:32:47 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/classes/controller/blog.php [ 14 ]
2012-01-15 14:32:47 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/classes/controller/blog.php [ 14 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/blog.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/home/brandonkl...', 14, Array)
#1 [internal function]: Controller_Blog->action_new()
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 14:33:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/new.php [ 1 ]
2012-01-15 14:33:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/new.php [ 1 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/blog/new.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/brandonkl...', 1, Array)
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/template.php(2): Kohana_View->__toString()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-15 14:34:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/blog/new.php [ 15 ]
2012-01-15 14:34:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/blog/new.php [ 15 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/blog/new.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/brandonkl...', 15, Array)
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/template.php(2): Kohana_View->__toString()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-15 14:34:51 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Post as array ~ APPPATH/views/blog/new.php [ 15 ]
2012-01-15 14:34:51 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Post as array ~ APPPATH/views/blog/new.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 14:35:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/blog/new.php [ 15 ]
2012-01-15 14:35:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/blog/new.php [ 15 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/blog/new.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/brandonkl...', 15, Array)
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/views/template.php(2): Kohana_View->__toString()
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(61): include('/home/brandonkl...')
#6 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/brandonkl...', Array)
#7 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-15 14:36:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/controller/blog.php [ 18 ]
2012-01-15 14:36:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/controller/blog.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 14:37:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::get_all_posts() ~ APPPATH/classes/controller/blog.php [ 6 ]
2012-01-15 14:37:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::get_all_posts() ~ APPPATH/classes/controller/blog.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 14:41:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH/views/blog/index.php [ 4 ]
2012-01-15 14:41:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH/views/blog/index.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 14:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:45:07 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Welcome::action_echo() ~ APPPATH/classes/controller/welcome.php [ 10 ]
2012-01-15 14:45:07 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Welcome::action_echo() ~ APPPATH/classes/controller/welcome.php [ 10 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/welcome.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/brandonkl...', 10, Array)
#1 [internal function]: Controller_Welcome->action_echo()
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 14:48:32 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Welcome::action_echo() ~ APPPATH/classes/controller/welcome.php [ 10 ]
2012-01-15 14:48:32 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Welcome::action_echo() ~ APPPATH/classes/controller/welcome.php [ 10 ]
--
#0 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/application/classes/controller/welcome.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/brandonkl...', 10, Array)
#1 [internal function]: Controller_Welcome->action_echo()
#2 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/brandonkliu/domains/demo.brandonkliu.com/public_html/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 14:50:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/welcome.php [ 11 ]
2012-01-15 14:50:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}