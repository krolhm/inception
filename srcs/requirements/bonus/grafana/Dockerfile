# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/28 12:02:33 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/28 12:47:19 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y gnupg2 curl software-properties-common

RUN     curl https://packages.grafana.com/gpg.key | apt-key add -

RUN     add-apt-repository "deb https://packages.grafana.com/oss/deb stable main"

RUN     apt-get update

RUN     apt-get -y install grafana

CMD     systemctl enable --now grafana-server