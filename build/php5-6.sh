sudo apt-get install apache2 libapache2-mod-fastcgi
sudo apt-get install apache2 php5 libapache2-mod-php5

sudo sed -i 's/short_open_tag = Off/short_open_tag = On/g' /etc/php5/cli/php.ini
sudo sed -i 's/short_open_tag = Off/short_open_tag = On/g' /etc/php5/apache2/php.ini
sudo service apache2 restart

# enable php-fpm
sudo apt-get install php5-fpm -y > /dev/null
sudo service apache2 restart
  
sudo sed -i 's/short_open_tag = Off/short_open_tag = On/g' /etc/php5/fpm/php.ini
sudo service apache2 restart

# install php5-curl
sudo apt-get install php5-curl

# install gettext
sudo apt-get install gettext
sudo service apache2 restart

# Install mcrypt
sudo apt-get install php5-mcrypt
# - sudo mv -i /etc/php5/apache2/conf.d/20-mcrypt.ini /etc/php5/mods-available/
sudo php5enmod mcrypt
sudo service apache2 restart

# Install GD
sudo apt-get install php5-gd
sudo service apache2 restart

# MySQLi extension
sudo apt-get install php5-mysql
sudo service apache2 restart