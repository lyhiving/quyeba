<?php exit(); ?>a:3:{s:5:"value";s:1953:"<div class="GoodsCategoryWrap">
<ul>
	<?php if($this->_vars['data'])foreach ((array)$this->_vars['data'] as $this->_vars['key'] => $this->_vars['goodscat']){ ?>
         <li class="c-cat-depth-1"><a href="<?php echo $this->_vars['goodscat']['catLink']; ?>"><?php echo $this->_vars['goodscat']['catName']; ?></a>
		<?php if( $this->_vars['goodscat']['items'] ){ ?>
		<ul>
		<?php if($this->_vars['goodscat']['items'])foreach ((array)$this->_vars['goodscat']['items'] as $this->_vars['goodscat1']){  if( $this->_vars['goodscat1']['items'] ){ ?>
						<li class="c-cat-depth-2">
						  <a href="<?php echo $this->_vars['goodscat1']['catLink']; ?>"><?php echo $this->_vars['goodscat1']['catName'];  echo $this->_vars['goodscat']['porder']; ?></a>                                
                               <ul>
                                <li class="c-cat-depth-3"> 
                                  <table>
                                  <tbody>
                                  
						<?php if($this->_vars['goodscat1']['items'])foreach ((array)$this->_vars['goodscat1']['items'] as $this->_vars['goodscat2']){ ?>
						<tr>
						<td><a href="<?php echo $this->_vars['goodscat2']['catLink']; ?>"><?php echo $this->_vars['goodscat2']['catName']; ?></a> <?php echo $this->_vars['setting']['page_devide']; ?></td>
						</tr> <?php } ?>                                            	 
                                  </tbody>
                                </table> </li>
                            </ul></li>                             
					 <?php }else{ ?>
						<li class="c-cat-depth-2">
                              <a href="<?php echo $this->_vars['goodscat1']['catLink']; ?>"><?php echo $this->_vars['goodscat1']['catName']; ?></a>                                
						</li>
					<?php }  } ?>
			</ul>                                
			<?php }  } ?>
	</ul>                                
</div>

";s:3:"ttl";i:0;s:8:"dateline";i:1428072574;}