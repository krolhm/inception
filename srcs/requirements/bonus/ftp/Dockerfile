# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/26 18:53:21 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/27 13:05:11 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    debian:buster
LABEL   maintainer="rbourgea <rbourgea@student.42.fr>"

RUN     apt-get update && apt-get -y upgrade

RUN     apt-get install y vsftpd openssl openssh && \
        openssl req -x509 -nodes -days 365 -newkey rsa:2048  -keyout /etc/ssl/private/vsftpd.pem -out /etc/ssl/private/vsftpd.pem -subj "/C=FR/ST=Ile de France/L=Paris/O=42/OU=inception/CN=rbourgea.42.fr"

RUN     echo 'rsa_cert_file=/etc/ssl/private/vsftpd.pem' >> /etc/vsftpd/vsftpd.conf \
        && echo 'rsa_private_key_file=/etc/ssl/private/vsftpd.pem' >> /etc/vsftpd/vsftpd.conf \
        && echo 'ssl_enable=YES' >> /etc/vsftpd/vsftpd.conf \
        && echo 'allow_anon_ssl=NO' >> /etc/vsftpd/vsftpd.conf \
        && echo 'force_local_data_ssl=YES' >> /etc/vsftpd/vsftpd.conf \
        && echo 'force_local_logins_ssl=YES' >> /etc/vsftpd/vsftpd.conf \
        && echo 'ssl_tlsv1=YES' >> /etc/vsftpd/vsftpd.conf \
        && echo 'ssl_sslv2=NO' >> /etc/vsftpd/vsftpd.conf \
        && echo 'ssl_sslv3=NO' >> /etc/vsftpd/vsftpd.conf \
        && echo 'require_ssl_reuse=NO' >> /etc/vsftpd/vsftpd.conf \
        && echo 'ssl_ciphers=HIGH' >> /etc/vsftpd/vsftpd.conf \
        && sed -i 's|.*anonymous_enable=YES.*|anonymous_enable=NO|' /etc/vsftpd/vsftpd.conf \
        && sed -i 's|.*#local_enable=YES.*|local_enable=YES|' /etc/vsftpd/vsftpd.conf \
        && sed -i 's|.*#write_enable=YES.*|write_enable=YES|' /etc/vsftpd/vsftpd.conf \ 
        && sed -i 's|.*#chroot_local_user=YES.*|chroot_local_user=YES|' /etc/vsftpd/vsftpd.conf \ 
        && echo 'allow_writeable_chroot=YES' >> /etc/vsftpd/vsftpd.conf \
        && echo 'seccomp_sandbox=NO' >> /etc/vsftpd/vsftpd.conf \
        && echo "pasv_enable=Yes" >> /etc/vsftpd/vsftpd.conf \
        && echo "pasv_max_port=10100" >> /etc/vsftpd/vsftpd.conf \
        && echo "pasv_min_port=10100" >> /etc/vsftpd/vsftpd.conf \
        && echo "pasv_addr_resolve=YES" >> /etc/vsftpd/vsftpd.conf \
        && echo "pasv_address=127.0.0.1" >> /etc/vsftpd/vsftpd.conf

ADD     ./tools/ftp.sh /usr/bin/ftp.sh

RUN     chmod +x /usr/bin/ftp.sh

CMD     bash /usr/bin/ftp.sh