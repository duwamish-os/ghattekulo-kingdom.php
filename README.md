php served by httpd(rhel)= apache2(ubuntu)
-----------------------------------------

```bash

docker build -it metal-king .
docker run -it metal-king
```

```bash
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

Compression using zip
---

https://en.wikipedia.org/wiki/LZ77_and_LZ78

```bash
php -f zipme.php
unzip data.zip

php gunzipme.php

# CLI - GNUzip a file, note it replaces original file
gzip music-data.csv
gzip < music-data.csv > data.gz
# GNU unzip
gunzip data.gz 

# GNUzipping multiple files
# TapeAR(tar) puts the files together, while gzip then performs the compression.
# tar was originally developed to write data to sequential I/O devices with no file system of their own
tar cvf data.tar music-data.csv movie-data.csv

#extract(x) from tape archive
tar xvf data.tar 
x music-data.csv
x movie-data.csv

#tape archive and then GNU zip in a single command
tar -zcvf data.tar.gz music-data.csv movie-data.csv
```


```bash
php tape_archive_me.php
# creates archived_data.tar.gz

```
