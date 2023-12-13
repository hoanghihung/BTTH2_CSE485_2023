<?php 
include_once 'config/Database.php';
include_once 'class/Articles.php';
$database = new Database();
$db = $database->getConnection();

$article = new Articles($db);

$article->id = 0;

$result = $article->getArticles();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<title>Demo Build Content Management System with PHP & MySQL</title>
<link href="css/style.css" rel="stylesheet" id="bootstrap-css">

</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
	<div class="container" style="min-height:500px;">
<div class="container">	
		<div id="blog" class="row">
			<div class="header">
			<a href="#default" class="logo">My DEMO CMS</a>
			<div class="header-right">
				<a href="index.php">Home</a>
				<a href="#contact">Contact</a>
				<a href="#about">About</a>
			</div>
		</div>	
		<?php
		while ($post = $result->fetch_assoc()) {
			$date = date_create($post['created']);					
			$message = str_replace("\n\r", "<br><br>", $post['message']);
			$message = $article->formatMessage($message, 100);
			?>
			<div class="col-md-10 blogShort">
			<h3><a href="view.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>		
			<em><strong>Published on</strong>: <?php echo date_format($date, "d F Y");	?></em>
			<em><strong>Category:</strong> <a href="#" target="_blank"><?php echo $post['category']; ?></a></em>
			<br><br>
			<article>		
			<p><?php echo $message; ?> 	</p>
			</article>
			<a class="btn btn-blog pull-right" href="view.php?id=<?php echo $post['id']; ?>">READ MORE</a> 
			</div>
		<?php } ?>   	
	</div>
</div>
<div class="insert-post-ads1" style="margin-top:20px;">
</div>
</div>
</body>
</html>