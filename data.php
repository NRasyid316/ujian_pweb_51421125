<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jkel = $_POST['jkel'];

mysqli_query($hubung, "INSERT INTO mhs (npm, nama, jkel) VALUES ('$npm', '$nama', '$jkel')");

$data = mysqli_query($hubung, "SELECT npm, nama, jkel FROM mhs");

if (!$data) {
    die("Error in SQL query: " . mysqli_error($hubung));
}

echo "<br>";
echo "<br>";

if ($data->num_rows > 0) {
    
    while ($row = $data->fetch_assoc()) {
        echo "NPM: " . $row["npm"] . " - Nama: " . $row["nama"] . " Jenis Kelamin: " . $row["jkel"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
