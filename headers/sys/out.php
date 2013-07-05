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

function osonoutjsonstart(){
    global $osonsysvar;
    if (isset($osonsysvar['outpacknum'])) {
        if($osonsysvar['outpacknum']==0){
            osonout('[{');
        }else{
            osonout(',{');	
        }
    } else {
    	  $osonsysvar['outpacknum']=0;
    	  osonout('[{');
    }
    $osonsysvar['outpacknum']++;
    $osonsysvar['outtagpacknum'] = 0 ;
}
	
function osonoutjsontag($outtagname, $outtagvalue){
    global $osonsysvar;
    if ($osonsysvar['outtagpacknum']>0){
        osonout(',');
    }
    osonout('"');
    osonout($outtagname);
    osonout('":"');
    osonout($outtagvalue);
    osonout('"');
    $osonsysvar['outtagpacknum']++;
}	
	
function osonoutjsontagend() {
    global $osonsysvar;    	  
    osonout('}');
    $osonsysvar['outtagpacknum'] = 0;
}	
	
function osonoutjsonend() {
    global $osonsysvar;
    if($osonsysvar['outpacknum']>0){
        osonout(']');
    }	
}	
	
	
function osonoutdatanum(){
    global $osonsysvar;	
    osonouttag("appid", $osoninputvars['osonappid']);    
    osonouttag("datanum", $osonsysvar['outpacknum']);
}

?>