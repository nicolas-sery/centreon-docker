<?php /* Smarty version 2.6.18, created on 2017-05-24 11:28:02
         compiled from listModules.ihtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'listModules.ihtml', 15, false),)), $this); ?>
<link href="./include/common/javascript/jquery/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/jeditable/jquery.jeditable-min.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/qtip/jquery-qtip.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/xml2json/jquery.xml2json.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/jquery.ui.widget.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/fileUpload/jquery.fileupload.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/fileUpload/jquery.fileupload-ui.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/fileUpload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/fileUpload/jquery.xdr-transport.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/fileUpload/jquery.postmessage-transport.js"></script>

<table class="ListTable">
	<tr class="ListHeader">
		<td class="ListColHeaderLeft"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderLeft"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Real Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderCenter"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Description<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderCenter"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Version<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderCenter"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderCenter"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expiration date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderCenter"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Installed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <td class="ListColHeaderCenter"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		<td class="ListColHeaderRight"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Actions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
	</tr>
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
	<tr class=<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['MenuClass']; ?>
>
		<td class="ListColLeft">
			<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link']): ?>
				<a href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link']; ?>
"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>
</a>
			<?php else: ?>
				<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>

			<?php endif; ?>
		</td>
		<td class="ListColLeft">
			<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link']): ?>
				<a href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link']; ?>
"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_rname']; ?>
</a>
			<?php else: ?>
				<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_rname']; ?>

			<?php endif; ?>
		</td>
		<td class="ListColLeft"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_infos']; ?>
</td>
		<td class="ListColCenter"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_release']; ?>
</td>
		<td class="ListColCenter"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_author']; ?>
</td>
		<td class="ListColCenter"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_licenseExpire']; ?>
</td>
		<td class="ListColCenter"><?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_isinstalled']; ?>
</td>
        <td id="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>
" class="ListColCenter"></td>
		<td id="action_<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>
" class="ListColRight">
			<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link_install']): ?>
				<a id="action<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>
" href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link_install']; ?>
" style=""><img src='./img/icons/generate_conf.png' class='ico-16 margin_right' title='<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Install Module<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' alt='<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Install Module<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'></a>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link_upgrade'] && $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_upgrade'] == 1): ?>
                <a id="action<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>
" href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link_upgrade']; ?>
"><img src='./img/icons/upgrade.png' class='ico-16 margin_right' title='<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upgrade<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' alt='<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upgrade<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'></a>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link_delete']): ?>
				<a id="action<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_name']; ?>
" href="<?php echo $this->_tpl_vars['elemArr'][$this->_sections['elem']['index']]['RowMenu_link_delete']; ?>
"  onclick="return confirm('<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you confirm the deletion?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>')"><img src='./img/icons/delete.png' class='ico-16 margin_right' title='<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uninstall Module<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' alt='<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uninstall Module<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'></a>
			<?php endif; ?>
			
		</td>
	</tr>
	<?php endfor; endif; ?>	
</table>

<link rel="stylesheet" type="text/css" href="./include/common/javascript/jquery/plugins/qtip/jquery-qtip.css" />
<script type="text/javascript">
<?php echo '
    function CheckModule()
    {
        jQuery(document).ready(function()
        {
            jQuery.ajax(
            {
                type: \'POST\',
                url: \'include/options/oreon/modules/moduleDependenciesValidator.php\',
                data:
                {
                    mydata: 1,
                    mydata2: 2
                }, 
                success: function(data, textStatus, jqXHR)
                {
                    var myResponse = jQuery.xml2json(data);
                    displayResults(myResponse.module);
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    console.log("Internal error. Check your apache logs.");
                }
            });
        });
    }
    
    function displayResults(moduleList) {
        for (var i = 0; i < moduleList.length; i++) {
            module = moduleList[i];
            moduleMessages = module.children;
            myModuleStatusSpan = jQuery(\'#\'+module["name"]);
            myModuleStatusSpan.empty();
            
            if (module["status"] === "critical") {
                modalBoxId = \'criticalBox_\' + module["name"];
                jQuery(\'#\' + modalBoxId).remove();
                var criticalModalBox = \'<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable" \';
                criticalModalBox += \'id="\'+ modalBoxId +\'"\';
                criticalModalBox += \'style="margin-right: auto; margin-left: auto;" title="Module Error">\';
                
                
                myModuleStatusSpan.append(\'<a href="#" onclick="jQuery(\\\'#\'+modalBoxId+\'\\\').dialog(\\\'open\\\');" ><img id="img_critical_\'+ module["name"] +\'" src="img/icons/cross.png" class="ico-16" /></a>\');
                statusStyle = \'ui-tooltip-red ui-tooltip-shadow\';
                
                statusMessage = "";
                solution = "";
                if (module["message"] instanceof Array) {
                    for (var j = 0; j < module["message"].length; j++) {
                        statusMessage += module["message"][j][\'ErrorMessage\'] + \'<br />\';
                        solution += module["message"][j][\'Solution\']+ \'<br />\';
                    }
                } else {
                    statusMessage = module["message"][\'ErrorMessage\'];
                    solution = module["message"][\'Solution\']+ \'<br /><br />\';
                }
                
                criticalModalBox += solution;
                criticalModalBox += \'</div>\';
                statusMessage += \'<br />Click to check available actions to fix it.\';
                tooltipReferer = \'#img_critical_\'+ module["name"];
                jQuery(\'body\').append(criticalModalBox);
                jQuery(\'#\' + modalBoxId).dialog({ autoOpen: false });
                jQuery(\'#\' + modalBoxId).dialog( "option", "show", { effect: \'drop\', direction: "up" } );
                jQuery(\'#\' + modalBoxId).dialog( "option", "hide", { effect: \'drop\', direction: "down" } );
                jQuery(\'#\' + modalBoxId).dialog( "option", "modal", true );
            } else if (module["status"] === "warning") {
                myModuleStatusSpan.append(\'<img id="img_ok_\'+ module["name"] + \'" src="img/icons/warning.png" class="ico-16" />\');
                statusMessage = \'The module is fully functional\';
                statusStyle = \'ui-tooltip-red ui-tooltip-shadow\';
                tooltipReferer = \'#img_ok_\'+ module["name"];
            } else if (module["status"] === "ok") {
                myModuleStatusSpan.append(\'<img id="img_ok_\'+ module["name"] + \'" src="img/icons/checked.png" class="ico-16" />\');
                statusStyle = \'ui-tooltip-green ui-tooltip-shadow\';
                statusMessage = \'The module is fully functional\';
                tooltipReferer = \'#img_ok_\'+ module["name"];
            } else {
                myModuleStatusSpan.append(\'<img id="img_warning_\'+ module["name"] + \'" src="img/icons/help.png" class="ico-16" />\');
                statusStyle = \'ui-tooltip-red ui-tooltip-shadow\';
                statusMessage = "Can\'t check module dependencies";
                tooltipReferer = \'#img_warning_\'+ module["name"];
            }
            
            if ((module["customAction"] !== undefined) && (module["customAction"] !== "")) {
                modalBoxId = \'customActionModalBox_\' + module["name"];
                jQuery(\'#\' + modalBoxId).remove();
                jQuery(\'#customActionIcon_\'+module["name"]).remove();
                var customActionModalBox = \'<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable" \';
                customActionModalBox += \'id="\'+ modalBoxId +\'"\';
                customActionModalBox += \'style="margin-right: auto; margin-left: auto;" title="\'+module["customActionName"]+\'">\';
                customActionModalBox += module["customAction"];
                customActionModalBox += \'</div>\';
                customActionIcon = \'<span id="customActionIcon_\'+module["name"]+\'"><a href="#" onclick="jQuery(\\\'#\'+modalBoxId+\'\\\').dialog(\\\'open\\\');" ><img id="custom_action_\'+ module["name"] + \'" src="img/icons/wrench.gif" class="ico-16" /></a></span>\';
                jQuery(\'body\').append(customActionModalBox);
                jQuery(\'#\' + modalBoxId).dialog({ autoOpen: false });
                jQuery(\'#\' + modalBoxId).dialog( "option", "show", { effect: \'drop\', direction: "up" } );
                jQuery(\'#\' + modalBoxId).dialog( "option", "hide", { effect: \'drop\', direction: "down" } );
                jQuery(\'#\' + modalBoxId).dialog( "option", "modal", true );
                jQuery(\'#action_\'+ module["name"]).prepend(customActionIcon);
            }
            
            jQuery(tooltipReferer).qtip({
                content: statusMessage,
                style: {
                    classes: statusStyle
                },
                show: {
                    event: "mouseover"
                },
                hide: {
                    event: "mouseout"
                },
                position: {
                    at: "bottom left",
                    my: "top right"
                }
            })
            myModuleStatusSpan = null;
        }
    }
    
    CheckModule();
    '; ?>

</script>