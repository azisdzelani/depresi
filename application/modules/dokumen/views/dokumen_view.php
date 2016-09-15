<div class="main">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">

          <div class="panel panel-default">
            <div class="panel-body">
            <div class="widget">
            <div class="widget-header">
              <i class="icon-book"></i><h3> <?=$title; ?></h3>
              <a class="btn btn-large btn-primary" href="<?=base_url('dokumen/create') ?>">Tambah Dokumen</a>
            </div>

            <div class="widget-content">
              <div class="controls pull-right">
                <div class="btn-group">
                  <input type="text" class="form-control" autocomplete="off" id="search" name="search" placeholder="Cari User ... ">
                </div>
              </div> 
              <!-- end search -->

              <div class="controls pull-left">
                <a class="btn btn-default" id="btn-check-all"><i class="icon-check"></i></a>
              </div>

              <div class="controls pull-left">
                <div class="btn-group">
                  <a class="btn btn-default" href="#">Aksi Filter</a>
                  <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                  <ul class="dropdown-menu" id="btn-action-user">
                    <li><a href="#"><i class="icon-ok"></i> Aktifkan</a></li>
                    <li><a href="#" ><i class="icon-ban-circle"></i> Non Aktifkan</a></li>
                  </ul>
                </div>
              </div>
              <!-- end controls -->  

              <table id="tbl-user" class="table table-striped table-bordered">
                <tbody>
                  <tr align="center">
                    <td width="2%"><strong>No</strong></td>
                    <td width="25%"><strong>Nama Dokumen</strong></td>
                    <td width="25%"><i class="icon-envelope"></i> <span class="value"><strong>Keterangan</strong></span></td>
                    <td width="10%"><i class="icon-lock"></i> <span class="value"><strong>Tanggal</strong></span></td>
                    <td width="10%"><i class="icon-time"></i> <span class="value"><strong>Kategori</strong></span></td>
                    <td width="10%"><i class="icon-remove"></i> <span class="value"><strong>Aksi</strong></span></td>
                  </tr>
                  <?php 
                  $i=0;
                  foreach ($dokumen as $list) { ?>
                    <tr>
                      <td width="2%"><?=++$i?></td>
                      <td width="25%"><img src="<?= base_url()?>assets/img/document.png"> <?=$list->file?></td>
                      <td width="25%"><?=$list->keterangan?></td>
                      <td width="10%"><?=$list->tanggal?></td>
                      <td width="10%"><?=$list->nama_kategori?></td>
                      <td width="10%">
<<<<<<< HEAD
                        <a href="<?=base_url('dokumen/delete/'.$list->id_dokumen.'/'.$list->file)?>" class="btn btn-medium btn-danger"><i class="icon-trash"></i> <span class="value"> Hapus Dokumen</span></a>
=======
                        <a href="<?=base_url('dokumen/delete/'.$list->id_dokumen)?>" class="btn btn-medium btn-danger"><i class="icon-trash"></i> <span class="value"> Hapus Dokumen</span></a>
>>>>>>> f9567fca8d43252f6061823c1688180a27f043fa
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

                <div class="controls pull-right">
                  <ul></ul>          
                </div>

            </div>
              <!-- /widget-content --> 
          </div>
            </div>
          </div>

          </div>
        </div>
        <!-- /row --> 
      </div>
      <!-- /container --> 
    </div>
    <!-- /main-inner --> 
  </div>
  <!-- /main -->

