FROM centos:centos6
MAINTAINER enova

# Mise a jour de centOS
RUN yum -y update

# Ajout du depot mariadb
ADD config-files/MariaDB.repo /tmp/MariaDB.repo
RUN cp /tmp/MariaDB.repo /etc/yum.repos.d/MariaDB.repo

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

# Configuration de MySQL
ADD config-files/pass-mysql-root /tmp/pass-mysql-root
ADD config-files/pass-mysql-centreon /tmp/pass-mysql-centreon
ADD scripts/script-set-mysql.sh /tmp/script-set-mysql.sh
RUN chmod +x /tmp/script-set-mysql.sh

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

# Ajout du script de creation de l'historique de commande
ADD scripts/script-set-bash_history.sh /tmp/script-set-bash_history.sh
RUN chmod +x /tmp/script-set-bash_history.sh

# Ajout du script du changement de droit pour les dossiers mappes
ADD scripts/script-set-folder-right.sh /tmp/script-set-folder-right.sh
RUN chmod +x /tmp/script-set-folder-right.sh

# Ajout des scripts de gestion des services (Apache, Centreon, SNMP, MySQL…)
ADD scripts/script-restart-services.sh /tmp/script-restart-services.sh
RUN chmod +x /tmp/script-restart-services.sh
ADD scripts/script-stop-services.sh /tmp/script-stop-services.sh
RUN chmod +x /tmp/script-stop-services.sh
ADD scripts/script-status-services.sh /tmp/script-status-services.sh
RUN chmod +x /tmp/script-status-services.sh
ADD scripts/script-start-services.sh /tmp/script-start-services.sh
RUN chmod +x /tmp/script-start-services.sh

## Nagvis ##

# Ajout du script d'installation de nagvis et des fichiers de configuration
ADD scripts/script-install-nagvis.sh /tmp/script-install-nagvis.sh
ADD config-files/nagvis/ /tmp/nagvis/
RUN chmod +x /tmp/nagvis/script-install-nagvis.sh

# Ajout du script keep-awake qui permet de laisser le docker tourner (solution temporaire)
ADD scripts/script-keep-awake.sh /tmp/script-keep-awake.sh
RUN chmod +x /tmp/script-keep-awake.sh
CMD ["/tmp/script-keep-awake.sh"]

