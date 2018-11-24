<?php
// memanggil file 
require_once '../Crud.php';
if (isset($_POST['submit'])) {
    // membuat objek 
    $crud = new Crud();
    
    // ambil data hasil submit dari form
    $nama_kec=trim($_POST['nama_kec']);
    $id_kab=trim($_POST['id_kab']);
    // insert data 
    $crud->insert_kec($nama_kec,$id_kab);
}			
?>