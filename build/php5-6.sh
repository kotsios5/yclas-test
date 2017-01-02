# Upgrade PHP from 5.5.9 to 5.6
sudo add-apt-repository ppa:ondrej/php -y > /dev/null
sudo apt-get -y update
sudo apt-get -y install php5.6 php5.6-mcrypt php5.6-mbstring php5.6-curl php5.6-cli php5.6-mysql php5.6-gd php5.6-zip
sudo service apache2 restart
php -v

sudo apt-get install apache2 libapache2-mod-fastcgi
sudo apt-get install apache2 php5 libapache2-mod-php5

sudo sed -i 's/short_open_tag = Off/short_open_tag = On/g' /etc/php/5.6/cli/php.ini
sudo sed -i 's/short_open_tag = Off/short_open_tag = On/g' /etc/php/5.6/apache2/php.ini
sudo service apache2 restart

# enable php-fpm
sudo apt-get install php5.6-fpm -y > /dev/null
sudo service apache2 restart
  
sudo sed -i 's/short_open_tag = Off/short_open_tag = On/g' /etc/php/5.6/fpm/php.ini
sudo service apache2 restart

# install gettext
sudo apt-get install gettext
sudo service apache2 restart

# Enable mcrypt
sudo mv -i /etc/php/5.6/apache2/conf.d/20-mcrypt.ini /etc/php/5.6/mods-available/
php5enmod mcrypt
service apache2 restart

# Soap Client
sudo apt-get install php5.6-soap -y
sudo service apache2 restart

