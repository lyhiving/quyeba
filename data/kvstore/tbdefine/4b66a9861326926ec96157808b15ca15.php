<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:11:{s:10:"article_id";a:10:{s:4:"type";s:6:"number";s:8:"required";b:1;s:5:"label";s:8:"文章ID";s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"width";i:50;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:5:"title";a:12:{s:4:"type";s:12:"varchar(200)";s:8:"required";b:1;s:5:"label";s:12:"文章标题";s:5:"width";i:300;s:10:"searchtype";s:3:"has";s:8:"editable";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"is_title";b:1;s:8:"realtype";s:12:"varchar(200)";}s:4:"type";a:10:{s:4:"type";a:3:{i:1;s:12:"普通文章";i:2;s:9:"单独页";i:3;s:15:"自定义页面";}s:5:"label";s:12:"文章类型";s:8:"required";b:1;s:7:"default";i:1;s:5:"width";i:80;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:17:"enum('1','2','3')";}s:7:"node_id";a:10:{s:4:"type";s:19:"table:article_nodes";s:8:"required";b:1;s:5:"label";s:6:"节点";s:5:"width";i:80;s:8:"editable";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:6:"author";a:10:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:6:"作者";s:8:"editable";b:1;s:10:"searchtype";s:3:"has";s:5:"width";i:80;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:7:"pubtime";a:9:{s:4:"type";s:4:"time";s:5:"label";s:36:"发布时间（无需精确到秒）";s:8:"editable";b:1;s:5:"width";i:130;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:6:"uptime";a:7:{s:4:"type";s:4:"time";s:5:"label";s:30:"更新时间（精确到秒）";s:8:"editable";b:0;s:5:"width";i:130;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:5:"level";a:8:{s:4:"type";a:2:{i:1;s:6:"普通";i:2;s:6:"重要";}s:5:"label";s:12:"文章等级";s:8:"required";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:0;s:7:"default";i:1;s:8:"editable";b:1;s:8:"realtype";s:13:"enum('1','2')";}s:5:"ifpub";a:11:{s:4:"type";s:4:"bool";s:8:"required";b:1;s:7:"default";s:5:"false";s:5:"label";s:6:"发布";s:8:"editable";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:0;s:5:"width";i:40;s:15:"default_in_list";b:1;s:8:"realtype";s:20:"enum('true','false')";}s:2:"pv";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:5:"label";s:8:"pageview";s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"disabled";a:5:{s:4:"type";s:4:"bool";s:8:"required";b:1;s:7:"default";s:5:"false";s:8:"editable";b:1;s:8:"realtype";s:20:"enum('true','false')";}}s:7:"comment";s:12:"文章主表";s:5:"index";a:7:{s:11:"ind_node_id";a:1:{s:7:"columns";a:1:{i:0;s:7:"node_id";}}s:9:"ind_ifpub";a:1:{s:7:"columns";a:1:{i:0;s:5:"ifpub";}}s:11:"ind_pubtime";a:1:{s:7:"columns";a:1:{i:0;s:7:"pubtime";}}s:9:"ind_level";a:1:{s:7:"columns";a:1:{i:0;s:5:"level";}}s:12:"ind_disabled";a:1:{s:7:"columns";a:1:{i:0;s:8:"disabled";}}s:6:"ind_pv";a:1:{s:7:"columns";a:1:{i:0;s:2:"pv";}}s:13:"idx_c_node_id";a:1:{s:7:"columns";a:1:{i:0;s:7:"node_id";}}}s:7:"version";s:5:"$Rev$";s:8:"idColumn";s:10:"article_id";s:7:"in_list";a:8:{i:0;s:10:"article_id";i:1;s:5:"title";i:2;s:4:"type";i:3;s:7:"node_id";i:4;s:6:"author";i:5;s:7:"pubtime";i:6;s:6:"uptime";i:7;s:5:"ifpub";}s:15:"default_in_list";a:7:{i:0;s:10:"article_id";i:1;s:5:"title";i:2;s:7:"node_id";i:3;s:6:"author";i:4;s:7:"pubtime";i:5;s:6:"uptime";i:6;s:5:"ifpub";}s:5:"pkeys";a:1:{s:10:"article_id";s:10:"article_id";}s:10:"textColumn";s:5:"title";}s:3:"ttl";i:0;s:8:"dateline";i:1376708434;}