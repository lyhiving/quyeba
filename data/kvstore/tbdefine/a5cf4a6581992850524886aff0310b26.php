<?php exit(); ?>a:3:{s:5:"value";a:8:{s:7:"columns";a:10:{s:7:"cpns_id";a:9:{s:4:"type";s:6:"number";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"id";s:5:"width";i:110;s:7:"comment";s:17:"优惠券方案id";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"cpns_name";a:10:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:15:"优惠券名称";s:10:"searchable";b:1;s:5:"width";i:110;s:7:"comment";s:15:"优惠券名称";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:13:"filterdefault";b:1;s:8:"realtype";s:12:"varchar(255)";}s:6:"pmt_id";a:4:{s:4:"type";s:6:"number";s:7:"comment";s:13:"*暂时废弃";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:11:"cpns_prefix";a:11:{s:4:"type";s:11:"varchar(50)";s:8:"required";b:1;s:7:"default";s:0:"";s:5:"label";s:15:"优惠券号码";s:5:"width";i:110;s:7:"comment";s:51:"生成优惠券前缀/号码(当全局时为号码)";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:13:"filterdefault";b:1;s:8:"realtype";s:11:"varchar(50)";}s:17:"cpns_gen_quantity";a:11:{s:4:"type";s:6:"number";s:7:"default";i:0;s:8:"required";b:1;s:5:"label";s:18:"获取的总数量";s:5:"width";i:110;s:7:"comment";s:18:"获取的总数量";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:13:"filterdefault";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"cpns_key";a:7:{s:4:"type";s:11:"varchar(20)";s:8:"required";b:1;s:7:"default";s:0:"";s:5:"width";i:110;s:7:"comment";s:21:"优惠券生成的key";s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(20)";}s:11:"cpns_status";a:11:{s:4:"type";s:7:"intbool";s:7:"default";s:1:"1";s:8:"required";b:1;s:5:"label";s:12:"是否启用";s:5:"width";i:110;s:7:"comment";s:21:"优惠券方案状态";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:13:"filterdefault";b:1;s:8:"realtype";s:13:"enum('0','1')";}s:9:"cpns_type";a:11:{s:4:"type";a:2:{i:0;s:18:"一张无限使用";i:1;s:18:"多张使用一次";}s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"label";s:15:"优惠券类型";s:5:"width";i:110;s:7:"comment";s:15:"优惠券类型";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:13:"filterdefault";b:1;s:8:"realtype";s:13:"enum('0','1')";}s:10:"cpns_point";a:8:{s:4:"type";s:6:"number";s:7:"default";N;s:5:"label";s:18:"兑换所需积分";s:5:"width";i:110;s:7:"comment";s:21:"兑换优惠券积分";s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:7:"rule_id";a:6:{s:4:"type";s:22:"table:sales_rule_order";s:7:"sdfpath";s:12:"rule/rule_id";s:7:"default";N;s:7:"comment";s:29:"相关的订单促销规则ID";s:8:"editable";b:0;s:8:"realtype";s:6:"int(8)";}}s:7:"comment";s:12:"优惠券表";s:5:"index";a:2:{s:15:"ind_cpns_prefix";a:1:{s:7:"columns";a:1:{i:0;s:11:"cpns_prefix";}}s:13:"idx_c_rule_id";a:1:{s:7:"columns";a:1:{i:0;s:7:"rule_id";}}}s:8:"idColumn";s:7:"cpns_id";s:5:"pkeys";a:1:{s:7:"cpns_id";s:7:"cpns_id";}s:7:"in_list";a:6:{i:0;s:9:"cpns_name";i:1;s:11:"cpns_prefix";i:2;s:17:"cpns_gen_quantity";i:3;s:11:"cpns_status";i:4;s:9:"cpns_type";i:5;s:10:"cpns_point";}s:15:"default_in_list";a:4:{i:0;s:9:"cpns_name";i:1;s:11:"cpns_prefix";i:2;s:17:"cpns_gen_quantity";i:3;s:11:"cpns_status";}s:10:"textColumn";s:9:"cpns_name";}s:8:"dateline";s:10:"1368780628";s:3:"ttl";s:1:"0";}