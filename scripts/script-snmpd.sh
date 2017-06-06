#!/bin/bash

echo -e "The \033[32m /tmp/script-snmpd.sh \033[0m is now running"
echo "rocommunity public" > /etc/snmp/snmpd.conf
