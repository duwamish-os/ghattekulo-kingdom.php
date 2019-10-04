FROM centos
#FROM amazonlinux

RUN yum install -y https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum install -y yum-utils
RUN yum-config-manager --enable remi-php56
RUN yum install -y php56 php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo php-pear php-pgsql php-devel php
#php56-mbstring php56-mysqlnd php56-mcrypt php56-pgsql php56-devel

RUN yum update -y && yum install -y \                                                                                                                httpd \                                                                                              
  mysql \                                                                                              
  gcc \                                                                                                
  vim \                                                                                                
  telnet \                                                                                             
  java-1.8.0 \                                                                                         
  mod24_ssl \                                                                                          
  https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm && \                          
  curl -O https://bootstrap.pypa.io/get-pip.py && \                                                    
  python get-pip.py && \                                                                               
  pip install --upgrade awscli && \                                                                    
  aws configure set default.s3.signature_version s3v4 && \                                             
  yum -y install ssmtp

COPY conf/vhosts.conf /etc/httpd/conf.d/
COPY conf/php.ini /etc/php.ini
COPY src/*.php /var/www/html/

CMD ["httpd", "-D", "FOREGROUND"]
