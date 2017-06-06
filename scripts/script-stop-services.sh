#!/bin/bash

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting mysql"
service mysql stop

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting apache"
service httpd stop

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting snmpd"
service snmpd stop

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centreon broker"
service cbd start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centren engine"
service centengine stop

