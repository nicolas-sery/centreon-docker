#!/bin/bash

# Telecharge et dezip Nagvis
cd /usr/local/src
wget http://www.nagvis.org/share/nagvis-1.8.5.tar.gz
tar xzf nagvis-1.8.5.tar.gz
cd nagvis-1.8.5

# Installation silencieuse de Ngavis
bash install.sh -n /usr/lib/nagios -p /usr/local/nagvis -b ndo2db -u apache -g apache -W /nagvis -w /etc/httpd/conf.d/ -q

# Configuration de Nagvis
cd /usr/local/src
git clone https://github.com/centreon/centreon-nagvis-backend.git
mv centreon-nagvis-backend/GlobalBackendcentreonbroker.php /usr/local/nagvis/share/server/core/classes/

cp /tmp/nagvis.ini.php /usr/local/nagvis/etc/

service httpd restart
