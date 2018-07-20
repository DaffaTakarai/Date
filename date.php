<?php
    //Authour :TakaraiCrew
    //daffatakarai@takaraicrew.tech
    //www.takaraicrew.com
$nama_hari = date("D");
if ($nama_hari == "Sun"){
    $sekarang="Minggu";
}elseif ($nama_hari =="Mon"){
    $sekarang ="Senin";
}elseif ($nama_hari == "Tue"){
    $sekarang ="Selasa";
}elseif ($nama_hari == "Wed"){
    $sekarang ="Rabu";
}elseif ($nama_hari == "Thu"){
    $sekarang ="Kamis";
}elseif ($nama_hari == "Fri"){
    $sekarang ="Jumat";
}else{
    $sekarang ="Sabtu";
}
echo "Sekarang hari : $sekarang ";
?>