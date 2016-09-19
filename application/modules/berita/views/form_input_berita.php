<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget-content">
            <div class="panel panel-primary">
              <div class="panel-heading">Form Input Berita</div>
              <div class="panel-body"><br>
                 <?=form_open_multipart('berita/do_create', ['form-horizontal']); ?>
                  <div class="form-group">
                    <input class="input-block-level title" type="text" name="judul" placeholder="Tuliskan Judul Berita" >
                    <textarea class="form-control input-block-level" id="ckeditor1" name="isi" rows="7" placeholder="Isi Berita  di sini"></textarea><br>
                    <input class="input-block-level title" type="date" name="tanggal">
                    <select name="kategori" class="input-block-level title">
                      <option>Pilih Kategori</option>
                      <?php foreach($kategori as $k): ?>
                        <option value="<?=$k->id_kategori_berita ?>"><?=$k->nama_kategori ?></option>
                      <?php endforeach; ?>
                    </select>
                    <div class="control-group">                     
                      <strong>Gambar</strong> : <input type="file" class="span6" name="userfile">
                    </div> <!-- /control-group -->          
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button> 
                  </div> <!-- /form-actions -->
                 <?php form_close(); ?>
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

