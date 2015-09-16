#!/bin/bash

#Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

#Path export for laravel executable
echo 'export PATH=~/.composer/vendor/bin/:$PATH' >> ~/.bashrc

#Source possibly doesn't work
source ~/.bashrc

