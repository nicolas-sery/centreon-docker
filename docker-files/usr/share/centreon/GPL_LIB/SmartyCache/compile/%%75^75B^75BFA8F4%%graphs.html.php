<?php /* Smarty version 2.6.18, created on 2017-05-24 11:30:24
         compiled from graphs.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'graphs.html', 9, false),)), $this); ?>
<link href="./include/common/javascript/charts/c3.min.css" type="text/css" rel="stylesheet">
<link href="./include/views/graphs/javascript/centreon-status-chart.css" type="text/css" rel="stylesheet">
<link href="./include/common/javascript/jquery/tourbus/jquery-tourbus.min.css" type="text/css" rel="stylesheet">
<script language='javascript' src='./include/common/javascript/tool.js'></script>
<div id="div1" style="position:relative;">
    <form <?php echo $this->_tpl_vars['form']['attributes']; ?>
>
        <table class="ajaxOption table">
            <tr>
                <th><h5><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Chart Filters<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h5></th>
            </tr>
            <tr>
              <td class="tour-add-chart"><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Chart<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
              <td class="tour-choose-period tour-global-period"><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
              <td class="tour-define-period tour-global-period"><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>From<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
              <td class="tour-define-period tour-global-period"><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
            </tr>
          <tr>
            <td class="log-select tour-add-chart" id="tour-add-chart">
              <select id="select-chart" multiple size="1"></select>
            </td>
            <td class="tour-choose-period tour-global-period" id="tour-choose-period"><?php echo $this->_tpl_vars['form']['period']['html']; ?>
</td>
            <td class="tour-define-period tour-global-period" id="tour-define-period"><?php echo $this->_tpl_vars['form']['StartDate']['html']; ?>
 <?php echo $this->_tpl_vars['form']['StartTime']['html']; ?>
</td>
            <td class="tour-define-period tour-global-period"><?php echo $this->_tpl_vars['form']['EndDate']['html']; ?>
 <?php echo $this->_tpl_vars['form']['EndTime']['html']; ?>
</td>
          </tr>
          <tr>
            <td class="divider" colspan="4"><hr></td>
          </tr>
            <tr>
                <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter by Host<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
                <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter by Hostgroup<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
                <td><h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter by Servicegroup<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4></td>
            </tr>
            <tr>

                <td class="log-select">
                    <select
                        id="host_filter"
                        multiple
                        size="1">
                    </select>
                </td>
                <td class="log-select">
                    <select
                        id="host_group_filter"
                        multiple
                        size="1">
                    </select>
                </td>
                <td class="log-select">
                    <select
                        id="service_group_filter"
                        multiple
                        size="1">
                    </select>
                </td>
            </tr>
        </table>
    </form>
    <div class="graph-options">
      <div class="refresh" id="chart-refresh">
        <div class="icon refresh-icon">
          <img class="ico-14" src="./img/icons/refresh.png">
        </div>
        <span class="time" style="display: none"></span>
        <div class="icon">
          <img class="ico-14 timer-icon" src="./img/icons/timer-gray.png">
        </div>
        <ul class="refresh-list">
          <li data-interval="0"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
          <li data-interval="1m"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>1 minute<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
          <li data-interval="5m"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>5 minutes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
          <li data-interval="15m"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>15 minutes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
          <li data-interval="30m"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>30 minutes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
        </ul>
      </div>
      <a href="javascript:switchCols(1)" class="ico-16 margin_right ico-col ico-col-1 active" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>One column<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>One column<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
      </a>
      <a href="javascript:switchCols(2)" class="ico-16 margin_right ico-col ico-col-2" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Two columns<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Two columns<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
      </a>
      <a href="javascript:switchCols(3)" class="ico-16 margin_right ico-col ico-col-3" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Three columns<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Three columns<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
      </a>
    </div>
    <div id="graphs" class="graph_content">
        <div class="graphZone"></div>
    </div>
</div>

<!-- First tour -->
<ol class="tourbus-legs" id="first-tour">
  <li data-orientation="centered">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>First tour for performance view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This tour present the new features and the new operation for this page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class="btc bt_warning tourbus-stop"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Dismiss<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>&nbsp;
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el=".ajaxOption" data-focus=".ajaxOption" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This filter and period form<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This form allow to add a chart to the page and select a period.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el="#tour-add-chart" data-focus=".tour-add-chart" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add a chart<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The chart select is for add a chart to the view.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This field is fieldered by the fields host, hostgroup and servicegroup.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el="#tour-define-period" data-focus=".tour-global-period" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Choose a period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The period is defined for the view. All charts have the same period.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el="#tour-choose-period" data-focus=".tour-choose-period" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Choose a period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can choose a period that ends now.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el="#tour-define-period" data-focus=".tour-define-period" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Choose a period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can select a period with a start time and end time.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el="#chart-refresh" data-focus="#chart-refresh" data-orientation="left" data-align="center" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refresh actions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You refresh the view or activate the auto-refresh.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el=".refresh-icon" data-focus=".refresh-icon" data-orientation="left" data-align="center" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refresh actions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click on the icon for refresh the view.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el=".timer-icon" data-focus=".timer-icon" data-orientation="left" data-align="center"  data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refresh actions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click on the icon for choose a refresh interval.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-el=".ico-col.active" data-focus=".ico-col" data-orientation="left" data-align="center" data-highlight="true">
    <h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Grid system<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The new performance can be display on 1, 2 or 3 columns.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this buttons for change the number of columns.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-next'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &gt;&gt;</button>
    </div>
  </li>
  <li data-orientation="centered">
    <div class="tourbus-content">
      <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thanks for follow this guide.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="tourbus-action">
      <button class='btc bt_info tourbus-stop'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Finish<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
    </div>
  </li>
</ol>
<div class="tourbus-overlay"></div>
<script src="./include/common/javascript/moment-with-locales.js"></script>
<script src="./include/common/javascript/moment-timezone-with-data.min.js"></script>
<script src="./include/common/javascript/handlebars-v4.0.5.js"></script>
<script src="./include/common/javascript/charts/d3.min.js"></script>
<script src="./include/common/javascript/charts/c3.min.js"></script>
<script src="./include/common/javascript/charts/d3-timeline.js"></script>
<script src="./include/views/graphs/javascript/centreon-graph.js"></script>
<script src="./include/views/graphs/javascript/centreon-c3.js"></script>
<script src="./include/views/graphs/javascript/centreon-status-chart.js"></script>
<script src="./include/common/javascript/centreon/centreon-select2.js"></script>
<script src="./include/common/javascript/jquery/tourbus/jquery-tourbus.min.js"></script>
<script src="./include/common/javascript/jquery/jquery.cookie.js"></script>
<script src="./include/common/javascript/centreon/centreon-tour.js"></script>
<script>
var defaultCharts = JSON.parse('<?php echo $this->_tpl_vars['defaultCharts']; ?>
');
var nbDisplayedCharts = <?php echo $this->_tpl_vars['nbDisplayedCharts']; ?>
;
var tooManyChartMsg = "<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You cannot add more charts. The maximum charts is <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" + nbDisplayedCharts;
</script>

<?php echo '
<script id="graph-line" type="text/x-handlebars-template">
<div id="graph_wrapper_{{graphId}}" data-graph-id="{{graphId}}" class="graph">
  <div class="title">
    <img class="remove ico-18 margin_right" src="./img/icons/circle-cross.png">
    <span>{{graphTitle}}</span>
    <a href="#" class="btc bt_info actions-simple" data-href="./main.php?p=2040101">
      Split chart
    </a>
    <a href="#" class="btc bt_info actions-simple" data-href="./main.php?p=2040102">
      Display multiple periods
    </a>
    <a class="actions" href="#" data-href="./include/views/graphs/generateGraphs/generateImage.php">
      <img alt="Export graph" src="./img/icons/picture.png" class="ico-18 margin_right">
    </a>
    <a class="actions" href="#" data-href="./include/views/graphs/exportData/ExportCSVServiceData.php">
      <img alt="Export CSV" src="./img/icons/csv.png" class="ico-18 margin_right">
    </a>
  </div>
  <div class="content">
    <button id="display-graph-{{graphId}}" data-graph-id="{{graphId}}" data-graph-type="{{graphType}}" class="btc bt_info performance_button">Display Chart</button>
    <div class="action left">
      <button class="bt_action">&lt;&lt;</button>
    </div>
    <div class="chart" id="graph-{{graphId}}" data-graph-id="{{graphId}}" data-graph-type="{{graphType}}">
    </div>
    <div class="action right">
      <button class="bt_action">&gt;&gt;</button>
    </div>
    <div class="chart chart-status" id="graph-status-{{graphId}}" data-graph-id="{{graphId}}" data-graph-type="status">
    </div>
  </div>
</div>
</script>
<script>
var charts = [];
var source = jQuery(\'#graph-line\').html();
var templateGraph = Handlebars.compile(source);
var autoRefresh = false;

function initRefresh() {
  var $refresh = jQuery(\'#chart-refresh\');
  $refresh.data(\'interval\', 0);
  $refresh.on(\'click\', function () {
    $refresh.find(\'.refresh-list\')
      .toggleClass(\'show\');
  });

  jQuery(document).on(\'click\', function (e) {
    var $elem = jQuery(e.target);
    if ($refresh.has($elem).length === 0) {
      $refresh.find(\'.refresh-list\')
        .removeClass(\'show\');
    }
  });

  $refresh.delegate(\'.refresh-icon\', \'click\', function (e) {
    e.preventDefault();
    e.stopPropagation();

    jQuery(\'.chart\').centreonGraph(\'refreshData\');
  });

  $refresh.delegate(\'.refresh-list > li\', \'click\', function () {
    var $interval = jQuery(this);
    var interval = $interval.data(\'interval\');
    var text = $interval.text();
    var parseInterval;
    if (interval == 0) {
      $refresh
        .find(\'.time\')
        .hide()
        .text(\'\');
      $refresh
        .find(\'.timer-icon\')
        .attr(\'src\', \'./img/icons/timer-gray.png\');
      jQuery(\'.chart\').centreonGraph(\'setRefresh\', 0);
    } else {
      parseInterval = interval.match(/(\\d+)([a-z]+)/i);
      $refresh
        .find(\'.time\')
        .show()
        .text(text);
      $refresh
        .find(\'.timer-icon\')
        .attr(\'src\', \'./img/icons/timer-blue.png\');
      jQuery(\'.chart\').centreonGraph(
        \'setRefresh\',
        moment.duration(
          parseInt(parseInterval[1], 10),
          parseInterval[2]
        ).asSeconds()
      );
    }
    $refresh.data(\'interval\', interval);
  });
}

function addChart(id, name, times) {
  var refreshInterval;
  var parseInterval;
  if (charts.indexOf(id) !== -1) {
    return;
  }
  times.height = 240;
  if (autoRefresh) {
    times.refresh = 300;
  }
  /* Add zoom */
  times.zoom = {
    enabled: true,
    onzoom: function (period) {
      var start = moment(period[0]);
      var end = moment(period[1]);
      jQuery(\'#StartDate\').val(start.format(\'YYYY-MM-DD\'));
      jQuery(\'#StartTime\').val(start.format(\'HH:mm\'));
      jQuery(\'#EndDate\').val(end.format(\'YYYY-MM-DD\'));
      jQuery(\'#EndTime\').val(end.format(\'HH:mm\'));
      changePeriod();
    }
  };
  /* Add auto refresh */
  refreshInterval = jQuery(\'#chart-refresh\').data(\'interval\');
  if (refreshInterval != 0) {
    parseInterval = refreshInterval.match(/(\\d+)([a-z]+)/i);
    times.refresh = moment.duration(
      parseInt(parseInterval[1], 10),
      parseInterval[2]
    ).asSeconds();
  }

  charts.push(id);
  jQuery(\'.graphZone\').append(
    templateGraph({
      graphId: id,
      graphType: \'service\',
      graphTitle: name,
      status: true
    })
  );
  jQuery(\'#graph-\' + id).centreonGraph(times);
  jQuery(\'#graph-status-\' + id).centreonGraph(times);
}

function loadChart(chart, callback) {
  var times = {};
  var end;
  chart = chart ? chart : [];

  if (chart.length === 0) {
    return;
  }

  if (jQuery(\'select[name="period"]\').val() === \'\') {
    times = {
      period: {
        startTime: jQuery(\'#StartDate\').val() + \' \' + jQuery(\'#StartTime\').val(),
        endTime: jQuery(\'#EndDate\').val() + \' \' + jQuery(\'#EndTime\').val()
      }
    };

    end = end;

  } else {
    times = {
      interval: jQuery(\'select[name="period"]\').val()
    };
    end = moment();
  }

  jQuery.ajax({
    url: \'./include/views/graphs/getGraphAjax.php\',
    type: \'post\',
    dataType: \'json\',
    data: {
      service_selector: chart
    },
    success: function (data) {
      for (var i = 0; i < data.length; i++) {
        if (charts.length >= nbDisplayedCharts) {
          alert(tooManyChartMsg);
          break;
        }
        addChart(data[i].id, data[i].title, times);
      }
      displayNav(end);
      if (typeof callback == \'function\') {
        callback();
      }
    }
  });
}

function switchCols(number) {

  jQuery(\'.graphZone\').removeClass(function (index, css) {
    return (css.match(/\\bcol\\S+/g) || []).join(\' \');
  });
  if (number === 2 || number === 3) {
    jQuery(\'.graphZone\').addClass(\'col\' + number);
  }
  jQuery(\'.graphZone .chart\').centreonGraph(\'resize\');
  jQuery(\'.ico-col\').removeClass(\'active\');
  jQuery(\'.ico-col-\' + number).addClass(\'active\');
}

function changePeriod() {
  var start;
  var end;
  jQuery(\'select[name="period"]\').val(\'\');
  start = jQuery(\'#StartDate\').val() + \' \' + jQuery(\'#StartTime\').val();
  end = jQuery(\'#EndDate\').val() + \' \' + jQuery(\'#EndTime\').val();
  /* Test If all period field are not empty */
  if (start.match(/^\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}$/) && end.match(/^\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}$/)) {
    /* Test if date start is lower of date end */
    if (moment(start).isBefore(end)) {
      jQuery(\'.graphZone .chart\').centreonGraph(
        \'setPeriod\',
        start,
        end
      );
      displayNav(end);
    } else {
      // @todo change
      alert(\'The start date must be before the date end.\');
    }
  }
}

function changeInterval() {
  if (jQuery(\'select[name="period"]\').val() === \'\') {
    return;
  }
  jQuery(\'.datepicker-iso\').datepicker(\'setDate\', null);
  jQuery(\'.timepicker\').val(\'\');
  jQuery(\'.graphZone .chart\').centreonGraph(
    \'setInterval\',
    jQuery(\'select[name="period"]\').val()
  );
  displayNav(moment());
}

function displayNav(end) {
  var now = moment().subtract(10, \'s\');
  if (now.isBefore(end)) {
    jQuery(\'.action.right > .bt_action\').prop(\'disabled\', true);
  } else {
    jQuery(\'.action.right > .bt_action\').prop(\'disabled\', false);
  }
}

jQuery(function () {
  initRefresh();
  loadChart(defaultCharts);

  /* Add events */
  jQuery(\'#select-chart\').on(\'change\', function () {
    var charts = [];

    jQuery(\'#select-chart > option\').each(function() {
      charts.push({
          id: jQuery(this).val(),
          text: jQuery(this).text()
      });
    });

    if (charts !== null && charts.length > 0) {
      loadChart(charts, function () {
        jQuery(\'#select-chart > option\').remove();
        jQuery(\'#select-chart\')
          .trigger(\'change\')
          .select2(\'close\');
      });
    }
  });

  /* Add events on click on action download image/CSV */
  jQuery(\'.graphZone\').delegate(\'a.actions,a.actions-simple\', \'click\', function (e) {
    var $a = jQuery(this);
    var baseUrl = $a.data(\'href\');
    var chartId = $a.parents(\'.graph\').data(\'graphId\');
    var start;
    var end;
    /* Get the period */
    if (jQuery(\'select[name="period"]\').val() === \'\') {
      start = moment(jQuery(\'#StartDate\').val() + \' \' + jQuery(\'#StartTime\').val());
      end = moment(jQuery(\'#EndDate\').val() + \' \' + jQuery(\'#EndTime\').val());
      duration = moment.duration(end.diff(start));
    } else {
      parseInterval = jQuery(\'select[name="period"]\').val().match(/(\\d+)([a-z]+)/i);
      duration = moment.duration(
        parseInt(parseInterval[1], 10),
        parseInterval[2]
      );
      start = moment();
      end = moment();
      start.subtract(parseInterval[1], parseInterval[2]);
    }

    e.preventDefault();
    if (baseUrl.indexOf(\'?\') !== -1) {
      baseUrl += \'&\';
    } else {
      baseUrl += \'?\';
    }
    baseUrl += \'chartId=\' + chartId + \'&start=\' + start.unix() + \'&end=\' + end.unix();
    window.location = baseUrl;
  });

  /* Remove a chart */
  jQuery(\'.graphZone\').delegate(\'.graph > .title > .remove\', \'click\', function () {
    var $elem = jQuery(this);
    var parent = jQuery(this).parents(\'.graph\');
    var chartId = parent.attr(\'id\').replace(\'graph_wrapper_\', \'\');
    var arrayIndex = charts.indexOf(chartId);
    if (arrayIndex > -1) {
      charts.splice(arrayIndex, 1);
      parent.remove();
    }
  });

  jQuery(\'.graphZone\').delegate(\'.action > .bt_action\', \'click\', function () {
    var $elem = jQuery(this);
    var text = $elem.text();
    var duration;
    var parseInterval;
    var start;
    var end;

    if (jQuery(\'select[name="period"]\').val() === \'\') {
      start = moment(jQuery(\'#StartDate\').val() + \' \' + jQuery(\'#StartTime\').val());
      end = moment(jQuery(\'#EndDate\').val() + \' \' + jQuery(\'#EndTime\').val());
      duration = moment.duration(end.diff(start));
    } else {
      parseInterval = jQuery(\'select[name="period"]\').val().match(/(\\d+)([a-z]+)/i);
      duration = moment.duration(
        parseInt(parseInterval[1], 10),
        parseInterval[2]
      );
      start = moment();
      end = moment();
      start.subtract(parseInterval[1], parseInterval[2]);
    }

    jQuery(\'select[name="period"]\').val(\'\');
    if (text === \'<<\') {
      end = start;
      jQuery(\'#EndDate\').val(end.format(\'YYYY-MM-DD\'));
      jQuery(\'#EndTime\').val(end.format(\'HH:mm\'));
      start.subtract(duration);
      jQuery(\'#StartDate\').val(start.format(\'YYYY-MM-DD\'));
      jQuery(\'#StartTime\').val(start.format(\'HH:mm\'));
    } else {
      start = end;
      jQuery(\'#StartDate\').val(start.format(\'YYYY-MM-DD\'));
      jQuery(\'#StartTime\').val(start.format(\'HH:mm\'));
      end.add(duration);
      jQuery(\'#EndDate\').val(end.format(\'YYYY-MM-DD\'));
      jQuery(\'#EndTime\').val(end.format(\'HH:mm\'));
    }
    changePeriod();
  });

  jQuery(\'.datepicker-iso\').datepicker({
    dateFormat: \'yy-mm-dd\'
  });

  /* Initialize the select chart */

  /* Define general options for select-chart */
  var minimumInputLength = 3;
  var selectChartOptions = {
    select2: {
      ajax: {
        url: \'./include/common/webServices/rest/internal.php?object=centreon_performance_service&action=list\'
      },
      minimumInputLength: minimumInputLength
    },
    additionnalFilters: {
      host: \'#host_filter\',
      hostgroup: \'#host_group_filter\',
      servicegroup: \'#service_group_filter\'
    }
  };

  jQuery(\'#service_group_filter\').centreonSelect2({
    select2: {
      ajax: {
        url: \'./include/common/webServices/rest/internal.php?object=centreon_configuration_servicegroup&action=list\'
      },
      containerCssClass: \'filter-select\'
    },
    allowClear: true
  });

  jQuery(\'#host_group_filter\').centreonSelect2({
    select2: {
      ajax: {
        url: \'./include/common/webServices/rest/internal.php?object=centreon_configuration_hostgroup&action=list\'
      },
      containerCssClass: \'filter-select\'
    },
    allowClear: true
  });

  jQuery(\'#host_filter\').centreonSelect2({
    select2: {
      ajax: {
        url: \'./include/common/webServices/rest/internal.php?object=centreon_configuration_host&action=list&h=all\'
      },
      containerCssClass: \'filter-select\'
    },
    allowClear: true,
    additionnalFilters: {
      hostgroup: \'#host_group_filter\'
    }
  });

  jQuery(\'#select-chart\').centreonSelect2(selectChartOptions);

  /* Add event for change minimumInputLength */
  function changeSelectChart() {
    var newOptions = selectChartOptions;
    var newInputLength = 3;

    if (jQuery(\'#host_group_filter\').val() !== null
      || jQuery(\'#service_group_filter\').val() !== null
      || jQuery(\'#host_filter\').val() !== null) {
      newInputLength = 0;
    }

    if (newInputLength !== minimumInputLength) {
      minimumInputLength = newInputLength;
      jQuery(\'#select-chart\').centreonSelect2(\'updateSettings\', {
        minimumInputLength: newInputLength
      });
    }
  }

  jQuery(\'#host_group_filter\').on(\'change\', changeSelectChart);
  jQuery(\'#service_group_filter\').on(\'change\', changeSelectChart);
  jQuery(\'#host_filter\').on(\'change\', changeSelectChart);

  /* Active drag and drop */
  jQuery(\'.graphZone\').sortable({
    handle: \'.title\',
  });

  jQuery(\'#first-tour\').centreonTour({
    name: \'v20401\',
    version: \'2.8.0\',
    autostart: true
  });
});
</script>
'; ?>