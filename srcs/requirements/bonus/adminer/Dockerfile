# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/28 11:43:15 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/28 11:44:20 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y php-fpm

RUN     wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-en.php

RUN     mv adminer-4.8.1-en.php index.php

CMD     php -S 0.0.0.0:8082