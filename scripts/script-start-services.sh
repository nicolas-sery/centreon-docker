#!/bin/bash

echo -e "The \033[32m /tmp/scripts/script-start-services.sh \033[0m is starting mysql"
echo ""
service mysql start

echo -e "The \033[32m /tmp/scripts/script-start-services.sh \033[0m is starting apache"
echo ""
service httpd start

echo -e "The \033[32m /tmp/scripts/script-start-services.sh \033[0m is starting centreon broker"
echo ""
service cbd start

echo -e "The \033[32m /tmp/scripts/script-start-services.sh \033[0m is starting centren engine"
echo ""
service centengine start

