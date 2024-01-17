<?php
function pengulanganAngkot($noAngkot, $kondisiTerminasi,){
    for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
        if($noAngkot == 1 || $noAngkot == 3 || $noAngkot == 10 ||$noAngkot==11){
            echo"Angkot no - $noAngkot Tersedia <br />";
        }else if($noAngkot == 9 || $noAngkot == 12 || $noAngkot == 17 ||$noAngkot == 2 ){
            echo"Angkot no - $noAngkot Sedang di perbaiki<br />";
        }else{
            echo"Angkot no - $noAngkot Tidak tersedia<br />";
        }
    }
}
echo pengulanganAngkot(1,20,)
?>