<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mamma's Kitchen (Admin)</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/adminku/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="asset/adminku/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="asset/adminku/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="asset/adminku/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/adminku/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/adminku/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Mamma's Kitchen (Admin)</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

   <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Reservasi Meja</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>newadminmenu"><i class="fa fa-table fa-fw"></i> Katalog Menu</a>
                        </li>
                        

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reservasi Meja</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel seluruh reservasi meja 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>No HP</th>
                                        <th>Waktu</th>
                                        <th>Jumlah Orang</th>
                                        <th>Orderan</th>
                                        <th>Event</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach($crud_db as $c){
                                    ?>
                                    <tr class="odd gradeX">
                                     <td><?php echo $c->timestamp ?></td>
                                      <td><?php echo $c->id ?></td>
                                      <td><?php echo $c->name ?></td>
                                      <td><?php echo $c->phone ?></td>
                                      <td><?php echo $c->time ?></td>
                                      <td><?php echo $c->number ?></td>
                                      <td><?php echo $c->orderan ?></td>
                                      <td><?php echo $c->event ?></td>
                                      <td><?php echo $c->message ?></td>
                                      <td><?php echo $c->status ?></td>
                                      <td>
                                            <?php echo anchor('admin/edit/'.$c->id,'<button style="background-color:#2200ff;color:white;width:68px;height:25px">Ubah</button>'); ?>
                                            <br>
                                            <br>
                                            <?php echo anchor('admin/selesai/'.$c->id,'<button style="background-color:#06a025;color:white;width:68px;height:25px">Selesai</button>'); ?>
                                            <br>
                                            <br>
                                                              <?php echo anchor('admin/hapus/'.$c->id,'<button style="background-color:red;color:white;width:68px;height:25px">Tolak</button>'); ?>
                                      </td>
                                    </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="asset/adminku/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/adminku/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/adminku/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="asset/adminku/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="asset/adminku/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="asset/adminku/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset/adminku/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>