<form method="post">
    Masukkan Umur Anda: <input type="text" name="umur"><br>
    <input type="submit" value="Cek Kategori Umur">
</form>

<?php
    $umur = isset($_POST['umur']) ? abs((int)$_POST['umur']) : '';

    switch(true){
        case ($umur >= 60):
            echo "Anda tergolong lansia, dengan umur = ".$umur." tahun";
            break;
        case ($umur >= 18):
            echo "Anda tergolong dewasa, dengan umur = ".$umur." tahun";
            break;
        case ($umur >= 13):
            echo "Anda tergolong remaja, dengan umur = ".$umur." tahun";
            break;
        case ($umur > 0):
            echo "Anda tergolong anak-anak, dengan umur = ".$umur." tahun";
            break;
        default:
            echo "Masukkan umur yang valid.";
    }

    echo "<br>Program Selesai";
?>
