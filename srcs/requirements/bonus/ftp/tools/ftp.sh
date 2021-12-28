#!/bin/sh

conf_file="/etc/vsftpd/vsftpd.conf"
grep -E "local_root=" $conf_file > /dev/null 2>&1
if [ $? -eq 0 ]; then
  adduser $FTP_USERNAME --disabled-password --gecos "" --home /home/$USER --shell /bin/bash
  echo "$FTP_USERNAME:$FTP_PASSWORD" | chpasswd > /dev/null

  chgrp -R $FTP_USERNAME $FTP_ROOT
  chown -R $FTP_USERNAME: $FTP_ROOT
  chmod -R u+w $FTP_ROOT

  echo "" >> $conf_file
  echo "local_root=$FTP_ROOT" >> $conf_file
fi
vsftpd $conf_file

