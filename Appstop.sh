#!/bin/bash
#sudo unlink /var/www/html/smaple-wordpress/wp-content/uploads
sudo systemctl stop apache2
if [ -d /var/www/html/smaple-wordpress ];then 
      sudo rm -rf /tmp/smaple-wordpress*
      sudo mv /var/www/html/smaple-wordpress /tmp/smaple-wordpress"$(date +"%d-%m-%Y")".back
fi
