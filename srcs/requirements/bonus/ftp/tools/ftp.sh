#!/bin/sh

conf_file="/etc/vsftpd/vsftpd.conf"

adduser -D "${FTP_USERNAME}" && echo "${FTP_USERNAME}":"${FTP_PASSWORD}" | chpasswd

ssh-keygen -A

chown -R "${FTP_USERNAME}":"${FTP_USERNAME}" /home/"${FTP_USERNAME}"

vsftpd $conf_file

