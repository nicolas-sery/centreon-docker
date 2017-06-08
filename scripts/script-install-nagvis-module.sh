#!/bin/bash

echo ""
echo -e "install-nagvis-module.sh is installing the centreon module \033[33m centreon-nagvis-1.1.1.tar.gz \033[0m"
echo ""
cd /usr/local/src
wget https://s3-eu-west-1.amazonaws.com/centreon-download/public/Modules/centreon-nagvis/centreon-nagvis-1.1.1.tar.gz
tar xzf centreon-nagvis-1.1.1.tar.gz
cp --force /tmp/config-files/nagvis/install.sql /usr/local/src/centreon-nagvis-1.1.1/www/modules/centreon-nagvis/sql/install.sql
cp --force /tmp/config-files/nagvis/nagvis.ihtml /usr/local/src/centreon-nagvis-1.1.1/www/modules/centreon-nagvis/nagvis.ihtml
mv --force /usr/local/src/centreon-nagvis-1.1.1/www/modules/centreon-nagvis /usr/share/centreon/www/modules/

cd /usr/local/nagvis/
sed -i -e "s/get_error/get_error_nagvis/g" ./share/server/core/functions/html.php
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/ext/php-gettext-1.0.9/gettext.inc
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/classes/CoreAuthorisationHandler.php
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/classes/CoreSQLiteHandler.php
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/classes/GlobalLanguage.php
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/classes/CoreAuthHandler.php
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/classes/CoreMySQLHandler.php
sed -i -e "s/debug(/debug_nagvis(/g" ./share/server/core/functions/debug.php
sed -i -e "s/microtime_float(/microtime_float_nagis(/g" ./share/server/core/functions/debug.php

cp --force /tmp/config-files/nagvis/global.php /usr/local/nagvis/share/server/core/defines/global.php
