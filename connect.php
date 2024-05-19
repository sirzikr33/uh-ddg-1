<?php
$Connect = new mysqli('localhost', 'root', '', 'daftar_siswa');
if($Connect){
    echo "Connect berhasi";
}else{
    echo $Connect->error;
}
?>