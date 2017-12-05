#!/usr/bin/env bash
USERNAME='root'
PASSWORD='Antoine'
DBNAME='biocoop'
HOST='localhost'

USER_USERNAME='tony'
USER_PASSWORD='tony'

MySQL=$(cat <<EOF
DROP DATABASE IF EXISTS $DBNAME;
CREATE DATABASE $DBNAME DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE $DBNAME;
CREATE TABLE IF NOT EXISTS products (ID INT NOT NULL AUTO_INCREMENT, name VARCHAR(100), price DECIMAL(7,2), total DECIMAL(7,2) NOT NULL DEFAULT 0.00, PRIMARY KEY(id) )ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO products (name, price) VALUES  ('apple', 10.5), ('raspberry',13), ('strawberry', 7.8)
EOF
)

echo $MySQL | mysql --user=$USERNAME --password=$PASSWORD