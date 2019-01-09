FROM centos:latest
# ENV LANG C.UTF-8

# PHP インストールする前準備
RUN yum -y install epel-release
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm

# PHPインストール
RUN yum -y install --enablerepo=remi,remi-php72 php php-devel php-mbstring php-pdo php-gd php-xml php-mcrypt php-mysqlnd php7.2-mysql


# Composerインストール
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# gitインストール（yumなので古いVerになってしまうが）
RUN yum -y install git

# Laravelインストール
RUN composer global require "laravel/installer=~1.1"

# Laravelプロジェクト作成(/src/sample に作成する)
# RUN composer create-project laravel/laravel /src/sample --prefer-dist

# nginx インストール
RUN yum -y install nginx

# php-fpm インストール
RUN yum -y install --enablerepo=epel,remi,remi-php72 php-fpm

# nginx のconfをコピー
ADD ./laravel.conf /etc/nginx/conf.d/laravel.conf

# php-fpm のconfをコピー
ADD ./www.conf /etc/php-fpm.d/www.conf
