
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link type="text/css" href="resources/css/w3.css" href="stylesheet">
    <link type="text/css" href="assets/css/mySTYLE.css" rel="stylesheet">
    <link type="text/css" href="assets/css/style.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BH BOOKING AND RESERVATION</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#search">Search</a>
            </li>

           
            <!-- <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li> -->

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Boarding House Booking and Reservation!</div>
          <div class="intro-heading text-uppercase">It's Nice To BE Back<br></div>
        </div>
      </div>
    </header>

     <!-- Search -->
    <section id="search">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Search</h2>
            <h3 class="section-subheading text-muted">Search location or boarding house.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form  class="center" novalidate>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" id="keywords" name="keywords" type="text" placeholder="Search..." style="height: 50px; margin-top: -34px;">
                      <b><i class="fa fa-search float-right  mr-3 " style="margin-top: -34px;font-size:20px; color:gray;"></i></b>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
            </form><br>
          </div>
        </div>        
      </div>
  
                <!-- BH DISPLAY SECTION -->
                <div class="table-responsive">
                    <?php 
                            include_once 'config/dbcon.php';

                            $sql = mysqli_query($conn,"SELECT * FROM boarding_house  ");
                            if($sql->num_rows > 0){
                    ?>
                        <ul id="mylist" class="list-group-horizontal ">
                            <table>
                                <tbody>
                                    <?php while($row = $sql->fetch_row()): ?>
                                      <tr id="count">
                                          <li id="card" class="list-group-item  mr-4 mb-4 ">
                                              <a href="reservation.php?reserved_id=<?=$row['0'];?>" class="w3-hover-opacity" style="color:black;text-decoration:none">
                                                  <div style="width: 20rem; font-size:18px">
                                                      <img style="object-fit: cover;" class="card-img-top" src="models/upload_bh/<?=$row['4'];?>" alt="Card image cap" height="250px" width="250px">
                                                      <hr style="border: 2px solid #0a0a0a;">
                                                      <span class=""><b> <?=$row['1'];?> Boarding House </b></span>
                                                      <span class="float-right"><i class="fa fa-star"></i> 5.0 </span><br>
                                                      <span class="text-secondary">Beach and mountain views</span><br>
                                                      <span class=""><img src="resources/images/peso.png" height="18px"></span>
                                                      <span class="" style="margin-top:15px"> 1500 </span>
                                                      
                                                  </div>
                                              </a>
                                          </li>
                                      </tr>
                                    <?php endwhile;?>    
                                    <div id="result"></div>
                                </tbody>
                            </table>
                        </ul>
                    <?php
                            }
                    ?>
                </div>
                <!-- END SECTION -->








      <br><br><br><br><br><br>
    </section>    

    <!-- Footer -->
    <footer style="background-color: #ccc;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright"></span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <style>
        .list-group-horizontal .list-group-item {
            display: inline-block;
        }
        #keywords {
          border-radius: 50px;
          padding: 20px;
          height: 150px;
        }
        #card {
          border-radius: 15px 50px;
          padding: 20px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        #card:hover {
          opacity: 0.5;
        }
    </style>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/rent.js"></script>
    <script>
      $(document).ready(function(){
          
          $("#keywords").keyup(function() {

              var filter = $(this).val(), count = 0;

              $('#mylist li').each(function() {

                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                  $(this).hide();
                } else {
                  $(this).show(); 
                  count++;
                }
              });
          });

          $("#keywords").focus(function() {
              $(".fa-search").css("color", "#0082D4");
          }).blur(function() {
              $(".fa-search").css("color", "gray");
          });

      });
    </script>
      

  </body>
</html>