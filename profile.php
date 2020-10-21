<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'class_1';

$conn = new mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error)
{
    echo "Connection Failed".$conn->connect_error."<br>";
}
else
{
    echo "Connection Successful<br>";
}

$sql ="SELECT * FROM  User_Profile";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['UserName'];
$work = $row['Work'];
$about = $row['About'];




?>


<!------ Include the above in your HEAD tag ---------->

<!---************* arrangement by john niro yumang b4.0 alpha project graduation ******************* -->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!------------start head  scripts and link src------------>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">	
        <title>profile</title>
	
	
		<script src="js/jq.js"></script>
		<!---- for moving objects make this first always after boootstrap.css ----->
	
		<link rel="stylesheet" href="css/bootstrap.css">
		<!---- Bootstrap.min link local project skeleton ----->
	
		<link rel="stylesheet" href="css/w3.css">
		<!--- This is the local w3css extended --->
		
		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/style.css">
		<!---- my own link local for customizing ----->
	
		<script src="js/bootstrap.min.js"></script>
		<!---- Bootstrap js link local for well and modal + panels ----->
		
		<link rel="icon" href="images/a.png" type="images/water.png" />
		<!---- Icon link local ----->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!-------    font awesome online plug --------------->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 

	</head>
	<!-------------end head scripts and link src ------------->

	
		 

 
 
	
	<!------------start content ------------>
	<body>
		<div class="wrapper">
			<div class="container" id="top-container-fluid-nav">
                <div class="text-dark bg-light">
                    <a class="btn btn-primary" href="editprofile.php">Edit profile</a>
                </div>
			</div> 
			
					
			<div class="container-fluid" id="body-container-fluid">
				<div class="container">
					<!---- for body container ---->
					<div class="row">
						 <!-------mother container middle class------------------->
						<div class="col-lg-12">                        
                        <div class="card" style="width:100%">
							<img class="card-img-top" src="download.png" alt="Profile Picture"  style="width:100%">
							<div class="card-body">
							  <h4 class="card-title"><?= $name ?></h4>
							  	<ul class="list-inline" id="courses">
									<li class="list-inline-item">
										<i class="fa fa-folder-open-o"></i><?= $work ?>
									</li>
									
								</ul>
								 <p class="card-text">
                                     <?= $about?>
                                 </p>

								<div class="address">								
								<ul class="w3-ul w3-small">
									<li> <i class="fa fa-calendar-o" aria-hidden="true"></i> <?= $address ?> </li>
									<li><i class="fa fa-calendar-o" aria-hidden="true"></i><?= $university ?></li>
									<li><i class="fa fa-calendar-o" aria-hidden="true"></i><?= $status ?> </li>
									<li><i class="fa fa-calendar-o" aria-hidden="true"></i><?= $birthday ?></li>
									</ul>
								</address>
								
							 <p>
                                 <button class="w3-button w3-block w3-indigo"   data-toggle="tooltip" data-placement="top" title="Send Message"> 
                                     <i class="fa fa-comment-o fa-lg">
                                         Send message
                                     </i>
                                </button>
                            </p>
                            </div>
						</div>
  
						</div>
						
						
						
						
					 
						
				 
						
						
						
						
						
					</div>
				</div>
			</div>
				
						
 
			<div class="container-fluid" id="footer-container-fluid">
				<div class="container">
                    footer
					<!---- for footer container ---->
 				</div>
			</div>
  			
				
			
        </div>
        

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 	</body>
	<!-------------end content-------------->

	<!------------sub footer code ------------>
	<footer>
	</footer>
	
	<!------------in-line script purpose ------------>
	<script>
	$('.carousel').carousel({
    interval: 2000
    })
	</script>
	
	<style>
	</style>
	<!------------in-line style purpose ------------>
	
 