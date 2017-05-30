<?php /* Smarty version 2.6.18, created on 2017-05-24 11:26:07
         compiled from formServers.ihtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'formServers.ihtml', 74, false),)), $this); ?>
<?php echo $this->_tpl_vars['form']['javascript']; ?>

<form <?php echo $this->_tpl_vars['form']['attributes']; ?>
>
	<div id="validFormTop">
	<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
		<p class="oreonbutton"><?php echo $this->_tpl_vars['form']['submitC']['html']; ?>
<?php echo $this->_tpl_vars['form']['submitA']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['reset']['html']; ?>
</p>
	<?php else: ?>
		<p class="oreonbutton"><?php echo $this->_tpl_vars['form']['change']['html']; ?>
</p>
	<?php endif; ?>
	</div>
	<div id='tab1' class='tab'>
	 <table class="formTable table">
	 	<tr class="ListHeader">
      <td class="FormHeader" colspan="2">
        <h3>| <?php echo $this->_tpl_vars['form']['header']['title']; ?>
</h3>
      </td>
    </tr>
	 	<tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['Server_Informations']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="name"> <?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['name']['html']; ?>
</td></tr>
    <tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['genOpt_nagios_version']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="ns_ip_address"> <?php echo $this->_tpl_vars['form']['ns_ip_address']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ns_ip_address']['html']; ?>
</td></tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="localhost"> <?php echo $this->_tpl_vars['form']['localhost']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['localhost']['html']; ?>
</td></tr>
		<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="is_default"> <?php echo $this->_tpl_vars['form']['is_default']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['is_default']['html']; ?>
</td></tr>
		<tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['SSH_Informations']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="ssh_port"> <?php echo $this->_tpl_vars['form']['ssh_port']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ssh_port']['html']; ?>
</td></tr>
		<tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['Nagios_Informations']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="init_script"> <?php echo $this->_tpl_vars['form']['init_script']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['init_script']['html']; ?>
</td></tr>
		<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="nagios_bin"> <?php echo $this->_tpl_vars['form']['nagios_bin']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_bin']['html']; ?>
</td></tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="nagiostats_bin"> <?php echo $this->_tpl_vars['form']['nagiostats_bin']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagiostats_bin']['html']; ?>
</td></tr>
		<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="nagios_perfdata"> <?php echo $this->_tpl_vars['form']['nagios_perfdata']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_perfdata']['html']; ?>
</td></tr>
		<tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['CentreonBroker']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="centreonbroker_cfg_path"> <?php echo $this->_tpl_vars['form']['centreonbroker_cfg_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['centreonbroker_cfg_path']['html']; ?>
</td></tr>
		<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="centreonbroker_module_path"> <?php echo $this->_tpl_vars['form']['centreonbroker_module_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['centreonbroker_module_path']['html']; ?>
</td></tr>
         <tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="centreonbroker_logs_path"> <?php echo $this->_tpl_vars['form']['centreonbroker_logs_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['centreonbroker_logs_path']['html']; ?>
</td></tr>
    <tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['CentreonConnector']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="centreonconnector_path"> <?php echo $this->_tpl_vars['form']['centreonconnector_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['centreonconnector_path']['html']; ?>
</td></tr>
		<tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['Centreontrapd']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="centreontrapd_init_script"> <?php echo $this->_tpl_vars['form']['init_script_centreontrapd']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['init_script_centreontrapd']['html']; ?>
</td></tr>
    <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="snmp_trapd_path_conf"> <?php echo $this->_tpl_vars['form']['snmp_trapd_path_conf']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['snmp_trapd_path_conf']['html']; ?>
</td></tr>
		<tr class="list_lvl_1">
      <td class="ListColLvl1_name" colspan="2">
        <h4><?php echo $this->_tpl_vars['form']['header']['Misc']; ?>
</h4>
      </td>
    </tr>
		<tr class="list_one">
      <td class="FormRowField">
          <img class="helpTooltip" name="pollercmd"> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post-Restart command<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </td>
      <td class="FormRowValue">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "file:".($this->_tpl_vars['centreon_path'])."/www/include/common/templates/clone.ihtml", 'smarty_include_vars' => array('cloneId' => 'pollercmd','cloneSet' => $this->_tpl_vars['cloneSetCmd'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
    <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="ns_activate"> <?php echo $this->_tpl_vars['form']['ns_activate']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ns_activate']['html']; ?>
</td></tr>
		<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
			<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required_note']; ?>
</td></tr>
		<?php endif; ?>
	</table>
	</div>
	<div id="validForm">
	<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
		<p class="oreonbutton"><?php echo $this->_tpl_vars['form']['submitC']['html']; ?>
<?php echo $this->_tpl_vars['form']['submitA']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['reset']['html']; ?>
</p>
	<?php else: ?>
		<p class="oreonbutton"><?php echo $this->_tpl_vars['form']['change']['html']; ?>
</p>
	<?php endif; ?>
	</div>
	<?php echo $this->_tpl_vars['form']['hidden']; ?>

</form>
<script type="text/javascript">
var engines = <?php echo '{'; ?>

<?php $_from = $this->_tpl_vars['engines']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['engines'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['engines']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ename'] => $this->_tpl_vars['engine']):
        $this->_foreach['engines']['iteration']++;
?>
  "<?php echo $this->_tpl_vars['ename']; ?>
": <?php echo '{'; ?>

<?php $_from = $this->_tpl_vars['engine']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['engine'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['engine']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
        $this->_foreach['engine']['iteration']++;
?>
    "<?php echo $this->_tpl_vars['k']; ?>
": "<?php echo $this->_tpl_vars['v']; ?>
"<?php if (! ($this->_foreach['engine']['iteration'] == $this->_foreach['engine']['total'])): ?>,<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
  <?php echo '}'; ?>
<?php if (! ($this->_foreach['engines']['iteration'] == $this->_foreach['engines']['total'])): ?>,<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>
<?php echo '};

function update_engine_values(e) {
    var ename = jQuery(this).attr("value");

    jQuery.each(engines[ename], function(key, value) {
        if (key == "name") {
            return;
        }
        jQuery("input[name=" + key + "]").attr("value", value);
    });
}'; ?>

<?php if ($this->_tpl_vars['o'] == 'a'): ?><?php echo '
jQuery(document).ready(function() {
    jQuery("select[name=monitoring_engine]").change(update_engine_values);
});'; ?>
<?php endif; ?>
</script>
<?php echo $this->_tpl_vars['helptext']; ?>
