#!/bin/bash

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting mysql"
service mysql status

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting apache"
service httpd status

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centreon broker"
service cbd status

echo -e "The \033[32m /tmp/script-set-mysql\033[0m is starting centren engine"
service centengine status

