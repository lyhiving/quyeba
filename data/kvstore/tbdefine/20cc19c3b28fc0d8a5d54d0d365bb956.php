<?php exit(); ?>a:3:{s:5:"value";a:5:{s:7:"columns";a:10:{s:6:"log_id";a:6:{s:4:"type";s:12:"mediumint(8)";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:8:"editable";b:0;s:8:"realtype";s:12:"mediumint(8)";}s:9:"member_id";a:5:{s:4:"type";s:13:"table:members";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"name";a:4:{s:4:"type";s:11:"varchar(50)";s:7:"default";s:0:"";s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(50)";}s:5:"price";a:4:{s:4:"type";s:5:"money";s:7:"default";s:1:"0";s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:10:"product_id";a:5:{s:4:"type";s:12:"mediumint(8)";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:12:"mediumint(8)";}s:8:"goods_id";a:5:{s:4:"type";s:11:"table:goods";s:8:"required";b:1;s:7:"default";i:0;s:8:"editable";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:12:"product_name";a:4:{s:4:"type";s:12:"varchar(200)";s:7:"default";s:0:"";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(200)";}s:9:"spec_info";a:4:{s:4:"type";s:12:"varchar(200)";s:7:"default";s:0:"";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(200)";}s:6:"number";a:4:{s:4:"type";s:6:"number";s:7:"default";i:0;s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:10:"createtime";a:3:{s:4:"type";s:4:"time";s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}}s:5:"index";a:3:{s:12:"ind_goods_id";a:1:{s:7:"columns";a:3:{i:0;s:9:"member_id";i:1;s:10:"product_id";i:2;s:8:"goods_id";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}s:14:"idx_c_goods_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"goods_id";}}}s:8:"idColumn";s:6:"log_id";s:5:"pkeys";a:1:{s:6:"log_id";s:6:"log_id";}s:10:"textColumn";s:9:"member_id";}s:3:"ttl";i:0;s:8:"dateline";i:1376708494;}