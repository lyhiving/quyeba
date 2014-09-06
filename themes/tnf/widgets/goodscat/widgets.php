<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */


$setting['author']='dreamdream';
$setting['name']=app::get('b2c')->_('★内页商品分类★');
$setting['version']='135711';

$setting['stime']='2008-8-8';
//,product,goods:act,
//$setting['scope']=array('');
$setting['order']='1';
$setting['catalog']=app::get('b2c')->_('分类侧栏挂件');

$setting['description']    = app::get('b2c')->_('本版块将在前台显示商品分类菜单。商品分类菜单有三种形式可以选择，分别是：默认、折叠式和弹出式。').'<br><br>'.app::get('b2c')->_('如需查看该版块的使用说明，请').'<a href="http://www.shopex.cn/bbs/read.php?tid-64120.html" target="_blank">'.app::get('b2c')->_('点击这里').'</a>。';

$setting['usual']    = '1';

$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认'),
                            'toggle.html'=>app::get('b2c')->_('折叠式'),
                            'dropdown.html'=>app::get('b2c')->_('弹出式')

                        );
?>
