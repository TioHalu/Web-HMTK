<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom Sendiri-->
    <link rel="stylesheet" href="css/style-navbar.css">
    <link rel="stylesheet" href="css/style-homepage.css">
    <link rel="stylesheet" href="css/style-footer.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo-tk.ico">
    <title>HMTK | Landing Page</title>
  </head>
  <body>

    <!-- NAVBAR -->
      <?php include('header.php'); ?>
    <!-- END NAVBAR -->

    <!--MAIN HEADER -->
    <div class="welcome">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mb-5 mb-lg-0 text-left text-lg-start">
                        <h1>S1 TEKNIK KOMPUTER</h1>
                        <p class="lead fw-normal mb-5" align="justify">Selamat Datang di Website Program Studi S1 Teknik Komputer Telkom University</p>
                    </div>
                </div>
                <div class="col-lg-6">
                  <img src="images/People.png" class="img-fluid" width="500px" style="margin-top: -70px;">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3DA020" fill-opacity="1" d="M0,32L1440,160L1440,0L0,0Z"></path></svg>
    <!--END MAIN HEADER -->

    <!--INFORMASI-->
    <section class="page-section bg mb-0 info-section" id="informasi">
      <div class="container">
          <h1 class="page-section-heading text-center text-uppercase">INFORMASI</h1>
          <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-info-circle"></i></div>
              <div class="divider-custom-line" ></div>
          </div>
          <p class="lead fw-normal mb-5" align="center">Berikut merupakan kumpulan informasi terbaru mengenai HMTK</p>
      </div>
    </section>
    
    <!--CAROUSEL-->
    <div id="carouselExampleControls" class="carousel slide carousel-custom" data-ride="carousel">
      <h1>INFORMASI HMTK</h1>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/hmtk.png" alt="First slide">
        </div>
        
        <div class="carousel-item">
          <img class="d-block w-100" src="img/hmtk.png" alt="Second slide">
        </div>
        
        <div class="carousel-item">
          <img class="d-block w-100" src="img/hmtk.png" alt="Third slide">
        </div>
      </div>
      
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--END INFORMASI-->

    <!--GALERI-->
     <section class="page-section bg mb-0 galeri-section" id="galeri">
      <div class="container">
          <h1 class="page-section-heading text-center text-uppercase">GALERI HMTK</h1>
          <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-camera-retro"></i></div>
              <div class="divider-custom-line" ></div>
          </div>
          <p class="lead fw-normal mb-5" align="center">Kumpulan dokumentasi kegiatan HMTK</p>
      </div>
    </section>
  
    <!--CARD IMAGE-->
    <div class="container">
      <center>
        <div class="Card2" style="background-image: url(img/wisuda.png);">
          <div class="overlay">
          <a class="link" data-toggle="modal" data-target="#exampleModal1" href="">Open</a>
          </div>
        </div>
        
        <div class="Card2" style="background-image: url(img/gunung.png);">
          <div class="overlay">
            <a class="link" data-toggle="modal" data-target="#exampleModal2" href="">Open</a>
          </div>
        </div>

        <div class="Card2" style="background-image: url(img/basket.png);">
          <div class="overlay">
            <a class="link" href="">Open</a>
          </div>
        </div>

        <div class="Card2" style="background-image: url(img/kabinet.png);">
          <div class="overlay">
            <a class="link" href="">Open</a>
          </div>
        </div>

        <div class="Card2" style="background-image: url(img/juara.png);">
          <div class="overlay">
            <a class="link" href="">Open</a>
          </div>
        </div>

        <div class="Card2" style="background-image: url(img/penghargaan.png);">
          <div class="overlay">
           
            <a class="link" href="">Open</a>
          </div>
        </div>
      </center>
    </div>
    <center><br><br><a href="#" class="text-decoration-none btn-custom">Load More<i class="fas fa-chevron-right" style="margin-left: 5px;"></i></a></center>
    <!--Credit : https://codepen.io/SashaJet/pen/vXXJoW -->
    <!--END GALERI-->

    <!-- MODAL -->
    <div class="modal fade modal-custom" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Galeri HMTK</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
              <img src="img/wisuda.png" class="img-fluid">
              <p>Deskripsi Foto</p>
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-cst" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade modal-custom" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Galeri HMTK</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
              <img src="img/hmtk.png" class="img-fluid">
              <p>Deskripsi Foto Kedua</p>
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-cst" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- END MODAL -->

    <!--FOOTER-->
      <?php include('footer.php'); ?>
    <!--END FOOTER-->
  </body>
</html>