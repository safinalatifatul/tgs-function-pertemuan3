<?php
//built in fanction
// date('y-m-d');
// date_default_timezone_set('Asia/Jakarta');
// $tanggal = date ('d-m-y');
// $waktu = date ("H:i:s");

// echo"Jakarta pada hari ini tanggal $tanggal <br />
// Jam jakarta saat ini:$waktu";


// user defined function
// fungsi yg kita buat sendiri
function jumlahDuaBilangan($a = 3, $b = 5, $nama = "Safina Latifatul"){
    // $total = $a + $b;

    $namaLengkap = $nama;
    return $namaLengkap;
}
echo jumlahDuaBilangan();

$a = 10;
function jumlahAngka(){
    global $a;
    echo $a;
}
echo jumlahAngka();


//Latihan 1 function

function pengulanganBuku($noBuku, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2){
    for($noBuku; $noBuku <= $kondisiTerminasi; $noBuku++){
        if($noBuku <= $kondisiTerminasi1){
            echo"Buku ke - $noBuku tersedia <br />";
        }else if($noBuku <= $kondisiTerminasi2){
            echo"Buku ke - $noBuku Sedang di pinjam <br />";
        }else{
            echo"Buku ke - $noBuku tidak tersedia <br />";
        }
    }
}

echo pengulanganBuku(1, 15, 6, 10);

?>