<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';

if (isset($_SERVER['APPLICATION_ID'])) $active_group='app_engine';
if (isset($_SERVER['RDS_HOSTNAME'])) $active_group='beanstalk';
if (isset($_SERVER['DB_HOST'])) $active_group='engineyard';


syslog(LOG_INFO,"[sys_log] database group ".$active_group);
error_log("[error_log] database group ".$active_group);
$active_record = TRUE;

$db['default']['hostname'] = '127.0.0.1';
$db['default']['username'] = 'root';
$db['default']['password'] = 'root';
$db['default']['database'] = 'nanochip';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['beanstalk']['hostname'] = @$_SERVER['RDS_HOSTNAME'];
$db['beanstalk']['port']     = @$_SERVER['RDS_PORT'];
$db['beanstalk']['username'] = @$_SERVER['RDS_USERNAME'];
$db['beanstalk']['password'] = @$_SERVER['RDS_PASSWORD'];
$db['beanstalk']['database'] = @$_SERVER['RDS_DB_NAME'];
$db['beanstalk']['dbdriver'] = 'mysql';
$db['beanstalk']['dbprefix'] = '';
$db['beanstalk']['pconnect'] = FALSE;
$db['beanstalk']['db_debug'] = TRUE;
$db['beanstalk']['cache_on'] = FALSE;
$db['beanstalk']['cachedir'] = '';
$db['beanstalk']['char_set'] = 'utf8';
$db['beanstalk']['dbcollat'] = 'utf8_general_ci';
$db['beanstalk']['swap_pre'] = '';
$db['beanstalk']['autoinit'] = TRUE;
$db['beanstalk']['stricton'] = FALSE;

$db['app_engine']['hostname'] = ':/cloudsql/fetchid-1004:fetchid';
$db['app_engine']['username'] = '';
$db['app_engine']['password'] = '';
$db['app_engine']['database'] = '';
$db['app_engine']['dbdriver'] = 'mysql';
$db['app_engine']['dbprefix'] = '';
$db['app_engine']['pconnect'] = FALSE;
$db['app_engine']['db_debug'] = TRUE;
$db['app_engine']['cache_on'] = FALSE;
$db['app_engine']['cachedir'] = '';
$db['app_engine']['char_set'] = 'utf8';
$db['app_engine']['dbcollat'] = 'utf8_general_ci';
$db['app_engine']['swap_pre'] = '';
$db['app_engine']['autoinit'] = TRUE;
$db['app_engine']['stricton'] = FALSE;

$db['engineyard']['hostname'] = @$_SERVER['DB_HOST'];
$db['engineyard']['username'] = @$_SERVER['DB_USER'];
$db['engineyard']['password'] = @$_SERVER['DB_PASS'];
$db['engineyard']['database'] = @$_SERVER['DB_NAME'];
$db['engineyard']['dbdriver'] = 'mysql';
$db['engineyard']['dbprefix'] = '';
$db['engineyard']['pconnect'] = FALSE;
$db['engineyard']['db_debug'] = TRUE;
$db['engineyard']['cache_on'] = FALSE;
$db['engineyard']['cachedir'] = '';
$db['engineyard']['char_set'] = 'utf8';
$db['engineyard']['dbcollat'] = 'utf8_general_ci';
$db['engineyard']['swap_pre'] = '';
$db['engineyard']['autoinit'] = TRUE;
$db['engineyard']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */