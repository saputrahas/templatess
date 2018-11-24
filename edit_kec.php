<?php
include "home.php"; 
$koneksi=mysqli_connect("localhost","root","","gis");

$id=$_GET['id_kec'];
$sql=mysqli_query($koneksi,"select * from kecamatan where id_kec='$id' ");
$data=mysqli_fetch_array($sql);

if(isset($_POST['ubah'])){
    $id_kab=$_POST['id_kab'];
    $id_kec=$_POST['id_kec'];
    $nama_kec=$_POST['nama_kec'];
    $a="update kecamatan set id_kab='$id_kab',id_kec='$id_kec',nama_kec='$nama_kec' where id_kec='$id'";
    $b=mysqli_query($koneksi,$a);
    if($b){
      header("location:data_kec.php");
    }else{
      echo"Data Gagal Disimpan";
    }
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Kecamatan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Data Kecamatan</a></li>
    </ol>
  </section>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" align="center">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-location-arrow"></i>
            <span>Lokasi</span>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data_kab.php"><i class="fa fa-circle-o"></i> Kabupaten</a></li>
            <li><a href="data_kec.php"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Kelurahan</a></li>
          </ul>
        </li>
        <li class="header"></li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-database"></i> <span>Jasa</span></a></li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-database"></i> <span>Reklame</span></a></li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-database"></i> <span>Informasi</span></a></li>
        <li class="header"></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <form role="form" action="" method="POST">
            <div class="box-body">

              <div class="form-group">
                <label>Data Kabupaten</label>
                <select class="form-control" name="id_kab">
                 <?php
                 $j=mysqli_query($koneksi,"select * from kabupaten");
                 while($k=mysqli_fetch_array($j)){
                  $pilih=($k['id_kab']==$data['id_kab']?"selected":"");
                  echo "<option value='$k[id_kab]' $pilih>$k[nama_kab]</option>";

                }
                ?>

              </select>
            </div>

            <div class="form-group">
              <label>ID Kecamatan</label>
              <input type="text" name="id_kec" class="form-control" placeholder="Inputkan Kecamatan" value="<?php echo $data ['id_kec']; ?>">
            </div>
            <div class="form-group">
              <label>Nama Kecamatan</label>
              <input type="text" name="nama_kec" class="form-control" placeholder="Inputkan Kecamatan" value="<?php echo $data ['nama_kec']; ?>">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="ubah"> <i class="fa fa-refresh"></i> Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>


