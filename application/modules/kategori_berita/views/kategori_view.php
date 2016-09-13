<div class="main">
  <div class="main-inner">
    <div class="container">
      
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-user"></i><h3> <?=$title; ?></h3>
              <!-- Button to trigger modal -->
              <?php 
              include('tambah.php');
               ?>
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
                  <tr>
                    <td width="2%">No</td>
                    <td width="25%"><img src="<?= base_url()?>assets/img/user.png">Nama Kategori Berita</td>
                    <td width="25%"><i class="icon-envelope"></i> <span class="value">Keterangan</span></td>
                    <td width="15%"><i class="icon-lock"></i> <span class="value">Urutan</span></td>
                    <td width="15%"><i class="icon-time"></i> <span class="value">Slug</span></td>
                    <td width="18%">
                      <a href="#" class="btn btn-small btn-info"><i class="btn-icon-only icon-pencil">
                      Edit</i></a>

                      <a href="#" class="btn btn-small btn-danger"><i class="btn-icon-only icon-remove">
                      Hapus</i></a>
                    </td>
                  </tr>
              		
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
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

