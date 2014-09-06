<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

    function theme_widget_articles_side(&$setting,&$smarty){
        $setting['order'] or $setting['order'] = 'desc';
        $setting['order_type'] or $setting['order_type'] = 'pubtime';
        $func = array('asc'=>'ksort','desc'=>'krsort');

        $mdl_memberLv = app::get( 'b2c' )->model('member_lv');
        $default_member_lv = $mdl_memberLv->dump(array('default_lv'=>'1'),'member_lv_id');
        $member_level = $default_member_lv['member_lv_id'];//默认等级
        $obj_members =  app::get( 'b2c' )->model('members');
        $memberTmp = $obj_members->get_current_member();
        $member_type  = '1';
        if ( isset( $memberTmp['member_lv'] ) ) {
            $member_level = $memberTmp['member_lv'];
            $member_type = $memberTmp['member_type'];
        }
        //$member_type  = '2';
        $oAN = kernel::single("content_article_node");
        $oMAI = app::get('content')->model('article_indexs');
        $objrequest = kernel::single("base_component_request");
        $article_id = $objrequest->get_param(0);
        if(isset($setting['upto_articleid']) && $setting['upto_articleid']=="1" && $article_id>0){
            //获取父节点id
            $nodeinfo = $oMAI->getList("node_id",array("article_id"=>$article_id));
            $iNodeId = $nodeinfo[0]['node_id'];
        }
        if(!$iNodeId){
            $iNodeId = $setting['node_id'];
        }
        $lv = $setting['lv'];
        $limit = $setting['limit'];
        $tmp = $oAN->get_node($iNodeId, false,$member_type);
        article_foost($lv, $iNodeId, $limit, $setting['showallart'], $oAN, $oMAI, $tmp['child'], $setting,$member_type);
        //error_log(var_export($tmp,true),3,DATA_DIR.'/pansen.dd.txt');
        $html = array();

        article_showst($smarty, $tmp['child'], $setting, $html, 0, $limit);
        if( !$setting['shownode'] ) {
            $func[$setting['order']]($html);
        }
        $html = implode(' ',$html);
        $filter = array();
        $filter['ifpub'] = 'true';
        $filter['pubtime|than'] = time();
        $arr = $oMAI->getList( 'pubtime',$filter,0,1,' pubtime ASC' );
        if( $arr ) { //设置缓存过期时间
            reset( $arr );
            $arr = current($arr);
            cachemgr::set_expiration($arr['pubtime']);
        }

        $tmp['__html'] = $html;
        $tmp['__shownode'] = $setting['shownode'];
        $tmp['__stripparenturl'] = $setting['stripparenturl'];

        if( $tmp['homepage']=='true' )
            $tmp['node_url'] = app::get('site')->router()->gen_url( array('app'=>'content', 'ctl'=>'site_article', 'act'=>'nodeindex', 'arg0'=>$setting['node_id']) );
        else
            $tmp['node_url'] = app::get('site')->router()->gen_url( array('app'=>'content', 'ctl'=>'site_article', 'act'=>'lists', 'arg0'=>$setting['node_id']) );

        return $tmp;
    }

    function article_foost($lv=1, $iNodeId=1, $limit, $showallart, $oAN, $oMAI, &$tmp, $setting,$member_type) {
        if($lv<0)return;
        $aNodes = $oAN->get_nodes($iNodeId,$member_type);

        if(is_array($aNodes)) {
            foreach ($aNodes as $val) {
                if($val['ifpub']=='false')continue;
                article_foost(($lv-1), $val['node_id'], $limit, $showallart, $oAN, $oMAI, $tmp['child'][$val['node_id']], $setting,$member_type);
                if(empty($tmp['child'][$val['node_id']])) unset($tmp[$val['node_id']]);
                $tmp['child'][$val['node_id']]['info'] = $val;
            }
        }
        if( $showallart ) {

            if(!$limit) return ;
            #if( $lv==$setting['lv'] ) return false;
            $tmp['article'] = $oMAI->getList_1('*', array('node_id'=>$iNodeId,'ifpub'=>'true', 'pubtime|lthan'=>time(),'nochildren'=>true),0, $limit,"{$setting['order_type']} {$setting['order']} ");
        }
    }


    function article_showst(&$smarty, $tmp, $setting, &$html, $lv=0, &$limit) {
        if($setting['shownode'] && $lv!=0) {
            if(is_object($smarty) && method_exists($smarty, 'gen_url')) {
                if( $tmp['info']['homepage']=='true' )
                    $url = $smarty->gen_url(array('app'=>'content', 'ctl'=>'site_article', 'act'=>'nodeindex', 'arg0'=>$tmp['info']['node_id']));
                else
                    $url = $smarty->gen_url(array('app'=>'content', 'ctl'=>'site_article', 'act'=>'lists', 'arg0'=>$tmp['info']['node_id']));
            }
            $html[] = article_htmlst($lv, $url, $tmp['info']['node_name']);
        }

        if( !$setting['shownode'] ) {
            if( $limit<=0 ) return;
            #$tmp['article'] = array_slice( $tmp['article'], 0, $setting['limit'] );
        }

        if($tmp['article']) {
            if($setting['styleart']) {
                $tmp_lv = $setting['shownode'] ? ($setting['lv'] + 1) : 2;
            } else {
                $tmp_lv = $lv + 1;
            }
            foreach ($tmp['article'] as $row) {
                if(is_object($smarty) && method_exists($smarty, 'gen_url'))
                    $url = $smarty->gen_url(array('app'=>'content', 'ctl'=>'site_article', 'act'=>'index', 'arg0'=>$row['article_id']));
                $key = $row[$setting['order_type']];
                while(true) {
                    if( !isset($html[$key]) )break;
                    $key++;
                }
                if($limit>0)
                    $html[$key] = article_htmlst($tmp_lv, $url, $row['title']);

                $limit--;
            }
        }
        if($tmp['child']) {
            foreach ($tmp['child'] as $row) {
                article_showst($smarty, $row, $setting, $html, $lv+1, $limit);
            }
        }
    }

    function article_htmlst($lv, $url, $name) {
        return <<<EOF
			  <li class="nav_0"> <a href="{$url}">{$name}</a></li>
EOF;
    }
