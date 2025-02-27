# Use Ubuntu 20.04 as the base image
FROM ubuntu:20.04
# php5.6-mbstring wont install must be installed manualy
# apt install php5.6-mbstring && service apache2 restart
# Install PHP 5.6, Apache, and required libraries
RUN apt-get update && apt-get install -y \
    software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update && apt-get install -y \
    php5.6 \
    libapache2-mod-php5.6 \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    apache2 \
    libxml2-dev \
    php-mbstring \
    php5.6-mbstring \
    && apt-get clean

# Install necessary PHP extensions
RUN apt-get update && apt-get upgrade -y

RUN phpenmod mbstring

RUN service apache2 restart

# Enable Apache modules and mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Set the command to start Apache in the foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]
