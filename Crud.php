<?php

class Crud {

    function view() {
        // memanggil file config.php
        require_once "config/database.php";
        // membuat objek db dengan nama $db
        $db = new database();
        // membuka koneksi ke database
        $mysqli = $db->connect();
        // sql statement untuk mengambil semua data siswa
        $sql = "SELECT * FROM kabupaten ORDER BY id_kab DESC";
        $result = $mysqli->query($sql);
        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }
        // menutup koneksi database
        $mysqli->close();
        // nilai kembalian dalam bentuk array
        return $hasil;
    }

    /* Method untuk menyimpan data ke tabel  */
    function insert($nama_kab) {
        // memanggil file config.php
        require_once "config/database.php";
        // membuat objek db dengan nama $db
        $db = new database();
        // membuka koneksi ke database
        $mysqli = $db->connect();
        $nama_kab          = $mysqli->real_escape_string($nama_kab);
        $sql = "INSERT INTO kabupaten (nama_kab) 
        VALUES ('$nama_kab')";
        $result = $mysqli->query($sql);
        // cek hasil query
        if($result){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location:../data_kab.php");
        }
    else{
        /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
        header("Location: index.php?alert=1");
    }
        // menutup koneksi database
    $mysqli->close();
}

/* Method untuk menampilkan data siswa berdasarkan nis */
function get_kab($id_kab) {
// memanggil file database.php
    require_once "config/database.php";
// membuat objek db dengan nama $db
    $db = new database();
// membuka koneksi ke database
    $mysqli = $db->connect();
// sql statement untuk mengambil data siswa berdasarkan nis
    $sql = "SELECT * FROM kabupaten WHERE id_kab='$id_kab'";
    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();
// menutup koneksi database
    $mysqli->close();
// nilai kembalian dalam bentuk array
    return $data;
}

/* Method untuk mengubah data pada tabel siswa */
function update_kab($nama_kab,$id_kab) {
// memanggil file database.php
    require_once "config/database.php";
// membuat objek db dengan nama $db
    $db = new database();
// membuka koneksi ke database
    $mysqli = $db->connect();
// sql statement untuk update data siswa
    $sql = "UPDATE kabupaten SET nama_kab='$nama_kab' WHERE id_kab ='$id_kab'"; 
    $result = $mysqli->query($sql);
// cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 3 */
        header("Location:../data_kab.php");
    }
else{
    /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
    header("Location: index.php?alert=1");
}
// menutup koneksi database
$mysqli->close();
}

/* Method untuk menghapus data pada tabel siswa */
function delete_kab($id_kab) {
// memanggil file database.php
    require_once "config/database.php";
// membuat objek db dengan nama $db
    $db = new database();
// membuka koneksi ke database
    $mysqli = $db->connect();
// sql statement untuk delete data siswa
    $sql = "DELETE FROM kabupaten WHERE id_kab = '$id_kab'";
    $result = $mysqli->query($sql);
// cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 */
        header("Location:../data_kab.php");
    }
else{
    /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
    header("Location: index.php?alert=1");
}
// menutup koneksi database
$mysqli->close();
}

function combo_kab() {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "SELECT * FROM kabupaten ORDER BY id_kab ASC";
    $result = $mysqli->query($sql);
    while ($data = $result->fetch_array()) {
        $hasil[] = $data;
    }
    $mysqli->close();
    return $hasil;
}


