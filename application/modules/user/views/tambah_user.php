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
<?php echo form_open(base_url('user/do_create'));?>

<div class="form-group">
  
  <input type="text" class="input-block-level title" type="text" name="nama" placeholder="Masukan Nama Lengkap">

  <input type="text" class="input-block-level title" name="nip" placeholder="Masukan NIP">

  <input type="text" class="input-block-level title" name="tempat_lahir" value="<?=set_value('tempat_lahir'); ?>" placeholder="Masukan Tempat Lahir">

   <input type="date" class="input-block-level title" name="tanggal_lahir" value="<?=set_value('tanggal_lahir'); ?>" placeholder="Masukan Tanggal Lahir">

  <select name="jenis_kelamin" class="input-block-level title">
    <option value="">Pilih Jenis Kelamin</option>
    <option value="laki-laki"<?=set_value('laki-laki'); ?>>Laki-laki</option>
    <option value="perempuan">Perempuan<?=set_value('perempuan'); ?></option>
  </select>

  <select name="agama" class="input-block-level title">
    <option value="">Pilih Agama</option>
    <option value="islam">Islam</option>
    <option value="kristen">Kristen</option>
    <option value="protestan">Protestan</option>
    <option value="hindu">Hindu</option>
    <option value="budha">Budha</option>
  </select>

  <select name="jabatan" class="input-block-level title">
    <option value="">Pilih Jabatan</option>
    <?php foreach($jabatan as $result): ?>
      <option value="<?=$result->id_jabatan ?>"><?=$result->nama_jabatan?></option>
    <?php endforeach; ?>
  </select>

 <input type="text" class="input-block-level title" name="email" value="<?=set_value('email'); ?>" placeholder="Masukan Email">

 <textarea rows="5" name="alamat" class="input-block-level title"><?=set_value('alamat'); ?></textarea>

 <input type="text" class="input-block-level title" name="telepon" value="<?=set_value('telepon'); ?>" placeholder="Masukan Nomer Telepon">

  <select name="level_user" class="input-block-level title">
    <option value="">Pilih Level User</option>
    <option value="Kepala Bagian">Kepala Bagian</option>
    <option value="Kepala Sub Bagian">Kepala Sub Bagian</option>
    <option value="Staff">Staff</option>
  </select>



</div>

<div class="controls pull-right">
  <input type="submit" name="submit" class="btn btn-primary btn-large" value="Save">
  <input type="reset" name="reset" class="btn btn-warning btn-large" value="Reset">
</div>

 <?php echo form_close(); ?>
</div>

</div>