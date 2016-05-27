<?php

include_once('execute.php');

class Multiply implements Execute
{
    
    public function execute($a=0,$b=0){
        return $a*$b;
    }
    
}