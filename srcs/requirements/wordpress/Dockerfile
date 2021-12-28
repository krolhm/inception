# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/25 16:08:04 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/28 15:56:04 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y php7.3-fpm php7.3-mysql php7.3-cgi curl wget

RUN     curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN     chmod +x wp-cli.phar
RUN     mv wp-cli.phar /usr/local/bin/wp

RUN     sed -i -e 's/listen = \/run\/php\/php7.3-fpm.sock/listen = wordpress:9000/g' \
			/etc/php/7.3/fpm/pool.d/www.conf

WORKDIR /var/www/wordpress

RUN     wp core download --path=/var/www/wordpress --allow-root
RUN     chown -R www-data:www-data *
RUN     chmod -R 755 /var/www/*

#ADD		/conf/wp-config.php /var/www/wordpress/wp-config.php

RUN     service php7.3-fpm start; service php7.3-fpm stop
COPY    /tools/start_wp.sh /

CMD		bash ../../../start_wp.sh