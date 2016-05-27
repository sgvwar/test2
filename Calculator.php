<?php

include("Suma.php");
include 'Resta.php';
require 'Multiply.php';
include_once 'Divide.php';

class Calculator
{

    public function suma($a=0, $b=0)
    {
        $s=new Suma();
        return $s->execute($a,$b);
    }
    
    public function resta($a=0, $b=0)
    {
        $r=new Resta();
        return $r->execute($a,$b);
    }
    
    public function multiply($a=0, $b=0)
    {
        $m=new Multiply();
        return $m->execute($a,$b);
    }
    
    public function divide($a=0, $b=0)
    {
        $d=new Divide();
        return $d->execute($a,$b);
    }
    
    
}