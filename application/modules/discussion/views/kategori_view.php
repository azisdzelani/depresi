<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget">
            <!-- content start -->
            <div class="widget-content">
              <div class="panel panel-primary">
              <div class="panel-heading"><?=$title?></div>
                <div class="panel-body">
                  <table id="tbl-user" class="table table-striped table-bordered">
                    <tbody>
                      <?php 
                      $i=0;
                      foreach ($lists as $kategori) { ?>
                        <tr>
                          <td width="2%"><img src="http://findicons.com/icon/download/19182/chat/48/png"></td>
                          <td width="58%">
                            <a href="<?=base_url('discussion/get_by_kategori/'.$kategori->id_kategori)?>"><h2><?=$kategori->nama_kategori?></h2></a>
                            <p><?=$kategori->keterangan?></p>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



