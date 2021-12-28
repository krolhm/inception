# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/26 18:53:21 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/28 15:29:58 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y vsftpd openssl

RUN     openssl genrsa -out /etc/ssl/private/vsftpd.key

RUN     openssl req -new -key /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.csr

RUN     openssl x509 -req -days 365 -in /etc/ssl/certs/vsftpd.csr -signkey /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.pem

COPY	./conf/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN     chmod +x /etc/vsftpd/vsftpd.conf

COPY	./tools/ftp.sh ./

RUN     mkdir /var/run/vsftpd

RUN     mkdir /var/run/vsftpd/empty

EXPOSE	21

ENTRYPOINT [ "sh", "ftp.sh" ]