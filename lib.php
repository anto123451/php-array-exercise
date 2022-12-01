<?php

function crea($settimanax, &$quota){
    $quota=array();
    for($i=0; $i<count($settimanax); $i++){
        $quota[$i]=rand(1, 500);
    }
}

function mediaa($quotax){
    $tot=0;
    $somma=0;
    for($i=0; $i<count($quotax); $i++){
        $tot+=$quotax[$i];
        $somma++;
    }

    $x=$tot/$somma;
    return $x;

}


function mag($quotax){
    $imax=0;
    for($i=0; $i<count($quotax); $i++){
        if($quotax[$i]>$quotax[$imax]){
            $imax=$i;
        }

    }
    return $imax;
}

function supera($quotax, $settimanax, &$z){
    $z=array();
    $j=0;
    for($i=0; $i<count($quotax); $i++){
        if($quotax[$i]>250){

            $z[$j]=$settimanax[$i];
            $j++;
            
        }

    }
}





























?>