FROM centos:centos6
MAINTAINER enova

# Mise a jour de centOS
RUN yum -y update

# Ajout des fichier de configuration et des scripts
ADD scripts/ /tmp/scripts/
RUN chmod +x /tmp/scripts/*
ADD config-files/ /tmp/config-files/

# Ajout du depot mariadb
RUN cp /tmp/config-files/MariaDB.repo /etc/yum.repos.d/MariaDB.repo

# Installation de Mariadb
RUN yum -y install MariaDB-server MariaDB-client

# Installation de GnuTLS
RUN yum -y install gnutls

# Installation de PHP
RUN yum -y install php php-mysql

# Installation de PHP
RUN yum -y install qt

# Installation de RRDtools
RUN yum -y install rrdtool

# Installation de wget
RUN yum -y install wget

## Fin des prerequis ##

# Installation du depot (centOS 6)
RUN  wget http://yum.centreon.com/standard/3.4/el6/stable/noarch/RPMS/centreon-release-3.4-4.el6.noarch.rpm
RUN yum -y install --nogpgcheck centreon-release-3.4-4.el6.noarch.rpm

# Installation du serveur central
RUN yum -y install centreon-base-config-centreon-engine centreon

# Installation du poller
RUN yum -y install centreon-poller-centreon-engine

# Installation de graphviz (pour Nagvis)
RUN yum -y install graphviz git

# Ajout de la cle GPG
RUN cd /etc/pki/rpm-gpg/
RUN wget http://yum-1.centreon.com/standard/3.4/el7/stable/RPM-GPG-KEY-CES

# Desactivation de SELINUX
RUN echo "SELINUX=disabled" > /etc/sysconfig/selinux

# Ajout du "putain de fichier date.ini pour php " (cf Simon L.)
RUN echo "date.timezone = Europe/Paris" > /etc/php.d/php-timezone.ini

CMD ["/tmp/scripts/script-keep-awake.sh"]


