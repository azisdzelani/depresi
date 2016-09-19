<div class="main">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">   
            <div class="widget">
            <div class="widget-header">
              <h3> Berita</h3>
              <a class="btn btn-large btn-primary" href="<?=base_url('berita/create') ?>">Tambah Berita</a>
            </div>

            <div class="widget-content">
              <div class="panel panel-primary">
                <div class="panel-heading"><i class="icon-book"></i></div>
              <div class="panel-body">
                <table id="tbl-user" class="table table-striped table-bordered">
                <tbody>
                  <tr align="center">
                    <td width="15%"><strong>Judul Berita</strong></td>
                    <td width="35%"><i class="icon-envelope"></i> <span class="value"><strong>Isi</strong></span></td>
                    <td width="10%"><i class="icon-lock"></i> <span class="value"><strong>Gambar</strong></span></td>
                    <td width="10%"><i class="icon-time"></i> <span class="value"><strong>Tanggal</strong></span></td>
                    <td width="10%"><i class="icon-remove"></i> <span class="value"><strong>Aksi</strong></span></td>
                  </tr>
                  <?php 
                  foreach ($berita as $list) { ?>
                  <tr>
                    <td><?=$list->judul ?></td>
                    <td><?=$list->isi ?></td>
                    <td><?=$list->gambar ?></td>
                    <td><?=$list->tanggal ?></td>
                    <td>
                      <a href="#" class="btn btn-medium btn-danger"><i class="icon-trash"></i> <span class="value"> Hapus</span></a>
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

