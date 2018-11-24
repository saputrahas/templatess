<?php
// memanggil file siswa.php
require_once '../Crud.php';
if (isset($_POST['submit'])) {
    if (isset($_POST['id_kab'])) {
    // membuat objek siswa
    $crud = new Crud();
    // ambil data hasil submit dari form
    $id_kab = $_POST['id_kab'];
    $nama_kab=trim($_POST['nama_kab']);
        // update data siswa
        $crud->update_kab($nama_kab,$id_kab);      
    }
}                   
?>