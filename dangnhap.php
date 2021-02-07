<!DOCTYPE html>
<html lang="en"><head>
	<title> Example </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- link f5 -->
 	<link rel="stylesheet" type="text/css" href="1.css">
 	<style>
	 		form {
			    padding-top: 100px;
			    padding-left: 300px;
			}

			.form-group {
			    width: 300px;
			}
			.dangky {
			    background: url(1.png);
			    background-size: cover;
			    width: 900px;
			    height: 500px;
			    color: red;
			    margin: auto;
			}
			h2{
			 	padding-top: 50px;
			    padding-left: 295px;
			    color: lightblue;
			    font-weight: 900;
			 }
 	</style>
</head>
<body >
     <div class="dangky">
     	<h2>Welcome to Page Login</h2>
     	<form method="POST">
     	  <div class="form-group">
     	    <label for="exampleInputEmail1">Email address</label>
     	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     	  </div>
     	  <div class="form-group">
     	    <label for="exampleInputPassword1">Password</label>
     	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
     	  </div>
     	  <button type="submit" class="btn btn-primary|secondary|success|danger|warning|info|light|dark btn-sm|btn-lg" name="ok">Login</button>
     	</form>
     </div>
     <?php
     if(isset($_POST['ok'])){
     echo "hello";
 }
     ?>
</body>
</html>