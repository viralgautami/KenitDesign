<?php
/*	require_once("config/db.php");
	$query = "select * from contact_us";
	$result = mysqli_query($con,$query);*/

	require_once("config/db.php");
	require_once("config/functions.php");

	$result = display_data();
	
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>KENIT DESIGN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">


    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="xp-breadcrumbbar text-center">
        <h4 class="page-title">Dashboard</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">KENIT DESIGN</a></li>
            <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
        </ol>
    </div>
	
    </div>
    </div>
    <!------top-navbar-end----------->


    <!------main-content-start----------->

    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            
							 <label for="selectAll"></label>
							 <th>Sr_No</th>
							 <th>F_Name</th>
							 <th>L_Name</th>
							 <th>Email</th>
							 <th>Phone</th>
							 <th>Message</th>
							 <th>Delete</th>
							 </tr>
						  </thead>
						  
						  <tbody>
						      <tr>
							 <?php

								while($row=mysqli_fetch_assoc($result))
								{
									?>
							 <th><?php echo $row['sr_no']; ?></th>
							 <th><?php echo $row['f_name']; ?></th>
							 <th><?php echo $row['l_name']; ?></th>
							 <th><?php echo $row['email']; ?></th>
							 <th><?php echo $row['phone']; ?></th>
							 <th><?php echo $row['message']; ?></th>


							
							 <th>
							    
							   <a href="delete.php?sr_no=<?php echo $row['sr_no']; ?>">
							   <i class="btn btn-danger" data-toggle="tooltip" title="Delete">Delete</i>
							   </a>
							 </th>
							 </tr>
							 <?php
								}
								?>
							
							 
						  </tbody>
						  
					      
					   </table>
					   
					   <div class="clearfix">
					     <ul class="pagination">
						    <li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item active"><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item "><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item "><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						 </ul>
					   </div>
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					   <?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    echo '<div class="text-center">';
    echo '<a href="http://localhost/KK/admin/login/logout.php" class="btn btn-primary">Logout</a>';
    echo '</div>';
}
?><br/>

					</div>
					
		 
		 <!----footer-design------------->
		 
		 <footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2023 KENIT DESIGN . All Rights Reserved.</p>
			   </div>
			</div>
		 </footer>
		 
		 
		 
		 
	  </div>
   
</div>



<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
  



  </body>
  
  </html>