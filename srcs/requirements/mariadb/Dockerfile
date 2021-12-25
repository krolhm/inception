# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/25 15:55:19 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/25 15:59:06 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster

RUN     apt-get update

RUN     apt-get install -y mariadb-server

COPY    /tools/create_db.sql /etc/mysql/
COPY    /tools/start_db.sh /

CMD     bash start_db.sh