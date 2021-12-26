# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/26 12:22:24 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/26 19:07:44 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y redis-server

#COPY	./tools/redis.sh ./entrypoint.sh
#RUN		chmod +x ./entrypoint.sh
#ENTRYPOINT [ "sh", "./entrypoint.sh" ]

CMD     redis-server --maxmemory 256mb --maxmemory-policy allkeys-lru --protected-mode no

# https://www.digitalocean.com/community/tutorials/how-to-configure-redis-caching-to-speed-up-wordpress-on-ubuntu-14-04