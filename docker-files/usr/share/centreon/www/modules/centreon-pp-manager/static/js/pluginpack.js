jQuery(function() {
    jQuery(".queryPluginPack").each(function() {
        var substr = jQuery(this).attr('id').split('_');
        var objType = substr[0];
        var ppId = substr[1];

        jQuery(this).qtip({
            content: {
                text: 'Loading...',
                ajax: {
                    type: 'POST',
                    url: './modules/centreon-pp-manager/core/manager/queryPluginPack.php',
                    data: {
                        obj_type: objType,
                        pp_id: ppId
                    },
                    success: function(data) {
                        this.set('content.text', data);
                    }
                }
            },
            style: {
                classes: 'ui-tooltip-white ui-tooltip-rounded ui-tooltip-shadow'
            }
        });
    });

    jQuery(".statusMessage").each(function() {
        var message = jQuery(this).data('message');

        jQuery(this).qtip({
            content: message,
            style: {
                classes: 'ui-tooltip-white ui-tooltip-rounded ui-tooltip-shadow'
            }
        });
    });


    jQuery(".more").live("click", function(){
        jQuery.ajax({
            type: 'POST',
            url: './modules/centreon-pp-manager/core/manager/action.php',
            data: {
                action: 'load',
                num: jQuery('#num').val(),
                limit: jQuery('#limit').val(),
                rows: jQuery('#rows').val()
            },
            dataType: 'json',
            success: function (data) {
                if (data != '') {
                    jQuery('#num').val(parseInt(jQuery('#num').val()) + 1);
                    jQuery('.plugin_entry.div_more').remove();
                    jQuery.each(data, function(key, value) {

                        var context = {
                            status: value.status,
                            status_color: status_color,
                            etat: value.etat,
                            name: value.name,
                            sname: value.sname,
                            version: value.version,
                            icon_file: value.icon_file,
                            upToDate: value.upToDate,
                            toUpdate: value.toUpdate,
                            toInstall: value.toInstall
                        };
                        jQuery("#frame").append(template(context));
                    });

                    var row = parseInt(jQuery('#rows').val());
                    var num = parseInt(jQuery('#num').val());
                    var limit = parseInt(jQuery('#limit').val());

                    if (row / num > limit) {
                        var diff = row - (limit * (num + 1));

                        if (diff > 0) {
                            var sMore = "<div class='plugin_entry div_more'>" +
                                        "<span class='center' title='View more'>" +
                                        "<p class='more'>"+diff+"<br />More</p></span></div>";

                            jQuery("#frame").append(sMore);
                        }
                    }
                }
            }
        });
    });

    /* Initialize template */
    var pluginPackTmpl = null;
    var paginationLimit = 20;

    /**
     * Resize the list container
     * @returns {undefined}
     */
    function resizePluginPackBlock()
    {
        var $mainTr = jQuery('#Tmainpage');
        var $pluginpackBlock = jQuery('.pluginpack-block');
        var pluginpackBlockHeight = $mainTr.height();
        var menuCount = false;

        $mainTr.children().not($pluginpackBlock).not('script').not('link').each(function (i, elem) {
            if (menuCount) {
                if (!jQuery(elem).hasClass('pathWay') && !jQuery(elem).hasClass('pathWayBracket')) {
                    pluginpackBlockHeight -= jQuery(elem).height();
                }
            } else {
                pluginpackBlockHeight -= jQuery(elem).height();
                if (jQuery(elem).hasClass('pathWay') || jQuery(elem).hasClass('pathWayBracket')) {
                    menuCount = true;
                }
            }
        });
        $pluginpackBlock.height(pluginpackBlockHeight);

        /* Fix for IE */
        if (/Trident/.match(navigator.userAgent)) {
            $pluginpackBlock.find('.pluginpack-list').width($pluginpackBlock.width() - 30);
        }
    }
    jQuery(window).on('resize', resizePluginPackBlock);
    resizePluginPackBlock();


    /**
     * Function for loading a pluginpack list with pagination
     * @returns {undefined}
     */
    function loadPluginPack()
    {
        /* Build data */
        var sUrl = './include/common/webServices/rest/internal.php?object=centreon_pp_manager_pluginpack&action=list&limit=' +
                    paginationLimit + '&offset=0&locale=' + locale;

        if (status != '' && status != 'all') {
            sUrl += '&status=' + status;
        }
        if (category != '') {
            sUrl += '&category=' + category;
        }
        if (name != '') {
            sUrl += '&name=' + name;
        }
        if (lastUpdate != '' && operator != '') {
            sUrl += '&lastUpdate=' + lastUpdate;
            sUrl += '&operator=' + operator;
        }

        jQuery('#pluginpack-list').centreonInfiniteScroll({
            ajaxUrlGetScroll: sUrl,
            template: pluginPackTmpl,
            limit: paginationLimit,
            noItemMessage: jQuery('#no-item-message')
        });
    }

    /**
     * Function to update plugin pack icon with installed style
     * @param {jQuery Object} selectedPluginPackEntry
     * @returns {undefined}
     */
    function setInstalledStyleToPluginPack(selectedPluginPackEntry, ppInfo)
    {
        selectedPluginPackEntry
            .addClass('pp-installed')
            .removeClass('pp-toUpdate');
        selectedPluginPackEntry.data('installed', true);
        selectedPluginPackEntry.data('uptodate', true);

        var installSpan = selectedPluginPackEntry.find('.install-pluginpack');
        var updateSpan = selectedPluginPackEntry.find('.update-pluginpack');

        installSpan.addClass('remove-pluginpack').removeClass('install-pluginpack');
        installSpan.find('img').attr('src', './img/icons/cross.png');
        updateSpan.remove();

        selectedPluginPackEntry.find('div.pp-icon-installed').remove();
        selectedPluginPackEntry.append('<div class="pp-icon-installed"><img src="./img/icons/checked.png"></div>');
        selectedPluginPackEntry.append('<a href="./main.php?p=65099&min=1&slug=' + ppInfo['slug'] +
                                       '" target="_blank" title="' + ppInfo['slug'] +
                                       '" class="bt-pp bt-pp-doc"><img src="./img/icons/doc.png" class="ico-18" /></a>');
    }

    /**
     * Function to update plugin pack icon with not installed style
     * @param {jQuery Object} selectedPluginPackEntry
     * @returns {undefined}
     */
    function setNotInstalledStyleToPluginPack(selectedPluginPackEntry)
    {
        selectedPluginPackEntry
            .removeClass('pp-installed')
            .removeClass('pp-toUpdate');

        var removeSpan = selectedPluginPackEntry.find('.remove-pluginpack');
        var updateSpan = selectedPluginPackEntry.find('.update-pluginpack');

        removeSpan.find('img').attr('src', './img/icons/add.png');
        removeSpan.addClass('install-pluginpack').removeClass('remove-pluginpack');
        updateSpan.remove();

        selectedPluginPackEntry.find('div.pp-icon-installed').remove();

        // Mask documentation button
        selectedPluginPackEntry.find(".bt-pp-doc").remove();

        selectedPluginPackEntry.data('installed', false);
        selectedPluginPackEntry.data('uptodate', false);

    }

    /**
     * Function to check if a plugin pack can be removed
     * @param {jQuery Object} selectedPluginPackEntry
     * @param {type} callback
     * @returns {undefined}
     */
    function checkRemovePluginPack(selectedPluginPackEntry)
    {
        jQuery.ajax({
            url: './include/common/webServices/rest/internal.php?object=centreon_pp_manager_pluginpack&action=checkUsed',
            type: 'POST',
            data: JSON.stringify({
                "name": selectedPluginPackEntry.data('name'),
                "slug": selectedPluginPackEntry.data('slug'),
                "version": selectedPluginPackEntry.data('version'),
                "id": selectedPluginPackEntry.data('id')
            }),
            dataType: 'json',
            success: function (data) {

                var hostCount = Object.keys(data['hosts']).length;
                var hostTemplateCount = Object.keys(data['host_templates']).length;
                var serviceCount = Object.keys(data['services']).length;
                var serviceTemplateCount = Object.keys(data['service_templates']).length;

                var commandCount = 0;
                jQuery.each(data['commands'], function(index, value) {
                    commandCount += Object.keys(value).length;
                });

                if (hostCount <= 0 && hostTemplateCount <= 0 &&
                    serviceCount <= 0 && serviceTemplateCount <= 0
                    && commandCount <= 0) {
                    checkDependency(selectedPluginPackEntry, removePluginPack);
                } else {

                    var depListing ="<div class='depListing'>";

                    var alertMessage= "<b class='msg-field error'>" + usedMessageStart + "</b><br>";
                    
                    if (hostCount > 0) {
                        depListing = "<b>" + usedMessageHost + " :</b><br>";
                       jQuery.each(data['hosts'], function(index, value) {
                           depListing += "&nbsp;&nbsp;" + index + "<br><hr>";
                           jQuery.each(value, function(index1, value1) {
                               depListing += "&nbsp;&nbsp;&nbsp;&nbsp;- " + value1 + "<br>";
                           });
                        });
                        depListing += "<br>";
                    }

                    if (hostTemplateCount > 0) {
                        depListing += "<b>" + usedMessageHostTpl + " :</b><br>";
                       jQuery.each(data['host_templates'], function(index, value) {
                           depListing += "&nbsp;&nbsp;" + index + "<br><hr>";
                           jQuery.each(value, function(index1, value1) {
                               depListing += "&nbsp;&nbsp;&nbsp;&nbsp;- " + value1 + "<br>";
                           });
                        });
                        depListing += "<br>";
                    }
                    
                    if (serviceCount > 0) {
                        depListing += "<b>" + usedMessageService + " :</b><br>";
                        jQuery.each(data['services'], function(index, value) {
                            depListing += "&nbsp;&nbsp;" + index + "<br><hr>";
                            jQuery.each(value, function(index1, value1) {
                                depListing += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- " + value1 + "<br>";
                            });
                        });
                        depListing += "<br>";
                    }

                    if (serviceTemplateCount > 0) {
                        depListing += "<b>" + usedMessageServiceTpl + " :</b><br>";
                        jQuery.each(data['service_templates'], function(index, value) {
                            depListing += "&nbsp;&nbsp;" + index + "<br><hr>";
                            jQuery.each(value, function(index1, value1) {
                                depListing += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- " + value1 + "<br>";
                            });
                        });

                        depListing += "<br>";
                    }
                    
                    if (commandCount > 0) {
                        var mess = "";

                        jQuery.each(data['commands'], function(index, value) {

                           // Do not display message if there is no one object
                           if (Object.keys(value).length == 0) {
                               return true;
                           }
                            
                           var text = "";

                           if (index == 'host_templates') text = usedMessageHostTpl;
                           else if (index == 'hosts') text = usedMessageHost;
                           else if (index == 'services') text = usedMessageService;
                           else if (index == 'service_templates') text = usedMessageServiceTpl;

                           mess += "  - " + text + "<br>";

                           var commandName = "";

                           jQuery.each(value, function(index1, value1) {
                                if (commandName != index1) {
                                    mess += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- " + index1 + "<br>";
                                    commandName = index1;
                                }
                                if (jQuery.trim(value1) != "") {
                                    mess += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- " + value1 + "<br>";
                                }
                           });
                        });
                        if (mess != "") {
                            depListing += usedMessageCommand + " :<br>" + mess + "</p>";
                        }
                    }

                    jQuery("#checkRemovePluginPackViewConfirm-msg").html(alertMessage + depListing);

                    var $popin = jQuery("#checkRemovePluginPackViewConfirm");
                    jQuery($popin).css('display', 'block');
                    $popin.centreonPopin("open");
                    $popin.parent().addClass('fixedDiv pluginpack-popin');
                    jQuery(".depListing").niceScroll({
                        cursoropacitymin : 0.5,
                        railpadding : {left: 10}
                    });

                    /*Hide nicescroll*/
                    $popin.find('.close').on('click', function () {
                        jQuery(".depListing").getNiceScroll().remove();
                    });
                    jQuery('#centreonPopinOverlay').on('click', function () {
                        jQuery(".depListing").getNiceScroll().remove();
                    });
                }
            }
        });
    }

    /**
     * Function to remove a plugin pack
     * @param {jQuery Object} selectedPluginPackEntry
     * @param {type} callback
     * @returns {undefined}
     */
    function removePluginPack(selectedPluginPackEntry, data)
    {
        jQuery.ajax({
            url: './include/common/webServices/rest/internal.php?object=centreon_pp_manager_pluginpack&action=remove',
            type: 'POST',
            data: JSON.stringify({'pluginpack' :[{
                "name": selectedPluginPackEntry.data('name'),
                "slug": selectedPluginPackEntry.data('slug'),
                "version": selectedPluginPackEntry.data('version'),
                "id": selectedPluginPackEntry.data('id')
            }]}),
            dataType: 'json',
            success: function (data) {
                setNotInstalledStyleToPluginPack(selectedPluginPackEntry);
            }
        });
    }

    /**
     * Install and/or update plugin packs
     * @param pluginPacksInfos
     */
    function installOrUpdatePluginPacks(pluginPacksInfos)
    {
        if (pluginPacksInfos.length > 0) {
            // do install and update in the order of the array
            jQuery.ajax({
                url: './include/common/webServices/rest/internal.php?object=centreon_pp_manager_pluginpack&action=installupdate',
                type: 'POST',
                data: JSON.stringify({'pluginpack' : pluginPacksInfos}),
                dataType: 'json',
                // Note : if a plugin pack install failed, execute too this code :
                success: function (data) {
                    // Display plugin pack(s) installed as installed
                    jQuery.each(data.installedOrUpdated, function(key, value) {
                        jQuery.each(jQuery(".pluginpack-entry"), function(key1, value1) {
                            var selectedPluginPack = jQuery(value1);
                            if (value['slug'] == selectedPluginPack.data('slug')) {
                                // Display the plugin pack as installed
                                setInstalledStyleToPluginPack(selectedPluginPack, value);
                            }
                        });
                    });
                    
                    // display an error message when a installation of a plugin pack has failed
                    if (data.failed.problematic !== undefined) {
                        //Note : this text is not translated
                        failedActionMessage("installing", data.failed);
                    }
                }
            });
        }
    }

    /**
     * Install a plugin pack selected by user
     * @param {jQuery Object} selectedPluginPackEntry
     * @param data
     */
    function installPluginPack(selectedPluginPackEntry, data)
    {
        var iToInstall = false, iToUpgrade = false;
        var aPluginPackToInstallOrUpdate = [];

        installMsgSlugs = "";
        updateMsgSlugs = "";

        jQuery.each(data, function(key, value) {
            // Add a plugin to install or update
            if (value['status'] === 'toInstall') {
                aPluginPackToInstallOrUpdate.push({
                    'slug': value['slug'],
                    'version': value['version'],
                    'action': 'install'
                });
                installMsgSlugs += " + " + value['slug'] + "<br>";
                iToInstall = true;
            } else if (value['status'] === 'toUpgrade') {
                aPluginPackToInstallOrUpdate.push({
                    'slug': value['slug'],
                    'version': value['version'],
                    'action': 'update'
                });
                updateMsgSlugs += " + " + value['slug'] + "<br>";
                iToUpgrade = true;
            }
        });

        jQuery("#plugin-to-install-message-slugs").html(installMsgSlugs);
        jQuery("#plugin-to-upgrade-message-slugs").html(updateMsgSlugs);
        
        jQuery("#plugin-to-install-message").toggle(iToInstall);

        jQuery("#plugin-to-upgrade-message").toggle(iToUpgrade);

        // Have dependencies to install or update
        if (aPluginPackToInstallOrUpdate.length > 1) {

            // Set name of plugin pack (in part of pop-in)
            jQuery("#pp-name-in-check-dependency").html(selectedPluginPackEntry.data('name'));

            var $popin = jQuery("#checkDependencyPPViewConfirm");
            jQuery($popin).css('display', 'block');
            $popin.centreonPopin("open");
            $popin.parent().addClass('fixedDiv pluginpack-popin');

            $popin.find('button.bt_success').off();
            $popin.find('button.bt_success').on('click', function () {
                $popin.centreonPopin("close");
                
                // Install and/or update PP
                installOrUpdatePluginPacks(aPluginPackToInstallOrUpdate);
            });

            // Button 'OK' (only button exist in this error popin)
            $popin.find('button.bt_default').on('click', function (e) {
                $popin.centreonPopin("close");
            });
        } else {
            // Install and/or update PP
            installOrUpdatePluginPacks(aPluginPackToInstallOrUpdate);
        }

    }

    /**
     * Update a plugin pack selected by user
     * @param {jQuery Object} selectedPluginPackEntry
     * @param data
     */
    function updatePluginPack(selectedPluginPackEntry, data)
    {
        var iToInstall = false, iToUpgrade = false;
        var aPluginPackToInstallOrUpdate = [];

        installMsgSlugs = "";
        updateMsgSlugs = "";

        jQuery.each(data, function(key, value) {
            // Add a plugin to install or update
            if (value['status'] === 'toInstall') {
                aPluginPackToInstallOrUpdate.push({
                    'slug': value['slug'],
                    'version': value['version'],
                    'action': 'install'
                });
                installMsgSlugs += " + " + value['slug'] + "<br>";
                iToInstall = true;
            } else if (value['status'] === 'toUpgrade') {
                aPluginPackToInstallOrUpdate.push({'slug': value['slug'],
                    'version': value['version'],
                    'action': 'update'
                });
                updateMsgSlugs += " + " + value['slug'] + "<br>";
                iToUpgrade = true;
            }
        });

        jQuery("#plugin-to-install-message-slugs").html(installMsgSlugs);
        jQuery("#plugin-to-upgrade-message-slugs").html(updateMsgSlugs);

        jQuery("#plugin-to-install-message").toggle(iToInstall);

        jQuery("#plugin-to-upgrade-message").toggle(iToUpgrade);

        // Have dependencies to install or update
        if (aPluginPackToInstallOrUpdate.length > 1) {

            // Set name of plugin pack (in part of pop-in)
            jQuery("#pp-name-in-check-dependency").html(selectedPluginPackEntry.data('name'));

            var $popin = jQuery("#checkDependencyPPViewConfirm");
            jQuery($popin).css('display', 'block');
            $popin.centreonPopin("open");
            $popin.parent().addClass('fixedDiv pluginpack-popin');

            $popin.find('button.bt_success').off();
            $popin.find('button.bt_success').on('click', function () {
                $popin.centreonPopin("close");
                
                // Install and/or update PP
                installOrUpdatePluginPacks(aPluginPackToInstallOrUpdate);
            });

            $popin.find('button.bt_default').on('click', function (e) {
                $popin.centreonPopin("close");
            });
        } else {
            // Install and/or update PP
            installOrUpdatePluginPacks(aPluginPackToInstallOrUpdate);
        }
    }

    /**
     * 
     * @param {jQuery Object} selectedPluginPackEntry
     * @param callback
     */
    function checkDependency(selectedPluginPackEntry, callback)
    {
        jQuery.ajax({
            url: './include/common/webServices/rest/internal.php?object=centreon_pp_manager_pluginpack&action=checkDependency',
            type: 'POST',
            data: JSON.stringify({
                "name": selectedPluginPackEntry.data('name'),
                "slug": selectedPluginPackEntry.data('slug'),
                "version": selectedPluginPackEntry.data('version'),
                "id": selectedPluginPackEntry.data('id')
            }),
            dataType: 'json',
            success: function (data) {
                callback(selectedPluginPackEntry, data);
            },
            error: function(err) {

                if (err.responseText) {

                    var errorTxt = err.responseText.replace(/\"/g, "");

                    var msg = "<b class='msg-field.error'>" + errorTxt + "</b>";

                    // Set text in popin
                    var $popin = jQuery("#errorIncheckDependency");
                    $popin.find("p").html(msg);

                    jQuery($popin).css('display', 'block');
                    $popin.centreonPopin("open");
                    $popin.parent().addClass('fixedDiv pluginpack-popin');

                    $popin.find('button.bt_default').on('click', function () {
                        $popin.centreonPopin("close");
                    });
                }
            }
        });
    }
    
    /**
     * Display error message when an operation has failed
     * @param {string} failedAction
     * @param {array} failedDatas
     * @returns {undefined}
     */
    function failedActionMessage(failedAction, failedDatas)
    {
        finalMessage = "An error occured while " + failedAction + " the following plugin pack :";
        finalMessage += "<br> + " + failedDatas.problematic.slug;
        
        if (failedDatas.remaining.length > 0) {
            finalMessage += "<br><br>So the following plugin pack were not processed";
            jQuery.each(failedDatas.remaining, function(key, value) {
                finalMessage += "<br> + " + value['slug'];
            });
        }

        // Set text in popin
        var $popin = jQuery("#failedActionMessage");
        $popin.find("p").html(finalMessage);

        jQuery($popin).css('display', 'block');
        $popin.centreonPopin("open");
        $popin.parent().addClass('fixedDiv pluginpack-popin');

        // unique button : button OK
        $popin.find('button.bt_success').on('click', function (e) {
            $popin.centreonPopin("close");
        });
    }

    /* Configure NProgress */
    NProgress.configure({
        parent: '#progress-container',
        showSpinner: false
    });

    jQuery(document).ajaxStop(function() {
        jQuery('#pluginpack-container-list').niceScroll();
    });
    
    /* Call the list of pluginpack */
    if (pluginPackTmpl === null) {

        /* Get template file */
        jQuery.ajax({
            url: './modules/centreon-pp-manager/static/tpl/pluginpack.hbs',
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                pluginPackTmpl = Handlebars.compile(data);
                loadPluginPack();
            }
        });

        /* Set values for first filter dropdowns */
        jQuery('#name').val(name);
        jQuery('#category').val(category);
        jQuery('#status').val(status);

        /* Set values for last update filter dropdown */
        jQuery('#operator').val(operator);
        jQuery('#lastUpdate').val(lastUpdate);

    } else {
        loadPluginPack();
    }

    /* Set datepicker */
    jQuery('#lastUpdate').datepicker({
        dateFormat: 'yy-mm-dd'
    });

    /* Event on hover the installed block */
    jQuery(document).on('mouseenter', '.pluginpack-entry.pp-can-be-installed', function (e) {
        var $elem = jQuery(e.currentTarget);
        $elem.find('.actionbar').css('right', "-2px");
    });

    jQuery(document).on('mouseleave', '.pluginpack-entry.pp-can-be-installed', function (e) {
        var $elem = jQuery(e.currentTarget);
        $elem.find('.actionbar').css('right', '-30px');
    });

    jQuery(document).on('click', '.showDetail', function(e){
        loadDetail(1);
    });

    jQuery(document).on('click', '.pluginpack-entry', function (e) {
        e.stopPropagation();
        var $pluginPackEntry = jQuery(e.currentTarget);

        jQuery('.pp-details-wrapper').hide();

        jQuery('#pp-name').html($pluginPackEntry.data('name'));
        jQuery('#pp-name').addClass('pp-title');
        jQuery('#pp-name').attr('title', $pluginPackEntry.data('name'));

        jQuery('#pp-version').text('v.' + $pluginPackEntry.data('version'));

        jQuery('#pp-status').text($pluginPackEntry.data('label-status'));

        jQuery('#pp-status').addClass("" + $pluginPackEntry.data('status-badge'));

        // Insert PP Description (in markdown)
        jQuery('#pp-description').html(
            marked($pluginPackEntry.data('description'))
        );

        jQuery('#pp-logo').css('background-image', 'url(data:image/png;base64,'+ $pluginPackEntry.data('icon') +')');

        var $ppDetailContainer = jQuery("#pp-detail");
        $ppDetailContainer.data('id', $pluginPackEntry.data('id'));
        $ppDetailContainer.data('name', $pluginPackEntry.data('name'));
        $ppDetailContainer.data('slug', $pluginPackEntry.data('slug'));
        $ppDetailContainer.data('version', $pluginPackEntry.data('version'));

        jQuery('#pp-detail-action-bar').empty();
        if ($pluginPackEntry.data('can_be_installed')) {

            if ($pluginPackEntry.data('installed') === false) {
                jQuery('#pp-detail-action-bar').append('<span class="border-radius icon-bloc install-pluginpack">' +
                                                        '<img src="./img/icons/add.png" alt="install" /></span>');
            } else {
                jQuery('#pp-detail-action-bar').append('<span class="border-radius icon-bloc remove-pluginpack">' +
                                                       '<img src="./img/icons/cross.png" alt="remove" /></span>');
                if ($pluginPackEntry.data('uptodate') === false) {
                    jQuery('#pp-detail-action-bar').append('<span class="border-radius icon-bloc update-pluginpack">' +
                                                            '<img src="./img/icons/up_arrow.png" alt="upload" /></span>');
                }
            }
        } else {
            jQuery('.pp-details-wrapper').show();
        }
        
        var $popin = jQuery("#pluginpack-detail");
        jQuery($popin).css('display', 'block');
        $popin.centreonPopin("open");
        $popin.parent().addClass('fixedDiv pluginpack-popin');
    });
    
    jQuery(document).on('click', '.bt-pp-doc', function (e) {
        e.stopPropagation();
    });
    
    jQuery(document).on('click', '.install-pluginpack', function (e) {
        e.stopPropagation();

        // Close the other pop-in before display the pop-in
        var $popinDetailPP = jQuery("#pluginpack-detail");
        $popinDetailPP.centreonPopin("close");

        var $pluginPackEntry2 = jQuery(e.currentTarget).parent().parent();

        // Rewrite
        $pluginPackEntry2 = jQuery('.pluginpack-entry[data-slug="'+$pluginPackEntry2.data('slug')+'"]');

        checkDependency($pluginPackEntry2, installPluginPack);

    });
    
    jQuery(document).on('click', '.update-pluginpack', function (e) {
        e.stopPropagation();

        // Close the other pop-in before display the pop-in
        var $popinDetailPP = jQuery("#pluginpack-detail");
        $popinDetailPP.centreonPopin("close");

        var $popin = jQuery("#updatePPViewConfirm");
        jQuery($popin).css('display', 'block');
        $popin.centreonPopin("open");
        $popin.parent().addClass('fixedDiv pluginpack-popin');

        var $pluginPackEntry2 = jQuery(e.currentTarget).parent().parent();

        // Rewrite
        $pluginPackEntry2 = jQuery('.pluginpack-entry[data-slug="'+$pluginPackEntry2.data('slug')+'"]');

        var updateButton = $popin.find('button.bt_info');
        updateButton.off();
        updateButton.on('click', function () {
            $popin.centreonPopin("close");

            // Update plugin pack
            checkDependency($pluginPackEntry2, updatePluginPack);
        });

        $popin.find('button.bt_default').on('click', function (e) {
            $popin.centreonPopin("close");
        });
    });

    jQuery(document).on('click', '.remove-pluginpack', function (e) {
        e.stopPropagation();

        // Close the other pop-in before display the pop-in
        var $popinDetailPP = jQuery("#pluginpack-detail");
        $popinDetailPP.centreonPopin("close");

        var $popin = jQuery("#removePPViewConfirm");
        jQuery($popin).css('display', 'block');
        $popin.centreonPopin("open");
        $popin.parent().addClass('fixedDiv pluginpack-popin');

        var $pluginPackEntry2 = jQuery(e.currentTarget).parent().parent();

        // Rewrite
        $pluginPackEntry2 = jQuery('.pluginpack-entry[data-slug="'+$pluginPackEntry2.data('slug')+'"]');
        
        $popin.find('button.bt_danger').off();
        $popin.find('button.bt_danger').on('click', function (e) {
            e.stopPropagation();
            // Remove plugin pack
            checkRemovePluginPack($pluginPackEntry2);
            $popin.centreonPopin("close");
        });

        $popin.find('button.bt_default').on('click', function (e) {
            $popin.centreonPopin("close");
        });
    });
});
