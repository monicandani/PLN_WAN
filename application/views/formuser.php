<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PLN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="width: auto; font-family: Trebuchet MS" ">
    <header>
        <div style="width: 900px" class="container">
            <div  class="row">
                <div  class="col-md-12">
                    <strong ></strong>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    
    <nav class="navbar navbar-inverse set-radius-zero" style="background-color: #086a87 ">

  <center><img style="height: 120px;with: 120px;width: 120px" src="<?php echo base_url();?>/assets/img/pln.jpg"width="1350px" class="image1 mt-2"></center>
</nav>
</div>
</div>
</div>

            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <!-- MENU SECTION END-->    
    <!-- LOGO HEADER END-->
   <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url();?>c_main/home">Beranda</a></li>
                            <li><a href="<?php echo base_url();?>c_main/v1">Masukkan Data</a></li>
                            <li><a class="menu-top-active" href="<?php echo base_url();?>c_main/v2">Data</a></li>
                            <li><a href="<?php echo base_url();?>c_main/search">Pencarian</a></li>
                            <li><a href="<?php echo base_url();?>c_main/register">Daftar Akun</a></li>
                            <li><a href="<?php echo base_url();?>c_main/index">Keluar</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
   
    <!-- MENU SECTION END-->

    <!-- HEADER -->

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Akun </h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->

                  <a href="<?php echo base_url();?>c_main/register" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign"></span> <b>TAMBAH</b> </a>

                  <br>
                  <br>
                    
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                             <th>Password</th>
                                              <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Saulia </td>
                                            <td>1234</td>
                                            <td>User</td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_form/form_edit_user">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td> Karina </td>
                                            <td>asdfghj </td>
                                            <td>Admin </td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Monica </td>
                                            <td>yuijh </td>
                                            <td>User </td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tiwi </td>
                                            <td>yuyyu8 </td>
                                            <td>User </td>
                                            <td><center>
                <a class="btn btn-default" href="<?php echo base_url();?>c_main/edit">Edit</a>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Hapus</button>
            </td>
                                        </tr>
                                    
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Keterangan Jenis Gangguan</h4>
          </div>
          <div class="modal-body">
            <p align="center">CABLE : PUTUS KABEL FO tipe F8</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div>

      </div>
    </div> <!-- MODAL -->

        <!-- FOOTER -->
       <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 | By : <a href="https://www.instagram.com/default_unj/" target="_blank">DEFAULT</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
</body>
</html>