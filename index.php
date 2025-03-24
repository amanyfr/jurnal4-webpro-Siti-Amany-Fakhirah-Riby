<?php
include "mahasiswa.php";

$conn = new mysqli("localhost", "root", "", "db_kampus");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>

<?php
$conn->close();
?>

