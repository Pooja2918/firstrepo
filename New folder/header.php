<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RP International</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/sidenav.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script  src="js/script.js"></script>
   <style type="text/css">
     .menuOverlay {
    width: 100%;
    height: 100vh;
    background: rgb(0 0 0 / 75%);
    z-index: 3;
    position: absolute;
    top: 0;
    left: 0;
    display: none;
}


   </style>
  </head>
  <body>


<!--------------------------------Desktop header--------------------------------->
<div class= "d-none d-lg-block d-sm-block d-md-block">   
 <section class="navigation" id="myHeader" >
  <div class="nav-container">
    <div class="brand">
       <i class="fa fa-bars" aria-hidden="true"></i>
      <a href="#!"><strong>RP</strong> INTERNATIONAL</a>
    </div>
    <nav>
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </div>
</section>
</div>
<!--------------------------------Desktop end header--------------------------------->



<!--------------------------------mobile header--------------------------------->
<div class="d-lg-none d-sm-none d-md-none">
   <div class="menuOverlay" style="display: none;"></div>
   <nav class="navbar navbar-expand-md navbar-light bg-light">
       <a href="#"> <img src="#"  class="logoimg" alt="RP INTERNATIONAL" title="RP INTERNATIONAL"></a>
              
   <!-- Use any element to open the sidenav -->
         <span class="side_class" onclick="openNav()"><i class="fa fa-bars clobtn faa"></i></span>
    </nav>

          <div id="mySidenav" class="sidenav bg-light">
                <div class="sidenavinnerlogo"><a href="<?php echo MAINLINK; ?>"> <img src="#" class="logoimgg" alt="RP INTERNATIONAL" title="RP INTERNATIONAL"></a></div>
              <!--     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               -->     <div class="col-md-2 text-center">
                            <a href="#">HOME</a>
                        </div>
                           <div class="col-md-2 text-center">
                            <a href="#">ABOUT US</a>
                        </div>
                        <div class="col-md-2 text-center">
                            <a href="#">SERVICES</a>
                        </div>
                        <div class="col-md-2 text-center">
                            <a href="#">PRODUCTS</a>
                        </div>
                         <div class="col-md-2 text-center">
                            <a href="#">CONTACT</a>
                        </div>
                   </div>
      

</div>

<!--------------------------------mobile end header--------------------------------->