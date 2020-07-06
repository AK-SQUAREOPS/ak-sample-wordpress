#!/bin/bash
sudo mv /var/www/html/sample-wordpress/wordpress.conf /etc/apache2/sites-available/
sudo a2ensite wordpress.conf
sudo a2dissite 000-default.conf
