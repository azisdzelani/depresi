<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Tambah Kategori</a>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<!-- modal header -->
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Tambah Kategori Berita</h3>
</div>

<!-- modal body -->
<div class="modal-body">
  
<!-- open form -->
<?php 
// validasi input
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open(base_url('kategori_berita'));
 ?>

<div class="form-group">
  <label>Kategori Berita</label>
  <input class="input-block-level title" type="text" name="nama_kategori_berita" value="<?=set_value('nama_kategori_berita') ?>" placeholder="Tuliskan Kategori di sini" >

  <label>Urutan</label>
  <input class="input-block-level title" type="number" name="urutan" value="<?=set_value('urutan') ?>" placeholder="Urutan" >

  <label>Deskripsi Kategori</label>
  <textarea class="form-control input-block-level" name="keterangan" rows="7" placeholder="Keterangan Kategorinya di sini"><?=set_value('keterangan')?></textarea>
</div>

<div class="controls pull-right">
  <input type="submit" name="submit" class="btn btn-primary btn-large" value="Save">
  <input type="reset" name="reset" class="btn btn-warning btn-large" value="Reset">
</div>

 <?php echo form_close(); ?>
</div>

</div>