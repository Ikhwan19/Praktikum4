<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href
    ="<?=base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" 
    href="<?=base_url()?>assets/css/style.css">

   <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
   <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>index.php/Dashboard"><i class="glyphicon glyphicon-home">Home</i></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                
                <li class="active"><a href="<?=base_url()?>index.php/Dashboard/kontak">Berita flora&fauna</a></li>
                  <li><a href="<?=base_url()?>index.php/Dashboard/ini">Berita Kesehatan</a></li>
                  <li class="dropdown">
                    <a href="<?=base_url()?>index.php/Dashboard/ada">Berita politik </span></a>
                <li>  <a href="<?=base_url()?>index.php/Dashboard/bisa">Berita olahraga </span></a></li>
                    </ul>
                  </li>
                </ul  >
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Cari</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Masuk</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="">Opsi</i> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Umpan balik</a></li>
                      <li><a href="#">Sesuaikan Halaman ini</a></li>
                      <li><a href="#">ubah bahasa</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Informasi</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          <div class="row">
            
              <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
             
            <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
             <h2 style="text-align: center;background: gold;">Terbaru</h2>  
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  
                
                  <div class="carousel-caption">
                    
                  </div>
                  <div class="item">
                      <img src="<?=base_url()?>assets/ber.jpg" alt="...">
                      <div class="carousel-caption">
                        
                      </div>
                    
                        </div>
                      
                </div>
                  <div class="item">
                  <img src="<?=base_url()?>assets/bat.jpg" alt="..." style=" display: block; margin: 0 auto; text-align: center; width:850px; height: 500px;">
                  <div class="carousel-caption">
                    
                  </div>
                
                    </div>
                    <div class="item">
                      <img src="<?=base_url()?>assets/kev.jpg" alt="..." style=" display: block; margin: 0 auto; text-align: center; width:850px; height: 500px;">
                      <div class="carousel-caption">
                        
                      </div>
                    
                        </div>
                        <div class="item">
                          <img src="<?=base_url()?>assets/jok.jpg" alt="..." style=" display: block; margin: 0 auto; text-align: center; width:850px; height: 500px;">
                          <div class="carousel-caption">
                            
                          </div>
                        
                            </div>
                          
                  </div>
        
                <div class="item">
        <div class="carousel-caption">
          <h2 style="color:gold;background-color: black;margin-left: 450px;margin-right: 450px;">Terbaru</h2>
          <p style="color:gold;background-color:black;margin-right:100px;margin-left: 100px">Berita terbaru, terkini, dan Terupdate  di dunia maya,mengabarkan 
            <br> berita- berita yang teraktual tajam dan terpercaya, yang kami rangkum dalam Seputar Indonesia.</p>
        </div>
      </div>
              </div>
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          
          </div></div>
          <div class="row"
     ><div class="col-md-3" style="height:770px; background-color: lightgray;">
    </div>
    
    <div class="col-md-6" style="background-color: white  ;height:770px;">

    

    <?php
$this->load->view($konten);

?>







</div>
    <div class="col-md-3" style="height:0px; background-color: lightgrey;height:770px;">


    </div>
    
    <div class="row">
            <div class="col-md-12" style="background:white;height:
        3
        00px" >
    <h4 style="text-align: center;"> <a style="color:black">Contact </a></h4>
    <h4 style="text-align: center;"> <a style="color:black">Privasi & cookie</a></h4>
    <h4 style="text-align: center;"> <a style="color:black"> Tentang iklan</a></h4>
        </div></div>
        
   
</div>
    
    
    

</body>
</html>