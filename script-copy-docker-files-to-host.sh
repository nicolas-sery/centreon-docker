#!/bin/bash


BASE_DIRECTORY="/home/build-local-image/docker-files"

DIRECTORIES="/etc/centreon /etc/centreon-broker /etc/centreon-engine /usr/share/centreon /var/lib/mysql /var/lib/centreon /var/lib/centreon-broker /var/lib/net-snmp /var/log/centreon /var/log/centreon-broker /var/log/centreon-engine"

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

echoInfo "Get the container id"
#DOCKER_ID=`docker ps | grep 'centreon-docker:v2' | awk '{print $1}'`
DOCKER_ID=$1
echoSuccess "The container id is ${DOCKER_ID}"

DOCKER_VOLUMES="  volumes:\n"
DOCKER_COMMANDS=""

for directory in ${DIRECTORIES}; do
    echoInfo "Create ${BASE_DIRECTORY}${directory}"
    mkdir -p "${BASE_DIRECTORY}${directory}"
    if [ $? -eq 0 ]; then
        echoSuccess "${BASE_DIRECTORY}${directory} created"
    else
        echoError "${BASE_DIRECTORY}${directory} NOT created"
        continue
    fi

    echoInfo "Copy \"${DOCKER_ID}:${directory}\" to \"${BASE_DIRECTORY}$(dirname ${directory})/\""
    docker cp ${DOCKER_ID}:${directory} ${BASE_DIRECTORY}$(dirname ${directory})/
    if [ $? -eq 0 ]; then
        echoSuccess "${DOCKER_ID}:${directory} copied"
        DOCKER_VOLUMES="${DOCKER_VOLUMES}    - ${BASE_DIRECTORY}${directory}:${directory}:rw\n"
        mode=`docker exec -it ${DOCKER_ID} stat -c "chmod %a %n" ${directory}`
        user=`docker exec -it ${DOCKER_ID} ls -ld ${directory} | awk '{print $3}'`
        group=`docker exec -it ${DOCKER_ID} ls -ld ${directory} | awk '{print $4}'`
        DOCKER_COMMANDS="${DOCKER_COMMANDS}${mode}\\n"
        DOCKER_COMMANDS="${DOCKER_COMMANDS}chown -R ${user}:${group} ${directory}\\n"
    else
        echoError "${DOCKER_ID}:${directory} NOT copied"
        continue
    fi
done

echo -e "\033[31m \033[0m"
echo -e "\033[31m#########################################\033[0m"
echo -e "\033[31m# ADD THIS IN YOUR docker-compose.yml    \033[0m"
echo -e "\033[31m#                   💩                   \033[0m"
echo -e "\033[31m#########################################\033[0m"
echo -e "\033[31m \033[0m"

echo -e "${DOCKER_VOLUMES}"

echo -e "\033[31m \033[0m"
echo -e "\033[31m#########################################\033[0m"
echo -e "\033[31m#    ADD THIS IN YOUR /tmp/script.sh     \033[0m"
echo -e "\033[31m#          IN YOUR CONTAINER             \033[0m"
echo -e "\033[31m#                   💩                   \033[0m"
echo -e "\033[31m#########################################\033[0m"
echo -e "\033[31m \033[0m"

echo -e "${DOCKER_COMMANDS}"
echo ""
