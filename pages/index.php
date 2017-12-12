<?php 

use pages\connect;
//$con=new Connection();

require 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php require "head.php"; ?>
</head>
<body>
<div >
	<header>
		<!--layout -->
		<div>
			<!--full layout -->
			<div >
				<img src="log.png" style="width: 100%; height: 200px;">
			</div>


		</div>

		<?php require "nav.php";?>
	</header>

	<section>
		
		<div class="container ">
			<div class="col-md-10 col-md-offset-1">
		<div class="row" >
				
             

             	
             	<!-- icon -->

             	<?php 
                       $sql=$PDO->prepare("SELECT * FROM department");
                       $sql->execute();
                       foreach ($sql as $row) {
                       	echo '
                         <div class="col-md-4">
                        <div class="panel panel-default  " >
                         <div class="panel-heading">
                          <img src='.$row['img'].' class="img-responsive img-rounded ">
                         </div>
                         <div class="panel-body" >
                          <a href=course.php?id='.$row['id'].'  >
                          <div class="col-md-8">
                         
                          </div style="font-size: 30px; 

    font-family: "Fjalla One", sans-serif;
     font-family: "Abril Fatface", cursive;

    font-family: "Oleo Script", cursive;

    font-family: "Katibeh", cursive;

">
                        '.$row['dep_name'].'</a>
                         </div>
                        </div>
                        </div>
                       	';
                       }

                    	 ?>

             	
             </div>

			</div>
		</div>
	</section>
  
<footer class="footer">
	<div class="text-center" style="font-size: 30px; 

    font-family: 'Fjalla One', sans-serif;
     font-family: 'Abril Fatface', cursive;

    font-family: 'Oleo Script', cursive;

    font-family: 'Katibeh', cursive;

">
		
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>Sami.a.alanazi</h3>
	<h4>201315053</h4>
			</div>
		</div>
	</div>


</footer>

</div>
</body>
</html>