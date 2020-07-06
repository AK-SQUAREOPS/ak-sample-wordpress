#!/bin/bash
#sudo unlink /var/www/html/smaple-wordpress/wp-content/uploads
sudo systemctl stop apache2
if [ -d /var/www/html/sample-wordpress ];then 
      sudo rm -rf /tmp/sample-wordpress*
      sudo mv /var/www/html/sample-wordpress /tmp/sample-wordpress"$(date +"%d-%m-%Y")".back
fi
