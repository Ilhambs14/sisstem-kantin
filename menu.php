<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = "SELECT menu. *, penjual.nama_penjual FROM menu join penjual on menu.id_p = penjual.id_p";
$data = mysqli_query($mysqli, $result);
?>

<html>

<head>
    <title>Homepage</title>
    <style>
    .center {
        margin-left: auto;
        margin-right: auto;
        margin-top: 100 px;
    }

    .c1 {

        text-align: center;
    }
    </style>
</head>

<body>

    <a href="add.php">Tambah Pesanan</a><br /><br />
    <a href="penjual.php">Penjual</a><br /><br />

    <table class="center" width='80%' border=1>
        <h1 class="c1">MENU</h1>
        <tr>
            <th>Nama</th>
            <th>jenis</th>
            <th>harga</th>
            <th>penjual</th>
            <th>Update</th>
        </tr>
        <?php  
     while($user_data = mysqli_fetch_array($data)) {             
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td>".$user_data['nama_penjual']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>

</html>