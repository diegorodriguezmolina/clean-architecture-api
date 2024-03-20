FROM php:8.2-fpm AS build

USER root

# XDEBUG
ARG XDEBUG_CLIENT_HOST=localhost
ARG ENABLE_XDEBUG=false
COPY .docker/api/xdebug.ini ${PHP_INI_DIR}/conf.d/99-xdebug.ini
RUN sed -i 's/__XDEBUG_CLIENT_HOST__/'${XDEBUG_CLIENT_HOST}'/g' $PHP_INI_DIR/conf.d/99-xdebug.ini

RUN if [ "${ENABLE_XDEBUG}" = "false" ] ; then \
	rm ${PHP_INI_DIR}/conf.d/docker-php-ext-xdebug.ini; \
	rm ${PHP_INI_DIR}/conf.d/99-xdebug.ini; \
	fi

RUN apt-get update && apt-get install -y \
        git \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
    && docker-php-ext-install \
        zip \
        intl \
		mysqli \
        pdo pdo_mysql

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER=1
COPY composer.json composer.lock /var/www/html/
RUN composer install --no-scripts --no-autoloader --no-interaction

COPY . /var/www/html
COPY .docker/api/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

RUN composer dump-autoload

CMD ["php-fpm", "-F"]