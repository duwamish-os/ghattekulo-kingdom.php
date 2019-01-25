php served by httpd(rhel)= apache2(ubuntu)
-----------------------------------------

```bash

docker build -it metal-king .
docker run -it metal-king

$ docker exec -it bbb5a0bbdba9 bash

[root@bbb5a0bbdba9 /]# php -version
PHP 5.6.40 (cli) (built: Jan  9 2019 12:34:16) 
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies

[root@bbb5a0bbdba9 /]# ls -l /var/www/html/
total 4
-rw-r--r-- 1 root root 1021 Jan 25 06:40 index.php

[root@bbb5a0bbdba9 /]# curl localhost:80
name: Architects
```




