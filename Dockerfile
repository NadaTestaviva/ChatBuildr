FROM ubuntu:22.04

MAINTAINER Mostafa Fawzy @ TestaViva.dk <mo-cw@testaviva.dk>

ENV TZ=Europe/Copenhagen

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install PHP packages
RUN apt-get update \
    && apt-get install -y gnupg gosu curl ca-certificates zip unzip git supervisor sqlite3 libcap2-bin libpng-dev dnsutils librsvg2-bin \
    && curl -sS 'https://keyserver.ubuntu.com/pks/lookup?op=get&search=0x14aa40ec0831756756d7f66c4f4ea0aae5267a6c' | gpg --dearmor | tee /usr/share/keyrings/ppa_ondrej_php.gpg > /dev/null \
    && echo "deb [signed-by=/usr/share/keyrings/ppa_ondrej_php.gpg] https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy main" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
    && apt-get update \
    && apt-get install -y php8.1 \
          php8.1-fpm \
          php8.1-curl \
          php8.1-zip \
          php8.1-xml \
          php8.1-opcache \
          php8.1-mysql \
          php8.1-mbstring \
          php8.1-bcmath \
          php8.1-common \
          php8.1-cli \
          php8.1-cgi \
          php8.1-gd \
          php8.1-intl \
          php8.1-apcu \
          nginx \
          acl \
          vim \
          zsh \
    && apt-get update \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Forward request logs to docker log collector.
RUN ln -sf /dev/stderr /var/log/nginx/error.log

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"
RUN usermod -u 1000 www-data

# Install PDF Tool
RUN apt-get install libxrender1 -y

WORKDIR /usr/share/nginx/html

RUN sh -c "$(curl -fsSL https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"

CMD ["/usr/bin/supervisord", "-n"]
