
CREATE USER 'teamdocs'@'%' IDENTIFIED BY 'bLIHtgsC9dFR';

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `teamdocs` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci */;

grant all privileges on teamdocs.* to teamdocs@localhost identified by 'bLIHtgsC9dFR';   

flush privileges;

