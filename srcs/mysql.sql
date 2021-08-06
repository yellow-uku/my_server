CREATE DATABASE wordpress;
CREATE USER 'pkayleen'@'localhost' IDENTIFIED BY '228';
GRANT ALL ON wordpress.* TO 'pkayleen'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
