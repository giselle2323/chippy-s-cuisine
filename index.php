<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Chippy's Cuisine</title>

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  

  <!-- Bootstrap core CSS -->
  <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
  



</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-custom fixed-top js-scroll-trigger" id="site-navbar">
   <div class="container-fluid">
    <a class="navbar-brand" id="cuisine" href="#home">CHIPPY'S CUISINE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link js-scroll-trigger" href="#home">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#menu">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#aboutus">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#chefs">CHEFS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-info btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal">ADMIN</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">SIGN IN HERE ADMIN</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="d-flex jusify-content-center align-items-center container contact">
         <form class="needs-validation" novalidate method="POST" action="admin.php" id="myform">
           <div class="form-row">
            <div class="form-group col-md-12 mb-3">
              <label for="Username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
              <div class="invalid-feedback">
                please input your Username
              </div>
            </div>

            <div class="form-group col-md-12 mb-3">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback">
                please input your password
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-success" name="submit" id="submit">submit</button>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>







<section id="home">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/straw.jpg')">
        <div class="carousel-caption d-none d-md-block">
         <h2 id="spicy">Spicy <span><h2 id="and">&</h2></span><span><h2 id="tasty"> Tasty</h2></span></h2>
         <p>Taste our meals and be filled.</p>
         <a class="btn btn-danger btn-lg" href="#menu">SEE OUR MENU</a>
       </div>
     </div>
     <!-- Slide Two - Set the background image for this slide in the line below -->
     <div class="carousel-item" style="background-image: url('images/cocktail.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h2 id="spicy">Spicy <span><h2 id="and">&</h2></span><span><h2 id="tasty"> Tasty</h2></span></h2>
        <p>Taste our meals and be filled.</p>
        <a class="btn btn-danger btn-lg" href="#menu">SEE OUR MENU</a>
      </div>
    </div>
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('images/background1.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h2 id="spicy">Spicy <span><h2 id="and">&</h2></span><span><h2 id="tasty"> Tasty</h2></span></h2>
        <p>Taste our meals and be filled.</p>
        <a class="btn btn-danger btn-lg" href="#menu">SEE OUR MENU</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>



<section id="menu" class="center px-5 py-5 row">
  <h1 class="text-center my-4 mx-auto w-50" style="width: 50%;">MENU</h1>
  <div class="col-sm-12" style="flex-direction: row; display: flex; flex-wrap: wrap;">
    <div class="col-md-3">

      <div class="card w-80 h-100 mb-3 text-center bg-dark">
        <img class="card-img-top" src="images/hamburger.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title"> Hamburger</h5>
          <p class="card-text"> A Pure Yam Flour dish accompanied with vegetable soup and assorted meat served to your delight .</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card w-80 h-100 text-center bg-dark">
        <img class="card-img-top" src="images/pounded.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title">Pounded Yam & Egusi Soup</h5>
          <p class="card-text"> A local and nutritious food spiced to your taste.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card w-80 h-100 text-center bg-dark">
        <img class="card-img-top" src="images/barbecue.jpg" alt="Card image cap"height="175">
        <div class="card-body text-white">          <h5 class="card-title">Fish Barbecue</h5>
          <p class="card-text">Grilled Fish spiced to your taste.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card w-80 h-100 text-center bg-dark">
        <img class="card-img-top" src="images/sushi.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title">Salmon food</h5>
          <p class="card-text">A nutritional seafood spiced with vegetable and fruit .</p>
        </div>
      </div>
    </div>
    <a href="menu.html" class="btn btn-danger btn-md text-center my-5 mx-auto " style="margin-right: auto; margin-left: auto;" "role="button">VIEW MORE </a>

  </div>

</section>
<section id="aboutus">
  <div class=" aboutus text-center" style="
  position: absolute;top: 0;right: 0;
  left: 0;
  bottom: 0;
  margin: auto;
  height: 50%;
  width: 80%;
  ">

  <h2 class="text-center text-white">ABOUT US</h2>
  <p class="text-center text-white">Chippy's Cuisine was founded by Yakubu Aminat Jumoke. It was a restaurant that started remotely 
    in mayfair,Ile-ife.It was majorly a remote kitchen before and we brought our presence online inorder to reduce the waiting time 
  for meals and serve our customers better. We have capable and hard working chefs who put a lot of efforts into making delicious meals for the customers. </p>


</div>
</section>
<section id="chefs" class="py-5">
  <h1 class="text-center justify mb-3 text-white mx-auto">CHEFS </h1>
  <div class="row">
    <div class="col-md-3">

      <div class="card w-80 h-100 mb-3 text-center bg-dark">
        <img class="card-img-top" src="images/annie.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title">Annie Stone</h5>
          <p class="card-text">Chief Chef.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card w-80 h-100 text-center bg-dark">
        <img class="card-img-top" src="images/benny.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title">Andrew Brown</h5>
          <p class="card-text">Senior Chef</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card w-80 h-100 text-center bg-dark">
        <img class="card-img-top" src="images/petrus.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title">Hillary West</h5>
          <p class="card-text">Senior Chef.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card w-80 h-100 text-center bg-dark">
        <img class="card-img-top" src="images/hillary.jpg" alt="Card image cap" height="175">
        <div class="card-body text-white">
          <h5 class="card-title">Stacey Adebayo</h5>
          <p class="card-text">Senior Chef.</p>
        </div>
      </div>
    </div>
  </div>

</section>


<section id="contact" class="text-center py-5" style="
display: flex;
flex-direction: column;
align-items: center;
">

<h1 class="text-center text-white justify mb-3">CONTACT US </h1>
<div class="row">
  <div class="d-flex center align-items-center container">
   <form class="needs-validation text-white text-center" novalidate action="contact.php" method="POST" >
     <div class="form-row">
      <div class="form-group col-md-12 mb-3">
        <label for="fullname">Fullname</label>
        <input type="fullName" class="form-control" name="fullname" id="fullname" placeholder="Fullname" required>
        <div class="invalid-feedback">
          please input your Fullname
        </div>
      </div>

      <div class="form-group col-md-12 mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" 
        name="email" required>
        <div class="invalid-feedback">
          please input your email
        </div>
      </div>

      <div class="form-group col-md-12 mb-3">
        <label for="message">Message</label>
        <input type="textarea" class="form-control" id="message" placeholder="message" name="message" required>
        <div class="invalid-feedback">
          please input your message
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success text-center" name="submit" id="submit">submit</button>
  </form>
</div>
</div>

</section>
<div class="container-fluid bg-dark text-center py-3" id="social">
  <ul>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://www.linkedin.com/feed/?trk="><i class="fa fa-linkedin"></i></a></li>
    <li><a  href="https://twitter.com/yakubu_jumoke"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/jhumeey/?hl=en"><i class="fa fa-instagram"></i></a></li>
  </ul>
  <footer class="text-center ml-auto text-white">
    <p>All Rights Reserved. Chippy's Cuisine 2018.</p>
  </footer>
</div>
</body>

<script>
  $(document).ready(function() {
    $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
  });

  $(window).resize(function() {
    $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
  });
</script>

<script src="js/formvalidation.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>
</html>