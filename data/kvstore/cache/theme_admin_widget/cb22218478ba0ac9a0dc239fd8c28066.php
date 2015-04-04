<?php exit(); ?>a:3:{s:5:"value";s:3012:"<style>
.class1{color:#ff9900;}
.class2{color:#0099ff;}



.goods950 h5{height:26px;line-height:26px;border-bottom:2px solid #373737;}

.goods950 .switchable-content{border-bottom:1px solid #ececec}
.goods950 .switchable-content li{float:left;width:160px;margin:15px 16px 10px;_display:inline;}
.goods950 .demo-pic{width:160px;height:160px;overflow:hidden;}
.goods950 .demo-pic a{width:160px;height:160px;display:table-cell;text-align:center;vertical-align:middle;}
.goods950 .demo-pic a img{width:160px}
.goods950 h6{height:34px;overflow:hidden;}
.goods950 h6 a{height:34px;line-height:18px;font-weight:100;color:#888888;margin-bottom:3px;display:block}
.goods950 li span{font-family:Tahoma;color:#888888;display:block;height:18px;line-height:18px;}
.goods950 li i{color:#ed1c24;font-family:Verdana;font-weight:bolder;}
</style>



<ul class="itemlist" style="margin-bottom:5px;">
	<?php $this->_vars["do"]='1';  if($this->_vars['data']['goodsdata']['goodsRows'])foreach ((array)$this->_vars['data']['goodsdata']['goodsRows'] as $this->_vars['key'] => $this->_vars['goodsdemo']){ ?>
		
	<li class="fl" style="margin-bottom:1px;">
		<div id="itemlist-34">
				<?php if( $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['pic'] ){ ?>
					<img class="itemlist-img" src="<?php echo $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['pic']; ?>" alt="<?php if( $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['nice'] ){  echo $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['nice'];  }else{  echo $this->_vars['goodsdemo']['goodsName'];  } ?>" />
				<?php }else{ ?>
					<img class="itemlist-img" src="<?php echo $this->_vars['goodsdemo']['goodsPicM']; ?>" alt="<?php if( $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['nice'] ){  echo $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['nice'];  }else{  echo $this->_vars['goodsdemo']['goodsName'];  } ?>"  />
				<?php } ?>
			<div class="itemlist-m"></div>
		</div>
        <ul style="opacity: 0; visibility: hidden; ">
		  <li>
			<div class="wrap">
				<a href="<?php echo $this->_vars['goodsdemo']['goodsLink']; ?>" target="_blank">
				<div class="item-text">
					<h2>
				<?php if( $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['nice'] ){  echo $this->_vars['data']['info'][$this->_vars['goodsdemo']['goodsId']]['nice'];  }else{  echo $this->_vars['goodsdemo']['goodsName'];  } ?>
						<br>
				<i><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['goodsdemo']['goodsSalePrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></i>元<br>
				</h2>
				</div>
				</a>
				<a href="<?php echo $this->_vars['goodsdemo']['goodsLink']; ?>" target="_blank"><div class="itemlist-more"></div></a>
			</div>
		  </li>

		</ul>
	</li>

		<?php } ?>
</ul>
";s:8:"dateline";s:10:"1369129289";s:3:"ttl";s:1:"0";}