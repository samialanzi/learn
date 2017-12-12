<?php
require "connection.php";
$id='';
$name="";
if (isset($_GET['id'])){
$id=$_GET['id'];

 $Sql=$PDO->prepare("SELECT * FROM department WHERE id=?");
          $Sql->execute(array($id));
          foreach ($Sql as $row) {
          	$name= $row['dep_name'];
          }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "head.php"; ?>
</head>
<body>
<header  >
	<div >
				<img src="log.png" style="width: 100%; height: 200px;">
			</div>
			<?php require "nav.php";?>
	<div>
		
	</div>
	<div class="col-md-3">
		<a href="index.php"> <i class="glyphicon glyphicon-home"></i> </a>
	</div>

	<div class="col-md-6" style="font-size: 30px; 

    font-family: 'Fjalla One', sans-serif;
     font-family: 'Abril Fatface', cursive;

    font-family: 'Oleo Script', cursive;

    font-family: 'Katibeh', cursive;

">
		<?php 
 echo $name;
         

		?>
	</div>

	<div class="col-md-3">
		
	</div>
</header>
<section class="col-md-12" style="margin-top: 15px">
	<!--<div class="col-md-2">
		33
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				test
			</div>
		</div>
	</div>-->
	<?php 

$Sql=$PDO->prepare("SELECT * FROM course WHERE id_dep=?");
          $Sql->execute(array($id));
          foreach ($Sql as $row) {
          	echo '
<div class="col-md-2">
		'.$row['course_name'].'
	</div>
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<a href='.$row['path'].'>'.$row['des'].'</a>
			</div>
		</div>
	</div>



          	';
          }

	?>
</section>
</body>
</html>