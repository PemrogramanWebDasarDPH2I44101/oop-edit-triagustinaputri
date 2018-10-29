<?php
    require("data.php");
    
    $nim = $_GET['nim'];
    $result = $data -> select_data($nim);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title> EDIT </title>

</head>
<body>
        <h2> EDIT </h2>
                <hr>
                <form method="POST" action="data.php?edit=data">
                <table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Nim</td>
        <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
    </tr>
    <tr>
        <td>Tgl_lahir</td>
        <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>
                    
</body>
</html>