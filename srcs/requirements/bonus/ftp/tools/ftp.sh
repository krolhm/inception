#!/bin/sh

adduser -D "${FTP_USERNAME}" && echo "${FTP_USERNAME}":"${FTP_PASSWORD}" | chpasswd

ssh-keygen -A

chown -R "${FTP_USERNAME}":"${FTP_USERNAME}" /home/"${FTP_USERNAME}"

/usr/sbin/vsftpd /etc/vsftpd/vsftpd.conf

