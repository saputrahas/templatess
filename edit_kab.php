<?php
include "home.php"; 
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Kabupaten
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Data Kabupaten</a></li>
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
          <?php
          $id_kab = $_GET['id_kab'];
          if (isset($id_kab)) {
  // memanggil file 
            require_once 'Crud.php';
  // membuat objek 
            $crud = new Crud();
  // mengambil data 
            $data = $crud->get_kab($id_kab);
            $id_kab    = $data['id_kab'];
            $nama_kab  = $data['nama_kab'];
          }  
          ?>
          <form role="form" action="aksi_crud/edit_pro_kab.php" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label>ID Kabupaten</label>
                <input type="text" name="id_kab" class="form-control" placeholder="Inputkan Kecamatan" value="<?php echo $id_kab; ?>">
              </div>
              <div class="form-group">
                <label>Nama Kabupaten</label>
                <input type="text" name="nama_kab" class="form-control" placeholder="Inputkan Kecamatan" value="<?php echo $nama_kab; ?>">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="Simpan"> <i class="fa fa-refresh"></i> Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>


