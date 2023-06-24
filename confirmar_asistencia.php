<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Mis XV Años</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <!-- cuenta regresiva estilos-->
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600,700,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/estilos_counter.css">
      <style type="text/css">
         .entry_folio_local{
             position: relative;
             top: -420px;
             margin-left: 900px;
             width: 160px;
             box-shadow: 10px 12px 6px -6px #777;
         }
         .submit_folio_local{
             position: relative;
             top: -400px;
             margin-left: 900px;
         }
         @media (max-width: 414px) {
  .simply-section {
    width: 60px;
   }
  /*banner mobile*/
  
   .entry_folio_local{
    position: relative;
    top: -380px;
    margin-left: 60px;
    width: 160px;
    box-shadow: 10px 12px 6px -6px #777;

   }
   .submit_folio_local{
    position: relative;
    top: -350px;
    margin-left: 60px;

   }
   /*banner mobile*/
}
      </style>
      <!-- cuenta regresiva -->


      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->

      <!-- banner jas-->
      
      <section class="banner_main">
         <?php include('menu.php');?>
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-md-2 offset-md-1">                               
                                 <div class="div-count" id="cuenta"></div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!-- End Banner jas-->

     
      
     <!-- form buscar folio -->
      <div id="gallery"  class="gallery">
         <div class="container">
            <div class="row galeriff">
            <div class="row">
               <div class="col-md-6 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/01.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/confirmacion.jpg" alt="#"/></figure>
                  </div>
               </div>
              
               </div>
              
            </div>
         </div>
      </div>
      <!-- end form buscar folio -->

     
      <form action="buscaFolio/listado.php" method="post">
                     <input class="form-control entry_folio_local" placeholder="Ej. LB15133" id="idFolio" name="idFolio" type="text" name="folio">
                     <button type="submit" class="btn btn-lg btn-danger submit_folio_local">Buscar</button>
      </form>  

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>


      <!-- cuenta regresiva -->
      <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
      <script src="js/simplyCountdown.min.js"></script>
      <script src="js/countdown.js"></script>
      <!-- cuenta regresiva -->
   </body>
</html>