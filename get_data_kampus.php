<?php
    require 'koneksi.php';
    $sql = mysqli_query($connect. "SELECT * FROM tb_data_kampus");
    while ($a = mysqli_fetch_array($sql)) {
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