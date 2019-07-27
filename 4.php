<?php

function cek_pesan($teks,$kata)
 
{
 
$hasil = 0;
 
$jml_kata = count($kata);
 
for ($i=0;$i<$jml_kata;$i++)
 
{
 
if (stristr($teks,$kata[$i]))
 
{ $hasil=1; }
 
}
 
return $hasil;
 
}
 
$pesan = "outstanding";
$banyak = ['out','stand','king','and'];
 
if (cek_pesan($pesan,$banyak)) {
    echo "true";
}
?>