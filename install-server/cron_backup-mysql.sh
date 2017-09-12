#!/bin/bash
/usr/bin/docker exec -i centreon-docker mysqldump --opt -u root -p9rUjg5a8aZ centreon > /home/centreon/backup-db/centreon-backup.sql 2> /home/centreon/backup-db/script-backup-mysql.log
/usr/bin/docker exec -i centreon-docker service mysql stop
/usr/bin/docker cp centreon-docker:/var/lib/mysql /home/mysql-clean
/usr/bin/docker exec -i centreon-docker service mysql start
