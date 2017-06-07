#!/bin/bash

echo -e "The \033[32m /tmp/scripts/script-restart-services.sh \033[0m is restarting mysql"
echo ""
service mysql restart

echo -e "The \033[32m /tmp/scripts/script-restart-services.sh \033[0m is restarting apache"
echo ""
service httpd restart

echo -e "The \033[32m /tmp/scripts/script-restart-services.sh \033[0m is restarting centreon broker"
echo ""
service cbd restart

echo -e "The \033[32m /tmp/scripts/script-restart-services.sh \033[0m is restarting centren engine"
echo ""
service centengine restart

