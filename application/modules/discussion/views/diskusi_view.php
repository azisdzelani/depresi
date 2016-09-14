<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-dashboard"></i><h3> Dashboard</h3>
              <a class="btn btn-large btn-primary" href="<?=base_url('discussion/create') ?>">Tambah Diskusi</a>
            </div>


            <div class="widget-content">
              <?php foreach ($lists as $diskusi) { ?>
               <div class="row">
                 <div class="news-item-date"> <span class="news-item-month"><?=$diskusi->tanggal ?></span> </div>
                 <div class="news-item-detail"> <a href="<?=base_url('discussion/get_by_id/'.$diskusi->id_diskusi)?>" class="news-item-title" target="_blank"><h3><?=$diskusi->judul_diskusi?></h3></a>
                  <p class="news-item-preview"> <?=$diskusi->isi_diskusi?></p>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



