
<h1 align="center">Login berhasil !</h1> 
    <h2 align="center">Selamat Datang, <?php echo $this->session->userdata("nama"); ?></h2>
<p align="center"><a href="<?php echo base_url('login/logout'); ?>">Keluar</a><br><?php echo anchor('admin/export','Unduh dalam bentuk excel'); ?> <br><a href="<?php echo site_url('chart') ?>">Lihat statistika</a></p>

<html>
<head>
    <title>Homepage</title>
</head>

<body>


    <table width='80%' border=1>

    <tr>
        <th>Timestamp</th> <th>No</th> <th>Nama</th> <th>No HP</th> <th>Waktu</th> <th>Jumlah Orang</th> <th>Orderan</th> <th>Event</th> <th>Keterangan</th>
    </tr>
    <?php
        foreach($crud_db as $c){
        ?>
        <tr>
         <td><?php echo $c->timestamp ?></td>
          <td><?php echo $c->id ?></td>
          <td><?php echo $c->name ?></td>
          <td><?php echo $c->phone ?></td>
          <td><?php echo $c->time ?></td>
          <td><?php echo $c->number ?></td>
          <td><?php echo $c->orderan ?></td>
          <td><?php echo $c->event ?></td>
          <td><?php echo $c->message ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
