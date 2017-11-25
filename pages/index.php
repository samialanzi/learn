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

		<nav class="navbar navbar-default" style="background: #0AA5D1; padding: 5px;">
			<ul class="nav navbar-nav " style=" padding: 5px;">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">اقسام المكتبة </a>
                    <ul class="dropdown-menu">
                    	<?php 
                       $sql=$PDO->prepare("SELECT * FROM course");
                       $sql->execute();
                       foreach ($sql as $row) {
                       	echo '

                        <li>'.$row['course_name'].'</li>
                       	';
                       }

                    	 ?>
           
          </ul>

				</li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ادوات </a>

                 <ul class="dropdown-menu">
           <?php 
                       $sql=$PDO->prepare("SELECT * FROM `to` ");
                       $sql->execute();
                       foreach ($sql as $row) {
                       	echo '

                        <li>'.$row['tool_name'].'</li>
                       	';
                       }

                    	 ?>
          </ul>

				</li>
				
					<form class="navbar-form navbar-left ">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">بحث</button>
      </form>
				
				
			</ul>

		</nav>
	</header>

	<section>
		
		<div class="container ">
			
			<div>
				
             <div class="col-md-6">
             	
             	<!-- icon -->

             	<a href="#"></a>
             </div>

			</div>
		</div>
	</section>
  
<footer>
	

</footer>

</div>
</body>
</html>