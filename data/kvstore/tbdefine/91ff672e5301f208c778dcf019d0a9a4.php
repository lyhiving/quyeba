<?php exit(); ?>a:3:{s:5:"value";a:10:{s:7:"columns";a:99:{s:8:"goods_id";a:10:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:2:"bn";a:9:{s:4:"type";s:12:"varchar(200)";s:5:"label";s:12:"商品编号";s:5:"width";i:110;s:10:"searchtype";s:4:"head";s:8:"editable";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(200)";}s:4:"name";a:15:{s:4:"type";s:12:"varchar(200)";s:8:"required";b:1;s:7:"default";s:0:"";s:5:"label";s:12:"商品名称";s:8:"is_title";b:1;s:5:"width";i:310;s:10:"searchtype";s:3:"has";s:8:"editable";b:1;s:10:"filtertype";s:6:"custom";s:13:"filterdefault";b:1;s:12:"filtercustom";a:4:{s:3:"has";s:6:"包含";s:6:"tequal";s:6:"等于";s:4:"head";s:12:"开头等于";s:4:"foot";s:12:"结尾等于";}s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"1";s:8:"realtype";s:12:"varchar(200)";}s:5:"price";a:12:{s:4:"type";s:5:"money";s:7:"sdfpath";s:34:"product[default]/price/price/price";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"label";s:9:"销售价";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:7:"orderby";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:7:"type_id";a:9:{s:4:"type";s:16:"table:goods_type";s:7:"sdfpath";s:12:"type/type_id";s:5:"label";s:6:"类型";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:6:"cat_id";a:13:{s:4:"type";s:15:"table:goods_cat";s:8:"required";b:1;s:7:"sdfpath";s:15:"category/cat_id";s:7:"default";i:0;s:5:"label";s:6:"分类";s:5:"width";i:75;s:8:"editable";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:7:"orderby";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"brand_id";a:10:{s:4:"type";s:11:"table:brand";s:7:"sdfpath";s:14:"brand/brand_id";s:5:"label";s:6:"品牌";s:5:"width";i:75;s:8:"editable";b:1;s:6:"hidden";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:10:"marketable";a:11:{s:4:"type";s:4:"bool";s:7:"default";s:4:"true";s:7:"sdfpath";s:6:"status";s:8:"required";b:1;s:5:"label";s:6:"上架";s:5:"width";i:30;s:8:"editable";b:1;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:20:"enum('true','false')";}s:5:"store";a:8:{s:4:"type";s:13:"decimal(20,2)";s:5:"label";s:6:"库存";s:5:"width";i:30;s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:8:"realtype";s:13:"decimal(20,2)";}s:10:"notify_num";a:8:{s:4:"type";s:6:"number";s:7:"default";i:0;s:8:"required";b:1;s:5:"label";s:12:"缺货登记";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:6:"uptime";a:7:{s:4:"type";s:4:"time";s:10:"depend_col";s:19:"marketable:true:now";s:5:"label";s:12:"上架时间";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"downtime";a:7:{s:4:"type";s:4:"time";s:10:"depend_col";s:20:"marketable:false:now";s:5:"label";s:12:"下架时间";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:11:"last_modify";a:7:{s:4:"type";s:11:"last_modify";s:5:"label";s:12:"更新时间";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:7:"orderby";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:7:"p_order";a:10:{s:4:"type";s:6:"number";s:7:"default";i:30;s:8:"required";b:1;s:5:"label";s:6:"排序";s:5:"width";i:110;s:8:"editable";b:0;s:6:"hidden";b:1;s:7:"in_list";b:0;s:7:"orderby";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:7:"d_order";a:9:{s:4:"type";s:6:"number";s:7:"default";i:30;s:8:"required";b:1;s:5:"label";s:6:"排序";s:5:"width";i:30;s:8:"editable";b:1;s:7:"in_list";b:1;s:7:"orderby";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:5:"score";a:7:{s:4:"type";s:6:"number";s:7:"sdfpath";s:10:"gain_score";s:5:"label";s:6:"积分";s:5:"width";i:30;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"cost";a:10:{s:4:"type";s:5:"money";s:7:"sdfpath";s:33:"product[default]/price/cost/price";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"label";s:9:"成本价";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:7:"in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:8:"mktprice";a:8:{s:4:"type";s:5:"money";s:7:"sdfpath";s:37:"product[default]/price/mktprice/price";s:5:"label";s:9:"市场价";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:7:"in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:6:"weight";a:7:{s:4:"type";s:13:"decimal(20,3)";s:7:"sdfpath";s:23:"product[default]/weight";s:5:"label";s:6:"重量";s:5:"width";i:75;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:4:"unit";a:8:{s:4:"type";s:11:"varchar(20)";s:7:"sdfpath";s:4:"unit";s:5:"label";s:6:"单位";s:5:"width";i:30;s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:8:"realtype";s:11:"varchar(20)";}s:5:"brief";a:8:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:12:"商品简介";s:5:"width";i:110;s:6:"hidden";b:0;s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}s:10:"goods_type";a:10:{s:4:"type";a:3:{s:6:"normal";s:12:"普通商品";s:4:"bind";s:12:"捆绑商品";s:4:"gift";s:6:"赠品";}s:7:"sdfpath";s:10:"goods_type";s:7:"default";s:6:"normal";s:8:"required";b:1;s:5:"label";s:12:"销售类型";s:5:"width";i:110;s:8:"editable";b:0;s:6:"hidden";b:1;s:7:"in_list";b:0;s:8:"realtype";s:28:"enum('normal','bind','gift')";}s:16:"image_default_id";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:12:"默认图片";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:6:"udfimg";a:8:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:5:"label";s:24:"是否用户自定义图";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:20:"enum('true','false')";}s:13:"thumbnail_pic";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:9:"缩略图";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:9:"small_pic";a:3:{s:4:"type";s:12:"varchar(255)";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:7:"big_pic";a:3:{s:4:"type";s:12:"varchar(255)";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:5:"intro";a:9:{s:4:"type";s:8:"longtext";s:7:"sdfpath";s:11:"description";s:5:"label";s:12:"详细介绍";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:0;s:8:"realtype";s:8:"longtext";}s:13:"english_title";a:9:{s:4:"type";s:12:"varchar(200)";s:7:"sdfpath";s:13:"english_title";s:5:"label";s:13:"english_title";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(200)";}s:6:"extend";a:9:{s:4:"type";s:8:"longtext";s:7:"sdfpath";s:6:"extend";s:5:"label";s:12:"科技课堂";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:0;s:8:"realtype";s:8:"longtext";}s:4:"size";a:9:{s:4:"type";s:8:"longtext";s:7:"sdfpath";s:4:"size";s:5:"label";s:9:"尺码表";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:0;s:8:"realtype";s:8:"longtext";}s:11:"store_place";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:6:"库位";s:7:"sdfpath";s:28:"product[default]/store_place";s:5:"width";i:30;s:8:"editable";b:0;s:6:"hidden";b:1;s:8:"realtype";s:12:"varchar(255)";}s:7:"min_buy";a:6:{s:4:"type";s:6:"number";s:5:"label";s:9:"起定量";s:5:"width";i:30;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:13:"package_scale";a:6:{s:4:"type";s:13:"decimal(20,2)";s:5:"label";s:12:"打包比例";s:5:"width";i:30;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:13:"decimal(20,2)";}s:12:"package_unit";a:6:{s:4:"type";s:11:"varchar(20)";s:5:"label";s:12:"打包单位";s:5:"width";i:30;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(20)";}s:11:"package_use";a:6:{s:4:"type";s:7:"intbool";s:5:"label";s:18:"是否开启打包";s:5:"width";i:30;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:13:"enum('0','1')";}s:13:"score_setting";a:4:{s:4:"type";a:2:{s:7:"percent";s:9:"百分比";s:6:"number";s:9:"实际值";}s:7:"default";s:6:"number";s:8:"editable";b:0;s:8:"realtype";s:24:"enum('percent','number')";}s:12:"nostore_sell";a:6:{s:4:"type";s:7:"intbool";s:7:"default";s:1:"0";s:5:"label";s:27:"是否开启无库存销售";s:5:"width";i:30;s:8:"editable";b:0;s:8:"realtype";s:13:"enum('0','1')";}s:13:"goods_setting";a:4:{s:4:"type";s:9:"serialize";s:5:"label";s:12:"商品设置";s:11:"deny_export";b:1;s:8:"realtype";s:8:"longtext";}s:9:"spec_desc";a:6:{s:4:"type";s:9:"serialize";s:5:"label";s:6:"物品";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:8:"realtype";s:8:"longtext";}s:6:"params";a:3:{s:4:"type";s:9:"serialize";s:8:"editable";b:0;s:8:"realtype";s:8:"longtext";}s:8:"disabled";a:5:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}s:10:"rank_count";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:14:"comments_count";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:12:"view_w_count";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:10:"view_count";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:10:"count_stat";a:3:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:8:"realtype";s:8:"longtext";}s:9:"buy_count";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:11:"buy_w_count";a:5:{s:4:"type";s:12:"int unsigned";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:3:"p_1";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_1/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_2";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_2/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_3";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_3/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_4";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_4/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_5";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_5/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_6";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_6/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_7";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_7/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_8";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_8/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:3:"p_9";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:15:"props/p_9/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_10";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_10/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_11";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_11/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_12";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_12/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_13";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_13/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_14";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_14/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_15";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_15/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_16";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_16/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_17";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_17/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_18";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_18/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_19";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_19/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_20";a:4:{s:4:"type";s:6:"number";s:7:"sdfpath";s:16:"props/p_20/value";s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"p_21";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_21/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_22";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_22/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_23";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_23/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_24";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_24/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_25";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_25/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_26";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_26/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_27";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_27/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_28";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_28/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_29";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_29/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_30";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_30/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_31";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_31/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_32";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_32/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_33";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_33/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_34";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_34/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_35";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_35/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_36";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_36/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_37";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_37/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_38";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_38/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_39";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_39/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_40";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_40/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_41";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_41/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_42";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_42/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_43";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_43/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_44";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_44/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_45";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_45/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_46";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_46/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_47";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_47/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_48";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_48/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_49";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_49/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}s:4:"p_50";a:4:{s:4:"type";s:12:"varchar(255)";s:7:"sdfpath";s:16:"props/p_50/value";s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(255)";}}s:7:"comment";s:9:"商品表";s:5:"index";a:59:{s:6:"uni_bn";a:2:{s:7:"columns";a:1:{i:0;s:2:"bn";}s:6:"prefix";s:6:"UNIQUE";}s:7:"ind_p_1";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_1";}}s:7:"ind_p_2";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_2";}}s:7:"ind_p_3";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_3";}}s:7:"ind_p_4";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_4";}}s:7:"ind_p_5";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_5";}}s:7:"ind_p_6";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_6";}}s:7:"ind_p_7";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_7";}}s:7:"ind_p_8";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_8";}}s:7:"ind_p_9";a:1:{s:7:"columns";a:1:{i:0;s:3:"p_9";}}s:8:"ind_p_10";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_10";}}s:8:"ind_p_11";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_11";}}s:8:"ind_p_12";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_12";}}s:8:"ind_p_13";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_13";}}s:8:"ind_p_14";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_14";}}s:8:"ind_p_15";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_15";}}s:8:"ind_p_16";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_16";}}s:8:"ind_p_17";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_17";}}s:8:"ind_p_18";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_18";}}s:8:"ind_p_19";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_19";}}s:8:"ind_p_20";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_20";}}s:8:"ind_p_23";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_23";}}s:8:"ind_p_22";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_22";}}s:8:"ind_p_21";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_21";}}s:8:"ind_p_24";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_24";}}s:8:"ind_p_25";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_25";}}s:8:"ind_p_26";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_26";}}s:8:"ind_p_27";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_27";}}s:8:"ind_p_28";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_28";}}s:8:"ind_p_29";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_29";}}s:8:"ind_p_30";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_30";}}s:8:"ind_p_31";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_31";}}s:8:"ind_p_32";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_32";}}s:8:"ind_p_33";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_33";}}s:8:"ind_p_34";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_34";}}s:8:"ind_p_35";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_35";}}s:8:"ind_p_36";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_36";}}s:8:"ind_p_37";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_37";}}s:8:"ind_p_38";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_38";}}s:8:"ind_p_39";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_39";}}s:8:"ind_p_40";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_40";}}s:8:"ind_p_41";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_41";}}s:8:"ind_p_42";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_42";}}s:8:"ind_p_43";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_43";}}s:8:"ind_p_44";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_44";}}s:8:"ind_p_45";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_45";}}s:8:"ind_p_46";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_46";}}s:8:"ind_p_47";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_47";}}s:8:"ind_p_48";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_48";}}s:8:"ind_p_49";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_49";}}s:8:"ind_p_50";a:1:{s:7:"columns";a:1:{i:0;s:4:"p_50";}}s:12:"ind_frontend";a:1:{s:7:"columns";a:3:{i:0;s:8:"disabled";i:1;s:10:"goods_type";i:2;s:10:"marketable";}}s:14:"idx_goods_type";a:1:{s:7:"columns";a:1:{i:0;s:10:"goods_type";}}s:11:"idx_d_order";a:1:{s:7:"columns";a:1:{i:0;s:7:"d_order";}}s:22:"idx_goods_type_d_order";a:1:{s:7:"columns";a:2:{i:0;s:10:"goods_type";i:1;s:7:"d_order";}}s:14:"idx_marketable";a:1:{s:7:"columns";a:1:{i:0;s:10:"marketable";}}s:13:"idx_c_type_id";a:1:{s:7:"columns";a:1:{i:0;s:7:"type_id";}}s:12:"idx_c_cat_id";a:1:{s:7:"columns";a:1:{i:0;s:6:"cat_id";}}s:14:"idx_c_brand_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"brand_id";}}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 44513 $";s:8:"idColumn";s:8:"goods_id";s:5:"pkeys";a:1:{s:8:"goods_id";s:8:"goods_id";}s:7:"in_list";a:19:{i:0;s:2:"bn";i:1;s:4:"name";i:2;s:5:"price";i:3;s:7:"type_id";i:4;s:6:"cat_id";i:5;s:8:"brand_id";i:6;s:10:"marketable";i:7;s:5:"store";i:8;s:10:"notify_num";i:9;s:6:"uptime";i:10;s:8:"downtime";i:11;s:11:"last_modify";i:12;s:7:"d_order";i:13;s:5:"score";i:14;s:4:"cost";i:15;s:8:"mktprice";i:16;s:6:"weight";i:17;s:4:"unit";i:18;s:5:"brief";}s:10:"textColumn";s:4:"name";s:15:"default_in_list";a:3:{i:0;s:4:"name";i:1;s:7:"type_id";i:2;s:6:"cat_id";}}s:8:"dateline";s:10:"1368781997";s:3:"ttl";s:1:"0";}