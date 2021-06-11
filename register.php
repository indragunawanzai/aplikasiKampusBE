<?php
    require 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $response = array();
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $nama = $_POST['nama'];

        // step 1 
        $cek = "SELECT * FROM tb_user WHERE username= '$username' ";
        $result = mysqli_fetch_array(mysqli_query($connect, $cek));
        if (isset($result)) {
            $response['value'] = 2;
            $response['message'] = 'Username telah digunakan';
            echo json_encode($response);
        } else {
            // step 2
            $insert = "INSERT INTO tb_user VALUE(NULL, '$username', '$password', '1','$nama','1', NOW())";
            if (mysqli_query($connect, $insert)) {
                $response['value'] = 1;
                $response['message'] = 'Berhasil Didaftarkan';
                echo json_encode($response);
            } else {
                $response['value'] = 0;
                $response['message'] = 'Gagal Didaftarkan';
                echo json_encode($response);
            }
        }
    }

?>