<?php /* Smarty version 2.6.18, created on 2017-05-24 11:30:37
         compiled from BlockHeader.ihtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'BlockHeader.ihtml', 14, false),)), $this); ?>
<div id="header">
	<div id="centreon_logo">
		<img src='<?php echo $this->_tpl_vars['urlLogo']; ?>
' title='Centreon Logo' id="logo" />
	</div>
	<!-- stat -->
	<div id="resume_light">
		<?php if ($this->_tpl_vars['displayTopCounter'] == 1 || $this->_tpl_vars['displayPollerStats'] == 1): ?>
		<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<?php if ($this->_tpl_vars['displayPollerStats'] == 1): ?>
			<td>
				<table class='Resume_light_table'>
					<tr>
						<th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Poller States<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
						<td>
							<span id='latency' >
								<img src='./img/icons/clock.png' class="ico-10" id="img_latency" />
							</span>
						</td>
						<td>
							<span id="pollingState">
								<img src='./img/icons/poller.png' class="ico-10" id="img_pollingState"/>
							</span>
						</td>
						<td>
							<span id="activity">
								<img src='./img/icons/database.png' class="ico-10" id="img_activity" />
							</span>
						</td>
					</tr>
				</table>
			</td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['displayTopCounter'] == 1): ?>
			<td>
				<table class='Resume_light_table'>
					<tr>
						<th>
							<span id="hosts">?</span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Hosts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</th>
						<td>
							<span id="host_up" class="host_up" >?</span>
						</td>
						<td>
							<span id="host_down" class="host_down" >?</span>
						</td>
						<td>
							<span id="host_unreachable" class="host_unreachable">?</span>
						</td>
						<td>
							<span id="host_pending" class="pending">?</span>
						</td>

					</tr>
				</table>
			</td>
			<td>
				<table class='Resume_light_table'>
					<tr>
						<th>
							<span id="service_total">?</span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Services<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</th>
						<td>
							<span id="service_ok" class="service_ok">?</span>
						</td>
						<td>
							<span id="service_warning" class="service_warning">?</span>
						</td>
						<td>
							<span id="service_critical" class="service_critical">?</span>
						</td>
						<td>
							<span id="service_unknown" class="service_unknown">?</span>
						</td>
						<td>
							<span id="service_pending" class="pending">?</span>
						</td>
					</tr>
				</table>
			</td>
			<?php endif; ?>
		</tr>
		</table>
		<?php endif; ?>
	</div>
	<div id="logli">
		<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Welcome<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php if ($this->_tpl_vars['topology'][50104]): ?><a href="./main.php?p=50104&o=c"><?php endif; ?><?php echo $this->_tpl_vars['user_login']; ?>
<?php if ($this->_tpl_vars['topology'][50104]): ?></a><?php endif; ?>
		| <a href="<?php echo $this->_tpl_vars['LogOutUrl']; ?>
" class="red"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Logout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
		<?php if ($this->_tpl_vars['autoLoginEnable']): ?>
			| <a onClick='return false;' href='<?php echo $this->_tpl_vars['autoLoginUrl']; ?>
' title='Centreon - IT and Network Monitoring'>
				<img src='./img/icons/unlocked.png' class="ico-16" title='<?php echo $this->_tpl_vars['CentreonAutologin']; ?>
'>
			</a>
		<?php endif; ?>
	</div>
	<div class="container">
		<span id="date"><?php echo $this->_tpl_vars['Date']; ?>
</span>
		<img id="sound_status" src="./img/icons/speaker_<?php echo $this->_tpl_vars['sound_status']; ?>
.png" style="cursor:pointer;vertical-align: bottom;" onClick="<?php echo $this->_tpl_vars['sound_action']; ?>
">
	</div>
	<div id="centreonMsg"></div>
</div>
<?php echo '
<script type=\'text/javascript\'>
/*
 * Toggle Header
 */
function toggleHeader()
{
	new Effect.toggle(\'header\', \'appear\', { afterFinish: function() { setQuickSearchPosition(); }});
}
</script>
'; ?>
