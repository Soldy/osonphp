<?php
/**
* JsonbEngine
*
* PHP version 5
*
* @category config
* @type     db
* @package  sql
* @author   Soldy <soldy@airndsoft.com>
* @license  http://www.airndsoft.com/bananalicens Banana License
* @link     http://oson.airndsoft.com
*/


#  default mysql servers
$osonbconfvar['db']['mysql']['servername']="defaultserver";
$osonbconfvar['db']['mysql']['auth']['login']="";
$osonbconfvar['db']['mysql']['auth']['pass']="";
$osonbconfvar['db']['mysql']['auth']['host']="";
$osonbconfvar['db']['mysql']['auth']['port']="";
$osonbconfvar['db']['mysql']['auth']['port']="";


#  listed mysql servers

$osonbconfvar['db']['mysqls']['servername']=array("server1", "server2");
$osonbconfvar['db']['mysqls']['auth']['login']=array("server1" => "login", "server2" => "login");
$osonbconfvar['db']['mysqls']['auth']['pass']=array("server1" => "pass", "server2" => "pass");
$osonbconfvar['db']['mysqls']['auth']['host']=array("server1" => "host", "server2" => "host");
$osonbconfvar['db']['mysqls']['auth']['port']=array("server1" => "port", "server2" => "port");


$jsonbconfvar['db']['list']['tables']=array();

$jsonbconfvar['db']['table']['servertype'][$table]
$jsonbconfvar['db']['table']['servername'][$table]
$jsonbconfvar['db']['table']['database'][$table]
$jsonbconfvar['db']['table']['table'][$table]
$jsonbconfvar['db']['table']['tabletype'][$table] =""; #master, slave, mirror, adhoc, backup, archive
$jsonbconfvar['db']['table']['rowsname'][$table] = array();
$jsonbconfvar['db']['table']['rowtype'][$table] = array();
$jsonbconfvar['db']['table']['rowtype'][$table] = array();
$jsonbconfvar['db']['table']['mirrors'][$table] = array();


?>