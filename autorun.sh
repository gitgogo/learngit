#!/bin/sh
chown -R 9drug_test:www /home/web_root/www.9drug.com/*
chmod -R 775 /home/web_root/www.9drug.com/*
mv /home/web_root/www.9drug.com/application/config/interface_config.php /home/web_root/www.9drug.com/application/config/interface_config.php.bak
cp -f /home/web_root/configFile/php/interface_config.php /home/web_root/www.9drug.com/application/config/interface_config.php
cp -f /home/web_root/configFile/php/database.php /home/web_root/www.9drug.com/application/config/database.php
cp -f /home/web_root/configFile/php/config.php /home/web_root/www.9drug.com/application/config/config.php
cp -f /home/web_root/configFile/php/index.php /home/web_root/www.9drug.com/index.php