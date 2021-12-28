#!/bin/sh

conf_file="/etc/vsftpd/vsftpd.conf"

adduser -D $FTP_USERNAME && echo "$FTP_USERNAME:$FTP_PASSWORD" | chpasswd

vsftpd $conf_file

