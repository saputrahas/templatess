<?php
// memanggil file 
require_once '../Crud.php';

if (isset($_POST['submit'])) {
    // membuat objek 
    $crud = new Crud();
    // ambil data hasil submit dari form
    $nama_kab=trim($_POST['nama_kab']);
    // insert data 
    $crud->insert($nama_kab);
}	
?>