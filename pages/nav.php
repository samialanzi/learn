<nav class="navbar navbar-default" style=" padding: 5px; ">
			<ul class="nav navbar-nav " style=" padding: 5px;">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">اقسام المكتبة </a>
                    <ul class="dropdown-menu">
                    	<?php 
                       $sql=$PDO->prepare("SELECT * FROM department");
                       $sql->execute();
                       foreach ($sql as $row) {
                       	echo '

                        <li "><a href=course.php?id='.$row['id'].'>'.$row['dep_name'].'</a></li>
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

                        <li><a href='.$row['path_tools'].'>'.$row['tool_name'].'</a></li>
                       	';
                       }

                    	 ?>
          </ul>

				</li>
				
					<!--<form class="navbar-form navbar-left ">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">بحث</button>
      </form>
				-->
				
			</ul>

		</nav>