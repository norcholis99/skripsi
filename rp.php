<?php 
        function rupiah($saa){
            
            $hasil_rupiah = "Rp " . number_format($saa,2,',','.');
            return $hasil_rupiah;
        }  
        echo rupiah(1000000);
        
        ?>