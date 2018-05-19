<html>
<head>
  <title>Ubah menu </title>
</head>

<body>
  <a href="<?php echo base_url();?>newadminmenu">Home</a>
  <br/><br/>

<?php foreach($konten as $m){ ?>
    <form action="<?php echo base_url()?>newadminmenu/update/<?php echo $m->id ?>" method="post">
      <table border="0">
        <tr>
        <input type="hidden" name="id" value="<?php echo $m->id ?>">  
        </tr>
        <tr>
          <td>Judul</td>
          <td><input type="text" name="judul" value=<?php echo $m->judul;?>></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td><input type="text" name="deskripsi" value=<?php echo $m->deskripsi;?>></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="harga" value=<?php echo $m->harga;?>></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td><input type="file" name="gambar" value=<?php echo $m->gambar;?>></td>
        </tr>

        <tr>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
  <?php } ?>
    </form>
  </body>
  </html>
