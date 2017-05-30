<?php /* Smarty version 2.6.18, created on 2017-05-24 11:26:22
         compiled from formNagios.ihtml */ ?>
<?php echo $this->_tpl_vars['form']['javascript']; ?>
<?php echo $this->_tpl_vars['javascript']; ?>

<form <?php echo $this->_tpl_vars['form']['attributes']; ?>
>
	<div class="headerTabContainer">
		<ul id="mainnav">
			<li class="a" id='c1'><a href="#" onclick="javascript:montre('1');"><?php echo $this->_tpl_vars['sort1']; ?>
</a></li>
			<li class="b" id='c2'><a href="#" onclick="javascript:montre('2');"><?php echo $this->_tpl_vars['sort2']; ?>
</a></li>
			<li class="b" id='c3'><a href="#" onclick="javascript:montre('3');"><?php echo $this->_tpl_vars['sort3']; ?>
</a></li>
			<li class="b" id='c4'><a href="#" onclick="javascript:montre('4');"><?php echo $this->_tpl_vars['sort4']; ?>
</a></li>
			<li class="b" id='c5'><a href="#" onclick="javascript:montre('5');"><?php echo $this->_tpl_vars['sort5']; ?>
</a></li>
			<li class="b" id='c6'><a href="#" onclick="javascript:montre('6');"><?php echo $this->_tpl_vars['sort6']; ?>
</a></li>
			<li class="b" id='c7'><a href="#" onclick="javascript:montre('7');"><?php echo $this->_tpl_vars['sort7']; ?>
</a></li>
		</ul>
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
                <h4><?php echo $this->_tpl_vars['form']['header']['information']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="nagios_name" />&nbsp;<?php echo $this->_tpl_vars['form']['nagios_name']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_name']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="nagios_activate" />&nbsp;<?php echo $this->_tpl_vars['form']['nagios_activate']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_activate']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="nagios_server_id" />&nbsp;<?php echo $this->_tpl_vars['form']['nagios_server_id']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_server_id']['html']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Folders']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="cfg_dir" />&nbsp;<?php echo $this->_tpl_vars['form']['cfg_dir']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['cfg_dir']['html']; ?>
