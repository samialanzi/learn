<?php 


/**
* 
*/
class Connection 
{
 protected $PDO;	
	function __construct()
	{

$this->PDO=new PDO("mysql:host=localhost;dbname=learing","root","");



			}

}

$Co=new Connection();


?>