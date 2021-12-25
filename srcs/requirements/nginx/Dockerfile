# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/25 18:42:54 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/25 18:57:57 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN		apt-get update && apt-get -y upgrade && \
		apt-get install -y debconf && \
		apt-get install -y nginx && \
		apt-get install -y openssl && \
		mkdir /var/www/wordpress && \
		sed -ie 's/ssl_protocols TLSv1 TLSv1.1 TLSv1.2;/ssl_protocols TLSv1.2 TLSv1.3;/g' /etc/nginx/nginx.conf && \
		openssl req -x509 -nodes -days 365 -newkey rsa:2048  -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt -subj "/C=FR/ST=Ile de France/L=Paris/O=42/OU=inception/CN=rbourgea.42.fr"

COPY	./conf/default /etc/nginx/sites-available/default

RUN		chown www-data:www-data /var/www/wordpress -R

RUN		chmod -R 755 /var/www

EXPOSE	443

CMD		["nginx", "-g", "daemon off;"]