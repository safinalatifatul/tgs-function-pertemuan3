<?php
$namaLengkap = "Safina latifatul";
$umur = 16;
$kelas = "X RPL 1";
$ttl = "kebumen,13 januari 2008";
$nomor = "081252303788";
$alamat = "Kebumen,jawa tengah";

function myBiodata(){
    global $namaLengkap, $umur, $kelas, $ttl, $nomor, $alamat;

    echo"===== Program Biodata Sederhana Function =====<br />";
    echo"Nama lengkap : $namaLengkap<br />";
    echo"Umur : $umur<br />";
    echo"Kelas : $kelas<br />";
    echo"Tempat/Tanggal Lahir : $ttl<br />";
    echo"Nomor WhatsApp : $nomor<br />";
    echo"Alamat : $alamat";
}
echo myBiodata()
?>