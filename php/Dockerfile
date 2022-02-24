FROM php:8.0.2-fpm-alpine

#apk install
RUN apk --no-cache update && apk --no-cache add bash git

RUN set -ex \
  && apk --no-cache add \
  postgresql-dev

RUN apk add --no-cache --update nodejs npm

RUN docker-php-ext-install pdo pdo_pgsql

#install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && php -r "unlink('composer-setup.php');" && mv composer.phar /usr/local/bin/composer

#install Symfony-CLI
RUN wget -O - https://get.symfony.com/cli/installer | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN git config --global user.email "adolphe906@gmail.com" && git config --global user.name "Benjamin ADOLPHE"

WORKDIR /var/www

RUN chmod -R 777 ./