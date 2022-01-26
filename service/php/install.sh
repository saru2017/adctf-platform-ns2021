sudo apt -y install apache2
sudo apt -y install php libapache2-mod-php
sudo cp index.php  login.php /var/www/html/
sudo cp -r app/* /var/www/html/

