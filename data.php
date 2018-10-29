<?php
    class Data {
        private $connect;

        public function Data() {
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $db   = "tugas";

            $this->connect = mysqli_connect ($servername, $username, $password, $db);
        }

        public function tambah() {
            ;
            $nama   = $_POST['nama'];
            $nim    = $_POST['nim']
            $tgl_lahir   = $_POST['tgl_lahir'];
            $db = "INSERT INTO siswa (nama, nim, tgl_lahir) VALUES ('$nama', '$nim', '$tgl_lahir')";
            if (mysqli_query($this->connect, $db)) {
                <?php
            }
        }

        public function tampil() {
            $db = "SELECT * FROM siswa";
            return mysqli_query ($this->connect , $db);
        }

        public function lihat_data($nim) {
            $db = "SELECT * FROM siswa WHERE nim = '$nim'";
            return mysqli_query($this->connect, $db);
        }

        public function edit() {
            $nama   = $_POST['nama'];
            $nim    = $_POST['nim'];
            $tgl_lahir   = $_POST['tgl_lahir'];
            $db = "UPDATE siswa SET nama = '$nama', tgl_lahir = '$tgl_lahir', WHERE nim = '$nim'";
            if (mysqli_query($this->connect, $db)) {
                <?php
            }
        }

        public function hapus($nim) {
            $db = "DELETE FROM siswa WHERE nim = '$nim'";
            if (mysqli_query($this->connect, $db)) {
                <?php
            }
        } 
    }

    $data = new Data();
    if (isset($_GET['tambah'])) {    
        $data -> tambah();
    }

    if (isset($_GET['edit'])) {
        $data -> edit();
    }

    if (isset($_GET['hapus'])) {
        $data -> hapus($_GET['hapus']);
    }

  
?>
