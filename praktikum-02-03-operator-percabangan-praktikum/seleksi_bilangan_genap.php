<?php

    $data = array();

    For($a=1; $a <= 100; $a++){
        $b= rand(1,100);
        array_push($data, $b); 
        
    }
    function g($c){
        return($c % 2==0);
    }
    print_r(array_filter($data, "g"));
    
?>