<?php

include_once('execute.php');

class Divide implements Execute
{
    
    public function execute($a=0,$b=0){
        return $a%$b;
    }
    
}