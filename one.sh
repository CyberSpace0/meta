#!/bin/bash
    sed -i "s/:80/:$1/g" /etc/apache2/sites-available/000-default.conf && sed -i "s/Listen 80/Listen $1/g" /etc/apache2/ports.conf && service apache2 restart 
