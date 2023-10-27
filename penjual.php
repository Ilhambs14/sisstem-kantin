<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = "SELECT penjual. *, penjual.nama_penjual FROM penjual ";
$data = mysqli_query($mysqli, $result);
?>

<html>

<head>
    <title>Homepage</title>
    <style>
    .center {
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
    }

    .c1 {

        text-align: center;
    }
    </style>
</head>

<body>

    <a href="menu.php">Kembali</a><br /><br />
    <a href="addp.php">Tambah Penjual</a><br /><br />

    <table class="center" width='80%' border=1>
        <h1 class="c1">PENJUAL</h1>
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Update</th>
        </tr>
        <?php   
     while($user_data = mysqli_fetch_array($data)) {             
        echo "<tr>";
        echo "<td>".$user_data['nama_penjual']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";
        echo "<td>".$user_data['alamat']."</td>";      
        echo "<td><a href='editp.php?id_p=$user_data[id_p]'>Edit</a> | <a href='delete.php?id_p=$user_data[id_p]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>

</html>