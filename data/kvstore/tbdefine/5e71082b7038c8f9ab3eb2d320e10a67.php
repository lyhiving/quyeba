<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:12:{s:8:"order_id";a:11:{s:4:"type";s:16:"table:orders@b2c";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"3";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:5:"label";s:9:"订单号";s:8:"realtype";s:19:"bigint(20) unsigned";}s:9:"member_id";a:9:{s:4:"type";s:17:"table:members@b2c";s:7:"default";s:1:"0";s:8:"required";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"4";s:5:"label";s:9:"申请人";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"return_id";a:11:{s:4:"type";s:10:"bigint(20)";s:8:"required";b:1;s:4:"pkey";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:15:"default_in_list";b:1;s:5:"label";s:21:"退货记录流水号";s:5:"order";s:1:"5";s:8:"realtype";s:10:"bigint(20)";}s:9:"return_bn";a:9:{s:4:"type";s:11:"varchar(32)";s:8:"required";b:0;s:5:"label";s:27:"退货记录流水号标识";s:7:"comment";s:27:"退货记录流水号标识";s:8:"editable";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"is_title";b:1;s:8:"realtype";s:11:"varchar(32)";}s:5:"title";a:11:{s:4:"type";s:12:"varchar(200)";s:8:"required";b:1;s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"2";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:5:"label";s:18:"售后服务标题";s:8:"realtype";s:12:"varchar(200)";}s:7:"content";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:12:"退货内容";s:8:"realtype";s:8:"longtext";}s:6:"status";a:10:{s:4:"type";a:9:{i:1;s:9:"未操作";i:2;s:9:"审核中";i:3;s:12:"接受申请";i:4;s:6:"完成";i:5;s:6:"拒绝";i:6;s:9:"已收货";i:7;s:9:"已质检";i:8;s:9:"补差价";i:9;s:15:"已拒绝退款";}s:7:"default";s:1:"1";s:8:"required";b:1;s:7:"comment";s:18:"退货记录状态";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:18:"售后服务状态";s:5:"order";s:1:"6";s:8:"realtype";s:41:"enum('1','2','3','4','5','6','7','8','9')";}s:10:"image_file";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:6:"附件";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(255)";}s:12:"product_data";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:18:"退货货品记录";s:8:"realtype";s:8:"longtext";}s:7:"comment";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:15:"管理员备注";s:8:"realtype";s:8:"longtext";}s:8:"add_time";a:9:{s:4:"type";s:4:"time";s:10:"depend_col";s:19:"marketable:true:now";s:5:"label";s:18:"售后处理时间";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"7";s:8:"realtype";s:16:"int(10) unsigned";}s:8:"disabled";a:5:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 40912 $";s:7:"in_list";a:6:{i:0;s:8:"order_id";i:1;s:9:"member_id";i:2;s:9:"return_id";i:3;s:5:"title";i:4;s:6:"status";i:5;s:8:"add_time";}s:15:"default_in_list";a:6:{i:0;s:8:"order_id";i:1;s:9:"member_id";i:2;s:9:"return_id";i:3;s:5:"title";i:4;s:6:"status";i:5;s:8:"add_time";}s:5:"index";a:2:{s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}}s:8:"idColumn";s:9:"return_id";s:5:"pkeys";a:1:{s:9:"return_id";s:9:"return_id";}s:10:"textColumn";s:9:"return_bn";}s:3:"ttl";i:0;s:8:"dateline";i:1376708558;}