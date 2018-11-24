<?php 
if(isset($_SESSION['id_admin'])){ echo ucwords($_SESSION['username']);}
include "home.php";
?>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
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
      <li><a href="data_reklame"><i class="fa fa-database"></i> <span>Reklame</span></a></li>
      <li><a href="data_informasi"><i class="fa fa-database"></i> <span>Informasi</span></a></li>
      <li class="header"></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
 <section class="content-header">
  <h1>
    Fixed Layout
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
  </ol>
</section>
<section class="content">

  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <div class="box-footer">
          Footer
        </div>
      </div>
    </section>
  </div>


