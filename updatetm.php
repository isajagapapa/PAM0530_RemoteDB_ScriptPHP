<?php
    $server = "localhost";
    $user = "root";
    $namadb = "tiumy";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telpon = $_POST ['telpon'];

    class emp{}
        $query = mysqli_query($conn, "update teman set nama = '".$nama."', telpon = '".$telpon."' where id = '".$id."'");

        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil diupdate";
            die (json_encode($response));
        }

        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal mengupdate data";
            die (json_encode($response));
        }
?>