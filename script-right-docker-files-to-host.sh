#!/bin/bash

BASE_DIRECTORY="/home/centreon/mapped-folder"

DIRECTORIES="/etc/centreon /etc/centreon-broker /etc/centreon-engine /usr/share/centreon /var/lib/mysql /var/lib/centreon /var/lib/centreon-broker /var/lib/net-snmp /var/log/centreon /var/log/centreon-broker /var/log/centreon-engine /usr/local/nagvis /usr/local/src/centreon-nagvis-backend /var/lib/php /var/log/httpd /etc/pki /etc/httpd/conf.d"

#
# Affichage d'un log d'erreur et ajout dans la variable globale pour l'envoyer par mail
# @param string le message d'erreur
#
function echoError()
{
    datetime=`date +"%Y-%m-%d %T"`
    echo -e "\033[31m${datetime} [ERROR] $@\033[0m" 1>&2;
}
 
#
# Affichage d'un log d'information
# @param string le message d'information
#
function echoInfo()
{
    datetime=`date +"%Y-%m-%d %T"`
    echo -e "\033[33m${datetime} [INFO] $@\033[0m"
}
 
#
# Affichage d'un log de succès
# @param string le message de succès
#
function echoSuccess()
{
    datetime=`date +"%Y-%m-%d %T"`
    echo -e "\033[32m${datetime} [SUCCESS] $@\033[0m"
}

#
# MAIN PROGRAM 💩 !! :)
#

echoInfo "Copy files from container to host (${BASE_DIRECTORY})"
echoInfo "The directories copy are :"

for directory in ${DIRECTORIES}; do
    echoInfo "  - ${directory}"
done

for directory in ${DIRECTORIES}; do
    echoInfo "Create ${BASE_DIRECTORY}${directory}"
    tree -ugfi ${directory} >> /tmp/list-right
    if [ $? -eq 0 ]; then
        echoSuccess "${BASE_DIRECTORY}${directory} created"
    else
        echoError "${BASE_DIRECTORY}${directory} NOT created"
        continue
    fi
done
