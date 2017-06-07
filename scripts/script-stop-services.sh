#!/bin/bash

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is stoping mysql"
echo ""
service mysql stop

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is stoping apache"
echo ""
service httpd stop

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is stoping centreon broker"
echo ""
service cbd start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is stoping centren engine"
echo ""
service centengine stop

