<<<<<<< HEAD
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $penjual=$_POST['id_p'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE menu SET nama='$nama',jenis='$jenis',harga='$harga',id_p='$penjual' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: menu.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $jenis = $user_data['jenis'];
    $harga = $user_data['harga'];
    $penjual = $user_data['id_p'];
}
?>
<html>

<head>
    <title>Edit Menu</title>
</head>

<body>
    <a href="menu.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td>jenis</td>
                <td>
                    <select name="jenis">
                        <option value="makanan" <?php echo $jenis=="makanan" ? "selected" : ""; ?>>makanan </option>
                        <option value="minuman" <?php echo $jenis=="minuman" ? "selected" : ""; ?>>minuman </option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td>penjual</td>
                <td>
                    <select name="id_p">
                        <?php
                        include_once("config.php");
                        $result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_p DESC");

                        while ($data = mysqli_fetch_array($result)) {
                            echo "<option value='" . $data['id_p'] . "'>" . $data['nama_penjual'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            <tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

=======
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $nama=$_POST['nama'];
    $penjual=$_POST['penjual'];
    
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE menu SET jenis='$jenis',harga='$harga' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $jenis = $user_data['jenis'];
    $harga = $user_data['harga'];
    $nama = $user_data['nama'];
    $penjual = $user_data['penjual'];   
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Jenis</td>
                <td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>penjual</td>
                <td>
                    <select name="id_p" >
                        <?php
                        include_once("config.php");
                        $result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_p DESC");

                        while ($data = mysqli_fetch_array($result)) {
                            echo "<option value='" . $data['id_p'] . "'>" . $data['nama'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
            
        </table>
    </form>
</body>
>>>>>>> 2c4eb38d59e62c29904bd6f9fa8996b72692ce86
</html>