# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/29 21:54:54 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/30 12:01:20 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade && apt-get install -y curl sudo

WORKDIR /app

RUN     curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -

RUN     apt-get install -y nodejs nodejs-legacy

COPY    ./tools .

RUN     npm init

RUN     npm install discord.js axios dotenv

ENTRYPOINT ["node", "index.js"]