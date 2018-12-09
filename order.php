<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        die("You are not logged in!");
    }
    $username = $_SESSION['username'];
    echo "WELCOME " . $username;
   
?>
 
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
        <!-- Bootstrap core CSS -->
        <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="vendor/css/bootstrap-table.css" rel="stylesheet">
        <link type="text/css" href="css/font-awesome.css" rel="stylesheet">
       

        

    </head>
    <body id="adminpage">
           <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-custom fixed-top js-scroll-trigger" id="site-navbar">
   <div class="container-fluid">
    <a class="navbar-brand" id="cuisine" href="#">CHIPPY'S CUISINE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link js-scroll-trigger" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">CHEFS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">CONTACT</a>
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
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">SIGN IN HERE ADMIN</h4>
      </div>
      <div class="modal-body">
        <div class="d-flex jusify-content-center align-items-center container contact">
       <form class="needs-validation" novalidate method="POST" action="signin.php">
           <div class="form-row">
                <div class="form-group col-md-12 mb-3">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                        please input your Username
                    </div>
                </div>
                
                <div class="form-group col-md-12 mb-3">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                        please input your password
                    </div>
                </div>
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit" id="submit">submit</button>
        </form>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<section>

<div class="container text-success">
	<div class="col-md-12">
		<div class="page-header">
			<h1 class=" text-center">
				ALL  ORDERS
			</h1>
		</div>


		<div class="panel panel-success text-white">

						 
			<div class="panel-body text-white">
				<div class="row">
					<div class="col-md-12">
					 
						<table 	id="table" class="text-success">
			                	data-show-columns="true"
 				                data-height="460">
						</table>
					</div>
				</div>
			</div>				
		</div>

	</div>
</div>
</section>

       <!-- Bootstrap core JavaScript -->
       <script src="vendor/jquery/jquery.min.js"></script>
       <script src="vendor/js/bootstrap.min.js"></script>
       <script src="vendor/js/bootstrap-table.js"></script>
       <script type="text/javascript">
	
	 var $table = $('#table');
		     $table.bootstrapTable({
			      url: 'user.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
			      showFooter: true,
			      minimumCountColumns: 2,
			      columns: [{
			          field: 'num',
			          title: '#',
			          sortable: true,
			      },{
			          field: 'food',
			          title: 'Food',
			          sortable: true,
			      },{
			          field: 'fullName',
			          title: 'Fullname',
			          sortable: true,
			          
                  },
                  {
                    field: 'email',
                    title: 'Email',
                    sortable: true,
                    
                },
                {
                    field: 'address',
                    title: 'address',
                    sortable: true,
                    
                }, 
                {
                    field: 'tele',
                    title: 'Telephone',
                    sortable: true,
                    
                }, 
                {
                    field: 'plate',
                    title: 'plate',
                    sortable: true,
                    
                },
                {
                    field: 'created_date',
                    title: 'created_date',
                    sortable: true,
                    
                },
                {
                    field: 'resolve',
                    title: 'resolve',
                    sortable: true,
                    
                },
             ],
 
               });
        

</script>



       </html>
       