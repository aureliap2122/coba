<?php
echo "<h2> Pilih Jurusan di Fakultas Teknik UNDIP : </h2>";
echo "1. Tekkom <br>";
echo "2. Tekkim <br><hr>";

$prodi =1;

if ($prodi ==1){
    echo $prodi. "<br>Kamu memilih Teknik Komputer!</br>";
} 
else if ($prodi ==2){
    echo $prodi. "<br>Kamu memilih Teknik Kimia</br>";
}
else {
    echo $prodi. "<br>Tidak memilih keduanya. </br>";
}
echo "Program Selesai "
?>
