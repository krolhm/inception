# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/28 13:06:53 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/28 15:42:09 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install -y openjdk-11-jre screen wget

RUN     wget https://launcher.mojang.com/v1/objects/125e5adf40c659fd3bce3e66e67a16bb49ecc1b9/server.jar

CMD     mv server.jar minecraft_server_1.18.1.jar

EXPOSE	25565

RUN     screen

RUN     java -Xmx1024M -Xms1024M -jar minecraft_server_1.18.1.jar nogui

RUN     sed -ie 's/eula=false/eula=true/g' eula.txt

RUN     java -Xmx1024M -Xms1024M -jar minecraft_server_1.18.1.jar nogui

#pour verifier:
#screen -list

