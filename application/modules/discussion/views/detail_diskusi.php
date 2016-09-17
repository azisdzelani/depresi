<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <!-- content start -->
            <div class="widget-content"><br>
              <h1><?=$list_kategori->judul_diskusi ?></h1>
              <p><?=$list_kategori->isi_diskusi ?></p>
              <?php  
              foreach ($komentar as $list) { ?> 
                <b><?=$list->nama_lengkap?></b>             
                <p><?=$list->isi_komentar?></p>
                <?php } ?>

                <form action="<?=base_url('discussion/do_create') ?>" method="POST">
                  <input type="hidden" name="id_diskusi" value="<?=$list_kategori->id_diskusi?>">
                  <input type="text" name="komen"><br>
                  <button type="submit" name="sumbit">Comment</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



