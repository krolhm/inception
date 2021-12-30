# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/29 21:54:54 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/30 11:51:39 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

WORKDIR /app

RUN     apt-get install -y nodejs-legacy

COPY    ./tools .

RUN     npm install discord.js axios dotenv

ENTRYPOINT ["node", "index.js"]