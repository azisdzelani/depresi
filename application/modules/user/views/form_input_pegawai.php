<div class="main">
  <div class="main-inner">
    <div class="container">
      
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-user"></i><h3> Form Tambah Pegawai</h3>
            </div>

            <div class="widget-content">

              <form id="edit-profile" class="form-horizontal" method="POST" action="<?=base_url('user/do_create') ?>">
                  <fieldset>
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Nama Lengkap</label>
                      <div class="controls">
                        <input type="text" class="span6" name="nama" value="" placeholder="Masukan Nama Lengkap">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="firstname">NIP</label>
                      <div class="controls">
                        <input type="text" class="span6" name="nip" value="" placeholder="Masukan NIP">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                                       
                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Tempat Lahir</label>
                      <div class="controls">
                        <input type="text" class="span6" name="tempat_lahir" value="" placeholder="Masukan Tempat Lahir">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->  

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Tanggal Lahir</label>
                      <div class="controls">
                        <input type="date" class="span6" name="tanggal_lahir" value="" placeholder="Masukan Tanggal Lahir">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->    

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Jenis Kelamin</label>
                      <div class="controls">
                        <select name="jenis_kelamin" class="span6">
                          <option></option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Agama</label>
                      <div class="controls">
                        <select name="agama" class="span6">
                          <option></option>
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
                          <option></option>
                          <?php
                          foreach ($jabatan as $j) {
                             echo "<option value='{$j->id_jabatan}'>{$j->nama_jabatan}</option>";
                           } 

                           ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Email</label>
                      <div class="controls">
                        <input type="text" class="span6" name="email" value="" placeholder="Masukan Email">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Alamat Rumah</label>
                      <div class="controls">
                        <textarea rows="5" name="alamat" class="span6"></textarea>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Telepon</label>
                      <div class="controls">
                        <input type="text" class="span6" name="telepon" value="" placeholder="Masukan Nomer Telepon">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Level User</label>
                      <div class="controls">
                        <select name="level_user" class="span6">
                          <option></option>
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

