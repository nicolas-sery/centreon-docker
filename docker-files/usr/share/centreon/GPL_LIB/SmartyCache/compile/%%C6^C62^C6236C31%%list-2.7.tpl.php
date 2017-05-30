<?php /* Smarty version 2.6.18, created on 2017-05-24 10:10:13
         compiled from list-2.7.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'list-2.7.tpl', 19, false),)), $this); ?>
<script type="text/javascript" src="./include/common/javascript/tool.js"></script>
<script type="text/javascript" src="./include/common/javascript/resize_td.js"></script>
<script type="text/javascript" src="./include/common/javascript/handlebars-v4.0.5.js"></script>
<script type="text/javascript" src="./include/common/javascript/tooltipster/jquery.tooltipster.min.js"></script>
<script type="text/javascript" src="./modules/centreon-pp-manager/static/js/jquery.fittext.js"></script>
<script type="text/javascript" src="./modules/centreon-pp-manager/static/js/centreon-infinite-scroll.js"></script>
<script type="text/javascript" src="./modules/centreon-pp-manager/static/js/nprogress.js"></script>
<script type="text/javascript" src="./include/common/javascript/jquery/plugins/qtip/jquery-qtip.js"></script>
<script type="text/javascript" src="./modules/centreon-pp-manager/static/js/pluginpack.js"></script>
<script type="text/javascript" src="./include/common/javascript/marked.js"></script>
<link rel="stylesheet" type="text/css" href="./modules/centreon-pp-manager/static/css/style.css" />
<link rel="stylesheet" type="text/css" href="./modules/centreon-pp-manager/static/css/nprogress.css" />
<link rel="stylesheet" type="text/css"  href="./include/common/javascript/tooltipster/tooltipster.css" />
<link rel="stylesheet" type="text/css" href="./Themes/Centreon-2/markdown.css">
<div class="pluginpack-block">
  <h2><?php echo $this->_tpl_vars['labels']['title_page']; ?>
</h2>
    <?php if (! $this->_tpl_vars['hasLicense']): ?>
        <?php if ($this->_tpl_vars['isAuth']): ?>
            <a href="http://support.centreon.com" id='helpdesk' name='helpdesk' class="btc ppm-orange-button toHideInFullscreen"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online Helpdesk<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php else: ?>
            <a href="http://www.centreon.com/imp-subscription" id='imp_subscription_button' name='imp_subscription_button' class="btc ppm-orange-button toHideInFullscreen"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subscription<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php endif; ?>
    <?php endif; ?>
  <form name='form' method='POST'>
    <table class="ajaxOption table">
      <tr>
        <th><h5><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filters<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h5></th>
      </tr>
      <tr>
        <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Keyword<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
        <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
        <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
        <td><h4><?php echo $this->_tpl_vars['lastUpdate']; ?>
</h4></td>
      </tr>
      <tr>
        <td><input type="text" name="name" id="name" size="12"></td>
        <td>
            <select name="category" id="category">
                <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cle'] => $this->_tpl_vars['valeur']):
?>
                    <?php if ($this->_tpl_vars['valeur'] == ""): ?>
                        <option value="<?php echo $this->_tpl_vars['cle']; ?>
"><?php echo $this->_tpl_vars['valeur']; ?>
</option>
                    <?php else: ?>
                        <option value="<?php echo $this->_tpl_vars['cle']; ?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['valeur']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </td>
        <td>
            <select name="status" id="status">
                 <?php $_from = $this->_tpl_vars['status_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cle'] => $this->_tpl_vars['valeur']):
?>
                     <option value="<?php echo $this->_tpl_vars['cle']; ?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['valeur']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                 <?php endforeach; endif; unset($_from); ?>
            </select>
        </td>
        <td>
            <select name="operator" id="operator">
                 <?php $_from = $this->_tpl_vars['aOperators']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cle1'] => $this->_tpl_vars['valeur1']):
?>
                     <option value="<?php echo $this->_tpl_vars['cle1']; ?>
"><?php echo $this->_tpl_vars['valeur1']; ?>
</option>
                 <?php endforeach; endif; unset($_from); ?>
            </select>
            <input type="text" id="lastUpdate" name="lastUpdate" size="8">
        </td>
        <td><button id='search' name='search' class="btc bt_success"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button></td>
      </tr>
    </table>
  </form>
  <div id="progress-container"></div>
  <h3 id="no-item-message"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No plugin packs found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
  <div id="pluginpack-container-list">
    <div id="pluginpack-list" class="pluginpack-list"></div>
  </div>
    <div id="errorIncheckDependency" class="inactive">
        <p></p>
        <div class="button_group_center">
            <button type="button" class="btc bt_default"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
        </div>
    <div id="failedActionMessage" class="inactive">
        <p></p>
        <div class="button_group_center">
            <button type="button" class="btc bt_success"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OK<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
        </div>
    </div>
    <div id="checkRemovePluginPackViewConfirm" class="inactive">
        <p id="checkRemovePluginPackViewConfirm-msg"></p>
    </div>
    <div id="checkDependencyPPViewConfirm" class="inactive">
        <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>In order to install the plugin pack<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> "<span id="pp-name-in-check-dependency"></span>"</p>
        <div id="plugin-to-install-message">
            <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>the following plugin pack will be installed :<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </p>
            <p id="plugin-to-install-message-slugs"></p>
        </div>
        <br>
        <div id="plugin-to-upgrade-message">
            <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>the following plugin pack will be updated :<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </p>
            <p id="plugin-to-upgrade-message-slugs"></p>
        </div>
        <div class="button_group_center">
            <button type="button" class="btc bt_success"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Apply<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
            <button type="button" class="btc bt_default"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
        </div>
    </div>
    <div id="removePPViewConfirm" class="inactive">
        <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to delete this plugin pack ?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <div class="button_group_center">
            <button type="button" class="btc bt_danger"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
            <button type="button" class="btc bt_default"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
        </div>
    </div>
    <div id="updatePPViewConfirm" class="inactive">
        <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to update this plugin pack ?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <div class="button_group_center">
            <button type="button" class="btc bt_info"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
            <button type="button" class="btc bt_default"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
        </div>
    </div>

    <div id="pluginpack-detail" class="pluginpack-detail-panel inactive">
        <div class="pp-header">
            <div class="pp-header-left">
                <div class="pp-icon" id="pp-logo"></div>
            </div>
            <div id="pp-detail" class="pp-header-right" data-id="" data-name="" data-slug="" data-version="">
                <h2 id="pp-name"></h2>
                <div id="pp-detail-versioning">
                    <p id="pp-version"></p> <span class="badge" id="pp-status"></span>
                </div>
                <div class="detail-action-bar" id="pp-detail-action-bar"></div>
            </div>
        </div>
        <div class="pp-body">
            <p id="pp-description" class="full-page md-preview"></p>
            <div class="pp-details-wrapper">
                <a href="http://www.centreon.com/imp-subscription" id="subscription" name="subscription" class="btc bt_info"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subscription<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            </div>
        </div>

    </div>
</div>