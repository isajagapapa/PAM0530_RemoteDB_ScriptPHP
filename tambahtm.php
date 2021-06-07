<?php

    // deklarasi alamat server
    $server = "localhost";

    // deklarasi username
    $user = "root";

    // deklarasi nama database
    $namadb = "tiumy";

    // deklarasi password
    $password = "";

    // membuat koneksi ke dalam db
    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $nama = $_POST['nama'];
    $telpon = $_POST ['telpon'];

    class emp{}
        $query = mysqli_query($conn, "insert into teman (nama, telpon) values ('$nama', '$telpon')");

        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil disimpan";
            die (json_encode($response));
        }

        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menyimpan data";
            die (json_encode($response));
        }
?>