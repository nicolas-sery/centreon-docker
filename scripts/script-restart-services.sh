#!/bin/bash

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting mysql"
service mysql restart

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting apache"
service httpd restart

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting snmpd"
service snmpd restart

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centreon broker"
service cbd restart

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centren engine"
service centengine restart

