#!/bin/bash

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting mysql"
service mysql start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting apache"
service httpd start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting snmpd"
service snmpd start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centreon broker"
service cbd start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centren engine"
service centengine start

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting snmpd"
service snmpd start
