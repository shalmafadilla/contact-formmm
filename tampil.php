<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="form.css" />
</head>

<body>
    <div class="title">
        <h1>THANK YOU!</h1>
        <h3>Please Check Your Data Below</h3>
    </div>
    <div class="title-table">
        <h1>DATA TABLE</h1>
    </div>
    <table class="table_border" border="1px">
        <thead style="background-color: #ffe7f0">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Motto Hidup</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'proses.php';

            $sql = "SELECT * FROM biodata";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output data dari setiap baris
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['tanggal_lahir'] . "</td>";
                    echo "<td>" . $row['usia'] . "</td>";
                    echo "<td>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td>" . $row['agama'] . "</td>";
                    echo "<td>" . $row['pesan'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="index.html" method="get">
        <input class="button" type="submit" name="submit2" value="BACK" method="get" action="index.html" />
    </form>
    <footer>&copy;2024-Shalma Nur Fadilla.</footer>
</body>

</html>