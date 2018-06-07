FROM php:7.2-fpm



RUN apt-get update && apt-get install -y libmcrypt-dev \
   mysql-client libmagickwand-dev --no-install-recommends \
  && docker-php-ext-install pdo_mysql mbstring
RUN apt-get install -y python g++ make software-properties-common --force-yes

RUN apt-get install -y git unzip gnupg
COPY ./ /var/www/
WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | \
   php -- --install-dir=/usr/bin/ --filename=composer
RUN composer install

RUN curl -sL https://deb.nodesource.com/setup_9.x | bash - && \
 apt-get install -y nodejs
RUN npm install
RUN npm rebuild node-sass --force
RUN npm run dev