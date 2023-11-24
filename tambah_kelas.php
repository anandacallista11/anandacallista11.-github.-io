<?php
include '../config/config.php';
if (isset($_POST['save'])) {
    $namakelas = $_POST['namakelas'];
    $kompetensi = $_POST['kompetensi'];
    $tahun_pelajaran = $_POST['tahun_pelajaran'];
    $ketengan = $_POST['keterangan'];

    $insert = "INSERT INTO kelas VALUES (null, '$namakelas', '$kompetensei', '$tahun_pelajaran', '$ketengan')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Tambah Data Berhasil'); document.location.href = '../siswa/kelas.php';</script>";
    } else {
        echo "Error: ". $insert . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>