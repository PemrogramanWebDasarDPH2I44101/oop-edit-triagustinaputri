<!DOCTYPE html>
<html>
<head>
    <title> Tambah Data </title>
</head>
<body>
                
<h3>Tambah Data Siswa</h3>
 
<form action="data.php?tambah=data" method="post">
    
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Nim</td>
        <td><input type="text" name="nim"></td>
    </tr>
    <tr>
        <td>Tgl_lahir</td>
        <td><input type="date" name="tgl_lahir"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>