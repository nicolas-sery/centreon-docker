<link rel="stylesheet" href="./Themes/Centreon-2/markdown.css">
<link rel="stylesheet" href="./modules/centreon-pp-manager/static/css/style.css">
<script type="text/javascript" src="./include/common/javascript/tool.js"></script>
<script type="text/javascript" src="./include/common/javascript/marked.js"></script>

<div id="header">
    <div id="centreon_logo">
        <img src="img/centreon.png" title="Centreon Logo" id="logo">
    </div>
    <h2 class="pp-doc-title">Plugin pack | {$name}</h2>
</div>

<div class="marked-wrapper md-preview full-page"></div>
    <textarea id="md-procedure" style="display: none;">{$monitoringProcedure}</textarea>
<script type="text/javascript">
    $wrapper = jQuery('.marked-wrapper');
    $content = jQuery('#md-procedure').val();
    $wrapper.html(marked($content));
</script>