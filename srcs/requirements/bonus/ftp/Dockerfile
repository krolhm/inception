# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/26 18:53:21 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/29 20:54:55 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y vsftpd openssl

RUN     openssl req -x509 -nodes -days 365 -newkey rsa:2048  -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.pem -subj "/C=FR/ST=Ile de France/L=Paris/O=42/OU=inception/CN=rbourgea.42.fr"

COPY	./conf/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN     chmod +x /etc/vsftpd/vsftpd.conf

COPY	./tools/ftp.sh ./

RUN     mkdir /var/run/vsftpd

RUN     mkdir /var/run/vsftpd/empty

EXPOSE	21

ENTRYPOINT [ "sh", "ftp.sh" ]