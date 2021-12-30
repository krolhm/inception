# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/29 21:54:54 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/30 11:40:50 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

WORKDIR /app

RUN     apt-get install nodejs

RUN     apt-get install npm

COPY    ./tools .

RUN     npm install discord.js axios dotenv

ENTRYPOINT ["node", "index.js"]