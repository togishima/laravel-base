FROM php:8.2-apache

# ツールのインストール
RUN apt update -y \
    && apt install -y zip unzip vim wget git curl zlib1g-dev g++ libicu-dev libpq-dev\
    && docker-php-ext-install pgsql pdo_pgsql bcmath opcache \
    && a2enmod rewrite

# xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/src

USER nobody