<?php exit(); ?>a:3:{s:5:"value";s:1381:"<div class="tableform">
			挂件标题：<input name="title" class="inputstyle" value="<?php echo ((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:请填写标题); ?>">
			<br />
			商品数量：<?php echo $this->ui()->input(array('required' => true,'type' => 'select','name' => "goodsNum",'options' => array('5'=>5,'10'=>10,'8'=>8,'20'=>20),'value' => ((isset($this->_vars['setting']['goodsNum']) && ''!==$this->_vars['setting']['goodsNum'])?$this->_vars['setting']['goodsNum']:8)));?>	
			<br />
			选择商品：<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'filter' => $this->_vars['goodslink_filter'],'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "linkid",'linkid' => $this->_vars['setting']['linkid'],'value' => $this->_vars['setting']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>			

			<br />
			图片宽高：160*160（为达到最佳效果图片尺寸固定为160*160,请设置您的图片大小为160*160）

			<br />
			价格显示：<input name="price_show" class="inputstyle" value="<?php echo ((isset($this->_vars['setting']['price_show']) && ''!==$this->_vars['setting']['price_show'])?$this->_vars['setting']['price_show']:销售价); ?>">

</div>
";s:3:"ttl";i:0;s:8:"dateline";i:1376920206;}