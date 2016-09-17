<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <h3> <?=$title; ?></h3>
              <a class="btn btn-large btn-primary" href="<?=base_url('user/create') ?>">Tambah Pegawai</a>
            </div>
            <div class="widget-content">
              <div class="panel panel-primary">
                <div class="panel-heading"><i class="icon-group"></i></div>
                <div class="panel-body">
                  <table id="tbl-user" class="table table-striped table-bordered">
                    <tbody>
                     <tr align="center">
                      <td><strong>No</strong></td>
                      <td><strong>Nama User</strong></td>
                      <td><i class="icon-envelope"></i> <span class="value"><strong>Email</strong></span></td>
                      <td><i class="icon-lock"></i> <span class="value"><strong>Level User</strong></span></td>
                      <td><i class="icon-time"></i> <span class="value"><strong>Status</strong></span></td>
                      <td><i class="icon-remove"></i> <span class="value"><strong>Aksi</strong></span></td>
                    </tr>
                    <?php 
                    $i=0;
                    foreach ($lists as $user) { ?>
                      <tr>
                        <td width="2%"><?=++$i?></td>
                        <td width="25%"><img src="<?= base_url()?>assets/img/user.png"> <?=$user->nama_lengkap?></td>
                        <td width="25%"><?=$user->email?></td>
                        <td width="15%"><?=$user->level_user?></span></td>
                        <td width="15%"><?=$user->status?></span></td>
                        <td width="18%">
                          <a href="<?=base_url('user/edit/'.$user->id_pegawai)?>" class="btn btn-small btn-info"><i class="btn-icon-only icon-pencil">
                            Edit</i></a>

                            <a href="<?=base_url('user/delete/'.$user->id_pegawai)?>" class="btn btn-small btn-danger"><i class="btn-icon-only icon-remove">
                              Hapus</i></a>
                            </td>
                          </tr>
                          <?php } ?>        
                        </div>
                      </tbody>
                    </table>
                    <ul class="controls pull-right"><?=$pagination; ?></ul> 
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

