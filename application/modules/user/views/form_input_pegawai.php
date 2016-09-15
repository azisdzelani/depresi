<div class="main">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">
              <div class="widget">
                <div class="widget-content">
                  <div class="panel panel-primary">
                    <div class="panel-heading">Tambah Pegawai</div>
                    <div class="panel-body">
                    <br>
                     <?=validation_errors(); ?>
                     <form id="edit-profile" class="form-horizontal" method="POST" action="<?=base_url('user/do_create') ?>">
                      <fieldset>
                        <div class="control-group">                     
                          <label class="control-label" for="firstname">Nama Lengkap</label>
                          <div class="controls">
                            <input type="text" class="span6" name="nama" value="<?=set_value('nama'); ?>" placeholder="Masukan Nama Lengkap">
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->

                        <div class="control-group">                     
                          <label class="control-label" for="firstname">NIP</label>
                          <div class="controls">
                            <input type="text" class="span6" name="nip" value="<?=set_value('nip'); ?>" placeholder="Masukan NIP">
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Tempat Lahir</label>
                          <div class="controls">
                            <input type="text" class="span6" name="tempat_lahir" value="<?=set_value('tempat_lahir'); ?>" placeholder="Masukan Tempat Lahir">
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->  

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Tanggal Lahir</label>
                          <div class="controls">
                            <input type="date" class="span6" name="tanggal_lahir" value="<?=set_value('tanggal_lahir'); ?>" placeholder="Masukan Tanggal Lahir">
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->    

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Jenis Kelamin</label>
                          <div class="controls">
                            <select name="jenis_kelamin" class="span6">
                              <option value="">Pilih Jenis Kelamin</option>
                              <option value="laki-laki"<?=set_value('laki-laki'); ?>>Laki-laki</option>
                              <option value="perempuan">Perempuan<?=set_value('perempuan'); ?></option>
                            </select>
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->   

                        <div class="control-group">              
                          <label class="control-label" for="lastname">Agama</label>
                          <div class="controls">
                            <select name="agama" class="span6">
                              <option value="">Pilih Agama</option>
                              <option value="islam">Islam</option>
                              <option value="kristen">Kristen</option>
                              <option value="protestan">Protestan</option>
                              <option value="hindu">Hindu</option>
                              <option value="budha">Budha</option>
                            </select>
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->   

                        <div class="control-group">                     
                          <label class="control-label" for="jabatan">Jabatan</label>
                          <div class="controls">
                            <select name="jabatan" class="span6">
                              <option value="">Pilih Jabatan</option>
                              <?php foreach($jabatan as $result): ?>
                                <option value="<?=$result->id_jabatan ?>"><?=$result->nama_jabatan?></option>
                              <?php endforeach; ?>
                            </select>
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->   

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Email</label>
                          <div class="controls">
                            <input type="text" class="span6" name="email" value="<?=set_value('email'); ?>" placeholder="Masukan Email">
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->   

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Alamat Rumah</label>
                          <div class="controls">
                            <textarea rows="5" name="alamat" class="span6"><?=set_value('alamat'); ?></textarea>
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->   

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Telepon</label>
                          <div class="controls">
                            <input type="text" class="span6" name="telepon" value="<?=set_value('telepon'); ?>" placeholder="Masukan Nomer Telepon">
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group -->   

                        <div class="control-group">                     
                          <label class="control-label" for="lastname">Level User</label>
                          <div class="controls">
                            <select name="level_user" class="span6">
                              <option value="">Pilih Level User</option>
                              <option value="Kepala Bagian">Kepala Bagian</option>
                              <option value="Kepala Sub Bagian">Kepala Sub Bagian</option>
                              <option value="Staff">Staff</option>
                            </select>
                          </div> <!-- /controls -->       
                        </div> <!-- /control-group --> 

                        <br />

                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Save</button> 
                          <button class="btn btn-primary">Cancel</button>
                        </div> <!-- /form-actions -->
                      </fieldset>
                    </form>
                  </div>
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

