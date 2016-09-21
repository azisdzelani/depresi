<script>
function loadXMLDoc($kategori) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "dokumen/xmldokumen/"+$kategori, true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table;
  table = "<tr><td width ='10%'><strong>Tanggal Upload</strong></td>";
  table += "<td width='10%'><strong>Editor</strong></td>";
  table += "<td width='20%'><strong>Judul</strong></td>";
  table += "<td width='10%'><strong>Kategori</strong></td>";
  table += "<td width='25%'><strong>Keterangan</strong></td>";
  table += "<td width='25%'><strong>Download</strong></td></tr>";
  var x = xmlDoc.getElementsByTagName("dokumen");
  for (i = 0; i <x.length; i++) { 
    var url = x[i].getElementsByTagName("url")[0].childNodes[0].nodeValue;
    table += "<tr><td>" +
    x[i].getElementsByTagName("tanggal")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("nama")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("judul")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("kategori")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("keterangan")[0].childNodes[0].nodeValue +
    "</td><td>"+
     "<a href='<?= base_url()?>dokumen/download/"+url+"'>Download File</a>" +
    "</td></tr>";
  }
  document.getElementById("data_table").innerHTML = table;
}


</script>

<div class="main">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-user"></i><h3> Digital Documents</h3>
            </div>

            <div class="widget-content">
              <div class="controls pull-right">
                <div class="btn-group">
                  <input type="text" class="form-control" autocomplete="off" id="search" name="search" placeholder="Cari Document ... ">
                </div>
              </div>

              <div class="controls pull-left">
                <div class="btn-group">
                  <a class="btn btn-default" href="#">Cari Kategori</a>
                  <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                  <ul class="dropdown-menu" id="btn-action-user">
                    <?php foreach($kategori as $result): ?>
                    <li><a href="<?=$result->nama_kategori  ?>" class="kategori"><i class="icon-trash" ></i> <?=$result->nama_kategori ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>  <!-- /controls -->  



              <table id="tbl-user" class="table table-striped table-bordered">
                <tbody id="data_table">
                  <tr>
                    <td width="10%"><strong>Tanggal Upload</strong></td>
                    <td width="10%"><strong>Editor</strong></td>
                    <td width="20%"><strong>Judul</strong></td>
                    <td width="10%"><strong>Kategori</strong></td>
                    <td width="25"><strong>Keterangan</strong></td>
                    <td width="25"><strong>Download</strong></td>
                  </tr>

                  <?php 
                  foreach ($dokumen as $result) { ?>
                   <tr>
                    <td width="10%"><?=$result->tanggal?></td>
                    <td width="10%"><?=$result->nama_lengkap?></td>
                    <td width="20%"><?=$result->judul?></td>
                    <td width="10%"><?=$result->nama_kategori?></td>
                    <td width="25"><?=$result->keterangan?></td>
                    <td width="25"><a href="<?=base_url()?>dokumen/download/<?=$result->file?>">Download File</a></td>
                  </tr> 
                   <?php } ?>                      
                </tbody>
              </table>

              <div class="controls pull-right">
                <ul id="pagination-user" class="pagination"></ul>          
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


