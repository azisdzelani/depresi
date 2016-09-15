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
            </div>

            <div class="widget-content">
              <div class="controls pull-left">
                <form class="form-search" action="<?=base_url('kategori_dokumen/do_create')?>" method="post">
                  <input type="text" class="span6" name="nama_kategori" placeholder="Masukan Nama Kategori...">
                  <button type="submit" class="btn btn-maedium btn-info">Tambah Kategori</button>
                </form>
                <!-- tambah kategori dokumen -->

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

