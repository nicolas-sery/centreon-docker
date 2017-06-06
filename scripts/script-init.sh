#!/bin/bash

#echo -e "init.sh is setting up the history using \033[32m /tmp/script-set-bash_history.sh \033[0m"
#bash /tmp/script-set-bash_history.sh

#echo -e "init.sh is starting the services using \033[32m /tmp/script-start-services.sh \033[0m"
#bash /tmp/script-start-services.sh

#echo -e "init.sh is  setting up the database using \033[32m /tmp/script-set-mysql.sh \033[0m"
#bash /tmp/script-set-mysql.sh

#echo -e "init.sh is installing Nagvis using \033[32m /tmp/script-install-nagvis.sh \033[0m"
#bash /tmp/script-install-nagvis.sh

#echo -e "init.sh is setting the folders rights using \033[32m /tmp/script-set-folder-right.sh \033[0m"
#bash /tmp/script-set-folder-right.sh

echo -e "init.sh is keeping the docker alive using \033[32m /tmp/script-keep-awake.sh \033[0m"
bash /tmp/script-keep-awake.sh
