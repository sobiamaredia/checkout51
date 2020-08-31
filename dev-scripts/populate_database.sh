#!/bin/bash

USERNAME=${DEV_MYSQL_USER}
PASSWORD=${DEV_MYSQL_PASSWORD}
MYSQL_HOST=${MYSQL_HOST}

echo
echo

MYSQL="mysql -u root -h ${MYSQL_HOST}"
RESULT=`${MYSQL} --skip-column-names -e "SHOW DATABASES LIKE 'checkout51'"`

echo "Checking if checkout51 database exists"

# if checkout51 does not exist then create it and add user.
if [[ "${RESULT}" != "checkout51" ]]; then
    echo "Creating skeleton database"
    ${MYSQL} -se "CREATE USER '${USERNAME}'@'%' IDENTIFIED BY '${PASSWORD}'"
    ${MYSQL} -se "GRANT ALL PRIVILEGES ON *.* TO '${USERNAME}'@'%'"
    ${MYSQL} -se "FLUSH PRIVILEGES"
    ${MYSQL} -s < ./dev-scripts/initial-database.sql
fi

echo "Done initial database population check"

echo
echo