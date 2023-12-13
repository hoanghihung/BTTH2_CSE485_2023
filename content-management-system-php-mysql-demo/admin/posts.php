<?php
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Post.php';
include_once 'class/Category.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Post($db);
$category = new Category($db);

if(!$user->loggedIn()) {
<<<<<<< HEAD
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->	
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
	<div id="navbar" class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="index.html">Dashboard</a></li>		
	  </ul>
	  <?php if(!empty($_SESSION["userid"])) { ?>
	  <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="index.html">Welcome, <?php echo $_SESSION["name"]; ?></a></li>
		<li><a href="logout.php">Logout</a></li>          
	  </ul>
	  <?php } ?>
	</div>
  </div>
</nav>

=======
	header("location: index.php");
}
include('inc/header.php');
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/posts.js"></script>	
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>
>>>>>>> c78d20130564f169b68f7dfb4e6ca887a8c60441
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
			</div>
			<br>			
		</div>
	</div>
</header>
<br>
<section id="main">
	<div class="container">
		<div class="row">	
<<<<<<< HEAD
=======
			<?php include "left_menus.php"; ?>
>>>>>>> c78d20130564f169b68f7dfb4e6ca887a8c60441
			<div class="col-md-9">
				<div class="panel panel-default">
				  <div class="panel-heading">
					<h3 class="panel-title">Post Listing</h3>
				  </div>
				  <div class="panel-body">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<h3 class="panel-title"></h3>
							</div>
							<div class="col-md-2" align="right">
								<a href="compose_post.php" class="btn btn-default btn-xs">Add New</a>				
							</div>
						</div>
					</div>
					<table id="postsList" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Category</th>
								<th>User</th>
								<th>Status</th>	
								<th>Created</th>
								<th>Updated</th>															
								<th></th>
								<th></th>	
							</tr>
						</thead>
					</table>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<<<<<<< HEAD
<div class="insert-post-ads1" style="margin-top:20px;">
</div>
</div>
</body>
</html>
=======
<?php include('inc/footer.php');?>
>>>>>>> c78d20130564f169b68f7dfb4e6ca887a8c60441
