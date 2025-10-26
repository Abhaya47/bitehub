From php:8.4.13-fpm-alpine3.21

ARG HOST_UID=1000
ARG HOST_GID=1000

ENV APP_PATH=/var/www/html \
    WEB_USER=docker


##install os dependencies add more if you need extra stuff
RUN apk add --no-cache curl

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

## install php dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli pdo pdo_mysql
RUN composer require livewire/livewire
RUN composer config --no-plugins allow-plugins.pestphp/pest-plugin true
RUN composer require pestphp/pest --dev --with-all-dependencies


RUN apk add --no-cache icu-dev libzip-dev\
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl zip

RUN composer require filament/filament:"^4.0"
RUN composer require livewire/flux


##installing npm
RUN apk add --update nodejs npm
RUN apk add --update npm
RUN npm install tailwindcss @tailwindcss/vite


#create docker user because using root is ☠️
RUN addgroup --gid $HOST_GID docker && \
    adduser \
        --disabled-password \
        --gecos "" \
        --ingroup docker \
        --uid $HOST_UID \
        docker && \
    mkdir -p $APP_PATH && \
    mkdir -p $APP_PATH/var && \
    chown docker:docker \
        $APP_PATH \
        $APP_PATH/var

RUN chmod u+w /var/www/html

#run the rest as docker
USER docker

#ENTRYPOINT ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html/public"]
ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]