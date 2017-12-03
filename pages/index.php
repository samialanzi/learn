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
			<div class="col-md-10">
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
                         
                          </div>
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
  
<footer>
	

</footer>

</div>
</body>
</html>