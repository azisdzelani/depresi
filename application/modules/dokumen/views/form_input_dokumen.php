<div class="main">
  <div class="main-inner">
    <div class="container">
      
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-book"></i><h3> <?=$title ?></h3>
            </div>

            <div class="widget-content">
            <?=form_open_multipart('dokumen/do_create', ['form-horizontal']); ?>
                <fieldset>
                  <div class="control-group">                     
                    <label class="control-label" for="firstname">Judul Dokumen</label>
                    <div class="controls">
                      <input type="text" class="span6" name="judul" value="<?=set_value('judul'); ?>" placeholder="Masukan Judul Dokumen">
                    </div> <!-- /controls -->       
                  </div> <!-- /control-group --> 

                  <div class="control-group">                     
                    <label class="control-label" for="jabatan">Kategori</label>
                    <div class="controls">
                      <select name="kategori" class="span6">
                        <option value="">Pilih Kategori</option>
                        <?php foreach($kategori as $result): ?>
                        <option value="<?=$result->id_kategori_dokumen ?>"><?=$result->nama_kategori  ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div> <!-- /controls -->       
                  </div> <!-- /control-group --> 

                   <div class="control-group">                     
                    <label class="control-label" for="lastname">Deskripsi Singkat</label>
                    <div class="controls">
                      <textarea rows="5" name="keterangan" class="span6"><?=set_value('keterangan'); ?></textarea>
                    </div> <!-- /controls -->       
                  </div> <!-- /control-group -->      

                  <div class="control-group">                     
                    <label class="control-label" for="firstname">Tanggal</label>
                    <div class="controls">
                      <input type="date" class="span6" name="tanggal" value="<?=set_value('tanggal'); ?>" placeholder="Masukan Tanggal">
                    </div> <!-- /controls -->       
                  </div> <!-- /control-group --> 

                   <div class="control-group">                     
                    <label class="control-label" for="firstname">File Dokumen</label>
                    <div class="controls">
                      <input type="file" class="span6" name="userfile">
                    </div> <!-- /controls -->       
                  </div> <!-- /control-group --> 
                    
                   <br />
                
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button> 
                    <button class="btn btn-primary">Cancel</button>
                  </div> <!-- /form-actions -->
                </fieldset>
              <?php form_close(); ?>
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

