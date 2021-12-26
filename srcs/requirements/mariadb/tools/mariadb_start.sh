# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    mariadb_start.sh                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: rbourgea <rbourgea@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/12/26 12:26:26 by rbourgea          #+#    #+#              #
#    Updated: 2021/12/26 12:26:26 by rbourgea         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

service mysql start

find_my_user=$(echo "SELECT USER from mysql.user;" | mysql --no-defaults -u root | grep "$DB_USER" | wc -l)

if [ "1" -ne $find_my_user ] ;
	then 
		echo "CREATE USER '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';" | mysql --no-defaults -u root
		echo "GRANT ALL PRIVILEGES ON *.* TO '$DB_USER'@'%' WITH GRANT OPTION;" | mysql --no-defaults -u root
		echo "FLUSH PRIVILEGES;" | mysql --no-defaults -u root ;
fi

find_my_database=$(echo "SHOW DATABASES;" | mysql --no-defaults -u root | grep "$DB_NAME" | wc -l)

if [ "1" -ne $find_my_database ] ;
	then echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;" | mysql --no-defaults -u $DB_USER --password="$DB_PASSWORD" ;
	echo "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('root');" | mysql --no-defaults -u root ;
fi

service mysql stop

mysqld_safe