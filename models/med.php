<?php
require_once 'data.php';

	class Med
	{
		public function getMedDetail()
		{
			$database 		= new database();
			$queryString  	= "select * from med";
			$query 			= $database->pdo->prepare($queryString);
			$query->execute();
			return $query->fetchAll();
		}

		public function getMedDetailEach($med_id)
		{
			$database 		= new database();
			$queryString  	= "select * from med where med_id = ?";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$med_id);
			$query->execute();
			return $query->fetch();
		}

		public function updateMedDetails($med_id,$med_name,$med_cost,$med_quant)
		{
			$database 		= new database();
			$queryString  	= "update med set med_name = ?,med_cost= ?,med_quant = ? where med_id = ?";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$med_name);
			$query->bindValue(2,$med_cost);
			$query->bindValue(3,$med_quant);
			$query->bindValue(4,$med_id);

			$query->execute();
			return ;
		}

		public function insertNewValue($med_name,$med_cost,$med_quant)
		{
			$database 		= new database();
			$queryString  	= "insert into med (med_name,med_cost,med_quant) values(?,?,?)";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$med_name);
			$query->bindValue(2,$med_cost);
			$query->bindValue(3,$med_quant);
			$query->execute();
			return ;
		}

		public function deleteMed($med_id)
		{
			$database 		= new database();
			$queryString  	= "delete from med where med_id=?";
			$query 			= $database->pdo->prepare($queryString);
			$query->bindValue(1,$med_id);
			$query->execute();
			return ;
		}
	}

?>		