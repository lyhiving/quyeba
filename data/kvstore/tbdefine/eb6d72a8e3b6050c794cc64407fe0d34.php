<?php exit(); ?>a:3:{s:5:"value";a:10:{s:7:"columns";a:13:{s:8:"queue_id";a:7:{s:4:"type";s:6:"number";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:11:"queue_title";a:8:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:12:"队列名称";s:8:"required";b:1;s:8:"is_title";b:1;s:7:"in_list";b:1;s:5:"width";i:200;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:6:"status";a:8:{s:5:"label";s:6:"状态";s:4:"type";a:4:{s:7:"running";s:9:"运行中";s:9:"hibernate";s:9:"休眠中";s:6:"paused";s:9:"已暂停";s:7:"failure";s:12:"执行失败";}s:8:"required";b:1;s:7:"default";s:9:"hibernate";s:7:"in_list";b:1;s:5:"width";i:100;s:15:"default_in_list";b:1;s:8:"realtype";s:46:"enum('running','hibernate','paused','failure')";}s:6:"worker";a:4:{s:4:"type";s:12:"varchar(200)";s:8:"required";b:1;s:5:"width";i:200;s:8:"realtype";s:12:"varchar(200)";}s:10:"start_time";a:6:{s:4:"type";s:4:"time";s:5:"label";s:18:"任务产生时间";s:8:"required";b:1;s:7:"in_list";b:1;s:5:"width";i:150;s:8:"realtype";s:16:"int(10) unsigned";}s:13:"worker_active";a:6:{s:4:"type";s:4:"time";s:5:"label";s:18:"上次运行时间";s:7:"in_list";b:1;s:5:"width";i:150;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:5:"total";a:6:{s:4:"type";s:6:"number";s:5:"label";s:12:"队列长度";s:7:"in_list";b:1;s:5:"width";i:120;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"remaining";a:6:{s:4:"type";s:6:"number";s:5:"label";s:12:"剩余任务";s:7:"in_list";b:1;s:5:"width";i:120;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"cursor_id";a:5:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:12:"执行游标";s:7:"default";i:0;s:8:"required";b:1;s:8:"realtype";s:12:"varchar(255)";}s:6:"runkey";a:2:{s:4:"type";s:8:"char(32)";s:8:"realtype";s:8:"char(32)";}s:9:"task_name";a:3:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:18:"永久任务名称";s:8:"realtype";s:11:"varchar(50)";}s:6:"params";a:5:{s:4:"type";s:9:"serialize";s:5:"label";s:6:"参数";s:8:"required";b:1;s:7:"comment";s:27:"参数，通常就是filter";s:8:"realtype";s:8:"longtext";}s:6:"errmsg";a:6:{s:4:"type";s:12:"varchar(255)";s:15:"default_in_list";b:1;s:7:"in_list";b:1;s:5:"width";i:200;s:5:"label";s:12:"错误信息";s:8:"realtype";s:12:"varchar(255)";}}s:5:"index";a:3:{s:10:"ind_worker";a:1:{s:7:"columns";a:1:{i:0;s:6:"worker";}}s:17:"ind_worker_active";a:1:{s:7:"columns";a:1:{i:0;s:13:"worker_active";}}s:10:"ind_status";a:1:{s:7:"columns";a:1:{i:0;s:6:"status";}}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 40912 $";s:12:"ignore_cache";b:1;s:8:"idColumn";s:8:"queue_id";s:5:"pkeys";a:1:{s:8:"queue_id";s:8:"queue_id";}s:10:"textColumn";s:11:"queue_title";s:7:"in_list";a:7:{i:0;s:11:"queue_title";i:1;s:6:"status";i:2;s:10:"start_time";i:3;s:13:"worker_active";i:4;s:5:"total";i:5;s:9:"remaining";i:6;s:6:"errmsg";}s:15:"default_in_list";a:6:{i:0;s:11:"queue_title";i:1;s:6:"status";i:2;s:13:"worker_active";i:3;s:5:"total";i:4;s:9:"remaining";i:5;s:6:"errmsg";}}s:8:"dateline";s:10:"1376710609";s:3:"ttl";s:1:"0";}