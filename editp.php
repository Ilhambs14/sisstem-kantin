<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['updates']))
{	
    $idp = $_POST['id_p'];
    
    $namap=$_POST['nama_penjual'];
    $no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET nama_penjual='$namap',no_hp='$no_hp',alamat='$alamat' WHERE id_p=$idp");
    
    // Redirect to homepage to display updated user in list
    header("Location: penjual.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idp = $_GET['id_p'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_p=$idp");
 
while($user_data = mysqli_fetch_array($result))
{
    $namap = $user_data['nama_penjual'];
    $no_hp = $user_data['no_hp'];
    $alamat = $user_data['alamat'];
}
?>
<html>

<head>
    <title>Edit Menu</title>
</head>

<body>
    <a href="penjual.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="editp.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_penjual" value=<?php echo $namap;?>></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_p" value=<?php echo $_GET['id_p'];?>></td>
                <td><input type="submit" name="updates" value="Updates"></td>
            </tr>
        </table>
    </form>
</body>

</html>