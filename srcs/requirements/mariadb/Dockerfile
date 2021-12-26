# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/25 15:55:19 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/26 11:47:48 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y mariadb-server mariadb-client

COPY    ./conf/rbourgea.cnf /etc/mysql/rbourgea.cnf
RUN     chmod 0444 /etc/mysql/rbourgea.cnf

COPY    ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY    ./tools/mariadb_start.sh /bin/mariadb_start.sh

CMD     bash /bin/mariadb_start.sh