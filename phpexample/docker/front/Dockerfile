FROM httpd:2.4
MAINTAINER Florian Matrion <florian.matrion@gmail.com>

RUN apt-get update
RUN apt-get install -y libapache2-mod-php5

# Enable Apache2 rewrite module
RUN a2enmod rewrite
RUN a2enmod php5
RUN service apache2 restart
