<?php /* Smarty version 2.6.18, created on 2017-05-24 09:54:28
         compiled from listServiceTemplateModel.ihtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'listServiceTemplateModel.ihtml', 7, false),)), $this); ?>
<script type="text/javascript" src="./include/common/javascript/tool.js"></script>
<script type="text/javascript" src="./include/common/javascript/resize_td.js"></script>
<form name='form' method='POST'>
    <table class="ajaxOption table">
      <tbody>
      <tr>
        <th><h5><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filters<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h5></th>
      </tr>
      <tr>
        <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Service template<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
      </tr>
      <tr>
        <td><input type="text" name="searchST" value="<?php echo $this->_tpl_vars['searchST']; ?>
"></td>
        <td><input type="submit" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="btc bt_success"></td>
      </tr>
      </tbody>
    </table>
	<table class="ToolbarTable table">
		<tr class="ToolbarTR">
			<?php if ($this->_tpl_vars['mode_access'] == 'w'): ?>
			<td>
				<?php echo $this->_tpl_vars['msg']['options']; ?>
 <?php echo $this->_tpl_vars['form']['o1']['html']; ?>

				<a href="<?php echo $this->_tpl_vars['msg']['addL']; ?>
" class="btc bt_success"><?php echo $this->_tpl_vars['msg']['addT']; ?>
</a>
			</td>
			<?php else: ?>
			<td>&nbsp;</td>
			<?php endif; ?>
			<input name="p" value="<?php echo $this->_tpl_vars['p']; ?>
" type="hidden">
			<?php 
			   include('./include/common/pagination.php');
			 ?>
		</tr>
	</table>
	<table class="ListTable">
		<tr class="ListHeader">
			<td class="ListColHeaderPicker"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
			<td class="ListColHeaderLeft"><?php echo $this->_tpl_vars['headerMenu_desc']; ?>
</td>
			<td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['headerMenu_alias']; ?>
</td>
			<td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['headerMenu_retry']; ?>
</td>
			<td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['headerMenu_parent']; ?>
</td>
			<td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['headerMenu_status']; ?>
</td>
			<td class="ListColHeaderRight"><?php echo $this->_tpl_vars['headerMenu_options']; ?>
</td>
		</tr>
		<?php $this->assign('pattern_mode', 0); ?>
		<?php unset($this->_sections['elem']);
$this->_sections['elem']['name'] = 'elem';
$this->_sections['elem']['loop'] = is_array($_loop=$this->_tpl_vars['elemArr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['elem']['show'] = true;
$this->_sections['elem']['max'] = $this->_sections['elem']['loop'];
$this->_sections['elem']['step'] = 1;
$this->_sections['elem']['start'] = $this->_sections['elem']['step'] > 0 ? 0 : $this->_sections['elem']['loop']-1;
if ($this->_sections['elem']['show']) {
    $this->_sections['elem']['total'] = $this->_sections['elem']['loop'];
    if ($this->_sections['elem']['total'] == 0)
        $this->_sections['elem']['show'] = false;
} else
    $this->_sections['elem']['total'] = 0;
if ($this->_sections['elem']['show']):

            for ($this->_sections['elem']['index'] = $this->_sections['elem']['start'], $this->_sections['elem']['iteration'] = 1;
                 $this->_sections['elem']['iteration'] <= $this->_sections['elem']['total'];
                 $this->_sections['elem']['index'] += $this->_sections['elem']['step'], $this->_sections['elem']['iteration']++):
$this->_sections['elem']['rownum'] = $this->_sections['elem']['iteration'];
$this->_sections['elem']['index_prev'] = $this->_sections['elem']['index'] - $this->_sections['elem']['step'];
$this->_sections['elem']['index_next'] = $this->_sections['elem']['index'] + $this->_sections['elem']['step'];
$this->_sections['elem']['first']      = ($this->_sections['elem']['iteration'] == 1);
$this->_sections['elem']['last']       = ($this->_sections['elem']['iteration'] == $this->_sections['elem']['total']);
?>
			<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['pattern'] != $this->_tpl_vars['pattern_value']): ?>
				<?php $this->assign('pattern_mode', 0); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['pattern'] && $this->_tpl_vars['pattern_mode'] == 0): ?>
				<tr class="list_lvl_1">
					<td class="ListColLeft" colspan="7"><b><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['pattern']; ?>
</b></td>
				</tr>
				<?php $this->assign('pattern_mode', 1); ?>
				<?php $this->assign('pattern_value', $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['pattern']); ?>
			<?php endif; ?>
			<tr class=<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['MenuClass']; ?>
>
				<td class="ListColPicker"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_select']; ?>
</td>
				<td class="ListColLeft">
					<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['pattern']): ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_icon'] != ""): ?><img src="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_icon']; ?>
" class="ico-14" style="padding-right:4px;" /><?php endif; ?><a href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link']; ?>
"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_desc']; ?>
</a>
				</td>
				<td class="ListColLeft resizeTitle"><a href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link']; ?>
"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_alias']; ?>
</a></td>
				<td class="ListColCenter"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_retry']; ?>
</td>
				<td class="ListColRight"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_parent']; ?>
</td>
				<td class="ListColCenter"><span class="badge <?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_badge']; ?>
"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_status']; ?>
</span></td>
				<td class="ListColRight" align="right"><?php if ($this->_tpl_vars['mode_access'] == 'w'): ?><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_options']; ?>
<?php else: ?>&nbsp;<?php endif; ?></td>
			</tr>
		<?php endfor; endif; ?>	
	</table>

	<table class="ToolbarTable ToolbarTR table">
		<tr>
			<?php if ($this->_tpl_vars['mode_access'] == 'w'): ?>
			<td class="Toolbar_TDSelectAction_Bottom">
				<?php echo $this->_tpl_vars['msg']['options']; ?>
 <?php echo $this->_tpl_vars['form']['o2']['html']; ?>

				<a href="<?php echo $this->_tpl_vars['msg']['addL']; ?>
" class="btc bt_success"><?php echo $this->_tpl_vars['msg']['addT']; ?>
</a>
			</td>
			<?php else: ?>
			<td>&nbsp;</td>
			<?php endif; ?>
			<input name="p" value="<?php echo $this->_tpl_vars['p']; ?>
" type="hidden">
			<?php 
			   include('./include/common/pagination.php');
			 ?>
		</tr>
	</table>

<input type='hidden' name='o' id='o' value='42'>

<input type='hidden' id='limit' name='limit' value='<?php echo $this->_tpl_vars['limit']; ?>
'>	
<?php echo $this->_tpl_vars['form']['hidden']; ?>

</form>
<?php echo '
<script type=\'text/javascript\'>
    setDisabledRowStyle();
    setOverflowDivToTitle((\'.resizeTitle\'));
</script>
'; ?>