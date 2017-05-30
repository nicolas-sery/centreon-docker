<?php /* Smarty version 2.6.18, created on 2017-05-24 09:39:59
         compiled from formModule.ihtml */ ?>
 <table class="formTable table">
	<tr class="ListHeader">
		<td class="FormHeader" colspan="2">
			<h3>| <?php echo $this->_tpl_vars['headerMenu_title']; ?>
</h3>
		</td>
	</tr>
 	<tr class="list_one">
 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_rname']; ?>
</td>
 		<td class="FormRowValue"><?php echo $this->_tpl_vars['module_rname']; ?>
</td>
 	</tr>
 	<tr class="list_two">
 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_release']; ?>
</td>
 		<td class="FormRowValue"><?php echo $this->_tpl_vars['module_release']; ?>
</td>
 	</tr>
 	<tr class="list_one">
 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_author']; ?>
</td>
 		<td class="FormRowValue"><?php echo $this->_tpl_vars['module_author']; ?>
</td>
 	</tr>
 	<tr class="list_two">
 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_infos']; ?>
</td>
 		<td class="FormRowValue"><?php echo $this->_tpl_vars['module_infos']; ?>
</td>
 	</tr>
 	<?php if ($this->_tpl_vars['module_infosTxt']): ?>
	 	<tr class="list_one">
	 		<td class="FormRowField" colspan="2">
	 			<?php echo $this->_tpl_vars['module_infosTxt']; ?>

	 		</td>
	 	</tr>
 	<?php endif; ?>
 	<?php if ($this->_tpl_vars['form1']['install']['html'] || $this->_tpl_vars['form1']['list']['html']): ?>
 	<tr class="list_one">
 		<td colspan="2" align="center">
 			<?php if ($this->_tpl_vars['output1']): ?>
 				<?php echo $this->_tpl_vars['output1']; ?>
<br />
 			<?php endif; ?>
 			<?php if ($this->_tpl_vars['output2']): ?>
 				<?php echo $this->_tpl_vars['output2']; ?>
<br />
 			<?php endif; ?>
 			<?php if ($this->_tpl_vars['output3']): ?>
 				<?php echo $this->_tpl_vars['output3']; ?>
<br />
 			<?php endif; ?>
 			<?php if ($this->_tpl_vars['output4']): ?>
 				<?php echo $this->_tpl_vars['output4']; ?>
<br />
 			<?php endif; ?>
 			 <form <?php echo $this->_tpl_vars['form1']['attributes']; ?>
>	
	 		<br />&nbsp;<?php echo $this->_tpl_vars['form1']['install']['html']; ?>
&nbsp<?php echo $this->_tpl_vars['form1']['list']['html']; ?>
<br />
	 		 <?php echo $this->_tpl_vars['form1']['hidden']; ?>

	 		 </form>
  		</td>
 	</tr>
 	<?php endif; ?>
 	<?php if ($this->_tpl_vars['form']['list']['html']): ?>
	 	<tr class="list_one">
	 		<td colspan="2" align="center">
	 			<form <?php echo $this->_tpl_vars['form']['attributes']; ?>
>
	 			<br />
	 			<?php echo $this->_tpl_vars['form']['list']['html']; ?>

	 			 </form>
	 		</td>
	 	</tr>
	 <?php endif; ?>		 		 	
 </table>


<br /><br />
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
 	<?php echo $this->_tpl_vars['form']['javascript']; ?>

 	<form <?php echo $this->_tpl_vars['form']['attributes']; ?>
>
	  <table class="formTable table">
		<tr class="ListHeader">
			<td class="FormHeader" colspan="2">
				<h3>| <?php echo $this->_tpl_vars['headerMenu_title2']; ?>
</h3>
			</td>
		</tr>
	 	<tr class="list_one">
	 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_rname']; ?>
</td>
	 		<td class="FormRowValue"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_rname']; ?>
</td>
	 	</tr>
	 	<tr class="list_two">
	 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_release_from']; ?>
</td>
	 		<td class="FormRowValue"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_release_from']; ?>
</td>
	 	</tr>
	 	<tr class="list_one">
	 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_release_to']; ?>
</td>
	 		<td class="FormRowValue"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_release_to']; ?>
</td>
	 	</tr>
	 	<tr class="list_two">
	 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_author']; ?>
</td>
	 		<td class="FormRowValue"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_author']; ?>
</td>
	 	</tr>
	 	<tr class="list_one">
	 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_infos']; ?>
</td>
	 		<td class="FormRowValue"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_infos']; ?>
</td>
	 	</tr>
	 	<tr class="list_two">
	 		<td class="FormRowField"><?php echo $this->_tpl_vars['headerMenu_isvalid']; ?>
</td>
	 		<td class="FormRowValue"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_is_validUp']; ?>
</td>
	 	</tr>
	 	<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_infosTxt']): ?>
		 	<tr class="list_one">
		 		<td class="FormRowField" colspan="2">
		 			<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_infosTxt']; ?>

		 		</td>
		 	</tr>
	 	<?php endif; ?>
	 	<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['upgrade_choice']): ?>
		 	<tr class="list_one">
		 		<td colspan="2" align="center"><?php echo $this->_tpl_vars['form']['upgrade']['html']; ?>
&nbsp<?php echo $this->_tpl_vars['form']['list']['html']; ?>
</td>
		 	</tr>
		 <?php endif; ?>	 		 	
	 </table>
	 <?php echo $this->_tpl_vars['form']['hidden']; ?>

	</form>
	 <br />
 <?php endfor; endif; ?>