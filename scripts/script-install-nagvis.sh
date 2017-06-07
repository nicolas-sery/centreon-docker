#!/bin/bash

# Telecharge et dezip Nagvis
echo -e "install-nagvis.sh is downloading Nagvis on \033[33m http://www.nagvis.org/share/nagvis-1.8.5.tar.gz \033[0m"
cd /usr/local/src
wget http://www.nagvis.org/share/nagvis-1.8.5.tar.gz
tar xzf nagvis-1.8.5.tar.gz
cd nagvis-1.8.5

# Installation silencieuse de Ngavis
echo -e "install-nagvis.sh is installing Nagvis using this command: \033[33m bash install.sh -n /usr/lib/nagios -p /usr/local/nagvis -b ndo2db -u apache -g apache -W /nagvis -w /etc/httpd/conf.d/ -q \033[0m"
bash install.sh -n /usr/lib/nagios -p /usr/local/nagvis -b ndo2db -u apache -g apache -W /nagvis -w /etc/httpd/conf.d/ -q

# Configuration de Nagvis
echo -e "install-nagvis.sh is installing the Centreon backend by clonning this repo \033[33m git clone https://github.com/centreon/centreon-nagvis-backend.git \033[0m"
cd /usr/local/src
git clone https://github.com/centreon/centreon-nagvis-backend.git
mv centreon-nagvis-backend/GlobalBackendcentreonbroker.php /usr/local/nagvis/share/server/core/classes/
chown apache:apache /usr/local/nagvis/share/server/core/classes/GlobalBackendcentreonbroker.php

echo -e "install-nagvis.sh is setting up the configuration file in \033[33m /usr/local/nagvis/etc/nagvis.ini.php \033[0m"
cp /tmp/config-files/nagvis/nagvis.ini.php /usr/local/nagvis/etc/
