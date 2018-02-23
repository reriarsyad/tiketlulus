<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top" style="background-color: #bd2020;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="" style="color:white;"><span>Travel Ticket Nusantara</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="<?php echo base_url() ?>index.php" style="color:white; background-color :#9e2222;">Home</a>
            </li>
            <li>
              <a href="<?php echo base_url() ?>index.php/about" style="color:white;">About</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container"></div>
    </div>
    <div class="section section-danger">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Form Pendaftaran</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section" imgsrc="kelas11\PK5\healthcare-technology-8-04-2015.jpeg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>crud/daftar">
               <div class="form-group">
                <div class="col-sm-2">
                  <label for="username" class="control-label">Username</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                </div>
              </div>
               <div class="form-group">
                <div class="col-sm-2">
                  <label for="password" class="control-label">Password</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="firstname" class="control-label">firstname</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="firstname" placeholder="Masukan firstname">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="lastname" class="control-label">Lastname</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="lastname" placeholder="Masukan Lastname">
                </div>
              </div>
             <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputnama" class="control-label">Alamat</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="address" placeholder="Masukan Alamat">
                </div>
              </div>
               <div class="form-group">
                <div class="col-sm-2">
                  <label for="sel1" class="control-label">Jenis Kelamin</label>
                </div>
                <div class="col-sm-3">
                <div class="radio">
                <label>
                  <input type="radio" name="gender" id="gender-laki" value="l">
                  Laki Laki
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="gender" id="gender-perempuan" value="p">
                  Perempuan
                </label>
              </div>
              </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="phone" class="control-label">No Handphone</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone" placeholder="Masukan Nomer HP">
                </div>
              </div>

                <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" value="Simpan">Simpan</button>
            <button type="reset" class="btn btn-default" value="Batal">Batal</button>
               </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>