<?php
// error_reporting(0);
// error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();

define('MYSQL_HOST', 'pma.phatnef.me');
define('MYSQL_USER', 'phatdevx_noname');
define('MYSQL_PASS', 'Noname@2023');
define('MYSQL_DB', 'phatdevx_dat_ve_phim');
define('DATA_PER_PAGE', '9');


include_once("function.php");
include_once("DB.php");
