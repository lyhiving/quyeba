<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:24:{s:9:"reship_id";a:12:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"label";s:12:"退货单号";s:5:"extra";s:14:"auto_increment";s:7:"comment";s:15:"配送流水号";s:8:"editable";b:0;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"order_id";a:10:{s:4:"type";s:12:"varchar(100)";s:5:"label";s:9:"订单号";s:7:"comment";s:9:"订单号";s:8:"editable";b:0;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:9:"reship_bn";a:12:{s:4:"type";s:11:"varchar(32)";s:8:"required";b:0;s:5:"label";s:18:"中心退货单号";s:7:"comment";s:15:"退货流水号";s:8:"editable";b:0;s:5:"width";i:140;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"is_title";b:0;s:8:"realtype";s:11:"varchar(32)";}s:9:"member_id";a:9:{s:4:"type";s:13:"table:members";s:5:"label";s:15:"会员用户名";s:7:"comment";s:14:"订货会员ID";s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:5:"money";a:10:{s:4:"type";s:5:"money";s:8:"required";b:1;s:7:"default";i:0;s:5:"label";s:12:"物流费用";s:7:"comment";s:12:"配送费用";s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:10:"is_protect";a:10:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:5:"label";s:12:"是否保价";s:7:"comment";s:12:"是否保价";s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:20:"enum('true','false')";}s:8:"delivery";a:10:{s:4:"type";s:11:"varchar(20)";s:5:"label";s:12:"配送方式";s:7:"comment";s:35:"配送方式(货到付款、EMS...)";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"is_title";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:11:"varchar(20)";}s:7:"logi_id";a:6:{s:4:"type";s:11:"varchar(50)";s:7:"comment";s:14:"物流公司ID";s:8:"editable";b:0;s:5:"label";s:14:"物流公司ID";s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(50)";}s:9:"logi_name";a:9:{s:4:"type";s:12:"varchar(100)";s:5:"label";s:12:"物流公司";s:7:"comment";s:18:"物流公司名称";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:7:"logi_no";a:10:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:12:"物流单号";s:7:"comment";s:12:"物流单号";s:8:"editable";b:0;s:10:"searchtype";s:6:"tequal";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:9:"ship_name";a:10:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:9:"收货人";s:7:"comment";s:15:"收货人姓名";s:8:"editable";b:0;s:10:"searchtype";s:6:"tequal";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:9:"ship_area";a:8:{s:4:"type";s:6:"region";s:5:"label";s:12:"收货地区";s:7:"comment";s:15:"收货人地区";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}s:9:"ship_addr";a:8:{s:4:"type";s:4:"text";s:5:"label";s:12:"收货地址";s:7:"comment";s:15:"收货人地址";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:4:"text";}s:8:"ship_zip";a:7:{s:4:"type";s:11:"varchar(20)";s:5:"label";s:12:"收货邮编";s:7:"comment";s:15:"收货人邮编";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:8:"realtype";s:11:"varchar(20)";}s:8:"ship_tel";a:7:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:15:"收货人电话";s:7:"comment";s:15:"收货人电话";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:11:"ship_mobile";a:8:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:15:"收货人手机";s:7:"comment";s:15:"收货人手机";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:10:"ship_email";a:7:{s:4:"type";s:12:"varchar(200)";s:5:"label";s:14:"收货人Email";s:7:"comment";s:14:"收货人Email";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(200)";}s:7:"t_begin";a:8:{s:4:"type";s:4:"time";s:5:"label";s:18:"单据创建时间";s:7:"comment";s:18:"单据生成时间";s:8:"editable";b:0;s:10:"filtertype";s:4:"time";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:6:"t_send";a:6:{s:4:"type";s:4:"time";s:7:"comment";s:18:"单据结束时间";s:8:"editable";b:0;s:5:"label";s:18:"单据结束时间";s:7:"in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:9:"t_confirm";a:6:{s:4:"type";s:4:"time";s:7:"comment";s:12:"确认时间";s:8:"editable";b:0;s:5:"label";s:12:"确认时间";s:7:"in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:7:"op_name";a:9:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:9:"操作员";s:7:"comment";s:9:"操作者";s:8:"editable";b:0;s:10:"searchtype";s:6:"tequal";s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:6:"status";a:8:{s:4:"type";a:7:{s:4:"succ";s:12:"成功到达";s:6:"failed";s:12:"发货失败";s:6:"cancel";s:9:"已取消";s:4:"lost";s:12:"货物丢失";s:8:"progress";s:9:"运送中";s:7:"timeout";s:6:"超时";s:5:"ready";s:12:"准备发货";}s:7:"default";s:5:"ready";s:8:"required";b:1;s:7:"comment";s:6:"状态";s:8:"editable";b:0;s:5:"label";s:6:"状态";s:7:"in_list";b:1;s:8:"realtype";s:66:"enum('succ','failed','cancel','lost','progress','timeout','ready')";}s:4:"memo";a:7:{s:4:"type";s:8:"longtext";s:5:"label";s:6:"备注";s:7:"comment";s:6:"备注";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:8:"realtype";s:8:"longtext";}s:8:"disabled";a:7:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:7:"comment";s:6:"无效";s:8:"editable";b:0;s:5:"label";s:6:"无效";s:7:"in_list";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:7:"comment";s:19:"发货/退货单表";s:5:"index";a:3:{s:12:"ind_disabled";a:1:{s:7:"columns";a:1:{i:0;s:8:"disabled";}}s:11:"ind_logi_no";a:1:{s:7:"columns";a:1:{i:0;s:7:"logi_no";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}}s:7:"version";s:13:"$Rev: 40654 $";s:8:"idColumn";s:9:"reship_id";s:7:"in_list";a:21:{i:0;s:9:"reship_id";i:1;s:8:"order_id";i:2;s:9:"member_id";i:3;s:5:"money";i:4;s:10:"is_protect";i:5;s:8:"delivery";i:6;s:9:"logi_name";i:7;s:7:"logi_no";i:8;s:9:"ship_name";i:9;s:9:"ship_area";i:10;s:9:"ship_addr";i:11;s:8:"ship_zip";i:12;s:8:"ship_tel";i:13;s:11:"ship_mobile";i:14;s:10:"ship_email";i:15;s:7:"t_begin";i:16;s:6:"t_send";i:17;s:9:"t_confirm";i:18;s:7:"op_name";i:19;s:6:"status";i:20;s:4:"memo";}s:15:"default_in_list";a:8:{i:0;s:9:"reship_id";i:1;s:8:"order_id";i:2;s:5:"money";i:3;s:9:"logi_name";i:4;s:7:"logi_no";i:5;s:9:"ship_name";i:6;s:7:"t_begin";i:7;s:7:"op_name";}s:5:"pkeys";a:1:{s:9:"reship_id";s:9:"reship_id";}s:10:"textColumn";s:8:"delivery";}s:8:"dateline";s:10:"1368780653";s:3:"ttl";s:1:"0";}