<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header">
            <h3> <?=$title; ?></h3>
            <a class="btn btn-large btn-primary" href="<?=base_url('dokumen/create') ?>">Tambah Kategori</a>
            </div>
            <div class="widget-content">
              <div class="panel panel-primary">
                <div class="panel-heading"><i class="icon-file"></i></div>
                <div class="panel-body">
                  <table id="tbl-user" class="table table-striped table-bordered">
                    <tbody>
                      <tr align="center">
                        <td width="10%"><strong>No</strong></td>
                        <td width="30%"><i class="icon-envelope"></i> <span class="value"><strong>Nama Kategori</strong></span></td>
                        <td width="10%"><i class="icon-book"></i> <span class="value"><strong>Aksi</strong></span></td>
                      </tr>
                      <?php 
                      $i=0;
                      foreach ($kategori as $list) { ?>
                        <tr>
                          <td width="2%"><?=++$i?></td>
                          <td width="25%"><img src="<?= base_url()?>assets/img/document.png"> <?=$list->nama_kategori?></td>
                          <td width="10%">
                            <a href="<?=base_url('kategori_dokumen/delete/'.$list->id_kategori_dokumen)?>" class="btn btn-medium btn-danger"><i class="icon-trash"></i> <span class="value"> Hapus</span></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="controls pull-right">
                <ul></ul>          
              </div>
              <!-- /widget-content --> 
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

