<?php
require_once 'data.php';

	class Cust
	{
		public function registration($cust_name,$cust_email,$cust_phone,$cust_add,$cust_password)
		{
			$database 		= new database();

			$queryString	= "insert into cust (cust_name,cust_email,cust_phone,cust_add,cust_password) values (?,?,?,?,?)";
			$query 			= $database->pdo->prepare($queryString);

			$query->bindValue(1,$cust_name);
			$query->bindValue(2,$cust_email);
			$query->bindValue(3,$cust_phone);
			$query->bindValue(4,$cust_add);
			$query->bindValue(5,$cust_password);
			$query->execute();

			return ;
		}

		public function loginCheck($cust_email,$cust_password)
		{
			$database 		= new database();

			$queryString  	= "select count(*) from cust where cust_email = ? and cust_password = ?";
			$query 			= $database->pdo->prepare($queryString);

			$query->bindValue(1,$cust_email);
			$query->bindValue(2,$cust_password);

			$query->execute();
			return $query->fetch();
		}

		public function custDetail($cust_id)
		{
			$database 		= new database();
			$queryString  	= "select * from cust where cust_id = ?";
			$query 			= $database->pdo->prepare($queryString);

			$query->bindValue(1,$cust_id);

			$query->execute();
			return $query->fetch();
		}

		public function returnCustId($cust_email)
		{
			$database	  	= new database();
			$queryString  	= "select cust_id from cust where cust_email = ?";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$cust_email);
			$query->execute();
			return $query->fetch();
		}
	}	
?>