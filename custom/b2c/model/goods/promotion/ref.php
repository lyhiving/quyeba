<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 

class b2c_mdl_goods_promotion_ref extends dbeav_model{

     /*
    获取商品促销图片
    return array
    params goods_id
    */
    function get_goods_salesimage($goods_id=null){
        $db = kernel::database();
        $salesgoodsimage = $db->select("SELECT gpr.`goods_id`,gpr.`description`,srg.`image` FROM `sdb_b2c_goods_promotion_ref` as gpr
                                                                left join sdb_b2c_sales_rule_goods as srg on gpr.rule_id = srg.rule_id
                                                                WHERE gpr.`goods_id`=".$goods_id."");
        foreach ($salesgoodsimage as $k=>$v)
        {
             $simage =  $v['image'];
        }
        return $simage;
    }



}
