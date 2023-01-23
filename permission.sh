cd /var/www/live/academy.brandians.com
chmod -R 554 .
chmod -R 554 ./login
chmod -R 664 ./login/uploads
chmod -R 664 ./login/mvc/logs
chmod 444 ./login/.htaccess
chown -R academybrandianscom:www-data .