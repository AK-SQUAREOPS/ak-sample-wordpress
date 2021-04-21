#!/bin/bash
service apache2 start
service mysqld start
systemctl start apache2
systemctl start mysql
