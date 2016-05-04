<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
define('_MYSQL_SET_SQL_MODE',true);
$GLOBALS['spip_connect_version'] = 0.7;
spip_connect_db('localhost','','flux','Mars2014','spip_open-edition','mysql', 'spip','');
?>