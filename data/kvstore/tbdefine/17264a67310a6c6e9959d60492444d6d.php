<?php exit(); ?>a:3:{s:5:"value";a:8:{s:7:"columns";a:3:{s:2:"id";a:10:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"order_id";a:10:{s:4:"type";s:16:"table:orders@b2c";s:8:"required";b:1;s:7:"default";i:0;s:5:"label";s:15:"应用订单号";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:9:"memc_code";a:8:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:24:"使用的优惠券号码";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}}s:7:"comment";s:30:"优惠券使用记录关联表";s:5:"index";a:2:{s:12:"ind_cpnscode";a:1:{s:7:"columns";a:1:{i:0;s:9:"memc_code";}}s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}}s:8:"idColumn";s:2:"id";s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:7:"in_list";a:2:{i:0;s:8:"order_id";i:1;s:9:"memc_code";}s:15:"default_in_list";a:2:{i:0;s:8:"order_id";i:1;s:9:"memc_code";}s:10:"textColumn";s:8:"order_id";}s:3:"ttl";i:0;s:8:"dateline";i:1376708571;}