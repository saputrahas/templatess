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
          <li><a href="data_kel.php"><i class="fa fa-circle-o"></i> Kelurahan</a></li>
        </ul>
      </li>
      <li class="header"></li>
      <li><a href="data_jasa.php"><i class="fa fa-database"></i> <span>Jasa</span></a></li>
      <li><a href="data_reklame.php"><i class="fa fa-database"></i> <span>Reklame</span></a></li>
      <li><a href="data_informasi.php"><i class="fa fa-database"></i> <span>Informasi</span></a></li>
      <li class="header"></li>
    </ul>
  </section>
</aside>

  <section class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <form role="form" action="aksi_crud/create_kab.php" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label>Nama Kabupaten</label>
                <input type="text" name="nama_kab" id="nama_kab" class="form-control" placeholder="Inputkan Kabupaten">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="Simpan"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-8">
        <?php
        require_once "include/config.php";
        include "view.php";
        $list = informasigis::read_kabupaten();
        ?>
        <table id="tabelku1" class="table table-responsive table-striped">
          <thead>
            <th>No</th>
            <th>ID</th>
            <th>Nama Kabupaten</th>
            <th>Aksi</th>
            <tbody>
              <?php
              $no=1;
              foreach ($list as $value) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $value['id_kab'];?></td>
                  <td><?php echo $value['nama_kab'];?></td>
                  <td>
                   <a href="edit_kab.php?id_kab=<?php echo $value['id_kab']; ?>"><i class="fa fa-pencil"></i></a> &nbsp;
                   <a href="javascript:if(confirm('Anda yakin akan hapus data dengan nama  <?php echo  $value['nama_kab']; ?>??'))
                     {document.location='aksi_crud/hapus_kab.php?id_kab=<?php echo $value['id_kab']; ?>';}"><i class="fa fa-trash"></i></a>
                   </td>
                 </tr>

               </tbody>
               <?php $no++;  } ?>
             </thead>
           </tbody>
         </table>
       </div>
     </div>
   </section>
 </div>
 <script type="text/javascript">
 $('#tabelku1').DataTable();
</script>



