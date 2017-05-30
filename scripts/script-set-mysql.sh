#!/bin/bash

passRoot=$( cat /tmp/pass-mysql-root )
passCentreon=$( cat /tmp/pass-mysql-centreon )

mysql -u root <<EOF
CREATE USER "centreon"@"localhost" IDENTIFIED BY "$passCentreon";
GRANT ALL PRIVILEGES ON centreon . * TO "centreon"@"localhost";
USE mysql;
UPDATE user SET password=PASSWORD("$passRoot") WHERE User="root";
FLUSH PRIVILEGES;
exit
EOF
