# Install centreon 2.8.8 in a docker with data persistence

*Last update: 2017-09-12 b*

`The server running docker is an Ubuntu 16.04`

Install docker.

    apt-get install git docker docker-compose
Create the work directory and move inside.

    mkdir /home/centreon-docker
    cd /home/centreon-docker
Clone the reposetory.

    git init
    git pull git@github.com:nicolas-sery/centreon-docker.git
Edit the MySQL password and user in:

    config-files/pass-mysql-centreon
    config-files/pass-mysql-root
Build the image.

    docker build -t centreon-docker:vxx .
Note: the name of the images "centreon-docker:v__xx__" is defined in the "docker-compose.yml". It's the value of "image : […]".
Start the docker with the **docker-compose-install.yml** which, as mention, is the file for the installation.

    docker-compose -f docker-compose-install.yml up -d
Nagvis installation.

    docker exec -ti centreon-docker bash /tmp/script-install-nagvis.sh
At this point, the process is not complete yet because it's necessary to map the folders used by Centreon on the host is order to have some data persistence.
To copy the folders used by Centreon (and Nagvis in this case) lauch "script-right-docker-files-to-host.sh".

    bash script-right-docker-files-to-host.sh
When this is done, the docker must be killed and restarted with **docker-compose-run.yml** which map the folder to the hosts.

    docker-compose -f docker-compose-install.yml down
    docker-compose -f docker-compose-run.yml up -d
Now it's time to set the right to the maped folders, start the services and mysql up.

    docker exec -ti centreon-docker bash /tmp/script-set-folder-right.sh
    docker exec -ti centreon-docker bash /tmp/script-start-services.sh
    docker exec -ti centreon-docker bash /tmp/script-set-mysql.sh
    docker exec -ti centreon-docker bash /tmp/script-install-nagvis-module.sh
Centreon is now available at http://<your-server>/centreon/. The installation has to be finish throw the web UI.
