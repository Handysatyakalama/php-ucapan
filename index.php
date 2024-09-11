<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ucapan & doa</title>
</head>
<body>
    <h3>ucapan & doa</h3>
    <p>berikan ucapan harapan & do'a kepada kedua mempelai</p>

    <form action="" method="post">
        <input type="text" name="ucapan" placeholder="nama"> <br>
        <textarea name="ucapan" cols="30" rows="4" placeholder="ucapan"></textarea> <br>
        <select name="keterangan">
            <option value="1">ya</option>
            <option value="2">tidakhadir</option>
            <option value="3">tidaktahu</option>
</select>
<button type="submit">KIRIM</button>
</form>

<?php
// koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "undangan";

$connection = new mysqli($host, $username, $password, $database);
if ($koneksi->connect_eror) {
    echo "koneksi gagal :(";
}

$nama = @$_POST['nama'];
$ucapan = @$_POST['ucapan'];
$keterangan = @$_POST['keterangan'];

$sql = "INSERT INTO bukutamu (nama , ucapan ,keterangan) VALUES ($nama , $ucapan , $keterangan)";

$connection->query($sql);

?>
</body>
</html>