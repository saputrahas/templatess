<?php
// memanggil file siswa.php
require_once '../Crud.php';

if (isset($_GET['id_kec'])) {
    // membuat objek siswa
    $crud = new Crud();

	$id_kab = $_GET['id_kec'];

	// delete data siswa
    $crud->delete_kec($id_kab);
}					
?>