function insert_kec($nama_kec, $id_kab) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "INSERT INTO kecamatan (nama_kec,id_kab) 
    VALUES ('$nama_kec','$id_kab')";
    $result = $mysqli->query($sql);
    if($result){
        header("Location:../data_kec.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}

function get_kec($id_kec) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "SELECT * FROM kecamatan WHERE id_kec='$id_kec'";
    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();
    $mysqli->close();
    return $data;
}

function update_kec($id_kec,$nama_kec,$id_kab) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sqlupdate = "UPDATE kecamatan SET nama_kec='$nama_kec', id_kab='$id_kab' WHERE id_kec='$id_kec'"; 
    $hasil = $mysqli->query($sqlupdate);
    if($hasil){
        header("Location: ../data_kec.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}


/* Method untuk menghapus data pada tabel siswa */
function delete_kec($id_kec) {
// memanggil file database.php
    require_once "config/database.php";
// membuat objek db dengan nama $db
    $db = new database();
// membuka koneksi ke database
    $mysqli = $db->connect();
// sql statement untuk delete data siswa
    $sql = "DELETE FROM kecamatan WHERE id_kec = '$id_kec'";
    $result = $mysqli->query($sql);
// cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 */
        header("Location:../data_kec.php");
    }
else{
    /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
    header("Location: index.php?alert=1");
}
// menutup koneksi database
$mysqli->close();
}



















































function delete_photo($id_photo) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "DELETE FROM photo WHERE id_photo='$id_photo'";
    $result = $mysqli->query($sql);
    if($result){
        header("Location: ../photo.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}
function insert_kategori($nama_kategori) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "INSERT INTO kategori (nama_kategori) 
    VALUES ('$nama_kategori')";
    $result = $mysqli->query($sql);
    if($result){
        header("Location:../kategori.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}
function get_kategori($id_kategori) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();
    $mysqli->close();
    return $data;
}
function update_kategori($id_kategori,$nama_kategori) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sqlupdate = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'"; 
    $hasil = $mysqli->query($sqlupdate);
    if($hasil){
        header("Location: ../kategori.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}
function delete_kategori($id_kategori){
    require_once "config/database.php";
    $dbcon = new database();
    $mysqliku= $dbcon->connect();
    $sqldelete= "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
    $hasildelete= $mysqliku->query($sqldelete);
    if ($hasildelete){
        header("Location:../kategori.php");
    }else{
        header("Location:../kategori.php");
    }
    $mysqliku->close();
}
function combo_kategori() {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "SELECT * FROM kategori ORDER BY id_kategori ASC";
    $result = $mysqli->query($sql);
    while ($data = $result->fetch_array()) {
        $hasil[] = $data;
    }
    $mysqli->close();
    return $hasil;
}
function get_berita($id_berita) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "SELECT * FROM berita,admin WHERE berita.id_admin=admin.id_admin AND berita.id_berita='$id_berita'";
    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();
    $mysqli->close();
    return $data;
}
function insert_berita($judul_berita,$isi_berita,$publish,$photo_berita,$id_admin,$id_kategori,$keterangan) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "INSERT INTO berita (judul_berita,isi_berita,publish,photo_berita,id_admin,id_kategori,keterangan) 
    VALUES ('$judul_berita','$isi_berita','$publish','$photo_berita','1','$id_kategori','$keterangan')";
    $result = $mysqli->query($sql);
    if($result){
        header("Location:../kategori.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}
function update_photo_berita($id_berita,$photo_berita) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sqlupdate = "UPDATE berita SET photo_berita='$photo_berita' WHERE id_berita='$id_berita'"; 
    $hasil = $mysqli->query($sqlupdate);
    if($hasil){
        header("Location: ../index.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}
function update_berita($judul_berita,$isi_berita,$publish,$id_kategori,$id_berita,$keterangan) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sqlupdate = "UPDATE berita SET judul_berita='$judul_berita',isi_berita='$isi_berita',publish='$publish',id_kategori='$id_kategori',keterangan='$keterangan' WHERE id_berita='$id_berita'"; 
    $hasil = $mysqli->query($sqlupdate);
    if($hasil){
        header("Location: ../index.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}
function delete_berita($id_berita){
    require_once "config/database.php";
    $dbcon = new database();
    $mysqliku= $dbcon->connect();
    $sqldelete= "DELETE FROM berita WHERE id_berita='$id_berita'";
    $hasildelete= $mysqliku->query($sqldelete);
    if ($hasildelete){
        header("Location:../index.php");
    }else{
        header("Location:../index.php");
    }
    $mysqliku->close();
}
function insert_komen($komentar,$nama_komentar,$email_komentar,$tgl_komen) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();

    $sql = "INSERT INTO komentar (komentar,nama_komentar,email_komentar,tgl_komen) 
    VALUES ('$komentar','$nama_komentar','$email_komentar','$tgl_komen')";

    $result = $mysqli->query($sql) or die (mysqli_error($mysqli));
// cek hasil query
    if($result){
        /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
        echo "<script type='text/javascript'>
        onload =function(){
            alert('KOMENTAR TELAH TERKIRIM KAMI AKAN MEMBALAS MELALUI EMAIL');
            document.location='../../kontak.php';
        }
        </script>";
    }
else{
    /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
    header("Location: ../../index.php?alert=1");
}

// menutup koneksi database
$mysqli->close();
}

function delete_file($id_file) {
    require_once "config/database.php";
    $db = new database();
    $mysqli = $db->connect();
    $sql = "DELETE FROM file WHERE id_file='$id_file'";
    $result = $mysqli->query($sql);
    if($result){
        header("Location: ../file.php");
    }
else{
    header("Location: index.php?alert=1");
}
$mysqli->close();
}



}
?>
