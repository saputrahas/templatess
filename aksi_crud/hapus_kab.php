<?php
// memanggil file siswa.php
require_once '../Crud.php';

if (isset($_GET['id_kab'])) {
    // membuat objek siswa
    $crud = new Crud();

	$id_kab = $_GET['id_kab'];

	// delete data siswa
    $crud->delete_kab($id_kab);
}					
?>