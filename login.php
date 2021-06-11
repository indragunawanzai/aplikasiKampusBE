<?php
    require 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $response = array();
        $username = $_POST['username']; //indra
        $password = md5($_POST['password']); //12345

        // cek data
        $cek = "SELECT * FROM 'tb_user' WHERE 'username' ='$username' AND 'password' ='$password' ";

        // hasil cek
        $result = mysqli_fetch_array(mysqli_query($connect,$cek));
        if (isset($result)) {
            $response['value'] = 1;
            $response['message'] = 'Login Berhasil';
            $response['username'] = $result['username'];
            $response['nama'] = $result['nama'];
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = 'Login Gagal';
            echo json_encode($response);
        }
    }

?>