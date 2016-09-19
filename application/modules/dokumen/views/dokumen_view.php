<div class="main">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">   
            <div class="widget">
            <div class="widget-header">
              <h3> <?=$title; ?></h3>
              <a class="btn btn-large btn-primary" href="<?=base_url('dokumen/create') ?>">Tambah Dokumen</a>
            </div>

            <div class="widget-content">
              <div class="panel panel-primary">
                <div class="panel-heading"><i class="icon-book"></i></div>
              <div class="panel-body">
                <table id="tbl-user" class="table table-striped table-bordered">
                <tbody>
                  <tr align="center">
                    <td width="2%"><strong>No</strong></td>
                    <td width="25%"><strong>Nama Dokumen</strong></td>
                    <td width="25%"><i class="icon-envelope"></i> <span class="value"><strong>Keterangan</strong></span></td>
                    <td width="10%"><i class="icon-lock"></i> <span class="value"><strong>Tanggal Upload</strong></span></td>
                    <td width="10%"><i class="icon-time"></i> <span class="value"><strong>Kategori</strong></span></td>
                    <td width="10%"><i class="icon-remove"></i> <span class="value"><strong>Aksi</strong></span></td>
                  </tr>
                  <?php 
                  $i=0;
                  foreach ($dokumen as $list) { ?>
                    <tr>
                      <td width="2%"><?=++$i?></td>
                      <td width="25%"><?=$list->judul?></td>
                      <td width="25%"><?=$list->keterangan?></td>
                      <td width="10%"><?=$list->tanggal?></td>
                      <td width="10%"><?=$list->nama_kategori?></td>
                      <td width="10%">
                        <a href="<?=base_url('dokumen/delete/'.$list->id_dokumen)?>" class="btn btn-medium btn-danger"><i class="icon-trash"></i> <span class="value"> Hapus</span></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

                <div class="controls pull-right">
                  <ul></ul>          
                </div>
              </div>
              </div>

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

