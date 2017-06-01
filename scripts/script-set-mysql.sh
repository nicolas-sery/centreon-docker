#!/bin/bash

# look for the passwords in the conf file
passRoot=$( cat /tmp/pass-mysql-root )
passCentreon=$( cat /tmp/pass-mysql-centreon )

# print those passwords
echo -e "The root password is:      \033[31m $passRoot \033[0m"
echo -e "The centreon password is:  \033[32m $passCentreon \033[0m"

# set those passwords in the database
mysql -u root <<EOF
CREATE USER "centreon"@"localhost" IDENTIFIED BY "$passCentreon";
GRANT ALL PRIVILEGES ON centreon . * TO "centreon"@"localhost";
USE mysql;
UPDATE user SET password=PASSWORD("$passRoot") WHERE User="root";
FLUSH PRIVILEGES;
exit
EOF
