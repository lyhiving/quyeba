<?php exit(); ?>a:3:{s:5:"value";s:626:"<style>
  .ad-pic a{display:block; width:<?php echo $this->_vars['data']['ad_pic_width']; ?>; height:<?php echo $this->_vars['data']['ad_pic_height']; ?>; overflow:hidden;}
</style>
<div class="ad-pic">
		<img src='<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['ad_pic']); ?>' alt="<?php echo $this->_vars['setting']['ad_pic_txt']; ?>" <?php if( $this->_vars['data']['ad_pic_width'] ){ ?>width='<?php echo $this->_vars['data']['ad_pic_width']; ?>'<?php }  if( $this->_vars['data']['ad_pic_height'] ){ ?>height='<?php echo $this->_vars['data']['ad_pic_height']; ?>'<?php } ?> />
</div>

";s:8:"dateline";s:10:"1428059927";s:3:"ttl";s:1:"0";}