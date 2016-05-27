<?php

include_once('execute.php');

class Suma implements Execute
{
    
    public function execute($a=0,$b=0){
        return $a+$b;
    }
    
}