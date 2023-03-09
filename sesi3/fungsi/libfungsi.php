<?php

    function kelulusan($_nilai){
        if($_nilai > 55){
            return'lulu';
        }elseif($_nilai < 56){
            return 'tidak lulus';
        }else{
            return 'tidak valud';
        }
    }


    function grade($_nilai){
        if($_nilai <=35){
            return 'E';
        }elseif($_nilai <= 55 ){
            return 'D';
        }elseif($_nilai <=69){
            return 'C';
        }elseif($_nilai <= 84){
            return 'B';
        }elseif($_nilai <= 100){
            return 'A';
        }else{
            return 'Tidak Valid';
        }
    }



?>