</td></tr>
                        <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="cfg_file" />&nbsp;<?php echo $this->_tpl_vars['form']['cfg_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['cfg_file']['html']; ?>
</td></tr>
            
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Files']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="status_file" />&nbsp;<?php echo $this->_tpl_vars['form']['status_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['status_file']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="status_update_interval" />&nbsp;<?php echo $this->_tpl_vars['form']['status_update_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['status_update_interval']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="log_file" />&nbsp;<?php echo $this->_tpl_vars['form']['log_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_file']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="temp_file" />&nbsp;<?php echo $this->_tpl_vars['form']['temp_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['temp_file']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="lock_file" />&nbsp;<?php echo $this->_tpl_vars['form']['lock_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['lock_file']['html']; ?>
</td></tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['ResultCache']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="check_result_path" />&nbsp;<?php echo $this->_tpl_vars['form']['check_result_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_result_path']['html']; ?>
</td></tr>
            <tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_check_result_path" />&nbsp;<?php echo $this->_tpl_vars['form']['use_check_result_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_check_result_path']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="max_check_result_file_age" />&nbsp;<?php echo $this->_tpl_vars['form']['max_check_result_file_age']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['max_check_result_file_age']['html']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['ExternalCommandes']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="check_external_commands" />&nbsp;<?php echo $this->_tpl_vars['form']['check_external_commands']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_external_commands']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="command_check_interval" />&nbsp;<?php echo $this->_tpl_vars['form']['command_check_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['command_check_interval']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="command_file" />&nbsp;<?php echo $this->_tpl_vars['form']['command_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['command_file']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="external_command_buffer_slots" />&nbsp;<?php echo $this->_tpl_vars['form']['external_command_buffer_slots']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['external_command_buffer_slots']['html']; ?>
</td></tr>
	
		 	<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['form']['header']['information']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField">&nbsp;<?php echo $this->_tpl_vars['form']['nagios_comment']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_comment']['html']; ?>
</td></tr>
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
</td></tr>
			<?php endif; ?>
		</table>
	</div>	
	<div id='tab2' class='tab'>
		<table class="formTable table">
		 	<tr class="ListHeader">
              <td class="FormHeader" colspan="2">
                <h3>| <?php echo $this->_tpl_vars['form']['header']['title']; ?>
</h3>
              </td>
            </tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['HostCheckOptions']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_aggressive_host_checking" />&nbsp;<?php echo $this->_tpl_vars['form']['use_aggressive_host_checking']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_aggressive_host_checking']['html']; ?>
<font color='red' style='padding-left:120px;'><?php echo $this->_tpl_vars['aggressive_host_warning']; ?>
</font></td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="enable_predictive_host_dependency_checks" />&nbsp;<?php echo $this->_tpl_vars['form']['enable_predictive_host_dependency_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['enable_predictive_host_dependency_checks']['html']; ?>
</td></tr>
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['ServiceCheckOptions']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="check_for_orphaned_services" />&nbsp;<?php echo $this->_tpl_vars['form']['check_for_orphaned_services']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_for_orphaned_services']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="check_for_orphaned_hosts" />&nbsp;<?php echo $this->_tpl_vars['form']['check_for_orphaned_hosts']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_for_orphaned_hosts']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="soft_state_dependencies" />&nbsp;<?php echo $this->_tpl_vars['form']['soft_state_dependencies']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['soft_state_dependencies']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="enable_predictive_service_dependency_checks" />&nbsp;<?php echo $this->_tpl_vars['form']['enable_predictive_service_dependency_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['enable_predictive_service_dependency_checks']['html']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['EventHandler']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="global_host_event_handler" />&nbsp;<?php echo $this->_tpl_vars['form']['global_host_event_handler']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['global_host_event_handler']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="global_service_event_handler">&nbsp;<?php echo $this->_tpl_vars['form']['global_service_event_handler']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['global_service_event_handler']['html']; ?>
</td></tr>
		 	
		 	<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Freshness']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="check_service_freshness">&nbsp;<?php echo $this->_tpl_vars['form']['check_service_freshness']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_service_freshness']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="service_freshness_check_interval">&nbsp;<?php echo $this->_tpl_vars['form']['service_freshness_check_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_freshness_check_interval']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="check_host_freshness">&nbsp;<?php echo $this->_tpl_vars['form']['check_host_freshness']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_host_freshness']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_freshness_check_interval">&nbsp;<?php echo $this->_tpl_vars['form']['host_freshness_check_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_freshness_check_interval']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
	
		 	<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="additional_freshness_latency">&nbsp;<?php echo $this->_tpl_vars['form']['additional_freshness_latency']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['additional_freshness_latency']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
		 	
		 	<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['FlappingOptions']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="enable_flap_detection">&nbsp;<?php echo $this->_tpl_vars['form']['enable_flap_detection']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['enable_flap_detection']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="low_service_flap_threshold">&nbsp;<?php echo $this->_tpl_vars['form']['low_service_flap_threshold']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['low_service_flap_threshold']['html']; ?>
&nbsp;&nbsp;%</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="high_service_flap_threshold">&nbsp;<?php echo $this->_tpl_vars['form']['high_service_flap_threshold']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['high_service_flap_threshold']['html']; ?>
&nbsp;&nbsp;%</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="low_host_flap_threshold">&nbsp;<?php echo $this->_tpl_vars['form']['low_host_flap_threshold']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['low_host_flap_threshold']['html']; ?>
&nbsp;&nbsp;%</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="high_host_flap_threshold">&nbsp;<?php echo $this->_tpl_vars['form']['high_host_flap_threshold']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['high_host_flap_threshold']['html']; ?>
&nbsp;&nbsp;%</td></tr>
		 	
		 	<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['PostCheck']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="obsess_over_services">&nbsp;<?php echo $this->_tpl_vars['form']['obsess_over_services']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['obsess_over_services']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="ocsp_command">&nbsp;<?php echo $this->_tpl_vars['form']['ocsp_command']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ocsp_command']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="obsess_over_hosts">&nbsp;<?php echo $this->_tpl_vars['form']['obsess_over_hosts']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['obsess_over_hosts']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="ochp_command">&nbsp;<?php echo $this->_tpl_vars['form']['ochp_command']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ochp_command']['html']; ?>
</td></tr>
		 	<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['MiscOptions']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="enable_notifications">&nbsp;<?php echo $this->_tpl_vars['form']['enable_notifications']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['enable_notifications']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="execute_service_checks">&nbsp;<?php echo $this->_tpl_vars['form']['execute_service_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['execute_service_checks']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="accept_passive_service_checks">&nbsp;<?php echo $this->_tpl_vars['form']['accept_passive_service_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['accept_passive_service_checks']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="enable_event_handlers">&nbsp;<?php echo $this->_tpl_vars['form']['enable_event_handlers']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['enable_event_handlers']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="execute_host_checks">&nbsp;<?php echo $this->_tpl_vars['form']['execute_host_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['execute_host_checks']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="accept_passive_host_checks">&nbsp;<?php echo $this->_tpl_vars['form']['accept_passive_host_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['accept_passive_host_checks']['html']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['PassivOptions']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="translate_passive_host_checks">&nbsp;<?php echo $this->_tpl_vars['form']['translate_passive_host_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['translate_passive_host_checks']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="passive_host_checks_are_soft">&nbsp;<?php echo $this->_tpl_vars['form']['passive_host_checks_are_soft']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['passive_host_checks_are_soft']['html']; ?>
</td></tr>
			
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
</td></tr>
			<?php endif; ?>
		</table>
	</div>	
	<div id='tab3' class='tab'>
		<table class="formTable table">
		 	<tr class="ListHeader">
              <td class="FormHeader" colspan="2">
                <h3>| <?php echo $this->_tpl_vars['form']['header']['title']; ?>
</h3>
              </td>
            </tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['LoggingOptions']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_syslog">&nbsp;<?php echo $this->_tpl_vars['form']['use_syslog']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_syslog']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="log_notifications">&nbsp;<?php echo $this->_tpl_vars['form']['log_notifications']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_notifications']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="log_service_retries">&nbsp;<?php echo $this->_tpl_vars['form']['log_service_retries']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_service_retries']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="log_host_retries">&nbsp;<?php echo $this->_tpl_vars['form']['log_host_retries']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_host_retries']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="log_event_handlers">&nbsp;<?php echo $this->_tpl_vars['form']['log_event_handlers']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_event_handlers']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="log_initial_states">&nbsp;<?php echo $this->_tpl_vars['form']['log_initial_states']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_initial_states']['html']; ?>
<font color='red' style='padding-left:120px;'><?php echo $this->_tpl_vars['initial_state_warning']; ?>
</font></td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="log_external_commands">&nbsp;<?php echo $this->_tpl_vars['form']['log_external_commands']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_external_commands']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="log_passive_checks">&nbsp;<?php echo $this->_tpl_vars['form']['log_passive_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_passive_checks']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="log_pid">&nbsp;<?php echo $this->_tpl_vars['form']['log_pid']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_pid']['html']; ?>
</td></tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Timouts']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_check_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['service_check_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_check_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_check_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['host_check_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_check_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="event_handler_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['event_handler_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['event_handler_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="notification_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['notification_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['notification_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="perfdata_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['perfdata_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['perfdata_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="ocsp_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['ocsp_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ocsp_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="ochp_timeout">&nbsp;<?php echo $this->_tpl_vars['form']['ochp_timeout']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['ochp_timeout']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
				
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Archives']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="log_rotation_method">&nbsp;<?php echo $this->_tpl_vars['form']['log_rotation_method']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_rotation_method']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="log_archive_path">&nbsp;<?php echo $this->_tpl_vars['form']['log_archive_path']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['log_archive_path']['html']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['StatesRetention']; ?>
</h4>
              </td>
            </tr>	
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="retain_state_information">&nbsp;<?php echo $this->_tpl_vars['form']['retain_state_information']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retain_state_information']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="state_retention_file">&nbsp;<?php echo $this->_tpl_vars['form']['state_retention_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['state_retention_file']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="retention_update_interval">&nbsp;<?php echo $this->_tpl_vars['form']['retention_update_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retention_update_interval']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Minutes']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="use_retained_program_state">&nbsp;<?php echo $this->_tpl_vars['form']['use_retained_program_state']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_retained_program_state']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_retained_scheduling_info">&nbsp;<?php echo $this->_tpl_vars['form']['use_retained_scheduling_info']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_retained_scheduling_info']['html']; ?>
</td></tr>
                        
                        <tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="retained_contact_host_attribute_mask">&nbsp;<?php echo $this->_tpl_vars['form']['retained_contact_host_attribute_mask']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retained_contact_host_attribute_mask']['html']; ?>
</td></tr>
                        <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="retained_contact_service_attribute_mask">&nbsp;<?php echo $this->_tpl_vars['form']['retained_contact_service_attribute_mask']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retained_contact_service_attribute_mask']['html']; ?>
</td></tr>
                        <tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="retained_process_host_attribute_mask">&nbsp;<?php echo $this->_tpl_vars['form']['retained_process_host_attribute_mask']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retained_process_host_attribute_mask']['html']; ?>
</td></tr>
                        <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="retained_process_service_attribute_mask">&nbsp;<?php echo $this->_tpl_vars['form']['retained_process_service_attribute_mask']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retained_process_service_attribute_mask']['html']; ?>
</td></tr>
                        <tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="retained_host_attribute_mask">&nbsp;<?php echo $this->_tpl_vars['form']['retained_host_attribute_mask']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retained_host_attribute_mask']['html']; ?>
</td></tr>
                        <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="retained_service_attribute_mask">&nbsp;<?php echo $this->_tpl_vars['form']['retained_service_attribute_mask']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['retained_service_attribute_mask']['html']; ?>
</td></tr>
	
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
</td></tr>
			<?php endif; ?>
		</table>
	</div>	
	<div id='tab4' class='tab'>
		 <table class="formTable table">
		 	<tr class="ListHeader">
              <td class="FormHeader" colspan="2">
                <h3>| <?php echo $this->_tpl_vars['form']['header']['title']; ?>
</h3>
              </td>
            </tr>
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['BrokerModule']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one">
				<td class="FormRowField">
				<div style="text-decoration: underline;"><?php echo $this->_tpl_vars['form']['multiple_broker_module']['label']; ?>
</div>
				<?php echo $this->_tpl_vars['form']['bkTextMultiple']['label']; ?>
	
				</td>
				<td class="FormRowValue" id="multipleBroker">
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "file:".($this->_tpl_vars['centreon_path'])."/www/include/common/templates/clone.ihtml", 'smarty_include_vars' => array('cloneId' => 'broker','cloneSet' => $this->_tpl_vars['cloneSet'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</td>
			</tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="event_broker_options">&nbsp;<?php echo $this->_tpl_vars['form']['event_broker_options']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['event_broker_options']['html']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Perfdata']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="process_performance_data">&nbsp;<?php echo $this->_tpl_vars['form']['process_performance_data']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['process_performance_data']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_perfdata_command">&nbsp;<?php echo $this->_tpl_vars['form']['host_perfdata_command']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_perfdata_command']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_perfdata_command">&nbsp;<?php echo $this->_tpl_vars['form']['service_perfdata_command']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_perfdata_command']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_perfdata_file">&nbsp;<?php echo $this->_tpl_vars['form']['host_perfdata_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_perfdata_file']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_perfdata_file">&nbsp;<?php echo $this->_tpl_vars['form']['service_perfdata_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_perfdata_file']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_perfdata_file_template">&nbsp;<?php echo $this->_tpl_vars['form']['host_perfdata_file_template']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_perfdata_file_template']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_perfdata_file_template">&nbsp;<?php echo $this->_tpl_vars['form']['service_perfdata_file_template']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_perfdata_file_template']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_perfdata_file_mode">&nbsp;<?php echo $this->_tpl_vars['form']['host_perfdata_file_mode']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_perfdata_file_mode']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_perfdata_file_mode">&nbsp;<?php echo $this->_tpl_vars['form']['service_perfdata_file_mode']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_perfdata_file_mode']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_perfdata_file_processing_interval">&nbsp;<?php echo $this->_tpl_vars['form']['host_perfdata_file_processing_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_perfdata_file_processing_interval']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_perfdata_file_processing_interval">&nbsp;<?php echo $this->_tpl_vars['form']['service_perfdata_file_processing_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_perfdata_file_processing_interval']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="host_perfdata_file_processing_command">&nbsp;<?php echo $this->_tpl_vars['form']['host_perfdata_file_processing_command']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_perfdata_file_processing_command']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_perfdata_file_processing_command">&nbsp;<?php echo $this->_tpl_vars['form']['service_perfdata_file_processing_command']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_perfdata_file_processing_command']['html']; ?>
</td></tr>
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
</td></tr>
			<?php endif; ?>
		</table>
	</div>	
	<div id='tab5' class='tab'>
		<table class="formTable table">
		 	<tr class="ListHeader">
              <td class="FormHeader" colspan="2">
                <h3>| <?php echo $this->_tpl_vars['form']['header']['title']; ?>
</h3>
              </td>
            </tr>
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['TimeUnit']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="sleep_time">&nbsp;<?php echo $this->_tpl_vars['form']['sleep_time']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['sleep_time']['html']; ?>
</td></tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['HostCheckSchedulingOptions']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="host_inter_check_delay_method">&nbsp;<?php echo $this->_tpl_vars['form']['host_inter_check_delay_method']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['host_inter_check_delay_method']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="max_host_check_spread">&nbsp;<?php echo $this->_tpl_vars['form']['max_host_check_spread']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['max_host_check_spread']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Minutes']; ?>
</td></tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['ServiceCheckSchedulingOptions']; ?>
</h4>
              </td>
          </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_inter_check_delay_method">&nbsp;<?php echo $this->_tpl_vars['form']['service_inter_check_delay_method']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_inter_check_delay_method']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="max_service_check_spread">&nbsp;<?php echo $this->_tpl_vars['form']['max_service_check_spread']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['max_service_check_spread']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Minutes']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="service_interleave_factor">&nbsp;<?php echo $this->_tpl_vars['form']['service_interleave_factor']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['service_interleave_factor']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="max_concurrent_checks">&nbsp;<?php echo $this->_tpl_vars['form']['max_concurrent_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['max_concurrent_checks']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="check_result_reaper_frequency">&nbsp;<?php echo $this->_tpl_vars['form']['check_result_reaper_frequency']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['check_result_reaper_frequency']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
                        <tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="max_check_result_reaper_time">&nbsp;<?php echo $this->_tpl_vars['form']['max_check_result_reaper_time']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['max_check_result_reaper_time']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['CachedCheck']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="cached_host_check_horizon">&nbsp;<?php echo $this->_tpl_vars['form']['cached_host_check_horizon']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['cached_host_check_horizon']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="cached_service_check_horizon">&nbsp;<?php echo $this->_tpl_vars['form']['cached_service_check_horizon']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['cached_service_check_horizon']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
	
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['AutoRescheduling']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="auto_reschedule_checks">&nbsp;<?php echo $this->_tpl_vars['form']['auto_reschedule_checks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['auto_reschedule_checks']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="auto_rescheduling_interval">&nbsp;<?php echo $this->_tpl_vars['form']['auto_rescheduling_interval']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['auto_rescheduling_interval']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="auto_rescheduling_window">&nbsp;<?php echo $this->_tpl_vars['form']['auto_rescheduling_window']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['auto_rescheduling_window']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Seconds']; ?>
</td></tr>
			
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['Optimization']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_large_installation_tweaks">&nbsp;<?php echo $this->_tpl_vars['form']['use_large_installation_tweaks']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_large_installation_tweaks']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="enable_environment_macros">&nbsp;<?php echo $this->_tpl_vars['form']['enable_environment_macros']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['enable_environment_macros']['html']; ?>
</td></tr>
            <tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_setpgid">&nbsp;<?php echo $this->_tpl_vars['form']['use_setpgid']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_setpgid']['html']; ?>
</td></tr>
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
</td></tr>
			<?php endif; ?>			
		</table>
	</div>	
	<div id='tab6' class='tab'>
		<table class="formTable table">
		 	<tr class="ListHeader">
              <td class="FormHeader" colspan="2">
                <h3>| <?php echo $this->_tpl_vars['form']['header']['title']; ?>
</h3>
              </td>
            </tr>
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2"><h4><?php echo $this->_tpl_vars['Advanced']; ?>
</h4></td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="nagios_user">&nbsp;<?php echo $this->_tpl_vars['form']['nagios_user']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_user']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="nagios_group">&nbsp;<?php echo $this->_tpl_vars['form']['nagios_group']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_group']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="date_format">&nbsp;<?php echo $this->_tpl_vars['form']['date_format']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['date_format']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="illegal_object_name_chars">&nbsp;<?php echo $this->_tpl_vars['form']['illegal_object_name_chars']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['illegal_object_name_chars']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="illegal_macro_output_chars">&nbsp;<?php echo $this->_tpl_vars['form']['illegal_macro_output_chars']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['illegal_macro_output_chars']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="use_regexp_matching">&nbsp;<?php echo $this->_tpl_vars['form']['use_regexp_matching']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_regexp_matching']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="use_true_regexp_matching">&nbsp;<?php echo $this->_tpl_vars['form']['use_true_regexp_matching']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['use_true_regexp_matching']['html']; ?>
</td></tr>
			<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><h4><?php echo $this->_tpl_vars['AdminInfo']; ?>
</h4></td></tr>		
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="admin_email">&nbsp;<?php echo $this->_tpl_vars['form']['admin_email']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['admin_email']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="admin_pager">&nbsp;<?php echo $this->_tpl_vars['form']['admin_pager']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['admin_pager']['html']; ?>
</td></tr>
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
</td></tr>
			<?php endif; ?>
		</table>
	</div>
	<div id='tab7' class='tab'>
		<table class="formTable table">
		 	<tr class="ListHeader">
              <td class="FormHeader" colspan="2">
                <h3>| <?php echo $this->_tpl_vars['Debug']; ?>
</h3>
              </td>
            </tr>
			<tr class="list_lvl_1">
              <td class="ListColLvl1_name" colspan="2">
                <h4><?php echo $this->_tpl_vars['DebugConfiguration']; ?>
</h4>
              </td>
            </tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="debug_file">&nbsp;<?php echo $this->_tpl_vars['form']['debug_file']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['debug_file']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="nagios_debug_level">&nbsp;<?php echo $this->_tpl_vars['form']['nagios_debug_level']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['nagios_debug_level']['html']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="debug_verbosity">&nbsp;<?php echo $this->_tpl_vars['form']['debug_verbosity']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['debug_verbosity']['html']; ?>
</td></tr>
			<tr class="list_two"><td class="FormRowField"><img class="helpTooltip" name="max_debug_file_size">&nbsp;<?php echo $this->_tpl_vars['form']['max_debug_file_size']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['max_debug_file_size']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['Bytes']; ?>
</td></tr>
			<tr class="list_one"><td class="FormRowField"><img class="helpTooltip" name="daemon_dumps_core">&nbsp;<?php echo $this->_tpl_vars['form']['daemon_dumps_core']['label']; ?>
</td><td class="FormRowValue"><?php echo $this->_tpl_vars['form']['daemon_dumps_core']['html']; ?>
&nbsp;</td></tr>
			<?php if ($this->_tpl_vars['o'] == 'a' || $this->_tpl_vars['o'] == 'c'): ?>
				<tr class="list_lvl_1"><td class="ListColLvl1_name" colspan="2"><?php echo $this->_tpl_vars['form']['required']['_note']; ?>
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
<?php echo $this->_tpl_vars['helptext']; ?>

<?php echo '
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery(\'input[name=event_broker_options]\').change(function(e) {
        var $this = jQuery(this);
        if ($this.attr(\'value\') != \'-1\') {
            if (!jQuery(\'#broker_options_warning\').length) {
                $this.after(jQuery("<div/>", {
                    id: \'broker_options_warning\',
                    html: \''; ?>
<?php echo $this->_tpl_vars['BrokerOptionsWarning']; ?>
<?php echo '\',
                    style: \'color: #FF0000\'
                }));
            }
        } else {
            jQuery(\'#broker_options_warning\').remove();
        }
    });
    jQuery(\'input[name=event_broker_options]\').trigger(\'change\');
});
</script>
'; ?>
