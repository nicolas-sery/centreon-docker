-- Topology
INSERT INTO `topology` (`topology_id`, `topology_name`, `topology_parent`, `topology_page`, `topology_order`, `topology_group`, `topology_url`, `topology_url_opt`, `topology_popup`, `topology_modules`, `topology_show`) VALUES ('', 'Nagvis', 2, 243, 20, 1, './modules/centreon-nagvis/index.php', NULL, '0', '1', '1');
-- Admin page
INSERT INTO `topology` (`topology_id`, `topology_name`, `topology_parent`, `topology_page`, `topology_order`, `topology_group`, `topology_url`, `topology_url_opt`, `topology_popup`, `topology_modules`, `topology_show`) VALUES ('', 'Nagvis', 5, 513, 11, 1, './modules/centreon-nagvis/nagvis-config.php', NULL, '0', '1', '1');
INSERT INTO `topology` (`topology_id`, `topology_name`, `topology_parent`, `topology_page`, `topology_order`, `topology_group`, `topology_url`, `topology_url_opt`, `topology_popup`, `topology_modules`, `topology_show`) VALUES ('', 'Nagvis Configuration',513, 51301, 20, 1, './modules/centreon-nagvis/nagvis-config.php', NULL, '0', '1', '1');


-- Insert options
INSERT INTO `options` (`key`,`value`) VALUES ('centreon_nagvis_uri','/nagvis/frontend/nagvis-js/index.php');
INSERT INTO `options` (`key`,`value`) VALUES ('centreon_nagvis_path','/usr/share/nagvis/share/');

INSERT INTO `options` (`key`, `value`) VALUES ('centreon_nagvis_auth', 'single');
INSERT INTO `options` (`key`, `value`) VALUES ('centreon_nagvis_single_user', 'centreon_nagvis');