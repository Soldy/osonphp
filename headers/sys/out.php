<?php
/**
* OsonEngine
*
* PHP version 5
*
* @category function
* @type     tools
* @package  out
* @author   Soldy <soldy@airndsoft.com>
* @license  http://www.airndsoft.com/bananalicens Banana License
* @link     http://oson.airndsoft.com
*/



function osonout($outdata){
    global $osonbconfvar;
    if ($osonconfvar['system']['out'] == "direct") {
        echo $outdata;
    } else {
        global $osonout;
        $osonout = $osonout. $outdata;   
    }
}

?>