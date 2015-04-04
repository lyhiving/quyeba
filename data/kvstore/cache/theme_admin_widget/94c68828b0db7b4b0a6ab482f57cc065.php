<?php exit(); ?>a:3:{s:5:"value";s:16577:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div id="cat-config">
<div id="cat-default" class="tableform widgetconfig">
  <div class="division">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>循环深度：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td><select name="showCatDepth_default"><option value="1" <?php if( $this->_vars['setting']['showCatDepth_default']=="1" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>仅显示一级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option> <option value="2" <?php if( $this->_vars['setting']['showCatDepth_default']=="2" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示二级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option> <option value="3" <?php if( $this->_vars['setting']['showCatDepth_default']=="3" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示三级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option>
            </select></td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>分隔商品列表符号：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td><input type="text" name="page_devide" value="<?php echo ((isset($this->_vars['setting']['page_devide']) && ''!==$this->_vars['setting']['page_devide'])?$this->_vars['setting']['page_devide']:''); ?>"></td>
        </tr>
    <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>列数：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td><?php echo $this->ui()->input(array('name' => "devide",'value' => ((isset($this->_vars['setting']['devide']) && ''!==$this->_vars['setting']['devide'])?$this->_vars['setting']['devide']:'1'),'required' => "true",'type' => "digits"));?>  &nbsp;&nbsp;<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>“0”为自动排列<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></td>
        </tr>
      </table>
  </div>
</div>

<div id="cat-accordion" class="tableform widgetconfig">
  <div class="division">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>商品分类循环深度：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
      <td><select name="showCatDepth_accordion">
  <option value="2" <?php if( $this->_vars['setting']['showCatDepth_accordion']=="2" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示二级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option>
  <option value="3" <?php if( $this->_vars['setting']['showCatDepth_accordion']!="2" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示三级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option>
  </select></td>
      </tr>


      <tr>


      <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>展开二级菜单：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
      <td><input type="radio" name="showCatChild_accordion" value="on" <?php if( $this->_vars['setting']['showCatChild_accordion']!="off" ){ ?>checked="checked"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="radio" name="showCatChild_accordion" value="off" <?php if( $this->_vars['setting']['showCatChild_accordion']=="off" ){ ?>checked="checked"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></td>
      </tr>
      <tr id="showCatgChild_accordion-view" <?php if( $this->_vars['setting']['showCatDepth_accordion']=="2" ){ ?>style="display:none;"<?php } ?>>
      <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>展开三级菜单：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
      <td><input type="radio" name="showCatgChild_accordion" value="on" <?php if( $this->_vars['setting']['showCatgChild_accordion']=="on" ){ ?>checked="checked"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="radio" name="showCatgChild_accordion" value="off" <?php if( $this->_vars['setting']['showCatgChild_accordion']!="on" ){ ?>checked="checked"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></td>
      </tr>
      <tr id="showCatgChild_accordion-view" <?php if( $this->_vars['setting']['showCatDepth_accordion']=="2" ){ ?>style="display:none;"<?php } ?>>
      <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>是否显示滑动效果：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
      <td><input type="radio" name="showFx_accordion" value="on" <?php if( $this->_vars['setting']['showFx_accordion']=="on" ){ ?>checked="checked"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="radio" name="showFx_accordion" value="off" <?php if( $this->_vars['setting']['showFx_accordion']!="on" ){ ?>checked="checked"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></td>
      </tr>
      <tr id="showFx_accordion-view" <?php if( $this->_vars['setting']['showFx_accordion']!="on" ){ ?>style="display:none"<?php } ?>>
      <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>滑动时间(ms)：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
      <td><?php echo $this->ui()->input(array('name' => "fxDuration_accordion",'value' => ((isset($this->_vars['setting']['fxDuration_accordion']) && ''!==$this->_vars['setting']['fxDuration_accordion'])?$this->_vars['setting']['fxDuration_accordion']:'300'),'type' => "digits"));?></td>
      </tr>


    </table>
  </div>
</div>

<div id="cat-dropdown" class="tableform widgetconfig">
  <div class="division">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>商品分类循环深度：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><select name="showCatDepth_dropdown">
  <option value="2" <?php if( $this->_vars['setting']['showCatDepth_dropdown']=="2" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示二级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option>
  <option value="3" <?php if( $this->_vars['setting']['showCatDepth_dropdown']!="2" ){ ?>selected="selected"<?php } ?>><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示三级分类<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option>
  </select></td>
    </tr>
  </table>
  </div>
</div>

</div>
<script>
function getCfgForm(id){
  var config = $(id);
  while(config.tagName != 'FORM'){
    config = config.getParent();
  }
  return config;
}

function getWgtTpl(){
  var sels = getCfgForm('cat-config').getElements('select');
  var wgtTpl = '';
  sels.each(function(sel){
    if(sel.getProperty('name') == '__wg[tpl]') wgtTpl = sel;
  });
  return wgtTpl;
}

function hideAll(els){
  els.each(function(el){
    el.hide();
  });
}

function setCfgView(view){
  var views = [$('cat-accordion'),$('cat-dropdown'),$('cat-default')];
  hideAll(views);
  switch(view){
    case 'accordion.html':
      views[0].show();
      break;
    case 'dropdown.html':
      views[1].show();
      break;
    default:
      views[2].show();
      break;
  }
}

function setToggler(togglers){
  togglers.each(function(toggler){
    var view = toggler.getProperty('name')+'-view';
    toggler.addEvent('click',function(){
      if(this.value=="on"){
        $(view).show();
      }else{
        $(view).hide();
      }
    });
  });
}

setToggler($$('input[name="showFx_accordion"]','input[name="showFx_dropdown"]'));

var catTpl = getWgtTpl();
setCfgView(catTpl.value);

catTpl.addEvent('change',function(){
  setCfgView(this.value);
});

$('cat-accordion') && $('cat-accordion').getElement('select[name="showCatDepth_accordion"]').addEvent('change',function(){
  if(this.value == '2') $('showCatgChild_accordion-view').hide();
  else $('showCatgChild_accordion-view').show();
});

</script>
";s:3:"ttl";i:0;s:8:"dateline";i:1428072572;}