<?php exit(); ?>a:3:{s:5:"value";a:6:{s:7:"columns";a:10:{s:9:"memc_code";a:6:{s:4:"type";s:12:"varchar(255)";s:8:"required";b:1;s:7:"default";s:0:"";s:4:"pkey";b:1;s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:7:"cpns_id";a:5:{s:4:"type";s:6:"number";s:8:"required";b:1;s:7:"default";i:0;s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"member_id";a:6:{s:4:"type";s:13:"table:members";s:8:"required";b:1;s:7:"default";i:0;s:4:"pkey";b:1;s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:16:"memc_gen_orderid";a:3:{s:4:"type";s:11:"varchar(15)";s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(15)";}s:11:"memc_source";a:5:{s:4:"type";a:3:{s:1:"a";s:15:"全体优惠券";s:1:"b";s:15:"会员优惠券";s:1:"c";s:15:"ShopEx优惠券";}s:7:"default";s:1:"a";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:17:"enum('a','b','c')";}s:12:"memc_enabled";a:5:{s:4:"type";s:4:"bool";s:7:"default";s:4:"true";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}s:15:"memc_used_times";a:4:{s:4:"type";s:9:"mediumint";s:7:"default";i:0;s:8:"editable";b:0;s:8:"realtype";s:12:"mediumint(9)";}s:13:"memc_gen_time";a:3:{s:4:"type";s:4:"time";s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"disabled";a:7:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:7:"comment";s:6:"无效";s:8:"editable";b:0;s:5:"label";s:6:"无效";s:7:"in_list";b:0;s:8:"realtype";s:20:"enum('true','false')";}s:12:"memc_isvalid";a:5:{s:4:"type";s:4:"bool";s:7:"default";s:4:"true";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:5:"index";a:1:{s:20:"ind_memc_gen_orderid";a:1:{s:7:"columns";a:1:{i:0;s:16:"memc_gen_orderid";}}}s:7:"comment";s:18:"用户优惠券表";s:8:"idColumn";a:2:{s:9:"memc_code";s:9:"memc_code";s:9:"member_id";s:9:"member_id";}s:5:"pkeys";a:2:{s:9:"memc_code";s:9:"memc_code";s:9:"member_id";s:9:"member_id";}s:10:"textColumn";s:7:"cpns_id";}s:3:"ttl";i:0;s:8:"dateline";i:1376708489;}