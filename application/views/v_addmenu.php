<html>
<head>
  <title>KiosCoding</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <style>
  .file {
    visibility: hidden;
    position: absolute;
  }
  </style>
</head>
<body>
  <!-- INI ADALAH HEADER -->
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.kioscoding.com">KiosCoding</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="https://www.kioscoding.com">Data Produk</a></li>
              <li class="active"><a href="<?php echo base_url('index.php/produk/input')?>">Input Produk</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://www.kioscoding.com/search/label/CODEIGNITER">Tutorial lainnya</a></li>
            </ul>
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
   <div class="container">
     <h3 align="center"><b>MASUKAN PRODUK BARU</b></h3>
 <div class="col-md-3">
 </div>
 <div class="jumbotron col-md-6">
   <!--<?=form_open_multipart('addmenu/proses_input')?>-->
  <?php echo form_open_multipart('addmenu/proses_input');?>
    <div class="form-group">
      <label for="judul">Judul :</label>
      <input type="text" name="judul" class="form-control" placeholder="Masukan Nama Produk" id="judul" required>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi :</label>
      <input type="text" name="deskripsi" class="form-control" placeholder="Masukan Harga Produk" id="deskripsi" required>
    </div>
    <div class="form-group">
      <label for="harga">Harga :</label>
      <input type="number" name="harga" class="form-control" placeholder="Masukan Stok Produk" id="harga" required>
    </div>
    <div class="form-group">
      <label for="gambar">Gambar :</label>
      <input type="file" name="gambar" class="file">
      <div class="input-group col-xs-12">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
        <input type="text" id="raw" name="gambar" class="form-control input-lg" disabled placeholder="Upload Gambar">
        <span class="input-group-btn">
          <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
        </span>
      </div><br>
    </div>
    <input id="imgName" type="text" name="nama_gambar" hidden>
        <button type="submit" onclick="setImgName()" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 <?php
    echo form_close();
    ?>
 </div>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript">
  function setImgName(){
    //alert($('#raw').val());
    $('#imgName').val($('#raw').val());
  }
 </script>



</div> <!-- /container -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>
</body>
</html>