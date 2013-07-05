<?php
/**
* OsonEngine
*
* PHP version 5
*
* @category function
* @type     tools
* @package  sql
* @author   Soldy <soldy@airndsoft.com>
* @license  http://www.airndsoft.com/bananalicens Banana License
* @link     http://oson.airndsoft.com
*/


include_once('sql.mysqli.php');
include_once('sql.mysqlnd.php');
include_once('sql.sqlite3.php');
include_once('sql.postgresql.php');

function osonsqlconnect($table){
    global $osonbconfvar;
    switch ($osonconfvar['db']['table']['servertype'][$table]) {
        case "mysqli" :
            return osonsqlmysqliconnect($table);    
            break;
        case "mysqlnd" :
            return osonsqlmysqlndconnect($table);    
            break;
        case "sqlite3" :
            return osonsqlsqlite3connect($table);    
            break;
        case "postgresql" :
            return osonsqlpostgresqlconnect($table);    
            break;
    }
}

function osonsqlinsert($table, $variables, $values, $error){
    global $osonbconfvar;
    switch ($osonconfvar['db']['table']['servertype'][$table]) {
        case "mysqli" :
            return osonsqlmysqliinsert($table, $variables, $values, $error);
        case "mysqlnd" :
            return osonsqlmysqlndinsert($table, $variables, $values, $error);
        case "sqlite3" :
            return osonsqlsqlite3insert($table, $variables, $values, $error);
        case "postgresql" :
            return osonsqlpostgresqlinsert($table, $variables, $values, $error);
    }
}

function osonsqlupdate($table, $variables, $values, $variablesw, $updateeqw, $valuesw, $xorw, $error){
    global $osonbconfvar;
    switch ($osonconfvar['db']['table']['servertype'][$table]) {
        case "mysqli" :
            return osonsqlmysqliupdate($table, $variables, $values, $variablesw, $updateeqw, $valuesw, $xorw, $error);
        case "mysqlnd" :
            return osonsqlmysqlndupdate($table, $variables, $values, $variablesw, $updateeqw, $valuesw, $xorw, $error);
        case "sqlite3" :
            return osonsqlsqlite3update($table, $variables, $values, $variablesw, $updateeqw, $valuesw, $xorw, $error);
        case "postgresql" :
            return osonsqlpostgresqlupdate($table, $variables, $values, $variablesw, $updateeqw, $valuesw, $xorw, $error);
    }
}
function osonsqlselect($table, $varw, $eqw, $valw, $xorw, $error) {
	 global $osonconfvar;
    switch ($osonconfvar['db']['table']['servertype'][$table]) {
        case "mysqli" :
            return osonsqlmysqliselect($table, $varw, $eqw, $valw, $xorw, $error);
        case "mysqlnd" :
            return osonsqlmysqlndselect($table, $varw, $eqw, $valw, $xorw, $error);
        case "sqlite3" :
            return osonsqlsqlite3select($table, $varw, $eqw, $valw, $xorw, $error);
        case "postgresql" :
            return osonsqlpostgresqlselect($table, $varw, $eqw, $valw, $xorw, $error);
    }
}

function osonsqldelete($table, $varw, $eqw, $valw, $xorw, $error) {
	 global $osonconfvar;
    switch ($osonconfvar['db']['table']['servertype'][$table]) {
        case "mysqli" :
            return osonsqlmysqlidelete($table, $varw, $eqw, $valw, $xorw, $error);
        case "mysqlnd" :
            return osonsqlmysqlnddelete($table, $varw, $eqw, $valw, $xorw, $error);
        case "sqlite3" :
            return osonsqlsqlite3delete($table, $varw, $eqw, $valw, $xorw, $error);
        case "postgresql" :
            return osonsqlpostgresqldelete($table, $varw, $eqw, $valw, $xorw, $error);
    }
}
?>