<?php
session_start();
 if(!isset($_SESSION['uname']))
 	header("Location: http://localhost/project007/facultyLogin.php"); 

 	include 'connection.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$result=$con->query("select * from test where id=$id");
	$r=$result->fetch_assoc();
}
	 
 ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="http://localhost/project008/css/homepage.css">

</head>
<body>
	<div id="wrapper"  >

	<div id="mySidenav" class="sidenav">
	  <a href="teacherHome.php">Home</a>
	  <a href="addStudent.php">Students</a>
	  <a href="createGroup.php">Manage Groups</a>
	  
		</div>
	



	<div class="main" >
			<nav class="navbar navbar-default navbar-fixed-top " id="navbar" >
				<div class="container-fluid">
					 <ul class="nav navbar-nav">
					      <li >
								<button class="btn navbar-btn" id="tgbtn"><span class="fa fa-bars" aria-hidden="true"></span>  MENU</button>
						  </li>
			    	 </ul>
					<div class="navbar-header">
						<a class="navbar-brand" href="">Online Test</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="menu1" data-toggle="dropdown"><span class="fa fa-user" ></span>
									<span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
									<li role="presentation"><a role="menuitem" href="#">Profile</a></li>
									<li role="presentation"><a role="menuitem" href="#">Settings</a></li>
									<li role="presentation"><a role="menuitem" href="logout.php">Logout</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" href="#">About Us</a></li>
								</ul>
										
							</li>
					</ul>

				</div>
			</nav>
		<div id="content" class="container-fluid content">
		<h1>Edit Test</h1>
					<form method="post" action="editTestX.php">
						<div class="form-group col-sm-6" >
						    <label >Test Title</label>
						    <input type="text" class="form-control" id="title" placeholder="" name="title" value=<?php echo "\"".$r['title']."\"" ?>>
						</div>
						<div class="form-group col-sm-6 ">
						    <label >Allow Practice</label>
						    <input type="checkbox" class="form-control" id="allowPractice" placeholder="" name="allowPractice" <?php if($r['allowPractice']==1){ echo "checked";} ?>>
						</div>
						<div class="form-group col-sm-6 ">
						    <label >Dispaly Result</label>
						    <input type="checkbox" class="form-control" id="allowResult" placeholder="" name="allowResult" <?php if($r['allowResult']==1){ echo "checked";} ?>>
						</div>
						<div class="form-group col-sm-6">
						    <label >Time Per Test</label>
						    <input type="time" class="form-control" id="timePerTest" placeholder="" name="timePerTest" step="1" value=<?php echo "\"".$r['timePerTest']."\"" ?>>
						</div>
						<div class="form-group col-sm-6" >
						    <label >Allowed attempts</label>
						    <input type="text" class="form-control" id="allowedAttempts" placeholder="" name="allowedAttempts" value=<?php echo "\"".$r['allowedAttempts']."\"" ?>>
						</div>
						<br>
						<input type="hidden" class="form-control"  name="id" value=<?php echo "\"".$id."\"" ?>>
						<div class="form-group col-sm-4">
						    <input name="submit" type="submit" class="form-control btn btn-primary" value="Edit">
						</div>

					</form>
</div>

<script src="http://localhost/project008/javascript/homepage.js">
</script>
</body>
</html>