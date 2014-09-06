<?php

function theme_widget_overview(&$setting, &$system) {
    $time = strtotime(date("Y-m-d", strtotime('-7 days')));
    //鞋子
    $data['xz'] = get_goods_count(28) + get_goods_count(45);
    $data['xz_new'] = get_goods_count(28, $time) + get_goods_count(45, $time);
    //抓绒
    $data['zr'] = get_goods_count(21) + get_goods_count(38);
    $data['zr_new'] = get_goods_count(21, $time) + get_goods_count(38, $time);
    //冲锋衣/裤
    $data['cf'] = get_goods_count(20) + get_goods_count(26) + get_goods_count(37) + get_goods_count(43);
    $data['cf_new'] = get_goods_count(20, $time) + get_goods_count(26, $time) + get_goods_count(37, $time) + get_goods_count(43, $time);
    //三合一
    $data['shy'] = get_goods_count(18) + get_goods_count(35);
    $data['shy_new'] = get_goods_count(18, $time) + get_goods_count(35, $time);
    //羽绒服
    $data['yrf'] = get_goods_count(19) + get_goods_count(36);
    $data['yrf_new'] = get_goods_count(19, $time) + get_goods_count(36, $time);

    return $data;   //根据挂件配置信息，取出数据 返回给挂件模板
}

function get_goods_count($cat_id, $time = NULL) {
    $subcat_list = get_subcat_list($cat_id);
    $count = 0;
    if ($subcat_list) {
        foreach ($subcat_list as $cat) {
            $model_goods = app::get('b2c')->model('goods');
            $filter = array(
                "cat_id" => $cat['cat_id']
            );
            if ($time) {
                $filter += array('uptime|bthan' => $time);
            }
            $count += $model_goods->count($filter);
        }
    } 
	
	$model_goods = app::get('b2c')->model('goods');
	$filter = array(
		"cat_id" => $cat_id
	);
	if ($time) {
		$filter += array('uptime|bthan' => $time);
	}
	$count += $model_goods->count($filter);
    
    return $count;
}

function get_subcat_list($cat_id) {
    $objCat = app::get('b2c')->model('goods_cat');
    $row = $objCat->dump($cat_id);
    $path_id = explode(',', $row['cat_path']);
    array_shift($path_id);
    array_pop($path_id);
    $path_id[] = $cat_id;
    $cat_path = array();
    if ($path_id) {
        $filter = array('cat_id' => $path_id);
        $cat_path = $objCat->getList('*', $filter);
    }
    $list = $objCat->get_subcat_list($cat_id);
    foreach ($list as $key => &$val) {
        if ($val['child_count'] > 0) {
            $val['isParent'] = 'isParent';
        }
    }
    return $list;
}

?>