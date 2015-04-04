<?php exit(); ?>a:3:{s:5:"value";s:3267:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper');  if( $this->_vars['data']['top_html'] ){  echo $this->_vars['data']['top_html'];  } ?>
<form style="margin-left:5px" action=" app=b2c ctl=site_search act=result }>" method="post" class="SearchBar  searchBar_<?php echo $this->_vars['widget_id']; ?>">
  <table cellpadding="0" cellspacing="0">
    <tr>
      <td class="search_label"> <span><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start();  $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span>
      <span style="position:relative;display:inline-block;"><input type="text" size="19" name="name[]" value="店内搜索"  onfocus="this.value=''" autocompleter="associate_autocomplete_goods:name,goods_id" ac_options="{}" class="inputstyle keywords"  /></span>
      </td>
      <?php if( $this->_vars['setting']['searchopen'] ){ ?>
      <td class="search_price1"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>价格从<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  echo $this->ui()->input(array('name' => "price[0]",'type' => "number",'size' => "4",'class' => "inputstyle gprice_from"));?></td>
      <td class="search_price2"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>到<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  echo $this->ui()->input(array('name' => "price[1]",'type' => "number",'size' => "4",'class' => "inputstyle gprice_to"));?></td>

      <?php } ?>
      <td><input type="submit" value="" class="btn_search" onfocus='this.blur();'/>
      </td>
      <!-- <td><a href=" app=b2c ctl=site_search act=index}>" class="btn_advsearch"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>高级搜索<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></a> </td> -->
    </tr>
  </table>

</form>
<?php if( $this->_vars['data']['bottom_html'] ){  echo $this->_vars['data']['bottom_html'];  } ?>
";s:3:"ttl";i:0;s:8:"dateline";i:1428072388;}