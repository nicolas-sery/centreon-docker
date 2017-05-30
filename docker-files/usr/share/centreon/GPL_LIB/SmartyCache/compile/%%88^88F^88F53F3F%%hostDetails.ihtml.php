<?php /* Smarty version 2.6.18, created on 2017-05-24 10:13:37
         compiled from hostDetails.ihtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'hostDetails.ihtml', 26, false),array('modifier', 'explode', 'hostDetails.ihtml', 85, false),array('modifier', 'urlencode', 'hostDetails.ihtml', 260, false),array('function', 'cycle', 'hostDetails.ihtml', 330, false),)), $this); ?>
<link href="./include/common/javascript/charts/c3.min.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="./include/common/javascript/tool.js"></script>
<table class="table">
    <tr>
        <td style="width: 70%;vertical-align:top; padding-right:8px;">
            <table class="table"> <!-- Left Table -->
                <tr class='ListHeader'> <!-- Header -->
                    <td class="ListColHeaderLeft <?php echo $this->_tpl_vars['host_data']['status_class']; ?>
" >
                        <h3 style="color: #fff;">
                            <img src='./img/icons/host.png' width="16px" style="vertical-align:middle;" <?php if ($this->_tpl_vars['h_ext_icon_image_alt']): ?> alt='<?php echo $this->_tpl_vars['h_ext_icon_image_alt']; ?>
'<?php endif; ?>> <?php echo $this->_tpl_vars['host_data']['name']; ?>
 / <?php echo $this->_tpl_vars['host_data']['alias']; ?>
 <span>[<?php echo $this->_tpl_vars['host_data']['address']; ?>
]</span>
                        </h3>
                        <?php if ($this->_tpl_vars['sv_ext_notes_url']): ?>
                        <a href="<?php echo $this->_tpl_vars['sv_ext_notes_url']; ?>
" target="_blank">
                            <img src='./img/icons/link.png' class="ico-14" style="vertical-align:middle;" title="<?php if ($this->_tpl_vars['sv_ext_notes']): ?> <?php echo $this->_tpl_vars['sv_ext_notes']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['sv_ext_notes_url']; ?>
 <?php endif; ?>">
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td style='vertical-align:top; padding-bottom: 8px !important;'></td>
                </tr>
                <tr>
                    <td>
                        <div  class="headerTabContainer">
                            <ul id="mainnav">
                                <li class="a" id='c1'><a href="#" style='cursor:pointer' onclick="javascript:montre('1');"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Service Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                                <li class="b" id='c2'><a href="#" style='cursor:pointer' onclick="javascript:montre('2');"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Performances<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                                <li class="b" id='c3'><a href="#" style='cursor:pointer' onclick="javascript:montre('3');"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Host Informations<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                                <li class="b" id='c4'><a href="#" style='cursor:pointer' onclick="javascript:montre('4');"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                            </ul>
                        </div>
                        <div id='tab1' class='tab'>
                            <div id="forAjax" >
                                <table class="ListTable">
                                    <tr class='list_lvl_1'>
                                        <td class="ListColHeaderLeft FormHeader" colspan="7"><h4><?php echo $this->_tpl_vars['m_mon_host_services']; ?>
</h4></td>
                                    </tr>
                                    <tr class='ListHeader'>
                                        <td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['header_service_description']; ?>
</td>
                                        <td></td>
                                        <td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['header_service_status']; ?>
</td>
                                        <td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['header_service_duration']; ?>
</td>
                                        <td class="ListColHeaderCenter"><?php echo $this->_tpl_vars['header_service_output']; ?>
</td>
                                    </tr>
                                    <?php $_from = $this->_tpl_vars['hosts_services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hs']):
?>
                                    <tr class="<?php echo $this->_tpl_vars['hs']['line_class']; ?>
">
                                        <td class="ListColLeft ListColNoWrap ColPopup" style='white-space:nowrap'>
                                            <a href="./main.php?p=20201&o=svcd&host_name=<?php echo $this->_tpl_vars['hs']['host_name']; ?>
&service_description=<?php echo $this->_tpl_vars['hs']['service_description']; ?>
"><?php echo $this->_tpl_vars['hs']['service_description']; ?>
</a>
                                        </td>
                                        <td>
                                            <?php if ($this->_tpl_vars['hs']['svc_index'] > 0): ?>
                                            <a href="main.php?p=204&amp;mode=0&amp;svc_id=<?php echo $this->_tpl_vars['hs']['hnl']; ?>
;<?php echo $this->_tpl_vars['hs']['sdl']; ?>
">
                                                <img id="<?php echo $this->_tpl_vars['host_id']; ?>
-<?php echo $this->_tpl_vars['hs']['svc_id']; ?>
" class="graph-volant ico-18" src="./img/icons/chart.png"/>
                                            </a>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['hs']['acknowledged'] != 0): ?>
                                            <img src="./img/icons/technician.png" class="ico-20" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Acknowledged<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['hs']['in_downtime'] > 0): ?>
                                            <img src="./img/icons/warning.png" class="ico-18" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>In Downtime<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />
                                            <?php endif; ?>
                                            <!--
                                            <a href="main.php?p=203&amp;svc=<?php echo $this->_tpl_vars['hs']['host_id']; ?>
_<?php echo $this->_tpl_vars['hs']['svc_id']; ?>
">
                                                Log
                                            </a>
                                            <a href="main.php?p=60201&o=c&service_id=<?php echo $this->_tpl_vars['hs']['svc_id']; ?>
">
                                                Config
                                            </a>
                                            -->
                                        </td>
                                        <td class="ListColCenter ListColNoWrap"><span class="badge <?php echo $this->_tpl_vars['hs']['status_class']; ?>
"><?php echo $this->_tpl_vars['hs']['current_state']; ?>
</span></td>
                                        <td class="ListColCenter ListColNoWrap"><?php echo $this->_tpl_vars['hs']['duration']; ?>
</td>
                                        <td class="ListColLeft"><?php echo $this->_tpl_vars['hs']['short_output']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                </table>
                            </div>
                        </div>
                        <div id='tab2' class='tab'>
                            <table class="ListTable">
                                <tr class='list_lvl_1'>
                                    <td class="ListColHeaderLeft FormHeader"><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Graphs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
                                </tr>
                                <?php $_from = $this->_tpl_vars['graphs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['graphId'] => $this->_tpl_vars['HS']):
?>
                                <?php $this->assign('names', ((is_array($_tmp=';')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['HS']) : explode($_tmp, $this->_tpl_vars['HS']))); ?>
                                <tr>
                                    <td class="ListColLeft ColPopup" style='text-align:center;'>
                                        <h3 class="detail-chart-title">
                                            <?php echo $this->_tpl_vars['names'][1]; ?>
 <a href='./main.php?p=204&mode=0&svc_id=<?php echo $this->_tpl_vars['HS']; ?>
'>
                                            <img class="ico-18 pull-right" src="./img/icons/chart.png"/>
                                        </a>
                                        </h3>
                                        <div class="chart" data-graph-id="<?php echo $this->_tpl_vars['graphId']; ?>
" data-graph-type="service"></div>
                                    </td>
                                </tr>
                                <?php endforeach; endif; unset($_from); ?>
                            </table>
                        </div>
                        <div id='tab3' class='tab'>
                            <table class="ListTable">
                                <tr class='list_lvl_1'>
                                    <td class="ListColHeaderLeft FormHeader" colspan="2"><h4><?php echo $this->_tpl_vars['m_mon_host_info']; ?>
</h4></td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_host_status']; ?>
</td>
                                    <td class="ListColLeft ColPopup"><span class="badge <?php echo $this->_tpl_vars['host_data']['status_class']; ?>
"  ><?php echo $this->_tpl_vars['host_data']['current_state']; ?>
</span></td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup "><?php echo $this->_tpl_vars['m_mon_host_status_info']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['plugin_output']; ?>
</td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_performance_data']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['performance_data']; ?>
</td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Poller Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                                    <td class="ListColLeft ColPopup"><span><?php echo $this->_tpl_vars['host_data']['instance_name']; ?>
</span></td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_current_attempt']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['current_attempt']; ?>
/<?php echo $this->_tpl_vars['host_data']['max_check_attempts']; ?>
 <?php echo $this->_tpl_vars['host_data']['state_type']; ?>
</td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_host_last_check']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['last_check']; ?>
</td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_next_check']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['next_check']; ?>
</td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_last_change']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['last_state_change']; ?>
</td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_current_state_duration']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['duration']; ?>
</td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_last_notification']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['last_notification']; ?>
</td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_next_notification']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php if (( $this->_tpl_vars['host_data']['next_notification'] == 0 )): ?> N/A <?php else: ?><?php echo $this->_tpl_vars['host_data']['next_notification']; ?>
<?php endif; ?></td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_notification_nb']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['current_notification_number']; ?>
</td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_host_flapping']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['is_flapping']; ?>
 (<?php echo $this->_tpl_vars['host_data']['percent_state_change']; ?>
 %)</td>
                                </tr>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_downtime_sc']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap">
                                        <span ><?php echo $this->_tpl_vars['en'][$this->_tpl_vars['host_data']['scheduled_downtime_depth']]; ?>
</span>
                                    </td>
                                </tr>
                                <tr class='list_one'>
                                    <td class="ListColLeft ColPopup"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Timezone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                                    <td class="ListColLeft ColPopup"><span><?php echo $this->_tpl_vars['host_data']['timezone']; ?>
</span></td>
                                </tr>
                                <?php if ($this->_tpl_vars['host_data']['comments']): ?>
                                <tr class='list_two'>
                                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_host_comment']; ?>
</td>
                                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['comments']; ?>
</td>
                                </tr>
                                <?php endif; ?>
                            </table>
                            <br />
                            <table width='100%'>
                                <tr>
                                    <td style="vertical-align:top;">
                                        <table class="ListTable table linkList">
                                            <tr class='list_lvl_1'>
                                                <td class="ListColHeaderLeft FormHeader" colspan="3">
                                                    <h4><?php echo $this->_tpl_vars['options']; ?>
</h4>
                                                </td>
                                            </tr>
                                            <tr class='list_one'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_host_checks_active']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['active_checks_enabled']]; ?>
"  ><?php echo $this->_tpl_vars['en_disable'][$this->_tpl_vars['host_data']['active_checks_enabled']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup" id="host_checks">
                                                    <?php if ($this->_tpl_vars['aclAct']['host_checks'] || $this->_tpl_vars['admin'] == 1): ?>
                                                    <a href="#" onClick="send_command('host_checks', '<?php echo $this->_tpl_vars['en_inv'][$this->_tpl_vars['host_data']['active_checks_enabled']]; ?>
');"><img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['active_checks_enabled']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_inv_text'][$this->_tpl_vars['host_data']['active_checks_enabled']]; ?>
 <?php echo $this->_tpl_vars['m_mon_check_this_host']; ?>
" /></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr class='list_two'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_host_checks_passive']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['passive_checks_enabled']]; ?>
"  ><?php echo $this->_tpl_vars['en_disable'][$this->_tpl_vars['host_data']['passive_checks_enabled']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup">
                                                    <?php if ($this->_tpl_vars['aclAct']['host_checks'] || $this->_tpl_vars['admin'] == 1): ?>
                                                    <a href="#" onClick="send_command('host_passive_checks', '<?php echo $this->_tpl_vars['en_inv'][$this->_tpl_vars['host_data']['passive_checks_enabled']]; ?>
');">
                                                        <img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['passive_checks_enabled']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_inv_text'][$this->_tpl_vars['host_data']['passive_checks_enabled']]; ?>
 <?php echo $this->_tpl_vars['m_mon_passive_check_this_host']; ?>
" /></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php if ($this->_tpl_vars['aclAct']['host_notifications'] || $this->_tpl_vars['admin'] == true): ?>
                                            <tr class='list_one'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_host_notification']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['notifications_enabled']]; ?>
"  ><?php echo $this->_tpl_vars['en_disable'][$this->_tpl_vars['host_data']['notifications_enabled']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup" id="host_notifications">
                                                    <?php if ($this->_tpl_vars['aclAct']['host_notifications'] || $this->_tpl_vars['admin'] == 1): ?>
                                                    <a href="#" onClick="send_command('host_notifications', '<?php echo $this->_tpl_vars['en_inv'][$this->_tpl_vars['host_data']['notifications_enabled']]; ?>
');"><img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['notifications_enabled']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_inv_text'][$this->_tpl_vars['host_data']['notifications_enabled']]; ?>
 <?php echo $this->_tpl_vars['m_mon_notify_this_host']; ?>
" /></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['admin'] == true): ?>
                                            <tr class='list_two'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_obsess_over_host']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['obsess_over_host']]; ?>
"  ><?php echo $this->_tpl_vars['en_disable'][$this->_tpl_vars['host_data']['obsess_over_host']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup" id="host_obsess">
                                                    <?php if ($this->_tpl_vars['aclAct']['obsess_over_host'] || $this->_tpl_vars['admin'] == 1): ?>
                                                    <a href="#" onClick="send_command('host_obsess', '<?php echo $this->_tpl_vars['en_inv'][$this->_tpl_vars['host_data']['obsess_over_host']]; ?>
');"><img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['obsess_over_host']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_inv_text'][$this->_tpl_vars['host_data']['obsess_over_host']]; ?>
 <?php echo $this->_tpl_vars['m_mon_obsess_over_host']; ?>
" /></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['aclAct']['host_event_handler'] || $this->_tpl_vars['admin'] == true): ?>
                                            <tr class='list_one'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_event_handler']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['event_handler_enabled']]; ?>
"  ><?php echo $this->_tpl_vars['en_disable'][$this->_tpl_vars['host_data']['event_handler_enabled']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup" id="host_event_handler">
                                                    <?php if ($this->_tpl_vars['aclAct']['host_event_handler'] || $this->_tpl_vars['admin'] == 1): ?>
                                                    <a href="#" onClick="send_command('host_event_handler', '<?php echo $this->_tpl_vars['en_inv'][$this->_tpl_vars['host_data']['event_handler_enabled']]; ?>
');"><img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['event_handler_enabled']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_inv_text'][$this->_tpl_vars['host_data']['event_handler_enabled']]; ?>
 <?php echo $this->_tpl_vars['m_mon_ed_event_handler']; ?>
" /></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['aclAct']['host_flap_detection'] || $this->_tpl_vars['admin'] == true): ?>
                                            <tr class='list_two'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_flap_detection']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['flap_detection_enabled']]; ?>
" ><?php echo $this->_tpl_vars['en_disable'][$this->_tpl_vars['host_data']['flap_detection_enabled']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup" id="host_flap_detection">
                                                    <?php if ($this->_tpl_vars['aclAct']['host_flap_detection'] || $this->_tpl_vars['admin'] == 1): ?>
                                                    <a href="#" onClick="send_command('host_flap_detection', '<?php echo $this->_tpl_vars['en_inv'][$this->_tpl_vars['host_data']['flap_detection_enabled']]; ?>
');">
                                                        <img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['flap_detection_enabled']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_inv_text'][$this->_tpl_vars['host_data']['flap_detection_enabled']]; ?>
 <?php echo $this->_tpl_vars['m_mon_ed_flapping_detect']; ?>
" /></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['host_data']['current_state'] != UP): ?>
                                            <?php if ($this->_tpl_vars['aclAct']['host_acknowledgement'] && ! $this->_tpl_vars['host_data']['problem_has_been_acknowledged'] || $this->_tpl_vars['aclAct']['host_disacknowledgement'] && $this->_tpl_vars['host_data']['problem_has_been_acknowledged'] || $this->_tpl_vars['admin'] == true): ?>
                                            <tr class='list_one'>
                                                <td class="ListColLeft"><?php echo $this->_tpl_vars['m_mon_services_en_acknowledge']; ?>
</td>
                                                <td class="ListColLeft"><span class="badge <?php echo $this->_tpl_vars['color_onoff'][$this->_tpl_vars['host_data']['problem_has_been_acknowledged']]; ?>
" ><?php echo $this->_tpl_vars['en'][$this->_tpl_vars['host_data']['problem_has_been_acknowledged']]; ?>
</span>
                                                </td>
                                                <td class="ListColRight ColPopup">
                                                    <a href='./main.php?p=<?php echo $this->_tpl_vars['p']; ?>
&o=hak&cmd=14&host_name=<?php echo ((is_array($_tmp=$this->_tpl_vars['host_data']['host_name'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&en=<?php echo $this->_tpl_vars['en_acknowledge'][$this->_tpl_vars['host_data']['problem_has_been_acknowledged']]; ?>
'><img src=<?php echo $this->_tpl_vars['img_en'][$this->_tpl_vars['host_data']['problem_has_been_acknowledged']]; ?>
 class="ico-16" alt="<?php echo $this->_tpl_vars['en_acknowledge_text'][$this->_tpl_vars['host_data']['problem_has_been_acknowledged']]; ?>
" /></a>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                        </table>
                                    </td>
                                    <td style='padding:5px;'></td>
                                    <td>
                                        <table class="ListTable table linkList">
                                            <tr class='list_lvl_1'  >
                                                <td class="ListColHeaderLeft FormHeader" colspan="2">
                                                    <h4><?php echo $this->_tpl_vars['links']; ?>
</h4>
                                                </td>
                                            </tr>
                                            <tr class='list_one'>
                                                <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['hostgroups_label']; ?>
:</td>
                                                <td class="ListColLeft ColPopup">
                                                    <?php $_from = $this->_tpl_vars['hostgroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hg']):
?>
                                                    &nbsp;&nbsp;&nbsp;-&nbsp;<?php echo $this->_tpl_vars['hg']; ?>
<br>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </td>
                                            </tr>
                                            <tr class='list_one'>
                                                <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['hostcategorie_label']; ?>
:</td>
                                                <td class="ListColLeft ColPopup">
                                                    <?php $_from = $this->_tpl_vars['hostcategorie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hc']):
?>
                                                    &nbsp;&nbsp;&nbsp;-&nbsp;<?php echo $this->_tpl_vars['hc']; ?>
<br>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                        <table class="ListTable table linkList">
                                            <tr class='list_lvl_1' >
                                                <td class="ListColHeaderLeft FormHeader" colspan="2">
                                                    <h4><?php echo $this->_tpl_vars['notifications']; ?>
</h4>
                                                </td>
                                            </tr>
                                            <tr class='list_one' >
                                                <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['contactgroups_label']; ?>
:</td>
                                                <td class="ListColLeft ColPopup">
                                                    <?php $_from = $this->_tpl_vars['contactgroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cg']):
?>
                                                    &nbsp;&nbsp;&nbsp;-&nbsp;<?php echo $this->_tpl_vars['cg']; ?>
<br>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </td>
                                            </tr>
                                            <tr class='list_two'>
                                                <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['contacts_label']; ?>
:</td>
                                                <td class="ListColLeft ColPopup">
                                                    <?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
                                                    &nbsp;&nbsp;&nbsp;-&nbsp;<?php echo $this->_tpl_vars['c']; ?>
<br>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id='tab4' class='tab'>
                            <table class="ListTable">
                                <tr class='list_lvl_1'>
                                    <td class="ListColHeaderCenter FormHeader"><?php echo $this->_tpl_vars['cmt_host_name']; ?>
</td>
                                    <td class="ListColHeaderCenter FormHeader" width="120"><?php echo $this->_tpl_vars['cmt_entry_time']; ?>
</td>
                                    <td class="ListColHeaderCenter FormHeader" width="120"><?php echo $this->_tpl_vars['cmt_author']; ?>
</td>
                                    <td class="ListColHeaderCenter FormHeader"><?php echo $this->_tpl_vars['cmt_comment']; ?>
</td>
                                    <td class="ListColHeaderCenter FormHeader" width="50"><?php echo $this->_tpl_vars['cmt_persistent']; ?>
</td>
                                </tr>
                                <?php $_from = $this->_tpl_vars['tab_comments_host']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tch']):
?>
                                <tr class=<?php echo smarty_function_cycle(array('values' => "list_two, list_one"), $this);?>
>
                                    <td class="ListColLeft"><?php echo $this->_tpl_vars['tch']['host_name']; ?>
</td>
                                    <td class="ListColRight"><?php echo $this->_tpl_vars['tch']['comment_time']; ?>
</td>
                                    <td class="ListColCenter"><?php echo $this->_tpl_vars['tch']['author_name']; ?>
</td>
                                    <td class="ListColLeft"><?php echo $this->_tpl_vars['tch']['comment_data']; ?>
</td>
                                    <td class="ListColCenter"><?php echo $this->_tpl_vars['tch']['is_persistent']; ?>
</td>
                                </tr>
                                <?php endforeach; endif; unset($_from); ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
        <td style="width: 30%; vertical-align: top;" nowrap="nowrap">
            <table class="table ListTable linkList">
                <tr class='list_lvl_1'>
                    <td class="ListColHeaderLeft FormHeader" colspan="2"><h4><?php echo $this->_tpl_vars['m_mon_host_info']; ?>
</h4></td>
                </tr>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_host_status']; ?>
</td>
                    <td class="ListColLeft ColPopup"><span class="badge <?php echo $this->_tpl_vars['host_data']['status_class']; ?>
"  ><?php echo $this->_tpl_vars['host_data']['current_state']; ?>
</span></td>
                </tr>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup "><?php echo $this->_tpl_vars['m_mon_host_status_info']; ?>
</td>
                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['plugin_output']; ?>
</td>
                </tr>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Poller Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                    <td class="ListColLeft ColPopup"><span><?php echo $this->_tpl_vars['host_data']['instance_name']; ?>
</span></td>
                </tr>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_current_attempt']; ?>
</td>
                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['current_attempt']; ?>
/<?php echo $this->_tpl_vars['host_data']['max_check_attempts']; ?>
 <?php echo $this->_tpl_vars['host_data']['state_type']; ?>
</td>
                </tr>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup"><?php echo $this->_tpl_vars['m_mon_host_last_check']; ?>
</td>
                    <td class="ListColLeft ListColNoWrap"><?php echo $this->_tpl_vars['host_data']['last_check']; ?>
</td>
                </tr>
            </table>
            <br />
            <table class="table ListTable linkList">
                <tr class='list_lvl_1'>
                    <td class="FormHeader" style="width: 50%;border-bottom:1px solid #d1d2d4;">
                        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Host commands and shortcuts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
                    </td>
                </tr>
                <?php if ($this->_tpl_vars['lcaTopo']['60101'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup">
                        <a href='./main.php?p=60101&host_id=<?php echo $this->_tpl_vars['host_id']; ?>
&o=c'><?php echo $this->_tpl_vars['lnk_host_config']; ?>
 <?php echo $this->_tpl_vars['h']['host_name']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['lcaTopo']['20301'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup">
                        <a href='./main.php?p=20301&h=<?php echo $this->_tpl_vars['host_id']; ?>
'><?php echo $this->_tpl_vars['lnk_host_logs']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['lcaTopo']['20301'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup">
                        <a href='./main.php?p=20201&o=svc&host_search=<?php echo $this->_tpl_vars['host_data']['host_name']; ?>
&statusService=svc'><?php echo $this->_tpl_vars['lnk_all_services']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['lcaTopo']['307'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup">
                        <a href='./main.php?p=307&host=<?php echo $this->_tpl_vars['host_id']; ?>
'><?php echo $this->_tpl_vars['lnk_host_reports']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['lcaTopo']['20401'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup">
                        <a href='./main.php?p=20401&mode=0&svc_id=<?php echo $this->_tpl_vars['host_data']['host_name']; ?>
'><?php echo $this->_tpl_vars['lnk_host_graphs']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['host_schedule_downtime'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup" id="host_downtime">
                        <a href='main.php?p=21001&o=a&host_id=<?php echo $this->_tpl_vars['host_data']['host_id']; ?>
'><?php echo $this->_tpl_vars['m_mon_SCH_downtime']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['host_comment'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup" id="host_comment">
                        <a href='main.php?p=21002&o=ah&host_name=<?php echo $this->_tpl_vars['host_data']['host_name']; ?>
'><?php echo $this->_tpl_vars['m_mon_add_comment']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['host_notifications_for_services'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup" id="host_notifications_for_services">
                        <a href="#" onClick="send_command('host_notifications_for_services', '1');"><?php echo $this->_tpl_vars['m_mon_disable_not_all_services']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['host_notifications_for_services'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup" id="host_notifications_for_services">
                        <a href="#" onClick="send_command('host_notifications_for_services', '0');"><?php echo $this->_tpl_vars['m_mon_enable_not_all_services']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['service_schedule_check'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup" id ="host_schedule_check">
                        <a href="#" onClick="send_command('host_schedule_check', '0');"><?php echo $this->_tpl_vars['m_mon_SCH_immediate_check']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['service_schedule_forced_check'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup" id="host_schedule_check">
                        <a href="#" onClick="send_command('host_schedule_check', '1');"><?php echo $this->_tpl_vars['m_mon_SCH_immediate_check_f']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if (( $this->_tpl_vars['aclAct']['host_submit_result'] || $this->_tpl_vars['admin'] == true ) && $this->_tpl_vars['host_data']['passive_checks_enabled']): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup">
                        <a href='./main.php?p=<?php echo $this->_tpl_vars['p']; ?>
&o=hpc&cmd=16&host_name=<?php echo $this->_tpl_vars['host_data']['host_name']; ?>
'><?php echo $this->_tpl_vars['m_mon_submit_passive']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['host_checks_for_services'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup" id="host_checks_for_services">
                        <a href="#" onClick="send_command('host_checks_for_services', '1');"><?php echo $this->_tpl_vars['m_mon_diable_check_all_svc']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['aclAct']['host_checks_for_services'] || $this->_tpl_vars['admin'] == 1): ?>
                <tr class='list_one'>
                    <td class="ListColLeft ColPopup" id="host_checks_for_services">
                        <a href="#" onClick="send_command('host_checks_for_services', '0');"><?php echo $this->_tpl_vars['m_mon_enable_check_all_svc']; ?>
</a>
                    </td>
                </tr>
                <?php endif; ?>
                <?php unset($this->_sections['tool']);
$this->_sections['tool']['name'] = 'tool';
$this->_sections['tool']['loop'] = is_array($_loop=$this->_tpl_vars['tools']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tool']['show'] = true;
$this->_sections['tool']['max'] = $this->_sections['tool']['loop'];
$this->_sections['tool']['step'] = 1;
$this->_sections['tool']['start'] = $this->_sections['tool']['step'] > 0 ? 0 : $this->_sections['tool']['loop']-1;
if ($this->_sections['tool']['show']) {
    $this->_sections['tool']['total'] = $this->_sections['tool']['loop'];
    if ($this->_sections['tool']['total'] == 0)
        $this->_sections['tool']['show'] = false;
} else
    $this->_sections['tool']['total'] = 0;
if ($this->_sections['tool']['show']):

            for ($this->_sections['tool']['index'] = $this->_sections['tool']['start'], $this->_sections['tool']['iteration'] = 1;
                 $this->_sections['tool']['iteration'] <= $this->_sections['tool']['total'];
                 $this->_sections['tool']['index'] += $this->_sections['tool']['step'], $this->_sections['tool']['iteration']++):
$this->_sections['tool']['rownum'] = $this->_sections['tool']['iteration'];
$this->_sections['tool']['index_prev'] = $this->_sections['tool']['index'] - $this->_sections['tool']['step'];
$this->_sections['tool']['index_next'] = $this->_sections['tool']['index'] + $this->_sections['tool']['step'];
$this->_sections['tool']['first']      = ($this->_sections['tool']['iteration'] == 1);
$this->_sections['tool']['last']       = ($this->_sections['tool']['iteration'] == $this->_sections['tool']['total']);
?>
                <tr class='list_two'>
                    <td class="ListColLeft ColPopup">
                        <?php if ($this->_tpl_vars['tools'][$this->_sections['tool']['index']]['popup'] == ""): ?>
                        <a href="<?php echo $this->_tpl_vars['tools'][$this->_sections['tool']['index']]['url']; ?>
" target="<?php echo $this->_tpl_vars['tools'][$this->_sections['tool']['index']]['target']; ?>
">
                            <?php else: ?>
                            <a href="#tools" name="tools" onClick="window.open('<?php echo $this->_tpl_vars['tools'][$this->_sections['tool']['index']]['url']; ?>
','','toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=yes,copyhistory=no, width=<?php echo $this->_tpl_vars['tools'][$this->_sections['tool']['index']]['width']; ?>
, height=<?php echo $this->_tpl_vars['tools'][$this->_sections['tool']['index']]['height']; ?>
');">
                                <?php endif; ?>
                                &#9679;&nbsp;<?php echo $this->_tpl_vars['tools'][$this->_sections['tool']['index']]['name']; ?>
</a></td>
                </tr>
                <?php endfor; endif; ?>
            </table>
        </td>
    </tr>
</table>
<div id="div_img" class="img_volante"></div>
<script src="./include/common/javascript/moment-with-locales.js"></script>
<script src="./include/common/javascript/moment-timezone-with-data.min.js"></script>
<script src="./include/common/javascript/charts/d3.min.js"></script>
<script src="./include/common/javascript/charts/c3.min.js"></script>
<script src="./include/common/javascript/charts/d3-timeline.js"></script>
<script src="./include/views/graphs/javascript/centreon-graph.js"></script>
<script src="./include/views/graphs/javascript/centreon-c3.js"></script>
<?php echo '
<script>
    jQuery(function () {
        var times = {
            height: 240,
            interval: \'12h\'
        };
        jQuery(\'.chart\').centreonGraph(times);
    });
</script>
'; ?>