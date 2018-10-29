<!DOCTYPE html>
<html>
<head>
    <title> Data Siswa </title>
</head>
<body>
    <a href="tambah.php"><input type="button" value="Tambah Data"></a>
                <table>
                    <thead>
                        <tr>
                            <th> Nama </th>
                            <th> Nim </th>
                            <th> Tgl_lahir </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("data.php");
                            $result = $data -> view();
                            $isi = mysqli_num_rows($result);

                            if($isi != 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['tgl_lahir']; ?></td>
                                        <td><a href="edit.php?nim=<?php echo $row['nim']; ?>"><input type="button" value="Edit"></a> <a href="data.php?hapus=<?php echo $row['nim']; ?>"><input type="button" value="Hapus"></a></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
</body>
</html>
