# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/26 18:53:21 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/28 12:54:49 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y vsftpd

COPY	./conf/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN     chmod +x /etc/vsftpd/vsftpd.conf

COPY	./tools/ftp.sh ./

EXPOSE	21

ENTRYPOINT [ "sh", "ftp.sh" ]