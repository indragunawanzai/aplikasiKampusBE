<?php
    require 'koneksi.php';
    $response = array();
    $get_data = "SELECT * FROM tbl_data_kampus";
    $sql = mysqli_query($connect, $get_data);
    while ($a = mysql_fetch_array($sql)) {
        $b['id'] = $a['id'];
        $b['nama_campus'] = $a['nama_campus'];
        $b['nama_rektor'] = $a['nama_rektor'];
        $b['jml_mahasiswa'] = $a['jml_mahasiswa'];
        $b['lokasi'] = $a['lokasi'];
        $b['julukan'] = $a['julukan'];
        $b['situs_web'] = $a['situs_web'];
        $b['deskripsi_campus'] = $a['deskripsi_campus'];
        $b['gbr_campus'] = $a['gbr_campus'];
        array_push($response, $b);
    }
    echo json_encode($response);
?>