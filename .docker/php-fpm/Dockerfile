FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    curl \
    git \
    libxslt-dev \
    libicu-dev

RUN docker-php-ext-configure intl

RUN docker-php-ext-install \
    zip \
    xsl \
    intl

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

RUN pecl install xdebug && \
        docker-php-ext-enable xdebug

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

ADD ./app.ini /usr/local/etc/php/conf.d
ADD ./app.pool.conf /usr/local/etc/php-fpm.d/www.conf

RUN chown -R www-data:www-data /usr/local/etc/php/conf.d

RUN usermod -u 1000 www-data

USER www-data:www-data

WORKDIR /var/www

CMD ["php-fpm"]

EXPOSE 9000
