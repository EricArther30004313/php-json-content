docker run --name mysql \
-p 3306:3306 \
-e MYSQL_ROOT_PASSWORD="root1234" \
-e MYSQL_DATABASE="containerdb" \
-e MYSQL_USER="user" \
-e MYSQL_PASSWORD="user1234" \
-d mysql:5.7.20

curl -LOk https://github.com/to-jk11/php-container-kit/archive/master.zip && unzip master.zip && rm -f master.zip && mv php-container-kit-master PHPWEB101