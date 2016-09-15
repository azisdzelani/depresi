<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-dashboard"></i><h3> <?=$title ?></h3>
            </div>

            <!-- content start -->
            <div class="widget-content">
<<<<<<< HEAD
              <div class="panel panel-primary">
              <div class="panel-heading"></div>
                <div class="panel-body">
                  <table id="tbl-user" class="table table-striped table-bordered">
                    <tbody> 
                      
                        <tr>
                          <td width="2%"><img src="http://findicons.com/icon/download/19182/chat/48/png"></td>
                          <td width="58%">
                            <a href=""></h2></a>
                            <p></p>
                          </td>
                          <td><span><i class="icon-comment"></i> </span></td>
                          <td> <br/> 
                          <strong></strong></td>
                        </tr>
                    

                    </tbody>
                  </table>
                </div>
              </div>                
=======
              <?php foreach ($lists as $diskusi) { ?>
               <div class="row">
                 <div class="news-item-date"> <span class="news-item-month"><?=$diskusi->tanggal ?></span> </div>
                 <div class="news-item-detail"> <a href="<?=base_url('discussion/get_by_id/'.$diskusi->id_diskusi)?>" class="news-item-title" target="_blank"><h3><?=$diskusi->judul_diskusi?></h3></a>
                  <p class="news-item-preview"> <?=$diskusi->isi_diskusi?></p>
                </div>
              </div>
              <?php } ?>
>>>>>>> f9567fca8d43252f6061823c1688180a27f043fa
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>



