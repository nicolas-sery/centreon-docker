#!/bin/bash

chmod 775 /etc/centreon
chown -R centreon:centreon /etc/centreon
chmod 775 /etc/centreon-broker
chown -R centreon-broker:centreon-broker /etc/centreon-broker
chmod 775 /etc/centreon-engine
chown -R centreon-engine:centreon-engine /etc/centreon-engine
chmod 755 /usr/share/centreon
chown -R centreon:centreon /usr/share/centreon
chmod 755 /var/lib/mysql
chown -R mysql:mysql /var/lib/mysql
chmod 775 /var/lib/centreon
chown -R centreon:centreon /var/lib/centreon
chmod 775 /var/lib/centreon-broker
chown -R centreon-broker:centreon-broker /var/lib/centreon-broker
chmod 755 /var/lib/net-snmp
chown -R root:root /var/lib/net-snmp
chmod 775 /var/log/centreon
chown -R centreon:centreon /var/log/centreon
chmod 775 /var/log/centreon-broker
chown -R centreon-broker:centreon-broker /var/log/centreon-broker
chmod 755 /var/log/centreon-engine
chown -R centreon-engine:centreon-engine /var/log/centreon-engine
